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

/*
 * GET Route declared using the Route facade for index page
 * Returns view of index
 */
Route::get('/', function()
{
	return View::make('index');
});

use Base32\Base32;

/*
 * GET Route declared using the Route facade for Base 32 Decoder page
 * Returns view of Base32Decoder
 */
Route::get('/Base32Decoder', function()
{
	return View::make('Base32Decoder');
});

/*
 * POST route for Base 32 Decoder page
 * Retrieves the input generated on Base32Decoder GET Route
 * Generates base 32 decoded string based on input retrieved
 * Returns view of post
 */
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

/*
 * GET Route declared using the Route facade for Base 32 Encoder page
 * Returns view of Base32Encoder
 */
Route::get('/Base32Encoder', function()
{
	return View::make('Base32Encoder');
});

/*
 * POST route for Base 32 Encoder page
 * Retrieves the input generated on Base32Encoder GET Route
 * Generates base 32 encoded string based on input retrieved
 * Returns view of post
 */
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

/*
 * GET Route declared using the Route facade for User page
 * Returns view of User
 */
Route::get('/User', function() {

    return View::make('User');

});

/*
 * POST route for User page
 * Retrieves the input generated on User GET Route
 * Generates random user based on input retrieved
 * If address selected also generates address for random user
 * If phone selected also generates phone for random user
 * Returns view of post
 */
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

/*
 * GET Route declared using the Route facade for Lorem page
 * Returns view of Lorem
 */
Route::get('/Lorem', function() {

    return View::make('Lorem');
  
});

/*
 * POST route for Lorem page
 * Retrieves the input generated on Lorem GET Route
 * Generates x number of Lorem paragraphs based on input retrieved
 * Returns view of post
 */
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