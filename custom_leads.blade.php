 @extends('layouts.backend.app')
@section('title','dashboard')
@section('pageheading','Dashboard')
@section('cardheading','PAW Custom Leads List')
@section('breadcrum','Home')
@section('subheading','dashboard')

@push('css')

  <!-- multiple start -->

     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  
 <!-- multiple ends --> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        width: 16% !important;
    }
     body table.table-bordered.dataTable .three
    {
        width: 15% !important;
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
    .redwidth
    {
        width: 95px;
    }
    /*#leads_table.table-bordered.dataTable td
    {
        display: block;
        max-height: 50px;
        overflow: auto;
    }*/
    
    .select2-container .select2-selection--single
    {
        height: calc(2.25rem + 2px);
    }
    .select2-container .select2-selection--single .select2-selection__rendered
    {
        /*line-height: calc(2.25rem + 2px);*/
        line-height: inherit;
    }
    .select2-container .select2-selection--single .select2-selection__arrow
    {
        height: calc(2.25rem + 2px);
    }
    .select2-container--focus
    {
            border: 1px solid #1a94ff;
    }
    .addtop
    {
        margin-top: 25px;
    }
</style>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <style>
    table.table-bordered.dataTable td
    {
        font-size: 12px;
    }
    .detailsofaddeddatas p span {
        background: #000;
        color: #fff;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
        font-size: 14px;
        border-radius: 3px;
    }
    .datecaldetails .calsvalue .calendars i
    {
        z-index: 3;
        right: 13%;
        position: absolute;
        top: 29%;
        border-left: 1px solid;
        padding-left: 4px;
    }
    .detailsofaddeddatas p
    {
        margin-top: 15px;
    }
    textarea
    {
        width: 100%;
    }
    .detailsofaddeddatas .calsvalue .calendars input
    {
        font-size: 12px;
        z-index: 0;
        font-weight: 600;
    }
    .detailsofaddeddatas .calsvalue p.doneshowconnect
    {
        margin-top: 5px;
        margin-bottom: 5px;
        text-align: center;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas {
        margin-bottom: 15px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-5,
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-4 {
        padding-left: 8px;
        padding-right: 5px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details p {
        margin-bottom: 5px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details.reducefontsiz p {
        font-size: 11px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details p a {
        color: #337ab7;
        text-decoration: underline;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-2,
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-3,
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-1
    {
        padding: 0px;
        text-align: center;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-2 select {
        font-size: 11px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-2 select.form-control {
        height: 24px;
        padding: 0px 2px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-2 {
        padding: 0px;
        text-align: center;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-2 .fa,
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details .alignparas .col-md-1 .fa{
        font-size: 25px;
        color: #59ba00ee;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details p {
        margin-bottom: 5px;
    }
    #exampleModalCenter .modal-dialog .modal-content .modal-body .details.reducefontsiz p {
        font-size: 11px;
    }
    
    #exampleModalCenter .modal-dialog .modal-content .alignparas #resultpopup .row
    {
        margin-bottom: 12px;
        border-top: 1px dotted;
        padding-top: 10px;
    }
    .calendars input {
        
        box-sizing: border-box;
        outline: 0;
        padding: .75rem;
        position: relative;
        width: 100%;
    } 
    
    input[type="date"]::-webkit-calendar-picker-indicator 
    {
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }
    #exampleModalCenter .modal-header
    {
        display: block;
        text-align: center;
    }
    #exampleModalCenter .modal-header .close
    {
        margin-top: -8%;
        margin-right: -2%;
        font-size: 35px;
        outline: 0;
        border: 0;
        z-index: 1;
    }
    #exampleModalCenter .modal-header h5.modal-title
    {
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        padding-top: 1%; 
        animation: blinker 1s linear infinite;
    }
    
    @keyframes blinker {
          0% {
          opacity: 0;
         }
         50% {
          opacity: 1;
         }
         100% {
          opacity: 0;
         }
    }
    
    .modal-open .modal#exampleModalCenter
    {
            z-index: 99999;
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
    }
    .goaltype.assigns
    {
        width: 90px;
        padding: 5px;
    }
    </style>
    
    
    <style>
     .row.topfilter
     {
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
        padding: 8px;
        display: flex;
        padding-top: 18px;
        padding-bottom: 8px;
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
    
    /*.full-row .col-lg-2 
    {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 19.666667%;
        max-width: 19.666667%;
    }*/
    .dash-count.totl
    {
        background: #6b99ff;
            cursor: auto;
    }
    
    .dash-count.das9
    {
        background : #059c2dcc;
    }
    
    div.additoinal_bg {
    background: #884db7;
    color: #fff;
    font-size: 15px;
    text-align: center;
    border-radius: 3px;
    margin-top: 10px;
}
select.goaltype
{
    width: 100%;
    margin-bottom: 10px;
}
.followcounttext {
    font-size: 10px;
    margin-bottom: 4px;
    line-height: initial;
}
p.followcounttext span {
    color: red;
}
 </style>
 
 
<style>
    li.multiselect-item span.input-group-btn
    {
        display: none;
    }
    
    li.multiselect-container .input-group
    {
        margin-left: 0;
        margin-right: 0;
    }
    #leadweddingplanner,
    #leadmakeup,
    #leadphotovideographer,
    #leadcatering,
    #leadflowers,
    #leadmehendi,
    #leadpriests,#leadvenue,
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
    #leaddj label,
    #leadvenue label
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
@endpush

@section('content')



<!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Today's Assign Leads Form Follow Up : </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    
                    <div class="details reducefontsiz"> 
                        <div class="alignparas">
                            
                            <!--
                                <div class="row">
                                    <div class="col-md-5"> 
                                        <p> 
                                            <a href="pawleads.php">1) <b>Name : </b>  alagu wedding planner test </a>
                                        </p>
                                    </div>
                                    <div class="col-md-4"> 
                                        <p>-  <b> Mobile : </b> <a href="tel:5555555555" style="text-decoration: underline;color: #0020ff;">5555555555</a></p>
                                    </div>
                                    
                                    <div class="col-md-2"> 
                                        <input type="hidden" value="2023-05-05 10:36:37" id="thisfolowdate-2154-43-235">
                                        <input type="hidden" value="ghfjhgkhjbjn zxxvxcvcxvc" id="thisfolowremarks-2154-43-235">
                                        <input type="hidden" value="follow-up" id="thisfolowstatus-2154-43-235">
                                        <input type="hidden" value="958" id="thisfolowmanage-2154-43-235">
                                        <select name="donestatus-(2154,43,235)" class="goalselect form-control" id="donestatus-2154-43-235" onchange="submitdoneform(2154,43,235)">
                                            <option value="" disabled="" selected="">--Select---</option>
                                            <option value="done">Done</option>
                                            <option value="not-done">Not Done</option> 
                                        </select>
                                    </div>
                                        
                                    <div class="col-md-1 lastcols" id="lastcols-2154-43-235" style="display:none;"> 
                                        <i class="fa fa-check-circle" aria-hidden="true"></i> 
                                    </div>    
                                </div>
                                <p> - <b> Managed by  :</b> Alagu1 </p>
                            -->
                            
                            <!--
                                <div onload="myFunction()">
                                    
                                </div>
                            -->
                            
                            <div id="resultpopup"></div>
                            
                            
                        </div>
                        <p></p>                    
                    </div>
                    
                    
              </div>
              
            </div>
          </div>
        </div>
    <!-- end for follow up -->  
    
   <!-- <div align="right">
        <button type="button" name="add" id="add_meeting" class="btn btn-secondary btn-sm">Meeting</button>
        <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add Leads</button>
        <button type="button" onclick="exportForm()"  name="export_data" id="export_data" class="btn btn-primary btn-sm">Export Records</button>
    </div>-->
    <br />
    
    <!-- Filter Form Comes Here -->
            <!--<hr>
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
                </div> 
                
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
            
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <button name="leadassign" id="leadassign" type="button" class="btn btn-sm btn-success" value="Submit">Assign Lead</button>
                </div>
            </div>
        
             
        </div> 
    
    </div>
            
    <hr>-->

    <!-- Filter Form Ends -->
    <!-- Filter Form Comes Here -->

            <!--<div class="row">
        
        <div class="col-md-12">
            
            
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
            
            </div> 
             
        </div> 
    
    </div>
            
    <hr>

    
    <br />-->
    
    
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
                                    
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                             </select>
                        
                        
                        @elseif(Auth()->user()->role->id == 20)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140" selected="selected">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                           
                        @elseif(Auth()->user()->role->id == 21)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175" selected="selected">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                             </select>
                        
                        
                        @elseif(Auth()->user()->role->id == 24)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                     
                                    <option value="16950" selected="selected">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                         
                        @elseif(Auth()->user()->role->id == 11)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985" selected="selected">Suraj</option> 
                                    
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                        
                        
                             
                        @elseif(Auth()->user()->role->id == 12)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                    
                                    <option value="1007" selected="selected">Dilip</option>
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                            
                        @elseif(Auth()->user()->role->id == 22)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                    
                                    <option value="1007">Dilip</option>
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233" selected="selected">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                             
                         @elseif(Auth()->user()->role->id == 26)
                            <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                    
                                    <option value="1007">Dilip</option>
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943"  selected="selected">Harsha</option>
                                    
                             </select>
                             
                        @elseif(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18 || Auth()->user()->role->id == 28)
                             <select name="selectteamid" class="form-control" id="selectteamid" Onchange="countMember()">
                                    <option value="0">--All---</option>
                                    <option value="7138">Sowmya</option>
                                    <option value="972">Pooja</option> 
                                    <option value="7140">Kavitha</option> 
                                     <option value="7175">Sumaa</option> 
                                     
                                     <option value="985">Suraj</option> 
                                    
                                     
                                    
                                    <option value="16950">Rakshitha</option>
                                    <option value="7233">Jinesh Joshi</option>
                                    
                                    <option value="17943">Harsha</option>
                                    
                             </select>
                          @endif  
                          
                        -->
                        
                        
                        
                        @if(Auth()->user()->role->id == 19 || Auth()->user()->role->id == 20 || Auth()->user()->role->id == 24 || Auth()->user()->role->id == 21 || Auth()->user()->role->id == 11 || Auth()->user()->role->id == 14
                            || Auth()->user()->role->id == 12|| Auth()->user()->role->id == 22|| Auth()->user()->role->id == 13|| Auth()->user()->role->id == 26|| Auth()->user()->role->id == 34|| Auth()->user()->role->id == 33|| Auth()->user()->role->id == 38)
                            
                                <select name="selectteamid" class="form-control" id="selectteamid"  disabled>
                                        <option value="0">--All---</option>
                                         @foreach($pawteam as $city)
                                            <option value="{{$city->id }}" {{ ( $city->id == Auth()->user()->id ) ? 'selected' : '' }}>{{ $city->name }}</option>
                                        @endforeach
                                 </select>
                                 
                            @elseif(Auth()->user()->role->id == 1 || Auth()->user()->role->id == 17 || Auth()->user()->role->id == 18|| Auth()->user()->role->id == 288)
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
        
          <div class="col-lg-2 col-sm-6 col-12 d-flex">
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
          
          <div class="col-lg-2 col-sm-6 col-12 d-flex">
             <div class="dash-count" Onclick="counterhoots()">
                <div class="dash-counts"> 
                   <h4 id="hotcounts"></h4>
                   <h5>Hot</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    -->
                    <i class="fa fa-sun-o" aria-hidden="true"></i>

                </div>
             </div>
          </div>
          
          <div class="col-lg-2 col-sm-6 col-12 d-flex" Onclick="counterfollowhoots()">
             <div class="dash-count das3">
                <div class="dash-counts">
                    
                   <h4 id="followcounts"></h4>
                   <h5>Follow Up</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    -->
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> 
                </div>
             </div>
          </div>
          
          
          <div class="col-lg-2 col-sm-6 col-12 d-flex" Onclick="countercoldhoots()">
             <div class="dash-count das1">
                <div class="dash-counts">                
                   <h4 id="coldcounts"></h4>
                   <h5>Cold</h5>
                </div>
                <div class="dash-imgs">
                   <!--
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    -->
                   <i class="fa fa-cog" aria-hidden="true"></i> 
                </div>
             </div>
          </div>
          
          
          
          <div class="col-lg-2 col-sm-6 col-12 d-flex" Onclick="counternotablehoots()">
             <div class="dash-count das2">
                <div class="dash-counts">
                    
                                                    
                    
                   <h4 id="notcounts"></h4>
                   <h5>Not able to connect</h5>
                </div>
                <div class="dash-imgs">
                    <i class="fa fa-plug" aria-hidden="true"></i>

                </div>
             </div>
          </div>
          
          
           <div class="col-lg-2 col-sm-6 col-12 d-flex" Onclick="counterconverthoots()">
             <div class="dash-count das9">
                <div class="dash-counts">
                    
                                                    
                    
                   <h4 id="converts"></h4>
                   <h5>Converted BuyLeads</h5>
                </div>
                <div class="dash-imgs">
                    <i class="fa fa-check" aria-hidden="true"></i>

                </div>
             </div>
          </div>
          
    </div>
    
    <!-- end conter -->
    
    <table id="leads_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="one">Sl No</th>
                <th class="four">Customer Details</th> 
                <th class="two">Wedding Items</th> 
                <!--<th class="two">Buy Lead City</th>-->
                <th class="two">Buy Lead Type</th>
                <!--<th class="two">Lead Category</th>
                <th class="two">Description</th>
                <th class="two">Lead Price</th>-->
		 <th class="two">Remarks</th>
                <th class="one">Action</th> 
                <th class="one"><button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button></th>
                <!--<th class="seven">Action</th>-->
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
                                
                                 <div class="col">
                                    <label>Enter Customer Mobile</label>
                                    <input type="number" name="mobile" id="mobile" class="form-control" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"/>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <!--
                                <div class="row">
                               
                                 
                                 
                                 <div class="col">
                                    <label>Enter Wedding Services</label>
                                    <select id="event_category" name="event_category[]" class="form-control your-select-dropdown-class" multiple>
                                        
                                            <option value="Engagement">Engagement</option>
                                            <option value="Complete Wedding Planning">Complete Wedding Planning</option>
                                            <option value="Destination Wedding">Destination Wedding</option>
                                            <option value="Wedding Decorations">Wedding Decorations</option>
                                            <option value="Photo & Videography">Photo & Videography</option>
                                            <option value="Catering">Catering</option>
                                            <option value="Sound & Light">Sound & Light</option>
                                            <option value="DJ">DJ</option>
                                            <option value="Bridal Makeup">Bridal Makeup</option>
                                            <option value="Reception Requirement">Reception Requirement</option>
                                            
                                            <option value="Wedding Venue">Wedding Venue </option> 
                                            <option value="Costume Designer">Costume Designer </option> 
                                            <option value="Jewellery">Jewellery </option>
                                            <option value="Mehendi Artist">Mehendi Artist </option> 
                                    </select>
				                </div>
                            
                        </div>
                        
                        <div class="form-group">

                            <div class="row">
                                
                                 <div class="col" id="serviceswedding">
                                    <label>Enter Wedding Decorations Services (if Required)</label>
                                    <select id="decorations_category" name="decorations_category[]" class="form-control your-select-dropdown-class" multiple>
                                       
                                            <option value="Muhurat Decorations">Muhurat Decorations</option> 
                                            <option value="Reception Decorations">Reception Decorations</option> 
                                            <option value="Sangeet Decorations">Sangeet Decorations</option> 
                                            <option value="Haldi Decorations">Haldi Decorations</option> 
                                            <option value="Home Decorations">Home Decorations</option> 
                                            <option value="Photo booth">Photo booth</option> 
                                    </select>
				                </div>
				                
				                
				                
                               
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
				                    <label>Enter wedding Budget</label>
                                    <select id="wedding_budget" name="wedding_budget" class="form-control" onchange="">
                                        <option value="">Choose...</option>
                                        <option value="3 - 5 Lakhs">₹3 - ₹5 Lakhs</option>
                                        <option value="5 - 10 Lakhs">₹5 - ₹10 Lakhs</option>
                                        <option value="10 - 15 Lakhs">₹10 - ₹15 Lakhs</option>
                                        <option value="15 - 25 Lakhs">₹15 - ₹25 Lakhs</option>
                                        <option value="25 - 50 Lakhs">₹25 - ₹50 Lakhs</option> 
                                    </select>
				                </div>
				                
				                <div class="col">
				                    <label>Enter No of Guest</label>
                                    <select id="guest_budget" name="guest_budget" class="form-control" onchange="">
                                        <option value="">Choose...</option>
                                        <option value="Fewer than 50">Fewer than 50</option>
                                        <option value="50 - 200">50 - 200</option>
                                        <option value="200 - 500">200 - 500</option>
                                        <option value="500 - 1000+">500 - 1000+</option> 
                                    </select>
				                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">

                            <div class="row">
                                <div class="col">
                                    <label>Enter City Name</label> 
                                     <input type="text" name="city_location" id="city_location" class="form-control" placeholder="Enter City"/>
                                    
                                </div>
                                
                                <div class="col">
                                    <label>Enter Location</label>
                                    <input type="text" name="event_location" id="event_location" class="form-control" placeholder="Enter Event Location"/>
                                </div>
                                
                            </div>
                            
                        </div>
                        -->
                        <div class="form-group">
                            
                            <div class="row">
                                <div class="col">
                                        <label>Is Venue Fixed ?</label>
                                        <select id="venue_group" name="venue_group" class="form-control" onchange="">
                                            <option value="">Choose...</option>
                                            <option value="venueyes">Yes</option>
                                            <option value="venueno">No</option> 
                                        </select>
                                </div>
                                
                                <div class="col" id="venueassist">
                                        <label>If Venue not Fixed</label>
                                        <select id="venuedetails" name="venuedetails" class="form-control" onchange="">
                                            <option value="">Choose...</option>
                                            <option value="Yes, I need venue assistance booking">Yes, I need venue assistance booking</option>
                                            <option value="No, I will do it to myself">No, I will do it to myself</option>  
                                        </select>
                                </div>
                                
                            </div>    
                        </div>
                        
                        
                        <div class="form-group">
                             <div class="row">
                                 <div class="col" id="venuenamedetails">
                                        <label>Enter Venue Name</label>
                                        <input type="text" name="venuename" id="venuename" class="form-control" placeholder="Enter venue name"/>
                                </div>
                                
                                 <div class="col" id="venueallowdetails">
                                        <label>Does venue allow outside vendor ?</label>
                                        <select id="venue_allow_outsidevendors" name="venue_allow_outsidevendors" class="form-control" onchange="">
                                            <option value="">Choose...</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option> 
                                            <option value="I am not aware">I'm not aware</option> 
                                        </select>
                                </div>
                             </div>
                        </div>
                            
                            
                        <div class="form-group">
                            
                            <div class="row">
                                <div class="col">
                                        <label>Is Wedding Date Fixed ?</label>
                                        <select id="weddingdate_fixed" name="weddingdate_fixed" class="form-control" onchange="">
                                            <option value="">Choose...</option>
                                            <option value="dateyes">Yes</option>
                                            <option value="dateno">No</option> 
                                        </select>
                                </div>
                                
                                <div class="col" id="weddingyes">
                                    <label>Enter Wedding Date</label>
                                    <input type="date" name="event_date" id="event_date" class="form-control" />
                                </div>
                                
                                <div class="col" id="weddingno">
                                        <label>If wedding date not fixed</label>
                                        <select id="wedding_approx_period" name="wedding_approx_period" class="form-control" onchange="">
                                            <option value="">Choose...</option>
                                            <option value="In less than a month">In less than a month</option>
                                            <option value="In the next 1 - 3 months">In the next 1 - 3 months</option> 
                                            <option value="In the next 3-6 months">In the next 3-6 months</option>
                                            <option value="In the next 6-12 months">In the next 6-12 months</option>
                                             
                                        </select>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        
                        <div class="form-group">
                            
                            <div class="row">
                                
                                <div class="col">
                                    <label>To whom this lead should go to ?</label>
                                        <select id="buyleads_package_type" name="buyleads_package_type[]" class="form-control your-select-dropdown-class" multiple >
                                    <!--<select id="buyleads_package_type" name="buyleads_package_type[]" class="form-control" onchange="" multiple>-->
                                        <!--<option value="">Choose...</option>-->
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
                                            
                                            <option value="photo&videographer">Photo &amp; Videographer</option>
                                            <option value="catering">Catering</option>
                                            <option value="flower-decorators">Flower Decorators</option>
                                            <option value="mehendi artist">Mehendi Artist </option>
                                            <option value="priests">Priests </option>
                                            <option value="dj">DJ </option>
                                            <option value="Venue">Venue </option>
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
                                    <label>Enter description for Wedding Planners</label>
                                    <textarea class="form-control" rows="5" id="lead_description" name="lead_description"></textarea>
                                </div>
                                
                                
                                <div class="col-md-6">
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category</label>
                                        <select id="buylead_event_category" name="buylead_event_category[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category</label>
                                        <select id="buylead_event_category_meeting" name="buylead_event_category_meeting[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                
                                <div class="col-md-6">
                                    <label>Enter Purchase Allowed</label>
                                    <input type="number" name="purchase_allowed" id="purchase_allowed" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_makeup" name="buylead_event_category_makeup[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category</label>
                                        <select id="buylead_event_category_meeting_makeup" name="buylead_event_category_meeting_makeup[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_photo" name="buylead_event_category_photo[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Photo & Videographer</label>
                                        <select id="buylead_event_category_meeting_photo" name="buylead_event_category_meeting_photo[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_catering" name="buylead_event_category_catering[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Caterers</label>
                                        <select id="buylead_event_category_meeting_catering" name="buylead_event_category_meeting_catering[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_flower" name="buylead_event_category_flower[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Flower Decorators</label>
                                        <select id="buylead_event_category_meeting_flower" name="buylead_event_category_meeting_flower[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_mehendi" name="buylead_event_category_mehendi[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Mehendi Artists</label>
                                        <select id="buylead_event_category_meeting_mehendi" name="buylead_event_category_meeting_mehendi[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_priests" name="buylead_event_category_priests[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Priests</label>
                                        <select id="buylead_event_category_meeting_priests" name="buylead_event_category_meeting_priests[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                                        <select id="buylead_event_category_dj" name="buylead_event_category_dj[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for DJ</label>
                                        <select id="buylead_event_category_meeting_dj" name="buylead_event_category_meeting_dj[]" class="form-control your-select-dropdown-class" multiple>
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                        
                        
                        
                        <div class="form-group" id="leadvenue">
                            <div class="row">
                                
                                
                                 <div class="col-md-12 addbgblue"> 
                                    <p>Venue</p>
                                </div>
                                
                                 <div class="col-md-6">
                                    <label>Enter description for Venue</label>
                                    <textarea class="form-control" rows="5" id="lead_description_venue" name="lead_description_venue"></textarea>
                                 </div>
                                 
                                 
                                 
                                 <div class="col-md-6">
                                      
                                     <div class="col meetingno">
                                        <label>Buy Leads Event Category for Venue</label>
                                        <select id="buylead_event_category_venue" name="buylead_event_category_venue[]" class="form-control your-select-dropdown-class" multiple>
                                            @foreach ($themes as $theme)
                                                <option value="{{ $theme->theme_name }}">{{ $theme->theme_name }}</option>
                                            @endforeach
                                        </select>
    				                </div>
    				                
    				                
    				                 <div class="col meetingyes">
                                        <label>Buy Meeting Event Category for Venue</label>
                                        <select id="buylead_event_category_meeting_venue" name="buylead_event_category_meeting_venue[]" class="form-control your-select-dropdown-class" multiple>
                                            <option value="Connect over call">Connect over call</option>
                                            <option value="Virtual Meeting">Virtual Meeting</option>
                                            
                                            <option value="Office Location">Office Location</option>
                                            
                                           <option value="Client Place">Client's Place</option>
                                            
                                        </select>
    				                </div>
    				                
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Purchase Allowed for Venue</label>
                                    <input type="number" name="purchase_allowed_venue" id="purchase_allowed_venue" class="form-control" placeholder="Enter max purchases allowed"/>
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <label>Enter Lead Amount</label>
                                    <select id="lead_type_venue" name="lead_type_venue" class="your-select-dropdown-class form-control">
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
                                        <option value="hot">Hot (Rs. 250)</option>
                                        <option value="275">275 (Rs. 275)</option>
                                        <option value="300">300 (Rs. 300)</option>
                                        <option value="325">325 (Rs. 325)</option>
                                        <option value="platinum">Platinum (Rs. 350)</option>
                                        <option value="375">375 (Rs. 375)</option>
                                        <option value="400">400 (Rs. 400)</option>
                                        <option value="425">425 (Rs. 425)</option>
                                        <option value="450">450 (Rs. 450)</option>
                                        <option value="475">475 (Rs. 475)</option>
                                        <option value="Ultra Premium">Ultra Premium (Rs. 500)</option>
                                        <option value="525">525 (Rs. 525)</option>
                                        <option value="550">550 (Rs. 550)</option>
                                        <option value="575">575 (Rs. 575)</option>
                                        <option value="600">600 (Rs. 600)</option>
                                        <option value="625">625 (Rs. 625)</option>
                                        <option value="650">650 (Rs. 650)</option>
                                        <option value="675">675 (Rs. 675)</option>
                                        <option value="700">700 (Rs. 700)</option>
                                        <option value="725">725 (Rs. 725)</option>
                                        <option value="diamond">Diamond (Rs. 750)</option>
                                        <option value="775">775 (Rs. 775)</option>
                                        <option value="800">800 (Rs. 800)</option>
                                        <option value="825">825 (Rs. 825)</option>
                                        <option value="850">850 (Rs. 850)</option>
                                        <option value="875">875 (Rs. 875)</option>
                                        <option value="900">900 (Rs. 900)</option>
                                        <option value="925">925 (Rs. 925)</option>
                                        <option value="950">950 (Rs. 950)</option>
                                        <option value="975">975 (Rs. 975)</option>
                                        <option value="Overwhelming">Overwhelming (Rs. 1000)</option>
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
                         
                         <div class="form-group">
                             <div class="row">
                                  <div class="col">
                                       
                                    <label>Choose State</label> 
                                    <select id="state" name="state" class="form-control your-select-dropdown-class"  >    
                                        <option value="0">Choose...</option>
                                        
                                        <!--
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Jammu & kashmir">Jammu & kashmir</option>
                                        <option value="Jahrkand">Jahrkand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option value="Goa">Goa</option>
                                        -->
                                        <!--
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                        @endforeach
                                        -->
                                    </select>
                                    
                                     
                                    <label>Enter Location</label>
                                    <input type="text" name="event_location" id="event_location" class="form-control" placeholder="Enter Event Location"/>
                                
                                </div>
                                
                                
                                
                                <div class="col">
                                    <label>Choose City to Send</label>
                                    
                                   
                                    <select id="city" name="city[]" class="form-control your-select-dropdown-class" multiple>
                                         
                                        <!--
                                        <option value="">Choose...</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Chennai">Chennai</option>
                                        -->
                                         
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
                                        <label> State Capital Chosen  Before</label>    
                                        <input type="text" name="statecapitalchosen" id="statecapitalchosen" class="form-control" readonly>
                                    </div> 
                                </div>
                                -->
                            </div>
                         </div>
                            
                        <div class="form-group">
                             <div class="row">    
                                  
				                
                             </div>
                         </div>
                         
                         <div class="form-group">
                             <div class="row">
                                 <div class="col">
                                    <label>Enter Executive Name</label>
                                    <input type="text" name="executive_name" id="executive_name" class="form-control">
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
                         
                         
                        <div class="form-group meetingno">
                            <div class="row">
                                     <div class="col">
                                            <label>Enter Lead Time</label>
                                            <input type="date" name="lead_time" id="lead_time" class="form-control date_selection" />
                                        </div>
                                
                                    <div class="col">
                                            <label>Enter Expiry Date</label>
                                            <input type="date" name="expiry_date" id="expiry_date" class="form-control" />
                                        </div>
                            </div>    
                        </div>
                            
                       <!--<div class="form-group meetingno">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Package Type</label>
                                    <select id="package_type" name="package_type" class="form-control" onchange="showhideweddingtype()">
                                        <option value="">Choose...</option>
                                        <option value="wedding">Wedding Planner</option>
                                        <option value="birthday">Birthday Planner</option>
                                       
                                        <option value="wedding decorators">Wedding Decorators</option>	
                                        
                                        <option value="makeup-artists">Makeup Artist</option>	
                                        <option value="photo&videographer">Photographer / Videographer</option>
                                        <option value="catering">Catering</option>
                                        <option value="flower-decorators">Flower Decorators</option>
                                        
                                    </select>
                                </div>
                                
                            </div>
		                </div>-->
		                
		                <div class="form-group meetingyes">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Meeting Date & Time</label>
                                    <input type="date" name="meeting_time" id="meeting_time" class="form-control date_selection" />
                                </div>
                                <!--<div class="col">
                                    <label>Enter Event Date</label>
                                    <input type="date" name="event_dates" id="event_dates" class="form-control" />
                                </div>-->
                                
                                <div class="col">
                                    <label>Enter Expiry Date</label>
                                    <input type="date" name="meeting_expiry_date" id="meeting_expiry_date" class="form-control" />
                                </div>
                                
                            </div>
                            
                        </div>
		                
		                <!--<div class="form-group meetingyes">

                            <div class="row">
                                <div class="col">
                                    <label>Enter Package Type</label>
                                    <select id="package_type_meeting" name="package_type_meeting" class="form-control" onchange="showhideweddingtype()">
                                        <option value="">Choose...</option>
                                        <option value="wedding">Wedding Planner</option>
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
                                        
                                    </select>
				                </div>
                            </div>
		                </div>-->
		                
		                <div class="form-group">

                            <div class="row">
                                
                               
				                
				               
                                
                            </div>
                            
		                </div>
		                
			            
                        
                        <!--<div class="form-group">

                            <div class="row">
                                
                                
                                
                                
                            </div>
                            
                        </div>-->
                        
                        <!--
                            <div class="form-group" id="weddingtype">

                            <div class="row">
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
                                
                                <div class="col">

                                </div>
                                
                            </div>
                            
                        </div>
                        -->
                          
                        
                        
                        
                        <div class="form-group meetingyes">
                            <div class="row">
                                <label>Enter Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Enter Client Address"/>
                            </div>
                        </div>
                        
                        
                          <div class="form-group">
                            <div class="row">
                                 <label>Audio Link</label>
                                  <input type="text" name="audio_link" id="audio_link" class="form-control" placeholder="Enter Audio Link"/>
                            </div>
                        </div>
                        
                        
                        
                         <div class="form-group">
                            <div class="row">
                                  <label>Lead Source</label>
                                  <select id="lead_source" name="lead_source" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="Internal">Internal</option>
                                        <option value="External">External</option> 
                                    </select>
                            </div>
                        </div>
                        
                        
                        <!--
                        <div class="form-group">
                                <div class="row">
                               
                                 
                                 
                                 <div class="col">
                                    <label>Enter Wedding Services</label>
                                    <select id="event_category" name="event_category[]" class="form-control your-select-dropdown-class" multiple>
                                        
                                            <option value="Engagement">Engagement</option>
                                            <option value="Complete Wedding Planning">Complete Wedding Planning</option>
                                            <option value="Destination Wedding">Destination Wedding</option>
                                            <option value="Wedding Decorations">Wedding Decorations</option>
                                            <option value="Photo & Videography">Photo & Videography</option>
                                            <option value="Catering">Catering</option>
                                            <option value="Sound & Light">Sound & Light</option>
                                            <option value="DJ">DJ</option>
                                            <option value="Bridal Makeup">Bridal Makeup</option>
                                            <option value="Reception Requirement">Reception Requirement</option>
                                            
                                            <option value="Wedding Venue">Wedding Venue </option> 
                                            <option value="Costume Designer">Costume Designer </option> 
                                            <option value="Jewellery">Jewellery </option>
                                            <option value="Mehendi Artist">Mehendi Artist </option> 
                                    </select>
				                </div>
                            
                        </div>
                        
                                <div class="form-group">

                                    <div class="row">
                                
                                 <div class="col" id="serviceswedding">
                                    <label>Enter Wedding Decorations Services (if Required)</label>
                                    <select id="decorations_category" name="decorations_category[]" class="form-control your-select-dropdown-class" multiple>
                                       
                                            <option value="Muhurat Decorations">Muhurat Decorations</option> 
                                            <option value="Reception Decorations">Reception Decorations</option> 
                                            <option value="Sangeet Decorations">Sangeet Decorations</option> 
                                            <option value="Haldi Decorations">Haldi Decorations</option> 
                                            <option value="Home Decorations">Home Decorations</option> 
                                            <option value="Photo booth">Photo booth</option> 
                                    </select>
				                </div>
				                
				                
				                
                               
                            </div>
                            
                                </div>
                        
                                <div class="form-group">
                                    <div class="row">
                                <div class="col">
				                    <label>Enter wedding Budget</label>
                                    <select id="wedding_budget" name="wedding_budget" class="form-control" onchange="">
                                        <option value="">Choose...</option>
                                        <option value="3 - 5 Lakhs">₹3 - ₹5 Lakhs</option>
                                        <option value="5 - 10 Lakhs">₹5 - ₹10 Lakhs</option>
                                        <option value="10 - 15 Lakhs">₹10 - ₹15 Lakhs</option>
                                        <option value="15 - 25 Lakhs">₹15 - ₹25 Lakhs</option>
                                        <option value="25 - 50 Lakhs">₹25 - ₹50 Lakhs</option> 
                                    </select>
				                </div>
				                
				                <div class="col">
				                    <label>Enter No of Guest</label>
                                    <select id="guest_budget" name="guest_budget" class="form-control" onchange="">
                                        <option value="">Choose...</option>
                                        <option value="Fewer than 50">Fewer than 50</option>
                                        <option value="50 - 200">50 - 200</option>
                                        <option value="200 - 500">200 - 500</option>
                                        <option value="500 - 1000+">500 - 1000+</option> 
                                    </select>
				                </div>
                            </div>
                                </div>
                            
                        
                                <div class="form-group">

                                    <div class="row">
                                <div class="col">
                                    <label>Enter City Name</label> 
                                     <input type="text" name="city_location" id="city_location" class="form-control" placeholder="Enter City"/>
                                    
                                </div>
                                
                                <div class="col">
                                    <label>Enter Location</label>
                                    <input type="text" name="event_location" id="event_location" class="form-control" placeholder="Enter Event Location"/>
                                </div>
                                
                            </div>
                            
                                </div>
                        </div>
                        -->
                        
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
      
    <!-- start for follow up --> 
    
   

@endsection

@push('js')
<script src="{{ asset('/dist/js/bootstrap-multiselect.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ asset('/dist/js/select2.min.js')}}"></script>

<script type="text/javascript">

    var route = "{{ request()->route()->getName() }}";
    
    if(route == 'admin.custom_leads.index')
    {
        var url_getdata = "{{ route('admin.custom_leads.getdata') }}";
        var url_store = "{{ route('admin.custom_leads.store') }}";
        var url_update = "{{ route('admin.custom_leads.update') }}";
        var url_fetchdata = "{{ route('admin.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('admin.custom_leads.removedata') }}";
        var url_massremove = "{{ route('admin.custom_leads.massremove') }}";
        var url_export = "{{ route('admin.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('admin.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('admin.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('admin.custom_leads.showhotdata') }}";
         
        var userdatatype = 'admin';
    }
    else  if(route == 'mainadmin.custom_leads.index')
    {
        var url_getdata = "{{ route('mainadmin.custom_leads.getdataadmin') }}";
        var url_store = "{{ route('mainadmin.custom_leads.store') }}";
        var url_update = "{{ route('mainadmin.custom_leads.update') }}";
        var url_fetchdata = "{{ route('mainadmin.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('mainadmin.custom_leads.removedata') }}";
        var url_massremove = "{{ route('mainadmin.custom_leads.massremove') }}";
        var url_export = "{{ route('mainadmin.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('mainadmin.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('mainadmin.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('mainadmin.custom_leads.showhotdata') }}";
         
        var userdatatype = 'mainadmin';
    }
    else if(route == 'mnpl.custom_leads.index')
    {
        var url_getdata = "{{ route('mnpl.custom_leads.getdata') }}";
        var url_store = "{{ route('mnpl.custom_leads.store') }}";
        var url_update = "{{ route('mnpl.custom_leads.update') }}";
        var url_fetchdata = "{{ route('mnpl.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('mnpl.custom_leads.removedata') }}";
        var url_massremove = "{{ route('mnpl.custom_leads.massremove') }}";
        var url_export = "{{ route('mnpl.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('mnpl.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('mnpl.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('mnpl.custom_leads.showhotdata') }}";
        var userdatatype = 'mnpl';
    }
    
    
    else if(route == 'leadssowmya.custom_leads.index')
    {
        var url_getdata = "{{ route('leadssowmya.custom_leads.getdata1admin') }}";
        var url_store = "{{ route('leadssowmya.custom_leads.store') }}";
        var url_update = "{{ route('leadssowmya.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadssowmya.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadssowmya.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadssowmya.custom_leads.massremove') }}";
        var url_export = "{{ route('leadssowmya.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadssowmya.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('leadssowmya.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('leadssowmya.custom_leads.showhotdata') }}";
         
        var userdatatype = 'leadssowmya';
    }
    else if(route == 'leadsarchana.custom_leads.index')
    {
        var url_getdata = "{{ route('leadsarchana.custom_leads.getdata1admin') }}";
        var url_store = "{{ route('leadsarchana.custom_leads.store') }}";
        var url_update = "{{ route('leadsarchana.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadsarchana.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsarchana.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadsarchana.custom_leads.massremove') }}";
        var url_export = "{{ route('leadsarchana.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadsarchana.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('leadsarchana.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadsarchana.custom_leads.showhotdata') }}";
        
        var userdatatype = 'leadsarchana';
    }
    else if(route == 'leadspooja.custom_leads.index')
    {
        var url_getdata = "{{ route('leadspooja.custom_leads.getdata1pooja') }}";
        var url_store = "{{ route('leadspooja.custom_leads.store') }}";
        var url_update = "{{ route('leadspooja.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadspooja.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadspooja.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadspooja.custom_leads.massremove') }}";
        var url_export = "{{ route('leadspooja.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadspooja.custom_leads.chatcountpopupdetailpooja') }}";
        var url_chatshow = "{{ route('leadspooja.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadspooja.custom_leads.showhotdatapooja') }}";
        
        var userdatatype = 'leadspooja';
    }
    else if(route == 'leadskavitha.custom_leads.index')
    {
        var url_getdata = "{{ route('leadskavitha.custom_leads.getdata1kavitha') }}";
        var url_store = "{{ route('leadskavitha.custom_leads.store') }}";
        var url_update = "{{ route('leadskavitha.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadskavitha.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadskavitha.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadskavitha.custom_leads.massremove') }}";
        var url_export = "{{ route('leadskavitha.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadskavitha.custom_leads.chatcountpopupdetailkavitha') }}";
        var url_chatshow = "{{ route('leadskavitha.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadskavitha.custom_leads.showhotdatakavitha') }}";
        
        var userdatatype = 'leadskavitha';
    }
    else if(route == 'leadssumaa.custom_leads.index')
    {
        var url_getdata = "{{ route('leadssumaa.custom_leads.getdata1sumaa') }}";
        var url_store = "{{ route('leadssumaa.custom_leads.store') }}";
        var url_update = "{{ route('leadssumaa.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadssumaa.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadssumaa.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadssumaa.custom_leads.massremove') }}";
        var url_export = "{{ route('leadssumaa.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadssumaa.custom_leads.chatcountpopupdetailsumaa') }}";
        var url_chatshow = "{{ route('leadssumaa.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadssumaa.custom_leads.showhotdatasumaa') }}";
        
        var userdatatype = 'leadssumaa';
    }
    
    else if(route == 'leadsrakshitha.custom_leads.index')
    {
        var url_getdata = "{{ route('leadsrakshitha.custom_leads.getdata1rakshitha') }}";
        var url_store = "{{ route('leadsrakshitha.custom_leads.store') }}";
        var url_update = "{{ route('leadsrakshitha.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadsrakshitha.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsrakshitha.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadsrakshitha.custom_leads.massremove') }}";
        var url_export = "{{ route('leadsrakshitha.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadsrakshitha.custom_leads.chatcountpopupdetailrakshitha') }}";
        var url_chatshow = "{{ route('leadsrakshitha.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadsrakshitha.custom_leads.showhotdatarakshitha') }}";
        
        var userdatatype = 'leadsrakshitha';
    }
    
    else if(route == 'weddingcourse.custom_leads.index')
    {
        var url_getdata = "{{ route('weddingcourse.custom_leads.getdata1suraj') }}";
        var url_store = "{{ route('weddingcourse.custom_leads.store') }}";
        var url_update = "{{ route('weddingcourse.custom_leads.update') }}";
        var url_fetchdata = "{{ route('weddingcourse.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('weddingcourse.custom_leads.removedata') }}";
        var url_massremove = "{{ route('weddingcourse.custom_leads.massremove') }}";
        var url_export = "{{ route('weddingcourse.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('weddingcourse.custom_leads.chatcountpopupdetailsuraj') }}";
        var url_chatshow = "{{ route('weddingcourse.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('weddingcourse.custom_leads.showhotdatasuraj') }}";
         
        var userdatatype = 'weddingcourse';
    }
    
    
     else if(route == 'tellewc.custom_leads.index')
    {
        var url_getdata = "{{ route('tellewc.custom_leads.getdata1harsha') }}";
        var url_store = "{{ route('tellewc.custom_leads.store') }}";
        var url_update = "{{ route('tellewc.custom_leads.update') }}";
        var url_fetchdata = "{{ route('tellewc.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('tellewc.custom_leads.removedata') }}";
        var url_massremove = "{{ route('tellewc.custom_leads.massremove') }}";
        var url_export = "{{ route('tellewc.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('tellewc.custom_leads.chatcountpopupdetailharsha') }}";
        var url_chatshow = "{{ route('tellewc.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('tellewc.custom_leads.showhotdataharsha') }}";
        
        var userdatatype = 'tellewc';
    }
    
    
    
    else if(route == 'b2pjinu.custom_leads.index')
    {
        var url_getdata = "{{ route('b2pjinu.custom_leads.getdata1jinu') }}";
        var url_store = "{{ route('b2pjinu.custom_leads.store') }}";
        var url_update = "{{ route('b2pjinu.custom_leads.update') }}";
        var url_fetchdata = "{{ route('b2pjinu.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('b2pjinu.custom_leads.removedata') }}";
        var url_massremove = "{{ route('b2pjinu.custom_leads.massremove') }}";
        var url_export = "{{ route('b2pjinu.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('b2pjinu.custom_leads.chatcountpopupdetailjinu') }}";
        var url_chatshow = "{{ route('b2pjinu.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('b2pjinu.custom_leads.showhotdatajinu') }}";
        
        var userdatatype = 'b2pjinu';
    }
    
    
    
    else if(route == 'leadsharsha.custom_leads.index')
    {
        var url_getdata = "{{ route('leadsharsha.custom_leads.getdata1harshanew') }}";
        var url_store = "{{ route('leadsharsha.custom_leads.store') }}";
        var url_update = "{{ route('leadsharsha.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadsharsha.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsharsha.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadsharsha.custom_leads.massremove') }}";
        var url_export = "{{ route('leadsharsha.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadsharsha.custom_leads.chatcountpopupdetailharshanew') }}";
        var url_chatshow = "{{ route('leadsharsha.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadsharsha.custom_leads.showhotdataharshanew') }}";
        
        var userdatatype = 'leadsharsha';
    }
    
    
    else if(route == 'leadssujatha.custom_leads.index')
    {
        var url_getdata = "{{ route('leadssujatha.custom_leads.getdata1suji') }}";
        var url_store = "{{ route('leadssujatha.custom_leads.store') }}";
        var url_update = "{{ route('leadssujatha.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadssujatha.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadssujatha.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadssujatha.custom_leads.massremove') }}";
        var url_export = "{{ route('leadssujatha.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadssujatha.custom_leads.chatcountpopupdetailsuji') }}";
        var url_chatshow = "{{ route('leadssujatha.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadssujatha.custom_leads.showhotdatasuji') }}";
        
        var userdatatype = 'leadssujatha';
    }
    else if(route == 'leadsanil.custom_leads.index')
    {
        var url_getdata = "{{ route('leadsanil.custom_leads.getdataanil') }}";
        var url_store = "{{ route('leadsanil.custom_leads.store') }}";
        var url_update = "{{ route('leadsanil.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadsanil.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsanil.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadsanil.custom_leads.massremove') }}";
        var url_export = "{{ route('leadsanil.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadsanil.custom_leads.chatcountpopupdetail') }}";
        var url_chatshow = "{{ route('leadsanil.custom_leads.chatpopupshowdetail') }}";
        
         var url_showhotdata = "{{ route('leadsanil.custom_leads.showhotdata') }}";
         
        var userdatatype = 'leadsanil';
    }
    else if(route == 'leadsvibha.custom_leads.index')
    {
        var url_getdata = "{{ route('leadsvibha.custom_leads.getdata1vibha') }}";
        var url_store = "{{ route('leadsvibha.custom_leads.store') }}";
        var url_update = "{{ route('leadsvibha.custom_leads.update') }}";
        var url_fetchdata = "{{ route('leadsvibha.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('leadsvibha.custom_leads.removedata') }}";
        var url_massremove = "{{ route('leadsvibha.custom_leads.massremove') }}";
        var url_export = "{{ route('leadsvibha.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('leadsvibha.custom_leads.chatcountpopupdetailvibha') }}";
        var url_chatshow = "{{ route('leadsvibha.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('leadsvibha.custom_leads.showhotdatavibha') }}";
        
        var userdatatype = 'leadsvibha';
    }
    
    else if(route == 'subscriptionuserthree.custom_leads.index')
    {
        var url_getdata = "{{ route('subscriptionuserthree.custom_leads.getdatasubscriptionuserthree') }}";
        var url_store = "{{ route('subscriptionuserthree.custom_leads.store') }}";
        var url_update = "{{ route('subscriptionuserthree.custom_leads.update') }}";
        var url_fetchdata = "{{ route('subscriptionuserthree.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('subscriptionuserthree.custom_leads.removedata') }}";
        var url_massremove = "{{ route('subscriptionuserthree.custom_leads.massremove') }}";
        var url_export = "{{ route('subscriptionuserthree.custom_leads.export') }}";
        
        var url_chatcount = "{{ route('subscriptionuserthree.custom_leads.chatcountpopupdetailsubscriptionuserthree') }}";
        var url_chatshow = "{{ route('subscriptionuserthree.custom_leads.chatpopupshowdetail') }}";
        
        var url_showhotdata = "{{ route('subscriptionuserthree.custom_leads.showhotdatasubscriptionuserthree') }}";
        
        var userdatatype = 'subscriptionuserthree';
    }
    
    else
    {
        var url_getdata = "{{ route('author.custom_leads.getdata') }}";
        var url_store = "{{ route('author.custom_leads.store') }}";
        var url_update = "{{ route('author.custom_leads.update') }}";
        var url_fetchdata = "{{ route('author.custom_leads.fetchdata') }}";
        var url_removedata = "{{ route('author.custom_leads.removedata') }}";
        var url_massremove = "{{ route('author.custom_leads.massremove') }}";
        var url_export = "{{ route('author.custom_leads.export') }}";
        var url_showhotdata = "{{ route('author.custom_leads.showhotdata') }}";
        
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
            
            $('#wedding_budget').prop('disabled',false);
            $('#guest_budget').prop('disabled',false);
          
            $('#venue_group').prop('disabled',false);
          
            $('#weddingdate_fixed').prop('disabled',false);
          
            $('#wedding_approx_period').prop('disabled',false);
          
            $('#buyleads_package_type').prop('disabled',false);
          
            $('#venue_allow_outsidevendors').prop('disabled',false);
          
            $('#venuedetails').prop('disabled',false);
          
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
            
            $('#wedding_budget').prop('disabled',false);
            $('#guest_budget').prop('disabled',false);
            
            $('#venue_group').prop('disabled',false);
            
            $('#weddingdate_fixed').prop('disabled',false);
            
            $('#wedding_approx_period').prop('disabled',false);
            
            $('#buyleads_package_type').prop('disabled',false);
            
            
            
            $('#venue_allow_outsidevendors').prop('disabled',false);
            
            $('#venuedetails').prop('disabled',false);
            
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
                    }
                 });
            }

            if($('#action').val() == "Edit")
                {
                    
                   
                     
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    let lead_description_venue         = $("#lead_description_venue").val();
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                    
                    
                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                    
                    
                    let item_lead_type                              = $("#item_lead_type").val();
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                    /*console.log("buylead_event_category "+buylead_event_category);*/ 
                    
                    
                     
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
                    
                    /*
                    else
                    {
                        $.ajax
                        ({
                            //url:"{{ route('admin.leads.update') }}",
                            url: url_update,
                            method:"POST",
                            data:new FormData(this),
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
                    }
                    */
                    else 
                    {
                        
                        /*
                        var array = [];
                        $("#buyleads_package_type").each(function() {
                            array.push($(this).val());
                        });
                         var listeditems = array;
                         
                         console.log("listeditems "+listeditems);
                         */
                         
                        /* let string = 'Chemistry,English,History';
                        let string = "buyleads_package_type"
                        let arr = string.split(',');
                        //console.log(arr)
                        */
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine
                        
                        /*console.log(arrs);*/
                        
                        let chkstr1 = "wedding";
                        //let chkstr2 = "makeup-artists";
                        let chkstr3 = "photo&videographer";
                        let chkstr9 = "venue";
                        
                        if (arrs.includes(chkstr1))
                            {
                                
                                
                                if(lead_description.trim() == '' || lead_description.trim() == undefined)
                                {
                            		alert('Please enter lead description for wedding planner');
                            		$('#lead_description').focus();
                            	    return false;
                                }
                                /*
                                    else if(buylead_event_category == '' || buylead_event_category == undefined)
                                    {
                                		alert('Please enter lead requirement for wedding planner');
                                		$('#buylead_event_category').focus();
                                	    return false;
                                    }
                                */
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
                        else if (arrs.includes(chkstr9))
                            {
                                console.log("1");
                                
                                if(lead_description_venue.trim() == '' || lead_description_venue.trim() == undefined)
                                {
                            		alert('Please enter lead description for  venue');
                            		$('#lead_description_venue').focus();
                            	    return false;
                                }
                                /*
                                    else if(buylead_event_category == '' || buylead_event_category == undefined)
                                    {
                                		alert('Please enter lead requirement for wedding planner');
                                		$('#buylead_event_category').focus();
                                	    return false;
                                    }
                                */
                                else if(purchase_allowed_venue.trim() == '' || purchase_allowed_venue.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for  venue');
                            		$('#purchase_allowed_venue').focus();
                            	    return false;
                                }
                                else if(lead_type_venue.trim() == '' || lead_type_venue.trim() == undefined)
                                {
                            		alert('Please enter lead type for  venue');
                            		$('#lead_type_venue').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                     let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    
                    
                    
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    
                    let buylead_event_category_meeting_venue      = $("#buylead_event_category_meeting_venue").val();
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val(); 
                    
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine
                        
                       /* let chkstr2 = "makeup-artists";
                        
                        if (arrs.includes(chkstr2))
                        {
                            
                            
                            if(lead_description_makeup.trim() == '' || lead_description_makeup.trim() == undefined)
                            {
                                alert('Please enter lead description for makeup artist');
                                $('#lead_description_makeup').focus();
                                return false;
                            }
                            
                           // else if(buylead_event_category_makeup == '' || buylead_event_category_makeup == undefined)
                            //{
                        	//	alert('Please enter lead requirement for makeup artists');
                        		//$('#buylead_event_category_makeup').focus();
                        	    //return false;
                            //}
                            
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
                     
                    console.log("2");
                    
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                   // let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                    let buylead_event_category_venue           = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue                 = $("#purchase_allowed_venue").val();



                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                   // let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    let buylead_event_category_meeting_venue          = $("#buylead_event_category_meeting_venue").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr3 = "photo&videographer";
                        
                        let chkstr9 = "venue";
                        if (arrs.includes(chkstr3))
                            {
                                if(lead_description_photovideo.trim() == '' || lead_description_photovideo.trim() == undefined)
                                {
                                    alert('Please enter lead description for photo & videographer');
                                    $('#lead_description_photovideo').focus();
                                    return false;
                                }
                                /*
                                else if(buylead_event_category_photo == '' || buylead_event_category_photo == undefined)
                                {
                            		alert('Please enter lead requirement for photo & videographer');
                            		$('#buylead_event_category_photo').focus();
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
                        else if (arrs.includes(chkstr9))
                            {
                                if(lead_description_venue.trim() == '' || lead_description_venue.trim() == undefined)
                                {
                                    alert('Please enter lead description for venue');
                                    $('#lead_description_photovideovenue').focus();
                                    return false;
                                }
                                /*
                                else if(buylead_event_category_photo == '' || buylead_event_category_photo == undefined)
                                {
                            		alert('Please enter lead requirement for photo & videographer');
                            		$('#buylead_event_category_photo').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_venue.trim() == '' || purchase_allowed_venue.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for venue');
                            		$('#purchase_allowed_venue').focus();
                            	    return false;
                                }
                                else if(lead_type_venue.trim() == '' || lead_type_venue.trim() == undefined)
                                {
                            		alert('Please enter lead type for venue');
                            		$('#lead_type_venue').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                   // let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();

                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    
                    
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                   // let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
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
                                else if(buylead_event_category_catering == '' || buylead_event_category_catering == undefined)
                                {
                            		alert('Please enter lead requirement for caterers');
                            		$('#buylead_event_category_catering').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();

                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    

                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
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
                                else if(buylead_event_category_flower == '' || buylead_event_category_flower == undefined)
                                {
                            		alert('Please enter lead requirement for flower decorators');
                            		$('#buylead_event_category_flower').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();

                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    

                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                    let lead_type_venue                           = $("#lead_type_venue").val(); 
                    
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
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
                                else if(buylead_event_category_mehendi == '' || buylead_event_category_mehendi == undefined)
                                {
                            		alert('Please enter lead requirement for mehendi artist');
                            		$('#buylead_event_category_mehendi').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();


                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
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
                        
                        myVar = buyleads_package_type;
                        
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
                                else if(buylead_event_category_priests == '' || buylead_event_category_priests == undefined)
                                {
                            		alert('Please enter lead requirement for priests');
                            		$('#buylead_event_category_priests').focus();
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
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();


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
                        
                        myVar = buyleads_package_type;
                        
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
                                else if(buylead_event_category_dj == '' || buylead_event_category_dj == undefined)
                                {
                            		alert('Please enter lead requirement for dj');
                            		$('#buylead_event_category_dj').focus();
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
                     
                     
                    let status = $("#status").val();
                    let state = $("#state option:selected").val();
                    let city = $("#city option:selected").val();
                    
                     
                    let lead_source = $("#lead_source option:selected").val(); 
                    
                    
                    let buyleads_package_type = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                    
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                    //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                    
                    
                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    
                    
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();


                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                    
                    
                    
                    let lead_type                                   = $("#lead_type").val();
                    //let lead_type_makeup                            = $("#lead_type_makeup").val(); 
                    let lead_type_photovideo                        = $("#lead_type_photovideo").val(); 
                    let lead_type_catering                          = $("#lead_type_catering").val(); 
                    let lead_type_flower                            = $("#lead_type_flower").val(); 
                    let lead_type_mehendi                           = $("#lead_type_mehendi").val(); 
                    let lead_type_priest                            = $("#lead_type_priest").val(); 
                    let lead_type_dj                                = $("#lead_type_dj").val();  
                     let lead_type_venue                           = $("#lead_type_venue").val(); 
                   
                    
                        let myVar = 'hello world';

                        //console.log(myVar.split('')); // ✔️ this works fine
                        
                        myVar = buyleads_package_type;
                        
                        const arrs = (typeof myVar === 'string' ? myVar : myVar.toString()).split(','); // ✔️ this also works fine


                        let chkstr9 = "venue";
                        
                        
                        if (arrs.includes(chkstr9))
                            {
                                if(lead_description_venue.trim() == '' || lead_description_venue.trim() == undefined)
                                {
                                    alert('Please enter lead description for venue');
                                    $('#lead_description_venue').focus();
                                    return false;
                                }
                                /*
                                else if(buylead_event_category_dj == '' || buylead_event_category_dj == undefined)
                                {
                            		alert('Please enter lead requirement for dj');
                            		$('#buylead_event_category_dj').focus();
                            	    return false;
                                }
                                */
                                else if(purchase_allowed_venue.trim() == '' || purchase_allowed_venue.trim() == undefined)
                                {
                            		alert('Please enter  no. of purchase allowed for venue');
                            		$('#purchase_allowed_venue').focus();
                            	    return false;
                                } 
                                else if(lead_type_venue.trim() == '' || lead_type_venue.trim() == undefined)
                                {
                            		alert('Please enter lead type for venue');
                            		$('#lead_type_venue').focus();
                            	    return false;
                                } 
                                else 
                                {
                                    chk10();
                                }
                            }
                        else
                        {
                            chk10();
                        }
                }
                
             function chk10()
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
                    let buyleads_package_type       = $("#buyleads_package_type").val();
                    
                    
                    let lead_description            = $("#lead_description").val();
                    //let lead_description_makeup     = $("#lead_description_makeup").val();
                    let lead_description_photovideo = $("#lead_description_photovideo").val();
                    let lead_description_catering   = $("#lead_description_catering").val();
                    let lead_description_flower     = $("#lead_description_flower").val();
                    let lead_description_mehendi    = $("#lead_description_mehendi").val();
                    let lead_description_priests    = $("#lead_description_priests").val();
                    let lead_description_dj         = $("#lead_description_dj").val();
                    
                    
                    let lead_description_venue    = $("#lead_description_venue").val();
                   
                     
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
                    
                    
                    
                    let buylead_event_category               = $("#buylead_event_category").val();
                    let purchase_allowed                     = $("#purchase_allowed").val();
                    
                    //let buylead_event_category_makeup        = $("#buylead_event_category_makeup").val();
                   //let purchase_allowed_makeup              = $("#purchase_allowed_makeup").val();
                    
                    let buylead_event_category_photo         = $("#buylead_event_category_photo").val();
                    let purchase_allowed_photo               = $("#purchase_allowed_photo").val();
                    
                    let buylead_event_category_catering      = $("#buylead_event_category_catering").val();
                    let purchase_allowed_catering            = $("#purchase_allowed_catering").val();
                    
                    
                    let buylead_event_category_flower        = $("#buylead_event_category_flower").val();
                    let purchase_allowed_flower              = $("#purchase_allowed_flower").val();
                    
                    
                    let buylead_event_category_mehendi       = $("#buylead_event_category_mehendi").val();
                    let purchase_allowed_mehendi             = $("#purchase_allowed_mehendi").val();
                    
                    let buylead_event_category_priests       = $("#buylead_event_category_priests").val();
                    let purchase_allowed_priests             = $("#purchase_allowed_priests").val();
                    
                    let buylead_event_category_dj            = $("#buylead_event_category_dj").val();
                    let purchase_allowed_dj                  = $("#purchase_allowed_dj").val();
                     
                    let buylead_event_category_venue       = $("#buylead_event_category_venue").val();
                    let purchase_allowed_venue             = $("#purchase_allowed_venue").val();
                    
                    
                    
                    
                    let buylead_event_category_meeting             = $("#buylead_event_category_meeting").val();
                    
                    //let buylead_event_category_meeting_makeup      = $("#buylead_event_category_meeting_makeup").val();
                    let buylead_event_category_meeting_photo       = $("#buylead_event_category_meeting_photo").val();
                    let buylead_event_category_meeting_catering    = $("#buylead_event_category_meeting_catering").val();
                    let buylead_event_category_meeting_flower      = $("#buylead_event_category_meeting_flower").val();
                    let buylead_event_category_meeting_mehendi     = $("#buylead_event_category_meeting_mehendi").val();
                    let buylead_event_category_meeting_priests     = $("#buylead_event_category_meeting_priests").val();
                    let buylead_event_category_meeting_dj          = $("#buylead_event_category_meeting_dj").val();
                    
                    let buylead_event_category_meeting_venue     = $("#buylead_event_category_meeting_venue").val();
                   
                    
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
                    
                    let lead_type_venue                           = $("#lead_type_venue option:selected").val(); 
                    
                    
                    let event_category              = "";
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
                    
                    form_data.append('buyleads_package_type', buyleads_package_type);
                    
                    form_data.append('lead_description', lead_description);
                    //form_data.append('lead_description_makeup', lead_description_makeup);
                    form_data.append('lead_description_photovideo', lead_description_photovideo);
                    form_data.append('lead_description_catering', lead_description_catering);
                    form_data.append('lead_description_flower', lead_description_flower);
                    form_data.append('lead_description_mehendi', lead_description_mehendi);
                    
                    
                    form_data.append('lead_description_venue', lead_description_venue);
                    
                    
                    
                    form_data.append('lead_description_priests', lead_description_priests);
                    form_data.append('lead_description_dj', lead_description_dj);
                    form_data.append('purchase_allowed', purchase_allowed);
                    form_data.append('status', status);
                    
                    form_data.append('state', state);
                    form_data.append('city', city);
                    form_data.append('buylead_event_category', buylead_event_category);
                    form_data.append('executive_name', executive_name);
                    form_data.append('wedding_type', wedding_type);
                    form_data.append('lead_time', lead_time);
                    
                    form_data.append('expiry_date', expiry_date);
                    form_data.append('audio_link', audio_link);
                    form_data.append('lead_source', lead_source); 
                    
                    form_data.append('leads_id', leads_id); 
                    form_data.append('item_lead_type', item_lead_type); 
                    
                    
                    //form_data.append('buylead_event_category_makeup', buylead_event_category_makeup); 
                    //form_data.append('purchase_allowed_makeup', purchase_allowed_makeup); 
                    form_data.append('buylead_event_category_photo', buylead_event_category_photo); 
                    form_data.append('purchase_allowed_photo', purchase_allowed_photo); 
                    form_data.append('buylead_event_category_catering', buylead_event_category_catering); 
                    form_data.append('purchase_allowed_catering', purchase_allowed_catering); 
                    form_data.append('buylead_event_category_flower', buylead_event_category_flower); 
                    form_data.append('purchase_allowed_flower', purchase_allowed_flower); 
                    form_data.append('buylead_event_category_mehendi', buylead_event_category_mehendi); 
                    form_data.append('purchase_allowed_mehendi', purchase_allowed_mehendi); 
                    form_data.append('buylead_event_category_priests', buylead_event_category_priests); 
                    form_data.append('purchase_allowed_priests', purchase_allowed_priests); 
                    form_data.append('buylead_event_category_dj', buylead_event_category_dj); 
                    form_data.append('purchase_allowed_dj', purchase_allowed_dj); 
                     form_data.append('purchase_allowed_venue', purchase_allowed_venue); 
                    
                     form_data.append('buylead_event_category_venue', buylead_event_category_venue); 
                    
                     
                    form_data.append('buylead_event_category_meeting', buylead_event_category_meeting); 
                    //form_data.append('buylead_event_category_meeting_makeup', buylead_event_category_meeting_makeup); 
                    form_data.append('buylead_event_category_meeting_photo', buylead_event_category_meeting_photo); 
                    form_data.append('buylead_event_category_meeting_catering', buylead_event_category_meeting_catering); 
                    form_data.append('buylead_event_category_meeting_flower', buylead_event_category_meeting_flower); 
                    form_data.append('buylead_event_category_meeting_mehendi', buylead_event_category_meeting_mehendi); 
                    form_data.append('buylead_event_category_meeting_priests', buylead_event_category_meeting_priests); 
                    form_data.append('buylead_event_category_meeting_dj', buylead_event_category_meeting_dj); 
                    
                    form_data.append('buylead_event_category_meeting_venue', buylead_event_category_meeting_venue); 
                   
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
                   
                   form_data.append('lead_type_venue', lead_type_venue);
                   
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
                }
        });
   
        $(document).on('click', '.edit', function(){
            
            resetinlineform();
            
            $('#store_image').html('');
            var id = $(this).attr("id");
            $('#form_output').html('');
            
            $('#package_type').prop('disabled',false);
            $('#package_type_meeting').prop('disabled',false);
            $('#wedding_budget').prop('disabled',false);
            
            $('#guest_budget').prop('disabled',false);  
             
            $('#venue_group').prop('disabled',false);   
            
            $('#weddingdate_fixed').prop('disabled',false);  
              
            $('#wedding_approx_period').prop('disabled',false);   
              
            $('#buyleads_package_type').prop('disabled',false);   
              
              
            $('#venue_allow_outsidevendors').prop('disabled',false);    
            
            $('#venuedetails').prop('disabled',false);   
              
              
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


                            //$('#purchase_allowed_makeup').val(data.buyleads_purchase_allowed_makeup);
                            $('#purchase_allowed_photo').val(data.buyleads_purchase_allowed_photovideo);
                            $('#purchase_allowed_catering').val(data.buyleads_purchase_allowed_caterers);
                            $('#purchase_allowed_flower').val(data.buyleads_purchase_allowed_flower);
                            $('#purchase_allowed_mehendi').val(data.buyleads_purchase_allowed_mehendi);
                            $('#purchase_allowed_priests').val(data.buyleads_purchase_allowed_priest);
                            $('#purchase_allowed_dj').val(data.buyleads_purchase_allowed_dj); 

                            $('#purchase_allowed_venue').val(data.buyleads_purchase_allowed_venue);
                            

                            $('#email').val(data.email);
                            $('#mobile').val(data.mobile);
                            $('#executive_name').val(data.executive_name);
                            
                            //$('#event_type').val(data.event_type);
                            //$("#package_type").val(data.package_type).trigger('change');
                            
                            
                            $("#lead_type").val(data.lead_type).trigger('change');

                            //$("#lead_type_makeup").val(data.buyleads_price_makeup).trigger('change');
                            $("#lead_type_photovideo").val(data.buyleads_price_photovideo).trigger('change');
                            $("#lead_type_catering").val(data.buyleads_price_catering).trigger('change');
                            $("#lead_type_flower").val(data.buyleads_price_flower).trigger('change');
                            $("#lead_type_mehendi").val(data.buyleads_price_mehendi).trigger('change');
                            $("#lead_type_priest").val(data.buyleads_price_priest).trigger('change');
                            $("#lead_type_dj").val(data.buyleads_price_dj).trigger('change'); 


                            $("#lead_type_venue").val(data.buyleads_price_venue).trigger('change');
                           

                            $("#status").val(data.status).trigger('change');
                            //$("#city").val(data.city).trigger('change');
                            //$('#event_date').val(data.event_date);
                            $('#expiry_date').val(data.expiry_date);
                            //$('#lead_time').val(data.lead_time);
                            
                            $('#audio_link').val(data.leads_link);
                             $("#wedding_type").val(data.wedding_type).trigger('change');
                             
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
                            
                            
                            
                            /*
                            var event_category = data.event_category;
                            var event_category_array = event_category.split(",");
                            
                            $('#event_category').val(event_category_array).trigger('change');
                            */
                            
                            var event_category_array = "";
                            var decorations_category = data.decorations_category;
                            
                            console.log(decorations_category);
                            
                            if(decorations_category == "" || decorations_category == null )
                            {
                                var decorations_category_array = "";
                            }
                            else
                            {
                                var decorations_category_array = decorations_category.split(",");
                            }
                            $('#decorations_category').val(decorations_category_array).trigger('change');
                            
                            
                            
                            
                            var buylead_event_category = data.buylead_event_category;
                            if(buylead_event_category == "" || buylead_event_category == null )
                            {
                                var buylead_event_category_array = "";
                            }
                            else
                            {
                                var buylead_event_category_array = buylead_event_category.split(",");
                            }
                            $('#buylead_event_category').val(buylead_event_category_array).trigger('change');
                            
                            
                            
                            
                            
                            /*
                                var buyleads_event_category_makeup = data.buyleads_event_category_makeup;
                                if(buyleads_event_category_makeup == "" || buyleads_event_category_makeup == null )
                                {
                                    var buyleads_event_category_makeup_array = "";
                                }
                                else
                                {
                                    var buyleads_event_category_makeup_array = buyleads_event_category_makeup.split(",");
                                }
                                $('#buylead_event_category_makeup').val(buyleads_event_category_makeup_array).trigger('change');
                            */
                             
                             
                             
                            var buyleads_event_category_photovideo = data.buyleads_event_category_photovideo;
                            if(buyleads_event_category_photovideo == "" || buyleads_event_category_photovideo == null )
                            {
                                var buyleads_event_category_photovideo_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_photovideo_array = buyleads_event_category_photovideo.split(",");
                            }
                            $('#buylead_event_category_photo').val(buyleads_event_category_photovideo_array).trigger('change');
                            
                             
                            var buyleads_event_category_catering = data.buyleads_event_category_catering;
                            console.log("buyleads_event_category_catering "+buyleads_event_category_catering);
                            if(buyleads_event_category_catering == "" || buyleads_event_category_catering == null )
                            {
                                var buyleads_event_category_catering_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_catering_array = buyleads_event_category_catering.split(",");
                            }
                            $('#buylead_event_category_catering').val(buyleads_event_category_catering_array).trigger('change');
                            
                            
                            
                            var buyleads_event_category_flower  = data.buyleads_event_category_flower;
                            if(buyleads_event_category_flower == "" || buyleads_event_category_flower == null )
                            {
                                var buyleads_event_category_flower_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_flower_array = buyleads_event_category_flower.split(",");
                            }
                            $('#buylead_event_category_flower').val(buyleads_event_category_flower_array).trigger('change');
                            
                            
                            
                            var buyleads_event_category_mehendi  = data.buyleads_event_category_mehendi;
                            if(buyleads_event_category_mehendi == "" || buyleads_event_category_mehendi == null )
                            {
                                var buyleads_event_category_mehendi_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_mehendi_array = buyleads_event_category_mehendi.split(",");
                            }
                            $('#buylead_event_category_mehendi').val(buyleads_event_category_mehendi_array).trigger('change');
                            
                            
                            
                            var buyleads_event_category_priests  = data.buyleads_event_category_priests;
                            if(buyleads_event_category_priests == "" || buyleads_event_category_priests == null )
                            {
                                var buyleads_event_category_priests_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_priests_array = buyleads_event_category_priests.split(",");
                            }
                            $('#buylead_event_category_priests').val(buyleads_event_category_priests_array).trigger('change');
                            
                            
                            
                            
                            var buyleads_event_category_dj  = data.buyleads_event_category_dj;
                            if(buyleads_event_category_dj == "" || buyleads_event_category_dj == null )
                            {
                                var buyleads_event_category_dj_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_dj_array = buyleads_event_category_dj.split(",");
                            }
                            $('#buylead_event_category_dj').val(buyleads_event_category_dj_array).trigger('change');
                            
                            
                            
                            var buyleads_event_category_venue  = data.buyleads_event_category_venue;
                            if(buyleads_event_category_venue == "" || buyleads_event_category_venue == null )
                            {
                                var buyleads_event_category_venue_array = "";
                            }
                            else
                            {
                                var buyleads_event_category_venue_array = buyleads_event_category_venue.split(",");
                            }
                            $('#buylead_event_category_venue').val(buyleads_event_category_venue_array).trigger('change');
                            
                            
                            if(showmeeting == "meeting")
                            {
                                $('#event_category_meeting').val(event_category_array).trigger('change');
                                
                                 $('#decorations_category').val(decorations_category_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting').val(buylead_event_category_array).trigger('change');
                                 
                                 //$('#buylead_event_category_meeting_makeup').val(buyleads_event_category_makeup_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_photo').val(buyleads_event_category_photovideo_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_catering').val(buyleads_event_category_catering_array).trigger('change');
                                  
                                 $('#buylead_event_category_meeting_flower').val(buyleads_event_category_flower_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_mehendi').val(buyleads_event_category_mehendi_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_priests').val(buyleads_event_category_priests_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_dj').val(buyleads_event_category_dj_array).trigger('change');
                                 
                                 $('#buylead_event_category_meeting_venue').val(buyleads_event_category_venue_array).trigger('change');
                                 
                                 
                                $("#package_type_meeting").val(data.package_type).trigger('change');
                                
                                $("#wedding_budget").val(data.wedding_budget).trigger('change');
                                
                                $("#guest_budget").val(data.guest_budget).trigger('change');
                                
                                $("#venue_group").val(data.venue_group).trigger('change');
                                
                                $("#weddingdate_fixed").val(data.weddingdate_fixed).trigger('change');
                                
                                $("#wedding_approx_period").val(data.wedding_approx_period).trigger('change');
                                
                                
                                /*
                                if(data.move_toleads =="1")
                                {
                                    $("#buyleads_package_type").val(data.buyleads_package_type).trigger('change');
                                }
                                 
                                $("#buyleads_package_type").val(data.buyleads_package_type).trigger('change');
                                
                                */
                    
                    
                                var buyleads_package_type = data.buyleads_package_type;
                            
                                console.log(buyleads_package_type);
                                
                                if(buyleads_package_type == "" || buyleads_package_type == null )
                                {
                                    var buyleads_package_type_array = "";
                                }
                                else
                                {
                                    var buyleads_package_type_array = buyleads_package_type.split(",");
                                    
                                    console.log("buyleads_package_type_array "+buyleads_package_type_array);
                                    
                                        var str1 = "wedding";
                                        if(buyleads_package_type_array.indexOf(str1) != -1)
                                        { 
                                            $("#leadweddingplanner").show();
                                            $('#lead_description').val(data.lead_description);
                                        }
                                        if(buyleads_package_type_array.indexOf(str1) == -1)
                                        { 
                                            $("#leadweddingplanner").hide();
                                        }
                                        
                                        /*
                                            var str2 = "makeup-artists";
                                            if(buyleads_package_type_array.indexOf(str2) != -1)
                                            { 
                                                $("#leadmakeup").show();
                                                $('#lead_description_makeup').val(data.buy_leads_description_lead_description_makeup);
                                            }
                                            if(buyleads_package_type_array.indexOf(str2) == -1)
                                            { 
                                                $("#leadmakeup").hide();
                                            }
                                        */
                                        
                                        
                                        var str3 = "photo&videographer";
                                        if(buyleads_package_type_array.indexOf(str3) != -1)
                                        { 
                                            $("#leadphotovideographer").show();
                                            $('#lead_description_photovideo').val(data.buy_leads_description_lead_description_photovideo);
                                        }
                                        if(buyleads_package_type_array.indexOf(str3) == -1)
                                        { 
                                            $("#leadphotovideographer").hide();
                                        }
                                        
                                        
                                        var str4 = "catering";
                                        if(buyleads_package_type_array.indexOf(str4) != -1)
                                        { 
                                            $("#leadcatering").show();
                                            $('#lead_description_catering').val(data.buy_leads_description_lead_description_catering);
                                        }
                                        if(buyleads_package_type_array.indexOf(str4) == -1)
                                        { 
                                            $("#leadcatering").hide();
                                        }
                                        
                                        
                                        
                                        var str5 = "flower-decorators";
                                        if(buyleads_package_type_array.indexOf(str5) != -1)
                                        { 
                                            $("#leadflowers").show();
                                            $('#lead_description_flower').val(data.buy_leads_description_lead_description_flower);
                                        }
                                        if(buyleads_package_type_array.indexOf(str5) == -1)
                                        { 
                                            $("#leadflowers").hide();
                                        }
                                        
                                        
                                        
                                        var str6 = "mehendi artist";
                                        if(buyleads_package_type_array.indexOf(str6) != -1)
                                        { 
                                            $("#leadmehendi").show();
                                            $('#lead_description_mehendi').val(data.buy_leads_description_lead_description_mehendi);
                                        }
                                        if(buyleads_package_type_array.indexOf(str6) == -1)
                                        { 
                                            $("#leadmehendi").hide();
                                        }
                                        
                                        
                                        var str7 = "priests";
                                        if(buyleads_package_type_array.indexOf(str7) != -1)
                                        { 
                                            $("#leadpriests").show();
                                            $('#lead_description_priests').val(data.buy_leads_description_lead_description_priests);
                                        }
                                        if(buyleads_package_type_array.indexOf(str7) == -1)
                                        { 
                                            $("#leadpriests").hide();
                                        }
                                        
                                        
                                        var str8 = "dj";
                                        if(buyleads_package_type_array.indexOf(str8) != -1)
                                        { 
                                            $("#leaddj").show();
                                            $('#lead_description_dj').val(data.buy_leads_description_lead_description_dj);
                                        }
                                        if(buyleads_package_type_array.indexOf(str8) == -1)
                                        { 
                                            $("#leaddj").hide();
                                        }
                                        
                                        
                                        
                                        var str9 = "Venue";
                                        if(buyleads_package_type_array.indexOf(str9) != -1)
                                        { 
                                            $("#leadvenue").show();
                                            $('#lead_description_venue').val(data.buy_leads_description_lead_description_venue);
                                        }
                                        if(buyleads_package_type_array.indexOf(str9) == -1)
                                        { 
                                            $("#leadvenue").hide();
                                        }
                                        
                                        
                                        
                                }
                                $('#buyleads_package_type').val(buyleads_package_type_array).trigger('change');
                                
                                
                        
                        
                        
                         
                    
                    
                    
                    
                                
                                $("#venue_allow_outsidevendors").val(data.venue_allow_outsidevendors).trigger('change');
                                
                                $("#venuedetails").val(data.venuedetails).trigger('change');
                                
                                $('#event_dates').val(data.event_date);
                                $('#event_date').val(data.event_date);
                                
                                $('#meeting_time').val(data.lead_time);
                                
                                
                                /*var d = (data.lead_time);
                                d = d.substr(0, 10).split("-");
                                
                                d = d[2] + "-" + d[1] + "-" + d[0];
                    
                                $('#meeting_time').val(d);*/
                                
                                $('#address').val(data.address);
                                
                                $('#meeting_expiry_date').val(data.expiry_date);
                                
                                
                                checkstate(data.buyleads_package_type,data.buyleads_package_type);
                                
                            }
                            else
                            {
                                $('#event_category').val(event_category_array).trigger('change');
                                $('#decorations_category').val(decorations_category_array).trigger('change');
                                
                                $('#buylead_event_category').val(buylead_event_category_array).trigger('change');
                                
                                //$('#buylead_event_category_makeup').val(buyleads_event_category_makeup_array).trigger('change');
                                
                                $('#buylead_event_category_photo').val(buyleads_event_category_photovideo_array).trigger('change');
                                
                                $('#buylead_event_category_catering').val(buyleads_event_category_catering_array).trigger('change');
                                
                                $('#buylead_event_category_flower').val(buyleads_event_category_flower_array).trigger('change');
                                
                                $('#buylead_event_category_mehendi').val(buyleads_event_category_mehendi_array).trigger('change');
                                
                                $('#buylead_event_category_priests').val(buyleads_event_category_priests_array).trigger('change');
                                
                                $('#buylead_event_category_dj').val(buyleads_event_category_dj_array).trigger('change');
                                
                                
                                 $('#buylead_event_category_venue').val(buyleads_event_category_venue_array).trigger('change');
                                
                                
                                $("#package_type").val(data.package_type).trigger('change');
                                $("#wedding_budget").val(data.wedding_budget).trigger('change');
                                
                                $("#guest_budget").val(data.guest_budget).trigger('change');
                                
                                $("#venue_group").val(data.venue_group).trigger('change');
                                
                                $("#weddingdate_fixed").val(data.weddingdate_fixed).trigger('change');
                                
                                $("#wedding_approx_period").val(data.wedding_approx_period).trigger('change');
                                
                                /*
                                    
                                    if(data.move_toleads =="1")
                                    {
                                        $("#buyleads_package_type").val(data.buyleads_package_type).trigger('change');
                                    }
                                    
                                    $("#buyleads_package_type").val(data.buyleads_package_type).trigger('change');
                                */
                    
                    
                    
                                var buyleads_package_type = data.buyleads_package_type;
                            
                                console.log(buyleads_package_type);
                                
                                if(buyleads_package_type == "" || buyleads_package_type == null )
                                {
                                    var buyleads_package_type_array = "";
                                }
                                else
                                {
                                    var buyleads_package_type_array = buyleads_package_type.split(",");
                                    
                                    console.log("buyleads_package_type_array "+buyleads_package_type_array);
                                    
                                        var str1 = "wedding";
                                        if(buyleads_package_type_array.indexOf(str1) != -1)
                                        { 
                                            $("#leadweddingplanner").show();
                                            $('#lead_description').val(data.lead_description);
                                        }
                                        if(buyleads_package_type_array.indexOf(str1) == -1)
                                        { 
                                            $("#leadweddingplanner").hide();
                                        }
                                        
                                        /*
                                            var str2 = "makeup-artists";
                                            if(buyleads_package_type_array.indexOf(str2) != -1)
                                            { 
                                                $("#leadmakeup").show();
                                                $('#lead_description_makeup').val(data.buy_leads_description_lead_description_makeup);
                                            }
                                            if(buyleads_package_type_array.indexOf(str2) == -1)
                                            { 
                                                $("#leadmakeup").hide();
                                            }
                                        */
                                        
                                        
                                        var str3 = "photo&videographer";
                                        if(buyleads_package_type_array.indexOf(str3) != -1)
                                        { 
                                            $("#leadphotovideographer").show();
                                            $('#lead_description_photovideo').val(data.buy_leads_description_lead_description_photovideo);
                                        }
                                        if(buyleads_package_type_array.indexOf(str3) == -1)
                                        { 
                                            $("#leadphotovideographer").hide();
                                        }
                                        
                                        
                                        var str4 = "catering";
                                        if(buyleads_package_type_array.indexOf(str4) != -1)
                                        { 
                                            $("#leadcatering").show();
                                            $('#lead_description_catering').val(data.buy_leads_description_lead_description_catering);
                                        }
                                        if(buyleads_package_type_array.indexOf(str4) == -1)
                                        { 
                                            $("#leadcatering").hide();
                                        }
                                        
                                        
                                        
                                        var str5 = "flower-decorators";
                                        if(buyleads_package_type_array.indexOf(str5) != -1)
                                        { 
                                            $("#leadflowers").show();
                                            $('#lead_description_flower').val(data.buy_leads_description_lead_description_flower);
                                        }
                                        if(buyleads_package_type_array.indexOf(str5) == -1)
                                        { 
                                            $("#leadflowers").hide();
                                        }
                                        
                                        
                                        
                                        var str6 = "mehendi artist";
                                        if(buyleads_package_type_array.indexOf(str6) != -1)
                                        { 
                                            $("#leadmehendi").show();
                                            $('#lead_description_mehendi').val(data.buy_leads_description_lead_description_mehendi);
                                        }
                                        if(buyleads_package_type_array.indexOf(str6) == -1)
                                        { 
                                            $("#leadmehendi").hide();
                                        }
                                        
                                        
                                        var str7 = "priests";
                                        if(buyleads_package_type_array.indexOf(str7) != -1)
                                        { 
                                            $("#leadpriests").show();
                                            $('#lead_description_priests').val(data.buy_leads_description_lead_description_priests);
                                        }
                                        if(buyleads_package_type_array.indexOf(str7) == -1)
                                        { 
                                            $("#leadpriests").hide();
                                        }
                                        
                                        
                                        var str8 = "dj";
                                        if(buyleads_package_type_array.indexOf(str8) != -1)
                                        { 
                                            $("#leaddj").show();
                                            $('#lead_description_dj').val(data.buy_leads_description_lead_description_dj);
                                        }
                                        if(buyleads_package_type_array.indexOf(str8) == -1)
                                        { 
                                            $("#leaddj").hide();
                                        }
                                        
                                        
                                        
                                        
                                        var str9 = "Venue";
                                        if(buyleads_package_type_array.indexOf(str9) != -1)
                                        { 
                                            $("#leadvenue").show();
                                            $('#lead_description_venue').val(data.buy_leads_description_lead_description_venue);
                                        }
                                        if(buyleads_package_type_array.indexOf(str9) == -1)
                                        { 
                                            $("#leadvenue").hide();
                                        }
                                        
                                        
                                }
                                
                                $('#buyleads_package_type').val(buyleads_package_type_array).trigger('change');
                                
                    
                                $("#venue_allow_outsidevendors").val(data.venue_allow_outsidevendors).trigger('change');
                                
                                $("#venuedetails").val(data.venuedetails).trigger('change');
                                
                                
                                $('#event_date').val(data.event_date);
                                
                                $('#lead_time').val(data.lead_time);
                                
                                /*var d = (data.lead_time);
                                d = d.substr(0, 10).split("-");
                                
                                d = d[2] + "-" + d[1] + "-" + d[0];
                                $('#lead_time').val(d);*/
                    
                                $('#address').val('');
                                
                                
                                checkstate(data.buyleads_package_type,data.buyleads_package_type);
                            }
                            
                            //$("#event_category").val(data.event_category).trigger('change');
                            
                            $('#city_location').val(data.city_location);
                            $('#event_location').val(data.event_location);
                            
                            $('#venuename').val(data.venuename);
                            
                            $("#lead_source").val(data.lead_source).trigger('change');
                            
                            if(data.package_type == 'wedding' || data.package_type == 'wedding decorators' || data.package_type == 'wedding photographer / videographer')
                            {
                                $('#weddingtype').show();
                                
                                $("#wedding_type").val(data.wedding_type).trigger('change');
                            }
                            
                            
                            if(data.venue_group=="venueno")
                            {
                                $("#venuenamedetails").hide();
                                $("#venueallowdetails").hide();
                                 $("#venueassist").show(); 
                            }
                            
                            
                            if(data.venue_group=="venueyes")
                            {
                                $("#venueassist").hide(); 
                                $("#venuenamedetails").show();
                                $("#venueallowdetails").show();
                            }
                            
                            
                            
                            if(data.weddingdate_fixed=="dateyes")
                            {
                                $("#weddingno").hide(); 
                                 $("#weddingyes").show(); 
                            }
                            
                            if(data.weddingdate_fixed=="dateno")
                            {
                                $("#weddingno").show(); 
                                 $("#weddingyes").hide(); 
                            }
                            
                            //var array = data.event_category_array;
                             // array = [];
                             
                                  /*
                                   var event_categoris = data.event_category;
                                   var event_categoris_arrays = event_categoris.split(",");
                                  */
                                  
                                  var event_categoris_arrays = "";
                                     //var event_category_arrays = event_categorys;
                                     //console.log(event_category_arrays);
                                     
                                    
                                      if ((jQuery.inArray('Wedding Decorations', event_categoris_arrays))  !== -1)
                                      {
                                          $("#serviceswedding").show();
                                          console.log("wed");
                                      }
                                      if((jQuery.inArray('Wedding Decorations', event_categoris_arrays))  == -1)
                                      {
                                          $("#serviceswedding").hide();
                                          console.log("no wed");
                                      }
                                    
                                      if  ((jQuery.inArray('Wedding Decorations', event_categoris_arrays)) !== -1)
                                      {
                                          $("#wedding_budget").show();
                                          $("#guest_budget").show();
                                      }
                                   
                                   
                                   
                                      //$("#state").val(data.stateid).trigger('change');
                                        $('#state').val(data.stateid).trigger('change');
                                        
                                        //console.log("city"+data.buyleads_city);
                                        
                                         var buyleads_city = data.buyleads_city;
                                         
                                         /*
                                             if(buyleads_city == "" || buyleads_city == null )
                                            {
                                                var buyleads_city_array = "";
                                            }
                                            else
                                            {
                                                var buyleads_city_array = buyleads_city.split(",");
                                            }
                                        
                                        
                                            //console.log("buyleads_city"+buyleads_city_array);
                                        
                                        
                                            $('#cityselectd').val(buyleads_city_array).trigger('change');
                            
                            
                                            $('#statecapitalchosen').val(data.state_capital).trigger('change');
                                       */
                                       
                                       
                                       
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
                        var response = ajaxresponse; Swal.close();
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
                        var response = ajaxresponse; Swal.close();
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
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse; Swal.close();
                        //response = JSON.parse(response);

                        if(response.status == 1)
                        {
                            alert('Lead assigned to event planner');
                            $('#yoee_lead_id').val('');
                            $('#yoee_eventplanner_id').val('');
                        }
                        else
                        {
                            alert('Error is assigning lead');
                        }
                    },
                    error: function(a,b)
                    {
                        alert('Error in server please try again later');
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
                        var response = ajaxresponse; Swal.close();
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
        
        
        
        
        
        
        $(document).on('click', '.move', function(){
            var id = $(this).attr('id');
            if(confirm("Are you sure you want to move this data?"))
            {
                $.ajax({
                    url:"/"+userdatatype+"/custom-leads/movedata/"+id,
                    method:"GET",
                    data:{id:id},
                    cache: false,
                    dataType:"json",
                    contentType: false,
                    processData: false,
                    async: true,
                    beforeSend: function() 
        	        {
                        // setting a timeout 
                        $('.move').attr("disabled",true);
                    },
                    success: function(ajaxresponse,status)
                    {
                        var response = ajaxresponse; Swal.close();
                        //response = JSON.parse(response);

                        //if(response.status == 1)
                        
                        
                        if(response.status == 1)
                        {
                            alert('moved successfully');
                            $("#leads_table").dataTable().fnDestroy();
                            loadTables();
                            $('.move').attr("disabled",false);
                        }
                        /*else if(response.status == 3)
                        {
                            alert('Please assign a user to send mail');
                        }*/
                        else if(response.status == 4)
                        {
                            alert(response.message);
                            $("#leads_table").dataTable().fnDestroy();
                            loadTables();
                            $('.move').attr("disabled",false);
                        }
                        else if(response.status == 2)
                        {
                            alert('Not moved. Enter respective detail by clicking edit button before moving');
                            $("#leads_table").dataTable().fnDestroy();
                            loadTables(); 
                            $('.move').attr("disabled",false);
                        }
                        else
                        {
                            alert('error in moving data to buy lead. please check mail server or try again later in some time');
                            $('.move').attr("disabled",false);
                            //$("#leads_table").dataTable().fnDestroy();
                            //loadTables();
                        }
                    },
                    error: function(a,b)
                    {
                       // alert('Not able to move');
                        //$("#leads_table").dataTable().fnDestroy();
                        //loadTables();
                         $('.move').attr("disabled",false);
                    }
                });
            }
            else
            {
                return false;
            }
        });
        
        
        $('.your-select-dropdown-class').select2();
        $('#venue_group').on('change', function(){
            	var venue_group = $(this).val(); 
            	
            	if(venue_group=="venueyes")
            	{
            	    $("#venuenamedetails").show();
            	    $("#venueallowdetails").show();
            	    $("#venueassist").hide();
            	}
            	else if(venue_group=="venueno")
            	{
            	    $("#venueassist").show();
            	    $("#venuenamedetails").hide();
            	    $("#venueallowdetails").hide();
            	}
            	else
            	{
            	    $("#venuenamedetails").hide();
            	    $("#venueallowdetails").hide();
            	    $("#venueassist").hide();
            	} 
            }); 
        $('#weddingdate_fixed').on('change', function(){
            	var weddingdate_fixed = $(this).val(); 
            	
            	if(weddingdate_fixed=="dateyes")
            	{ 
            	    $("#weddingyes").show();
            	    $("#weddingno").hide();
            	}
            	else if(weddingdate_fixed=="dateno")
            	{
            	    $("#weddingno").show();
            	    $("#weddingyes").hide(); 
            	}
            	else
            	{
            	    $("#weddingyes").hide();
            	    $("#weddingno").hide(); 
            	} 
            });
        
    });

    function isNumber(evt) 
        {
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
    
    /*
    $(document).ready(function() {
        $('.your-select-dropdown-class').select2();
    });
    */
    
    function resetinlineform()
    {
        //$("#user_id option:first").prop('selected','selected').change();
        //$("#user_id").val('').trigger('change');
        
        $("#purchase_allowed").val('');
        $("#package_type option:first").prop('selected','selected').change();
        
        $("#wedding_budget option:first").prop('selected','selected').change();
        
        $("#guest_budget option:first").prop('selected','selected').change();
        
        $("#venue_group option:first").prop('selected','selected').change();
        
        $("#weddingdate_fixed option:first").prop('selected','selected').change();
        
        $("#wedding_approx_period option:first").prop('selected','selected').change();
        
        $("#buyleads_package_type option:first").prop('selected','selected').change();
        
        
        
        $("#venue_allow_outsidevendors option:first").prop('selected','selected').change();
        
        $("#venuedetails option:first").prop('selected','selected').change();
        
        
        $("#status option:first").prop('selected','selected').change();
        $("#lead_type option:first").prop('selected','selected').change();
        //$("#city option:first").prop('selected','selected').change();
        
        //$("#event_category").val('').trigger('change');
        $('#event_category').val(null).trigger('change');
        
        $('#decorations_category').val(null).trigger('change');    
        
        
        
        
        $('#buylead_event_category_array').val(null).trigger('change');
        
        //$('#buyleads_event_category_makeup_array').val(null).trigger('change');
        
        $('#buyleads_event_category_photovideo_array').val(null).trigger('change');
        
        $('#buylead_event_category_catering_array').val(null).trigger('change');
        
        $('#buylead_event_category_flower_array').val(null).trigger('change');
        
        $('#buylead_event_category_mehendi_array').val(null).trigger('change');
        
        $('#buylead_event_priests_array').val(null).trigger('change');
        
        $('#buylead_event_dj_array').val(null).trigger('change');
        
        
        
        $('#buylead_event_category_venue_array').val(null).trigger('change');
        
        
        $('#buylead_event_category').val(null).trigger('change');
        $('#buylead_event_category_meeting').val(null).trigger('change');
        
        
        //$('#buylead_event_category_makeup').val(null).trigger('change');
        //$('#buylead_event_category_meeting_makeup').val(null).trigger('change');
        
        
        $('#buylead_event_category_photo').val(null).trigger('change');
        $('#buylead_event_category_meeting_photo').val(null).trigger('change');
        
        
        $('#buylead_event_category_catering').val(null).trigger('change');
        $('#buylead_event_category_meeting_catering').val(null).trigger('change');
        
        
        $('#buylead_event_category_flower').val(null).trigger('change');
        $('#buylead_event_category_meeting_flower').val(null).trigger('change');
        
        
        $('#buylead_event_category_mehendi').val(null).trigger('change');
        $('#buylead_event_category_meeting_mehendi').val(null).trigger('change');
        
        $('#buylead_event_category_priests').val(null).trigger('change');
        $('#buylead_event_category_meeting_priests').val(null).trigger('change');
        
        $('#buylead_event_category_dj').val(null).trigger('change');
        $('#buylead_event_category_meeting_dj').val(null).trigger('change');
        
        $('#buylead_event_category_venue').val(null).trigger('change');
        $('#buylead_event_category_meeting_venue').val(null).trigger('change');
        
        
        $("#meeting_time").val('');
        $("#meeting_expiry_date").val('');
        
        $("#event_dates").val('');
        $("#package_type_meeting option:first").prop('selected','selected').change();
        $('#event_category_meeting').val(null).trigger('change');
        
        $('#buylead_event_category_meeting').val(null).trigger('change');
        
        //$('#buylead_event_category_meeting_makeup').val(null).trigger('change');
        
        $("#city").val(null).trigger('change');
        $("#statecapital").val(null).trigger('change');
        $("#state").val(null).trigger('change');
        $('.cityshow').hide();
        $('.statecapshow').hide();
        
    } 
    
    
    
    
    function checkstate(package_type,leadtype)
            { 
                
                
               
                var package_type = package_type;
                
                var leadtype = package_type;
                console.log("package_type - "+package_type);
                 console.log("lead_type - "+lead_type);
                
                 $.ajax
                 ({
                    //url:"/"+userdatatype+"/custom-leads/getcities/"+stateid, 
                    url:"/"+userdatatype+"/custom-leads/getstate/"+package_type,
                    
                    type: "GET",
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    data:{"lead_type":lead_type},
                    success: function(ajaxresponse,xhrstatus)
                     {
                        var response = ajaxresponse; Swal.close();
                        var lastquoteid = response.lastquoteid;
                         
                            var response = ajaxresponse; Swal.close();
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
       //dateFormat: "YYYY-MM-DD HH:MM",
       
       //dateFormat: "d/m/Y H:i", 20/10/2022 12:00
       
       // dateFormat: "d/m/Y", 
       
       dateFormat: "Y-m-d H:i",
       
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
    
    function loadTables() 
    {
        var cityname = $("#cityname option:selected").val();
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
                    "data": 'cusleaddetails',
                    "name": 'cusleaddetails',
                    "searchable": true,
                }, 
                {
                    "data": 'cusdetails',
                    "name": 'cusdetails',
                    "searchable": true,
                },
               /* {
                    "data": "statusrow",
                    "name": 'statusrow',
                    "orderable":false,
                    "searchable": false,
                },*/
                {
                    "data": "typerow",
                    "name": 'typerow',
                    "orderable":false,
                    "searchable": false,
                },
               /* {
                    "data": "explainrow",
                    "name": 'explainrow',
                    "orderable":false,
                    "searchable": false,
                },
		 {
                    "data": "pricerow",
                    name: 'pricerow',
                    orderable:false,
                    searchable: false,
                    width:"100%"
                },*/
                {
                    "data": "remarksrow",
                    name: 'remarksrow',
                    orderable:false,
                    searchable: false,
                    width:"100%"
                },
               
                { "data": "action", orderable:false, searchable: false, "width":"5%"},
                { "data":"checkbox", orderable:false, searchable:false,"width":"5%"}
                /*,
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
                { "data": "purchased", orderable:false, searchable: false},
                { "data": "action", orderable:false, searchable: false}*/
                
                
                //{ "data":"checkbox", orderable:false, searchable:false}
            ]
        });
    }
    
    $('#weddingtype').hide();
    
    function showhideweddingtype()
    {
        var package_type = $("#package_type option:selected").val();
        var package_type_meeting = $("#package_type_meeting option:selected").val();
        
        var wedding_budget = $("#wedding_budget option:selected").val();
        
        var guest_budget = $("#guest_budget option:selected").val();
        
        var venue_group = $("#venue_group option:selected").val();
        
        var weddingdate_fixed = $("#weddingdate_fixed option:selected").val();
        
        var wedding_approx_period = $("#wedding_approx_period option:selected").val();
        
        var buyleads_package_type = $("#buyleads_package_type option:selected").val(); 
        
        
        var venue_allow_outsidevendors = $("#venue_allow_outsidevendors option:selected").val();
        
        var venuedetails = $("#venuedetails option:selected").val();
        
        
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
        var event_meeting = $("#meeting_leadtype option:selected").val();
        
        if(event_meeting == 'In Person Meeting' || event_meeting == 'Office Location' || event_meeting == 'Client Place')
        {
            $('#address').show();
        }
        else
        {
            $('#address').hide();
        }
    }

    function saveremarks(value)
    {
        var paylid = value;
        var remarks = $('#remarks-'+paylid).val();
        //var remarks = remarks.replace(/(?:\r\n|\r|\n)/g, '<br />');

        remarks = encodeURIComponent(remarks);
        
        if(remarks == undefined || remarks == "")
        {
            remarks = 'na';
        }

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/saveremarks/"+paylid+"/"+remarks,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            data:{"paylid":paylid,"remarks":remarks},
            success: function(ajaxresponse,xhrstatus)
            {
                var response = ajaxresponse; Swal.close();
                var lastquoteid = response.lastquoteid;

                if(lastquoteid == 'updated')
                {
                    alert('Remarks Updated');
                }
                else
                {
                    alert('Sorry the remaks could not be updated. Check connection or try again');
                }
            },
            error: function(a,b)
            {
                alert('Sorry the remaks could not be updated. Check connection or try again');
            }
        });
    }
    
    
     function setvalue(value)
    {
        var elementId = value;
        var valueItem = $('#selectid'+elementId).val();

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/setvalue/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                var itemvalue = "0";
                if(valueItem == "Bangalore")
                {
                    itemvalue = "Bangalore";
                }
                else if(valueItem == "Hyderabad")
                {
                    itemvalue = "Hyderabad";
                }
                else if(valueItem == "Chennai")
                {
                    itemvalue = "Chennai";
                }
                else if(valueItem == "Delhi")
                {
                    itemvalue = "Delhi";
                }
                else if(valueItem == "Goa")
                {
                    itemvalue = "Goa";
                }
                var response = ajaxresponse; Swal.close();
                alert('City changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
                            
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    }
    
    
    function settype(value)
    {
        var elementId = value;
        var valueItem = $('#typeid'+elementId).val();

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/settype/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                /*
                var itemvalue = "0";
                if(valueItem == "Buy Lead")
                {
                    itemvalue = "Buy Lead";
                }
                else if(valueItem == "Meeting")
                {
                    itemvalue = "Meeting";
                } 
                */
                
                var itemvalue =  valueItem;
                
                var response = ajaxresponse; Swal.close();
                
                alert('Type changed to : ' + itemvalue);
                 
                
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
                            
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    }
    
    function setleadtype(value)
    {
        var elementId = value;
        var valueItem = $('#leadtypeid'+elementId).val();

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/setleadtype/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                var itemvalue = "0";
                if(valueItem == "Connect over call")
                {
                    itemvalue = "Connect over call";
                }
                else if(valueItem == "Virtual Meeting")
                {
                    itemvalue = "Virtual Meeting";
                } 
                else if(valueItem == "Office Location")
                {
                    itemvalue = "Office Location";
                } 
                else if(valueItem == "Client Place")
                {
                    itemvalue = "Client's Place";
                } 
                var response = ajaxresponse; Swal.close();
                alert('Meeting Type changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
                            
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    }
     
    function savemeetingaddress(value)
    {
        var paylid = value;
        var meetingaddress = $('#meetingaddress-'+paylid).val();
        //var remarks = remarks.replace(/(?:\r\n|\r|\n)/g, '<br />');

        meetingaddress = encodeURIComponent(meetingaddress);
        
        if(meetingaddress == undefined || meetingaddress == "")
        {
            meetingaddress = 'na';
        }

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/savemeetingaddress/"+paylid+"/"+meetingaddress,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            data:{"paylid":paylid,"meetingaddress":meetingaddress},
            success: function(ajaxresponse,xhrstatus)
            {
                var response = ajaxresponse; Swal.close();
                var lastquoteid = response.lastquoteid;

                if(lastquoteid == 'updated')
                {
                    alert('meeting address Updated');
                }
                else
                {
                    alert('Sorry the meeting address could not be updated. Check connection or try again');
                }
            },
            error: function(a,b)
            {
                alert('Sorry the meeting address could not be updated. Check connection or try again');
            }
        });
    }
    
    function setprice(value)
    {
        var elementId = value;
        var valueItem = $('#priceid'+elementId).val();

        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/setprice/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                var itemvalue = "0";
                
                if(valueItem == "active")
                {
                    itemvalue = "100 (Rs. 100)";
                }
                else if(valueItem == "super active")
                {
                    itemvalue = "150 (Rs. 150)";
                }
                else if(valueItem == "Premium")
                {
                    itemvalue = "Gold (Rs. 200)";
                }
                else if(valueItem == "hot")
                {
                    itemvalue = "Hot (Rs. 250)";
                }
                else if(valueItem == "platinum")
                {
                    itemvalue = "Platinum (Rs. 350)";
                }
                else if(valueItem == "Ultra Premium")
                {
                    itemvalue = "Ultra Premium (Rs. 500)";
                }
                else if(valueItem == "diamond")
                {
                    itemvalue = "Diamond (Rs. 750)";
                }
                else if(valueItem == "Overwhelming")
                {
                    itemvalue = "Overwhelming (Rs. 1000)";
                } 
                var response = ajaxresponse; Swal.close();
                alert('Price changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
                            
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
$(document).ready(function(){
        $('#venue_group').on('change', function(){
        	var venue_group = $(this).val(); 
        	
        	if(venue_group=="venueyes")
        	{
        	    $("#venuenamedetails").show();
        	    $("#venueallowdetails").show();
        	    $("#venueassist").hide();
        	}
        	else if(venue_group=="venueno")
        	{
        	    $("#venueassist").show();
        	    $("#venuenamedetails").hide();
        	    $("#venueallowdetails").hide();
        	}
        	else
        	{
        	    $("#venuenamedetails").hide();
        	    $("#venueallowdetails").hide();
        	    $("#venueassist").hide();
        	} 
        });
        
        
        
         $(function(){ 
             
             
             
                $('#buyleads_package_type').change(function(){
              
                var lead_type= $(this).val();
                console.log("lead_type"+lead_type);
                
                var package_type = $("#buyleads_package_type").val();
                
                if(package_type == null || package_type == "" || package_type == undefined || package_type == '')
                { 
                    $('#buyleads_package_type').focus();
                    
                    $('#buyleads_package_type').css("border", "1px solid red");
                }
                else 
                {
                    
                    
                    $('#buyleads_package_type').css("border", "1px solid #ced4da");
                     $.ajax
                     ({
                        //url:"/"+userdatatype+"/custom-leads/getcities/"+stateid, 
                        url:"/"+userdatatype+"/custom-leads/getstate/"+package_type,
                        
                        type: "GET",
                        contentType: false,
                        cache:false,
                        processData: false,
                        dataType:"json",
                        data:{"lead_type":lead_type},
                        success: function(ajaxresponse,xhrstatus)
                         {
                            var response = ajaxresponse; Swal.close();
                            var lastquoteid = response.lastquoteid;
                             
                                var response = ajaxresponse; Swal.close();
                                var status = response.status; 
                                var statesdata = response.statesdata; 
                                //var userscount = response.userscount; 
                                 
                               
                                 $('#state').find("option:gt(0)").remove(); 
                                         
                                //console.log("userscount"+userscount);
                                
                                $.each(statesdata, function( key, value ) { 
                                    
                                    $('#state').append('<option value="'+value.id+'">'+value.state_name+'  - <div class="">'+value.counts+'</div></option>'); 
                                });
                                
                                
                         },
                        
                     });
                }
                
            }); 
             
            
            
            
            $('#state').change(function(){
              
                var stateid= $(this).val();
                console.log("stateid "+stateid);
                
                var package_type = $("#buyleads_package_type").val();
                console.log("package_typepackage_type "+package_type);
                
                if(package_type == null || package_type == "" || package_type == undefined || package_type == '')
                { 
                    $('#buyleads_package_type').focus();
                    
                    $('#buyleads_package_type').css("border", "1px solid red");
                }
                else 
                {
                    
                    
                    $('#buyleads_package_type').css("border", "1px solid #ced4da");
                     $.ajax
                     ({
                        //url:"/"+userdatatype+"/custom-leads/getcities/"+stateid,
                        
                        url:"/"+userdatatype+"/custom-leads/getcities/"+stateid+"/"+package_type,
                        
                        type: "GET",
                        contentType: false,
                        cache:false,
                        processData: false,
                        dataType:"json",
                        data:{"stateid":stateid},
                        success: function(ajaxresponse,xhrstatus)
                         {
                            var response = ajaxresponse; Swal.close();
                            var lastquoteid = response.lastquoteid;
                             
                                var response = ajaxresponse; Swal.close();
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
                                  //alert( key + ": " + value );
                                  // $('#city').append('<option value="'+value.name+'">'+value.name+'  - <div class="">(25)</div></option>'); 
                                   /*var $city = $('#city');
                                   
                                   for (var i = 0; i < data.length; i++) {
                                        var o = $('<option/>', { value: data[i] })
                                            .text(data[i])
                                            .prop('selected', i == 0);
                                        o.appendTo($city);
                                    }*/
                                   
                                   /*var data = ['a', 'b', 'c'];
                                    var $city = $('#city'); // you might wanna empty it first with .empty()
                                    
                                    for (var i = 0; i < key; i++) {
                                        var o = $('<option/>', { value: data[i] })
                                            .text(data[i])
                                            .prop('selected', i == 0);
                                        o.appendTo($city);
                                    }*/
                                    
                                    /*
                                    $('#city')
                                        .find('option')
                                        .remove()
                                        .end()
                                        .append('<option value="'+value.name+'">'+value.name+'  - <div class="">(25)</div></option>')
                                        .val(''+value.name+'')
                                    ;
                                    */
                                    
                                    /*
                                        $('#city').append('<option value="'+value.district_name+'">'+value.district_name+'  - <div class="">'+value.counts+'</div></option>'); 
                                    */
                                    
                                    $('#city').append('<option value="'+value.district_name+'">'+value.district_name+' </option>'); 
                                });
                                
                                /*
                                $.each(statesdata, function( key, value ) {
                                   
                                    $('#statecapital').append('<option value="">Choose</option><option value="'+value.statecapital+'">'+value.statecapital+'  - <div class="">'+value.counts+'</div></option>'); 
                                });
                                */
                         },
                        
                     });
                }
                
            }); 
       }); 
        
        
        
         $('#weddingdate_fixed').on('change', function(){
        	var weddingdate_fixed = $(this).val(); 
        	
        	if(weddingdate_fixed=="dateyes")
        	{ 
        	    $("#weddingyes").show();
        	    $("#weddingno").hide();
        	}
        	else if(weddingdate_fixed=="dateno")
        	{
        	    $("#weddingno").show();
        	    $("#weddingyes").hide(); 
        	}
        	else
        	{
        	    $("#weddingyes").hide();
        	    $("#weddingno").hide(); 
        	} 
        });
        
});
</script> 
<script>
    function submitform (id,dataid)
    {
            var leadid = id;
            var epid = dataid;  
            var followupdate = $('#followddate-'+leadid).val();
            
            /*
                console.log("leadid"+leadid);
                console.log("epid"+epid);
                console.log("followupdate"+followupdate);
            */
            
            if(followupdate == '' || followupdate == undefined)
            {
                followupdate = '';
            }
            else if(!(followupdate == '' || followupdate == undefined))
            {
                var followon = followupdate;
            }
             $.ajax
            ({
                type: "GET",
                //url: "http://websitezweb.com/api/v1/generalleadsremarks",
                url:"/"+userdatatype+"/custom-leads/leadfollowup",
                dataType: 'json',
                
                data: { "leadid": leadid, "epid": epid , "followon": followon},
                success: function (ajaxresponse)
                {
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var message = response.message;
                    if(status == 1)
                    {
                        console.log(message);
                        //$("p.doneshowconnect#this-"+leadid).text(message);
                        //alert('Remarks Updated ');
                        
                        //setTimeout(function(){ $("p.doneshowconnect#this-"+leadid).text(message); }, 2500);
                        
                         setTimeout(function() {
                            $("p.doneshowconnect#this-"+leadid).text(message).fadeIn('slow');
                        }, 200);
                        
                         setTimeout(function() {
                            $("p.doneshowconnect#this-"+leadid).text(message).fadeOut('slow');
                        }, 2000);
                    }
                    else
                    {
                        console.log(message);
                        //$("p.doneshowconnect#this-"+leadid).text(message);
                        // alert('Sorry detail could not be updated. Check connection or try again');
                       
                        //setTimeout(function(){ $("p.doneshowconnect#this-"+leadid).text(message); }, 2500);
                    }
                },
                error: function(response) 
                {
                    alert('Check connection or try again');
                },
                complete:function(data)
                {
                    console.log("data saved completes");
                }
            }) 
    }
    
     $(document).ready(function(){
         countfunction();
    });
    
    
    function countfunction()
    {
        $.ajax({ 
          url: url_chatcount,
         // url:"/"+userdatatype+"/chat-form/chatcountpopupdetail",
          method:'get', 
          dataType:'json',
          
          success: function (ajaxresponse)
          {
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var message = response.message;
                     
                       if(status==1)
                      {
                          setTimeout(function() {
                                $('#exampleModalCenter').modal('show');
                          }, 1000); 
                      } 
                    
          }
      })
    }
     
     function myFunction(connected_by) {
       
      
      $.ajax({ 
          url: url_chatshow,
          //url:"/"+userdatatype+"/chat-form/chatpopupshowdetail",
          method:'get',
          data:{connected_by:connected_by},
          dataType:'json',
          
          success: function (ajaxresponse)
          {
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var message = response.message;
                    
                    var data = response.data;
                    
                    var counter = 0;
                    
                  
                    var result = '';
                    var counter="0";
                    for(var i = 0; i < data.length; i++) {
                        counter++;
                        result += '<div class="row">';
                        
                            result += '<div class="col-md-5">';
                            
                                if((data[i].customer_name)=="NULL" || (data[i].customer_name)==null)
                                    {
                                        name = "Not Mentioned";
                                    }
                                    else
                                    {
                                        name =data[i].customer_name;
                                    }
                            
                                result += '<p> <a href="#"> '+counter+') <b>Name : </b>' + name;
                                result += '</a> </p>';
                                
                                /*if((data[i].assigntorole) == "10")
                                {
                                    result += ' <p> - <b> Managed by  :</b> Jinesh </p>';
                                }
                                else if((data[i].assigntorole) == "11")
                                {
                                    result += ' <p> - <b> Managed by  :</b> Harsha </p>';
                                }
                                else if((data[i].assigntorole) == "12")
                                {
                                    result += ' <p> - <b> Managed by  :</b> Pushpa priya </p>';
                                }
                                else
                                {
                                    result += ' <p> - <b> Managed by  :</b> Admin </p>';
                                }*/
                            
                             
                            if((data[i].connected_by)=="NULL" || (data[i].connected_by)==null)
                            {
                                connected_by = "admin";
                            }
                            else if((data[i].connected_by)=="7138")
                            {
                                connected_by = "Sowmya";
                            }
                            else if((data[i].connected_by)=="972")
                            {
                                connected_by = "Pooja";
                            }
                            else if((data[i].connected_by)=="7140")
                            {
                                connected_by = "Kavitha";
                            }
                            else if((data[i].connected_by)=="7175")
                            {
                                connected_by = "Sumaa";
                            }
                             else if((data[i].connected_by)=="1123")
                            {
                                connected_by = "Afsana";
                            }
                            
                            
                            else if((data[i].connected_by)=="16950")
                            {
                                connected_by = "Sujatha";
                            }
                            
                            else if((data[i].connected_by)=="7233")
                            {
                                connected_by = "Jinesh";
                            }
                            else if((data[i].connected_by)=="17943")
                            {
                                connected_by = "Harsha";
                            }
                            else
                            {
                                connected_by =data[i].connected_by;
                            }
                            result += ' <p> - <b> Connected by  :</b> '+connected_by+' </p>';
                             
                            result += '</div>';
                            
                            
                            if((data[i].customer_mobile)=="NULL" || (data[i].customer_mobile)==null)
                                    {
                                        mobile = "Not Mentioned";
                                    }
                                    else
                                    {
                                        mobile =data[i].customer_mobile;
                                    }
                                    
                            result += '<div class="col-md-4">';
                            result += '<p>-  <b> Mobile : </b> <a href="tel:'+mobile+'" style="text-decoration: underline;color: #0020ff;">' + mobile;
                            result += '</a> </p></div>';
                            
                            if((data[i].follow_done) == "done")
                            {
                                result += '<div class="col-md-2">';
                                result += '<select name="donestatus-('+data[i].id+','+data[i].id+','+data[i].id+')" class="goalselect form-control" id="donestatus-'+data[i].id+'-'+data[i].id+'-'+data[i].id+'" onchange="submitdoneform('+data[i].id+','+data[i].id+','+data[i].id+')"><option value="" disabled>--Select---</option> <option value="done" selected>Done</option> <option value="not-done">Not Done</option> </select>';
                                result += '</div>';
                            }
                            else if((data[i].follow_done) == "not-done")
                            {
                                result += '<div class="col-md-2">';
                                result += '<select name="donestatus-('+data[i].id+','+data[i].id+','+data[i].id+')" class="goalselect form-control" id="donestatus-'+data[i].id+'-'+data[i].id+'-'+data[i].id+'" onchange="submitdoneform('+data[i].id+','+data[i].id+','+data[i].id+')"><option value="" disabled>--Select---</option> <option value="done">Done</option> <option value="not-done" selected>Not Done</option> </select>';
                                result += '</div>';
                            }
                            else
                            {
                                result += '<div class="col-md-2">';
                                result += '<select name="donestatus-('+data[i].id+','+data[i].id+','+data[i].id+')" class="goalselect form-control" id="donestatus-'+data[i].id+'-'+data[i].id+'-'+data[i].id+'" onchange="submitdoneform('+data[i].id+','+data[i].id+','+data[i].id+')"><option value="" disabled selected>--Select---</option> <option value="done">Done</option> <option value="not-done">Not Done</option> </select>';
                                result += '</div>';
                            }
                        
                        
                            if((data[i].follow_done) == "done")
                            {
                                result +='<div class="col-md-1" id="showicons-'+data[i].id+'-'+data[i].id+'-'+data[i].id+'" >  <div><i class="fa fa-check-circle" aria-hidden="true"></i> </div> </div> ';
                            }
                            else
                            {
                                result +='<div class="col-md-1 lastcols" id="lastcols-'+data[i].id+'-'+data[i].id+'-'+data[i].id+'" style="display:none;">  <div><i class="fa fa-check-circle" aria-hidden="true"></i> </div> </div> ';
                            }
                            
                        result += '</div>';
                    }
                   // console.log("result"+result);
                   
                   $('#resultpopup').html(result);
          }
      })
    } 
    
     function submitdoneform (buyid,userid,id)
    {
        var leadid = buyid;
        var epid = userid;  
        var tabsid = id;  
        
        var done_status = $('#donestatus-'+leadid+'-'+epid+'-'+tabsid).val();
        
        if(done_status == '' || done_status == undefined)
        {
            done_status = '';
        }  
         console.log(done_status);
         
        if(done_status=="done")
        {
           $('#lastcols-'+leadid+'-'+epid+'-'+tabsid).show();
           $('#showicons-'+leadid+'-'+epid+'-'+tabsid).show();
        }
        else if(done_status=="not-done")
        {
            $('#lastcols-'+leadid+'-'+epid+'-'+tabsid).hide();
            $('#showicons-'+leadid+'-'+epid+'-'+tabsid).hide();
        }
        $.ajax
            ({
                type: "GET",
                //url: "http://websitezweb.com/api/v1/generalleadsremarks",
                url:"/"+userdatatype+"/custom-leads/chatfollowdone",
                dataType: 'json',
                
                data: { "leadid": leadid, "epid": epid ,"tabid": tabsid ,  "done_status": done_status},
                success: function (ajaxresponse)
                {
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var message = response.message;
                    if(status == 1)
                    {
                        console.log("updated to " +message);
                         
                         
                    }
                    else
                    {
                        console.log(message);
                        //$("p.doneshowconnect#this-"+leadid).text(message);
                        // alert('Sorry detail could not be updated. Check connection or try again');
                       
                        //setTimeout(function(){ $("p.doneshowconnect#this-"+leadid).text(message); }, 2500);
                    }
                },
                error: function(response) 
                {
                    alert('Check connection or try again');
                },
                complete:function(data)
                {
                    console.log("data saved completes");
                }
            }) 
        
    }
    
    
    
     function setleadstatus(value)
    {
        var elementId = value;
        var valueItem = $('#leadstatusid'+elementId).val();

        console.log("valueItem"+valueItem);

        if (valueItem === 'Approved') {
            Swal.fire({
                title: 'Approve Lead?',
                text: "Are you sure you want to approve this lead and move it to Buy Leads?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#38ef7d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    executeLeadStatusAjax(elementId, valueItem);
                } else {
                    // Revert UI to Pending if cancelled
                    $('#leadstatusid'+elementId).val('Pending');
                    $('#leadstatusbadge'+elementId).css('background', 'linear-gradient(135deg, #5b247a, #863ac1)');
                    $('#leadstatusid'+elementId).css({'border': '2px solid #863ac1', 'box-shadow': '0 2px 4px rgba(134, 58, 193, 0.2)'});
                }
            });
        } else {
            executeLeadStatusAjax(elementId, valueItem);
        }
    }

    function executeLeadStatusAjax(elementId, valueItem) { Swal.fire({title: 'Processing...', html: 'Please wait while we update the lead status.', allowOutsideClick: false, didOpen: () => { Swal.showLoading() }}); 
        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/setleadstatus/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
                        error: function() { Swal.fire("Error", "An error occurred while updating the lead status.", "error"); }, success: function(ajaxresponse,status)
            {
                var itemvalue = valueItem;
                var response = ajaxresponse; Swal.close();
                
                if (response.popup_html !== undefined && response.popup_html !== '') {
                    $('#history-popup-container-'+elementId).html(response.popup_html);
                }

                if (itemvalue == 'Approved') {
                    if (response.buyleads_type && response.buyleads_type !== 'Buy Lead') {
                        if (typeof dataTable !== 'undefined') {
                            dataTable.ajax.reload(null, false);
                        } else {
                            $('#leadstatusbadge'+elementId).closest('tr').fadeOut(600, function() { $(this).remove(); });
                        }
                        Swal.fire({ title: 'Approved!', text: 'Lead status updated to Approved.', icon: 'success', timer: 2000, showConfirmButton: false });
                    } else {
                        $('#leadstatusbadge'+elementId).closest('tr').fadeOut(600, function() { $(this).remove(); });
                        Swal.fire({ title: 'Approved & Notified!', text: 'Lead approved, moved to Buy Leads, and notifications sent.', icon: 'success', timer: 2500, showConfirmButton: false });
                    }
                } else if (itemvalue == 'Rejected') {
                    $('#leadstatusbadge'+elementId).css('background', 'linear-gradient(135deg, #cb2d3e, #ef473a)');
                    $('#leadstatusid'+elementId).css({'border': '2px solid #ef473a', 'box-shadow': '0 2px 4px rgba(239, 71, 58, 0.2)'});
                    $('button.move[id="' + elementId + '"]').removeAttr('disabled');
                } else {
                    $('#leadstatusbadge'+elementId).css('background', 'linear-gradient(135deg, #5b247a, #863ac1)');
                    $('#leadstatusid'+elementId).css({'border': '2px solid #863ac1', 'box-shadow': '0 2px 4px rgba(134, 58, 193, 0.2)'});
                    if (itemvalue == 'Pending') {
                        $('button.move[id="' + elementId + '"]').attr('disabled', 'disabled');
                    } else {
                        $('button.move[id="' + elementId + '"]').removeAttr('disabled');
                    }
                }

                $("p.doneshowleadstatus#status-"+elementId).text("done");
                setTimeout(function() {
                    $("p.doneshowleadstatus#status-"+elementId).text("");
                }, 2000);
            },
            error: function( error )
            {
                console.log(error);
            }
        });
     }

     function settypeconnect(value)
        {
        var elementId = value;
        var valueItem = $('#typeconnectid'+elementId).val();

        console.log("valueItem"+valueItem);
        
        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/settypeconnect/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                 
                
                var itemvalue = valueItem;
                
                var response = ajaxresponse; Swal.close();
               // alert('source from changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                //$("p.doneshowconnectchat#this-"+elementId).text("done");
                
                //$("#leads_table").dataTable().fnDestroy();
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
     function setfollowtype(value)
        {
        var elementId = value;
        var valueItem = $('#typefollowid'+elementId).val();

        console.log("elementId"+elementId);
        
        $.ajax
        ({
            url:"/"+userdatatype+"/custom-leads/setfollowtype/"+elementId+"/"+valueItem,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            success: function(ajaxresponse,status)
            {
                var itemvalue = "0";
                
                
                /*if(valueItem == "Insta")
                {
                    itemvalue = "Insta";
                }
                else if(valueItem == "Facebook")
                {
                    itemvalue = "Facebook";
                } 
                else if(valueItem == "Google")
                {
                    itemvalue = "Google";
                } 
                else if(valueItem == "Whatsapp")
                {
                    itemvalue = "Whatsapp";
                } 
                else if(valueItem == "Online ads")
                {
                    itemvalue = "Online ads";
                } 
                else if(valueItem == "Other")
                {
                    itemvalue = "Other";
                } */
                
                itemvalue = valueItem;
                
                var response = ajaxresponse; Swal.close();
               // alert('source from changed to : ' + itemvalue);
                //$('#eventplanners_table').DataTable().ajax.reload();
                
                $("p.doneshowfollow#this-"+elementId).text("done");
                
               // $("#leads_table").dataTable().fnDestroy();
               // loadTables();
                            
                console.log('Updated');
            },
            error: function(a,b)
            {
                console.log('Not Updated');
            }
        });
    } 
    
    
      function setbuyleadtype(value)
        {
            var elementId = value;
            var valueItem = $('#typeleadid'+elementId).val();
    
            //console.log("elementId"+elementId);
            
            $.ajax
            ({
                url:"/"+userdatatype+"/custom-leads/setbuyleadtype/"+elementId+"/"+valueItem,
                type: "GET",
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                async: true,
                beforeSend: function() {
                    $('#ledset').text('Wait');
                    $('#ledset').attr("disabled",true);
                },
                //data:{"quoteid":elementId,"remarks":remarks},
                success: function(ajaxresponse,status)
                {
                    var itemvalue = "0";
                    
                    
                    /*if(valueItem == "Insta")
                    {
                        itemvalue = "Insta";
                    }
                    else if(valueItem == "Facebook")
                    {
                        itemvalue = "Facebook";
                    } 
                    else if(valueItem == "Google")
                    {
                        itemvalue = "Google";
                    } 
                    else if(valueItem == "Whatsapp")
                    {
                        itemvalue = "Whatsapp";
                    } 
                    else if(valueItem == "Online ads")
                    {
                        itemvalue = "Online ads";
                    } 
                    else if(valueItem == "Other")
                    {
                        itemvalue = "Other";
                    } */
                    
                    itemvalue = valueItem;
                    
                    var response = ajaxresponse; Swal.close();
                   // alert('source from changed to : ' + itemvalue);
                    //$('#eventplanners_table').DataTable().ajax.reload();
                    
                    $("p.doneshowlead#this-"+elementId).text("done");
                    
                    //$("#leads_table").dataTable().fnDestroy();
                    //loadTables();
                    loadhot();
                                
                    console.log('Updated');
                    
                    
                    $('#ledset').text('ok');
                    $('#ledset').attr("disabled",false);
                    
                },
                error: function(a,b)
                {
                    console.log('Not Updated');
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
                        var response = ajaxresponse; Swal.close();
                        var status = response.status;
                        var leads = response.leads;
                        var leads1 = response.leads1;
                        var leads2 = response.leads2;
                        var leads3 = response.leads3;
                        var leads4 = response.leads4;
                        var leadsall = response.leadsall;
                        
                        if(status == 1)
                        {
                           // console.log(message);
                              $("#hotcounts").text(leads);
                              $("#followcounts").text(leads1);
                              $("#coldcounts").text(leads2);
                              $("#notcounts").text(leads3);
                              $("#allcounts").text(leadsall);
                             
                             $("#converts").text(leads4);
                             
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
                            
                            $("#converts").text("0");
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
            url:"/"+userdatatype+"/custom-leads/setteamdata/"+teamId,
            type: "GET",
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            //data:{"quoteid":elementId,"remarks":remarks},
            
             success: function (ajaxresponse)
                {
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var leads = response.leads;
                    var leads1 = response.leads1;
                    var leads2 = response.leads2;
                    var leads3 = response.leads3;
                    
                    var leads4 = response.leads4;
                    
                    var leadsall = response.leadsall;
                    
                    if(status == 1)
                    {
                       // console.log(message);
                          $("#hotcounts").text(leads);
                          $("#followcounts").text(leads1);
                          $("#coldcounts").text(leads2);
                          $("#notcounts").text(leads3);
                          $("#allcounts").text(leadsall);
                          
                          $("#converts").text(leads4);
                    }
                    else
                    {
                         //console.log(message);
                         $("#hotcounts").text("0");
                         $("#followcounts").text("0");
                         $("#coldcounts").text("0");  
                         $("#notcounts").text("0");
                         $("#allcounts").text("0");
                         
                         $("#converts").text("0");
                          
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
    
         function counterhoots() 
             {
                 var type="hot";
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
                 
                 var urlindividualplanner = "/"+userdatatype+"/custom-leads/pageteam/"+selectteamid+"/"+type; 
                 
                 itemindividual(urlindividualplanner);
             }
             
        
        
        function counterfollowhoots() 
     {
         var type="Follow Up";
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
         
         var urlindividualplanner = "/"+userdatatype+"/custom-leads/pageteam/"+selectteamid+"/"+type; 
         
         itemindividual(urlindividualplanner);
     }
     
     
     function countercoldhoots() 
     {
         var type="Cold";
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
         
         var urlindividualplanner = "/"+userdatatype+"/custom-leads/pageteam/"+selectteamid+"/"+type; 
         
         itemindividual(urlindividualplanner);
     }
     
     
     function counternotablehoots() 
     {
         var type="Not able to connect";
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
         
         var urlindividualplanner = "/"+userdatatype+"/custom-leads/pageteam/"+selectteamid+"/"+type; 
         
         itemindividual(urlindividualplanner);
     }
     
       function counterconverthoots() 
     {
         var type="Converted BuyLeads";
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
         
         var urlindividualplanner = "/"+userdatatype+"/custom-leads/pageteam/"+selectteamid+"/"+type; 
         
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
                    var response = ajaxresponse; Swal.close();
                    var status = response.status;
                    var teamid = response.teamid; 
                    var type = response.type; 
                    if(status == 1)
                    {
                        console.log('Updated');
                        var urlredirect = "/"+userdatatype+"/custom-leads/customformdetails/"+teamid+"/"+type; 
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
</script>


<script>
/*
    $(document).ready(function(){
         $('#buyleads_package_type').multiselect({
          nonSelectedText: 'Choose',
          enableFiltering: true,
          enableCaseInsensitiveFiltering: true,
          buttonWidth:'400px'
         });
         
        });
*/

/*
    function getwhomlead()
    {
        var item=$(this);
    }


    $('#buyleads_package_type').change(function() {    
        var item=$(this).va;
        alert(item.val()) 
    });


$("#buyleads_package_type").change(function(){

    var selValue = $(this).val();

    console.log(selValue);
    
    var array = selValue.split(",");
    
     console.log(array);

});
*/

$("#buyleads_package_type").change(function(){

    var selValue = $(this).val();

    //console.log(selValue);
    
    /* 
        var str1 = "ABCDEFGHIJKLMNOP";
        var str2 = "OP";
        if(str1.indexOf(str2) != -1){
            console.log(str2 + " found");
        }
        else
        {
            console.log(str2 + " not found")
        }
    */
    
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
    
    
    
    
    
    var str9 = "Venue";
    if(selValue.indexOf(str9) != -1)
    {
         $("#leadvenue").show();
    }
    if(selValue.indexOf(str9) == -1)
    {
         $("#leadvenue").hide();
    }
    
});

function approveLead(id) {
    if(confirm('Are you sure you want to approve this lead?')) {
        $.ajax({
            url: "{{ url('admin/custom-leads/approve') }}/" + id,
            type: 'GET',
            success: function(response) {
                alert('Lead approved and notifications sent.');
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
            }
        });
    }
}

function rejectLead(id) {
    if(confirm('Are you sure you want to reject this lead?')) {
        $.ajax({
            url: "{{ url('admin/custom-leads/reject') }}/" + id,
            type: 'GET',
            success: function(response) {
                alert('Lead rejected.');
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
            }
        });
    }
}

function resubmitLead(id) {
    if(confirm('Are you sure you want to resubmit this rejected lead?')) {
        $.ajax({
            url: "{{ url('admin/custom-leads/movedata') }}/" + id,
            type: 'GET',
            success: function(response) {
                alert('Lead resubmitted for approval.');
                $("#leads_table").dataTable().fnDestroy();
                loadTables();
            }
        });
    }
}
</script>
@endpush