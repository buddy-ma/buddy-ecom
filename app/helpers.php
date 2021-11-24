<?php

use App\Models\Category;
use Illuminate\Support\Facades\App;

function show_name(){
    return 'my name is buddy';
}

if (!function_exists('get_lang')) {
    function getlang()
    {
        //First, bring the language ID;
        $langs = ['en' => 1, 'ar' => 2, 'fr' => 3];
        foreach ($langs as $lang => $language){
            if($lang == App::getLocale()){
                $lang_id = $language;
                break;
            }else{
                $lang_id = 1;
            }
        }

        return $lang_id;
    }
}

if (!function_exists('all_cats')) {
    function all_cats()
    {
        $get_lang = getlang();
        $all_cats = Category::active()->selection()->get();

        return $all_cats;
    }
}

