<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',125)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('img_path')->nullable();
            $table->string('password');
            $table->string('str_password', 100)->nullable();
            $table->string('country_code', 20)->nullable();
            $table->string('mobile_number', 20)->nullable();
            $table->smallInteger('status')->default(1);
            $table->string('login_otp', 255)->nullable();
            $table->timestamp('otp_created_at')->default(DB::raw('CURRENT_TIMESTAMP')); 
            $table->enum('is_updated', array('0','1'))->nullable()->default('0');
            $table->text('message', 65535)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
