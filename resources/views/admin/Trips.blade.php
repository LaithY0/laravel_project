@extends('admin.Master')

@section('title-content' , 'Trips')

@section('main_content')

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Trips</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form>

							</div><!--//col-->
							<div class="col-auto">

								<select class="form-select w-auto">
									<option selected value="option-1">All</option>
									<option value="option-2">This week</option>
									<option value="option-3">This month</option>
									<option value="option-4">Last 3 months</option>

								</select>
							</div>

						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<div class="d-grid gap-2 d-md-block">
				<a class="btn btn-success btn-lg" role="button" data-toggle="modal" data-target="#exampleModalCenter">Add Trips</a>
			</div>



			<br>


			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">id</th>
											<th class="cell">trip_name</th>
											<th class="cell">price</th>
											<th class="cell">date</th>
											<th class="cell">clients</th>
											<th class="cell">photo</th>
											<th class="cell">days</th>
											<th class="cell">details</th>
											<th class="cell">category_name</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										@foreach ($data as $i)

										<tr>
											<td class="cell">{{$i->id}}</td>
											<td class="cell"><span class="truncate">{{$i->trip_name}}</span></td>
											<td class="cell">{{$i->price}}</td>
											<td class="cell"><span class="note">{{$i->date}}</span></td>
											<td class="cell"><span class="badge bg-success">{{$i->clients}}</span></td>
											<td class="cell">{{$i->photo}} <img src="{{asset('assetsAdmin/images/'.$i->photo)}}" alt="" height="60"></td>
											<td class="cell">{{$i->days}}</td>
											<td class="cell">{{$i->details}}</td>
											<td class="cell">{{$i->category->category_name }}</td>
											<td class="cell">
												<a class="btn btn-danger btn-sm" role="button">Delete</a>
												<a class="btn btn-success btn-sm" role="button">Update</a>
											</td>
										</tr>
										@endforeach


									</tbody>
								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->

				</div><!--//tab-pane-->




				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="" method="Post">

									<label for="">trip_name</label>
									<input type="text" name=''>
									<br><br>
									<label for="">price</label>
									<input type="number" name=''>
									<br><br>
									<label for="">date</label>
									<input type="date" name=''>
									<br><br>
									<label for="">clients</label>
									<input type="number" name=''>
									<br><br>
									<label for="">photo</label>
									<input type="file" name=''>
									<br><br>
									<label for="">days</label>
									<input type="number" name=''>
									<br><br>
									<label for="">details</label>
									<input type="text" name=''>
									<br><br>
									<select name="cars" id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="mercedes">Mercedes</option>
										<option value="audi">Audi</option>
									</select>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>



			</div><!--//tab-content-->



		</div><!--//container-fluid-->
	</div><!--//app-content-->


</div><!--//app-wrapper-->


@endsection