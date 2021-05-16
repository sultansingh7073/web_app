<?php

Route::middleware(['Preventhistory', 'Checklogin'])
    ->group(function () {
        Route::get("admindashboard","HomeController@getprofile");
        Route::get("document_type_list","HomeController@get_document_type_list");
        Route::get("Regclient","HomeController@getRegclient");
        Route::get("clientdetails","HomeController@getclientdetails");
        Route::get("admin_wallet","HomeController@getadmin_wallet"); 
        Route::get("list_transaction","HomeController@getlist_transaction"); 
        Route::get("client_balance_list","HomeController@get_all_client_balance"); 
        Route::get("list_client_request","HomeController@get_list_client_request");
        Route::get("completed_client_request","HomeController@get_completed_client_request");
        Route::get("delete_old_doc","HomeController@delete_doc");
        Route::get("update_data/{id}","HomeController@edit");
        Route::get("document_type_master","HomeController@document_type");
        Route::get("publish_doc","HomeController@publish_document"); 
        Route::get("list_pending_document","HomeController@list_pending_doc");
        Route::get("edit_publish_doc/{id}","HomeController@get_edit_publish_doc");
        Route::get("complete_all_document","HomeController@get_complete_all_document");   
        Route::get("admin_profile","HomeController@get_admin_profile");
        Route::get("changeStatus", "HomeController@getchangeStatus");
        Route::get("delete_data/{id}","HomeController@get_delete_data");
        Route::get("document_delete_option/{id}","HomeController@delete_document_type");
        Route::get("document_type_edit/{id}","HomeController@edit_document_type");
        Route::get("update_client_id/{id}","HomeController@getupdate_client_id"); 
        Route::get("delete_document/{id}","HomeController@get_delete_doc");


     });

//Route::get("signup","HomeController@signupform");
//Route::post("signme","HomeController@signme");
Route::get("login","HomeController@login_form");
Route::post("loginme","HomeController@checklogin");
Route::get("logout","HomeController@logout");
Route::post("clientdata","HomeController@clientreg");
Route::post("update_data/user_update_data/{id}","HomeController@insert_user_update_data");
Route::post("document_update_option","HomeController@document_type_option");
Route::post("document_type_data","HomeController@document_type_master_data");
Route::post("bhar_publish_data","HomeController@get_bhar_publish_data");
Route::post("publish_data","HomeController@getpublishdata");
Route::post("wallet_update","HomeController@getwalletupdate");
Route::post("bhar_wallet_update","HomeController@get_bhar_walletupdates");
Route::post("wallet_list_tra","HomeController@getwallet_list_tra");
Route::post("admin_profile_update","HomeController@get_admin_profile_update");
Route::post("search","HomeController@get_admin_serch_client");
Route::post("searchclientbalance","HomeController@get_search_client_balance");       


//Client
Route::middleware(['Preventhistory', 'Loginadmin'])->group(function () 
{
    Route::get('clientdashboard',"ClientController@getclientdashboard");
    Route::get("request_for_deposit","ClientController@get_request_for_deposit");
    Route::get("client_list_transactions","ClientController@get_client_list_transactions");
    Route::get("apply_new_documents","ClientController@apply_document");
    Route::get("download_documents","ClientController@download_doc");
    Route::get("myprofile","ClientController@get_myprofile");
    Route::get("get_document_price","ClientController@document_price_type");

});
Route::get("client_signup","ClientController@user_signup");
Route::post("user_signup_data","ClientController@get_usersignup_data");
Route::get("client_forget_password","ClientController@get_client_forget_password");
Route::post("client_change_password","ClientController@get_client_change_password");
Route::get("/","ClientController@user_login");
Route::post("user_login_data","ClientController@get_userlogin_data");
Route::get("logoutclient","ClientController@logout_client");
Route::post("request_deposit","ClientController@client_deposit");
Route::post("apply_new_doc","ClientController@apply_doc");
Route::post("client_update_data","ClientController@get_client_update_data");

//Client