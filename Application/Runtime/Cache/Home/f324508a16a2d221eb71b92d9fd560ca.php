<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>择医网(挂号网)-互联网医院在线诊疗平台</title>
    <meta name="keywords" content="挂号网,择医网,互联网医院,预约挂号,网上预约,网上挂号,网上预约挂号,在线问诊,在线咨询,健康资讯,医院挂号,医院预约,专家门诊" />
    <meta name="description" content="择医网,互联网医院国家试点平台,聚合了全国重点医院,学科带头人,副主任以上的医师,提供预约挂号,在线诊疗,电子处方,在线配药全方位服务。找大专家,上择医网。" />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="/m">
    <meta name="mobile-agent" content="format=html5; url=/m">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <link rel="shortcut icon" href="/Public/home/favicon.ico" />
    <link rel="stylesheet" href="/Public/home/css/portal.base.min.css?v=1535436384237752" type="text/css" />
    <!--[if IE 6]>
		<link rel="stylesheet" type="text/css" media="screen" href="/Public/home/css/ie6.css?v=1535436384237752"/>
		<![endif]-->
    <!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="screen" href="/Public/home/css/ie7.css?v=1535436384237752"/>
		<![endif]-->
    <!--[if IE 8]>
		<link rel="stylesheet" type="text/css" media="screen" href="/Public/home/css/ie8.css?v=1535436384237752"/>
		<![endif]-->

    <script type="text/javascript">
        $GF = [];
        GreenLine = {};
        //打点日志全局变量
        GreenLine.Log = {

            }
            // 老的埋点，后面统一删除HTML上的埋点
        function _smartlog(link, mod) {
            return true;
        };
        // 老的浏览器兼容H5标签
        (function() {
            if (/MSIE [6-8]/.test(navigator.userAgent.toUpperCase())) {
                var tags = "header,footer,section,article,aside,details,summary,figure,figcaption,nav,menu".split(",");
                document.write("<style>" + tags.toString() + "{display:block}</style>");
                for (var i = 0; i < tags.length; document.createElement(tags[i]), i++);
            }
        })();
        // 图片加载失败,error设置默认图片也加载失败避免死循环
        window.NoFind = function(src) {
            var img = event.srcElement;
            img.src = src;
            img.onerror = null;
        };
    </script>
    <link rel="stylesheet" href="/Public/home/css/index.css?v=1535436384237752" type="text/css" />
    <meta name="shenma-site-verification" content="9bfa5c53d29a8d687154a0d8dbe23383_1542098342">
</head>

<body>





    <div id="g-wrapper" class="g-wrapper g-page-1200 landing-wrapper">
        <div id="gh">
            <!--[if lt IE 8]>
