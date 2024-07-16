<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Tambah Produk</h1>
		<br>
		<form method="POST" action="{{ URL::to('products') }}">
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="productID"> </td>
				</tr>
				<tr>
					<td>Kode</td>
					<td><input type="text" name="productCode"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="productName"></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td><select id="colours" name="productColour">
							@if (count($colour) > 0)
								@foreach($colour as $key => $value)
									<option value="{{ $value->colourID }}">{{ $value->colourName }}</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td><select id="kinds" name="productKind">
							@if (count($kind) > 0)
								@foreach($kind as $key => $value)
									<option value="{{ $value->kindID }}">{{ $value->kindName }}</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Bahan</td>
					<td><select id="materials" name="productMaterial">
							@if (count($material) > 0)
								@foreach($material as $key => $value)
									<option value="{{ $value->materialID }}">{{ $value->materialName }}</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Ukuran</td>
					<td><select id="sizes" name="productSize">
							@if (count($size) > 0)
								@foreach($size as $key => $value)
									<option value="{{ $value->sizeID }}">{{ $value->sizeName }} ({{ $value->sizeValue }})</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Fungsi</td>
					<td><select id="uses" name="productUse">
							@if (count($use) > 0)
								@foreach($use as $key => $value)
									<option value="{{ $value->useID }}">{{ $value->useName }}</option>
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok Awal</td>
					<td><input type="text" name="productStock"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../products" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
@endsection