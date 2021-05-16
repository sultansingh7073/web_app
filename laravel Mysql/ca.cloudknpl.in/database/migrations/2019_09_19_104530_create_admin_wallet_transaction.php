<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminWalletTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_wallet_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_id',255)->default(null);
            $table->string('deposit_amt',254)->default(null);
            $table->string('withdrawal_amt',254)->default(null);
            $table->string('doc_name',254)->default(null);
            $table->string('doc_id',254)->default(null);
            $table->string('date',254)->default(null);
            $table->string('time',254)->default(null);
            $table->string('user_name',254)->default(null);
            $table->string('remark',254)->default(null);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_wallet_transactions');
    }
}
