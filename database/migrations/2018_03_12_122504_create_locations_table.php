<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
         
               $table->string('name');
                $table->string('country');
              $table->string('state');
         $table->string('city');
       $table->string('address');
        $table->integer('postal_code');
                $table->integer('phone');
                     $table->integer('fax');
                $table->string('notes');
                   $table->rememberToken();
            $table->timestamps();       
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
