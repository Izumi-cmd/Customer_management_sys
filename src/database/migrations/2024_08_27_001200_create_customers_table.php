<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('shop_id')->comment('店舗ID');
            $table->string('name')->comment('顧客名');
            $table->string('postal_code')->comment('郵便番号');
            $table->string('address')->comment('住所');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->date('birthday')->nullable()->comment('誕生日');
            $table->string('phone')->nullable()->comment('電話番号');
            $table->boolean('kramer_flag')->default(false)->comment('クレーマーフラグ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
