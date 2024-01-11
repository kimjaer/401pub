

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');




?>

>


<div id="map" style="width:100%;height:400px;"></div>



<script>
var mapOptions = {
    center: new naver.maps.LatLng( 37.4103822, 127.2601550),
    zoom: 17
};


var map = new naver.maps.Map('map', mapOptions);

var marker = new naver.maps.Marker({
position: new naver.maps.LatLng( 37.4103822, 127.2601550),
map: map
});

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');