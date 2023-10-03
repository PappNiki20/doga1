<?php

use App\Models\Airlines;
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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id('airline_id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });
        Airlines::create(['name' => "Leila", 'country' => 'Dorog', ]);
        Airlines::create(['name' => "Zoé", 'country' => 'Soroksár', ]);
        Airlines::create(['name' => "Szandra", 'country' => 'Nagytétény', ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
