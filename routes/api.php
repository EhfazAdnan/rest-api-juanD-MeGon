<?php

use Illuminate\Http\Request;

/**
 * Buyers
*/
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index','show']]);

/**
 * Categories
*/
Route::resource('categories', 'Category\CategoryController', ['except' => ['create','edit']]);

/**
 * Sellers
*/
Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);

/**
 * Sellers
*/
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index','show']]);

/**
 * Transsactions
*/
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index','show']]);

/**
 * Users
*/
Route::resource('users', 'User\UserController', ['except' => ['create','edit']]);
