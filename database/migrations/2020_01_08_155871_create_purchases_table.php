<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("purchases", function (Blueprint $table) {
            $table->increments("id");
			$table->text("cart");
			$table->boolean("ra");
			$table->string("address");
			$table->string("address1")->nullable();
			$table->string("country");
			$table->string("phone");
			$table->string("zip_code");
			$table->string("status");
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
        Schema::drop("purchases");
    }

}
