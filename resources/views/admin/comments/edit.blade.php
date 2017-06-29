@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">编辑用户</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/comments/{{ $v->message_id }}" method="post">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
						<label for="user-name" class="am-u-sm-3 am-form-label" name="message_id" value="{{$v->message_id}}">被评论微博ID</label>
						<!--<label input type="text" name="message_id" value="{{$v->message_id}}">被评论者ID</label>-->
                            <div class="am-u-sm-9">
                                <input type="text" style="width:200px" name="message_id"   class="tpl-form-input" id="user-name" placeholder="{{$v->message_id}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="user_id" value="{{$v->user_id}}">评论者ID</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="user_id"  class="tpl-form-input" id="user-name" placeholder="{{$v->user_id}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="comments_content" value="{{$v->comments_content}}">评论内容id</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="comments_content" class="tpl-form-input" id="user-name" placeholder="{{$v->comments_content}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="comments_time" value="{{$v->comments_time}}">评论时间</label>
                            <div class="am-u-sm-9">
                                <input type="text"  class="tpl-form-input" id="user-name" placeholder="{{$v->comments_time}}">
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
		