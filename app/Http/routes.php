<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/createTable',function () use($app){
    if(!Schema::hasTable('Problem')){
        Schema::create('Problem', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('content');
            $table->string('IP');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }
});

$app->post('/api/problem', 'ProblemController@ProblemCommit');