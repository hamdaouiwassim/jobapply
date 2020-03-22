<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesstagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandesstages', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->integer("userid");
            $table->integer("societeid");
            $table->string("stat")->default("EN ATTENTE");
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
        Schema::dropIfExists('_demandesstages');
    }
}
