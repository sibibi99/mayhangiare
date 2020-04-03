<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-3">         

        <div class="list-group ">
          <h3 class="list-group-item bg-color-1 text-white">
            CHỌN LOẠI MÁY
          </h3>
          <?php
          $args_terms = array( 
            'taxonomy' => 'loai_may_han'    
          ); 
          $terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) {  ?>
            <a href="<?php echo get_term_link($term->term_id); ?>" class="list-group-item list-group-item-action font-weight-bold"><?php echo $term->name; ?> </a>
            <?php }} ?>
        </div>

        <div class="list-group mt-4">
          <h3 class="list-group-item bg-color-1 text-white">
            DANH SÁCH SẢN PHẨM
          </h3>                        
          <a href="#" class="list-group-item list-group-item-action font-weight-bold">Máy Hàn</a>
          <a href="#" class="list-group-item list-group-item-action font-weight-bold">Máy Cắt</a>
          <a href="#" class="list-group-item list-group-item-action font-weight-bold">Máy Mài</a>
          <a href="#" class="list-group-item list-group-item-action font-weight-bold">Máy Rửa Xe</a>
          <a href="#" class="list-group-item list-group-item-action font-weight-bold">Dụng Cụ Cầm Tay</a>
          
        </div>
   
      </div>
      <div class="col-sm-8 col-md-9 luutru">
        <div class="row _1ds_sanpham">
          <div class="col-md-12 mb-4">
            <div class="tieude">
              <h2>Danh Sách Máy Hàn Điện Tử</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php 
          $sanpham = new WP_Query(array('post_type' => 'may_han_dien_tu'));
          while($sanpham->have_posts()) {
              $sanpham->the_post();
              $giaban = get_field('gia_ban');           
              $giagoc = get_field('gia_goc');           
              $baohanh = get_field('bao_hanh'); 
              $giam = 100- $giaban / $giagoc * 100;   
              $terms = get_the_terms(get_the_ID(),'thuong_hieu_may_han');                    
              $thuonghieu = [];
               foreach($terms as $term){
                $thuonghieu[] = $term->name;
                }?>
          <div class="col-sm-6 col-md-3 my-2">
            <div class="card">
              <a href="<?php the_permalink();?>">
              <img class="card-img-top" src="<?php the_post_thumbnail_url();?>" alt="máy hàn giá rẻ hcm">
            </a>
              <div class="m-2">
                <h5 class=""><?php the_title()?></h5>
                <div class="gia">
                  <h2 class="color-secondary"><?php echo number_format($giaban);?> đ</h2>                  
                  <h3 class="ml-auto"><?php echo number_format($giagoc);?> đ</h3>
                  <div class="mota d-flex justify-content-between align-items-center">
                    <span class="d-block text-success font-weight-bold">Tiết kiệm <?php echo FLOOR($giam);?>%</span>
                    <span class="btn border btn-success"><?php echo $thuonghieu[0]?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } wp_reset_query()?>
        </div>
      </div>
      <!-- End-Col-9 -->
    </div>




    <!-- Danh Sach Chi Tiet -->
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'ao_bep',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>"
              alt="May Đồng Phục áo nhà hàng | Bếp trưởng">
          </a>
          <div class="card-body bg-light">
            <h5 class="card-title text-danger"><?php the_title()?></h5>
            <h5 class="product-price">
              <span>Mã: <?php echo $masanpham;?></span></h5>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
      </div>
      <!-- End_Item -->
      <?php endwhile; ?>
    </div>

    <div class="row m-2">
      <nav class="menu_phantrang ">
        <?php   
    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
    ));
    wp_reset_postdata();
  ?>
      </nav>
    </div>

  </div>
</section>

<?php
get_footer();
?>