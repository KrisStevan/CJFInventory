<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Produk</h1>
		<br>
		<form method="POST" action="{{ route('products.update', ['id' => $product->productID]) }}">
			@method('PUT')
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="productID" value="{{ $product->productID }}" readonly> </td>
				</tr>
				<tr>
					<td>Kode</td>
					<td><input type="text" name="productCode" value="{{ $product->productCode }}" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="productName" value="{{ $product->productName }}"></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td><select id="colours" name="productColour">
							@if (count($colour) > 0)
								@foreach($colour as $key => $value)
									@if ($value->colourID == $product->productColour)
										<option value="{{ $value->colourID }}" selected>{{ $value->colourName }}</option>
									@else
										<option value="{{ $value->colourID }}">{{ $value->colourName }}</option>
									@endif
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td>
						<select id="kinds" name="productKind">
							@if (count($kind) > 0)
								@foreach($kind as $key => $value)
									@if ($value->kindID == $product->productKind)
										<option value="{{ $value->kindID }}" selected>{{ $value->kindName }}</option>
									@else
										<option value="{{ $value->kindID }}">{{ $value->kindName }}</option>
									@endif
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Bahan</td>
					<td>
						<select id="materials" name="productMaterial">
							@if (count($material) > 0)
								@foreach($material as $key => $value)
									@if ($value->materialID == $product->productMaterial)
										<option value="{{ $value->materialID }}" selected>{{ $value->materialName }}</option>
									@else
										<option value="{{ $value->materialID }}">{{ $value->materialName }}</option>
									@endif
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Ukuran</td>
					<td> 
						<select id="sizes" name="productSize">
							@if (count($size) > 0)
								@foreach($size as $key => $value)
									@if ($value->sizeID == $product->productSize)
										<option value="{{ $value->sizeID }}" selected>{{ $value->sizeName }} ({{ $value->sizeValue }})</option>
									@else
										<option value="{{ $value->sizeID }}">{{ $value->sizeName }} ({{ $value->sizeValue }})</option>
									@endif
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Fungsi</td>
					<td> 
						<select id="uses" name="productUse">
							@if (count($use) > 0)
								@foreach($use as $key => $value)
									@if ($value->useID == $product->productUse)
										<option value="{{ $value->useID }}" selected>{{ $value->useName }}</option>
									@else
										<option value="{{ $value->useID }}">{{ $value->useName }}</option>
									@endif
								@endforeach
							@endif
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok Awal</td>
					<td><input type="text" name="productStock" value="{{ $product->productStock }}"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
@endsection