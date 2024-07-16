@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Warna</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
			
		<br>
		<form action="{{ route('colours.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Warna">
			<button type="submit">Search</button>
		</form>
		<br>
						
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Warna</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($colour) > 0)
					@foreach($colour as $key => $value)
					<tr>
						<td>{{ $value->colourID }}</td>
						<td>{{ $value->colourName }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('colours/' . $value->colourID . '/edit') }}">Edit</a>
							<a class="btn btn-small btn-danger" href="colours/delete/{{ $value->colourID }}">Delete</a>
						</td>
					</tr>
					@endforeach
				@else
					<tr>
						<td colspan="3">No results found.</td>
					</tr>
				@endif
			</tbody>
		</table>
			
		<a class="btn btn-small btn-success" href="{{ URL::to('colours/create') }}">Tambah</a>
	</div>
</section>
@endsection