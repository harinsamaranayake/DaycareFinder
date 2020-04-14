<div class="d-flex flex-column flex-md-row align-items-center p-0 pt-3 px-md-4 mb-0 bg-white">
    <img class="my-0 mr-md-auto" src="{{asset('img/logo_new.png')}}" alt="" width="72" height="72">
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/testapp/public/">Home</a>
            <a class="p-2 text-dark" href="/testapp/public/daycare_profile">Sample</a>
            <a class="p-2 text-dark" href="/testapp/public/daycare">Search</a>
            {{-- <a class="p-2 text-dark" href="/testapp/public/about">Compare</a> --}}
            <a class="p-2 text-dark" href="/testapp/public/daycare/create">Daycare</a>
            <a class="p-2 text-dark" href="/testapp/public/daycare/compare_x">Compare</a>
        </nav>
    <a class="btn btn-outline-primary" href="/testapp/public/sign">Sign up</a>
</div>

<div class="d-flex flex-column flex-md-row align-items-center pb-3 px-md-4 mb-0 bg-white border-bottom shadow-sm">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        {{-- <form class="form-inline my-2 my-lg-0"> --}}
        {!! Form::open(['action' => 'DaycareController@search_x','method' => 'POST']) !!}
            <div class="row">
                <div class="col-sm-12 text-center" style="margin:auto;">
                    {{-- <input class="form-control mr-sm-2" type="text" placeholder="Enter Zip Code" aria-label="Search"> --}}
                    {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button> --}}
                    {{Form::text('search_daycare_zip','',['class'=>'form-control mr-sm-2'])}}
                    {{Form::submit('Search',['class'=>'btn btn-outline-success my-2 my-sm-0'])}}
                </div>
            </div>
        {{Form::close()}}
        {{-- </form> --}}
    </div>
    <div class="col-sm-4" >
    </div>
</div>