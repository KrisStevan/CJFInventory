<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Tambah Produk</h1>
		<br>
		<form method="POST" action="<?php echo e(URL::to('products')); ?>">
			<?php echo csrf_field(); ?>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="productID"> </td>
				</tr>
				<tr>
					<td>Kode</td>
					<td><input type="text" name="productCode"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="productName"></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td><select id="colours" name="productColour">
							<?php if(count($colour) > 0): ?>
								<?php $__currentLoopData = $colour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->colourID); ?>"><?php echo e($value->colourName); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td><select id="kinds" name="productKind">
							<?php if(count($kind) > 0): ?>
								<?php $__currentLoopData = $kind; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->kindID); ?>"><?php echo e($value->kindName); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Bahan</td>
					<td><select id="materials" name="productMaterial">
							<?php if(count($material) > 0): ?>
								<?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->materialID); ?>"><?php echo e($value->materialName); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ukuran</td>
					<td><select id="sizes" name="productSize">
							<?php if(count($size) > 0): ?>
								<?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->sizeID); ?>"><?php echo e($value->sizeName); ?> (<?php echo e($value->sizeValue); ?>)</option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fungsi</td>
					<td><select id="uses" name="productUse">
							<?php if(count($use) > 0): ?>
								<?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($value->useID); ?>"><?php echo e($value->useName); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok Awal</td>
					<td><input type="text" name="productStock"></td>
				</tr>
				<tr>
					<td colspan="3">
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button type="submit" class="btn btn-success">Submit</button>
						<a href="../products" class="btn btn-danger">Back</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/products/create.blade.php ENDPATH**/ ?>