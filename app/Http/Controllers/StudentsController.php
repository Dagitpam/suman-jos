<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schoolmodel;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        // return schoolmodel::all();
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        
        if ($validator->passes()) {
                
            if($ada > 0){
                Session::flash('tolong', 'Data Exist!');
                return redirect()->to('dashboard.index');
            } else{ 
                return response()->json(['success'=>'Added new records.']);
            }
        }



        $schoolName = $request->input('name');
        $schoolAddress = $request->input('address');
        $periodfrom = $request->input('periodfrom');
        $periodto = $request->input('periodto');
        $category = $request->input('category');
        $schemail = $request->input('schemail');
        $schphone = $request->input('schphone');

        $result = array(
            'schoolName'=>$schoolName,
            'schoolAddress'=>$schoolAddress,
            'periodfrom'=>$periodfrom,
            'periodto'=>$periodto,
            'category'=>$category,
            'schemail'=>$schemail,
            'schphone'=>$schphone,
        );

        // $addschool = new schoolmodel();
        // $addschool-> schoolname = $schoolName;
        // $addschool-> schoolid = 121212121;
        // $addschool-> schooladdress = $schoolAddress;
        // $addschool-> periodfrom = $periodfrom;
        // $addschool-> periodto = $periodto;
        // $addschool-> email = $schemail;
        // $addschool-> contactnumber = $schphone;
        // $addschool-> category = $category;
        // $addschool->save();

        return response()->json($result, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
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

    public function viewSchool(){
        return view('dashboard.schoolprofile');
    }
}
