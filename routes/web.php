<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PermissionsController;



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

Auth::routes();
// Route::prefix('admin')->get('/greeting', function () {
//     return 'Hello World';
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    
    Route::resource('roles', RoleController::class)->names([
        'index'=>'roles.index',
        'create'=>'roles.create',
        'store'=>'roles.store',
        'show'=>'roles.show',
        'edit'=>'roles.edit',
        'update'=>'roles.update',
        'destroy'=>'roles.destroy'
    ]);
    Route::resource('users', UserController::class)->names([
        'index'=>'users.index',
        'create'=>'users.create',
        'store'=>'users.store',
        'show'=>'users.show',
        'edit'=>'users.edit',
        'update'=>'users.update',
        'destroy'=>'users.destroy'
    ]);

    
        Route::resource('posts', PostsController::class)->names([
            'index'=>'posts.index',
            'create'=>'posts.create',
            'store'=>'posts.store',
            'show'=>'posts.show',
            'edit'=>'posts.edit',
            'update'=>'posts.update',
            'destroy'=>'posts.destroy'
        ]);

        Route::resource('permissions', PermissionsController::class);
    

    
});



