@extends('layout')

@section('title')
    qutes details
@endsection

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">    details</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        
        <div class="col-xl-6 col-sm-6 mb-6">
            {!! Form::open(['url' => '/details', 'method' => 'POST','files'=>'true']) !!}
                {{ Form::label('qute', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::select('qute',$qute, '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('option', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::select('option',$option, '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('price', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('price', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('days', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('days', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
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