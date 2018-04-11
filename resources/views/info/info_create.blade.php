@extends('layout.master')

@section('title', 'New info')
@section('content')
   <div class="container">
       <h2 style="text-align:center;padding:20px;" >Insert info </h2>
       {!! Form::open(array('route'=> 'std.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
        <div class="row">
            
            <table class="table table-stripped">
		
	<tr class="{{ $errors->has('name') ? 'has-error' : '' }}">
		<td>{{ Form::label('name', ' Name :', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('name', '', array('class'=>'col-md-6 form-control', 'placeholder'=>' Name'))}}
		@if($errors->has('name'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('name') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('age') ? 'has-error' : '' }}">
		<td>{{ Form::label('age', 'Age :', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('age', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'age'))}}
		@if($errors->has('age'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('price') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
		<td>{{ Form::label('phone', 'Phone', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('phone', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'phone', 'id'=>'details'))}}
		@if($errors->has('phone'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('phone') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
                 <tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
                <td>{{ Form::label('image', ' Image', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

                    @if($errors->has('image'))
                        <span class="help-block" style="display:block">
          <strong>{{ $errors->first('image') }}</strong>
                   </span>
                    @endif
                </td>
            </tr>

	<tr>
		<td></td>
		<td>{{Form::submit('Save', array('class'=>'btn btn-success'))}} </td>
	</tr>



	</table>

   {!! Form::close() !!}
</div>
@endsection