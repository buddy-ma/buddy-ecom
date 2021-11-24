<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $lang_id = getlang();

        $all_cats = DB::table('category', 'c')
        ->leftJoin('category_description', 'c.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => $lang_id,
            'c.parent_id' => 149
        ])->get();

        //
        $top_3_cats = DB::table('category', 'c')
        ->leftJoin('category_description', 'c.category_id', '=', 'category_description.category_id')
        ->where('category_description.language_id', $lang_id)
        ->whereIn('c.category_id', [120, 107, 167])->get();

        $newest_products = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->where([
            'product_description.language_id' => $lang_id,
            'p.status' => 1
        ])->orderBy('viewed', 'desc')
        ->limit(8)->get();

        $categories = [102, 119, 110, 120];
        $special_cats = DB::table('category_description')
        ->where('language_id', $lang_id)
        ->whereIn('category_id', $categories)
        ->get();

        $special_products = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->leftJoin('product_to_category', 'p.product_id', '=', 'product_to_category.product_id')
        ->where([
            'product_description.language_id' => $lang_id,
            'p.status' => 1,
            'product_to_category.category_id' => 102
        ])->limit(8)->get();

        foreach ($categories as $cat) {
            if ($cat == 102) {
                continue;
            }else{
                $product = DB::table('product', 'p')
                ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
                ->leftJoin('product_to_category', 'p.product_id', '=', 'product_to_category.product_id')
                ->where([
                    'product_description.language_id' => $lang_id,
                    'p.status' => 1,
                    'product_to_category.category_id' => $cat
                ])->limit(8)->get();
                foreach ($product as $pdt) {
                    $special_products->push($pdt);
                }
            }
        }

        //dd($special_products);


        //dd( $newest_products, $top_3_cats);

        return view('home')->with("data", [
            'all_cats' => $all_cats,
            'top_cats' => $top_3_cats,
            'newest_products' => $newest_products,
            'special_cats' => $special_cats,
            'special_products' => $special_products
        ]);
    }

    public function category($id)
    {
        $lang_id = getlang();

        $all_cats = DB::table('category', 'c')
        ->leftJoin('category_description', 'c.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => $lang_id,
            'c.parent_id' => 149
        ])->get();

        $category = DB::table('category', 'c')
        ->leftJoin('category_description', 'c.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => $lang_id,
            'c.category_id' => $id
        ])->first();

        //$category_parent = ( $category->parent_id != 0 ) ?

        $products = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->leftJoin('product_to_category', 'p.product_id', '=', 'product_to_category.product_id')
        ->where([
            'product_description.language_id' => $lang_id,
            'p.status' => 1,
            'product_to_category.category_id' => $id
        ])->orderBy('date_added', 'asc')->get();


        $new_products = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->where([
            'product_description.language_id' => $lang_id,
            'p.status' => 1,
        ])->orderBy('date_added', 'desc')->limit(6)->get();

        return view('category')->with("data", [
            'all_cats' => $all_cats,
            'category' => $category,
            'products' => $products,
            'new_products' => $new_products
        ]);
    }

    public function product($id)
    {
        $lang_id = getlang();

        $all_cats = DB::table('category', 'c')
        ->leftJoin('category_description', 'c.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => $lang_id,
            'c.parent_id' => 149
        ])->get();

        $categories = DB::table('product_to_category', 'pc')
        ->leftJoin('category_description', 'pc.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => $lang_id,
            'pc.product_id' => $id
        ])->get();

        $product = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->where([
            'p.product_id' => $id,
            'product_description.language_id' => $lang_id,
        ])->orderBy('date_added', 'asc')->first();

        $images = DB::table("oc_product_image")->where("product_id", $id)->get();
        // dd($categories, $product, $images);
        $option_id = DB::table('product_option')->where('product_id', $id)->first();
        $options = DB::table('product_option_value')->where('product_id', $id)->get();

        $new_products = DB::table('product', 'p')
        ->leftJoin('product_description', 'p.product_id', '=', 'product_description.product_id')
        ->where([
            'product_description.language_id' => $lang_id,
            'p.status' => 1,
        ])->orderBy('date_added', 'desc')->limit(6)->get();

        return view('product')->with("data", [
            'all_cats' => $all_cats,
            'categories' => $categories,
            'product' => $product,
            'new_products' => $new_products,
            'images' => $images,
            'option_id' => $option_id,
            'options' => $options
        ]);
    }


}
