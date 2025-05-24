<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Schema::create('collections', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('location');
        //     $table->string('category');
        //     $table->decimal('quantity', 8, 2); // quantity of items
        //     $table->text('notes')->nullable();
        //     $table->timestamps();
        // });

        return new class extends Migration {
            public function up(): void {
                Schema::create('collections', function (Blueprint $table) {
                    $table->id();
                    $table->string('location');
                    $table->string('waste_type');
                    $table->float('quantity')->nullable();
                    $table->date('collected_date');
                    $table->string('collector')->nullable();
                    $table->timestamps();
                });
            }
        
            public function down(): void {
                Schema::dropIfExists('collections');
            }
        };
    }

};
