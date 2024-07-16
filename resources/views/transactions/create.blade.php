<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Transaksi Baru</h1>
		<br>
		<form method="POST" action="{{ URL::to('transactions') }}">
			@csrf
			<table width="100%">
				<tr>
					<td width="20%">ID</td>
					<td width="80%"><input type="text" name="trxID"> </td>
				</tr>
				<tr>
					<td>Kode Transaksi</td>
					<td><input type="text" name="trxCode"></td>
				</tr>
				<tr>
					<td>Produk</td>
					<td><select id="products" name="productID">
							@if (count($product) > 0)
								@foreach($product as $key => $value)
									<option value="{{ $value->productID }}">{{ $value->productName }}</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Tanggal Transaksi (YYYY-MM-DD)</td>
					<td><input type="text" name="trxDate"></td>
				</tr>
				<tr>
					<td>Jumlah Pesanan</td>
					<td><input type="text" name="orderQty"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../transactions" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
@endsection