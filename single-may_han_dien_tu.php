<?php
/* Template Name: CHI TIẾT - MÁY HÀN */
?>

<?php
get_header('tintuc');
?>
<?php 
    $giaban = get_field('gia_ban');           
    $giagoc = get_field('gia_goc');           
    $baohanh = get_field('bao_hanh'); 
    $link = get_field('link_video'); 
    $model = get_field('model'); 
    $mo_ta_ngan = get_field('mo_ta_ngan'); 
    $trong_luong = get_field('trong_luong'); 
    $kich_thuoc = get_field('kich_thuoc'); 
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
     }?>
<div class="container chitiet-somi bg-white">
  <?php setPostViews(get_the_ID()); ?>
  <div class="row">
    <div class="col-md-4 wow bounceInLeft" data-wow-delay="0.1">
      <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="">
    </div>
    <div class="col-md-8 wow bounceInRight" data-wow-delay="0.1">
      <h2><?php the_title()?></h2>
      <div class="rating d-flex">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
      </div>
      <hr>
      <div class="row px-2">
        <div class="col-xs-7 mx-2">
          <h4>Giá Bán</h4>
          <h2 class="color-secondary font-weight-bold"><?php echo number_format($giaban);?> đ</h2>
        </div>
        <div class="col-xs-5 ml-4 gia">
          <h4>Giá Gốc</h4>
          <h3 class="font-weight-bold"><?php echo number_format($giagoc);?> đ</h3>
          <span class="color-secondary font-weight-bold">Tiết kiệm: <?php echo FLOOR($giam) ?>%</span>
        </div>
      </div>
      <hr>
      <div class="row px-2">
        <div class="col-xs-4 ml-2">
          <h4>Thương hiệu</h4>
          <button class="btn btn-success mb-2 font-weight-bold"><?php echo $thuonghieu[0]?></button>
        </div>
        <div class="col-xs-4 ml-4">
          <h4>Loại Máy</h4>
          <button class="btn btn-warning mb-2 font-weight-bold"><?php echo $loaimay[0]?></button>
        </div>
        <div class="col-xs-4 ml-4">
          <h4>Bảo Hành</h4>
          <button class="btn btn-warning mb-2 font-weight-bold"><?php echo $baohanh?> tháng</button>
        </div>
      </div>
      <hr>
      <p><?php echo $mo_ta_ngan;?></p>
      <hr>
      <div class="row px-2">
        <div class="col-xs-6 mx-2">
          <button class="btn bg-red py-2 "><a href="tel:035154428" class="color-yellow font-weight-bold"> <span
                class="ti-shopping-cart"></span> ĐẶT HÀNG NHANH</a></button>
        </div>
        <div class="col-xs-6 mx-2">
          <button class="btn btn-success py-2 "><a href="http://zalo.me/0935154428" class="color-yellow font-weight-bold"> <span
                class="ti-shopping-cart"></span> ĐẶT HÀNG QUA ZALO</a></button>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="row chitiet-somi_thongtin wow bounceInUp" data-wow-delay="0.1">
    <div class="col-md-12">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
            aria-controls="nav-home" aria-selected="true">Thông Số Kỹ Thuật</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active px-4 pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- Chi Tie Tin -->
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">
                  <h3>Thương hiệu</h3>
                </th>
                <td>
                  <h3 class="color-secondary font-weight-bold"><?php echo $thuonghieu[0]?></h3>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <h3>Xuất xứ Thương hiệu</h3>
                </th>
                <td>Trung Quốc</td>
              </tr>
              <tr>
                <th scope="row">
                  <h3>Model</h3>
                </th>
                <td class="font-weight-bold text-success"><?php echo $model?></td>
              </tr>
              <tr>
                <th scope="row">
                  <h3>Trọng lượng</h3>
                </th>
                <td><?php echo $trong_luong?>kg</td>
              </tr>
              <tr>
                <th scope="row">
                  <h3>Kích thước</h3>
                </th>
                <td><?php echo $kich_thuoc?></td>
              </tr>
            </tbody>
          </table>
          <!-- End Chi tiet tin -->
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- End Thong tin CT -->
  <div class="row chitiet-somi_thongtin">
    <div class="col-md-12">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
            aria-controls="nav-home" aria-selected="true">Chi tiết sản phẩm</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active px-4 pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- Chi Tie Tin -->
          <h2>Video Giới thiệu thực tế về <?php the_title()?></h2>
          <iframe width="100%" height="500px" src="https://www.youtube-nocookie.com/embed/<?php echo $link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <!-- End Chi tiet tin -->
        </div>
      </div>
    </div> <hr>
    <div class="col-md-9 my-4">
      <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile;  ?>
    </div>
  </div>
  <hr>
  <!-- End Thong tin CT -->
</div>

<section>
  <div class="container">

    <!--start product carousel-->

    <!--end product carousel-->
  </div>
</section>

<?php
get_footer();
?>