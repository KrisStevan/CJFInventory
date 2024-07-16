@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Ukuran</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('sizes.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Ukuran">
			<button type="submit">Search</button>
		</form>
		<br>	
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nama Satuan</td>
					<td>Ukuran</td>
				</tr>
			</thead>
			<tbody>
				@if (count($size) > 0)
					@foreach($size as $key => $value)
					<tr>
						<td>{{ $value->sizeID }}</td>
						<td>{{ $value->sizeName }}</td>
						<td>{{ $value->sizeValue }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('sizes/' . $value->sizeID . '/edit') }}">Edit</a>
							<a class="btn btn-small btn-danger" href="sizes/delete/{{ $value->sizeID }}">Delete</a>
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
		
		<a class="btn btn-small btn-success" href="{{ URL::to('sizes/create') }}">Tambah</a>
	</div>
</section>
@endsection