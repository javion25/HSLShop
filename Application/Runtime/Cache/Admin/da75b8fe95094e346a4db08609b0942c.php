<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>天猴商城后台管理中心</title>

    <!-- Bootstrap core CSS -->
    <link href="/HSLshop/Public/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/HSLshop/Public/admin/css/dashboard.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">天猴商城后台管理</a>
        </div>      
        
        

        <div id="navbar" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/HSLshop/index.php/Admin/System/index">修改密码</a></li>
            <li><a href="/HSLshop/index.php/Admin/System/exitUser">退出系统</a></li>
          </ul>
        </div>
        
        <div class="user-info pull-right">
          <span>当前登录人：</span><strong><?php echo (session('adminUser')); ?></strong>
        </div>

      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
          <ul class="nav nav-sidebar">

            <li>
              <span>用户管理</span>
              <ul class="nav">
                <li><a href="/HSLshop/index.php/Admin/Index/">注册用户管理</a></li>
              </ul>
            </li>


            <li>
              <span>商品管理</span>
              <ul class="nav">
                <li><a href="/HSLshop/index.php/Admin/Goods/addGoodsType">添加商品分类</a></li>
                <li><a href="/HSLshop/index.php/Admin/Goods/manageGoodsType">商品分类管理</a></li>
                <li><a href="/HSLshop/index.php/Admin/Goods/addGoods">添加商品</a></li>
                <li><a href="/HSLshop/index.php/Admin/Goods/manageGoods">商品管理</a></li>
              </ul>
            </li>
            
            
            <li>
              <span>订单管理</span>
              <ul class="nav">
                <li><a href="/HSLshop/index.php/Admin/Order/index">订单信息管理</a></li>
              </ul>
            </li>
            
            <li>
              <span>留言板管理</span>
              <ul class="nav">
                <li><a href="/HSLshop/index.php/Admin/Board/index">留言回复管理</a></li>
              </ul>
            </li>
            
            <li>
              <span>系统管理</span>
              <ul class="nav">
                <li><a href="/HSLshop/index.php/Admin/System/index">修改密码</a></li>
                <li><a href="/HSLshop/index.php/Admin/System/exitUser">退出系统</a></li>
              </ul>
            </li>

          </ul>
          

          
          
        </div>




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <ol class="breadcrumb">
            <li><a href="#">当前位置</a></li>
            <li><a href="#">商品管理</a></li>
          </ol>

          <form class="form-inline">
            <div class="form-group">
              <label for="keywords">关键字：</label>
              <input type="text" class="form-control" id="keywords" placeholder="输入要查找的内容">
            </div>

            <button type="submit" class="btn btn-default">查找</button>
            <button type="submit" class="btn btn-default">显示全部</button>
            <button type="submit" class="btn btn-default">添加</button>
          </form>
          
          <div class="table-info">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><input type="checkbox"></th>
                  <th>编号</th>
                  <th>商品名称</th>
                  <th>商品分类</th>
                  <th>型号</th>
                  <th>规格</th>
                  <th>价格</th>
                  <th>库存数量</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td><input type="checkbox"></td>
                  <td><?php echo ($vo["goods_id"]); ?></td>
                  <td><?php echo ($vo["goods_name"]); ?></td>
                  <td>
                    <?php switch($vo["cat_id"]): case "1": ?>个人化妆<?php break;?>
                      <?php case "6": ?>图书影像<?php break;?>
                      <?php case "7": ?>家用电器<?php break;?>
                      <?php case "8": ?>手机数码<?php break;?>
                      <?php case "9": ?>服装帽饰<?php break;?>
                      <?php case "10": ?>运动健康<?php break;?>
                      <?php case "11": ?>母婴玩具<?php break; endswitch;?>
                  </td>
                  <td><?php echo ($vo["goods_model"]); ?></td>
                  <td><?php echo ($vo["goods_spec"]); ?></td>
                  <td><?php echo ($vo["goods_price"]); ?></td>
                  <td><?php echo ($vo["goods_number"]); ?></td>
                  <td><a href="/HSLshop/index.php/Admin/Goods/editGoods/GoodsId/<?php echo ($vo["goods_id"]); ?>">修改</a><a href="/HSLshop/index.php/Admin/Goods/delGoods/GoodsId/<?php echo ($vo["goods_id"]); ?>">删除</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
            <button type="button" class="btn btn-danger">删除</button>
          </div>
          <!-- <nav class="paging-wrap">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav> -->
          
        </div>
      </div>
    </div>



  </body>
</html>