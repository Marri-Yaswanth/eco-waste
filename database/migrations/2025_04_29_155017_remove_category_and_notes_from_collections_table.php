<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCategoryAndNotesFromCollectionsTable extends Migration
{
    public function up()
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->dropColumn('notes');
        });
    }

    public function down()
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->string('category');
            $table->text('notes')->nullable();
        });
    }
}
