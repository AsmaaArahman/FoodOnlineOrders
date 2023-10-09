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
            {!! Form::model($option, ['route' => ['options.update', $option->id],'method'=>'PUT']) !!}
                {{ Form::label('title', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('title',null ,['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('price', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('price',null ,['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('number', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('countnum', null,['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('meal', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::select('meal',$meals,null,['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('describtion', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::textarea('descr',null ,['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
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