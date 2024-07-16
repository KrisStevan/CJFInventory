<!DOCTYPE html>
<html>
	<head>
		<title>Testing Inventory</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo e(URL::asset('user/main.css')); ?>">
		<?php echo $__env->yieldContent('css'); ?>
	</head>

	<body>
		<header id="header" id="home">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a class="navbar-brand">Testing</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="<?php echo e(URL::to('colours')); ?>">Warna</a></li>
						<li><a href="<?php echo e(URL::to('kinds')); ?>">Jenis</a></li>
						<li><a href="<?php echo e(URL::to('materials')); ?>">Bahan</a></li>
						<li><a href="<?php echo e(URL::to('products')); ?>">Produk</a></li>
						<li><a href="<?php echo e(URL::to('sizes')); ?>">Ukuran</a></li>
						<li><a href="<?php echo e(URL::to('transactions')); ?>">Transaksi</a></li>
						<li><a href="<?php echo e(URL::to('uses')); ?>">Fungsi</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<?php echo $__env->yieldContent('content'); ?>

		<footer class="footer-area" id = "footer-area">
			<div class="container">

			</div>
		</footer>
	</body>
</html><?php /**PATH C:\xampp\htdocs\inventory\resources\views////layouts/frontend.blade.php ENDPATH**/ ?>