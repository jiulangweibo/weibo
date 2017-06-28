@extends('admin.base')
@section('content')
<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">评论表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>被评论者ID</th>
                            <th>评论者ID</th>
                            <th>评论内容ID</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $vs)
                        <tr class="gradeX">
                            <td>{{$vs->mssage_id}}</td>
                            <td>{{$vs->user_id}}</td>
                            <td>{{$vs->comments_id}}</td>
                            <td>{{$vs->comments_content}}</td>
                            <td>{{$vs->comments_time}}</td>
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
		