<?php

use App\Http\Controllers\AdminProjectsController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// =====Admin Panel=====
    // 1.Admin Project
Route::get('/admin/projects/index', [App\Http\Controllers\AdminProjectsController::class, 'index'])->name('admin.projects.index');
Route::get('/admin/projects/create', [App\Http\Controllers\AdminProjectsController::class, 'create'])->name('admin.projects.create');
Route::post('/admin/projects/store', [App\Http\Controllers\AdminProjectsController::class, 'store'])->name('admin.projects.store');
Route::get('/admin/projects/edit/{id}', [App\Http\Controllers\AdminProjectsController::class, 'edit'])->name('admin.projects.edit');
Route::post('/admin/projects/update/{id}', [App\Http\Controllers\AdminProjectsController::class, 'update'])->name('admin.projects.update');
Route::delete('/admin/projects/delete/{id}', [App\Http\Controllers\AdminProjectsController::class, 'destroy'])->name('admin.projects.destroy');
    //2.Admin Skill
Route::get('/admin/skills/create', [App\Http\Controllers\AdminSkillController::class, 'create'])->name('admin.skills.create');
Route::post('/admin/skills/store', [App\Http\Controllers\AdminSkillController::class, 'store'])->name('admin.skills.store');
Route::get('/admin/skills/index', [App\Http\Controllers\AdminSkillController::class, 'index'])->name('admin.skills.index');
Route::delete('/admin/skills/delete/{id}', [App\Http\Controllers\AdminSkillController::class, 'destroy'])->name('admin.skills.destroy');
    
// =====Users Panel====
Route::get('/projects/index', [App\Http\Controllers\HomePageController::class, 'index'])->name('projects.index');
Route::get('/projects/index/{id}', [App\Http\Controllers\HomePageController::class, 'detail'])->name('projects.detail');
//adding search functionality
Route::get('/search', [App\Http\Controllers\HomePageController::class, 'search'])->name('projects.search');
//Route for skills page
Route::get('/projects/ShowSkillChart', [App\Http\Controllers\HomePageController::class, 'ShowSkillChart'])->name('projects.ShowSkillChart');
//Route for PDF convert view
// routes for PDF Convert View
Route::get('/pdf_view', [App\Http\Controllers\PDFController::class, 'pdfView'])->name('pdf.view');

// routes for PDF Convert
Route::get('/pdf_convert', [App\Http\Controllers\PDFController::class, 'pdfGeneration'])->name('pdf.convert');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
