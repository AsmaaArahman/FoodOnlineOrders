@extends('layout')

@section('title')
    order
@endsection

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">    qutes</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">
            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-md-12">
            <h1> الطلبات</h1>
            <div class="card-header">
              <i class="fas fa-table"></i> الوجبات 
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>                      
                      <th>تاريخ</th>
                      <th> تفاصيل</th>
                      <th> السعر</th>
                      <th> العدد</th>
                      <th>التحكم</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>
                      <th>تاريخ</th>
                      <th> تفاصيل</th>
                      <th> الحالة</th>
                      <th> العدد</th>
                      <th>التحكم</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if (count($orders) > 0)
                      @foreach ($orders as $order)
                         <tr>
                      <th>{{$loop->index + 1}}</th>
                      <th>{{$order->customer->name}}</th>
                      <th>{{$order->created_at}}</th>
                      <th><a href="/tablea/tablea/public/order/{{$order->id}}">تفاصيل</a></th>
                      <th>@if ($order->stat == 0 )
                                ليس موكد
                            @elseif ($order->stat == 1)
                                تم الاتفاق
                            @elseif ($order->stat == 2)
                                تم التسليم
                            @elseif ($order->stat == 3)
                                جارى المعاملة
                            @elseif ($order->stat == 4)
                                تم الانتهاء
                            @elseif ($order->stat == 5)
                                الغاء
                            @endif
                      </th>
                      <th>{{$order->countd}} اشخاص</th>
                      <th>
                      <div class="">
                            
                        </button>
                        <div class="">
                            @if ($order->stat < 5)

                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                 {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '1') }}
                                {{ Form::submit('تم الرد',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'POST','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '2') }}
                                {{ Form::submit('تم الاتفاق',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '3') }}
                                {{ Form::submit('تم التوسيل',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
                            <li class="dropdown-item">
                                {!! Form::open(['action' => ['OrderController@updatestat',$order->id], 'method' => 'PUT','style' => 'display:inline-block;']) !!}
                                {{ Form::hidden('_method', 'PUT') }}
                                 {{ Form::hidden('stat', '4') }}
                                {{ Form::submit('تم الانتهاء',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                              {!! Form::close() !!}
                      
                            </li>
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
                                   
                      </th>
                    </tr> 
                      @endforeach
                  
                  @else
                    <tr>
                      <td colspan="7" class="text-center">لايوجد</td>
                    </tr>
                        
                    @endif
                  </tbody>
                </table>
              </div>
        </div>
      </div>

@endsection