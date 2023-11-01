<?php

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
Route::post("/users", [\ShinHyungJune\SocialLogin\Http\UserController::class, "store"]);

Route::get('/', function () {
    return \Inertia\Inertia::render("Index");
})->name("home");

Route::get('/home', function () {
    return \Inertia\Inertia::render("Index");
});

Route::get("/login", [\ShinHyungJune\SocialLogin\Http\UserController::class, "loginForm"]);

Route::middleware("guest")->group(function(){
    Route::get("/openLoginPop/{social}", [\ShinHyungJune\SocialLogin\Http\UserController::class, "openSocialLoginPop"]);
    Route::get("/login", [\ShinHyungJune\SocialLogin\Http\UserController::class, "index"])->name("login");
    Route::get("/login/{social}", [\ShinHyungJune\SocialLogin\Http\UserController::class, "socialLogin"]);
    Route::post("/login", [\ShinHyungJune\SocialLogin\Http\UserController::class, "login"]);
    Route::resource("/users", \ShinHyungJune\SocialLogin\Http\UserController::class);
    Route::get("/passwordResets/{token}/edit", [\ShinHyungJune\SocialLogin\Http\PasswordResetController::class, "edit"]);
    Route::resource("/passwordResets", \ShinHyungJune\SocialLogin\Http\PasswordResetController::class);
});

Route::middleware("auth")->group(function(){
    Route::get("/logout", [\ShinHyungJune\SocialLogin\Http\UserController::class, "logout"]);
});

Route::get("/mailable", function(){
    return (new \App\Mail\PasswordResetCreated(new \App\Models\User(), new \App\Models\PasswordReset()));
});


// 개발
// Route::resource("/posts", \App\Http\Controllers\PostController::class);
Route::resource("/contacts", \App\Http\Controllers\ContactController::class)->only("store");
Route::resource("/requestCourseInformations", \App\Http\Controllers\RequestCourseInformationController::class)->only("store");
Route::resource("/applications", \App\Http\Controllers\ApplicationController::class)->only("store");
Route::resource("/requestEnrollments", \App\Http\Controllers\RequestEnrollmentController::class)->only("store");
Route::resource("/requestTranscripts", \App\Http\Controllers\RequestTranscriptController::class)->only("store");

Route::middleware("auth")->group(function(){
    Route::resource("/bookmarks", \App\Http\Controllers\BookmarkController::class);
    Route::resource("/subscribes", \App\Http\Controllers\SubscribeController::class);
});

// 컨텐츠 페이지
Route::get("/whoWeAre/aboutUs", [\App\Http\Controllers\WhoWeAreController::class, "aboutUs"]);
Route::get("/whoWeAre/contactUs", [\App\Http\Controllers\WhoWeAreController::class, "contactUs"]);
Route::get("/whoWeAre/ourMission", [\App\Http\Controllers\WhoWeAreController::class, "ourMission"]);
Route::get("/whoWeAre/ourStaff", [\App\Http\Controllers\WhoWeAreController::class, "ourStaff"]);

Route::get("/academics/courses/{course}", [\App\Http\Controllers\AcademicsController::class, "course"]);
Route::get("/academics/aboutAp", [\App\Http\Controllers\AcademicsController::class, "aboutAp"]);
Route::get("/academics/apCourses", [\App\Http\Controllers\AcademicsController::class, "apCourses"]);
Route::get("/academics/middleSchool", [\App\Http\Controllers\AcademicsController::class, "middleSchool"]);
Route::get("/academics/highSchool", [\App\Http\Controllers\AcademicsController::class, "highSchool"]);
Route::get("/academics/whartonSchool", [\App\Http\Controllers\AcademicsController::class, "whartonSchool"]);
Route::get("/academics/onlineEsl", [\App\Http\Controllers\AcademicsController::class, "onlineEsl"]);
Route::get("/academics/calendar", [\App\Http\Controllers\AcademicsController::class, "calendar"]);

Route::get("/admission/admissions", [\App\Http\Controllers\AdmissionController::class, "admissions"]);
Route::get("/admission/applyNow", [\App\Http\Controllers\AdmissionController::class, "applyNow"]);
Route::get("/admission/dualEnrollment", [\App\Http\Controllers\AdmissionController::class, "dualEnrollment"]);
Route::get("/admission/qna", [\App\Http\Controllers\AdmissionController::class, "qna"]);
Route::get("/admission/whsGlobal", [\App\Http\Controllers\AdmissionController::class, "whsGlobal"]);

Route::get("/tuition/tuition", [\App\Http\Controllers\TuitionController::class, "tuition"]);
// Route::get("/tuition/financialAid", [\App\Http\Controllers\TuitionController::class, "financialAid"]);
Route::get("/tuition/financialAid", function(){
    return redirect("/");
});
Route::get("/community/whartonSurvey", [\App\Http\Controllers\CommunityController::class, "whartonSurvey"]);
Route::get("/community/handicapAccessibleCurriculum", [\App\Http\Controllers\CommunityController::class, "handicapAccessibleCurriculum"]);
Route::get("/community/emergencyCrisisAndOperation", [\App\Http\Controllers\CommunityController::class, "emergencyCrisisAndOperation"]);
Route::get("/community/whartonSchool", [\App\Http\Controllers\CommunityController::class, "whartonSchool"]);
Route::get("/community/blogs", [\App\Http\Controllers\CommunityController::class, "blogs"]);
Route::get("/community/blogs/{blog}", [\App\Http\Controllers\CommunityController::class, "blog"]);
Route::get("/community/posts/{post}", [\App\Http\Controllers\CommunityController::class, "post"]);
Route::get("/community/summerCamp", [\App\Http\Controllers\CommunityController::class, "summerCamp"]);
Route::get("/community/summerProgram", [\App\Http\Controllers\CommunityController::class, "summerProgram"]);

Route::get("/enrollNow/enrollNow", [\App\Http\Controllers\EnrollNowController::class, "enrollNow"]);
Route::get("/enrollNow/documentsDownloads", [\App\Http\Controllers\EnrollNowController::class, "documentsDownloads"]);
Route::get("/enrollNow/requestTranscript", [\App\Http\Controllers\EnrollNowController::class, "requestTranscript"]);

Route::get("/policy/legalNotice", [\App\Http\Controllers\PolicyController::class, "legalNotice"]);
Route::get("/policy/privacyPolicy", [\App\Http\Controllers\PolicyController::class, "privacyPolicy"]);
Route::get("/policy/termsOfUse", [\App\Http\Controllers\PolicyController::class, "termsOfUse"]);
Route::get("/policy/copyRight", [\App\Http\Controllers\PolicyController::class, "copyRight"]);
