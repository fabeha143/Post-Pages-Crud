@extends('layouts.master')

@section('content')
<div class="container">
    <a href="{{ route('page.create')}}" class='btn btn-large btn-danger openbutton' style="margin-bottom: 36px; float:right;">Add Page</a>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col" style="text-align:center; border: 1px solid #ddd;">Id</th>
                <th scope="col" style="text-align:center; border: 1px solid #ddd;">Title</th>
                <th scope="col" style="text-align:center; border: 1px solid #ddd;">Content</th>
                <th scope="col" style="text-align:center; border: 1px solid #ddd;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(count($page))
                @foreach($page as $list)

                    <tr>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align:center;">{{ $list->id}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align:center;">{{ $list->title}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; text-align:center;width:40%">{{ $list->content}}</td>
                        <td>
                        {!! Form::open(array('url' => route('page.edit', ['page' => $list->id]), 'method' => 'get')) !!}		
                            {!! Form::submit('Edit', array('class' => 'btn btn-large btn-primary openbutton','style'=> 'float:left; margin-right:10px;') )!!}
                         {!! Form::close() !!}

                         <div>
                         {!! Form::open(array('url' => route('page.destroy', ['page' => $list->id]), 'method' => 'delete')) !!}		
                            {!! Form::submit('Delete', array('class' => 'btn btn-large btn-primary openbutton','style'=> 'float:left; margin-right:10px;')) !!}
                    
                         {!! Form::close() !!}
                         </div>
                        </td>
                            
                        </td>
                        
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="4">No data found!!</td>
            </tr>
            @endif
        
        </tbody>
    </table>
</div>
@endsection()