@extends('layouts.app')

@section('content')
    @include('daycare_inc.daycare_crud')

    {{-- {!! Form::open(['action' => 'DaycareController@mymethod','method' => 'POST']) !!} --}}
    <form>
        <div class="m-4" id="search_daycare_div" style="display:none">
            <div class="row">
                <div class="col-sm">
                    <div class="col-sm">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Enter Daycare ID</label>
                            <div class="col-sm-9">
                                {{-- {{Form::text('update_daycare_id','',['class'=>'form-control'])}} --}}
                                <input type="text" class="form-control" id="daycarename" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div style="text-align: center;" >
                        {{-- {{Form::submit('Update',['class'=>'btn btn-outline-success'])}} --}}
                        <button class="btn btn-outline-success" type="submit" onclick="" id="search_update_daycare_btn" style="display: none">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- {!! Form::close() !!} --}}
    
@endsection

@section('inline_cs')
@endsection

@section('inline_js')
    <script>
    </script>
@endsection
