<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->decimal('amount', 10, 2);

            // ENUM final (tanpa midtrans)
            $table->enum('payment_method', ['manual_transfer', 'cash', 'qris', 'transfer'])
                ->default('manual_transfer');

            $table->enum('payment_type', ['dp', 'remaining', 'full']);
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');

            // Manual transfer fields
            $table->string('proof_image')->nullable();
            $table->text('rejected_reason')->nullable();

            $table->string('paid_by')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

            // Indexes
            $table->index('booking_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};