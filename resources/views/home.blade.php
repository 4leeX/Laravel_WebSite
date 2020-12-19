@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p class="lead">Morbi nec vulputate lectus. Etiam ultricies, purus sit amet aliquam volutpat, tellus libero pharetra diam, eu porta massa arcu vitae ligula. Curabitur ac nisl eu est hendrerit scelerisque sit amet sit amet augue. Maecenas ligula lacus, sodales eget ligula vel, blandit cursus nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum scelerisque metus maximus dictum. Donec suscipit dapibus tellus nec blandit. Duis non interdum tortor. Nulla facilisi. Nulla congue felis risus, nec gravida magna porta et. Nullam sodales tristique elit, non pellentesque ligula mattis sed. Aenean euismod aliquam felis, non sodales nunc fringilla non.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is append to the Sidebar</p>
@endsection