
<style>
.select2-container { width: 100% !important; }
.select2-container .select2-selection--single { height: 38px !important; display: flex !important; align-items: center !important; }
.select2-container--default .select2-selection--single .select2-selection__rendered { line-height: 38px !important; }
.select2-container--default .select2-selection--single .select2-selection__arrow { height: 36px !important; }
</style>

@extends('layouts.backend.app')
@section('title','dashboard')
@section('pageheading','Dashboard')
@section('cardheading','PAW General Leads List')
@section('breadcrum','Home')
@section('subheading','dashboard')

@push('css')
<link href="{{ asset('/dist/css/bootstrap-multiselect.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="{{ asset('/dist/css/select2.min.css')}}" rel="stylesheet">
<style>
    .select2
    {
        display: block !important;
        width: 100% !important;
    }
    body table.table-bordered.dataTable .one
    {
        width: 5% !important;
    }
     body table.table-bordered.dataTable .two
    {
        width: 25% !important;
    }
     body table.table-bordered.dataTable .three
    {
        width: 25% !important;
    }
     body table.table-bordered.dataTable .four
    {
        width: 20% !important;
    }
     body table.table-bordered.dataTable .five
    {
        width: 25% !important;
    }
     body table.table-bordered.dataTable .six
    {
        width: 10% !important;
    }
     body table.table-bordered.dataTable .seven
    {
        width: 10% !important;
    }
    table.table-bordered.dataTable td
    {
        word-break: break-all;
        font-size: 14px;
    }
    
    /*#leads_table.table-bordered.dataTable td
    {
        display: block;
        max-height: 50px;
        overflow: auto;
    }*/
    
    .col .select2-container .select2-selection--single {
        height: calc(2.25rem + 2px);
    }
    .addtop
    {
        margin-top: 25px;
        //display: none;
    }
    
    .select2-container--focus {
        border: 1px solid #1a94ff;
    }
    #venuenamedetails, #venueallowdetails, #venueassist, #weddingno, #weddingyes
    {
        display: none;
    }
    
    
    table.table-bordered.dataTable td
    {
        font-size: 13px;
        line-height: 27px;
    }
    .detailsassign p
    {
        background: #000;
        color: #fff;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
        font-size: 14px;
        border-radius: 3px;
        width: 90px;
        margin-top: 15px;
    }
    .goaltype.assigns
    {
        width: 90px;
        padding: 5px;
    }
    .btn-xs.btn-primary
    {
        cursor: pointer;
    }
    .goaltype.assigns.smscities,
    .goaltype.assigns.smscategories 
    {
            margin-bottom: 15px;
    }
</style>



