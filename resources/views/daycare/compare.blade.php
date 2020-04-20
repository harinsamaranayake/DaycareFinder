@extends('layouts.app')

@section('content')
<div class="comparison">

    <table>
      <thead>
        <tr>
            <th class="tl tl2"></th>
            <th class="qbse">
                Daycare 01
            </th>
            <th class="qbse">
                Daycare 02
            </th>
            <th class="qbse">
                Daycare 03
            </th>
        </tr>
        <tr>
            <th class="tl"></th>
            @foreach ($daycares as $daycare)
            <th class="compare-heading">
                {{$daycare->name}}
            </th>
            @endforeach 
        </tr>
        <tr>
            <th></th>
            @foreach ($daycares as $daycare)
            <th class="price-info">
                <div class="price-now"><span>${{$daycare->price}}<span class="price-small">.00</span></span> /month</div>
            </th>
            @endforeach 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td colspan="3">Owner</td>
        </tr>
        <tr class="compare-row">
            <td>Owner</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->owner}}</td>
            @endforeach 
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Address</td>
        </tr>
        <tr>
            <td>Address</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->address}}, {{$daycare->city}}, {{$daycare->state}}, {{$daycare->zip}}</td>
            @endforeach 
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Contact No</td>
        </tr>
        <tr class="compare-row">
            <td>Contact No</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->contact}}</td>
            @endforeach 
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Email</td>
        </tr>
        <tr>
            <td>Email</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->email}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Website</td>
        </tr>
        <tr class="compare-row">
            <td>Website</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->web}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Age Range</td>
        </tr>
        <tr>
            <td>Age Range</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->age_low}} - {{$daycare->age_high}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Gender</td>
        </tr>
        <tr class="compare-row">
            <td>Gender</td>
            @foreach ($daycares as $daycare)
            <td>
                <?php
                    if($daycare->gender==1){
                        echo 'Male';
                    }else if($daycare->gender==2){
                        echo 'Female';
                    }else if($daycare->gender==3){
                        echo 'Male & Female';
                    }
                ?>
            </td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Students per Techer</td>
        </tr>
        <tr>
            <td>Students per techer</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->students_per_teacher}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Curriculum</td>
        </tr>
        <tr class="compare-row">
            <td>Curriculum</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->curriculum}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Accepting Students</td>
        </tr>
        <tr>
            <td>Accepting Students</td>

            @foreach ($daycares as $daycare)
            <td>
                <?php   if($daycare->accepting_students==1){
                ?>          <span class="tickgreen">✔</span>
                <?php   }else if($daycare->accepting_students==0){
                ?>          <span style="color:red">✖</span>
                <?php    }
                ?>
            </td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Licensed</td>
        </tr>
        <tr class="compare-row">
            <td>Licensed</td>
            
            @foreach ($daycares as $daycare)
            <td>
                <?php   if($daycare->licensed==1){
                ?>          <span class="tickgreen">✔</span>
                <?php   }else if($daycare->licensed==0){
                ?>          <span style="color:red">✖</span>
                <?php    }
                ?>
            </td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Waitlist</td>
        </tr>
        <tr>
            <td>Waitlist</td>
            
            @foreach ($daycares as $daycare)
            <td>
                <?php   if($daycare->wait_list==1){
                ?>          <span class="tickgreen">✔</span>
                <?php   }else if($daycare->wait_list==0){
                ?>          <span style="color:red">✖</span>
                <?php    }
                ?>
            </td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Care Type</td>
        </tr>
        <tr class="compare-row">
            <td>Care Type</td>

            @foreach ($daycares as $daycare)
            <td>
                <?php   
                    if($daycare->care_type==1){
                        echo 'Home Based';
                    }else if($daycare->care_type==0){
                        echo 'Center Based';
                    }
                ?>
            </td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Open Time</td>
        </tr>
        <tr>
            <td>Open Time</td>
            @foreach ($daycares as $daycare)
            <td>{{$daycare->time_start}} - {{$daycare->time_end}}</td>
            @endforeach
        </tr>

        <tr>
            <td></td>
            <td colspan="3">Open Days</td>
        </tr>
        <tr class="compare-row">
            <td>Open Days</td>
            @foreach ($daycares as $daycare)
            <td>
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
            </td>
            @endforeach
        </tr>
      </tbody>
    </table>
  
  </div>
@endsection

@section('inline_css')
    {{-- <link href="{{asset('custom_assets/compare.css')}}" rel="stylesheet"> --}}
@endsection
