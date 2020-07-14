<?php
require_once './Views/HeaderAndFooter/header.php';
$router = new bootstraps_router();

?>

<head>
	<link rel="stylesheet" href="./styleCSS/style.css">
	<link rel="stylesheet" href="./styleCSS/info_pay.css">
</head>

<!-- Insert Code Here !!!!!!!!!!!!!!!!!!! -->

<?php
if (isset($_SESSION['attention']))
	unset($_SESSION['attention']);
if (isset($_SESSION['requiredLogedin'])) {
	if ($_SESSION['requiredLogedin'] == true) {
		$showingError = "Bạn Phải Đăng Nhập trước hoặc Đăng Ký";
		$_SESSION['requiredLogedin'] = false;
	}
}
?>

<section class="cart">
	<div class="container">
		<div class="row">

			<div class="col-auto">
				<div class="titleErr" style="text-align: center; color:red;">
					<h2>
						<?php if (isset($showingError)) {
							echo $showingError;
						}
						?>
					</h2>
				</div>
				<div class="cart__info">
					<div class="main__header">
						<a href="https://www.h2gaming.vn/" class="logo" target="_self">
							<h1 class="logo__text">H2gaming.vn</h1>
						</a>
						<ul class="info__link">
							<li class="link__cart">
								<a href="<?php echo $router->createUrl('Views/ViewCart'); ?> ">Giỏ hàng</a>
							</li>
							<li class="info__cart">
								Thông tin giỏ hàng
							</li>
							<li class="link__payment">
								<a href="">Phương thức thanh toán</a>
							</li>
						</ul>
					</div>
					<div class="main">
						<div class="name">
							<h2>Thông tin giao hàng</h2>
						</div>
						<div class="link_login">
							<?php
							if (isset($logedin)) {
								if ($logedin == 0) {
									echo "<h3>Bạn đã đăng nhập chưa?</h3>
							<a href=' {$router->createUrl('Controllers/User/routeUser', ['route' => 'loginPage', 'attention' => 'true'])}'>Đăng nhập</a><span>&nbsp Hoặc <a href='{$router->createUrl('Controllers/User/routeUser', ['route' => 'registerPage', 'attention' => 'true'])}'> Đăng Ký</a></span>";
								} else {
									echo '<h3>Hello Lazy Man</h3>';
								}
							}
							?>

						</div>
						<form class="flie__input" method="POST" action="<?php echo $router->createUrl('Controllers/index', ['controller' => 'infopay', 'method' => 'storeDataIntoSession']) ?>">

							<?php
							if (isset($logedin)) {
								if ($logedin == 0) {
									echo '';
								} else {
							?>
									<?php
									$response = file_get_contents('https://thongtindoanhnghiep.co/api/city');

									$city = json_decode($response)->LtsItem;

									?>
									<input type="text" placeholder="Số điện thoại" size="30" id="phoneNumber" name="SDT" required />

									<input type="text" placeholder="Địa chỉ" size="30" id="input_address" name="diachi" required />
									<select value="" id="city" name="thanhpho" required>
										<?php foreach ($city as $data) : ?>
											<option name="<?php echo $data->SolrID; ?>" id="<?php echo $data->ID; ?>"><?php echo $data->Title; ?></option>
										<?php endforeach; ?>
									</select>
									<select value="" id="huyen" name="huyen" required>

									</select>
									<select value="" id="xa" name="xa" required>

									</select>

									<script src="./ExecuteJS/ProvinceApi.js"></script>
								<?php } ?>
							<?php } ?>


							<div class="main__click">
								<a href="<?php echo $router->createUrl('Views/ViewCart'); ?>">
									<svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
										<path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
									</svg>
									Giỏ hàng
								</a>
								<a href="<?php echo $router->createUrl('Views/payment'); ?>">
									<button type="submit" value="submit" name="submit">Tiếp đến phương thức thanh toán</button>
								</a>

							</div>
						</form>
					</div>
				</div>
			</div>
			<?php
			// echo "<pre>";
			// var_dump($_SESSION['cart']);
			// die();
			if (isset($_SESSION['cart'])) {
				$CartItems = $_SESSION['cart'];
				$total = 0;
			}
			?>
			<div class="col-auto total">
				<div class="total__cost">
					<?php foreach ($CartItems as $Bigproduct) : ?>
						<?php foreach ($Bigproduct as $product) : ?>
							<?php $total += (int) $product['product_price'] * (int) $product['product_quantity'];  ?>
							<div class="product">
								<div class="product__img">
									<a href="<?php echo $router->createUrl('temp/detailProduct', ['id' => $product['product_id']]); ?>">
										<img src="<?php echo $product['product_image']; ?>" alt="">
										<span class="product__sl"><?php echo $product['product_quantity']; ?></span>
									</a>
								</div>
								<span class="product__name"><?php echo $product['product_name']; ?></span>
								<span class="product__price"><?php echo number_format((int) $product['product_price'] * (int) $product['product_quantity']);  ?></span>
							</div>
						<?php endforeach; ?>
					<?php endforeach; ?>
					<form action="info_pay" method="POST" class="product__discount">
						<input type="text" placeholder="Mã giảm giá" size="30" id="input__discount" name="input__discount" />
						<button type="submit" value="submit__discount" name="submit_discount">Sử dụng</button>
					</form>
					<div class="total__line">
						<div class="total__line__subtotal">
							<span class="total__line__name">Tạm tính</span>
							<span class="total__line__price"><?php echo number_format($total); ?></span> <br>
						</div>
						<div class="total__line__shipping">
							<span class="total__line__name">Phí vận chuyển</span>
							<span class="total__line__price">39,000</span> <br>
						</div>
					</div>
					<div class="total__line__footer">
						<span class="total__line__name">Tổng tiền</span>
						<span class="total__line__price"><?php echo number_format((int) $total - 39000); ?></span> <br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<script src="./ExecuteJS/slide.js"></script>
<script src="./ExecuteJS/dropRight.js"></script>


<?php
require_once './Views/HeaderAndFooter/footer.php';
?>