<style>
    .row.topfilter {
        align-items: center;
    }
    
    
    div.additoinal_bg {
        background: #884db7;
        color: #fff;
        font-size: 15px;
        text-align: center;
        border-radius: 3px;
    }
    
    .followcounttext {
        font-size: 11px;
        margin-bottom: 1px;
    }
    p.followcounttext span {
        color: red;
    }
    .row.topfilter {
            align-items: center;
        }
    .d-flex {
        display: flex!important;
    }
    .dash-count {
        /* background: #FF9F43; */
        background: #ff9f43c9;
        color: #fff;
        min-height: 98px;
        width: 100%;
        border-radius: 6px;
        margin: 0 0 25px;
        padding: 20px;
        display: flex;

    }
    .dash-count .dash-counts
    {
        width: 75%;
    }
    .dash-count h4 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 0;
    }
    .dash-count h5 {
        font-size: 17px;
        font-weight: 600;
    }
    .dash-count .dash-imgs {
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .dash-count .dash-imgs svg {
        width: 50px;
        height: 50px;
    }
     .dash-count .dash-imgs i
     {
             font-size: 50px;
             vertical-align: middle;
     }
    svg
    {
            vertical-align: middle;
    }
    .dash-count.das3
    {
        background: #fe5959cc;
    }
    .dash-count.das1 {
        /* background: #00CFE8; */
        background: #00cfe8b5;
    }
    .dash-count.das2 {
        /* background: #1B2850; */
        background: #f182a4;
    }
    .dash-count
    {
        cursor : pointer;
    }
    
    .full-row .col-lg-2 
    {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 19.666667%;
        max-width: 19.666667%;
    }
    .dash-count.totl
    {
        background: #6b99ff;
            cursor: auto;
    }    
</style>


<style>
        .addbtnpad .form-group
        {
                margin-top: 2em;
        }
        .topfilter.addgstdetail
        {
            background: #e9e9e9;
        }
        .topfilter.addgstdetail p.head
        {
            text-align: center;
            padding-top: 10px;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>
@endpush

@section('content')

    <!--
    <div align="right">
         
        <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add Leads</button>
        <button type="button" onclick="exportForm()"  name="export_data" id="export_data" class="btn btn-primary btn-sm">Export Records</button>
    </div>
    <br />
    -->
    
     <!-- start conter -->
             <div class="row">
           <div class="col-lg-4"></div>
                  <div class="col-lg-4 col-sm-6">
                    <div class="form-group">
                        <label for="name" class="control-label ">Team Member (click below for separate page)</label> 
                        
                        <!--
                        @if(Auth()->user()->role->id == 19)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972" selected="selected">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                        
                        
                        @elseif(Auth()->user()->role->id == 20)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140" selected="selected">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option>  
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                           
                        @elseif(Auth()->user()->role->id == 21)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175" selected="selected">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                        
                        
                        @elseif(Auth()->user()->role->id == 24)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                     
                                    <option value="16950" selected="selected">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                         
                        @elseif(Auth()->user()->role->id == 11)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985" selected="selected">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                        
                        @elseif(Auth()->user()->role->id == 26)
                            <select name="selectteamid" class="form-control" id="selectteamid" Onchange="countMember()">
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943" >Harsha</option> 
                                     
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                             
                        @elseif(Auth()->user()->role->id == 12)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                    
                                    <option value="1007" selected="selected">Dilip</option>
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                        
                        
                        @elseif(Auth()->user()->role->id == 22)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                    
                                    <option value="1007">Dilip</option>
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233" selected="selected">Jinesh Joshi</option>
                             </select>
                             
                        @elseif(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18|| Auth()->user()->role->id == 28
                        || Auth()->user()->role->id == 25|| Auth()->user()->role->id == 30)
                             <select name="selectteamid" class="form-control" id="selectteamid" Onchange="countMember()">
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    <option value="17943">Harsha</option> 
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                             </select>
                          @endif  
                          
                          -->
                          
                           @if(  Auth()->user()->role->id == 20 || Auth()->user()->role->id == 24 || Auth()->user()->role->id == 21 || Auth()->user()->role->id == 11 || Auth()->user()->role->id == 14
                            || Auth()->user()->role->id == 12|| Auth()->user()->role->id == 22|| Auth()->user()->role->id == 13|| Auth()->user()->role->id == 26|| Auth()->user()->role->id == 34|| Auth()->user()->role->id == 33|| Auth()->user()->role->id == 38)
                            
                                <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                        <option value="0">--All---</option>
                                         @foreach($pawteam as $city)
                                            <option value="{{$city->id }}" {{ ( $city->id == Auth()->user()->id ) ? 'selected' : '' }}>{{ $city->name }}</option>
                                        @endforeach
                                 </select>
                                 
                            @elseif(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18|| Auth()->user()->role->id == 288 || Auth()->user()->role->id == 19|| Auth()->user()->role->id == 41)
                                 <select name="selectteamid" class="form-control" id="selectteamid" Onchange="countMember()">
                                        <option value="0">--All---</option>
                                        
                                        
                                      
                                         @foreach ($pawteam as $pawteams)
                                            <option value="{{ $pawteams->id }}">{{ $pawteams->name }}</option>
                                        @endforeach 
                                        
                                 </select>
                                 
                                 
                              @elseif(Auth()->user()->role->id == 25)
                                <select name="selectteamid" class="form-control" id="selectteamid" Onchange="countMember()">
                                        <option value="0">--All---</option>
                                       @foreach ($pawteam as $pawteams)
                                            <option value="{{ $pawteams->id }}">{{ $pawteams->name }}</option>
                                        @endforeach 
                                 </select>
                              @endif  
                    </div>
                   </div>
       </div>
       
       
            <div class="row full-row">
        
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
             <div class="dash-count totl" >
                <div class="dash-counts"> 
                   <h4 id="allcounts"></h4>
                   <h5>Total Leads</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    -->
                    <i class="fa fa-globe" aria-hidden="true"></i>

                </div>
             </div>
          </div>
          
          <div class="col-lg-3 col-sm-6 col-12 d-flex">
             <div class="dash-count" Onclick="counterhoots()">
                <div class="dash-counts"> 
                   <h4 id="hotcounts"></h4>
                   <h5>Sold</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    -->
                    <i class="fa fa-sun" aria-hidden="true"></i>

                </div>
             </div>
          </div>
          
          <div class="col-lg-3 col-sm-6 col-12 d-flex" Onclick="counterfollowhoots()">
             <div class="dash-count das3">
                <div class="dash-counts">
                    
                   <h4 id="followcounts"></h4>
                   <h5>Unsold</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    -->
                    <i class="fa fa-thumbs-down" aria-hidden="true"></i> 
                </div>
             </div>
          </div>
          
          
           
          
          
          
          <div class="col-lg-3 col-sm-6 col-12 d-flex" Onclick="counternotablehoots()">
             <div class="dash-count das2">
                <div class="dash-counts">
                    
                                                    
                    
                   <h4 id="notcounts"></h4>
                   <h5>Tickets - Refund done</h5>
                </div>
                <div class="dash-imgs">
                    <i class="fa fa-plug" aria-hidden="true"></i>

                </div>
             </div>
          </div>
    </div>
    
      <!-- end conter -->
      
      
      
      
     @if(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 18)
             <div class="row topfilter addgstdetail">
                <div class="col-md-12">
                <p class="head"> GST EXPORT</p>
            </div>
            
                <div class="col-md-12">
                <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="control-label">From</label>
                            <input type="date" id="start_dates" name="start_dates" class="form-control"  />
                        </div>
                    </div>
                    
                     <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="control-label">To</label>
                            <input type="date" id="end_dates" name="end_dates" class="form-control"  />
                        </div>
                    </div>
                    
                    <!--
                        <div class="col-md-3">
                         <div class="form-group">
                            <label for="name" class="control-label">Choose Fields</label>
                            <select id="multiselect" multiple="multiple">
                                <option value="Name">Customer Name</option> 
                                <option value="Lead Upload Date">Lead Upload Date</option> 
                                <option value="Refund Status">Refund Status</option>
                                <option value="Refund Date">Refund Date</option> 
                                <option value="Price">Price</option>
                                <option value="City">City</option>
                                <option value="Event Planner Name">Event Planner Name</option>
                                <option value="Event Planner Business Name">Event Planner Business Name</option>
                            </select> 
                        </div>
                     </div>
                    --> 
                    <!-- <div class="col-md-4">
                         <div class="form-group">
                          <label for="name" class="control-label">Partners</label>
                          <select name="plannerids" id="plannerids" class="form-control">
                                <option value="0">Please Select</option>
                                        
                                     
                                      @foreach ($userdetail as $user1)
                                        <option value="{{ $user1->id }}">{{ $user1->name }}</option>
                                       @endforeach
                            </select>
                        </div>
                     </div>-->
                     
                     <div class="col-md-4 addbtnpad">
                         <div class="form-group">
                             <button type="button" onclick="exportFormPlannerAccounts()"  name="export_dataPlanneracounts" id="export_dataPlanneracounts" class="btn btn-warning btn-sm">Export For Accounts</button>
                         </div>
                     </div>
                </div>
            </div>
            </div>
          @endif   
          
      
     <div class="row topfilter">
        <div class="col-md-4">
            @if(Auth()->user()->role->id != 41)
                <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add Leads</button>
            @endif   
            @if(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18|| Auth()->user()->role->id == 41)
                <button type="button" onclick="exportForm()"  name="export_data" id="export_data" class="btn btn-primary btn-sm">Export All Records</button>
             @endif   
        </div>
        
        <div class="col-md-8">
            @if(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18|| Auth()->user()->role->id == 41)
            <div class="row topfilter">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="control-label">From</label>
                        <input type="date" id="start_date" name="start_date" class="form-control"  />
                    </div>
                </div>
                
                <div class="col-md-3">
                     <div class="form-group">
                        <label for="name" class="control-label">To</label>
                        <input type="date" id="end_date" name="end_date" class="form-control"  />
                    </div>
                </div>
                
                
                <div class="col-md-3">
                     <div class="form-group">
                        <label for="name" class="control-label ">By</label> 
                         <select name="teamid" class="form-control" id="teamid">
                            <option value="0">--All---</option>
                             <option value="7138">Sowmya</option>
                            <option value="972">Pooja</option> 
                            <option value="7140">Kavitha</option> 
                             <option value="7175">Sumaa</option> 
                             
                             <option value="985">Suraj</option> 
                            <option value="17943">Harsha</option> 
                            
                            <option value="1007">Dilip</option>
                            
                            <option value="20125">Sujatha</option> 
                            
                            <option value="7233">Jinesh Joshi</option>
                            
                         </select>
                    </div>
                </div>
                
                
                <div class="col-md-3">
                    <button type="button"   name="exportshow_dataPlanner" id="exportshow_dataPlanner" class="btn btn-primary btn-md">Show </button>
                    
                    <button type="button" onclick="exportFormPlanner()"  name="export_dataPlanner" id="export_dataPlanner" class="btn btn-success btn-md">Export</button>
                </div>
                
            </div>
            @endif    
        </div>
    </div>
    <!-- Filter Form Comes Here -->
    @if(Auth()->user()->role->id != 41)
        <hr>
        <div class="row">
            <div class="col-md-6">
                
                <div class="col-md-12">
                    <h3><u>Filter Leads</u></h3>
                </div>
                
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cityname">Select City</label>
                            <div class="input-group">
                                <select name="cityname" id="cityname" class="form-control">
                                    <option value="">Please Select</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 inputdiv" id="filtererror"></div>
                        <div class="col-md-6 inputdiv"></div>
                    </div><!--./ ends row -->
                    
                    <div class="row">
                        <div class="col-md-12"><br></div>
                        <div class="col-md-6">
                            <button name="submit" id="filter" type="button" class="btn btn-sm btn-success" value="Submit">Filter</button>
                            <button name="reset" id="resetfilter" type="button" class="btn btn-sm btn-success" value="Reset" onClick="resetfilter();">Reset</button>
                        </div>
                    </div>
                </div>    
                
            </div>    
            
            <div class="col-md-6">
                
                <!-- Lead Assign Form Comes Here -->
                <div class="row">
                    <div class="col-md-12">
                        <h3><u>Assign Leads</u></h3>
                    </div>
                </div>
                        
                <div class="row">
            
                    <div class="form-group">
            
                        <div class="row">
                            <div class="col">
                                <label>Enter Lead Id </label>
                                <input type="number" name="yoee_lead_id" id="yoee_lead_id" class="form-control" placeholder="Please enter lead id"/>
                            </div>
                            <div class="col">
                                <label>Enter Eventplanner Id </label>
                                <input type="number" name="yoee_eventplanner_id" id="yoee_eventplanner_id" class="form-control" placeholder="Please enter event planner id"/>
                            </div>
                        </div>
                        
                    </div>
                
                </div><!--./ ends row -->
                <div class="row">
                    <div class="col-md-12">
                        <button name="leadassign" id="leadassign" type="button" class="btn btn-sm btn-success" value="Submit">Assign Lead</button>
                    </div>
                </div>
            
                <!-- Lead Assign Form Ends -->
            </div> 
        
        </div>
                
        <hr>
    @endif    
    <!-- Filter Form Ends -->
        <!-- Filter Form Comes Here -->
    @if(Auth()->user()->role->id == 1)
    <div class="row">
        
        <div class="col-md-12">
            
            <!-- Lead Assign Form Comes Here -->
            <div class="row">
                <div class="col-md-12">
                    <h3><u>Add Tickets</u></h3>
                </div>
            </div>
                    
            <div class="row">
        
                <div class="form-group">
        
                    <div class="row">
                        <div class="col">
                            <label>Enter Lead Id </label>
                            <input type="number" name="ticket_lead_id" id="ticket_lead_id" class="form-control" placeholder="Please enter lead id"/>
                        </div>
                        <div class="col">
                            <label>Enter Eventplanner Id </label>
                            <input type="number" name="ticket_eventplanner_id" id="ticket_eventplanner_id" class="form-control" placeholder="Please enter event planner id"/>
                        </div>
                        <div class="col">
                            <label>Remarks</label>
                            <select class="form-control" id="ticket_issue" name="ticket_issue">
                                <option value="">  --- Select --- </option>
                                <option value="Customer Not Responding">Customer Not Responding</option> 
                                <option value="Customer Has No Requirements">Customer Has No Requirements</option> 
                            </select>
                        </div>
                        <div class="col" style="margin-top:2em;">
                            <button name="ticketassign" id="ticketassign" type="button" class="btn btn-sm btn-success" value="Submit">Add Ticket</button>
                        </div>
                    </div>
                    
                </div>
            
            </div><!--./ ends row -->
            <!-- Lead Assign Form Ends -->
        </div> 
    
    </div>
            
    <hr>
    @endif
    <!-- Filter Form Ends -->
    <br />
    
    <table id="leads_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="one">Sl No</th>
                <th class="two">Customer Details</th>
                <th class="three">Lead Details</th>
                
                <th class="five">Event Planner Details</th>
                <th class="four">Planner Follow Up</th>
                <th class="six">Status</th>
                <th class="seven">Action</th>
                <!--<th class="eight"><button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button></th>-->
            </tr>
        </thead>
    </table>

    <div class="modal fade" id="leadsModal"  data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" id="leads_form" enctype="multipart/form-data">
                    <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        {{csrf_field()}}
                        <span id="form_output"></span>
                        
                        <div class="form-group">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Customer Name </label>
                                    <input type="text" name="name" id="name" class="form-control" />
                                </div>
                                <div class="col">
                                    <label>Enter Customer Email</label>
                                    <input type="text" name="email" id="email" class="form-control"/>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Customer Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" />
                                </div>
                                <div class="col">
                                    <label>Enter Executive Name</label>
                                    <input type="text" name="executive_name" id="executive_name" class="form-control" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group meetingno">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Lead Time</label>
                                    <input type="datetime-local" name="lead_time" id="lead_time" class="form-control date_selection" />
                                </div>
                                <div class="col">
                                    <label>Enter Event Date</label>
                                    <input type="date" name="event_date" id="event_date" class="form-control" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group meetingno">

                            <div class="row">
                                <div class="col">
                                    <label>To Whom these lead should show to ? </label>
                                    <select id="package_type" name="package_type[]" class="form-control your-select-dropdown-class" onchange="showhideweddingtype()" multiple>
                                        <option value="">Choose...</option>
                                        <!--
                                        <option value="wedding">Wedding Planner</option>
                                        <option value="birthday">Birthday Planner</option>
                                         	
                                        <option value="wedding decorators">Wedding Decorators</option>	
                                        <option value="makeup-artists">Makeup Artist</option>	
                                        <option value="photo&videographer">Photographer / Videographer</option>
                                        <option value="catering">Catering</option>
                                        <option value="flower-decorators">Flower Decorators</option>
                                        
                                         <option value="venue">Wedding Venue </option> 
                                        <option value="costumedesigner">Costume Designer </option> 
                                        <option value="jewellery">Jewellery </option> 
                                        <option value="mehendi artist">Mehendi Artist </option> 
                                        
                                        <option value="DJ">DJ</option>
                                        -->
                                         
                                        <option value="wedding">Wedding Planner </option>
                                       <!--<option value="makeup-artists">Makeup Artists</option>-->
                                        <option value="photo&videographer">Photo&Videographer</option>
                                        <option value="catering">Catering</option>
                                        <option value="flower-decorators">Flower Decorators</option>
                                        <option value="mehendi artist">Mehendi Artist </option>
                                        <option value="priests">Priests </option>
                                         
                                    </select>
                                </div>
                                
                            </div>
		                </div>
		                
		                <div class="form-group meetingyes">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Meeting Date & Time</label>
                                    <input type="datetime-local" name="meeting_time" id="meeting_time" class="form-control date_selection" />
                                </div>
                                <div class="col">
                                    <label>Enter Event Date</label>
                                    <input type="date" name="event_dates" id="event_dates" class="form-control" />
                                </div>
                            </div>
                            
                        </div>
		                
		                <div class="form-group meetingyes">

                            <div class="row">
                                <div class="col">
                                    <label>To Whom these lead should show to ? </label>
                                    <select id="package_type_meeting" name="package_type_meeting[]" class="form-control your-select-dropdown-class" onchange="showhideweddingtype()" multiple>
                                        <option value="">Choose...</option>
                                        <option value="wedding">Wedding Planner</option>
                                        <!--
                                        <option value="birthday">Birthday Planner</option>
                                       
                                        <option value="wedding decorators">Wedding Decorators</option>	
                                        
                                        <option value="makeup-artists">Makeup Artist</option>	
                                        <option value="photo&videographer">Photographer / Videographer</option>
                                        <option value="catering">Catering</option>
                                        <option value="flower-decorators">Flower Decorators</option>
                                        
                                         <option value="weddingvenue">Wedding Venue </option> 
                                        <option value="costumedesigner">Costume Designer </option> 
                                        <option value="jewellery">Jewellery </option> 
                                        -->
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Enter Event Category</label>
                                    <select id="event_category_meeting" name="event_category_meeting[]" class="form-control your-select-dropdown-class" multiple>
                                        <option value="In Person Meeting">In Person Meeting</option>
                                        <option value="1.29 lakh wedding package">1.29 lakh wedding package</option>
                                        <option value="1.69 lakh wedding package">1.69 lakh wedding package</option>
                                        <option value="Connect over call">Connect over call</option>
                                        <option value="Virtual Meeting">Virtual Meeting</option>
                                        
                                        <option value="Office Location">Office Location</option>
                                        <option value="Client Place">Client's Place</option>
                                    </select>
				                </div>
                            </div>
		                </div>
		                
		                
		                
		                
		                <div class="form-group" id="leadweddingplanner">
		                   <div class="row">
		                       <div class="col-md-12 addbgblue"> 
                                    <p> Wedding Planners</p>
                                </div>
                                <div class="col-md-6">
                                    <label>Enter description</label>
                                    <textarea class="form-control" rows="5" id="lead_description" name="lead_description"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Enter Event Category</label>
                                    <select id="event_category" name="event_category[]" class="form-control your-select-dropdown-class" multiple>
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
		                   </div>   
		                   
		                   <div class="row">
		                       <div class="col-md-6">
		                           <label>Enter Lead Type</label>
		                            <select id="lead_type" name="lead_type" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
		                       </div>
		                       
		                       <div class="col-md-6">
		                           <label>Enter Purchase Allowed</label>
		                           <input type="number" name="purchase_allowed" id="purchase_allowed" class="form-control" placeholder="Enter max purchases allowed"/>
		                       </div>
		                   </div>
		                </div>
		                
		                
		                <!--
		                 <div class="form-group" id="leadmakeup">
                            <div class="row">
                                
                                 <div class="col-md-12 addbgblue"> 
                                    <p> Makeup Artists</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Makeup Artists</label>
                                    <textarea class="form-control" rows="5" id="lead_description_makeup" name="lead_description_makeup"></textarea>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category</label>
                                        <select id="event_category_makeup" name="event_category_makeup[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category</label>
                                        <select id="event_category_meeting_makeup" name="event_category_meeting_makeup[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for wedding planners</label>
                                    <input type="number" name="purchase_allowed_makeup" id="purchase_allowed_makeup" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_makeup" name="lead_type_makeup" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
                                 
                            </div>
                         </div>
		                -->
		                
		                <div class="form-group" id="leadphotovideographer">
                            <div class="row">
                                
                                
                                 <div class="col-md-12 addbgblue"> 
                                    <p>Photo & Videographer</p>
                                </div>
                                
                                
                                 <div class="col-md-6">
                                        <label>Enter description for Photo & Videographer</label>
                                        <textarea class="form-control" rows="5" id="lead_description_photovideo" name="lead_description_photovideo"></textarea>
                                  </div>
                                  
                                  
                                  
                                  <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Photo & Videographer</label>
                                        <select id="event_category_photo" name="event_category_photo[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Photo & Videographer</label>
                                        <select id="event_category_meeting_photo" name="event_category_meeting_photo[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Photo & Videographer</label>
                                    <input type="number" name="purchase_allowed_photo" id="purchase_allowed_photo" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                  
                                  
                                  <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_photovideo" name="lead_type_photovideo" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
				                
                            </div>
                        </div>
		                
		                <div class="form-group" id="leadcatering">
                            <div class="row">
                                
                                
                                <div class="col-md-12 addbgblue"> 
                                    <p>Caterers</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Caterers</label>
                                    <textarea class="form-control" rows="5" id="lead_description_catering" name="lead_description_catering"></textarea>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Caterers</label>
                                        <select id="event_category_catering" name="event_category_catering[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Caterers</label>
                                        <select id="event_category_meeting_catering" name="event_category_meeting_catering[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Caterers</label>
                                    <input type="number" name="purchase_allowed_catering" id="purchase_allowed_catering" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_catering" name="lead_type_catering" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
                                 
                                 
                            </div>
                        </div>
                        
                        <div class="form-group" id="leadflowers">
                            <div class="row">
                                
                                <div class="col-md-12 addbgblue"> 
                                    <p>Flower Decorators</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Flower Decorators</label>
                                    <textarea class="form-control" rows="5" id="lead_description_flower" name="lead_description_flower"></textarea>
                                 </div>
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Flower Decorators</label>
                                        <select id="event_category_flower" name="event_category_flower[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Flower Decorators</label>
                                        <select id="event_category_meeting_flower" name="event_category_meeting_flower[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Flower Decorators</label>
                                    <input type="number" name="purchase_allowed_flower" id="purchase_allowed_flower" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_flower" name="lead_type_flower" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
				                
                            </div>
                        </div>
                        
                        <div class="form-group" id="leadmehendi">
                            <div class="row">
                                
                                
                                 <div class="col-md-12 addbgblue"> 
                                    <p>Mehendi Artists</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Mehendi Artists</label>
                                    <textarea class="form-control" rows="5" id="lead_description_mehendi" name="lead_description_mehendi"></textarea>
                                 </div>
                                 
                                 
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Mehendi Artists</label>
                                        <select id="event_category_mehendi" name="event_category_mehendi[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Mehendi Artists</label>
                                        <select id="event_category_meeting_mehendi" name="event_category_meeting_mehendi[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Mehendi Artists</label>
                                    <input type="number" name="purchase_allowed_mehendi" id="purchase_allowed_mehendi" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_mehendi" name="lead_type_mehendi" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
                                 
                            </div>
                        </div>
                        
                        
                        <div class="form-group" id="leadpriests">
                            <div class="row">
                                
                                
                                <div class="col-md-12 addbgblue"> 
                                    <p>Priests</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Priests</label>
                                    <textarea class="form-control" rows="5" id="lead_description_priests" name="lead_description_priests"></textarea>
                                 </div>
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Priests</label>
                                        <select id="event_category_priests" name="event_category_priests[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Priests</label>
                                        <select id="event_category_meeting_priests" name="event_category_meeting_priests[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                  <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Priests</label>
                                    <input type="number" name="purchase_allowed_priests" id="purchase_allowed_priests" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_priest" name="lead_type_priest" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
                                 
                            </div>
                        </div>
                        
                        
                        <div class="form-group" id="leaddj">
                            <div class="row">
                                
                                
                                 <div class="col-md-12 addbgblue"> 
                                    <p>DJ</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for DJ</label>
                                    <textarea class="form-control" rows="5" id="lead_description_dj" name="lead_description_dj"></textarea>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for DJ</label>
                                        <select id="event_category_dj" name="event_category_dj[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for DJ</label>
                                        <select id="event_category_meeting_dj" name="event_category_meeting_dj[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for DJ</label>
                                    <input type="number" name="purchase_allowed_dj" id="purchase_allowed_dj" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_dj" name="lead_type_dj" class="your-select-dropdown-class form-control">
<option value="">Choose...</option>
<option value="Free">Free</option>
<option value="No deduction">0 (Rs. 0)</option>
<option value="75">75 (Rs. 75)</option>
<option value="active">100 (Rs. 100)</option>
<option value="125">125 (Rs. 125)</option>
<option value="super active">150 (Rs. 150)</option>
<option value="175">175 (Rs. 175)</option>
<option value="Premium">Gold (Rs. 200)</option>
<option value="225">225 (Rs. 225)</option>
<option value="hot">250 (Rs. 250)</option>
<option value="275">275 (Rs. 275)</option>
<option value="300">300 (Rs. 300)</option>
<option value="325">325 (Rs. 325)</option>
<option value="platinum">350 (Rs. 350)</option>
<option value="375">375 (Rs. 375)</option>
<option value="400">400 (Rs. 400)</option>
<option value="425">425 (Rs. 425)</option>
<option value="450">450 (Rs. 450)</option>
<option value="475">475 (Rs. 475)</option>
<option value="Ultra Premium">500 (Rs. 500)</option>
<option value="525">525 (Rs. 525)</option>
<option value="550">550 (Rs. 550)</option>
<option value="575">575 (Rs. 575)</option>
<option value="600">600 (Rs. 600)</option>
<option value="625">625 (Rs. 625)</option>
<option value="650">650 (Rs. 650)</option>
<option value="675">675 (Rs. 675)</option>
<option value="700">700 (Rs. 700)</option>
<option value="725">725 (Rs. 725)</option>
<option value="diamond">750 (Rs. 750)</option>
<option value="775">775 (Rs. 775)</option>
<option value="800">800 (Rs. 800)</option>
<option value="825">825 (Rs. 825)</option>
<option value="850">850 (Rs. 850)</option>
<option value="875">875 (Rs. 875)</option>
<option value="900">900 (Rs. 900)</option>
<option value="925">925 (Rs. 925)</option>
<option value="950">950 (Rs. 950)</option>
<option value="975">975 (Rs. 975)</option>
<option value="Overwhelming">1000 (Rs. 1000)</option>
<option value="1025">1025 (Rs. 1025)</option>
<option value="1050">1050 (Rs. 1050)</option>
<option value="1075">1075 (Rs. 1075)</option>
<option value="1100">1100 (Rs. 1100)</option>
<option value="1125">1125 (Rs. 1125)</option>
<option value="1150">1150 (Rs. 1150)</option>
<option value="1175">1175 (Rs. 1175)</option>
<option value="1200">1200 (Rs. 1200)</option>
<option value="1225">1225 (Rs. 1225)</option>
<option value="1250">1250 (Rs. 1250)</option>
<option value="1275">1275 (Rs. 1275)</option>
<option value="1300">1300 (Rs. 1300)</option>
<option value="1325">1325 (Rs. 1325)</option>
<option value="1350">1350 (Rs. 1350)</option>
<option value="1375">1375 (Rs. 1375)</option>
<option value="1400">1400 (Rs. 1400)</option>
<option value="1425">1425 (Rs. 1425)</option>
<option value="1450">1450 (Rs. 1450)</option>
<option value="1475">1475 (Rs. 1475)</option>
<option value="1500">1500 (Rs. 1500)</option>
<option value="1525">1525 (Rs. 1525)</option>
<option value="1550">1550 (Rs. 1550)</option>
<option value="1575">1575 (Rs. 1575)</option>
<option value="1600">1600 (Rs. 1600)</option>
<option value="1625">1625 (Rs. 1625)</option>
<option value="1650">1650 (Rs. 1650)</option>
<option value="1675">1675 (Rs. 1675)</option>
<option value="1700">1700 (Rs. 1700)</option>
<option value="1725">1725 (Rs. 1725)</option>
<option value="1750">1750 (Rs. 1750)</option>
<option value="1775">1775 (Rs. 1775)</option>
<option value="1800">1800 (Rs. 1800)</option>
<option value="1825">1825 (Rs. 1825)</option>
<option value="1850">1850 (Rs. 1850)</option>
<option value="1875">1875 (Rs. 1875)</option>
<option value="1900">1900 (Rs. 1900)</option>
<option value="1925">1925 (Rs. 1925)</option>
<option value="1950">1950 (Rs. 1950)</option>
<option value="1975">1975 (Rs. 1975)</option>
<option value="2000">2000 (Rs. 2000)</option>
</select> 
				                </div>
                                 
                            </div>
                        </div>
		                
			            <div class="form-group">

                            <div class="row">
                                
                                <!--
                                <div class="col">
                                    <label>Enter City Name</label>
                                    <select id="city" name="city" class="form-control">
                                        <option value="">Choose...</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                -->
                                
                                 <div class="col">
                                       
                                    <label>Choose State</label> 
                                    <select id="state" name="state" class="form-control your-select-dropdown-class">    
                                        <option value="0">Choose...</option>
                                         
                                        <!--
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->statename }}</option>
                                            @endforeach
                                        -->
                                        
                                    </select>
                                    
                                    <div class="addtop statechooseshow" style="display:none">
                                        <label> State Chosen Before</label>    
                                        <input type="text" name="statechoseselectd" id="statechoseselectd" class="form-control" readonly>
                                     </div>
                                     
                                </div>
                                
                                 <div class="col">
                                    <label>Choose City to Send</label> 
                                    <select id="city" name="city[]" class="form-control your-select-dropdown-class" multiple>
                                           
                                    </select>
                                    
                                    <div class="addtop cityshow" style="display:none">
                                        <label> City Chosen Before</label>    
                                        <input type="text" name="cityselectd" id="cityselectd" class="form-control" readonly>
                                     </div>
                                </div>
                                
                                <!--
                                    <div class="col">
                                        <label>State Capital</label>
                                        <select id="statecapital" name="statecapital" class="form-control">
                                                <option value="">Choose...</option>
                                             
                                        </select>
                                        
                                        <div class="addtop statecapshow" style="display:none">
                                            <label> State Capital Chosen Before </label>    
                                            <input type="text" name="statecapitalchosen" id="statecapitalchosen" class="form-control" readonly>
                                        </div> 
                                    </div>
                                -->
                            </div>
                            
                        </div>
                        
                        <div class="form-group">

                            <div class="row">
                                
                                <div class="col">
                                    <label>Enter Location</label>
                                    <input type="text" name="event_location" id="event_location" class="form-control" placeholder="Enter Event Location"/>
                                </div>
                                
                                <div class="col">
                                    <label>Enter Status</label>
                                    <select id="status" name="status" class="form-control" readonly>
                                        <option value="">Choose...</option>
                                        <option value="purchased">Purchased</option>
                                        <option value="not-purchased" selected>Not-Purchased</option>
                                    </select>
                                </div>
                                
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group" id="weddingtype">

                            <div class="row">
                                
                                <div class="col">
                                    <label>Enter Expiry Date</label>
                                    <input type="date" name="expiry_date" id="expiry_date" class="form-control" />
                                </div>
                                
                                <div class="col">
                                    <label>Wedding Type</label>
                                    <select id="wedding_type" name="wedding_type" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="christian">Christian</option>
                                        <option value="muslim">Muslim</option>
                                        <option value="punjabi">Punjabi</option>
                                        <option value="parsi">Parsi</option>
                                        <option value="jain">Jain</option>
                                        <option value="gujarati">Gujarati</option>
                                        <option value="bengali">Bengali</option>
                                        <option value="marwari">Marwari</option>
                                        <option value="kerala">Kerala</option>
                                        <option value="bhojpuri">Bhojpuri</option>
                                        <option value="coorg">Coorg</option>
                                    </select>
                                </div>
                                
                                 
                                
                            </div>
                            
                        </div>
                        
                       
                        
                        <div class="form-group meetingyes">
                            <div class="row">
                                <label>Enter Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Client Address"/>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="modal-footer justify-content-between">
                        <input type="hidden" name="leads_id" id="leads_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                        <input type="hidden" name="item_lead_type" id="item_lead_type" value="" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
       <!-- /.modal -->
      

