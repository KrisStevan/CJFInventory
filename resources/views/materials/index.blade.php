@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Bahan</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('materials.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Bahan">
			<button type="submit">Search</button>
		</form>
		<br>
				
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Bahan</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($material) > 0)
					@foreach($material as $key => $value)
					<tr>
						<td>{{ $value->materialID }}</td>
						<td>{{ $value->materialName }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('materials/' . $value->materialID . '/edit') }}">Edit</a>
							<a class="btn btn-small btn-danger" href="materials/delete/{{ $value->materialID }}">Delete</a>
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
		
		<a class="btn btn-small btn-success" href="{{ URL::to('materials/create') }}">Tambah</a>
	</div>
</section>
@endsection