@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Transaksi</h1>
		@if (Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif
		
		<br>
		<form action="{{ route('transactions.search') }}" method="GET">
			Tanggal Transaksi : 
			<input type="text" name="searchAwal" placeholder="Tanggal Transaksi Awal"> s/d
			<input type="text" name="searchAkhir" placeholder="Tanggal Transaksi Akhir">
			<button type="submit">Search</button>
		</form>
		<br>
					
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Kode Transaksi</td>
					<td>Produk</td>
					<td>Tanggal Transaksi</td>
					<td>Jumlah Pesanan</td>
				</tr>
			</thead>
			<tbody>
				@if (count($transaction) > 0)
					@foreach($transaction as $key => $value)
					<tr>
						<td>{{ $value->trxCode }}</td>
						<td>{{ $value->productName }}</td>
						<td>{{ $value->trxDate }}</td>
						<td>{{ $value->orderQty }}</td>
					</tr>
					@endforeach
				@else
					<tr>
						<td colspan="3">No results found.</td>
					</tr>
				@endif
			</tbody>
		</table>
		
		<a class="btn btn-small btn-success" href="{{ URL::to('transactions/create') }}">Transaksi Baru</a>
	</div>
</section>
@endsection