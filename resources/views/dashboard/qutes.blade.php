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
        <li class="breadcrumb-item active">  qutes</li>
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
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-5 col-sm-6 mb-5">
            {!! Form::open(['url' => '/qutes', 'method' => 'POST','files'=>'true']) !!}
                {{ Form::label('title', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::text('title', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('describtion', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::textarea('describ', '',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::label('image', '',['class'=>'form-','style' => 'display:inline-block;width:30%']) }}
                {{ Form::file('image',['class'=>'form-control','style' => 'display:inline-block;width:65%','autocomplete'=>'off']) }}
                {{ Form::submit('go',['class'=>'btn btn-success']) }}
            {!! Form::close() !!}
        </div>
        
        <div class="col-xl-4 col-sm-6 mb-4">
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        <p>{{$error}}</p>
                    </div>                    
                @endforeach
            @endif
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
                      <th>الصورة</th>
                      <th>الوصف</th>
                      <th>التحكم</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>التسلسل</th>
                      <th>الاسم</th>
                      <th>الصورة</th>
                      <th>الوصف</th>
                      <th>التحكم</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if (count($qutes) > 0)
                      @foreach ($qutes as $qute)
                         <tr>
                      <th>{{$loop->index + 1}}</th>
                      <th><a href="/tablea/tablea/public/qutes/{{$qute->id}}">{{$qute->name}}</a></th>
                      <th>
                          <img src="storage/images/{{$qute->imagesq}}" style="width: 100%;height: 100%;" alt="Image" class="img-responsive">
                      </th>
                      <th>{{$qute->descqute}}</th>
                      <th>
                        <a class="btn btn-info btn-sm" href="{{Request::url()}}/{{$qute->id}}/edit">edit </a>
                        {!! Form::open(['action' => ['QutesController@destroy',$qute->id], 'DELETE' => 'POST','style' => 'display:inline-block;']) !!}
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