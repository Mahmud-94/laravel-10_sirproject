@extends('backend.layouts.app')

@section('css')
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<!-- Data table CSS -->
<link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Custom CSS -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

@endsection



@section('content')
<div class="container-fluid">

	<!-- Title -->
	<div class="row heading-bg bg-green">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h5 class="txt-light">Export</h5>
		</div>
		<!-- Breadcrumb -->
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="index.html">Dashboard</a></li>
				<li><a href="#"><span>table</span></a></li>
				<li class="active"><span>Export</span></li>
			</ol>
		</div>
		<!-- /Breadcrumb -->
	</div>
	<!-- /Title -->

	<!-- Row -->
	<div class="row">


		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">New appointment</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form method="post" action="{{route('appointment.store')}}">
										@csrf
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 mb-20">
												<div class="rr-form-input-box rr-form-input-main">
													<input type="text" name="name" placeholder="Name" value="{{old('name')}}">

													@error('name')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 mb-20">
												<div class="rr-form-input-box rr-form-input-main">
													<input type="email" name="email" placeholder="Email" value="{{old('email')}}">

													@error('email')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
												</div>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12 mb-20">
												<div class="rr-form-input-box rr-form-input-main">
													<input type="text" name="phone" placeholder="phone" value="{{old('phone')}}">

													@error('phone')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
												</div>
											</div>
											<div class=" col-md-12 col-12">
												<div class="rr-form-input-box pb-30">
													<select name="doctor" style="">
														<option value="">Choose Doctor</option>
														@foreach ($doctors as $doctor)
														<option value="{{$doctor->id}}">{{$doctor->name}} || {{$doctor->specialist->name}}</option>
														@endforeach
													</select>
													
												</div>
												@error('doctor')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror


											</div>




											<div class="col-xl-12 col-lg-12 col-md-12 mb-20">
												<div class="rr-form-input-box rr-form-input-main">
													<input type="date" name="date" class="form-control" value="{{old('date')}}">


													@error('date')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror
												</div>
											</div>

											<div class="col-12 mb-20">
												<div class="rr-form-textarea-box">
													<textarea name="remarks" placeholder="Your meassage" value="{{old('remarks')}}"></textarea>
												</div>
											</div>

											<button class="rr-btn-1 rr-form-theme-bg" type="submit"><span>Make an appoinment</span></button>

										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- /Row -->
</div>

@endsection


@section('js')
<script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Data table JavaScript -->
<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dist/js/export-table-data.js')}}"></script>
<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>

@endsection