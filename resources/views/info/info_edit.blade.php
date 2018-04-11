@extends('layout.master')

@section('title', 'New info')
@section('content')
   <div class="container">
       <h2 style="text-align:center;padding:20px;" >Insert info </h2>
       {!! Form::open(array('route'=> ['std.update', $info->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}
        <div class="row">

            {{ Form::label('name', 'Student name', array('class'=>'col-md-3 from-group'))}}
            {{ Form::text('name', $info->name , array('class'=>'col-md-7 form-control', 'placeholder'=>'Student name'))}}
        </div><br>
        <div class="row">
            {{ Form::label('age', 'Student age', array('class'=>'col-md-3 from-group'))}}
            {{ Form::number('age', $info->age, array('class'=>'col-md-7 form-control', 'placeholder'=>'Student age'))}}
        </div><br>
       <div class="row">

           {{ Form::label('phone', 'phone no', array('class'=>'col-md-3 from-group'))}}
           {{ Form::number('phone', $info->phone , array('class'=>'col-md-7 form-control', 'placeholder'=>'Student number'))}}

       </div><br>
       <div class="row">
           {{ Form::label('gender', 'Gender', array('class'=>'col-md-3 from-group'))}}
           {{ Form::select('gender', [ $info->gender, 'F'=>'Female', 'M'=>'Male'] ,array('class'=>'col-md-3 form-group'))}}
       </div><br>

       <div class="row">
           <div class="col-md-3"></div>
           {{Form::submit('Save', array('class'=>'btn btn-success col-md-1 '))}}
       </div>

   {!! Form::close() !!}
</div>
@endsection