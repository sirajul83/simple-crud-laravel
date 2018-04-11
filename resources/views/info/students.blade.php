@extends('layout.master')
@section('title','view student')
@section('content')
 <div class="container">
     <h2 style="text-align:center;padding:20px;" >View all info </h2>
    <table class="table table-bordered">
        <tr>
            <th>Sl :</th>
            <th>Name :</th>
            <th>Image :</th>
            <th>Age :</th>
            <th>Phone :</th>
            <th>Gender :</th>
            <th colspan="2">Action</th>
          
        </tr>
       <?php  $sl=0; ?>
        @foreach($data as $student)
            <tr>
                <td>  {{ $sl=$sl+1 }}      </td>
                <td>  <a href="{{route('std.show', $student->id)}}" > {{$student->name}}  </a> </td>
                 <td>  <img src="/admin/{{ $student['image'] }}" height="30px" width="30px" />  </td>
                <td>  {{$student->age}}    </td>
                <td>  {{$student->phone}}  </td>
                <td>  {{$student->gender}} </td>
                <td> 
                    <a href="{{route('std.edit', $student->id)}}"  class="btn btn-primary btn-sm">Edit</a>
                   
                </td>
                <td>
                    {!! Form::open(array('route' => ["std.destroy",$student->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection