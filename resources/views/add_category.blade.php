@extends('layouts.master')

@section('content')
<div class="container">
{{ Form::open(array('route' => 'category.store' , 'method' => 'POST')) }}

    <div>
        {{ Form::label('name','Category Name') }}
        <div class="mb-3" style="width: 20%;">
            {{ Form::text('name','Name',array('class' => 'form-control','style' => 'width:500px; margin-bottom:10px; '))}}
        </div>
    </div>

    {{ Form::submit('Add',array('class' => 'btn btn-large btn-primary openbutton','style' => 'width:500px; margin-bottom:10px; '))}}

{{ Form::close() }}
</div>
@endsection()