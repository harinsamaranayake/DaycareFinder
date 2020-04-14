@extends('layouts.app')

@section('content')


<div class="p-4" style="background-color:white">
<div class="row">
    <div class="col-sm">
        <div style="text-align: center;">
            <button class="btn btn-outline-primary" type="button" onclick="show_daycare_activity(1)">Add A New Daycare</button>
        </div>
    </div>
    <div class="col-sm">
        <div style="text-align: center;">
            <button class="btn btn-outline-success" type="button" onclick="show_daycare_activity(2)">Update An Existing Daycare</button>
        </div>
    </div>
    <div class="col-sm">
        <div style="text-align: center;">
            <button class="btn btn-outline-danger" type="button" onclick="show_daycare_activity(3)">Delete An Existing Daycare</button>
        </div>
    </div>
</div>
</div>

<hr class="p-0 m-0">

<div class="m-4" id="search_daycare_div" style="display:none">
    <div class="row">
        <div class="col-sm">
            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Enter Daycare ID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="daycarename" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div style="text-align: center;" >
                <button class="btn btn-outline-success" type="button" onclick="show_daycare_activity(4)" id="search_update_daycare_btn" style="display: none">Update</button>
                <button class="btn btn-outline-danger" type="button" onclick="delete_daycare()" id="search_delete_daycare_btn" style="display: none">Delete</button>
            </div>
        </div>
    </div>
</div>

<form style="display:none" id="add_update_daycare_form">
    <div class="m-4"> 
        <h4><b> Main Info </b></h4>
        <hr>
        <div class="row">
            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Daycare Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="daycarename" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Owner Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" id="comment"></textarea>
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
                        <input type="text" class="form-control" id="daycarename" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Address Line 02</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Zip Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Latitude & Longitude</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="owner" placeholder="Latitude">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="owner" placeholder="Longitude">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="daycarename" placeholder="example@email.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Website</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner" placeholder="www.website.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Contact Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
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
                        <input type="text" class="form-control" id="daycarename" placeholder="1000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Age Range</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner" placeholder="1-2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Both</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Students Per Teacher</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Curriculum</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" id="comment"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Accepting Students</label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="accepting" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="accepting" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Licensed</label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="licensed" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="licensed" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Care Type</label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="care" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Home Based</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="care" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Center Based</label>
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
                        <input type="text" class="form-control" id="daycarename" placeholder="8.00 A.M">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">End Time</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="owner" placeholder="5.00 P.M">
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Open On</label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Monday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tuesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Wednesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Thursday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Friday</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9" style="margin:auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Saturday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="openon" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Sunday</label>
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
                        <input id="image01" name="FileUpload" multiple="" type="file" /> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Image 02</label>
                    <div class="col-sm-9">
                        <input id="image02" name="FileUpload" multiple="" type="file" /> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Image 03</label>
                    <div class="col-sm-9">
                        <input id="image03" name="FileUpload" multiple="" type="file" /> 
                    </div>
                </div>
            </div>
            <div class="col-sm textcenter" style="margin:auto">
                <div class="form-group row m-0" >
                    <div class="col-sm-12" style="text-align: center;">
                        <button class="btn btn-primary btn-lg" type="submit" id="add_new_daycare_btn" style="display:none" onclick="add_daycare()">Add Daycare</button>
                        <button class="btn btn-success btn-lg" type="submit" id="update_ex_daycare_btn" style="display:none" onclick="update_daycare()">Update Daycare</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</form>
@endsection

@section('inline_js')
    <script>
        function show_daycare_activity(activity_no){
            document.getElementById('search_daycare_div').style.display="none";
            document.getElementById('search_update_daycare_btn').style.display="none";
            document.getElementById('search_delete_daycare_btn').style.display="none";
            document.getElementById('add_update_daycare_form').style.display="none";
            document.getElementById('add_new_daycare_btn').style.display="none";
            document.getElementById('update_ex_daycare_btn').style.display="none";
            if(activity_no==1){
                // Add A New Daycare
                document.getElementById('add_update_daycare_form').style.display="";
                document.getElementById('add_new_daycare_btn').style.display="";
            }else if(activity_no==2){
                // Search-Update A New Daycare
                document.getElementById('search_daycare_div').style.display="";
                document.getElementById('search_update_daycare_btn').style.display="";
            }else if(activity_no==3){
                // Search-Delete A New Daycare
                document.getElementById('search_daycare_div').style.display="";
                document.getElementById('search_delete_daycare_btn').style.display="";
            }else if(activity_no==4){
                // Update A New Daycare
                document.getElementById('add_update_daycare_form').style.display="";
                document.getElementById('update_ex_daycare_btn').style.display="";
            }
            // alert(activity_no);
        }

        function add_daycare(){
            alert("Daycare Added");
        }

        function update_daycare(){
            alert("Daycare Updated");
        }

        function delete_daycare(){
            alert("Daycare Deleted");
        }
    </script>
@endsection