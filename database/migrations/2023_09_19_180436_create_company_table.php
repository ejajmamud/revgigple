<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (Schema::hasTable('company')) {
            return;
        }

        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->comment('users.id,client');
            $table->string('company_name', 255);
			$table->string('company_logo', 255)->default(null)->nullable();
            $table->integer('company_type')->default(0)->comment('companycategories.id,company');
            $table->string('no_of_employees', 255)->default(null)->nullable();
            $table->integer('industry')->default(0)->comment('companycategories.id,industry');
			$table->integer('private')->nullable()->default(0);
            $table->longText("location")->default(null)->nullable();
			$table->integer('states')->default(0);
            $table->longText("web_address")->default(null)->nullable();
            $table->longText("crn")->default(null)->nullable()->comment('custome reference no');
            $table->longText("company_desc")->default(null)->nullable();
			$table->longText('timezone')->default(null)->nullable();
			$table->longText("payment_currency")->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('company');
    }

}