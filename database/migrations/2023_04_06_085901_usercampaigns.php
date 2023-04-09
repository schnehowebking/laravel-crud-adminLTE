<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usercampaigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercampaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');
            $table->string('list');
            $table->integer('sent');
            $table->enum('status', ['draft', 'sent'])->default('draft');
            $table->timestamps();
        });


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usercampaigns');
        //
    }
}
