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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('pos','PosController');

// Route::resource('Purchase/dashboard','DashboardController');

// Route::resource('purchase','PurchaseController');
// Route::resource('create','CreateItemController');
// Route::resource('products','ProductManageController');
Route::get('delete/{id}','ProductManageController@destroy');
// Route::resource('productcategory','ProductCategoryController');
Route::get('delete/{id}','ProductCategoryController@destroy');
// Route::get('/get_subcats','CreateItemController@get_subcats');
// Route::resource('addcategory','ProductCategoryController');
// Route::resource('warehouse','WarehouseController');
Route::get('del/{id}','WarehouseController@destroy');
// Route::resource('createwarehouse','CreateWarehouseController');
// Route::resource('purchaseorder','PurchaseorderController');
// Route::resource('managepurchase','ManagepurchaseController');
// Route::resource('stockreturn','StockReturnController');
// Route::resource('viewstock','ViewReturnStockController');
// Route::resource('addprocategory','Add_product_categoryController');
// Route::resource('inventory','InventoryController');
Route::resource('addsupplier','AddSupplierController');


// New Route

Route::resource('sale/dashboard','Sale\DashboardController');
Route::resource('invoice','Sale\InvoiceController');
Route::resource('quote','Sale\QuoteController');
Route::resource('purchase/dashboard','Purchase\DashboardController');
Route::resource('purchase','Purchase\PurchaseOrderController');
Route::resource('inventory/dashboard','Inventory\DashboardController');
Route::resource('product','Inventory\ProductController');
Route::resource('category','Inventory\CategoryController');
Route::resource('warehouse','Inventory\WarehouseController');
Route::get('del/{id}','Inventory\WarehouseController@destroy');
Route::resource('stock','Inventory\StockController');
// Route::resource('stock/stockreturn','Inventory\StockReturnController');



