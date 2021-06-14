@extends('layouts.master')

@section('content')
{{ Form::open(array('route' => 'post.store' , 'method' => 'POST')) }}

    <div class="container">
        {{ Form::label('title','Title') }}
        <div class="mb-3" style="width: 20%;">
            {{ Form::text('title','Title',array('class' => 'form-control' , 'style' => 'width:500px; margin-bottom:10px; '))}}
            
            {{ Form::label('content','Content') }}
            {{ Form::textarea('content','Content',array('class' => 'form-control' ,'style' => 'width:500px;margin-bottom:10px;'))}}

            {{ Form::label('category_id','Category') }}
            {!! Form::select('category_id', $categories, ['style' => 'padding:500px']) !!}

        </div>
    {{ Form::submit('Add',array('class' => 'btn btn-large btn-primary openbutton' , 'style' => 'width:500px;'))}}
    </div>


{{ Form::close() }}
@endsection()