<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Tambah Jenis</h1>
		<br>
		<form method="POST" action="<?php echo e(URL::to('kinds')); ?>">
			<?php echo csrf_field(); ?>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="kindID"> </td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="kindName"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stock"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../kinds" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/kinds/create.blade.php ENDPATH**/ ?>