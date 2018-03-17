<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteShopUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_name');
            $table->string('permanent_token');
            $table->string('database_name');
            $table->boolean('is_active')->default(1);
            $table->enum('payment_status',['pending', 'accepted', 'declined', 'expired']);
            $table->string('new_hooks')->default('none');
            $table->string('version')->default(0.2);
            $table->string('cancel_rac')->default(0);
            $table->string('queue_command')->default('none');
            $table->string('is_transfe')->default(0);
            $table->datetime('db_deleted_at')->nullable();
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
        Schema::dropIfExists('shop_users');
    }
}
