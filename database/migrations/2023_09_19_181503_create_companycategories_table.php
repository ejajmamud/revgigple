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
        Schema::create('companycategories', function (Blueprint $table) {
           
            
            $table->increments("id");
            $table->string("category_type", 50)->default(null);
            $table->string("title", 255)->default(null);
            $table->longText("description")->default(null)->nullable();
            $table->integer("status")->default(0);
            $table->integer("parent_id")->default(0);
            $table->integer("order_id")->default(0);
            $table->integer("is_deleted")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companycategories');
    }
};
