<?php
Route::get('goods/index/{mark?}','GoodsController@index');//加载添加商品视图
Route::get('goods/goodsList','GoodsController@goodsList');//加载商品列表视图
Route::get('goods/goodsAreaList','GoodsController@goodsAreaList');//加载专区商品列表视图
Route::get('goods/getGoodsClass','GoodsController@getGoodsClass');//获取商品分类
Route::get('goods/getInputForm','GoodsController@getInputForm');//获取添加商品中的input的表单
Route::post('goods/addGoods','GoodsController@addGoods');//执行添加商城商品操作
Route::post('goods/actGoodsArea','GoodsController@actGoodsArea');//执行添加商品专区操作
Route::get('goods/commonSet','GoodsController@commonSet');//执行商品列表中的公共设置
Route::post('goods/editGoodsInfo','GoodsController@editGoodsInfo');//修改商品列表中的商品详情
Route::get('goods/goodsDel','GoodsController@goodsDel');//商城商品列表中的删除操作
Route::get('goods/smallPicEdit/{id}/{flag}','GoodsController@smallPicEdit');//加载商品列表中的修改轮播图视图
Route::post('goods/editSmallPic','GoodsController@editSmallPic');//执行修改商品列表中的修改轮播图操作
Route::get('goods/delSmallPic','GoodsController@delSmallPic');//执行修改商品轮播图的删除操作

Route::get('goods/goodsEdit/{id}','GoodsController@goodsEdit');//加载修改商城商品列表中的修改视图
Route::post('goods/actEditGoods','GoodsController@actEditGoods');//执行修改商城商品列表中的修改操作
Route::get('goods/goodsAreaEdit/{id}','GoodsController@goodsAreaEdit');//加载修改专区商品列表中的修改视图
Route::post('goods/actEditAreaGoods','GoodsController@actEditAreaGoods');//执行修改专区商品列表中的修改操作
?>