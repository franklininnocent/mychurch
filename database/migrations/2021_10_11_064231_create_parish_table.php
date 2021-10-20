<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parish', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parish_name')->nullable();
            $table->boolean('is_substation')->default(0)->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('place')->nullable();
            $table->string('post_code')->nullable();
            $table->string('district_name')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');
            $table->unsignedBigInteger('diocese_id')->nullable();
            $table->foreign('diocese_id')
                ->references('id')
                ->on('diocese')
                ->onDelete('cascade');
            $table->boolean('active')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('parish');
    }
}
