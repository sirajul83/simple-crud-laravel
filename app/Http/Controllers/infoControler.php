<?php

namespace App\Http\Controllers;

use App\infoModel;
use Illuminate\Http\Request;
use Validator;

class infoControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=infoModel::get();
        return view('info.students', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('info.info_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($request->all(),[
            
            'name'=>'required',
            'phone'=>'required|unique:info',
            'image'=>'mimes:jpeg,jpg,png,JPG',
        ]);
        
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;
        }
        

        $data=infoModel::create($input);
        return "data added";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $info=infoModel::findOrFail($id);
        return view('info.info_single', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info=infoModel::findOrFail($id);
        return view('info.info_edit', compact('info'));
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
        $data=infoModel::findOrFail($id);
        $input=$request->all();
        $data->update($input);
        return redirect('/std');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=infoModel::findOrFail($id);
         $data->delete($data);
         return redirect('/std');
    }
}
