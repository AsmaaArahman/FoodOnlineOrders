@extends('layout')

@section('title')
    option
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
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5">{{ $countp }} الوجبات</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="/tablea/tablea/public/options/create">
              <span class="float-left">ADD</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      
          <!-- DataTables Example -->
          <div class="card mb-3">
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
                      <th>الوجبة</th>
                      <th> العدد</th>
                      <th>السعر</th>
                      <th>الاكلات</th>
                      <th>التحكم</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>
                      <th>الوجبة</th>
                      <th> العدد</th>
                      <th>السعر</th>
                      <th>الاكلات</th>
                      <th>التحكم</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if (count($options) > 0)
                      @foreach ($options as $option)
                         <tr>
                      <th>{{$loop->index + 1}}</th>
                      <th><a href="{{Request::url()}}/{{$option->id}}">{{$option->title}}</a></th>
                      <th>{{$option->meals->name}}</th>
                      <th>{{$option->countnum}}</th>
                      <th>{{$option->price}}</th>
                      <th>{{count($option->plantes)}}</th>
                      <th>
                        <a class="btn btn-info btn-sm" href="{{Request::url()}}/{{$option->id}}/edit">edit </a>
                        {!! Form::open(['action' => ['PlatesController@destroy',$option->id], 'DELETE' => 'POST','style' => 'display:inline-block;']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('حذف',['class'=>'btn btn-danger btn-sm','style' => 'display:inline-block;']) }}
                        {!! Form::close() !!}
                                       
                            </form>
                      </th>
                    </tr> 
                      @endforeach
                  
                  @else
                    <tr>
                      <td colspan="3" class="text-center">لايوجد</td>
                    </tr>
                        
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
@endsection