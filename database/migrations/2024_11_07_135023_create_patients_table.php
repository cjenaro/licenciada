<?php

use App\Models\User;
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
    Schema::create('patients', function (Blueprint $table) {
      $table->id();

      $table->foreignIdFor(User::class);

      $table->string('name');
      $table->string('email')->nullable();
      $table->date('date_of_birth');
      $table->string('phone_number');
      $table->enum('gender', ['M', 'F']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('patients');
  }
};
