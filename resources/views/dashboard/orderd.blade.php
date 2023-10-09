@extends('layout')

@section('title')
    qutes
@endsection

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> الطلب</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">
            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-md-12">

            <h1>{{$order->id}} الطلب رقم </h1>
            <div class="col-md-4 col-xs-6 col-sm-6 col-lg-4">
                <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                <div class="container" style="border-bottom:1px solid black">
                <h2>{{$order->customer->name}}</h2>
                </div>
                <hr>
                <ul class="container details">
                <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$order->customer->phone}}</p></li>
                <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$order->customer->email}}</p></li>
                <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$order->customer->addr}}</p></li>
                </ul>
                <div class="btn-group">
                <button type="button" class="btn btn-primary">{{$order->price}}</button>
                <button type="button" class="btn btn-primary">{{$order->countd}}</button>
                <button type="button" class="btn btn-primary">{{$order->created_at}}</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                تحكم  
                    </button>
                    <div class="">
                    @if ($order->stat < 5)
                        @if ($order->stat < 1)

                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                 {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '1') }}
                                {{ Form::submit('تم الرد',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            @endif
                    @if ($order->stat < 2)
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'POST','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '2') }}
                                {{ Form::submit('تم الاتفاق',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            @endif
                    @if ($order->stat < 3)
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '3') }}
                                {{ Form::submit('تم التوسيل',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            @endif
                    @if ($order->stat < 4)
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '4') }}
                                {{ Form::submit('تم الانتهاء',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            @endif
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '5') }}
                                {{ Form::submit('الغاء',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            @endif
                    </div>
                </div>
                </div>
            </div>
            @if($order->qutedetails != null)
                @foreach ($order->qutedetails as $qutedetail)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 part">
                    
                        <div class="box-part text-center">
                            
                            <i class="fa fa-utensils fa-3x" aria-hidden="true"></i>
                            
                            <div class="title">
                                <h3>{{$qutedetail->meals->name}}</h3>
                            </div>
                            
                            <div class="text">
                                <span>{{$qutedetail->title}}</span>
                            </div>
                            
                            
                            <p class="text">{{$qutedetail->pivot->priced * $qutedetail->pivot->days}}</p>
                            <p class="text">{{$qutedetail->pivot->days}}</p>
                        </div>
                    </div>
            @endforeach
            @else
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 part">
                    
                        <div class="box-part text-center">
                            
                            <i class="fa fa-utensils fa-3x" aria-hidden="true"></i>
                            
                            <div class="title">
                                <h3>{{$order->option->title}}</h3>
                            </div>
                            
                            <div class="text">
                                <span>{{$order->option->price}}</span>
                            </div>
                            
                        </div>
                    </div>
            @endif
        </div>
      </div>

@endsection