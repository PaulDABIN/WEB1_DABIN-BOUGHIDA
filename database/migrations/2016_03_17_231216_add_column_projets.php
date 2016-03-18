<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddColumnProjets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projets', function (Blueprint $table) {
            /*$table->string('projet')->after('id');
            $table->string('nom')->after('id');
            $table->string('prenom')->after('id');
            $table->string('fonction')->after('id');
            $table->string('email')->after('id');
            $table->string('adresse')->after('id');
            $table->integer('tel')->after('id'); */

            $table->longText('identite')->after('id');



        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //$table->dropIfExists('user_id');

            $table->longText('identite')->after('id');
        });
    }
}