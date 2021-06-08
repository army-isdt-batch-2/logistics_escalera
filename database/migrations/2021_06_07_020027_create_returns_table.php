<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id')->index();
            $table->string('returned_by');
            $table->string('returned_by_contact');
            $table->integer('quantity');
            $table->string('reason');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('assets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returns');
    }
}
