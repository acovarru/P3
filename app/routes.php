<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/XKCD', function()
{
	return View::make('XKCD');
});
	
Route::get('/User', function() {

    $view  = '<form method="POST">';
    $view .= 'Number of Users : <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});
Route::post('/User', function() {
$input =  Input::all();
 
$post = Input::get('title', false);

$faker = Faker\Factory::create();

for ($i=0; $i < $post; $i++) {
  echo $faker->name, "\n";
 
}

});

Route::get('/Lorem', function() {

    $view  = '<form method="POST">';
    $view .= 'Number of Paragraphs : <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/Lorem', function() {
$input =  Input::all();
 
$post = Input::get('title', false);
	
$generator = new Badcow\LoremIpsum\Generator();
 
$paragraphs = $generator->getParagraphs($post);
echo implode('<p>', $paragraphs);

});