<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-10 01:23:55
         compiled from "application\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235795459ec0ea159f0-16064453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a303767cdfc8b79512fd25fed81b8692c84ce6a5' => 
    array (
      0 => 'application\\views\\templates\\index.tpl',
      1 => 1415582512,
      2 => 'file',
    ),
    '87d048af3dd9f2cc42bb285ad937b55456b22d40' => 
    array (
      0 => 'application\\views\\templates\\base.tpl',
      1 => 1415237694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235795459ec0ea159f0-16064453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5459ec0eb8ec79_62373600',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459ec0eb8ec79_62373600')) {function content_5459ec0eb8ec79_62373600($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ibishe1.0</title>
    <link href="/CCC/asset/bootstrap/css/lib/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/CCC/asset/css/main.css" rel="stylesheet">  
      
  </head>
  <body>
    
<!-- ******************** navbar ************* -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">爱毕设</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav nav-tabs">
            <li class="active"><a href="#">首页</a></li>
            <li><a href="#">灵感</a></li>
            <li><a href="#">展览</a></li>
            <li><a href="#">素材</a></li>
            <li><a href="#">联系</a></li>
            <li><a href="#">更多</a></li>
          </ul>
          <ul class="nav navbar-nav nav-tabs navbar-right">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<!-- ******************** carousel ************* -->
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="http://placekitten.com/g/1200/320" alt="1">
            </div>
            <div class="item">
              <img src="http://placekitten.com/g/1200/320" alt="2">
            </div>
            <div class="item">
              <img src="http://placekitten.com/g/1200/320" alt="3">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
        <!-- <img src="/CCC/asset/img/UploadWork.jpg" alt="1" class="img-rounded pull-right"> -->
    <div class="exhibit-state container">
        <div class="container">
            <button class="btn btn-default btn-lg pull-right" type="submit">上传作品</button>
            <div class="pull-left"><h4>毕业展动态</h4></div>
        </div>
        <div class="container-fluid">
            <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">
            <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">
            <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">
            <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">
            <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">
            <!-- <img src="http://placekitten.com/g/200/140" alt="1" class="img-rounded pull-left">  -->
        </div>  
    </div>
    <div class="works-display container">
        <div class="container-fluid">
            <a href="#" class="pull-right" role="button">更多</a>
            <div class="pull-left"><h4>学生优秀作品</h4></div>
        </div>
        <div class="container-fluid">
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <img src="http://placekitten.com/g/320/200" alt="1" class="img-rounded">
                    <h5>VI画册</h5>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <!-- <h5 class="pull-left">小伟</h5>
                    <h6 class="pull-right">20小时前</h6> -->
                </div>
                <!-- <div class="works-box-bottom">
                    <h5>VI画册</h5><h5>VI画册</h5><h5>VI画册</h5>
                </div> -->
            </div>
        </div>  
    </div>
    <div class="container-fluid">
        <div class="copyright_content">
            <ul>
                <li>关于
                    <ul>
                        <li>品牌故事</li>
                        <li>联系我们</li>
                        <li>加入我们</li>
                        <li>版权声明</li>
                    </ul>
                </li>
                <li>课程
                    <ul>
                        <li>PHP开发</li>
                        <li>前端开发</li>
                        <li>JAVA开发</li>
                        <li>Android开发</li>
                    </ul>
                </li>
                <li>关注
                    <ul>
                        <li>新浪微博</li>
                        <li>腾讯微博</li>
                        <li>企业微信</li>
                        <li>QQ空间</li>
                     </ul>
                </li>
                <li>留言
                     <ul>
                        <li>意见反馈</li>
                        <li>问题留言</li>
                        <li>媒体联络</li>
                        <li>在线客服</li>
                    </ul>
                </li>
            </ul>
          </div><!--copyright_content over-->
    </div><!--copyright over-->

    

    <?php echo '<script'; ?>
 src="/CCC/asset/bootstrap/css/lib/js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/CCC/asset/bootstrap/css/lib/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
