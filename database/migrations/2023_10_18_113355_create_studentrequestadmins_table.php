<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('studentrequestadmins', function (Blueprint $table) {
            $table->id("Student_Id");
            $table->string('StudentName');
            $table->string('FatherName');
            $table->string('Class');
            $table->string('grno');
            $table->string('whatapp');
            $table->string('FatherNo');
            $table->string('MotherNO');
            $table->string('EmergencyNo');
            $table->date('DateOfBirth');
            $table->date('DateOfAddmission');
            $table->integer('AddmissionFee');
            $table->integer('reqistration');
            $table->integer('annual');
            $table->integer('MonthlyFee');
            $table->integer('Discount')->default(0);
            $table->string('FinalPrice');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentrequestadmins');
    }
};
