<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


 <div class="mainLatest <?php echo $bo_table; ?> container">   
  <ul class="d-flex justify-content-between">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid">';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
    <li>
  
   <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>

</li>   

           
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
   
    <?php }  ?>
    </ul>
    </div>


