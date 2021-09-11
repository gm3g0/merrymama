<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTelToMembersTable extends Migration
{
   
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('tel',20)->change();
        });
    }

    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            //
        });
    }
}
