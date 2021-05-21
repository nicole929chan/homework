<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->comment('物品類型');
            $table->foreignId('box_id')->comment('箱子');
            $table->string('place')->comment('拾獲地點');
            $table->string('image01')->nullable('物品照片');
            $table->string('description')->nullable()->comment('說明');
            $table->string('contact_name')->nullable()->comment('拾獲聯絡人');
            $table->string('contact_email')->nullable()->comment('拾獲聯絡人郵件');
            $table->string('contact_phone_number')->nullable()->comment('拾獲聯絡人手機');
            $table->datetime('pickup_at')->nullable()->comment('拾獲時間');
            $table->datetime('finished_at')->nullable()->comment('領取時間');
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
        Schema::dropIfExists('items');
    }
}
