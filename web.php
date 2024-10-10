
<?php

use App\Http\Controllers\QuranIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Surahs');
});



Route::get('/index', [QuranIndex::class, "getContents"]);