<?php

  // 引入类
  require_once('inc/require.php');

  if(isset($_GET['id'])) {
    
    $url_c = new url();

    // 获取目标网址
    $url = $url_c->get_url($_GET['id']);
    // 重定向至目标网址
    if($url) {
      header('Location: ' . $url);
      exit;
    }

  }

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo get_title() . ' - ' . get_description(); ?></title>
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <link type="text/css" rel="stylesheet" href="asset/css/main.css" />
    <style> 
          html,body{background:url(https://i.alapi.cn/acg) no-repeat 100%;}
    </style>
  </head>
  <body>
    <div class="wrap">
      <div class="meta">
        <h2 class="title"><?php echo get_title(); ?></h2>
        <h3 class="description"><?php echo get_description(); ?></h3>
      </div>
      <div class="link-area">
        <input id="url" type="text" placeholder="https://" />
        <input id="submit" type="button" value="Generate" onclick="APP.fn.setUrl(this)" />
      </div>
      <div class="footer">Copyright &copy; 2016 - 
          <!-- 自动更新版权时间代码开始 -->
        <script>// <![CDATA[
  document.write(new Date().getFullYear());
// ]]></script>
        <!-- 自动更新版权时间代码结束 -->
        <a href="https://www.1iy.net/" title="Carignor" target="_blank">QiMeng</a> ♡ <a href="https://gitlab.com/iyk/YSurl/" title="Caringor" target="_blank">YSurl</a>.</div>
    </div>
  </body>
  <!-- JS -->
  <script type="text/javascript" src="asset/js/app.js"></script>
</html>
