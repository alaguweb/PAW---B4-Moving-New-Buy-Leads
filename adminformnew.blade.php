@extends('layouts.frontend.appsocialhome')
@section('title','Managing Wedding Simplified')
@section('author','Plan a Wedding')
@section('metaurl','https://planawedding.in/adminlead')
@section('metatitlefb','Managing Wedding Simplified')
@section('metadescriptionfb','For best wedding experience connect with us and explore more features')
@section('metaimage','https://planawedding.in/frontend/images/metatags/socialmediameta.png')
@section('metatitletweet','Managing Wedding Simplified') 
@section('metadescriptiontweet','For best wedding experience connect with us and explore more features')
@section('metaimagetweet','https://planawedding.in/frontend/images/metatags/socialmediameta.png')
@section('metadescription','For best wedding experience connect with us and explore more features')
@section('metakeywords','bookeventsonline, bookeventsonline events, event management company, event marketplace, best event management company, event industry')

@push('css')
    <link rel="stylesheet" href="{{ asset('/frontend/css/social/custom.css') }}">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel='stylesheet'>
    <style>

    #exampleModalCenter .modal-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        margin: 0;
        width: 90%;
        max-width: 800px;
    }

        .wsk-cp-text .category > span
        {
            padding: 11px 10px !important;
        }
        .wsk-cp-product:hover .wsk-cp-text .category > span
        {
            
            padding: 11px 10px!important;
        }
        
        @media only screen and (max-width: 767px)
        {
            .bottomfooter ul li 
            {
                width: 25%;
                float: left;
                text-align: center;
                margin-top: 10px;
            }
            .footer-nav-area .bottomfooter 
            {
                width: 100%;
            }
            .wsk-cp-text .category > span
            {
                padding: 11px 18px;
            }
            .wsk-cp-product:hover .wsk-cp-text .category > span
            {
                padding: 10px 16px;
            }
        }
        @media only screen and (max-width: 991px)
        {
            .wsk-cp-text .category > span
            {
                padding: 11px 18px !important;
            }
            .wsk-cp-product:hover .wsk-cp-text .category > span
            {
                padding: 10px 16px !important;
            }
            .designpage .mobs1
            {
                width: 25%;
                float: left;
                text-align: center;
                margin-top: 8%;
                font-size: 14px;
                padding-right:0px;
            }
            .designpage .mobs1 .fa
            {
                margin-left: 50%;
            }
            .designpage .mobs1 p 
            {
                background: #000;
                color: #fff;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 5px;
                padding-top: 3px;
                padding-bottom: 3px;
                margin-left: 20px;
            }
            .designpage .mobs2
            {
                width: 47%;
                float: left;
                text-align: center;
            } 
            .designpage .mobs3
            {
                width: 28%;
                float: left;
                text-align: center;
                margin-top: 8%;
                font-size: 14px;
                padding-left: 0;
            }
           .designpage .mobs3 p 
            {
                background: #000;
                color: #fff;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 5px;
                padding-top: 3px;
                padding-bottom: 3px;
                margin-right: 30px;
            }
            .designpage .mobs3 .fa
            {
                margin-right: 100%;
            }
            .designpage
            {
                margin-bottom:30px;
            }
	    .ui-datepicker .ui-datepicker-title select
            {
                color:#000;
            }	
        }
    
    .btn-back-custom {
        background: white;
        border: 2px solid #e2e8f0;
        color: #64748b;
        border-radius: 50px;
        padding: 14px 40px !important;
        font-size: 1.15rem !important;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-back-custom:hover {
        background: rgba(134, 58, 193, 0.05);
        border-color: rgba(134, 58, 193, 0.4);
        color: #863ac1;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(134, 58, 193, 0.1);
    }

    /* Elegant checkbox/radio styles defined in the second <style> block below */
</style>
    
    
    <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socials/post-448.css') }}"  type="text/css" media="all">
    
    
    <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socials/ekiticons.css') }}"  type="text/css" media="all">
    
     
     <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socials/aligndata.css') }}"  type="text/css" media="all"> 
      
     
     <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socials/consultations.css') }}"  type="text/css" media="all">
     
     <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socialform/custom.css') }}"  type="text/css" media="all">
     
     <link rel="stylesheet" id="elementor-post-6-css" href="{{ asset('/frontend/css/socialform/popup.css') }}"  type="text/css" media="all">
     
     <style>

    #exampleModalCenter .modal-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        margin: 0;
        width: 90%;
        max-width: 800px;
    }

        .elementor-567 .elementor-element.elementor-element-709f2fd9:not(.elementor-motion-effects-element-type-background), .elementor-567 .elementor-element.elementor-element-709f2fd9 > .elementor-motion-effects-container > .elementor-motion-effects-layer
        {
            background-image: url(https://planawedding.in/frontend/images/adform/socialformbanner.png) !important;
        }
    
    .btn-back-custom {
        background: white;
        border: 2px solid #e2e8f0;
        color: #64748b;
        border-radius: 50px;
        padding: 14px 40px !important;
        font-size: 1.15rem !important;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-back-custom:hover {
        background: rgba(134, 58, 193, 0.05);
        border-color: rgba(134, 58, 193, 0.4);
        color: #863ac1;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(134, 58, 193, 0.1);
    }

        /* ============================================================
       ELEGANT CUSTOM CHECKBOXES & RADIO BUTTONS
    ============================================================ */
    .custom-control {
        position: relative;
        display: flex !important;
        align-items: center !important;
        min-height: auto !important;
        padding-left: 0 !important;
    }
    .custom-control-input {
        position: absolute;
        left: -9999px !important;
        z-index: -1;
        width: 1px;
        height: 1px;
        opacity: 0 !important;
    }

    /* --- Label: flex row so box + text sit on same line --- */
    .custom-control-label {
        position: relative;
        cursor: pointer;
        font-weight: 500 !important;
        color: #475569 !important;
        font-size: 1.05rem !important;
        line-height: 1.4;
        transition: color 0.25s ease;
        display: inline-flex !important;
        align-items: center !important;
        margin-bottom: 0 !important;
        padding-left: 0 !important;
        gap: 0.6rem;
        user-select: none;
    }

    /* --- The visual box / circle (::before) --- */
    .custom-checkbox .custom-control-label::before,
    .custom-radio   .custom-control-label::before {
        content: "" !important;
        position: relative !important;
        flex-shrink: 0;
        display: inline-block !important;
        width: 20px !important;
        height: 20px !important;
        background: #ffffff !important;
        border: 2px solid #c4b5d8 !important;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1) !important;
        box-shadow: 0 1px 3px rgba(134,58,193,0.08) !important;
    }
    .custom-checkbox .custom-control-label::before {
        border-radius: 6px !important;
    }
    .custom-radio .custom-control-label::before {
        border-radius: 50% !important;
    }

    /* --- The check / dot (::after) --- */
    .custom-checkbox .custom-control-label::after,
    .custom-radio   .custom-control-label::after {
        content: "" !important;
        position: absolute !important;
        display: block !important;
        opacity: 0 !important;
        transform: scale(0.4) !important;
        transition: all 0.22s cubic-bezier(0.4, 0, 0.2, 1) !important;
        border: none !important;
    }
    .custom-checkbox .custom-control-label::after {
        left: 0 !important;
        top: 50% !important;
        transform: scale(0.4) translateY(-50%) !important;
        width: 20px !important;
        height: 20px !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: 65% !important;
        background-color: transparent !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
    }
    .custom-radio .custom-control-label::after {
        left: 5px !important;
        top: 50% !important;
        transform: scale(0.4) translateY(-50%) !important;
        width: 10px !important;
        height: 10px !important;
        border-radius: 50% !important;
        background-color: #fff !important;
        background-image: none !important;
    }

    /* --- Checked states --- */
    .custom-control-input:checked ~ .custom-control-label::before {
        background: linear-gradient(135deg, #9c4de0 0%, #7b2abf 100%) !important;
        border-color: #7b2abf !important;
        box-shadow: 0 3px 10px rgba(134,58,193,0.35), inset 0 1px 0 rgba(255,255,255,0.2) !important;
    }
    .custom-control-input:checked ~ .custom-control-label::after {
        opacity: 1 !important;
        transform: scale(1) translateY(-50%) !important;
    }
    .custom-control-input:checked ~ .custom-control-label {
        color: #7b2abf !important;
        font-weight: 600 !important;
    }

    /* --- Hover glow --- */
    .custom-control:hover .custom-control-label::before {
        border-color: #863ac1 !important;
        box-shadow: 0 0 0 3px rgba(134,58,193,0.12) !important;
    }

    /* --- Checkbox card pill for services grid --- */
    .ws-checkbox-card {
        display: flex;
        align-items: center;
        gap: 0.55rem;
        padding: 9px 14px;
        border: 1.5px solid #e2d6f3;
        border-radius: 50px;
        background: #faf7ff;
        cursor: pointer;
        font-size: 1.15rem;
        font-weight: 500;
        color: #4a3060;
        transition: all 0.22s ease;
        white-space: nowrap;
        width: 100%;
    }
    .ws-checkbox-card:hover {
        border-color: #863ac1;
        background: #f3e8ff;
        box-shadow: 0 2px 10px rgba(134,58,193,0.15);
        color: #7b2abf;
    }
    .custom-control-input:checked + .ws-checkbox-card {
        border-color: #7b2abf;
        background: linear-gradient(135deg, #f3e8ff 0%, #ede0fb 100%);
        box-shadow: 0 3px 12px rgba(134,58,193,0.22);
        color: #6921b0;
        font-weight: 600;
    }
    .ws-checkbox-card .ws-check-icon {
        width: 18px;
        height: 18px;
        border-radius: 5px;
        border: 2px solid #c4b5d8;
        background: #fff;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.22s ease;
    }
    .custom-control-input:checked + .ws-checkbox-card .ws-check-icon {
        background: linear-gradient(135deg, #9c4de0, #7b2abf);
        border-color: #7b2abf;
    }
    .ws-check-icon svg { opacity: 0; transition: opacity 0.18s ease; }
    .custom-control-input:checked + .ws-checkbox-card .ws-check-icon svg { opacity: 1; }

    /* --- Sequence item --- */
    .sequence-item:hover {
        border-color: #863ac1 !important;
        box-shadow: 0 4px 16px rgba(134, 58, 193, 0.18) !important;
        transform: translateY(-1px);
    }
    .seq-up:hover, .seq-down:hover {
        background: linear-gradient(135deg,#9c4de0,#7b2abf) !important;
        color: #ffffff !important;
        border-color: #7b2abf !important;
        box-shadow: 0 3px 8px rgba(134,58,193,0.3) !important;
    }

    /* --- Sequence checkbox pill --- */
    .seq-check-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }
    .seq-check-box {
        width: 20px;
        height: 20px;
        border-radius: 6px;
        border: 2px solid #c4b5d8;
        background: #fff;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.22s ease;
        box-shadow: 0 1px 3px rgba(134,58,193,0.08);
    }
    .sequence-checkbox:checked ~ label .seq-check-box,
    .sequence-checkbox:checked + label .seq-check-box {
        background: linear-gradient(135deg,#9c4de0,#7b2abf);
        border-color: #7b2abf;
        box-shadow: 0 3px 8px rgba(134,58,193,0.3);
    }
    .seq-check-svg { opacity: 0; transition: opacity 0.18s; }
    .sequence-checkbox:checked ~ label .seq-check-svg,
    .sequence-checkbox:checked + label .seq-check-svg { opacity: 1; }
    .seq-item-text {
        color: #334155;
        font-size: 1.05rem;
        font-weight: 500;
        line-height: 1;
    }
    .sequence-checkbox:checked ~ label .seq-item-text,
    .sequence-checkbox:checked + label .seq-item-text {
        color: #7b2abf;
        font-weight: 600;
    }

    /* --- Add Event row fix --- */
    .add-event-row {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
    }
    .add-event-row .form-control {
        flex: 1;
        min-width: 0;
    }
    .add-event-row .btn-add-event {
        flex-shrink: 0;
        white-space: nowrap;
        background: linear-gradient(135deg, #9c4de0 0%, #7b2abf 100%);
        border: none;
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
        padding: 10px 22px;
        font-size: 0.95rem;
        box-shadow: 0 3px 10px rgba(134,58,193,0.3);
        transition: all 0.22s ease;
        height: 42px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .add-event-row .btn-add-event:hover {
        background: linear-gradient(135deg, #863ac1 0%, #6a1fa6 100%);
        box-shadow: 0 5px 16px rgba(134,58,193,0.4);
        transform: translateY(-1px);
    }
    .add-event-row .form-control {
        border-radius: 8px;
        border: 1.5px solid #e2d6f3;
        height: 42px;
        font-size: 0.95rem;
        padding: 8px 14px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }
    .add-event-row .form-control:focus {
        border-color: #863ac1;
        box-shadow: 0 0 0 3px rgba(134,58,193,0.12);
        outline: none;
    }
</style>
     
@endpush

@section('content')

<!-- All Content Comes Here -->
 <!-- start Form  -->
 
            <main class="site-main post-567 envato_tk_templates type-envato_tk_templates status-publish has-post-thumbnail hentry" role="main">
                <div class="page-content">
                    <div data-elementor-type="wp-post" data-elementor-id="567" class="elementor elementor-567" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-709f2fd9 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="709f2fd9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3060d2f4" data-id="3060d2f4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5593451e elementor-widget elementor-widget-heading" data-id="5593451e" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">WEDDING PLANNING </h1>
                                                        <p class="titlestext hidden-xs" >Consult our expert for free on complete wedding planning</p>
                                                        <p class="titlestext visible-xs">Free consultation on wedding planning</p>
                                                        <div class="row hidden-xs">               
                                                                <p class="min-text-mobile">Consult with us - Connect with our planner - Convert your expenses into EMI  </p>
                                                                <p class="grap-btn to_top animated bgss addcursor btn wsk-btn" data-toggle="modal" data-target="#exampleModalCenter" >Get Free Quote </p>
                                                        </div>
                                                        
                                                        <div class="row visible-xs">               
                                                                <p class="min-text-mobile">Consult - Connect  - Convert   </p>
                                                                <p class="grap-btn to_top animated bgss addcursor btn wsk-btn" data-toggle="modal" data-target="#exampleModalCenter" style="margin-bottom:10%" >Get Free Quote </p>
                                                                <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>
                      </div>
                    </div>
                    
                </div>
            </main>    
            <header class=" bg-gray-100 py-10 px-5 xl:py-0 xl:px-0 movetop">
                
                    <div class="row hidden-xs">
                        <div class="col-md-12 text-center pt-5 pb-5">
                            <h1 class="text-3xl xl:text-5xl font-semibold xl:leading-snug text-gray-900 2xl:text-6xl 2xl:leading-snug pt-3p">Get Amazing <span class="text-purple-500">Wedding </span>Packages</h1>
                    		<p class="xl:leading-9 text-base xl:text-lg mt-3 mb-10">Connect with us for exciting offers for your wedding planning requirement.
                    		</p>
                    	</div>	
                   </div> 
                           
                    <div class="min-h-screen xl:grid place-items-center place-content-center xl:grid-cols-1 xl:max-w-screen-xl mx-auto w-11/12 xl:max-w-screen-2xl gap-14 hidden-xs">
                       <!-- <div class="max-w-xl mx-auto xl:max-w-2xl xl:-mt-8 ">
                        
                          
                                
                        <h1 class="text-3xl xl:text-5xl font-semibold xl:leading-snug text-gray-900 2xl:text-6xl 2xl:leading-snug">Get Amazing <span class="text-purple-500">Wedding </span>Packages</h1>
                      
                		<div class="container bg-white">
                		  <div class="wrapper">
                			 
                			<div class="p-one">
                			  <p>Input Details  </p>
                			</div>
                			<div class="inp">
                			
                			 <div class="toplabel datas">	
                				<label class="email" for="name"> Name </label>
                				   
                				  <input type="text" name="name" id="name" class="email-margin" >
                				  
                				  <i class="fas fa-user user"></i>
                			 </div>	
                			 
                			 <div class="toplabel1 datas">	
                			  <label class="pass" for="email"> Email </label> 
                			  <input type="email" name="email" id="email"  >
                			   <i class="fas fa-envelope email"></i>
                			 </div>
                			 
                			 <div class="toplabel2 datas">	
                			  <label class="email1" for="phone_number"> Mobile </label>
                			  <input type="number" name="phone_number" id="phone_number" onkeypress="return isNumber(event)" maxlength="10" class="">
                			   <i class="fas fa-phone mobile"></i>
                			 
                			 </div>  
                			 
                			 <div class="toplabel2 datas">	
                			    <label class="city1" for="city"> City </label>
                    			  <select class="form-select" name="city" id="city">
                                      <option selected disabled value="">choose</option>
                                      <option value="Bangalore">Bangalore</option>
                                      <option value="Hyderabad">Hyderabad</option>
                                      <option value="Delhi">Delhi</option>
                                    </select> 
                			 </div> 
                			 
                			 
                			  <div class="toplabel2 datas">	
                    			  <label class="date1" for="weddingdate"> Wedding Date </label>
                    			  <input type="text" name="weddingdate" id="weddingdate">
                    			  <i class="fas fa-calendar calender"></i>
                    			 
                			 </div> 
                			 
                			 
                			 
                			 @if(!empty($packagename))
                    			 <div class="toplabel3 datas">	
                    			    <label class="chos" for="package_details"> Chosen </label>
                    			    <input type="text" name="package_details" id="package_details" class="emailss-margin" value="{{$packagename}}" readonly>
                    			    <i class="fas fa-phone mobile"></i>
                    			 </div>
                			 @endif
                			 
                			    <div class="btnhide">
                        			<div class="button">
                        			  <button class="btn" name="addItem"  id="addItem" value="add" href="javascript:void(0);">GET OTP </button> 
                        			  
                        			</div>
                        			
                        		</div> 	
                    			<div class="otp-text">
                            		<div class="toplabel datas1">	
                        				<label class="otps" for="name">  OTP </label>
                        				   
                        				  <input type="number" name="entered_otp" id="entered_otp" class="otp-margin" >
                        				  
                        				  <i class="fas fa-user user"></i>
                        			 </div>	
                        			 <div class="col-md-12 text-center mb-30 ponters"> 
                        			        <div class="resendotp_details1" id="resendotp_details1" >Resend OTP</div>
                					</div>
                					<div class="button button1">
                        			  <button class="btn submit1" name="submit1"   id="submit1" value="" href="javascript:void(0);">Submit</button> 
                        			</div>
                    			 </div>
                			 
                			 
                			 <div class="col-md-12 button">
                        			     <p class="grap-btn to_top animated bgss addcursor btn" data-toggle="modal" data-target="#exampleModalCenter" >
                                         Click here for popup
                                        </p>
                        			</div>
                        			
                			</div>	 			
                		  </div>
                		</div>
                
                	
                    </div>-->
                    
                            
                        <div class="card__grid mt-14 xl:mt-0 sm:justify-items-center">
                
                           
                        		
                            <div class="card--1 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-1 lg:row-end-3">
                        <div class="w-full h-40 lg:h-48 xl:h-56">
                          <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('/frontend/images/social/img1.png') }}" alt="Wedding Decoration">
                        </div>
                
                        <div>
                          <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900 ">Wedding Decoration</h2>
                          <p class="text-gray-400 text-sm flex justify-between items-center"> 10,851+ Decorations to Choose From
                		  </p>
                        </div>
                
                      </div>
                            <div class="card--2 w-full max-w-xs flex items-center bg-white shadow-xl rounded-3xl w-80 p-5 lg:row-start-1 lg:row-end-2">
                        <div class="w-20 h-20">
                          <img src="{{ asset('/frontend/images/social/img4.png') }}" alt="Consult Expert" class="rounded-2xl object-cover w-full h-full">
                        </div>
                        <div class="ml-4">
                          <h2 class="text-lg text-gray-900 font-semibold capitalize">Consult Expert</h2>
                          <p class="text-gray-400 mt-1 mb-2 text-sm">Managing Wedding Simplified</p>
                           
                        </div>
                      </div>
                
                            <div class="card--3 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-2 lg:row-end-5">
                        <div class="w-full h-40 lg:h-48 xl:h-56">
                          <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('/frontend/images/social/img2.png') }}" alt="Marry Now Pay Later">
                        </div>
                
                        <div>
                          <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900">Marry Now Pay Later</h2>
                          <p class="text-gray-400 flex justify-between items-center text-sm">Convert Wedding Expenses into 3,6,9,12,15 & 18 Months EMI with Zero Down Payment </p>
                        </div>
                
                      </div>
                            <div class="card--4 lg:row-start-3 lg:row-end-4 max-w-xs flex items-center bg-white shadow-xl rounded-3xl w-80 p-5 w-full">
                        <div class="w-20 h-20">
                          <img src="{{ asset('/frontend/images/social/img3.png') }}" alt="Wedding Guide" class="rounded-2xl object-cover w-full h-full">
                        </div>
                        <div class="ml-4">
                          <h2 class="text-lg text-gray-900 font-semibold capitalize">Wedding Guide</h2>
                          <p class="text-gray-400 mt-1 mb-2 text-sm">Budgeting, Guest List & Checklist </p>
                           
                        </div>
                      </div>
                         </div>
                    </div>
            
                    <div class="min-h-screens xl:grid place-items-center place-content-center xl:grid-cols-2 xl:max-w-screen-xl mx-auto w-11/12 xl:max-w-screen-2xl gap-14 visible-xs">
                        	<div class="max-w-xl mx-auto xl:max-w-2xl xl:-mt-8 "> 
                        	    <div class="row hidden-xs">
                        		        <a href="{{ route('website.socialform') }}"><center><img src="{{ asset('/frontend/images/social/logo.png') }}" alt="logo" class="logos "></center></a>
                        		        
                        		</div> 
                        		<div class="row visible-xs only-on-mob">
                                     
                                </div>
                                        
                        	
                        		 <h1 class="text-3xl xl:text-5xl font-semibold xl:leading-snug text-gray-900 2xl:text-6xl 2xl:leading-snug">Get Amazing <span class="text-purple-500">Wedding </span>Packages</h1>
                        		<p class="xl:leading-9 text-base xl:text-lg mt-3 mb-10">Connect with us for exciting offers for your wedding planning requirement.
                        		</p>
                        	</div>	 
                        	<div class="card__grid mt-14 xl:mt-0 sm:justify-items-center">
                        
                        	<div class="row">
                        		<div class="col-md-6">
                        			  <div class="card--1 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-1 lg:row-end-3">
                        				<div class="w-full h-40 lg:h-48 xl:h-56">
                        				  <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('/frontend/images/social/img1.png') }}" alt="Wedding Decoration">
                        				</div>
                        
                        				<div>
                        				  <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900 ">Wedding Decoration</h2>
                        				  <p class="text-gray-400 text-sm flex justify-between items-center"> 10,851+ Decorations to Choose From
                        				  </p>
                        				</div>
                        
                        			  </div> 
                        		</div>
                        		<div class="col-md-6">
                        		    <div class="card--2 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-1 lg:row-end-3">
                                        <div class="w-full h-40 lg:h-48 xl:h-56">
                                          <img src="{{ asset('/frontend/images/social/img4.png') }}" alt="Consult Expert" class="rounded-2xl object-cover w-full h-full">
                                        </div>
                                        <div >
                                          <h2 class="text-lg text-gray-900 font-semibold capitalize">Consult Expert</h2>
                                          <p class="text-gray-400 mt-1 mb-2 text-sm">Managing Wedding Simplified</p>
                                           
                                        </div>
                                      </div>
                        		</div>
                        		<div class="col-md-6">  
                        		  <div class="card--3 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-2 lg:row-end-5">
                        			<div class="w-full h-40 lg:h-48 xl:h-56">
                        			  <img class="w-full h-full object-cover rounded-2xl" src="{{ asset('/frontend/images/social/img2.png') }}" alt="Marry Now Pay Later">
                        			</div>
                        
                        			<div>
                        			  <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900">Marry Now Pay Later</h2>
                        			  <p class="text-gray-400 flex justify-between items-center text-sm">Convert Wedding Expenses into 3,6,9,12,15 & 18 Months EMI with Zero Down Payment </p>
                        			</div>
                        
                        		  </div>
                        		</div>
                        		
                        		<div class="col-md-6">
                        		    <div class="card--4 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-1 lg:row-end-3">
                                            <div class="w-full h-40 lg:h-48 xl:h-56">
                                              <img src="{{ asset('/frontend/images/social/img3.png') }}" alt="Wedding Guide" class="rounded-2xl object-cover w-full h-full">
                                            </div>
                                            <div class="ml-4">
                                              <h2 class="text-lg text-gray-900 font-semibold capitalize">Wedding Guide</h2>
                                              <p class="text-gray-400 mt-1 mb-2 text-sm">Budgeting, Guest List & Checklist </p>
                                               
                                            </div>
                                          </div>
                        		</div>
                        	 </div> 
                        	
                         
                        	  <!--<div class="container bg-white">
                        		  <div class="wrapper">
                        			 
                        			<div class="p-one">
                        			  <p>Input Details </p>
                        			</div>
                        			<div class="inp">
                        			
                        			 <div class="toplabel datas">	
                        				<label class="email" for="name1"> Name </label>
                        				   
                        				  <input type="text" name="name1" id="name1" class="email-margin" >
                        				  
                        				  <i class="fas fa-user user"></i>
                        			 </div>	
                        			 
                        			 <div class="toplabel1 datas">	
                        			  <label class="pass" for="email1"> Email </label> 
                        			  <input type="email" name="email1" id="email1"  >
                        			   <i class="fas fa-envelope email"></i>
                        			 </div>
                        			 
                        			 <div class="toplabel2 datas">	
                        			  <label class="email1" for="phone_number1"> Mobile </label>
                        			  <input type="number" name="phone_number1" id="phone_number1" onkeypress="return isNumber(event)" maxlength="10" class="">
                        			   <i class="fas fa-phone mobile"></i>
                        			 
                        			 </div>  
                        			 
                        			 <div class="toplabel2 datas">	
                        			  <label class="city1" for="city1"> City </label>
                            			  <select class="form-select" name="city1" id="city1">
                                              <option selected disabled value="">choose</option>
                                              <option value="Bangalore">Bangalore</option>
                                              <option value="Hyderabad">Hyderabad</option>
                                              <option value="Delhi">Delhi</option>
                                            </select> 
                        			 </div> 
                        			 
                        			 
                        			  <div class="toplabel2 datas">	
                            			  <label class="date1" for="weddingdate"> Wedding Date  </label>
                            			  <input type="text" name="weddingdate1" id="weddingdate1">
                            			  <i class="fas fa-calendar calender"></i>
                            			 
                        			 </div>
                        			 
                        			 @if(!empty($packagename))
                            			 <div class="toplabel3 datas">	
                            			    <label class="chos" for="package_details1"> Chosen </label>
                            			    <input type="text" name="package_details1" id="package_details1" class="emailss-margin" value="{{$packagename}}" readonly>
                            			    <i class="fas fa-phone mobile"></i>
                            			 </div>
                        			 @endif
                        			  
                        			</div>
                        			<div class="btnhide1">
                            			<div class="button">
                            			  <button class="btn"   name="addItem1"  id="addItem1" value="add" href="javascript:void(0);">GET OTP  </button> 
                            			  
                            			  
                            			</div>
                            			
                            		
                        		    </div>
                        		    
                        		    <div class="otp-text1">
                                    		<div class="toplabel datas1">	
                                				<label class="otps" for="entered_otp1">  OTP </label>
                                				   
                                				  <input type="number" name="entered_otp1" id="entered_otp1" class="otp-margin" >
                                				  
                                				 
                                			 </div>	
                                			 <div class="col-md-12 text-center mb-30 ponters"> 
                                			        <div class="resendotp_details2" id="resendotp_details2" >Resend OTP</div>
                        					</div>
                        					<div class="button button1">
                                			  <button class="btn submit2" name="submit2"   id="submit2" value="" href="javascript:void(0);">Submit</button> 
                                			</div>
                            			 </div>
                            			 
                            		<div class="col-md-12 button">
                        			     <p class="grap-btn to_top animated bgss addcursor btn" data-toggle="modal" data-target="#exampleModalCenter" >
                                         Click here for popup
                                        </p>
                        			</div>
                        			
                        			
                        		  </div>
                        		</div>-->
                         
                        	</div>	
                        </div>
                    </header>





	<!-- End Form -->


        <style>

    #exampleModalCenter .modal-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        margin: 0;
        width: 90%;
        max-width: 800px;
    }

    #newWizardForm .form-control {
        padding: 14px 20px;
        font-size: 16px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        height: auto;
    }
    #newWizardForm select.form-control {
        position: relative;
        z-index: 10;
        cursor: pointer;
    }
    .ui-datepicker {
        z-index: 9999 !important;
    }
    #newWizardForm .form-control:focus {
        border-color: #863ac1;
        box-shadow: 0 0 0 4px rgba(134, 58, 193, 0.1);
        background-color: #fff;
    }
    #newWizardForm label {
        font-weight: 600;
        color: #475569;
        margin-bottom: 8px;
    }
    .wizard-step-title {
        color: #1e293b;
        font-weight: 700;
        font-size: 1.5rem;
    }
    .btn-primary-custom {
        padding: 16px 50px !important;
        font-size: 1.3rem !important;
        background: linear-gradient(135deg, #a855f7 0%, #863ac1 50%, #581c87 100%);
        background-size: 200% auto;
        border: none;
        color: white;
        border-radius: 50px;
        box-shadow: 0 8px 20px rgba(134, 58, 193, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .btn-primary-custom:hover {
        background-position: right center;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(134, 58, 193, 0.6), inset 0 2px 0 rgba(255, 255, 255, 0.3);
        color: white;
    }
    .btn-outline-custom {
        border: 2px solid #863ac1;
        color: #863ac1;
        background: transparent;
        border-radius: 30px;
        transition: all 0.3s;
    }
    .btn-outline-custom:hover, .btn-outline-custom.active, .btn-group-toggle .btn.active {
        background: #863ac1 !important;
        color: white !important;
        border-color: #863ac1 !important;
    }
    .validation-toast {
        position: absolute;
        z-index: 30;
        right: -10px;
        top: 50%;
        transform: translateY(-50%) translateX(100%);
        background: #ef4444;
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        pointer-events: none;
        white-space: nowrap;
    }
    .validation-toast::before {
        content: '';
        position: absolute;
        bottom: -6px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 6px;
        border-style: solid;
        border-color: #ef4444 transparent transparent transparent;
    }
    .validation-toast.show {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }
    .validation-toast.show-top {
        transform: translateX(-50%) translateY(0) !important;
        bottom: auto;
        top: -40px;
    }
    .validation-toast.show-top::before {
        bottom: auto;
        top: -12px;
        border-color: transparent transparent #ef4444 transparent;
        border-width: 6px;
        margin-top: -6px;
    }
    /* BASE CONTROL CONTAINER */
            .custom-control {
        position: relative;
        display: block;
        min-height: 2.5rem;
    }
    .custom-control-input {
        position: absolute;
        left: -9999px !important;
        z-index: -1;
        width: 1px;
        height: 1px;
        opacity: 0 !important;
    }
    .custom-checkbox .custom-control-label::before, 
    .custom-radio .custom-control-label::before {
        content: "" !important;
        position: relative !important;
        display: inline-block !important;
        margin-right: 0.75rem !important;
        width: 1.75rem !important;
        height: 1.75rem !important;
        border: 2px solid #cbd5e1 !important;
        background-color: transparent !important;
        transition: all 0.2s ease-in-out !important;
        box-shadow: none !important;
        flex-shrink: 0;
    }
    .custom-checkbox .custom-control-label::before {
        border-radius: 4px !important;
    }
    .custom-radio .custom-control-label::before {
        border-radius: 50% !important;
    }
    .custom-checkbox .custom-control-label::after,
    .custom-radio .custom-control-label::after {
        content: "" !important;
        position: absolute !important;
        display: block !important;
        transition: all 0.2s ease-in-out !important;
        opacity: 0 !important;
        transform: scale(0.5) !important;
        border: none !important;
        left: 0 !important;
    }
    .custom-checkbox .custom-control-label::after {
        width: 1.75rem !important;
        height: 1.75rem !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: 65% !important;
        background-color: transparent !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
    }
    .custom-radio .custom-control-label::after {
        left: 0.375rem !important;
        top: 50% !important;
        margin-top: -0.375rem !important;
        width: 0.75rem !important;
        height: 0.75rem !important;
        border-radius: 50% !important;
        background-color: #fff !important;
        background-image: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #863ac1 !important;
        border-color: #863ac1 !important;
        box-shadow: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::after {
        opacity: 1 !important;
        transform: scale(1) !important;
    }
    .custom-control:hover .custom-control-label::before {
        border-color: #863ac1 !important;
    }
    .custom-control-label {
        position: relative;
        cursor: pointer;
        font-weight: 500 !important;
        color: #475569 !important;
        line-height: 1.5;
        font-size: 1.15rem !important;
        transition: color 0.3s ease;
        display: flex !important;
        align-items: center !important;
        margin-bottom: 0 !important;
        padding-left: 0 !important;
    }
    .custom-control-input:checked ~ .custom-control-label {
        color: #863ac1 !important;
        font-weight: 600 !important;
    }
    .sequence-item:hover {
        border-color: #863ac1 !important;
        box-shadow: 0 4px 12px rgba(134, 58, 193, 0.15) !important;
    }
    .seq-up:hover, .seq-down:hover {
        background-color: #863ac1 !important;
        color: #ffffff !important;
        border-color: #863ac1 !important;
    }
        font-weight: 600 !important;
    }
    .btn-back-custom {
        background: white;
        border: 2px solid #e2e8f0;
        color: #64748b;
        border-radius: 50px;
        padding: 14px 40px !important;
        font-size: 1.15rem !important;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-back-custom:hover {
        background: rgba(134, 58, 193, 0.05);
        border-color: rgba(134, 58, 193, 0.4);
        color: #863ac1;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(134, 58, 193, 0.1);
    }
    .validation-toast.toast-bottom-center {
        left: 50% !important;
        right: auto !important;
        transform: translateX(-50%) translateY(0) !important;
        top: 100% !important;
        bottom: auto !important;
        margin-top: 12px !important;
    }
    .validation-toast.toast-bottom-center::before {
        bottom: auto !important;
        top: -12px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        border-color: transparent transparent #ef4444 transparent !important;
        border-width: 6px !important;
        margin-top: 0 !important;
    }

            .custom-control {
        position: relative;
        display: block;
        min-height: 2.5rem;
    }
    .custom-control-input {
        position: absolute;
        left: -9999px !important;
        z-index: -1;
        width: 1px;
        height: 1px;
        opacity: 0 !important;
    }
    .custom-checkbox .custom-control-label::before, 
    .custom-radio .custom-control-label::before {
        content: "" !important;
        position: relative !important;
        display: inline-block !important;
        margin-right: 0.75rem !important;
        width: 1.75rem !important;
        height: 1.75rem !important;
        border: 2px solid #cbd5e1 !important;
        background-color: transparent !important;
        transition: all 0.2s ease-in-out !important;
        box-shadow: none !important;
        flex-shrink: 0;
    }
    .custom-checkbox .custom-control-label::before {
        border-radius: 4px !important;
    }
    .custom-radio .custom-control-label::before {
        border-radius: 50% !important;
    }
    .custom-checkbox .custom-control-label::after,
    .custom-radio .custom-control-label::after {
        content: "" !important;
        position: absolute !important;
        display: block !important;
        transition: all 0.2s ease-in-out !important;
        opacity: 0 !important;
        transform: scale(0.5) !important;
        border: none !important;
        left: 0 !important;
        top: 0 !important;
    }
    .custom-checkbox .custom-control-label::after {
        width: 1.75rem !important;
        height: 1.75rem !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: 65% !important;
        background-color: transparent !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
    }
    .custom-radio .custom-control-label::after {
        left: 0.375rem !important;
        top: 50% !important;
        margin-top: -0.375rem !important;
        width: 0.75rem !important;
        height: 0.75rem !important;
        border-radius: 50% !important;
        background-color: #fff !important;
        background-image: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #863ac1 !important;
        border-color: #863ac1 !important;
        box-shadow: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::after {
        opacity: 1 !important;
        transform: scale(1) !important;
    }
    .custom-control:hover .custom-control-label::before {
        border-color: #863ac1 !important;
    }
    .custom-control-label {
        position: relative;
        cursor: pointer;
        font-weight: 500 !important;
        color: #475569 !important;
        line-height: 1.5;
        font-size: 1.15rem !important;
        transition: color 0.3s ease;
        display: flex !important;
        align-items: center !important;
        margin-bottom: 0 !important;
        padding-left: 0 !important;
    }
    .custom-control-input:checked ~ .custom-control-label {
        color: #863ac1 !important;
        font-weight: 600 !important;
    }
    .sequence-item:hover {
        border-color: #863ac1 !important;
        box-shadow: 0 4px 12px rgba(134, 58, 193, 0.15) !important;
    }
    .seq-up:hover, .seq-down:hover {
        background-color: #863ac1 !important;
        color: #ffffff !important;
        border-color: #863ac1 !important;
    }
</style>

<!-- Modal starts -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="border-radius: 20px; overflow: hidden; border: none; box-shadow: 0 20px 50px rgba(0,0,0,0.3);">
            <div class="modal-header" style="background: linear-gradient(135deg, #863ac1 0%, #a855f7 100%); color: white; border-bottom: none; padding: 20px 30px;"> 
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="opacity: 1; text-shadow: none; color: white !important; float: right; margin-top: -5px;">
                  <span aria-hidden="true" style="font-size: 2.5rem; color: white;">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 700; font-size: 1.25rem; margin: 0; line-height: 1.5;"><i class="fa fa-heart mr-2"></i> Plan Your Dream Wedding</h5>
            </div>
            <div class="modal-body p-4 p-md-5" style="background-color: #ffffff; max-height: 75vh; overflow-y: auto; overflow-x: hidden;">
                <form id="newWizardForm">
                    <input type="hidden" name="assignid" value="{{ request()->route('id') }}">
                    <!-- Step 1 -->
                    <div class="wizard-step" id="step1">
                        <h4 class="mb-4 text-center wizard-step-title">Let's get started</h4>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter full name" data-validation="Please enter client name">
                                    <div class="validation-toast">Please enter client name</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Client Mobile</label>
                                    <input type="text" class="form-control" name="client_mobile" id="client_mobile" placeholder="Enter 10-digit mobile number" data-validation="Please enter valid 10-digit mobile number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    <div class="validation-toast">Please enter valid 10-digit mobile number</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="button" class="btn btn-primary-custom btn-lg px-5 py-3 btn-next" data-next="step2" style="font-size: 1.1rem; font-weight: 600;">Next Step <i class="fa fa-arrow-right ml-2"></i></button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="wizard-step" id="step2" style="display:none;">
                        <h4 class="mb-4 text-center wizard-step-title">When is the big day?</h4>
                        <div class="form-group text-center mb-4">
                            <label style="font-size: 1.1em; display:block; margin-bottom: 20px;">Is Wedding Date Fixed?</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 120px;">
                                    <input type="radio" name="is_date_fixed" value="Yes" autocomplete="off" class="required-radio" data-validation="Please select an option"> Yes
                                </label>
                                <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 120px;">
                                    <input type="radio" name="is_date_fixed" value="No" autocomplete="off" class="required-radio" data-validation="Please select an option"> No
                                </label>
                            </div>
                            <div class="validation-toast toast-bottom-center" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select an option</div>
                        </div>

                        <div id="date_fixed_container" style="display:none; max-width: 300px; margin-left: auto; margin-right: auto;" class="mt-4 form-group">
                            <label>Wedding Date</label>
                            <input type="text" class="form-control datepicker text-center" name="wedding_date" id="wedding_date" placeholder="dd-mm-yyyy" data-validation="Please select the wedding date">
                            <div class="validation-toast">Please select the wedding date</div>
                        </div>

                        <div id="date_not_fixed_container" style="display:none; max-width: 300px; margin-left: auto; margin-right: auto;" class="mt-4 form-group">
                            <label>Approx wedding date?</label>
                            <select class="form-control text-center" name="approx_wedding_date" id="approx_wedding_date" data-validation="Please select an approx date">
                                <option value="">Select Option</option>
                                <option value="In less than a month">In less than a month</option>
                                <option value="In the next 1 - 3 months">In the next 1 - 3 months</option>
                                <option value="In the next 3-6 months">In the next 3-6 months</option>
                                <option value="In the next 6-12 months">In the next 6-12 months</option>
                            </select>
                            <div class="validation-toast">Please select an approx date</div>
                        </div>

                        <div class="text-center mt-5 d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-back-custom btn-prev" data-prev="step1"><i class="fa fa-arrow-left mr-2"></i> Back</button>
                            <button type="button" class="btn btn-primary-custom btn-lg px-5 py-3 btn-next" data-next="step3" style="font-size: 1.1rem; font-weight: 600;">Next Step <i class="fa fa-arrow-right ml-2"></i></button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="wizard-step" id="step3" style="display:none;">
                        <h4 class="mb-4 text-center wizard-step-title">Where is it happening?</h4>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Client City</label>
                                    <input type="text" class="form-control" name="client_city" id="client_city" placeholder="E.g., Bangalore" data-validation="Please enter client city" style="position: relative; z-index: 20;">
                                    <div class="validation-toast">Please enter client city</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Client Location</label>
                                    <input type="text" class="form-control" name="client_location" id="client_location" placeholder="E.g., Indiranagar" data-validation="Please enter client location" style="position: relative; z-index: 20;">
                                    <div class="validation-toast">Please enter client location</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-5 text-center">
                            <label style="font-size: 1.1em; display:block; margin-bottom: 20px;">Is wedding location different?</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 120px;">
                                    <input type="radio" name="is_wedding_location_different" value="Yes" autocomplete="off" class="required-radio" data-validation="Please select an option"> Yes
                                </label>
                                <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 120px;">
                                    <input type="radio" name="is_wedding_location_different" value="No" autocomplete="off" class="required-radio" data-validation="Please select an option"> No
                                </label>
                            </div>
                            <div class="validation-toast toast-bottom-center" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select an option</div>
                        </div>

                        <div id="wedding_location_container" style="display:none; max-width: 300px; margin-left: auto; margin-right: auto;" class="mt-4 form-group">
                            <label>Wedding Location</label>
                            <input type="text" class="form-control text-center" name="wedding_location" id="wedding_location" placeholder="Enter wedding city/location" data-validation="Please enter wedding location" style="position: relative; z-index: 20;">
                            <div class="validation-toast">Please enter wedding location</div>
                        </div>

                        <div class="text-center mt-5 d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-back-custom btn-prev" data-prev="step2"><i class="fa fa-arrow-left mr-2"></i> Back</button>
                            <button type="button" class="btn btn-primary-custom btn-lg px-5 py-3 btn-next" data-next="step4" style="font-size: 1.1rem; font-weight: 600;">Next Step <i class="fa fa-arrow-right ml-2"></i></button>
                        </div>
                    </div>

                    <!-- Step 4 & 5 -->
                    <div class="wizard-step" id="step4" style="display:none;">
                        <h4 class="mb-4 text-center wizard-step-title">Traditions & Customs</h4>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>Type of Wedding</label>
                                    <select class="form-control" name="wedding_type" id="wedding_type" data-validation="Please select wedding type">
                                        <option value="">Select Wedding Type</option>
                                        <option value="Tamil Wedding">Tamil Wedding</option>
                                        <option value="Telugu Wedding">Telugu Wedding</option>
                                        <option value="Kannada Wedding">Kannada Wedding</option>
                                        <option value="Kerala Wedding">Kerala Wedding</option>
                                        <option value="Punjabi Wedding">Punjabi Wedding</option>
                                        <option value="Gujarati Wedding">Gujarati Wedding</option>
                                        <option value="Bengali Wedding">Bengali Wedding</option>
                                        <option value="Maharashtrian Wedding">Maharashtrian Wedding</option>
                                        <option value="Rajasthani Wedding">Rajasthani Wedding</option>
                                        <option value="Odia Wedding">Odia Wedding</option>
                                        <option value="Assamese Wedding">Assamese Wedding</option>
                                        <option value="Sikh Wedding">Sikh Wedding</option>
                                        <option value="Christian Wedding">Christian Wedding</option>
                                        <option value="Muslim Wedding">Muslim Wedding</option>
                                        <option value="Jain Wedding">Jain Wedding</option>
                                        <option value="North Indian Wedding">North Indian Wedding</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="validation-toast">Please select wedding type</div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4" id="wedding_community_container" style="display:none;">
                                <div class="form-group">
                                    <label id="community_label">Select Community</label>
                                    <select class="form-control" name="wedding_community" id="wedding_community" data-validation="Please select community">
                                        <!-- Populated dynamically via JS -->
                                    </select>
                                    <div class="validation-toast">Please select community</div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix" style="clear: both; width: 100%;"></div>
                        <div class="text-center mt-5 d-block w-100" style="clear: both;">
                            <button type="button" class="btn btn-back-custom btn-prev mx-2" data-prev="step3"><i class="fa fa-arrow-left mr-2"></i> Back</button>
                            <button type="button" class="btn btn-primary-custom btn-lg px-5 py-3 btn-next mx-2" data-next="step6" style="font-size: 1.1rem; font-weight: 600;">Next Step <i class="fa fa-arrow-right ml-2"></i></button>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="wizard-step" id="step6" style="display:none;">
                        <h4 class="mb-4 text-center wizard-step-title">Wedding Services</h4>
                        <div class="form-group mb-4">
                            <label style="font-size:1.05rem; font-weight:600; color:#4a3060; margin-bottom:14px; display:block;">Select Wedding Services <span style="font-weight:400; color:#8a7099; font-size:0.9rem;">(You can choose multiple)</span></label>
                            <div class="row mt-2" style="max-height: 270px; overflow-y: auto; padding: 4px 6px;">

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_engagement" name="wedding_services[]" value="Engagement">
                                        <label class="ws-checkbox-card" for="ws_engagement">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Engagement
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_cwp" name="wedding_services[]" value="Complete Wedding Planning">
                                        <label class="ws-checkbox-card" for="ws_cwp">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Complete Wedding Planning
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_venue" name="wedding_services[]" value="Venue">
                                        <label class="ws-checkbox-card" for="ws_venue">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Venue
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_catering" name="wedding_services[]" value="Catering">
                                        <label class="ws-checkbox-card" for="ws_catering">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Catering
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_decor" name="wedding_services[]" value="Decorations">
                                        <label class="ws-checkbox-card" for="ws_decor">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Decorations
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_photo" name="wedding_services[]" value="Photo & Videography">
                                        <label class="ws-checkbox-card" for="ws_photo">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Photo &amp; Videography
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_sound" name="wedding_services[]" value="Sound & Light">
                                        <label class="ws-checkbox-card" for="ws_sound">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Sound &amp; Light
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_dj" name="wedding_services[]" value="DJ">
                                        <label class="ws-checkbox-card" for="ws_dj">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            DJ
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_makeup" name="wedding_services[]" value="Bridal Makeup">
                                        <label class="ws-checkbox-card" for="ws_makeup">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Bridal Makeup
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_reception_req" name="wedding_services[]" value="Reception Requirement">
                                        <label class="ws-checkbox-card" for="ws_reception_req">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Reception Requirement
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input ws-checkbox" id="ws_destination" name="wedding_services[]" value="Destination Wedding">
                                        <label class="ws-checkbox-card" for="ws_destination">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Destination Wedding
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="validation-toast toast-bottom-center" id="services_validation" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select at least one service</div>
                        </div>

                        <div id="decor_sub_container" style="display:none;" class="mt-4 mb-4 form-group">
                            <label>Select Decoration Type (You can choose multiple)</label>
                            <div class="row mt-2">
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_muhurat" name="decor_type[]" value="Muhurat Decorations">
                                        <label class="ws-checkbox-card" for="decor_muhurat">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Muhurat
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_reception" name="decor_type[]" value="Reception Decorations">
                                        <label class="ws-checkbox-card" for="decor_reception">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Reception
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_sangeet" name="decor_type[]" value="Sangeet Decorations">
                                        <label class="ws-checkbox-card" for="decor_sangeet">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Sangeet
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_haldi" name="decor_type[]" value="Haldi Decorations">
                                        <label class="ws-checkbox-card" for="decor_haldi">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Haldi
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_home" name="decor_type[]" value="Home Decorations">
                                        <label class="ws-checkbox-card" for="decor_home">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Home
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mb-2">
                                    <div class="custom-control">
                                        <input type="checkbox" class="custom-control-input decor-checkbox ws-checkbox" id="decor_photobooth" name="decor_type[]" value="Photo booth">
                                        <label class="ws-checkbox-card" for="decor_photobooth">
                                            <span class="ws-check-icon"><svg width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                                            Photo booth
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="validation-toast toast-bottom-center" id="decor_validation" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select at least one decoration type</div>
                        </div>

                        <div class="row w-100 mx-0 mt-4" id="dest_fields_row" style="display:none;">
                            <div class="col-md-6 px-2 mb-4 form-group">
                                <label>Select Destination Wedding Type</label>
                                <select class="form-control" name="dest_type" id="dest_type" data-validation="Please select destination wedding type">
                                    <option value="">Select Option</option>
                                    <option value="Royal Palace Wedding">Royal Palace Wedding</option>
                                    <option value="Beach Wedding">Beach Wedding</option>
                                    <option value="Resort Wedding">Resort Wedding</option>
                                    <option value="Heritage Wedding">Heritage Wedding</option>
                                    <option value="Mountain Wedding">Mountain Wedding</option>
                                    <option value="Luxury Hotel Wedding">Luxury Hotel Wedding</option>
                                    <option value="Garden Wedding">Garden Wedding</option>
                                    <option value="Cruise Wedding">Cruise Wedding</option>
                                    <option value="Fort Wedding">Fort Wedding</option>
                                    <option value="Intimate Wedding">Intimate Wedding</option>
                                    <option value="Premium Luxury Wedding">Premium Luxury Wedding</option>
                                </select>
                                <div class="validation-toast">Please select destination wedding type</div>
                            </div>

                            <div class="col-md-6 px-2 mb-4 form-group">
                                <label>Destination Wedding Duration</label>
                                <select class="form-control" name="dest_duration" id="dest_duration" data-validation="Please select destination wedding duration">
                                    <option value="">Select Duration</option>
                                    <option value="1 Day">1 Day</option>
                                    <option value="2 Days">2 Days</option>
                                    <option value="3 Days">3 Days</option>
                                </select>
                                <div class="validation-toast">Please select destination wedding duration</div>
                            </div>
                        </div>

                        <div class="row w-100 mx-0 mt-4">
                            <div class="col-md-6 mb-4 px-2" id="guests_container" style="display:none;">
                                <div class="form-group">
                                    <label>Approximately how many guests is this for?</label>
                                    <select class="form-control" name="approx_guests" id="approx_guests" data-validation="Please select approx guests">
                                        <option value="">Select Option</option>
                                        <option value="Fewer than 50">Fewer than 50</option>
                                        <option value="50 - 200">50 - 200</option>
                                        <option value="200 - 500">200 - 500</option>
                                        <option value="500 - 1000+">500 - 1000+</option>
                                    </select>
                                    <div class="validation-toast">Please select approx guests</div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 px-2" id="budget_container" style="display:none;">
                                <div class="form-group">
                                    <label>Your Approx Wedding Budget?</label>
                                    <select class="form-control" name="approx_budget" id="approx_budget" data-validation="Please select approx budget">
                                        <option value="">Select Budget</option>
                                        <option value="3 - 5 Lakhs">&#8377;3 - &#8377;5 Lakhs</option>
                                        <option value="5 - 10 Lakhs">&#8377;5 - &#8377;10 Lakhs</option>
                                        <option value="10 - 15 Lakhs">&#8377;10 - &#8377;15 Lakhs</option>
                                        <option value="15 - 25 Lakhs">&#8377;15 - &#8377;25 Lakhs</option>
                                        <option value="25 - 50 Lakhs">&#8377;25 - &#8377;50 Lakhs</option>
                                    </select>
                                    <div class="validation-toast">Please select approx budget</div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="venue_questions_container" style="display:none;" class="mt-5 p-4" style="background:#f8fafc; border-radius:15px; border: 1px solid #e2e8f0;">
                            <div class="form-group text-center mb-4">
                                <label style="font-size: 1.1em; display:block; margin-bottom: 20px;">Is Venue Fixed?</label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 100px;">
                                        <input type="radio" name="is_venue_fixed" value="venueyes" autocomplete="off" data-validation="Please select an option"> Yes
                                    </label>
                                    <label class="btn btn-outline-custom btn-lg mx-2" style="min-width: 100px;">
                                        <input type="radio" name="is_venue_fixed" value="venueno" autocomplete="off" data-validation="Please select an option"> No
                                    </label>
                                </div>
                                <div class="validation-toast toast-bottom-center" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select an option</div>
                            </div>
                            
                            <div id="venue_fixed_yes" style="display:none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label>Enter Venue Name</label>
                                            <input type="text" class="form-control" name="venue_name" id="venue_name" data-validation="Please enter venue name">
                                            <div class="validation-toast">Please enter venue name</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label>Does venue allow outside vendor?</label>
                                            <select class="form-control" name="venue_allow_outside" id="venue_allow_outside" data-validation="Please select an option">
                                                <option value="">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                                <option value="I am not aware">I'm not aware</option>
                                            </select>
                                            <div class="validation-toast">Please select an option</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="venue_fixed_no" style="display:none; margin-top: 20px;">
                                <style>
                                .venue-option-wrapper { position: relative; margin-bottom: 15px; }
                                .venue-option-input { display: none !important; }
                                .venue-option-card { display: block; padding: 18px 20px; background: #ffffff; border: 2px solid #e2e8f0; border-radius: 12px; cursor: pointer; transition: all 0.3s ease; margin: 0; }
                                .venue-option-card:hover { border-color: #c4b5fd; background: #f8fafc; }
                                .venue-option-input:checked + .venue-option-card { border-color: #8b5cf6; background: #f5f3ff; box-shadow: 0 4px 12px rgba(139, 92, 246, 0.15); }
                                .venue-option-content { display: flex; align-items: center; }
                                .venue-option-radio { width: 22px; height: 22px; border: 2px solid #cbd5e1; border-radius: 50%; margin-right: 15px; position: relative; transition: all 0.2s; }
                                .venue-option-input:checked + .venue-option-card .venue-option-radio { border-color: #8b5cf6; }
                                .venue-option-input:checked + .venue-option-card .venue-option-radio::after { content: ''; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 12px; height: 12px; border-radius: 50%; background-color: #8b5cf6; }
                                .venue-option-text { font-size: 1.05rem; font-weight: 500; color: #334155; transition: color 0.2s; }
                                .venue-option-input:checked + .venue-option-card .venue-option-text { color: #4c1d95; font-weight: 600; }
                                </style>
                                <div class="form-group mb-4" style="background: linear-gradient(145deg, #f8fafc, #ffffff); border-radius: 16px; padding: 25px; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                                    <label style="font-size:1.1rem; font-weight:700; color:#4a3060; margin-bottom:20px; display:block;">Venue details</label>

                                    <div class="venue-option-wrapper">
                                        <input type="radio" id="vd1" name="venue_details_help" class="venue-option-input" value="Yes, I need venue assistance booking" style="display: none !important;">
                                        <label class="venue-option-card" for="vd1">
                                            <div class="venue-option-content">
                                                <div class="venue-option-radio"></div>
                                                <div class="venue-option-text">Yes, I need venue assistance booking</div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="venue-option-wrapper mb-0">
                                        <input type="radio" id="vd2" name="venue_details_help" class="venue-option-input" value="No, I will do it to myself" style="display: none !important;">
                                        <label class="venue-option-card" for="vd2">
                                            <div class="venue-option-content">
                                                <div class="venue-option-radio"></div>
                                                <div class="venue-option-text">No, I will do it to myself</div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="validation-toast" style="position: relative !important; left: 0 !important; transform: none !important; top: 0 !important; bottom: auto !important; margin-top: 15px !important; text-align: left; background-color: #ef4444; color: white; padding: 8px 15px; border-radius: 8px; font-weight: 500;">Please select an option</div>
                                </div>
                            </div>
                        </div>

                                                <div class="col-md-12 form-group mt-4 mb-5 px-4 py-4" id="sequence_of_events_container" style="display:none; clear: both; width: 100%; background: linear-gradient(145deg, #ffffff, #f8fafc); border-radius: 20px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                            <label style="font-size: 1.25em; font-weight: 700; color: #4a3060; display:block; margin-bottom: 15px; border-bottom: 2px solid #f1e2ff; padding-bottom: 10px;">Your Wedding Sequence of Events</label>
                            <p class="text-muted small mb-4" style="font-size: 0.95em;">Please arrange the events in the order they will occur. You can add or remove events as needed.</p>
                            <div class="validation-toast mb-3" id="sequence_main_validation" style="display:none; position:relative !important; left:0 !important; transform:none !important; top:0 !important; background-color: #ef4444; color: white; padding: 8px 15px; border-radius: 8px; font-weight: 500; text-align:left;">Please select at least one event</div>
                            <ul id="sequence_list" class="list-unstyled mb-4">
                                <!-- Sequence items injected here via JS -->
                            </ul>

                            <div class="mt-3">
                                <div class="add-event-row d-flex align-items-center" style="gap: 15px;">
                                    <input type="text" id="new_sequence_item" class="form-control" placeholder="e.g. Sangeet, Mehendi, Cocktail..." data-validation="Please enter an event name" style="border-radius: 10px; padding: 12px 15px;">
                                    <button type="button" id="add_sequence_btn" class="btn-add-event" style="border-radius: 10px; padding: 10px 20px; background: #a855f7; color: white; border: none; font-weight: 600; box-shadow: 0 4px 10px rgba(168, 85, 247, 0.3);">
                                        <i class="fa fa-plus mr-2"></i> Add Event
                                    </button>
                                </div>
                                <div class="validation-toast" id="sequence_item_validation" style="display:none; font-size: 0.82em; margin-top: 6px; text-align: left;">Please enter an event name</div>
                            </div>
                        </div>

                        <div class="clearfix" style="clear: both; width: 100%;"></div>
                        <div class="form-group mb-5 mt-4 text-center" style="background:#f8fafc; border-radius:15px; border: 1px solid #e2e8f0; padding: 20px;">
                            <label style="font-size: 1.1em; font-weight: 600; color: #475569; display:block; margin-bottom: 15px;">Preferred time to Connect with Client <small class="text-muted" style="font-weight:normal; font-size: 0.85em;">(Optional)</small></label>
                            <input type="datetime-local" class="form-control" name="preferred_connect_time" min="{{ \Carbon\Carbon::now('Asia/Kolkata')->format('Y-m-d\TH:i') }}" onclick="if('showPicker' in this) this.showPicker()" style="max-width: 300px; margin: 0 auto; text-align: center; cursor: pointer;">
                        </div>

                        <div class="form-group mb-5 mt-4 text-center" style="background:#f8fafc; border-radius:15px; border: 1px solid #e2e8f0; padding: 20px;">
                            <label style="font-size: 1.1em; font-weight: 600; color: #475569; display:block; margin-bottom: 15px;">Any Additional Remarks <small class="text-muted" style="font-weight:normal; font-size: 0.85em;">(If any)</small></label>
                            <textarea class="form-control" name="additional_remarks" rows="3" style="max-width: 600px; margin: 0 auto; border-radius: 10px;" placeholder="Enter any additional details or requirements here..."></textarea>
                        </div>

                        <div class="col-md-12 form-group mt-4 mb-5 px-4 py-4" id="whom_lead_container" style="clear: both; width: 100%; background: linear-gradient(145deg, #ffffff, #f8fafc); border-radius: 20px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                            <label style="font-size: 1.25em; font-weight: 700; color: #4a3060; display:block; margin-bottom: 15px; border-bottom: 2px solid #f1e2ff; padding-bottom: 10px;">Whom the lead should go to ?? <span class="text-danger">*</span></label>
                            
                            <div class="validation-toast toast-bottom-center" id="whom_lead_validation" style="left: 50%; right: auto; transform: translateX(-50%); top: auto; bottom: -45px;">Please select at least one option and fill required descriptions</div>

                            <div class="row text-left">
                                @php
                                $whomOptions = [
                                    'wedding_planner' => ['label' => 'Wedding Planner', 'value' => 'wedding'],
                                    'photo_video' => ['label' => 'Photo & Videographer', 'value' => 'photo&videographer'],
                                    'catering' => ['label' => 'Caterers', 'value' => 'catering'],
                                    'flower' => ['label' => 'Flower Decorators', 'value' => 'flower-decorators'],
                                    'mehendi' => ['label' => 'Mehendi Artist', 'value' => 'mehendi artist'],
                                    'priests' => ['label' => 'Priests', 'value' => 'priests'],
                                    'dj' => ['label' => 'DJ', 'value' => 'dj'],
                                    'venue' => ['label' => 'Venue', 'value' => 'Venue'],
                                    'makeup' => ['label' => 'Makeup Artist', 'value' => 'makeup artist']
                                ];
                                @endphp
                                
                                @foreach($whomOptions as $key => $opt)
                                <div class="col-md-6 mb-3">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input whom-lead-checkbox" name="whom_lead_to[]" value="{{ $opt['value'] }}" id="whom_chk_{{ $key }}">
                                        <label class="custom-control-label" for="whom_chk_{{ $key }}" style="font-size: 1.1em; color: #475569; cursor: pointer;">{{ $opt['label'] }}</label>
                                    </div>
                                    <div id="whom_desc_container_{{ $key }}" style="display:none; margin-top: 10px; margin-left: 28px;">
                                        @if($key === 'wedding_planner')
                                        <label style="font-size: 0.9em; font-weight: 600; color: #475569;">Generated Description (You can edit this)</label>
                                        @else
                                        <label style="font-size: 0.9em; font-weight: 600; color: #475569;">Enter description for {{ $opt['label'] }} <span class="text-danger">*</span></label>
                                        @endif
                                        <textarea class="form-control whom-lead-textarea" name="whom_lead_desc_{{ $key }}" id="whom_lead_desc_{{ $key }}" rows="3" style="border-radius: 8px; font-size: 0.95em;" placeholder="Enter specific requirements..."></textarea>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="text-center mt-5 d-block w-100" style="clear: both;">
                            <button type="button" class="btn btn-back-custom btn-prev mx-2" data-prev="step4"><i class="fa fa-arrow-left mr-2"></i> Back</button>
                            <button type="button" class="btn btn-success btn-lg px-5 py-3 mx-2" id="btnSubmitForm" style="padding: 16px 50px !important; font-size: 1.3rem !important; border-radius: 50px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border: none; font-weight: 600; box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.2); transition: all 0.4s; text-transform: uppercase; letter-spacing: 2px;">Submit Details <i class="fa fa-check ml-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal ends -->


<script>
const communities = {
    'Tamil Wedding': ['Iyer', 'Iyengar', 'Chettiar', 'Mudaliar', 'Pillai', 'Nadar', 'Kongu Vellalar', 'Gounder', 'Thevar', 'Vanniyar', 'Naidu (Tamil)', 'Nagarathar', 'Tamil Jain', 'Tamil Christian', 'Tamil Catholic', 'Tamil Protestant', 'Tamil Muslim', 'Rowther', 'Labbai', 'Marakkayar', 'Other Tamil Community'],
    'Telugu Wedding': ['Telugu Brahmin', 'Niyogi Brahmin', 'Vaidiki Brahmin', 'Reddy', 'Kamma', 'Kapu', 'Velama', 'Balija', 'Arya Vysya', 'Naidu', 'Rajaka', 'Yadava', 'Telugu Christian', 'Telugu Catholic', 'Telugu Protestant', 'Telugu Muslim', 'Telangana Muslim', 'Other Telugu Community'],
    'Kannada Wedding': ['Kannada Brahmin', 'Madhwa Brahmin', 'Smartha Brahmin', 'Havyaka Brahmin', 'Kota Brahmin', 'Vokkaliga', 'Lingayat', 'Kuruba', 'Gowda', 'Bunts', 'Billava', 'Kodava', 'Kannada Christian', 'Kannada Catholic', 'Kannada Protestant', 'Kannada Muslim', 'Beary Muslim', 'Other Kannada Community'],
    'Kerala Wedding': ['Nair', 'Namboothiri', 'Ezhava', 'Menon', 'Thiyya', 'Syrian Christian', 'Jacobite Christian', 'Orthodox Christian', 'Marthoma Christian', 'Latin Catholic', 'Roman Catholic', 'Knanaya Christian', 'Kerala Muslim', 'Mappila Muslim', 'Other Kerala Community'],
    'Punjabi Wedding': ['Sikh', 'Jat Sikh', 'Khatri Sikh', 'Arora Sikh', 'Ramgarhia Sikh', 'Punjabi Hindu', 'Khatri Hindu', 'Arora Hindu', 'Punjabi Brahmin', 'Punjabi Christian', 'Punjabi Catholic', 'Punjabi Muslim', 'Other Punjabi Community'],
    'Gujarati Wedding': ['Gujarati Brahmin', 'Patidar', 'Patel', 'Leuva Patel', 'Kadva Patel', 'Baniya', 'Lohana', 'Rajput', 'Gujarati Jain', 'Swaminarayan', 'Gujarati Muslim', 'Bohra Muslim', 'Khoja Muslim', 'Gujarati Christian', 'Other Gujarati Community'],
    'Maharashtrian Wedding': ['Deshastha Brahmin', 'Chitpavan Brahmin', 'Karhade Brahmin', 'CKP', 'Maratha', 'Kunbi', 'Agri', 'Koli', 'Bhandari', 'Dhangar', 'Maharashtrian Jain', 'Maharashtrian Muslim', 'Maharashtrian Christian', 'Other Maharashtrian Community'],
    'Bengali Wedding': ['Bengali Brahmin', 'Kayastha', 'Baidya', 'Mahishya', 'Bengali Hindu', 'Bengali Muslim', 'Bengali Christian', 'Bengali Catholic', 'Other Bengali Community'],
    'Rajasthani Wedding': ['Rajput', 'Marwari', 'Agarwal', 'Maheshwari', 'Oswal Jain', 'Jain', 'Bishnoi', 'Meena', 'Rajasthani Muslim', 'Rajasthani Christian', 'Other Rajasthani Community'],
    'Odia Wedding': ['Odia Brahmin', 'Karan', 'Khandayat', 'Teli', 'Odia Christian', 'Odia Muslim', 'Other Odia Community'],
    'Assamese Wedding': ['Assamese Brahmin', 'Kalita', 'Ahom', 'Bodo', 'Assamese Muslim', 'Assamese Christian', 'Other Assamese Community'],
    'Sikh Wedding': ['Jat Sikh', 'Khatri Sikh', 'Arora Sikh', 'Ramgarhia Sikh', 'Saini Sikh', 'Mazhabi Sikh', 'Other Sikh Community'],
    'Christian Wedding': ['Catholic', 'Roman Catholic', 'Syrian Catholic', 'Latin Catholic', 'Goan Catholic', 'Tamil Catholic', 'Kerala Catholic', 'Protestant', 'CSI', 'CNI', 'Methodist', 'Baptist', 'Pentecostal', 'Lutheran', 'Orthodox', 'Malankara Orthodox', 'Jacobite Syrian', 'Independent Church', 'Other Christian Denomination'],
    'Muslim Wedding': ['Sunni', 'Hanafi', 'Shafi', 'Maliki', 'Hanbali', 'Shia', 'Ithna Ashari', 'Bohra', 'Khoja', 'South India', 'Rowther', 'Labbai', 'Marakkayar', 'Mappila', 'Other Muslim Community'],
    'Jain Wedding': ['Digambar Jain', 'Shwetambar Jain', 'Oswal Jain', 'Agarwal Jain', 'Sthanakvasi Jain', 'Terapanthi Jain', 'Other Jain Community'],
    'North Indian Wedding': ['Brahmin', 'Rajput', 'Agarwal', 'Baniya', 'Kayastha', 'Jat', 'Yadav', 'Punjabi', 'Khatri', 'Christian', 'Muslim', 'Jain', 'Sikh', 'Other North Indian Community']
};

const sequenceMapping = {
    'Destination': {
        'Standard Destination Wedding (2 Days)': [
            'Welcome Lunch', 'Mehendi', 'Pool Party', 'Sangeet Night', 'Haldi', 'Wedding Ceremony', 'Reception Gala', 'After Party'
        ],
        'Premium Destination Wedding (3 Days)': [
            'Guest Check-In', 'Welcome Dinner', 'Mehendi', 'Pool Party', 'Cocktail Night', 'Sangeet', 'Haldi', 'Wedding Ceremony', 'Reception', 'After Party'
        ],
        'Luxury Destination Wedding (4 Days)': [
            'Guest Arrival', 'Welcome Dinner', 'Excursions', 'Mehendi', 'Pool Party', 'Haldi', 'Cocktail Party', 'Sangeet', 'Wedding Ceremony', 'Reception Gala', 'After Party', 'Farewell Brunch'
        ]
    },
    'Tamil Wedding': {
        'Iyer': ['Nichayathartham (Engagement)', 'Sumangali Prarthanai', 'Vratham', 'Janavasam', 'Oonjal', 'Kashi Yatra', 'Muhurtham', 'Saptapadi', 'Nalangu', 'Reception'],
        'Iyengar': ['Nichayathartham', 'Vratham', 'Janavasam', 'Oonjal', 'Kashi Yatra', 'Muhurtham', 'Saptapadi', 'Nalangu', 'Reception'],
        'Chettiar': ['Nichayathartham', 'Sumangali Prarthanai', 'Vratham', 'Janavasam', 'Muhurtham', 'Nalangu', 'Reception'],
        'Mudaliar': ['Engagement', 'Vratham', 'Janavasam', 'Muhurtham', 'Reception'],
        'Pillai': ['Engagement', 'Vratham', 'Janavasam', 'Muhurtham', 'Reception'],
        'Nadar': ['Engagement', 'Vratham', 'Janavasam', 'Muhurtham', 'Reception'],
        'Thevar': ['Engagement', 'Vratham', 'Janavasam', 'Muhurtham', 'Reception'],
        'Gounder': ['Engagement', 'Vratham', 'Janavasam', 'Muhurtham', 'Reception'],
        'Tamil Christian': ['Engagement', 'Bachelor / Bachelorette', 'Church Wedding', 'Wedding Blessing', 'Reception'],
        'Tamil Muslim': ['Engagement', 'Mehendi', 'Nikah', 'Walima']
    },
    'Telugu Wedding': {
        'Reddy': ['Engagement', 'Pellikuthuru', 'Snathakam', 'Kashi Yatra', 'Jeelakarra Bellam', 'Mangalsutra Dharana', 'Saptapadi', 'Reception'],
        'Kamma': ['Engagement', 'Pellikuthuru', 'Snathakam', 'Kashi Yatra', 'Jeelakarra Bellam', 'Mangalsutra Dharana', 'Saptapadi', 'Reception'],
        'Kapu': ['Engagement', 'Pellikuthuru', 'Snathakam', 'Kashi Yatra', 'Jeelakarra Bellam', 'Mangalsutra Dharana', 'Saptapadi', 'Reception'],
        'Velama': ['Engagement', 'Pellikuthuru', 'Snathakam', 'Kashi Yatra', 'Jeelakarra Bellam', 'Mangalsutra Dharana', 'Saptapadi', 'Reception'],
        'Telugu Brahmin': ['Nischitartham', 'Pellikuthuru', 'Snathakam', 'Kashi Yatra', 'Muhurtham', 'Saptapadi', 'Reception'],
        'Telugu Christian': ['Engagement', 'Church Wedding', 'Reception'],
        'Telugu Muslim': ['Engagement', 'Mehendi', 'Nikah', 'Walima']
    },
    'Kannada Wedding': {
        'Madhwa Brahmin': ['Engagement', 'Vratha', 'Kashi Yatra', 'Muhurtha', 'Saptapadi', 'Reception'],
        'Smartha Brahmin': ['Engagement', 'Vratha', 'Kashi Yatra', 'Muhurtha', 'Saptapadi', 'Reception'],
        'Vokkaliga': ['Engagement', 'Devara Puja', 'Muhurtha', 'Reception'],
        'Lingayat': ['Engagement', 'Wedding Ceremony', 'Reception'],
        'Kodava': ['Engagement', 'Kodava Wedding Rituals', 'Reception']
    },
    'Kerala Wedding': {
        'Nair': ['Engagement', 'Wedding Ceremony', 'Reception'],
        'Namboothiri': ['Engagement', 'Vratham', 'Wedding Ceremony', 'Reception'],
        'Syrian Christian': ['Engagement', 'Bridal Blessing', 'Church Wedding', 'Reception'],
        'Kerala Muslim': ['Engagement', 'Mehendi', 'Nikah', 'Walima'],
        'Mappila Muslim': ['Engagement', 'Mehendi', 'Nikah', 'Walima']
    },
    'Punjabi Wedding': {
        'Sikh': ['Roka', 'Engagement', 'Mehendi', 'Sangeet', 'Anand Karaj', 'Reception'],
        'Jat Sikh': ['Roka', 'Engagement', 'Mehendi', 'Sangeet', 'Anand Karaj', 'Reception'],
        'Khatri Sikh': ['Roka', 'Engagement', 'Mehendi', 'Sangeet', 'Anand Karaj', 'Reception'],
        'Punjabi Hindu': ['Roka', 'Engagement', 'Mehendi', 'Haldi', 'Sangeet', 'Wedding', 'Reception'],
        'Khatri Hindu': ['Roka', 'Engagement', 'Mehendi', 'Haldi', 'Sangeet', 'Wedding', 'Reception']
    },
    'Gujarati Wedding': {
        'Patidar': ['Chandlo Matli', 'Engagement', 'Mehendi', 'Garba', 'Pithi', 'Wedding', 'Reception'],
        'Patel': ['Chandlo Matli', 'Engagement', 'Mehendi', 'Garba', 'Pithi', 'Wedding', 'Reception'],
        'Leuva Patel': ['Chandlo Matli', 'Engagement', 'Mehendi', 'Garba', 'Pithi', 'Wedding', 'Reception'],
        'Kadva Patel': ['Chandlo Matli', 'Engagement', 'Mehendi', 'Garba', 'Pithi', 'Wedding', 'Reception'],
        'Gujarati Jain': ['Engagement', 'Mehendi', 'Wedding', 'Reception']
    },
    'Maharashtrian Wedding': {
        'Deshastha Brahmin': ['Sakhar Puda', 'Engagement', 'Halad Chadavane', 'Wedding Ceremony', 'Reception'],
        'Chitpavan Brahmin': ['Sakhar Puda', 'Engagement', 'Halad Chadavane', 'Wedding Ceremony', 'Reception'],
        'Karhade Brahmin': ['Sakhar Puda', 'Engagement', 'Halad Chadavane', 'Wedding Ceremony', 'Reception'],
        'Maratha': ['Sakhar Puda', 'Engagement', 'Halad Chadavane', 'Wedding Ceremony', 'Reception']
    },
    'Bengali Wedding': {
        'Bengali Hindu': ['Ashirbad', 'Engagement', 'Gaye Holud', 'Wedding', 'Bou Bhaat', 'Reception'],
        'Bengali Brahmin': ['Ashirbad', 'Engagement', 'Gaye Holud', 'Wedding', 'Bou Bhaat', 'Reception'],
        'Kayastha': ['Ashirbad', 'Engagement', 'Gaye Holud', 'Wedding', 'Bou Bhaat', 'Reception'],
        'Bengali Muslim': ['Engagement', 'Mehendi', 'Nikah', 'Walima']
    },
    'Rajasthani Wedding': {
        'Rajput': ['Tilak', 'Engagement', 'Mehendi', 'Haldi', 'Sangeet', 'Wedding', 'Reception'],
        'Marwari': ['Roka', 'Engagement', 'Mehendi', 'Haldi', 'Sangeet', 'Wedding', 'Reception']
    },
    'Christian Wedding': {
        'Catholic': ['Engagement', 'Bachelor / Bachelorette', 'Church Wedding', 'Reception'],
        'Roman Catholic': ['Engagement', 'Bachelor / Bachelorette', 'Church Wedding', 'Reception'],
        'Latin Catholic': ['Engagement', 'Bachelor / Bachelorette', 'Church Wedding', 'Reception'],
        'Protestant': ['Engagement', 'Church Wedding', 'Reception']
    },
    'Muslim Wedding': {
        'Sunni': ['Mangni (Engagement)', 'Mehendi', 'Nikah', 'Walima'],
        'Shia': ['Engagement', 'Mehendi', 'Nikah', 'Walima'],
        'Bohra': ['Engagement', 'Mehendi', 'Nikah', 'Walima']
    },
    'Jain Wedding': {
'Digambar Jain': ['Engagement', 'Mehendi', 'Wedding Ceremony', 'Reception'],
        'Shwetambar Jain': ['Engagement', 'Mehendi', 'Wedding Ceremony', 'Reception']
    }
};

document.addEventListener("DOMContentLoaded", function() {
    if(typeof jQuery === 'undefined') return;
    
    (function($) {
        function renderSequence() {
            let weddingType = $('#wedding_type').val();
            let community = $('#wedding_community').val();
            let isDestination = $('#ws_destination').is(':checked');
            let destDuration = $('#dest_duration').val();
            
            let seq = [];
            if (isDestination && destDuration && sequenceMapping['Destination'][destDuration]) {
                seq = sequenceMapping['Destination'][destDuration];
            } else if (weddingType && sequenceMapping[weddingType]) {
                if (community && sequenceMapping[weddingType][community]) {
                    seq = sequenceMapping[weddingType][community];
                } else {
                    // Fallback to first community or some default if available
                    let keys = Object.keys(sequenceMapping[weddingType]);
                    if (keys.length > 0) {
                        seq = sequenceMapping[weddingType][keys[0]];
                    }
                }
            }
            
            let $list = $('#sequence_list');
            $list.empty();
            if (seq.length > 0) {
                $('#sequence_of_events_container').show();
                seq.forEach(function(item, index) {
                    addSequenceItem(item);
                });
            } else {
                $('#sequence_of_events_container').hide();
            }
        }

        function addSequenceItem(val, isChecked = false) {
            let id = 'seq_' + Date.now() + '_' + Math.floor(Math.random() * 1000);
            let checkedAttr = isChecked ? 'checked' : '';
            let itemHtml = `
                <li class="sequence-item d-flex align-items-center mb-3 bg-white px-4 py-3" style="border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;">
                    <input type="checkbox" class="sequence-checkbox" name="sequence_of_events[]" id="${id}" value="${val}" ${checkedAttr} style="position:absolute;opacity:0;width:0;height:0;">
                    <label for="${id}" class="seq-check-pill flex-grow-1 mb-0 d-flex align-items-center" style="cursor: pointer;">
                        <span class="seq-check-box" style="margin-right: 15px;">
                            <svg class="seq-check-svg" width="11" height="9" viewBox="0 0 11 9" fill="none"><path d="M1 4.5L4 7.5L10 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span class="seq-item-text" style="font-size: 1.05rem; font-weight: 500; color: #334155;">${val}</span>
                    </label>
                    <div class="d-flex flex-row ml-3 align-items-center" style="gap:8px;">
                        <button type="button" class="btn btn-sm seq-up" style="background:#f8fafc; color:#64748b; border:1px solid #cbd5e1; border-radius:50%; width:35px; height:35px; display:flex; align-items:center; justify-content:center; transition:all 0.2s; padding:0; box-shadow: 0 2px 5px rgba(0,0,0,0.05);"><i class="fas fa-arrow-up" style="font-size:0.8rem;"></i></button>
                        <button type="button" class="btn btn-sm seq-down" style="background:#f8fafc; color:#64748b; border:1px solid #cbd5e1; border-radius:50%; width:35px; height:35px; display:flex; align-items:center; justify-content:center; transition:all 0.2s; padding:0; box-shadow: 0 2px 5px rgba(0,0,0,0.05);"><i class="fas fa-arrow-down" style="font-size:0.8rem;"></i></button>
                    </div>
                </li>
            `;
            $('#sequence_list').append(itemHtml);
        }

        // Add sequence custom item
        $('#add_sequence_btn').click(function() {
            let val = $('#new_sequence_item').val().trim();
            if(val) {
                $('#sequence_item_validation').hide();
                $('#new_sequence_item').css('border', '1px solid #ced4da');
                addSequenceItem(val, true); // Manually added items are checked by default
                $('#new_sequence_item').val('');
            } else {
                $('#sequence_item_validation').show();
                $('#new_sequence_item').css('border', '1px solid red');
                setTimeout(() => {
                    $('#sequence_item_validation').fadeOut();
                    $('#new_sequence_item').css('border', '1px solid #ced4da');
                }, 3000);
            }
        });

        // Move up
        $(document).on('click', '.seq-up', function() {
            let li = $(this).closest('li');
            li.prev('li').before(li);
        });

        // Move down
        $(document).on('click', '.seq-down', function() {
            let li = $(this).closest('li');
            li.next('li').after(li);
        });

        function showValidation(element, message) {
            let container = element.closest('.form-group');
            if(container.length === 0) container = element.parent();
            if(container.length === 0) return;
            
            let toast = container.find('.validation-toast');
            if(toast.length === 0) toast = container.siblings('.validation-toast');
            
            if(toast.length) {
                if(message) toast.text(message);
                
                // Temporarily make container relative for toast positioning
                container.css('position', 'relative');
                toast.addClass('show');
                element.css('border-color', '#ef4444');
                element.focus();
                
                let modalBody = container.closest('.modal-body');
                if(modalBody.length) {
                    modalBody.animate({
                        scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50
                    }, 500);
                } else {
                    $('html, body').animate({
                        scrollTop: container.offset().top - 150
                    }, 500);
                }
                
                setTimeout(function() {
                    toast.removeClass('show');
                    element.css('border-color', '');
                    setTimeout(function() { container.css('position', ''); }, 300);
                }, 3000);
            }
        }

        function validateStep(stepId) {
            let isValid = true;
            let step = $('#' + stepId);
            
            step.find('input[type="text"]:visible, select:visible').each(function() {
                if($(this).closest('div[style*="display: none"]').length === 0 && $(this).closest('div[style*="display:none"]').length === 0) {
                    if(stepId === 'step1') {
                        if($(this).attr('id') === 'client_name' && !$(this).val().trim()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'client_mobile') {
                            let val = $(this).val().trim();
                            let pattern = /^\d{10}$/;
                            if(!val || !pattern.test(val)) { showValidation($(this)); isValid = false; return false; }
                        }
                    }
                    
                    if(stepId === 'step2') {
                        if($(this).attr('id') === 'wedding_date' && $('#date_fixed_container').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'approx_wedding_date' && $('#date_not_fixed_container').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                    }

                    if(stepId === 'step3') {
                        if($(this).attr('id') === 'client_city' && !$(this).val().trim()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'client_location' && !$(this).val().trim()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'wedding_location' && $('#wedding_location_container').is(':visible') && !$(this).val().trim()) { showValidation($(this)); isValid = false; return false; }
                    }

                    if(stepId === 'step4') {
                        if($(this).attr('id') === 'wedding_type' && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'wedding_community' && $('#wedding_community_container').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                    }

                    if(stepId === 'step6') {
                        if($(this).attr('id') === 'approx_guests' && $('#guests_container').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'approx_budget' && $('#budget_container').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'venue_name' && $('#venue_fixed_yes').is(':visible') && !$(this).val().trim()) { showValidation($(this)); isValid = false; return false; }
                        if($(this).attr('id') === 'venue_allow_outside' && $('#venue_fixed_yes').is(':visible') && !$(this).val()) { showValidation($(this)); isValid = false; return false; }
                    }
                }
            });
            
            if(!isValid) return false;

            if(stepId === 'step2') {
                if(!$('input[name="is_date_fixed"]:checked').length) { showValidation($('input[name="is_date_fixed"]').first().closest('.form-group')); isValid = false; }
            }
            
            if(stepId === 'step3') {
                if(!$('input[name="is_wedding_location_different"]:checked').length) { showValidation($('input[name="is_wedding_location_different"]').first().closest('.form-group')); isValid = false; }
            }
            
            if(stepId === 'step6') {
                  if(!$('.ws-checkbox:checked').length) {
                      console.log('Failed: No wedding services checked');
                      let toast = $('#services_validation');
                      let container = toast.closest('.form-group');
                      container.css('position', 'relative');
                      toast.addClass('show');
                      let modalBody = toast.closest('.modal-body');
                      if(modalBody.length) { modalBody.animate({ scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50 }, 500); }
                      setTimeout(function() { toast.removeClass('show'); setTimeout(function() { container.css('position', ''); }, 300); }, 3000);
                      isValid = false;
                  }
                  
                  if(isValid && $('#ws_decor').is(':checked') && !$('.decor-checkbox:checked').length) {
                      console.log('Failed: Decor checked but no decor types selected');
                      let toast = $('#decor_validation');
                      let container = toast.closest('.form-group');
                      container.css('position', 'relative');
                      toast.addClass('show');
                      let modalBody = toast.closest('.modal-body');
                      if(modalBody.length) { modalBody.animate({ scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50 }, 500); }
                      setTimeout(function() { toast.removeClass('show'); setTimeout(function() { container.css('position', ''); }, 300); }, 3000);
                      isValid = false;
                  }
                
                if(isValid && $('#ws_destination').is(':checked') && !$('#dest_type').val()) {
                    console.log('Failed: Destination wedding checked but no dest_type');
                    showValidation($('#dest_type'));
                    isValid = false;
                }
                

                if(isValid && $('#ws_destination').is(':checked') && !$('#dest_duration').val()) {
                    console.log('Failed: Destination wedding checked but no dest_duration');
                    showValidation($('#dest_duration'), 'Please select destination wedding duration');
                    isValid = false;
                }
                
                if($('#venue_questions_container').is(':visible')) {
                    if(!$('input[name="is_venue_fixed"]:checked').length) { console.log('Failed: Venue fixed not selected'); showValidation($('input[name="is_venue_fixed"]').first().closest('.form-group'), 'Please select if venue is fixed'); isValid = false; }
                    if($('#venue_fixed_no').is(':visible')) {
                        if(!$('input[name="venue_details_help"]:checked').length) { console.log('Failed: Venue details help not selected'); showValidation($('input[name="venue_details_help"]').first().closest('.form-group'), 'Please select Venue details'); isValid = false; }
                    }
                }
                
                if($('#sequence_of_events_container').is(':visible')) {
                    if($('.sequence-checkbox:checked').length === 0) {
                        console.log('Failed: No sequence events checked');
                        let toast = $('#sequence_main_validation');
                        let container = $('#sequence_of_events_container');
                        toast.fadeIn();
                        let modalBody = toast.closest('.modal-body');
                        if(modalBody.length) { modalBody.animate({ scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50 }, 500); }
                        isValid = false;
                    } else {
                        $('#sequence_main_validation').fadeOut();
                    }
                }
                
                // Whom the lead should go to validation
                if($('.whom-lead-checkbox:checked').length === 0) {
                    console.log('Failed: No whom lead options checked');
                    let toast = $('#whom_lead_validation');
                    let container = $('#whom_lead_container');
                    toast.text('Please select at least one option');
                    container.css('position', 'relative');
                    toast.addClass('show');
                    let modalBody = toast.closest('.modal-body');
                    if(modalBody.length) { modalBody.animate({ scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50 }, 500); }
                    setTimeout(function() { toast.removeClass('show'); setTimeout(function() { container.css('position', ''); }, 300); }, 3000);
                    isValid = false;
                } else {
                    let whomDescValid = true;
                    $('.whom-lead-checkbox:checked').each(function() {
                        let key = $(this).attr('id').replace('whom_chk_', '');
                        if(!$('#whom_lead_desc_' + key).val().trim()) {
                            whomDescValid = false;
                            $('#whom_lead_desc_' + key).css('border', '1px solid #ef4444');
                        } else {
                            $('#whom_lead_desc_' + key).css('border', '1px solid #ced4da');
                        }
                    });
                    if(!whomDescValid) {
                        console.log('Failed: Missing description for whom lead option');
                        let toast = $('#whom_lead_validation');
                        let container = $('#whom_lead_container');
                        toast.text('Please fill out the required descriptions for your selections.');
                        container.css('position', 'relative');
                        toast.addClass('show');
                        let modalBody = toast.closest('.modal-body');
                        if(modalBody.length) { modalBody.animate({ scrollTop: modalBody.scrollTop() + (container.offset().top - modalBody.offset().top) - 50 }, 500); }
                        setTimeout(function() { toast.removeClass('show'); setTimeout(function() { container.css('position', ''); }, 300); }, 3000);
                        isValid = false;
                    } else {
                        $('#whom_lead_validation').removeClass('show');
                    }
                }
            }

            if(!isValid) {
                console.log('Validation failed on step 6. Form will not submit.');
            }
            return isValid;
        }

        if($.fn.datepicker) {
            $('.datepicker').datepicker({ dateFormat: 'dd-mm-yy', minDate: "+1d", changeMonth: true, changeYear: true });
        }
        
        $('.btn-next').click(function() {
            let currentStepId = $(this).closest('.wizard-step').attr('id');
            if(!validateStep(currentStepId)) return false;
            let next = $(this).data('next');
            $('.wizard-step').hide();
            $('#' + next).fadeIn(300);
        });

        $('.btn-prev').click(function() {
            let prev = $(this).data('prev');
            $('.wizard-step').hide();
            $('#' + prev).fadeIn(300);
        });

        $('input[name="is_date_fixed"]').change(function() {
            if($(this).val() == 'Yes') { $('#date_fixed_container').slideDown(); $('#date_not_fixed_container').slideUp(); } 
            else { $('#date_fixed_container').slideUp(); $('#date_not_fixed_container').slideDown(); }
        });

        $('input[name="is_wedding_location_different"]').change(function() {
            if($(this).val() == 'Yes') { $('#wedding_location_container').slideDown(); } else { $('#wedding_location_container').slideUp(); }
        });

        $('#wedding_type, #wedding_community, #dest_duration').change(function() {
            renderSequence();
        });

        $('#wedding_type').change(function() {
            let type = $(this).val();
            let commSelect = $('#wedding_community');
            commSelect.empty();
            commSelect.append('<option value="">Select Community</option>');
            if(communities[type]) {
                communities[type].forEach(function(c) { commSelect.append('<option value="'+c+'">'+c+'</option>'); });
                $('#wedding_community_container').slideDown();
            } else {
                $('#wedding_community_container').slideUp();
            }
        });

        $('.ws-checkbox').change(function() {
            let selected = [];
            $('.ws-checkbox:checked').each(function() { selected.push($(this).val()); });
            
            let showGuests = (selected.indexOf('Venue') !== -1 || selected.indexOf('Complete Wedding Planning') !== -1 || selected.indexOf('Catering') !== -1);
            let showBudget = (selected.indexOf('Venue') !== -1 || selected.indexOf('Complete Wedding Planning') !== -1);
            let showVenue = (selected.indexOf('Venue') !== -1);

            if(showGuests) $('#guests_container').slideDown(); else $('#guests_container').slideUp();
            if(showBudget) $('#budget_container').slideDown(); else $('#budget_container').slideUp();
            if(showVenue) $('#venue_questions_container').slideDown(); else $('#venue_questions_container').slideUp();
            
            if(selected.indexOf('Decorations') !== -1) $('#decor_sub_container').slideDown(); else $('#decor_sub_container').slideUp();
            if(selected.indexOf('Destination Wedding') !== -1) $('#dest_fields_row').slideDown(); else $('#dest_fields_row').slideUp();
        });

        $('#ws_destination').change(function() {
            if($(this).is(':checked')) { $('#dest_fields_row').slideDown(); }
            else { $('#dest_fields_row').slideUp(); $('#dest_type').val(''); $('#dest_duration').val(''); }
            renderSequence();
        });

        $('input[name="is_venue_fixed"]').change(function() {
            if($(this).val() == 'venueyes') {
                $('#venue_fixed_yes').slideDown();
                $('#venue_fixed_no').slideUp();
            } else {
                $('#venue_fixed_yes').slideUp();
                $('#venue_fixed_no').slideDown();
            }
        });

        $('#btnSubmitForm').click(function() {
            if(!validateStep('step6')) {
                return false;
            }

            let btn = $(this);
            let originalText = btn.html();
            btn.prop('disabled', true).html('Submitting... <i class="fa fa-spinner fa-spin ml-2"></i>');
            
            var formData = new FormData($('#newWizardForm')[0]);
            formData.append('_token', '{{ csrf_token() }}');
            
            $.ajax({
                url: "{{ route('website.savenewbuyleadform') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response.status == '1') {
                        $('#exampleModalCenter').modal('hide');
                        alert('Thank you! We will get back to you shortly.');
                        location.reload();
                    } else {
                        alert('Something went wrong: ' + response.message);
                        btn.prop('disabled', false).html(originalText);
                    }
                },
                error: function() {
                    alert('Error submitting form.');
                    btn.prop('disabled', false).html(originalText);
                }
            });
        });
        
        // Clear validation on input/change
        $('input, select').on('change input', function() {
            $(this).css('border-color', '');
            let toast = $(this).closest('.form-group').find('.validation-toast');
            if(toast.length) {
                toast.removeClass('show');
            }
        });
    })(jQuery);

    $('.whom-lead-checkbox').on('change', function() {
        let key = $(this).attr('id').replace('whom_chk_', '');
        toggleWhomLeadDescription(key);
    });

    function toggleWhomLeadDescription(key) {
        if($('#whom_chk_' + key).is(':checked')) {
            $('#whom_desc_container_' + key).slideDown();
            if(key === 'wedding_planner') {
                generateWeddingPlannerSummary();
            }
        } else {
            $('#whom_desc_container_' + key).slideUp();
            $('#whom_lead_desc_' + key).css('border', '1px solid #ced4da');
            $('#whom_lead_desc_' + key).val('');
        }
    }

    function generateWeddingPlannerSummary() {
        let summary = "Wedding Details Summary:\n";
        let city = $('#citiess').val() || '';
        if(city) summary += "- City: " + city + "\n";
        
        let dateFix = $('input[name="weddingdate_fixed"]:checked').val() || '';
        if(dateFix === 'dateyes' && $('#weddingdate').val()) summary += "- Wedding Date: " + $('#weddingdate').val() + "\n";
        if(dateFix === 'dateno' && $('#wedding_approx_period').val()) summary += "- Approx Period: " + $('#wedding_approx_period').val() + "\n";
        
        let budget = $('input[name="budget_groups"]:checked').val() || '';
        if(budget) summary += "- Budget: " + budget + "\n";
        
        let guests = $('input[name="guest_groups"]:checked').val() || '';
        if(guests) summary += "- Guests: " + guests + "\n";
        
        let services = [];
        $('.ws-checkbox:checked').each(function() {
            services.push($(this).val());
        });
        if(services.length) summary += "- Services Required: " + services.join(', ') + "\n";
        
        $('#whom_lead_desc_wedding_planner').val(summary);
    }
});
</script>



        
         <!-- this new custom box starts -->
 
          <!-- Button to Open the Modal -->
             
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#demoModal" id="demosmodal" style="display:none;">
            Open modal
          </button>
            
          <!-- The Modal -->
          <div class="modal fade" id="demoModal"  tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header"> 
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p id="activetext"></p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-lg btn-success" id="proceedfinal">Proceed</button> 
                </div>
                
              </div>
            </div>
          </div>
          
      <!-- this new custom box ends -->
    
<!-- All Content Ends Here -->

@endsection

@push('topjs') 

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

@endpush

@push('footerjs')

<script>   
    
    @if(!empty($packagename))
		 let chosen_package = "{{$packagename}}";
    @else
    
    let chosen_package = "";
	@endif
	
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    } 
        
    
    $(document).on('click', "#submit1", function(event) {
        
        // console.log('OTP ENABLED');
        event.preventDefault();
        let allowproceed = true;
        let entered_otp = encodeURIComponent($('#entered_otp').val());
        let name = $("#name").val();
        let email = $("#email").val();
        let phone_number = $("#phone_number").val();
        
        let city = $('#city option:selected').val();
        let weddingdate = $("#weddingdate").val();

        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        
        let form_data = new FormData();
        
        form_data.append('name', name);
        form_data.append('email', email);
        form_data.append('phone_number', phone_number);
        form_data.append('chosen_package', chosen_package);
        
        form_data.append('city', city);
        form_data.append('weddingdate', weddingdate);
        
        form_data.append('_token', '{{ csrf_token() }}'); 
            
        if(entered_otp == '' || entered_otp == undefined)
        {
            alert('Enter Otp sent to your mobile');
            $('#entered_otp').focus(); 
            allowproceed = false;
        }
        
        if(allowproceed == true)
        { 
            $.ajax
            ({
                url:'/checkotp',
                type: "post",
                dataType:"json",
                data: { "entered_otp": entered_otp,"name":name,"email":email,"mobile":phone_number,"_token":'{{ csrf_token() }}' },
                beforeSend: function()
                {
                    $('.submit1').attr("disabled",true);
                    //$(".resnet").addClass("disabled");
                },
                success: function(ajaxresponse,status)
                {
                    let response = ajaxresponse;
                    let ajax_status = response['status'];
        
                    if(ajax_status == 1)
                    {
                        console.log("otpmatched");
                        completecalls1();
                    }
                    else
                    {
                        alert ("OTP did not match. Resubmit again");
                        $('#entered_otp').val('');
                        $('#entered_otp').focus();
                        $('.submit1').attr("disabled",false);
                    }
                },
                error: function(a,b)
                {
                    alert ("Entered OTP does not matches. Please try again later.");  
                    $('.submit1').attr("disabled",false); 
                }
            });
        }
    }); 
    
    function completecalls1() 
    {
        let allowproceed = true;
	    $('#totalError').html(''); // added temporily
	    
	    let name = $("#name").val();
        let email = $("#email").val();
        let phone_number = $("#phone_number").val();
        
        let city = $('#city option:selected').val();
        let weddingdate = $("#weddingdate").val();

        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        
        let form_data = new FormData();
        
        form_data.append('name', name);
        form_data.append('email', email);
        form_data.append('phone_number', phone_number);
        form_data.append('chosen_package', chosen_package);
        
        form_data.append('city', city);
        form_data.append('weddingdate', weddingdate);
        
        form_data.append('_token', '{{ csrf_token() }}'); 
        
        if(allowproceed == true)
        {
            $('.submit1').attr("disabled",true); 
             
            $.ajax
            ({
                 
                url: "{{ route('website.mailedform') }}",
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                async: true,
                beforeSend: function() {
                    // setting a timeout
                    $(".submit1").text("processing");
                    $(".submit1").attr('disabled', true);
                },
                success: function(response)
                {
                    let responsedata = response;
                    
                    if(responsedata.hasOwnProperty('errors'))
                    {
                       //alert(responsedata.errors[0]); 
                       console.log("1");
                       $('.pageerror p').text(responsedata.errors[0]);
                    }
                    else if(responsedata.hasOwnProperty('message'))
                    {
                        let statusreturned = responsedata.status;
                        let message = responsedata.message;

                        if(statusreturned == 1)
                        { 
                            //$('.pageerror p').text(message);
                            setTimeout(function(){ resetform1(); }, 500);
                            
                           
                    
                            setTimeout(function(){ window.location = "{{ route('website.leadformthankyou') }}"; }, 2000);
                        }
                        else
						{
							if (typeof message === "object")
							{
							     console.log("3");
                                //alert(message[Object.keys(message)[0]]);
                                $('.pageerror p').text(message[Object.keys(message)[0]]);
                            }
                            else
                            {
                                 console.log("4");
                                //alert(message); 
                                $('.pageerror p').text(message);
                            }
						}
                    }
                },
                complete:function(data)
                {
                    $(".submit2").text("Finish!");
                    $(".submit2").attr('disabled', false); 
                }
            });    
        }
    }
    
    function resetform()
    {
        $("#name").val('');
        $("#email").val('');
        $("#phone_number").val('');
        $("#entered_otp").val('');  
    }
    function resetform1()
    {
        $("#name1").val('');
        $("#email1").val('');
        $("#phone_number1").val('');
        $("#entered_otp1").val('');
    }
    
</script>


<script src="{{ asset('/frontend/js/custom.js') }}"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>  
$(document).ready(function () {
    $("#weddingdate,#weddingdate1,#weddingdatefix").datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
            inline: true,
            minDate: "+1d",
    });
    
     $("#weddecorations").click(function () {
        if ($(this).is(":checked")) {
            $(".inside").show(); 
             
        } else {
            $(".inside").hide(); 
            $("input[name='decorations_type']").prop("checked", false);
        }
    });
    
    
     $("#completeweddingpackage").click(function () {
         if ($(this).prop('checked')==false) { 
             $('input[name="budget-group"]').prop('checked', false); 
             $('input[name="guest-group"]').prop('checked', false);
        }  
    });
    
    
    
});
</script>
<script>
    $(".offcanvas-header").click(function()
          {
               $("#navbar_main").removeClass("show");
              
          });
    $(".navbar_main").click(function()
          {
               $("#navbar_main").addClass("show");
              
          });      
</script>
            

<!-- popup validation starts -->
<script>

 
    
   $(document).on('click', "#continue1", function(event) {  
            
        event.preventDefault(); 
            //console.log("btn1 clickde"); 
        
        let action = $('#continue1').val(); 
        $('.pageerror p').text('');
        
            var fields = $("input[name='list']").serializeArray(); 
            if (fields.length === 0) 
            { 
                alert('Please select one of the categories below');  
                return false;
            } 
            else 
            { 
                //alert(fields.length + " items selected"); 
                //console.log(fields);
                
                let listofitems = $("input[name='list']:checked").val();
                
                var array = [];
                $("input[name='list']:checked").each(function() {
                    array.push($(this).val());
                });
                
                
                //alert(array);
                
                //console.log(array);
                
                var listeditems = array;
                 
                
                
                /*if(listofitems == "Complete Wedding Planning")*/
                /*if($("input[name='list']:checked" == "Complete Wedding Planning"))*/
                
                if ((jQuery.inArray('Complete Wedding Planning', array)  !== -1) && (jQuery.inArray('Wedding Decorations', array)) !== -1)
                {
                    if(true)
                    {
                        var subfields = $("input[name='decorations_type']").serializeArray(); 
                        if (subfields.length === 0) 
                        { 
                            alert('Please select atleast one category of Decoration');  
                            return false;
                        } 
                        
                        else
                        {
                            let sublistofitems = $("input[name='decorations_type']:checked").val();
                
                            var subarray = [];
                            $("input[name='decorations_type']:checked").each(function() {
                                subarray.push($(this).val());
                            }); 
                            
                            var sublisteditems = subarray;
                            //console.log("sublisteditems: " + sublisteditems); 
                            
                            $("#type1").hide();
                            $("#type1a").show();
                           
                        
                        }
                        
                        //console.log("new 3rd condition");
                    }
                    
                }
                
                else if(jQuery.inArray("Complete Wedding Planning", array) !== -1)
                {
                    $("#type1").hide();
                    $("#type1a").show();
                    //$("#back1b").show();
                    //$("#back2").hide();
                }
                /*else if(listofitems == "Wedding Decorations")*/
                /*else if($("input[name='list']:checked" == "Wedding Decorations"))*/
                else if(jQuery.inArray("Wedding Decorations", array) !== -1)
                {
                    //$(".inside").show();
                    
                       var subfields = $("input[name='decorations_type']").serializeArray(); 
                        if (subfields.length === 0) 
                        { 
                            alert('Please select atleast one category of Decoration');  
                            return false;
                        } 
                        
                        else
                        {
                            let sublistofitems = $("input[name='decorations_type']:checked").val();
                
                            var subarray = [];
                            $("input[name='decorations_type']:checked").each(function() {
                                subarray.push($(this).val());
                            }); 
                            
                            var sublisteditems = subarray;
                            //console.log("sublisteditems: " + sublisteditems);
                            
                            
                            $("#type1").hide();
                            $("#type2").show();
                            $("#back1c").hide();
                            $("#back2").show();
                        
                        }
                        
                        
                        
                } 
                /* else if((jQuery.inArray("Complete Wedding Planning", array) !== -1) && (jQuery.inArray("Wedding Decorations", array) !== -1))*/
                /*else if (jQuery.inArray(["Complete Wedding Planning","Wedding Decorations"],array) !== -1) */
                
                else
                {
                    $("#type1").hide();
                    $("#type2").show();
                    $('input[name="budget-group"]').prop('checked', false);
                    $('input[name="guest-group"]').prop('checked', false);
                    $("#back1c").hide();
                    $("#back2").show();
                }
                /*$("#type1").hide();
                $("#type2").show();*/
                
            }
        
  });
  
   $(document).on('click', "#back1a", function(event) {
      event.preventDefault(); 
                $("#type1").show();
                $("#type1a").hide();
  }); 
  
   $(document).on('click', "#continue1a", function(event) {  
            
        event.preventDefault(); 
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                var listeditems = array;        
                                   // console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                var sublisteditems = subarray;
                                   // console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                            
        /*** PRVS BUTTONS ENDS ***/
        
        
        let action = $('#continue1a').val();
        
        $('.pageerror p').text('');
        
        let budget_group = $("input[name='budget-group']:checked").val();
        
        if ($('input[name="budget-group"]:checked').length == 0)
          {
                alert('Please select budget');  
                return false;
          }
          else
          { 
              //console.log("budget_group : " + budget_group);
              
              $("#type1").hide();
              $("#type1a").hide();
              $("#type1b").show();
          }
    });
    
   $(document).on('click', "#continue1b", function(event) {  
            
        event.preventDefault();
        
        //console.log(count);

        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                var listeditems = array;        
                                    //console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val();   
                
        /*** PRVS BUTTONS ENDS ***/
        
        
        let action = $('#continue1b').val();
        
        $('.pageerror p').text('');
        
        let guest_group = $("input[name='guest-group']:checked").val();   
        
        if ($('input[name="guest-group"]:checked').length == 0)
          {
                alert('Please select no of guest');  
                return false;
          }
          else
          { 
              $("#type1").hide();
              $("#type1a").hide();
              $("#type1b").hide();
              $("#type2").show();
              $("#back1c").show();
              $("#back2").hide();
          }
    });    
    
  $(document).on('click', "#back1b", function(event) {
      event.preventDefault(); 
                $("#type1a").show();
                $("#type1b").hide();
  });    
    
  $(document).on('click', "#back1c", function(event) {
      event.preventDefault(); 
                $("#type1b").show();
                $("#type2").hide();
  }); 
  
  $(document).on('click', "#back2", function(event) {
      event.preventDefault(); 
                $("#type1").show();
                $("#type2").hide();
  }); 
  
  $(document).on('click', "#continue2", function(event) {  
            
        event.preventDefault();
        
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                var listeditems = array;        
                                   // console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "0";
                                    }
                                    //console.log("budget_group - NEXT: " + budget_groups); 
                                    
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "0";
                                    }
                                    //console.log("guest_group - NEXT: " + guest_groups); 
                                    
                
        /*** PRVS BUTTONS ENDS ***/
        
        //console.log(count);

        let action = $('#continue2').val();
        
        $('.pageerror p').text('');
        
        let cities = $("#cities").val();
 
        //let cities = $('#cities option:selected').val();    
        
        let location = $("#location").val();
        
        if(cities.trim() == '' || cities.trim() == undefined)
        {
    		alert('Please enter city.');
    		$('#cities').focus();
    	    return false;
        }
        else if(location.trim() == '' || location.trim() == undefined)
        {
    		alert('Please enter location.');
    		$('#location').focus();
    	    return false;
        }
         
    	else
    	{
    	     
             //console.log("city " + cities);
             //console.log("location " +location); 
             
              $("#type1").hide();
              $("#type2").hide();
              $("#type3").show();
    	}
    });
     
  $(function() {    
       $("input[name='venue-group']").click(function() {
        if ($("#venueyes").is(":checked")) {
          $("#yesdiv").show();
          $("#nodiv").hide();
          //$('#venuedetail').prop('selectedIndex',0);
          $('input[name="venuedetail"]').prop('checked', false);
        } 
        else if ($("#venueno").is(":checked")) {
          $("#yesdiv").hide();
          $("#nodiv").show();
          $("#venuename").val('');
          //$('#venueallowoutsidevendor').prop('selectedIndex',0);
          $('input[name="allowoutsidevendor-group"]').prop('checked', false);
        }
        else {
          $("#yesdiv").hide();
          $("#nodiv").hide();
        }
        });
  });
  
  $(document).on('click', "#back3", function(event) {
      event.preventDefault(); 
                $("#type2").show();
                $("#type3").hide();
  }); 
  
  
  $(document).on('click', "#continue3", function(event) {
       event.preventDefault();
        
        //console.log(count);
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                                    var listeditems = array;        
                                   // console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                                    var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "0";
                                    }
                                    //console.log("budget_group - NEXT: " + budget_groups); 
                                    
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "0";
                                    }
                                    //console.log("guest_group - NEXT: " + guest_groups); 
                 
                 let cities = $("#cities").val();
                 //let cities = $('#cities option:selected').val();  
                 
                                     //console.log("city " + cities);
                                     
                 let location = $("#location").val();    
                                    //console.log("location " +location); 
                
        /*** PRVS BUTTONS ENDS ***/
        
        let action = $('#continue3').val();
        
        $('.pageerror p').text(''); 
        
          let venue_group = $("input[name='venue-group']:checked").val();
          
          if ($('input[name="venue-group"]:checked').length == 0)
          {
                alert('Please select about venue details');  
                return false;
          }
          else
          {
              if ($("#venueyes").is(":checked"))
              {
                  
                  let venuename = $("#venuename").val();
                  
                  //let venueallowoutsidevendor = $('#venueallowoutsidevendor option:selected').val();
                  let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();
                  
                  if(venuename.trim() == '' || venuename.trim() == undefined)
                    {
                		alert('Please enter venuename.');
                		$('#venuename').focus();
                	    return false;
                    }
                    else if ($('input[name="allowoutsidevendor-group"]:checked').length == 0)
                      {
                            alert('Please select Does veune allow outside vendor');  
                            return false;
                      }
                    else
                    {
                        //console.log("venuename" + venuename);
                        //console.log("venue-allowoutsidevendor " + allowoutsidevendor)
                    }
              }
              
              else if ($("#venueno").is(":checked"))
              {
                 
                  //let venuedetail = $('#venuedetail option:selected').val(); 
                  
                  let venuedetail = $("input[name='venuedetail']:checked").val();
                   
                   /*
                   if(venuedetail.trim() == '' || venuedetail.trim() == undefined)
                    {
                		alert('Please select venuedetail.');
                		$('#venuedetail').focus();
                	    return false;
                    }
                    */
                    if ($('input[name="venuedetail"]:checked').length == 0)
                      {
                            alert('Please select venuedetail');  
                            return false;
                      }
                    else
                    {
                       // console.log("venuedetail" + venuedetail)
                    }
              }
              
              $("#type1").hide();
              $("#type2").hide();
              $("#type3").hide();
              $("#type4").show();
              
          }
   }); 
   
   $(function() {    
       $("input[name='date-group']").click(function() {
        if ($("#dateyes").is(":checked")) {
          $('input[name="nodate-group"]').prop('checked', false);
          $("#dateyesdiv").show();
          $("#datenodiv").hide();
        } 
        else if ($("#dateno").is(":checked")) {
          $("#weddingdatefix").val('');
          $("#dateyesdiv").hide();
          $("#datenodiv").show();
        }
        else {
          $("#dateyesdiv").hide();
          $("#datenodiv").hide();
        }
        });
  });
  
   $(document).on('click', "#back4", function(event) {
      event.preventDefault(); 
                $("#type3").show();
                $("#type4").hide();
  }); 
  
   $(document).on('click', "#continue4", function(event) {
       event.preventDefault();
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                                    var listeditems = array;        
                                    //console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                                    var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "0";
                                    }
                                    else
                                    {
                                         var budget_groups = budget_group;
                                    } 
                                    //console.log("budget_groups - NEXT: " + budget_groups); 
                                     
                                     
                                     
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "0";
                                    }
                                    else
                                    {
                                        var guest_groups =  guest_group;
                                    }
                                   // console.log("guest_group - NEXT: " + guest_groups); 
                 
                 
                 let cities = $("#cities").val();
                  // let cities = $('#cities option:selected').val();                   
                                    if(cities == '' || cities == undefined)
                                    {
                                        var citiess = "0";
                                    }
                                    else
                                    {
                                        var citiess = cities;
                                    }
                                   // console.log("citiess " + citiess);
                                     
                 let location = $("#location").val();   
                 
                                     if(location == '' || location == undefined)
                                    {
                                        var locations = "0";
                                    }
                                    else
                                    {
                                        var locations = location;
                                    }
                                    //console.log("locations " +locations); 
                                    
                                    
                 let venue_group = $("input[name='venue-group']:checked").val();
                
                                    if(venue_group == '' || venue_group == undefined)
                                    {
                                        var venue_groups = "0";
                                    }
                                    else
                                    {
                                        var venue_groups = venue_group;
                                    }
                                    //console.log("venue_group " +venue_group); 
                                    
                 let venuename = $("#venuename").val();  
                                
                                    if(venuename == '' || venuename == undefined)
                                     
                                    {
                                        var venuenames = "0";
                                    }
                                    else
                                    {
                                        var venuenames = venuename;
                                    }
                                    
                                   // console.log("venuenames " +venuenames);
                                    
                                    
                let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();    
                
                                    if(allowoutsidevendor == '' || allowoutsidevendor == undefined)
                                     
                                    {
                                        var allowoutsidevendors = "0";
                                    }
                                    else
                                    {
                                        var allowoutsidevendors = allowoutsidevendor;
                                    }
                                    
                                    //console.log("allowoutsidevendors " +allowoutsidevendors);
                                    
                                    
                let venuedetail = $("input[name='venuedetail']:checked").val(); 
                                   
                                   if(venuedetail == '' || venuedetail == undefined)
                                     
                                    {
                                        var venuedetailbooking = "0";
                                    }
                                    else
                                    {
                                        var venuedetailbooking = venuedetail;
                                    }
                                    
                                    //console.log("venuedetailbooking " +venuedetailbooking);
                                    
                
        /*** PRVS BUTTONS ENDS ***/

        let action = $('#continue4').val();
        
        $('.pageerror p').text(''); 
        
          let date_group = $("input[name='date-group']:checked").val(); 
           
          if ($('input[name="date-group"]:checked').length == 0)
          {
                alert('Please select wedding date details');  
                return false;
          }
          else
          {
              if ($("#dateyes").is(":checked"))
              {
                  let weddingdatefix = $("#weddingdatefix").val();
                  if(weddingdatefix.trim() == '' || weddingdatefix.trim() == undefined)
                    {
                		alert('Please enter weddingdatefix.');
                		$('#weddingdatefix').focus();
                	    return false;
                    }
                    else
                    {
                        //console.log("weddingdatefix" + weddingdatefix)
                    }
              }
              
              else if ($("#dateno").is(":checked"))
              {
                  if ($('input[name="nodate-group"]:checked').length == 0)
                  {
                        alert('Please select');  
                        return false;
                  }
                   
                  else
                    {
                        let noweddingdate = $("input[name='nodate-group']:checked").val();
                        //console.log("noweddingdate" + noweddingdate)
                    }
              }
              
              $("#type1").hide();
              $("#type2").hide();
              $("#type3").hide();
              $("#type4").hide();
              $("#type5").show();
              
          }
   }); 
    
   $(document).on('click', "#back5", function(event) {
      event.preventDefault(); 
                $("#type4").show();
                $("#type5").hide();
  }); 
  
   $(document).on('click', "#continue5", function(event) {
       event.preventDefault();
        
        //console.log(count);
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                                    var listeditems = array;        
                                    //console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                                    var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "";
                                    }
                                    else
                                    {
                                         var budget_groups = budget_group;
                                    } 
                                    //console.log("budget_groups - NEXT: " + budget_groups); 
                                     
                                     
                                     
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "";
                                    }
                                    else
                                    {
                                        var guest_groups =  guest_group;
                                    }
                                   // console.log("guest_group - NEXT: " + guest_groups); 
                 
                 
                 let cities = $("#cities").val();
                     // let cities = $('#cities option:selected').val();                
                                    if(cities == '' || cities == undefined)
                                    {
                                        var citiess = "";
                                    }
                                    else
                                    {
                                        var citiess = cities;
                                    }
                                    //console.log("citiess " + citiess);
                                     
                 let location = $("#location").val();   
                 
                                     if(location == '' || location == undefined)
                                    {
                                        var locations = "";
                                    }
                                    else
                                    {
                                        var locations = location;
                                    }
                                    //console.log("locations " +locations); 
                                    
                                    
                 let venue_group = $("input[name='venue-group']:checked").val();
                
                                    if(venue_group == '' || venue_group == undefined)
                                    {
                                        var venue_groups = "";
                                    }
                                    else
                                    {
                                        var venue_groups = venue_group;
                                    }
                                    //console.log("venue_group " +venue_group); 
                                    
                 let venuename = $("#venuename").val();  
                                
                                    if(venuename == '' || venuename == undefined)
                                     
                                    {
                                        var venuenames = "";
                                    }
                                    else
                                    {
                                        var venuenames = venuename;
                                    }
                                    
                                    //console.log("venuenames " +venuenames);
                                    
                                    
                let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();    
                
                                    if(allowoutsidevendor == '' || allowoutsidevendor == undefined)
                                     
                                    {
                                        var allowoutsidevendors = "";
                                    }
                                    else
                                    {
                                        var allowoutsidevendors = allowoutsidevendor;
                                    }
                                    
                                    //console.log("allowoutsidevendors " +allowoutsidevendors);
                                    
                                    
                let venuedetail = $("input[name='venuedetail']:checked").val(); 
                                   
                                   if(venuedetail == '' || venuedetail == undefined)
                                     
                                    {
                                        var venuedetailbooking = "";
                                    }
                                    else
                                    {
                                        var venuedetailbooking = venuedetail;
                                    }
                                    
                                    //console.log("venuedetailbooking " +venuedetailbooking);
                
                 let date_group = $("input[name='date-group']:checked").val();   
                
                                if(date_group == '' || date_group == undefined)
                                     
                                    {
                                        var wedding_date_group = "";
                                    }
                                    else
                                    {
                                        var wedding_date_group = date_group;
                                    }
                                    
                                    //console.log("wedding_date_group " +wedding_date_group);
                 
                let weddingdatefix = $("#weddingdatefix").val();
                                
                                   if(weddingdatefix == '' || weddingdatefix == undefined)
                                     
                                    {
                                        var weddingdate_detail = "";
                                    }
                                    else
                                    {
                                         const date = $("#weddingdatefix").val();
                                         const [day, month, year] = date.split('-');
                                         const result = `${year}-${month}-${day}`;
                                        
                                        var weddingdate_detail = result;
                                    }
                                    
                                    //console.log("weddingdate_detail " +weddingdate_detail);
                                    
                let noweddingdate = $("input[name='nodate-group']:checked").val();  
                
                                    if(noweddingdate == '' || noweddingdate == undefined)
                                     
                                    {
                                        var weddingdate_time = "";
                                    }
                                    else
                                    {
                                        var weddingdate_time = noweddingdate;
                                    }
                                    
                                   //console.log("weddingdate_time " +weddingdate_time);
                                    
                
        /*** PRVS BUTTONS ENDS ***/
        
        let action = $('#continue5').val();
        
        $('.pageerror p').text(''); 
        
        
        let yourname = $("#yourname").val();
        let youremail = $("#youremail").val();
        let yournumber = $("#yournumber").val();
        
        let assignid = $("#inurl").val();
        
        let emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        
        if(yourname.trim() == '' || yourname.trim() == undefined)
        {
    		alert('Please enter your name.');
    		$('#yourname').focus();
    	    return false;
        }
        else if(youremail.trim() == '' || youremail.trim() == undefined)
        {
    		alert('Please enter your email.');
    		$('#youremail').focus();
    	    return false;
        }
        else if(!emailReg.test(youremail))
        {
    		alert('Please Enter valid Email Id.');
    		$('#youremail').focus();
    	    return false;
        }
        else if(yournumber.trim() == '' || yournumber.trim() == undefined || yournumber.length != 10)
        {
    		alert('Please enter 10 digits mobile phone.');
    		$('#yournumber').focus();
    	    return false;
        }
        else
        {
            
            let form_data = new FormData();
        
            form_data.append('yourname', yourname);
            form_data.append('youremail', youremail);
            form_data.append('yournumber', yournumber);
            form_data.append('_token', '{{ csrf_token() }}'); 
            
            $.ajax
        ({
            url:"/manualwedupload",
            type: "post",
            contentType: "application/json",
            cache:false,
            processData: false,
            dataType:"json",
            async: true,
            beforeSend: function()
            {
                $('#continue5').attr("disabled",true);
                $('#continue5').text("Please wait");
            },
            data:JSON.stringify({"name":yourname,"email":youremail,"mobile":yournumber,"_token":'{{ csrf_token() }}'}),
           /* success: function(ajaxresponse,status)
            {
                let response = ajaxresponse;
                
                 
                
                let ajax_status = response['status']; 
                
                if(ajax_status == 1)
                {
                    alert('OTP has been sent to Mobile');
                    //$('#addItem').attr("disabled",false);
                    //$('.otp-text').show(); 
        	        //$('.btnhide #addItem').hide();
        	        
        	             completecallssave1();
        	        
                }
                else
                {
                    alert('Please refresh and try again or contact Plan a Wedding.');
                    //$('#addItem').attr("disabled",false);
                }
                 
            },
            error: function(a,b)
            {
                alert('Your have fluctuating internet connection. Please refresh and try again');
                //$('#addItem').attr("disabled",false);
                 
            }*/
            
            success: function(response)
                {
                    let responsedata = response;
                    
                    if(responsedata.hasOwnProperty('errors'))
                    {
                       //alert(responsedata.errors[0]); 
                       alert('Please refresh and try again or contact Plan a Wedding.');
                       $('.pageerror p').text(responsedata.errors[0]);
                    }
                    else if(responsedata.hasOwnProperty('message'))
                    {
                        let statusreturned = responsedata.status;
                        let message = responsedata.message;

                        if(statusreturned == 1)
                        { 
                            
                               //alert("Details Saved");
                    	        completecallssave1();
                           /* setTimeout(function(){ window.location = "{{ route('website.leadformthankyou') }}"; }, 2000);*/
                       }
                       /* else
						{
							if (typeof message === "object")
							{
							     console.log("3");
                                //alert(message[Object.keys(message)[0]]);
                                
                            }
                            else
                            {
                                 console.log("4");
                                //alert(message); 
                                $('.pageerror p').text(message);
                            }
						}*/
                    }
                },
                complete:function(data)
                {
                    $("#continue5").text("Processing!");
                    $("#addItem").attr('disabled', false); 
                    
                    
                             //$("#continue5").attr('disabled', false);
                            //$("#continue5").removeClass("greybg");
                            //$("#type7").show();
                           // $("#type5").hide();
                }
        }); 
            
              /*$("#type1").hide();
              $("#type2").hide();
              $("#type3").hide();
              $("#type4").hide();
              $("#type5").hide();
              $("#type6").show();*/
        }
        
        /*
              $("#type1").hide();
              $("#type2").hide();
              $("#type3").hide();
              $("#type4").hide();
              $("#type5").show();
        */      
   }); 
   
  
   $(document).on('click', "#back6", function(event) {
      event.preventDefault(); 
                $("#type5").show();
                $("#type6").hide();
  });
  
  
   $(document).on('click', "#continue6", function(event) {
      
       event.preventDefault();
        
        //console.log(count);

            
        let action = $('#continue6').val();
        let allowproceed = true;
        
        
        $('.pageerror p').text(''); 
        
        
        /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                                    var listeditems = array;        
                                    //console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                                    var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "";
                                    }
                                    else
                                    {
                                         var budget_groups = budget_group;
                                    } 
                                   // console.log("budget_groups - NEXT: " + budget_groups); 
                                     
                                     
                                     
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "";
                                    }
                                    else
                                    {
                                        var guest_groups =  guest_group;
                                    }
                                    //console.log("guest_group - NEXT: " + guest_groups); 
                 
                 
                 let cities = $("#cities").val();
                    // let cities = $('#cities option:selected').val();                 
                                    if(cities == '' || cities == undefined)
                                    {
                                        var citiess = "";
                                    }
                                    else
                                    {
                                        var citiess = cities;
                                    }
                                    //console.log("citiess " + citiess);
                                     
                 let location = $("#location").val();   
                 
                                     if(location == '' || location == undefined)
                                    {
                                        var locations = "";
                                    }
                                    else
                                    {
                                        var locations = location;
                                    }
                                    //console.log("locations " +locations); 
                                    
                                    
                 let venue_group = $("input[name='venue-group']:checked").val();
                
                                    if(venue_group == '' || venue_group == undefined)
                                    {
                                        var venue_groups = "";
                                    }
                                    else
                                    {
                                        var venue_groups = venue_group;
                                    }
                                    //console.log("venue_group " +venue_group); 
                                    
                 let venuename = $("#venuename").val();  
                                
                                    if(venuename == '' || venuename == undefined)
                                     
                                    {
                                        var venuenames = "";
                                    }
                                    else
                                    {
                                        var venuenames = venuename;
                                    }
                                    
                                    //console.log("venuenames " +venuenames);
                                    
                                    
                let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();    
                
                                    if(allowoutsidevendor == '' || allowoutsidevendor == undefined)
                                     
                                    {
                                        var allowoutsidevendors = "";
                                    }
                                    else
                                    {
                                        var allowoutsidevendors = allowoutsidevendor;
                                    }
                                    
                                    //console.log("allowoutsidevendors " +allowoutsidevendors);
                                    
                                    
                let venuedetail = $("input[name='venuedetail']:checked").val(); 
                                   
                                   if(venuedetail == '' || venuedetail == undefined)
                                     
                                    {
                                        var venuedetailbooking = "";
                                    }
                                    else
                                    {
                                        var venuedetailbooking = venuedetail;
                                    }
                                    
                                    //console.log("venuedetailbooking " +venuedetailbooking);
                
                 let date_group = $("input[name='date-group']:checked").val();   
                
                                if(date_group == '' || date_group == undefined)
                                     
                                    {
                                        var wedding_date_group = "";
                                    }
                                    else
                                    {
                                        var wedding_date_group = date_group;
                                    }
                                    
                                    //console.log("wedding_date_group " +wedding_date_group);
                 
                let weddingdatefix = $("#weddingdatefix").val();
                                
                                   if(weddingdatefix == '' || weddingdatefix == undefined)
                                     
                                    {
                                        var weddingdate_detail = "";
                                    }
                                    else
                                    {
                                         const date = $("#weddingdatefix").val();
                                         const [day, month, year] = date.split('-');
                                         const result = `${year}-${month}-${day}`;
                                        
                                        var weddingdate_detail = result;
                                    }
                                    
                                    //console.log("weddingdate_detail " +weddingdate_detail);
                                    
                let noweddingdate = $("input[name='nodate-group']:checked").val();  
                
                                    if(noweddingdate == '' || noweddingdate == undefined)
                                     
                                    {
                                        var weddingdate_time = "";
                                    }
                                    else
                                    {
                                        var weddingdate_time = noweddingdate;
                                    }
                                    
                                    //console.log("weddingdate_time " +weddingdate_time);
                                    
                                    
                let yourname = $("#yourname").val();
                                    
                                    if(yourname == '' || yourname == undefined)
                                     
                                    {
                                        var yournames = "";
                                    }
                                    else
                                    {
                                        var yournames = yourname;
                                    }
                                    
                                    //console.log("yournames " +yournames);
                                    
                                    
                let youremail = $("#youremail").val();
                                
                                    if(youremail == '' || youremail == undefined)
                                     
                                    {
                                        var youremails = "";
                                    }
                                    else
                                    {
                                        var youremails = youremail;
                                    }
                                    
                                   // console.log("youremails " +youremails);
                                    
                let yournumber = $("#yournumber").val();
                                    
                                    if(yournumber == '' || yournumber == undefined)
                                     
                                    {
                                        var yournumbers = "";
                                    }
                                    else
                                    {
                                        var yournumbers = yournumber;
                                    }
                                    
                                    //console.log("yournumbers " +yournumbers);
                                    
                
        /*** PRVS BUTTONS ENDS ***/
        
        let yourotp = encodeURIComponent($('#yourotp').val());
        //let yourotp = $("#yourotp").val();
         
         
         
         let form_data = new FormData();
        
        form_data.append('name', yournames);
        form_data.append('email', youremails);
        form_data.append('phone_number', yournumber);  
        
        form_data.append('assignid', assignid);
        
        form_data.append('_token', '{{ csrf_token() }}'); 
        
        if(yourotp == '' || yourotp == undefined)
        {
    		alert('Please enter OTP sent to your mobile.');
    		$('#yourotp').focus();
    	    allowproceed = false;
        } 
        else
        {
            
            if(allowproceed == true)
            { 
                $.ajax
                ({
                    url:'/checkotp',
                    type: "post",
                    dataType:"json",
                    data: { "entered_otp": yourotp,"name":yournames,"email":youremails,"mobile":yournumbers,"_token":'{{ csrf_token() }}' },
                    beforeSend: function()
                    {
                        $('#continue6').attr("disabled",true);
                        $("#continue6").addClass("greybg");
                    },
                    success: function(ajaxresponse,status)
                    {
                        let response = ajaxresponse;
                        let ajax_status = response['status'];
            
                        if(ajax_status == 1)
                        {
                            //.log("otpmatched");
                            completecallssave1();
                           // alert("otpmatched");
                        }
                        else
                        {
                            alert ("OTP did not match. Resubmit again");
                            $('#yourotp').val('');
                            $('#yourotp').focus();
                            $('#continue6').attr("disabled",false);
                            $("#continue6").removeClass("greybg");
                        }
                    },
                    error: function(a,b)
                    {
                        alert ("Entered OTP does not matches. Please try again later.");  
                        $('#continue6').attr("disabled",false); 
                        $("#continue6").removeClass("greybg");
                    },
                    complete:function(data)
                    {
                        $('#continue6').attr("disabled",false); 
                        $("#continue6").removeClass("greybg");
                    }
                });
            }
        
              /*$("#type1").hide();
              $("#type2").hide();
              $("#type3").hide();
              $("#type4").hide();
              $("#type5").hide();
              $("#type6").hide();
              $("#type7").show();*/
        }
              
   }); 
   
   
   function completecallssave1() 
   {
        let allowproceed = true;
	    $('#totalError').html(''); // added temporily
	    
	    /*** PRVS BUTTONS STARTS ***/
        
                var fields = $("input[name='list']").serializeArray(); 
                var array = [];
                        $("input[name='list']:checked").each(function() {
                            array.push($(this).val());
                        });
                                    var listeditems = array;        
                                    //console.log("listeditems - NEXT: " + listeditems);
                        
                        
                        
                var subfields = $("input[name='decorations_type']").serializeArray();   
                var subarray = [];
                        $("input[name='decorations_type']:checked").each(function() {
                            subarray.push($(this).val());
                        }); 
                                    var sublisteditems = subarray;
                                    //console.log("sublisteditems - NEXT: " + sublisteditems);  
                            
                let budget_group = $("input[name='budget-group']:checked").val(); 
                                    if(budget_group == '' || budget_group == undefined)
                                     
                                    {
                                        var budget_groups = "";
                                    }
                                    else
                                    {
                                         var budget_groups = budget_group;
                                    } 
                                    //console.log("budget_groups - NEXT: " + budget_groups); 
                                     
                                     
                                     
                let guest_group = $("input[name='guest-group']:checked").val();
                                     
                                     
                                     if(guest_group == '' || guest_group == undefined)
                                    {
                                        var guest_groups = "";
                                    }
                                    else
                                    {
                                        var guest_groups =  guest_group;
                                    }
                                   // console.log("guest_group - NEXT: " + guest_groups); 
                 
                 
                 let cities = $("#cities").val();
                    //let cities = $('#cities option:selected').val();                  
                                    if(cities == '' || cities == undefined)
                                    {
                                        var citiess = "";
                                    }
                                    else
                                    {
                                        var citiess = cities;
                                    }
                                    //console.log("citiess " + citiess);
                                     
                 let location = $("#location").val();   
                 
                                     if(location == '' || location == undefined)
                                    {
                                        var locations = "";
                                    }
                                    else
                                    {
                                        var locations = location;
                                    }
                                    //console.log("locations " +locations); 
                                    
                                    
                 let venue_group = $("input[name='venue-group']:checked").val();
                
                                    if(venue_group == '' || venue_group == undefined)
                                    {
                                        var venue_groups = "";
                                    }
                                    else
                                    {
                                        var venue_groups = venue_group;
                                    }
                                    //console.log("venue_group " +venue_group); 
                                    
                 let venuename = $("#venuename").val();  
                                
                                    if(venuename == '' || venuename == undefined)
                                     
                                    {
                                        var venuenames = "";
                                    }
                                    else
                                    {
                                        var venuenames = venuename;
                                    }
                                    
                                    //console.log("venuenames " +venuenames);
                                    
                                    
                let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();    
                
                                    if(allowoutsidevendor == '' || allowoutsidevendor == undefined)
                                     
                                    {
                                        var allowoutsidevendors = "";
                                    }
                                    else
                                    {
                                        var allowoutsidevendors = allowoutsidevendor;
                                    }
                                    
                                    //console.log("allowoutsidevendors " +allowoutsidevendors);
                                    
                                    
                let venuedetail = $("input[name='venuedetail']:checked").val(); 
                                   
                                   if(venuedetail == '' || venuedetail == undefined)
                                     
                                    {
                                        var venuedetailbooking = "";
                                    }
                                    else
                                    {
                                        var venuedetailbooking = venuedetail;
                                    }
                                    
                                    //console.log("venuedetailbooking " +venuedetailbooking);
                
                 let date_group = $("input[name='date-group']:checked").val();   
                
                                if(date_group == '' || date_group == undefined)
                                     
                                    {
                                        var wedding_date_group = "";
                                    }
                                    else
                                    {
                                        var wedding_date_group = date_group;
                                    }
                                    
                                    //console.log("wedding_date_group " +wedding_date_group);
                 
                let weddingdatefix = $("#weddingdatefix").val();
                                
                                   if(weddingdatefix == '' || weddingdatefix == undefined)
                                     
                                    {
                                        var weddingdate_detail = "";
                                    }
                                    else
                                    {
                                         const date = $("#weddingdatefix").val();
                                         const [day, month, year] = date.split('-');
                                         const result = `${year}-${month}-${day}`;
                                        
                                        var weddingdate_detail = result;
                                    }
                                    
                                    //console.log("weddingdate_detail " +weddingdate_detail);
                                    
                let noweddingdate = $("input[name='nodate-group']:checked").val();  
                
                                    if(noweddingdate == '' || noweddingdate == undefined)
                                     
                                    {
                                        var weddingdate_time = "";
                                    }
                                    else
                                    {
                                        var weddingdate_time = noweddingdate;
                                    }
                                    
                                    //console.log("weddingdate_time " +weddingdate_time);
                                    
                                    
                let yourname = $("#yourname").val();
                                    
                                    if(yourname == '' || yourname == undefined)
                                     
                                    {
                                        var yournames = "";
                                    }
                                    else
                                    {
                                        var yournames = yourname;
                                    }
                                    
                                    //console.log("yournames " +yournames);
                                    
                                    
                let youremail = $("#youremail").val();
                                
                                    if(youremail == '' || youremail == undefined)
                                     
                                    {
                                        var youremails = "";
                                    }
                                    else
                                    {
                                        var youremails = youremail;
                                    }
                                    
                                    //console.log("youremails " +youremails);
                                    
                let yournumber = $("#yournumber").val();
                                    
                                    if(yournumber == '' || yournumber == undefined)
                                     
                                    {
                                        var yournumbers = "";
                                    }
                                    else
                                    {
                                        var yournumbers = yournumber;
                                    }
                                    
                                    //console.log("yournumbers " +yournumbers);
                 let assignid = $("#inurl").val();                   
                
        /*** PRVS BUTTONS ENDS ***/
	    
	    var listeditems = array;
        var sublisteditems = subarray;
        var budget_groups = budget_groups;
        
        var guest_groups = guest_groups;
        var citiess      = citiess;
        var locations    = locations;
        var venue_groups = venue_groups;
        var venuenames = venuenames;
        var allowoutsidevendors = allowoutsidevendors;
        
        var venuedetailbooking = venuedetailbooking;
        var wedding_date_group = wedding_date_group;
        var weddingdate_detail = weddingdate_detail;
        var weddingdate_time = weddingdate_time;
        var yournames       = yournames;
        var youremails      = youremails;
        var yournumbers      = yournumbers;
         

        var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        
        /*console.log("final call");
        console.log("listeditems" + listeditems);
        console.log("sublisteditems" + sublisteditems);
        console.log("budget_groups"+ budget_groups);
        console.log("guest_groups" + guest_groups);
        console.log("citiess" + citiess);
        console.log("locations" + locations);
        console.log("venue_groups" + venue_groups);
        console.log("venuenames" + venuenames);
        console.log("allowoutsidevendors" + allowoutsidevendors);
        console.log("venuedetailbooking" + venuedetailbooking);
        console.log("wedding_date_group" + wedding_date_group);
        console.log("weddingdate_detail" + weddingdate_detail);
        console.log("weddingdate_time" + weddingdate_time);
        console.log("yournames" + yournames);
        console.log("youremails" + youremails);
        console.log("yournumbers" + yournumbers);*/
        
        
        let form_data = new FormData();
        
        form_data.append('listeditems', listeditems);
        form_data.append('sublisteditems', sublisteditems);
        form_data.append('budget_groups', budget_groups);
        form_data.append('guest_groups', guest_groups);
        form_data.append('citiess', citiess);
        form_data.append('locations', locations);
        form_data.append('venue_groups', venue_groups);
        form_data.append('venuenames', venuenames);
        form_data.append('allowoutsidevendors', allowoutsidevendors);
        form_data.append('venuedetailbooking', venuedetailbooking);
        form_data.append('wedding_date_group', wedding_date_group);
        form_data.append('weddingdate_detail', weddingdate_detail);
        form_data.append('weddingdate_time', weddingdate_time);
        form_data.append('yournames', yournames);
        form_data.append('youremails', youremails);
        form_data.append('yournumbers', yournumbers);
        
        form_data.append('assignid', assignid);
        
        form_data.append('_token', '{{ csrf_token() }}'); 
        
        
        if(allowproceed == true)
        {
            $('#continue6').attr("disabled",true); 
             
            $.ajax
            ({
                url: "{{ route('website.savenewbuyleadform') }}",
                //url: "{{ route('website.mailedform') }}",
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                async: true,
                beforeSend: function() {
                    // setting a timeout
                    $("#continue5").text("Please Wait");
                    $("#continue5").attr('disabled', true);
                    $("#continue5").addClass("greybg");
                },
                success: function(response)
                {
                    let responsedata = response;
                    
                    if(responsedata.hasOwnProperty('errors'))
                    {
                       //alert(responsedata.errors[0]); 
                       console.log("1");
                       $('.pageerror p').text(responsedata.errors[0]);
                       
                       
                    }
                    else if(responsedata.hasOwnProperty('message'))
                    {
                        let statusreturned = responsedata.status;
                        let message = responsedata.message;

                        if(statusreturned == 1)
                        { 
                             //alert(message);
                            //$('.pageerror p').text(message);
                            //setTimeout(function(){ resetform(); }, 500);
                            //setTimeout(function(){ window.location = "{{ route('website.leadformthankyou') }}"; }, 2000);
                             
                            $("#continue5").attr('disabled', false);
                            $("#continue5").removeClass("greybg");
                            $("#type7").show();
                            $("#type5").hide();
                        }
                        else if(statusreturned == 2)
                        {
                             //alert(message);
                             $("#demoModal .modal-body #activetext").text(message);
                             //$("#demoModal").show();
                             $("#demosmodal").click();
                             
                             $("#exampleModalCenter .modal-dialog").addClass("redopac");
                             
                             $("#type7").hide();
                              
                        }
                        else
						{
							if (typeof message === "object")
							{
							     console.log("3");
                                //alert(message[Object.keys(message)[0]]);
                                $('.pageerror p').text(message[Object.keys(message)[0]]);
                            }
                            else
                            {
                                 console.log("4");
                                //alert(message); 
                                $('.pageerror p').text(message);
                            }
						}
                    }
                },
                complete:function(data)
                {
                   // $("#continue5").text("Finish!");
                   // $("#continue5").attr('disabled', true); 
                  //  $("#continue5").removeClass("greybg");
                }
            });    
        }
        
         
   }
   
   
   
   
   $(document).on('click', "#continue7", function(event) {
       event.preventDefault();
       /*$("input").val('');  
       $('input[name="list"]').prop('checked', false);
       $('input[name="date-group"]').prop('checked', false);
       $('input[name="nodate-group"]').prop('checked', false);
        $('input[name="venue-group"]').prop('checked', false);
       $('#venuedetail').prop('selectedIndex',0);
       $('.close').trigger('click');*/
       
       location.reload();
   }); 
