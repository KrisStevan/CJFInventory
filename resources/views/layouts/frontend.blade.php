<!DOCTYPE html>
<html>
	<head>
		<title>Testing Inventory</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ URL::asset('user/main.css') }}">
		@yield('css')
	</head>

	<body>
		<header id="header" id="home">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<a class="navbar-brand">Testing</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="{{ URL::to('colours') }}">Warna</a></li>
						<li><a href="{{ URL::to('kinds') }}">Jenis</a></li>
						<li><a href="{{ URL::to('materials') }}">Bahan</a></li>
						<li><a href="{{ URL::to('products') }}">Produk</a></li>
						<li><a href="{{ URL::to('sizes') }}">Ukuran</a></li>
						<li><a href="{{ URL::to('transactions') }}">Transaksi</a></li>
						<li><a href="{{ URL::to('uses') }}">Fungsi</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		@yield('content')

		<footer class="footer-area" id = "footer-area">
			<div class="container">

			</div>
		</footer>
	</body>
</html>