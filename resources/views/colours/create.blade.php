<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Tambah Warna</h1>
		<br>
		<form method="POST" action="{{ URL::to('colours') }}">
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="colourID"> </td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="colourName"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../colours" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
@endsection