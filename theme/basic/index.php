


<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가



include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<?php echo latest("banner", "mainBanner", 1, 1000); ?>

<?php echo latest("subBanner", "subBanner", 4, 1000); ?>


<?php
include_once(G5_THEME_PATH.'/tail.php');