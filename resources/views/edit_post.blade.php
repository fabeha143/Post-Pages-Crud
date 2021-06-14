@extends('layouts.master')

@section('content')
        <div class="container">
            {!! Form::open(array('url' => route('post.update', ['post' => $postedit->id]), 'method' => 'put')) !!}

            {{ Form::label('title','Title') }}
            <div class="mb-3" style="width: 20%;">
			{!! Form::text('title',  $postedit->title ,array('class' => 'form-control', 'style' => 'width:500px; margin-bottom:10px; ')) !!}
            {{ Form::label('content','Content') }}
            {!! Form::textarea('content',  $postedit->content ,array('class' => 'form-control', 'style' => 'width:500px; margin-bottom:10px; ')) !!}
			{!! Form::submit('Edit',array('class' => 'btn btn-large btn-primary openbutton', 'style' => 'width:500px; margin-bottom:10px; ')) !!}
	
	{!! Form::close() !!}
    </div>
@endsection()