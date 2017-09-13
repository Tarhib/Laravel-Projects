<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('/welcome');
});


Route::group(['middleware' => ['web']],function() {

	Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/admin','AdminController@index');


Route::get('/search','SearchController@type');
Route::post('/handleSearch','SearchController@getbox');
Route::post('/handleSongName','SearchController@songName');
Route::post('/handleAlbumName','SearchController@albumName');
Route::post('/handleArtistName','SearchController@artistName');


 Route::get('upload','FilesController@upload');	
Route::get('/deleteFile/{id}', ['as' => 'deleteFile', 'uses' => 'FilesController@deleteFile']);
Route::get('/playCheck{id}', ['as' => 'playCheck', 'uses' => 'FilesController@play']);
 Route::post('/handleUpload','FilesController@handleUpload');

 Route::get('artist','ArtistController@upload');
 Route::post('/artisthandleUpload','ArtistController@handleUpload');
 Route::get('/deleteArtist/{id}', ['as' => 'deleteArtist', 'uses' => 'ArtistController@deleteArtist']);

 Route::get('album','AlbumController@upload');
 Route::post('/handlealbumUpload','AlbumController@handlealbumUpload');
 Route::get('/deleteAlbum/{id}', ['as' => 'deleteAlbum', 'uses' => 'AlbumController@deleteAlbum']);



Route::get('/playalbum','PlayController@showAlbum');
Route::get('/albumSongs/{id}',[ 'as' => 'albumSongs', 'uses' => 'PlayController@albumSongs']);
Route::get('/albumplay{id}', ['as' => 'albumplay', 'uses' => 'PlayController@play']);


Route::get('/playartist','PlayController@showArtist');
Route::get('/artistSongs/{id}',[ 'as' => 'artistSongs', 'uses' => 'PlayController@artistSongs']);
Route::get('/artistplay{id}', ['as' => 'artistplay', 'uses' => 'PlayController@artistplay']);



Route::get('playlist','PlaylistController@create');
Route::post('/handleplaylistUpload','PlaylistController@handleplaylistUpload');
Route::get('/deletePlaylist/{id}', ['as' => 'deletePlaylist', 'uses' => 'PlaylistController@deletePlaylist']);


Route::get('playlistaddsong','PlaylistController@addSong');
Route::post('/handleUploadPlaylistSong','PlaylistController@handleUploadPlaylistSong');
Route::get('/ShowPlaylistAlbumSongs/{id}/{name}',['as' => 'ShowPlaylistAlbumSongs', 'uses' =>'PlaylistController@ShowPlaylistAlbumSongs']);
Route::get('/addToPlaylist/{id}/{name}',['as' => 'addToPlaylist', 'uses' => 'PlaylistController@addToPlaylist']);


Route::get('/showplaylist','ShowPlaylistController@show');
Route::get('/expandSongs{id}', ['as' => 'expandSongs', 'uses' => 'ShowPlaylistController@expand']);

Route::post('/handleHomePageSearch','SearchController@homepageSearch');

Route::get('/like/{id1}/{id2}', ['as' => 'like', 'uses' => 'PlayController@likeSong']);
Route::get('artistlike/{id1}/{id2}', ['as' => 'artistlike', 'uses' => 'PlayController@artistLike']);
Route::get('playlistlike/{id1}/{id2}', ['as' => 'playlistlike', 'uses' => 'ShowPlaylistController@playlistLike']);


Route::get('showlike','PlayController@showLike');

Route::get('showcount','PlayController@showCount');

Route::get('pdf','AdminController@count');






});


