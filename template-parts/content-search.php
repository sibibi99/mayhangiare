<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tctheme
 */

?>
<?php 

    $giaban = get_field('gia_ban');           
    $giagoc = get_field('gia_goc');           
    $baohanh = get_field('bao_hanh'); 
    $giam = 100- $giaban / $giagoc * 100;   
    $terms = get_the_terms(get_the_ID(),'thuong_hieu_may_han');                    
    $thuonghieu = [];
     foreach($terms as $term){
      $thuonghieu[] = $term->name;
      }?>
<div class="col-sm-6 col-md-3 my-4">
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


