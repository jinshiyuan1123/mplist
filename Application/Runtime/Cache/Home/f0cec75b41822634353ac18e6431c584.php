<?php if (!defined('THINK_PATH')) exit();?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


	<title>健康账户</title>
		<meta name="description" content="微医微医 - 网上挂号，网上预约，找医院，找医生" />
	    <meta name="keywords" content="微医，微医，网上挂号，网上预约，找医院，找医生" />
<link rel="canonical" href="https://www.guahao.com/my/wallet/home"/>


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
		loginId:'AIBMOwNxvmdSZCpAat4hW9UpGSQJINkTYQWzJzQ5Z2ZFxgLuJcLQKg==',
		perSessiionId:'15423309907270187250131711',
		shortSessionId:'1542856607254',
		referurl:'https://www.guahao.com/my/favorite/list',
		userAgent:'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.90 Safari/537.36 2345Explorer/9.3.2.17331',
		errorEventName:'portal_pc_js_error',
		token: "",
		monitorLog : false
	}
	// 老的埋点，已废弃，后面统一删除HTML上的埋点
	function _smartlog(link,mod){return true;};
</script>
	 
    					<link rel="stylesheet" href="https://static.guahao.cn/front/portal-pc-static/css/health-account.css?v=1542352557776f11" type="text/css"/>

</head>
<body>
	<div class="g-wrapper g-page-1200">  
	<div id="gh">  
<!--[if lt IE 8]>
<div class="g-browser-update">你的浏览器实在太旧了，为了更加安全和方便地进行挂号，微医推荐您升级浏览器：<a target="_blank" href="http://browsehappy.com">立即升级</a></div>
<![endif]-->
<div class="gh-nav">
	<div class="container g-clear">
		 <div class="gh-nav">
    <div class="container g-clear">
        <div class="g-left">
            <?php if(!session('home_user_info')): ?><span class="text">您好！ 请</span>
                <span class="login"></span>
                <a href="<?php echo U('home/index/login');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,login">登录</a>
                <span class="line">|</span>
                <a target="_blank" href="<?php echo U('home/index/register');?>" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,signin">注册</a>
                <a href="http://doctor.guahao.com/user/login" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" class="doctor-login" monitor="public_head,publick_head,doctoruser"><i style="right:6px"><img src="/Public/home/doctor-login.png"></i>我是医生</a>
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
		
		
		  <div class="g-right">
                	<a href="https://www.guahao.com" rel="nofollow" onmousedown="return _smartlog(this,'TOP')" class="go-home" monitor="public_head,publick_head,wy_home"><i></i>微医首页</a>
                <span class="line">|</span>
	            <a href="https://www.guahao.com/intro/userapp" rel="nofollow" class='dl-guide J_SeoGuide' onmousedown="return _smartlog(this,'TOP')" monitor="public_head,publick_head,appdload">
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
	     	<div class="gh-certification g-clear border">	
		    	<div class="gh-logo">
		    		<a href="<?php echo U('home/index/wallethome');?>" class="logo"></a>	
		    		<span class="header-title-name">
		    		<b class="text">
		    			健康账户 
					</b>
		    		</span>
		    	</div>
		    </div>
	    </div>
		 
	</div>

	<div id="gc"> 
		



<input type="hidden" name="userToken" value="!Pq9jHVAa0Cy1MjGo6yupIUSocb34CJA0a3YAxjo-AYftrw7R_dOe-uLpHDmylVsreJR27rqD0XVavl6TjX-Y1xeOjUjjSmcvdCVm23WHEYTWtXUMJG-6ChkCHOE2AKqRBSSdPyVgZbUF4WfHWT63XamQ1FEMoPqVCY3ocyz0oVG8E" class="J_UserToken" />
<input type="hidden" name="userAppId" value="p_web_weiyi" class="J_UserAppId" />
<input type="hidden" name="IS_QYYWS" value="" class="J_IsQyyws"/>
<input type="hidden" name="isFirst" value="0" class="J_IsFirst"/>