</script>    
<!-- popup validation ends -->

 <!-- added in new ui for popup starts-->
    <!--<link rel="stylesheet" href="http://marrynowpaylater.websitezweb.com/frontend/css/mnpl/bootstrap.min.css">-->
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
     
     <script>
         /* $(window).on('load', function() {
                $('#exampleModalCenter').modal('show');
            });*/
            
            setTimeout(function() {
            $('#exampleModalCenter').modal();
        }, 2000);
     </script>
    <!-- added in new ui for popup ends-->
     <style>

    #exampleModalCenter .modal-dialog {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) !important;
        margin: 0;
        width: 90%;
        max-width: 800px;
    }

        #demoModal .modal-content
        {
            padding: 0;
        }
        #demoModal .modal-content .modal-header
        {
            display : none;
        }
        #demoModal .modal-content .modal-body
        {
            text-align: center;
            font-size: 18px;
        }
        #demoModal .modal-content .modal-footer
        {
            width: 100%;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            display: block;
        }
        #demoModal .modal-content .modal-footer button
        {
            font-size: 18px;
        }
        
        #demoModal .modal-dialog
        {
                margin-top: 15%;
        }
        
        .modal.in .modal-dialog.redopac
        {
                opacity: 0.9;
        }
    
    .btn-back-custom {
        background: white;
        border: 2px solid #e2e8f0;
        color: #64748b;
        border-radius: 50px;
        padding: 14px 40px !important;
        font-size: 1.15rem !important;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .btn-back-custom:hover {
        background: rgba(134, 58, 193, 0.05);
        border-color: rgba(134, 58, 193, 0.4);
        color: #863ac1;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(134, 58, 193, 0.1);
    }

            .custom-control {
        position: relative;
        display: block;
        min-height: 2.5rem;
    }
    .custom-control-input {
        position: absolute;
        left: -9999px !important;
        z-index: -1;
        width: 1px;
        height: 1px;
        opacity: 0 !important;
    }
    .custom-checkbox .custom-control-label::before, 
    .custom-radio .custom-control-label::before {
        content: "" !important;
        position: relative !important;
        display: inline-block !important;
        margin-right: 0.75rem !important;
        width: 1.75rem !important;
        height: 1.75rem !important;
        border: 2px solid #cbd5e1 !important;
        background-color: transparent !important;
        transition: all 0.2s ease-in-out !important;
        box-shadow: none !important;
        flex-shrink: 0;
    }
    .custom-checkbox .custom-control-label::before {
        border-radius: 4px !important;
    }
    .custom-radio .custom-control-label::before {
        border-radius: 50% !important;
    }
    .custom-checkbox .custom-control-label::after,
    .custom-radio .custom-control-label::after {
        content: "" !important;
        position: absolute !important;
        display: block !important;
        transition: all 0.2s ease-in-out !important;
        opacity: 0 !important;
        transform: scale(0.5) !important;
        border: none !important;
        left: 0 !important;
        top: 0 !important;
    }
    .custom-checkbox .custom-control-label::after {
        width: 1.75rem !important;
        height: 1.75rem !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: 65% !important;
        background-color: transparent !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
    }
    .custom-radio .custom-control-label::after {
        left: 0.375rem !important;
        top: 50% !important;
        margin-top: -0.375rem !important;
        width: 0.75rem !important;
        height: 0.75rem !important;
        border-radius: 50% !important;
        background-color: #fff !important;
        background-image: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #863ac1 !important;
        border-color: #863ac1 !important;
        box-shadow: none !important;
    }
    .custom-control-input:checked ~ .custom-control-label::after {
        opacity: 1 !important;
        transform: scale(1) !important;
    }
    .custom-control:hover .custom-control-label::before {
        border-color: #863ac1 !important;
    }
    .custom-control-label {
        position: relative;
        cursor: pointer;
        font-weight: 500 !important;
        color: #475569 !important;
        line-height: 1.5;
        font-size: 1.15rem !important;
        transition: color 0.3s ease;
        display: flex !important;
        align-items: center !important;
        margin-bottom: 0 !important;
        padding-left: 0 !important;
    }
    .custom-control-input:checked ~ .custom-control-label {
        color: #863ac1 !important;
        font-weight: 600 !important;
    }
    .sequence-item:hover {
        border-color: #863ac1 !important;
        box-shadow: 0 4px 12px rgba(134, 58, 193, 0.15) !important;
    }
    .seq-up:hover, .seq-down:hover {
        background-color: #863ac1 !important;
        color: #ffffff !important;
        border-color: #863ac1 !important;
    }



    

#exampleModalCenter .modal-content [type="radio"]:checked + label:before, #exampleModalCenter .modal-content [type="radio"]:not(:checked) + label:before,
#exampleModalCenter .modal-content [type="radio"]:checked + label:after
{
    display: none !important;
}
</style>
    
    
    
        
        
    
    <script>
        $(document).on('click', "#proceedfinal", function(event) {  
            
            let allowproceed = true;
    	    $('#totalError').html(''); // added temporily
    	    
    	    /*** PRVS BUTTONS STARTS ***/
            
                    var fields = $("input[name='list']").serializeArray(); 
                    var array = [];
                            $("input[name='list']:checked").each(function() {
                                array.push($(this).val());
                            });
                                        var listeditems = array;        
                                        //console.log("listeditems - NEXT: " + listeditems);
                            
                            
                            
                    var subfields = $("input[name='decorations_type']").serializeArray();   
                    var subarray = [];
                            $("input[name='decorations_type']:checked").each(function() {
                                subarray.push($(this).val());
                            }); 
                                        var sublisteditems = subarray;
                                        //console.log("sublisteditems - NEXT: " + sublisteditems);  
                                
                    let budget_group = $("input[name='budget-group']:checked").val(); 
                                        if(budget_group == '' || budget_group == undefined)
                                         
                                        {
                                            var budget_groups = "";
                                        }
                                        else
                                        {
                                             var budget_groups = budget_group;
                                        } 
                                        //console.log("budget_groups - NEXT: " + budget_groups); 
                                         
                                         
                                         
                    let guest_group = $("input[name='guest-group']:checked").val();
                                         
                                         
                                         if(guest_group == '' || guest_group == undefined)
                                        {
                                            var guest_groups = "";
                                        }
                                        else
                                        {
                                            var guest_groups =  guest_group;
                                        }
                                       // console.log("guest_group - NEXT: " + guest_groups); 
                     
                     
                     let cities = $("#cities").val();
                                        
                                        if(cities == '' || cities == undefined)
                                        {
                                            var citiess = "";
                                        }
                                        else
                                        {
                                            var citiess = cities;
                                        }
                                        //console.log("citiess " + citiess);
                                         
                     let location = $("#location").val();   
                     
                                         if(location == '' || location == undefined)
                                        {
                                            var locations = "";
                                        }
                                        else
                                        {
                                            var locations = location;
                                        }
                                        //console.log("locations " +locations); 
                                        
                                        
                     let venue_group = $("input[name='venue-group']:checked").val();
                    
                                        if(venue_group == '' || venue_group == undefined)
                                        {
                                            var venue_groups = "";
                                        }
                                        else
                                        {
                                            var venue_groups = venue_group;
                                        }
                                        //console.log("venue_group " +venue_group); 
                                        
                     let venuename = $("#venuename").val();  
                                    
                                        if(venuename == '' || venuename == undefined)
                                         
                                        {
                                            var venuenames = "";
                                        }
                                        else
                                        {
                                            var venuenames = venuename;
                                        }
                                        
                                        //console.log("venuenames " +venuenames);
                                        
                                        
                    let allowoutsidevendor = $("input[name='allowoutsidevendor-group']:checked").val();    
                    
                                        if(allowoutsidevendor == '' || allowoutsidevendor == undefined)
                                         
                                        {
                                            var allowoutsidevendors = "";
                                        }
                                        else
                                        {
                                            var allowoutsidevendors = allowoutsidevendor;
                                        }
                                        
                                        //console.log("allowoutsidevendors " +allowoutsidevendors);
                                        
                                        
                    let venuedetail = $("input[name='venuedetail']:checked").val(); 
                                       
                                       if(venuedetail == '' || venuedetail == undefined)
                                         
                                        {
                                            var venuedetailbooking = "";
                                        }
                                        else
                                        {
                                            var venuedetailbooking = venuedetail;
                                        }
                                        
                                        //console.log("venuedetailbooking " +venuedetailbooking);
                    
                     let date_group = $("input[name='date-group']:checked").val();   
                    
                                    if(date_group == '' || date_group == undefined)
                                         
                                        {
                                            var wedding_date_group = "";
                                        }
                                        else
                                        {
                                            var wedding_date_group = date_group;
                                        }
                                        
                                        //console.log("wedding_date_group " +wedding_date_group);
                     
                    let weddingdatefix = $("#weddingdatefix").val();
                                    
                                       if(weddingdatefix == '' || weddingdatefix == undefined)
                                         
                                        {
                                            var weddingdate_detail = "";
                                        }
                                        else
                                        {
                                             const date = $("#weddingdatefix").val();
                                             const [day, month, year] = date.split('-');
                                             const result = `${year}-${month}-${day}`;
                                            
                                            var weddingdate_detail = result;
                                        }
                                        
                                        //console.log("weddingdate_detail " +weddingdate_detail);
                                        
                    let noweddingdate = $("input[name='nodate-group']:checked").val();  
                    
                                        if(noweddingdate == '' || noweddingdate == undefined)
                                         
                                        {
                                            var weddingdate_time = "";
                                        }
                                        else
                                        {
                                            var weddingdate_time = noweddingdate;
                                        }
                                        
                                        //console.log("weddingdate_time " +weddingdate_time);
                                        
                                        
                    let yourname = $("#yourname").val();
                                        
                                        if(yourname == '' || yourname == undefined)
                                         
                                        {
                                            var yournames = "";
                                        }
                                        else
                                        {
                                            var yournames = yourname;
                                        }
                                        
                                        //console.log("yournames " +yournames);
                                        
                                        
                    let youremail = $("#youremail").val();
                                    
                                        if(youremail == '' || youremail == undefined)
                                         
                                        {
                                            var youremails = "";
                                        }
                                        else
                                        {
                                            var youremails = youremail;
                                        }
                                        
                                        //console.log("youremails " +youremails);
                                        
                    let yournumber = $("#yournumber").val();
                                        
                                        if(yournumber == '' || yournumber == undefined)
                                         
                                        {
                                            var yournumbers = "";
                                        }
                                        else
                                        {
                                            var yournumbers = yournumber;
                                        }
                                        
                                        //console.log("yournumbers " +yournumbers);
                                        let assignid = $("#inurl").val();                   
                                            
                                    /*** PRVS BUTTONS ENDS ***/
                            	    
                            	    var listeditems = array;
                                    var sublisteditems = subarray;
                                    var budget_groups = budget_groups;
                                    
                                    var guest_groups = guest_groups;
                                    var citiess      = citiess;
                                    var locations    = locations;
                                    var venue_groups = venue_groups;
                                    var venuenames = venuenames;
                                    var allowoutsidevendors = allowoutsidevendors;
                                    
                                    var venuedetailbooking = venuedetailbooking;
                                    var wedding_date_group = wedding_date_group;
                                    var weddingdate_detail = weddingdate_detail;
                                    var weddingdate_time = weddingdate_time;
                                    var yournames       = yournames;
                                    var youremails      = youremails;
                                    var yournumbers      = yournumbers;
                                     
                                     //ar assignid       = assignid;
                                     
                            
                                    var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                                     
                                    
                                    
                                    let form_data = new FormData();
                                    
                                    let sequenceItems = [];
                                    $('#sequence_list .sequence-checkbox:checked').each(function() {
                                        sequenceItems.push($(this).val());
                                    });
                                    form_data.append('sequence_of_events', JSON.stringify(sequenceItems));
                                    
                                    form_data.append('listeditems', listeditems);
                                    form_data.append('sublisteditems', sublisteditems);
                                    form_data.append('budget_groups', budget_groups);
                                    form_data.append('guest_groups', guest_groups);
                                    form_data.append('citiess', citiess);
                                    form_data.append('locations', locations);
                                    form_data.append('venue_groups', venue_groups);
                                    form_data.append('venuenames', venuenames);
                                    form_data.append('allowoutsidevendors', allowoutsidevendors);
                                    form_data.append('venuedetailbooking', venuedetailbooking);
                                    form_data.append('wedding_date_group', wedding_date_group);
                                    form_data.append('weddingdate_detail', weddingdate_detail);
                                    form_data.append('weddingdate_time', weddingdate_time);
                                    form_data.append('yournames', yournames);
                                    form_data.append('youremails', youremails);
                                    form_data.append('yournumbers', yournumbers);
                                    
                                    form_data.append('assignid', assignid);
                                    
                                    form_data.append('_token', '{{ csrf_token() }}'); 
                                    
                                    
                                    if(allowproceed == true)
                                    {
                                        $('#continue6').attr("disabled",true); 
                                         
                                        $.ajax
                                        ({
                                            url: "{{ route('website.savenewbuyleaddataform') }}",
                                            //url: "{{ route('website.mailedform') }}",
                                            dataType: 'json',
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            data: form_data,
                                            type: 'post',
                                            async: true,
                                            beforeSend: function() {
                                                // setting a timeout
                                                $("#proceedfinal").text("Please Wait");
                                                $("#proceedfinal").attr('disabled', true); 
                                            },
                                            success: function(response)
                                            {
                                                let responsedata = response;
                                                
                                                if(responsedata.hasOwnProperty('errors'))
                                                {
                                                   //alert(responsedata.errors[0]); 
                                                   console.log("1");
                                                   $('.pageerror p').text(responsedata.errors[0]);
                                                   
                                                   
                                                }
                                                else if(responsedata.hasOwnProperty('message'))
                                                {
                                                    let statusreturned = responsedata.status;
                                                    let message = responsedata.message;
                            
                                                    if(statusreturned == 1)
                                                    { 
                                                         //alert(message);
                                                        //$('.pageerror p').text(message);
                                                        //setTimeout(function(){ resetform(); }, 500);
                                                        //setTimeout(function(){ window.location = "{{ route('website.leadformthankyou') }}"; }, 2000);
                                                        $("#demosmodal").click(); 
                                                        $("#exampleModalCenter .modal-dialog").removeClass("redopac")
                                                        $("#continue5").attr('disabled', false);
                                                        $("#continue5").removeClass("greybg");
                                                        $("#type7").show();
                                                        $("#type5").hide();
                                                    } 
                                                    else
                            						{
                            							if (typeof message === "object")
                            							{
                            							     console.log("3");
                                                            //alert(message[Object.keys(message)[0]]);
                                                            $('.pageerror p').text(message[Object.keys(message)[0]]);
                                                        }
                                                        else
                                                        {
                                                             console.log("4");
                                                            //alert(message); 
                                                            $('.pageerror p').text(message);
                                                        }
                            						}
                                                }
                                            },
                                            complete:function(data)
                                            {
                                               // $("#continue5").text("Finish!");
                                                $("#continue5").attr('disabled', true); 
                                                $("#continue5").removeClass("greybg");
                                            }
                                        });    
                                    }
        
        
        
        });
    </script>
@endpush
































