<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <title>天猴商城 - 买买买！你喜欢的</title>
  <link rel="stylesheet" href="/HSLshop/Public/home/css/style.css">
</head>
<body>
  <div class="header">
    <div class="wrap clearfix">
      <ul class="nav-user">

        <?php if(isset($_SESSION['username'])): ?><li>欢迎，<a href="/HSLshop/index.php/Home/Users/index"><?php echo (session('username')); ?></a></li>
          <li><a href="/HSLshop/index.php/Home/Users/exitUser">退出</a></li>

        <?php else: ?>
          <li><a href="/HSLshop/index.php/Home/Users/login">你好，请登录</a></li>
          <li><a href="/HSLshop/index.php/Home/Users/register" class="text-orange">免费注册</a></li><?php endif; ?>

        


      </ul>
      <ul class="navbar">
        <li><a href="/HSLshop/index.php">首页</a></li>
        <li><a href="/HSLshop/index.php/Home/Cart/index">我的购物车</a></li>
        <li><a href="/HSLshop/index.php/Home/Order/myOrder">我的订单</a></li>
        <li><a href="/HSLshop/index.php/Home/Board">留言板</a></li>
      </ul>
    </div>
  </div>
      
  
  
<div class="container">
    <div class="container-wrap clearfix">
      <div class="banner">
        <img src="/HSLshop/Public/home/img/logo.jpg" alt="">
        <div class="search-box">
          <form action="">
              <input type="text" name="keywords" placeholder="输入你想买的东西"><button>搜索</button>
          </form>
          <div class="search-hot">
              <a href="">帽子</a>
              <a href="">炉石卡包</a>
              <a href="">阿尔法狗</a>
              <a href="">iphone7s</a>
              <a href="">单反</a>
          </div>
        </div>
      </div>

      <ul class="tag-nav">
          <li><a href="">全部商品分类</a></li>
          <?php if(is_array($GoodsTypeList)): $i = 0; $__LIST__ = $GoodsTypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/HSLshop/index.php/Home/GoodsType/index/catId/<?php echo ($vo["cat_id"]); ?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

      <div class="content">


        <div class="board-box">
          <div class="board-header">
             <h2>留言板</h2>
          </div>
         

          <?php if(is_array($MessageBoardList)): $i = 0; $__LIST__ = $MessageBoardList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="board-info">
              <dl>
                <dt>留言人：</dt><dd><?php echo ($vo["user_name"]); ?></dd>
              </dl>
              <dl>
                <dt>留言内容：</dt><dd><?php echo ($vo["message_desc"]); ?></dd>
              </dl>

              <?php if($vo["reply"] != ''): ?><dl class="light">
                  <dt>回复内容：</dt><dd><?php echo ($vo["reply"]); ?></dd>
                </dl><?php endif; ?>
    
              <dl class="msg-time">
                <dt>留言时间：</dt><dd><?php echo (date("Y-m-d H:i",$vo["add_time"])); ?></dd>
              </dl>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>



          <div class="add-message">
            <h3>我要留言：</h3>
            <form action="/HSLshop/index.php/Home/Board/addMessage" method="post">
              <div class="input-box">
                <label for="">留言人：</label><input type="text" name="username" >
              </div>
              <div class="input-box">
                <label for="">留言内容：</label><textarea name="content" id="" cols="30" rows="10"></textarea>
              </div>
              
              <input type="submit" value="提交留言">
            </form>
            
            
          </div>
        </div>
        

      </div>  
  </div>


  <div class="footer">
    <p>javion25.github.io 版权所有 &copy;</p>
  </div>
</body>
</html>