<div id="g-cfg" class="g-container gp-health gp-wallet-home J_WalletHome" data-module="health-account">
    <div class="all">
        <div class="all-inner J_Account g-clear">
            <div class="all-box all-left">
                <div class="all-item">
                    <img src="https://static.guahao.cn/front/portal-pc-static/img/my/wallet/icon-balance.png" alt="">
                    账户余额<span class="J_AccountBalance">0.00</span>元
                </div>
                <div class="all-item">
                    <img src="https://static.guahao.cn/front/portal-pc-static/img/my/wallet/icon-redbag.png" alt="" class="icon-redbag">
                    红包余额<span class="J_Red">0.00</span>元
                </div>
                <a class="gbn gbt-blue1 J_BtnRecharge" href="javascript:;" monitor="health_acct_put">&nbsp;充 值&nbsp;</a>
                <a class="gbn gbt-blue5 J_BtnCash" href="javascript:;" monitor="health_acct_down">&nbsp;提 现&nbsp;</a>
                <p class="tip J_Tip">绑定银行卡后，您可以便捷地使用充值、提现、支付等操作</p>
            </div>
            <div class="all-box all-center">
                <div class="profit-item">昨日收益（元）<br><span class="J_ProfitYesterday">0.00</span></div>
                <div class="profit-item">累计收益（元）<br><span class="J_ProfitAll">0.00</span></div>
                <div class="profit-item">7日年化收益率<i class="J_Profit7" monitor="health_acct_benifits_introduce"></i><br><span class="J_ProfitYear">0.00</span></div>
            </div>
            <div class="all-box all-right hide J_AllRight">
                <div class="all-item">
                    <img src="https://static.guahao.cn/front/portal-pc-static/img/my/wallet/icon-bank.png" alt="">
                    我的银行卡
                </div>
                <a class="gbn gbt-orange J_AddBankCard" href="/user/user_cert?source=jkzh" monitor="health_acct_add">&nbsp;点击添加&nbsp;</a>
                <div class="hide J_BankCardInfo">
                    <img src="" class="bank-card-icon J_BankIcon"><span class="J_BankName"></span>（尾号<span class="J_EndCardNo"></span>）
                    <a href="javascript:;" class="bank-card-delete J_DeleteCard"></a>
                </div>
                <p class="tip"><a class="wallet-manage hide J_AccountManager" href="/my/wallet/modifypassword">账户管理</a></p>
            </div>
        </div>
    </div>
    <div class="all-inner">
        <div class="title">交易记录</div>
        <div class="loading J_Loading"><div></div><div></div><div></div><div></div></div>
        <div class="no-cord hide J_NoRecord">
            <img src="https://static.guahao.cn/front/portal-pc-static/img/dzyy/noapply.png" /><br>
            暂无交易记录
        </div>
        <div class="records hide J_Records">
            <ul class="J_RcordsList">
            </ul>
            <div class="record-all">
                <a href="records" monitor="health_acct_record">查看所有交易记录 >></a>
            </div>
        </div>
    </div>

</div>


<script id="J_RecordTemplate" type="text/x-jquery-tmpl"> 
    <li class="g-clear">
        <div class="record-row1">
            {{= date}} <div class="sub-content">{{= time}}</div>
        </div>
        <div class="record-row2">
            {{if dealType == '00' }}充值{{/if}}
            {{if dealType == '01' }}提现{{/if}}
            {{if dealType == '02' }}消费{{/if}}
            {{if dealType == '20' }}转账{{/if}}
            {{if dealType == '21' }}红包{{/if}}
            {{if dealType == '50' }}收益{{/if}}
            <div class="sub-content">流水号：{{= orderNo}}</div>
        </div>
        {{if dealType == '01' || dealType == '02' || dealType == '20' }}
        <div class="record-row3 green">
            - {{= money}}
        </div>
        {{else}}
        <div class="record-row3">
            + {{= money}}
        </div>
        {{/if}}
        <div class="record-row4">
            {{if dealType == 00}}
            {{if status == 00 }}充值成功{{/if}}
            {{if status == 01 }}充值处理中{{/if}}
            {{if status == 02 }}充值失败{{/if}}
            {{if status == 03 }}未确定{{/if}}
            {{if status == 05 }}充值失败{{/if}}
            {{/if}}
            
            {{if dealType == 01}}
            {{if status == 00 }}提现申请成功{{/if}}
            {{if status == 01 }}提现申请处理中{{/if}}
            {{if status == 02 }}提现申请失败{{/if}}
            {{if status == 03 }}提现申请处理中{{/if}}
            {{if status == 05 }}提现申请失败{{/if}}
            {{/if}}

            {{if dealType == 02}}
            {{if status == 00 }}<a class="gbs gbt-blue" href="javascript:;">立即付款</a>{{/if}}
            {{if status == 01 }}支付成功{{/if}}
            {{if status == 02 }}已部分退款
                {{if transactionDetails && transactionDetails == 'A04'}}
                <p style="color: #999;">退款至银行卡</p>
                {{/if}}
            {{/if}}
            {{if status == 03 }}已全额退款
                {{if transactionDetails && transactionDetails == 'A04'}}
                <p style="color: #999;">退款至银行卡</p>
                {{/if}}
            {{/if}}
            {{if status == 04 }}订单过期{{/if}}
            {{if status == 05 }}订单关闭{{/if}}
            {{if status == 06 }}退款处理中{{/if}}
            {{if status == 07 }}支付失败{{/if}}
            {{if status == 08 }}付款处理中{{/if}}
            {{/if}}

            {{if dealType == 50}}
            {{if status == 00 }}收益{{/if}}
            {{/if}}

            {{if dealType == 21}}
            {{if status == 00 }}红包领取成功{{/if}}
            {{if status == 01 }}红包领取失败{{/if}}
            {{if status == 02 }}红包领取中{{/if}}
            {{/if}}

            {{if dealType == 20}}
            {{if status == 00 }}成功{{/if}}
            {{if status == 01 }}失败{{/if}}
            {{if status == 02 }}转账处理中{{/if}}
            {{/if}}

            
        </div>
    </li>
