
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Ukuran</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('sizes.search')); ?>" method="GET">
			<input type="text" name="search" placeholder="Cari Ukuran">
			<button type="submit">Search</button>
		</form>
		<br>	
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nama Satuan</td>
					<td>Ukuran</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($size) > 0): ?>
					<?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->sizeID); ?></td>
						<td><?php echo e($value->sizeName); ?></td>
						<td><?php echo e($value->sizeValue); ?></td>
						<td>
							<a class="btn btn-small btn-info" href="<?php echo e(URL::to('sizes/' . $value->sizeID . '/edit')); ?>">Edit</a>
							<a class="btn btn-small btn-danger" href="sizes/delete/<?php echo e($value->sizeID); ?>">Delete</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<tr>
						<td colspan="3">No results found.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('sizes/create')); ?>">Tambah</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/sizes/index.blade.php ENDPATH**/ ?>