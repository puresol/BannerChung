<?php
	$pass = $_REQUEST['pass'];
	if(!isset($pass) || $pass != "htm") {
		die("Unknown request...");
	}
	$adType = $_REQUEST['adPos'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ad Demo :: BannerChung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">HTM Ad Demo</h1>
                <nav>
                    <ul>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <?php if($adType == "1" || $adType == "0"): ?>
                <div style="float:left; width:300px; height:250px; border: #CCCCCC 1px dotted; margin-left: 5%; margin-bottom:5%; ">
                	<!--/* OpenX Javascript Tag v2.8.10 */-->

					<script type='text/javascript'><!--//<![CDATA[
					   var m3_u = (location.protocol=='https:'?'https://go/zone/www/delivery/ajs.php':'http://zone.go.vn/smo/www/delivery/ajs.php');
					   var m3_r = Math.floor(Math.random()*99999999999);
					   if (!document.MAX_used) document.MAX_used = ',';
					   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
					   document.write ("?zoneid=965");
					   document.write ('&amp;cb=' + m3_r);
					   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
					   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
					   document.write ("&amp;loc=" + escape(window.location));
					   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
					   if (document.context) document.write ("&context=" + escape(document.context));
					   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
					   document.write ("'><\/scr"+"ipt>");
					//]]>--></script><noscript><a href='http://zone.go.vn/smo/www/delivery/ck.php?n=ac2b01b9&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://zone.go.vn/smo/www/delivery/avw.php?zoneid=965&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ac2b01b9' border='0' alt='' /></a></noscript>
                </div>
            	<?php endif; ?>

                <aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>
				
				<?php if($adType == "2" || $adType == "0"): ?>
				<div id="bannerParent" style="width:300px; height:250px; position:absolute; top:-9999px; left:0px;">
				<div id="bannerHolder" style="width:100%; height:100%; position:relative;">
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="htmBanner" name="htmBanner">
						<param name="movie" value="./media/htm_800x500_300x250.swf" />
						<param name="salign" value="tl" />
						<param name="scale" value="noscale" />
						<param name="flashvars" value="clickTAG={clickurl}" />
						<!--[if !IE]>-->
						<object type="application/x-shockwave-flash" data="./media/htm_800x500_300x250.swf" width="100%" height="100%" id="htmBanner" name="htmBanner">
						<param name="salign" value="tl" />
						<param name="scale" value="noscale" />
						<param name="flashvars" value="clickTAG={clickurl}" />
						<!--<![endif]-->
						<p>Alternative content</p>
						<!--[if !IE]>-->
						</object>
						<!--<![endif]-->
					</object>
				</div>
				</div>
				<!-- the below should be appended to the zone invocation code if target website does not support -->
				<script type="text/javascript">
					var docDefDim = {};
					$(function() {
						adjustBanner(true);
						$(window).on('scroll', function() {adjustBanner(false);});
						$(window).on('resize', function() {adjustBanner(true);});
						
						$('#htmBanner').on('mouseover', function(event) {
							console.log('over');
							htmBannerOver($('#bannerHolder'));
						});
						$('#htmBanner').on('mouseout', function(event) {
							console.log('out');
							htmBannerOut($('#bannerHolder'));
						});
						$(window).on('blur', function(event) {
							console.log('blur');
							htmBannerOut($('#bannerHolder'));
						});
					});
					
					function htmBannerOver(target) {
						target.css('width', '800px');
						target.css('height', '500px');
						target.css('left', '-500px');
						target.css('top', '-250px');
					}
					
					function htmBannerOut(target) {
						target.css('width', '100%');
						target.css('height', '100%');
						target.css('left', 0);
						target.css('top', 0);
					}
					
					function adjustBanner(resetDefDim) {		
						if(resetDefDim) {
							docDefDim["width"] = $(document).width();
							docDefDim["height"] = $(document).height();
						}
						var target = $('#bannerParent');
						var posX = $(window).width() + $(document).scrollLeft() - target.width();
						var posY = $(window).height() + $(document).scrollTop() - target.height();
						if(posY > docDefDim["height"]-target.height() || posX > docDefDim["width"]-target.width())
							return;
						target.css('left', posX+'px');
						target.css('top', posY+'px');
					}
				</script>
				<?php endif; ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>&copy; <a style="color:#FFFFFF; text-decoration:none;" href="http://htmvn.com">HTM Media</a></h3>
            </footer>
        </div>

		<!-- we moved this to the head section and used MediaTemple repository rather than Google's -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->

        <script src="js/main.js"></script>
		
		<script type="text/javascript">
			$(function() {
				console.log('HTML append code');
			});
		</script>

        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-23348048-7', 'sephplayer.com');
		  ga('send', 'pageview');

		</script>
    </body>
</html>
