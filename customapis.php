<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v4')->namespace('API')->group(function () {

    /***************General Routes Without Login *************/

    Route::get('/cities', 'ApiController@cities')->middleware('cors');

    Route::get('/get_emi_cities', 'ApiController@getemicities')->middleware('cors');
    Route::get('/get_emi_employment', 'ApiController@getemiemployment')->middleware('cors');
    Route::get('/get_emi_gender', 'ApiController@getemigender')->middleware('cors');

    Route::get('/get_emi_terms', 'ApiController@getemiterms')->middleware('cors');



    Route::get('/specializations', 'ApiController@specializations')->middleware('cors');
    
    
     Route::get('/specializationsnew', 'ApiController@specializationsnew')->middleware('cors');
     
     
    Route::post('/generateotp', 'ApiController@generateotp')->middleware('cors');
    Route::post('/resendotp', 'ApiController@resendotp')->middleware('cors');
    Route::post('/loginwithotp', 'ApiController@loginwithotp')->middleware('cors');
    Route::post('/regeventplanner', 'ApiController@regeventplanner')->middleware('cors');
    Route::post('/forgotpassword', 'ApiController@forgotpassword')->name('forgotpassword')->middleware('cors');
    Route::get('/get-packages-type', 'ApiController@getpackagestype')->name('get.packages.type')->middleware('cors');
    Route::get('/package-essentials', 'ApiController@packageessentials')->name('packageessentials')->middleware('cors');
    Route::get('/external-leads-sources', 'ApiController@externalleadsources')->name('externalleadsources')->middleware('cors');


    Route::get('/aboutus', 'ApiController@aboutus')->middleware('cors');

    Route::get('/privacypolicy', 'ApiController@privacypolicy')->middleware('cors');

    Route::get('/termsandconditions', 'ApiController@termsandconditions')->middleware('cors');



    Route::post('/regeventplannernew', 'ApiController@regeventplannernew')->middleware('cors');


    Route::get('/get_event_status', 'ApiController@geteventstatus')->middleware('cors');

    Route::get('/my-vendor-dropdown', 'ApiController@myvendordropdown')->middleware('cors');



    Route::post('/regeventplanner-new-otp', 'ApiController@regeventplannernewotp')->middleware('cors');
    Route::post('/generate-new-otp', 'ApiController@sendsms_reg_otp')->middleware('cors');
    Route::post('/resend-new-otp', 'ApiController@resendotp_reg_otp')->middleware('cors');
    Route::post('/loginwith-new-otp', 'ApiController@loginwith_reg_otp')->middleware('cors');



    // Protected with APIToken Middleware
    Route::middleware('APIToken')->group(function () {

        Route::post('/checkrole', 'ApiController@checkuserrole')->name('checkuserrole');

        Route::post('/set-user-token', 'ApiController@setusertoken')->name('setusertoken');
        Route::post('/updatepassword', 'ApiController@updatepassword')->name('updatepassword');
        Route::post('/userlogout', 'ApiController@userlogout')->name('userlogout');
        Route::get('/profile', 'ApiController@getprofile')->name('getprofile');
        Route::post('/profile', 'ApiController@profileupdate')->name('profileupdate');
        Route::post('/addmember', 'ApiController@addmember')->name('addmember'); // team member related changes
        Route::get('/getcustomers', 'ApiController@getcustomers')->name('getcustomers');
        Route::get('/gettickets/{id?}', 'ApiController@gettickets')->name('gettickets');
        Route::get('/get-team', 'ApiController@teammembers')->name('teammembers');
        Route::post('/delete-team-member/{id}', 'ApiController@delteammembers')->name('delteammembers');
        Route::get('/get-vendors-category', 'ApiController@vendorscategory')->name('vendorscategory');
        Route::get('/get-vendors-list/{categoryid}', 'ApiController@vendorslist')->name('vendorslist');
        Route::get('/get-dashboard', 'ApiController@getdashboard')->name('getdashboard');

        Route::get('/get-quotations/{id?}', 'ApiController@getquotations')->name('getquotations');
        Route::get('/get-single-quote/{quotationid?}', 'ApiController@getsinglequotation')->name('getsinglequotation');
        Route::post('/update-single-quote', 'ApiController@updatesinglequotation')->name('updatesinglequotation');

        Route::post('/get-edit-quote', 'ApiController@geteditquote')->name('geteditquote');
        Route::post('/edit-agent-cart', 'ApiController@editagentcart')->name('editagentcart');
        Route::post('/remove-item-from-agent-cart', 'ApiController@removeitemfromtemp');
        Route::post('/add-item-to-agent-cart', 'ApiController@additemtempquote');

        Route::get('/mypackages', 'ApiController@getmypackages')->name('get.mypackages');
        Route::post('/del-packages/{id}', 'ApiController@delmypackages')->name('delete.mypackages');
        Route::post('/add-packages', 'ApiController@addmypackages')->name('add.mypackages');

        Route::post('/editsinglepackage/{id}', 'ApiController@editsinglepackage')->name('editsinglepackage');
        Route::post('/add-package-remarks', 'ApiController@packageaddremarks');
        Route::post('/enable-package', 'ApiController@enablepackage');
        Route::post('/disable-package', 'ApiController@disablepackage');

        Route::get('/paw-leads/{id?}', 'ApiController@pawleads')->name('pawleads');
        Route::post('/update-pawleads/', 'ApiController@updatepawleads')->name('updatepawleads');

        Route::get('/get-schedules', 'ApiController@getschedule')->name('getschedule');

        Route::get('/get-external-leads', 'ApiController@externalleads')->name('externalleads');
        Route::post('/add-external-leads', 'ApiController@addexternalleads')->name('addexternalleads');
        Route::post('/delete-external-leads/{id}', 'ApiController@delexternalleads')->name('delexternalleads');
        Route::get('/get-single-external-lead/{id}', 'ApiController@externalleadsingle')->name('externalleadsingle');
        Route::post('/edit-single-external-lead/{id}', 'ApiController@editexternalleadsingle')->name('editexternalleadsingle');
        Route::post('/update-single-external-lead/{id}', 'ApiController@updateexternalleadsingle')->name('updateexternalleadsingle');

        Route::get('/create-tickets-vars', 'ApiController@createticketvars')->name('createticketvars');
        Route::post('/create-tickets', 'ApiController@createtickets')->name('createtickets');

        Route::get('/my-preferences', 'ApiController@getmypreferences')->name('getmypreferences');
        Route::post('/my-preferences-cities', 'ApiController@savemypreferencescities')->name('savemypreferencescities');
        Route::post('/my-preferences-dates', 'ApiController@savemypreferencesdates')->name('savemypreferencesdates');

        Route::get('/get-dashboard-data', 'ApiController@dashboardvars')->name('dashboardvars');
        Route::get('/get-user-wallet', 'ApiController@walletdetails')->name('walletdetails');
        Route::post('/export-user-wallet', 'ApiController@exportwalletdetails')->name('exportwalletdetails');

        Route::get('/buy-leads', 'ApiController@buyleads')->name('buyleads');
        Route::post('/paymentinitiate', 'ApiController@paymentinitiate');
        Route::post('/makeleadspayment', 'ApiController@makeleadspayment');
        Route::post('/resetleadspayment', 'ApiController@resetleadspayment');
        Route::post('/leadpaymentstatus', 'ApiController@leadpaymentstatus');

        Route::post('/initiateadvancepayment', 'ApiController@initiateadvancepayment');
        Route::post('/makewalletpayment', 'ApiController@makewalletpayment');
        Route::post('/updatewalletpayment', 'ApiController@updatewalletpayment');

        Route::get('/userinvoices', 'ApiController@userinvoices');

        Route::get('/wedding-guide-dashboard', 'ApiController@weddingguidedashboard');
        Route::post('/remove-guide-client', 'ApiController@removeguideclient');
        Route::post('/add-guide-client', 'ApiController@addclientguide');
        Route::post('/wedding-guide-send-sms', 'ApiController@weddingguidesendsms');
        Route::post('/wedding-guide-add-remarks', 'ApiController@addweddingguideremarks');

        Route::post('/wedding-guide-guest-list', 'ApiController@guideguestlist')->name('guideguestlist');
        Route::post('/wedding-guide-check-list', 'ApiController@guidechecklist')->name('guidechecklist');
        Route::post('/wedding-guide-customer-details', 'ApiController@guidecustomerdetails')->name('guidecustomerdetails');
        Route::post('/wedding-guide-update-customer-details', 'ApiController@guidecustomerupdatedetails')->name('guidecustomerupdatedetails');

        Route::post('/wedding-guide-budget-sendsms', 'ApiController@budgetsms')->name('budgetsms');
        Route::post('/wedding-guide-budget-getmom', 'ApiController@budgetmom')->name('budgetmom');

        Route::post('/wedding-guide-budget-savemom', 'ApiController@budgetsavemom')->name('budgetsavemom');

        Route::get('/wedding-guide-Payment-listing', 'ApiController@weddingguidepaymentlistings');

        Route::post('/wedding-guide-delete-single-payment/{id}', 'ApiController@weddingguidedeletesinglepayment')->name('weddingguidedeletesinglepayment');

        Route::post('/wedding-guide-add-payment', 'ApiController@weddingguideaddpayments')->name('weddingguideaddpayments');

        Route::post('/wedding-guide-generate-Quote', 'ApiController@weddingguidegeneratequote')->name('weddingguidegeneratequote');

        Route::post('/wedding-guide-save-Draft', 'ApiController@weddingguidesavedraft')->name('weddingguidesavedraft');

        Route::get('/wedding-guide-get-quotations/{clientid?}', 'ApiController@weddingguidegetquotations')->name('weddingguidegetquotations');

        Route::get('/wedding-guide-get-single-quote/{clientid?}/{quotationid?}', 'ApiController@weddingguidegetsinglequotation')->name('weddingguidegetsinglequotation');

        Route::post('/wedding-guide-update-single-quote', 'ApiController@weddingguideupdatesinglequotation')->name('weddingguideupdatesinglequotation');

        Route::post('/wedding-guide-get-edit-quote', 'ApiController@weddingguidegeteditquote')->name('weddingguidegeteditquote');

        Route::post('/wedding-guide-remove-item-from-single-quotation', 'ApiController@weddingguideremoveitemfromtemp')->name('weddingguideremoveitemfromtemp');

        Route::post('/wedding-guide-update-cart-quotation', 'ApiController@weddingguideeditagentcart')->name('weddingguideeditagentcart');


        Route::get('/wedding-guide-get-drafts/{clientid?}', 'ApiController@weddingguidegetdrafts')->name('weddingguidegetdrafts');

        Route::post('/wedding-guide-drafts-delete', 'ApiController@weddingguidedraftsdelete')->name('weddingguidedraftsdelete');

        Route::post('/wedding-guide-get-draft-single-quote', 'ApiController@weddingguidegetdraftsinglequote')->name('weddingguidegetdraftsinglequote');

        Route::post('/wedding-guide-remove-draftitem-from-single-quotation', 'ApiController@weddingguideremovedraftitemfromtemp')->name('weddingguideremovedraftitemfromtemp');

        Route::post('/wedding-guide-update-draft-cart-quotation', 'ApiController@weddingguideupdatedraftquote')->name('weddingguideupdatedraftquote');

        Route::post('/wedding-guide-save-Draft-cart-quotation', 'ApiController@weddingguidesavedraftcartquotation')->name('weddingguidesavedraftcartquotation');


        Route::get('/wedding-guide-get-themes', 'ApiController@weddingguidegetthemes')->name('weddingguidegetthemes');

        Route::get('/wedding-guide-search-themes', 'ApiController@weddingguidesearchtheme')->name('weddingguidesearchtheme');

        Route::post('/wedding-guide-save-budget-items', 'ApiController@weddingguidesavebudgetitems')->name('weddingguidesavebudgetitems');

        Route::post('/wedding-guide-get-budget', 'ApiController@weddingguidegetbudget')->name('weddingguidegetbudget');

        Route::post('/wedding-guide-update-budget-items', 'ApiController@weddingguideupdatebudgetitems')->name('weddingguideupdatebudgetitems');

        Route::post('/wedding-guide-delete-budget-items', 'ApiController@weddingguidedeletebudgetitems')->name('weddingguidedeletebudgetitems');

        Route::post('/wedding-guide-addindividual-budget-items', 'ApiController@weddingguideaddindividualbudgetitems')->name('weddingguideaddindividualbudgetitems');

        Route::post('/wedding-guide-deleteindividual-budget-items', 'ApiController@weddingguidedeleteindividualbudgetitems')->name('weddingguidedeleteindividualbudgetitems');

        Route::get('/wedding-guide-getthemes-requirements', 'ApiController@weddingguidegetrequirementthemes')->name('weddingguidegetrequirementthemes');

        Route::get('/wedding-guide-getthemes-items', 'ApiController@weddingguidegetthemeitems')->name('weddingguidegetthemeitems');

        Route::post('/wedding-guide-send-requirementquote', 'ApiController@weddingguidesendcheckoutrequirement')->name('weddingguidesendcheckoutrequirement');


        Route::post('/deactivate-account', 'ApiController@deactivateaccount')->name('deactivateaccount');

        Route::post('/follow-status', 'ApiController@followstatus')->name('followstatus');


        Route::get('/follow-popup', 'ApiController@followpop')->name('followpop');


        Route::post('/single-paw-lead', 'ApiController@singlepawlead')->name('singlepawlead');

        Route::post('/schedule-check', 'ApiController@schedulecheck')->name('schedulecheck');


        /* subscription starts */

        Route::get('/News_category', 'ApiController@newscategory')->name('newscategory');

        Route::get('/newscategory-single/{id?}', 'ApiController@newscategorysingle')->name('newscategorysingle');

        Route::post('/emi-eligibility', 'ApiController@emieligibility');

        Route::get('/getthemes-list', 'ApiController@getthemelist')->name('getthemelist');

        Route::get('/getthemes-requirements', 'ApiController@getthemerequirements')->name('getthemerequirements');

        Route::post('/sendquote-requirement', 'ApiController@sendquoterequirement')->name('sendquoterequirement');


        Route::post('/generate-Quote', 'ApiController@generatequote')->name('generatequote');


        Route::get('/get-allquotations', 'ApiController@getallquotes')->name('getallquotes');


        Route::get('/chkuseraccess', 'ApiController@chkuseraccess')->name('chkuseraccess');

        


        Route::get('/getsingle-quotation/{quotationid?}', 'ApiController@getsinglequotationsubscription')->name('getsinglequotationsubscription');

        Route::post('/updatesingle-quotation', 'ApiController@updatesinglequotationsubscription')->name('updatesinglequotationsubscription');

        Route::post('/getedit-quotation', 'ApiController@geteditquotesubscription')->name('geteditquotesubscription');

        Route::post('/remove-item-from-single-quotation', 'ApiController@removeitemfromtempsubscription')->name('removeitemfromtempsubscription');

        Route::post('/update-cart-quotation', 'ApiController@updatecartquotationsubscription')->name('updatecartquotationsubscription');


        Route::get('/my-leads/{id?}', 'ApiController@myleads')->name('myleads');

        Route::post('/update-myleads/', 'ApiController@updatemyleads')->name('updatemyleads');


        Route::post('/add-otherleads', 'ApiController@addotherleads')->name('addotherleads');

        Route::post('/delete-otherleads/{id}', 'ApiController@delotherleads')->name('delotherleads');

        Route::post('/edit-otherlead/{id}', 'ApiController@editotherleadsingle')->name('editotherleadsingle');



        Route::get('/My-Folders', 'ApiController@myfoldersubscribed')->name('myfoldersubscribed');

        Route::post('/add-my-folder', 'ApiController@addmyfolder')->name('addmyfolder');

        Route::post('/delete-myfolder/{id}', 'ApiController@deletemyfolder')->name('deletemyfolder');


        Route::get('/list-files-folder/{id?}', 'ApiController@listfilestofolder')->name('listfilestofolder');

        Route::post('/add-files-to-folder', 'ApiController@addfilestofolder')->name('addfilestofolder');


        Route::post('/delete-file-folder/{id}', 'ApiController@deletefilefrmfolders')->name('deletefilefrmfolders');



        Route::post('/initiate_subscription_payment', 'ApiController@initiatesubscriptionpayment');

        Route::post('/make_subscription_payment', 'ApiController@makesubscriptionpayment');

        Route::post('/update_subscription_payment', 'ApiController@updatesubscriptionpaymnet');





        Route::get('/list-itineray', 'ApiController@listitineray')->name('listitineray');
        Route::post('/delete-itineray', 'ApiController@deleteitineray')->name('deleteitineray');
        Route::post('/add-client-itineray', 'ApiController@addclientitineray')->name('addclientitineray');
        Route::post('/individual-page-itineary', 'ApiController@individualpageitineary')->name('individualpageitineary');
        Route::post('/add-individual-page-itineary', 'ApiController@addindividualpageitineary')->name('addindividualpageitineary');
        /*
             Route::post('/remove-guide-client','ApiController@removeguideclient');
             Route::post('/add-guide-client','ApiController@addclientguide');
             Route::post('/wedding-guide-send-sms','ApiController@weddingguidesendsms');
             Route::post('/wedding-guide-add-remarks','ApiController@addweddingguideremarks'); 
             Route::post('/wedding-guide-guest-list','ApiController@guideguestlist')->name('guideguestlist');

         */

        Route::post('/newsapi', 'ApiController@checknewsapi')->name('checknewsapi');


        Route::get('/contact-page', 'ApiController@contactpage');



        Route::get('/get-venuetypes', 'ApiController@getvenuetypes')->name('getvenuetypes');
        Route::get('/get-acnonac', 'ApiController@getacnonac')->name('getacnonac');


        Route::get('/get-venuedropdown', 'ApiController@getvenuedropdown')->name('getvenuedropdown');
        
        Route::post('/add-venue', 'ApiController@addvenue')->name('addvenue');

        Route::get('/myvenues', 'ApiController@myvenues')->name('getmyvenues');

        Route::post('/edit-singlevenue', 'ApiController@editsinglevenue')->name('editsinglevenue');

        Route::post('/del-venue/{id}', 'ApiController@delmyvenue')->name('delmyvenue');


        Route::get('/get-plannerscount', 'ApiController@plannerscount')->name('plannerscount');

        Route::get('/findplanners-list', 'ApiController@findplannerslist')->name('findplannerslist');


       
        Route::post('/guide-budgetdetails', 'ApiController@guidebudgetdetails')->name('guidebudgetdetails');

        Route::post('/guidenew-save-budget-items', 'ApiController@guidenewsavebudgetitems')->name('guidenewsavebudgetitems');

        Route::post('/guidenew-savemom', 'ApiController@guidenewsavemom')->name('guidenewsavemom');

        Route::post('/guidenew-deletebudget', 'ApiController@guidenewdeletebudget')->name('guidenewdeletebudget');

        Route::post('/guide-individual-page-itineary', 'ApiController@guideindividualpageitineary')->name('guideindividualpageitineary');

        Route::post('/guide-add-individual-page-itineary', 'ApiController@guideaddindividualpageitineary')->name('guideaddindividualpageitineary');



        Route::post('/add-chat-files', 'ApiController@addchatfiles')->name('addchatfiles');
        Route::post('/list-chat-files', 'ApiController@listchatfiles')->name('listchatfiles');
        Route::post('/add-planner-chat-files', 'ApiController@addplannerchatfiles')->name('addplannerchatfiles');
        Route::post('/list-planner-chat-files', 'ApiController@listplannerchatfiles')->name('listplannerchatfiles');


        Route::get('/listvenue/{statename?}/{cityname?}/{packagename?}', 'ApiController@listvenue')->name('listvenue');
        Route::post('/get-single-venue', 'ApiController@getsinglevenue')->name('getsinglevenue');
        Route::get('/venue-state-filter', 'ApiController@venuestates')->name('venuestates');
        Route::post('/venue-city-filter', 'ApiController@venuecitys')->name('venuecitys');
        Route::post('/venue-package-filter', 'ApiController@venuepackgs')->name('venuepackgs');


        /* enhancements start on 24-06-2025 */



        Route::post('/add-guide-client-new', 'ApiController@addclientguidenew');

        Route::get('/wedding-guide-dashboard-new', 'ApiController@weddingguidedashboardnew');

        Route::post('/delete-file-folder-many', 'ApiController@deletefilefrmfoldersmany')->name('deletefilefrmfoldersmany');

        Route::post('/add-files-to-folder-many', 'ApiController@addfilestofoldermany')->name('addfilestofoldermany');

        Route::post('/wedding-guide-edit-total-payment', 'ApiController@weddingguideedittotalbudget')->name('weddingguideedittotalbudget');

        Route::get('/my-leads-new/{id?}', 'ApiController@myleadsnew')->name('myleadsnew');
 

        /* enhancements start on 24-06-2025 */

        /* Alagu - 04-09-2025 starts */

        Route::post('/myleads-upload', 'ApiController@addxltomyleads')->name('addxltomyleads');

        Route::post('/my-events', 'ApiController@addeditmyevents')->name('addeditmyevents');

        Route::post('/delete-my-events', 'ApiController@deletemyevents')->name('deletemyevents');

        Route::post('/list-my-events', 'ApiController@listmeevents')->name('listmeevents');

        Route::get('/single-event-listing/{id}', 'ApiController@singleeventlisting')->name('singleeventlisting');

        Route::post('/update-single-event-status', 'ApiController@updatesingleeventstatus')->name('updatesingleeventstatus');

        Route::post('/addedit-vendors', 'ApiController@addeditvendors')->name('addeditvendors');

        Route::post('/delete-my-vendors', 'ApiController@deletemyvendors')->name('deletemyvendors');

        Route::get('/single-vendor-listing/{id}', 'ApiController@singlevendorlisting')->name('singlevendorlisting');

        Route::post('/addedit-payment', 'ApiController@addeditpayment')->name('addeditpayment');

        Route::post('/delete-my-payment', 'ApiController@deletemypayment')->name('deletemypayment');

        Route::post('/event-yearly-profit', 'ApiController@eventyearlyprofit')->name('eventyearlyprofit');

        /* Alagu - 04-09-2025 Ends  */





        /* Buy Leads - Free Feature starts */

        Route::get('/buy-leadsfree', 'ApiController@buyleadsfree')->name('buyleadsfree');

        Route::post('/free-purchase-api', 'ApiController@freepurchaseapi')->name('freepurchaseapi');

        /* Buy Leads - Free Feature ends */



        /* vendor market place starts */

        Route::get('/planner-introscreen', 'ApiController@plannerintroscreen')->name('plannerintroscreen');

        Route::get('/get-eventstates', 'ApiController@eventstates')->name('eventstates');

        Route::post('/addedit-eventdetails', 'ApiController@addediteventdetails')->name('addediteventdetails');

        Route::get('/get-eventdetails/{id?}', 'ApiController@geteventdetails')->name('geteventdetails');

        Route::get('/get-servicedetails/{id?}', 'ApiController@servicedetails')->name('servicedetails');

        Route::post('/get-selectedservices', 'ApiController@selectedservices')->name('selectedservices');

        Route::post('/saveservices', 'ApiController@saveservices')->name('saveservices');

        Route::get('/get-plannerevents', 'ApiController@plannerevents')->name('plannerevents');
        
        
        

        Route::post('/select-this-vendor-planner', 'ApiController@selectthivendorplanner')->name('selectthivendorplanner'); 
        Route::post('/delete-plannerevents', 'ApiController@deleteplannerevents')->name('deleteplannerevents'); 
        Route::post('/close-event-request', 'ApiController@closeventrequest')->name('closeventrequest');



        Route::get('/vendor-introscreen', 'ApiController@vendorintroscreen')->name('vendorintroscreen');

        Route::get('/vendor-availablerequest', 'ApiController@vendoravailablerequest')->name('vendoravailablerequest');

        Route::post('/accept-decline-request', 'ApiController@acceptdeclinerequest')->name('acceptdeclinerequest');

        Route::get('/vendor-final-listing', 'ApiController@vendorfinallisting')->name('vendorfinallisting');



        Route::post('/saveservicestrying', 'ApiController@saveservicestrying')->name('saveservicestrying');

        Route::post('/accept-decline-requesttrying', 'ApiController@acceptdeclinerequesttrying')->name('acceptdeclinerequesttrying');

        Route::post('/select-this-vendor-plannertesting', 'ApiController@selectthivendorplannertesting')->name('selectthivendorplannertesting');



        Route::get('/vendor-couple-availablerequest', 'ApiController@vendor_couple_availablerequest')->name('vendor_couple_availablerequest');

        Route::post('/couple-accept-decline-request', 'ApiController@coupleacceptdeclinerequest')->name('coupleacceptdeclinerequest');

        /* vendor market place ends */



        /* Meta Ad starts */

        Route::get('/get-metafirstscreen', 'ApiController@getmetafirstscreen')->name('getmetafirstscreen');

        Route::get('/get-metaLocations', 'ApiController@getmetaLocations')->name('getmetaLocations');

        Route::post('/create-your-ad', 'ApiController@createyourad')->name('createyourad');

        Route::get('/get-metaadscreen/{id}', 'ApiController@getmetaadscreen')->name('getmetaadscreen');

        Route::post('/create-detail-ads', 'ApiController@createdetailads')->name('createdetailads');


        Route::post('/make-services-payment', 'ApiController@makeservicespayment');

        Route::post('/update-services-payment', 'ApiController@updateservicespaymnet');




        /*  Meta Ad Ends */


        Route::post('/delete-profile-image', 'ApiController@deleteprofileimage')->name('deleteprofileimage');
        Route::post('/followup-leads', 'ApiController@followupleads')->name('followupleads');
        Route::post('/followup-events', 'ApiController@followupevents')->name('followupevents');

        Route::get('/notifications-logs', 'ApiController@getNotificationLogs')->name('getNotificationLogs');
        Route::post('/notification/mark-read', 'ApiController@markNotificationRead')->name('markNotificationRead');
        Route::post('/notifications/mark-all-read', 'ApiController@markAllNotificationsRead')->name('markAllNotificationsRead');
        Route::post('/notification/delete', 'ApiController@deleteNotification')->name('deleteNotification');
        Route::post('/notifications/delete-all', 'ApiController@deleteAllNotifications')->name('deleteAllNotifications');

        Route::post('/notification/deletemultiple', 'ApiController@deleteNotificationMultiple')->name('deleteNotificationMultiple');


        Route::get('/check-dashboardstatistics', 'ApiController@checkdashboardstatistics')->name('checkdashboardstatistics');

        // Wedding Form API - Save wedding details and generate QR codes
        Route::post('/save-wedding-details', 'ApiController@saveweddingdetails')->name('saveweddingdetails');

        // Wedding Details Listing API - Get wedding details with expiry calculation
        Route::get('/list-wedding-details/{id?}', 'ApiController@listweddingdetails')->name('listweddingdetails');

        // Delete Wedding Item API - Delete a wedding item by ID
        Route::post('/delete-wedding-item/{id}', 'ApiController@deleteweddingitem')->name('deleteweddingitem');

        // Edit Wedding Details API - Edit wedding details and regenerate QR codes and PDF
        Route::post('/edit-wedding-details/{id}', 'ApiController@editweddingdetails')->name('editweddingdetails');
        
        
        
        /* Start for Reels - Bites */
             
            Route::get('/Get-Bite-Tags', 'ApiController@getBiteTags')->name('getBiteTags');
            
            Route::get('/Get-Bite-Tags1', 'ApiController@getBiteTags1')->name('getBiteTags1');
            
            
            Route::post('/Upload-Bites', 'ApiController@uploadbites')->name('uploadbites');
            Route::post('/save-bites', 'ApiController@saveBites')->name('saveBites');
            Route::get('/list-bites', 'ApiController@listbites')->name('listbites');
            //Route::post('/delete-bite/{bite_id}', 'ApiController@deleteBite')->name('deleteBite');
            
            Route::post('/delete-bites', 'ApiController@deleteBites')->name('deleteBites');

            
        /* End for Reels - Bites */ 
        
        /* Buy Leads with Label - Starts */
        
            Route::get('/buy-leads-with-label', 'ApiController@buyleads_with_label')->name('buyleads_with_label');
             
        /* Buy Leads with Label - Ends */
        
        /* get dashboard multiple subscription starts */
             
                
        Route::get('/get-state-weddingleads', 'ApiController@getstateweddingleads')->name('getstateweddingleads');
             
        /* get dashboard multiple subscription ends */
        
        Route::post('/paymentinitiate-enhanced1', 'ApiController@paymentinitiateenhanced1');
        
        Route::get('/get-dashboard-multiple-subscription-enhanced', 'ApiController@getdashboardmultiplesubscriptionenhanced')->name('getdashboardmultiplesubscriptionenhanced');
        
        Route::post('/add-blockdates-tovenue', 'ApiController@addblockdatestovenue')->name('addblockdatestovenue');
        
        
        Route::post('/venue-lead', 'ApiController@venuelead')->name('venuelead');
        
         
        
        Route::post('/tutorial-link', 'ApiController@tutorial_toggle')->name('tutorial.toggle');


        Route::get('/get-dashboard-multiple-subscription-enhanced1', 'ApiController@getdashboardmultiplesubscriptionenhanced1')->name('getdashboardmultiplesubscriptionenhanced1');
        
        Route::post('/makeleadspayment', 'ApiController@makeleadspayment');
        Route::post('/resetleadspayment', 'ApiController@resetleadspayment');
        Route::post('/leadpaymentstatus', 'ApiController@leadpaymentstatus');
    });

});
 
