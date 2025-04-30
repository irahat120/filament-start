<?php

use App\Models\User;
use App\Models\Categories;
use function Laravel\Prompts\table;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignIdFor(Categories::class);
            $table->string('color');
            $table->text('content');
            $table->json('hobbys');
            $table->string('images')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
