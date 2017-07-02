<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<!-- saved from url=(0034)http://weibo.com/signup/signup.php -->
<html xmlns="#"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--注册登录header-->

<link href="./css/frame.css" type="text/css" rel="stylesheet">
<link href="./css/layer_login_v5.css" type="text/css" rel="stylesheet">
<link href="./css/register.css" type="text/css" rel="stylesheet">
<link href="./css/register(1).css" type="text/css" rel="stylesheet">

<script type="text/javascript" charset="utf-8" async="" src="./js/suda.js.下载"></script><script type="text/javascript">
var $CONFIG = {};
$CONFIG['lang'] = "zh-cn";
</script>
<!--/注册登录header-->
<title>微博注册</title>
<script charset="gb2312" id="ssoLoginScript" type="text/javascript" src="./php/prelogin.php"></script></head>
<body class="B_register B_reg_tel ">
<script type="text/javascript">
$CONFIG.key = 'BD325CE52FC6BA090AC0C7A2039236587F99C30FA518F601F2AD33019514EE5A4340A964853E1BDF5374AB4AC22F5CFF3288E5DB94E6752B4999972DF4E23DACACAE4E4DCFB6CBAE256F1B19C4BA892D54C7A3E068F93AB47EC50635556FC223F02CB1F520631E2F03E5509B6C1E24DFB7962BCD6DC74159BF0E5AFC03D9A00D';
$CONFIG.key_plus = '10001';
$CONFIG.province = '11';
$CONFIG.city = '';
$CONFIG.closeSendsms = '';
$CONFIG.page = 'mobile';
</script>
---------------------------------------------------------------------------------------------------------------------------------------
                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/privileges" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="title">手机号</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="title" placeholder="请输入权限名称">
                                <small>设置密码</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="立即注册" />
                            </div>
                        </div>
                    </form>

