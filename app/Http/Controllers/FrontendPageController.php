<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Competition;
use App\Models\Product;
use App\Models\Recipe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendPageController extends Controller
{

    public function home_page()
    {
        $data['date'] = '2025-01-01';
        return view('home', compact('data'));
    }

    public function product_page()
    {
        return view('product');
    }

    public function product_page_type(Request $request, $type)
    {
        $availableType = ['botol', 'sachet'];

        if(!in_array($type, $availableType)) {
            return abort('404', 'Product type not found');
        }

        $products = Product::ofType($type)->active()->get();


        $recommended = Product::active()->where([['type', '!=', $type], ['type', '!=', 'tetra']])->get();

        $recipes = Recipe::all();

        return view('product_detail', compact('products', 'recommended', 'recipes'));
    }

    public function blog_page()
    {

        $blogs = Article::article()->isActive()->latest()->get();

        // filter blogs by tag
        $blogs_tech = $blogs->filter(fn($value, $key) => $value->tag == 'IT & Gadget')->all();
        $blogs_entertain = $blogs->filter(fn($value, $key) => $value->tag == 'Entertainment')->all();
        $blogs_movie = $blogs->filter(fn($value, $key) => $value->tag == 'Movie')->all();
        $blogs_music = $blogs->filter(fn($value, $key) => $value->tag == 'Music')->all();
        $blogs_other = $blogs->filter(fn($value, $key) => $value->tag == 'Other')->all();

        return view('blog', compact('blogs', 'blogs_tech', 'blogs_entertain', 'blogs_movie', 'blogs_music', 'blogs_other'));
    }


    public function blog_page_detail($slug) {
        $article = Article::findBySlug($slug);

        return view('blog_detail', compact('article'));
    }

    public function recipe_page()
    {
        $recipes = Recipe::isActive()
            ->orderBy('publish_date', 'desc')
            ->get();

        $recipe_foods = $recipes->filter(fn($value, $key) => $value->category == '1');
        $recipe_drinks = $recipes->filter(fn($value, $key) => $value->category == '2');

        $page_all 	= ceil($recipes->count() / 6);
    	$page_drink = ceil($recipe_drinks->count() / 6);
    	$page_food 	= ceil($recipe_foods->count() / 6);

        return view('recipes', compact(
            'recipes',
            'recipe_foods',
            'recipe_drinks',
            'page_all',
            'page_drink',
            'page_food'
        ));
    }

    public function horoscope_page() {

        $horoscope = Article::isHoroscope()->isActive()->latest()->get();
        // create static array of horoscope slug with date range
        $horoscope_data = [
            [
                'name' => 'Aries',
                'slug' => 'aries',
                'date_range' => '21 Mar - 19 Apr',
            ],
            [
                'name' => 'Taurus',
                'slug' => 'taurus',
                'date_range' => '20 Apr - 20 May',
            ],
            [
                'name' => 'Gemini',
                'slug' => 'gemini',
                'date_range' => '21 May - 20 Jun',
            ],
            [
                'name' => 'Cancer',
                'slug' => 'cancer',
                'date_range' => '21 Jun - 22 Jul',
            ],
            [
                'name' => 'Leo',
                'slug' => 'leo',
                'date_range' => '23 Jul - 22 Aug',
            ],
            [
                'name' => 'Virgo',
                'slug' => 'virgo',
                'date_range' => '23 Aug - 22 Sep',
            ],
            [
                'name' => 'Libra',
                'slug' => 'libra',
                'date_range' => '23 Sep - 22 Oct',
            ],
            [
                'name' => 'Scorpio',
                'slug' => 'scorpio',
                'date_range' => '23 Oct - 21 Nov',
            ],
            [
                'name' => 'Sagitarius',
                'slug' => 'sagitarius',
                'date_range' => '22 Nov - 21 Dec',
            ],
            [
                'name' => 'Capricorn',
                'slug' => 'capricorn',
                'date_range' => '22 Dec - 19 Jan',
            ],
            [
                'name' => 'Aquarius',
                'slug' => 'aquarius',
                'date_range' => '20 Jan - 18 Feb',
            ],
            [
                'name' => 'Pisces',
                'slug' => 'pisces',
                'date_range' => '19 Feb - 20 Mar',
            ],
        ];

        // current date in format DD MMM
        $current_date = Carbon::now()->format('d M');

        // get current horoscope by current date, without year
        $current_horoscope = null;
        foreach ($horoscope_data as $data) {
            $date_range = explode(' - ', $data['date_range']);
            $start_date = Carbon::parse($date_range[0] . ' ' . date('Y'));
            $end_date = Carbon::parse($date_range[1] . ' ' . date('Y'));

            if (Carbon::now()->between($start_date, $end_date)) {
                $current_horoscope = $data;
                break;
            }
        }
        // get first horoscope by the slug from horoscope collections
        $horoscope_first = $horoscope->filter(fn($value, $key) => $value->slug == $current_horoscope['slug'])->first();

        $extract = explode('</p>', $horoscope_first->content);
        $general    = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[0])));
        $love       = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[1])));
        $money      = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[2])));

        $horoscope_first->general = str_replace('General: ', '', $general);
        $horoscope_first->love    = str_replace('Love: ', '', $love);
        $horoscope_first->money   = str_replace('Money: ', '', $money);


        return view('horoscope', compact('horoscope_first', 'horoscope'));
    }

    public function horoscope_api_detail(Request $request)
    {
        $request->validate([
            'slug' => 'exists:article,slug|required'
        ]);

        $article = Article::findBySlug($request->slug)->isHoroscope()->isActive()->first();

        if(!$article) {
            return response()->json([
                'message' => 'Horoscope not found'
            ], 404);
        }

        $extract = explode('</p>', $article->content);
        $general    = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[0])));
        $love       = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[1])));
        $money      = trim(preg_replace('/\s+/', ' ', str_replace('<p>', '', $extract[2])));

        $article->general = str_replace('General: ', '', $general);
        $article->love    = str_replace('Love: ', '', $love);
        $article->money   = str_replace('Money: ', '', $money);

        return response()->json([
            'message' => 'Success get horoscope detail',
            'data' => $article
        ]);
    }

    public function events_page() {

        $galeries = Article::isGaleries()->isActive()->orderBy('modified','desc')->limit(12)->get();

        $event = DB::select(
            "SELECT * FROM (
                SELECT id AS tmp_sort, title AS tmp_title, image AS tmp_image, description AS tmp_desc, link AS tmp_link, DATE AS tmp_date, CASE WHEN description = '' THEN 'Competition' ELSE 'tvc' END AS tmp_type FROM competitions ) tmp ORDER BY tmp_date DESC");

        $tvc = DB::select("SELECT * FROM (SELECT id AS tmp_sort, title AS tmp_title, image_source AS tmp_image, content AS tmp_desc, slug AS tmp_link, modified AS tmp_date, category AS tmp_type FROM article WHERE category = 'tvc') tmp ORDER BY tmp_date DESC");

        $data = array(
            'result'		=> $event,
            'gallery'		=> $galeries,
            'tvc'           => $tvc,
        );

        return view('events', compact('data'));
    }

}
