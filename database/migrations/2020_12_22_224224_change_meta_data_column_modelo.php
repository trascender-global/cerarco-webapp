<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMetaDataColumnModelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->longText('metadata_modelo')->nullable()->after('codigo');
            $table->longText('metadata_forma')->nullable()->after('metadata_modelo');
            $table->longText('metadata_decorativa')->nullable()->after('metadata_forma');
            $table->longText('metadata_arqueometrica')->nullable()->after('metadata_decorativa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->dropColumn(['metadata_modelo','metadata_forma','metadata_decorativa','metadata_arqueometrica']);
        });
    }
}
