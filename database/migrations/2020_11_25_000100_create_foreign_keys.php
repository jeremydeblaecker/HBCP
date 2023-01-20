<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->foreign('person_id')
                ->references('id')
                ->on('person')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

	Schema::table('person', function (Blueprint $table) {
            $table->foreign('address_id')
                ->references('id')
                ->on('address')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
	Schema::table('manage', function (Blueprint $table) {
            $table->foreign('user_id')
		->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_type_id')
                ->references('id')
                ->on('user_type')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('player_id')
                ->references('id')
                ->on('player')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('team_id')
		->references('id')
                ->on('team')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
	Schema::table('team', function (Blueprint $table) {
            $table->foreign('season_id')
		->references('id')
                ->on('season')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('team_category_id')
                ->references('id')
                ->on('team_category')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('player_team', function (Blueprint $table) {
            $table->foreign('player_id')
                ->references('id')
                ->on('player')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('team_id')
                ->references('id')
                ->on('team')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('season_id')
                ->references('id')
                ->on('season')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('player', function (Blueprint $table) {
            $table->foreign('person_id')
                ->references('id')
                ->on('person')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('matchs', function (Blueprint $table) {
            $table->foreign('team_id')
                ->references('id')
                ->on('team')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('address_id')
                ->references('id')
                ->on('address')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }
}
