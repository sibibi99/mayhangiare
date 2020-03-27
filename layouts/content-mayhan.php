<section class="sanpham my-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bg-white tieude d-flex">
        <h2>Máy Hàn</h2>
        <a href="may_han_dien_tu" class="ml-auto mt-2">Xem Tất Cả <span class="ti-angle-double-right"></span></a>
      </div>
      <div class="container">
        <!--start product carousel-->
        <div class="product-wrap pt-2 wow " data-wow-delay="0.4">
          <div class="product-carousel owl-carousel owl-theme dot-indicator">
            <?php 
                $sanpham = new WP_Query(array('post_type' => 'may_han_dien_tu'));
                while($sanpham->have_posts()) {
                    $sanpham->the_post();
                    $giaban = get_field('gia_ban');           
                    $giagoc = get_field('gia_goc');           
                    $baohanh = get_field('bao_hanh'); 
                    $giam = 100- $giaban / $giagoc * 100;
                    $terms = get_the_terms(get_the_ID(),'thuong_hieu_may_han');
                    $terms2 = get_the_terms(get_the_ID(),'loai_may_han');
                    
                    $thuonghieu = [];
                    $loaimay = [];
                    foreach($terms as $term){
                      $thuonghieu[] = $term->name;
                    }
                    foreach($terms2 as $term){
                      $loaimay[] = $term->name;
                    }
                    ?>
            <div class="item">
              <a href="<?php the_permalink();?>">
              <div class="single-product rounded border single-promo-hover">
                <img src="<?php the_post_thumbnail_url();?>" class="img-fluid"
                  alt="<?php the_title()?>" />
                <div class="product-info  px-3 py-2">
                  <div class="tenmay">
                    <h3 class=""><?php the_title()?></h3>
                    <h3 class="text-success">BH: <?php echo $baohanh;?> tháng</h3>
                  </div>
                  <div class="gia">
                    <h2 class="color-secondary"><?php echo number_format($giaban);?> đ</h2>
                    <h3 class="ml-auto"><?php echo number_format($giagoc);?> đ</h3>
                  </div>
                  <div class="hangsx justify-content-between loaimay">
                    <h3 class="btn-light btn border"><?php echo $loaimay[0]?></h3>
                    <a href="fuji"><h3 class="btn btn-success"><?php echo $thuonghieu[0]?></h3></a>
                  </div>
                </div>
              </div>
              <div class="giamgia">
                <img src="<?php bloginfo('stylesheet_directory')?>/img/giam.png" class="" alt="">
                <span>-<?php echo FLOOR($giam) ?>%</span>
              </div>
            </a>
            </div>
          <?php } wp_reset_query()?>
          </div>
        </div>
        <!--end product carousel-->
      </div>
    </div>
  </div>
</section>