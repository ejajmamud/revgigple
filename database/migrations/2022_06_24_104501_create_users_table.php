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
    // public function up()
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('uid', 20)->unique();
    //         $table->string('username', 60)->unique();
    //         $table->string('email', 60)->unique();
    //         $table->timestamp('email_verified_at')->nullable();
    //         $table->string('password', 60)->nullable();
    //         $table->enum('account_type', ['seller', 'buyer'])->default('buyer');
    //         $table->unsignedBigInteger('avatar_id')->nullable();
    //         $table->unsignedBigInteger('level_id')->nullable();
    //         $table->string('provider_name', 60)->nullable();
    //         $table->string('provider_id', 60)->nullable();
    //         $table->unsignedBigInteger('country_id')->nullable();
    //         $table->string('fullname', 60)->nullable();
    //         $table->string('headline', 100)->nullable();
    //         $table->text('description')->nullable();
    //         $table->enum('status', ['active', 'pending', 'verified', 'banned'])->default('pending');
    //         $table->string('balance_net', 20)->default(0);
    //         $table->string('balance_withdrawn', 20)->default(0);
    //         $table->string('balance_purchases', 20)->default(0);
    //         $table->string('balance_pending', 20)->default(0);
    //         $table->string('balance_available', 20)->default(0);
    //         $table->rememberToken();
    //         $table->softDeletes();
    //         $table->timestamp('last_activity')->nullable();
    //         $table->timestamps();

    //         $table->foreign('avatar_id')->references('id')->on('file_manager')->onUpdate('no action')->onDelete('no action');
    //         $table->foreign('level_id')->references('id')->on('levels')->onUpdate('no action')->onDelete('no action');
    //         $table->foreign('country_id')->references('id')->on('countries')->onUpdate('no action')->onDelete('no action');

    //     });
    // }



    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_type', 50)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('profile_img', 255)->collation('utf8mb4_unicode_ci')->notNullable();
            
            
            $table->string('ssm_document', 255)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('company_name', 60)->collation('utf8mb4_unicode_ci')->nullable();
            
            
            
            $table->string('first_name', 255)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('last_name', 255)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('email', 191)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('contact_no', 191)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('password', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('is_test_data_enabled')->default(0);
            $table->unsignedSmallInteger('parent_id')->default(0);
            $table->integer('is_login')->default(0);
            $table->integer('is_private')->default(0);
            $table->integer('is_deleted')->default(0);
            $table->string('remember_token', 100)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('token', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('password_expired_token', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('sq1')->default(0);
            $table->string('ans1', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->integer('sq2')->default(0);
            $table->string('ans2', 255)->collation('utf8mb4_unicode_ci')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('previous_login', 191)->collation('utf8mb4_unicode_ci')->default(0);
            $table->datetime('consented_at')->nullable();
            $table->timestamp('resend_at')->nullable();
            $table->text('note')->collation('utf8mb4_unicode_ci');
            $table->string('uid', 20)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->string('username', 60)->collation('utf8mb4_unicode_ci')->notNullable();
            $table->enum('account_type', ['seller', 'buyer'])->collation('utf8mb4_unicode_ci')->default('buyer');
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->string('provider_name', 60)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('provider_id', 60)->collation('utf8mb4_unicode_ci')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            // $table->string('city', 60)->collation('utf8mb4_unicode_ci')->nullable();
            // $table->string('timezone', 60)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('fullname', 60)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('headline', 100)->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('description')->collation('utf8mb4_unicode_ci');
            $table->enum('status', ['active', 'pending', 'verified', 'banned'])->collation('utf8mb4_unicode_ci')->default('pending');
            $table->string('balance_net', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('balance_withdrawn', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('balance_purchases', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('balance_pending', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->string('balance_available', 20)->collation('utf8mb4_unicode_ci')->default('0');
            $table->timestamp('last_activity')->nullable();
            $table->tinyInteger('active_status')->default(0);

            $table->foreign('avatar_id')->references('id')->on('avatars')->onUpdate('no action')->onDelete('no action');
            
           
            
            $table->boolean('isAvatar')->default(true);
            
            $table->boolean('isguestAvatar')->default(true);
            $table->foreign('level_id')->references('id')->on('levels')->onUpdate('no action')->onDelete('no action');
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('no action')->onDelete('no action');
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
};

