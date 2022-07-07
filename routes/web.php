<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::statamic('search', 'search', []);

$config = collect(config('statamic.blog-helpers'));
$archives = collect($config->get('archives', []));

Route::namespace("\WithCandour\StatamicBlogHelpers\Http\Controllers")
    ->group(function () use ($archives) {
        $archives->each(function ($archive) {
            Route::get("{$archive['uri']}/archive/{year}", 'ArchiveController@archive');
            Route::get("{$archive['uri']}/archive/{year}/{month}", 'ArchiveController@archive');
        });
    });
