@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2 text-center p-0" style="margin:auto;" >
            <label class="switch" style="margin:auto">
                <input type="checkbox" id="togBtn" checked>
                <div class="slider round" onclick="toggle_view();">
                    <!--ADDED HTML -->
                        <span class="on">List</span>
                        <span class="off">Map</span>
                    <!--END-->
                </div>
            </label>
        </div>
        
        <div class="col-md-10">
            <div class="row">
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Age
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a1').innerHTML" id="a1">Below 01</a>
                          <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a2').innerHTML" id="a2">Below 02</a>
                          <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a3').innerHTML" id="a3">Below 05</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Tution Cost
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">< $1000</a>
                          <a class="dropdown-item" href="#">$1001 - $2500</a>
                          <a class="dropdown-item" href="#">$2501+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
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
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Distance
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Openings
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Yes</a>
                          <a class="dropdown-item" href="#">No</a>
                        </div>
                    </div>
                    <div class="mt-4" id="show_advanced_filters">
                        <a href="#" onclick="show_advanced_filters();"><h6 style="color:green"><b><u>Advanced Filters >></u></b></h6></a>
                    </div>
                    <div class="mt-4" id="hide_advanced_filters" style="display:none">
                        <a href="#" onclick="hide_advanced_filters();"><h6 style="color:red"><b><u>Hide Advanced Filters >></u></b></h6></a>
                    </div>
                </div>
            </div>

            <div class="row" style="display: none" id="advanced_filters">
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Licensed
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a1').innerHTML" id="a1">Yes</a>
                          <a class="dropdown-item" href="#" onclick="getElementById('age').innerHTML = 'Age : ' + getElementById('a2').innerHTML" id="a2">No</a>
                          </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Waitlist badge
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">< $1000</a>
                          <a class="dropdown-item" href="#">$1001 - $2500</a>
                          <a class="dropdown-item" href="#">$2501+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Care Type
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Home Based</a>
                          <a class="dropdown-item" href="#">Center Based</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> No. of Reviews
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center mt-4" style="margin:auto;">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Filter :</b> Openings
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Yes</a>
                          <a class="dropdown-item" href="#">No</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div id="list_view" style="display:">
        
        <div class="card m-4">
            <div class="card-header">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-3">
                        <h3 class="m-0">Let's Have Fun</h3>
                    </div>
                    <div class="col-lg-1 mr-0" style="margin:auto;">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="col-lg-8" style="margin:auto;">
                        <h6 class="m-0">(10 Reviews)</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-4" style="display: flex;align-items: center;justify-content: center;">
                        <img class="my-0 mr-md-auto" src="{{asset('img/daycare.jpeg')}}" alt="" width="300" height="210">
                    </div>
                    <div class="col-lg-6" style="display: flex;align-items: center;justify-content: center;">
                        <div>
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item"><b>Address :</b> City/Town,NY,Zipcode</li>
                                <li class="list-group-item"><b>Phone No :</b> (+101) 687274293</li>
                                <li class="list-group-item"><b>Website :</b> www.daycare.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" style="display: flex;align-items: center;justify-content: center;">
                        <div>
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-4">
            <div class="card-header">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-3">
                        <h3 class="m-0">Miracle Hands</h3>
                    </div>
                    <div class="col-lg-1 mr-0" style="margin:auto;">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="col-lg-8" style="margin:auto;">
                        <h6 class="m-0">(10 Reviews)</h6>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-4" style="display: flex;align-items: center;justify-content: center;">
                        <img class="my-0 mr-md-auto" src="{{asset('img/daycare2.jpg')}}" alt="" width="300" height="210">
                    </div>
                    <div class="col-lg-6 bg-white" style="display: flex;align-items: center;justify-content: center;">
                        <div >
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item"><b>Address :</b> City/Town,NY,Zipcode</li>
                                <li class="list-group-item"><b>Phone No :</b> (+101) 687274293</li>
                                <li class="list-group-item"><b>Website :</b> www.daycare.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" style="display: flex;align-items: center;justify-content: center;">
                        <div>
                            <input type="checkbox" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="map_view" style="display:none">
        <div class="row col-lg-12">
            <div class="col-lg-6 mt-4">

                <div class="card mx-4 my-1">
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
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(10 Reviews)</span>
                                        </li>
                                        <li class="list-group-item py-1"><b>Address :</b> City/Town,NY,Zipcode</li>
                                        <li class="list-group-item py-1"><b>Phone No :</b> (+101) 687274293</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mx-4 my-1">
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
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(10 Reviews)</span>
                                        </li>
                                        <li class="list-group-item py-1"><b>Address :</b> City/Town,NY,Zipcode</li>
                                        <li class="list-group-item py-1"><b>Phone No :</b> (+101) 687274293</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mx-4 my-1">
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
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(10 Reviews)</span>
                                        </li>
                                        <li class="list-group-item py-1"><b>Address :</b> City/Town,NY,Zipcode</li>
                                        <li class="list-group-item py-1"><b>Phone No :</b> (+101) 687274293</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
</script>

<script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -25.344, lng: 131.036};
      var uluru2 = {lat: -26.4, lng: 132.2};
      var uluru3 = {lat: -28.4, lng: 130.2};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        var marker = new google.maps.Marker({position: uluru2, map: map});
        var marker = new google.maps.Marker({position: uluru3, map: map});
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


@endsection