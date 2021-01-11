<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeMController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});






Route::middleware(['auth'])->group(function () {
    Route::get("/Tamkeen",[HomeController::class,'index']);

    Route::get("website",[WebsiteController::class,'index'])->name('website-index');
    Route::get("website/about",[WebsiteController::class,'about'])->name('website-about');
    Route::get("website/store",[WebsiteController::class,'store'])->name('website-store');
    Route::get("website/products",[WebsiteController::class,'products'])->name('website-products');




    //Route::get("form",FormController::class);


    Route::get("form",[FormController::class,'index'])->name('form-index');
    Route::get("form/create",[FormController::class,'create'])->name('form-create');
    Route::get("form/edit/{id}",[FormController::class,'edit'])->name('form-edit');

    Route::resource("employee",EmployeeController::class);
    Route::get("employee/{id}/delete",[EmployeeController::class,'destroy'])->name("employee.delete");


    Route::resource("employes",EmployeMController::class);
    Route::get("employes/{id}/delete",[EmployeMController::class,'destroy'])->name("employes.delete");

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
