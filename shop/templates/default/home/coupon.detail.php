<style>
.ui-widget-header {
	background: none;
	border-bottom: 1px solid #ECECEC;
	color: #222222;
	font-weight: bold;
	color: #333333;
	font-size: 16px;
	font-family: "Microsoft YaHei";
	height: 35px;
	line-height: 35px;
}
</style>

<div class="life_body">
  <div id="main-wrap" >
    <div class="sitenav">
      <h2><?php echo $lang['nc_location'];?>：</h2>
      <a href="<?php echo BASE_SITE_URL;?>"><?php echo $lang['nc_home'];?></a>&nbsp;&gt;&nbsp;<?php echo $lang['nc_coupon'];?> </div>
    <div class="life_box mb10">
      <div class="shop_infobox clearfix">
        <div class="shop_img"><a href="<?php echo BASE_SITE_URL;?>/index.php?act=store&op=detail&id=<?php echo $output['store_info']['store_id'];?>"><img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_STORE_PATH.DS.$output['store_info']['logo'];?>" /></a></div>
        <div class="shop_info">
          <h2 class="title"><?php echo $output['store_info']['store_name'];?></h2>
          <ul>
            <li><span style="float:left;">店铺评价:</span><div class="remark_box"> <span class="remark-item star<?php echo $output['final_score']; ?>" style=" margin-top:4px;"></span>
            <div class="remark_taste"> <a href="#" class="col-num"><?php echo $output['final_score']; ?>分</a> <em class="sep">|</em><span>人均<strong class="stress"> ¥<?php echo $output['store_info']['person_consume']; ?> </strong></span></div>
          </div></li>
            <li><span>店铺介绍:</span><?php echo mb_substr($output['store_info']['description'],0,55,'utf-8');?></li>
            <li><span><?php echo $lang['nc_coupon_store_address'];?>:</span><?php echo $output['store_info']['address'];?></li>
            <li><span><?php echo $lang['nc_coupon_store_telephone'];?>:</span><?php echo $output['store_info']['telephone'];?></li>
<!--            <li><span><?php echo $lang['nc_coupon_store_bus'];?> :</span><?php echo $output['store_info']['bus'];?></li>-->
          </ul>
        </div>
      </div>
    </div>
    <div class="mainbox">
      <div class="layout_left_wrap">
        <div class="layout_left clearfix">
          <div class="c_title">
            <h1><?php echo $output['coupon_info']['coupon_name'];?></h1>
          </div>
          <div class="c_mall">
            <div class="c_imgbox"> <a href="#" target="_blank"><img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COUPON_PATH.DS.str_replace('.jpg_small','',$output['coupon_info']['coupon_pic']);?>" /></a> </div>
            <ul>
              <li class="c_icon1"><?php echo $lang['nc_coupon_detail_already'];?><span><?php echo $output['coupon_info']['view_count'];?></span><?php echo $lang['nc_coupon_detail_people'];?><?php echo $lang['nc_coupon_detail_view'];?></li>
              <li class="c_icon2"><?php echo $lang['nc_coupon_detail_already'];?><span><?php echo $output['coupon_info']['download_count'];?></span><?php echo $lang['nc_coupon_detail_people'];?><?php echo $lang['nc_coupon_detail_download'];?><!--  还剩下<span><?php echo $output['coupon_info']['limit'];?>张</span>--></li>
              <li class="c_icon3"><span endtime="<?php echo $output['coupon_info']['coupon_end_time'];?>" class='process'></span>&nbsp;<?php echo $lang['nc_coupon_detail_stopdownloading'];?></li>
			  <li class="share-js">		
				<!-- JiaThis Button BEGIN -->
				<div class="jiathis_style">
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_renren"></a>
					<a class="jiathis_button_xiaoyou"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a>
				</div>
				<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
				<!-- JiaThis Button END -->
			  </li>
            </ul>
            <div class="c_btn"> 
				<a class="printBtn" id="printBtn" href="<?php echo BASE_SITE_URL;?>/index.php?act=coupon&op=print&coupon_id=<?php echo $output['coupon_info']['coupon_id'];?>"></a> 
				<a class="downloadBtn"></a> 
			</div>
          </div>
          <div class="notice_block">
            <h3 class="c_tit1"><?php echo $lang['nc_coupon_detail_details'];?>：</h3>
            <p class="c_tit2"><?php echo $lang['nc_coupon_detail_validuntil'];?>:<span><?php echo date("Y-m-d H:m",$output['coupon_info']['coupon_end_time']);?></span></p>
            <p class="c_tit3"><?php echo stripslashes(htmlspecialchars_decode($output['coupon_info']['coupon_des']));?></p>
          </div>
          <div class="notice_block">
            <h3 class="c_tit1"><?php echo $lang['nc_coupon_detail_businessaddress'];?>:</h3>
            <p class="c_tit3"> <?php echo $output['store_info']['address'];?> </p>
          </div>
          <div class="notice_block">
            <h3 class="c_tit1"><?php echo $lang['nc_coupon_detail_smscoupons'];?><span class="font1"><?php echo $lang['nc_coupon_detail_downloadmessage'];?></span> <span class="font2">(<?php echo $lang['nc_coupon_detail_completelyfree'];?>)</span></h3>
            <p class="c_tit4"><?php echo $output['coupon_info']['short_message'];?></p>
          </div>
        </div>
        <div class="ad-detail-l mb10"><?php echo rec(12);?></div>
      </div>
      <div class="sidebar">
        <div class="sd_list">
          <h2 class="sd_list_title mb10"><?php echo $lang['nc_coupon_detail_othercoupons'];?></h2>
          <?php if(!empty($output['couponlist'])){?>
          <?php foreach($output['couponlist'] as $ek=>$ev){?>
          <dl>
            <dt>
            	<a target="_blank" href="index.php?act=coupon&op=detail&coupon_id=<?php echo $ev['coupon_id'];?>" class="layout"> 
            		<img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COUPON_PATH.DS.str_replace('.jpg_small','',$ev['coupon_pic']);?>"/>
            	</a>
            </dt>
            <dd class="sd_title"> <a href="index.php?act=coupon&op=detail&coupon_id=<?php echo $ev['coupon_id'];?>" target="_blank"><?php echo $ev['coupon_name'];?></a> </dd>
            <dd class="sd_info">
              <div class="q_info">
                <p class="q_time"><?php echo $lang['nc_coupon_detail_validuntil2'];?><?php echo date("Y.m.d",$ev['coupon_end_time']);?></p>
                <a class="q_btn" href="index.php?act=coupon&op=detail&coupon_id=<?php echo $ev['coupon_id'];?>"><?php echo $lang['nc_coupon_detail_havealook'];?></a> </div>
            </dd>
          </dl>
          <?php }?>
          <?php }?>
        </div>
        <div class="cp_ad mb10"><?php echo rec(11);?></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div id='short_message' style="display: none;"> </div>
