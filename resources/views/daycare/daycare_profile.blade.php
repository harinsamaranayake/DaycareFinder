@extends('layouts.app')

@section('content')
    <?php $daycare = $dataset[0] ?>
    <?php $reviews = $dataset[1] ?>
    <div class="row col-lg-12 text-center mt-4" style="background-color:">
        <div class="col-lg-4 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('storage/daycare_images/'.$daycare->img01)}}" alt="" width="400" height="280">
        </div>
        <div class="col-lg-4 mt-4 bg-white" style="display: flex;align-items: center;justify-content: center;">
            <div >
                <ul class="list-group list-group-flush" >
                    <li class="list-group-item"><h3>{{$daycare->name}}</h3></li>
                    <li class="list-group-item"><b>Address</b> : {{$daycare->address}}, {{$daycare->city}}, {{$daycare->state}}, {{$daycare->zip}}</li>
                    <li class="list-group-item"><b>Price</b> : ${{$daycare->price}}</li>
                    <li class="list-group-item"><b>Phone</b> : {{$daycare->contact}}</li>
                    <li class="list-group-item"><b>Email</b> : {{$daycare->email}}</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 text-center mt-4" style="margin:auto;">
            {{-- <img class="my-0 mr-md-auto" src="{{asset('img/daycare.jpeg')}}" alt="" width="400" height="280"> --}}
            {{-- <div id="googleMap" style="width:100%;height:280px;"></div> --}}
            <div id="map" style="width:100%;height:280px;"></div>
        </div>
    </div>

    <div class="row col-lg-12 text-center mt-4">
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('img/profile/cake.jpg')}}" alt="" width="100" height="100">
            <h5>
                {{intval((strtotime(date('Y-m-d H:i:s'))-(strtotime(date($daycare->started_on))))/60/60/24/30/12)}} Years
                {{intval((strtotime(date('Y-m-d H:i:s'))-(strtotime(date($daycare->started_on))))/60/60/24/30%12)}} Months
            </h5>
        </div>
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('img/profile/clock.png')}}" alt="" width="100" height="100">
            <h5>
                <?php
                    if($daycare->mon ==1){
                        echo 'Mon ';
                    }
                    if($daycare->tue ==1){
                        echo 'Tue ';
                    }
                    if($daycare->wed ==1){
                        echo 'Wed ';
                    }
                    if($daycare->thu ==1){
                        echo 'Thu ';
                    }
                    if($daycare->fri ==1){
                        echo 'Fri ';
                    }
                    if($daycare->sat ==1){
                        echo 'Sat ';
                    }
                    if($daycare->sun ==1){
                        echo 'Sun ';
                    }
                ?> 
            </h5>
            <h5>{{$daycare->time_start}} - {{$daycare->time_end}}</h5>
        </div>
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('img/profile/hat.png')}}" alt="" width="100" height="100">
            <h5>Curriculum : {{$daycare->curriculum}}</h5>
        </div>
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('img/profile/teacher.png')}}" alt="" width="100" height="100">
            <h5>{{$daycare->students_per_teacher}} Students Per Teacher</h5>
        </div>
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <img class="my-0 mr-md-auto" src="{{asset('img/profile/sandclock.png')}}" alt="" width="100" height="100">
            <h5>{{$daycare->accepting_students}}</h5>
        </div>
    </div>

    <div class="row col-lg-12 text-center mt-4">
        <div class="col-lg-10 text-center" style="margin:auto;">
            <h2>About Us</h2>
            <p>{{$daycare->description}}</p>
        </div>
    </div>

    <div class="row col-lg-12 mt-4" style="margin:auto;">
        <div class="col-md-12 card p-0">
        {!! Form::open(['action' => 'ReviewController@add_review','method' => 'POST']) !!}
        {!! Form::hidden('daycare_id', $daycare->id) !!}
        {!! Form::hidden('reviewer_id', null) !!}
            <div class="card-header">
                <h4><b>Add a review</b></h4>
            </div>
            <div class="card-body">
                <div class= "cold-md-12 row">
                    <div class="col-md-10">
                        <h6 class="card-title">Review</h6>
                        {{Form::textarea('review', null,['class'=>'form-control my-2','rows'=>'3'])}}
                    </div> 
                    <div class="col-md-2">
                        <h6 class="card-title my-0">Rating</h6>
                        <div>
                            {{Form::select('rating', [
                                    '1' => '1', 
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                ], null, ['placeholder' => 'Select Rating','class'=>'my-2 mb-4'])}}
                        </div>
                        <div>
                            {{Form::submit('Add Review',['class'=>'btn btn-primary btn-m'])}}
                        </div>
                    </div>
                       
                </div>
            </div>
        {!!Form::close()!!}
        </div>
    </div>

    <div class="row col-lg-12 mt-4" style="margin:auto;">
        @foreach ($reviews as $review)
            <div class="col-lg-12 card text-white bg-info mb-3 p-0">
                <div class="card-header">
                    {{-- {{$review->rating}} --}}
                    @for($i = 0; $i < 5; $i++)
                        @if($i<($review->rating))
                            <span class="fa fa-star checked"></span>
                        @else
                            <span class="fa fa-star"></span>
                        @endif
                    @endfor
                </div>
                <div class="card-body">
                    <h6 class="card-title">
                        {{$review->review}}
                    </h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('inline_js')

    {{-- <script>
        function myMap() {
            var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcQqjTJ9NkjA0D-EndyliMcKMsW38fNfY&callback=myMap"></script> --}}

    <script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        $lat = {{$daycare->lat}};
        $lng = {{$daycare->lng}};
            // $lat = -25.344;
            // $lng = 131.036;
        //   var daycare_loc = {lat: $lat, lng: $lng};
        // var daycare_loc = {lat: -25.344, lng: 131.036};
        var daycare_loc = {lat: {{$daycare->lat}}, lng: {{$daycare->lng}}};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: daycare_loc});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: daycare_loc, map: map});
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

@section('inline_css')

    <style>
    /*--------- Rating --------*/

    .checked {
        color: orange;
    }

    </style>
    
@endsection

