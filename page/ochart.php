<?php
include_once('./_common.php');

$g5['title'] = '조직도';
include_once('./_head.php');
?>
<link rel="stylesheet" href="<?php echo G5_URL; ?>/page/css/msfloor.css">

<div id="navp">
    <div class="navp_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; 조직도 </div>
</div>

<!--<div id="nav">
	<div class="nav_wr">
		<a href="<?php echo G5_URL; ?>/page/introduce.php"><span class="other" style="border-right:1px solid #fff;border-left:1px solid #eee">CEO 인사말</span></a>
		<a href="<?php echo G5_URL; ?>/page/ochart.php"><span style="background: linear-gradient( to left, #2c9b41, #3b8ad6  );color:#fff">조직도</span></a>
		<a href="<?php echo G5_URL; ?>/page/certificate.php"><span class="other">인증서</span></a>
		<a href="<?php echo G5_URL; ?>/page/roadmap.php"><span class="other">오시는길</span></a>
	</div>
</div>-->

<nav id="bo_cate">
    <h2> 카테고리</h2>
    <ul id="bo_cate_ul">
        <li><a href="<?php echo G5_URL; ?>/page/introduce.php">CEO 인사말</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/ochart.php" id="bo_cate_on">조직도</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/certificate.php">인증서</a></li>
        <li><a href="<?php echo G5_URL; ?>/page/roadmap.php">오시는길</a></li>
    </ul>
</nav>

<!-- 타이틀 영역 --> 
<div class="titleArea wow fadeInUp" data-wow-delay="0.1s">
  <h2>조직도</h2>
  <ul>
  	<li>엠에스플로어를 움직이는 가장 소중한 인적자원의 구조입니다.</li>
  </ul>
</div>

<div class="pagepan p11">
<div class="center wow fadeInUp" data-wow-delay="1.1s" style="text-align: center">
	<p class="mt text12">
		<img src="http://msfloor.cdn3.cafe24.com/page/img/ochart.png">
	</p>
</div>

<div class="center wow fadeInUp" data-wow-delay="0.3s" style="margin-top:40px">
	<h2 style="font-size:20px;margin-bottom:20px;"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> 회사 현황</h2>
	<table>
		<colgroup span="3">
			<col width=15%>
			<col width=20%>
			<col width=65%>
		</colgroup>
		<tbody>
			<tr>
				<th rowspan="2">한국총판특판사업부</th>
				<th style="border-left:1px solid #ccc;border-right:1px solid #ccc">소재지</th>
				<td>경기도 수원시 영통구 삼성로320번길 35, 102동 703호(원천동, 아크로파크)</td>
			</tr>
			<tr>
				<th style="border-left:1px solid #ccc;border-right:1px solid #ccc">연락처</th>
				<td>대표전화 : <?php echo $config['cf_7']; ?> / 팩스 : 031-214-8864</td>
			</tr>
			<tr>
				<th rowspan="2">부산</br>전시장</th>
				<th style="border-left:1px solid #ccc;border-right:1px solid #ccc;">소재지</th>
				<td>부산광역시 해운대구 해운대로55</td>
			</tr>
			<tr>
				<th style="border-left:1px solid #ccc;border-right:1px solid #ccc;">연락처</th>
				<td>대표전화 : 051-524-8884 / 팩스 : 051-524-8885</td>
			</tr>
		</tbody>
	</table>
</div>
</div>

<?php
include_once('./_tail.php');
?>