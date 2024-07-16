@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Jenis</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('kinds.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Jenis">
			<button type="submit">Search</button>
		</form>
		<br>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Jenis</td>
					<td>Stok</td>
					<td>Jumlah Dipesan</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($kind) > 0)
					@foreach($kind as $key => $value)
					<tr>
						<td>{{ $value->kindID }}</td>
						<td>{{ $value->kindName }}</td>
						<td>{{ $value->stock }}</td>
						<td>{{ $value->ordered }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('kinds/' . $value->kindID . '/edit') }}">Edit</a>
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
		
		<a class="btn btn-small btn-success" href="{{ URL::to('kinds/create') }}">Tambah</a>
	</div>
</section>
@endsection