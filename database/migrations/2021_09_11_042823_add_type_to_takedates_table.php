<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToTakedatesTable extends Migration
{
    public function up()
    {
        Schema::table('takedates', function (Blueprint $table) {
            $table->string('week',10);
        });
    }

    public function down()
    {
        Schema::table('takedates', function (Blueprint $table) {
            //
        });
    }
}
