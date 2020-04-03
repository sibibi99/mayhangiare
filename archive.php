<?php
get_header('tintuc');
?>

<?php 
//Xử lý Brand
$id_terms_brand = isset($_GET['brands']) ? explode("-",$_GET['brands']) : null;

$all_terms_loai_may_han = get_terms('thuong_hieu_may_han');
$terms_loai_may_han = array();
foreach ($all_terms_loai_may_han as $term) {
  $terms_loai_may_han[] = $term->term_id;
}

$brand_arr = [
  'taxonomy' => 'thuong_hieu_may_han',                //(string) - Tên của taxonomy
  'field' => 'id',                    
  'terms' => $id_terms_brand && $id_terms_brand[0] != "" ? $id_terms_brand : $terms_loai_may_han,
  'include_children' => true,           
  'operator' => 'IN'
];


function check_checked($id,$id_terms_brand){
  if(in_array($id,$id_terms_brand)){
    return "checked";
  }

  return "";
}

?>

<section class="ds_sanpham">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-3">         

        <div class="list-group">
          <h3 class="list-group-item bg-color-1 text-white">
            CHỌN THEO LOẠI MÁY
          </h3>
          <?php
          $args_terms = array( 
            'taxonomy' => 'loai_may_han'    
          ); 
          $terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            foreach ( $terms as $term ) { ?>               
            <a href="<?php echo get_term_link($term->term_id); ?>" class="list-group-item list-group-item-action"><?php echo $term->name; ?> </a>
            <?php }} ?>
        </div>

        <div class="list-group  mt-4">
          <h3 class="list-group-item bg-color-1 text-white">
            CHỌN THEO THƯƠNG HIỆU
          </h3>
          <?php
        $args_terms = array( 
          'taxonomy' => 'thuong_hieu_may_han'    
        ); 
        $terms = get_terms( $args_terms ); if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
          foreach ( $terms as $term ) { ?>
          <div class="list-group-item list-group-item-action a-check-brands">
            <label for="<?php echo $term->term_id ?>"></label>
            <input class='check-box-brand mx-2' type="checkbox" id="<?php echo $term->term_id ?>" value="<?php echo $term->term_id ?>" <?php echo check_checked($term->term_id,$id_terms_brand); ?>><?php echo $term->name; ?>
          </div>
          <?php }} ?>
        </div>
   
      </div>

      <!-- Hiển thị sản phẩm -->
      <div class="col-sm-8 col-md-9 luutru">
        <div class="row _1ds_sanpham">
          <div class="col-md-12 mb-4">
            <div class="tieude">
              <h2>Danh Sách Máy Hàn Điện Tử</h2>
            </div>
          </div>
        </div>
        <div class="item-product">
        <div class="row ml-2">
          <?php 
          $sanpham = new WP_Query(array(
            'post_type' => 'may_han_dien_tu',
            'posts_per_page'=> 10,
            'tax_query' => array(
              'relation' => 'AND',
                array(
                'taxonomy' => 'loai_may_han',                //(string) - Tên của taxonomy
                'field' => 'id',                    
                'terms' => get_queried_object()->term_id,
                'include_children' => true,           
                'operator' => 'IN'                      
              ),
              $brand_arr
            )
          ));
          while($sanpham->have_posts()) {
              $sanpham->the_post();
              $giaban = get_field('gia_ban');           
              $giagoc = get_field('gia_goc');           
              $baohanh = get_field('bao_hanh'); 
              $giam = 100- $giaban / $giagoc * 100;   
           
              include( locate_template( 'archive-item.php', false, false ) ); 

          } 
          wp_reset_query();
          ?>
        </div>
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