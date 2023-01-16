<?php

namespace App\Providers;
use App\Models\Author;
use App\Models\Book;
use App\Observers\AuthorsObserver;
use App\Observers\BooksObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        Book::observe(BooksObserver::class);
        Author::observe(AuthorsObserver::class);

    }
}
