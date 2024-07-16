<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Tambah Ukuran</h1>
		<br>
		<form method="POST" action="<?php echo e(URL::to('sizes')); ?>">
			<?php echo csrf_field(); ?>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="sizeID"> </td>
				</tr>
				<tr>
					<td>Nama Ukuran</td>
					<td><input type="text" name="sizeName"></td>
				</tr>
				<tr>
					<td>Besaran Ukuran</td>
					<td><input type="text" name="sizeValue"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../sizes" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/sizes/create.blade.php ENDPATH**/ ?>