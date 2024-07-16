<?php
	use Illuminate\Support\Facades\Form;
?>


<?php $__env->startSection('content'); ?>

<section class="products-area product-page section-gap">
	<div class="container">
		<h1>Edit Produk</h1>
		<br>
		<form method="POST" action="<?php echo e(route('products.update', ['id' => $product->productID])); ?>">
			<?php echo method_field('PUT'); ?>
			<?php echo csrf_field(); ?>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="productID" value="<?php echo e($product->productID); ?>" readonly> </td>
				</tr>
				<tr>
					<td>Kode</td>
					<td><input type="text" name="productCode" value="<?php echo e($product->productCode); ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="productName" value="<?php echo e($product->productName); ?>"></td>
				</tr>
				<tr>
					<td>Warna</td>
					<td><select id="colours" name="productColour">
							<?php if(count($colour) > 0): ?>
								<?php $__currentLoopData = $colour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($value->colourID == $product->productColour): ?>
										<option value="<?php echo e($value->colourID); ?>" selected><?php echo e($value->colourName); ?></option>
									<?php else: ?>
										<option value="<?php echo e($value->colourID); ?>"><?php echo e($value->colourName); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td>
						<select id="kinds" name="productKind">
							<?php if(count($kind) > 0): ?>
								<?php $__currentLoopData = $kind; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($value->kindID == $product->productKind): ?>
										<option value="<?php echo e($value->kindID); ?>" selected><?php echo e($value->kindName); ?></option>
									<?php else: ?>
										<option value="<?php echo e($value->kindID); ?>"><?php echo e($value->kindName); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Bahan</td>
					<td>
						<select id="materials" name="productMaterial">
							<?php if(count($material) > 0): ?>
								<?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($value->materialID == $product->productMaterial): ?>
										<option value="<?php echo e($value->materialID); ?>" selected><?php echo e($value->materialName); ?></option>
									<?php else: ?>
										<option value="<?php echo e($value->materialID); ?>"><?php echo e($value->materialName); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ukuran</td>
					<td> 
						<select id="sizes" name="productSize">
							<?php if(count($size) > 0): ?>
								<?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($value->sizeID == $product->productSize): ?>
										<option value="<?php echo e($value->sizeID); ?>" selected><?php echo e($value->sizeName); ?> (<?php echo e($value->sizeValue); ?>)</option>
									<?php else: ?>
										<option value="<?php echo e($value->sizeID); ?>"><?php echo e($value->sizeName); ?> (<?php echo e($value->sizeValue); ?>)</option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fungsi</td>
					<td> 
						<select id="uses" name="productUse">
							<?php if(count($use) > 0): ?>
								<?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($value->useID == $product->productUse): ?>
										<option value="<?php echo e($value->useID); ?>" selected><?php echo e($value->useName); ?></option>
									<?php else: ?>
										<option value="<?php echo e($value->useID); ?>"><?php echo e($value->useName); ?></option>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok Awal</td>
					<td><input type="text" name="productStock" value="<?php echo e($product->productStock); ?>"></td>
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
<?php echo $__env->make('../layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory\resources\views/products/edit.blade.php ENDPATH**/ ?>