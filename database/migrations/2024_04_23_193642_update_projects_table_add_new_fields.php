<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('owner_name');
            $table->date('contract_start_date');
            $table->date('contract_end_date');
            $table->date('warranty_start_date');
            $table->date('warranty_end_date');
            $table->integer('contract_value');
            $table->string('business_scheme');
            $table->string('funding_source');
            $table->string('business_line');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'owner_name',
                'contract_start_date',
                'contract_end_date',
                'warranty_start_date',
                'warranty_end_date',
                'contract_value',
                'business_scheme',
                'funding_source',
                'business_line'
            ]);
        });
    }
};
