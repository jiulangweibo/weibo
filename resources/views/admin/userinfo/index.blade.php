@extends('admin.base')
@section('content')
<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户管理</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>ID号</th>
                                            <th>用户ID</th>
                                            <th>用户昵称</th>
                                            <th>密码</th>
                                            <th>邮箱</th>
                                            <th>手机</th>
                                            <th>年龄</th>
                                            <th>性别</th>
                                            <th>性取向</th>
                                            <th>头像</th>
                                            <th>生日</th>
                                            <th>详细地址</th>
                                            <th>用户姓名</th>
                                            <th>用户状态</th>
                                            <th>注册时间</th>
                                            <th>QQ</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->user_id}}</td>
                                            <td>{{$v->nickname}}</td>
                                            <td>{{$v->password}}</td>
                                            <td>{{$v->email}}</td>
                                            <td>{{$v->phone}}</td>
                                            <td>{{$v->age}}</td>
                                            <td>{{$v->sex}}</td>
                                            <td>{{$v->sexual}}</td>
                                            <td>{{$v->picnam}}</td>
                                            <td>{{$v->birthday}}</td>
                                            <td>{{$v->address}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->status}}</td>
                                            <td>{{$v->register_time}}</td>
                                            <td>{{$v->QQ}}</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="javascript:;" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                </div>
					    @endsection
		