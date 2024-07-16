<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Warna</h1>
		<br>
		<form method="POST" action="<?php echo e(route('colours.update', ['id' => $colour->colourID])); ?>">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('put')); ?>

			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="colourID" value="<?php echo e($colour->colourID); ?>" readonly> </td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="colourName" value="<?php echo e($colour->colourName); ?>"></td>
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
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/colours/edit.blade.php ENDPATH**/ ?>