<?php

use App\Http\Controllers\logout;
use App\Http\Livewire\Admin\Home as AdminHome;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\Home;
use App\Http\Livewire\Home\Admin;
use App\Http\Livewire\Login;
use App\Http\Livewire\Member\Home as MemberHome;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

Route::get('register', Register::class);
Route::middleware(['auth'])->group(function () {
  route::get('admin',AdminHome::class);
  route::get('Halftime',MemberHome::class);
});
route::get('/', Home::class);
Route::get('logout', [logout::class, 'logout']);
Route::get('login', Login::class)->name('login');

// route::get('/forgot-password',function(){
//  return view('forgotpassword');
// });



