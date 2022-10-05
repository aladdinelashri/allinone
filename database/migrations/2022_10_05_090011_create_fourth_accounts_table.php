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
        Schema::create('fourth_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('third_account_id')->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->boolean('IsActive')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fourth_accounts');
    }
};
