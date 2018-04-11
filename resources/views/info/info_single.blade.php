@extends('layout.master')

@section('title', 'info Single ')
@section('content')
  
<div class="container">
     <h2 style="text-align:center;padding:20px;" >Profile {{$info->name}} </h2>
    <table class="table table-bordered">
    <tr>
        <th>Name :</th>
        <td>{{$info->name}} </td>
    </tr>
     <tr>
        <th>Age  :</th>
        <td> {{$info->age}} </td>
    </tr>
     <tr>
        <th>Phone :</th>
        <td>{{$info->phone}}  </td>
    </tr>
     <tr>
        <th>Gender :</th>
        <td> {{$info->gender}} </td>
    </tr>

</table>
</div>
@endsection