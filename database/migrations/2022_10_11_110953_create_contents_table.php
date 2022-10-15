<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->comment('标题');
            $table->string('author')->nullable()->comment('作者');
            $table->text('content')->comment('内容');
            $table->string('thumb')->comment('缩略图');
            $table->integer('click')->comment('查看次数');
            $table->unsignedBigInteger('category_id')->comment('栏目');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->tinyInteger('iscommend')->default(1)->comment('是否推荐');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
