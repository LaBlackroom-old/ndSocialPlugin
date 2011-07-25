<?php

include(dirname(__FILE__).'/../../../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'www', 'test', true);
$databaseManager = new sfDatabaseManager($configuration);

if(null == Doctrine_Core::getTable('ndWebtvMovie')->showMovie(1)->fetchOne())
{
  Doctrine_Core::loadData(dirname(__FILE__).'/../../../../fixtures');
}

$t = new lime_test(7); /*8*/

$t->comment('Get an instance');
$item = Doctrine_Core::getTable('ndWebtvMovie')->getInstance();
$t->ok($item, 'Current instance is ndWebtvMovie');

$t->comment('Get a movie');
$item = Doctrine_Core::getTable('ndWebtvMovie')->getMovie();
$t->ok($item, 'I got an object!');

$t->comment('Get a movie with the category slug : Breaking News');
$item = Doctrine_Core::getTable('ndWebtvMovie')->getMovieByCategory('breaking-news');
$t->ok($item, 'I got the movie in Breaking News category');
/*
$t->comment('Get the previous movie');
$item = Doctrine_Core::getTable('ndWebtvMovie')->getPreviousMovie();
$t->is($item['title'], 'Vidéo 1', 'The title is Vidéo 1');
*/
$t->comment('Show a movie');
$item = Doctrine_Core::getTable('ndWebtvMovie')->showMovie(1)->fetchOne();
$t->is($item['title'], 'Vidéo 1', 'The title is Vidéo 1');

$item = Doctrine_Core::getTable('ndWebtvMovie')->showMovie('video-1')->fetchOne();
$t->is($item['id'], '1', 'The id is 1');

$item = Doctrine_Core::getTable('ndWebtvMovie')->showMovie('video#1')->fetchOne();
$t->isnt($item['id'], '1', 'The id isn\'t 1');

$t->comment('Get all movies');
$item = Doctrine_Core::getTable('ndWebtvMovie')->getMovies()->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '2', 'There are 2 movies');