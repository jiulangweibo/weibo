@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">管理员信息</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button onclick="window.location='/admin/admin/create'" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <form action="/admin/admin" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="admin_name" placeholder="权限名">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                        <tr>
                                            <th>管理员ID</th>
                                            <th>管理员名称</th>
                                            <th>添加时间</th>
                                            <th>联系方式</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $vo)
                                        <tr class="gradeX">
                                            <td>{{$vo->admin_id}}</td>
                                            <td>{{$vo->admin_name}}</td>
                                            <td>{{$vo->admin_time}}</td>
                                            <td>{{$vo->admin_phone}}</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="/admin/admin/{{$vo->admin_id}}/edit">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="javascript:doDel({{ $vo->admin_id }});" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                    </table>
                                      {{ $list->appends($where)->links() }} 
                                </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection
        <form style="display:none;" action="" name="myform" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
					    
		<script>
            function doDel(admin_id){
				if(admin_id){confirm("是否删除信息？")
                document.myform.action = "/admin/admin/"+admin_id;
                document.myform.submit();
				}
            }
        </script>
		