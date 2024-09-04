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
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->decimal('quantidade',10,2);

            $table->foreignId('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos'); 

            $table->foreignId('id_fornecedor');
            $table->foreign('id_fornecedor')->references('id')->on('fornecedores'); 
            
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
        Schema::dropIfExists('produtos');
    }
};
