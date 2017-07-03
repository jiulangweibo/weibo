@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">微博内容</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
			<form action="/admin/message" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="content" placeholder="微博内容">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>发布者ID</th>
                            <th>微博消息ID</th>
                            <th>内容</th>
                            <th>图片</th>
                            <th>点赞数</th>
                            <th>转发数</th>
                            <th>点击数</th>
                            <th>发表时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $v)
                        <tr class="gradeX">
                            <td>{{$v->user_id}}</td>
                            <td>{{$v->message_id}}</td>
                            <td>{{$v->content}}</td>
                            <td>{{$v->picnam}}</td>
                            <td>{{$v->praise_count}}</td>
                            <td>{{$v->foward_count}}</td>
                            <td>{{$v->onclicknum}}</td>
                            <td>{{$v->publish_time}}</td>
                            <td>{{$v->status}}</td>
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
				{{ $list->appends($where)->links() }} 
            </div>
        </div>
    </div>
</div>
@endsection
		