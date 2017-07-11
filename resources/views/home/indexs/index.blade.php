﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网微博-点滴生活，精彩世界</title>
<link href="./styles/CustomerIndex.css" type="text/css" rel="stylesheet" />
<link href="./styles/global.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="./script/CustomerIndex.js" ></script>
<script language="javascript" src="./script/trim.js" ></script>
<script language="javascript" src="./script/jquery-1.6.2.min.js"></script>
</head>

<body style="filter:alpha(opacity=100)" id="totop">
<!-- 总容器 container开 始-->
<div>
<div id="container">
	    <!-- topDIV 开始 -->
  <div id="top">
    <!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="CustomerIndex.html"><img src="./images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="CustomerIndex.html"><img src="./images/LogoMaker.gif" width="128" height="60" alt="" /></a>
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
                <li><a href="#">手机</a></li>
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
        	<!-- mainBannerTop DIV 开始 -->
      <div id="mainBannerTop">
            <!--id=mainBannerTopIssue 发布框-->
        <div id="mainBannerTopIssue">
                    <!--id=mainBannerTopIssuePoint 提示-->
                    <div id="mainBannerTopIssuePoint">正在发生的事情
                    </div>
                    <div style="float:right;">您还可以输入<font id="counter1">140</font>字！
                    </div>
                    <form name="myform" action="/indexs/add" method="post" enctype="multipart/form-data" onsubmit="return doSubmit()">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <div id="mainBannerTopIssueForm">
                            <!--id="mainBannerTopIssueFrame-->
                            <div id="mainBannerTopIssueFrame">
                              <textarea name="content" rows="4" class="Size" id="textfield2"  style="overflow:hidden;border:1px #0CF solid;" onkeyup="calNum(this,counter1,0)"></textarea>
							  
                            </div>
                            <!--id="mainBannerTopIssueInsert 插入链接-->
                        <div id="mainBannerTopIssueInsert">
                            <!--4个小div-->
                        </div>
                          <!--确认发布-->
                        <div id="mainBannerTopIssueSure">
                        <div id="mainBannerTopIssueSure2">
						<div id="mainBannerTopIssueInsert2">
						<input type="file" name="picname" >
						 </div>				
						<!-- <a href="file" class="a1">
                            <div id="mainBannerTopIssueInsert1"></div>
                          
                            </a>
                            <div id="mainBannerTopIssueInsert3"></div>
                            <div id="mainBannerTopIssueInsert4">插入视频 </div>
                            <a href="javascript:biaoQingXianShi()" class="a1">
                              <div id="mainBannerTopIssueInsert5"></div>
                              <div id="mainBannerTopIssueInsert6">插入表情</div>
                            </a> -->
                            <input type="submit" onclick="" value="发布" style="background-color:#3295E6; border:none">
                        </div>
                        </div>
                        </div>
									<script>
				//提交判断
				function doSubmit(){
					return content();
				}
				
				//验证姓名
				function content(){
					//获取姓名
					var content=document.myform.content.value;
					//判断
					if(content.match(/^.+$/)==null){
						alert("您输入的内容为空,请重新输入在完成发布!");
						return false;
					}
					return true;
				}

			
			</script>
                    </form> 
          </div>
          <!-- 表情DIV -->
          <div id="biaoqing">
          	<table width="200" border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

          </div>
        </div> 
            
            <!--id="mainBannerTitle 首页-->
            <div id="mainBannerTitle">
                <!--id="mainBannerTitleWord"-->
                <div id="mainBannerTitleWord"><b>首页</b>
                </div>
                <!--首页提示与隐藏-->
                <div id="mainBannerTitleWord2">
                        <input type="checkbox" name="checkbox" id="checkbox" onclick="tdImgState()"/>
                        隐藏图片 
                </div>
            </div> 
            <!--不同人的内容-->
            <div id="mainBannerContent">
            	<!--个人展示-->
				
            	<div class="stateShow" onmouseover="stateMouseOver(this)" onmouseout="stateMouseOut(this)">
				@foreach ($list as $v)
                  <div class="stateShowWord">
                    <table width="450" border="0" cellpadding="0" cellspacing="0" class="stateTable">
					
                      <tr>
                        <td width="70" align="center" valign="top"><a href="#"><img src="./images/face/16.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="380" ><a href="#">{{$v->nickname}}</a><img src="./images/1.gif" align="absmiddle" style="border:none;" />{{$v->content}}</td>
                      </tr>
					  
                    </table>
                  </div>
				  
                   <div class="stateImgShow"><img src="{{$v->picname}}" /></div>            
             <div class="stateShowtime"> 
                    <td width="390">{{$v['publish_time']}}</a></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<td><a href="#">评论(3)</a></td>&nbsp&nbsp&nbsp
					<td><a href="#">点赞(1)</a></td>&nbsp&nbsp&nbsp
					<td><a href="#">转发(2)</a></td>&nbsp&nbsp&nbsp
					<td><a href="#">关注他(她)</a></td>

					
			</div>
				  @endforeach
                </div>
				
                 <!--个人展示结束-->
                  <!--个人展示-->

                
            </div>
      </div>
      <!-- 左侧mainBanner DIV 结束-->
      <!-- 右侧mainRight DIV开始 -->
  <div id="mainRight">
          <table width="200" border="0" cellpadding="0" cellspacing="0" bgcolor="#E9F4FA">
 				<tr>
                    <td bgcolor="#E9F4FA">
                    	<!-- 右侧mainRightPostionFirstLine DIV 开始 -->
                    	<div id="mainRightPostionFirstLine">
                            <!-- 右侧mainRightPostionFirstLineIcon DIV 开始 -->
                            
                            <div style="height:58px;">
                            <div id="mainRightPostionFirstLineIcon">
                            	<a href="/personal"><img src="./images/MainRightFirstLineTitle.gif" alt="" width="48" height="48" align="absmiddle" title="" border="0" /></a>
                            </div>
                            <!-- 右侧mainRightPostionFirstLineIcon DIV 结束 -->
                            <!-- 右侧mainRightPostionFirstLineWord1 DIV 开始 -->
                            <div id="mainRightPostionFirstLineWord1">               
                            &nbsp;<font color="#005DC3" ><b><a href="/personal" class="a1">{{Session::get('homeuser')[0]->nickname}}  </a></b></font><br />
                            </div>
                            </div>
                            
                            <!-- 右侧mainRightPostionFirstLineWord1 DIV 结束 -->
                        	<!-- 右侧mainRightPostionFirstLineWord2 DIV 开始 -->
                          <div id="mainRightPostionFirstLineWord2">
                                <ul>
                                	<a href="/personal" class="a1"><li><font class="style1">{{$datam}}</font><br /><font class="style2">微博</font></li></a>
   								    <a href="/follow" class="a1"><li><font class="style1">{{ $datas->follow_count }}</font><br /><font class="style2">关注</font></li></a>
   								    <a href="/fans" class="a1"><li><font class="style1">{{ $dataf->fans_count }}</font><br /><font class="style2">粉丝</font></li></a>
                                </ul>
                           </div>
                           <!-- 右侧mainRightPostionFirstLineWord2 DIV 结束 -->                    
                        </div>
                        <!-- 右侧mainRightPostionFirstLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#E9F4FA">                    
                        <!-- 右侧mainRightPostionSecondLine DIV 开始 -->
                        <div id="mainRightPostionSecondLine">
                            <!-- 右侧mainRightPositionSecondLineContent DIV 开始 -->
                            <div id="mainRightPositionSecondLineContent">
                                <a href="#" class="a1"><font style="font-size:16px;font-weight:700; color:#000;">首页</font></a><br />
                                <hr color="#79BDD1" zize="2" style="" />
                                <a href="#" class="a1"><font class="style3">@我的</font></a>
                                <hr class="h1">
                                <a href="#" class="a1"><font class="style3">我的私信</font></a>
                                <hr class="h1">
                                <a href="#" class="a1"><font class="style3">转发</font></a>
                                <hr class="h1">
                                <a href="#" class="a1"><font class="style3">我的收藏</font></a>
                            </div>
                            <!-- 右侧mainRightPositionSecondLineContent DIV 开始 -->
                        </div>
                        <!-- 右侧mainRightPostionSecondLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                  <td>  
                        <!-- 右侧mainRightPostionThirdLine DIV 开始 -->
                        <div id="mainRightPostionThirdLine">
                            <!-- 右侧mainRightPositionThirdLineContent DIV 开始 -->
                            <div id="mainRightPositionThirdLineContent">
                            <p><a href="#" onclick="" class="a1"><font class="style4">你可能感兴趣的人</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a></p>
                            <br />
                            <div id="d32" style="float:right"><a href="#" class="a1">查看更多</a></div>
                            </div>                    	
                            <!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        </div>
                        <!-- 右侧mainRightPostionThirdLine DIV 开始 -->
                  </td>
                </tr>
                <tr>
                    <td>
                        <!-- 右侧mainRightPostionFourthLine DIV 开始 -->
                        <div id="mainRightPostionFouthLine">
                        	<!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        	<div id="mainRightPositionFourthLineContent">
                            <form action="" method="get">
                              <input type="text" name="textfield" id="textfield1"/>
                              <a href="#"><img src="./images/search.gif" alt="" width="27" height="25" align="middle" title="" border="0"/></a>
                            </form>
                            <a href="#" onclick="" class="a1"><font class="style4">热门话题</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                            <ul id="ul2" style="line-height:25px;">
                            	<a href="#" class="a1"><li><font class="style2">动车(49585)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">高铁(48704)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">遇难者(10616)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">发言人(12875)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">铁道部(24488)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">暴雨(8914)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">伊伊(921</font>)</li></a>
                                <a href="#" class="a1"><li><font class="style2">变形金刚(2908)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">味千拉面(450)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">第三届网络原创歌曲大赛(27)</font></li></a>
                            </ul>
                            </div>
                            <!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        </div>
                        <!-- 右侧mainRightPostionFoutrhLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td> <!-- 右侧mainRightPostionFifthLine DIV 开始 -->
                    <div id="mainRightPostionFifthLine">
                    	<div id="mainRightPositionFifthLineContent">
                        	<a href="#" onclick="" class="a1"><font class="style4">我关注的话题</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                        </div>
                    </div>
                    <!-- 右侧mainRightPostionFifthLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td><!-- 右侧mainRightPostionSixthLine DIV 开始 -->
                    <div id="mainRightPostionSixthLine">
                    	<div id="mainRightPositionSixthLineContent">
                        	<a href="#" onclick="" class="a1"><font class="style4">我关注的</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                        </div>
                        <ul>
                        	<a href="#" class="a1"><li><img src="./images/WBXM.gif" border="0" /><br /><font class="style2">微博小秘</font></li></a>
                            <a href="#" class="a1"><li><img src="./images/AXXR.gif" border="0" /><br /><font class="style2">&nbsp;&nbsp;转&nbsp;&nbsp;发</font></li></a>
                            <a href="#" class="a1"><li><img src="./images/LBXR.gif" border="0" /><br /><font class="style2">微博新人</font></li></a>
                        </ul>
                    </div>
                    <!-- 右侧mainRightPostionSixthLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td><!-- 右侧mainRightPostionSeventhLine DIV 开始 -->
                    <div id="mainRightPostionSeventhLine">
                        <div id="mainRightPositionSevenLineContent">
                        灵步微博的成长，离不开你们。<br />
                        <font class="style2"><a href="#" class="a1">有意见要提（点击） </a><br /><br />
                        <a href="#" class="a1" onclick="set()" >不良信息举报中心</a></font> 
                        </div>
                    </div>
                    <!-- 右侧mainRightPostionSeventhLine DIV 结束 -->
                    </td>
                </tr>
          </table>
     </div>
      <!-- 右侧mainRightDiv 结束 -->
  </div>
    <!-- 回复DIV 开始 -->
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
 <p id="backtop"><a id="backtop1" href="#totop"><span></span>回到顶部</a></p>
</body>
</html>
