@extends('layouts.app')

@section('content')
    {{-- <div class="row col-lg-12 text-center m-0 p-0 wrapper" style="margin:auto;"> --}}
    {{-- <div class="wrapper"> --}}
        {{-- <img src="{{asset('img/homepage_1.jpg')}}" class="img-fluid m-0 p-0"> --}}
        {{-- <img class="my-0 mr-md-auto" src="{{asset('img/homepage_1.jpg')}}" alt="" width="100%" height="">
        <div class="search-wrapper">
            <input type="search" placeholder="Search.." />
        </div>
    </div> --}}

    {{-- <div class="row col-lg-12 text-center m-0 p-0 image" style="opacity:0.1">
        <h1>ABC</h1>
        <div class="container">
            <div class='search-box'>
                <form class='search-form'>
                    <input class='form-control' placeholder='Enter Your Zip Code Here' type='text'>
                    <button class='btn btn-link search-btn'>
                    <span class='glyphicon glyphicon-search'></span>
                    </button>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row col-lg-12 text-center m-0 p-0" style="margin:auto;">
        <img class="my-0 mr-md-auto" src="{{asset('img/homepage_1.jpg')}}" alt="" width="100%" height="">

        <div class="container">
            <div class='search-box'>
                <form class='search-form'>
                    <input class='form-control' placeholder='Enter Your Zip Code Here' type='text'>
                    <button class='btn btn-link search-btn'>
                    <span class='glyphicon glyphicon-search'></span>
                    </button>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="row col-lg-12 text-center m-0 p-0" style="margin:auto;">
        <div class="col-lg-6 m-0 p-0">
            <img class="my-0 mr-md-auto" src="{{asset('img/homepage_1.jpg')}}" alt="" width="100%" height="">
        </div>
        <div class="col-lg-6 p-4" style="display: flex;align-items: center;justify-content: center;">
            <div >
                <h1 style="color:red; font-size:72px">DAYCARE<br>FINDER</h1>
                <h3>The only tool you will need to making a hard<br>decision easier find quality care now </h3>
            </div>
        </div>
    </div>
    
    <div class="col-lg-12 text-center m-0 p-4" style="display: flex;align-items: center;justify-content: center;background-color:#00071E;">
        <div class="text-center m-4 p-4" >
            <h1 style="color:red; font-size:48px">OUR MISSION</h1>
            <div class="col-md-8" style="margin:auto">
                <h5>Finding childcare is difficult, we get it, and we have been there. That's why we created Daycare
                    Finder, the only tool you'll need to make a hard decision easier. Everything you
                    need to feel confident in the care decision you make for your child(ren) are right here.
                </h5>
            </div>
        </div>
    </div>

    <div class="col-lg-12 text-center mt-0 p-4" style="display: flex;align-items: center;justify-content: center;background-image: url('{{asset('img/')}}');height:400px;">
        <div>
        <div class="row">
            <div class="col-md-4" style="margin:auto">
                <h6 style="color:">
                    "Finding childcare is difficult, we get it, and we have been there. That's why we created Daycare
                    Finder, the only tool you'll need to make a hard decision easier. Everything you
                    need to feel confident in the care decision you make for your child(ren) are right here."
                </h6>
            </div>
            <div class="col-md-4" style="margin:auto">
                <h6 style="color:">
                    "Finding a part time nanny we could trust to pick up our children from school and 
                    daycare was no easy feat, but then we  came across Care Navigator. Our kids love 
                    their new nanny and we  really couldn’t have asked for anyone better!"
                </h6>
            </div>
            <div class="col-md-4" style="margin:auto">
                <h6 style="color:">   
                    "Thank you for helping us cover for our sick nanny on such short notice. 
                    Our kids took to the nanny you sent to us right away and your help really turned a 
                    potentially disastrous week into an an amazing and unexpected change of pace. 
                    We will definitely contact you in the future when we need to find a new nanny."    
                </h6>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" style="margin:auto">
                <h5>Quinn Davis</h5>
            </div>
            <div class="col-md-4" style="margin:auto">
                <h5>Sandy Williams</h5>
            </div>
            <div class="col-md-4" style="margin:auto">
                <h5>Casey Johnson</h5>
            </div>
        </div>
    </div>

@endsection

@section('inline_css')
@endsection

@section('inline_js')
@endsection