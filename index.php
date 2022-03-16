<?php
include './include/common.php';

/*
    2022.1.18 v1.0 
	2022.1.22 v1.1
	2022.1.28 v1.2
	
	作者：摸鱼工作室  cnm.sb  好像是吧？搞不懂...
	
	后台编写整理：  7c工作室 （小程序搜索:小小7c）  
	
*/





?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!--网站收录数据抓取-->
	<meta charset="UTF-8">
	<meta name="language" content="zh-CN">
	<meta name="description" content="<?php echo $conf['description']?>">
	<meta name="keywords" content="<?php echo $conf['keywords']?>">
	<meta name="robots" content="All">
	<!--数据抓取完成-->
	<title><?php echo $conf['title']?></title>
	<!-- 调用ICON地址 -->
	<link rel="icon" href="img/cnm.sb.ico">
	<!-- 自适应 -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- Css样式调用 -->
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_load.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_bg.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_pc.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_mp.css" />

	<!-- Javascript样式调用 -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/cnm.sb_judge.js"></script>
	<script src="js/cnm.sb_pc.js"></script>
	<script src="js/cnm.sb_mp.js"></script>
	<script src="js/cnm.sb_copy.js"></script>
	
</head>

<?php
//首页随机音乐  音乐链接 music.js

if($conf['music']=="1")
{
	echo '<script type="text/javascript" src="js/music.js"></script>';

	
}else {
	
  
}  

?>

