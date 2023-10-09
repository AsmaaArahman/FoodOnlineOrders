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
        <li class="breadcrumb-item active">    qutes</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-md-12">
            <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <div class="col-md-12">
          <a href="/tablea/tablea/public/details">add</a>

            <h1>{{$qutes->name}}<h1>
            <h2>{{$qutes->priceq}}<h2>
            @foreach ($qutes->qutedetail as $qutedetail)
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
        </div>
      </div>

@endsection