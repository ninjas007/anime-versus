<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_vote', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_vote'); // contoh vote 1, 5, 10, 15, dll/ jadi nanti voter akan ambil id aja. dan bisa teratur vote brapa aja, 1 kah? 5 kah? atau lainnya
            $table->text('description')->nullable(); // penjelasan 1 itu gratis, 5 itu bayar 5000, dst
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_vote');
    }
}
