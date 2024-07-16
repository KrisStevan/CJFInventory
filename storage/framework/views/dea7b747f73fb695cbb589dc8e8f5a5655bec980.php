
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Jenis</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('kinds.search')); ?>" method="GET">
			<input type="text" name="search" placeholder="Cari Jenis">
			<button type="submit">Search</button>
		</form>
		<br>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Jenis</td>
					<td>Stok</td>
					<td>Jumlah Dipesan</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($kind) > 0): ?>
					<?php $__currentLoopData = $kind; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->kindID); ?></td>
						<td><?php echo e($value->kindName); ?></td>
						<td><?php echo e($value->stock); ?></td>
						<td><?php echo e($value->ordered); ?></td>
						<td>
							<a class="btn btn-small btn-info" href="<?php echo e(URL::to('kinds/' . $value->kindID . '/edit')); ?>">Edit</a>
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
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('kinds/create')); ?>">Tambah</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/kinds/index.blade.php ENDPATH**/ ?>