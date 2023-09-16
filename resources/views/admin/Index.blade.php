@extends('admin.Master')

@section('title-content' , 'Index')

@section('main_content')

<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title">Overview</h1>


				<div class="row g-4 mb-4">
					<div class="col-6 col-lg-4">
						<div class="app-card app-card-stat shadow-sm h-100">
							<div class="app-card-body p-3 p-lg-4">
								<h4 class="stats-type mb-1">Total Sales</h4>
								<div class="stats-figure"> ${{$data}}</div>
								
							</div><!--//app-card-body-->
							<a class="app-card-link-mask" href="#"></a>
						</div><!--//app-card-->
					</div><!--//col-->

					<div class="col-6 col-lg-4">
						<div class="app-card app-card-stat shadow-sm h-100">
							<div class="app-card-body p-3 p-lg-4">
								<h4 class="stats-type mb-1">Total Reservation</h4>
								<div class="stats-figure">{{$data2}}</div>
								
							</div><!--//app-card-body-->
							<a class="app-card-link-mask" href="#"></a>
						</div><!--//app-card-->
					</div><!--//col-->
					<div class="col-6 col-lg-4">
						<div class="app-card app-card-stat shadow-sm h-100">
							<div class="app-card-body p-3 p-lg-4">
								<h4 class="stats-type mb-1">Total Clients</h4>
								<div class="stats-figure">{{$data3}}</div>
								<!-- <div class="stats-meta">
									Open</div> -->
							</div><!--//app-card-body-->
							<a class="app-card-link-mask" href="#"></a>
						</div><!--//app-card-->
					</div><!--//col-->
				
				</div><!--//row-->





				
			</div><!--//container-fluid-->
		</div><!--//app-content-->

		
	</div><!--//app-wrapper-->

    
@endsection