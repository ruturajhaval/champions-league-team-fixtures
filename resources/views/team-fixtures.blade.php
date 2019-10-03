<!DOCTYPE html>
<html>
<head>
    <title>Champions League</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/dist/css/bootstrap.min.css')}}">
</head>
<body style="background-color: #012060;" class="py-5">
    <div class="container-fluid p-3">
        <div class="row">
            <img src="{{asset('/images/uefa-logo.png')}}" class="mx-auto" width="200">
        </div>
        <div class="row pt-5" style="color:white">
            @foreach ($groupsFirstHalf as $key => $group)
	            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	            	<h3 class="pb-3 pl-5 mt-3"><span style="background-color: aqua;border-bottom: 5px solid magenta;" class="px-3">{{$key}}</span></h3>
			        <div class="row" style="color:white">
		                @foreach ($group as $user)
				            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1 px-3">
				            	<div class="row">
						            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						                <img src='{{ asset("/images/$user[tLogos]") }}' class="mr-3 float-left" width="30">
				            		</div>
				            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tName'] }}
				            		</div>
				            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tCountry'] }}
				            		</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tDomesticVictory'] }}
				            		</div>
				            	</div>
			                </div>
		                @endforeach
			        </div>
	            </div>
            @endforeach
        </div>
        <div class="row pt-5" style="color:white">
            @foreach ($groupsSecondHalf as $key => $group)
	            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	            	<h3 class="pb-3 pl-5 mt-3"><span style="background-color: aqua;border-bottom: 5px solid magenta;" class="px-3">{{$key}}</span></h3>
			        <div class="row text-right" style="color:white">
		                @foreach ($group as $user)
				            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-1 px-3">
				            	<div class="row">
						            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						                <img src='{{ asset("/images/$user[tLogos]") }}' class="mr-3 float-left" width="30">
				            		</div>
				            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tName'] }}
				            		</div>
				            		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tCountry'] }}
				            		</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
					                    {{ $user['tDomesticVictory'] }}
				            		</div>
				            	</div>
			                </div>
		                @endforeach
			        </div>
	            </div>
            @endforeach
        </div>
    </div>
</body>
</html>