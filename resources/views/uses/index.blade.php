@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Fungsi</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('uses.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Fungsi">
			<button type="submit">Search</button>
		</form>
		<br>	
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Fungsi</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($use) > 0)
					@foreach($use as $key => $value)
					<tr>
						<td>{{ $value->useID }}</td>
						<td>{{ $value->useName }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('uses/' . $value->useID . '/edit') }}">Edit</a>
							<a class="btn btn-small btn-danger" href="uses/delete/{{ $value->useID }}">Delete</a>
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
		
		<a class="btn btn-small btn-success" href="{{ URL::to('uses/create') }}">Tambah</a>
	</div>
</section>
@endsection