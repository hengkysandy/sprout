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

Route::get('/', 'PageController@login_company');

Route::get('download/file','CloudinaryController@download');

Route::post('upload', 'CloudinaryController@upload');

Route::get('regis_1', 'CompanyController@register_1');
Route::post('regis_2', 'CompanyController@register_2');
Route::get('regis_3', 'CompanyController@register_3');
Route::post('doRegis', 'CompanyController@doRegis');
Route::post('doRegis3', 'CompanyController@doRegis3');
Route::get('regis_success', 'CompanyController@registerSuccess');
Route::post('doLoginCompany', 'CompanyController@doLoginCompany');
Route::get('logoutCompany', 'CompanyController@logoutCompany');

Route::get('regis_user', 'PageController@registerUser');
Route::get('disclaimer', 'PageController@disclaimer');

Route::get('login', 'PageController@login');
Route::post('doLoginAdmin', 'PageController@doLoginAdmin');

Route::group(['middleware' => 'checkCompany'], function () {
    Route::get('home_login', 'PageController@home_login');
    Route::post('doLoginUser', 'PageController@doLoginUser');
});

Route::group(['middleware' => 'checkUser'], function () {
    Route::get('home', 'PageController@home');
    
    Route::get('profile', 'CompanyController@profile');
    Route::post('doRegisUser', 'CompanyController@doRegisUser');
    
    Route::get('logoutUser', 'PageController@logoutUser');
    Route::post('doExtendCompanyPackage', 'PageController@doExtendCompanyPackage');
    Route::get('profile', 'CompanyController@profile');


    Route::post('doAddUnit', 'UnitController@create');
    Route::post('doUpdateUnit/{id}', 'UnitController@update');
    Route::get('doDeleteUnit', 'UnitController@delete');
    Route::get('getUnitDataAjax/{id}', 'UnitController@ajax');
    
    Route::get('post_buy_lead', 'BuyLeadController@postBuyLead');
    Route::post('doInsertBuyLead', 'BuyLeadController@doInsertBuyLead');
    Route::get('doChangeStatusBuyLead', 'BuyLeadController@doChangeStatusBuyLead');
});

Route::group(['middleware' => 'checkUser','checkSales'],function(){
    Route::get('buy-lead-list','BuyLeadController@listBuyLead');
    Route::get('item/{id}','BuyLeadController@showItem');
    Route::get('acceptRequest/{buylead}/{user}','BuyLeadController@acceptRequest');
    Route::get('requestBuyLead/{id}','BuyLeadController@requestBuyLead');
    Route::post('createQuotation','BuyLeadController@createQuotation');
    Route::post('assignUser/{id}','BuyLeadController@assignUser');
}); 

Route::group(['middleware' => 'checkAdmin'], function () {
    Route::get('dash_home', 'PageController@dashHome');
    Route::get('logoutAdmin', 'PageController@logoutAdmin');

    Route::get('shipping_term', 'ShippingController@shippingTerm');
    Route::post('doInsertShippingTerm', 'ShippingController@doInsertShippingTerm');
    Route::post('doUpdateShippingTerm/{id}', 'ShippingController@doUpdateShippingTerm');
    Route::get('doDeleteShippingTerm', 'ShippingController@doDeleteShippingTerm');
    Route::get('getShippingTermDataAjax/{id}', 'ShippingController@getShippingTermDataAjax');

    Route::get('city_area', 'AreaController@city_area');
    Route::post('doInsertArea', 'AreaController@doInsertArea');
    Route::post('doUpdateArea/{id}', 'AreaController@doUpdateArea');
    Route::get('doDeleteArea', 'AreaController@doDeleteArea');
    Route::get('getAreaDataAjax/{id}', 'AreaController@getAreaDataAjax');

    Route::get('business_category', 'PageController@businessCategory');
    Route::get('business_category_detail', 'PageController@detailBusinessCategory');
    Route::get('business_category_modal', 'PageController@businessCategoryModalData');

    Route::post('doInsertSection', 'SectionController@doInsertSection');
    Route::get('doDeleteSection', 'SectionController@doDeleteSection');
    Route::get('getSectionDataAjax/{id}', 'SectionController@getSectionDataAjax');
    Route::post('doUpdateSection/{id}', 'SectionController@doUpdateSection');

    Route::post('doInsertDivision', 'DivisionController@doInsertDivision');
    Route::get('doDeleteDivision', 'DivisionController@doDeleteDivision');
    Route::get('getDivisionDataAjax/{id}', 'DivisionController@getDivisionDataAjax');
    Route::post('doUpdateDivision/{id}', 'DivisionController@doUpdateDivision');
    Route::get('loadDivisionDataAjax/{sectionId}', 'DivisionController@loadDivisionDataAjax');
    
    Route::post('doInsertGroup', 'GroupController@doInsertGroup');
    Route::get('doDeleteGroup', 'GroupController@doDeleteGroup');
    Route::get('getGroupDataAjax/{id}', 'GroupController@getGroupDataAjax');
    Route::post('doUpdateGroup/{id}', 'GroupController@doUpdateGroup');

    Route::get('company_membership', 'PageController@companyMembership');
    Route::get('member', 'PageController@member');

    Route::get('new_member_request', 'PageController@memberRequest');
    Route::get('doChangeStatusCompanyPackage', 'PageController@doChangeStatusCompanyPackage');
    
    Route::get('rfq', 'PageController@rfq');

});


// User
// Post Buy Lead
// Procurement Manager
//Route::get('/');
