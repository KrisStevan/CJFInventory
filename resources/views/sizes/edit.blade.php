<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Ukuran</h1>
		<br>
		<form method="POST" action="{{ route('sizes.update', ['id' => $size->sizeID]) }}">
			@method('PUT')
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="sizeID" value="{{ $size->sizeID }}" readonly> </td>
				</tr>
				<tr>
					<td>Nama Ukuran</td>
					<td><input type="text" name="sizeName" value="{{ $size->sizeName }}"></td>
				</tr>
				<tr>
					<td>Besaran Ukuran</td>
					<td><input type="text" name="sizeValue" value="{{ $size->sizeValue }}"></td>
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