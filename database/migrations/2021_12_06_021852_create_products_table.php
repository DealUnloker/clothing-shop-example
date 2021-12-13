<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('img');
            $table->float('price');
            $table->boolean('hasXS')->default(false);
            $table->boolean('hasS')->default(false);
            $table->boolean('hasM')->default(false);
            $table->boolean('hasL')->default(false);
            $table->boolean('hasXL')->default(false);
            $table->boolean('hasXXL')->default(false);
            $table->foreignIdFor(\App\Models\Genders::class);
            $table->foreignIdFor(\App\Models\ProductType::class);
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
        Schema::dropIfExists('products');
    }
}
