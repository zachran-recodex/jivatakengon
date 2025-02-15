<?php

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('name');
            $table->json('glamping'); // Menyimpan status glamping dalam format JSON
            $table->json('villa'); // Menyimpan status villa dalam format JSON
            $table->integer('tent')->nullable()->default(null); // Default NULL jika tidak diisi
            $table->integer('total_tents')->nullable()->default(null); // Default NULL jika tidak diisi
            $table->decimal('dp', 10, 2)->nullable()->default(null); // Default NULL jika tidak diisi
            $table->date('transfer_date')->nullable()->default(null); // Default NULL jika tidak diisi
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
