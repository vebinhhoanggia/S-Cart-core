<?php
if (file_exists(app_path('Admin/Controllers/AdminProductController.php'))) {
    $nameSpaceAdminProduct = 'App\Admin\Controllers';
} else {
    $nameSpaceAdminProduct = 'SCart\Core\Admin\Controllers';
}
Route::group(['prefix' => 'product'], function () use ($nameSpaceAdminProduct) {
    Route::get('/', $nameSpaceAdminProduct.'\AdminProductController@index')->name('admin_product.index');
    Route::get('create', $nameSpaceAdminProduct.'\AdminProductController@create')->name('admin_product.create');
    Route::get('build_create', $nameSpaceAdminProduct.'\AdminProductController@createProductBuild')->name('admin_product.build_create');
    Route::get('group_create', $nameSpaceAdminProduct.'\AdminProductController@createProductGroup')->name('admin_product.group_create');
    Route::post('/create', $nameSpaceAdminProduct.'\AdminProductController@postCreate')->name('admin_product.create');
    Route::get('/edit/{id}', $nameSpaceAdminProduct.'\AdminProductController@edit')->name('admin_product.edit');
    Route::post('/edit/{id}', $nameSpaceAdminProduct.'\AdminProductController@postEdit')->name('admin_product.edit');
    Route::post('/delete', $nameSpaceAdminProduct.'\AdminProductController@deleteList')->name('admin_product.delete');
    Route::get('/import', $nameSpaceAdminProduct.'\AdminProductController@import')->name('admin_product.import');
    Route::post('/import', $nameSpaceAdminProduct.'\AdminProductController@postImport')->name('admin_product.import');
    Route::post('/clone', $nameSpaceAdminProduct.'\AdminProductController@cloneProduct')->name('admin_product.clone');
});