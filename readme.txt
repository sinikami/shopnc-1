+-------------------------+
 ShopNC本地生活
+-------------------------+
 ShopNC本地生活系统是网城创想公司自主研发的一款产品，采用O2O模式(Online To Offline)，将线下商铺和互联网结合，让互联网成为线下交易的前台，专注于本地生活服务，集生活和购物为一体的专业网站，体现本地生活特色，满足消费者多样性的需求，也为商户提供了很好的展示和销售渠道。商户在线上揽客增加客流，消费者在线下消费，享受更多的优惠，商户可以通过参加团购来提高利润和知名度，还可以设立优惠劵和会员卡，吸引更多客户，用户可以对商家进行点评，参加团购，并且用优惠劵购物，享受折扣，站点提供更丰富的商户内容、商品信息，把原本分散的内容整合到一个平台上。


+----------------------------------+
 环境要求及操作系统要求
+----------------------------------+
一、ShopNC本地生活系统具备跨平台特性，可运行于 Linux/FreeBSD/Unix 及微软 Windows 2000/2003/XP/NT
    等各种操作系统环境下。我们已在软件中针对上述操作系统做了大量的测试和实地检验,保证 ShopNC本地生活
  系统可以在上述系统中安全稳定的运行，但您仍然需要做好服务器操作系统级的安全防备措施。
    例如 Windows 用户需更改 MySQL for Windows 的初始 root 密码,避免跨目录的文件读写. 类Unix 用户需避免
	使用过于简单的密码，避免跨用户目录的文件读写，做好服务器上其他相关软件（如 Sendmail、ftpd、httpd）
	等的安全防范，使用较新的软件版本等。 
    如果您租用虚拟主机，一般正规和技术力量较强的虚拟主机提供商会已经做好操作系统的各项准备，用户可不必
	关注此部分。 

二、推荐使用 Linux/FreeBSD 操作系统，不仅完全免费，而且可以获得更好的稳定性和负载能力。

+----------------------------------+
 语言及数据库支撑环境要求
+----------------------------------+
ShopNC本地生活系统 需要服务器上装有如下软件： 

一、 主流WEB服务器（如 Apache、IIS、Nginx 等），php 5.2或5.3环境，并且安装Zend Optimizer3.X（适用PHP5.2）或 Zend Guard Loader（适用PHP5.3）,
     MySQL 5.0 及以上，推荐使用以上软件的最新稳定版本，不仅拥有更多的功能，而且通常已修复了已知老版本的安全漏洞。


二、 如果您租用虚拟主机，请咨询虚拟主机提供商，您的空间服务器是否已安装了上述软件。由于ShopNC电商门户系统
的数据表具有前缀设计，因此通常情况下可以将 ShopNC电商门户系统与其他软件安装在同一个数据库中，或采用不同的
前缀名从而在同一个数据库中安装多种应用而不产生冲突。 

三、 您的 MySQL 数据库账号应当拥有 CREATE、DROP、ALTER 等执行权限，同时文件空间需不低于 100M，数据库
     空间不低于5M，通常您的虚拟空间都会满足这个条件，以满足包括ShopNC电商门户系统在内的绝大多数
	 网络软件的正常运行。如果您不了解具体情况，请咨询您的空间提供商。 

四、 安装可能用到的工具软件

     ShopNC本地生活系统开发团队尽量使得安装步骤简单方便，但仍然可能会用到一些常用的工具软件。如果
	 您通过网络将 ShopNC本地生活系统上传到服务器上,您将可能需要一个 FTP 客户端软件.通过您的服务器
	 FTP账号，使用该 FTP 客户端软件将相关文件上传到服务器上。同时您可能需要一个简单的文本文件编辑软件，
     用以对配置文件进行参数修改，一般的第三方软件如 UltraEdit、EditPlus 等都能胜任。ShopNC电商门户系统要求
	 使用 FTP 软件上传 php 文件时，使用二进制（BINARY）方式进行，否则将无法正常使用。 
     
    注：如果您用的是windows系统，请不要用系统自带的“记事本”程序打开ShopNC本地生活系统的文件，哪怕
    只是查看，也建议您不要使用“记事本”程序。记事本在打开的时候，会往文件内容的第一位写入一个点，这在
    一般的程序里是看不到的（包括记事本本身），但是因为这个点的存在，会影响程序正常运行。切忌，慎用记事
    本。

+----------------------------------+
 开始安装 ShopNC本地生活系统
+----------------------------------+
把程序目录下的所有文件，上传到您要安装的位置，然后打开如下网址

http://你的域名/程序目录/index.php

如果是第一次安装，系统会自动跳转到安装界面，您只需要按要求填写好相关的信息就可以顺利完成安装，完成安装后即可使用。

后台管理路径：http://你的域名/程序目录/admin/

重新安装方法：如果您已经安装，想重新安装，删除install目录下的lock文件后，即可重新安装。

更详细的说明请到官方论坛查看：http://bbs.shopnc.net



+----------------------------------+
 测试站地址:http://o2o.shopnctest.com/
+----------------------------------+

会员账号:shopnc  密码:shopnc
商家账号:shopnc	 密码:admin




+----------------------------------+
 我们的联系方式
+----------------------------------+
天津市网城创想科技有限责任公司

电话：022-58306929
网址：http://www.shopnc.net
地址：天津市红桥区大丰路水游城冠绮大厦8层

