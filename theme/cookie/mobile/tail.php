<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


    <div class="ft_t">
            <div id="ft_company">
                <a href="<?php echo G5_URL; ?>/page/introduce.php">회사소개</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a>
                <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            </div>
    </div>
<div id="ft">
    <div class="ft_info" style="padding-bottom: 60px">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 3, 33);
        ?>
        <div id="ft_contact">
            <h2>온라인 문의</h2>
            <ul>
                <?php
                include_once(G5_PATH.'/customer1.php');
                ?>
            </ul>
        </div>
    </div>
    <div class="ft_wr">
        <div id="ft_copy" style="margin-bottom:20px">
<font color="gray">법인명 : </font><?php echo $config['cf_3'] ?>  <font color="gray">　주소 :</font> <?php echo $config['cf_4'] ?>  <font color="gray">　사업자등록번호 : </font><?php echo $config['cf_5'] ?>   <font color="gray">　대표자 : </font><?php echo $config['cf_6'] ?>  </br><font color="gray">대표전화 :</font> <?php echo $config['cf_7'] ?>  <font color="gray">　팩스 : </font><?php echo $config['cf_8'] ?>  <font color="gray">　이메일 : </font><?php echo $config['cf_9'] ?>  </br></br> Copyright &copy; <a href="<?php echo G5_BBS_URL; ?>/login.php"><b><?php echo $config['cf_3'] ?></b></a> All rights reserved.
        </div>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>

<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
 
        if ($('#top_btn').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#top_btn').addClass('show');
                    } else {
                        $('#top_btn').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#top_btn').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>