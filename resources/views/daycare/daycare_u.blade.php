@extends('layouts.app')

@section('content')
    <div class="p-4" style="background-color:#E8F6F3">

        {{-- <form style="display:none" id="add_update_daycare_form"> --}}
        {!! Form::open(['action' => ['DaycareController@update', $daycare->id],'method' => 'POST']) !!}

        {{ Form::model($daycare)}}
            <div id="add_update_daycare_form">
                <div class="m-4"> 
                
                    <h4><b> Main Info </b></h4>
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Daycare Name</label>
                                <div class="col-sm-9">
                                    {{Form::text('name', $daycare->name,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="daycarename" > --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Owner Name</label>
                                <div class="col-sm-9">
                                    {{Form::text('owner',$daycare->owner,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Started On</label>
                                <div class="col-sm-9">
                                    {{ Form::date('started_on', $daycare->started_on, ['class' => 'form-control', 'id'=>'datetimepicker']) }}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    {{Form::textarea('description',$daycare->description,['class'=>'form-control','rows'=>'6'])}}
                                    {{-- <textarea class="form-control" rows="3" id="comment"></textarea> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <h4 class="mt-4"><b> Location & Contact Info </b></h4>
                    <hr>

                    <div class="row">
                        <div class="col-sm">

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Address Line 01</label>
                                <div class="col-sm-9">
                                    {{Form::text('ad01',$daycare->ad01,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="daycarename" > --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Address Line 02</label>
                                <div class="col-sm-9">
                                    {{Form::text('ad02',$daycare->ad02,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    {{Form::text('city',$daycare->city,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    {{Form::text('state',$daycare->state,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Zip Code</label>
                                <div class="col-sm-9">
                                    {{Form::text('zip',$daycare->zip,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Latitude & Longitude</label>
                                <div class="col-sm-4">
                                    {{Form::text('lat',$daycare->lat,['class'=>'form-control ','placeholder'=>'Latitude'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="Latitude"> --}}
                                </div>
                                <div class="col-sm-4">
                                    {{Form::text('lng',$daycare->lng,['class'=>'form-control ','placeholder'=>'Longitude'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="Longitude"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Contact Number</label>
                                <div class="col-sm-9">
                                    {{Form::text('contact',$daycare->contact,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    {{Form::text('email',$daycare->email,['class'=>'form-control ','placeholder'=>'example@email.com'])}}
                                    {{-- <input type="text" class="form-control" id="daycarename" placeholder="example@email.com"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    {{Form::text('web',$daycare->web,['class'=>'form-control ','placeholder'=>'www.website.com'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="www.website.com"> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="mt-4"><b>Details</b></h4>
                    <hr>
                    
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Price Per Month($)</label>
                                <div class="col-sm-9">
                                    {{Form::text('price',$daycare->price,['class'=>'form-control ','placeholder'=>'Eg: 1000'])}}
                                    {{-- <input type="text" class="form-control" id="daycarename" placeholder="1000"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Age Range</label>
                                <div class="col-sm-4">
                                    {{Form::text('age_low',$daycare->age_low,['class'=>'form-control ','placeholder'=>'Lower Age'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="Latitude"> --}}
                                </div>
                                <div class="col-sm-4">
                                    {{Form::text('age_high',$daycare->age_high,['class'=>'form-control ','placeholder'=>'Higher Age'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="Longitude"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('gender','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Male</label>
                                        {{-- {{Form::label('gender','Male2',['class'=>'form-check-label'])}} --}}
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('gender','2',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('gender','3',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="option3"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio3">Both</label>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Students Per Teacher</label>
                                <div class="col-sm-9">
                                    {{Form::text('students_per_teacher',$daycare->students_per_teacher,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Curriculum</label>
                                <div class="col-sm-9">
                                    {{Form::textarea('curriculum',$daycare->curriculum,['class'=>'form-control','rows'=>'3'])}}
                                    {{-- <textarea class="form-control" rows="3" id="comment"></textarea> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Accepting Students</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('accepting_students','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="accepting" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('accepting_students','0',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="accepting" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Licensed</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('licensed','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="licensed" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('licensed','0',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="licensed" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Waitlist</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('wait_list','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="care" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('wait_list','0',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="care" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Care Type</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('care_type','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="care" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Home Based</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::radio('care_type','0',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="care" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">Center Based</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4><b> Opening </b></h4>
                    <hr>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Start Time</label>
                                <div class="col-sm-9">
                                    {{Form::text('time_start',$daycare->time_start,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="daycarename" placeholder="8.00 A.M"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">End Time</label>
                                <div class="col-sm-9">
                                    {{Form::text('time_end',$daycare->time_end,['class'=>'form-control'])}}
                                    {{-- <input type="text" class="form-control" id="owner" placeholder="5.00 P.M"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Open On</label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('mon','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Monday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('tue','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">Tuesday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('wed','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name=" openon" id="inlineRadio3" value="option3"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio3">Wednesday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('thu','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Thursday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('fri','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">Friday</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9" style="margin:auto">
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('sat','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio1">Saturday</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        {{Form::checkbox('sun','1',['class'=>'form-check-input'])}}
                                        {{-- <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2"> --}}
                                        <label class="form-check-label ml-2" for="inlineRadio2">Sunday</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
        
                    <h4><b> Images </b></h4>
                    <hr>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Image 01</label>
                                <div class="col-sm-9">
                                    {{Form::file('img01')}}
                                    {{$daycare->img01}}
                                    {{-- <input id="image01" name="FileUpload" multiple="" type="file" />  --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Image 02</label>
                                <div class="col-sm-9">
                                    {{Form::file('img02')}}
                                    {{$daycare->img02}}
                                    {{-- <input id="image02" name="FileUpload" multiple="" type="file" />  --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Image 03</label>
                                <div class="col-sm-9">
                                    {{Form::file('img03')}}
                                    {{$daycare->img03}}
                                    {{-- <input id="image03" name="FileUpload" multiple="" type="file" />  --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm textcenter" style="margin:auto">
                            <div class="form-group row m-0" >
                                <div class="col-sm-12" style="text-align: center;">
                                    {{-- {{Form::submit('Search', null, array('id'=>'add_new_daycare_btn', 'class'=>'btn btn-primary btn-lg'))}}
                                    {{Form::submit('Search2', null, array('id'=>'update_ex_daycare_btn', 'class'=>'btn btn-primary btn-lg'))}} --}}
                                    {{-- {{ Form::submit(array('url' => url('foo/bar'), 'class'=>'btn btn-primary btn-lg', 'id'=>'add_new_daycare_btn', 'style'=>'display:none')) }} --}}
                                    {{-- {{ Form::submit(array('url' => url('foo/bar'), 'class'=>'btn btn-primary btn-lg', 'id'=>'update_ex_daycare_btn', 'style'=>'display:none')) }} --}}
                                    {{-- {{Form::submit('add_d',['class'=>'btn btn-primary btn-lg'],'id'=>'add_new_daycare_btn')}}
                                    {{Form::submit('update_d',['class'=>'btn btn-success btn-lg'],'id'=>'update_ex_daycare_btn')}} --}}
                                    {{-- <button class="btn btn-primary btn-lg" type="submit" id="add_new_daycare_btn" style="display:none" onclick="add_daycare()">Add Daycare</button> --}}
                                    {{-- <button class="btn btn-success btn-lg" type="submit" id="update_ex_daycare_btn" style="display:none" onclick="update_daycare()">Update Daycare</button> --}}
                                    {{Form::hidden('_method','PUT')}}
                                    {{Form::submit('Update',['class'=>'btn btn-success btn-lg'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        {!! Form::close() !!}
        {{-- </form> --}}

    </div>
@endsection

@section('inline_js')
    <script>
    </script>
@endsection
