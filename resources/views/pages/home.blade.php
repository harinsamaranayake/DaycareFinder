@extends('layouts.app')

@section('content')

<div class="row" style="margin:0;padding:0">
<div class="col-lg-12 " style="margin:0; padding:0">
 <label style="opacity:1">
   <img class="img-fluid"  src="img/homepage_1.jpg" style="opacity:0.8"></label>
 
 
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




<div class="words">
<h1 class="daycarewords">DAYCARE<br>FINDER</h1>
<h3 class="smallwords" style=" text-align:center;color:white;opacity:0.99;">The only tool you will need to making a hard<br>decision easier find quality care now </h3>
</div>
</div>
</div>
</div>

    
    <div class="col-lg-12 col text-center mt-0 p-4" style="display: flex;align-items: center;justify-content: center;background-color:#F5F5F5;">
        <div class="text-center m-4 p-4" >
            <h1 style="color:red; font-size:48px">OUR MISSION</h1>
            <div class="col-md-12" style="margin:auto">
                <h5>Finding childcare is difficult, we get it, and we have been there. That's why we created Daycare
                    Finder, the only tool you'll need to make a hard decision easier. Everything you
                    need to feel confident in the care decision you make for your child(ren) are right here.
                </h5>
            </div>
        </div>
    </div>

    <div class="img-fluid col-sm-12 text-center mt-0 p-4" style="display: flex;align-items: center;justify-content: center;background-image: url('{{asset('img/homepage_2.jpg')}}');width:100%; min-height: 600px;">
        <div class="col-md-4" style="margin:auto">
            <h5 class="footer_words"style="color:white">
                <b>
                    Finding childcare is difficult, we get it, and we have been there. 
                    That's why we created DaycareFinder, the only tool you'll need to 
                    make a hard decision easier. Everything you need to feel confident
                     in the care decision you make for your child(ren) are right here.
                </b>
            </h5>
            <h5>Quinn Davis</h5>
        </div>
        <div class="col-md-4" style="margin:auto">
            <h5 class="footer_words" style="color:white">
                <b>
                    "Finding a part time nanny we could trust to pick up our children from 
                    school and daycare was no easy feat, but then we came across Care
                     Navigator. Our kids love their new nanny and we  really couldn’t have 
                    asked for anyone better!"
                </b>
            </h5>
            <h5>Sandy Williams</h5>
        </div>
        <div class="col-md-4" style="margin:auto">
            <h5 class="footer_words" style="color:white">
                <b>
                    "Thank you for helping us cover for our sick nanny on such short notice. 
                    Our kids took to the nanny you sent to us right away and your help really turned a 
                    potentially disastrous week into an an amazing and unexpected change of pace. 
                    We will definitely contact you in the future when we need to find a new nanny."
                </b>
            </h5>
            <h5>Casey Johnson</h5>
        </div>
    </div>

@endsection


@section('inline_css')
<style>
.container {
  padding: 40px;

}

.search-box {
  height:72px;
  width: 85%;
  border-radius: 3px;
  padding: 4px 55px 4px 15px;
  position: relative;
  background: #fff;
  border: 1px solid #ddd;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
  top:-600px;
  margin:auto;
}
.search-box.hovered, .search-box:hover, .search-box:active {
  border: 1px solid #aaa;
}
.search-box input[type=text] {
  border: none;
  box-shadow: none;
  display: inline-block;
  padding: 0;
  background: transparent;
}
.search-box input[type=text]:hover, .search-box input[type=text]:focus, .search-box input[type=text]:active {
  box-shadow: none;
}
.search-box .search-btn {
  position: absolute;
  right: 2px;
  top: 2px;
  color: #aaa;
  border-radius: 3px;
  font-size: 21px;
  padding: 5px 10px 1px;
  -webkit-transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  transition: all 200ms ease-in-out;
}
.search-box .search-btn:hover {
  color: #fff;
  background-color: #8FBE00;
}
.words{
margin-top:-575px
}
.form-control{
    font-size:2em;

}

.daycarewords{
    color:#ff0564; 
    font-size:72px;
    text-align:center;
    opacity:0.99;
}





}
@media screen and (max-width:959px){
  .row{
    width:100%
  }

  .search-box{
    height: 50px;
    width: 80%;
  }
  .form-control {
    font-size: 1.5em;

  }

}
  @media screen and (max-width:750px){
 
.words{
margin-top:-360px;

}
.search-box{
    height: 50px;
    width: 80%;
top:-390px;
  }

.daycarewords{

    font-size: 61px;
   

}
.form-control {
    font-size: 1em;

}




}
@media screen and (max-width:648px){

  .daycare_words{
  color: #ff0564;
    font-size: 61px;
   
    text-align: center;
    opacity: 0.99;
    font-weight: 2em;
    font-weight: bold;
}
.form-control {
   
    font-size: 0.8em;
    margin-top: 4px;
}
.search-box {
    height: 50px;
    width: 80%;
    top: -220px;
    text-align: center;
    margin: auto;
}
.nav{
  font-size: 1em;
    font-family: cursive;
}
.daycarewords {
    font-size: 24px;}

.h3{
  font-size: 0.8em;


}
.words {
    margin-top: -250px;}

.smallwords{

  font-size:1em
}

.footer_words{
  line-hight:17px;
}


}







</style>
@endsection


  