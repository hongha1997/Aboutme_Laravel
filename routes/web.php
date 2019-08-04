<?php
Route::pattern('slug', '(.*)');

Route::pattern('id', '([0-9]*)');

// Route::get('/hahaha',function(){
//     return view('aboutme.aboutme.index');
// });

Route::get('/',[
    'uses'=>'Aboutme\AboutmeController@index',
    'as' =>'aboutme.aboutme.index'
]);

Route::post('/',[
    'uses'=>'Aboutme\AboutmeController@postIndex',
    'as' =>'aboutme.aboutme.index'
]);

Route::get('/news',[
    'uses'=>'Aboutme\AboutmeNewsController@index',
    'as' =>'aboutme.news.index'
]);

Route::get('/thumuc/{slug}-{id}.html',[
    'uses'=>'Aboutme\AboutmeNewsController@cat',
    'as' =>'aboutme.news.cat'
]);

Route::get('/chitiet/{slug}-{id}.html',[
    'uses'=>'Aboutme\AboutmeNewsController@detail',
    'as' =>'aboutme.news.detail'
]);

Route::post('/comment/{id}',[
    'uses'=>'Aboutme\AboutmeNewsController@postAddComment',
    'as' =>'aboutme.news.comment'
]);

Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('index')->group(function(){
        Route::get('/index',[
            'uses'=>'IndexController@index', 
            'as' =>'admin.index.index'       
        ]);
    });
    Route::prefix('news')->group(function(){
        Route::get('/index',[
            'uses'=>'NewsController@index', 
            'as' =>'admin.news.index'       
        ]);
        Route::get('/add',[
            'uses'=>'NewsController@getAdd',
            'as' =>'admin.news.add'
        ]);
        Route::post('/add',[
            'uses'=>'NewsController@postAdd',
            'as' =>'admin.news.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'NewsController@getEdit',
            'as' =>'admin.news.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'NewsController@postEdit',
            'as' =>'admin.news.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'NewsController@del',
            'as' =>'admin.news.del'
        ]);
    });
    Route::prefix('cat')->group(function(){
        Route::get('/index',[
            'uses'=>'CatController@index',
            'as' =>'admin.cat.index'
        ]);
        Route::get('/add',[
            'uses'=>'CatController@getAdd',
            'as' =>'admin.cat.add'
        ]);
        Route::post('/add',[
            'uses'=>'CatController@postAdd',
            'as' =>'admin.cat.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'CatController@getEdit',
            'as' =>'admin.cat.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'CatController@postEdit',
            'as' =>'admin.cat.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'CatController@del',
            'as' =>'admin.cat.del'
        ]);
    });
    Route::prefix('contact')->group(function(){
        Route::get('/index',[
            'uses'=>'ContactController@index',
            'as' =>'admin.contact.index'
        ]);
        Route::post('/index',[
            'uses'=>'ContactController@postIndex',
            'as' =>'admin.contact.index'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'ContactController@del',
            'as' =>'admin.contact.del'
        ]);
    });
    Route::prefix('user')->group(function(){
        Route::get('/index',[
            'uses'=>'UsersController@index',
            'as' =>'admin.user.index'
        ]);
        Route::get('/add',[
            'uses'=>'UsersController@getAdd',
            'as' =>'admin.user.add'
        ]);
        Route::post('/add',[
            'uses'=>'UsersController@postAdd',
            'as' =>'admin.user.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'UsersController@getEdit',
            'as' =>'admin.user.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'UsersController@postEdit',
            'as' =>'admin.user.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'UsersController@del',
            'as' =>'admin.user.del'
        ]);
    });
    Route::prefix('aboutme')->group(function(){
        Route::get('/index',[
            'uses'=>'AboutmeController@index', 
            'as' =>'admin.aboutme.index'       
        ]);
        Route::get('/add',[
            'uses'=>'AboutmeController@getAdd',
            'as' =>'admin.aboutme.add'
        ]);
        Route::post('/add',[
            'uses'=>'AboutmeController@postAdd',
            'as' =>'admin.aboutme.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'AboutmeController@getEdit',
            'as' =>'admin.aboutme.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'AboutmeController@postEdit',
            'as' =>'admin.aboutme.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'AboutmeController@del',
            'as' =>'admin.aboutme.del'
        ]);
    });
    Route::prefix('saying')->group(function(){
        Route::get('/index',[
            'uses'=>'SayingController@index', 
            'as' =>'admin.saying.index'       
        ]);
        Route::get('/add',[
            'uses'=>'SayingController@getAdd',
            'as' =>'admin.saying.add'
        ]);
        Route::post('/add',[
            'uses'=>'SayingController@postAdd',
            'as' =>'admin.saying.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'SayingController@getEdit',
            'as' =>'admin.saying.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'SayingController@postEdit',
            'as' =>'admin.saying.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'SayingController@del',
            'as' =>'admin.saying.del'
        ]);
    });
    Route::prefix('skill')->group(function(){
        Route::get('/index',[
            'uses'=>'SkillController@index', 
            'as' =>'admin.skill.index'       
        ]);
        Route::get('/add',[
            'uses'=>'SkillController@getAdd',
            'as' =>'admin.skill.add'
        ]);
        Route::post('/add',[
            'uses'=>'SkillController@postAdd',
            'as' =>'admin.skill.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'SkillController@getEdit',
            'as' =>'admin.skill.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'SkillController@postEdit',
            'as' =>'admin.skill.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'SkillController@del',
            'as' =>'admin.skill.del'
        ]);
    });
    Route::prefix('advs')->group(function(){
        Route::get('/index',[
            'uses'=>'AdvsController@index', 
            'as' =>'admin.advs.index'       
        ]);
        Route::get('/add',[
            'uses'=>'AdvsController@getAdd',
            'as' =>'admin.advs.add'
        ]);
        Route::post('/add',[
            'uses'=>'AdvsController@postAdd',
            'as' =>'admin.advs.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'AdvsController@getEdit',
            'as' =>'admin.advs.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'AdvsController@postEdit',
            'as' =>'admin.advs.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'AdvsController@del',
            'as' =>'admin.advs.del'
        ]);
    });
    Route::prefix('projects')->group(function(){
        Route::get('/index',[
            'uses'=>'ProjectsController@index', 
            'as' =>'admin.projects.index'       
        ]);
        Route::get('/add',[
            'uses'=>'ProjectsController@getAdd',
            'as' =>'admin.projects.add'
        ]);
        Route::post('/add',[
            'uses'=>'ProjectsController@postAdd',
            'as' =>'admin.projects.add'
        ]);
        Route::get('/edit/{id}',[
            'uses'=>'ProjectsController@getEdit',
            'as' =>'admin.projects.edit'
        ]);
        Route::post('/edit/{id}',[
            'uses'=>'ProjectsController@postEdit',
            'as' =>'admin.projects.edit'
        ]);
        Route::get('/del/{id}',[
            'uses'=>'ProjectsController@del',
            'as' =>'admin.projects.del'
        ]);
    });
    Route::prefix('comment')->group(function(){
        Route::get('/index',[
            'uses'=>'CommentController@index', 
            'as' =>'admin.comment.index'       
        ]);
        Route::get('/del/{id}',[
            'uses'=>'CommentController@del',
            'as' =>'admin.comment.del'
        ]);
    });
});
Route::namespace('Auth')->group(function () {
    Route::get('/login',[
        'uses'=>'AuthController@getLogin',
        'as' =>'auth.auth.login'
    ]);  
    Route::post('/login',[
        'uses'=>'AuthController@postLogin',
        'as' =>'auth.auth.login'
    ]);
    Route::get('/logout',[
        'uses'=>'AuthController@logout',
        'as' =>'auth.auth.logout'
    ]); 
});
// Route::post('/trangthai',[
//     'uses'=>'AjaxController@postTrangthai',
//     'as' =>'trangthai'
// ]);
Route::post('/trangthaiNews',[
    'uses'=>'AjaxController@postTrangthaiNews',
    'as' =>'trangthaiNews'
]);
Route::post('/hahaha',[
    'uses'=>'AjaxController@hahaha',
    'as' =>'hahaha'
]);
Route::post('/trangthaiAboutme',[
    'uses'=>'AjaxController@postTrangthaiaboutme',
    'as' =>'trangthaiAboutme'
]);
Route::post('/searchnews',[
    'uses'=>'AjaxController@postSearchnews',
    'as' =>'searchnews'
]);
Route::post('/searchnewspublic',[
    'uses'=>'AjaxController@postSearchnewsPublic',
    'as' =>'searchnewspublic'
]);
Route::post('/hienthiComment',[
    'uses'=>'AjaxController@postHienthiComment',
    'as' =>'hienthiComment'
]);
Route::post('/hihihi',[
    'uses'=>'AjaxController@postHienthiCommentCon',
    'as' =>'hihihi'
]);
Route::post('/getnumbercmt',[
    'uses'=>'AjaxController@postNumberComment',
    'as' =>'getnumbercmt'
]);
Route::post('/getloadmore',[
    'uses'=>'AjaxController@getLoadmore',
    'as' =>'getloadmore'
]);

// Route::post('/pagination/fetch_data',[
//     'uses'=>'AjaxController@fetch_data',
//     'as' =>'pagination'
// ]);
// Route::get('ajax-pagination',array('as'=>'ajax.pagination','uses'=>'AjaxController@fetch_data'));