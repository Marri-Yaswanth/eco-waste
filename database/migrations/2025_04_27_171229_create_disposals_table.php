<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('disposals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transportation_id'); // unsignedBigInteger !!
            $table->string('disposal_site');
            $table->date('disposal_date');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('transportation_id')
                ->references('id')
                ->on('transportations')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disposals');
    }
};
