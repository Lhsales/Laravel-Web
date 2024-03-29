<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::controller(Controllers\HomeController::class)->group(function(){
    Route::get('/', 'Index')->name('home');
    Route::get('/experiences', 'Experiences')->name('experiences.index');
    Route::get('/knowledges', 'Knowledges')->name('knowledges.index');
});

Route::controller(Controllers\AuthController::class)->group(function(){
    Route::get('/login', 'Index')->name('auth.index');
    Route::get('/logout', 'Logout')->name('auth.logout');
    Route::post('/login', 'Login')->name('auth.login');
});

Route::controller(Controllers\AdminController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin', 'Index')->name('admin.index');
});

Route::controller(Controllers\ScholarityController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin/scholarity/types', 'Types')->name('admin.scholarity.types.index');
    Route::get('/admin/scholarity/types/create', 'CreateType')->name('admin.scholarity.types.create');
    Route::get('/admin/scholarity/types/{id}', 'EditType')->name('admin.scholarity.types.edit');
    Route::get('/admin/scholarity/types/delete/{id}', 'DeleteType')->name('admin.scholarity.types.delete');
    Route::post('/admin/scholarity/types/save', 'SaveType')->name('admin.scholarity.types.save');
    Route::post('/admin/scholarity/types/update/{id}', 'UpdateType')->name('admin.scholarity.types.update');

    Route::get('/admin/scholarity', 'Index')->name('admin.scholarity.index');
    Route::get('/admin/scholarity/create', 'Create')->name('admin.scholarity.create');
    Route::get('/admin/scholarity/{id}', 'Edit')->name('admin.scholarity.edit');
    Route::get('/admin/scholarity/delete/{id}', 'Delete')->name('admin.scholarity.delete');
    Route::post('/admin/scholarity/save', 'Save')->name('admin.scholarity.save');
    Route::post('/admin/scholarity/update/{id}', 'Update')->name('admin.scholarity.update');
});

Route::controller(Controllers\LanguageController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin/languages/types', 'Types')->name('admin.languages.types.index');
    Route::get('/admin/languages/types/create', 'CreateType')->name('admin.languages.types.create');
    Route::get('/admin/languages/types/{id}', 'EditType')->name('admin.languages.types.edit');
    Route::get('/admin/languages/types/delete/{id}', 'DeleteType')->name('admin.languages.types.delete');
    Route::post('/admin/languages/types/save', 'SaveType')->name('admin.languages.types.save');
    Route::post('/admin/languages/types/update/{id}', 'UpdateType')->name('admin.languages.types.update');

    Route::get('/admin/languages', 'Index')->name('admin.languages.index');
    Route::get('/admin/languages/create', 'Create')->name('admin.languages.create');
    Route::get('/admin/languages/{id}', 'Edit')->name('admin.languages.edit');
    Route::get('/admin/languages/delete/{id}', 'Delete')->name('admin.languages.delete');
    Route::post('/admin/languages/save', 'Save')->name('admin.languages.save');
    Route::post('/admin/languages/update/{id}', 'Update')->name('admin.languages.update');
});

Route::controller(Controllers\ExperienceController::class)->middleware(['auth'])->group(function(){
    Route::get('/admin/experiences/{experience_id}/works/create', 'CreateWork')->name('admin.experiences.works.create');
    Route::get('/admin/experiences/{experience_id}/works/{work_id}', 'EditWork')->name('admin.experiences.works.edit');
    Route::get('/admin/experiences/{experience_id}/works/delete/{work_id}', 'DeleteWork')->name('admin.experiences.works.delete');
    Route::post('/admin/experiences/{experience_id}/works/save', 'SaveWork')->name('admin.experiences.works.save');
    Route::post('/admin/experiences/{experience_id}/works/update/{work_id}', 'UpdateWork')->name('admin.experiences.works.update');
    
    Route::get('/admin/experiences', 'Index')->name('admin.experiences.index');
    Route::get('/admin/experiences/create', 'Create')->name('admin.experiences.create');
    Route::get('/admin/experiences/{id}', 'Edit')->name('admin.experiences.edit');
    Route::get('/admin/experiences/delete/{id}', 'Delete')->name('admin.experiences.delete');
    Route::post('/admin/experiences/save', 'Save')->name('admin.experiences.save');
    Route::post('/admin/experiences/update/{id}', 'Update')->name('admin.experiences.update');
});