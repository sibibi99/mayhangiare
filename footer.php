<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maymocvn
 */

?>

<!-- Call Phone -->
<a href="tel:0935154428" class="call-animation call" >
<img class="img-circle " src="<?php bloginfo('stylesheet_directory')?>/img/call.png"  alt="Gọi đặt hàng may đồng phục" width="120"/>
</a>
<a href="http://zalo.me/0935154428" class="call-animation zalo" data-wow-delay="10">
<img class="img-circle " src="<?php bloginfo('stylesheet_directory')?>/img/zalo.png"  alt="Chat tư vấn đặt hàng may đồng phục" width="120"/>
</a>

<!--footer section start-->
<footer class="footer-section">
	<!--footer top start-->
	<div class="footer-top bg-light1">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-4 mb-3 mb-lg-0">
					<div class="footer-nav-wrap text-white">
						<img src="<?php bloginfo('stylesheet_directory')?>/img/logo.png" alt="Đồng Phục Áo Thun Thành Công"
							width="200" class="img-fluid mb-3">
						<a href="tel:035154428"><h2 class="text-white">Hotline: 0935.154.428</h2></a>
						<span>Hệ thống bán lẻ trực tuyến lớn mạnh, uy tín, tiện lợi hàng đầu Việt Nam. Kinh doanh thiết bị hàng cơ khí như máy khoan, máy mài, máy hàn, rửa xe....</span>

						<div class="social-list-wrap">
							<ul class="social-list list-inline list-unstyled">
								<li class="list-inline-item"><a href="https://www.facebook.com/MayMocSo1VietNam" target="_blank" title="Facebook"><span
											class="ti-facebook"></span></a></li>
								<li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
											class="ti-twitter"></span></a></li>
								<li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><span
											class="ti-instagram"></span></a>
								</li>
								<li class="list-inline-item"><a href="#" target="_blank" title="printerst"><span
											class="ti-pinterest"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 ml-auto mb-4 mb-lg-0">
					<div class="footer-nav-wrap text-white">
						<h5 class="mb-3 text-white">Hướng Dẫn</h5>
						<ul class="list-unstyled">
							<li class="mb-2 border-bottom"><a href="#">Hướng dẫn thanh toán</a></li>
							<li class="mb-2 border-bottom"><a href="#">Hướng dẫn mua hàng</a></li>
							<li class="mb-2 border-bottom"><a href="#">Chính sách bảo hành</a></li>
							<li class="mb-2 border-bottom"><a href="#">Chính sách đổi trả hàng hóa</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-nav-wrap text-white">
						<h5 class="mb-3 text-white">Địa chỉ</h5>
						<ul class="list-creative">
							<li>
								<dl class="list-terms-medium address">
									<dt>Trụ Sở Chính</dt>
									<dd class="list-comma">
										<ul class="list-comma">
											<li>1095 QUỐC LỘ 1A , PHƯỜNG BÌNH TRỊ ĐÔNG A, QUẬN BÌNH TÂN ,TP HỒ CHÍ MINH</li>          
										</ul>
									</dd>
								</dl>
							</li>
							<li>
								<dl class="list-terms-medium phone">
									<dt>Văn Phòng</dt>
									<dd>
										<ul class="list-comma">
											<li>Phường 15, Quận Tân Bình, TP. Hồ Chí Minh</li>            
										</ul>
									</dd>
								</dl>
							</li>	
						</ul>
					</div>
				</div>
			</div> <hr>
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<a href="#" class="single-promo-hover align-self-center">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/dangkybocongthuong.png" alt="Đã đăng ký kinh doanh đồng phục với Bộ Công Thương." width="123" class="mx-2 ">	
				</a>
					<a href="https://www.dmca.com/site-report/maymocvietnam.com" class="single-promo-hover align-self-center"> 
					<img src="<?php bloginfo('stylesheet_directory')?>/img/dmca.svg" alt="Đã đăng ký bảo hộ độc quyền nội dung số." width="105" class=" mx-2">
				</a>
				</div>
			</div>
		</div>
	</div>
	<!--footer top end-->

	<!--footer copyright start-->

		<div class="container-fluid">
			<div class="py-3  text-center justify-content-center">
					<p class="copyright-text pb-0 mb-0">Copyright © 2020. All
						rights reserved by
						<b class="color-secondary">MAYMOCVIETNAM</b></p>
			</div>
		</div>

	<!--footer copyright end-->
</footer>
<!--footer section end-->

<!--jQuery-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.easing.min.js"></script>
<!--wow js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/owl.carousel.min.js"></script>
<!--custom js-->
<script src="<?php bloginfo('stylesheet_directory')?>/js/scripts.js"></script>
<!-- CUSTOM SUB MENU -->


<?php wp_footer(); ?>

</body>

</html>