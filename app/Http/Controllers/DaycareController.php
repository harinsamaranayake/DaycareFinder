<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daycare;
use App\Review;
use DB;


class DaycareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Daycare::count()>0){
            // $data = Daycare::orderBy('name','asc')->paginate(10);
            $data = DB::table('daycares')->get();

            foreach($data as $daycare){
                $daycare->reviews = DB::table('reviews')->where('daycare_id', $daycare->id)->count();
                $daycare->rating = DB::table('reviews')->where('daycare_id', $daycare->id)->avg('rating');

            }

            return view('daycare.daycares')->with('daycares',$data);
        }else{
            return view('daycare.no_daycare'); 
        }

        // $data = Daycare::all();
        // $data = Daycare::orderBy('name','asc')->get();
        // $data = Daycare::orderBy('name','asc')->take(1)->get();
        // $data = DB::select('SELECT * FROM daycares');
        // return Daycare::where('name','ABC')->get();

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daycare.daycare_a');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        //     'name'=>'required',
        //     'owner'=>'required',
        //     //'started_on'=>'required',
        //     'description'=>'required',

        //     'ad01'=>'required',
        //     'ad02'=>'required',
        //     'city'=>'required',
        //     'state'=>'required',
        //     'zip'=>'required',
        //     'lat'=>'required',
        //     'lng'=>'required',
        //     'email'=>'required',
        //     // 'web'=>'required',
        //     'contact'=>'required',

        //     'price'=>'required',
        //     'age_low'=>'required',
        //     'age_high'=>'required',
        //     'students_per_teacher'=>'required',
        //     'curriculum'=>'required',

        //     'price'=>'required',
        //     'age_low'=>'required',
        //     'age_high'=>'required',
        //     'students_per_teacher'=>'required',
        //     'curriculum'=>'required',

        //     'time_start'=>'required',
        //     'time_end'=>'required',

        ]);

        $daycare = new Daycare;

        $daycare->name = $request->input('name');
        $daycare->owner = $request->input('owner');
        $daycare->started_on = $request->input('started_on');
        $daycare->description = $request->input('description'); 

        $daycare->address = $request->input('ad01').(', ').$request->input('ad02');
        $daycare->city = $request->input('city');
        $daycare->state = $request->input('state');
        $daycare->zip = $request->input('zip');
        $daycare->lat = $request->input('lat');
        $daycare->lng = $request->input('lng');
        $daycare->contact = $request->input('contact');
        $daycare->email = $request->input('email');
        $daycare->web = $request->input('web');

        $daycare->price = $request->input('price');
        $daycare->age_low = $request->input('age_low');
        $daycare->age_high = $request->input('age_high');
        $daycare->students_per_teacher = $request->input('students_per_teacher');
        $daycare->curriculum = $request->input('curriculum'); 
        $daycare->gender = $request->input('gender'); 
        $daycare->accepting_students = $request->input('accepting_students'); 
        $daycare->licensed = $request->input('licensed'); 
        $daycare->care_type = $request->input('care_type');
        $daycare->wait_list = $request->input('wait_list');  

        $daycare->time_start = $request->input('time_start');
        $daycare->time_end = $request->input('time_end');
        // $daycare->open_days = $request->input('mon').(' ').$request->input('tue').(' ').$request->input('wed').(' ').$request->input('thu').(' ').$request->input('fri').(' ').$request->input('sat').(' ').$request->input('sun');
        $daycare->mon = $request->input('mon');
        $daycare->tue = $request->input('tue');
        $daycare->wed = $request->input('wed');
        $daycare->thu = $request->input('thu');
        $daycare->fri = $request->input('fri');
        $daycare->sat = $request->input('sat');
        $daycare->sun = $request->input('sun');
        $daycare->img01 = $request->input('img01');
        $daycare->img02 = $request->input('img02');
        $daycare->img03 = $request->input('img03');

        $daycare->save();
        
        return redirect('/daycare/create')->with('success','Daycare Added');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Daycare::find($id);

        // if($data != null){
        //     if(($data->accepting_students)==1){
        //         $data->accepting_students = 'Accepting Students';
        //     }else if(($data->accepting_students)==0){
        //         $data->accepting_students = 'Not Accepting Students';
        //     }
        //     return view('daycare.daycare_profile')->with('daycare',$data);
        // }else{
        //     return view('daycare.no_daycare');
        // }

        $data1 = array();
        $data = Daycare::find($id);
        $reviews = DB::select('SELECT * FROM reviews WHERE daycare_id = "'.$id.'"');
        array_push($data1, $data);
        array_push($data1, $reviews);
        // return $data1;


        if($data != null){
            if(($data->accepting_students)==1){
                $data->accepting_students = 'Accepting Students';
            }else if(($data->accepting_students)==0){
                $data->accepting_students = 'Not Accepting Students';
            }
            return view('daycare.daycare_profile')->with('dataset',$data1);
        }else{
            return view('daycare.no_daycare');
        }

        





        // return array($data,$reviews);

        // $data = Daycare::find($id);
        // $reviews = DB::select('SELECT * FROM reviews WHERE daycare_id = "'.$id.'"');

        // $new_data = array(
        //     'daycare' -> $data,
        //     'reviews' -> $reviews,
        // );
        

        // if($data != null){
        //     if(($data->accepting_students)==1){
        //         $data->accepting_students = 'Accepting Students';
        //     }else if(($data->accepting_students)==0){
        //         $data->accepting_students = 'Not Accepting Students';
        //     }
        //     // return view('daycare.daycare_profile')->with('daycare',$data);
        //     return view('daycare.daycare_profile')->with('new_data',$new_data);
        // }else{
        //     return view('daycare.no_daycare');
        // }

        // return array($data,$reviews);
    }

    public function show_x(){
        //
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // Updating daycare

        $daycare = Daycare::find($id);
        
        if($daycare != null){
            // $this->validate($request,[
            //     'name'=>'required',
            //     'owner'=>'required',
            //     //'started_on'=>'required',
            //     'description'=>'required',

            //     'ad01'=>'required',
            //     'ad02'=>'required',
            //     'city'=>'required',
            //     'state'=>'required',
            //     'zip'=>'required',
            //     'lat'=>'required',
            //     'lng'=>'required',
            //     'email'=>'required',
            //     // 'web'=>'required',
            //     'contact'=>'required',

            //     'price'=>'required',
            //     'age_low'=>'required',
            //     'age_high'=>'required',
            //     'students_per_teacher'=>'required',
            //     'curriculum'=>'required',

            //     'price'=>'required',
            //     'age_low'=>'required',
            //     'age_high'=>'required',
            //     'students_per_teacher'=>'required',
            //     'curriculum'=>'required',

            //     'time_start'=>'required',
            //     'time_end'=>'required',

            // ]);

            $daycare->name = $request->input('name');
            $daycare->owner = $request->input('owner');
            $daycare->started_on = $request->input('started_on');
            $daycare->description = $request->input('description'); 

            $daycare->address = $request->input('ad01').(', ').$request->input('ad02').(', ').$request->input('city').(', ').$request->input('state');
            $daycare->zip = $request->input('zip');
            $daycare->lat = $request->input('lat');
            $daycare->lng = $request->input('lng');
            $daycare->contact = $request->input('contact');
            $daycare->email = $request->input('email');
            $daycare->web = $request->input('web');

            $daycare->price = $request->input('price');
            $daycare->age_low = $request->input('age_low');
            $daycare->age_high = $request->input('age_high');
            $daycare->students_per_teacher = $request->input('students_per_teacher');
            $daycare->curriculum = $request->input('curriculum'); 
            $daycare->gender = $request->input('gender'); 
            $daycare->accepting_students = $request->input('accepting_students'); 
            $daycare->licensed = $request->input('licensed'); 
            $daycare->care_type = $request->input('care_type');
            $daycare->wait_list = $request->input('wait_list');  

            $daycare->time_start = $request->input('time_start');
            $daycare->time_end = $request->input('time_end');
             $daycare->img01 = $request->input('img01');
            $daycare->img02 = $request->input('img02');
            $daycare->img03 = $request->input('img03');

            $daycare->mon = $request->input('mon');
            $daycare->tue = $request->input('tue');
            $daycare->wed = $request->input('wed');
            $daycare->thu = $request->input('thu');
            $daycare->fri = $request->input('fri');
            $daycare->sat = $request->input('sat');
            $daycare->sun = $request->input('sun');

            $daycare->save();
            
            return redirect('/daycare/create')->with('success','Daycare Updated');
        }else{
            return redirect('/daycare/create')->with('error','The ID you entered is invalid.');
        }
    }

    
    
    
    
    
    public function update_x(Request $request)
    {   
        
        // Obtaining daycare to be updated
        $id = $request->update_daycare_id;
        $data = Daycare::find($id);

        if($data != null){
            $str = explode(", ",$data->address);
            $data->ad01 = $str[0];
            $data->ad02 = $str[1];

            //If not values are displayed in check boxes revered
            ($data->mon == 1)? $data->mon = null : $data->mon = 1 ;
            ($data->tue == 1)? $data->tue = null : $data->tue = 1 ;
            ($data->wed == 1)? $data->wed = null : $data->wed = 1 ;
            ($data->thu == 1)? $data->thu = null : $data->thu = 1 ;
            ($data->fri == 1)? $data->fri = null : $data->fri = 1 ;
            ($data->sat == 1)? $data->sat = null : $data->sat = 1 ;
            ($data->sun == 1)? $data->sun = null : $data->sun = 1 ;

            return view('daycare.daycare_u')->with('daycare',$data);
        }else{
            return redirect('/daycare/create')->with('error','The ID you entered is invalid.');
        }
    }





    public function delete_x(Request $request)
    {
        $id = $request->input('delete_daycare_id');
        $daycare = Daycare::find($id);

        if($daycare != null){
            $daycare-> delete();
            return redirect('/daycare/create')->with('success','Daycare removed.');
        }else{
            return redirect('/daycare/create')->with('error','The ID you entered is invalid.');
        }
    }



    public function search_x(Request $request)
    {
        $value = $request->input('search_daycare_zip');

        $data1 = DB::select('SELECT * FROM daycares WHERE city = "'.$value.'"');
        $data2 = DB::select('SELECT * FROM daycares WHERE state = "'.$value.'"');
        $data3 = DB::select('SELECT * FROM daycares WHERE zip = "'.$value.'"');

        if($data1 != null){
            return view('daycare.daycares')->with('daycares',$data1); 
        }else if($data2 != null){
            return view('daycare.daycares')->with('daycares',$data2); 
        }else if($data3 != null){
            return view('daycare.daycares')->with('daycares',$data3); 
        }else{
            return view('daycare.no_daycare');
        }

        // $data1 = DB::table('daycares')->where('city', '"'.$value.'"');
        // $data2 = DB::table('daycares')->where('state', '"'.$value.'"');
        // $data3 = DB::table('daycares')->where('zip', '"'.$value.'"');

        // $data = DB::select('SELECT * FROM daycares WHERE zip = "'.$value.'"');

        // if($data != null){
        //     return view('daycare.daycares')->with('daycares',$data); 
        // }else{
        //     return view('daycare.no_daycare');
        // }
                
        // $data = DB::table('daycares')->where('zip', $value);
        return $data1;
        // return 'done';
    }



    public function filter_x(Request $request)
    {
        $age = $request['filter_age'];
        $price = $request['filter_price'];
        $rating = $request['filter_rating'];
        $distance = $request['filter_distance'];
        $accepting_students = $request['filter_accepting_students'];
        $licensed = $request['filter_licensed'];
        $wait_list = $request['filter_waitlist'];
        $care_type = $request['filter_care_type'];
        $reviews = $request['filter_reviews'];

        $age_query = null;
        $price_query = null;
        $rating_query = null;
        $distance_query = null;
        $accepting_students_query = null;
        $licensed_query = null;
        $wait_list_query = null;
        $care_type_query = null;
        $reviews_query = null;

        if($age != null ){
            $age_query = 'age_high >= '.$age.' AND ';
            $age_query = $age_query.'age_low <= '.$age.' AND ';
        }

        if($price != null ){
            if($price == 1){
                $price_query = 'price <= 1000 AND ';
            }else if($price == 2){
                $price_query = 'price > 1000 AND price <= 2500 AND ';
            }else if($price == 3){
                $price_query = 'price > 2500 AND ';
            }
        }

        if($rating != null){
            $rating_query = 'rating = '.$rating.' AND ';
        }

        if($distance != null ){
            //calculate distance using the coordinates in the database
            //calculated_distance = calculated_distance()

            // if($distance == 1){
            //     if(calculated_distance <= 1){
            //         $distance_query = 'TRUE AND ';
            //     }else{
            //         $distance_query = 'FALSE AND ';
            //     } 
            // }else if($distance == 2){
            //     if(calculated_distance > 1 & calculated_distance <= 5){
            //         $distance_query = 'TRUE AND ';
            //     }else{
            //         $distance_query = 'FALSE AND ';
            //     } 
            // }else if($distance == 3){
            //     if(calculated_distance > 5 & calculated_distance <= 10){
            //         $distance_query = 'TRUE AND ';
            //     }else{
            //         $distance_query = 'FALSE AND ';
            //     } 
            // }else if($distance == 4){
            //     if(calculated_distance > 10){
            //         $distance_query = 'TRUE AND ';
            //     }else{
            //         $distance_query = 'FALSE AND ';
            //     } 
            // }
        }

        if($accepting_students != null ){
            $accepting_students_query = 'accepting_students = '.$accepting_students.' AND';
        }

        if($licensed != null){
            $licensed_query = 'licensed = '.$licensed.' AND ';
        }

        if($wait_list != null){
            $wait_list_query = 'wait_list = '.$wait_list.' AND ';
        }

        if($care_type != null){
            $care_type_query = 'care_type = '.$care_type.' AND ';
        }

        if($reviews != null ){
            if($reviews == 1){
                $reviews_query = 'reviews <= 10 AND ';
            }else if($reviews == 2){
                $reviews_query = 'reviews > 10 AND reviews <= 50 AND ';
            }else if($reviews == 3){
                $reviews_query = 'reviews > 50 AND ';
            }
        }

        $query ='SELECT * FROM daycares WHERE '.$age_query.''.$price_query.''.$rating_query.''.$distance_query.''.$accepting_students_query.''.$licensed_query.''.$wait_list_query.''.$care_type_query.''.$reviews_query.' TRUE';

        // $data = DB::select('SELECT * FROM daycares WHERE '.$rating_query.''.$accepting_students_query.''.$age_query.' 1=1');
        $data = DB::select(''.$query.'');

        return view('daycare.daycares')->with('daycares',$data); 

        // return $request;
        // return $query; 
        // return $data;
    }

    public function compare_x(Request $request)
    {
        $daycare_count = Daycare::count();
        $compare_count = 0;
        $data = array();

        for ($x = 1; $x <= $daycare_count; $x++) {
            if($request[''.$x.'']!=null){
                $compare_count ++ ;
                
                //processing
                $daycare = Daycare::find($x);
                array_push($data,$daycare);

                if($compare_count == 3){
                    break;
                }
            }
        } 

        // if($request['100']==null){
        //     $abc = 'pqr';
        // }

        // return $request['100'];
        // return $data;
        return view('daycare.compare')->with('daycares',$data);

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
