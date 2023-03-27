<?php

use App\Models\User;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('CourseName');
            $table->string('CourseLink');
            $table->string('CourseLogo')->nullable();
            $table->string('CourseDesc')->nullable();
            $table->double('CoursePrice')->nullable();
            $table->boolean('IsFree')->default(1);
            $table->string('CourseType_id');
            $table->foreignId('Course_user_id')->constrained('users','id');
            $table->integer('Qty')->default(0);
            $table->integer('FullQty')->default(0);
            $table->boolean('State')->default(0);
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
        Schema::dropIfExists('courses');
    }
};
