<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $lang['nc_store_center'];?></title>
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_SITE_URL;?>/css/skin.css">
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.validation.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/i18n/zh-CN.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/common.js"></script>
<script type="text/javascript">
$(function(){
	// 全选 start
	$('.checkall').click(function(){
		$('.checkall').attr('checked',$(this).attr('checked') == 'checked');
		$('.checkitem').each(function(){
			$(this).attr('checked',$('.checkall').attr('checked') == 'checked');
		});
	});
});
</script>
</head>

<body>
<div id="topbar">
  <div class="topnav">
    <div class="topnav_bd"> 
      <a href="<?php echo BASE_SITE_URL;?>/index.php?act=storesetting&op=dashboard" class="topnav_logo" title="<?php echo $lang['nc_ShopNC local life'];?>"> 
      <?php if(C('seller_logo')){?>
      <img src="<?php echo BASE_SITE_URL.'/data/upload/'.(ATTACH_COMMON_PATH.DS.C('seller_logo'));?>"/>
      <?php }else{?>
      <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/logo.jpg">
      <?php }?>
      </a>
      <div class="navmain">
  <ul>
  <li><span class="split-line"><a href="index.php?act=storesetting&op=dashboard" class="<?php if($_GET['act'] == 'storesetting' && $_GET['op'] == 'dashboard'){ echo 'current';}?>">首页</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storesetting&op=setting" class="<?php if($_GET['act'] == 'storesetting' && $_GET['op'] != 'dashboard'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_setting'];?>-->设置</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storeorder" class="<?php if($_GET['act'] == 'storeorder'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_order'];	?>-->订单</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storegroupbuy" class="<?php if($_GET['act'] == 'storegroupbuy'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_groupbuy'];?>-->团购</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storegoods" class="<?php if($_GET['act'] == 'storegoods'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_goods'];?>-->商品</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storecomment" class="<?php if($_GET['act'] == 'storecomment'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_comment'];?>-->评论</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storecoupon" class="<?php if($_GET['act'] == 'storecoupon'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_coupon'];?>-->优惠券</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storeactivity" class="<?php if($_GET['act'] == 'storeactivity'){ echo 'current';}?>"><!--<?php echo $lang['nc_store_nav_activity'];?>-->活动</a></span></li>
    <li><span class="split-line"><a href="index.php?act=storesettle" class="<?php if($_GET['act'] == 'storesettle'){ echo 'current';}?>">结算</a></span></li>
  </ul>
</div>
<div class="nav-store">
<a class="nav-link" href="index.php?act=storesetting&op=avatar" ><img class="avt" width="44" height="44" src="<?php echo BASE_SITE_URL.'/data/upload/shop/member/'.($_SESSION['store_avatar']!=''?$_SESSION['store_avatar']:'member.png'); ?>">
<div class="arrow"></div></a>
<ul>
<li><a href="index.php?act=storesetting&op=setting"><i class="st1"></i>商户设置</a></li>
<li><a href="index.php?act=storesetting&op=setpassword"><i class="st4"></i>密码修改</a></li>
<li><a href="<?php echo BASE_SITE_URL; ?>"><i class="st3"></i>返回首页</a></li>
<li><a href="index.php?act=login&op=logout"><i class="st2"></i>退出登录</a></li>
</ul>
</div>
      <!--<ul class="topmenu">
      	<?php if($_SESSION['store_id']>0){?>
        <li>商家<span style="font-weight:bold"><?php echo $_SESSION['account'];?></span><?php echo $lang['nc_welcome'];?></li>
        <li class="line">|</li>
        <li><a href="<?php echo BASE_SITE_URL;?>/index.php?act=store&op=detail&id=<?php echo $_SESSION['store_id'];?>" target='_blank'><?php echo $lang['nc_store_nav_index'];?></a></li>
        <li class="line">|</li>
        <li><a href="<?php echo BASE_SITE_URL;?>/index.php?act=login&op=logout"><?php echo $lang['nc_logout'];?></a></li>
        <?php }?>
      </ul>-->
    </div>
  </div>
</div>

<?php if(trim($_GET['act']) == 'storesetting' && (trim($_GET['op']) == 'dashboard' || !isset($_GET['op']))){ ?>
  <?php require_once($tpl_file);?>
<?php }else{ ?>
<div id="container" style="clearfix">
  <?php require_once("member_store_top.php");?>
  <?php require_once($tpl_file);?>
</div>
<?php } ?>
<?php require BASE_TPL_PATH.'/layout/footer.php';?>
</body>
</html>
