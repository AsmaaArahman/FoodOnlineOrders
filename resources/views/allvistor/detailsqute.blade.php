@extends('layoutbase')
@section('content')
    
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('css/images/img_bg_1.jpg')}})" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
                
					<div class="row row-mt-15em text-center" style="margin-top:9em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                    
							<h1 class="cursive-font">الباقة
						{{$qutes->name}} 
                        </h1>
                        
							<h2 class="cursive-font">سعر 
						{{$qutes->priceq}} جنيه
                        </h2>
                        
							<p class="cursive-font">
						{{$qutes->descqute}}
                        </p>
                        <a href="#details" >تفاصيل</a>                    
                    <div class=" cursive-font"style="margin-top:20px">
                        <a href="/tablea/tablea/public/make-order/{{$qutes->id}}/qute" class="btn btn-success">اطلب</a>                
                    </div>
				</div>
				</div>

				</div>
			</div>
		</div>
	</header>
    
    <div class="gtco-section">
		<div class="gtco-container">
            <div class="row" id="details">
                    @foreach ($qutes->qutedetail as $qute) 
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div href="/tablea/tablea/public/storage/images/{{$qute->images}}" class="fh5co-card-item image-popup">
                                    <figure>
                                        <div class="overlay"><i class="ti-plus"></i></div>
                                        <img src="/tablea/tablea/public/storage/images/{{$qute->images}}"style="width:100%;height:100%" alt="{{$qute->images}}" class="img-responsive">
                                    </figure>
                                    <div class="fh5co-text">
                                        <h2>{{$qute->title}}</h2>
            							<h3>{{$qute->meals->name}}</h3>
                                        <p>{{$qute->descr}}</p>
                                        <ul class="nav justify-content-center">
                                            @foreach($qute->plantes as $plante)
                                            <li class="nav-item">
                                                <a class="nav-link active" href="">{{$plante->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>  
                    @endforeach
			</div>
		</div>
            </div>
        </div>
    </div>
@endsection