/*
|--------------------------------------------------------------------------
| B2Blangs Routes (NEW CONTROLLER + APIToken)
|--------------------------------------------------------------------------
*/
 
Route::prefix('B2Blangs')->middleware(['api'])->namespace('API')->group(function () {
    
    Route::get('/cities-lang', 'B2BLangsController@cities')->middleware('cors');
    Route::get('/specializationsnew-lang', 'B2BLangsController@specializationsnew')->middleware('cors');
    Route::get('/get-packages-type-lang', 'B2BLangsController@getpackagestype')->name('get.packages.type')->middleware('cors');
    Route::get('/package-essentials-lang', 'B2BLangsController@packageessentials')->name('packageessentials')->middleware('cors'); 
    Route::get('/get_event_status-lang', 'B2BLangsController@geteventstatus')->middleware('cors'); 
    Route::get('/my-vendor-dropdown-lang', 'B2BLangsController@myvendordropdown')->middleware('cors');
     
    
    Route::middleware('APIToken')->group(function () {

        Route::get(
            '/get-dashboard-multiple-subscription-enhanced1',
            'B2BLangsController@getDashboardMultipleSubscriptionEnhanced1'
        )->name('b2blangs.getdashboardmultiplesubscriptionenhanced1');
        
        
        Route::get('/profile-lang', 'B2BLangsController@getprofile')->name('getprofile');
        Route::post('/profile-lang', 'B2BLangsController@profileupdate')->name('profileupdate');    
        Route::post('/delete-profile-image-lang', 'B2BLangsController@deleteprofileimage')->name('deleteprofileimage');
        
        
        
        
        Route::get('/notifications-logs-lang', 'B2BLangsController@getNotificationLogs')->name('getNotificationLogs');
        Route::post('/notification/mark-read-lang', 'B2BLangsController@markNotificationRead')->name('markNotificationRead');
        Route::post('/notifications/mark-all-read-lang', 'B2BLangsController@markAllNotificationsRead')->name('markAllNotificationsRead');
        Route::post('/notification/delete-lang', 'B2BLangsController@deleteNotification')->name('deleteNotification');
        Route::post('/notifications/delete-all-lang', 'B2BLangsController@deleteAllNotifications')->name('deleteAllNotifications'); 
        Route::post('/notification/deletemultiple-lang', 'B2BLangsController@deleteNotificationMultiple')->name('deleteNotificationMultiple');


        Route::get('/notifications-alllist-logs-lang', 'B2BLangsController@getNotificationLogsalllist')->name('getNotificationLogsalllist');
         

        Route::get('/buy-leads-with-label-lang', 'B2BLangsController@buyleads_with_label')->name('buyleads_with_label');
        Route::get('/get-state-weddingleads-lang', 'B2BLangsController@getstateweddingleads')->name('getstateweddingleads');
        
        Route::post('/paymentinitiate-enhanced-lang', 'B2BLangsController@paymentinitiateenhanced1');    
        Route::post('/makeleadspayment-lang', 'B2BLangsController@makeleadspayment');
        Route::post('/resetleadspayment-lang', 'B2BLangsController@resetleadspayment');
        Route::post('/leadpaymentstatus-lang', 'B2BLangsController@leadpaymentstatus');
        
        
        Route::get('/my-leads-lang/{id?}', 'B2BLangsController@myleads')->name('myleads');
        Route::get('/my-leads-new-lang/{id?}', 'B2BLangsController@myleadsnew')->name('myleadsnew');
        Route::post('/add-otherleads-lang', 'B2BLangsController@addotherleads')->name('addotherleads'); 
        Route::post('/update-myleads-lang/', 'B2BLangsController@updatemyleads')->name('updatemyleads'); 
        Route::post('/delete-otherleads-lang/{id}', 'B2BLangsController@delotherleads')->name('delotherleads');
        
        
        Route::get('/mypackages-lang', 'B2BLangsController@getmypackages')->name('get.mypackages');
        Route::post('/add-packages-lang', 'B2BLangsController@addmypackages')->name('add.mypackages');  
        Route::post('/add-package-remarks-lang', 'B2BLangsController@packageaddremarks');  
        Route::post('/enable-package-lang', 'B2BLangsController@enablepackage');
        Route::post('/disable-package-lang', 'B2BLangsController@disablepackage'); 
        
        Route::get('/Get-Bite-Tags-lang', 'B2BLangsController@getBiteTags')->name('getBiteTags'); 
        Route::get('/list-bites-lang', 'B2BLangsController@listbites')->name('listbites');   
        Route::post('/delete-bites-lang', 'B2BLangsController@deleteBites')->name('deleteBites');
        Route::post('/Upload-Bites-lang', 'B2BLangsController@uploadbites')->name('uploadbites');
        Route::post('/save-bites-lang', 'B2BLangsController@saveBites')->name('saveBites'); 
        
        
        
        Route::get('/listvenue-lang/{statename?}/{cityname?}/{packagename?}', 'B2BLangsController@listvenue')->name('listvenue'); 
        Route::get('/venue-state-filter-lang', 'B2BLangsController@venuestates')->name('venuestates');
        Route::post('/venue-city-filter-lang', 'B2BLangsController@venuecitys')->name('venuecitys');
        Route::post('/venue-package-filter-lang', 'B2BLangsController@venuepackgs')->name('venuepackgs');
        
        
         
        Route::post('/save-wedding-details-lang', 'B2BLangsController@saveweddingdetails')->name('saveweddingdetails'); 
        Route::get('/list-wedding-details-lang/{id?}', 'B2BLangsController@listweddingdetails')->name('listweddingdetails'); 
        Route::post('/delete-wedding-item-lang/{id}', 'B2BLangsController@deleteweddingitem')->name('deleteweddingitem'); 
        Route::post('/edit-wedding-details-lang/{id}', 'B2BLangsController@editweddingdetails')->name('editweddingdetails');
        
        
        
        Route::get('/get-eventstates-lang', 'B2BLangsController@eventstates')->name('eventstates');
        Route::post('/addedit-eventdetails-lang', 'B2BLangsController@addediteventdetails')->name('addediteventdetails');
        Route::get('/get-eventdetails-lang/{id?}', 'B2BLangsController@geteventdetails')->name('geteventdetails');
        Route::get('/get-servicedetails-lang/{id?}', 'B2BLangsController@servicedetails')->name('servicedetails');
        Route::post('/saveservices-lang', 'B2BLangsController@saveservices')->name('saveservices');
        Route::get('/get-plannerevents-lang', 'B2BLangsController@plannerevents')->name('plannerevents');
        Route::post('/delete-plannerevents-lang', 'B2BLangsController@deleteplannerevents')->name('deleteplannerevents');  
        
        
        
        Route::post('/list-my-events-lang', 'B2BLangsController@listmeevents')->name('listmeevents');
        Route::post('/my-events-lang', 'B2BLangsController@addeditmyevents')->name('addeditmyevents'); 
        Route::get('/single-event-listing-lang/{id}', 'B2BLangsController@singleeventlisting')->name('singleeventlisting');  
        Route::post('/update-single-event-status-lang', 'B2BLangsController@updatesingleeventstatus')->name('updatesingleeventstatus'); 
        Route::post('/delete-my-events-lang', 'B2BLangsController@deletemyevents')->name('deletemyevents'); 
        Route::post('/event-yearly-profit-lang', 'B2BLangsController@eventyearlyprofit')->name('eventyearlyprofit'); 
        Route::post('/addedit-vendors-lang', 'B2BLangsController@addeditvendors')->name('addeditvendors'); 
        Route::post('/delete-my-vendors-lang', 'B2BLangsController@deletemyvendors')->name('deletemyvendors'); 
        Route::post('/addedit-payment-lang', 'B2BLangsController@addeditpayment')->name('addeditpayment'); 
        Route::post('/delete-my-payment-lang', 'B2BLangsController@deletemypayment')->name('deletemypayment'); 
        Route::get('/single-vendor-listing-lang/{id}', 'B2BLangsController@singlevendorlisting')->name('singlevendorlisting');
        
        
        
        
        Route::get('/My-Folders-lang', 'B2BLangsController@myfoldersubscribed')->name('myfoldersubscribed');
        Route::get('/list-files-folder-lang/{id?}', 'B2BLangsController@listfilestofolder')->name('listfilestofolder'); 
        Route::post('/add-my-folder-lang', 'B2BLangsController@addmyfolder')->name('addmyfolder'); 
        Route::post('/delete-myfolder-lang/{id}', 'B2BLangsController@deletemyfolder')->name('deletemyfolder');
        Route::post('/add-files-to-folder-many-lang', 'B2BLangsController@addfilestofoldermany')->name('addfilestofoldermany');
        Route::post('/delete-file-folder-many-lang', 'B2BLangsController@deletefilefrmfoldersmany')->name('deletefilefrmfoldersmany'); 
       
       
        Route::get('/News_category-lang', 'B2BLangsController@newscategory')->name('newscategory'); 
        Route::get('/newscategory-single-lang/{id?}', 'B2BLangsController@newscategorysingle')->name('newscategorysingle');
        
        
        Route::get('/get-team-lang', 'B2BLangsController@teammembers')->name('teammembers');
        Route::post('/addmember-lang', 'B2BLangsController@addmember')->name('addmember');
        Route::post('/delete-team-member-lang/{id}', 'B2BLangsController@delteammembers')->name('delteammembers');
        
        
        Route::get('/myvenues-lang', 'B2BLangsController@myvenues')->name('getmyvenues');
        Route::post('/add-venue-lang', 'B2BLangsController@addvenue')->name('addvenue');  
        Route::post('/add-blockdates-tovenue-lang', 'B2BLangsController@addblockdatestovenue')->name('addblockdatestovenue');
        Route::post('/del-venue-lang/{id}', 'B2BLangsController@delmyvenue')->name('delmyvenue');
        Route::get('/get-venuedropdown-lang', 'B2BLangsController@getvenuedropdown')->name('getvenuedropdown');
        
        
        Route::get('/dashboard-subscription','B2BLangsController@getDashboardsubscription')->name('getDashboardsubscription');
        
         
        Route::post('/initiate-subscription-payment-lang', 'B2BLangsController@initiatesubscriptionpayment');    
        
        Route::post('/make-subscription-payment-lang', 'B2BLangsController@makesubscriptionpayment');
        Route::post('/update-subscription-payment-lang', 'B2BLangsController@updatesubscriptionpaymnet');  
        Route::post('/subscription-payment-status', 'B2BLangsController@subscriptionpaymentstatus')->name('subscription.payment.status');
        
         
        Route::get('/buy-leads-allfree', 'B2BLangsController@buyleads_allfree')->name('buyleads_allfree');
        Route::post('/paymentinitiate-restriction', 'B2BLangsController@paymentinitiatemonthandyearrestriction');
        
        Route::get('/my-leads-withfree/{id?}', 'B2BLangsController@myleadswithfree')->name('myleads');
        
        Route::get('/my-leads-new-withfree/{id?}', 'B2BLangsController@myleadsnewfree')->name('myleadsnew'); 
        
        Route::get('/dashboard-subscription1','B2BLangsController@getDashboardsubscription1')->name('getDashboardsubscription1');
        
        
        Route::get('/buy-leads-19999', 'B2BLangsController@buyleads_19999')->name('buyleads_19999');
        Route::post('/paymentinitiate-restriction-19999', 'B2BLangsController@paymentinitiatemonthandyearrestriction19999');
        
        Route::get('/dashboard-subscription2','B2BLangsController@getDashboardsubscription2')->name('getDashboardsubscription2');
        
        Route::post('/initiate-subscription-payment-19999', 'B2BLangsController@initiatesubscriptionpayment19999');   
        
        
        Route::get('/dashboard-subscription3','B2BLangsController@getDashboardsubscription3')->name('getDashboardsubscription3');
        
    });
});
 
