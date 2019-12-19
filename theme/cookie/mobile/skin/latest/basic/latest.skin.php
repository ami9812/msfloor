<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="lt">
    <h2><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_title"><?php echo $bo_subject ?></a></h2>
    <ul style="margin-top:5px">
    <?php for ($i=0; $i<count($list); $i++) { ?>
        <li>
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            //echo $list[$i]['icon_reply']." ";
            echo "<a href=\"".$list[$i]['href']."\" class=\"lt_tit\">";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

                // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
                // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            //if ($list[$i]['icon_new']) echo " <span class=\"new_icon\">N</span>";
            //if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_hot']) echo " <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>";

            echo "</a>";

            ?>
            <!--<span class="lt_date"><?php //echo $list[$i]['datetime']; ?></span>-->
        </li>
    <?php } ?>
    <?php if (count($list) == 0) { //게시물이 없을 때 ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php } ?>
            <h2 style="margin-top:20px;">유선상담 
                <a href="tel:<?php echo $config['cf_7'] ?>" class="lt_title"><font size="5" color="#943c3c"><i class="fa fa-phone-square" aria-hidden="true" style="padding-left:20px"></i> <?php echo $config['cf_7'] ?></font></a></h2>
            <ul>
        <li class="customer" style="margin-top:-18px">
            <font color="#943c3c"><i class="fa fa-clock-o" aria-hidden="true"></i></font><span class="text"> 상담가능시간 평일</span><span class="num">10:00 ~ 17:00</span>
        </li>
        <li class="customer">
            <font color="#943c3c"><i class="fa fa-clock-o" aria-hidden="true"></i></font><span class="text"> 상담가능시간 점심시간</span><span class="num">12:00 ~ 13:00</span>
        </li>
    </ul>
    </ul>
</div>

