<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes_sets', function (Blueprint $table) {
            $table->ForeignId('dish_id')->constrained('dishes');
            $table->ForeignId('set_id')->constrained('sets')->cascadeOnDelete();
            $table->primary(['dish_id','set_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes_sets');
    }
}
