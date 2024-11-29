<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('type_id')->references('type_id')->on('types');
            $table->string('name');
            $table->timestamps();
        });

       Product::create([
            'type_id' => 1,
            'name' => 'Teszt Termék1', 
        ]);

        Product::create([
            'type_id' => 2,
            'name' => 'Teszt Termék2', 
        ]);

        
        Product::create([
            'type_id' => 3,
            'name' => 'Teszt Termék3', 
        ]);

        Product::create([
            'type_id' => 4,
            'name' => 'Teszt Termék4', 
        ]);

        Product::create([
            'type_id' => 5,
            'name' => 'Teszt Termék5', 
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
