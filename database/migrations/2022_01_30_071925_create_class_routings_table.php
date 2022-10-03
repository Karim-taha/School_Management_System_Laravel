<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_routings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("level_id")->nullable()->constrained("levels");
            $table->foreignId("grade_id")->nullable()->constrained("grades");
            $table->foreignId("class_id")->nullable()->constrained("classes");
            $table->foreignId("session_id")->nullable()->constrained("sessions");
            $table->foreignId("subject_id")->nullable()->constrained("subjects");
            $table->foreignId("day_id")->nullable()->constrained("days");
            $table->foreignId("shift_id")->nullable()->constrained("shifts");
            $table->foreignId("time_id")->nullable()->constrained("times");
            $table->foreignId("section_id")->nullable()->constrained("sections");
            $table->foreignId("user_id")->nullable()->constrained("users");
            $table->boolean("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_routings');
    }
}
