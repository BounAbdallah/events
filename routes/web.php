<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AssociationStatusController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardAssociationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

//Route pour accueil 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/details/{id}', [HomeController::class, 'detail'])->name('event.show');
/////////////////////////////////////////////////////////////////////////////////////


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route pour evenement
Route::resource('events', EvenementController::class);

/////////////////////////////////////////////////////////////////////////////////////


// route register

Route::get('register/user', [RegisteredUserController::class, 'showUserRegistrationForm'])->name('register.user');
Route::post('register/user', [RegisteredUserController::class, 'registerUser']);

Route::get('register/association', [RegisteredUserController::class, 'showAssociationRegistrationForm'])->name('register.association');
Route::post('register/association', [RegisteredUserController::class, 'registerAssociation']);

Route::get('register/admin', [RegisteredUserController::class, 'showAdminRegistrationForm'])->name('register.admin');
Route::post('register/admin', [RegisteredUserController::class, 'registerAdmin']);



/////////////////////////////////////////////////////////////////////////////////////


Route::get('/dashboard/user', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified', 'user'])->name('user.dashboard');

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

Route::get('/dashboard/association', function () {
    return view('association.dashboard');
})->middleware(['auth', 'verified', 'association', ])->name('association.dashboard');

Route::resource('/dashboard/association', DashboardAssociationController::class);


Route::middleware(['auth', 'verified', 'association', 'checkAssociationStatus'])->group(function () {
    Route::post('/reservations/store/{id_evenement}', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
});



Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/users', [RegisteredUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{id}/edit', [RegisteredUserController::class, 'editRole'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [RegisteredUserController::class, 'updateRole'])->name('admin.users.update');
});

Route::middleware(['auth', 'verified' , 'user'])->group(function () {
    Route::post('/reservations/store/{id_evenement}', [ReservationController::class, 'store'])->name('reservations.store');
});


/////Route pour admin sur la gestion des statuts association\\\\\

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('admin/associations', [AssociationStatusController::class, 'index'])->name('admin.associations.index');
    Route::post('admin/associations/{id}/status', [AssociationStatusController::class, 'updateStatus'])->name('admin.associations.updateStatus');
});


Route::get('/reservations/{id}', 'ReservationController@show')->name('reservations.show');

require __DIR__.'/auth.php';
