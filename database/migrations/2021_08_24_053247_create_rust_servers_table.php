<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRustServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rust_servers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->ipAddress("ip");
            $table->integer("port");
            $table->integer("rcon_port");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rust_servers');
    }
}
