<?php

namespace Database\Factories;

use App\Models\ItemCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'itmcode'       => $this->faker->unique()->uuid(),
            'itmNm'         => $this->faker->realText(30),
            'itmfakeNm'     => '1',

            'itmCatid'      => ItemCategory::inRandomOrder()->first()->id,
            // 'itmDiff'       => $this->faker->numberBetween(1,0),

            'itmUnit01'     => '1',
            'itmUnit02'     => '2',

            // 'start_unit'    => $this->faker->numberBetween(1,0),

            // 'itmManu'       => $this->faker->numberBetween(1,0),
            // 'itmImei'       => $this->faker->numberBetween(1,0),
            // 'itm_ex_date'   => $this->faker->numberBetween(1,0),

            'itm_vat'       => 0,
            'itm_nbt'       => 0,

            // 'itm_serial'    => $this->faker->numberBetween(1,0),

            'itm_duedays'   => 0,
            'itm_comi'      => 0,
            'itm_type'      => 'Food',
            'itm_bundle'    => 'Product',
            'itm_minStk'    => 0,
            'itm_vendor'    => 'A',
            'brand_id'      => 0,
            'itm_currStk'   => $this->faker->numberBetween(1,200),
            'itm_disLvl'    => 'LEVEL 1',
            'itm_commi'     => 0,

            'itm_section'   => 'SECTION A',
            'itm_sl_pr1'    => $this->faker->numberBetween(500,5000),
            'itm_cost'      => 0,
            'itm_sl_pr2'    => $this->faker->numberBetween(500,5000),
            'itm_wl_slPrc'  => $this->faker->numberBetween(500,5000),
            'itm_wl_costPrc'=> $this->faker->numberBetween(500,5000),

            'inv_dis'       => '0',
            'pur_dis'       => '0',

            'itmImage'      => '0',

            'itm_width'     => 0,
            'itm_height'    => 0,
            'itm_depth'    => 0,
            'itm_weight'    => 0,

            'in_stock_des'  => $this->faker->numberBetween(1,0),
            'out_stock_des' => $this->faker->numberBetween(1,0),
            'shipping_fee'  => 0,

            'ad_expire_date'=> 0,
            'warranty_period'=> $this->faker->numberBetween(0,5),

            'p_year'        => 0,

            'itm_orgin'     => 'India',
            // 'req_pres'      => $this->faker->numberBetween(1,0),

            'status'        => 'Y',

            'user_id'       => 1,
            'rdate'         => $this->faker->date(),
            'rtime'         => $this->faker->time(),
            'u_user_id'     => 0,

            // 'assign_report' => $this->faker->numberBetween(1,0),
            // 'sell_type'     => $this->faker->numberBetween(1,0),
            // 'autocode'      => $this->faker->numberBetween(1,0),

            'img_url'       => '0',
        ];
    }
}
