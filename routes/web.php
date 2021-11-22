<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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
    return view('worksheets.index');
});
Route::get('/grid', function () {
    return view('grid');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/register', function () {
    return view('admin.register');
});

Route::post('/admin-login1',[LoginController::class, 'loginCheck']);
Route::post('/admin-register',[LoginController::class, 'registerUpload']);

Route::group(['middleware'=>['Admin']], function(){ 
  
    Route::get('/admin-index',[LoginController::class, 'AdminIndex']);

    // Route::get('/user-details', function () {
    //     return view('admin.user-details');
    // });
    //admin delete
     Route::get('/admin-delete/{id}', [LoginController::class, 'adminDelete']);
    //user details
    Route::get('/user-details', [SubjectController::class, 'userDetails']);

    Route::get('/changeStatus', [LoginController::class, 'changeStatus']);
    //add subject
    Route::post('/subject-form-submit', [SubjectController::class, 'SubjectFormSubmit']);

    //show subject
    Route::get('/add-subject', [SubjectController::class, 'ShowSubjectList']);

    //edit Subject
    Route::get('/edit-subject/{id}', [SubjectController::class, 'editSubjectList']);
    
    //clone Subject
    Route::get('/clone-subject/{id}', [SubjectController::class, 'cloneSubjectList']);

    //edit Subject submit
    Route::post('/edit-submit', [SubjectController::class, 'editSubmit']);
      //edit Subject submit
    Route::post('/clone-submit', [SubjectController::class, 'cloneSubmit']);

     //delete Subject 
     Route::get('/delete-subject/{id}', [SubjectController::class, 'deleteSubjectList']);
     
       //Show add content
     Route::get('/add-content', [SubjectController::class, 'addContent']);
     //add-content
     Route::post('/add-content-pop-up', [SubjectController::class, 'addContentPopUp']);
     
     //referral
     Route::get('/referral-list', [SubjectController::class, 'referralList']);

});

Route::get('/admin-logout',[LoginController::class, 'logout']);


//user panle

// Route::get('/', function () {
//     return view('worksheets.index');
// });



Route::get('/',[UserController::class, 'preschool']);
Route::get('/kindergarten',[UserController::class, 'kindergarten']);
// Route::get('/preschool',[UserController::class, 'preschool']);
Route::get('/1st-grade',[UserController::class, 'firstgrade']);
Route::get('/2nd-grade',[UserController::class, 'secondgrade']);
Route::get('/3rd-grade',[UserController::class, 'thirdgrade']);
Route::get('/4th-grade',[UserController::class, 'fourthgrade']);
Route::get('/5th-grade',[UserController::class, 'fifthgrade']);
Route::get('/6th-grade',[UserController::class, 'sixthgrade']);
Route::get('/7th-grade',[UserController::class, 'seventhgrade']);
Route::get('/8th-grade',[UserController::class, 'eightthgrade']);
Route::get('/high-school',[UserController::class, 'highschool']);
Route::get('/miscellaneous',[UserController::class, 'miscellaneous']);
Route::get('/cogat',[UserController::class, 'cogat']);
Route::get('/competitive-math',[UserController::class, 'competitivemath']);
Route::get('/activities',[UserController::class, 'activities']);
Route::get('/stem',[UserController::class, 'stem']);


Route::get('/grid/{slug}',[UserController::class, 'ShowGrid']);
Route::post('/search', [UserController::class, 'searchQuestion']);
Route::post('/form-submit', [UserController::class, 'formSubmit']);
Route::post('/second-form-submit', [UserController::class, 'secondFormSubmit']);
Route::post('/referral-form-submit', [UserController::class, 'referralFormSubmit']);