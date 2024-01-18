

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');




?>

>

<div class="location_map">
<div id="map" style="width:100%;height:400px;"></div>
<br>
<br>
<p>경기 광주시 경안로 8-2 4층<br>

버거킹 옆 골목으로 들어오시면<br>
다한차이나 건물(OK빌딩) 4층 입니다!<br>

(902코인노래방 위 4층!)</p>
</div>




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