-------------====================================================================================================================================================



	<div class="W_nologin">
	    <div class="W_header_line"></div>
    	<div class="W_reg_header W_logo_wave">
        	<div class="W_nologin_logo_big"></div>
        </div>
        <div class="W_nologin_main main_radius_bg">
                    		        	<div class="main_tab_line">
					<a class="W_f22 W_Yahei cur" href="javascript:void(0);">个人注册</a>
					<span class="vline">|</span>
					<a class="W_f22 W_Yahei" href="#">官方注册</a>
				</div>
			                        <div class="W_reg_info clearfix" id="pl_account_regmobile">
            	<div class="W_reg_form">
                        		                	                    <div class="info_list clearfix" node-type="mobilesea_wrapper">
                        <div class="tit"><span class="mobile_ico"></span><i>*</i>手机：</div>
                        <div class="inp">
                            <div class="flag_tel clearfix">
                                <!-- 获得焦点时增加  -->
                                <a href="javascript:void(0);" class="tel_country CH" node-type="mobilesea_select"></a>
                                <input type="hidden" name="zone" value="0086" node-type="mobilesea_selectvalue">
                                <div class="W_input foreign_tel"><span class="tel_forenum" node-type="mobilesea_txt">0086</span>
                                <input type="text" node-type="newmobilesea" action-data="text=请输入您的手机号码" action-type="text_copy" name="username" class="tel_num" value="" autocomplete="off">
                                <div style="position:absolute; top:320px; left:100px; z-index:99;display:none;" class="layer_menu_list msg_set_select layer_set_country" node-type="mobilesea_selectlayer">
						            <!-- 选中态 select, a内增加 em -->
						            <ul class="y_scroll">
										<li class="select" action-type="select" action-data="key=CH&amp;code=0086"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>中国</a></li>
										<li action-type="select" action-data="key=HK&amp;code=00852"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>中国香港</a></li>
										<li action-type="select" action-data="key=MO&amp;code=00853"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>中国澳门</a></li>
										<li action-type="select" action-data="key=TW&amp;code=00886"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>中国台湾</a></li>
										<li action-type="select" action-data="key=US&amp;code=001"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>美国</a></li>
										<li action-type="select" action-data="key=CA&amp;code=001"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>加拿大</a></li>
										<li action-type="select" action-data="key=BR&amp;code=0055"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>巴西</a></li>
										<li action-type="select" action-data="key=MY&amp;code=0060"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>马来西亚</a></li>
										<li action-type="select" action-data="key=AU&amp;code=0061"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>澳洲</a></li>
										<li action-type="select" action-data="key=JP&amp;code=0081"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>日本</a></li>
										<li action-type="select" action-data="key=KP&amp;code=0082"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>韩国</a></li>
										<li action-type="select" action-data="key=SG&amp;code=0065"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>新加坡</a></li>
										<li action-type="select" action-data="key=UK&amp;code=0044"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>英国</a></li>
										<li action-type="select" action-data="key=FR&amp;code=0033"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>法国</a></li>
										<li action-type="select" action-data="key=RU&amp;code=007"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>俄罗斯</a></li>
										<li action-type="select" action-data="key=ID&amp;code=0091"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>印度</a></li>
										<li action-type="select" action-data="key=TH&amp;code=0066"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>泰国</a></li>
										<li action-type="select" action-data="key=DE&amp;code=0049"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>德国</a></li>
										<li action-type="select" action-data="key=IN&amp;code=0062"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>印尼</a></li>
										<li action-type="select" action-data="key=KH&amp;code=00855"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>柬埔寨</a></li>
										<li action-type="select" action-data="key=MM&amp;code=0095"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>缅甸</a></li>
										<li action-type="select" action-data="key=BN&amp;code=00673"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>文莱</a></li>
										<li action-type="select" action-data="key=PH&amp;code=0063"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>菲律宾</a></li>
										<li action-type="select" action-data="key=VN&amp;code=0084"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>越南</a></li>
										<li action-type="select" action-data="key=LA&amp;code=00856"><a href="javascript:void(0);"><em class="W_ico12 icon_addone"></em>老挝</a></li>
									</ul>
								</div>
						        </div>
                            </div>
                            <div class="attachment">或使用<a node-type="link_regemail" href="#">邮箱注册</a></div>
                        </div>
                        <div class="tips" node-type="mobilesea_tip"></div>
                    </div>
                                        <div class="info_list clearfix">
                    	<div class="tit"><i>*</i>设置密码：</div>
                        <div class="inp">
                        	<input node-type="password" action-data="" action-type="text_copy" name="passwd" type="password" class="W_input" value="">
                        </div>
                        <div node-type="password_tip" class="tips"></div>
                    </div>

                                        <input type="hidden" name="2fe7f4513171cc97e44509d6337b58e4" value="775c17550e5ba5c835ebad7a6fd6b951">
                                        <input type="hidden" name="3c3eeba9079d690951959b83946c1838" value="e7e008b6c41b626ec17e8af2958ef1c5">
                                        <input type="hidden" name="9885df2efbe5ae6ca88ace23c6164cc7" value="b606731a59b8be23f295e1effe409b03">
                                        <input type="hidden" name="c45ccd02c9fa5defe9b6b2d4a3272911" value="a76b511ac3b6f72d8ba87d5ed8eb5e35">
                                        <input type="hidden" name="6c27c2a6656237077782fa7f8a0e3bef" value="4d3e7cb64e53d96e104110490c67491d">
                                        <input type="hidden" name="d5d30e49c658bd09984960635cf17563" value="bca31cdcf10a9afebf1a7b0f02afb659">
                                        <input type="hidden" name="04d3f33d15ed2ad42258231aeb1d7e8a" value="c628490e1516cc323942a5e6f5aa990d">
                                        <input type="hidden" name="775c17550e5ba5c835ebad7a6fd6b951" value="461e8bf6bb0a894a72cb7f42af397fed">
                                        <input type="hidden" name="e7e008b6c41b626ec17e8af2958ef1c5" value="816e113d0b35144a804ba4df65fb9fab">
                                        <input type="hidden" name="b606731a59b8be23f295e1effe409b03" value="8e47bfe27c71ecc6300f6a415d2178ff">
                                        <input type="hidden" name="a76b511ac3b6f72d8ba87d5ed8eb5e35" value="47086b33c0caca367d96213cc0b025da">
                                        <input type="hidden" name="4d3e7cb64e53d96e104110490c67491d" value="42d75b8abc13300c50e0ab10af61b1ec">
                                        <input type="hidden" name="inviteCode" value="">
                    <input type="hidden" name="from" value="">
                    <input type="hidden" name="callback" value="">
                    <input type="hidden" name="mcode" value="">
                    <input type="hidden" name="mbk" value="">
                    <input type="hidden" name="regtime" value="1498461728">
                    <input type="hidden" name="salttime" value="d143aad86d9cba2b9a76275a8f227172">
                    <input type="hidden" name="sinaid" value="f36b61ce5190cd30fe305a1557ab4799">
                    <input type="hidden" name="page" value="mobile">
                    <input type="hidden" name="invitesource" value="0">
                    <input type="hidden" name="lang" value="zh-cn">
                    <input type="hidden" name="backurl" value="">
                    <input type="hidden" name="appsrc" value="">
                    <input type="hidden" name="showlogo" value="">
                    <input type="hidden" name="c" value="">
                                        <div node-type="activation_wrapper" class="info_list clearfix">
                    	<div class="tit"><i>*</i>激活码：</div>
                    	<div class="inp active">
                        	<a href="javascript:void(0);" class="W_btn_e" action-type="btn_sms_activation" node-type="btn_sms_activation" action-data="type=sendsms"><span>免费获取短信激活码</span></a>
                        	<a href="javascript:void(0);" class="W_btn_e_disable" style="display:none" node-type="btn_sms_activation_disable"><span><em node-type="sms_timer">180</em>秒后重新获取短信</span></a>
                        	<input node-type="activation" name="pincode" type="text" class="W_input" value="" maxlength="6">
                            <div class="attachment"><a href="#">收不到验证码？</a></div>
                        </div>
                        <div class="tips" node-type="activation_tip">
                        </div>
                    </div>
                    
                    <div class="info_submit clearfix">
                        <div class="inp">
                        	                        	<a action-type="btn_submit" class="W_btn_big" suda-uatrack="key=tblog_register_page&amp;value=register_now_button" href="javascript:void(0);" refake-type="submit" node-type="btn_submit"><span>立即注册</span></a>
                                                    </div>
                    </div>
                    <div class="info_list clearfix">
                        <div class="inp verify">
                        	<p class="agreement"><a href="#" target="_blank">微博服务使用协议</a></p>
                        	<p class="agreement"><a href="#" target="_blank">微博个人信息保护政策</a></p>
                            <p class="agreement"><a href="#" target="_blank">全国人大常委会关于加强网络信息保护的决定</a></p>
                        </div>
                    </div>
                </div>
                <div class="W_reg_sidebar">
                	<p class="p1 line">已有帐号，<a href="/">直接登录»</a></p>
                    <p>微博注册帮助</p>
                    <div class="reg_help">
                    	<ul class="help_list">
                        	<li><i>1</i><a target="_blank" href="#">微博注册操作指南</a></li>
                            <li><i>2</i><a target="_blank" href="#">手机注册时提示手机号码已被绑定怎么办?</a></li>
                            <li><i>3</i><a target="_blank" href="#">注册微博时昵称显示“已经被注册”如何处理?</a></li>
                            <li><i>4</i><a target="_blank" href="#">注册时提示"你所使用的IP地址异常",该怎么办?</a></li>
                        </ul>
                        <a target="_blank" href="#" class="help_more">更多帮助»</a>
                    </div>
                </div>
            </div>
        </div>
        <!--注册登录footer-->
        <div class="nologin_footer clearfix">
	<div class="left_link">
		<i class="footer_logo"></i>
		<em class="company_name">北京微梦创科网络技术有限公司</em>
        <a href="#">京网文[2011]0398-130号</a>
        <a href="#">京ICP备12002058号</a>
	</div>
	<div class="copy">
		<span>Copyright © 2009-2017 WEIBO</span>
				<select id="pl_content_changeLanguage" action-data="login=0">
			<option selected="selected" value="zh-cn">中文(简体)</option>
			<option value="zh-tw">中文(台湾)</option>
			<option value="zh-hk">中文(香港)</option>
			<option value="en-us">English</option>
		</select>
			</div>

</div>
<!-- SUDA_CODE_START -->
<noscript> &lt;img width="0" height="0" src="#" border="0" alt="" /&gt; </noscript>
<script type="text/javascript" charset="utf-8">
(function() {
    var doc = document,
        wa = doc.createElement('script'),
        s = doc.getElementsByTagName('script')[0];
    wa.type = 'text/javascript';
    wa.charset = 'utf-8';
    wa.async = true;
    wa.src = "#";
    s.parentNode.insertBefore(wa, s);
})();
</script>
<!-- SUDA_CODE_END -->        <!--/注册登录footer-->
    </div>
    <img src="./注册_files/arrivelog" style="height:1px;width:1px;filter:alpha(Opacity=0);-moz-opacity:0;opacity:0;">

<script src="./js/registerSSO.js.下载" type="text/javascript"></script>
<script src="./js/mobile.js.下载" type="text/javascript"></script>

</body></html>