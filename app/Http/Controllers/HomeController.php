<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\Reference;
use App\Services\SeoService;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        SeoService::set();

        $data["slider"] = Cache::remember("slider_home_" . app()->getLocale(), config("cache.time"), function () {
            return Slider::active()->order()->get();
        });

        $data["product"] = Cache::remember("product_home_" . app()->getLocale(), config("cache.time"), function () {
            return Product::active()->order()->limit(10)->get();
        });

        $data["project"] = Cache::remember("project_home_" . app()->getLocale(), config("cache.time"), function () {
            return Project::active()->order()->get();
        });

        $data["blog"] = Cache::remember("blog_home_" . app()->getLocale(), config("cache.time"), function () {
            return Blog::active()->order()->limit(3)->get();
        });

        $data["reference"] = Cache::remember("reference_home_" . app()->getLocale(), config("cache.time"), function () {
            return Reference::active()->order()->get();
        });

        if (config("information.about_page")) {
            $data["about"] = Cache::remember("about_home_" . app()->getLocale(), config("cache.time"), function () {
                return Page::findOrFail(config("information.about_page"));
            });
        }
        return view("index", $data);
    }
}
