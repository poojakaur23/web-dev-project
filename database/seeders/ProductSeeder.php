<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //            $table->string('name');
        // $table->string('price');
        // $table->string('category');
        // $table->string('size');
        // $table->string('description');
        // $table->string('gallery');
        DB::table('products')->insert([
            [
                'name'=>'Criss Cross Backless Ruched Cami Dress',
                'price'=>'7.99',
                'category'=>'dress',
                'size'=>'One size',
                'description'=>'Criss Cross Backless Ruched Cami Dress',
                'gallery'=>'https://img.ltwebstatic.com/images3_pi/2021/05/31/1622436214ed5407550f8a91c5f7b6149658754345_thumbnail_900x.webp'
    
            ],[
                'name'=>'SHEIN Ruched Drawstring Side Marble Bodycon Dress',
                'price'=>'5.99',
                'category'=>'dress',
                'size'=>'One size',
                'description'=>'SHEIN Ruched Drawstring Side Marble Bodycon Dress',
                'gallery'=>'https://img.ltwebstatic.com/images3_pi/2021/04/25/1619328075cacfe329d01150abcd578cf95e99ecf6.webp'
    
            ],[
                'name'=>'Minimalist Flap Chain Crossbody Bag',
                'price'=>'12.99',
                'category'=>'shoes & accessories',
                'size'=>'One size',
                'description'=>'Minimalist Flap Chain Crossbody Bag',
                'gallery'=>'https://img.ltwebstatic.com/images3_pi/2020/12/15/1608026170bcef1f7342b548939d3db89f759888f0_thumbnail_600x.webp'
    
            ],[
                'name'=>'High Waist Ripped Flare Leg Jeans',
                'price'=>'19.99',
                'category'=>'jeans',
                'size'=>'Small',
                'description'=>'High Waist Ripped Flare Leg Jeans',
                'gallery'=>'https://img.ltwebstatic.com/images3_pi/2021/05/12/16208077010fb03e136db1f94cc0e355feeaa4fc0e_thumbnail_600x.webp'
    
            ],[
                'name'=>'Corset Lace-Up Belt',
                'price'=>'2.99',
                'category'=>'shoes & accessories',
                'size'=>'One size',
                'description'=>'Corset Lace-Up Belt',
                'gallery'=>'https://img.ltwebstatic.com/images3_pi/2020/08/21/1597980313cfc353cafcd408eab9becc633c706e93_thumbnail_600x.webp'
    
            ]


        ]);
    }
}
