<html>
<head>
    <title>shop</title>
    <link rel="icon" type="image/ico" href="../image/icons8-admin-settings-male-50.png" />
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://csdl-2020.000webhostapp.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="shop didong.vn" />
    <meta property="og:description"   content="Trang web trình bày sản phẩm điện thoại di động thao tác với csdl mysql và các truy vấn cơ bản" /> 
    <meta property="og:image"         content="https://csdl-2020.000webhostapp.com/image/Slide09.png" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
   <?php
        $title=urlencode('Dressfinity');
        $url=urlencode('https://csdl-2020.000webhostapp.com');
        $image=urlencode('https://csdl-2020.000webhostapp.com/image/Slide09.png');
    ?>
    <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)">
        Share our Facebook page!
    </a>

</body>
</html>
