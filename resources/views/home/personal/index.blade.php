﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>凤凰网微博-点滴生活，精彩世界</title>
<link href="../styles/MyWB.css" type="text/css" rel="stylesheet" />
<link href="../styles/global.css" type="text/css" rel="stylesheet" />
<script language="javascript">
<!--

window.onload = function(){
}
-->
</script>
</head>

<body>
<!-- 总容器 container开 始-->
<div id="container">
    <!-- topDIV 开始 -->
    <div id="top">
      <!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="CustomerIndex.html"><img src="../images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="CustomerIndex.html"><img src="../images/LogoMaker.gif" width="128" height="60" alt="" /></a>
          </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li><a href="CustomerIndex.html">首页</a></li>
                <li><a href="MyWB.html">我的微博</a></li>
                <li><a href="#">找人</a></li>
                <li><a href="setting.html">设置</a></li>
                <li><a href="#">手机</a></li>
                <li><a href="#">帮助</a></li>
                <li><a href="/logout">退出</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- topDIv 结束-->
    <!-- 内容总容器 mainDIV 开 始-->
<div id="main">
		<!-- 左侧mainBannerDIV 开始 -->
      	<div id="mainBanner">
            <!-- 左侧mainBannerTopDIV 开始 -->
            <div id="mainBannerTop">
                <!-- 左侧mainBannerTopImgDIV 开始 -->
                <div id="mainBannerTopImg">
                </div>
            	<!-- 左侧mainBannerTopImgDIV 结束 -->
                <!-- 左侧mainBannerToWordDIV 开始 -->
                <div id="mainBannerTopWord"><font color="#330000"><b>{{Session::get('homeuser')[0]->nickname}}</b></font><br />
                <a href="#">http://t.ifeng.com/DarkDemon</a> 
                </div>
            	<!-- 左侧mainBannerTopWordDIV 结束 -->
            </div>
            <!-- 左侧mainBannerTopDIV 结束 -->
            <!-- 左侧mainBannerMenuDIV 开始 -->
            <div id="mainBannerMenu">
                <!-- 左侧mainBannerMenuTopDIV 开始 -->
                <div id="mainBannerMenuTop">
                    <!-- 左侧mainBannerMenuTopWord1DIV 开始 -->
                    <div id="mainBannerMenuTopWord1"><b>我自己</b>
                    </div>
                    <!-- 左侧mainBannerMenuTopWord1DIV 结束-->
                    <!-- 左侧mainBannerMenuTopWord2DIV 开始 -->
                    <div id="mainBannerMenuTopWord2"><img src="../images/mainBannerMenuTopWord2.gif" title="" alt="" /><a href="CustomerIndex.html">发微博</a></div>
                    <!-- 左侧mainBannerMenuTopWord2DIV 结束 -->
                </div>
            	<!-- 左侧mainBannerMenuTopDIV 结束-->
            </div>
            <!-- 左侧mainBannerMenu DIV 结束-->
            <!--自己发微博的地方-->
            <div id="mainBannerContent"> 
                <!--给微博定位-->
               <div id="mainBannerContent1">
                    <!--给微博定位-->
                  <div id="mainBannerContent2">
                     <!--个人微博-->
                     <div id="mainBannerContent2People">
                       <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 开始 -->
                        <div id="mainBannerContent2PeopleImg">
                          	<img src="../images/mainBannerContent2People1Img.gif" width="54" height="54" alt="" title="" />
                        </div>
                        <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 结束 -->
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 开始  -->
                        <div id="mainBannerContent2PeopleWord">
                        <img src="../images/biao.gif" alt="" width="17" height="13" align="absmiddle" id="pic1" title="" /> <font class="f1"><a href="#" class="a1">{{Session::get('homeuser')[0]->nickname}}:</a></font><font class="f2">&nbsp;&nbsp;{{$info->content}}</font><br />
						<font class="f3">今天&nbsp;&nbsp;11:11<div id="textright"><a href="#" class="a2">查看</a>&nbsp;&nbsp;<a href="#" class="a2">回复(3</a>)&nbsp;&nbsp;<a href="#" class="a2">转发</a>&nbsp;&nbsp;<img src="../images/star.gif" alt="" width="16" height="17" align="absmiddle" title="" /></div></font><br />
                        <a href="#" class="a1"><font class="style2">爱转发</font></a>&nbsp;&nbsp;<font class="f3">和其他31人转发过</font><br />
                            <!--微博回复栏-->
                            <div id="mainBannerContent2PeopleWordBack">
                                 <table width="400" border="0" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td><img src="../images/huifu3.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@依然</a>：事实胜于雄辩~~~<span style="color:#ccc">今天 12:20</span>   <a href="#">回复</a></td>
                                      </tr>
                                      <tr>
                                        <td><img src="../images/huifu2.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@呆呆</a>：让那帮吃人饭不办人事的人去坐动车吧！！！<span style="color:#ccc">今天 12:10</span><a href="#">回复</a></td>
                                      </tr>
                                    </table>
                            </div><br />
						</div>
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 结束  -->
                        <!--第二个人的微博-->
                    <div id="mainBannerContent2People">
                        <!-- 第二个人微博 mainBannerContent2PeopleImg DIV 开始 -->
                        <div id="mainBannerContent2PeopleImg">
                          	<img src="../images/mainBannerContent2People1Img.gif" width="54" height="54" alt="" title="" />
                        </div>
                        <!-- 第二个人微博 mainBannerContent2PeopleImg DIV 结束 -->
                        <!-- 第二个人微博 mainBannerContent2PeopleWord DIV 开始 -->
                        <div id="mainBannerContent2PeopleWord">
                        <img src="../images/biao.gif" alt="" width="17" height="13" align="absmiddle" id="pic" title="" /> <font class="f1"><a href="#" class="a1">{{Session::get('homeuser')[0]->nickname}}:</a></font><font class="f2">&nbsp;&nbsp;{{$info->content}}
