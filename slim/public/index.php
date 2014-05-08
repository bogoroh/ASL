<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
'mode'=> 'developement',
'debug'=> true,
'templates.path'=> '../app/views',
'view'=> new \Slim\Views\Twig()
));

ORM::configure("mysql:host=localhost;dbname=bonifide");
ORM::configure("username", "root");
ORM::configure("password", "root");



$app-> get('/admin', function (){
	$links = ORM::for_table('content')->find_many();
	$app->render('adminHome.html', array('link' => $links,));

	$app-> post('/admin/create/', function (){

		$app-> post('/admin/create/post', function (){
		if($ != null){
				$addPage = ORM::for_table('content')->create();
				$addPage->save();
				$app->redirect('/admin/');
			}else{
				$app->redirect('/admin/create');
			}
		});
	});
});


	
