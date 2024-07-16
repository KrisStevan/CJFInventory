
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Bahan</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('materials.search')); ?>" method="GET">
			<input type="text" name="search" placeholder="Cari Bahan">
			<button type="submit">Search</button>
		</form>
		<br>
				
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Bahan</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($material) > 0): ?>
					<?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->materialID); ?></td>
						<td><?php echo e($value->materialName); ?></td>
						<td>
							<a class="btn btn-small btn-info" href="<?php echo e(URL::to('materials/' . $value->materialID . '/edit')); ?>">Edit</a>
							<a class="btn btn-small btn-danger" href="materials/delete/<?php echo e($value->materialID); ?>">Delete</a>
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
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('materials/create')); ?>">Tambah</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/materials/index.blade.php ENDPATH**/ ?>