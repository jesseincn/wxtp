<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" name="Keywords">
<meta content="KMD微信平台，国内最大的微信公众智能服务平台，八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" name="Description">
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/inside.css" media="all" />
<script type="text/javascript" src="/wxtp/Public/Admin/js/jQuery.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/bootstrap_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/bootstrap_datepicker.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/inside.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_validate_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_validate_methods.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_form_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/region_select.js"></script>
<!--[if lte IE 9]><script src="/wxtp/Public/Admin/js/watermark.js"></script><![endif]-->
<!--[if IE 7]><link href="/wxtp/Public/Admin/css/font_awesome_ie7.css" rel="stylesheet" /><![endif]-->
<style>
.form-horizontal .control-group {
	margin-bottom: 10px;
}

.input-medium {
	width: 330px;
}

.see {
	width: 345px;
	height: 650px;
	background: url(/wxtp/Public/Admin/img/iphone5bs.png)
		no-repeat;
	background-size: 100% 100%;
	position: fixed;
	top: 30px;
	right: 50px;
	display: none;
}

.see .content {
	width: 300px;
	height: 477px;
	background-color: #fff;
	margin-left: 24px;
	margin-top: 88px;
}
</style>
<style type="text/css">
.checkboxselect-container {
	border: 1px solid #33CCFF;
	visibility: hidden;
	background: white;
	z-index: 1000;
}

.checkboxselect-item {
	padding: 3px 2px;
}

.checkboxselect-active {
	background: #33CCFF;
	color: white;
	padding: 3px 2px;
}
</style>
<script type="text/javascript">
	$(function(){
		$("input").eq(0).focus();
	});
</script>
</head>
<body>
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span10">
								<h3>
									<i class="icon-edit"></i>添加角色
								</h3>
							</div>
							<!-- 
							<div class="span2">
								<a class="btn" href="Javascript:window.history.go(-1)">返回</a>
							</div>
							 -->
						</div>

						<div class="box-content">
							<form action="<?php echo U('Admin/Rbac/addRole');?>" method="post" >
							<!-- 
							<form action="<?php echo U('Admin/Rbac/addRole');?>" method="post" class="form-horizontal form-validate">
							 -->
								<div class="control-group">
									<label for="name" class="control-label">角色名称：</label>
									<div class="controls">
										<input type="text" name="name" id="name" class="input-medium"
											data-rule-required="true" /><span class="maroon">*</span>
									</div>
								</div>
								
								<div class="control-group">
									<label for="remark" class="control-label">角色描述：</label>
									<div class="controls">
										<input type="text" name="remark" id="remark" class="input-medium"
											data-rule-required="true" /><span class="maroon">*</span>
									</div>
								</div>
								
								<div class="control-group">
									<label for="status" class="control-label">是否开启：</label>
									<div class="controls">
										<input type="radio" name="status" value="1" checked="checked">是&nbsp;&nbsp;
										<input type="radio" name="status" value="0">否
									</div>
								</div>

								<div class="form-actions">
									<button type="submit" class="btn btn-primary" id="btnsave">保存</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>