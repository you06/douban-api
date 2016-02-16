<?php 
  $id = $_GET["id"];

  $infoUrl = "https://api.douban.com/v2/book/" . $id;

  $infoRes = file_get_contents($infoUrl);
  $infoResJSON = json_decode($infoRes);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>悦读 · Light Reading</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://www.tongmu.me/PUBLIC/favicon/64.64.ico">
  <link href="./css/font-awesome.min.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <div class="head">
    <div class="container">
      <p><a href="./index.html"><img src="./img/logo.png" alt="douban api query system's logo"></a></p>
      <p><a href="./index.html"><img src="./img/brand.png" alt="悦读"></a></p>
    </div>
  </div>
  <div class="body">
    <div class="container">
      <div class="input-group search-group UIborder">
        <button class="input-type input-inner" id="input-type"><span id="select-type">分类</span>&nbsp;&nbsp;<i class="fa fa-sort-desc"></i></button>
        <div class="type-options type-options-close-status UIborder" status="close" type="" id="type-options">
          <div class="type-option" id="option1" value="book"><p>书籍</p></div>
          <div class="type-option" id="option2" value="music"><p>音乐</p></div>
          <div class="type-option" id="option3" value="movie"><p>电影</p></div>
        </div>
        <div class="input-box input-inner">
          <input type="text" id="search-input">
        </div>
        <button class="input-inner"><img src="./img/search.png" alt="搜索" class="btn" id="searchTrigger"></button>
      </div>
      <div class="search-res UIborder">
        <p class="search-notice hide" id="notice-1"><i class="fa fa-wifi"></i>&nbsp;网络连接错误</p>
        <p class="search-notice hide" id="notice-101"><i class="fa fa-tags"></i>&nbsp;请选择分类</p>
        <p class="search-notice hide" id="notice-201"><i class="fa fa-exclamation-circle"></i>&nbsp;请输入搜索关键词</p>
        <p class="search-notice hide" id="notice-202"><i class="fa fa-close"></i>&nbsp;未找到相关的内容</p>
        <p class="search-notice hide" id="notice-999"><i class="fa fa-warning"></i>&nbsp;发生未知错误</p>
        <i class="fa fa-spinner search-loading hide" id="search-loading-icon"></i>
      </div>
    </div>
  </div>
  <div class="footer">
      <img src="./img/logo-white.png" alt="Matt">
      <p>Douban-API-Query-System · Created by <a href="https://www.tongmu.me/" target="_blank">Matt</a></p>
      <p>
        <a href="https://github.com/you06/douban-api" target="_blank">GitHub Project</a>&nbsp;&nbsp;
        <a href="http://weibo.com/3805189017" target="_blank">Sina Weibo</a>&nbsp;&nbsp;
        <a href="mailto:tongmu@tiaozhan.com" target="_blank">Email</a>
      </p>
  </div>
  <script src="./js/jquery.min.js" type="text/javascript"></script>
  <script src="./js/main.js" type="text/javascript"></script>
</body>
</html>