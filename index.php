<?php include 'header.php';?>
<style>
	body#login::before {
    content: "";
    background: #00000036;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    /*left: 0;
    width: 100%;
    height: 100%;*/
}

</style>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, intial-scale=1">
<body id="login">
    <div class="container" style="position: relative">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include 'title_index.php';?></div></div>
			<div class="span6"><div class="pull-right"><?php include 'login_form.php';?></div></div>
		</div>
		<div class="row-fluid">
			<div class="span12"><div class="index-footer"><?php include 'link.php';?></div></div>
		</div>
			<?php include 'footer.php';?>
    </div>
<?php include 'script.php';?>
</body>
</html>