</script>

	 
	</div>
	
		<div id="gf">
			<div class="g-container">
					<div class="g-footer g-clear">
						<a class="logo g-left" href="https://www.guahao.com" onmousedown="return _smartlog(this,'BTM')"></a>
					    <div class="links g-left">
					    	<dl class="one g-clear">
					    		<dt>关于微医</dt>
					    		<dd><a href="https://www.guahao.com/about" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">关于我们</a></dd>
					    		<dd><a href="https://www.guahao.com/friendlylink/index" onmousedown="return _smartlog(this,'BTM')">友情链接</a></dd>
					    		<dd><a href="https://www.guahao.com/recruitment/list" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">加入微医</a></dd>
					    		<dd><a href="https://www.guahao.com/statement" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">版权声明</a></dd>
					    		<dd><a href="https://www.guahao.com/contact" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">联系我们</a></dd>
					    		<dd class="last"><a href="http://e.weibo.com/95169guahaowang" rel="nofollow" target="_blank" onmousedown="return _smartlog(this,'BTM')">新浪微博</a></dd>
                                <dd><a href="https://www.guahao.com/nav" onmousedown="return _smartlog(this,'BTM')">网站地图</a></dd>
								<dd><a href="https://www.guahao.com/kb" onmousedown="return _smartlog(this,'BTM')">知识库</a></dd>
					    	</dl>
					    	<dl class="two">
					    		<dd class="partner"><a href="https://www.guahao.com/hospital/partnerinfo" onmousedown="return _smartlog(this,'BTM')">医院合作</a></dd>
					    		<dd class="help"><a href="https://www.guahao.com/help/common" rel="nofollow" onmousedown="return _smartlog(this,'BTM')">客服中心</a></dd>
					    	</dl>
					    	<div class="clear"></div>
					    </div>
						<div class="code g-left">
							<a class="nihe" href="http://www.nihe.org.cn" rel="nofollow" target="_blank" >中国健康教育中心<br/>卫生部新闻宣传中心</a>
							<a class="cha" href="http://www.cha.org.cn/" rel="nofollow" target="_blank">中国医院协会<br/>门急诊管理专业委员会</a>
							<a class="fudanmed" href="http://www.fudanmed.com/manage/index.aspx" rel="nofollow" target="_blank">上海复旦医院管理公司</a>
							<a class="cfnews" href="http://www.cfnews.org.cn" rel="nofollow" target="_blank" >中国家庭报<br/>卫计委人口文化发展中心</a>
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
							版权所有：杭州广发科技有限公司&nbsp;&nbsp;&nbsp;
							<a href="https://www.guahao.com/hcipzj" rel="nofollow">浙B2-20130007</a>&nbsp;&nbsp;
							<a href="https://www.guahao.com/medicaldrugszj" rel="nofollow">(浙)-经营性-2014-0022</a>&nbsp;&nbsp;
							<a class="alliance" href="http://www.anquan.org/authenticate/cert/?site=www.guahao.com" target="_blank" rel="nofollow"></a>
							<a class="alliance attestation" href="http://si.trustutn.org/info?sn=553170628029381014121&certType=1" target="_blank" rel="nofollow"></a>
							<a class="record" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"></a>

						</p>
					<div style="width:550px;margin:0 auto; padding:20px 0;">
						<p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">
							<a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; color:#939393">
								&nbsp;浙ICP备12034511号-2
								</a>&nbsp;
							<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010902000463" rel="nofollow" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; color:#939393">
								<img src="https://static.guahao.cn/img/ghs.png" style="float:left;">&nbsp;浙公网安备 33010902000463号
								</a>
						</p>
					</div>
			</div>
		</div> 
 
	<div id="gm-bg"></div>
