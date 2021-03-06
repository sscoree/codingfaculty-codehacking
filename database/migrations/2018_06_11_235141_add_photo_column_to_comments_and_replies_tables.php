<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoColumnToCommentsAndRepliesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function(Blueprint $table) {
            $table->string('photo')->after('author');
        });

        Schema::table('replies', function(Blueprint $table) {
            $table->string('photo')->after('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function(Blueprint $table) {
            $table->dropColumn('photo');
        });

        Schema::table('replies', function(Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
}
