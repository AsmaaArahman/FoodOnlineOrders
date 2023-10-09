@extends('layoutbase')

@section('content')
    
		
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="height:80px;background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font">كل باقتنا</h1>	
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
					<h2 class="cursive-font primary-color">الباقات </h2>
					<p></p>			
                </div>
			</div>
			<div class="row">
                @if (count($qutes) > 0)
                    @foreach ($qutes as $qute)
                      <div class="col-lg-4 col-md-4 col-sm-6">
					    <a href="{{Request::url()}}/{{$qute->id}}" class="fh5co-card-item">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="storage/images/{{$qute->imagesq}}" style="width: 100%;height: 100%;" alt="Image" class="img-responsive">
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
		</div>    
	</div>    
@endsection