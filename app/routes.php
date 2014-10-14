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

use Base32\Base32;

Route::get('/Base32Decoder', function()
{
	return View::make('Base32Decoder');
});

Route::post('/Base32Decoder', function()
{
$input =  Input::all();
 
$post = Input::get('string', false);

$decoded = Base32::decode($post);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo $decoded;
 
	return View::make('post');
});

Route::get('/Base32Encoder', function()
{
	return View::make('Base32Encoder');
});

Route::post('/Base32Encoder', function()
{
$input =  Input::all();
 
$post = Input::get('string', false);

$encoded = Base32::encode($post);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo $encoded;
 
	return View::make('post');
});
	
Route::get('/User', function() {

    return View::make('User');

});
Route::post('/User', function() {

$input =  Input::all();
 
$number = Input::get('number', false);

$address = Input::get('address', false);

$phone = Input::get('phone', false);

$faker = Faker\Factory::create();
echo "<br>";
echo "<br>";
echo "<br>";

for ($i=0; $i < $number; $i++) {

if (($address=="address")&&($phone=="phone")){
  echo "<br>";
  echo $faker->name;
  echo "<br>";
  echo $faker->address;
  echo "<br>";
  echo $faker->phoneNumber;
  echo "<br>";
}

if (($phone=="phone")&&($address=="")){
  echo "<br>";
  echo $faker->name;
  echo "<br>";
  echo $faker->phoneNumber;
  echo "<br>";
}

if (($address=="address")&&($phone=="")){
  echo "<br>";
  echo $faker->name;
  echo "<br>";
  echo $faker->address;
  echo "<br>";
}

if (($address=="")&&($phone=="")){

  echo "<br>";
  echo $faker->name;
  echo "<br>";
  }
  
 
}

return View::make('post');

});

Route::get('/Lorem', function() {

    return View::make('Lorem');
  
});

Route::post('/Lorem', function() {
$input =  Input::all();
 
$post = Input::get('title', false);
	
$generator = new Badcow\LoremIpsum\Generator();
 
$paragraphs = $generator->getParagraphs($post);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo implode('<p>', $paragraphs);

return View::make('post');

});