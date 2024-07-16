<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Transaksi Baru</h1>
		<br>
		<form method="POST" action="<?php echo e(URL::to('transactions')); ?>">
			<?php echo csrf_field(); ?>
			<table width="100%">
				<tr>
					<td width="20%">ID</td>
					<td width="80%"><input type="text" name="trxID"> </td>
				</tr>
				<tr>
					<td>Kode Transaksi</td>
					<td><input type="text" name="trxCode"></td>
				</tr>
				<tr>
					<td>Produk</td>
					<td><select id="products" name="productID">
							<?php if(count($product) > 0): ?>
								<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->productID); ?>"><?php echo e($value->productName); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tanggal Transaksi (YYYY-MM-DD)</td>
					<td><input type="text" name="trxDate"></td>
				</tr>
				<tr>
					<td>Jumlah Pesanan</td>
					<td><input type="text" name="orderQty"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../transactions" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/transactions/create.blade.php ENDPATH**/ ?>