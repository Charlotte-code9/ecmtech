<?php

use App\Http\Controllers\Admin\AcceptedReservationController;
use App\Http\Controllers\Admin\BorrowedItemsController;
use App\Http\Controllers\Admin\BorrowersController;
use App\Http\Controllers\Admin\BorrrowersController;
use App\Http\Controllers\Admin\EborrowerController;
use App\Http\Controllers\Admin\EquipmentController;
use App\Http\Controllers\Admin\GraphController;
use App\Http\Controllers\Admin\LostItemsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ProfileUserController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReservationsController;
use App\Http\Controllers\Admin\ReturnedItemsController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Dashboard\NewReservationController;
use App\Http\Controllers\Dashboard\Reservation_StatusController;
use App\Http\Controllers\Dashboard\UserEquipmentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\ActivityLogsController;
use App\Http\Controllers\Dashboard\UserProfileController;
use App\Models\AcceptedReservation;
use App\Models\Graph;
use App\Models\Inventory;
use App\Models\Reservation_Status;
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


Route::get('/', function () {
    return view('welcome');
})->middleware(['guest']);


/** All routes for Admin */
Route::group([
        'prefix'=>'admin',
        'as'=>'admin.',
        'middleware' => ['auth', 'role:admin']
    ],
function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

    // Route::group([

    // ],
    // function(){
    //     Route::get('reservation', function () {
    //         return view('admin.reservation');
    //     })->name('reservation');
    // });



     //Reservation-pending
    Route::resource('reservations', ReservationsController::class);
    Route::post('reservation-accept/{id}', [ReservationsController::class,'acceptReservation'])->name('reservation.accept');
    Route::post('reservation-decline/{id}', [ReservationsController::class,'declineReservation'])->name('reservation.decline');

    Route::post('borrow/{id}', [ReservationsController::class,'borrow'])->name('reservation.borrow');
    Route::post('printpreview/{id}', [ReservationsController::class,'borrow']);


     //Reservation-accepted
    Route::resource('acceptedreservation', AcceptedReservationController::class);

    Route::resource('borroweditems', BorrowedItemsController::class);
    Route::get('borrowed-generate', [BorrowedItemsController::class,'generatereport'])->name('borrowed.generate');
    Route::post('return/{id}', [BorrowedItemsController::class,'return'])->name('borrowed.return');
    Route::post('lost/{id}', [BorrowedItemsController::class,'lost'])->name('borrowed.lost');

    Route::resource('returneditems', ReturnedItemsController::class);
    Route::get('return-generate', [ReturnedItemsController::class,'generate'])->name('return.generate');
    Route::get('returned-items', [ReturnedItemsController::class,'daterange'])->name('return.daterange');

    Route::resource('lostitems', LostItemsController::class);
    Route::get('lost-generate', [LostItemsController::class,'generate'])->name('lost.generate');


    //Equipment
    Route::resource('equipment', EquipmentController::class);


    //Borrower
    Route::resource('borrower', EborrowerController::class);
    Route::get('borrower-generate', [EborrowerController::class,'generate'])->name('borrower.generate');

    //Inventory
    Route::resource('inventory', InventoryController::class);
        // items
        // items/1
        // items/1/edit

        // equipment/borrowed
        // equipment/returned

    // user/admin
    Route::resource('useradmin', UserAdminController::class);

    //Room
    Route::resource('room', RoomController::class);

    Route::resource('graph', GraphController::class);

    Route::resource('user-profile', ProfileUserController::class);

    Route::resource('activity-logs', ActivityLogsController::class);
    });





/** All routes for User/Borrower */
Route::group([
    'prefix'=>'dashboard',
    'as'=>'dashboard.',
    'middleware' => ['auth', 'role:user']
],
function(){
    Route::get('/', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('home');


    Route::resource('reservationstatus', Reservation_StatusController::class);
    Route::resource('equipment', UserEquipmentController::class);
    Route::resource('make-reservation', NewReservationController::class);
    Route::resource('user-profile', UserProfileController::class);

    Route::group([
        'prefix'=>'user',
        'as'=>'user.'
    ],
    function(){
        Route::get('profile', function () {
            return "This is the user profile.";
        })->name('profile');


    });


});


Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

