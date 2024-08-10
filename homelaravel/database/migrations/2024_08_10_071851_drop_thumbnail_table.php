<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropThumbnailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('thumbnail');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Nếu muốn khôi phục bảng khi chạy lại migration, hãy đặt lại cấu trúc bảng ở đây.
        Schema::create('thumbnail', function (Blueprint $table) {
            $table->id();
            // Thêm các cột cần thiết cho bảng ở đây.
        });
    }
}
