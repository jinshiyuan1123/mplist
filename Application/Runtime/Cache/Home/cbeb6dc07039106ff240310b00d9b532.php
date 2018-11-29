<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="dns-prefetch" href="https://static.guahao.cn">	
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


	<title>登录 | 微医(挂号网)-互联网医院在线诊疗平台</title>
			   	<meta name="keywords" content="微医登录,挂号网登录" />
			   	<meta name="description" content="微医（挂号网）注册页面，微医（挂号网）怎么注册使用 - 微医（www.guahao.com）致力于打造实名医患交流的互联网健康服务平台。聚合了全国超过3900家重点医院，建立了全国三级医院30万名医生的专长库，是您合作的首选平台。" />
<link rel="canonical" href="https://www.guahao.com/user/login"/>
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://wy.guahao.com/mobile/login">
<meta name="mobile-agent" content="format=html5; url=https://wy.guahao.com/mobile/login">
<meta http-equiv="Cache-Control" content="no-transform" />

<meta property="wb:webmaster" content="3b0138a4c935e0f6" />
<meta property="qc:admins" content="341606771467510176375" />
	<link rel="shortcut icon" href="https://static.guahao.cn/favicon.ico" />

	<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/portal.base.min.css?v=1542352557776f11" type="text/css"/>
	<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/portal.basic.min.css?v=1542352557776f11" type="text/css"/>
	<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/portal.hdd.min.css?v=1542352557776f11" type="text/css"/>
	<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/portal.content.min.css?v=1542352557776f11" type="text/css"/>
	<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/style.min.css?v=1542352557776f11" type="text/css"/>
	<link rel="stylesheet" href="https://static.guahao.cn/common/css/animate.min.css?v=20141222" type="text/css"/>
  <script src="/Public/his/vendor/jquery/jquery.min.js"></script>
    <script src="/Public/his/vendor/layer/layer.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="https://static.guahao.cn/front/portal-pc-static/css/ie6.css?v=1542352557776f11"/>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="screen" href="https://static.guahao.cn/front/portal-pc-static/css/ie7.css?v=1542352557776f11"/>
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="screen" href="https://static.guahao.cn/front/portal-pc-static/css/ie8.css?v=1542352557776f11"/>
<![endif]-->

<script  type="text/javascript">
	$GF = [];

	GreenLine = {};
	// 打点日志全局变量
	GreenLine.Log = {
		url:'https://track.guahao.cn/blank.gif?',
		requestMethod:'GET',
		loginId:'',
		perSessiionId:'1542528638096018725013172',
		shortSessionId:'1542528638101',
		referurl:'http://www.sou.com/home',
		userAgent:'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
		errorEventName:'portal_pc_js_error',
		token: "",
		monitorLog : false
	}
	// 老的埋点，已废弃，后面统一删除HTML上的埋点
	function _smartlog(link,mod){return true;};
</script>
 
		 
		<style>
			html, body{
				height: 100%;
			}
		</style>
	</head>
	<body>
		<div class="g-wrapper">
			<div id="gc">
				


