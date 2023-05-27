<?php

use App\User;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;

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
    return view('site.front_dashboard');
})->name('site.front_dashboard');


Route::get('/home/about_us', function () {
    return view('site.contact-us');
})->name('site.contact-us');

Route::get('/home/contact_us', function () {
    return view('site.about');
})->name('site.about');

Route::get('/brows/company', function () {
    $jobs = \App\Models\Job::get();
    $user = \App\Models\Student::get();
    $company = \App\Models\Company::get();
   $skills  = \App\Models\Skills::get();
    $job_type  = \App\Models\JobType::get();

    return view('site.brows_job', compact('jobs', 'company', 'user','skills','job_type'));


})->name('company.browse');
    Route::get('filter/brows/company', function (Request $request) {
        $jobs = \App\Models\Job::where('job_type',$request->job_type)->orwhere('skill_id',$request->skill_id)->orwhereBetween('salary', [$request->salary_min, $request->salary_max])->get();

        $user = \App\Models\Student::get();
        $company = \App\Models\Company::get();
        $skills  = \App\Models\Skills::get();
        $job_type  = \App\Models\JobType::get();

        return view('site.brows_job',compact('jobs','company','user','skills','job_type'));

})->name('browse.filter');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('company/show/{id}', function ($id) {
    $company =\App\Models\Company::find($id);
    return view('site.company-profile',compact('company'));
})->name('company.show');






Route::get('forget/password', function () {
    return view('site.forget');
})->name('forget.show');



Route::get('candidates/show/{id}', function ($id) {
    $company =\App\Models\Student::find($id);
    return view('site.candidate-profile',compact('company'));
})->name('candidates.show');


Route::get('/jobber/register', function () {
    return view('site.register');
})->name('company.register');


Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test',function (){
    return view('admin.section.section_test');
    });



Route::get('test',function (){
    return view('welcome');
//return $users = QueryBuilder::for(User::class)
//    ->allowedFilters(['name', 'email'])
//    ->get();
});
