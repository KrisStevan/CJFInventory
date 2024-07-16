<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Jenis</h1>
		<br>
		<form method="POST" action="<?php echo e(route('kinds.update', ['id' => $kind->kindID])); ?>">
			<?php echo method_field('PUT'); ?>
			<?php echo csrf_field(); ?>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="kindID" value="<?php echo e($kind->kindID); ?>" readonly> </td>
				</tr>
				<tr>
					<td>Nama Jenis</td>
					<td><input type="text" name="kindName" value="<?php echo e($kind->kindName); ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stock" value="<?php echo e($kind->stock); ?>"></td>
				</tr>
				<tr>
					<td>Jumlah yang Dipesan</td>
					<td><input type="text" name="ordered" value="<?php echo e($kind->ordered); ?>"></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/kinds/edit.blade.php ENDPATH**/ ?>