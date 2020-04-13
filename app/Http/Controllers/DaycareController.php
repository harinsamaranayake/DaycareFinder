<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daycare;
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
        // $data = Daycare::all();
        // $data = Daycare::orderBy('name','asc')->get();
        // $data = Daycare::orderBy('name','asc')->take(1)->get();
        // $data = DB::select('SELECT * FROM daycares');
        // return Daycare::where('name','ABC')->get();

        if(Daycare::count()>0){
            $data = Daycare::orderBy('name','asc')->paginate(10);
            return view('daycare.daycares')->with('daycares',$data); 
        }else{
            return view('daycare.no_daycare'); 
        }
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
        // $this->validate($request,[
        //     'name'=>'required',
        //     'owner'=>'required',
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

        $daycare = new Daycare;

        $daycare->name = $request->input('name');
        $daycare->owner = $request->input('owner');
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
        $data = Daycare::find($id);

        if($data != null){
            if(($data->accepting_students)==1){
                $data->accepting_students = 'Accepting Students';
            }else if(($data->accepting_students)==0){
                $data->accepting_students = 'Not Accepting Students';
            }
            return view('daycare.daycare_profile')->with('daycare',$data);
        }else{
            return view('daycare.no_daycare');
        }
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
        $daycare = Daycare::find($id);
        
        if($daycare != null){
            // $this->validate($request,[
            //     'name'=>'required',
            //     'owner'=>'required',
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
            // $daycare->open_days = $request->input('mon').(' ').$request->input('tue').(' ').$request->input('wed').(' ').$request->input('thu').(' ').$request->input('fri').(' ').$request->input('sat').(' ').$request->input('sun');
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
        
        $id = $request->update_daycare_id;
        $data = Daycare::find($id);

        if($data != null){
            $str = explode(", ",$data->address);
            $data->ad01 = $str[0];
            $data->ad02 = $str[1];
            $data->city = $str[2];
            $data->state = $str[3];

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
        $zip = $request->input('search_daycare_zip');

        $data = DB::select('SELECT * FROM daycares WHERE zip = '.$zip.'');

        if($data != null){
            return view('daycare.daycares')->with('daycares',$data); 
        }else{
            return view('daycare.no_daycare'); 
        }
        
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
