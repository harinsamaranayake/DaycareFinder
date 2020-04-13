@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-2 text-center mt-4" style="margin:auto;">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter 01
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
                    Filter 02
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
                    Filter 03
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
                    Filter 04
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
                    Filter 05
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="mt-4" >
                <h6>Advanced Filters ></h6>
            </div>
        </div>
    </div>

    <div>
        <div class="card m-4">
            <h5 class="card-header">Let's Have Fun</h5>
            <div class="card-body">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-3" style="display: flex;align-items: center;justify-content: center;">
                        <img class="my-0 mr-md-auto" src="{{asset('img/daycare.jpeg')}}" alt="" width="300" height="210">
                    </div>
                    <div class="col-lg-2 bg-white" style="display: flex;align-items: center;justify-content: center;">
                        <div >
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item">City/Town,NY,Zipcode</li>
                                <li class="list-group-item">$500/Month</li>
                                <li class="list-group-item">(+101) 687274293</li>
                                <li class="list-group-item">www.daycare.com</li>
                                <li class="list-group-item">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7" style="display: flex;align-items: center;justify-content: center;">
                        <div class="row col-lg-12 text-center" style="margin:auto;">
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/cake.jpg')}}" alt="" width="50" height="50">
                                <h6>6 Months</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/clock.png')}}" alt="" width="50" height="50">
                                <h6>Mon-Fri</h6>
                                <h6>7AM-6PM</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/hat.png')}}" alt="" width="50" height="50">
                                <h6>Curriculum</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/teacher.png')}}" alt="" width="50" height="50">
                                <h6>7 Students per Teacher</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/sandclock.png')}}" alt="" width="50" height="50">
                                <h6>No waiting list</h6>
                                <h6>Openings available</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <a href="/testapp/public/daycare" class="btn btn-success">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-4">
            <h5 class="card-header">Miracle Hands</h5>
            <div class="card-body">
                <div class="row col-lg-12" style="margin:auto;">
                    <div class="col-lg-3" style="display: flex;align-items: center;justify-content: center;">
                        <img class="my-0 mr-md-auto" src="{{asset('img/daycare2.jpg')}}" alt="" width="300" height="210">
                    </div>
                    <div class="col-lg-2 bg-white" style="display: flex;align-items: center;justify-content: center;">
                        <div >
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item">City/Town,NY,Zipcode</li>
                                <li class="list-group-item">$500/Month</li>
                                <li class="list-group-item">(+101) 687274293</li>
                                <li class="list-group-item">www.daycare.com</li>
                                <li class="list-group-item">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7" style="display: flex;align-items: center;justify-content: center;">
                        <div class="row col-lg-12 text-center" style="margin:auto;">
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/cake.jpg')}}" alt="" width="50" height="50">
                                <h6>6 Months</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/clock.png')}}" alt="" width="50" height="50">
                                <h6>Mon-Fri</h6>
                                <h6>7AM-6PM</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/hat.png')}}" alt="" width="50" height="50">
                                <h6>Curriculum</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/teacher.png')}}" alt="" width="50" height="50">
                                <h6>7 Students per Teacher</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <img class="my-0 mr-md-auto" src="{{asset('img/profile/sandclock.png')}}" alt="" width="50" height="50">
                                <h6>No waiting list</h6>
                                <h6>Openings available</h6>
                            </div>
                            <div class="col-lg-2 text-center" style="margin:auto;">
                                <a href="/testapp/public/daycare" class="btn btn-success">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection