<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$img_w = 300; // 이미지($img) 가로 크기
$img_h = 300; // 이미지($img) 세로 크기
?>

<div class="full-length">
	<div class="container">
		<ul>
		<?php
			for($i=0; $i<count($list); $i++){
				$thumbs = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $img_w, $img_h, false, false);
			if($thumbs['src']) {
				$img = $thumbs['src'];
			}?>	
			<li>
				<div class="port-1 effect-3">
					<div class="image-box">
						<img src="<?php echo $img?>" alt="<?php echo $list[$i]['subject']?>">
					</div>
					<div class="text-desc">
						<h3><?php echo mb_strimwidth($list[$i]['subject'], '0', '15', '', 'utf-8');?></h3>
						<p><?php echo mb_strimwidth($list[$i]['wr_content'], '0', '175', '', 'utf-8');?></p>
						<a href="<?php echo $list[$i]['href'];?>" class="btn1">Read More</a>
					</div>
				</div>
			</li>
		<?}?>
		</ul>
	</div>
</div>
