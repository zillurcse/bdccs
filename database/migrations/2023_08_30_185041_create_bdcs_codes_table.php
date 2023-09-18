<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBdcsCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdcs_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->date('issue_date');
            $table->date('expire_date');
            $table->string('seller_name');
            $table->string('seller_address');
            $table->string('seller_phone');
            $table->string('seller_email')->nullable();
            $table->string('seller_nid')->nullable();
            $table->string('seller_trade_license')->nullable();
            $table->string('seller_tin')->nullable();
            $table->string('seller_passport')->nullable();
            $table->string('seller_photo')->nullable();
            $table->string('business_type')->default('local');
            $table->string('business_name')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('business_email')->nullable();
            $table->string('nid_file')->nullable();
            $table->string('trade_license_file')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('is_approved', ['approved', 'pending'])->default('pending');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('updated_by')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bdcs_codes');
    }
}
