<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// PRUEBA 1
// Route::get("/ruta/{prueba}", function ($prueba) {
//     return "Esto es una prueba: $prueba";
// });

//PROGRAMS ENDPOINTS
//Endpoint for serving all the programs
Route::get("/programs", function() {
    //Missing: Validating input data
    //Missing: CRUD Select all
    return "Serving all the programs";
});

// Endpoint for serving 1 program selected by ID
Route::get("/program/{id}", function($id) {
    //Missing: Validating input data
    //Missing: CRUD Select by ID
    return "Serving the program of the id: $id";
})->where("id", "[0-9]+"); //Validating that it's always an int

//PROJECTS ENDPOINTS
// Endpoint for serving all projects
Route::get("/projects", function() {
    //Missing: Validating input data
    //Missing: CRUD Select all
    return "Serving all my projects";
});

// Endpoint for serving 1 project selected by ID
Route::get("/project/{id}", function($id) {
    //Missing: Validating input data
    //Missing: CRUD Select by ID
    return "Serving the project of the id: $id";
})->where("id", "[0-9]+"); //Validating that it's always an int

//ABOUT ME ENDPOINT
Route::get("/about", function() {
    //Missing: Validating input data
    //Missing: CRUD Select all
    return "Serving about me info";
});

//CONTACT ENDPOINT
Route::post("/contact", function() {
    //Missing: Validating input data, be careful
    //Missing: CRUD Insert data
    return "Informating that the data was correctly received";
    // For testing on bash: curl -X POST http://127.0.0.1:8000/api/contact
});

//SKILLS ENDPOINT
Route::get("/skills", function() {
    //Missing: Validating input data
    //Missing: CRUD Select all
    return "Serving all my skills";
});

//WORK EXPERIENCE ENDPOINT
Route::get("/work_experience", function() {
    //Missing: Validating input data
    //Missing: CRUD Select all
    return "Serving all my working experience";
});

//SWITCHING THE LANGUAGE ENDPOINT
Route::get("/switch_language/{lang}", function($lang) {
    return "Serving the texts translated for the language: $lang";
})->where("lang", "[a-zA-Z]+");//Validating that it's always an alphabet string