<input type="hidden" id="g-cfg" data-module="new-account" data-rightbar="0">
<div class="g-container account-ui-v3 user-login-v3 J_NewLogin">
	<div class="big-bg">
		<!-- <div class="bg-cover"></div> -->
	</div>
	<div class="main-box J_MainBox">
		<div class="nav g-clear">
			<li class="main-current J_MainTab"><span>登录</span>&nbsp;&nbsp;<i>▪</i>&nbsp;&nbsp;<a href="<?php echo U('home/index/register');?>">注册</a></li>
			<li class="download-normal">扫一扫</li>
		</div>
		<div class="tab-list ">
			<div class="tab-listcon J_TabList">
				<div class="tab-main g-clear J_TabMain">
					<div class="form-container">
						<form action="<?php echo U('home/index/doLogin');?>" method="post" onsubmit="return Checkbox();">
							<!-- <form action="" method="post" onsubmit="return Checkbox();"> -->
							<div class="g-tips-box-error hide">
								<span class="gi gi-error"></span>
								<span class="content">
								</span>
							</div>
							<input type="hidden" name="method" value="dologin"/>
							<input type="hidden" name="target" value="/"/>
							<ul>
								<li class="icon-line">
									<label class="item-icon icon-user"></label>
									<input type="text" id="mobile" name="mobile" class="form-input" placeholder="手机、邮箱或用户名" tabindex="1">
								</li>
								<li class="icon-line">
									<label class="item-icon icon-pwd"></label>
									<input type="password" id="my_password" autocomplete="off" disableautocomplete  name="my_password" class="form-input" placeholder="密码" maxlength="20" tabindex="2">
									
								</li>
								<li>
									<input type="text" id="verify_code" name="verify_code"  class="form-input code-text" placeholder="验证码" ">
									<a href="javascript:void(0)" title="换一张" class="captcha J_Captcha J_RefreshCaptcha">
										 <img src="/home/Login/createVerify" width="40%" onclick="this.src='/home/Login/createVerify?id='+Math.random()" id="vimg" />
								

									</a>
								</li>
								
								<li class="action-bar">
									<a href="javascript:;"   monitor="userlogin,login,login"><input type="submit" class="gbb gbt-green" name="登&nbsp;录" style="border:5px;"></a>
								</li>
								<li class="auto-login">
									<input type="checkbox" id="autoLogin" name="autologin" monitor="userlogin,login,auto_login"><label for="autoLogin">自动登录</label>
									<div class="fo-pwd">
										<a href="<?php echo U('/home/index/forget');?>" class="forget-ps" target="_blank" monitor="userlogin,login,forget_password">忘记密码？</a>
									</div>			
								</li>
							</ul>
						</form>
					</div>
					<div class="third-login">
						<i class="or">或</i>
						<div class="qrcode-wrapper">
                            <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/app-login.jpg">
							<span>下载APP</span>
						</div>
                        <div class="qrcode-wrapper secondary">
                            <img src="https://static.guahao.cn/front/portal-pc-static/img/qr/drain/wechat-subscription.jpg">
                            <span>关注公众号</span>
                        </div>
						<h5>使用第三方登录平台</h5>
						<p class="third-platform J_LoginList">
						
						    <a href="https://www.guahao.com/partners/qq/login" class="icon-qq J_Social" monitor="other_login,other_login,qq">QQ</a>
                            <a href="https://www.guahao.com/tblogin/tbfastlogin" class="icon-taobao" monitor="other_login,other_login,taobao">淘宝</a>
                            <a href="https://www.guahao.com/alipayFastLogin/getFastLoginInfo" class="icon-alipay J_Social" monitor="other_login,other_login,zhifubao">支付宝</a>
                            <a href="https://www.guahao.com/partners/weixin/login" class="icon-weixin J_Social" monitor="other_login,other_login,weixin">微信</a>
                            <a href="https://www.guahao.com/partners/sina/fastlogin" class="noMrgR icon-sina J_Social" monitor="other_login,other_login,sina">新浪微博</a>
                        
						</p>
						<div class="go-home">
							 <a href="https://www.guahao.com" monitor="userlogin,userlogin,home_back">返回首页</a>
						</div>
					</div>
				</div>
				<div class="tab-download g-clear J_TabDownload">
					<div class="qr-inner">
						<ul class="g-clear">
							<li><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-user.png" alt=""><p>下载<a href="https://www.guahao.com/intro/userapp" monitor="scan_download,scan_download,user_app">微医APP</a></p></li>
							<li class="wy-qr"><img src="https://static.guahao.cn/front/portal-pc-static/img/account/v3/qr-doctor.png" alt=""><p>下载<a href="https://www.guahao.com/intro/drapp" monitor="scan_download,scan_download,doctor_app">微医生APP</a></p></li>
						</ul>
					</div>
				</div>
			</div>
            <div class="policy-info login">
                登录即代表您已阅读并同意
                <a href="https://www.guahao.com/agreement" target="_blank">《微医用户注册协议》</a>
                <a href="https://www.guahao.com/agreement/privacy_policy" target="_blank">《法律声明及隐私权政策》</a>
            </div>
			<div class="switch-login"><a href="http://doctor.guahao.com/user/login" monitor="userlogin,doctor_log,doctorlog">医生</a></div>
		</div>
	</div> 
	<div class="footer J_footer">
		<ul class="ftCon">
			<li class="ft-king">
				<i class="icon-left"></i>
				<h4>专业的平台</h4>
				<p>三甲医院号源直供、服务挂号上亿人次</p>
			</li>
			<li class="ft-doc">
				<i class="icon-left"></i>
				<h4>知名的医师</h4>
				<p>知名医疗资源、精诚解决您的疑难杂症</p>
			</li>
			<li class="ft-consult">
				<i class="icon-left"></i>
				<h4>权威的问诊</h4>
				<p>多样化问诊模式、快速精准解答问题</p>
			</li>
			<li class="ft-news"> 
				<i class="icon-left"></i>
				<h4>全面的资讯</h4>
				<p>名医讲堂、时事健康资讯一手掌握</p>
			</li>
		</ul>
	</div>
