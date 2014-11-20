<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 02:40:26
         compiled from "application/views/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2146454338546ab26abb32e4-78243816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a0d65170e93da51de00e1e40bc0cff8ce5ad9f' => 
    array (
      0 => 'application/views/templates/index.tpl',
      1 => 1416446970,
      2 => 'file',
    ),
    'dbe1df69cfa220a930193f0f98a6b50efd3f30e2' => 
    array (
      0 => 'application/views/templates/base.tpl',
      1 => 1416398205,
      2 => 'file',
    ),
    '134ab2eb098ebb72f5aba83e0bb40f3422f705aa' => 
    array (
      0 => 'application/views/templates/navbar.tpl',
      1 => 1416402748,
      2 => 'file',
    ),
    'b73965a9aee94160dbf9043c347ed738f63b5791' => 
    array (
      0 => 'application/views/templates/carousel.tpl',
      1 => 1416447044,
      2 => 'file',
    ),
    '3264543475c6325f55a2f6d554adc5fecc3ed204' => 
    array (
      0 => 'application/views/templates/works-display.tpl',
      1 => 1416402599,
      2 => 'file',
    ),
    '0afabded05a2538a72f5c83db0452334c7dd46f9' => 
    array (
      0 => 'application/views/templates/footer.tpl',
      1 => 1416447566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2146454338546ab26abb32e4-78243816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546ab26ac49cc4_15707105',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ab26ac49cc4_15707105')) {function content_546ab26ac49cc4_15707105($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ibishe1.0</title>
    <link href="/CCC/asset/bootstrap-3.2.0/dist/css/bootstrap.css" rel="stylesheet">
    
    <link href="/CCC/asset/css/main.css" rel="stylesheet">  
      
  </head>
  <body>
    
    
    

<?php /*  Call merged included template "navbar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2146454338546ab26abb32e4-78243816');
content_546d468ad9d6f5_71157639($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "navbar.tpl" */?> 
<?php /*  Call merged included template "carousel.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2146454338546ab26abb32e4-78243816');
content_546d468adaae41_18169824($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "carousel.tpl" */?>


<!-- ********************exhibit-state ************* -->
<div class="exhibit-state container">
    <div class="container-header">
        <div class="pull-left"><h4>毕业展动态</h4></div>
    </div>
    <div class="container-content">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
        <img src="http://placekitten.com/g/185/140" class="img-responsive pull-left" alt="Responsive image">
    </div>  
</div>
<?php /*  Call merged included template "works-display.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("works-display.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2146454338546ab26abb32e4-78243816');
content_546d468adb39b8_96201462($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "works-display.tpl" */?>
<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2146454338546ab26abb32e4-78243816');
content_546d468adc2176_93489956($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>

    


    
    

    <?php echo '<script'; ?>
 src="/CCC/asset/js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/CCC/asset/bootstrap-3.2.0/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 02:40:26
         compiled from "application/views/templates/navbar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546d468ad9d6f5_71157639')) {function content_546d468ad9d6f5_71157639($_smarty_tpl) {?>





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
          <!--  -->
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            <a href="#"><img src="http://placekitten.com/g/30/30" class="img-responsive" alt="message"></a>
            <a href="#"><img src="http://placekitten.com/g/30/30" class="img-responsive" alt="message"></a>
          </form>         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 02:40:26
         compiled from "application/views/templates/carousel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546d468adaae41_18169824')) {function content_546d468adaae41_18169824($_smarty_tpl) {?>

<!-- ******************** carousel ************* -->
    <div class="container">
        <div class="carousel-box">
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
        <a href="#"><img src="/CCC/asset/img/UploadWork.jpg" class="img-responsive pull-right" alt="message"></a>
    </div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 02:40:26
         compiled from "application/views/templates/works-display.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546d468adb39b8_96201462')) {function content_546d468adb39b8_96201462($_smarty_tpl) {?>
<!-- ******************** works-display ************* -->
<div class="works-display container">
        <div class="container-header">
            <a href="#" class="pull-right" role="button">更多</a>
            <div class="pull-left"><h4>学生优秀作品</h4></div>
        </div>
        <div class="container-content">
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
            <div class="works-box pull-left">
                <div class="works-box-top">
                    <button class="btn btn-primary" type="button">
                      Messages 
                    </button>
                    <img src="http://placekitten.com/g/370/200" class="img-responsive pull-left" alt="Responsive image">
                </div>
                <div class="works-box-center">
                    <p>VI画册</p>
                    <img src="http://placekitten.com/g/35/35" alt="1" class="img-rounded pull-left">
                    <span class="pull-left"><h5>小伟</h5></span>
                    <span class="pull-right"><h6>20小时前</h6></span>
                </div>
                <div class="works-box-bottom">
                    <a class="" href="#"><span class="pull-right"><h5>观看</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>收藏</h5></span></a>
                    <a class="" href="#"><span class="pull-right"><h5>评论</h5></span></a>
                </div>
            </div>
        </div>  
    </div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-20 02:40:26
         compiled from "application/views/templates/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_546d468adc2176_93489956')) {function content_546d468adc2176_93489956($_smarty_tpl) {?><div class="footer">
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
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav nav-tabs">
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li>  
            <li class="vertical-line"></li>
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li> 
            <li class="vertical-line"></li>
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li>
            <li class="vertical-line"></li> 
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li> 
            <li class="vertical-line"></li>
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li> 
            <li class="vertical-line"></li>
            <li class="footer-box"><a href="#">首页</a>
                <ul class="list-unstyled">
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                    <a href="#"><li>品牌故事</li></a>
                </ul>
            </li>  
          </ul>
          <!--  -->       
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="footer-copyright">
      <div class="container-fluid">
        <h5>Copyright © 2014 Wuhan,China.All Rights Reserved.</h5>
        <h5>华中科技大学 电子信息与通信学院 电话: 027-87543235</h5>
        <h5>建议使用IE 10.0以上或Chrome浏览器</h5>
      </div>
    </div>
</div><?php }} ?>
