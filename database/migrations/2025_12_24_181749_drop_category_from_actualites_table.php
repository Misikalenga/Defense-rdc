<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCategoryFromActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('actualites', 'category')) {
            Schema::table('actualites', function (Blueprint $table) {
                $table->dropColumn('category');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (! Schema::hasColumn('actualites', 'category')) {
            Schema::table('actualites', function (Blueprint $table) {
                $table->string('category')->nullable();
            });
        }
    }
}
