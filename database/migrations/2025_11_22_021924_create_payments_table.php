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
            $table->enum('payment_method', ['midtrans', 'cash', 'qris', 'transfer']);
            $table->enum('payment_type', ['dp', 'remaining', 'full']);
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');

            // Midtrans fields
            $table->string('midtrans_order_id')->nullable();
            $table->string('midtrans_transaction_id')->nullable();
            $table->string('midtrans_payment_type')->nullable(); // bank_transfer, gopay, dll

            $table->string('paid_by')->nullable(); // 'customer' atau 'admin_name'
            $table->text('notes')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

            // Indexes
            $table->index('booking_id');
            $table->index('midtrans_order_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
