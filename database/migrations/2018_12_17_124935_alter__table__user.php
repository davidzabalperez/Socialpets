<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('age')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('race')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('race');
        });
    }
}
