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


			<div class="row g-4 mb-4">

				<div class="col-6">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Last 6 Users</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col"> First name </th>
										<th scope="col"> Last name </th>
										<th scope="col"> email </th>
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
									<tr>
										<td>{{ $user->Fname }}</td>
										<td>{{ $user->Lname }}</td>
										<td>{{ $user->email }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div><!--//app-card-->
					</div><!--//col-->
				</div>



				<div class="col-6 ">
					<div class="app-card app-card-stat shadow-sm h-100">
						<div class="app-card-body p-3 p-lg-4">
							<h4 class="stats-type mb-1">Last 6 Trips</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col"> Trip name </th>
										<th scope="col"> Price </th>
										<th scope="col"> Date </th>
										<th scope="col"> Clients </th>
										<th scope="col"> Days </th>
									</tr>
								</thead>
								<tbody>
									@foreach ($trips as $trip)
									<tr>
										<td>{{ $trip->trip_name }}</td>
										<td>{{ $trip->price	 }}</td>
										<td>{{ $trip->date }}</td>
										<td>{{ $trip->clients }}</td>
										<td>{{ $trip->days	 }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div><!--//app-card-->
					</div><!--//col-->



				</div>



			</div><!--//container-fluid-->
		</div><!--//app-content-->


	</div><!--//app-wrapper-->


	@endsection