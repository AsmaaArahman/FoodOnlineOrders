@extends('layoutbase')

@section('content')

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="height: 75px;background-image: url({{asset('css/images/img_bg_1.jpg')}})" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box " data-animate-effect="fadeInUp">
							<h1 class="cursive-font">طبلية</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
@include('message')
	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">الباقات </h2>
					<p></p>			
                </div>
			</div>
			<div class="row">
                @if (count($qutes) > 0)
                    @foreach ($qutes as $qute)
                      <div class="col-lg-4 col-md-4 col-sm-6">
					    <a href="qutesv/{{$qute->id}}" class="fh5co-card-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="storage/images/{{$qute->imagesq}}"style="width: 100%;height: 100%;" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>{{$qute->name}}</h2>
                                <p>{{$qute->descqute}}</p>
                                <?php $pricea = array(); 
                                    $i =0;
                                ?>
                                @foreach ($qute->qutedetail as $qutedetails)
                                    <?php $pricea[$i] =  $qutedetails->pivot->priced ;?>
                                @endforeach
                                <p><span class="price cursive-font">{{array_sum($pricea)}} ج</span></p>
                            </div>
                        </a>
                    </div>  
                    @endforeach  
                @endif	
			</div>
            
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">الوجبات </h2>
					<p></p>			
                </div>
			</div>
            <div class="row">
                @if (count($meals) > 0)
                    @foreach ($meals as $meal)
                      <div class="col-lg-4 col-md-4 col-sm-6">
					    <a href="mealsv/{{$meal->id}}" class="fh5co-card-item ">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="storage/images/default.png"style="width: 100%;height: 100%;" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>{{$meal->name}}</h2>
                            </div>
                        </a>
                    </div>  
                    @endforeach  
                @endif	
			</div>
            
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font">الخدمات</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h3>اطعمة لذيذة</h3>
						<p> اطعمة  بيتية  لذيذة  ونظيفة </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3>اشكال رائعة</h3>
						<p>تقديم الطعام فى اشكال رائعة</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3>التوصيل</h3>
						<p>خدمة التوصيل لحد عندك فى اسرع وقت.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">المعلومات</h2>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">التقيم</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">انواع الاطعمة</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">الاعضاء</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="2019" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">الافتتتاح</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	


@endsection

