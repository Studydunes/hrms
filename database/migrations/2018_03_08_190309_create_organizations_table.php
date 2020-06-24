<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
             $table->increments('id');
               $table->string('name');
             $table->integer('number_of_employees');
            $table->string('email')->unique();
            $table->integer('phone');
             $table->string('address_sheet1');
              $table->string('city');
               $table->integer('postal_code');
                $table->string('note');
                 $table->integer('tax_id');
                  $table->integer('registration_number');
                   $table->integer('fax');
                    $table->string('address_sheet2');
                     $table->string('state');
                      $table->string('country');
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
        Schema::drop('organizations');
    }
}
