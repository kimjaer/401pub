<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


?>
<?php if (!defined("_INDEX_")) { ?>  
    </div>
    <?php  } ?>
   
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
            401pub<br>
            사업자등록번호<br>
            경기 광주시 경안로 8-2 4층<br>
            010-0000-0000<br>
            Copyright © 401pub. All rights reserved.<br>

    </div>      
    
    
</div>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");