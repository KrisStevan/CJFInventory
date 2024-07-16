
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Semua Produk</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('products.search')); ?>" method="GET">
			<input type="text" name="search" placeholder="Cari Produk" value="<?php echo e(old('search')); ?>">
			<button type="submit">Search</button>
		</form>
		<br>
			
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Kode Produk</td>
					<td>Nama Produk</td>
					<td>Jenis</td>
					<td>Bahan</td>
					<td>Warna</td>
					<td>Penggunaan</td>
					<td>Ukuran</td>
					<td>Stok</td>
					<td>Keterangan</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($product) > 0): ?>
					<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->productCode); ?></td>
						<td><?php echo e($value->productName); ?></td>
						<td><?php echo e($value->kindName); ?></td>
						<td><?php echo e($value->materialName); ?></td>
						<td><?php echo e($value->colourName); ?></td>
						<td><?php echo e($value->useName); ?></td>
						<td><?php echo e($value->sizeName); ?></td>
						<td><?php echo e($value->productStock); ?></td>
						<td>
							<a class="btn btn-small btn-info" href="<?php echo e(URL::to('products/' . $value->productID . '/edit')); ?>">Edit</a>
							<a class="btn btn-small btn-danger" href="products/delete/<?php echo e($value->productID); ?>">Delete</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<tr>
						<td colspan="9">No results found.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('products/create')); ?>">Tambah</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/products/index.blade.php ENDPATH**/ ?>