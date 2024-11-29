<?php

use App\Models\Basket;
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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id('basket_id');
            $table->date('date');
            $table->foreignId('item_id')->references('item_id')->on('products');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Basket::create([
            'item_id' => 1,
            'user_id' => 1  ,
            'date' => '2024.11.23',
        ]);

        Basket::create([
            'item_id' => 2,
            'user_id' => 2  ,
            'date' => '2024.11.23',
        ]);

        Basket::create([
            'item_id' => 3,
            'user_id' => 3,
            'date' => '2024.11.23',
        ]);
        
        Basket::create([
            'item_id' => 4,
            'user_id' => 4,
            'date' => '2024.11.23',
        ]);
        
        Basket::create([
            'item_id' => 5,
            'user_id' => 5,
            'date' => '2024.11.23',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets');
    }
};
