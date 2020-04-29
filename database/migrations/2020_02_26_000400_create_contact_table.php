<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Contact;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->default('public/default.jpg');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        Contact::insert([
            'title' => 'Titulo',
            'subtitle' => 'Sub-Titulo',
            'address' => 'Direccion',
            'phone' => '+00 000-00-00-00',
            'email' => 'example@example.com'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
