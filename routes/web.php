<?php

use App\Http\Controllers\database\queryBuilder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/database/all-rows', [queryBuilder::class, 'index'])->name('database.querybuilder.allRowsFromATable');
// Route::get('/database/single-row', [queryBuilder::class, 'singleRowFromATable'])->name('database.querybuilder.singleRowColumnFromATable');

// Route::get('/database', [queryBuilder::class, 'showData'])->name('database.querybuilder.showData');

Route::get('/database/{type}', [queryBuilder::class, 'getData'])
    ->name('database.querybuilder.getData')
    ->where('type', 'all-rows|single-row|column-values');

Route::get('/database/chunking-results', [queryBuilder::class, 'chunkingResults'])
    ->name('database.chunkingResults');

//  Streaming Results Lazily
Route::get('/database/export-users-csv', [QueryBuilderController::class, 'exportUsersToCsv'])
    ->name('database.exportUsersToCsv');
// Aggregates
Route::get('/database/aggregates', [queryBuilder::class,'aggregates'])->name('database.aggregates');
