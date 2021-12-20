<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            [
                'name' => "Sanahunt Sweater Proenza Schouler White Label Women",
                'description' => Str::random(200),
                'img' => "https://sanahunt.com/storage/products/images/big/piMNJlgAe60yM4iCetF4Cx6SYJTZ7MCgDwILoUOE.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Some sweater",
                'description' => Str::random(200),
                'img' => "https://sanahunt.com/storage/products/images/big/lhbSTHXYL0DHKrIbQN7JhA9NYZl3F4jv5WfkVGOm.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Lollypop vintage Liana luxury red off the shoulder full skirt vintage swing dress",
                'description' => Str::random(200),
                'img' => "https://sites.create-cdn.net/siteimages/28/4/9/284928/15/7/9/15798435/919x1208.jpg?1505296014",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Vintage Scoop Neck Casual Party Flare Dress",
                'description' => Str::random(200),
                'img' => "https://m.media-amazon.com/images/I/71vJ6Jj-IqL._AC_UL1500_.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "H&M Relaxed Fit T-shirt",
                'description' => Str::random(200),
                'img' => "https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F1e%2F86%2F1e86c77fb86afc19daad9acb5b39470e7bc5ca1f.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5Bmen_tshirtstanks_shortsleeve%5D%2Ctype%5BDESCRIPTIVESTILLLIFE%5D%2Cres%5Bm%5D%2Chmver%5B2%5D&call=url[file:/product/main]",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Summer Underwear Men: Litio T-shirt SS | ZAJO Eesti",
                'description' => Str::random(200),
                'img' => "https://static.zajo.net/content/mediagallery/zajo_dcat/image/product/types/X/9088.png",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Earth Sea Sky Taslan Shorts",
                'description' => Str::random(200),
                'img' => "https://earthseasky.co.nz/wp-content/uploads/2011/10/535015w_taslan_shorts_w_navy.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "High-Rise Baggy Jeans",
                'description' => Str::random(200),
                'img' => "https://img.ltwebstatic.com/images3_pi/2020/03/25/158512465436e762f16d967d6800debd80f8b1e30c.webp",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Boot-Cut Built-In Flex Jeans",
                'description' => Str::random(200),
                'img' => "https://oldnavy.gap.com/webcontent/0019/945/894/cn19945894.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Double Breasted Trench Coat",
                'description' => Str::random(200),
                'img' => "https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1629991276-8634744743_6_1_1.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 2,
                'product_type_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Toodii Men's British Style Solid Color Long Coat Warm Woolen Overcoat Black : Amazon.in: Clothing & Accessories",
                'description' => Str::random(200),
                'img' => "https://m.media-amazon.com/images/I/51XYJ8qCl-L._UX569_.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Black Aston Slim Fit Suit Jacket",
                'description' => Str::random(200),
                'img' => "https://cdn.suitsupply.com/image/upload/ar_10:22,b_rgb:efefef,bo_300px_solid_rgb:efefef,c_pad,g_north,w_2600/b_rgb:efefef,c_lfill,g_north,dpr_1,w_768,h_922,f_auto,q_auto,fl_progressive/products/Suits/default/C6329-S_1.jpg",
                'price' => mt_rand(0, 1000),
                "hasL" => true,
                "hasXL" => true,
                'genders_id' => 1,
                'product_type_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            ]);
    }
}
