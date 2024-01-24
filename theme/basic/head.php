<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <h1 id="logo">
   <a href="<?php echo G5_URL ?>">
		<svg 
			viewBox="0 0 551.9 141.73" style="enable-background:new 0 0 551.9 141.73;" xml:space="preserve">
			<style type="text/css">
				.st0 {
					fill: #FFFFFF;
					stroke: #000000;
					stroke-width: 0.2835;
					stroke-miterlimit: 10;
				}

				.st1 {
					fill: #FFFFFF;
					stroke: #000000;
					stroke-width: 0.1417;
					stroke-miterlimit: 10;
				}
			</style>
			<g>
				<g>
					<path
						d="M130.02,0h-30.1L0,89.62v30.67h88.86v21.45h41.16v-21.45h9.37V82.73h-9.37V0z M65.26,82.73l23.59-21.3v21.3H65.26z" />
					<path d="M253.44,0H194.5c-11.99,0-26.99,1.27-36.6,11.16c-7.5,7.72-10.84,19.41-10.84,37.9v43.62c0,18.41,3.34,30.07,10.83,37.82
					c9.64,9.96,24.63,11.24,36.61,11.24h58.94c34.27,0,47.62-13.75,47.62-49.06V49.06c0-18.44-3.43-30.15-11.11-37.94
					C280.24,1.26,265.33,0,253.44,0z M253.44,99.49h-58.76c-3.25,0-4.62-0.36-5.09-0.53c-0.2-0.52-0.64-2.13-0.64-6.29V49.06
					c0-4.16,0.44-5.76,0.64-6.29c0.47-0.17,1.85-0.53,5.09-0.53h58.76c3.1,0,4.44,0.34,4.91,0.5c0.21,0.53,0.64,2.15,0.64,6.31v43.62
					c0,4.16-0.44,5.78-0.64,6.31C257.88,99.15,256.54,99.49,253.44,99.49z" />
					<polygon points="304.06,23.96 326.15,56.45 332.34,52.09 332.34,141.73 374.4,141.73 374.4,0 336.09,0 		" />
				</g>
				<g>
					<g>
						<path d="M393.87,113h10.32v2.76h-7.18v3.19h6.38v2.73h-6.38v5.38h-3.14V113z" />
						<path d="M405.3,120.03c0-4.26,3.23-7.39,7.59-7.39c4.37,0,7.59,3.12,7.59,7.39c0,4.26-3.23,7.39-7.59,7.39
						C408.53,127.41,405.3,124.29,405.3,120.03z M417.34,120.03c0-2.66-1.9-4.56-4.45-4.56c-2.55,0-4.45,1.9-4.45,4.56
						c0,2.64,1.9,4.56,4.45,4.56C415.45,124.58,417.34,122.67,417.34,120.03z" />
						<path d="M422.18,113h3.14v7.83c0,2.24,1.24,3.75,3.3,3.75c2.05,0,3.3-1.5,3.3-3.75V113h3.14v7.83c0,3.99-2.57,6.58-6.44,6.58
						c-3.87,0-6.44-2.59-6.44-6.58V113z" />
						<path d="M445.73,127.07l-2.73-4.43h-2.5v4.43h-3.14V113h5.66c3.57,0,5.66,1.9,5.66,4.81c0,1.93-0.91,3.42-2.57,4.19l3.26,5.06
						H445.73z M440.5,119.85h2.38c1.66,0,2.66-0.71,2.66-2.04c0-1.33-1-2.04-2.66-2.04h-2.38V119.85z" />
						<path d="M462.02,115.78h-4.57v11.29h-3.14v-11.29h-4.57V113h12.29V115.78z" />
						<path d="M476.21,113v14.06h-3.14v-5.71h-6.21v5.71h-3.14V113h3.14v5.57h6.21V113H476.21z" />
						<path d="M483.53,113h10.32v2.76h-7.18v3.19h6.38v2.73h-6.38v5.38h-3.14V113z" />
						<path d="M498.71,113v11.29h7.02v2.78h-10.17V113H498.71z" />
						<path d="M506.41,120.03c0-4.26,3.23-7.39,7.59-7.39c4.37,0,7.59,3.12,7.59,7.39c0,4.26-3.23,7.39-7.59,7.39
						C509.64,127.41,506.41,124.29,506.41,120.03z M518.46,120.03c0-2.66-1.9-4.56-4.45-4.56c-2.55,0-4.45,1.9-4.45,4.56
						c0,2.64,1.9,4.56,4.45,4.56C516.56,124.58,518.46,122.67,518.46,120.03z" />
						<path d="M522.84,120.03c0-4.26,3.23-7.39,7.59-7.39s7.59,3.12,7.59,7.39c0,4.26-3.23,7.39-7.59,7.39S522.84,124.29,522.84,120.03
						z M534.89,120.03c0-2.66-1.9-4.56-4.45-4.56c-2.55,0-4.45,1.9-4.45,4.56c0,2.64,1.9,4.56,4.45,4.56
						C532.99,124.58,534.89,122.67,534.89,120.03z" />
						<path d="M548.26,127.07l-2.73-4.43h-2.5v4.43h-3.14V113h5.66c3.57,0,5.66,1.9,5.66,4.81c0,1.93-0.91,3.42-2.57,4.19l3.26,5.06
						H548.26z M543.03,119.85h2.38c1.66,0,2.66-0.71,2.66-2.04c0-1.33-1-2.04-2.66-2.04h-2.38V119.85z" />
					</g>
				</g>
				<g>
					<g>
						<path d="M393.87,87.91h5.4c3.66,0,5.8,2.04,5.8,5.14c0,3.14-2.14,5.18-5.8,5.18h-2.26v3.74h-3.14V87.91z M399.14,95.45
						c1.74,0,2.8-0.83,2.8-2.4c0-1.55-1.05-2.36-2.8-2.36h-2.12v4.76H399.14z" />
						<path d="M406.59,87.91h3.14v7.83c0,2.24,1.24,3.75,3.3,3.75c2.05,0,3.3-1.5,3.3-3.75v-7.83h3.14v7.83c0,3.99-2.57,6.58-6.44,6.58
						c-3.87,0-6.44-2.59-6.44-6.58V87.91z" />
						<path d="M421.78,87.91h6.11c3.12,0,4.88,1.62,4.88,4.19c0,1-0.67,2.14-1.64,2.5c1.35,0.43,2.3,1.74,2.3,3.11
						c0,2.61-1.86,4.26-5.02,4.26h-6.63V87.91z M427.75,93.61c1.19,0,1.88-0.52,1.88-1.5s-0.69-1.52-1.88-1.52h-2.83v3.02H427.75z
						M428.27,99.3c1.24,0,2.02-0.55,2.02-1.59c0-1.04-0.78-1.59-2.02-1.59h-3.35v3.17H428.27z" />
						<path d="M439.48,94.94c0-4.26,3.23-7.39,7.59-7.39c4.37,0,7.59,3.12,7.59,7.39s-3.23,7.39-7.59,7.39
						C442.71,102.32,439.48,99.2,439.48,94.94z M451.53,94.94c0-2.66-1.9-4.56-4.45-4.56c-2.55,0-4.45,1.9-4.45,4.56
						c0,2.64,1.9,4.56,4.45,4.56C449.63,99.49,451.53,97.58,451.53,94.94z" />
						<path d="M456.53,87.91h2.62l7.02,8.46v-8.63h3.14v14.07h-2.62l-7.02-8.46v8.63h-3.14V87.91z" />
						<path d="M488.13,90.69h-4.57v11.29h-3.14V90.69h-4.57v-2.78h12.29V90.69z" />
						<path d="M502.32,87.91v14.06h-3.14v-5.71h-6.21v5.71h-3.14V87.91h3.14v5.57h6.21v-5.57H502.32z" />
						<path d="M504.8,87.91h10.46v2.73h-7.32v2.87h6.71v2.73h-6.71v3.02h7.47v2.73H504.8V87.91z" />
					</g>
				</g>
			</g>
		</svg>
  </a>
</h1>
           
    <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
            <ul id="gnb_1dul" class="d-flex justify-content-center">
                <li class="gnb_1dli gnb_mnal d-none"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li>
                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                    <!-- `jr -->
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da" style="margin: 0;">
                    <?php 
                    $str_arr = explode('|', $row['me_name']); ?>
                    
                    <span class="en"><? echo $str_arr[0] ?></span>
                    <span class="kr"><? echo $str_arr[1] ?></span>
                    </a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
            <div id="gnb_all">
                <h2>전체메뉴</h2>
                <ul class="gnb_al_ul">
                    <?php
                    
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    ?>
                    <li class="gnb_al_li">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){
                            if($k == 0)
                                echo '<ul>'.PHP_EOL;
                        ?>
                            <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div id="gnb_all_bg"></div>
        </div>
    </nav>
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div >
<?php if (!defined("_INDEX_")) { ?>   
    <div id="container" class="container mx-auto">
        <h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2>
        
        
        <?php }
        
        