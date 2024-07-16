<?php
	use Illuminate\Support\Facades\Form;
?>

@extends('../layouts.frontend')
@section('content')

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Fungsi</h1>
		<br>
		<form method="POST" action="{{ route('uses.update', ['id' => $use->useID]) }}">
			@method('PUT')
			@csrf
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="useID" value="{{ $use->useID }}" readonly> </td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="useName" value="{{ $use->useName }}"></td>
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