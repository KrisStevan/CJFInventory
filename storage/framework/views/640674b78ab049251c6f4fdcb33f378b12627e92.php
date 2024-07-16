
<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Transaksi</h1>
		<?php if(Session::has('message')): ?>
			<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
		<?php endif; ?>
		
		<br>
		<form action="<?php echo e(route('transactions.search')); ?>" method="GET">
			Tanggal Transaksi : 
			<input type="text" name="searchAwal" placeholder="Tanggal Transaksi Awal"> s/d
			<input type="text" name="searchAkhir" placeholder="Tanggal Transaksi Akhir">
			<button type="submit">Search</button>
		</form>
		<br>
					
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Kode Transaksi</td>
					<td>Produk</td>
					<td>Tanggal Transaksi</td>
					<td>Jumlah Pesanan</td>
				</tr>
			</thead>
			<tbody>
				<?php if(count($transaction) > 0): ?>
					<?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($value->trxCode); ?></td>
						<td><?php echo e($value->productName); ?></td>
						<td><?php echo e($value->trxDate); ?></td>
						<td><?php echo e($value->orderQty); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
					<tr>
						<td colspan="3">No results found.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
		<a class="btn btn-small btn-success" href="<?php echo e(URL::to('transactions/create')); ?>">Transaksi Baru</a>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/transactions/index.blade.php ENDPATH**/ ?>