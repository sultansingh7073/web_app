<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientApplyDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_document', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc_name');
            $table->string('doc_type_id')->default('Null');
            $table->string('client_id')->default('NULL');
            //$table->string('doc_request_date')->default(null);
            //$table->string('doc_publish_date')->default(null);
            //$table->string('doc_url')->default(null);
            $table->string('type');
            //$table->string('published_url')->default(null);
            //$table->string('is_doc_urgent')->default(null);
            //$table->string('status')->default('yes');
            //$table->string('urgent')->default(null);
            //$table->string('isdeleted')->default(null);
            $table->timestamp('doc_request_date')->useCurrent();
            //$table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_document');
    }
}
