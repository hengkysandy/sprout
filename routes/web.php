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
Route::get('loadCityDataAjax/{provinceId}', 'CompanyController@loadCityDataAjax');
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
    Route::get('doSetUserHeadStatus','CompanyController@doSetUserHeadStatus');
    Route::get('doDeleteUser','CompanyController@doDeleteUser');
    
    Route::post('doRegisUser', 'CompanyController@doRegisUser');
    Route::post('doEditUser', 'CompanyController@doEditUser');
    
    Route::get('logoutUser', 'PageController@logoutUser');
    Route::post('doExtendCompanyPackage', 'CompanyController@doExtendCompanyPackage');
    Route::get('getUserDataAjax/{id}','CompanyController@getUserDataAjax');
    
    // Route::get('profile', 'CompanyController@profile');
    Route::post('doRequestCompanyAddOn','CompanyController@doRequestCompanyAddOn');
    Route::get('getAddOnPriceAjax/{id}', 'CompanyController@getAddOnPriceAjax');

    
    
    Route::get('post-buy-lead', 'BuyLeadController@postBuyLead');
    Route::post('doInsertBuyLead', 'BuyLeadController@doInsertBuyLead');
    Route::get('doChangeStatusBuyLead', 'BuyLeadController@doChangeStatusBuyLead');

    Route::get('history-rfq', 'BuyLeadController@historyRfq');

    Route::get('meeting-schedule', 'MeetingScheduleController@meetingschedule');
    Route::get('meeting-detail', 'MeetingScheduleController@meetingdetail');
    Route::get('meeting-calendar', 'MeetingScheduleController@meetingcalendar');
    Route::get('doInsertMeeting', 'MeetingScheduleController@doInsertMeeting');
    Route::get('acceptMeeting/{id}','MeetingScheduleController@acceptMeeting');
    Route::get('rejectMeeting/{id}','MeetingScheduleController@rejectMeeting');


});

Route::group(['middleware' => 'checkUser','checkSales'],function(){
    Route::get('buy-lead-list','BuyLeadController@listBuyLead');
    Route::get('item/{id}','BuyLeadController@showItem');
    Route::get('detailItem/{id}','BuyLeadController@detailItem');
    Route::get('companyProfile/{id}','PageController@companyProfile');
    Route::get('acceptRequest/{buylead}/{user}','BuyLeadController@acceptRequest');
    Route::get('acceptBuyLead/{id}','BuyLeadController@acceptBuyLead');
    Route::get('requestBuyLead/{id}','BuyLeadController@requestBuyLead');
    Route::post('createQuotation','BuyLeadController@createQuotation');
    Route::post('assignUser/{id}','BuyLeadController@assignUser');
    Route::post('doAssignCompanyBuyLead','BuyLeadController@doAssignCompanyBuyLead');
    Route::get('doRemoveAssignedCompany','BuyLeadController@doRemoveAssignedCompany');

    Route::post('doCreateRevise','BuyLeadController@doCreateRevise');
    Route::get('getQuotationDataAjax/{id}','BuyLeadController@getQuotationDataAjax');
    Route::get('doApproveQuotation','BuyLeadController@doApproveQuotation');

    Route::get('company-database','BuyLeadController@companyDatabase');
    Route::get('doChangeCompanyStatus','BuyLeadController@doChangeCompanyStatus');

    
    Route::get('meeting-summary','BuyLeadController@meetingSummary');
    Route::post('createMeetingSummary','BuyLeadController@createMeetingSummary');
    Route::get('deleteMeetingSummary','BuyLeadController@deleteMeetingSummary');
    Route::get('meeting-id','BuyLeadController@meetingId');

    Route::post('createDiscussion','BuyLeadController@createDiscussion');
    Route::post('createDiscussionDetail','BuyLeadController@createDiscussionDetail');
    Route::post('createDiscussionItem','BuyLeadController@createDiscussionItem');




}); 

Route::get('member/{id}', 'PageController@member');

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
    
    
    Route::post('doInsertGroup', 'GroupController@doInsertGroup');
    Route::get('doDeleteGroup', 'GroupController@doDeleteGroup');
    Route::get('getGroupDataAjax/{id}', 'GroupController@getGroupDataAjax');
    Route::post('doUpdateGroup/{id}', 'GroupController@doUpdateGroup');

    Route::get('company_membership', 'PageController@companyMembership');
    // Route::get('member/{id}', 'PageController@member');
    Route::get('doDeleteProductCatalogue', 'PageController@doDeleteProductCatalogue');
    Route::get('doDeleteRequiredDocument', 'PageController@doDeleteRequiredDocument');
    Route::get('doDeleteCertificate', 'PageController@doDeleteCertificate');
    Route::post('doUpdateCompanyData', 'PageController@doUpdateCompanyData');
    Route::post('doDeleteCompanyLogo', 'PageController@doDeleteCompanyLogo');



    Route::get('new_member_request', 'PageController@memberRequest');
    Route::get('doChangeStatusCompany', 'PageController@doChangeStatusCompany');
    Route::get('doChangeStatusCompanyPackage', 'PageController@doChangeStatusCompanyPackage');
    Route::get('doChangeStatusCompanyAddOn', 'PageController@doChangeStatusCompanyAddOn');
    
    Route::get('rfq', 'PageController@rfq');
    Route::get('getBuyLeadDataAjax/{id}', 'PageController@getBuyLeadDataAjax');
    Route::post('doEditBuyLeadBusinessCategoryAdmin', 'PageController@doEditBuyLeadBusinessCategoryAdmin');

    Route::post('doAddUnit', 'UnitController@create');
    Route::post('doUpdateUnit/{id}', 'UnitController@update');
    Route::get('doDeleteUnit', 'UnitController@delete');
    Route::get('getUnitDataAjax/{id}', 'UnitController@ajax');
    


    Route::post('doAddCompanyBC', 'PageController@doAddCompanyBC');
    Route::get('doDeleteCompanyBC', 'PageController@doDeleteCompanyBC');

    

});

Route::get('loadDivisionDataAjax/{sectionId}', 'DivisionController@loadDivisionDataAjax');
Route::get('loadDivisionDataAjaxbyName', 'DivisionController@loadDivisionDataAjaxbyName');
Route::get('loadGroupDataAjax/{divisionId}', 'GroupController@loadGroupDataAjax');


// User
// Post Buy Lead
// Procurement Manager
//Route::get('/');
