
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Fungsi</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('uses.search')); ?>" method="GET">
			<input type="text" name="search" placeholder="Cari Fungsi">
			<button type="submit">Search</button>
		</form>
		<br>	
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Fungsi</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($use) > 0): ?>
					<?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->useID); ?></td>
						<td><?php echo e($value->useName); ?></td>
						<td>
							<a class="btn btn-small btn-info" href="<?php echo e(URL::to('uses/' . $value->useID . '/edit')); ?>">Edit</a>
							<a class="btn btn-small btn-danger" href="uses/delete/<?php echo e($value->useID); ?>">Delete</a>
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
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('uses/create')); ?>">Tambah</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/uses/index.blade.php ENDPATH**/ ?>