<?php
require '../vendor/autoload.php';


ORM::configure("mysql:host=localhost;dbname=bonafideContent");
ORM::configure("username", "root");
ORM::configure("password", "root");

$app = new \Slim\Slim(array(
'mode'=> 'development',
'debug'=> true,
'templates.path'=> '../app/views',
'view'=> new \Slim\Views\Twig()
));



<<<<<<< HEAD
$app-> get('/admin', function () use ($app){
	$links = ORM::for_table('content')->find_many();
	$app->render('adminHome.html', array('link' => $links));
=======

$app-> get('/admin', function () use ($app){
	$links = ORM::for_table('content')->find_many();
	$app->render('adminHome.html', array('content' => $links));
>>>>>>> FETCH_HEAD

	$app-> post('/create/', function (){

<<<<<<< HEAD
		$app-> post('/admin/create/post', function (){
=======
		$app-> post('/post', function (){
>>>>>>> FETCH_HEAD
		if($app != null){
				$addPage = ORM::for_table('content')->create();
				$addPage->save();
				$app->redirect('/admin/');
			}else{
				$app->redirect('/admin/create');
			}
		});
	});
});

$app->run();
?>


	
