@extends('layouts.master')

@section('content')
<div class="container">
    {!! Form::open(array('url' => route('page.update', ['page' => $pageedit->id]), 'method' => 'put')) !!}

            {{ Form::label('title','title') }}
            <div class="mb-3" style="width: 20%;">
			{!! Form::text('title',  $pageedit->title ,array('class' => 'form-control','style' => 'width:500px; margin-bottom:10px; ')) !!}
            {!! Form::textarea('content',  $pageedit->content ,array('class' => 'form-control','style' => 'width:500px; margin-bottom:10px; ')) !!}
			{!! Form::submit('Edit',array('class' => 'btn btn-large btn-primary openbutton','style' => 'width:500px; margin-bottom:10px; ')) !!}
	
	{!! Form::close() !!}
</div>
@endsection()