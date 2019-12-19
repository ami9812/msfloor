<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 400;
$thumb_height = 200;
?>

<div class="lt_team">
    <div style="text-align: center;padding-bottom: 3px;z-index:1;"><font size="5" color="#000"><b><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></b></a></font></div>
    <?php
    if ($bo_table) {
    $board = sql_fetch(" select * from {$g5['board_table']} where bo_table = '$bo_table' ");
}
    ?>
    <div style="text-align: center;padding-bottom: 40px;"><font size="3" color="#999"><?php echo $board['bo_1'] ?></font>
    </div>   
    <div class="bg"><span></span><span></span><span></span></div>
    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_THEME_IMG_URL.'/noimage.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <li class="team_li">
            <!--<a href="<?php //echo $list[$i]['href'] ?>"><div class="og_img"></div></a>-->
            <a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><img src="<?php echo G5_THEME_IMG_URL; ?>/bi.png" style="position:absolute; width:110px; margin:15px 20px;z-index:98;"><?php echo $img_content; ?></a>  
            <div class="lt_wr">
                <!--<i class="fa fa-user-md"></i>-->
                <a href="<?php echo $list[$i]['href'] ?>"  class="lt_tit"><?php echo get_text(cut_str(strip_tags($list[$i]['subject']), 22), ''); ?></a>
                <!--<div class="lt_detail"><?php //echo $list[$i]['wr_content'] ?> </div>-->
            </div>
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <!--<div class="lt_more"><a href="<?php //echo G5_BBS_URL ?>/board.php?bo_table=<?php //echo $bo_table ?>">더보기 <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>-->
</div>

<script type="text/javascript">
$(document).ready(function(){  
        $('.team_li').hover(                                   //마우스오버 때
            function(){
                $(this).find(".og_img").css("visibility","visible");
            },                   //  hover시
            function(){
                $(this).find(".og_img").css("visibility","hidden");
            }                  //  out 시
        );
});
</script>
