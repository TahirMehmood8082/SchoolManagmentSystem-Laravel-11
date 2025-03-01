<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->string('phone_number')->nullable()->after('school_id');
            $table->unsignedBigInteger('principal_id')->nullable()->after('phone_number');
            $table->string('branch_code')->nullable()->unique()->after('principal_id');

            $table->foreign('principal_id')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropForeign(['principal_id']);
            $table->dropColumn('phone_number');
            $table->dropColumn('principal_id');
            $table->dropColumn('branch_code');
        });
    }
}
