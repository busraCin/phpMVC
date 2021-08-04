<?php

require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';

Route::run('/' , function(){
    echo "merhaba dünya";
});

Route::run('/uyeler' ,  'uyeler@index');
Route::run('/uyeler' ,  'uyeler@post', 'post');
Route::run('/uye/{url}' , 'uye@index');
Route::run('/profil/sifre-degistir' , 'profile/changepassword@index');

