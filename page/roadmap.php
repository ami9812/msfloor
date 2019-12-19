<?php
include_once('./_common.php');

$g5['title'] = '오시는길';
include_once('./_head.php');
?>
<link rel="stylesheet" href="<?php echo G5_URL; ?>/page/css/msfloor.css">

<div id="navp">
    <div class="navp_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; 오시는길 </div>
</div>

<!--<div id="nav">
	<div class="nav_wr">
		<a href="<?php echo G5_URL; ?>/page/introduce.php"><span class="other" style="border-left:1px solid #eee">CEO 인사말</span></a>
		<a href="<?php echo G5_URL; ?>/page/ochart.php"><span class="other">조직도</span></a>
		<a href="<?php echo G5_URL; ?>/page/certificate.php"><span class="other" style="border-right:1px solid #fff;">인증서</span></a>
		<a href="<?php echo G5_URL; ?>/page/roadmap.php"><span style="background: linear-gradient( to left, #2c9b41, #3b8ad6  );color:#fff">오시는길</span></a>
	</div>
</div>-->

<nav id="bo_cate">
    <h2> 카테고리</h2>
    <ul id="bo_cate_ul">
        <li><a href="<?php echo G5_URL; ?>/page/introduce.php">CEO 인사말</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/ochart.php">조직도</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/certificate.php">인증서</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/roadmap.php" id="bo_cate_on">오시는길</a></li>
    </ul>
</nav>

<!-- 타이틀 영역 --> 
<div class="titleArea wow fadeInUp" data-wow-delay="0.1s">
  <h2>오시는길</h2>
  <ul>
  	<li>방문전 연락주시면 담당부서에 미리 연결해 드립니다.</li>
  </ul>
</div>

<div class="pagepan p11">
	<div class="centerc wow fadeInUp" data-wow-delay="0.4s" style="margin-top:40px;border-bottom:2px solid #006600">
		<h2 style="font-size:20px;margin-bottom:20px;"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> 한국총판특판사업부 </h2>
	</div>
	<div class="center wow fadeInUp" data-wow-delay="0.4s" style="margin-top:-30px">
		<p class="mt text12"><i class="fa fa-map-marker" aria-hidden="true"></i> 주소 : 경기도 수원시 영통구 삼성로 320번길 35, 102동 703호(원천동, 아크로파크)</br>
		<i class="fa fa-phone-square" aria-hidden="true"></i> 대표전화 : <?php echo $config['cf_7']; ?></br>
		<i class="fa fa-fax" aria-hidden="true"></i> 팩스 : 031-214-8864</p>
	</div>
    <div class="center wow fadeInUp" data-wow-delay="0.4s" style="width:99%">
		<!-- * Daum 지도 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1575643933500" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;margin:0 auto;"></div>

		<!--
		2. 설치 스크립트
		* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
		        "timestamp" : "1575643933500",
		        "key" : "w5tm", 
		        "mapHeight" : "400"
				}).render();
		</script>
		<!-- * 카카오맵 - 지도퍼가기 -->
    </div>


	<div class="centerc wow fadeInUp" data-wow-delay="0.4s" style="margin-top:40px;border-bottom:2px solid #006600">
		<h2 style="font-size:20px;margin-bottom:20px;"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> 부산 전시장 </h2>
	</div>
	<div class="center wow fadeInUp" data-wow-delay="0.4s" style="margin-top:-30px">
		<p class="mt text12"><i class="fa fa-map-marker" aria-hidden="true"></i> 주소 : 부산광역시 해운대구 해운대로 55</br>
		<i class="fa fa-phone-square" aria-hidden="true"></i> 대표전화 :  051-524-8884</br>
		<i class="fa fa-fax" aria-hidden="true"></i> 팩스 : 051-524-8885</p>
	</div>	
    <div class="center wow fadeInUp" data-wow-delay="0.4s" style="width:99%">
		<!-- * Daum 지도 - 지도퍼가기 -->
		<!-- 1. 지도 노드 -->
		<div id="daumRoughmapContainer1572320027672" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%;margin:0 auto;"></div>

		<!--
		2. 설치 스크립트
		* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
		-->
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

		<!-- 3. 실행 스크립트 -->
		<script charset="UTF-8">
			new daum.roughmap.Lander({
		        "timestamp" : "1572320027672",
		        "key" : "vmhd", 
		        "mapHeight" : "400"
				}).render();
		</script>
		<!-- * 카카오맵 - 지도퍼가기 -->
    </div>

</div>

<?php
include_once('./_tail.php');
?>