<body>
	<!-- 电脑PC端 -->
	<div id="pc">
		<div id="content">
			<!-- 内容左侧选择区域 -->
			<ul id="cleft">
				<div class="cleft_top">
					<div class="cleft_topbg">
						<div class="cleftbg_img"><img src="img/tx.jpg" alt="头像"></div>
					</div>
					<div class="cleftbg_p">千金散尽还复来</div>
				</div>
				<li id="cleft_li01" style="background-color: #ececec;"><img src="font/cnmsb01.png" /><span>官网首页</span>
				</li>
				<li id="cleft_li02"><img src="font/cnmsb02.png" /><span>关于本站</span></li>
				<li id="cleft_li04"><img src="font/cnmsb04.png" /><span>商业合作</span></li>
				<li id="cleft_li05"><img src="font/cnmsb05.png" /><span>个人站点</span></li>
			</ul>


			<!-- 内容左侧选择区域 -->
			<div id="cright">

				<!--第一页 - 首页-HTML页面-->
				<div id="nav01">
					<div class="nav01_left">
						<div class="nav01_logo">
							<img src="img/cnm.sb_logo.svg" />
							<h4><?php echo $conf['ad-1']?><span><?php echo $conf['ad-1-1']?></span></h4>
						</div>
						<div class="nav01_wz">
							<h5>年轻人，抓紧时间奋斗 ！</h5>
							<h1>欢迎来到</h1>
							<h4> - <?php echo $conf['ad-1']?><?php echo $conf['ad-1-1']?> - </h4>
							<h3>网|址 &nbsp;一|秒|速|记</h3>
							<div class="bar"></div>
						</div>
						<div class="nav01_but">
							<div class="nav01_but01">探索</div>
							<div class="nav01_but02">商业合作</div>
						</div>
					</div>
					<div class="nav01_right">
						<div class="nav01_tpw">
							<h3>只分享最精品的资源</h3>
							<p>me a hard working hacker</p>
						</div>
						<div class="nav01_fpw">
							<p>愿成长- 不负众望</p>
						</div>
					</div>
					
					<!-- 版权信息，可修改,可删除,不强求 -->
					<div class="nav01_fooder">工作室 &nbsp;&nbsp;|&nbsp;&nbsp; 	<a class="banquan" style="color:#000;"
        href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=备案编号"
        target="_blank"><?php echo $conf['ad-4']?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp; © 2016-2022  All Copyright Reserved</div>
						
				
        
				</div>
				
				
				


				<!-- 第二页 - 关于本站 -->
				<div id="nav02">
					<div class="nav02_bg">
						<div class="nav02_bt">关于本站</div>
					</div>
					<!-- 站长资料 -->
					<div class="nav02_kj" style="height: 600px;">
						<h3>😁站/长/资/料</h3>
						<div class="nav02_grzl_headimg">
							<img src="img/tx.jpg" alt="[头像]">
							<a href="mailto:admin@xmpan.com" target="_blank" rel="noopener noreferrer">联系站长</a>
						</div>
						<div class="nav02_grzl_txt">
							<?php echo $conf['ad2-2']?>
						</div>
					</div>
					
					
					
					
					
				<!-- 第三页 - 站长团队 -->
			<!--	<div id="nav03">
					<div class="enav03_p">
					
						<h5><p><?php echo $conf['ad-2']?></p></h5>

					</div>
					<div class="enav03_team">
						<img src="img/cnmteam01.png" alt="[组织者]">
						<img src="img/cnmteam02.png" alt="[组织者]">
						<img src="img/cnmteam03.png" alt="[组织者]">
						<img src="img/cnmteam04.png" alt="[组织者]">
						<img src="img/cnmteam05.png" alt="[组织者]">
					</div>
				</div>
					
					-->
					
					
					
					
					<!-- 个人介绍 -->
				<!--	<div class="nav02_kj">
						<h3>😁个/人/介/绍</h3>

						<p>
							本人学识渊博，经验丰富，代码风骚，效率恐怖。C/C＋＋，java，php无不精通，熟练掌握各种框架。
						</p>
						<p>
							会DDOS一秒钟死一个站，会注入，会上传，会Xss，会破解，会嗅探，会开发，会业务，会运维，会渗透。互联网内，我无处不在。
						</p>
						<p>
							全国漏洞认识深刻，熟练掌握各种操作系统内核。认真学习过《黑客攻防技术宝典》，《逆向工程》，《游戏waigua攻防艺术》等专业书籍。深山苦练十余载，一天只睡2小时。
						</p>
						<p>
							听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。
						</p>
						<p>
							千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登vpn，千里之外定位问题，瞬息之间修复上线。
						</p>
						<p>
							只有你想不到的，没有我做不到的。
						</p>
						<p>
							以上都是吹的，我只会划水摸鱼，我是个废物。
						</p>
						<p>
							&nbsp;
						</p>
						<h3>😁网站的艰难运行环境</h3>
						<p>
							服务器最近遭受DDOS攻击，官方部分站点已瘫痪，恢复时间不确定。主页随时可能托管在Github或者虚拟主机上，速度相对较慢，请耐心等待恢复，还您一个舒适的欣赏环境。哈哈哈哈哈哈哈嗝~
						</p>
						<p>
							&nbsp;
						</p>
						<h3>😁网站源码</h3>
						<p>
							源码获取请点击侧栏【本站源码】，要认真仔细阅读。
						</p>
						<p>
							&nbsp;
						</p>

					</div> -->
					<!-- 知识掌握 -->
				<!-- 	<div class="nav02_kj mb03">
						<h3>知/识/掌/握</h3>
						<p>掌握的技能</p>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<p>精通掌握的技能</p>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;摸鱼&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;摸鱼&nbsp;</span>
						</div>
					</div>-->

					<!-- 每日必做 -->
				<!--	<div class="nav02_kj mb04">
						<h3>每/日/必/做</h3>
						<div id="ejn">
							<a href="javascript:;">摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼</a>
							<a href="javascript:;">划水划水，划水划水，划水划水，划水划水，划水划水，划水划水</a>
							<a href="javascript:;">闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊</a>
							<a href="javascript:;">abcdefghigklmnopqrstuvwxyz</a>
							<a href="javascript:;">ABCDEFGHIJKLMNOPQRSTUVWXYZ</a>
						</div>
					</div> -->
					<!-- 到底了-提示 -->
					<p class="ebpx">--- 暂时先展示这么多啦 ---</p>
				</div>
                      

				<!-- 第四页 - 商业合作 -->
				<div id="nav04">
					<div class="nav04_bg"></div>
					<div class="nav04_zsc">
						<div>
							<p>商业合作 - 微信二维码</p>
							<img src="image/wx.jpg"  alt="[企业微信二维码]" title="[企业微信二维码]">
						</div>
						<p>添加请说明来意，不闲聊 方便你我！</p>
					</div>
				</div>

				<!-- 第五页 - 站点展示 -->
				<div id="nav05">
					<!-- 第五页-头部图片动态 -->
					<div class="nav05_top">
						<div class="nav05_topbgkj">
							<div class="nav05_top_bg"></div>
							<div class="nav05_top_tx01"></div>
							<div class="nav05_top_tx02"></div>
						</div>
						<div class="nav05_top_fj"><img src="img/nav05_fj.png" alt="△"></div>
					</div>
					<!-- 第五页-内容区域 -->
					<div class="nav05_centent">
						<div class="nav05_centent_tit">
						<!--	<h1>🦄个人站点🦄</h1>-->
							
						</div>
						<!-- 作品展示模板NO1 -->
					<div class="nav05_centent_mb">
						<a href="<?php echo $conf['ad4-2']?>" target="_blank" rel="noopener noreferrer">
								<div><img src="image/xcx.png" alt="[]"></div>
								<h3><?php echo $conf['ad4-3']?></h3>
								<p><?php echo $conf['ad4-4']?></p>
							</a>
							<div>立即前往</div>	
						</div>
				
					
					
					
					
					
					
					
					
					
					</div>
					<p class="nav05_footer">你有酷酷或者实用的站点推荐嘛？~</p>
				</div>


				<!-- 第七页 - 关于本站 -->
			 	<div id="nav08">
					<div class="nav08_bg">
						<div class="nav08_bt">静态资源</div>
					</div>-->
					<!-- 文件托管 -->
					<div class="nav08_kj">
						<h3>😁文/件/托/管</h3>
						<p>
							自己弄个阿里云oss或者腾讯云cos，然后把css文件和js文件托管上去，速度会快好多。
						</p>

					</div>
					<!-- 图片托管 -->
					<div class="nav08_kj">
						<h3>😁图/片/托/管</h3>
						<h4>🤣为缓解服务器压力，图片托管在了腾讯微云，速度嘎嘎快~下面直链，直接复制引用就行了🤣</h4>
						<p>
							电脑端开局和移动端顶部图片【start.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/002178339251e27c0c379a074b53421374995f70f380206a91f941eca2a506db9730b7d5e154c0b0a54585fa7dcca392?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=start.jpg&size=750</span>
						</p>
						<p>
							侧栏顶部头像背景图【cnmtlbg.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/bead1e7b47b025079a73cefdbae4743cea08ca3470f80a09b023945be16337e04dc04db5e3d5c2332f408a5f257de726?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmtlbg.jpg&size=750</span>
						</p>
						<p>
							头像【tx.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/cb94ddb129a2d625b2bf9cd41781294946040074c54d215d91a6fec19d17f89bbf85410ddc0accb58a4eadec117b1083?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=tx.jpg&size=750</span>
						</p>
						<p>
							官网首页页面背景图片【shouye.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/ea696cade47ec01a4f2c58b388fd85795311c5d9cb4bdc17a97460c319758177db45d99138e6cf4bf9d437e8140e4c72?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=shouye.jpg&size=750</span>
						</p>
						<p>
							关于本站页面顶部图片【guanyubenzhan.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/662ea4195755f0cd46211b621aa3182a9c3aac9b6c5ad71b61935ffd475a56a953ba9463e9dd1af985367c936460b450?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=guanyubenzhan.jpg&size=750</span>
						</p>
						<p>
							站长团队成员图片【cnmteam01.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/07c62d66f216aebf1d1d3948bc23621f3907aaacbe38639121288f3b8dad0a39d30a15a80bef0054b62c8c11e740d3d5?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmteam01.png&size=750</span>
						</p>
						<p>
							站长团队成员图片【cnmteam02.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/3559a37a5877eb3acc95d81ca173fdd6d1984a6286f3c53a9e308d28dfad31342c6a2318fbf44a1182fe63f9e9dd49ec?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmteam02.png&size=750</span>
						</p>
						<p>
							站长团队成员图片【cnmteam03.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/9a041b779f08d00846a787dc53e461a3796151202f05311abeda37a5549cc31b45347ddcb9936d6f07a466347f34d77b?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmteam03.png&size=750</span>
						</p>
						<p>
							站长团队成员图片【cnmteam04.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/d72bd33535074cff369a071ac4a9c68e832e6587cb06260400d328a382447e98f9e84330800eb4d547045d2d1dda907e?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmteam04.png&size=750</span>
						</p>
						<p>
							站长团队成员图片【cnmteam05.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/11b9a14f2d4274b40b5742683800d522cee1cf9825d1e0e27d8e050b0452609bee75b88e770a627ca8ad7971e6d5b757?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=cnmteam05.png&size=750</span>
						</p>
						<p>
							商业合作页面背景图片【shangyehezuo.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/8c7b1a2247bba2796cf5da67c751ef25f6299468fcbe5cb8664b3de690da2b227f1d38c5fd39556c8380b669c5fdbcd3?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=shangyehezuo.png&size=750</span>
						</p>
						<p>
							站点展示页面背景图片【zhandian.jpg】链接：<span>https://picabstract-preview-ftn.weiyun.com/ftn_pic_abs_v3/be5bb2c677a2eaa1eea004155de1c5ff9000c580016a8cb7a100b6d705187e5d868d97e757720ee9b73983cb3208507f?pictype=scale&from=30113&version=3.3.3.3&uin=22741441&fname=zhandian.jpg&size=750</span>
						</p>
						<p>
							&nbsp;
						</p>


					</div>

					<div class="nav08_kj">
						<h3>😀Emoji符号</h3>
						<h4>表/情/类</h4>
						<p>
							😀 😁 😂 🤣 😃 😄 😅 😆 😉 😊 😋 😎 😍 😘 😗 😙 😚 ☺️ 🙂 🤗 🤩 🤔 🤨 😐 😑 😶 🙄 😏 😣 😥 😮
							🤐 😯 😪 😫 😴 😌 😛 😜 😝 🤤 😒 😓 😔 😕 🙃 🤑 😲 ☹️ 🙁 😖 😞 😟 😤 😢 😭 😦 😧 😨 😩 🤯 😬
							😰 😱 😳 🤪 😵 😡 😠 🤬 😷 🤒 🤕 🤢 🤮 🤧 😇 🤠 🤡 🤥 🤫 🤭 🧐 🤓 😈 👿 👹 👺 💀 👻 👽 🤖 💩
							😺 😸 😹 😻 😼 😽 🙀 😿 😾
						</p>
						<h4>动/物/自/然</h4>
						<p>
							🐶 🐱 🐭 🐹 🐰 🦊 🦝 🐻 🐼 🦘 🦡 🐨 🐯 🦁 🐮 🐷 🐽 🐸 🐵 🙈 🙉 🙊 🐒 🐔 🐧 🐦 🐤 🐣 🐥 🦆 🦢
							🦅 🦉 🦚 🦜 🦇 🐺 🐗 🐴 🦄 🐝 🐛 🦋 🐌 🐚 🐞 🐜 🦗 🕷 🕸 🦂 🦟 🦠 🐢 🐍 🦎 🦖 🦕 🐙 🦑 🦐 🦀
							🐡 🐠 🐟 🐬 🐳 🐋 🦈 🐊 🐅 🐆 🦓 🦍 🐘 🦏 🦛 🐪 🐫 🦙 🦒 🐃 🐂 🐄 🐎 🐖 🐏 🐑 🐐 🦌 🐕 🐩 🐈
							🐓 🦃 🕊 🐇 🐁 🐀 🐿 🦔 🐾 🐉 🐲 🌵 🎄 🌲 🌳 🌴 🌱 🌿 ☘️ 🍀 🎍 🎋 🍃 🍂 🍁 🍄 🌾 💐 🌷 🌹 🥀
							🌺 🌸 🌼 🌻 🌞 🌝 🌛 🌜 🌚 🌕 🌖 🌗 🌘 🌑 🌒 🌓 🌔 🌙 🌎 🌍 🌏 💫 ⭐️ 🌟 ✨ ⚡️ ☄️ 💥 🔥 🌪 🌈
							☀️ 🌤 ⛅️ 🌥 ☁️ 🌦 🌧 ⛈ 🌩 🌨 ❄️ ☃️ ⛄️ 🌬 💨 💧 💦 ☔️ ☂️ 🌊 🌫
						</p>
						<h4>水/果/食/物</h4>
						<p>
							🍏 🍎 🍐 🍊 🍋 🍌 🍉 🍇 🍓 🍈 🍒 🍑 🍍 🥭 🥥 🥝 🍅 🍆 🥑 🥦 🥒 🥬 🌶 🌽 🥕 🥔 🍠 🥐 🍞 🥖 🥨
							🥯 🧀 🥚 🍳 🥞 🥓 🥩 🍗 🍖 🌭 🍔 🍟 🍕 🥪 🥙 🌮 🌯 🥗 🥘 🥫 🍝 🍜 🍲 🍛 🍣 🍱 🥟 🍤 🍙 🍚 🍘
							🍥 🥮 🥠 🍢 🍡 🍧 🍨 🍦 🥧 🍰 🎂 🍮 🍭 🍬 🍫 🍿 🧂 🍩 🍪 🌰 🥜 🍯 🥛 🍼 ☕️ 🍵 🥤 🍶 🍺 🍻 🥂
							🍷 🥃 🍸 🍹 🍾 🥄 🍴 🍽 🥣 🥡 🥢
						</p>
						<h4>运/动/娱/乐</h4>
						<p>
							⚽️ 🏀 🏈 ⚾️ 🥎 🏐 🏉 🎾 🥏 🎱 🏓 🏸 🥅 🏒 🏑 🥍 🏏 ⛳️ 🏹 🎣 🥊 🥋 🎽 ⛸ 🥌 🛷 🛹 🎿 ⛷ 🏂
							🏋️‍♀️ 🏋🏻‍♀️ 🏋🏼‍♀️ 🏋🏽‍♀️ 🏋🏾‍♀️ 🏋🏿‍♀️ 🏋️‍♂️ 🏋🏻‍♂️ 🏋🏼‍♂️ 🏋🏽‍♂️ 🏋🏾‍♂️
							🏋🏿‍♂️ 🤼‍♀️ 🤼‍♂️ 🤸‍♀️ 🤸🏻‍♀️ 🤸🏼‍♀️ 🤸🏽‍♀️ 🤸🏾‍♀️ 🤸🏿‍♀️ 🤸‍♂️ 🤸🏻‍♂️ 🤸🏼‍♂️
							🤸🏽‍♂️ 🤸🏾‍♂️ 🤸🏿‍♂️ ⛹️‍♀️ ⛹🏻‍♀️ ⛹🏼‍♀️ ⛹🏽‍♀️ ⛹🏾‍♀️ ⛹🏿‍♀️ ⛹️‍♂️ ⛹🏻‍♂️ ⛹🏼‍♂️ ⛹🏽‍♂️
							⛹🏾‍♂️ ⛹🏿‍♂️ 🤺 🤾‍♀️ 🤾🏻‍♀️ 🤾🏼‍♀️ 🤾🏾‍♀️ 🤾🏾‍♀️ 🤾🏿‍♀️ 🤾‍♂️ 🤾🏻‍♂️ 🤾🏼‍♂️ 🤾🏽‍♂️
							🤾🏾‍♂️ 🤾🏿‍♂️ 🏌️‍♀️ 🏌🏻‍♀️ 🏌🏼‍♀️ 🏌🏽‍♀️ 🏌🏾‍♀️ 🏌🏿‍♀️ 🏌️‍♂️ 🏌🏻‍♂️ 🏌🏼‍♂️
							🏌🏽‍♂️ 🏌🏾‍♂️ 🏌🏿‍♂️ 🏇 🏇🏻 🏇🏼 🏇🏽 🏇🏾 🏇🏿 🧘‍♀️ 🧘🏻‍♀️ 🧘🏼‍♀️ 🧘🏽‍♀️ 🧘🏾‍♀️
							🧘🏿‍♀️ 🧘‍♂️ 🧘🏻‍♂️ 🧘🏼‍♂️ 🧘🏽‍♂️ 🧘🏾‍♂️ 🧘🏿‍♂️ 🏄‍♀️ 🏄🏻‍♀️ 🏄🏼‍♀️ 🏄🏽‍♀️ 🏄🏾‍♀️
							🏄🏿‍♀️ 🏄‍♂️ 🏄🏻‍♂️ 🏄🏼‍♂️ 🏄🏽‍♂️ 🏄🏾‍♂️ 🏄🏿‍♂️ 🏊‍♀️ 🏊🏻‍♀️ 🏊🏼‍♀️ 🏊🏽‍♀️ 🏊🏾‍♀️
							🏊🏿‍♀️ 🏊‍♂️ 🏊🏻‍♂️ 🏊🏼‍♂️ 🏊🏽‍♂️ 🏊🏾‍♂️ 🏊🏿‍♂️ 🤽‍♀️ 🤽🏻‍♀️ 🤽🏼‍♀️ 🤽🏽‍♀️ 🤽🏾‍♀️
							🤽🏿‍♀️ 🤽‍♂️ 🤽🏻‍♂️ 🤽🏼‍♂️ 🤽🏽‍♂️ 🤽🏾‍♂️ 🤽🏿‍♂️ 🚣‍♀️ 🚣🏻‍♀️ 🚣🏼‍♀️ 🚣🏽‍♀️ 🚣🏾‍♀️
							🚣🏿‍♀️ 🚣‍♂️ 🚣🏻‍♂️ 🚣🏼‍♂️ 🚣🏽‍♂️ 🚣🏾‍♂️ 🚣🏿‍♂️ 🧗‍♀️ 🧗🏻‍♀️ 🧗🏼‍♀️ 🧗🏽‍♀️ 🧗🏾‍♀️
							🧗🏿‍♀️ 🧗‍♂️ 🧗🏻‍♂️ 🧗🏼‍♂️ 🧗🏽‍♂️ 🧗🏾‍♂️ 🧗🏿‍♂️ 🚵‍♀️ 🚵🏻‍♀️ 🚵🏼‍♀️ 🚵🏽‍♀️ 🚵🏾‍♀️
							🚵🏿‍♀️ 🚵‍♂️ 🚵🏻‍♂️ 🚵🏼‍♂️ 🚵🏽‍♂️ 🚵🏾‍♂️ 🚵🏿‍♂️ 🚴‍♀️ 🚴🏻‍♀️ 🚴🏼‍♀️ 🚴🏽‍♀️ 🚴🏾‍♀️
							🚴🏿‍♀️ 🚴‍♂️ 🚴🏻‍♂️ 🚴🏼‍♂️ 🚴🏽‍♂️ 🚴🏾‍♂️ 🚴🏿‍♂️ 🏆 🥇 🥈 🥉 🏅 🎖 🏵 🎗 🎫 🎟 🎪 🤹‍♀️
							🤹🏻‍♀️ 🤹🏼‍♀️ 🤹🏽‍♀️ 🤹🏾‍♀️ 🤹🏿‍♀️ 🤹‍♂️ 🤹🏻‍♂️ 🤹🏼‍♂️ 🤹🏽‍♂️ 🤹🏾‍♂️ 🤹🏿‍♂️ 🎭 🎨
							🎬 🎤 🎧 🎼 🎹 🥁 🎷 🎺 🎸 🎻 🎲 🧩 ♟ 🎯 🎳 🎮 🎰
						<p>
							&nbsp;
						</p>

					</div>

					<!-- 到底了-提示 -->
					<p class="ebpx8">--- 暂时先展示这么多啦 ---</p>
				</div>

				<!-- 第六页 - 本站源码 -->
				<div id="nav07">
					<div class="nav07_bg">
						<div class="nav07_bt">本站源码</div>
					</div>

					<!-- 写在前面 -->
					<div class="nav07_kj">
						<h3>😁写/在/前/面</h3>
						<p>
							此源码全开源发布，转载还请保留版权信息（熊猫畔工作室）！
						</p>
						<p>
							官方网站：<a href="https://">HTTPS://</a>
						</p>
						<p>
						

						<p>
							&nbsp;
						</p>
					</div>

					<!-- 版权相关 -->
					<div class="nav07_kj">
						<h3>😁版/权/相/关</h3>
						<p>
							主页面底部版权可修改，可删除，不强求。
						</p>
						
						<p>
							各站长可以在自己的网站发布此主页的开源代码，还请保留版权。
						</p>

						<p>
							&nbsp;
						</p>
					</div>

					<!-- 源码相关 -->
					<div class="nav07_kj">
						<h3>😁源/码/相/关</h3>
						<p>
							大佬们可以对本源码进行任意修改，期待你们的魔改版。
						</p>
						<p>
							使用F12调试修改，注释掉引入[cnm.sb_copy.js]文件的那行代码即可。
						</p>
						<p>
							主要样式修改指引，下面有详细教程，代码注释写的也很全，可以快速找到界面对应代码。
						</p>
						<p>
							&nbsp;
						</p>
					</div>

					<!-- 修改指引 -->
					<div class="nav07_kj">
						<h3>😁修/改/指/引</h3>
						<!-- <h5>行数不一定百分百准确，在大致范围附近</h5> -->
						<h4>(1)网站特殊字体</h4>
						<p>
							全局字体：默认宋体 [cnm.sb_pc.css]第5行
						</p>
						<p>
							特殊英文字体：[cnm.sb_pc.css]第16行
						</p>
						<p>
							&nbsp;
						</p>
						<h4>(2)图片索引</h4>
						<h5>电脑端</h5>
						<p>
							开局背景图片：[cnm.sb_pc.css] 第44行
						</p>
						<p>
							侧栏上面的背景图片：[cnm.sb_pc.css] 第100行
						</p>
						<p>
							官网首页页面背景图片：[cnm.sb_pc.css] 第181行
						</p>
						<p>
							关于站长页面顶部头图：[cnm.sb_pc.css] 第391行
						</p>

						<p>
							商业合作页面背景图片：[cnm.sb_pc.css] 第605行 第618行 两个不一样会来回切换
						</p>
						<p>
							站点展示页面顶部头图：[cnm.sb_pc.css] 第714行 第737行 两个不一样会来回切换
						</p>
						<p>
							站点展示页面顶部宇航员图片：[cnm.sb_pc.css] 第748行
						</p>
						<p>
							站点展示页面顶部鲸鱼图片：[cnm.sb_pc.css] 第760行
						</p>
						<p>
							&nbsp;
						</p>

						<h5>移动端</h5>
						<p>
							顶部头图：[cnm.sb_mp.css] 第52行
						</p>
						<p>
							关于本站顶部头图：[cnm.sb_mp.css] 第142行
						</p>
						<p>
							商业合作背景图片：[cnm.sb_mp.css] 第332行
						</p>
						<p>
							站点展示顶部头图：[cnm.sb_mp.css] 第392行
						</p>

						<p>
							商业合作页面背景图片：[cnm.sb_pc.css] 第604行 第617行 两个不一样会来回切换
						</p>
						<p>
							站点展示页面顶部头图：[cnm.sb_pc.css] 第902行 第925行 两个不一样会来回切换
						</p>
						<p>
							站点展示页面顶部宇航员图片：[cnm.sb_pc.css] 第937行
						</p>
						<p>
							站点展示页面顶部鲸鱼图片：[cnm.sb_pc.css] 第949行
						</p>


						<p>
							其他的图片在index.html里面，行数易变，这里就不列举了，很简单，自行替换。
						</p>
						<p>
							&nbsp;
						</p>


						<h4>(3)配色</h4>
						<h5>电脑端</h5>
						<p>
							首页欢迎来到四个大字：[cnm.sb_pc.css] 第230行
						</p>
						<p>
							首页CNM官方网站：[cnm.sb_pc.css] 第239行
						</p>
						<p>
							首页右上右下角文字：[cnm.sb_pc.css] 第294行
						</p>
						<p>
							首页探索按钮背景颜色：[cnm.sb_pc.css] 第256行
						</p>
						<p>
							关于本站页面顶图文字背景颜色：[cnm.sb_pc.css] 第402行
						</p>
						<p>
							关于本站页面联系站长按钮背景颜色：[cnm.sb_pc.css] 第444行
						</p>
						<p>
							站点展示页面顶图小飞机背景颜色：[cnm.sb_pc.css] 第770行
						</p>
						<p>
							&nbsp;
						</p>

						<h5>移动端</h5>
						<p>
							首页顶栏背景颜色：[cnm.sb_mp.css] 第26行
						</p>
						<p>
							首页栏目背景颜色：[cnm.sb_mp.css] 第81行
						</p>
						<p>
							关于本站页面顶图文字背景颜色：[cnm.sb_mp.css] 第158行
						</p>
						<p>
							站点展示页面顶图文字背景颜色：[cnm.sb_mp.css] 第401行
						</p>
						<p>
							&nbsp;
						</p>

					</div>



					<!-- 拓展功能 -->
					<div class="nav07_kj">
						<h3>😁拓/展/功/能</h3>
						<h4>这些都不难，你们可以自行选择添加</h4>
						<p>
							鼠标点击特效，修改鼠标样式
						</p>
						<p>
							添加一个音乐播放器
						</p>
						<p>
							添加一个看板娘
						</p>
						<p>
							添加一个聊天室
						</p>
						<p>
							添加一些小游戏
						</p>
					</div>

					<!-- 到底了-提示 -->
					<p class="ebpx7">--- 如果有好的想法或建议，可发送至站长邮箱(admin@qccce.com)，期待您的来信---</p>
				</div>
			</div>


		</div>



		<!-- 入场动画 -->
		<div id="etext"></div>

		<!-- 背景图片+背景灰度 -->
		<div id="ebg"></div>
		<div id="ebga"></div>

		<!-- 背景飘落 -->
		<div id="xuna"></div>
		<script src="js/cnm.sb_bg.js"></script>
	</div>










