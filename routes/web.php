<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineAssessmentModelController;
use App\Models\onlineAssessmentJobsModel;
use App\Models\onlineAssessmentModel;
use App\Models\onlineAssessmentVisasModel;
use App\Models\Videos;
use Illuminate\Http\Request;

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

Route::prefix('/admin')
    ->middleware('auth:admin')
    ->group(function () {

        Route::get('/', function () {
            return view('panel.index');
        })->name('panel.index');

        Route::get('/products', function () {
            return view('panel.shop-products');
        })->name('panel.products');

        Route::get('/add-product', function () {
            return view('panel.shop-addproduct');
        })->name('panel.add-product');

        Route::get('/forgetpwd', function () {
            return view('panel.login');
        })->name('panel.forgetpwd');

        Route::get('/auth-email', function () {
            return view('panel.login');
        })->name('panel.auth-email');

        Route::get('/posts/add', function () {
            return view('panel.post-add');
        })->name('panel.add');

        Route::prefix('/videos')
        ->group(function () {
            Route::get('/', function () {
                $videos = Videos::all();
                return view('panel.videos', compact('videos'));
            })->name('panel.videos');
    
            Route::get('/add', function () {
                return view('panel.add-video');
            })->name('panel.add-video');

            Route::get('/view/{id}', function ($id) {
                $video = Videos::findOrFail($id);
                return view('panel.videos-view', compact('video'));
            })->name('panel.videos-view');
        });

        Route::get('forms/assessment', function () {
            return view('panel.assessment');
        })->name('forms.assessment');

        Route::get('forms/assessment-view/{id}', function ($id) {
            $onlineAssessmentModel = onlineAssessmentModel::findOrFail($id);
            $onlineAssessmentJobsModel = onlineAssessmentJobsModel::where('online_assessment_id', $id)->get();
            $onlineAssessmentVisasModel = onlineAssessmentVisasModel::where('online_assessment_id', $id)->get();
            return view('panel.assessment-view', compact('onlineAssessmentModel', 'onlineAssessmentJobsModel', 'onlineAssessmentVisasModel'));
        })->name('forms.assessment-view');

        Route::get('forms/assessment-view/delete/{id}', function ($id) {
            $onlineAssessmentModel = onlineAssessmentModel::findOrFail($id);
            $onlineAssessmentModel->delete();
            $onlineAssessmentJobsModel = onlineAssessmentJobsModel::where('online_assessment_id', $id)->delete();
            $onlineAssessmentVisasModel = onlineAssessmentVisasModel::where('online_assessment_id', $id)->delete();
            return redirect()->to(route('forms.assessment'));
        })->name('forms.assessment-delete');
    });

Route::get('/admin/login', function () {
    return view('panel.login');
})->name('login');

Route::get('/admin/logout', function () {
    \Auth::logout();
 
    return redirect()->to(route('login'));
})->name('logout');


Route::post('req/login', function (Request $request) {
    
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if (\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->to(route('panel.index'));
    }

    return redirect()->to(route('login'));
})->name('api.login');

// Route::get('/register', function () {
//     return view('panel.login');
// })->name('panel.register');


Route::get('/blank', function () {
    return view('front.blank');
})->name('front.blank');

Route::get('/', function () {
    return view('front.index');
})->name('front.index');

Route::get('/online-assessment', function () {
    return view('front.online-assessment');
})->name('front.online-assessment');

Route::get('/contact', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/forms/contact-view', function () {
    return view('panel.contact-view');
})->name('forms.contact-view');

Route::get('/forms/contact', function () {
    return view('panel.contact');
})->name('forms.contact');

Route::get('/work-visa', function () {
    return view('front.work-visa');
})->name('front.work-visa');

Route::get('/coaching', function () {
    $videos = Videos::all();
    return view('front.coaching', compact('videos'));
})->name('front.coaching');

Route::get('/tourist-visa', function () {
    return view('front.tourist-visa');
})->name('front.tourist-visa');

Route::get('/study-visa', function () {
    return view('front.study-visa');
})->name('front.study-visa');

Route::get('/blog', function () {
    return view('front.blog');
})->name('front.blog');

Route::get('/blog-details', function () {
    return view('front.blog-details');
})->name('front.blog-details');

Route::get('/about', function () {
    return view('front.about');
})->name('front.about');

Route::get('/pickup-passport', function () {
    return view('front.pickup-passport');
})->name('front.pickup-passport');

Route::post('req/online/assessment', function (Request $request) {
    $allReq = $request->all();
    $onlineAssessmentModel = onlineAssessmentModel::create($request->all());
    $allReq['online_assessment_id'] = $onlineAssessmentModel->id;

    if (is_array($allReq['job-name'])) {
        foreach ($allReq['job-name'] as $key => $row) {
            onlineAssessmentJobsModel::create([
                'online_assessment_id' => $onlineAssessmentModel->id,
                'job-name' => $allReq['job-name'][$key],
                'work-experience' => $allReq['work-experience'][$key],
                'employment-period' => $allReq['employment-period'][$key],
                'management-experience' => $allReq['management-experience'][$key],
            ]);
        }
    }

    if (is_array($allReq['visas'])) {
        foreach ($allReq['visas'] as $key => $row) {
            onlineAssessmentVisasModel::create([
                'online_assessment_id' => $onlineAssessmentModel->id,
                'visas' => $allReq['visas'][$key],
                'type-visa' => $allReq['type-visa'][$key],
                'enter-date' => $allReq['enter-date'][$key],
                'exit-date' => $allReq['exit-date'][$key],
            ]);
        }
    }

    return redirect()->to(route('front.online-assessment'));
})->name('api.online.assessment');

Route::post('req/videos/add', function (Request $request) {
    $video = Videos::create([
        'title' => $request->title,
        'description' => $request->description,
        'link' => '',
        'cover' => basename(\Storage::putFile('public', $request->file('cover'))),
    ]);

    if($request->file('video_file') != null) {
        $video->link = basename(\Storage::putFile('public', $request->file('video_file')));
    } elseif($request->video_link != '') {
        $video->link = $request->video_link;
    }

    $video->save();

    return redirect()->to(route('panel.videos'));
})->name('api.add-video');

Route::get('req/videos/remove/{id}', function (Request $request, $id) {
    $video = Videos::findOrFail($id);
    $video->delete();
    return redirect()->to(route('panel.videos'));
})->name('api.remove-video');

Route::post('req/videos/edit/{id}', function (Request $request, $id) {
    $video = Videos::findOrFail($id);
    $video->title = $request->title;
    $video->description = $request->description;

    if($request->file('video_file') != null) {
        dd($request->file('video_file')->getErrorMessage());
        $video->link = basename(\Storage::putFile($request->file('video_file'), 'video_file'));
    } elseif($request->video_link != '') {
        $video->link = $request->video_link;
    }

    if($request->hasFile('cover')) {
        $video->cover = basename(\Storage::putFile('public', $request->file('cover')));
    }

    $video->save();

    return redirect()->to(route('panel.videos'));
})->name('api.update-video');

Route::get('/follow-passport', function () {
    return view('front.follow-passport');
})->name('front.follow-passport');
