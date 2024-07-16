@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Produk</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('products.search') }}" method="GET">
			<input type="text" name="search" placeholder="Cari Produk" value="{{ old('search') }}">
			<button type="submit">Search</button>
		</form>
		<br>
			
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Kode Produk</td>
					<td>Nama Produk</td>
					<td>Jenis</td>
					<td>Bahan</td>
					<td>Warna</td>
					<td>Penggunaan</td>
					<td>Ukuran</td>
					<td>Stok</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($product) > 0)
					@foreach($product as $key => $value)
					<tr>
						<td>{{ $value->productCode }}</td>
						<td>{{ $value->productName }}</td>
						<td>{{ $value->kindName }}</td>
						<td>{{ $value->materialName }}</td>
						<td>{{ $value->colourName }}</td>
						<td>{{ $value->useName }}</td>
						<td>{{ $value->sizeName }}</td>
						<td>{{ $value->productStock }}</td>
						<td>
							<a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->productID . '/edit') }}">Edit</a>
							<a class="btn btn-small btn-danger" href="products/delete/{{ $value->productID }}">Delete</a>
						</td>
					</tr>
					@endforeach
				@else
					<tr>
						<td colspan="9">No results found.</td>
					</tr>
				@endif
			</tbody>
		</table>
		
		<a class="btn btn-small btn-success" href="{{ URL::to('products/create') }}">Tambah</a>
	</div>
</section>
@endsection