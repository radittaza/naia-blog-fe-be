<?php

use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/posts');
});

use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', function(User $user) {
    return view('contact', ['title' => 'Contact','user' => $user]);
});

Route::post('/contact', [PageController::class, 'send']);

Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['keyword','category','author']))->paginate(6)->withQueryString();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/post/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard', [PostDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [PostDashboardController::class, 'create']);
    Route::post('/dashboard', [PostDashboardController::class, 'store']);
    Route::delete('/dashboard/{post:slug}', [PostDashboardController::class, 'destroy']);
    Route::get('/dashboard/{post:slug}/edit', [PostDashboardController::class, 'edit']);
    Route::patch('/dashboard/{post:slug}', [PostDashboardController::class, 'update']);
    Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload', [ProfileController::class, 'upload']);
});

require __DIR__.'/auth.php';