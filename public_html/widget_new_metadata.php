<? $h_array = mysql_query("SELECT * FROM seo_site_headers WHERE `page_key` ='$page_id'")or die(mysql_error());$headers = mysql_fetch_array($h_array); ?>

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $headers['title']; ?></title>
<meta name="y_key" content="b0241928e572e190">
<meta name="description" content="<? echo $headers['description']; ?>" />
<meta name="keywords" content="<? echo $headers['keywords']; ?>" />
<meta name="Author" content="Merrow">
<meta name="Category" content="products,sewing machines">
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<meta property="og:title" content="<? echo $headers['title']; ?>" />
<meta property="og:type" content="company" />
<meta property="og:url" content="https://merrow.com" />
<meta property="og:image" content="https://merrow-media.s3.amazonaws.com/product-pages/mg3u_main.jpg" />
<meta property="og:site_name" content="Merrow" />
<meta property="fb:admins" content="585865900" />