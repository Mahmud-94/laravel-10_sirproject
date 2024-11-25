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
						<h6 class="panel-title txt-dark">New Doctor</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<div class="form-wrap">
									<form class="form-horizontal" method="post" action="{{route('doctor.store')}}" enctype="multipart/form-data">
										@csrf

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Doctor Name</label>
											<div class="col-sm-9">
												<div class="input-group">
													<input type="text" class="form-control" name="name" value="{{old('name')}}" id="exampleInputuname_4" placeholder="Username">
													@error('name')
													<div class="alert alert-danger">{{$massage}}</div>
													@enderror 

													<div class="input-group-addon"><i class="icon-user"></i></div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Specialist</label>
											<div class="col-sm-9">
												
													<select name="specialist" id="" class="form-control">

														<option value="">Select one</option>
														@foreach ($specialists as $specialist)


														<option value="{{$specialist->id}}" @selected(old('specialist')==$specialist->id)>{{$specialist->name}}</option>
														@endforeach
													</select>

													<div class="input-group-addon"><i class="icon-user"></i></div>
											
											</div>
										</div>

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Email</label>
											<div class="col-sm-9">
												<div class="input-group">
													<input type="text" class="form-control" name="email" value="{{old('email')}}" id="exampleInputuname_4" placeholder="Email">
													<div class="input-group-addon"><i class="icon-user"></i></div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Password</label>
											<div class="col-sm-9">
												<div class="input-group">
													<input type="text" class="form-control" name="password" id="exampleInputuname_4" placeholder="password">
													<div class="input-group-addon"><i class="icon-user"></i></div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Confirm password</label>
											<div class="col-sm-9">
												<div class="input-group">
													<input type="text" class="form-control" name="password_confirmation" id="exampleInputuname_4" placeholder="Confirm password">
													<div class="input-group-addon"><i class="icon-user"></i></div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="exampleInputuname_4" class="col-sm-3 control-label">Photo</label>
											<div class="col-sm-9">
												<div class="input-group">
													<input type="file" class="form-control" name="photo" id="exampleInputuname_4">
													<div class="input-group-addon"><i class="icon-user"></i></div>
												</div>
											</div>
										</div>



										<div class="form-group">
													<label class="control-label col-sm-3">Checkbox</label>
													<div class="form-control">
														<input id="radio1" name="status" value="active" @if (old('status')=='active') checked
														
														@endif type="checkbox">
														<label for="radio1">
															Active
														</label>
													
													
														<input id="radio2" name="status" value="inactive" @if (old('status')=='inactive') checked
														
														@endif type="checkbox">
														<label for="radio2">
															Inactive
														</label>
													</div>
														
												</div>

										<div class="form-group mb-0">
											<div class="col-sm-offset-3 col-sm-9">
												<button type="submit" class="btn btn-info ">Submit</button>
											</div>
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