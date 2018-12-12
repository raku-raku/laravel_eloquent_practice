<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Comment;
use App\Models\Post;
use App\Models\Country;
use App\Models\User;
use App\Models\Phone;

Route::get('/', function () {
//    //  save
//    $comment = new Comment(['body' => 'A new comment.']);
//    $post = Post::find(1);
//    $post->comments()->save($comment);

//    // saveMany
//    $post = Post::find(1);
//    $post->comments()->saveMany([
//        new Comment(['body' => 'A new comment.']),
//        new Comment(['body' => 'Another comment.']),
//    ]);

//    // create
//    $comment = ['body' => 'A new comment.'];
//    $post = Post::find(1);
//    $post->comments()->create($comment);

//    // createMany
//    $post = Post::find(1);
//    $post->comments()->createMany([
//        ['body' => 'A new comment.'],
//        ['body' => 'Another comment.'],
//    ]);

//    // push
//    $country = Country::find(2);
//    $country->users[0]->name = 'user name';
//    $country->users[0]->posts[0]->title = 'post title';
//    $country->push();

//    // associate
//    $user = User::find(1);
//    $post = Post::find(1);
//    $post->user()->associate($user);
//    $post->save();

//    // dissociate
//    $phone = Phone::find(1);
//    $phone->user()->dissociate();
//    $phone->save();

//    // attach1
//    $roleId1 = 1;
//    $roleId2 = 2;
//    $user1 = User::find(1);
//    $user1->roles()->attach($roleId1);
//    $user1->roles()->attach($roleId2, ['column1' => 'xxxxx']);

//    // attach2
//    $roleId1 = 1;
//    $roleId2 = 2;
//    $user2 = User::find(2);
//    $user2->roles()->attach([
//        $roleId1 => ['column1' => 'xxxxx'],
//        $roleId2 => ['column1' => 'yyyyy'],
//    ]);

//    // updateExistingPivot
//    $roleId = 1;
//    $user = User::find(1);
//    $user->roles()->updateExistingPivot($roleId, ['column1' => 'xxxxx']);

//    // detach
//    $user1 = User::find(1);
//    $user1->roles()->detach(1);
//
//    $user2 = User::find(2);
//    $user2->roles()->detach();

//    // sync
//    $user = User::find(1);
//    $user->roles()->sync([2 => ['column1' => 'xxxxx'], 3]);

//    // syncWithoutDetaching
//    $user = User::find(1);
//    $user->roles()->syncWithoutDetaching([2 => ['column1' => 'xxxxx'], 3]);

//    // toggle
//    $user = User::find(1);
//    $user->roles()->toggle([1, 2, 3]);
    
    return view('welcome');
});
