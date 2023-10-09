@extends('layout')

@section('title')
    customers
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
            <h1> العملاء</h1>
            <div class="card-header">
              <i class="fas fa-table"></i> العملاء
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>
                      <th>الايميل</th>
                      <th>الهاتف</th>
                      <th>العنوان</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>
                      <th>الايميل</th>
                      <th>الهاتف</th>
                      <th>العنوان</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if (count($customers) > 0)
                      @foreach ($customers as $customer)
                         <tr>
                      <th>{{$loop->index + 1}}</th>
                      <th><a href="/tablea/tablea/public/customer/{{$customer->phone}}">{{$customer->name}}</a></th>
                      <th>{{$customer->email}}</th>
                      <th>{{$customer->phone}}</th>
                      <th>{{$customer->addr}}</th>
                      </tr> 
                      @endforeach
                  
                  @else
                    <tr>
                      <td colspan="5" class="text-center">لايوجد</td>
                    </tr>
                        
                    @endif
                  </tbody>
                </table>
              </div>
        </div>
      </div>

@endsection