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
        <li class="breadcrumb-item active">    العملاء</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">
            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-md-12">

            <h1>{{$customer}}<h1>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 part">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>التسلسل</th>                  
                      <th>تاريخ</th>
                      <th> تفاصيل</th>
                      <th> السعر</th>
                      <th> العدد</th>
                    </tr>
                  </thead>
                  @if (count($orders) > 0)
                      @foreach ($orders as $order)
                         <tr>
                            <th>{{$loop->index + 1}}</th>
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
                            </tr>
                        @endforeach
                    @else
                    <tr>
                      <td colspan="6" class="text-center">لايوجد</td>
                    </tr>
                        
                    @endif
                  </tbody>
                </table>
              </div>
            </div>	 
				
				
        </div>
      </div>

@endsection