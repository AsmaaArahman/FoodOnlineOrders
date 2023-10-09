@extends('layoutbase')
@section('style')
    <style>
/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
@endsection
@section('content')
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="height:82px;background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                    
							<h1 class="cursive-font">
                                @foreach ($meals as $meal)
                                    {{$meal->name}}
                                @endforeach
                            </h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">الوجبات </h2>
					<p></p>			
                </div>
			</div>
            <div class="row">
                @if (count($meals) > 0)
                    @foreach ($meals as $meal)
                        @foreach ($meal->option as $mealop) 
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div href="/tablea/tablea/public/storage/images/{{$mealop->images}}" class="fh5co-card-item ">
                                    <figure>
                                        <div class="overlay"><i class="ti-plus"></i></div>
                                        <img src="/tablea/tablea/public/storage/images/{{$mealop->images}}"style="width:100%;height:100%" alt="{{$mealop->images}}" class="img-responsive">
                                    </figure>
                                    <div class="fh5co-text">
                                        <h2>{{$mealop->title}}</h2>
                                        <p>{{$mealop->descr}}</p>
                                        <ul class="nav justify-content-center">
                                            @foreach($mealop->plantes as $plante)
                                            <li class="nav-item">
                                                <a class="nav-link active" href="">{{ $loop->index + 1}} - {{ $plante->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <p><span class="price cursive-font">{{$mealop->price}} ج</span></p>
                                        <div style="text-center">
                                        <a href="/tablea/tablea/public/make-order/{{$mealop->id}}/meal" class="btn btn-success">اطلب</a>                
                       
                        
                                </div>
                                    </div>
                                    
                                </div>
                                
                            </div>  
                        @endforeach  
                    @endforeach  
                @endif	
			</div>
		</div>
	</div>
            
@endsection