Route::prefix('B2BWG')->middleware(['api', 'cors'])->namespace('API')->group(function () {

         
        // example future routes
        // Route::post('/vendors/add-edit', 'B2BWGController@addeditvendors');
        // Route::get('/events/single', 'B2BWGController@singleeventlisting');
        Route::get('/external-leads-sources-lang', 'B2BWGController@externalleadsources')->name('externalleadsources')->middleware('cors');

        
        Route::middleware('APIToken')->group(function () {
             
             
            Route::get('/wedding-guide-dashboard-new-lang', 'B2BWGController@weddingguidedashboardnew'); 
            Route::post('/add-guide-client-new-lang', 'B2BWGController@addclientguidenew'); 
            Route::post('/remove-guide-client-lang', 'B2BWGController@removeguideclient'); 
            Route::post('/wedding-guide-send-sms-lang', 'B2BWGController@weddingguidesendsms');
            Route::post('/wedding-guide-add-remarks-lang', 'B2BWGController@addweddingguideremarks');
            Route::post('/wedding-guide-budget-sendsms-lang', 'B2BWGController@budgetsms')->name('budgetsms'); 
            Route::post('/guide-budgetdetails-lang', 'B2BWGController@guidebudgetdetails')->name('guidebudgetdetails'); 
            Route::post('/guidenew-save-budget-items-lang', 'B2BWGController@guidenewsavebudgetitems')->name('guidenewsavebudgetitems'); 
            Route::post('/guidenew-savemom-lang', 'B2BWGController@guidenewsavemom')->name('guidenewsavemom');
            Route::get('/wedding-guide-get-quotations-lang/{clientid?}', 'B2BWGController@weddingguidegetquotations')->name('weddingguidegetquotations');
            Route::get('/get-allquotations-lang', 'B2BWGController@getallquotes')->name('getallquotes');
            Route::post('/wedding-guide-get-edit-quote-lang', 'B2BWGController@weddingguidegeteditquote')->name('weddingguidegeteditquote');
            Route::post('/get-edit-quote-lang', 'B2BWGController@geteditquote')->name('geteditquote');  
            Route::post('/wedding-guide-update-cart-quotation-lang', 'B2BWGController@weddingguideeditagentcart')->name('weddingguideeditagentcart'); 
            Route::post('/edit-agent-cart-lang', 'B2BWGController@editagentcart')->name('editagentcart'); 
            Route::post('/wedding-guide-generate-Quote-lang', 'B2BWGController@weddingguidegeneratequote')->name('weddingguidegeneratequote'); 
            Route::get('/wedding-guide-Payment-listing-lang', 'B2BWGController@weddingguidepaymentlistings'); 
            Route::post('/wedding-guide-edit-total-payment-lang', 'B2BWGController@weddingguideedittotalbudget')->name('weddingguideedittotalbudget');  
            Route::post('/wedding-guide-delete-single-payment-lang/{id}', 'B2BWGController@weddingguidedeletesinglepayment')->name('weddingguidedeletesinglepayment'); 
            Route::post('/wedding-guide-add-payment-lang', 'B2BWGController@weddingguideaddpayments')->name('weddingguideaddpayments'); 
            Route::post('/guide-individual-page-itineary-lang', 'B2BWGController@guideindividualpageitineary')->name('guideindividualpageitineary'); 
            Route::post('/guide-add-individual-page-itineary-lang', 'B2BWGController@guideaddindividualpageitineary')->name('guideaddindividualpageitineary');
            
             
            Route::get('/get-external-leads-lang', 'B2BWGController@externalleads')->name('externalleads'); 
            Route::post('/add-external-leads-lang', 'B2BWGController@addexternalleads')->name('addexternalleads');
            Route::post('/delete-external-leads-lang/{id}', 'B2BWGController@delexternalleads')->name('delexternalleads');
            Route::get('/get-single-external-lead-lang/{id}', 'B2BWGController@externalleadsingle')->name('externalleadsingle');
            Route::post('/edit-single-external-lead-lang/{id}', 'B2BWGController@editexternalleadsingle')->name('editexternalleadsingle');
            Route::post('/update-single-external-lead-lang/{id}', 'B2BWGController@updateexternalleadsingle')->name('updateexternalleadsingle'); 
            Route::post('/add-otherleads-lang', 'B2BWGController@addotherleads')->name('addotherleads');
            Route::post('/edit-otherlead-lang/{id}', 'B2BWGController@editotherleadsingle')->name('editotherleadsingle');
            Route::post('/delete-otherleads-lang/{id}', 'B2BWGController@delotherleads')->name('delotherleads');
 
            Route::get('/my-preferences-lang', 'B2BWGController@getmypreferences')->name('getmypreferences');
            Route::post('/my-preferences-cities-lang', 'B2BWGController@savemypreferencescities')->name('savemypreferencescities');
            Route::post('/my-preferences-dates-lang', 'B2BWGController@savemypreferencesdates')->name('savemypreferencesdates'); 
            Route::get('/hire-crew-listings', 'B2BWGController@hirecrewlistings')->name('hirecrewlistings');
            Route::get('/hire-event-types', 'B2BWGController@hireeventtypes')->name('hireeventtypes');
            Route::post('/save-hire-event-details', 'B2BWGController@saveeventdetails')->name('saveeventdetails'); 
            Route::post('/get-hire-event-roles', 'B2BWGController@gethireeventroles')->name('gethireeventroles'); 
            Route::post('/save-hire-roles', 'B2BWGController@savehireroles')->name('savehireroles');
            
            Route::get('/hire-event-details/{event_id}', 'B2BWGController@hireeventdetails')->name('hireeventdetails');
            
            
            /* wedding proposal starts */
            
                Route::get('/proposal-listings', 'B2BWGController@proposallistings')->name('proposallistings');
                
                Route::post('/save-couple-details', 'B2BWGController@savecoupledetails')->name('savecoupledetails');
                
                Route::get('/wedding-styles', 'B2BWGController@weddingstyles')->name('weddingstyles');
                
                Route::post('/save-celebration-details', 'B2BWGController@savecelebrationdetails')->name('savecelebrationdetails');
    
                Route::get('/scope-of-work-list', 'B2BWGController@scopeofworklist')->name('scopeofworklist');
                
                Route::get('/venue-types', 'B2BWGController@venuetypes')->name('venuetypes');
                
                Route::post('/save-scope-of-work', 'B2BWGController@savescopeofwork')->name('savescopeofwork');
                
                Route::post( '/save-about-us','B2BWGController@saveaboutus')->name('saveaboutus');
                
                Route::post('/view-proposal','B2BWGController@viewproposal')->name('viewproposal');
                
                Route::post('/delete-proposal','B2BWGController@deleteproposal')->name('deleteproposal');
                
                
                Route::post('/generate-proposal-pdf','B2BWGController@generateproposalpdf')->name('generateproposalpdf');
                
                
                Route::post('/share-proposal','B2BWGController@shareproposal')->name('shareproposal');
    
            /* wedding proposal ends */
            
            

        }); 
    });
 

