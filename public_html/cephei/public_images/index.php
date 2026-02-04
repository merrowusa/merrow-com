
 <link rel="stylesheet" href="http://css.imerrow.com/css_major/thickbox.css" type="text/css" media="screen" />
<?php 
     
require 'php5upload.class.php';
require 'config.php';
$im = new imageupload();
if ($_POST['__upload'])
{
	header('location: '.'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']));
}
?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
<title><?=$title?></title>
	<style type="text/css">
		body {
			margin:0;
			font-family:Verdana, arial, sans-serif;
			font-size:12px;
		}
		div.wrapper {
			margin:0 auto;
			padding:5px;
			width:620px;
			border:1px solid #35528F;
		}
		h1 {
			padding:8px;
			margin:0px;
		}
		div.errors {
			color:#FF0000;
		}
		ul {
			list-style:none;
			padding:5px;
		}
		ul li {
			display:inline;
			padding-right:12px;
		}
		p.footer {
			clear:both;
			text-align:center;
			font-size:10px;
		}
		div.block {
			float:left;
			width:300px;
		}
		div.errors {
			color:red;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="product_name"> <h1>Global Stores Image Uploading </h1></div>
		<ul>
		
		</ul>
		 <?
				
				if ($im->_im_status == false)
				{ ?>
			
				
				<div class="product_description"><p>Browse file to upload</p></div>
		<form method="post" enctype="multipart/form-data" action="<?=$im->path?>">
			<input type="file" name="__upload" size="72" />
			<input type="submit" value="Upload" />
		</form>
		<p><?=$im->allowTypes();?></p>
		<div class="block">
        
        <? }
				
				elseif ($im->_im_status == true)
				{
					echo  '<div class="product_name"><h2>Upload Successful!</h2></div>
					 
							<div class="embeded"><p class="codes"><br />
					<label for="codehtml">Embed this image on Facebook or MySpace: </label><br />
					<input type="text" size="40" value=\'&lt;a href="'.$im->imgurl.'"&gt;&lt;img src="'.$im->imgurl.'" alt="Image hosting by '.$title.'" /&gt;&lt/a&gt;\' onclick="javascript:this.focus();this.select();" readonly="true" /><br />
					<label for="codedirect">Direct link:</label><br />
					<input type="text" size="40" value="'.$im->imgurl.'" onclick="javascript:this.focus();this.select();" readonly="true" /></p></div>';
					
					
				}
				elseif (!empty($im->errorStr))
				{
					echo '<div class="errors">'.$im->errorStr.'</div>';
				}
				else
				{
					
				}
			?>
		</div>
		
		
	</div>
</body>
</html>