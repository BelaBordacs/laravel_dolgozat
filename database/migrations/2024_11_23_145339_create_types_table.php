<?php

use App\Models\Type;
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
        Schema::create('types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->string('description');
            $table->integer('cost')->default(0);
            $table->timestamps();
        });

        Type::create([
            'name' => 'TesztTípus1', 
            'description' => 'Teszt Leírás1', 
            'cost' => '100',
        ]);

        Type::create([
            'name' => 'TesztTípus2', 
            'description' => 'Teszt Leírás2', 
            'cost' => '200',
        ]);
        Type::create([
            'name' => 'TesztTípus3', 
            'description' => 'Teszt Leírás3', 
            'cost' => '300',
        ]);
        Type::create([
            'name' => 'TesztTípus4', 
            'description' => 'Teszt Leírás4', 
            'cost' => '400',
        ]);
        Type::create([
            'name' => 'TesztTípus5', 
            'description' => 'Teszt Leírás5', 
            'cost' => '500',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
