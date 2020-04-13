@extends('layouts.app')

@section('content')
<div>
    <div class="col-sm-4 text-center mt-4" style="margin:auto;">

        <form class="form-signin" id="signin">
            <img class="mb-4" src="{{asset('img/logo_new.png')}}" alt="" width="144" height="144">
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <input type="email" id="inputEmail" class="form-control my-2" placeholder="Email" required autofocus>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" required>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember Me
                </label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <p class="text-muted"><h5>Don't have an Account ? <a href="#" onclick="sign_type(1)"><b><u>Sign Up Here</u></b></a></h5></p>
            <p class="text-muted">&copy; www.daycarefinder.us 2020</p>
        </form>

        <form class="form-signup" id="signup" style="display: none">
            <img class="mb-4" src="{{asset('img/logo_new.png')}}" alt="" width="144" height="144">
            <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
            <input type="email" id="inputName" class="form-control my-2" placeholder="Name" required autofocus>
            <input type="email" id="inputEmail" class="form-control my-2" placeholder="Email" required autofocus>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Password" required>
            <input type="password" id="inputPassword" class="form-control my-2" placeholder="Confirm Password" required>
           
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> I Accept Terms & Conditions
                </label>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            <p class="text-muted"><h5>Already have an Account ? <a href="#" onclick="sign_type(2)"><b><u>Login Here</u></b></a></h5></p>
            <p class="text-muted">&copy; www.daycarefinder.us 2020</p>
        </form>

        
    </div>
</div>
@endsection

@section('inline_css')
@endsection

@section('inline_js')
<script>
    function sign_type(i){
        document.getElementById('signin').style.display="none";
        document.getElementById('signup').style.display="none";
        if(i==1){
            document.getElementById('signup').style.display="";
        }else if(i==2){
            document.getElementById('signin').style.display="";
        }
    }
</script>
@endsection

