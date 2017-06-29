@extends('admin.base')
@section('content')
 <div class="row">

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
	<div class="widget am-cf">
		<div class="widget-head am-cf">
			<div class="widget-title am-fl"></div>
			<div class="widget-function am-fr">
			<a href="javascript:;" class="am-icon-cog"></a>
			</div>
		</div>
		<div class="widget-body am-fr">

			<form class="am-form tpl-form-line-form" action="/admin/url" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				 <div class="am-form-group">
				 <span class="tpl-form-line-small-title">
			
					<div class="am-u-sm-9">
						<input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="请输入链接地址">
					</div>
				</div>
			<div class="am-form-group">
			<div class="am-u-sm-12 am-u-sm-push-12">
				<input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success" value="提交"/>
			</div>
			</div>
			</form>
			
		
		</div>
	</div>
</div>
@endsection