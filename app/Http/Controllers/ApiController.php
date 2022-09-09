<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\PersonalRecord;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index(int $movement_id): JsonResponse
    {
        $code = 200;
        $movement = Movement::where('id', $movement_id)->first();

        if (!$movement) {
            return response()->json([
                "message" => "Movement not found"
            ], 404);
        }

        $users = PersonalRecord::select('users.name', DB::raw('MAX(personal_records.value) as value'), DB::raw('RANK() OVER (ORDER BY value DESC) rank'), 'date')
            ->join('users', 'users.id', 'personal_records.user_id')
            ->where("movement_id", $movement_id)
            ->orderBy('value', 'desc')
            ->groupBy('user_id')
            ->get();

        if (!$users->count()) {
            $code = 202;
        }

        return response()->json([
            "success" => [
                "movement" => $movement["name"],
                "users" => $users
            ]
        ], $code);
    }
}
