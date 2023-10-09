@extends('layout')

@section('title')
    meals
@endsection

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">meals</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        
        <div class="col-xl-6 col-sm-6 mb-6">
            {!! Form::open(['url' => '/options', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                {{ Form::label('title', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('title', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('price', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('price', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('number', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('numb', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('meal', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::select('meal',$meals,'',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('describtion', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::textarea('describ', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('image', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::file('image',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::submit('go',['class'=>'btn btn-success']) }}
            {!! Form::close() !!}
        </div>
        
        <div class="col-xl-6 col-sm-6 mb-6">
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        <p>{{$error}}</p>
                    </div>                    
                @endforeach
            @endif
        </div>
      </div>

      
          
@endsection