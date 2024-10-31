<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->string('itmcode',50);
            $table->string('itmNm',100);
            $table->string('itmfakeNm',100);

            $table->integer('itmCatid');
            $table->foreign('itmCatid')->references('id')->on('item_categories');
            $table->double('itmDiff')->default(1);

            $table->string('itmUnit01');
            $table->string('itmUnit02');

            $table->double('start_unit')->default(1);

            $table->string('itmManu',10)->default('N');
            $table->string('itmImei',10)->default('N');
            $table->string('itm_ex_date',1)->default('N');

            $table->double('itm_vat');
            $table->double('itm_nbt');

            $table->string('itm_serial',5)->default('N');

            $table->double('itm_duedays');
            $table->double('itm_comi');
            $table->text('itm_type');
            $table->text('itm_bundle');
            $table->integer('itm_minStk');
            $table->text('itm_vendor');
            $table->integer('brand_id');
            $table->text('itm_currStk');
            $table->text('itm_disLvl');
            $table->integer('itm_commi');

            $table->text('itm_section');
            $table->text('itm_sl_pr1');
            $table->text('itm_cost');
            $table->text('itm_sl_pr2');
            $table->text('itm_wl_slPrc');
            $table->text('itm_wl_costPrc');


            $table->integer('inv_dis');
            $table->integer('pur_dis');

            $table->string('itmImage',50);

            $table->double('itm_width');
            $table->double('itm_height');
            $table->double('itm_depth');
            $table->double('itm_weight');

            $table->text('in_stock_des');
            $table->text('out_stock_des');
            $table->double('shipping_fee');
            
   
            $table->date('ad_expire_date');
            $table->text('warranty_period');

            $table->double('p_year');

            $table->string('itm_orgin',5);
            $table->string('req_pres',2)->default('N');

            $table->text('status');


            $table->integer('user_id');
            $table->date('rdate');
            $table->time('rtime');
            $table->integer('u_user_id');

            $table->string('assign_report',1)->default('Y');
            $table->string('sell_type',30)->default('Product');
            $table->string('autocode',length: 2)->default('Y');

            $table->text('img_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
