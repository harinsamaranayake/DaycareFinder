@extends('layouts.app')

@if(count($daycares)>0)

@section('content')
    <div class="row">
        {{-- LIST MAP SELECTOR--}}
        <div class="col-md-2 text-center p-0 mt-4" style="" >
            <label class="switch" style="">
                <input type="checkbox" id="togBtn" checked>
                <div class="slider round" onclick="toggle_view();">
                        <span class="on">List</span>
                        <span class="off">Map</span>
                </div>
            </label>
        </div>

        {{-- FILTERS --}}
        <div class="col-md-10">
            {{-- NORMAL FILTERS --}}
            {!! Form::open(['action' => 'DaycareController@filter_x','method' => 'POST']) !!}
            <div class="row">
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="age_filter" value="10">
                            <b>Filter :</b> Age
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a1').innerHTML; getElementById('age').value ='1';" id="a1">1</a>
                        <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a2').innerHTML; getElementById('age').value ='1';" id="a2">2</a>
                        <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a3').innerHTML; getElementById('age').value ='1';" id="a3">5</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_age', [
                        '0.2' => '6 Weeks', 
                        '0.5' => '6 Months',
                        '1' => '1 Year',
                        '2' => '2 Years',
                        '3' => '3 Years',
                        '4' => '4 Years',
                        '5' => '5 Year',
                        '6' => '6 Years',
                        '7' => '7 Years',
                        '8' => '8 Years',
                        '9' => '9 Year',
                        '10' => '10 Years',
                        '11' => '11 Years',
                        '12' => '12 Years',
                    ], null, ['placeholder' => 'Filter: Age'],['class'=>'form-control'])}}
                </div>

                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Tution Cost
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">< $1000</a>
                        <a class="dropdown-item" href="#">$1001 - $2500</a>
                        <a class="dropdown-item" href="#">$2501+</a>
                        </div>
                    </div> --}}

                    {{Form::select('filter_price', [
                        '1' => 'Below $1000', 
                        '2' => '$1001 - $2500',
                        '3' => 'Above $2501',
                    ], null, ['placeholder' => 'Filter: Tution Cost','class'=>''])}}
                </div>

                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Rating
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">1</a>
                        <a class="dropdown-item" href="#">2</a>
                        <a class="dropdown-item" href="#">3</a>
                        <a class="dropdown-item" href="#">4</a>
                        <a class="dropdown-item" href="#">5</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_rating', [
                        '1' => '1', 
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ], null, ['placeholder' => 'Filter: Rating','class'=>''])}}
                </div>

                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Distance
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_distance', [
                        '1' => 'Below 1KM', 
                        '2' => '1-5KM',
                        '3' => '5-10KM',
                        '4' => 'Above 10KM',
                    ], null, ['placeholder' => 'Filter: Distance','class'=>''])}}
                </div>

                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="openings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="">
                            <b>Filter :</b> Openings
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" onclick="getElementById('openings').innerHTML = 'Openings : ' + getElementById('openings1').innerHTML; getElementById('openings').value ='1'; search_database(); " id="openings1">Yes</a>
                        <a class="dropdown-item" onclick="getElementById('openings').innerHTML = 'Openings : ' + getElementById('openings2').innerHTML; getElementById('openings').value ='0'; search_database(); " id="openings2">No</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_accepting_students', [
                        '1' => 'Available', 
                        '0' => 'Unavailable',
                    ], null, ['placeholder' => 'Filter: Accepting Students','class'=>''])}}

                    {{-- <div class="mt-4" id="show_advanced_filters">
                        <a href="#" onclick="show_advanced_filters();"><h6 style="color:green"><b><u>Advanced Filters >></u></b></h6></a>
                    </div>
                    <div class="mt-4" id="hide_advanced_filters" style="display:none">
                        <a href="#" onclick="hide_advanced_filters();"><h6 style="color:red"><b><u>Hide Advanced Filters >></u></b></h6></a>
                    </div> --}}
                </div>
            
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- {{Form::text('search_daycare_zip','',['class'=>'form-control mr-sm-2'])}} --}}
                    {{Form::submit('Search',['class'=>'btn btn-outline-success my-2 my-sm-0'])}}
                    {{-- <button id="filterz">Filter</button> --}}
                </div>
            </div>
            

            {{-- ADVANCED FILTERS --}}
            <div class="row" style="display: none" id="advanced_filters">
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Licensed
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a1').innerHTML" id="a1">Yes</a>
                        <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a2').innerHTML" id="a2">No</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_licensed', [
                        '1' => 'Yes', 
                        '0' => 'No',
                    ], null, ['placeholder' => 'Filter: Licensed','class'=>''])}}
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Waitlist badge
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">< $1000</a>
                        <a class="dropdown-item" href="#">$1001 - $2500</a>
                        <a class="dropdown-item" href="#">$2501+</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_waitlist', [
                        '1' => 'Yes', 
                        '0' => 'No',
                    ], null, ['placeholder' => 'Filter: Wait List','class'=>''])}}
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Care Type
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Home Based</a>
                        <a class="dropdown-item" href="#">Center Based</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_care_type', [
                        '1' => 'Yes', 
                        '0' => 'No',
                    ], null, ['placeholder' => 'Filter: Care Type','class'=>''])}}
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> No. of Reviews
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> --}}
                    {{Form::select('filter_reviews', [
                        '1' => 'Below 10', 
                        '2' => '11-50',
                        '3' => 'Above50',
                    ], null, ['placeholder' => 'Filter: Review Count','class'=>''])}}
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Openings
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Yes</a>
                        <a class="dropdown-item" href="#">No</a>
                        </div>
                    </div> --}}
                    {{-- {{Form::select('openings', [
                        '1' => 'Available', 
                        '0' => 'Unavailable',
                    ], null, ['placeholder' => 'Filter: Openings','class'=>''])}} --}}
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                </div>
            </div>
            {{Form::close()}}

            <div class="row">
                <div class="mt-4" id="show_advanced_filters" style="margin:auto">
                    <a href="#" onclick="show_advanced_filters();"><h6 style="color:green"><b><u>Show Advanced Filters</u></b></h6></a>
                </div>
                <div class="mt-4" id="hide_advanced_filters" style="display:none;margin:auto">
                    <a href="#" onclick="hide_advanced_filters();"><h6 style="color:red"><b><u>Hide Advanced Filters</u></b></h6></a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    {{-- LIST VIEW --}}
    <div id="list_view" style="display:">
            {!! Form::open(['action' => 'DaycareController@compare_x','method' => 'POST']) !!}

            <div class="text-center" style="margin:auto">
                {{Form::submit('Compare Selected Daycares',['class'=>'btn btn-primary btn-lg'])}}
            </div>

            @foreach ($daycares as $daycare)

                <div class="card m-4">
                    <div class="card-header" onclick="javascript:location.href='/testapp/public/daycare/{{$daycare->id}}'">
                    {{-- <div class="card-header" onclick="javascript:location.href='/testapp/public/daycare/show_y'"> --}}
                    {{-- <div class="card-header" onclick="javascript:location.href='/testapp/public/daycare/show_x/{{$daycare->id}}'"> --}}
                    {{-- <div class="card-header" onclick="javascript:location.href='/testapp/public/daycare_profile/{{$daycare->id}}'"> --}}
                    {{-- <div class="card-header" onclick="javascript:location.href='/testapp/public/daycare/profile'"> --}}
                        <div class="row col-lg-12" style="margin:auto;">
                            <div class="col-lg-3">
                                <h3 class="m-0">{{$daycare->name}}</h3>
                            </div>
                            <div class="col-lg-2 mr-0" style="margin:auto;">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i<($daycare->rating))
                                        <span class="fa fa-star checked"></span>
                                    @else
                                        <span class="fa fa-star"></span>
                                    @endif
                                @endfor
                            </div>
                            <div class="col-lg-7" style="margin:auto;">
                                <h6 class="m-0">({{$daycare->reviews}} Reviews)</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row col-lg-12" style="margin:auto;">
                            <div class="col-lg-4" style="display: flex;align-items: center;justify-content: center;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/'.$daycare->img01)}}" alt="" width="300" height="210">
                            </div>
                            <div class="col-lg-6" style="display: flex;align-items: center;justify-content: center;">
                                <div>
                                    <ul class="list-group list-group-flush" >
                                        <li class="list-group-item"><b>Address :</b> {{$daycare->address}}, {{$daycare->city}}, {{$daycare->state}}, {{$daycare->zip}}</li>
                                        <li class="list-group-item"><b>Phone No :</b> {{$daycare->contact}}</li>
                                        <li class="list-group-item"><b>Email :</b> {{$daycare->email}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2" style="display: flex;align-items: center;justify-content: center;">
                                <div>
                                    {{Form::checkbox($daycare->id,$daycare->id,['class'=>'form-check-input'])}}
                                    {{-- <input type="checkbox" /> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
            {!! Form::close() !!}
            
                <div class="row">
                    <div style="margin:auto">
                        {{-- {{$daycares->links()}}   --}}
                    </div>
                </div>

    </div>

    {{-- MAP VIEW --}}
    <div id="map_view" style="display:none">
        <div class="row col-lg-12">
            <div class="col-lg-6 mt-4">

                    @foreach ($daycares as $daycare)
                        
                    {{-- <div class="card mx-4 my-1" onclick="javascript:location.href='/testapp/public/daycare/{{$daycare->id}}"> --}}
                    <div class="card mx-4 my-1" onclick='NewTab()'>   
                        <div class="card-body p-0">
                            <div class="row col-lg-12" style="margin:auto;">
                                <div class="col-lg-6" style="display: flex;align-items: center;justify-content: center;">
                                    <img class="my-0 mr-md-auto" src="{{asset('img/daycare.jpeg')}}" alt="" width="100%" height="">
                                </div>
                                <div class="col-lg-6 bg-white" style="display: flex;align-items: center;justify-content: center;">
                                    <div >
                                        <ul class="list-group list-group-flush" >
                                            <li class="list-group-item py-1"><b><h4>Let's Have Fun</h4></b></li>
                                            <li class="list-group-item py-1">
                                                @for($i = 0; $i < 5; $i++)
                                                    @if($i<($daycare->rating))
                                                        <span class="fa fa-star checked"></span>
                                                    @else
                                                        <span class="fa fa-star"></span>
                                                    @endif
                                                @endfor
                                                <span>({{$daycare->reviews}} Reviews)</span>
                                            </li>
                                            <li class="list-group-item py-1"><b>Address : </b>{{$daycare->address}}, {{$daycare->city}}, {{$daycare->state}}, {{$daycare->zip}}</li>
                                            <li class="list-group-item py-1"><b>Phone No : </b>{{$daycare->contact}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach    


            </div>
            <div class="col-lg-6 mt-4 p-0">
                <div class="col-lg-12 text-center mt-2 my-0 p-0" style="margin:auto;">
                    <div id="map" style="width:100%;height:500px;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('inline_css')

    <style>

        .switch {
        position: relative;
        display: inline-block;
        width: 90px;
        height: 34px;
        }

        .switch input {display:none;}

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #2ab934;
        -webkit-transition: .4s;
        transition: .4s;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: #00b0e0;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(55px);
        -ms-transform: translateX(55px);
        transform: translateX(55px);
        }

        /*------ ADDED CSS ---------*/
        .on
        {
        display: none;
        }

        .on, .off
        {
        color: white;
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        font-size: 10px;
        font-family: Verdana, sans-serif;
        }

        input:checked+ .slider .on
        {display: block;}

        input:checked + .slider .off
        {display: none;}

        /*--------- END --------*/

        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }

        .slider.round:before {
        border-radius: 50%;}

        /*--------- Check Box --------*/


        input[type='checkbox'] {
            -webkit-appearance:none;
            width:30px;
            height:30px;
            background:white;
            border-radius:5px;
            border:2px solid #c4c4c4;
        }

        input[type='checkbox']:checked {
            background: #1095e8;
        } 

        /*--------- Rating --------*/

        .checked {
            color: orange;
        }

    </style>

@endsection

@section('inline_js')
    <script>
        $(document).ready(function(e){
            $("#filterz").click(function(e){
                alart('test');
            });
        });
    </script>

    <script>
        function show_advanced_filters(){
            // alert("Hello! I am an alert box!!");
            document.getElementById('advanced_filters').style.display="";
            document.getElementById('show_advanced_filters').style.display="none";
            document.getElementById('hide_advanced_filters').style.display="";
        }

        function hide_advanced_filters(){
            // alert("Hello! I am an alert box!!");
            document.getElementById('advanced_filters').style.display="none";
            document.getElementById('show_advanced_filters').style.display="";
            document.getElementById('hide_advanced_filters').style.display="none";
        }

        function toggle_view(){
            if (document.getElementById('togBtn').checked) {
                //Button already checked. Now its clicked and it goed to unchecked state
                // alert("to map view");
                document.getElementById('list_view').style.display="none";
                document.getElementById('map_view').style.display="";
            } else {
                // alert("to list view");
                document.getElementById('list_view').style.display="";
                document.getElementById('map_view').style.display="none";
            }
        }

        function search_database(){

            // javascript:location.href='DaycareController@search_y';


            // var data = {
            //     'opening1' : document.getElementById('openings').value,
            //     'opening2' : document.getElementById('openings').value,
            // };
            // var data =[];
            alert(document.getElementById('openings').value);
            alert (data);
        }
    </script>

    <script type="text/javascript">
        function initMap() {
            // alert(1);

            var locations = [
                @foreach ($daycares as $daycare)
                    [ {{ $daycare->lat }}, {{ $daycare->lng }} ], 
                @endforeach
            ];

            var map_center = locations[0];
            var map_center_format = {lat:map_center[0],lng:map_center[1]};

            var map = new google.maps.Map(document.getElementById('map'), {zoom: 4, center: map_center_format});

            var i;
            for (i = 0; i < locations.length; i++) {
                var location = locations[i];
                var map_location_format = {lat:location[0],lng:location[1]};
                var marker = new google.maps.Marker({position: map_location_format, map: map});
            }
        }
    </script>

    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcQqjTJ9NkjA0D-EndyliMcKMsW38fNfY&callback=initMap">
    </script>

    <script>
        function NewTab() { 
            window.open( 
            "/testapp/public/daycare/{{$daycare->id}}", "_blank"); 
        }
    </script>

    
@endsection

@endif