<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>好友管理 灵步网微博-点滴生活，精彩每一天！</title>
<link href="../styles/global.css" type="text/css" rel="stylesheet">
<link href="../styles/friend maneger.css" type="text/css" rel="stylesheet">

<link href="../styles/global.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- 页面整体 -->
<div id="container">
       <!-- top部分DIV -->
	   <div id="top">
    	 <!-- top部分的LogoDIV -->
    	 <div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco">
           	  <img src="../images/logo_ipad.png" width="72" height="72" alt="" />
            </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord">
       	    	<img src="../images/LogoMaker.gif" width="128" height="60" alt="" />
            </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
       <div id="topWordMenu">
        	<ul>
            	<li><a href="/indexs">首页</a></li>
                <li><a href="/personal">我的微博</a></li>
                <li><a href="/account">设置</a></li>
                <li><a href="/password">修改密码</a></li>
                <li><a href="/logout">退出</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- top部分结束 -->

  <!-- 页面主体 -->
  <div id="banner">
    <table width="765" border="0" cellpadding="0" cellspacing="0" id="tb1">
      <tr>
        <td width="21" rowspan="7" class="td1"></td>
        <td height="60" align="center" valign="middle" bgcolor="#FFFFFF" class="td2">
        <img src="http://{{$add->picname}}" width="48" height="48" alt="" /></td>
        <td height="60" class="td3"><font color="#000000" size="3"><b>你关注的人（{{ $datas->follow_count }}）</b></font></td>
        <td rowspan="7" class="td1 height"></td>
      </tr>
      <tr>
        <td height="47" align="center" valign="middle" bgcolor="#e3f1fa" class="td2 font1">详细</td>
        <td height="45" align="center" valign="middle" bgcolor="#e3f1fa" class="td4 font1"> 列表
        <form id="form2" name="form2" method="post" action="">
        <div id="search">
          <input type="text" name="textfield2" id="textfield2" />
          <img src="../images/sousuo1.gif" alt="" width="27" height="25" align="absmiddle" />
        </div>
        </form></td>
      </tr>
     
     @foreach($users as $v)
      <tr>
        <td height="105" align="center" valign="middle" class="td2"><img src="http://{{$v['picname']}}" alt="" width="54" height="54" /></td>
        <td height="105" align="left" valign="bottom" class="td3"><font color="#005dc3" size="3" face="微软小黑"><b>{{ $v['nickname'] }}</b></font>
        <img src="../images/1.gif" width="17" height="15" alt="" /><br /><font color="#000000" size="2">{{ $v['address'] }}</font>
        <br /><font color="#000000" size="2">{{ $v['signature'] }}</font>
        <div id="focus3"><img src="../images/ok.png" alt="" width="16" height="16" align="absbottom" />已关注<img src="../images/focus.gif" alt="" width="43" height="30" align="absbottom" /></div></td>
      </tr>
      @endforeach


      <tr>
        <td height="35" class="td2"></td>
        <td height="35" class="td3"></td>
      </tr>
    </table>
    <table width="200" border="0" cellpadding="0" cellspacing="0" id="tb2">
	<tr>
	<td height="101" align="left" valign="top">
      <div id="mainBanner">
            <!-- 左侧mainBannerTopDIV 开始 -->
            <div id="mainBannerTop">
                <!-- 左侧mainBannerTopImgDIV 开始 -->
                <div id="mainBannerTopImg">
                    <img src="http://{{$add->picname}}" width="95" height="97"/>
                </div>
            	<!-- 左侧mainBannerTopImgDIV 结束 -->
                <!-- 左侧mainBannerToWordDIV 开始 -->
                <div id="mainBannerTopWord"><font color="#330000" size="4" letter-spacing:8px ><b>{{$add->nickname}}</b></font>
                </div>
            	<!-- 左侧mainBannerTopWordDIV 结束 -->
            </div>
		</tr>
      <tr>
        <td height="60" class="font2"><br /><font color="#cccccc" size="3" face="微软小黑"><b>　　{{$datam}}       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       {{ $datas->follow_count }}      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    {{ $dataf->fans_count }}</b></font>
        <br />
        　　<font color="#005dc3"><a href="/personal">微博</a>　　<a href="/follow">关注</a>　　<a href="/fans">粉丝</a></font></td>
      </tr>
      <tr>
        <td height="101" align="left" valign="top">
        <div id="search1"><form id="form1" name="form1" method="post" action="">
          <input name="textfield" type="text" class="form3" id="textfield" />
          <img src="../images/sousuo2.gif" alt="" width="27" height="25" align="middle" /> 
        </form>
        </div>
        <br /> 
        &nbsp;&nbsp;&nbsp;<font color="#666666" size="3">我关注的话题</font></td>
      </tr>
      
      <tr>
        <td height="126"> &nbsp;&nbsp;&nbsp;<font color="#666666" size="3">我关注的</font>
           <br />
           <img src="../images/mainBannerContent2People2Img.gif" alt="" width="54" height="54" class="img" />
           <img src="../images/WBXM.gif" alt="" width="48" height="48" class="img" />
           <img src="../images/mainBannerContent2People3Img.gif.gif" alt="" width="54" height="54" class="img" />
           <br />&nbsp;&nbsp;&nbsp;<font color="#005dc3"> 微博小弟&nbsp;&nbsp;   微博小秘&nbsp;&nbsp;   微博新人</font>
           <img src="../images/face/4.jpg" alt="" width="48" height="48" class="img" />
           <br />&nbsp;&nbsp;&nbsp;<font color="#005dc3"> 黄海波</font></br></td>
      </tr>

        <tr>
         <td height="95"> &nbsp;&nbsp;&nbsp;灵步网微博的成长，离不开你们。
         <br /> &nbsp;&nbsp;&nbsp;<font color="#005dc3"> 有意见请（点击）</font>
         <p> &nbsp;&nbsp;&nbsp;<font color="#005dc3"> 不良信息举报中心</font></p></td>
       </tr>
    </table>
  </div>
      <!-- footer部分 -->
    <div id="footer">
    	<!-- footer网站链接部分 -->
    	<div id="footerLink">
        	<ul>
            	<li><a href="#">灵步网介绍</a></li>
                <li><a href="#">广告服务</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">诚征英才</a></li>
                <li><a href="#">保护隐私权</a></li>
                <li><a href="#">免责条款</a></li>
                <li><a href="#">法律顾问</a></li>
                <li><a href="#">意见反馈</a></li>
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
</body>
</html>
