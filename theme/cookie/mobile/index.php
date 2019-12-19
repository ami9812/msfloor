<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 4, 33);
?>
<div id="index">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 퀵메뉴 -->
<div class="idx_con3">
	<ul>
		<li class="wow fadeInUp" data-wow-delay="0.1s">
			<img src="<?php echo G5_THEME_IMG_URL; ?>/svg/svgid11.png" width="64">
			<!--<object data="<?php //echo G5_THEME_IMG_URL; ?>/svg/svgid11.svg" type="image/svg+xml"></object>-->
			<h2><span>인증서</span></h2>
			<p>건강과 안전을 검증받은 </br>엠에스플로어 바닥재</p>
			<a href="<?php echo G5_URL; ?>/page/certificate.php">+</a>
		</li>
		<li class="wow fadeInUp" data-wow-delay="0.2s">
			<img src="<?php echo G5_THEME_IMG_URL; ?>/svg/svgid3.png" width="64">
			<h2><span>제품소개</span></h2>
			<p>모던한 디자인의 제품들을</br>만나보십시오.</p>
			<a href="<?php echo G5_URL; ?>/page/product.php">+</a>
		</li>
		<li class="wow fadeInUp" data-wow-delay="0.3s">
			<img src="<?php echo G5_THEME_IMG_URL; ?>/svg/svgid14.png" width="64">
			<h2><span>온라인문의</span></h2>
			<p>회원가입없이 빠른 상담</br>가능합니다.</p>
			<a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=online">+</a>
		</li>
		<li class="wow fadeInUp" data-wow-delay="0.4s">
			<img src="<?php echo G5_THEME_IMG_URL; ?>/svg/svgid16.png" width="64">
			<h2><span>오시는길</span></h2>
			<p>방문하시기전에 미리 확인</br>하십시오.</p>
			<a href="<?php echo G5_URL; ?>/page/roadmap.php">+</a>
		</li>
	</ul>
</div>

<!-- 제품소개 최신글 -->
<div class="wow fadeInUp" data-wow-delay="0.5s">
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/team', 'service', 15, 33);
?></div>



<!-- 회사소개 -->
<div class="com_int">
	<ul>
		<li class="com_left wow fadeInLeft" data-wow-delay="0.6s">
			<iframe width="531" height="327" src="https://www.youtube.com/embed/<?php echo $config['cf_2_subj'] ?>?controls=0&mute=1&autoplay=1&disablekb=1&loop=1&&playlist=<?php echo $config['cf_2_subj'] ?>&autohide=1&rel=0&modestbranding=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
		</li>
		<li class="com_right3 wow fadeInRight" data-wow-delay="1.1s">
			<h2>ABOUT US</h2>
			<h3>엠에스플로어를 소개합니다.</h3>
			<p>새집증후군의 대부분은 화학처리가 끝난지 얼마 되지 않은 자재들로 건물이 완공된 이유중 하나 입니다. 저희 SPC 바닥재는 클릭시공을 통해 간편하고 접착제를 사용하지 않아 친환경 인증 및 라돈 인증까지 끝마친 제품입니다. 가족과 아끼는 사람들의 건강한 행복을 위한 선택이 되실 수 있게 최선을 다하겠습니다.
			</p>
			<a href="<?php echo G5_URL; ?>/page/introduce.php">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</li>
	</ul>
</div>

<!-- 제품 특성 -->
<?php
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/magnific-popup.css">', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/jquery.magnific-popup.min.js"></script>', 0);
?>
<div class="idx_con2">
	<div class="itit wow fadeInUp" data-wow-delay="0.3s"><h1>제품 특성</h1><span><font size="3" color="#999">SPC 바닥재의 특장점</font></span></div>
    <ul>
        <li class="idx_left wow fadeInLeft" data-wow-delay="0.5s" style="background:url(./theme/cookie/img/spec/1.jpg) center center / cover no-repeat;">
            <h2><i class="fa fa-diamond" aria-hidden="true"></i><span>강한 바닥재</span></h2>
            <p>수많은 강도 테스트를 거친 튼튼한 바닥재</p>
            <a href="<?php echo $config['cf_3_subj']; ?>" class="<?php echo ('popup-youtube'); ?>">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </li>
        <li class="idx_right wow fadeInUp" data-wow-delay="0.9s" style="background:url(./theme/cookie/img/spec/2.jpg) center center / cover no-repeat;">
            <h2><i class="fa fa-fire" aria-hidden="true"></i><span>난연 바닥재</span></h2>
            <p>불과 열에 강한 바닥재</p>
            <a href="<?php echo $config['cf_4_subj']; ?>" class="<?php echo ('popup-youtube'); ?>">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </li>   
         <li class="idx_right wow fadeInUp" data-wow-delay="0.9s" style="background:url(./theme/cookie/img/spec/3.jpg) center center / cover no-repeat;">
            <h2><i class="fa fa-tint" aria-hidden="true"></i><span>방수 바닥재</span></h2>
            <p>물한방울 셀 틈 없는 </br>촘촘한 바닥재</p>
            <a href="<?php echo $config['cf_5_subj']; ?>" class="<?php echo ('popup-youtube'); ?>">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </li>   
        <li class="idx_right2 wow fadeInUp" data-wow-delay="0.9s" style="background:url(./theme/cookie/img/spec/4.jpg) center center / cover no-repeat;">
            <h2><i class="fa fa-wrench" aria-hidden="true"></i><span>무변형 바닥재</span></h2>
            <p>습도와 충격에 강한 </br>변형없는 바닥재</p>
            <a href="<?php echo $config['cf_6_subj']; ?>" class="<?php echo ('popup-youtube'); ?>">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </li> 
        <li class="idx_right2 wow fadeInUp" data-wow-delay="0.9s" style="background:url(./theme/cookie/img/spec/5.jpg) center center / cover no-repeat;">
            <h2><i class="fa fa-snowflake-o" aria-hidden="true"></i><span>미끄럼방지</span></h2>
            <p>쉽게 미끄러지지 않아 </br>안전한 바닥재</p>
            <a href="<?php echo $config['cf_7_subj']; ?>" class="<?php echo ('popup-youtube'); ?>">더보기 <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </li> 
    </ul>
</div>	
<script>
<!--
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });
});
//-->
</script>

<!-- 갤러리 최신글 -->
<div class="wow fadeInUp" data-wow-delay="0.8s">
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/service', 'gallery', 6, 33);
?></div>

<!-- 협력사 흐르는 배너 최신글 -->
<div class="wow fadeInUp" data-wow-delay="0.2s">
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/movebanner', 'mbanner', 20, 33);
?></div>


</div>
<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>