<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if(defined('G5_THEME_PATH')) {
//     require_once(G5_THEME_PATH.'/index.php');
//     return;
// }
//
// if (G5_IS_MOBILE) {
//     include_once(G5_MOBILE_PATH.'/index.php');
//     return;
// }

include_once(G5_PATH.'/head.php');
?>

<style>

html {
  scroll-behavior: smooth;
}

body {
    background-color: #fff;
}

h1, h2, h3, h4, h5, h6 {
    font-size: inherit;
    font-family: 'Hind', 'Noto Sans KR', sans-serif;
}


.menu_bar {
  position: fixed;
  top: 0;
  left: 0;
  width: 180px;
  height: 100%;
  border-right: 1px solid #ddd;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0 30px;
  box-sizing: border-box;
  font-family: 'Hind', sans-serif;
  z-index: 2;
  display: none;
}

.menu_bar_center {
}

.menu {
  padding: 2px 0;
  font-size: 1.2em;
  letter-spacing: 0.1px;
}

.menu a {
  color: #999;
}

.menu a.active {
  color: #333;
}

.hr {
  width: 62px;
  height: 4px;
  background-color: #000;
}

.main-section-wrap {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  padding-top: 80px;
  padding-right: 17px;
  padding-left: 15px;
  box-sizing: content-box;
  display: block;
  overflow-y: scroll;
  z-index: 1;
}

.main-section-wrap .logo {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 80px;
  background-color: #fff;
  z-index: 3;

}

.main-section-wrap .logo .logo_wrap {
    margin: auto;
    text-align: center;
    width: 180px;
    height: 80px;
    padding-top: 9px;
    z-index: 3;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}

.main-section-wrap .logo h3 {
  font-family: 'Comforter Brush', cursive;
  font-size: 4em;
}

.main-section-wrap .logo div {

}
.main-section {
  /*default max-width: 940px, but div inside in this section, margin-right value is 20px. so i put each 10px of margin both side of section*/
  padding-right: 20px;
  padding-bottom: 100px;
}

.main-section::after {
  content: '';
  display: block;
  clear: both;
}

/* .showing {
  display: block!important;
} */

@media screen and (min-width: 768px) {
  .main-section-wrap {
    padding-left: 80px;
    width: calc(100% - 80px);
  }

  .main-section {
    padding-right: 80px;
  }
}
@media screen and (min-width: 1024px) {
  .main-section-wrap {
    padding-left: 120px;
    width: calc(100% - 120px);
  }

  .main-section {
    padding-right: 120px;
  }
}
@media screen and (min-width: 1200px) {
  .menu_bar {
    display: flex;
  }
  .main-section {
    width: 100%;
    padding-right: 83px;
    /*padding-right added 17px for parent div because of the scroll so that removed as much as we added. 83px -> 100px - 17px*/
  }
  .main-section-wrap {
    position: fixed;
    left: 180px;
    top: 0;
    width: calc(70% - 190px);
    padding-top: 120px;
    padding-left: 100px;
  }
  .main-section-wrap .logo .logo_wrap {
      margin: initial;
    }
    .main-section-wrap .logo, .main-section-wrap .logo .logo_wrap {
      height: 120px;
    }
}

</style>

<div class="menu_bar">
  <div class="menu_bar_center">
    <h6 class="menu">
      <a href="#publishing" class="active">
        퍼블리싱
      </a>
    </h6>
    <div class="hr">
    </div>
    <h6 class="menu">
      <a href="#design">
        디자인
      </a>
    </h6>
  </div>
</div>


<section class="main-section-wrap">
  <div class="logo">
    <div class="logo_wrap">
      <h3>So.</h3>
    </div>
  </div>
  <div class="main-section">
    <?php echo latest("pic_block","publishing" ,12 ,15);?>
    <?php #echo latest("pic_slide","design");?>
    <?php #echo latest("pic_block","class" ,12 ,15);?>
  </div>
</section>

<!-- <footer>

</footer> -->
<script type="text/javascript">
<?php include_once('./js/light_box.js')?>
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>
