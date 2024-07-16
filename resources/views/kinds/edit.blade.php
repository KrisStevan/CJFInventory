<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Jenis</h1>
		<br>
		<form method="POST" action="{{ route('kinds.update', ['id' => $kind->kindID]) }}">
			@method('PUT')
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="kindID" value="{{ $kind->kindID }}" readonly> </td>
				</tr>
				<tr>
					<td>Nama Jenis</td>
					<td><input type="text" name="kindName" value="{{ $kind->kindName }}"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stock" value="{{ $kind->stock }}"></td>
				</tr>
				<tr>
					<td>Jumlah yang Dipesan</td>
					<td><input type="text" name="ordered" value="{{ $kind->ordered }}"></td>
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