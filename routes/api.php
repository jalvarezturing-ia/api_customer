<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Resources\UserInfoResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ================= Public Routes Authentication =================
Route::post('/singup', [AuthController::class, 'singup']);
Route::post('/login', [AuthController::class, 'login']);
// ================= Protected Routes Authentication =================
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/users', [AuthController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/session', [AuthController::class, 'session']);
    Route::put('/users/{id}', [AuthController::class, 'update']);
    Route::get('/users/{id}', [AuthController::class, 'show']);
    Route::delete('/users/{id}', [AuthController::class, 'destroy']);
    Route::put('/password/{id}', [AuthController::class, 'updatePassword']);
});




// ================= Protected Routes User Info =================
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::put('/user-info', [UserInfoController::class, 'update']);
    Route::get('/user-info/{id}', [UserInfoController::class, 'show']);
    Route::post('/user-info', [UserInfoController::class, 'store']);
    Route::delete('/user-info/{id}', [UserInfoController::class, 'destroy']);
    Route::delete('/user-info/list', [UserInfoController::class, 'index']);
    // Route::apiResource('/user-info', UserInfoController::class);
});




// ================= Protected Routes =================
Route::group(['middleware' => ['auth:sanctum']], function(){
    // ================= Course =================
    Route::apiResource('/courses', CourseController::class);
    Route::get('/coursesByPlan/{plan_id}', [CourseController::class, 'coursesByPlan']);
    Route::get('/coursesByTopic/{topic}', [CourseController::class, 'coursesByTopic']);
    // ================= Video =================
    Route::apiResource('/videos', VideoController::class);
    Route::get('/videosByCourse/{course_id}', [VideoController::class, 'videosByCourse']);
    // ================= Video Files =================
    Route::apiResource('/files', FileController::class);
    // =================  Plans =================
    Route::apiResource('/plans', PlanController::class);
    // ================= Course-Video =================
    Route::get('/courses-videos', [CourseVideoController::class, 'index']);
    Route::get('/courses-videos/{id}', [CourseVideoController::class, 'getCourseVideos']);
});

