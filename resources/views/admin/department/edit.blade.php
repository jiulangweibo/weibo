@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">编辑部门</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/department/{{ $v->id }}" method="post">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="title" value="{{$v->title}}">部门名</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="title"  placeholder="{{$v->title}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="privileges_id" value="{{$v->privileges_id}}">权限ID</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="privileges_id"  placeholder="{{$v->privileges_id}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
		