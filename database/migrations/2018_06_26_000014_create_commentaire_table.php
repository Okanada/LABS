<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'commentaire';

    /**
     * Run the migrations.
     * @table commentaire
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->string('titre', 45);
            $table->string('image', 45)->nullable();
            $table->string('texte', 45);
            $table->unsignedInteger('articles_id');
            $table->unsignedInteger('articles_categorie_id');

            $table->index(["articles_id", "articles_categorie_id"], 'fk_commentaire_articles1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('articles_id', 'fk_commentaire_articles1_idx')
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
