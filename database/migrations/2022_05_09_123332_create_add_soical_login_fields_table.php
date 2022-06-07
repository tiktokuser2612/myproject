<?php

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
        // Schema::create('add_soical_login_fields', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::table('users', function ($table) {
            $table->string('social_id')->nullable();
            $table->string('social_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('add_soical_login_fields');
        Schema::table('users', function ($table) {
            $table->dropColumn('social_id');
           $table->dropColumn('social_type');
         });
    }
};
