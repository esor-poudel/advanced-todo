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

Route::get('/test',function(){
return App\User::find(1)->profile;
});

Route::get('/',[
    'uses'=>'FrontEndController@index',
    'as'=>'index'
]);
Route::get('/post/{slug}',[
    'uses'=>'FrontEndController@singlePost',
    'as'=>'post.single'
]);

Route::get('/category/{id}',[
'uses'=>'FrontEndController@category',
'as'=>'category.single'
]);

Route::get('/results', function(){
    $posts= \App\Post::where('title','like', '%' . request('query') . '%')->get();
    return view('results')->with('posts',$posts)
                            ->with('title', 'Search results:'. request('query'))
                            ->with('categories',\App\Category::take(5)->get())
                            ->with('settings',\App\Setting::first())
                            ->with('query', request('query'));
});

Route::get('/tag/{id}',[
    'uses'=>'FrontEndController@tag',
    'as'=>'tag.single'
    ]);
    
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){



    Route::get('/post/create',[
        'uses'=> 'PostsController@create',
        'as'=>'post.create'
    ]);
    
    
    Route::post('/post/store',[
        'uses'=> 'PostsController@store',
        'as'=>'post.store'
    ]);
 
    Route::get('/category/create',[
        'uses'=> 'CategoriesController@create',
        'as'=>'category.create'
    ]);

    
    Route::get('/categories',[
        'uses'=> 'CategoriesController@index',
        'as'=>'categories'
    ]);

    
    Route::get('/posts',[
        'uses'=> 'PostsController@index',
        'as'=>'posts'
    ]);

     
    Route::get('/post/delete/{id}',[
        'uses'=> 'PostsController@destroy',
        'as'=>'post.delete'
    ]);

    Route::get('/posts/trashed/',[
        'uses'=> 'PostsController@trashed',
        'as'=>'posts.trashed'
    ]);

    
    Route::get('/posts/kill/{id}',[
        'uses'=> 'PostsController@kill',
        'as'=>'posts.kill'
    ]);

     
    Route::get('/posts/restore/{id}',[
        'uses'=> 'PostsController@restore',
        'as'=>'posts.restore'
    ]);


     
    Route::get('/posts/edit/{id}',[
        'uses'=> 'PostsController@edit',
        'as'=>'post.edit'
    ]);

     
    Route::post('/post/update/{id}',[
        'uses'=> 'PostsController@update',
        'as'=>'post.update'
    ]);



     
    Route::post('/category/store',[
        'uses'=> 'CategoriesController@store',
        'as'=>'category.store'
    ]);


    Route::get('/category/edit/{id}',[

        'uses'=>"CategoriesController@edit",
        'as'=>'category.edit'
    ]);

    
    Route::get('/category/delete/{id}',[

        'uses'=>"CategoriesController@destroy",
        'as'=>'category.delete'
    ]);

       
    Route::post('/category/update/{id}',[
        'uses'=> 'CategoriesController@update',
        'as'=>'category.update'
    ]);

    Route::get('/tags',[
        'uses'=> 'TagsController@index',
        'as'=>'tag'
    ]);
    Route::get('/tags/edit/{id}',[
        'uses'=> 'TagsController@edit',
        'as'=>'tags.edit'
    ]);
    Route::get('/tags/delete/{id}',[
        'uses'=> 'TagsController@destroy',
        'as'=>'tags.delete'
    ]);
    Route::post('/tags/update/{id}',[
        'uses'=> 'TagsController@update',
        'as'=>'tags.update'
    ]);
    Route::get('/tags/create',[
        'uses'=> 'TagsController@create',
        'as'=>'tags.create'
    ]);

    Route::post('/tags/store',[
        'uses'=> 'TagsController@store',
        'as'=>'tags.store'
    ]);

    Route::get('/users',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);

    Route::get('/user/create',[
        'uses'=>'UsersController@create',
        'as'=>'user.create'
    ]);

    Route::post('/user/store',[
        'uses'=>'UsersController@store',
        'as'=>'user.store'        
    ]);

    Route::get('/user/admin/{id}',[
        'uses'=>'UsersController@admin',
        'as'=>'user.admin'
    ]);

    Route::get('/user/not-admin/{id}',[
        'uses'=>'UsersController@not_admin',
        'as'=>'user.not.admin'
    ]);

    Route::get('/user/profile',[
        'uses'=>'ProfilesController@index',
        'as'=>'user.profile'
    ]);

    Route::get('/user/delete/{id}',[
        'uses'=>'UsersController@destroy',
        'as'=>'user.delete'
    ]);

    Route::post('/user/profile/update',[
        'uses'=>'ProfilesController@update',
        'as'=>'user.profile.update'
    ]);

    Route::get('/settings',[
        'uses'=>'SettingsController@index',
        'as'=>'setting'
    ]);

    Route::post('/setting/update',[
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);






    

});