@endsection

@push('js')
<script src="{{ asset('/dist/js/bootstrap-multiselect.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ asset('/dist/js/select2.min.js')}}"></script>

<script type="text/javascript">

    var route = "{{ request()->route()->getName() }}";
    
    if(route == 'admin.general_leads.index')
    {
        var url_getdata = "{{ route('admin.general_leads.getdata') }}";
        var url_store = "{{ route('admin.general_leads.store') }}";
        var url_update = "{{ route('admin.general_leads.update') }}";
        var url_fetchdata = "{{ route('admin.general_leads.fetchdata') }}";
        var url_removedata = "{{ route('admin.general_leads.removedata') }}";
        var url_massremove = "{{ route('admin.general_leads.massremove') }}";
        var url_export = "{{ route('admin.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('admin.general_leads.showhotdata') }}";
        
        var userdatatype = 'admin';
    }
    else  if(route == 'mainadmin.general_leads.index')
    {
        var url_getdata = "{{ route('mainadmin.general_leads.getdataadmin') }}";
        var url_store = "{{ route('mainadmin.general_leads.store') }}";
        var url_update = "{{ route('mainadmin.general_leads.update') }}";
        var url_fetchdata = "{{ route('mainadmin.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('mainadmin.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('mainadmin.general_leads.showhotdata') }}";
        
        var userdatatype = 'mainadmin';
    }
   
    else if(route == 'leadssowmya.general_leads.index')
    {
        var url_getdata = "{{ route('leadssowmya.general_leads.getdata1admin') }}";
        var url_store = "{{ route('leadssowmya.general_leads.store') }}";
        var url_update = "{{ route('leadssowmya.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadssowmya.general_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadssowmya.general_leads.removedata') }}";
        var url_massremove = "{{ route('leadssowmya.general_leads.massremove') }}";
        var url_export = "{{ route('leadssowmya.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadssowmya.general_leads.showhotdata') }}";
        
        var userdatatype = 'leadssowmya';
    }
    else if(route == 'leadsarchana.general_leads.index')
    {
        var url_getdata = "{{ route('leadsarchana.general_leads.getdata1admin') }}";
        var url_store = "{{ route('leadsarchana.general_leads.store') }}";
        var url_update = "{{ route('leadsarchana.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadsarchana.general_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsarchana.general_leads.removedata') }}";
        var url_massremove = "{{ route('leadsarchana.general_leads.massremove') }}";
        var url_export = "{{ route('leadsarchana.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadsarchana.general_leads.showhotdata') }}";
        
        var userdatatype = 'leadsarchana';
    }
       
    else if(route == 'leadsharsha.general_leads.index')
    {
        var url_getdata = "{{ route('leadsharsha.general_leads.getdata1harsha') }}";
        var url_store = "{{ route('leadsharsha.general_leads.store') }}";
        var url_update = "{{ route('leadsharsha.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadsharsha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadsharsha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadsharsha.general_leads.showhotdataharsha') }}";
        
        var userdatatype = 'leadsharsha';
    }
    else if(route == 'leadsanil.general_leads.index')
    {
        var url_getdata = "{{ route('leadsanil.general_leads.getdataanil') }}";
        var url_store = "{{ route('leadsanil.general_leads.store') }}";
        var url_update = "{{ route('leadsanil.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadsanil.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadsanil.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadsanil.general_leads.showhotdata') }}";
        
        var userdatatype = 'leadsanil';
    }
    else if(route == 'businessonboard.general_leads.index')
    {
        var url_getdata = "{{ route('businessonboard.general_leads.getdataanil') }}";
        var url_store = "{{ route('businessonboard.general_leads.store') }}";
        var url_update = "{{ route('businessonboard.general_leads.update') }}";
        var url_fetchdata = "{{ route('businessonboard.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('businessonboard.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('businessonboard.general_leads.showhotdata') }}";
        
        var userdatatype = 'businessonboard';
    }
    else if(route == 'leadskavitha.general_leads.index')
    {
        var url_getdata = "{{ route('leadskavitha.general_leads.getdata1kavitha') }}";
        var url_store = "{{ route('leadskavitha.general_leads.store') }}";
        var url_update = "{{ route('leadskavitha.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadskavitha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadskavitha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadskavitha.general_leads.showhotdatakavitha') }}";
        
        var userdatatype = 'leadskavitha';
    }
    else if(route == 'b2pjinu.general_leads.index')
    {
        var url_getdata = "{{ route('b2pjinu.general_leads.getdata1jinu') }}";
        var url_store = "{{ route('b2pjinu.general_leads.store') }}";
        var url_update = "{{ route('b2pjinu.general_leads.update') }}";
        var url_fetchdata = "{{ route('b2pjinu.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('b2pjinu.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('b2pjinu.general_leads.showhotdatajinu') }}";
        
        var userdatatype = 'b2pjinu';
    }
    else if(route == 'tellewc.general_leads.index')
    {
        var url_getdata = "{{ route('tellewc.general_leads.getdata1harsha') }}";
        var url_store = "{{ route('tellewc.general_leads.store') }}";
        var url_update = "{{ route('tellewc.general_leads.update') }}";
        var url_fetchdata = "{{ route('tellewc.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('tellewc.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('tellewc.general_leads.showhotdataharsha') }}";
        
        var userdatatype = 'tellewc';
    }
    else if(route == 'leadspooja.general_leads.index')
    {
        var url_getdata = "{{ route('leadspooja.general_leads.getdata1pooja') }}";
        var url_store = "{{ route('leadspooja.general_leads.store') }}";
        var url_update = "{{ route('leadspooja.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadspooja.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadspooja.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadspooja.general_leads.showhotdatapooja') }}";
        
        var userdatatype = 'leadspooja';
    }
    else if(route == 'leadsrakshitha.general_leads.index')
    {
        var url_getdata = "{{ route('leadsrakshitha.general_leads.getdata1rakshitha') }}";
        var url_store = "{{ route('leadsrakshitha.general_leads.store') }}";
        var url_update = "{{ route('leadsrakshitha.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadsrakshitha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadsrakshitha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadsrakshitha.general_leads.showhotdatarakshitha') }}";
        
        var userdatatype = 'leadsrakshitha';
    }
    else if(route == 'leadssujatha.general_leads.index')
    {
        var url_getdata = "{{ route('leadssujatha.general_leads.getdata1suji') }}";
        var url_store = "{{ route('leadssujatha.general_leads.store') }}";
        var url_update = "{{ route('leadssujatha.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadssujatha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadssujatha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadssujatha.general_leads.showhotdatasuji') }}";
        
        var userdatatype = 'leadssujatha';
    }
    else if(route == 'leadsvibha.general_leads.index')
    {
        var url_getdata = "{{ route('leadsvibha.general_leads.getdata1vibha') }}";
        var url_store = "{{ route('leadsvibha.general_leads.store') }}";
        var url_update = "{{ route('leadsvibha.general_leads.update') }}";
        var url_fetchdata = "{{ route('leadsvibha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('leadsvibha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('leadsvibha.general_leads.showhotdatavibha') }}";
        
        var userdatatype = 'leadsvibha';
    }
     else if(route == 'businessraksha.general_leads.index')
    {
        var url_getdata = "{{ route('businessraksha.general_leads.getdataraksha') }}";
        var url_store = "{{ route('businessraksha.general_leads.store') }}";
        var url_update = "{{ route('businessraksha.general_leads.update') }}";
        var url_fetchdata = "{{ route('businessraksha.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('businessraksha.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('businessraksha.general_leads.showhotdata') }}";
        
        var userdatatype = 'businessraksha';
    }
    
    
    else if(route == 'subscriptionuserthree.general_leads.index')
    {
        var url_getdata = "{{ route('subscriptionuserthree.general_leads.getdata1subscriptionuserthree') }}";
        var url_store = "{{ route('subscriptionuserthree.general_leads.store') }}";
        var url_update = "{{ route('subscriptionuserthree.general_leads.update') }}";
        var url_fetchdata = "{{ route('subscriptionuserthree.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('subscriptionuserthree.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('subscriptionuserthree.general_leads.showhotdatasubscriptionuserthree') }}";
        
        var userdatatype = 'subscriptionuserthree';
    }
    
    
    else
    {
        var url_getdata = "{{ route('author.general_leads.getdata') }}";
        var url_store = "{{ route('author.general_leads.store') }}";
        var url_update = "{{ route('author.general_leads.update') }}";
        var url_fetchdata = "{{ route('author.general_leads.fetchdata') }}"; 
        var url_export = "{{ route('author.general_leads.export') }}";
        
        var url_showhotdata = "{{ route('author.general_leads.showhotdata') }}";
        
        var userdatatype = 'author';
    }
    
    $(document).ready(function() {
        
        /*
        $('#event_category').multiselect(
        {
            nonSelectedText: 'Select Category',
            enableFiltering: false,
            enableCaseInsensitiveFiltering: false,
            buttonWidth: '90%',
            includeSelectAllOption: true,
        });
        */
        
        loadTables();

        $('#add_data').click(function(){
            $('#leadsModal').modal('show');
            $('#leads_form')[0].reset();
            
            //$('#event_category').multiselect('deselectAll', false); 
            //$('#event_category').multiselect('refresh');
            
            $('#form_output').html('');
            $('#button_action').val('insert');
            $('#action').val('Add');
            $('#package_type').prop('disabled',false);
            $('#package_type_meeting').prop('disabled',false);
            
            checkdetails('data');
            
            resetinlineform();
        });
        
        $('#add_meeting').click(function(){
            $('#leadsModal').modal('show');
            $('#leads_form')[0].reset();
            
            //$('#event_category').multiselect('deselectAll', false); 
            //$('#event_category').multiselect('refresh');
            
            $('#form_output').html('');
            $('#button_action').val('insert');
            $('#action').val('Add');
            $('#package_type').prop('disabled',false);
            $('#package_type_meeting').prop('disabled',false);
            
            checkdetails('meeting');
            
            resetinlineform();
        });
        
        function checkdetails(value)
        {
            if(value == "data")
            {
                $('.meetingyes').hide();
                $('.meetingno').show();
                $('#item_lead_type').val('simple');
            }
            else if(value == "meeting")
            {
                $('.meetingyes').show();
                $('.meetingno').hide();
                $('#item_lead_type').val('meeting');
            }
        }

        $('#leads_form').on('submit', function(event){
            event.preventDefault();

            console.log($('#action').val());
            
            if($('#action').val() == 'Add')
            {
                $.ajax
                ({
                    //url:"{{ route('admin.leads.store') }}",
                    url: url_store,
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    beforeSend: function() {
                        $('#action').val('Wait');
                        $('#action').prop('disabled',true);
                    },
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#store_image').html('');
                            $('#leads_form')[0].reset();
                            //$('#leads_table').DataTable().ajax.reload();
                           
                            //$('#event_category').multiselect('deselectAll', false); 
                            //$('#event_category').multiselect('refresh');
                            
                            $("#leads_table").dataTable().fnDestroy();
                            loadTables();
                            
                            //setTimeout(function(){ $('#leadsModal').modal('hide'); }, 2500);
                        }
                        $('#form_output').html(html);                        
                    },
                    complete: function() {
                        $('#action').val('Add');
                        $('#action').prop('disabled',false);
                    }
                 });
            }

            if($('#action').val() == "Edit")
            {
                
                    
                
                   
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                     
                    console.log("city"+city);
                    
                    
                     let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                    
                    
                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    
                    let item_lead_type                              = $("#item_lead_type").val();
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    
                    if(status.trim() == '' || status.trim() == undefined)
                    {
                		alert('Please enter status');
                		$('#status').focus();
                	    return false;
                    }
                    else if(state  == '' || state  == undefined)
                    {
                		alert('Please enter state');
                		$('#state').focus();
                	    return false;
                    }
                    else if(city == '' || city == undefined)
                    {
                		alert('Please enter State & city');
                		$('#city').focus();
                	    return false;
                    }
                    else
                    {
                        let myVar = 'hello world';
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine
                        
                        /*console.log(arrs);*/
                        
                        let chkstr1 = "wedding";
                        //let chkstr2 = "makeup-artists";
                        let chkstr3 = "photo&videographer";
                        
                        if (arrs.includes(chkstr1))
                            {
                                
                                
                                if(lead_description.trim() == '' || lead_description.trim() == undefined)
                                {
                            		alert('Please enter lead description for wedding planner');
                            		$('#lead_description').focus();
                            	    return false;
                                }
                                 
                                else if(purchase_allowed.trim() == '' || purchase_allowed.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for wedding planner');
                            		$('#purchase_allowed').focus();
                            	    return false;
                                }
                                else if(lead_type.trim() == '' || lead_type.trim() == undefined)
                                {
                            		alert('Please enter lead type for wedding planner');
                            		$('#lead_type').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk3();
                                }
                            }
                        else 
                            {
                                chk3();
                            }
                    }
                    
             }
             
             
             function chk2()
                {
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                    
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();

                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val(); 
                    
                    let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine
                        /*
                            let chkstr2 = "makeup-artists";
                            
                            if (arrs.includes(chkstr2))
                            {
                                
                                
                                if(lead_description_makeup.trim() == '' || lead_description_makeup.trim() == undefined)
                                {
                                    alert('Please enter lead description for makeup artist');
                                    $('#lead_description_makeup').focus();
                                    return false;
                                }
                                
                                else if(purchase_allowed.trim() == '' || purchase_allowed.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for makeup artists');
                            		$('#purchase_allowed_makeup').focus();
                            	    return false;
                                }
                                else if(lead_type_makeup.trim() == '' || lead_type_makeup.trim() == undefined)
                                    {
                                		alert('Please enter lead type for makeup artists');
                                		$('#lead_type_makeup').focus();
                                	    return false;
                                    } 
                                else 
                                {
                                    chk3();
                                }
                            }
                            else
                            {
                                chk3();
                            }
                        */
                }
                
             function chk3()
                {
                     
                    
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr3 = "photo&videographer";
                        
                        
                        if (arrs.includes(chkstr3))
                            {
                                if(lead_description_photovideo.trim() == '' || lead_description_photovideo.trim() == undefined)
                                {
                                    alert('Please enter lead description for photo & videographer');
                                    $('#lead_description_photovideo').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_photo == '' || event_category_photo == undefined)
                                {
                            		alert('Please enter lead requirement for photo & videographer');
                            		$('#event_category_photo').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_photo.trim() == '' || purchase_allowed_photo.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for photo & videographer');
                            		$('#purchase_allowed_photo').focus();
                            	    return false;
                                }
                                else if(lead_type_photovideo.trim() == '' || lead_type_photovideo.trim() == undefined)
                                {
                            		alert('Please enter lead type for photo & videographer');
                            		$('#lead_type_photovideo').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk4();
                                }
                            }
                        else
                        {
                            chk4();
                        }
                }
                
            function chk4()
                {
                     
                     
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr4 = "catering";
                        
                        
                        if (arrs.includes(chkstr4))
                            {
                                if(lead_description_catering.trim() == '' || lead_description_catering.trim() == undefined)
                                {
                                    alert('Please enter lead description for caterers');
                                    $('#lead_description_catering').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_catering == '' || event_category_catering == undefined)
                                {
                            		alert('Please enter lead requirement for caterers');
                            		$('#event_category_catering').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_catering.trim() == '' || purchase_allowed_catering.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for caterers');
                            		$('#purchase_allowed_catering').focus();
                            	    return false;
                                }
                                else if(lead_type_catering.trim() == '' || lead_type_catering.trim() == undefined)
                                {
                            		alert('Please enter lead type for caterers');
                            		$('#lead_type_catering').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk5();
                                }
                            }
                        else
                        {
                            chk5();
                        }
                }
                
                
            function chk5()
                {
                     
                    
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();



                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr5 = "flower-decorators";
                        
                        
                        if (arrs.includes(chkstr5))
                            {
                                if(lead_description_flower.trim() == '' || lead_description_flower.trim() == undefined)
                                {
                                    alert('Please enter lead description for flower decorators');
                                    $('#lead_description_flower').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_flower == '' || event_category_flower == undefined)
                                {
                            		alert('Please enter lead requirement for flower decorators');
                            		$('#event_category_flower').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_flower.trim() == '' || purchase_allowed_flower.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for flower decorators');
                            		$('#purchase_allowed_flower').focus();
                            	    return false;
                                }
                                else if(lead_type_flower.trim() == '' || lead_type_flower.trim() == undefined)
                                {
                            		alert('Please enter lead type for flower decorators');
                            		$('#lead_type_flower').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk6();
                                }
                            }
                        else
                        {
                            chk6();
                        }
                }
                
                
            function chk6()
                {
                     
                     
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();



                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr6 = "mehendi artist";
                        
                        
                        if (arrs.includes(chkstr6))
                            {
                                if(lead_description_mehendi.trim() == '' || lead_description_mehendi.trim() == undefined)
                                {
                                    alert('Please enter lead description for mehendi artist');
                                    $('#lead_description_mehendi').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_mehendi == '' || event_category_mehendi == undefined)
                                {
                            		alert('Please enter lead requirement for mehendi artist');
                            		$('#event_category_mehendi').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_mehendi.trim() == '' || purchase_allowed_mehendi.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for mehendi artist');
                            		$('#purchase_allowed_mehendi').focus();
                            	    return false;
                                } 
                                else if(lead_type_mehendi.trim() == '' || lead_type_mehendi.trim() == undefined)
                                {
                            		alert('Please enter lead type for mehendi artist');
                            		$('#lead_type_mehendi').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk7();
                                }
                            }
                        else
                        {
                            chk7();
                        }
                }
                
                
            function chk7()
                {
                     
                    
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val(); 
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr7 = "priests";
                        
                        
                        if (arrs.includes(chkstr7))
                            {
                                if(lead_description_priests.trim() == '' || lead_description_priests.trim() == undefined)
                                {
                                    alert('Please enter lead description for priests');
                                    $('#lead_description_priests').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_priests == '' || event_category_priests == undefined)
                                {
                            		alert('Please enter lead requirement for priests');
                            		$('#event_category_priests').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_priests.trim() == '' || purchase_allowed_priests.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for priests');
                            		$('#purchase_allowed_priests').focus();
                            	    return false;
                                } 
                                else if(lead_type_priest.trim() == '' || lead_type_priest.trim() == undefined)
                                {
                            		alert('Please enter lead type for priests');
                            		$('#lead_type_priest').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk8();
                                }
                            }
                        else
                        {
                            chk8();
                        }
                }
                
            function chk8()
                {
                     
                     
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let package_type = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                    
                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();


                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr8 = "dj";
                        
                        
                        if (arrs.includes(chkstr8))
                            {
                                if(lead_description_dj.trim() == '' || lead_description_dj.trim() == undefined)
                                {
                                    alert('Please enter lead description for dj');
                                    $('#lead_description_dj').focus();
                                    return false;
                                }
                                /*
                                else if(event_category_dj == '' || event_category_dj == undefined)
                                {
                            		alert('Please enter lead requirement for dj');
                            		$('#event_category_dj').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_dj.trim() == '' || purchase_allowed_dj.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for dj');
                            		$('#purchase_allowed_dj').focus();
                            	    return false;
                                } 
                                else if(lead_type_dj.trim() == '' || lead_type_dj.trim() == undefined)
                                {
                            		alert('Please enter lead type for dj');
                            		$('#lead_type_dj').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk9();
                                }
                            }
                        else
                        {
                            chk9();
                        }
                }
                
                
            function chk9()
                {
                    
                    
                    let name                        = $("#name").val();
                    let email                       = $("#email").val();
                    let mobile                      = $("#mobile").val();
                    /*
                    let event_category              = $("#event_category").val();
                    let decorations_category        = $("#decorations_category").val();
                    let wedding_budget              = $("#wedding_budget option:selected").val(); 
                    let guest_budget                = $("#guest_budget option:selected").val();
                    let city_location               = $("#city_location").val();
                    */
                    
                    let event_location              = $("#event_location").val();
                     
                    let venue_group                 = $("#venue_group option:selected").val();
                    let venuenamedetails            = $("#venuenamedetails").val();
                    let venue_allow_outsidevendors  = $("#venue_allow_outsidevendors option:selected").val();
                    let weddingdate_fixed           = $("#weddingdate_fixed option:selected").val();
                    let event_date                  = $("#event_date").val(); 
                    let package_type       = $("#package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                   // let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                     
                    let status                      = $("#status option:selected").val();
                    let state                       = $("#state option:selected").val();
                    
                    
                    let city                        = $("#city").val();
                     
                    let executive_name              = $("#executive_name").val();
                    
                     
                    let wedding_type                = $("#wedding_type option:selected").val();
                    let lead_time                   = $("#lead_time").val();
                    let expiry_date                 = $("#expiry_date").val();
                    let audio_link                  = $("#audio_link").val();
                     
                    
                    let lead_source                 = $("#lead_source option:selected").val(); 
                    
                    
                    let leads_id                    = $("#leads_id").val();
                    let item_lead_type              = $("#item_lead_type").val(); 
                    
                    
                    
                    let event_category               = $("#event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let event_category_makeup        = $("#event_category_makeup").val();
                   //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let event_category_photo         = $("#event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let event_category_catering      = $("#event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let event_category_flower        = $("#event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let event_category_mehendi       = $("#event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let event_category_priests       = $("#event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let event_category_dj            = $("#event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                     
                    
                    let event_category_meeting             = $("#event_category_meeting").val();
                    
                    //let event_category_meeting_makeup      = $("#event_category_meeting_makeup").val();
                    let event_category_meeting_photo       = $("#event_category_meeting_photo").val();
                    let event_category_meeting_catering    = $("#event_category_meeting_catering").val();
                    let event_category_meeting_flower      = $("#event_category_meeting_flower").val();
                    let event_category_meeting_mehendi     = $("#event_category_meeting_mehendi").val();
                    let event_category_meeting_priests     = $("#event_category_meeting_priests").val();
                    let event_category_meeting_dj          = $("#event_category_meeting_dj").val();
                    
                    
                    let meeting_time = $("#meeting_time").val();
                    
                    let meeting_expiry_date = $("#meeting_expiry_date").val();
                    
                    let address = $("#address").val();
                    
                    let lead_type                                   = $("#lead_type option:selected").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup option:selected").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo option:selected").val(); 
                    let lead_type_catering                          = $("#lead_type_catering option:selected").val(); 
                    let lead_type_flower                            = $("#lead_type_flower option:selected").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi option:selected").val(); 
                    let lead_type_priest                            = $("#lead_type_priest option:selected").val(); 
                    let lead_type_dj                                = $("#lead_type_dj option:selected").val();  
                    
                    
                    
                    let decorations_category        = "";
                    let wedding_budget              = "";
                    let guest_budget                = "";
                    let city_location               = "";
                     
                    
                    
                    let form_data = new FormData();
        
                    form_data.append('name', name);
                    form_data.append('email', email);
                    form_data.append('mobile', mobile);
                    form_data.append('event_category', event_category);
                    form_data.append('decorations_category', decorations_category);
                    form_data.append('wedding_budget', wedding_budget);
                    form_data.append('guest_budget', guest_budget);
                    
                    
                    form_data.append('city', city);
                   
                    
                    
                    form_data.append('city_location', city_location);
                    form_data.append('event_location', event_location);
                    form_data.append('venue_group', venue_group);
                    form_data.append('venuenamedetails', venuenamedetails);
                    form_data.append('venue_allow_outsidevendors', venue_allow_outsidevendors);
                    form_data.append('weddingdate_fixed', weddingdate_fixed);
                    form_data.append('event_date', event_date);
                    
                    form_data.append('package_type', package_type);
                    
                    form_data.append('lead_description', lead_description);
                    //form_data.append('lead_description_makeup', lead_description_makeup);
                    form_data.append('lead_description_photovideo', lead_description_photovideo);
                    form_data.append('lead_description_catering', lead_description_catering);
                    form_data.append('lead_description_flower', lead_description_flower);
                    form_data.append('lead_description_mehendi', lead_description_mehendi);
                    
                    form_data.append('lead_description_priests', lead_description_priests);
                    form_data.append('lead_description_dj', lead_description_dj);
                    form_data.append('purchase_allowed', purchase_allowed);
                    form_data.append('status', status);
                    
                    form_data.append('state', state);
                    form_data.append('city', city);
                    form_data.append('event_category', event_category);
                    form_data.append('executive_name', executive_name);
                    form_data.append('wedding_type', wedding_type);
                    form_data.append('lead_time', lead_time);
                    
                    form_data.append('expiry_date', expiry_date);
                    form_data.append('audio_link', audio_link);
                    form_data.append('lead_source', lead_source); 
                    
                    form_data.append('leads_id', leads_id); 
                    form_data.append('item_lead_type', item_lead_type); 
                    
                    
                    //form_data.append('event_category_makeup', event_category_makeup); 
                    //form_data.append('purchase_allowed_makeup', purchase_allowed_makeup); 
                    form_data.append('event_category_photo', event_category_photo); 
                    form_data.append('purchase_allowed_photo', purchase_allowed_photo); 
                    form_data.append('event_category_catering', event_category_catering); 
                    form_data.append('purchase_allowed_catering', purchase_allowed_catering); 
                    form_data.append('event_category_flower', event_category_flower); 
                    form_data.append('purchase_allowed_flower', purchase_allowed_flower); 
                    form_data.append('event_category_mehendi', event_category_mehendi); 
                    form_data.append('purchase_allowed_mehendi', purchase_allowed_mehendi); 
                    form_data.append('event_category_priests', event_category_priests); 
                    form_data.append('purchase_allowed_priests', purchase_allowed_priests); 
                    form_data.append('event_category_dj', event_category_dj); 
                    form_data.append('purchase_allowed_dj', purchase_allowed_dj); 
                     
                     
                     
                    form_data.append('event_category_meeting', event_category_meeting); 
                    //form_data.append('event_category_meeting_makeup', event_category_meeting_makeup); 
                    form_data.append('event_category_meeting_photo', event_category_meeting_photo); 
                    form_data.append('event_category_meeting_catering', event_category_meeting_catering); 
                    form_data.append('event_category_meeting_flower', event_category_meeting_flower); 
                    form_data.append('event_category_meeting_mehendi', event_category_meeting_mehendi); 
                    form_data.append('event_category_meeting_priests', event_category_meeting_priests); 
                    form_data.append('event_category_meeting_dj', event_category_meeting_dj); 
                    
                    
                   form_data.append('meeting_time', meeting_time);
                   form_data.append('meeting_expiry_date', meeting_expiry_date);
                   form_data.append('address', address);
                   
                   form_data.append('lead_type', lead_type);
                   //form_data.append('lead_type_makeup', lead_type_makeup);
                   form_data.append('lead_type_photovideo', lead_type_photovideo);
                   form_data.append('lead_type_catering', lead_type_catering);
                   form_data.append('lead_type_flower', lead_type_flower);
                   form_data.append('lead_type_mehendi', lead_type_mehendi);
                   form_data.append('lead_type_priest', lead_type_priest);
                   form_data.append('lead_type_dj', lead_type_dj); 
                   
                   /*
                   
                        $.ajax
                        ({
                            //url:"{{ route('admin.leads.update') }}",
                            url: url_update,
                            method:"POST",
                            //data:new FormData(this),
                            data: form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType:"json",
                            async: true, 
                             beforeSend: function() 
                	        {
                                // setting a timeout
                                $("#action").val("Please Wait");
                                $('#action').attr("disabled",true);
                            },
                            success:function(data)
                            {
                                var html = '';
                                if(data.errors)
                                {
                                    html = '<div class="alert alert-danger">';
                                    for(var count = 0; count < data.errors.length; count++)
                                    {
                                        html += '<p>' + data.errors[count] + '</p>';
                                    }
                                    html += '</div>';
                                }
                                if(data.success)
                                {
                                    html = '<div class="alert alert-success">' + data.success + '</div>';
                                    $('#leads_form')[0].reset();
                                    $('#store_image').html('');
                                    //$('#leads_table').DataTable().ajax.reload();
                                   
                                    //$('#event_category').multiselect('deselectAll', false); 
                                    //$('#event_category').multiselect('refresh');
                                    
                                    $("#leads_table").dataTable().fnDestroy();
                                    loadTables();
                                    
                                    setTimeout(function(){ $('#leadsModal').modal('hide'); }, 2500);
                                }
                                $('#form_output').html(html);                        
                            },
                            complete: function() {
                                $('#action').val('Edit');
                                $('#action').attr("disabled",false);
                            }
                        });     
                   */
                   
                   $.ajax
                        ({
                            //url:"{{ route('admin.leads.update') }}",
                            url: url_update,
                            method:"POST",
                            data:form_data,
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType:"json",
                            async: true,
                            beforeSend: function() {
                                $('#action').val('Wait');
                            },
                            success:function(data)
                            {
                                var html = '';
                                if(data.errors)
                                {
                                    html = '<div class="alert alert-danger">';
                                    for(var count = 0; count < data.errors.length; count++)
                                    {
                                        html += '<p>' + data.errors[count] + '</p>';
                                    }
                                    html += '</div>';
                                }
                                if(data.success)
                                {
                                    html = '<div class="alert alert-success">' + data.success + '</div>';
                                    $('#leads_form')[0].reset();
                                    $('#store_image').html('');
                                    //$('#leads_table').DataTable().ajax.reload();
                                   
                                    //$('#event_category').multiselect('deselectAll', false); 
                                    //$('#event_category').multiselect('refresh');
                                    
                                    $("#leads_table").dataTable().fnDestroy();
                                    loadTables();
                                    
                                    setTimeout(function(){ $('#leadsModal').modal('hide'); }, 2500);
                                }
                                $('#form_output').html(html);                        
                            },
                            complete: function() {
                                $('#action').val('Edit');
                            }
                        });
                }
                
        });

        $(document).on('click', '.edit', function(){
            
            resetinlineform();
            
            
            
            $('#store_image').html('');
            var id = $(this).attr("id");
            $('#form_output').html('');
            
            $('#package_type').prop('disabled',false);
            $('#package_type_meeting').prop('disabled',false);
            
            if($(this).hasClass('meeting'))
            {
                var showmeeting = "meeting";
            }
            else
            {
                var showmeeting = "data";
            }
            
            $.ajax({
                //url:"{{ route('admin.leads.fetchdata') }}",
                url: url_fetchdata,
                method:'get',
                data:{id:id},
                dataType:'json',
                success:function(data)
                {
                    //$("#user_id option[value='"+data.user_id+"']").prop("selected", "selected").change();
                    $('#name').val(data.name);
                    $('#purchase_allowed').val(data.purchase_allowed);
                    $('#email').val(data.email);
                    $('#mobile').val(data.mobile);
                    $('#executive_name').val(data.executive_name);
                    $('#lead_description').val(data.lead_description);
                    //$('#event_type').val(data.event_type);
                    //$("#package_type").val(data.package_type).trigger('change');
                    $("#lead_type").val(data.lead_type).trigger('change');
                    $("#status").val(data.status).trigger('change');
                    //$("#city").val(data.city).trigger('change');
                    //$('#event_date').val(data.event_date);
                    $('#expiry_date').val(data.expiry_date);
                    //$('#lead_time').val(data.lead_time);
                    
                    var lead_audio = data.lead_audio;

                    if(lead_audio != '' && lead_audio != undefined)
                    {
                        $('#store_image').html("<a href={{ URL::to('/') }}/storage/" + data.lead_audio + " target='_blank'>Audio File</a>");
                        $('#store_image').append("<input type='hidden' name='hidden_audio' value='"+data.lead_audio+"' />");
                    }
                    
                    /* 
                    var event_category = data.event_category;

                    if(event_category != null)
                    {
                        var event_category_array = event_category.split(",");

                        event_category_array.forEach(element => {

                            element = element.trim();
                            $("#event_category option[value='"+element+"']").attr("selected", "selected");
                            $('#event_category').multiselect('select', element);
                        });    
                    }
                    */
                    
                    var event_category = data.event_category;
                    var event_category_array = event_category.split(",");
                    
                    $('#event_category').val(event_category_array).trigger('change');
                    


                    /*
                        var buyleads_event_category_makeup = data.event_category_makeup;
                        if(buyleads_event_category_makeup == "" || buyleads_event_category_makeup == null )
                        {
                            var buyleads_event_category_makeup_array = "";
                        }
                        else
                        {
                            var buyleads_event_category_makeup_array = buyleads_event_category_makeup.split(",");
                        }
                        $('#event_category_makeup').val(buyleads_event_category_makeup_array).trigger('change');
                    */        
                        
                    var buyleads_event_category_photovideo = data.event_category_photovideo;
                    if(buyleads_event_category_photovideo == "" || buyleads_event_category_photovideo == null )
                    {
                        var buyleads_event_category_photovideo_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_photovideo_array = buyleads_event_category_photovideo.split(",");
                    }
                    $('#event_category_photo').val(buyleads_event_category_photovideo_array).trigger('change');



                    var buyleads_event_category_catering = data.event_category_catering; 
                    if(buyleads_event_category_catering == "" || buyleads_event_category_catering == null )
                    {
                        var buyleads_event_category_catering_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_catering_array = buyleads_event_category_catering.split(",");
                    }
                    $('#event_category_catering').val(buyleads_event_category_catering_array).trigger('change');




                    var buyleads_event_category_flower  = data.event_category_flower;
                    if(buyleads_event_category_flower == "" || buyleads_event_category_flower == null )
                    {
                        var buyleads_event_category_flower_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_flower_array = buyleads_event_category_flower.split(",");
                    }
                    $('#event_category_flower').val(buyleads_event_category_flower_array).trigger('change');


                    var buyleads_event_category_mehendi  = data.event_category_mehendi;
                    if(buyleads_event_category_mehendi == "" || buyleads_event_category_mehendi == null )
                    {
                        var buyleads_event_category_mehendi_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_mehendi_array = buyleads_event_category_mehendi.split(",");
                    }
                    $('#event_category_mehendi').val(buyleads_event_category_mehendi_array).trigger('change');
                    


                    var buyleads_event_category_priests  = data.event_category_priest;
                    if(buyleads_event_category_priests == "" || buyleads_event_category_priests == null )
                    {
                        var buyleads_event_category_priests_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_priests_array = buyleads_event_category_priests.split(",");
                    }
                    $('#event_category_priests').val(buyleads_event_category_priests_array).trigger('change');



                    var buyleads_event_category_dj  = data.event_category_dj;
                    if(buyleads_event_category_dj == "" || buyleads_event_category_dj == null )
                    {
                        var buyleads_event_category_dj_array = "";
                    }
                    else
                    {
                        var buyleads_event_category_dj_array = buyleads_event_category_dj.split(",");
                    }
                    $('#event_category_dj').val(buyleads_event_category_dj_array).trigger('change');
                    


                    //$("#lead_type_makeup").val(data.lead_type_makeup).trigger('change');
                    $("#lead_type_photovideo").val(data.lead_type_photovideo).trigger('change');
                    $("#lead_type_catering").val(data.lead_type_catering).trigger('change');
                    $("#lead_type_flower").val(data.lead_type_flower).trigger('change');
                    $("#lead_type_mehendi").val(data.lead_type_mehendi).trigger('change');
                    $("#lead_type_priest").val(data.lead_type_priest).trigger('change');
                    $("#lead_type_dj").val(data.lead_type_dj).trigger('change'); 


                    //$('#purchase_allowed_makeup').val(data.purchase_allowed_makeup);
                    $('#purchase_allowed_photo').val(data.purchase_allowed_photovideo);
                    $('#purchase_allowed_catering').val(data.purchase_allowed_catering);
                    $('#purchase_allowed_flower').val(data.purchase_allowed_flower);
                    $('#purchase_allowed_mehendi').val(data.purchase_allowed_mehendi);
                    $('#purchase_allowed_priests').val(data.purchase_allowed_priests);
                    $('#purchase_allowed_dj').val(data.purchase_allowed_dj); 
                    
                    
                    if(showmeeting == "meeting")
                    {
                        $('#event_category_meeting').val(event_category_array).trigger('change');
                        /*
                            $("#package_type_meeting").val(data.package_type).trigger('change');
                        */
                            var package_type_meeting = data.package_type_meeting; 
                            if(package_type_meeting == "" || package_type_meeting == null )
                            {
                                var package_type_meeting_array = "";
                            }
                            else 
                            {
                                var package_type_meeting_array = package_type_meeting.split(",");

                                var str1 = "wedding";

                                if(package_type_meeting_array.indexOf(str1) != -1)
                                { 
                                    $("#leadweddingplanner").show();
                                    $('#lead_description').val(data.lead_description);
                                }
                                if(package_type_meeting_array.indexOf(str1) == -1)
                                { 
                                    $("#leadweddingplanner").hide();
                                }
                            }
                            $('#package_type_meeting').val(package_type_meeting_array).trigger('change');
                            
                        $('#event_dates').val(data.event_date);
                        $('#meeting_time').val(data.lead_time);
                        $('#address').val(data.address);
                        
                        checkstate(data.package_type);
                    }
                    else
                    {
                        $('#event_category').val(event_category_array).trigger('change');
                        /*$("#package_type").val(data.package_type).trigger('change');*/

                        
                        $('#event_date').val(data.event_date);
                        $('#lead_time').val(data.lead_time);
                        $('#address').val('');


                        var package_type = data.package_type; 

                        console.log("package_type "+package_type);
                        
                        if(package_type == "" || package_type == null )
                        {
                            var package_type_array = "";
                        }
                        else 
                        {
                            var package_type_array = package_type.split(",");


                            var str1 = "wedding";
                            if(package_type_array.indexOf(str1) != -1)
                            { 
                                $("#leadweddingplanner").show();
                                $('#lead_description').val(data.lead_description);
                            }
                            if(package_type_array.indexOf(str1) == -1)
                            { 
                                $("#leadweddingplanner").hide();
                            }
                            
                            /*
                                var str2 = "makeup-artists";
                                if(package_type_array.indexOf(str2) != -1)
                                { 
                                    $("#leadmakeup").show();
                                    $('#lead_description_makeup').val(data.lead_description_makeup);
                                }
                                if(package_type_array.indexOf(str2) == -1)
                                { 
                                    $("#leadmakeup").hide();
                                }
                            */

                            var str3 = "photo&videographer";
                            if(package_type_array.indexOf(str3) != -1)
                            { 
                                $("#leadphotovideographer").show();
                                $('#lead_description_photovideo').val(data.lead_description_photovideo);
                            }
                            if(package_type_array.indexOf(str3) == -1)
                            { 
                                $("#leadphotovideographer").hide();
                            }


                            var str4 = "catering";
                            if(package_type_array.indexOf(str4) != -1)
                            { 
                                $("#leadcatering").show();
                                $('#lead_description_catering').val(data.lead_description_catering);
                            }
                            if(package_type_array.indexOf(str4) == -1)
                            { 
                                $("#leadcatering").hide();
                            }
                                


                            var str5 = "flower-decorators";
                            if(package_type_array.indexOf(str5) != -1)
                            { 
                                $("#leadflowers").show();
                                $('#lead_description_flower').val(data.lead_description_flower);
                            }
                            if(package_type_array.indexOf(str5) == -1)
                            { 
                                $("#leadflowers").hide();
                            }    


                            var str6 = "mehendi artist";
                            if(package_type_array.indexOf(str6) != -1)
                            { 
                                $("#leadmehendi").show();
                                $('#lead_description_mehendi').val(data.lead_description_mehendi);
                            }
                            if(package_type_array.indexOf(str6) == -1)
                            { 
                                $("#leadmehendi").hide();
                            }



                            var str7 = "priests";
                            if(package_type_array.indexOf(str7) != -1)
                            { 
                                $("#leadpriests").show();
                                $('#lead_description_priests').val(data.lead_description_priests);
                            }
                            if(package_type_array.indexOf(str7) == -1)
                            { 
                                $("#leadpriests").hide();
                            }


                            var str8 = "dj";
                            if(package_type_array.indexOf(str8) != -1)
                            { 
                                $("#leaddj").show();
                                $('#lead_description_dj').val(data.lead_description_dj);
                            }
                            if(package_type_array.indexOf(str8) == -1)
                            { 
                                $("#leaddj").hide();
                            }
                            

                        }

                        $('#package_type').val(package_type_array).trigger('change');


                        
                        
                        checkstate(data.package_type);
                    }
                    
                    //$("#event_category").val(data.event_category).trigger('change');
                    $('#event_location').val(data.event_location);
                    
                    /*
                    if(data.package_type == 'wedding' || data.package_type == 'wedding decorators' || data.package_type == 'wedding photographer / videographer')
                    {
                        $('#weddingtype').show();
                        
                        $("#wedding_type").val(data.wedding_type).trigger('change');
                    }
                    
                    */

                    $('#weddingtype').show();

                    $("#wedding_type").val(data.wedding_type).trigger('change');
                    
                    $('#state').val(data.stateid).trigger('change');
                    
                    var buyleads_city = data.city;
                                 
                    if(buyleads_city == "" || buyleads_city == null )
                    {
                        var buyleads_city_array = "";
                    }
                    else
                    {
                        var buyleads_city_array = buyleads_city.split(",");
                    }
                    
                    if(buyleads_city_array != '')
                    {
                        $('.cityshow').show();
                        $('#cityselectd').val(buyleads_city_array).trigger('change');
                    }
                    else
                    {
                        $('.cityshow').hide();
                    }
                    
                    
                    
                    var actual_state_tbl_name = data.actual_state_tbl_name;
                    console.log(" actual_state_tbl_name "+actual_state_tbl_name);
                    
                    if(actual_state_tbl_name != '')
                    {
                        $('.statechooseshow').show();
                        $('#statechoseselectd').val(actual_state_tbl_name);
                    }
                    else
                    {
                        $('.statechooseshow').hide();
                    }
                    
                    
                    
                    
                    
                   console.log("state_capital"+data.stateid);
                    
                    //if(data.state_capital != ''||data.state_capital != null)
                    if((data.stateid == "null") || (data.stateid == null))
                    {
                         $('.statecapshow').hide();
                    }
                    else
                    { 
                        $('.statecapshow').show();
                        $('#statecapitalchosen').val(data.state_capital).trigger('change');
                    }
                    
                    checkdetails(showmeeting);
                    
                    $('#leads_id').val(id);
                    $('#leadsModal').modal('show');
                    $('#action').val('Edit');
                    $('.modal-title').text('Edit Data');
                    $('#button_action').val('update');
                }
            })
        });

        $(document).on('click', '.delete', function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to Delete this data?"))
            {
                $.ajax({
                    //url:"{{route('admin.leads.removedata')}}",
                    url: url_removedata,
                    mehtod:"get",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);
                         //$('#leads_table').DataTable().ajax.reload();
                        
                        $("#leads_table").dataTable().fnDestroy();
                        loadTables();
                    }
                })
            }
            else
            {
                return false;
            }
        });
        
        $(document).on('click', '.mail', function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to mail this data?"))
            {
                $.ajax({
                    url:"/"+userdatatype+"/general-leads/maildata/"+id,
                    method:"GET",
                    data:{id:id},
                    cache: false,
                    dataType:"json",
                    contentType: false,
                    processData: false,
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse;
                        //response = JSON.parse(response);

                        //if(response.status == 1)
                        if(true)
                        {
                            alert('mail sent successfully');
                        }
                        else if(response.status == 3)
                        {
                            alert('Please assign a user to send mail');
                        }
                        else
                        {
                            alert('error in sending mail. please check mail server or try again later in some time');
                        }
                    },
                    error: function(a,b)
                    {
                        alert('error in sending mail. please check mail server or try again later in some time');
                    }
                });
            }
            else
            {
                return false;
            }
        });
        
        $(document).on('click', '.reset', function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to reset this lead?"))
            {
                $.ajax({
                    url:"/"+userdatatype+"/general-leads/reset/"+id,
                    method:"GET",
                    data:{id:id},
                    cache: false,
                    dataType:"json",
                    contentType: false,
                    processData: false,
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse;
                        //response = JSON.parse(response);

                        if(response.status == 1)
                        {
                            alert('Lead reset successfully. users can buy the lead');
                        }
                        else
                        {
                            alert('Error is resetting lead');
                        }
                    },
                    error: function(a,b)
                    {
                        alert('Error in server please try again later');
                    }
                });
            }
            else
            {
                return false;
            }
        });

        $(document).on('click', '#bulk_delete', function(){
            var id = [];
            if(confirm("Are you sure you want to Delete this data?"))
            {
                $('.leads_checkbox:checked').each(function(){
                    id.push($(this).val());
                });
                if(id.length > 0)
                {
                    $.ajax({
                        //url:"{{ route('admin.leads.massremove')}}",
                        url: url_massremove,
                        method:"get",
                        data:{id:id},
                        success:function(data)
                        {
                            alert(data);
                           //$('#leads_table').DataTable().ajax.reload();
                            
                            $("#leads_table").dataTable().fnDestroy();
                            loadTables();
                        }
                    });
                }
                else
                {
                    alert("Please select atleast one checkbox");
                }
            }
        });
        
        $(document).on('click', '#leadassign', function(){
            
            var yoee_lead_id = $('#yoee_lead_id').val();
            var yoee_eventplanner_id = $('#yoee_eventplanner_id').val();
            
            if(yoee_lead_id == "" || yoee_lead_id == undefined)
            {
                alert('please enter lead id');
                return false;
            }
            else if(yoee_eventplanner_id == "" || yoee_eventplanner_id == undefined)
            {
                alert('please enter event planner id');
                return false;
            }
            else
            {
                $.ajax({
                    url:"/"+userdatatype+"/general-leads/leadassign/"+yoee_lead_id+"/"+yoee_eventplanner_id,
                    method:"GET",
                    data:{yoee_lead_id:yoee_lead_id,yoee_eventplanner_id:yoee_eventplanner_id,},
                    cache: false,
                    dataType:"json",
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function() {
                        // setting a timeout
                        $("#leadassign").html("Please Wait");
                        $("#leadassign").attr('disabled', true); 
                    },
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse;
                        //response = JSON.parse(response);

                        if(response.status == 1)
                        {
                            alert('Lead assigned to event planner');
                            $('#yoee_lead_id').val('');
                            $('#yoee_eventplanner_id').val('');
                            $("#leadassign").html("Assign Lead");
                            $("#leadassign").attr('disabled', false);
                        }
                        else
                        {
                            alert('Error is assigning lead');
                            $("#leadassign").html("Assign Lead");
                            $("#leadassign").attr('disabled', false);
                        }
                    },
                    error: function(a,b)
                    {
                        alert('Error in server please try again later');
                        $("#leadassign").html("Assign Lead");
                        $("#leadassign").attr('disabled', false);
                    }
                });
            }
        });
        
        $(document).on('click', '#ticketassign', function(){
            
            var ticket_lead_id = $('#ticket_lead_id').val();
            var ticket_eventplanner_id = $('#ticket_eventplanner_id').val();
            var ticket_issue = $('#ticket_issue option:selected').val();
            
            if(ticket_lead_id == "" || ticket_lead_id == undefined)
            {
                $('#ticket_lead_id').focus();
                alert('please enter lead id');
                return false;
            }
            else if(ticket_eventplanner_id == "" || ticket_eventplanner_id == undefined)
            {
                $('#ticket_eventplanner_id').focus();
                alert('please enter event planner id');
                return false;
            }
            else if(ticket_issue == "" || ticket_issue == undefined)
            {
                $('#ticket_issue').focus();
                alert('please enter issue');
                return false;
            }
            else
            {
                $.ajax({
                    url:"/"+userdatatype+"/general-tickets/ticketassign/"+ticket_lead_id+"/"+ticket_eventplanner_id+"/"+ticket_issue,
                    method:"GET",
                    data:{ticket_lead_id:ticket_lead_id,ticket_eventplanner_id:ticket_eventplanner_id,ticket_issue:ticket_issue},
                    cache: false,
                    dataType:"json",
                    contentType: false,
                    processData: false,
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse;
                        //response = JSON.parse(response);
    
                        if(response.status == 1)
                        {
                            alert('Ticket added');
                            $('#ticket_lead_id').val('');
                            $('#ticket_eventplanner_id').val('');
                            $("#ticket_issue option:first").attr('selected','selected');
                        }
                        else
                        {
                            alert(response.message);
                        }
                    },
                    error: function(a,b)
                    {
                        alert('Error in server please try again later');
                    }
                });
            }
        });
        
    });

    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
    
    $('#leadsModal').on('hidden.bs.modal', function () {
        
        $('#leads_form')[0].reset();

        //$('#specialization').multiselect('deselectAll', false); 
        //$('#specialization').multiselect('refresh');
        
        //$('#event_category').multiselect('deselectAll', false); 
        //$('#event_category').multiselect('refresh');

    });
    
    $(document).ready(function() {
        $('.your-select-dropdown-class').select2();
    });
    
    
    function resetinlineform()
    {
        //$("#user_id option:first").prop('selected','selected').change();
        //$("#user_id").val('').trigger('change');
        
        $("#purchase_allowed").val('');
        $("#package_type option:first").prop('selected','selected').change();
        $("#status option:first").prop('selected','selected').change();
        $("#lead_type option:first").prop('selected','selected').change();
        $("#city option:first").prop('selected','selected').change();
        
        //$("#event_category").val('').trigger('change');
        $('#event_category').val(null).trigger('change');
        $("#event_category option:first").prop('selected','selected').change();
        $("#state option:first").prop('selected','selected').change();
        $("#city option:first").prop('selected','selected').change();
        
        
        $("#event_category option:selected").prop("selected", false);
        $("#state option:selected").prop("selected", false);
        $("#city option:selected").prop("selected", false);
        
        $("#meeting_time").val('');
        $("#event_dates").val('');
        $("#package_type_meeting option:first").prop('selected','selected').change();
        $('#event_category_meeting').val(null).trigger('change');
        
        
        $("#city").val(null).trigger('change');
        $("#statecapital").val(null).trigger('change');
        $("#state").val(null).trigger('change');
        $('.cityshow').hide();
        $('.statecapshow').hide();
    }
    
    function checkstate(package_type)
            { 
                
                var package_type = package_type;
                
                console.log("package_type - "+package_type);
                
                 $.ajax
                 ({
                    //url:"/"+userdatatype+"/custom-leads/getcities/"+stateid, 
                    url:"/"+userdatatype+"/general-leads/getstate/"+package_type,
                    
                    type: "GET",
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    /*data:{"lead_type":lead_type},*/
                    success: function(ajaxresponse,xhrstatus)
                     {
                        var response = ajaxresponse;
                        var lastquoteid = response.lastquoteid;
                         
                            var response = ajaxresponse;
                            var status = response.status; 
                            var statesdata = response.statesdata; 
                            //var userscount = response.userscount; 
                             
                          /*
                                 $('#state') .find('option').remove().end(); 
                             */
                             $('#state').find("option:gt(0)").remove(); 
                                     
                            //console.log("userscount"+userscount);
                            
                            $.each(statesdata, function( key, value ) { 
                                
                                $('#state').append('<option value="'+value.id+'">'+value.state_name+'  - <div class="">'+value.counts+'</div></option>'); 
                            });
                            
                            /*
                            $.each(statesdata, function( key, value ) {
                               
                                $('#statecapital').append('<option value="">Choose</option><option value="'+value.statecapital+'">'+value.statecapital+'  - <div class="">'+value.counts+'</div></option>'); 
                            });
                            */
                            
                     },
                    
                 });
            }
    $(".date_selection").flatpickr({
        enableTime: true,
        dateFormat: "d/m/Y H:i",
    });
    
    $(".clear_button").click(function() {
        $('#time_calender_next').flatpickr().clear();
    });
    
    function resetfilter() 
    {
        $("#cityname option:first").prop('selected','selected');
        $("#leads_table").dataTable().fnDestroy();
        loadTables();
    }
    
    $('#filter').click(function(e) {
        e.preventDefault();
        $("#leads_table").dataTable().fnDestroy();
        loadTables();
    });
    
    
    
    $('#export_dataPlanner').click(function(e) {
        //e.preventDefault();
        $("#leads_table").dataTable().fnDestroy();
        loadTables();
    });

    $('#exportshow_dataPlanner').click(function(e) {
        //e.preventDefault();
        $("#leads_table").dataTable().fnDestroy();
        loadTables();
    });
    
    function loadTables() 
    {
        var cityname = $("#cityname option:selected").val();
        
        var start_date = $("#start_date").val();
         var end_date = $("#end_date").val();
         var teamid = $("#teamid option:selected").val();
         
         
          var selectteamid = $("#selectteamid option:selected").val();
          
        dataTable = $('#leads_table').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "pageLength": 100,
            "order": [[ 0, "desc" ]],
            "ajax":{
                //url :"{{ route('admin.leads.getdata') }}",
                url: url_getdata,
                data: function (d) {
                    d.cityname = cityname;
                    
                     d.start_date = start_date;
                    d.end_date = end_date;
                    d.teamid = teamid;
                    d.selectteamid = selectteamid;
                    
                },
                type: "get",  // method  , by default get
                error: function(){  // error handling
                  $(".leads_table-error").html("");
                  $("#leads_table").append('<tbody class="leads_table-error"><tr><th colspan="8">No data found in the server</th></tr></tbody>');
                  $("#leads_table_processing").css("display","none");
                }
            },
            "columns":[
                {
                    "data": 'id', "name": 'id',
                    render: function (data, type, row, meta)
                    {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    "data": 'cusdetails',
                    "name": 'cusdetails',
                    "searchable": true,
                },
                {
                    "data": 'leadsdetails',
                    "name": 'leadsdetails',
                    "searchable": true,
                },
                	
		{
                    "data": 'epdetails',
                    "name": 'epdetails',
                    "searchable": true,
                },
                {
                    "data": 'epfollowups',
                    "name": 'epfollowups',
                    "searchable": true,
                },
                { "data": "purchased", orderable:false, searchable: false },
                { "data": "action", orderable:false, searchable: false}
                //{ "data":"checkbox", orderable:false, searchable:false}
            ]
        });
    }
    
    $('#weddingtype').hide();
    
    function showhideweddingtype()
    {
        var package_type = $("#package_type option:selected").val();
        var package_type_meeting = $("#package_type_meeting option:selected").val();
        
        console.log(package_type);
        
        if(package_type == 'wedding' || package_type == 'wedding decorators' || package_type == 'wedding photographer / videographer')
        {
            $('#weddingtype').show();
        }
        else if(package_type_meeting == 'wedding')
        {
            $('#weddingtype').show();
        }
        else
        {
            $('#weddingtype').hide();
        }
    }
    
    function exportForm() 
    {
        var url = url_export;
        window.open(url, '_blank');
    }
    
    function showhideaddress() 
    {
        var event_meeting = $("#event_category_meeting option:selected").val();
        
        if(event_meeting == 'In Person Meeting' || event_meeting == 'Office Location' || event_meeting == 'Client Place')
        {
            $('#address').show();
        }
        else
        {
            $('#address').hide();
        }
    }
    
    
    
    $(function(){ 
        
        
            
            
            
            
            
            
            
            
            
            $('#state').change(function(){
              
                var stateid= $(this).val();
                console.log("stateid"+stateid);
                
                 var package_type = $("#package_type").val();
                 
                 $.ajax
                 ({
                    //url:"/"+userdatatype+"/general-leads/getcities/"+stateid,
                    
                     url:"/"+userdatatype+"/general-leads/getcities/"+stateid+"/"+package_type,
                     
                    type: "GET",
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    data:{"stateid":stateid},
                    success: function(ajaxresponse,xhrstatus)
                     {
                        var response = ajaxresponse;
                        var lastquoteid = response.lastquoteid;
                         
                            var response = ajaxresponse;
                            var status = response.status;
                            var cityname = response.cityname;
                            var citiesdata = response.citiesdata; 
                            var userscount = response.userscount; 
                            
                            var statesdata = response.statesdata; 
                            
                            $('#city')
                                    .find('option')
                                    .remove()
                                    .end();
                                    
                                    
                            $('#statecapital')
                                    .find('option')
                                    .remove()
                                    .end();
                                    
                            console.log("cityname"+cityname);
                            console.log("userscount"+userscount);
                            
                            $.each(citiesdata, function( key, value ) {
                                /*
                                    $('#city').append('<option value="'+value.name+'">'+value.name+'  - <div class="">'+value.counts+'</div></option>'); 
                                */
                                    $('#city').append('<option value="'+value.district_name+'">'+value.district_name+'  </option>'); 
                            });
                            
                            
                            /*
                                $.each(statesdata, function( key, value ) {
                                   
                                    $('#statecapital').append('<option value="">Choose</option><option value="'+value.statecapital+'">'+value.statecapital+'  - <div class="">'+value.counts+'</div></option>'); 
                                });
                            */
                     },
                    
                 });
                
            }); 
       }); 


     function settypeconnect(value)
        {
        var elementId = value;
        var valueItem = $('#typeconnectid'+elementId).val();

        console.log("valueItem"+valueItem);
        
        $.ajax
        ({
            url:"/"+userdatatype+"/general-leads/settypeconnect/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                 
                
                var itemvalue = valueItem;
                
                var response = ajaxresponse;
               // alert('source from changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                //$("p.doneshowconnectchat#this-"+elementId).text("done");
                
               // $("#leads_table").dataTable().fnDestroy();
                //loadTables();
                 setTimeout(function() { $("p.doneshowconnectchat#this-"+elementId).text("done"); }, 200);           
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    } 
</script>

<script>
     function setvalue(value)
     {
         var elementId = value;
         
         var valueCity = $('#smscities'+elementId).val();
         
         var valueCategory = $('#smscategories'+elementId).val();
         
         var buttonbox =   $('#addconfirmdetails'+elementId);
         
         var notifytext =   $('#smsnotify'+elementId);
         
        // console.log("elementId - "+elementId);
         
        // console.log("valueCity - "+valueCity);
         
       //  console.log("valueCategory - "+valueCategory);
       
       if(valueCity=="" || valueCity == undefined)
       {
           alert ("select city to send sms");
       }
       else if(valueCategory=="" || valueCategory == undefined)
       {
           alert ("select category to send sms");
       }
       
       else
       {
           $.ajax
            ({
                //url:"/"+userdatatype+"/eventplanners/setvalue/"+elementId+"/"+valueItem,
                
                
               //url:"/"+userdatatype+"/general-tickets/ticketassign/"+ticket_lead_id+"/"+ticket_eventplanner_id+"/"+ticket_issue,
                
                url:"/"+userdatatype+"/general-leads/sendsms/"+elementId+"/"+valueCity+"/"+valueCategory,
                
                type: "GET",
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                //data:{"quoteid":elementId,"remarks":remarks},
                
                
                 async : true,
                //data:{"quoteid":elementId,"remarks":remarks},
                
                beforeSend: function() {
                    $(buttonbox).text('Please  Wait');
                    $(buttonbox).prop('disabled',true);
                },
                success: function(ajaxresponse,status)
                {
                    var response = ajaxresponse;
                    //response = JSON.parse(response);
                    var city = response.city;
                    var category = response.category;
                    
                    if(response.status == 1)
                    {
                        alert(response.message);
                        //$('#ticket_lead_id').val('');
                        //$('#ticket_eventplanner_id').val('');
                        //$("#ticket_issue option:first").attr('selected','selected');
                        
                        $(notifytext).text('Sms sent to City(s) :- '+ city + ' for ' + category);
                        $(buttonbox).text('Send Sms');
                        $(buttonbox).prop('disabled',false);
                    }
                    else if(response.status == 2)
                    {
                        alert(response.message);
                        //$('#ticket_lead_id').val('');
                        //$('#ticket_eventplanner_id').val('');
                        //$("#ticket_issue option:first").attr('selected','selected');
                        $(notifytext).text(' Sms not sent');
                        $(buttonbox).text('Send Sms');
                        $(buttonbox).prop('disabled',false);
                    }
                    else
                    {
                        alert(response.message);
                        $(notifytext).text(' Sms not sent');
                        $(buttonbox).text('Send Sms');
                        $(buttonbox).prop('disabled',false);
                    }
                },
                 
                 
                 /*success: function(ajaxresponse,status)
                {
                   var itemvalue = "Active";
                    if(valueItem == "0")
                    {
                        itemvalue = "In-Active";
                    }
                    var response = ajaxresponse;
                    alert('Event planner status changed to : ' + itemvalue);
                    //$('#eventplanners_table').DataTable().ajax.reload();
                    
                    $("#eventplanners_table").dataTable().fnDestroy();
                    
                    loadTables();
                                
                    console.log('Updated');
                },*/
                error: function(a,b)
                {
                    console.log('Not Updated');
                }
            });
       }
     }
</script>

<script>
     function setmuteconnect(value)
        {
        var elementId = value;
        var valueItem = $('#muteconnectid'+elementId).val();

        console.log("valueItem"+valueItem);
        
        $.ajax
        ({
            url:"/"+userdatatype+"/general-leads/setmuteconnect/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                 
                
                var itemvalue = valueItem;
                
                var response = ajaxresponse; 
                
                setTimeout(function() { $("p.doneshowmutechat#this-"+elementId).text("done"); }, 1000);
                 
                //loadhot();
                    //countMember();        
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    } 
    
    
    function exportFormPlanner() 
    {
         var start_date = $("#start_date").val();
         var end_date = $("#end_date").val();
         var teamid = $("#teamid option:selected").val();
         
         
        
         var urlplanner = "/"+userdatatype+"/general-leads/exportfilter/"+start_date+"/"+end_date+"/"+teamid; 
        
        
        console.log("urlplanner"+urlplanner);
        
         //var urlplanner = "/"+userdatatype+"/general-ipm/exportplanner/"+id,
        //window.open(urlplanner, '_blank');
        window.open(urlplanner);
    }
    
    
     function countMember() 
         {
             var selectteamid = $("#selectteamid option:selected").val();
             console.log("selectteamid "+selectteamid);
             
             //var urlplanner = "/"+userdatatype+"/chat-form/exportfilter/"+start_date+"/"+end_date+"/"+teamid; 
             
             $("#leads_table").dataTable().fnDestroy();
             loadTables();
         
             loadteamdata(selectteamid);
             
             
             
         }
         
         
         
     function loadteamdata(value)
        {
           
        var teamId = value; 
       console.log("teamId"+teamId);
       
        $.ajax
            ({
            //url:url_showhotdata,
            url:"/"+userdatatype+"/general-leads/setteamdata/"+teamId,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            
             success: function (ajaxresponse)
                {
                    var response = ajaxresponse;
                    var status = response.status;
                    var leads = response.leads;
                    var leads1 = response.leads1;
                    var leads2 = response.leads2;
                    var leads3 = response.leads3;
                    var leadsall = response.leadsall;
                    
                    if(status == 1)
                    {
                       // console.log(message);
                          $("#hotcounts").text(leads);
                          $("#followcounts").text(leads1);
                         // $("#coldcounts").text(leads2);
                          $("#notcounts").text(leads3);
                          $("#allcounts").text(leadsall);
                          
                    }
                    else
                    {
                         //console.log(message);
                         $("#hotcounts").text("0");
                         $("#followcounts").text("0");
                        // $("#coldcounts").text("0");  
                         $("#notcounts").text("0");
                         $("#allcounts").text("0");
                          
                    }
                },
                error: function(response) 
                { 
                    
                },
                complete:function(data)
                { 
                }
                
        });
    }     
    
    
     $(document).ready(function() {
        loadhot();
    });
    
    
    function loadhot()
        {
            $.ajax
            ({
            url:url_showhotdata,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            
             success: function (ajaxresponse)
                {
                    var response = ajaxresponse;
                    var status = response.status;
                    var leads = response.leads;
                    var leads1 = response.leads1;
                    var leads2 = response.leads2;
                    var leads3 = response.leads3;
                    var leadsall = response.leadsall;
                    
                    if(status == 1)
                    {
                       // console.log(message);
                          $("#hotcounts").text(leads);
                          $("#followcounts").text(leads1);
                          $("#coldcounts").text(leads2);
                          $("#notcounts").text(leads3);
                          $("#allcounts").text(leadsall);
                         
                         //loadfollow();
                         //loadcold();
                        // loadnotcounts();
                    }
                    else
                    {
                         //console.log(message);
                         $("#hotcounts").text("0");
                         $("#followcounts").text("0");
                         $("#coldcounts").text("0");  
                         $("#notcounts").text("0");
                        $("#allcounts").text("0");
                         //loadhot();
                         //loadfollow();
                         //loadcold();
                         //loadnotcounts();
                    }
                },
                error: function(response) 
                {
                   // alert('Check connection or try again');
                },
                complete:function(data)
                {
                    //console.log("hot count completes");
                   
                    //loadhot();
                 
        
                }
                
        });
        
       // $("#hotcounts").text("24");
    }
    
    
    function counterhoots() 
         {
             var type="Sold";
             var selectteamid = $("#selectteamid option:selected").val();
             console.log("selectteamid "+selectteamid);
             
             //var urlplanner = "/"+userdatatype+"/chat-form/exportfilter/"+start_date+"/"+end_date+"/"+teamid; 
             
             //loadteamdata(selectteamid);
             
             if(selectteamid=="0")
             {
                 selectteamid = "0";
             }
             else
             {
                 selectteamid = selectteamid;
             }
             
             var urlindividualplanner = "/"+userdatatype+"/general-leads/pageteam/"+selectteamid+"/"+type; 
             
             itemindividual(urlindividualplanner);
         }
         
         
    function counterfollowhoots() 
     {
         var type="Unsold";
         var selectteamid = $("#selectteamid option:selected").val();
         console.log("selectteamid "+selectteamid);
         
         //var urlplanner = "/"+userdatatype+"/chat-form/exportfilter/"+start_date+"/"+end_date+"/"+teamid; 
         
         //loadteamdata(selectteamid);
         
         if(selectteamid=="0")
         {
             selectteamid = "0";
         }
         else
         {
             selectteamid = selectteamid;
         }
         
         var urlindividualplanner = "/"+userdatatype+"/general-leads/pageteam/"+selectteamid+"/"+type; 
         
         itemindividual(urlindividualplanner);
     }
     
      function counternotablehoots() 
     {
         var type="Tickets";
         var selectteamid = $("#selectteamid option:selected").val();
         console.log("selectteamid "+selectteamid);
         
         //var urlplanner = "/"+userdatatype+"/chat-form/exportfilter/"+start_date+"/"+end_date+"/"+teamid; 
         
         //loadteamdata(selectteamid);
         
         if(selectteamid=="0")
         {
             selectteamid = "0";
         }
         else
         {
             selectteamid = selectteamid;
         }
         
         var urlindividualplanner = "/"+userdatatype+"/general-leads/pageteam/"+selectteamid+"/"+type; 
         
         itemindividual(urlindividualplanner);
     }      
    
    
    
    function itemindividual(value)
         {
             var itemurl = value;
             
             console.log("itemurl"+itemurl);
             $.ajax
            ({
                url:itemurl,
                type: "GET",
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                //data:{"quoteid":elementId,"remarks":remarks},
                success: function(ajaxresponse,status)
                {
                        var response = ajaxresponse;
                        var status = response.status;
                        var teamid = response.teamid; 
                        var type = response.type; 
                        if(status == 1)
                        {
                            console.log('Updated');
                            var urlredirect = "/"+userdatatype+"/general-leads/buyleadsformdetails/"+teamid+"/"+type; 
                            setTimeout(function() {
                                   window.location.href = urlredirect;
                                  }, 500);
                        }
                        else
                        {
                            console.log('not Updated');
                        }
                    
                },
                error: function(a,b)
                {
                    console.log('error in Updating');
                }
            });
         }     
         
         
         
         /*start*/
                $('#package_type').change(function(){
              
                 
                var package_type = $("#package_type option:selected").val();
                
                 console.log("packs type "+package_type);
                 
                checkstate(package_type)
            }); 
            /*end*/
         
</script>






<script>
     $(document).ready(function() {
          $('#multiselect').multiselect({
            buttonWidth : '100%',
            includeSelectAllOption : true,
        		nonSelectedText: 'Select an Option'
          });
        });
        
        
     function exportFormPlannerAccounts()
        {
             var start_date = $("#start_dates").val();
             var end_date = $("#end_dates").val();
             
             /*var plannerid = $("#plannerids option:selected").val();
             
              
            
             
            if(plannerid == "0")
            {
                var plannerids = "1"
            }
            else
            {
                var plannerids = plannerid;
            }
            */
            
            var plannerid = "0";
            
            /*var option_all = $("#multiselect option:selected").map(function () {
                return $(this).val();
            }).get().join(',');*/
            //console.log(option_all);
            
            
            /*var urlplanners = "/"+userdatatype+"/general-leads/exportfiltergst/"+start_date+"/"+end_date+"/"+plannerid+"/"+option_all; */
            
            
            
             if(start_date=="")
             {
                 alert("choose From Date");
                 $("#start_dates").focus();
             }
             else if(end_date=="")
             {
                 alert("choose To Date");
                 $("#end_dates").focus();
             }
             else
             {
                var urlplanners = "/"+userdatatype+"/general-leads/exportfiltergst/"+start_date+"/"+end_date+"/"+plannerid; 
                window.open(urlplanners);
             }
            //console.log("plannerid"+plannerids);
            
        }
        
        
    function assignhoneymoonid(value)
        {
            var elementId = value;
            var valueItem = $('#assignhoneymoonid'+elementId).val();
            var person_assigned = $('#person_assigned').val();
            
            var person_assigned_id = $('#person_assigned_id').val();
            
            console.log("person_assigned_id "+person_assigned_id);
            
            $.ajax
            ({
                 url:"/"+userdatatype+"/general-leads/sethoneymoonassign/"+elementId+"/"+valueItem+"/"+person_assigned+"/"+person_assigned_id,
                type: "GET",
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                //data:{"quoteid":elementId,"remarks":remarks},
                success: function(ajaxresponse,status)
                {
                     
                    
                    var itemvalue = "0";
                    if(valueItem == "Yes")
                    {
                        itemvalue = "Added in Honeymoon Package";
                    }
                    else if(valueItem == "No")
                    {
                        itemvalue = "Honeymoon Pack Not Reqiured";
                    }
                    
                    var response = ajaxresponse;
                    alert('changed to : ' + itemvalue);
                    //$('#eventplanners_table').DataTable().ajax.reload();
                    
                    //$("#leads_table").dataTable().fnDestroy();
                    //loadTables();
                                
                    console.log('Updated');
                },
                error: function(a,b)
                {
                    console.log('Not Updated');
                }
            });
        }        
</script>





<style>
  
 body .dropdown-menu {
	 border-radius: 0;
}
 body .multiselect-native-select {
	 position: relative;
}
 body .multiselect-native-select select {
	 border: 0 !important;
	 clip: rect(0 0 0 0) !important;
	 height: 1px !important;
	 margin: -1px -1px -1px -3px !important;
	 overflow: hidden !important;
	 padding: 0 !important;
	 position: absolute !important;
	 width: 1px !important;
	 left: 50%;
	 top: 30px;
}
 body .multiselect-container {
	 position: absolute;
	 list-style-type: none;
	 margin: 0;
	 padding: 0;
}
 body .multiselect-container .input-group {
	 margin: 5px;
}
 body .multiselect-container li {
	 padding: 0;
}
 body .multiselect-container li .multiselect-all label {
	 font-weight: 700;
}
 body .multiselect-container li a {
	 padding: 0;
}
 body .multiselect-container li a label {
	 margin: 0;
	 height: 100%;
	 cursor: pointer;
	 font-weight: 400;
	 padding: 3px 20px 3px 40px; 
    padding-left: 11px;
    padding-right: 5px;
    font-size: 15px;
    color: #000
}
 body .multiselect-container li a label input[type=checkbox] {
	 margin-bottom: 5px;
	 margin-top:6px;
}
 body .multiselect-container li a label.radio {
	 margin: 0;
}
 body .multiselect-container li a label.checkbox {
	 margin: 0;
}
 body .multiselect-container li.multiselect-group label {
	 margin: 0;
	 padding: 3px 20px 3px 20px;
	 height: 100%;
	 font-weight: 700;
}
 body .multiselect-container li.multiselect-group-clickable label {
	 cursor: pointer;
}
 body .btn-group .btn-group .multiselect.btn {
	 border-top-left-radius: 4px;
	 border-bottom-left-radius: 4px;
}
 body .form-inline .multiselect-container label.checkbox {
	 padding: 3px 20px 3px 40px;
}
 body .form-inline .multiselect-container label.radio {
	 padding: 3px 20px 3px 40px;
}
 body .form-inline .multiselect-container li a label.checkbox input[type=checkbox] {
	 margin-left: -20px;
	 margin-right: 0;
}
 body .form-inline .multiselect-container li a label.radio input[type=radio] {
	 margin-left: -20px;
	 margin-right: 0;
}
 
 
 
#leadweddingplanner,
    #leadmakeup,
    #leadphotovideographer,
    #leadcatering,
    #leadflowers,
    #leadmehendi,
    #leadpriests,
    #leaddj
    {
        display: none;
        border: 1px solid;
        padding: 15px;
    }
    
    #leadweddingplanner label,
    #leadmakeup label,
    #leadphotovideographer label,
    #leadcatering label,
    #leadflowers label,
    #leadmehendi label,
    #leadpriests label,
    #leaddj label
    {
        font-size: 12px;
    }
    
    
    .addbgblue
    {
         background: #003781;
         text-align: center;
         padding-top: 15px;
         padding-bottom: 15px;
         font-weight: 600;
    }
    
    .addbgblue p 
    {
        color: #fff;
        margin-bottom: 0;
    }
 
</style>


<script>
    $("#package_type").change(function(){

    var selValue = $(this).val();

    //console.log(selValue);
    
    
    
    var str1 = "wedding";
    if(selValue.indexOf(str1) != -1)
    {
         $("#leadweddingplanner").show();
    }
    if(selValue.indexOf(str1) == -1)
    {
         $("#leadweddingplanner").hide();
    }
    
    
    /*
        var str2 = "makeup-artists";
        if(selValue.indexOf(str2) != -1)
        {
             $("#leadmakeup").show();
        }
        if(selValue.indexOf(str2) == -1)
        {
             $("#leadmakeup").hide();
        }
        
    
    */
    
    
    var str3 = "photo&videographer";
    if(selValue.indexOf(str3) != -1)
    {
         $("#leadphotovideographer").show();
    }
    if(selValue.indexOf(str3) == -1)
    {
         $("#leadphotovideographer").hide();
    }
    
    var str4 = "catering";
    if(selValue.indexOf(str4) != -1)
    {
         $("#leadcatering").show();
    }
    if(selValue.indexOf(str4) == -1)
    {
         $("#leadcatering").hide();
    }
    
    
    var str5 = "flower-decorators";
    if(selValue.indexOf(str5) != -1)
    {
         $("#leadflowers").show();
    }
    if(selValue.indexOf(str5) == -1)
    {
         $("#leadflowers").hide();
    }
    
    
    var str6 = "mehendi artist";
    if(selValue.indexOf(str6) != -1)
    {
         $("#leadmehendi").show();
    }
    if(selValue.indexOf(str6) == -1)
    {
         $("#leadmehendi").hide();
    }
    
    
    var str7 = "priests";
    if(selValue.indexOf(str7) != -1)
    {
         $("#leadpriests").show();
    }
    if(selValue.indexOf(str7) == -1)
    {
         $("#leadpriests").hide();
    }
    
    
    var str8 = "dj";
    if(selValue.indexOf(str8) != -1)
    {
         $("#leaddj").show();
    }
    if(selValue.indexOf(str8) == -1)
    {
         $("#leaddj").hide();
    }
    
});
</script>
@endpush