<script type="text/javascript">
	var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';
</script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.edit.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/common.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script> 
<script type='text/javascript'>
	$(function(){
		$('#printBtn').click(function(){
         var is_login = '<?php echo $_SESSION['is_login']?>';
         if(is_login!=1){
            alert('<?php echo $lang['nc_appointment_list_login first'];?>');
            return false;
         }
      });

		var time = '<?php echo TIMESTAMP;?>';
		var endtime = parseInt($('.process').attr('endtime'));
		var lag = endtime-time;

		if(lag>0){
		   var second = Math.floor(lag % 60);    
		   var minite = Math.floor((lag / 60) % 60);
		   var hour = Math.floor((lag / 3600) % 24);
		   var day = Math.floor((lag / 3600) / 24);
		   $('.process').html(day+"<?php echo $lang['nc_coupon_detail_date'];?>"+hour+"<?php echo $lang['nc_coupon_detail_hour'];?>"+minite+"<?php echo $lang['nc_coupon_detail_minute'];?>"+second+"<?php echo $lang['nc_coupon_detail_second'];?>");
		}

		function updateEndTime(){
			lag--;
			if(lag>0){
			   var second = Math.floor(lag % 60);    
			   var minite = Math.floor((lag / 60) % 60);
			   var hour = Math.floor((lag / 3600) % 24);
			   var day = Math.floor((lag / 3600) / 24);
			   $('.process').html(day+"<?php echo $lang['nc_coupon_detail_date'];?>"+hour+"<?php echo $lang['nc_coupon_detail_hour'];?>"+minite+"<?php echo $lang['nc_coupon_detail_minute'];?>"+second+"<?php echo $lang['nc_coupon_detail_second'];?>");
			}
			setTimeout(updateEndTime,1000);
		}
		setTimeout(updateEndTime,1000);
		
		$('.downloadBtn').click(function(){
			ajax_form('short_message', '<?php echo $lang['nc_coupon_detail_smscoupons'].$lang['nc_coupon_detail_download'];?>', '<?php echo BASE_SITE_URL;?>/index.php?act=coupon&op=messageinfo&coupon_id='+<?php echo $output['coupon_info']['coupon_id'];?>,'500px');
		});
	});
</script> 
