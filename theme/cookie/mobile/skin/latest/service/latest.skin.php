<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 310;
$thumb_height = 310;
?>

<div class="lt_service">
    <div style="text-align: center;padding-bottom: 3px;"><font size="5" color="#000"><b><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?></b></a></font></div>
    <?php
        if ($bo_table) {
        $board = sql_fetch(" select * from {$g5['board_table']} where bo_table = '$bo_table' ");
    }
    ?>    
    <div style="text-align: center;padding-bottom: 40px;"><font size="3" color="#999"><?php echo $board['bo_1'] ?></font>
    </div>

    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
    $file = get_file($bo_table, $list[$i]['wr_id']);
    if(preg_match("/\.({$config['cf_image_extension']})$/i", $file[0]['file'])) {
        $file_src = $file[0]['path'].'/'.$file[0]['file'];
    }
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_THEME_IMG_URL.'/noimage.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        <li class="progallery">
            <a href="<?php echo $file_src; ?>" class="lt_img"><?php echo $img_content; ?></a>
            <!--<div class="lt_txt_wr">
                <?php
                /*echo "<a href=\"".$list[$i]['href']."\" class=\"lt_tit\"><strong>";
                if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
                if ($list[$i]['is_notice'])
                    echo "<strong>".$list[$i]['subject']."</strong>";
                else
                    echo $list[$i]['subject'];

                echo "</strong></a>";*/

                ?>
                <div class="lt_detail"> <?php //echo get_text(cut_str(strip_tags($list[$i]['wr_content']), 100), 1); ?></div>
            </div>-->

        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript">
            window.jQuery2_2_4 = jQuery.noConflict(true);
        </script>
        <script type="text/javascript" src="<?php echo G5_URL; ?>/page/js/simple-lightbox.js"></script>

        <script>    
            (function($) { // function 하나에 기존 코드들을 모두 묶어줍니다.
                var jQuery = $; // $ 뿐만 아니라 jQuery도 사용할 수 있도록 해주기 위한 코드입니다.  

                $(function(){
                    var $pgallery = $('.progallery a').simpleLightbox();

                    $pgallery.on('show.simplelightbox', function(){
                        console.log('Requested for showing');
                    })
                        .on('shown.simplelightbox', function(){
                        console.log('Shown');
                    })
                        .on('close.simplelightbox', function(){
                        console.log('Requested for closing');
                    })
                        .on('closed.simplelightbox', function(){
                        console.log('Closed');
                    })
                        .on('change.simplelightbox', function(){
                        console.log('Requested for change');
                    })
                        .on('next.simplelightbox', function(){
                        console.log('Requested for next');
                    })
                        .on('prev.simplelightbox', function(){
                        console.log('Requested for prev');
                    })
                        .on('nextImageLoaded.simplelightbox', function(){
                        console.log('Next image loaded');
                    })
                        .on('prevImageLoaded.simplelightbox', function(){
                        console.log('Prev image loaded');
                    })
                        .on('changed.simplelightbox', function(){
                        console.log('Image changed');
                    })
                        .on('nextDone.simplelightbox', function(){
                        console.log('Image changed to next');
                    })
                        .on('prevDone.simplelightbox', function(){
                        console.log('Image changed to prev');
                    })
                        .on('error.simplelightbox', function(e){
                        console.log('No image found, go to the next/prev');
                        console.log(e);
                    });
                });
            }(jQuery2_2_4)); // function 하나에 기존 코드들을 모두 묶어줍니다.
        </script> 

</div>
