<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('myadmin/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('myadmin/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="{{asset('myadmin/assets/js/echarts.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/app.css')}}">
    <script src="{{asset('myadmin/assets/js/jquery.min.js')}}"></script>

</head>

<body data-type="index">
    <script src="{{asset('myadmin/assets/js/theme.js')}}"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="{{asset('myadmin/assets/img/logo.png')}}" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="{{asset('myadmin/assets/img/user04.png')}}" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="{{asset('myadmin/assets/img/user02.png')}}" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="javascript:;">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="{{asset('myadmin/assets/img/user04.png')}}" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
                <li class="sidebar-nav-link">
                    <a href="/admin" class="active">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                
                <li class="sidebar-nav-link">
                    <a href="/admin/user">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 用户管理
                    </a>
                </li>
				
				<li class="sidebar-nav-link">
                    <a href="/admin/register">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 注册信息
                    </a>
				</li>
				   <li class="sidebar-nav-link">
                    <a href="/admin/userinfo">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 用户详情
                    </a>
                </li>
			   </li>
				   <li class="sidebar-nav-link">
                    <a href="/admin/follow">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 关注
                    </a>
                </li>
				</li>
				<li class="sidebar-nav-link">
                    <a href="/admin/fans">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 粉丝
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/message">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 微博内容
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 点赞
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/forward">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 转发
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/collections">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 收藏
                    </a>
                </li>
								<li class="sidebar-nav-link">
                    <a href="/admin/comments">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 评论
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/content">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 内容
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/url">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 友情链接
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/admin">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 管理员信息
                    </a>
                </li>
				<li class="sidebar-nav-link">
                    <a href="/admin/priviles">
					<i class="am-icon-table sidebar-nav-link-logo"></i> 管理员权限
                    </a>
                </li>
            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

		  @section('content')
            这是页面主内容区。
          @show
        </div>
    </div>
    <script src="{{asset('myadmin/assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('myadmin/assets/js/amazeui.datatables.min.js')}}"></script>
    <script src="{{asset('myadmin/assets/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('myadmin/assets/js/app.js')}}"></script>

</body>

</html>