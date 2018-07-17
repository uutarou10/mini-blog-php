<?php
require __DIR__ . '/vendor/autoload.php';

$klein = new Klein\Klein();

$klein->respond(function ($request, $response, $service, $app) use ($klein) {
  $app->register('db', function() {
    return new PDO('mysql:dbname=mini_blog;host=mysql', 'root', 'password');
  });
});

$klein->respond('GET', '/', function($req, $res, $service, $app) {
  return 'Hello world!';
});

$klein->with('/users', function () use ($klein) {
  $klein->respond('GET', '/new', function($req, $res, $service, $app) {
    return 'ユーザー登録ページだよー';
  });
});


$klein->dispatch();