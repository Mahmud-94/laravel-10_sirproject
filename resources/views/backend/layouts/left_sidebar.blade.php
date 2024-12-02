<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li>
			<a class="active" href="{{url('/admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="dashboard_dr" class="collapse collapse-level-1">
				<li>
					<a href="index.html">Analytical</a>
				</li>
				<li>
					<a class="active" href="index2.html">Demographic</a>
				</li>
				<li>
					<a href="index3.html">Project</a>
				</li>
				<li>
					<a href="index4.html">Classic</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Specialist<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="ecom_dr" class="collapse collapse-level-1">
				<li>
					<a href="{{route('specialist.index')}}">All Specialist</a>
				</li>
				<li>
					<a href="{{route('specialist.create')}}">New specialist</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#drlist"><i class="icon-basket-loaded mr-10"></i>Doctors<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="drlist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('doctor.index')}}">All Doctors</a>
				</li>
				<li>
					<a href="{{route('doctor.create')}}">New Doctors</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#aplist"><i class="icon-basket-loaded mr-10"></i>appointments<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="aplist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('appointment.index')}}">All appointments</a>
				</li>
				<li>
					<a href="{{route('appointment.create')}}">New appointments</a>
				</li>

			</ul>
		</li>

		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#dptlist"><i class="icon-basket-loaded mr-10"></i>Department<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
			<ul id="dptlist" class="collapse collapse-level-1">
				<li>
					<a href="{{route('department.index')}}">All Department</a>
				</li>
				<li>
					<a href="{{route('department.create')}}">New Department</a>
				</li>

			</ul>
		</li>

	</ul>
</div>