<!-- 此处开始为后台可修改内容 后台地址 /admin  账号admin 密码123456    -->















	<!-- 手机MP端 -->
	<div id="mp">
		<div id="excontent">
		
		
		<!-- 导航区域 -->
		<ul id="exnav">
			<li><img src="font/cnmsb01.png" />
				<p>首页</p>
			</li>
			<li><img src="font/cnmsb02.png" />
				<p>关于本站</p>
			</li>
			
			<li><a href="./liao"></a><img src="font/cnmsb03.png" />
				<p>在线聊天</p></a>
			</li>
			<li><img src="font/cnmsb04.png" />
				<p>商业合作</p>
			</li>
			<li><img src="font/cnmsb05.png" />
				<p>站点展示</p>
			</li>
			
			
		</ul>
		
		
			 
			 
			<!-- NO3-站长团队 -->
			<div id="exnav01">
				<div class="exnav03_p">
					<h3><?php echo $conf['ad-1']?><span><?php echo $conf['ad-1-1']?></span></h3>
					
				<h5><p><?php echo $conf['ad-2']?></p></h5>
					
					
				
					
					<br><br>
		<!--加群组件-->			<a href="<?php echo $conf['ad-3']?>"><img src="http://pub.idqqimg.com/wpa/images/group.png" ></a> 
					<br>
					
				
			
			
				
					
					<p class="exnav05_footer"> &nbsp;&nbsp;|&nbsp;&nbsp; 	<a class="banquan" style="color:#000;"
        href="https://beian.miit.gov.cn"
        target="_blank"><?php echo $conf['ad-4']?></a>
						&nbsp;&nbsp;|&nbsp;&nbsp;  </p>
			
					</div>
					
					<br><br>
					
					
				
				
				
				<div class="exnav03_team">
					<img src="img/cnmteam01.png" alt="[组织者]" />
					<img src="img/cnmteam02.png" alt="[组织者]" />
					<img src="img/cnmteam03.png" alt="[组织者]" />
					<img src="img/cnmteam04.png" alt="[组织者]" />
					<img src="img/cnmteam05.png" alt="[组织者]" />
			
				
				</div>
			
			
		
					
				</div>	
			
			

			
			
			 
			 
			 
			<!-- NO2-关于本站 -->
			<div id="exnav02">
				<div class="exn02_bg">
					<p><?php echo $conf['ad2-1']?></p>
				</div>
				<div class="exn02_zl">
					<h3 class="exn_bt">站/长/资/料</h3>
					<div class="exn02_kjt">
						
						
						
						
						<p>
						<?php echo $conf['ad2-2']?>
						
							
							</p>
					</div>
				</div>
				
				
				<p class="exbpx">--- 暂时先展示这么多啦 ---</p>
			</div>
		
				
				
				
				<!--
				<div class="exn02_zl">
					<h3 class="exn_bt">个/人/介/绍</h3>
					<div class="exn02_kjt">

						<p>
							本人学识渊博，经验丰富，代码风骚，效率恐怖。C/C＋＋，java，php无不精通，熟练掌握各种框架。
						</p>
						<p>
							会DDOS一秒钟死一个站，会注入，会上传，会Xss，会破解，会嗅探，会开发，会业务，会运维，会渗透。互联网内，我无处不在。
						</p>
						<p>
							全国漏洞认识深刻，熟练掌握各种操作系统内核。认真学习过《黑客攻防技术宝典》，《逆向工程》，《游戏waigua攻防艺术》等专业书籍。深山苦练十余载，一天只睡2小时。
						</p>
						<p>
							听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。
						</p>
						<p>
							千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登vpn，千里之外定位问题，瞬息之间修复上线。
						</p>
						<p>
							只有你想不到的，没有我做不到的。
						</p>
						<p>
							以上都是吹的，我只会划水摸鱼，我是个废物。
						</p>
						<p>
							&nbsp;
						</p>

						<h3>😁网站的艰难运行环境</h3>
						<p>
							服务器最近遭受DDOS攻击，官方部分站点已瘫痪，恢复时间不确定。主页随时可能托管在Github或者虚拟主机上，速度相对较慢，请耐心等待恢复，还您一个舒适的欣赏环境。哈哈哈哈哈哈哈嗝~
						</p>
						<p>
							&nbsp;
						</p>

						<h3>😁网站源码</h3>
						<p>
							全开源版本发布
						</p>
						<p>
							全开源版本发布
						</p>
						<p>
							全开源版本发布
						</p>
						<p>
							全开源版本发布
						</p>
						<p>
							&nbsp;
						</p>


					</div>
				</div>
				<div class="exn02_kj exmb03">
					<h3 class="exn_bt">知/识/掌/握</h3>
					<p>已掌握的技能</p>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>

					<p>精通掌握的技能</p>
					<div>
						<img src="img/huashui.jpg" />
						<span>摸鱼</span>
						<span>摸鱼划水</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>摸鱼</span>
						<span>摸鱼划水</span>
					</div>
				</div>-->
   
				<!-- 每日必做 -->
				<!--
				<div class="exn02_kj exmb04">
					<h3 class="exn_bt">每/日/必/做</h3>
					<div id="exjn">
						<a href="javascript:;">摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼</a>
						<a href="javascript:;">划水划水，划水划水，划水划水，划水划水，划水划水，划水划水</a>
						<a href="javascript:;">闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊</a>
						<a href="javascript:;">abcdefghigklmnopqrstuvwxyz</a>
						<a href="javascript:;">ABCDEFGHIJKLMNOPQRSTUVWXYZ</a>
					</div>
				</div>-->
				<!-- 到底了-提示 -->
			
			
			<!-- NO1-首页内容 -->
			
			
			<div id="exnav03">
				<div class="exn1_top">
					<img src="img/cnm.sb.svg" />
					 <a href="http://" target="_blank" rel="noopener noreferrer">官网</a>
				</div>
				<div class="exn1_banner">
				<h3>秋水共长天一色</h3> 
					
			</div>
			
				<br><br><br>
		
			<ul class="exn1_but">
					<li id="exn1_01">
						<div>
						   <a href="./liao"> <img src="font/cnmsb01.png" /></div>
						<h5>在线聊天</h5>
						<p>点我-即可参与在线<span class="red">实时</span>聊天！</p>
						</a>
					</li>
		<!--		<li id="exn1_02">
						<div><img src="font/cnmsb02.png" /></div>
						<h5>关于本站</h5>
						<p>关于本站站长的相关信息与爱好！</p>
					</li>
					<li id="exn1_03">
						<div><img src="font/cnmsb03.png" /></div>
						<h5>站长团队</h5>
						<p>站长的小伙伴们，也许你也可以加入~</p>
					</li>
					<li id="exn1_04">
						<div><img src="font/cnmsb04.png" /></div>
						<h5>商业合作</h5>
						<p>想找我们定制程序？谈合作？点这里！</p>
					</li>
					<li id="exn1_05">
						<div><img src="font/cnmsb05.png" /></div>
						<h5>站点展示</h5>
						<p>这里包含了站长的所有奇怪的站点！</p>
					</li>
					
		-->			
				</ul>
			</div>
			
			
			
			
			
			
			
			<!-- NO4-商业合作 -->
			<div id="exnav04">
				<div class="exnav04_zsc">
					<div>
						<p>商业合作 - 微信二维码</p>
						<img src="image/wx.jpg" alt="[联系二维码]" title="[联系二维码]">
					</div>
					<p>添加请备注来意u，不闲聊 方便你我！</p>
				</div>
			</div>
			<!-- NO5-站点展示 -->
			<div id="exnav05">
				<!--<div class="exn5_bg">
					<div class="exn5_bg_nav">
						<img src="img/nav05_fj.png" />
						<span>站点展示</span>
					</div>
				</div> -->
				<!-- 第五页-内容区域 -->
				<div class="exn5_nr">
				<!--	<div class="exnav05_centent_tit">
						<h2>🦄个人站点🦄</h2>
						
					</div>
					<!-- 作品展示模板NO1 -->
					<div class="exnav05_centent_mb">
						<h2><?php echo $conf['ad4-1']?></h2>
						<a href="<?php echo $conf['ad4-2']?>" target="_blank" rel="noopener noreferrer">
							<div><img src="image/xcx.png" alt="[]" /></div>
							<h3><?php echo $conf['ad4-3']?></h3>
							<p><?php echo $conf['ad4-4']?></p>
						</a>
						<div>立即前往</div>
					</div>
					
					<!-- 作品展示模板NO2 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp02.jpg" alt="[]" /></div>
							<h3>LSP论坛</h3>
							<p>你喜欢的这里都有</p>
						</a>
						<div>立即前往</div>
					</div>
					
					
					-->
					<!-- 作品展示模板NO3 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp03.jpg" alt="[]" /></div>
							<h3>傻逼查询网</h3>
							<p>查询网络中对我实施语言暴力的傻逼</p>
						</a>
						<div>立即前往</div>
					</div>
				-->	<!-- 作品展示模板NO4 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp04.jpg" alt="[]" /></div>
							<h3>至尊邮箱</h3>
							<p>***@xmpan.com邮箱</p>
						</a>
						<div>立即前往</div>
					</div>
				-->	<!-- 作品展示模板NO5 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp05.jpg" alt="[]" /></div>
							<h3>不要点我</h3>
							<p>点了别怪我哦</p>
						</a>
						<div>立即前往</div>
					</div>
				-->	<!-- 作品展示模板NO6 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp01.jpg" alt="[]" /></div>
							<h3>迪奥很大</h3>
							<p>就很大~</p>
						</a>
						<div>立即前往</div>
					</div>
				</div>

			-->	<!--团队成员优秀站点-->
			<!--	<div class="exn5_nr">
					<div class="exnav05_centent_tit">
						<h2>🦄团队成员·优秀站点🦄</h2>
						<p>优秀的站点就应该被展示出来！</p>
					</div>
			-->		<!-- 作品展示模板NO1 -->
			<!--		<div class="exnav05_centent_mb">
						<a href="http://#/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp01.jpg" alt="[]" /></div>
							<h3>个人博客</h3>
							<p>爱生活，爱分享</p>
						</a>
						<div>立即前往</div>
					</div>-->
					<!-- 作品展示模板NO2 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp02.jpg" alt="[]" /></div>
							<h3>LSP论坛</h3>
							<p>你喜欢的这里都有</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO3 -->
				<!-- 	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp03.jpg" alt="[]" /></div>
							<h3>傻逼查询网</h3>
							<p>查询网络中对我实施语言暴力的傻逼</p>
						</a>
						<div>立即前往</div>
					</div>  -->
					<!-- 作品展示模板NO4 -->
				<!--	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp04.jpg" alt="[]" /></div>
							<h3>至尊邮箱</h3>
							<p>***@xmpan.com邮箱</p>
						</a>
						<div>立即前往</div>
					</div>-->
					<!-- 作品展示模板NO5 -->
				<!-- 	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp05.jpg" alt="[]" /></div>
							<h3>不要点我</h3>
							<p>点了别怪我哦</p>
						</a>
						<div>立即前往</div>
					</div>
				-->	<!-- 作品展示模板NO6 -->
				<!-- 	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp01.jpg" alt="[]" /></div>
							<h3>迪奥很大</h3>
							<p>就很大~</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO6 -->
				<!-- 	<div class="exnav05_centent_mb">
						<a href="http://#" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp02.jpg" alt="[]" /></div>
							<h3>贫困网</h3>
							<p>大哥大姐们，给小弟捐点呗，感激不尽！</p>
						</a>
						<div>立即前往</div>
					</div>
					
					-->
					
					
				</div>
				<p class="exnav05_footer">你有酷酷或者实用的站点推荐嘛？~</p>
			</div>
		</div>
		
		
		<!-- 页面截止 -->
		
		<!-- 背景飘落 -->
		<div id="xuna"></div>
		<script src="js/cnm.sb_bg.js"></script>


</body>

</html>





	
		