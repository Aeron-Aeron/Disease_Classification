<?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('home.userpage');
    })->name('home');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
        Route::post('/admin/users/{id}/make-admin', [AdminController::class, 'makeAdmin'])->name('admin.makeAdmin');
        Route::post('/admin/users/{id}/remove-admin', [AdminController::class, 'removeAdmin'])->name('admin.removeAdmin');
    });;

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
   
    

require __DIR__.'/auth.php';