</div>
</div>
<script type="text/javascript">
       
    var enid = '<?php echo ($enid); ?>';

    var js_Geetest_ok = 0;
    var _captchaObj;

    $(function () {


        var handler = function (captchaObj) {
            _captchaObj = captchaObj;
            // 将验证码加到id为captcha的元素里
            captchaObj.appendTo("#captcha");


            captchaObj.onSuccess(function () {

                js_Geetest_ok = 1;

            });


        };
        // 获取验证码
        $.get("<?php echo U('His/Login/geetest_show_verify');?>", function (data) {

            // 使用initGeetest接口
            // 参数1：配置参数，与创建Geetest实例时接受的参数一致
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "float", // 产品形式
                offline: !data.success
            }, handler);


        }, 'json');


        //选项卡切换
        $('.tabBtn > li').click(function () {
            $(this).addClass('on').siblings('li').removeClass('on').closest('.tabBtn');
            $(this).closest('.tabBtn').siblings('.tabBox').find('> li').eq($(this).index()).addClass('on').siblings('li').removeClass('on');
        });

        if (enid.length > 0) check_qr_scan(enid);

        $("#btn_submit").click(function () {
            var u = $("#mobile_alias").val();
            var p = $("#signin-password").val();
            var test = $('.geetest_challenge').val();
            var geetest_challenge = $('.geetest_challenge').val();
            var geetest_validate = $('.geetest_validate').val();
            var geetest_seccode = $('.geetest_seccode').val();


            if (u == '' || u.length == 0) {
                layer.msg('请填写手机号或邮箱');
                return false;
            }

            if (p == '' || p.length == 0) {
                layer.msg('请填写登录密码');
                return false;
            }
            // if (js_Geetest_ok == 0) {
            //     layer.msg('请点击验证码验证');
            //     return false;
            // }

            var f = $('input[type=hidden]').val();

            $.post('/login/userlogin', {
                u: u,
                p: p,
                __hash__: f,
                geetest_challenge: geetest_challenge,
                geetest_validate: geetest_validate,
                geetest_seccode:geetest_seccode
            }, function (res) {

                if (res.status != 0){
                    js_Geetest_ok=0;
                    _captchaObj.reset();
                }

                if (res.status == 0) {
                    var d = res.data;
                    window.location.href = '/login/enlogin?enuid=' + d.enuid;
                } else if (res.status == 5) {
                    layer.msg(res.msg);
                } else {
                    layer.msg(res.msg);
                }
            }, 'json');

        });
    });
function Checkbox() {

            var u = $("#mobile").val();
            var p = $("#my_password").val();
            var verify_code = $("#verify_code").val();

            if(u==''||u.length==0){
                layer.msg('请填写手机号或邮箱');
                return false;
            }

            if(p==''||p.length==0){
                layer.msg('请填写登录密码');
                return false;
            }

            if(verify_code==''||verify_code.length==0){
                layer.msg('请填写登录验证码');
                return false;
            }
            var agreement =document.getElementById("autoLogin").checked;
            if(!agreement){
                layer.msg('阅读并同意服务协议及隐私权政策后进行下一步！');
                    return false;
            }

            // var f = $('input[type=hidden]').val();


            // $.post('/home/index/doLogin',{u:u,p:p,verify_code:verify_code,__hash__:f},function (res) {

            // 	alert(res.status);
            //     if(res.status==0){
            //         var d = res.data;
            //         window.location.href='/home/login/enlogin?enuid='+d.enuid;
            //     }else if(res.status==5){
            //          $("#vimg").attr('src','/home/login/createVerify');
            //         $("#verify_code").val('');
            //         layer.msg(res.msg);
            //     }else{
            //         layer.msg(res.msg);
            //     }
            // },'json');

        
		}
	
</script>



<div class="hide">
	
</div>
		</div>
	</body>
</html>