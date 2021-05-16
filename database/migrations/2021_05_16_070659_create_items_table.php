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
            $table->string('category_slug')->comment('物品類型代碼');
            $table->string('box_slug')->comment('箱子代碼');;
            $table->text('description')->nullable()->comment('拾獲說明');
            $table->string('contact_name')->nullable()->comment('拾獲聯絡人');
            $table->string('contact_email')->nullable()->comment('拾獲聯絡人郵件');
            $table->string('contact_phone_number')->nullable()->comment('拾獲聯絡人手機');
            $table->datetime('finished_at')->nullable()->comment('結案時間');
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