<div id="gm-mask">
</div><script type="text/javascript">
	$GC = {
		debug: false,
		echartServer: '//im-web.guahao.cn',
		isLogined : true,
		guahaoServer : 	'https://www.guahao.com',
		staticServer : 'https://static.guahao.cn',
		imageServer : 'https://h2img.guahao.com',
		kanoServer: 'https://kano.guahao.cn',
		serviceServer : 'https://service.guahao.com',
		eopsServer : 'http://doctor.guahao.com',
		wepayServer : 'https://wepay.guahao.com',
		mobilevalidcodepwd : 'lvxian95169124',
		version:"1542352557776f11",
		encodeId:"058D343F84B00A4B",
		jsCPath:"https://static.guahao.cn" + "/common/js",
		jspath:"https://static.guahao.cn" + "/front/portal-pc-static/js",
		domainEnd:'guahao.com',
		bbsServer: 'https://bbs.guahao.com',
		gatewayServer: 'https://api-gateway.guahao.com',
		cloudcardServer: "https://service-api-finance.guahao.com",
		jkljServer: 'https://www.healthhlj.cn',
		weiYiH5GuahaoServer: 'https://wy.guahao.com'
	};

	// $GS { Array } - the init parameters for startup
	$GS = [
		$GC.jspath + "/plugins/scout.js?_=1542352557776f11",
		$GC.jspath + "/plugins/raven.js?_=1542352557776f11",
		$GC.jsCPath + "/base/jquery-1.8.1.min.js",
		$GC.jspath + "/base/GH.js?_=1542352557776f11",
		$GC.jsCPath + "/plugins/validator.js?_=20160129",function(){

		 // load common module
		 GL.load([GH.adaptModule("common")]);

		 // load the modules defined in page
		 var moduleName = $("#g-cfg").data("module");
		 if(moduleName){
		 	var module = GH.modules[moduleName];
		 	if(!module) {
		 		module = GH.adaptModule(moduleName);
		 	}
		 	if(module) {
		 		GL.load([module]);
		 	}
		}

		if($GU.isIE6()){
			GL.load([$GC.jspath + "/hack/ie6.js"]);
		}
	}];
</script>
<script type="text/javascript" src="https://static.guahao.cn/front/portal-pc-static/js/base/GL.js?_=1542352557776f11" ></script>
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
		var cimg = new Image(1,1);
		cimg.onload = function() {
			_fmOpt.imgLoaded = true;
		};
		cimg.src = "https://fp.fraudmetrix.cn/fp/clear.png?partnerCode=weiyi&appName=weiyi_web&tokenId=" + _fmOpt.token;
		var fm = document.createElement('script'); fm.type = 'text/javascript'; fm.async = true;
		fm.src = '//static.fraudmetrix.cn/v2/fm.js?ver=0.1&t=' + (new Date().getTime()/3600000).toFixed(0);
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fm, s);
		setTimeout(function () {
			var fmCode = _fmOpt.getinfo();
			if (fmCode.length <= 256) {
				setCookie('_fm_code', _fmOpt.getinfo())
			};
		}, 1200);
		function setCookie (name, val) {
			var expires = '; expires=' + new Date(new Date().getTime() + 30 * 24 * 3600 * 1000).toUTCString()
			document.cookie = [name, '=', encodeURIComponent(val), expires, '; path=/'].join('')
		}
	})();
</script>

<script>
	(function(){
	    var bp = document.createElement('script');
	    var curProtocol = window.location.protocol.split(':')[0];
	    if (curProtocol === 'https'){
	   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	  }
	  else{
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