<div class="g-browser-update">你的浏览器实在太旧了，为了更加安全和方便地进行挂号，推荐您升级浏览器：<a target="_blank" href="http://browsehappy.com">立即升级</a></div>
<![endif]-->
           <div class="gh-nav">
    <div class="container g-clear">
        <div class="g-left">
            <?php if(!session('home_user_info')): ?><span class="text">您好！ 请</span>
                <span class="login"></span>
                <a href="<?php echo U('home/index/login');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,login">登录</a>
                <span class="line">|</span>
                <a target="_blank" href="<?php echo U('home/index/register');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,signin">注册</a>
                <a href="<?php echo U('home/index/doctorlogin');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" class="doctor-login" monitor="public_head,publick_head,doctoruser"><i style="right:6px"><img src="/Public/home/doctor-login.png"></i>我是医生</a>
            <?php else: ?>

                     <span class="text">您好
                         <?php echo session('home_user_info.mobile');?>
                          </span> 
                     <a href="<?php echo U('home/index/orderlist');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,mycenter">个人中心</a>
                       
                    <span class="line">|</span>
                    <a href="https://www.guahao.com/my/orderlist" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,order">预约单</a> 
                    <span class="line">|</span>
                    <a href="https://www.guahao.com/my/favorite/list" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,myfollow">我的关注</a> 
                    <span class="line">|</span> 
                    <a href="<?php echo U('/home/index/logout');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,logout">退出</a><?php endif; ?>
        </div>
        
        
          <div class="g-right">
                <a href="https://www.guahao.com/intro/userapp" rel="nofollow" class="dl-guide J_SeoGuide" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,appdload">
                    下载APP
                    <span>
                        <img src="https://static.guahao.cn/front/portal-pc-static/img/index-appQRcode.png?v=20170505" alt="">
                    </span>
                </a>
                <span class="line">|</span>


            <a href="https://www.guahao.com/fastcancel/index" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,ordercancel">快速取消订单</a>
            <span class="line">|</span>
            <a href="https://www.guahao.com/help/common" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" id="helpCenter" target="_blank" monitor="public_head,publick_head,cscenter">客服中心</a>
            <span class="line">|</span>
            <a href="http://www.wedoctor.com" rel="nofollow" onmousedown="return _smartlog(this,'TOP')">微医云</a>
            <span class="line">|</span>
            <a href="http://www.jiankx.com" rel="nofollow" onmousedown="return _smartlog(this,'TOP')">微医保</a>
        </div>
      </div> 
  </div>
            <div class="gh-main">
                <div class="container g-clear">
                    <div class="gh-logo ">
                        <!-- <a href="/"  onmousedown="" monitor="public_logo,publick_logo,headlogo"></a> -->

                        <img class="logolist "  style="background-size: cover;width: 190px;height: 89px;display: inline-block;" src="/Public/home/images/logolist.png" alt="择医网" class="wy-logo">
                    </div>




                    <div class="gh-search gh-web-search gh-search-left ">
                        <form class="gh-search-form" action="" name="qform">
                            <span class="gh-search-input">
				<span class="search-icon"></span>
                            <input type="text" name="q" value="" autocomplete="off" maxlength="50" class="J_SearchQ" placeholder="请输入疾病名、科室名、医院名或医生名" />
                            <input type="hidden" name="searchType" value="search" class="J_SearchType">
                            </span>
                            <a class="gbn gbt-green2 radius-right big-search-bt" href="javascript:void(0);">搜索</a>
                            <div class="clear"></div>
                        </form>
                        <div class="search-key">

                            <a monitor="public_search,public_search,searchhot" monitor-search-q="防治冠心病" monitor-click-rank="0" href="" target="_blank" class=" J_SearchHot">
						 	防治冠心病
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="高血压病" monitor-click-rank="1" href="/s.html?q=%E9%AB%98%E8%A1%80%E5%8E%8B%E7%97%85" class=" J_SearchHot">
						 	高血压病
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="流感" monitor-click-rank="2" href="/s.html?q=%E6%B5%81%E6%84%9F" class=" J_SearchHot">
						 	流感
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="心肌梗塞" monitor-click-rank="3" href="/s.html?q=%E5%BF%83%E8%82%8C%E6%A2%97%E5%A1%9E" class=" J_SearchHot">
						 	心肌梗塞
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="骨折" monitor-click-rank="4" href="/s.html?q=%E9%AA%A8%E6%8A%98" class=" J_SearchHot">
						 	骨折
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="心肌炎" monitor-click-rank="5" href="/s.html?q=%E5%BF%83%E8%82%8C%E7%82%8E" class=" J_SearchHot">
						 	心肌炎
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="结膜炎" monitor-click-rank="6" href="/s.html?q=%E7%BB%93%E8%86%9C%E7%82%8E" class=" J_SearchHot">
						 	结膜炎
	    				</a>
                            <a monitor="public_search,public_search,searchhot" monitor-search-q="支气管炎" monitor-click-rank="7" href="/s.html?q=%E6%94%AF%E6%B0%94%E7%AE%A1%E7%82%8E" class=" J_SearchHot">
						 	支气管炎
	    				</a>


                        </div>
                    </div>
                    <span class="gh-search-tips"></span>
                </div>
            </div>
            <div class="gh-home-menu J_NewMenu">

                <div class="container g-clear  ">
                    <div class="home-menu-ctn">
                        <ul class="g-clear main-menu-nav">
                            <li class="hot">
                                <a class="own-tab" target="_blank" href="<?php echo U('home/index/hospital');?>" monitor="public_menu,home_menu,ask">在线问诊</a>
                            </li>
                            <li><a target="_blank" href="<?php echo U('home/index/fastorder');?>" rel="nofollow" onmousedown="return _smartlog(this,'MNU')" monitor="public_menu,home_menu,fastpoder">预约挂号</a></li>
                            <li><a target="_blank" target="_blank" href="ask.html" rel="nofollow" onmousedown="return _smartlog(this,'MNU')" monitor="public_menu,home_menu,preciseorder">免费咨询</a></li>
                            <li class="authority"><a class="own-tab" target="_blank" target="_blank" href="https://baike.h.gov.cn/" rel="nofollow">互联网医学百科</a></li>
                            <li data-subnav="sub-nav-welife"><a target="_blank" rel="nofollow" onmousedown="return _smartlog(this,'MNU')">
					择医网健康</a>
                            </li>
                            <li><a target="_blank" href="eteam.html" onmousedown="return _smartlog(this,'MNU')" monitor="public_menu,home_menu,spteam">专家团队</a></li>
                            <li><a target="_blank" href="#" rel="nofollow" onmousedown="return _smartlog(this,'MNU')">健康E务室</a></li>

                        </ul>
                        <div class="main-category-nav J_DiseaseCategory">
                            <h3><i></i>帮你快速找医生</h3>
                            <div class="nav-cats-wrapper J_FastCategory" style="display:block">
                                <ul>
                                    <li data-id="1">
                                        <h5 class="title"><i class="nk"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">内科</a></h5>
                                        <span class="sub-ds">
		<a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B3%96%E5%B0%BF%E7%97%85" class="first" monitor="public_fastselect,div,hotsick">糖尿病</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AB%98%E8%A1%80%E5%8E%8B" monitor="public_fastselect,div,hotsick">高血压</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%86%A0%E5%BF%83%E7%97%85" monitor="public_fastselect,div,hotsick">冠心病</a>
		</span>
                                    </li>
                                    <li data-id="2">
                                        <h5 class="title"><i class="wk"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">外科</a></h5>
                                        <span class="sub-ds">
		<a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E7%99%8C" class="first" monitor="public_fastselect,div,hotsick">乳腺癌</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%A1%80%E7%AE%A1%E7%98%A4" monitor="public_fastselect,div,hotsick">血管瘤</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%9D%E7%99%8C" monitor="public_fastselect,div,hotsick">肝癌</a>
		</span>
                                    </li>
                                    <li data-id="3">
                                        <h5 class="title"><i class="fck"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">妇产科</a></h5>
                                        <span class="sub-ds">
		<a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B8%8D%E5%AD%95" class="first" monitor="public_fastselect,div,hotsick">不孕</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%98%B4%E9%81%93%E7%82%8E" monitor="public_fastselect,div,hotsick">阴道炎</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8D%B5%E5%B7%A2%E5%9B%8A%E8%82%BF" monitor="public_fastselect,div,hotsick">卵巢囊肿</a>
		</span>
                                    </li>
                                    <li data-id="4">
                                        <h5 class="title"><i class="pfk"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">皮肤性病科</a></h5>
                                        <span class="sub-ds">
		<a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%BD%E7%99%9C%E9%A3%8E" class="first" monitor="public_fastselect,div,hotsick">白癜风</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%B9%BF%E7%96%B9" monitor="public_fastselect,div,hotsick">湿疹</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%93%B6%E5%B1%91%E7%97%85" monitor="public_fastselect,div,hotsick">银屑病</a>
		</span>
                                    </li>
                                    <li data-id="5">
                                        <h5 class="title"><i class="gk"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">骨科</a></h5>
                                        <span class="sub-ds"><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A2%88%E6%A4%8E%E7%97%85" class="first" monitor="public_fastselect,div,hotsick">颈椎病</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%B0%E6%A4%8E%E9%97%B4%E7%9B%98%E7%AA%81%E5%87%BA%E7%97%87" monitor="public_fastselect,div,hotsick">腰椎间盘突出症</a>
		</span>
                                    </li>
                                    <li data-id="6">
                                        <h5 class="title"><i class="wgk"></i><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="">耳鼻咽喉科</a></h5>
                                        <span class="sub-ds">
		<a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=鼻咽癌" class="first" monitor="public_fastselect,div,hotsick">鼻咽癌</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E7%82%8E" monitor="public_fastselect,div,hotsick">鼻炎</a><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%BD%E5%86%85%E9%9A%9C" monitor="public_fastselect,div,hotsick">白内障</a>
		</span>
                                    </li>
                                    <li class="other" data-id="8">
                                        <h5 class="title"><i class="qt"></i>其它科室</h5>
                                    </li>
                                </ul>
                            </div>
                            <div class="nav-subcats-wrapper">
                                <div class="subcats-item J_FastSubCategory" data-id="1">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%86%85%E7%A7%91">内科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E4%BA%A2" monitor="public_fastsearch,div,sick">甲亢</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%99%E8%82%9D" class="focus" monitor="public_fastsearch,div,sick">乙肝</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%83%E7%82%8E" monitor="public_fastsearch,div,sick">胃炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AB%98%E8%A1%80%E8%84%82" class="focus" monitor="public_fastsearch,div,sick">高血脂</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%91%E6%A2%97%E5%A1%9E" monitor="public_fastsearch,div,sick">脑梗塞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BC%BA%E7%9B%B4%E6%80%A7%E8%84%8A%E6%9F%B1%E7%82%8E" monitor="public_fastsearch,div,sick">强直性脊柱炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%AB%E7%97%AB" monitor="public_fastsearch,div,sick">癫痫</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%97%9B%E9%A3%8E" monitor="public_fastsearch,div,sick">痛风</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%93%AE%E5%96%98" monitor="public_fastsearch,div,sick">哮喘</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BA%E7%BB%93%E6%A0%B8" monitor="public_fastsearch,div,sick">肺结核</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%83%E6%BA%83%E7%96%A1" class="focus" monitor="public_fastsearch,div,sick">胃溃疡</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%85%8B%E7%BD%97%E6%81%A9%E7%97%85" class="focus" monitor="public_fastsearch,div,sick">克罗恩病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%9D%E7%A1%AC%E5%8C%96" class="last" monitor="public_fastsearch,div,sick">肝硬化</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A5%9E%E7%BB%8F%E5%86%85%E7%A7%91">神经内科常见病</a></h5>
                                                <p><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%91%E6%A2%97%E5%A1%9E" class="focus" monitor="public_fastsearch,div,sick">脑梗塞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%AB%E7%97%AB" monitor="public_fastsearch,div,sick">癫痫</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%9D%A2%E7%98%AB" monitor="public_fastsearch,div,sick">面瘫</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B8%89%E5%8F%89%E7%A5%9E%E7%BB%8F%E7%97%9B" monitor="public_fastsearch,div,sick">三叉神经痛</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%80%81%E5%B9%B4%E7%97%B4%E5%91%86" class="focus" monitor="public_fastsearch,div,sick">老年痴呆</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%91%E8%A1%80%E6%A0%93%E5%BD%A2%E6%88%90" monitor="public_fastsearch,div,sick">脑血栓形成</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B8%95%E9%87%91%E6%A3%AE%E7%97%85" class="focus" monitor="public_fastsearch,div,sick">帕金森病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%91%E4%BE%9B%E8%A1%80%E4%B8%8D%E8%B6%B3" monitor="public_fastsearch,div,sick">脑供血不足</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%B1%E7%9C%A0" class="focus" monitor="public_fastsearch,div,sick">失眠</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%9D%A2%E8%82%8C%E6%8A%BD%E6%90%90" monitor="public_fastsearch,div,sick">面肌抽搐</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%87%8D%E7%97%87%E8%82%8C%E6%97%A0%E5%8A%9B" class="last" monitor="public_fastsearch,div,sick">重症肌无力</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%86%85%E5%88%86%E6%B3%8C%E7%A7%91">内分泌科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E4%BA%A2" class="focus" monitor="public_fastsearch,div,sick">甲亢</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AB%98%E5%B0%BF%E9%85%B8%E8%A1%80%E7%97%87" monitor="public_fastsearch,div,sick">高尿酸血症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%97%9B%E9%A3%8E" class="focus" monitor="public_fastsearch,div,sick">痛风</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E7%82%8E" monitor="public_fastsearch,div,sick">甲状腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B3%96%E5%B0%BF%E7%97%85%E8%B6%B3" monitor="public_fastsearch,div,sick">糖尿病足</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A5%E8%83%96%E7%97%87" class="focus" monitor="public_fastsearch,div,sick">肥胖症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%BD%8E%E8%A1%80%E7%B3%96" monitor="public_fastsearch,div,sick">低血糖</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E5%87%8F" monitor="public_fastsearch,div,sick">甲减</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%ba%9a%e7%94%b2%e7%82%8e" monitor="public_fastsearch,div,sick">亚甲炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%94%b2%e7%8a%b6%e8%85%ba%e7%98%a4" monitor="public_fastsearch,div,sick">甲状腺瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%be%8f%e5%84%92%e7%97%87" monitor="public_fastsearch,div,sick">侏儒症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b9%a0%e6%83%af%e6%80%a7%e6%b5%81%e4%ba%a7" class="last" monitor="public_fastsearch,div,sick">习惯性流产</a>
                                                </p>
                                            </li>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A3%8E%E6%B9%BF%E5%85%8D%E7%96%AB%E7%A7%91">风湿免疫科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BC%BA%E7%9B%B4%E6%80%A7%E8%84%8A%E6%9F%B1%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">强直性脊柱炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A3%8E%E6%B9%BF%E7%97%85" monitor="public_fastsearch,div,sick">风湿病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B1%BB%E9%A3%8E%E6%B9%BF%E6%80%A7%E5%85%B3%E8%8A%82%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">类风湿性关节炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B9%B2%E7%87%A5%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">干燥综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%89%B9%E5%8F%91%E6%80%A7%E5%85%B3%E8%8A%82%E7%97%9B%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">特发性关节痛综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A1%AC%E7%9A%AE%E7%97%85" monitor="public_fastsearch,div,sick">硬皮病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B3%BB%E7%BB%9F%E6%80%A7%E7%BA%A2%E6%96%91%E7%8B%BC%E7%96%AE" class="focus" monitor="public_fastsearch,div,sick">系统性红斑狼疮</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%BD%E5%A1%9E%E7%97%85" class="last" monitor="public_fastsearch,div,sick">白塞病</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E8%A1%80%E7%AE%A1%E5%86%85%E7%A7%91">心血管内科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%8a%a8%e8%84%89%e7%a1%ac%e5%8c%96" monitor="public_fastsearch,div,sick">动脉硬化</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bf%83%e7%bb%9e%e7%97%9b" monitor="public_fastsearch,div,sick">心绞痛</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%aa%a6%e6%80%a7%e5%bf%83%e5%8a%a8%e8%bf%87%e9%80%9f" monitor="public_fastsearch,div,sick">窦性心动过速</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%bd%8e%e9%92%be%e8%a1%80%e7%97%87" monitor="public_fastsearch,div,sick">低钾血症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e5%8a%a8%e8%84%89%e9%ab%98%e5%8e%8b" monitor="public_fastsearch,div,sick">肺动脉高压</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e6%a0%93%e5%a1%9e" monitor="public_fastsearch,div,sick">肺栓塞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bf%83%e8%84%8f%e7%a5%9e%e7%bb%8f%e5%ae%98%e8%83%bd%e7%97%87" monitor="public_fastsearch,div,sick">心脏神经官能症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bf%83%e8%82%8c%e6%a2%97%e6%ad%bb" class="last" monitor="public_fastsearch,div,sick">心肌梗死</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%91%BC%E5%90%B8%E5%86%85%E7%A7%91">呼吸内科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%bf%87%e6%95%8f%e6%80%a7%e5%92%b3%e5%97%bd" monitor="public_fastsearch,div,sick">过敏性咳嗽</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b0%94%e8%83%b8" monitor="public_fastsearch,div,sick">气胸</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b5%81%e6%84%9f" monitor="public_fastsearch,div,sick">流感</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%94%af%e6%b0%94%e7%ae%a1%e6%89%a9%e5%bc%a0" monitor="public_fastsearch,div,sick">支气管扩张</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%b8%e8%85%94%e7%a7%af%e6%b6%b2" monitor="public_fastsearch,div,sick">胸腔积液</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e6%94%af%e6%b0%94%e7%ae%a1%e7%82%8e" monitor="public_fastsearch,div,sick">慢性支气管炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%94%af%e6%b0%94%e7%ae%a1%e5%93%ae%e5%96%98" monitor="public_fastsearch,div,sick">支气管哮喘</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%bf%87%e6%95%8f%e6%80%a7%e5%93%ae%e5%96%98" monitor="public_fastsearch,div,sick">过敏性哮喘</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%80%a5%e6%80%a7%e6%94%af%e6%b0%94%e7%ae%a1%e7%82%8e" class="last" monitor="public_fastsearch,div,sick">急性支气管炎</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%84%9F%E6%9F%93%E7%A7%91">感染科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%8b%82%e7%8a%ac%e7%97%85" monitor="public_fastsearch,div,sick">狂犬病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b8%b9%e6%af%92" monitor="public_fastsearch,div,sick">丹毒</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%b8%e8%86%9c%e7%82%8e" monitor="public_fastsearch,div,sick">胸膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%ba%bb%e7%96%b9" monitor="public_fastsearch,div,sick">麻疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e7%bb%93%e8%82%a0%e7%82%8e" monitor="public_fastsearch,div,sick">慢性结肠炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%a1%ac%e4%b8%8b%e7%96%b3" monitor="public_fastsearch,div,sick">硬下疳</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%bc%a4%e5%af%92" monitor="public_fastsearch,div,sick">伤寒</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%94%b2%e8%82%9d" monitor="public_fastsearch,div,sick">甲肝</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%8f%e5%84%bf%e9%ba%bb%e7%97%b9%e7%97%87" monitor="public_fastsearch,div,sick">小儿麻痹症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=H7N9" monitor="public_fastsearch,div,sick">H7N9</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%99%bd%e5%96%89" monitor="public_fastsearch,div,sick">白喉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b0%94%e6%80%a7%e5%9d%8f%e7%96%bd" class="last" monitor="public_fastsearch,div,sick">气性坏疽</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%B6%88%E5%8C%96%E5%86%85%E7%A7%91">消化内科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%82%e8%82%aa%e8%82%9d" monitor="public_fastsearch,div,sick">脂肪肝</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%be%bf%e7%a7%98" monitor="public_fastsearch,div,sick">便秘</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%a0%e7%82%8e" monitor="public_fastsearch,div,sick">肠炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%bb%93%e8%82%a0%e7%82%8e" monitor="public_fastsearch,div,sick">结肠炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%9a%95%e8%b1%86%e7%97%85" monitor="public_fastsearch,div,sick">蚕豆病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%8d%81%e4%ba%8c%e6%8c%87%e8%82%a0%e6%ba%83%e7%96%a1" monitor="public_fastsearch,div,sick">十二指肠溃疡</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%8f%8d%e6%b5%81%e6%80%a7%e9%a3%9f%e7%ae%a1%e7%82%8e" monitor="public_fastsearch,div,sick">反流性食管炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%90%8e%e7%bc%a9%e6%80%a7%e8%83%83%e7%82%8e" monitor="public_fastsearch,div,sick">萎缩性胃炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%ba%83%e7%96%a1%e6%80%a7%e7%bb%93%e8%82%a0%e7%82%8e" monitor="public_fastsearch,div,sick">溃疡性结肠炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%97%a2%e7%96%be" monitor="public_fastsearch,div,sick">痢疾</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e8%82%a0%e7%82%8e" class="last" monitor="public_fastsearch,div,sick">慢性肠炎</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="subcats-item J_FastSubCategory" data-id="2">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%96%E7%A7%91">外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%89%8D%E5%88%97%E8%85%BA%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">前列腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BA%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">肺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%97%94%E7%96%AE" monitor="public_fastsearch,div,sick">痔疮</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E8%85%BA%E7%98%A4" monitor="public_fastsearch,div,sick">甲状腺腺瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9B%B4%E8%82%A0%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">直肠癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BE%E7%BB%93%E7%9F%B3" monitor="public_fastsearch,div,sick">肾结石</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%BB%93%E8%82%A0%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">结肠癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%86%E5%9B%8A%E7%BB%93%E7%9F%B3" monitor="public_fastsearch,div,sick">胆囊结石</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%83%E7%99%8C" monitor="public_fastsearch,div,sick">胃癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A3%9F%E7%AE%A1%E7%99%8C" monitor="public_fastsearch,div,sick">食管癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%86%E5%9B%8A%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">胆囊癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%9D%E8%A1%80%E7%AE%A1%E7%98%A4" class="last" monitor="public_fastsearch,div,sick">肝血管瘤</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%B3%8C%E5%B0%BF%E5%A4%96%E7%A7%91">泌尿外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%89%8D%E5%88%97%E8%85%BA%E7%82%8E" monitor="public_fastsearch,div,sick">前列腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%97%A9%E6%B3%84" monitor="public_fastsearch,div,sick">早泄</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BE%E7%BB%93%E7%9F%B3" class="focus" monitor="public_fastsearch,div,sick">肾结石</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8C%85%E7%9A%AE%E8%BF%87%E9%95%BF" monitor="public_fastsearch,div,sick">包皮过长</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%80%A7%E5%8A%9F%E8%83%BD%E9%9A%9C%E7%A2%8D" monitor="public_fastsearch,div,sick">性功能障碍</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B7%E6%80%A7%E4%B8%8D%E8%82%B2%E7%97%87" monitor="public_fastsearch,div,sick">男性不育症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%BF%E8%B7%AF%E6%84%9F%E6%9F%93" class="focus" monitor="public_fastsearch,div,sick">尿路感染</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%89%8D%E5%88%97%E8%85%BA%E5%A2%9E%E7%94%9F" class="focus" monitor="public_fastsearch,div,sick">前列腺增生</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%89%8D%E5%88%97%E8%85%BA%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">前列腺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BE%E7%A7%AF%E6%B0%B4" class="last" monitor="public_fastsearch,div,sick">肾积水</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E5%A4%96%E7%A7%91">乳腺外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E5%A2%9E%E7%94%9F" class="focus" monitor="public_fastsearch,div,sick">乳腺增生</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E7%BA%A4%E7%BB%B4%E8%85%BA%E7%98%A4" monitor="public_fastsearch,div,sick">乳腺纤维腺瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E8%85%BA%E7%97%85" monitor="public_fastsearch,div,sick">乳腺腺病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%80%A5%E6%80%A7%E4%B9%B3%E8%85%BA%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">急性乳腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%9A%E4%B9%B3%E6%88%BF" monitor="public_fastsearch,div,sick">多乳房</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B9%B3%E8%85%BA%E5%AF%BC%E7%AE%A1%E6%89%A9%E5%BC%A0%E7%97%87" monitor="public_fastsearch,div,sick">乳腺导管扩张症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b9%b3%e8%85%ba%e7%ba%a4%e7%bb%b4%e7%98%a4" class="focus" monitor="public_fastsearch,div,sick">乳腺纤维瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b9%b3%e5%a4%b4%e5%86%85%e9%99%b7" class="focus" monitor="public_fastsearch,div,sick">乳头内陷</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b9%b3%e6%88%bf%e7%ba%a4%e7%bb%b4%e7%98%a4" class="last" monitor="public_fastsearch,div,sick">乳房纤维瘤</a>
                                                </p>
                                            </li>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%99%AE%E5%A4%96%E7%A7%91">普外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%83%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">胃癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E8%85%BA%E7%98%A4" monitor="public_fastsearch,div,sick">甲状腺腺瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%B0%E8%85%BA%E7%82%8E" monitor="public_fastsearch,div,sick">胰腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">甲状腺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%96%9D%E6%B0%94" monitor="public_fastsearch,div,sick">疝气</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%B0%E8%85%BA%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">胰腺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%82%E8%82%AA%E7%98%A4" monitor="public_fastsearch,div,sick">脂肪瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E7%BB%93%E8%8A%82%E6%A0%B7%E7%97%85%E5%8F%98" monitor="public_fastsearch,div,sick">甲状腺结节样病变</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%98%91%E5%B0%BE%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">阑尾炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%B0%E8%85%BA%E5%9B%8A%E8%82%BF" monitor="public_fastsearch,div,sick">胰腺囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%BE%E5%A4%A7" class="last" monitor="public_fastsearch,div,sick">脾大</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A5%9E%E7%BB%8F%E5%A4%96%E7%A7%91">神经外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e8%a1%80%e6%a0%93" monitor="public_fastsearch,div,sick">脑血栓</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%b6%e8%b4%a8%e7%98%a4" monitor="public_fastsearch,div,sick">胶质瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%9e%82%e4%bd%93%e7%98%a4" monitor="public_fastsearch,div,sick">垂体瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e5%9e%82%e4%bd%93%e7%98%a4" monitor="public_fastsearch,div,sick">脑垂体瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e8%86%9c%e7%98%a4" monitor="public_fastsearch,div,sick">脑膜瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e9%9c%87%e8%8d%a1" monitor="public_fastsearch,div,sick">脑震荡</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e5%8a%a8%e8%84%89%e7%98%a4" monitor="public_fastsearch,div,sick">脑动脉瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%83%9f%e9%9b%be%e7%97%85" monitor="public_fastsearch,div,sick">烟雾病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%91%e7%96%9d" monitor="public_fastsearch,div,sick">脑疝</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%a4%8d%e7%89%a9%e4%ba%ba" monitor="public_fastsearch,div,sick">植物人</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%8a%e9%ab%93%e6%8d%9f%e4%bc%a4" monitor="public_fastsearch,div,sick">脊髓损伤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%98%ab%e7%97%aa" class="last" monitor="public_fastsearch,div,sick">瘫痪</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%9D%E8%83%86%E5%A4%96%E7%A7%91">肝胆外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%86%e5%9b%8a%e7%82%8e" monitor="public_fastsearch,div,sick">胆囊炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9d%e5%9b%8a%e8%82%bf" monitor="public_fastsearch,div,sick">肝囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9d%e8%85%b9%e6%b0%b4" monitor="public_fastsearch,div,sick">肝腹水</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%86%e7%ae%a1%e7%bb%93%e7%9f%b3" monitor="public_fastsearch,div,sick">胆管结石</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b5%b7%e7%bb%b5%e7%8a%b6%e8%a1%80%e7%ae%a1%e7%98%a4" monitor="public_fastsearch,div,sick">海绵状血管瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%80%a5%e6%80%a7%e8%83%86%e5%9b%8a%e7%82%8e" monitor="public_fastsearch,div,sick">急性胆囊炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%85%b9%e8%86%9c%e7%99%8c" monitor="public_fastsearch,div,sick">腹膜癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%85%88%e5%a4%a9%e6%80%a7%e5%b7%a8%e7%bb%93%e8%82%a0" monitor="public_fastsearch,div,sick">先天性巨结肠</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e8%83%b0%e8%85%ba%e7%82%8e" monitor="public_fastsearch,div,sick">慢性胰腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9d%e8%84%93%e8%82%bf" class="last" monitor="public_fastsearch,div,sick">肝脓肿</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%B8%E5%A4%96%E7%A7%91">胸外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%b8%a1%e8%83%b8" monitor="public_fastsearch,div,sick">鸡胸</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e7%bb%93%e8%8a%82" monitor="public_fastsearch,div,sick">肺结节</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e5%a4%a7%e6%b3%a1" monitor="public_fastsearch,div,sick">肺大泡</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%b8%e8%85%ba%e7%98%a4" monitor="public_fastsearch,div,sick">胸腺瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b3%95%e6%b4%9b%e5%9b%9b%e8%81%94%e7%97%87" monitor="public_fastsearch,div,sick">法洛四联症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e7%a9%ba%e6%b4%9e" monitor="public_fastsearch,div,sick">肺空洞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%ba%b5%e8%86%88%e8%82%bf%e7%98%a4" monitor="public_fastsearch,div,sick">纵膈肿瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%81%b6%e6%80%a7%e9%97%b4%e7%9a%ae%e7%98%a4" monitor="public_fastsearch,div,sick">恶性间皮瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bc%a0%e5%8a%9b%e6%80%a7%e6%b0%94%e8%83%b8" monitor="public_fastsearch,div,sick">张力性气胸</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b9%b3%e7%b3%9c%e8%83%b8" monitor="public_fastsearch,div,sick">乳糜胸</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%ba%e6%8d%9f%e4%bc%a4" class="last" monitor="public_fastsearch,div,sick">肺损伤</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%9B%E8%82%A0%E5%A4%96%E7%A7%91">肛肠外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9b%e5%91%a8%e8%84%93%e8%82%bf" monitor="public_fastsearch,div,sick">肛周脓肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9b%e9%97%a8%e6%81%af%e8%82%89" monitor="public_fastsearch,div,sick">肛门息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%a0%e5%a5%97%e5%8f%a0" monitor="public_fastsearch,div,sick">肠套叠</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e9%98%91%e5%b0%be%e7%82%8e" monitor="public_fastsearch,div,sick">慢性阑尾炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%8f%e8%82%a0%e7%99%8c" monitor="public_fastsearch,div,sick">小肠癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%97%8f%e6%af%9b%e7%aa%a6" monitor="public_fastsearch,div,sick">藏毛窦</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%a0%e7%b2%98%e8%bf%9e" monitor="public_fastsearch,div,sick">肠粘连</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%bb%93%e8%82%a0%e8%85%ba%e7%99%8c" monitor="public_fastsearch,div,sick">结肠腺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%9b%e4%b9%b3%e5%a4%b4%e7%98%a4" monitor="public_fastsearch,div,sick">肛乳头瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%83%83%e8%82%a0%e5%8a%9f%e8%83%bd%e7%b4%8a%e4%b9%b1" class="last" monitor="public_fastsearch,div,sick">胃肠功能紊乱</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="subcats-item show-bg J_FastSubCategory" data-id="3">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A6%87%E4%BA%A7%E7%A7%91">妇产科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AE%AB%E9%A2%88%E7%99%8C" monitor="public_fastsearch,div,sick">宫颈癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%9C%88%E7%BB%8F%E4%B8%8D%E8%B0%83" class="focus" monitor="public_fastsearch,div,sick">月经不调</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%BE%93%E5%8D%B5%E7%AE%A1%E5%A0%B5%E5%A1%9E" monitor="public_fastsearch,div,sick">输卵管堵塞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%98%B4%E9%81%93%E7%82%8E" monitor="public_fastsearch,div,sick">阴道炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%9A%E5%9B%8A%E5%8D%B5%E5%B7%A2%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">多囊卵巢综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%9B%B4%E7%BB%9D%E7%BB%8F%E6%9C%9F%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">围绝经期综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AE%AB%E9%A2%88%E7%82%8E" monitor="public_fastsearch,div,sick">宫颈炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9B%86%E8%85%94%E7%82%8E" monitor="public_fastsearch,div,sick">盆腔炎</a>
                                                    <a class="focus" href="/s.html?key=%E5%AD%90%E5%AE%AB%E5%86%85%E8%86%9C%E5%BC%82%E4%BD%8D%E7%97%87" monitor="public_fastsearch,div,sick">子宫内膜异位症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E5%86%85%E8%86%9C%E5%A2%9E%E7%94%9F" monitor="public_fastsearch,div,sick">子宫内膜增生</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AE%AB%E5%A4%96%E5%AD%95" monitor="public_fastsearch,div,sick">宫外孕</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E8%85%BA%E8%82%8C%E7%97%87" monitor="public_fastsearch,div,sick">子宫腺肌症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%BA%A7%E5%90%8E%E5%87%BA%E8%A1%80" monitor="public_fastsearch,div,sick">产后出血</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%97%A9%E4%BA%A7" monitor="public_fastsearch,div,sick">早产</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%87%AA%E7%84%B6%E6%B5%81%E4%BA%A7" monitor="public_fastsearch,div,sick">自然流产</a>
                                                    <a class="focus" href="/s.html?key=%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%9B%8A%E8%82%BF" monitor="public_fastsearch,div,sick">巧克力囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E8%84%B1%E5%9E%82" monitor="public_fastsearch,div,sick">子宫脱垂</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AE%AB%E9%A2%88%E7%99%8C%E5%89%8D%E7%97%85%E5%8F%98" monitor="public_fastsearch,div,sick">宫颈癌前病变</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E9%A2%88%E6%81%AF%E8%82%89" monitor="public_fastsearch,div,sick">子宫颈息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%95%B8%E8%83%8E%E7%98%A4" monitor="public_fastsearch,div,sick">畸胎瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8D%B5%E5%B7%A2%E7%99%8C" monitor="public_fastsearch,div,sick">卵巢癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E5%86%85%E8%86%9C%E6%81%AF%E8%82%89" monitor="public_fastsearch,div,sick">子宫内膜息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AD%90%E5%AE%AB%E5%86%85%E8%86%9C%E7%99%8C" monitor="public_fastsearch,div,sick">子宫内膜癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ad%90%e5%ae%ab%e8%82%8c%e7%98%a4" monitor="public_fastsearch,div,sick">子宫肌瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a4%9a%e5%9b%8a%e5%8d%b5%e5%b7%a2%e7%bb%bc%e5%90%88%e7%97%87" monitor="public_fastsearch,div,sick">多囊卵巢综合症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ae%ab%e9%a2%88%e5%9b%8a%e8%82%bf" monitor="public_fastsearch,div,sick">宫颈囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ae%ab%e9%a2%88%e6%81%af%e8%82%89" monitor="public_fastsearch,div,sick">宫颈息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%80%a7%e5%86%b7%e6%b7%a1" monitor="public_fastsearch,div,sick">性冷淡</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a6%87%e7%a7%91%e7%82%8e%e7%97%87" monitor="public_fastsearch,div,sick">妇科炎症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%ba%ba%e4%b9%b3%e5%a4%b4%e7%98%a4%e7%97%85%e6%af%92" monitor="public_fastsearch,div,sick">人乳头瘤病毒</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ad%90%e5%ae%ab%e6%81%af%e8%82%89" monitor="public_fastsearch,div,sick">子宫息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a4%96%e9%98%b4%e7%98%99%e7%97%92" monitor="public_fastsearch,div,sick">外阴瘙痒</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b5%81%e4%ba%a7" monitor="public_fastsearch,div,sick">流产</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%be%8a%e6%b0%b4%e6%a0%93%e5%a1%9e" monitor="public_fastsearch,div,sick">羊水栓塞</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%85%88%e5%85%86%e6%b5%81%e4%ba%a7" monitor="public_fastsearch,div,sick">先兆流产</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ad%90%e5%ae%ab%e5%86%85%e8%86%9c%e7%82%8e" monitor="public_fastsearch,div,sick">子宫内膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%ad%90%e5%ae%ab%e7%99%8c" monitor="public_fastsearch,div,sick">子宫癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bc%82%e5%b8%b8%e5%88%86%e5%a8%a9" class="last" monitor="public_fastsearch,div,sick">异常分娩</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="subcats-item show-bg J_FastSubCategory" data-id="4">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9A%AE%E8%82%A4%E6%80%A7%E7%97%85%E7%A7%91">皮肤性病科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%96%E9%94%90%E6%B9%BF%E7%96%A3" class="focus" monitor="public_fastsearch,div,sick">尖锐湿疣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%8B%E8%87%AD" monitor="public_fastsearch,div,sick">腋臭</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%81%B0%E6%8C%87%E7%94%B2" class="focus" monitor="public_fastsearch,div,sick">灰指甲</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%83%8E%E8%AE%B0" monitor="public_fastsearch,div,sick">胎记</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%89%81%E5%B9%B3%E7%96%A3" monitor="public_fastsearch,div,sick">扁平疣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B8%A6%E7%8A%B6%E7%96%B1%E7%96%B9" class="focus" monitor="public_fastsearch,div,sick">带状疱疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E6%B2%9F%E7%82%8E" monitor="public_fastsearch,div,sick">甲沟炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BB%91%E8%89%B2%E7%B4%A0%E7%98%A4" monitor="public_fastsearch,div,sick">黑色素瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%82%E6%BA%A2%E6%80%A7%E7%9A%AE%E7%82%8E" monitor="public_fastsearch,div,sick">脂溢性皮炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%A2%85%E6%AF%92" monitor="public_fastsearch,div,sick">梅毒</a>
                                                    <a class="focus" href="/s.html?key=%E5%AF%BB%E5%B8%B8%E7%97%A4%E7%96%AE" monitor="public_fastsearch,div,sick">寻常痤疮</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%AF%9B%E5%9B%8A%E7%82%8E" monitor="public_fastsearch,div,sick">毛囊炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9A%AE%E8%82%A4%E7%98%99%E7%97%92%E7%97%87" monitor="public_fastsearch,div,sick">皮肤瘙痒症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A5%9E%E7%BB%8F%E6%80%A7%E7%9A%AE%E7%82%8E" monitor="public_fastsearch,div,sick">神经性皮炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%96%E9%98%B4%E9%BB%8F%E8%86%9C%E7%99%BD%E6%96%91" monitor="public_fastsearch,div,sick">外阴黏膜白斑</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%A1%A8%E7%9A%AE%E7%97%A3" monitor="public_fastsearch,div,sick">表皮痣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9A%AE%E7%82%8E" monitor="public_fastsearch,div,sick">皮炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%89%B2%E7%B4%A0%E7%97%A3" monitor="public_fastsearch,div,sick">色素痣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%9F%E6%AE%96%E5%99%A8%E7%96%B1%E7%96%B9" monitor="public_fastsearch,div,sick">生殖器疱疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%B1%BC%E9%B3%9E%E7%97%85" monitor="public_fastsearch,div,sick">鱼鳞病</a>
                                                    <a class="focus" href="/s.html?key=%E8%84%9A%E6%B0%94" monitor="public_fastsearch,div,sick">脚气</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%AF%BB%E5%B8%B8%E7%96%A3" monitor="public_fastsearch,div,sick">寻常疣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%8d%a8%e9%ba%bb%e7%96%b9" monitor="public_fastsearch,div,sick">荨麻疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%b8%a1%e7%9c%bc" monitor="public_fastsearch,div,sick">鸡眼</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%9a%ae%e8%82%a4%e8%bf%87%e6%95%8f" monitor="public_fastsearch,div,sick">皮肤过敏</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%97%a4%e7%96%ae" monitor="public_fastsearch,div,sick">痤疮</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%8e%ab%e7%91%b0%e7%b3%a0%e7%96%b9" monitor="public_fastsearch,div,sick">玫瑰糠疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%a1%e7%99%a3" monitor="public_fastsearch,div,sick">股癣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%84%b1%e5%8f%91" monitor="public_fastsearch,div,sick">脱发</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%ba%a4%e7%bb%b4%e7%98%a4" monitor="public_fastsearch,div,sick">纤维瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b8%98%e7%96%b9%e6%80%a7%e8%8d%a8%e9%ba%bb%e7%96%b9" monitor="public_fastsearch,div,sick">丘疹性荨麻疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%98%b4%e5%9b%8a%e6%b9%bf%e7%96%b9" monitor="public_fastsearch,div,sick">阴囊湿疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%9a%ae%e8%84%82%e8%85%ba%e5%9b%8a%e8%82%bf" monitor="public_fastsearch,div,sick">皮脂腺囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%97%b1%e5%ad%90" monitor="public_fastsearch,div,sick">痱子</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%9c%98%e8%9b%9b%e7%97%a3" monitor="public_fastsearch,div,sick">蜘蛛痣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%bb%84%e8%a4%90%e6%96%91" monitor="public_fastsearch,div,sick">黄褐斑</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%b9%bf%e7%96%a3" monitor="public_fastsearch,div,sick">湿疣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a4%a9%e8%8a%b1" monitor="public_fastsearch,div,sick">天花</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%82%a1%e8%97%93" monitor="public_fastsearch,div,sick">股藓</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%8d%95%e7%ba%af%e7%96%b1%e7%96%b9" monitor="public_fastsearch,div,sick">单纯疱疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%b2%89%e7%98%a4" monitor="public_fastsearch,div,sick">粉瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%80%81%e5%b9%b4%e6%96%91" monitor="public_fastsearch,div,sick">老年斑</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e8%8d%a8%e9%ba%bb%e7%96%b9" monitor="public_fastsearch,div,sick">慢性荨麻疹</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%9a%ae%e8%82%a4%e7%99%8c" monitor="public_fastsearch,div,sick">皮肤癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%ba%a2%e8%a1%80%e4%b8%9d" monitor="public_fastsearch,div,sick">红血丝</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%bc%a0%e6%9f%93%e6%80%a7%e8%bd%af%e7%96%a3" monitor="public_fastsearch,div,sick">传染性软疣</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%97%a5%e5%85%89%e6%80%a7%e7%9a%ae%e7%82%8e" class="last" monitor="public_fastsearch,div,sick">日光性皮炎</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="subcats-item J_FastSubCategory" data-id="5">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AA%A8%E7%A7%91">骨科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AA%A8%E8%B4%A8%E5%A2%9E%E7%94%9F" monitor="public_fastsearch,div,sick">骨质增生</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A9%E5%91%A8%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">肩周炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%B1%E9%9E%98%E7%82%8E" monitor="public_fastsearch,div,sick">腱鞘炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8D%8A%E6%9C%88%E6%9D%BF%E6%8D%9F%E4%BC%A4" monitor="public_fastsearch,div,sick">半月板损伤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%BB%91%E8%86%9C%E7%82%8E" monitor="public_fastsearch,div,sick">滑膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%85%B3%E8%8A%82%E7%82%8E" monitor="public_fastsearch,div,sick">关节炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%85%A2%E6%80%A7%E8%85%B0%E8%83%8C%E7%97%9B" class="focus" monitor="public_fastsearch,div,sick">慢性腰背痛</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A1%E9%AA%A8%E5%A4%B4%E7%BC%BA%E8%A1%80%E6%80%A7%E5%9D%8F%E6%AD%BB" monitor="public_fastsearch,div,sick">股骨头缺血性坏死</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AA%A8%E6%8A%98" monitor="public_fastsearch,div,sick">骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A2%88%E6%A4%8E%E9%97%B4%E7%9B%98%E7%AA%81%E5%87%BA%E7%97%87" class="last" monitor="public_fastsearch,div,sick">颈椎间盘突出症</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%8A%E6%9F%B1%E5%A4%96%E7%A7%91">脊柱外科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%85%A2%E6%80%A7%E8%85%B0%E8%83%8C%E7%97%9B" monitor="public_fastsearch,div,sick">慢性腰背痛</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A2%88%E6%A4%8E%E9%97%B4%E7%9B%98%E7%AA%81%E5%87%BA%E7%97%87" class="focus" monitor="public_fastsearch,div,sick">颈椎间盘突出症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%B0%E6%A4%8E%E6%A4%8E%E7%AE%A1%E7%8B%AD%E7%AA%84%E7%97%87" monitor="public_fastsearch,div,sick">腰椎椎管狭窄症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%8A%E9%AB%93%E5%9E%8B%E9%A2%88%E6%A4%8E%E7%97%85" monitor="public_fastsearch,div,sick">脊髓型颈椎病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A5%9E%E7%BB%8F%E6%A0%B9%E5%9E%8B%E9%A2%88%E6%A4%8E%E7%97%85" monitor="public_fastsearch,div,sick">神经根型颈椎病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%8A%E6%9F%B1%E9%AA%A8%E6%8A%98" monitor="public_fastsearch,div,sick">脊柱骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%84%8A%E6%9F%B1%E8%82%BF%E7%98%A4" monitor="public_fastsearch,div,sick">脊柱肿瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%a4%8e%e9%97%b4%e7%9b%98%e7%aa%81%e5%87%ba" class="last" monitor="public_fastsearch,div,sick">椎间盘突出</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%85%B3%E8%8A%82%E5%A4%96%E7%A7%91">关节外科常见病</a></h5>
                                                <p>
                                                    <p>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A9%E5%91%A8%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">肩周炎</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8D%8A%E6%9C%88%E6%9D%BF%E6%8D%9F%E4%BC%A4" monitor="public_fastsearch,div,sick">半月板损伤</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%BB%91%E8%86%9C%E7%82%8E" monitor="public_fastsearch,div,sick">滑膜炎</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%97%9B%E9%A3%8E%E6%80%A7%E5%85%B3%E8%8A%82%E7%82%8E" monitor="public_fastsearch,div,sick">痛风性关节炎</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A9%E8%A2%96%E6%8D%9F%E4%BC%A4" monitor="public_fastsearch,div,sick">肩袖损伤</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%B1%E9%AA%A8%E5%A4%96%E4%B8%8A%E9%AB%81%E7%82%8E" monitor="public_fastsearch,div,sick">肱骨外上髁炎</a>
                                                        <a class="focus" href="/s.html?key=%E9%AA%A8%E5%85%B3%E8%8A%82%E7%82%8E" monitor="public_fastsearch,div,sick">骨关节炎</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%85%88%E5%A4%A9%E6%80%A7%E9%AB%8B%E5%85%B3%E8%8A%82%E8%84%B1%E4%BD%8D" monitor="public_fastsearch,div,sick">先天性髋关节脱位</a>
                                                        <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%8C%E8%85%B1%E7%82%8E" class="last" monitor="public_fastsearch,div,sick">肌腱炎</a>
                                                    </p>
                                            </li>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%88%9B%E4%BC%A4%E9%AA%A8%E7%A7%91">创伤骨科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AA%A8%E6%8A%98" monitor="public_fastsearch,div,sick">骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%B7%9F%E8%85%B1%E7%82%8E" monitor="public_fastsearch,div,sick">跟腱炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8D%8A%E6%9C%88%E6%9D%BF%E6%92%95%E8%A3%82" monitor="public_fastsearch,div,sick">半月板撕裂</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%B7%9F%E8%85%B1%E6%96%AD%E8%A3%82" monitor="public_fastsearch,div,sick">跟腱断裂</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%93%E6%80%BB%E7%A5%9E%E7%BB%8F%E6%8D%9F%E4%BC%A4" class="focus" monitor="public_fastsearch,div,sick">腓总神经损伤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%AB%8C%E9%AA%A8%E9%AA%A8%E6%8A%98" monitor="public_fastsearch,div,sick">髌骨骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%A1%E9%AA%A8%E9%A2%88%E9%AA%A8%E6%8A%98" class="focus" monitor="public_fastsearch,div,sick">股骨颈骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%B8%9D%E5%85%B3%E8%8A%82%E9%AA%A8%E6%8A%98" monitor="public_fastsearch,div,sick">踝关节骨折</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%86%9D%E5%A4%96%E4%BE%A7%E9%9F%A7%E5%B8%A6%E6%8D%9F%E4%BC%A4" class="last" monitor="public_fastsearch,div,sick">膝外侧韧带损伤</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="subcats-item show-bg J_FastSubCategory" data-id="6">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%80%B3%E9%BC%BB%E5%92%BD%E5%96%89%E7%A7%91">耳鼻咽喉科常见疾病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E7%82%8E" monitor="public_fastsearch,div,sick">鼻炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E7%AA%A6%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">鼻窦炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B8%AD%E8%80%B3%E7%82%8E" monitor="public_fastsearch,div,sick">中耳炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%B8%89%E5%8F%89%E7%A5%9E%E7%BB%8F%E7%97%9B" monitor="public_fastsearch,div,sick">三叉神经痛</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E5%92%BD%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">鼻咽癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E4%B8%AD%E9%9A%94%E5%81%8F%E6%9B%B2" monitor="public_fastsearch,div,sick">鼻中隔偏曲</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%89%81%E6%A1%83%E4%BD%93%E7%82%8E" monitor="public_fastsearch,div,sick">扁桃体炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%BB%E6%81%AF%E8%82%89" monitor="public_fastsearch,div,sick">鼻息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A3%B0%E5%B8%A6%E6%81%AF%E8%82%89" monitor="public_fastsearch,div,sick">声带息肉</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%BE%8E%E5%B0%BC%E5%B0%94%E7%BB%BC%E5%90%88%E7%97%87" monitor="public_fastsearch,div,sick">美尼尔综合症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%80%A5%E6%80%A7%E9%BC%BB%E7%82%8E" monitor="public_fastsearch,div,sick">急性鼻炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%96%89%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">喉癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BC%93%E8%86%9C%E7%A9%BF%E5%AD%94" monitor="public_fastsearch,div,sick">鼓膜穿孔</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%92%BD%E5%BC%82%E6%84%9F%E7%97%87" monitor="public_fastsearch,div,sick">咽异感症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%85%A2%E6%80%A7%E5%92%BD%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">慢性咽炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%94%b2%e7%8a%b6%e8%85%ba%e7%bb%93%e8%8a%82" monitor="public_fastsearch,div,sick">甲状腺结节</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b8%ad%e8%80%b3%e7%82%8e" monitor="public_fastsearch,div,sick">中耳炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%92%bd%e7%82%8e" monitor="public_fastsearch,div,sick">咽炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%92%bd%e5%96%89%e7%99%8c" monitor="public_fastsearch,div,sick">咽喉癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a4%96%e8%80%b3%e9%81%93%e7%82%8e" monitor="public_fastsearch,div,sick">外耳道炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e9%bc%bb%e7%82%8e" monitor="public_fastsearch,div,sick">慢性鼻炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%96%89%e7%82%8e" monitor="public_fastsearch,div,sick">喉炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%a3%b0%e5%b8%a6%e5%b0%8f%e7%bb%93" monitor="public_fastsearch,div,sick">声带小结</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%92%bd%e5%b3%a1%e7%82%8e" monitor="public_fastsearch,div,sick">咽峡炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%88%86%e6%b3%8c%e6%80%a7%e4%b8%ad%e8%80%b3%e7%82%8e" monitor="public_fastsearch,div,sick">分泌性中耳炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%a1%a5%e6%9c%ac%e6%b0%8f%e7%97%85" monitor="public_fastsearch,div,sick">桥本氏病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%a2%85%e5%b0%bc%e5%9f%83%e7%97%85" monitor="public_fastsearch,div,sick">梅尼埃病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%aa%81%e5%8f%91%e6%80%a7%e8%80%b3%e8%81%8b" monitor="public_fastsearch,div,sick">突发性耳聋</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%a9%ba%e9%bc%bb%e7%97%87" monitor="public_fastsearch,div,sick">空鼻症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%b8%8a%e9%a2%8c%e7%aa%a6%e7%82%8e" monitor="public_fastsearch,div,sick">上颌窦炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e4%bc%9a%e5%8e%8c%e5%9b%8a%e8%82%bf" monitor="public_fastsearch,div,sick">会厌囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%85%a2%e6%80%a7%e6%89%81%e6%a1%83%e4%bd%93%e7%82%8e" class="last" monitor="public_fastsearch,div,sick">慢性扁桃体炎</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9C%BC%E7%A7%91">眼科常见疾病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%99%BD%E5%86%85%E9%9A%9C" class="focus" monitor="public_fastsearch,div,sick">白内障</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%9D%92%E5%85%89%E7%9C%BC" monitor="public_fastsearch,div,sick">青光眼</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%BF%91%E8%A7%86" class="focus" monitor="public_fastsearch,div,sick">近视</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BC%B1%E8%A7%86" monitor="public_fastsearch,div,sick">弱视</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%BB%93%E8%86%9C%E7%82%8E" monitor="public_fastsearch,div,sick">结膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BB%84%E6%96%91%E5%8F%98%E6%80%A7" monitor="public_fastsearch,div,sick">黄斑变性</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%8E%BB%E7%92%83%E4%BD%93%E6%B7%B7%E6%B5%8A" monitor="public_fastsearch,div,sick">玻璃体混浊</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%96%9C%E8%A7%86" class="focus" monitor="public_fastsearch,div,sick">斜视</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%A7%92%E8%86%9C%E7%82%8E" monitor="public_fastsearch,div,sick">角膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%A7%86%E7%BD%91%E8%86%9C%E8%84%B1%E8%90%BD" monitor="public_fastsearch,div,sick">视网膜脱落</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%95%A3%E5%85%89" monitor="public_fastsearch,div,sick">散光</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%91%A1%E8%90%84%E8%86%9C%E7%82%8E" monitor="public_fastsearch,div,sick">葡萄膜炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%9D%91%E8%85%BA%E7%82%8E" monitor="public_fastsearch,div,sick">睑腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%B2%99%E7%9C%BC" monitor="public_fastsearch,div,sick">沙眼</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%A7%86%E7%A5%9E%E7%BB%8F%E7%82%8E" class="last" monitor="public_fastsearch,div,sick">视神经炎</a>
                                                </p>
                                            </li>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%A4%B4%E9%A2%88%E5%A4%96%E7%A7%91">头颈外科常见疾病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B2%E7%8A%B6%E8%85%BA%E7%99%8C" class="focus" monitor="public_fastsearch,div,sick">甲状腺癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%85%AE%E8%85%BA%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">腮腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%92%BD%E9%83%A8%E8%82%BF%E7%98%A4" monitor="public_fastsearch,div,sick">咽部肿瘤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A2%88%E5%8A%A8%E8%84%89%E7%98%A4" class="last" monitor="public_fastsearch,div,sick">颈动脉瘤</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="subcats-item J_FastSubCategory" data-id="8">
                                    <div class="sub-category-box J_SubBox">
                                        <ul>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E5%86%85%E7%A7%91">心内科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E8%82%8C%E7%82%8E" monitor="public_fastsearch,div,sick">心肌炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E5%BE%8B%E5%A4%B1%E5%B8%B8" monitor="public_fastsearch,div,sick">心律失常</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E8%82%8C%E7%BC%BA%E8%A1%80" class="focus" monitor="public_fastsearch,div,sick">心肌缺血</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%88%BF%E9%A2%A4" monitor="public_fastsearch,div,sick">房颤</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E8%84%8F%E7%A5%9E%E7%BB%8F%E7%97%87" monitor="public_fastsearch,div,sick">心脏神经症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%89%A9%E5%BC%A0%E5%9E%8B%E5%BF%83%E8%82%8C%E7%97%85" monitor="public_fastsearch,div,sick">扩张型心肌病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E8%82%BA%E5%BF%83%E7%97%85" monitor="public_fastsearch,div,sick">肺心病</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A3%8E%E6%B9%BF%E6%80%A7%E5%BF%83%E8%84%8F%E7%97%85" class="last" monitor="public_fastsearch,div,sick">风湿性心脏病</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%84%BF%E7%A7%91">儿科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E5%93%AE%E5%96%98" class="focus" monitor="public_fastsearch,div,sick">小儿哮喘</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E7%99%AB%E7%97%AB" monitor="public_fastsearch,div,sick">小儿癫痫</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E6%8A%BD%E5%8A%A8%E7%97%87" monitor="public_fastsearch,div,sick">小儿抽动症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E6%94%AF%E6%B0%94%E7%AE%A1%E8%82%BA%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">小儿支气管肺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E5%8E%9F%E5%8F%91%E6%80%A7%E8%82%BE%E7%97%85%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">小儿原发性肾病综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%94%90%E6%B0%8F%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">唐氏综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%85%88%E5%A4%A9%E6%80%A7%E6%96%9C%E9%A2%88" monitor="public_fastsearch,div,sick">先天性斜颈</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E7%96%9D%E6%B0%94" class="last" monitor="public_fastsearch,div,sick">小儿疝气</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8F%A3%E8%85%94%E7%A7%91">口腔科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%89%99%E5%91%A8%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">牙周炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%BE%8B%E9%BD%BF" class="focus" monitor="public_fastsearch,div,sick">龋齿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%89%99%E9%BE%88%E7%82%8E" monitor="public_fastsearch,div,sick">牙龈炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8F%A3%E8%85%94%E6%89%81%E5%B9%B3%E8%8B%94%E8%97%93" monitor="public_fastsearch,div,sick">口腔扁平苔藓</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%89%99%E9%BD%BF%E7%A3%A8%E6%8D%9F" monitor="public_fastsearch,div,sick">牙齿磨损</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%89%99%E9%AB%93%E7%82%8E" class="focus" monitor="public_fastsearch,div,sick">牙髓炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E9%A2%9E%E4%B8%8B%E9%A2%8C%E5%85%B3%E8%8A%82%E7%B4%8A%E4%B9%B1%E7%BB%BC%E5%90%88%E5%BE%81" monitor="public_fastsearch,div,sick">颞下颌关节紊乱综合征</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8F%A3%E8%85%94%E7%99%8C" monitor="public_fastsearch,div,sick">口腔癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%8F%A3%E8%85%94%E9%BB%8F%E8%86%9C%E7%99%BD%E6%96%91" monitor="public_fastsearch,div,sick">口腔黏膜白斑</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%8f%a3%e8%85%94%e6%ba%83%e7%96%a1" class="last" monitor="public_fastsearch,div,sick">口腔溃疡</a>
                                                </p>
                                            </li>
                                            <li class="last">
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B2%BE%E7%A5%9E%E7%A7%91">精神科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E6%8A%91%E9%83%81%E7%97%87" class="focus" monitor="public_fastsearch,div,sick">抑郁症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%B0%8F%E5%84%BF%E5%A4%9A%E5%8A%A8%E7%97%87" monitor="public_fastsearch,div,sick">小儿多动症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%84%A6%E8%99%91%E7%97%87" class="focus" monitor="public_fastsearch,div,sick">焦虑症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BC%BA%E8%BF%AB%E6%80%A7%E9%9A%9C%E7%A2%8D" monitor="public_fastsearch,div,sick">强迫性障碍</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%B2%BE%E7%A5%9E%E5%88%86%E8%A3%82%E7%97%87" monitor="public_fastsearch,div,sick">精神分裂症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E5%BF%83%E7%90%86%E9%9A%9C%E7%A2%8D" monitor="public_fastsearch,div,sick">心理障碍</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E4%BA%A7%E5%90%8E%E6%8A%91%E9%83%81%E7%97%87" monitor="public_fastsearch,div,sick">产后抑郁症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%A5%9E%E7%BB%8F%E8%A1%B0%E5%BC%B1" monitor="public_fastsearch,div,sick">神经衰弱</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%bc%ba%e8%bf%ab%e7%97%87" monitor="public_fastsearch,div,sick">强迫症</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%b2%be%e7%a5%9e%e5%88%86%e8%a3%82" class="last" monitor="public_fastsearch,div,sick">精神分裂</a>
                                                </p>
                                            </li>
                                            <li>
                                                <h5><a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%E7%94%B7%E7%A7%91">男科常见病</a></h5>
                                                <p>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%81%97%e7%b2%be" monitor="public_fastsearch,div,sick">遗精</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%bf%e9%81%93%e7%82%8e" monitor="public_fastsearch,div,sick">尿道炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%bf%e9%81%93%e6%84%9f%e6%9f%93" monitor="public_fastsearch,div,sick">尿道感染</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e9%99%84%e7%9d%be%e7%82%8e" monitor="public_fastsearch,div,sick">附睾炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%bf%e9%81%93%e4%b8%8b%e8%a3%82" monitor="public_fastsearch,div,sick">尿道下裂</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%89%8d%e5%88%97%e8%85%ba%e5%9b%8a%e8%82%bf" monitor="public_fastsearch,div,sick">前列腺囊肿</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%80%a5%e6%80%a7%e8%86%80%e8%83%b1%e7%82%8e" monitor="public_fastsearch,div,sick">急性膀胱炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e8%b9%bc%e7%8a%b6%e9%98%b4%e8%8c%8e" monitor="public_fastsearch,div,sick">蹼状阴茎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e5%b0%bf%e9%81%93%e7%99%8c" monitor="public_fastsearch,div,sick">尿道癌</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e6%80%a5%e6%80%a7%e5%89%8d%e5%88%97%e8%85%ba%e7%82%8e" monitor="public_fastsearch,div,sick">急性前列腺炎</a>
                                                    <a onmousedown="return _smartlog(this,'NAV')" target="_blank" href="/s.html?key=%e7%9d%be%e4%b8%b8%e8%82%bf%e7%98%a4" class="last" monitor="public_fastsearch,div,sick">睾丸肿瘤</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-nav" id="sub-nav">
                    <ul class="consult" id="sub-nav-consult">
                        <li><a href="ask.html" target="_blank" onmousedown="return _smartlog(this,'MNUM')">免费咨询</a></li>
                        <li><a href="/s.html/expert?ed=%E4%B8%8D%E9%99%90&edt=%E4%B8%8D%E9%99%90&iSq=1&fg=1&q=&pi=all&p=%E5%85%A8%E5%9B%BD&ci=all&c=%E4%B8%8D%E9%99%90&o=all&es=all&hl=all&ht=all&hk=all&dt=all&dty=all&hdi=&mf=true&fg=0&ipIsShanghai=false&searchAll=Y&hospitalId=&standardDepartmentId=&consult=2&volunteerDoctor=&imagetext=&phone=all&video=&sort=consult_custom"
                                target="_blank" onmousedown="return _smartlog(this,'MNUZ')">专家问诊</a></li>
                        <li><a href="/s.html/expert?fg=1&ed=%E4%B8%8D%E9%99%90&edt=%E4%B8%8D%E9%99%90&q=&iSq=1&pi=all&p=%E5%85%A8%E5%9B%BD&ci=all&c=%E4%B8%8D%E9%99%90&o=all&es=all&hl=all&ht=all&hk=all&dt=all&dty=all&hdi=&mf=true&fg=0&ipIsShanghai=false&searchAll=Y&hospitalId=&standardDepartmentId=&consult=2&volunteerDoctor=1&imagetext=&phone=&video=&sort=volunteer_custom&fhc=1"
                                target="_blank" onmousedown="return _smartlog(this,'MNUY')">义诊专家</a></li>
                    </ul>
                    <ul class="consult" id="sub-nav-welife">
                        <li><a href="#" target="_blank" onmousedown="return _smartlog(this,'MNU')" monitor="public_menu,health,medical">高端医疗</a></li>
                        <li><a href="#" target="_blank" onmousedown="return _smartlog(this,'MNU')" monitor="public_menu,health,medical">择医网严选</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div id="gc">

            <div id="g-cfg" class="gp-index" data-fo-help="1" data-fo-appcode="1" data-loadpop="wyapp,remind" data-header-fixed="1" data-module="home" data-rightbar="1">
                <div class="focus-wrapper J_FocusSection">
                    <div class="focus-inner">
                        <ul class="focus-container J_FocusSlider">
                            <li class="focus-pannel" style="background:#ffa4a7;">
                                <div class="banner-container J_BannerCtn">
                                    <a target="_blank" href="#" monitor="home_activity,advmain,slideitem">
                                        <img class="main-banner J_MainBanner" src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/blank.gif" data-img="https://kano.guahao.cn/VHX46440258?resize=800x350" width="800" height="350">
                                    </a>
                                </div>
                            </li>
                            <li class="focus-pannel" style="background:#fca03d;">
                                <div class="banner-container J_BannerCtn">
                                    <a target="_blank" href="#" monitor="home_activity,advmain,slideitem">
                                        <img class="main-banner J_MainBanner" src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/blank.gif" data-img="https://kano.guahao.cn/kec46246680?resize=800x350" width="800" height="350">
                                    </a>
                                </div>
                            </li>
                            <li class="focus-pannel" style="background:#182F86;">
                                <div class="banner-container J_BannerCtn">
                                    <a target="_blank" href="#" monitor="home_activity,advmain,slideitem">
                                        <img class="main-banner J_MainBanner" src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/blank.gif" data-img="https://kano.guahao.cn/UVH46557568?resize=800x350" width="800" height="350">
                                    </a>
                                </div>
                            </li>
                            <li class="focus-pannel" style="background:#6234CA;">
                                <div class="banner-container J_BannerCtn">
                                    <a target="_blank" href="#" monitor="home_activity,advmain,slideitem">
                                        <img class="main-banner J_MainBanner" src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/blank.gif" data-img="https://kano.guahao.cn/5wq46032016?resize=800x350" width="800" height="350">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="side-container">
                    <div class="side-inner">
                        <div class="side-banner">

                            <!-- 右侧banner静态数据 -->


                            <a target="_blank" href="#" rel="nofollow" onmousedown="return _smartlog(this,'BNA')">
                                <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/slide-new-banner1.png" width="209" height="117" alt="择医网用户版">
                            </a>
                            <a target="_blank" href="#" onmousedown="return _smartlog(this,'BNB')">
                                <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/slide-new-banner2.png" width="209" height="117" alt="诊治中心">
                            </a>
                            <a target="_blank" href="#" onmousedown="return _smartlog(this,'BNB')">
                                <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/slide-new-banner3.png" width="209" height="117" alt="大家帮">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="g-container news-pannel">
                    <div class="news-container g-clear">
                        <div class="health-news">
                            <ul class="g-clear J_HealthNewsList" style="opacity: 0">
                                <li>
                                    <a target="_blank" href="#" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,pic">
                                        <img src="https://kano.guahao.cn/ceC36994932" alt="" width="90" height="55" onerror="this.src='https://static.guahao.cn/front/portal-pc-static/img/newscenter-unknow.png';">
                                    </a>

                                    <p>
                                        <a target="_blank" href="#" class="title" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,title">
                                高血压不想吃药？还有哪些降血压...</a>
                                        <span class="summary">高血压是引发心血管疾病的一项重要因素，将血压降至目标水平...
                                &nbsp;
								<a target="_blank" href="#"
                                   onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,detail">[详细]
                                </a>
							</span>
                                    </p>
                                </li>
                                <li>
                                    <a target="_blank" href="#" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,pic">
                                        <img src="https://kano.guahao.cn/NvG35056875" alt="" width="90" height="55" onerror="this.src='https://static.guahao.cn/front/portal-pc-static/img/newscenter-unknow.png';">
                                    </a>

                                    <p>
                                        <a target="_blank" href="#" class="title" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,title">
                                关于“血脂异常”，你想问的在这...</a>
                                        <span class="summary">近年来，我国血脂异常的流行趋势日益严重。血脂异常会导致冠...
                                &nbsp;
								<a target="_blank" href="#"
                                   onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,advicon,detail">[详细]
                                </a>
							</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="focus-news">
                            <h5><a href="#" target="_blank" monitor="home_activity,newscenter,newscenter">资讯中心
                <img class="news-img" src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/news.png" alt="">
            </a>

                                <i class="ao"></i><i class="ai"></i></h5>
                            <ul>
                                <li><a target="_blank" href="#" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,newscenter,news">严律南：让传统拥抱互联网
                                    <i class="hot"></i></a></li>
                                <li><a target="_blank" href="#" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,newscenter,news">廖万清：互联网医疗利国利民</a></li>
                                <li><a target="_blank" href="#" onmousedown="return _smartlog(this,'NWS')" monitor="home_activity,newscenter,news">夏照帆：一切为了患者</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="g-container landing-section booking-section J_BookingSection">
                    <div class="title-bar">
                        <h2>预约挂号</h2>
                        <span class="slogan">
				快速预约，便捷就医！（费用由医院自行设定，平台不收取任何额外费用）
			</span>
                    </div>
                    <div class="main-ctn g-clear">
                        <div class="g-grid-left J_AreaFilter">
                            <div class="fast-order">
                                <div class="title">
                                    <span class="addr-icon zoomIn animated"></span>
                                    <span class="province J_Province"><?php if($region): echo ($region); else: ?>地区<?php endif; ?></span>
                                    <span class="city J_City"><?php if($city): echo ($city); else: ?>不限<?php endif; ?></span>
                                    <a href="javascript:;" class="switch J_AreaSwitch" monitor="home_order,fastorder,city">切换<i class="arrow-down"></i></a>
                                </div>
                                <div class="main">
                                    <form action="#" method="post">
                                        <input type="hidden" name="pi" value="" />
                                        <input type="hidden" name="p" value="" />
                                        <input type="hidden" name="ci" value="" />
                                        <input type="hidden" name="c" value="" />
                                        <div style="display:none">
                                            <select class="province js-province" name="province" style="display:block">
							<option value="">请选择...</option>
						</select>
                                            <select class="city js-city disabled" disabled="disabled" name="city" style="display:block">
							<option value="">请选择...</option>
						</select>
                                        </div>
                                        <select class="js-hospital disabled J_Select2" disabled="disabled" name="hospital" multiple="multiple">
						<option value="">请选择...</option>
					</select>
                                        <select class="js-dept disabled J_Select2" disabled="disabled" name="hdid" multiple="multiple">
						<option value="">请选择...</option>
					</select>
                                        <a href="javascript:;" class="gbn gbt-orange js-btn" monitor="home_order, fastorder, fastorder">快速挂号</a>
                                    </form>
                                </div>
                            </div>
                            <div class="addr-wrap J_Area" style="z-index: 0; display: none;">
                                <div class="stick"><a href="javascript:;" class="switch J_HideArea">切换<i class="arrow-down"></i></a></div>
                                <a href="javascript:void(0);" class="close"></a>
                                <div class="hot-city J_HotCity">
                                    <label>热门：</label>
                                    <ul>

                                        <li><a href="javascript:void(0);" name="hotcity" province-id="2">上海</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" province-id="1">北京</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="79" province-id="29" province-name="广东">广州</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="81" province-id="29" province-name="广东">深圳</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="229" province-id="19" province-name="湖北">武汉</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="552" province-id="24" province-name="浙江">杭州</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="254" province-id="30" province-name="湖南">长沙</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="280" province-id="22" province-name="江苏">南京</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="4" province-id="3749" province-name="西南">重庆</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="402" province-id="21" province-name="山东">青岛</a></li>

                                        <li><a href="javascript:void(0);" name="hotcity" city-id="437" province-id="9" province-name="陕西">西安</a></li>
                                    </ul>
                                </div>
                                <div class="area-content J_AreaContent">
                                    <div class="province J_ProvinceContainer">
                                        <p class="content-title">请选择省份:</p>
                                        <ul class="J_ProvinceUl">
                                        </ul>
                                    </div>
                                    <div class="city J_CityContainer">
                                        <p class="content-title">您当前选择省份：<span class="J_SelProvince"></span> <span class="back J_AreaBack">返回重选省份</span>
                                        </p>
                                        <div class="J_CityWrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recom-hospital">
                                <div class="dq J_RecomHospital" data-tab-url="https://www.guahao.com/homepage/hpconsult/areaHospitalByHospitalId/">
                                    <div class="tabs">
                                        <span class="tip">推荐医院</span>
                                        <ul class="g-clear J_Nav">
                                            <!-- 推荐医院地区静态数据 -->
                                            <li data-id="2" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="2" monitor="home_fastselect,hosprecommend,hospcity">上海</a>
                                                <span></span>
                                            </li>
                                            <li data-id="1" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="1" monitor="home_fastselect,hosprecommend,hospcity">北京</a>
                                                <span></span>
                                            </li>
                                            <li data-id="29" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="29" monitor="home_fastselect,hosprecommend,hospcity">广东</a>
                                                <span></span>
                                            </li>
                                            <li data-id="22" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="22" monitor="home_fastselect,hosprecommend,hospcity">江苏</a>
                                                <span></span>
                                            </li>
                                            <li data-id="19" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="19" monitor="home_fastselect,hosprecommend,hospcity">湖北</a>
                                                <span></span>
                                            </li>
                                            <li data-id="8" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="8" monitor="home_fastselect,hosprecommend,hospcity">山西</a>
                                                <span></span>
                                            </li>
                                            <li data-id="9" style="width: 56px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="9" monitor="home_fastselect,hosprecommend,hospcity">陕西</a>
                                                <span></span>
                                            </li>
                                            <li data-id="999" style="width: 84px;">
                                                <a href="#" target="_blank" class="on" onmousedown="return _smartlog(this,'HPT')" data-id="999" monitor="home_fastselect,hosprecommend,hospcity">其他地区</a>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-container J_ContentContainer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="g-grid-right">
                            <div class="gd-list">
                                <h3>
                                    <a class="more" href="#" target='_blank' monitor="home_activity,doctordirect,team_more">更多</a>
                                </h3>
                                <ul class="J_exportTeam">
                                    <li>
                                        <a href="#" target="_blank" class="cover-bg team-item" onmousedown="return _smartlog(this,'MYTD')"></a>
                                        <div class="teaminfo">
                                            <dl>
                                                <dt><a href="#" target="_blank" class="cover-bg"><img src="https://kano.guahao.cn/IvZ2706441_image140.jpg?timestamp=1469427168922" alt="" onerror="this.src='https://static.guahao.cn/img/character/doc-unknow.png?_=20121223';"></a></dt>
                                                <dd>
                                                    <a href="#" target="_blank" class="doc">孙强</a><a class="dept" href="" target="_blank">孙强</a><br/>
                                                    <a href="#" target="_blank" class="hos">南昌市第一医院</a>
                                                    <a href="#" target="_blank" class="bookbtn" monitor="home_activity,doctordirect,order">立即预约</a>
                                                </dd>
                                            </dl>
                                            <strong class="claim">疾病要求：<span>
							腔内泌尿外科、男性生殖系统疾病、泌尿系统结石、泌尿生殖系肿
							<span class="less-content">...<a class="js-down">&nbsp;详细</a></span>	
						</span></strong>
                                        </div>
                                        <a href="#" class="expert-team" target="_blank" onmousedown="return _smartlog(this,'MYTD')" monitor="home_activity,doctordirect,spteam">
                                            <span class="name">专家团队</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" class="cover-bg team-item" onmousedown="return _smartlog(this,'MYTD')"></a>
                                        <div class="teaminfo">
                                            <dl>
                                                <dt><a href="#" target="_blank" class="cover-bg"><img src="https://kano.guahao.cn/REk2640164_image140.jpg" alt="" onerror="this.src='https://static.guahao.cn/img/character/doc-unknow.png?_=20121223';"></a></dt>
                                                <dd>
                                                    <a href="#" target="_blank" class="doc">刘秀娟</a><a class="dept" href="" target="_blank">刘秀娟</a><br/>
                                                    <a href="#" target="_blank" class="hos">中国人民解放军第94医院</a>
                                                    <a href="#" target="_blank" class="bookbtn" monitor="home_activity,doctordirect,order">立即预约</a>
                                                </dd>
                                            </dl>
                                            <strong class="claim">疾病要求：<span>
							肾小球肾炎、肾病综合征、IgA肾病、糖尿病肾病、高血压肾病
							<span class="less-content">...<a class="js-down">&nbsp;详细</a></span>	
						</span></strong>
                                        </div>
                                        <a href="#" class="expert-team" target="_blank" onmousedown="return _smartlog(this,'MYTD')" monitor="home_activity,doctordirect,spteam">
                                            <span class="name">专家团队</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-container landing-section consult-section J_ConsultSection" data-lazy-url="https://www.guahao.com/homepage/hpconsult/consultList">
                    <div class="loading"></div>
                </div>
                <div class="g-container landing-section news-section">
                    <div class="title-bar">
                        <h2>健康资讯</h2>
                        <span class="slogan">
			关注健康，享受生活！
				<a href="#" style="display:none">寻找医言堂“好医生” 找的就是您！
				</a>
			</span>
                    </div>
                    <div class="main-ctn g-clear">
                        <div class="g-grid-left">
                            <div class="news-main g-clear">
                                <div class="news-item medical-strategy J_medicalStrategy">
                                    <h5>就医攻略</h5>
                                    <div class="focus-single g-clear">
                                        <a target="_blank" href="#">
                                            <img src="https://kano.guahao.cn/QMF46787930?whs=600_400" alt="又双叒叕流产！怎么才能保住宝宝？">
                                        </a>
                                        <div class="text">
                                            <a target="_blank" href="#" class="title">又双叒叕流产！怎么才能保住宝宝？</a>
                                            <span class="summary">
									对于一个期待成为母亲的女性而言，不孕是很痛苦的，但比之更痛苦的，是怀孕后却保不住自己的宝宝第一胎，雀跃着欢喜着，宝宝没保...
                                        <a target="_blank" href="#">[详细]
									</a>
								</span>
                                        </div>
                                    </div>
                                    <div class="focus-list">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="看病太麻烦？就医答疑一条龙服务了解一下～">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">看病太麻烦？就医答疑一条龙服务了解一下～</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-03-21</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="什么样的手麻要警惕？这是身体的报警信号！">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">什么样的手麻要警惕？这是身体的报警信号！</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-08-23</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="全面解密胰腺癌：“癌中之王”并非不可战胜">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">全面解密胰腺癌：“癌中之王”并非不可战胜</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
                                                </a>
                                                <span class="date">2018-08-17</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="俗语养生 | 三天不吃青 两眼冒金星">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">俗语养生 | 三天不吃青 两眼冒金星</div>
                                                </a>
                                                <span class="date">2018-08-17</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="【科普时间】职场健康课：一手抓事业一手抓健康">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">【科普时间】职场健康课：一手抓事业一手抓健康</div>
                                                </a>
                                                <span class="date">2018-08-15</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="脂肪肝不能吃肉？教你靠谱的护肝指南">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">脂肪肝不能吃肉？教你靠谱的护肝指南</div>
                                                </a>
                                                <span class="date">2018-08-13</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="news-item rumor-crusher J_rumorCrusher">
                                    <h5>谣言粉碎机</h5>
                                    <div class="focus-single g-clear">
                                        <a target="_blank" href="#">
                                            <img src="https://kano.guahao.cn/Azx46412691?whs=702_370" alt="每天走一万步，真的健康吗？">
                                        </a>
                                        <div class="text">
                                            <a target="_blank" href="#" class="title">每天走一万步，真的健康吗？</a>
                                            <span class="summary">
									每个人心中都有一个更美好的自己：健康、苗条、充满活力而运动，可以帮助你实现这样的自己自从“每天一万步”这个活动出现后，大...
									<a target="_blank" href="#">[详细]
									</a>
								</span>
                                        </div>
                                    </div>
                                    <div class="focus-list">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="经常跷二郎腿对身体有害吗？">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">经常跷二郎腿对身体有害吗？</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-08-23</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="私处颜色深浅，到底跟什么有关？">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">私处颜色深浅，到底跟什么有关？</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-08-22</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="射精=性高潮？你不知道的真相">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">射精=性高潮？你不知道的真相</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
                                                </a>
                                                <span class="date">2018-08-16</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="喝酒不脸红，酒量更好吗？">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">喝酒不脸红，酒量更好吗？</div>
                                                </a>
                                                <span class="date">2018-08-15</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="经常挖鼻子会让鼻孔变大吗？">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">经常挖鼻子会让鼻孔变大吗？</div>
                                                </a>
                                                <span class="date">2018-08-08</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="睡硬板床真的对腰好吗？">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">睡硬板床真的对腰好吗？</div>
                                                </a>
                                                <span class="date">2018-08-07</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-item health-preserve J_healthPreserve">
                                    <h5>中医养生</h5>
                                    <div class="focus-single g-clear">
                                        <a target="_blank" href="#">
                                            <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/bottom-default.png">
                                        </a>
                                        <div class="text">
                                            <a target="_blank" href="#" class="title">中医望诊，一眼就看出有什么病</a>
                                            <span class="summary">
							脸色反应气血的兴衰　　面部的色泽是气血通过经络上注于面而表现出来的，气血的盛衰及运行情况，必定会从面色上反映出来　　脸色...
							<a target="_blank" href="#">[详细]
							</a>
						</span>
                                        </div>
                                    </div>
                                    <div class="focus-list">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="晚上9~11点你在干嘛？难怪你一身病！看完醒悟了">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">晚上9~11点你在干嘛？难怪你一身病！看完醒悟了</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-08-06</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="杭州明珠台节目——名医面对面">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">杭州明珠台节目——名医面对面</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/new.png" alt="">
                                                </a>
                                                <span class="date">2018-07-23</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="中药煎服方法、饮食宜忌">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">中药煎服方法、饮食宜忌</div>
                                                    <img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
                                                </a>
                                                <span class="date">2018-07-19</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="兄弟，你被“肾虚”了吗">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">兄弟，你被“肾虚”了吗</div>
                                                </a>
                                                <span class="date">2018-07-17</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="阴阳平衡——生命之本！">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">阴阳平衡——生命之本！</div>
                                                </a>
                                                <span class="date">2018-06-25</span>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="中医是每一个中国人应该体悟的生命科学">
                                                    <i class="dot"></i>
                                                    <div class="focus-forhot">中医是每一个中国人应该体悟的生命科学</div>
                                                </a>
                                                <span class="date">2018-04-28</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-item health-hot J_healthHot">
                                    <a href="#" target="_blank" class="jhztc-title" monitor="spteam_activity,spteam_head,spteam_topslider" onmousedown="return _smartlog(this,'MYZTC')">
                                        <h5>名医直通车
                                        </h5>
                                    </a>
                                    <div class="focus-single g-clear">
                                        <a target="_blank" href="#" monitor="home_health_refer,doctordirect,doctor_text">
                                            <img src="https://kano.guahao.cn/rLn44885969" alt="脂肪肝不能吃肉？教你靠谱的护肝指南" onmousedown="return _smartlog(this,'INF')">
                                        </a>
                                        <div class="text">
                                            <a target="_blank" href="#" class="title" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text">脂肪肝不能吃肉？教你靠谱的护肝指南</a>
                                            <span class="summary">
								关于脂肪肝的传闻，你听过几个？  胖的人才会得脂肪肝！ 脂肪肝就是油脂吃太多了，所以得了脂肪肝就不能
								<a target="_blank" href="#" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text">[详细]</a>
							</span>
                                        </div>
                                    </div>
                                    <div class="focus-list">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="又双叒叕流产！怎么才能保住宝宝？" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								又双叒叕流产！怎么才能保住宝宝？
							</div>
							<img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
							</a><span class="date">2018-08-28</span></li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="什么样的手麻要警惕？这是身体的报警信号！" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								什么样的手麻要警惕？这是身体的报警信号！
							</div>
							<img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
							</a><span class="date">2018-08-23</span></li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="全面解密胰腺癌：“癌中之王”并非不可战胜" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								全面解密胰腺癌：“癌中之王”并非不可战胜
							</div>
							<img src="https://static.guahao.cn/front/portal-pc-static/img/2015/home/hot.gif" alt="">
							</a><span class="date">2018-08-17</span></li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="不爱吃饭就是厌食症吗？厌食症没那么简单" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								不爱吃饭就是厌食症吗？厌食症没那么简单
							</div>
							</a><span class="date">2018-08-06</span></li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="一不小心就治疗过度！腰突症的误区你进了吗 ？" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								一不小心就治疗过度！腰突症的误区你进了吗 ？
							</div>
							</a><span class="date">2018-08-03</span></li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="夏季突然发烧腹泻？“吃坏肚子”并不简单" onmousedown="return _smartlog(this,'INF')" monitor="home_health_refer,doctordirect,doctor_text"><i class="dot"></i>
							<div class="focus-forhot">
								夏季突然发烧腹泻？“吃坏肚子”并不简单
							</div>
							</a><span class="date">2018-07-30</span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="g-grid-right">
                            <div class="hot-topic J_hotTopic">
                                <p class="module">
                                    热门排行
                                    <span class="operation">
					<a href="javascript:;" data-tagId="1" class="active">每周</a>
					<span class=""></span>
                                    <a href="javascript:;" data-tagId="2">每月</a>
                                    </span>
                                </p>
                                <div class="J_hotTopicList">
                                    <div class="focus-list">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="记录正畸之路，一起见证更美的你！">
                                                    <span class="sort-number">1</span>
                                                    <span class="content">记录正畸之路，一起见证更美的你！</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="每天走一万步，真的健康吗？">
                                                    <span class="sort-number">2</span>
                                                    <span class="content">每天走一万步，真的健康吗？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="什么样的手麻要警惕？这是身体的报警信号！">
                                                    <span class="sort-number">3</span>
                                                    <span class="content">什么样的手麻要警惕？这是身体的报警信号！</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="又双叒叕流产！怎么才能保住宝宝？">
                                                    <span class="sort-number">4</span>
                                                    <span class="content">又双叒叕流产！怎么才能保住宝宝？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="一周啪7次，为啥还是怀不上？">
                                                    <span class="sort-number">5</span>
                                                    <span class="content">一周啪7次，为啥还是怀不上？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="私处颜色深浅，到底跟什么有关？">
                                                    <span class="sort-number">6</span>
                                                    <span class="content">私处颜色深浅，到底跟什么有关？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="怀孕10天后，孕妈常见5大明显征兆!">
                                                    <span class="sort-number">7</span>
                                                    <span class="content">怀孕10天后，孕妈常见5大明显征兆!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="睡觉流口水 要警惕五种病">
                                                    <span class="sort-number">8</span>
                                                    <span class="content">睡觉流口水 要警惕五种病</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="&amp;ldquo;糖尿病前期干预&amp;rdquo;，您需要知道的5要点">
                                                    <span class="sort-number">9</span>
                                                    <span class="content">&ldquo;糖尿病前期干预&rdquo;，您需要知道的5要点</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="经常跷二郎腿对身体有害吗？">
                                                    <span class="sort-number">10</span>
                                                    <span class="content">经常跷二郎腿对身体有害吗？</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul style="display: none;">
                                            <li>
                                                <a target="_blank" href="#" class="title" title="射精=性高潮？你不知道的真相">
                                                    <span class="sort-number">1</span>
                                                    <span class="content">射精=性高潮？你不知道的真相</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="私处颜色深浅，到底跟什么有关？">
                                                    <span class="sort-number">2</span>
                                                    <span class="content">私处颜色深浅，到底跟什么有关？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="什么样的手麻要警惕？这是身体的报警信号！">
                                                    <span class="sort-number">3</span>
                                                    <span class="content">什么样的手麻要警惕？这是身体的报警信号！</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="胸闷气短是怎么回事">
                                                    <span class="sort-number">4</span>
                                                    <span class="content">胸闷气短是怎么回事</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="睡硬板床真的对腰好吗？">
                                                    <span class="sort-number">5</span>
                                                    <span class="content">睡硬板床真的对腰好吗？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="肾阴虚的症状">
                                                    <span class="sort-number">6</span>
                                                    <span class="content">肾阴虚的症状</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="经常挖鼻子会让鼻孔变大吗？">
                                                    <span class="sort-number">7</span>
                                                    <span class="content">经常挖鼻子会让鼻孔变大吗？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="脂肪肝不能吃肉？教你靠谱的护肝指南">
                                                    <span class="sort-number">8</span>
                                                    <span class="content">脂肪肝不能吃肉？教你靠谱的护肝指南</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="睡觉时手机放床头，真的会辐射伤脑吗？">
                                                    <span class="sort-number">9</span>
                                                    <span class="content">睡觉时手机放床头，真的会辐射伤脑吗？</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#" class="title" title="记录正畸之路，一起见证更美的你！">
                                                    <span class="sort-number">10</span>
                                                    <span class="content">记录正畸之路，一起见证更美的你！</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wy-video" id="J_VideoHook">
                                <p class="module">择医网讲堂
                                    <span></span><a href="#">更多</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="helpqs-list hide">

            </div>

        </div>

        <div id="gf">
            <div class="g-container">
                <div class="g-footer g-clear">
                    <a class="logo g-left" href="/" onmousedown="return _smartlog(this,'BTM')"></a>
                    <div class="links g-left">
                        <dl class="one g-clear">
                            <dt>关于择医网</dt>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">关于我们</a></dd>
                            <dd><a href="#" onmousedown="return _smartlog(this,'BTM')">友情链接</a></dd>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">加入择医网</a></dd>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">版权声明</a></dd>
                            <dd><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">联系我们</a></dd>
                            <dd class="last"><a href="#" rel="nofollow" target="_blank" onmousedown="return _smartlog(this,'BTM')">新浪微博</a></dd>
                            <dd><a href="#" onmousedown="return _smartlog(this,'BTM')">网站地图</a></dd>
                            <dd><a href="#" onmousedown="return _smartlog(this,'BTM')">知识库</a></dd>
                        </dl>
                        <dl class="two">
                            <dd class="partner"><a href="#" onmousedown="return _smartlog(this,'BTM')">医院合作</a></dd>
                            <dd class="help"><a href="#" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">客服中心</a></dd>
                        </dl>
                        <div class="clear"></div>
                    </div>
                    <div class="code g-left">
                        <a class="nihe" href="http://www.nihe.org.cn" rel="nofollow" target="_blank">中国健康教育中心<br/>卫生部新闻宣传中心</a>
                        <a class="cha" href="http://www.cha.org.cn/" rel="nofollow" target="_blank">中国医院协会<br/>门急诊管理专业委员会</a>
                        <a class="fudanmed" href="http://www.fudanmed.com/manage/index.aspx" rel="nofollow" target="_blank">上海复旦医院管理公司</a>
                        <a class="cfnews" href="http://www.cfnews.org.cn" rel="nofollow" target="_blank">中国家庭报<br/>卫计委人口文化发展中心</a>
                        <div class="clear"></div>
                    </div>
                    <div class="internation g-right">
                        <a href="http://icih.h.gov.cn/" rel="nofollow" target="_blank"><i></i>
								<h3>国际互联网医疗大会</h3>
								<p>International Conference</p>
								<p>on Internet Healthcare</p>
							</a>
                    </div>
                </div>
                <p class="copyright">
                    版权所有：&nbsp;&nbsp;&nbsp;
                    <a href="#" rel="nofollow"></a>&nbsp;&nbsp;
                    <a href="#" rel="nofollow"></a>&nbsp;&nbsp;
                    <a class="alliance" href="#" target="_blank" rel="nofollow"></a>
                    <a class="alliance attestation" href="#" target="_blank" rel="nofollow"></a>
                    <a class="record" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"></a>

                </p>
                <div style="width:300px;margin:0 auto; padding:20px 0;">
                    <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010902000463" rel="nofollow" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="https://static.guahao.cn/img/ghs.png" style="float:left;" />
                        <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">苏ICP备16006821号-2</p>
                    </a>
                </div>
            </div>
        </div>

        <div id="gm-bg"></div>
        <div id="gm-mask">
        </div>
        <script type="text/javascript">
            $GC = {
                debug: false,
                echartServer: '//im-web.guahao.cn',
                isLogined: true,
                guahaoServer: 'https://www.guahao.com',
                staticServer: 'https://static.guahao.cn',
                imageServer: 'https://h2img.guahao.com',
                kanoServer: 'https://kano.guahao.cn',
                serviceServer: 'https://service.guahao.com',
                eopsServer: 'http://doctor.guahao.com',
                wepayServer: 'https://wepay.guahao.com',
                mobilevalidcodepwd: 'lvxian95169124',
                version: "1535436384237752",
                encodeId: "54F020F27593F4FC",
                jsCPath: "https://static.guahao.cn" + "/common/js",
                jspath: "https://static.guahao.cn" + "/front/portal-pc-static/js",
                domainEnd: 'guahao.com',
                bbsServer: 'https://bbs.guahao.com',
                gatewayServer: 'https://api-gateway.guahao.com',
                cloudcardServer: "https://service-api-finance.guahao.com",
                jkljServer: 'https://www.healthhlj.cn',
                weiYiH5GuahaoServer: 'https://wy.guahao.com'
            };

            // $GS { Array } - the init parameters for startup
            $GS = [
                $GC.jspath + "/plugins/scout.js?_=1535436384237752",
                $GC.jspath + "/plugins/raven.js?_=1535436384237752",
                $GC.jsCPath + "/base/jquery-1.8.1.min.js",
                $GC.jspath + "/base/GH.js?_=1535436384237752",
                $GC.jsCPath + "/plugins/validator.js?_=20160129",
                function() {

                    // load common module
                    GL.load([GH.adaptModule("common")]);

                    // load the modules defined in page
                    var moduleName = $("#g-cfg").data("module");
                    if (moduleName) {
                        var module = GH.modules[moduleName];
                        if (!module) {
                            module = GH.adaptModule(moduleName);
                        }
                        if (module) {
                            GL.load([module]);
                        }
                    }

                    if ($GU.isIE6()) {
                        GL.load([$GC.jspath + "/hack/ie6.js"]);
                    }
                }
            ];
        </script>
        <script type="text/javascript" src="https://static.guahao.cn/front/portal-pc-static/js/base/GL.js?_=1535436384237752"></script>
        <script>
            //同盾token 发送
            (function() {
                _fmOpt = {
                    partner: 'weiyi',
                    appName: 'weiyi_web',
                    token: "weiyi-" + new Date().getTime() + '-' + Math.random().toString(16),
                    fmb: true,
                    getinfo: function() {
                        return "e3Y6ICIyLjUuMCIsIG9zOiAid2ViIiwgczogMTk5LCBlOiAianMgbm90IGRvd25sb2FkIn0=";
                    }
                };
                var cimg = new Image(1, 1);
                cimg.onload = function() {
                    _fmOpt.imgLoaded = true;
                };
                cimg.src = "https://fp.fraudmetrix.cn/fp/clear.png?partnerCode=weiyi&appName=weiyi_web&tokenId=" + _fmOpt.token;
                var fm = document.createElement('script');
                fm.type = 'text/javascript';
                fm.async = true;
                fm.src = '//static.fraudmetrix.cn/v2/fm.js?ver=0.1&t=' + (new Date().getTime() / 3600000).toFixed(0);
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fm, s);
                setTimeout(function() {
                    var fmCode = _fmOpt.getinfo();
                    if (fmCode.length <= 256) {
                        setCookie('_fm_code', _fmOpt.getinfo())
                    };
                }, 1200);

                function setCookie(name, val) {
                    var expires = '; expires=' + new Date(new Date().getTime() + 30 * 24 * 3600 * 1000).toUTCString()
                    document.cookie = [name, '=', encodeURIComponent(val), expires, '; path=/'].join('')
                }
            })();
        </script>

        <script>
            (function() {
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                } else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
        </script>
        <div class="hide">
            <script type="text/javascript">
                (function() {

                    // baidu
                    var hm = document.createElement("script");
                    hm.src = "https://hm.baidu.com/hm.js?5697507823ecd633819db0771bb99cfb";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);
                })();
            </script>
        </div>
</body>

</html>