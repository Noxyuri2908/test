<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data = array();
        $categories = Category::all();
        $data['categories'] = $categories;

        View::share('dataViewShare', $data);

        $details = Detail::all();

        View::share('dataViewShare', $details);

        $tags = Tag::all();

        View::share('dataViewShare', $tags);
    }
}
