<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-19 02:44:10
         compiled from "application/views/templates/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1445625791546bf4e17ca7a0-73099832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134ab2eb098ebb72f5aba83e0bb40f3422f705aa' => 
    array (
      0 => 'application/views/templates/navbar.tpl',
      1 => 1416361336,
      2 => 'file',
    ),
    'dbe1df69cfa220a930193f0f98a6b50efd3f30e2' => 
    array (
      0 => 'application/views/templates/base.tpl',
      1 => 1416361097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1445625791546bf4e17ca7a0-73099832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546bf4e183bec8_33064216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546bf4e183bec8_33064216')) {function content_546bf4e183bec8_33064216($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ibishe1.0</title>
    <link href="/CCC/asset/bootstrap-3.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
          
          
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

  
          
    
    <?php echo '<script'; ?>
 src="/CCC/asset/js/jquery-1.11.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/CCC/asset/bootstrap-3.2.0/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }} ?>