</font><br /><br />
                        <img src="../images/SCT.gif" width="34" height="166" alt="" title="" /><br /><br />
						<font class="f3">07月30日&nbsp;&nbsp;12:56<div id="textright"><a href="#" class="a2">查看</a>&nbsp;&nbsp;<a href="#" class="a2">回复(4)</a>&nbsp;&nbsp;<a href="#" class="a2">转发</a>&nbsp;&nbsp;<img src="../images/star.gif" alt="" width="16" height="17" align="absmiddle" title="" /></div></font><br />
                        <a href="#" class="a1"><font class="style2">爱转发</font></a>&nbsp;&nbsp;<font class="f3">和其他26人转发过</font><br />
                        <!--微博回复栏-->
                            <div id="mainBannerContent2PeopleWordBack">
                                 <table width="400" border="0" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td><img src="../images/huifu1.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@灵步传奇</a>：社会啊~~~<a href="#"><span style="color:#ccc">08:0112:00</span>回复</a></td>
                                          </tr>
                                          <tr>
                                            <td><img src="../images/huifu4.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@DarkDemon</a>：恩啊，唉~~~~<a href="#"><span style="color:#ccc">07月31 12:00</span>回复</a></td>
                                          </tr>
                                          <tr>
                                            <td><img src="../images/huifu1.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@灵步传奇</a>：无颜以对啊..<a href="#">.<span style="color:#ccc">07月31 12:00</span>回复</a></td>
                                          </tr>
                                          <tr>
                                            <td><img src="../images/huifu2.gif" width="25" height="25" align="absmiddle" /><a href="#" class="a1">@呆呆</a>：我也无语啊！！<a href="#"><span style="color:#ccc">07月30 13:00</span>回复</a></td>
                                          </tr>
                                        </table>

                            </div><br /><br />
						</div>
                        <!-- 第二个人微博 mainBannerContent2peopleWord DIV 结束  -->
					</div>
                     </div>
                     <!--个人微博-->
                  </div>  
                  <!--给微博定位结束-->
               </div>
                 <!--给微博定位结束-->
            </div>
             <!--自己发微博的地方结束-->
        </div>
        <!-- 左侧mainBannerDIV 结束 -->                       
        <!-- 右侧mainRight DIV开始 -->
        <div id="mainRight">
            <div id="mainRight1">
               <!-- 右侧mainRightPostionFirstLine DIV 开始 -->
                <div id="mainRightPostionFirstLine">
                    <!-- 右侧mainRightPostionFirstLineIcon DIV 开始 -->
                    <div id="mainRightPostionFirstLineIcon">
                    <a href="#"><img src="../images/MainRightFirstLineTitle.gif" alt="" width="48" height="48" align="absmiddle" title="" border="0" /></a>
                    </div>
                    <!-- 右侧mainRightPostionFirstLineIcon DIV 结束 -->
                    <!-- 右侧mainRightPostionFirstLineWord1 DIV 开始 -->
                    <div id="mainRightPostionFirstLineWord1">                 
                    &nbsp;<font color="#005DC3" ><b><a href="MyWB.html" class="a1">{{Session::get('homeuser')[0]->nickname}}</a></b></font><br />
                    </div>
                    <!-- 右侧mainRightPostionFirstLineWord1 DIV 结束 -->
                    <!-- 右侧mainRightPostionFirstLineWord2 DIV 开始 -->
                    <div id="mainRightPostionFirstLineWord2">
                    <ul id="ul1">
                    <li><a href="/personal" class="a1"><font class="style1">2</font><br /><font class="style2">微博</font></a></li>
                    <li><a href="friend.html" class="a1"><font class="style1">12</font><br /><font class="style2">关注</font></a></li>
                    <li><a href="focusonyou.html" class="a1"><font class="style1">23</font><br /><font class="style2">粉丝</font></a></li>
                    </ul>
                    </div>
                <!-- 右侧mainRightPostionFirstLineWord2 DIV 结束 -->                    
                </div>
                <!-- 右侧mainRightPostionFirstLine DIV 结束 -->
                <div id="mainRightPostionFifthLine">
                    <div id="mainRightPositionFifthLineContent">
                    <a href="#" onclick="" class="a1"><font class="style4">我关注的话题</font>
                    <img src="../images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                    </div>
              </div>
                <!-- 右侧mainRightPostionSixthLine DIV 开始 -->
              <div id="mainRightPostionSixthLine">
                    <div id="mainRightPositionSixthLineContent">
                    <a href="#" onclick="" class="a1"><font class="style4">我关注的</font>
                    <img src="../images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                    </div>
                    <ul>
                    <a href="#" class="a1"><li><img src="../images/WBXM.gif" border="0" /><br /><font class="style2">微博小秘</font></li></a>
                    <a href="#" class="a1"><li><img src="../images/AXXR.gif" border="0" /><br /><font class="style2">&nbsp;&nbsp;转&nbsp;&nbsp;发</font></li></a>
                    <a href="#" class="a1"><li><img src="../images/LBXR.gif" border="0" /><br /><font class="style2">微博新人</font></li></a>
                    </ul>
                </div>
                 <!-- 右侧mainRightPostionSeventhLine DIV 开始 -->
                <div id="mainRightPostionSeventhLine">
                    <div id="mainRightPositionSevenLineContent">
                    灵步微博的成长，离不开你们。<br />
                    <font class="style2"><a href="#" class="a1">有意见要提（点击） </a><br /><br />
                    <a href="#" class="a1" onclick="set()">不良信息举报中心</a></font> 
                    </div>
                </div>
                <!-- 右侧mainRightPostionSixthLine DIV 结束 -->
          </div>
        </div>         
  </div>
  <!-- 内容总容器 mainDIV 结束-->
  <!-- footer部分 -->
  <div id="footer">
   	  <!-- footer网站链接部分 -->
   	  <div id="footerLink">      
          <ul>
           	  <li><a href="#" class="a2">灵步网介绍</a></li>
              <li><a href="#" class="a2">广告服务</a></li>
              <li><a href="#" class="a2">API</a></li>
              <li><a href="#" class="a2">诚征英才</a></li>
              <li><a href="#" class="a2">保护隐私权</a></li>
              <li><a href="#" class="a2">免责条款</a></li>
              <li><a href="#" class="a2">法律顾问</a></li>
              <li><a href="#" class="a2">意见反馈</a></li>
          </ul>
      </div>
      <!-- footer网站链接部分结束 -->
      <!-- footer网站版权信息 -->
      <div id="footerCopy">
       	  Copyright&copy;2011-2012 灵步小组 版权所有
      </div>
      <!-- footer网站版权信息结束 -->
  </div>
  <!-- footer部分结束 --> 
</div>
<!--总容器 container结束-->
</body>
</html>
