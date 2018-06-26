<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsHasArticlesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tags_has_articles';

    /**
     * Run the migrations.
     * @table tags_has_articles
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('tags_id')->nullable();
            $table->unsignedInteger('articles_id')->nullable();

            $table->index(["articles_id"], 'fk_tags_has_articles_articles1_idx');

            $table->index(["tags_id"], 'fk_tags_has_articles_tags1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('tags_id', 'fk_tags_has_articles_tags1_idx')
                ->references('id')->on('tags')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('articles_id', 'fk_tags_has_articles_articles1_idx')
                ->references('id')->on('articles')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
