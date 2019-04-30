
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Halls', function (Blueprint $table) {
            $table->String('Id');
            $table->String('HallName',60);
            $table->String('Admin',80);
            $table->decimal('Contact',20,0);
            $table->decimal('Space');
            $table->String('Address');	
            $table->longText('Description');
            #$table->longText('Paths');
            $table->String('Email',254 );
            $table->String('Branch',50 );
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
        Schema::dropIfExists('Halls');
    }
}
