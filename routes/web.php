<?php

use Illuminate\Support\Facades\Route;

//Contoller

use App\Http\Controllers\AnmolController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::any('/practice',function(){
//     $name=["anmol","roshan","raj"];
//     $role=["engineer","DA",'QA'];
//     return view('practice',compact("name","role"));
// });


// Route::view('/practice','practice',["name"=>"anmol","company"=>"CTS"]);


Route::get('/practise',function(){
    return redirect('/project/practice');
})->name('direct');


// Route::get('/contact/{id}/{id1}',function($a,$b){
//    return view('delete',compact('a','b'));
// });

Route::get('/contact/{id?}/{id1?}',function($a=null,$b=null){
    return view('delete',compact('a','b'));
 });

 Route::get('/user/{id?}/{name?}', function ($id=null,$name = "anmol") {
    return [$id,$name];
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);


Route::get('cts/{path}',function($path){
   return $path;
})->where(['path'=>'.*']);


Route::prefix('project')->group(function(){
    Route::any('/practice',function(){
        $name=["anmol","roshan","raj"];
        $role=["engineer","DA",'QA'];
        return view('practice',compact("name","role"));
    });
});


//Controllers in Laravel

Route::controller(AnmolController::class)->group(function(){
    Route::get('/anmol','anmol');
    Route::get('/raj/{id}','raj')->name('rajgiri');   
});

Route::get('/aran',[AnmolController::class,'aran']);
Route::get('/aran', 'App\Http\Controllers\AnmolController@aran');
//Route::get('/aran','AnmolController@aran');

Route::get('/invoke',AnmolController::class);


///practise of Photo controller
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

//practise for student Controller
// use App\Http\Controllers\StudentController;

//for reading
Route::get('/studentData',[StudentController::class,'studentData']);
//for writing
//Route::get('/saveStudentData',[StudentController::class,'saveStudentData']);
//for updating
Route::get('/updateStudentData',[StudentController::class,'updateStudentData']);
//for deleting
Route::get('/deleteStudentData',[StudentController::class,'deleteStudentData']);

use App\Http\Controllers\PostController;

Route::get('/savePost',[PostController::class,'savePost']);

Route::get('/multiplePost',[PostController::class,'multiplePost']);


//practise of day3 of week 2

//Route::view('/posts/entry','posts.entry');

// Route::get('/posts/entry',function(){
//     $arr=['data'=>[
//         ['name'=>"cts",
//          'position'=>"xyz"
//     ],

//     ['name'=>"tech",
//     'position'=>"abc"
//     ],

//     ['name'=>"cloud",
//     'position'=>"def"
//      ]
//      ]
// ];
//     return view('posts.entry',$arr);
// });


//to use View facade and to use ::make function

use Illuminate\Support\Facades\View;
Route::get('/posts/entry',function(){
    $arr=['data'=>[
        ['name'=>"cts",
         'position'=>"xyz"
    ],

    ['name'=>"tech",
    'position'=>"abc"
    ],

    ['name'=>"cloud",
    'position'=>"def"
     ]
     ]
];
    return View::make('posts.entry',$arr);
});

// first static method in View Facade

Route::get('/raj',function(){
 return View::first(['nothing','raj']);
});

//exists method of View Facade

// Route::get('/raj',function(){
//     if(View::exists('raja')){
//         return "<h1>Exists</h1>";
//     }
//     return "<h1>Not exist</h1>";
//    });

//sharing in the laravel app


//for master layout @extends practise

Route::get('/layouts/welcome', function () {
    return view('layouts.welcome');
});

//Week 2 Day 4 practise 

use App\Http\Controllers\StudentController;

Route::view('/addStudent','student.addstudent')->name('addStudent');

Route::post('/saveStudent',[StudentController::class,'saveStudent'])->name('saveStudent');

Route::get('/studentData',[StudentController::class,'studentData']);

Route::get('/deleteStudent/{id}',[StudentController::class,'deleteStudent']);

Route::get('/update/{item}',[StudentController::class,'update']);

Route::post('/updateData',[StudentController::class,'updateData'])->name('updateData');



//working with images
//For adding an image
use App\Http\Controllers\ImageUploadController;

Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');



//working with Authentication and middleware Week2 Day 5

Route::view('/auth','Registration.auth');

Route::view('auth/signup','Registration.signup');

Route::get('/auth/login',[AuthController::class,'login']);

Route::post('auth/save',[AuthController::class,'save']);

Route::get('/auth/aboutus',[AuthController::class,'aboutus'])->middleware('authmid');

Route::get('auth/contact',[AuthController::class,'contact'])->middleware('authmid');

Route::view('/nopage','Registration.nopage');

Route::get('auth/logout',[AuthController::class,'logout']);

Route::post('auth/saveData',[AuthController::class,'saveData']);


//working with notification

use App\Http\Controllers\NotificationController;

Route::get('notification/mail',[NotificationController::class,'index']);

use App\Http\Controllers\TestQueueEmails;
Route::get('sending-queue-emails', [TestQueueEmails::class,'sendTestEmails']);