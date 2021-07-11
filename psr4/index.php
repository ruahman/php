<?php

require './app/bootstrap.php';

//$user = new User('admin', '$ecurePa$$w0rd1');
//
//echo $user->getUsername();
//
//$comment = new Comment('<h1>Hello</h1>');
//echo $comment->getComment();


use Acme\Auth\User as User;
use Acme\Blog\Comment as Comment;

$user = new User('admin', '$ecurePa$$w0rd1');

$comment = new Comment('<h1>Hello</h1>');
echo $comment->getComment();