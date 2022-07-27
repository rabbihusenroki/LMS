<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CountController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
//Authentication Route
Route::get('/logout',[AuthController::class,'AdminLogout'])->name('user.logout');
//Slider Route
Route::get('/all/slider',[HomeController::class,'AllSlider'])->name('all.slider');
Route::get('/add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class,'StoreSlider'])->name('store.slider');
Route::get('/edit/slider/{id}',[HomeController::class,'EditSlider']);
Route::post('/update/slider/{id}',[HomeController::class,'UpdateSlider']);
Route::get('/delete/slider/{id}',[HomeController::class,'DeleteSlider']);
//Notice Route
Route::get('/all/notice',[NoticeController::class,'AllNotice'])->name('all.notice');
Route::get('/add/notice',[NoticeController::class,'AddNotice'])->name('add.notice');
Route::post('/store/notice',[NoticeController::class,'StoreNotice'])->name('store.notice');
Route::get('/edit/notice/{id}',[NoticeController::class,'EditNotice']);
Route::post('/update/notice/{id}',[NoticeController::class,'UpdateNotice']);
Route::get('/delete/notice/{id}',[NoticeController::class,'DeleteNotice']);
//Feature Route
Route::get('/all/feature',[NoticeController::class,'AllFeature'])->name('all.feature');
Route::get('/add/feature',[NoticeController::class,'AddFeature'])->name('add.feature');
Route::post('/store/feature',[NoticeController::class,'StoreFeature'])->name('store.feature');
Route::get('/edit/feature/{id}',[NoticeController::class,'EditFeature']);
Route::post('/update/feature/{id}',[NoticeController::class,'UpdateFeature']);
Route::get('/delete/feature/{id}',[NoticeController::class,'DeleteFeature']);
//Choose Route
Route::get('/all/choose',[ChooseController::class,'AllChoose'])->name('all.choose');
Route::get('/add/choose',[ChooseController::class,'AddChoose'])->name('add.choose');
Route::post('/store/choose',[ChooseController::class,'StoreChoose'])->name('store.choose');
Route::get('/edit/choose/{id}',[ChooseController::class,'EditChoose']);
Route::post('/update/choose/{id}',[ChooseController::class,'UpdateChoose']);
Route::get('/delete/choose/{id}',[ChooseController::class,'DeleteChoose']);
//Course Route
Route::get('/all/course',[CourseController::class,'AllCourse'])->name('all.course');
Route::get('/add/course',[CourseController::class,'AddCourse'])->name('add.course');
Route::post('/store/course',[CourseController::class,'StoreCourse'])->name('store.course');
Route::get('/edit/course/{id}',[CourseController::class,'EditCourse']);
Route::post('/update/course/{id}',[CourseController::class,'UpdateCourse']);
Route::get('/delete/course/{id}',[CourseController::class,'DeleteCourse']);
//Testimonial Route
Route::get('/all/testimonial',[TestimonialController::class,'AllTestimonial'])->name('all.testimonial');
Route::get('/add/testimonial',[TestimonialController::class,'AddTestimonial'])->name('add.testimonial');
Route::post('/store/testimonial',[TestimonialController::class,'StoreTestimonial'])->name('store.testimonial');
Route::get('/edit/testimonial/{id}',[TestimonialController::class,'EditTestimonial']);
Route::post('/update/testimonial/{id}',[TestimonialController::class,'UpdateTestimonial']);
Route::get('/delete/testimonial/{id}',[TestimonialController::class,'DeleteTestimonial']);
//Teacher Route
Route::get('/all/teacher',[TeacherController::class,'AllTeacher'])->name('all.teacher');
Route::get('/add/teacher',[TeacherController::class,'AddTeacher'])->name('add.teacher');
Route::post('/store/teacher',[TeacherController::class,'StoreTeacher'])->name('store.teacher');
Route::get('/edit/teacher/{id}',[TeacherController::class,'EditTeacher']);
Route::post('/update/teacher/{id}',[TeacherController::class,'UpdateTeacher']);
Route::get('/delete/teacher/{id}',[TeacherController::class,'DeleteTeacher']);
//Blog Route
Route::get('/all/blog',[BlogController::class,'AllBlog'])->name('all.blog');
Route::get('/add/blog',[BlogController::class,'AddBlog'])->name('add.blog');
Route::post('/store/blog',[BlogController::class,'StoreBlog'])->name('store.blog');
Route::get('/edit/blog/{id}',[BlogController::class,'EditBlog']);
Route::post('/update/blog/{id}',[BlogController::class,'UpdateBlog']);
Route::get('/delete/blog/{id}',[BlogController::class,'DeleteBlog']);
//About Route
Route::get('/abouts',[AboutController::class,'AllAbout'])->name('all.about');
Route::get('/add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('/store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('/edit/about/{id}',[AboutController::class,'EditAbout']);
Route::post('/update/about/{id}',[AboutController::class,'UpdateAbout']);
Route::get('/delete/about/{id}',[AboutController::class,'DeleteAbout']);
//Contact Route
Route::get('/contacts',[ContactController::class,'AllContact'])->name('all.contact');
Route::get('/add/contact',[ContactController::class,'AddContact'])->name('add.contact');
Route::post('/store/contact',[ContactController::class,'StoreContact'])->name('store.contact');
Route::get('/edit/contact/{id}',[ContactController::class,'EditContact']);
Route::post('/update/contact/{id}',[ContactController::class,'UpdateContact']);
Route::get('/delete/contact/{id}',[ContactController::class,'DeleteContact']);
//Message
Route::get('/all/message',[ContactController::class,'AllMessage'])->name('all.message');
Route::get('/delete/message/{id}',[ContactController::class,'DeleteMessage']);
//SUBSCRIBER
Route::get('/all/subscriber',[ContactController::class,'AllSubscriber'])->name('all.mail');
Route::post('/store/subscriber',[ContactController::class,'StoreSubscriber'])->name('store.subscriber');
Route::get('/delete/subscriber/{id}',[ContactController::class,'DeleteSubscriber']);

//FrontEnd Route
//Courses
Route::get('all/courses',[CourseController::class,'AllCourses'])->name('all.courses');
Route::get('course/details/{id}',[CourseController::class,'CourseDetails']);
//Blogs
Route::get('all/posts',[BlogController::class,'AllPost'])->name('all.blogs');
Route::get('single/posts/{id}',[BlogController::class,'SinglePost']);
//Teacher
Route::get('all/teachers',[TeacherController::class,'AllTeachers'])->name('all.teachers');
Route::get('teacher/details/{id}',[TeacherController::class,'TeacherDetails']);
//About
Route::get('/about',[AboutController::class,'About'])->name('about');
//Contact
Route::get('/contact',[ContactController::class,'Contact'])->name('all.contacts');
Route::post('/send',[ContactController::class,'ContactSend'])->name('store.contact');

//Banner
//AboutBanner
Route::get('/all/banner',[BannerController::class,'AllBanner'])->name('all.banner');
Route::get('/add/banner',[BannerController::class,'AddBanner'])->name('add.banner');
Route::post('/store/banner',[BannerController::class,'StoreBanner'])->name('store.banner');
Route::get('/delete/banner/{id}',[BannerController::class,'DeleteAboutBanner']);

//CourseBanner
Route::post('/store/coursebanner',[BannerController::class,'StoreCourseBanner'])->name('store.coursebanner');
Route::get('/delete/banner/{id}',[BannerController::class,'DeleteCourseBanner']);

//TeacherBanner
Route::post('/store/teacherbanner',[BannerController::class,'StoreTeacherBanner'])->name('store.teacherbanner');
Route::get('/delete/banner/{id}',[BannerController::class,'DeleteTeacherBanner']);

//BlogBanner
Route::post('/store/blogbanner',[BannerController::class,'StoreBlogBanner'])->name('store.blogbanner');
Route::get('/delete/banner/{id}',[BannerController::class,'DeleteBlogBanner']);

//ContactBanner
Route::post('/store/contactbanner',[BannerController::class,'StoreContactBanner'])->name('store.contactbanner');
Route::get('/delete/banner/{id}',[BannerController::class,'DeleteContactBanner']);

//Count 
Route::get('/dashboard',[CountController::class,'Count']);