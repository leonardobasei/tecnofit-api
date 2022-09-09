<?php

use App\Models\PersonalRecord;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_records', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('movement_id');
            $table->float('value');
            $table->dateTime('date');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movement_id')->references('id')->on('movements');
        });

        PersonalRecord::insert([
            [
                'user_id' => 1,
                'movement_id' => 1,
                'value' => 100.0,
                'date' => '2021-01-01 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 1,
                'value' => 180.0,
                'date' => '2021-01-02 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 1,
                'value' => 150.0,
                'date' => '2021-01-03 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 1,
                'value' => 110.0,
                'date' => '2021-01-04 00:00:00.0'
            ],
            [
                'user_id' => 2,
                'movement_id' => 1,
                'value' => 110.0,
                'date' => '2021-01-04 00:00:00.0'
            ],
            [
                'user_id' => 2,
                'movement_id' => 1,
                'value' => 140.0,
                'date' => '2021-01-05 00:00:00.0'
            ],
            [
                'user_id' => 2,
                'movement_id' => 1,
                'value' => 190.0,
                'date' => '2021-01-06 00:00:00.0'
            ],
            [
                'user_id' => 3,
                'movement_id' => 1,
                'value' => 170.0,
                'date' => '2021-01-01 00:00:00.0'
            ],
            [
                'user_id' => 3,
                'movement_id' => 1,
                'value' => 120.0,
                'date' => '2021-01-02 00:00:00.0'
            ],
            [
                'user_id' => 3,
                'movement_id' => 1,
                'value' => 130.0,
                'date' => '2021-01-03 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 2,
                'value' => 130.0,
                'date' => '2021-01-03 00:00:00.0'
            ],
            [
                'user_id' => 2,
                'movement_id' => 2,
                'value' => 130.0,
                'date' => '2021-01-03 00:00:00.0'
            ],
            [
                'user_id' => 3,
                'movement_id' => 2,
                'value' => 125.0,
                'date' => '2021-01-03 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 2,
                'value' => 110.0,
                'date' => '2021-01-05 00:00:00.0'
            ],
            [
                'user_id' => 1,
                'movement_id' => 2,
                'value' => 100.0,
                'date' => '2021-01-01 00:00:00.0'
            ],
            [
                'user_id' => 2,
                'movement_id' => 2,
                'value' => 120.0,
                'date' => '2021-01-01 00:00:00.0'
            ],
            [
                'user_id' => 3,
                'movement_id' => 2,
                'value' => 120.0,
                'date' => '2021-01-01 00:00:00.0'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_records');
    }
};
