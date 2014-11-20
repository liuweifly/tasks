{extends file="base.tpl"} 


{block name="head"}
    <link href="/CCC/asset/css/main.css" rel="stylesheet">  
{/block}
{block name="container"}

{include file="navbar.tpl"} 
{include file="carousel.tpl"}


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
{include file="works-display.tpl"}
{include file="footer.tpl"}

    

{/block}

{block name="javascript"}
{/block}