Route::prefix('B2BMeta')->middleware(['api', 'cors'])->namespace('API')->group(function () {

    Route::middleware('APIToken')->group(function () {

       Route::get('/meta-ads-listing', 'B2BMetaController@metaAdsListing')->name('metaAdsListing');
       Route::get('/meta-locations', 'B2BMetaController@metaDropdownOptions');
       Route::post('/meta-ad-step1', 'B2BMetaController@metaAdStep1');
       Route::post('/meta-ad-step2', 'B2BMetaController@metaAdStep2');
       Route::post('/meta-ad-preview', 'B2BMetaController@metaAdPreview');
       
       
       Route::post('/meta-ad-payment-initiate', 'B2BMetaController@metaAdPaymentInitiate');
       
        Route::post('/meta-ad-payment-success', 'B2BMetaController@metaAdPaymentSuccess');
       
        Route::post('/meta-ad-budget-topup-initiate','B2BMetaController@metaAdBudgetTopupInitiate');

        Route::post('/meta-ad-budget-topup-success','B2BMetaController@metaAdBudgetTopupSuccess');
        
        Route::get('/meta-ad-budget-history','B2BMetaController@metaAdBudgetHistory');
       
       
       
        Route::post('/meta-ad-revive-initiate', 'B2BMetaController@metaAdReviveInitiate');
        Route::post('/meta-ad-revive-success', 'B2BMetaController@metaAdReviveSuccess');
        
        
        
        /* META FB PAGE STARTS */ 
        
            Route::post('/meta-ad-connect', 'B2BMetaController@metaAdConnect');
            
            Route::get('/meta-ad-pages-list', 'B2BMetaController@metaAdPagesList');
            
            
            Route::post('/meta-ad-select-page', 'B2BMetaController@metaAdSelectPage');
            
            Route::get('/meta-ad-forms-list', 'B2BMetaController@metaAdFormsList');
            
            Route::post('/meta-ad-select-form', 'B2BMetaController@metaAdSelectForm');  
            
            Route::post('/meta-ad-sync-leads', 'B2BMetaController@metaAdSyncLeads');
            
            Route::post('/meta-ad-disconnect', 'B2BMetaController@metaAdDisconnect');
            
        /* META FB PAGE ENDS */
        
        
    });

});

    
    
    
    
Route::get('/test-translate', function () {
    return translateText('My Leads', 'ta');
});
