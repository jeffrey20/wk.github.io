<?php
include("head.php");

?>


  
<ul class="section">
<li class="item"><a href="index.php"><i class="icon fa fa-dashboard"> </i>后台首页</a></li>


<li class="item  active"><a href="javascript:void(0)" class="onclick-item">
<i class="icon fa fa-cogs"> </i>网站配置<i class="angle icon-angle-right"></i></a><ul class="section-sub"><li>
<a href="set.php">基本信息</a></li>
<li><a href="ad.php">广告配置</a></li>
<li><a href="logo.php?mod=logo">联系方式</a></li>
<li><a href="logo.php?mod=bj">网站图片</a></li>
<li><a href="other.php">其他设置</a></li>
</ul>







<li class="item "><a href="javascript:void(0)" class="onclick-item"><i class="icon fa fa-get-pocket"> </i>站点安全<i class="angle icon-angle-right"></i>
</a><ul class="section-sub"><li><a href="gai.php">修改密码</a></li>

</li></ul></li>

<li class="item "><a href="http://wang77.cc/ad.html"><i class="icon fa fa-chrome"></i>帮助文档</a></li></ul></div>

<div class="content-box">
	<div class="main-top-box">
		<div class="main-top">
			<div>
				<div class="nav-left icon-reorders">
 				</div>
				<div class="text-center top-tips"><i class="icon-volume-up  hidden-xs"></i><span></span></div>

				<div class="nav-right" style="width:100%;">
    &nbsp;
				<i class="fa fa-bars shows" style="font-size: 15px;color:#fff;"> 主菜单</i>

				<div class="nav-right">&nbsp;<a href="./login.php?logout" class="btn btn-info btn-sm"><i  class="glyphicon glyphicon-share-alt"></i> 注销登陆</a></div>
				</div>

				
			</div>
		</div>
	</div>
<br>
	<div class="content-in">
	<div class="box-title">
<a><font color="#fffffb"><i class="fa fa-user"></i>&nbsp;</font></a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;广告管理</font>



</div></div>

<?php
if(isset($_POST['submit'])) {
	foreach ($_POST as $k => $value) {
		if($k=='pwd')continue;
		$value=daddslashes($value);
		$DB->query("insert into url_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'");
	}
	$pwd=daddslashes($_POST['pwd']);
	if(!empty($pwd))$DB->query("update `url_config` set `v` ='{$pwd}' where `k`='admin_pwd'");
	
	showmsg('修改成功！',1);
}else{
?>


<div class="text clearfix" style="text-align:center;"></div>
<script>
$(function(){
	$(".onclick-item").click(function(){
		var n = $(".onclick-item").index(this);
			$(".section-sub").hide();
			$(".section-sub").eq(n).show();
	});
	$(".section>li").click(function(){
			var n = $(".section>li").index(this);
			$(".section>li").removeClass("active");
			$(".section>li").eq(n).addClass("active");
	});
	$(".shows").click(function(){
		
		$(".sile").toggle();
	});
});
</script>


<div class="box">
<div class="main">


	<form class="form-horizontal" role="form" method="POST" action="./ad.php" >
	
	  <!--
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">状态 <font style="color:red">*</font></label>
        <div class="col-sm-10">
           <select name="i" style="background: linear-gradient(#FFFFF4, #FFE66F);-webkit-border-radius: 4px;height:100%;">
			<option value="Cleartext-Password">启用</option>
			<option value="Disable-Password">禁用</option>

		   </select>
        </div>
    </div>
	
	-->

    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-名称 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad-1" value="<?php echo $conf['ad-1']; ?>" >
        </div>
    </div>
  
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-性质 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad-1-1" value="<?php echo $conf['ad-1-1']; ?>">
        </div>
    </div>

     <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-介绍 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad-2" value="<?php echo $conf['ad-2']; ?>">
        </div>
</div>

    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-加群链接 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad-3" value="<?php echo $conf['ad-3']; ?>">
        </div>
    </div>
	
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-备案号 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad-4" value="<?php echo $conf['ad-4']; ?>">
        </div>
    </div>
	
	<hr>
	<br/>
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">②按钮名称 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad2-1" value="<?php echo $conf['ad2-1']; ?>">
        </div>
    </div><br/>
	
	
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">介绍自己 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
        <textarea rows="3" cols="60" class="form-control" name="ad2-2" rows="2"><?php echo htmlspecialchars($conf['ad2-2']); ?></textarea>
                         </div>
    </div>
	<hr>
	
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-④按钮名称 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad4-1" value="<?php echo $conf['ad4-1']; ?>">
        </div>
    </div>
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-站点链接 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad4-2" value="<?php echo $conf['ad4-2']; ?>">
        </div>
    </div>
	
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-站点名称 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad4-3" value="<?php echo $conf['ad4-3']; ?>">
        </div>
    </div>
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">-站点介绍 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="ad4-4" value="<?php echo $conf['ad4-4']; ?>">
        </div>
    </div>
	<hr>
	<!--
	<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">最中间-一言 |<font style="color:red">*</font></label>
        <div class="col-sm-10">
              <textarea   rows="3" cols="20" class="form-control" name="ad3" rows="2"><?php echo htmlspecialchars($conf['ad3']); ?></textarea>
                        
        </div>
	
-->
		
		
		 </div>
  
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" name="submit" class="btn btn-info btn-block">一键保存</button>
		</div>
	</div>
	
	
	
	</form> 
</div>
</div>


<?php
}?>
		

</body>
</html>

