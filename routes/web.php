<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SetController;
use App\Models\Item;
use App\Models\Set;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\User\ItemController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\LifeCycleTestController;
use App\Http\Contollers\ComponentTestController;

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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Setsの中に含まれるRecipeの一覧表示
Route::get('/sets/{set}', [SetController::class, 'show'])->name('sets.show');

//Recipe個別表示
Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

//Recipeの詳細表示
/* Route::get('/sets/{set}/items/{item}', function (Item $item) {
    return view('items.show', compact('item'));
})->name('items.show'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/sets', [SetController::class, 'index'])->name('sets.index');
});

/* Route::middleware('auth:users')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('item.index');
    Route::get('/sets', [SetController::class, 'index'])->name('sets.index'); // Add this line
});
 */

//Itemの一覧表示
Route::middleware('auth:users')->group(function () {
    Route::get('/', [ItemController::class, 'index'])->name('items.index');
    Route::get('show/{item}', [ItemController::class, 'show'])->name('items.show');
});


//カート機能
Route::prefix('cart')->middleware('auth:users')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('add', [CartController::class, 'add'])->name('cart.add');
    Route::post('delete/{item}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('success', [CartController::class, 'success'])->name('cart.success');
    Route::get('cancel', [CartController::class, 'cancel'])->name('cart.cancel');
});


Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);
Route::get('/servicecontainertest', [LifeCycleTestController::class, 'showServiceContainerTest']);
Route::get('/serviceprovidertest', [LifeCycleTestController::class, 'showServiceProviderTest']);

require __DIR__ . '/auth.php';
