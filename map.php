<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>Shining City Foundation</title>
     <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />
     <style type="text/css">
	      @import url('stylesheet.css');
     </style>

<!--
     <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAj0beFpmKGLxsJoqYBxIKqxQStJ0CHg77DYEmZl46COXjBQ4W8BTTZHMcGoqszX2wBfxaIFqIZZOU-w"
      type="text/javascript"></script>
     <script type="text/javascript">

     //<![CDATA[

     function load() {
       if (GBrowserIsCompatible()) {
         var map = new GMap2(document.getElementById("map"));
         map.setCenter(new GLatLng( 35.960223,105.46875), 4);

         /*lhasa 29.61167,91.186523*/
         var point = new GLatLng(29.61167,91.186523);
         var lhasa = new GMarker(point);
         map.addOverlay(lhasa);
         lhasa.bindInfoWindowHtml('<p style="color: Black;">Lhasa</p>');

         /*kunming ll=25.115445,102.700195*/
         var point = new GLatLng(25.115445,102.700195);
         var kunming = new GMarker(point);
         map.addOverlay(kunming);
         kunming.bindInfoWindowHtml('<p style="color: Black;">Kunming</p>');

         /*lijiang  28.61611 113.89250 */
         var point = new GLatLng(28.61611,113.89250);
         var lijiang = new GMarker(point);
         map.addOverlay(lijiang);
         lijiang.bindInfoWindowHtml('<p style="color: Black;">Lijiang</p>');

         /* Chengdu 30.670100 104.071000 */
         var point = new GLatLng(30.670100,104.071000);
         var chengdu = new GMarker(point);
         map.addOverlay(chengdu);
         lijiang.bindInfoWindowHtml('<p style="color: Black;">Chengdu</p>');

       }
     }

     //]]>
     </script>
-->

</head>
<body >
<div id="center"> <!-- centers the page -->
	<div id="home"> <!-- the box in the upper-left corner -->

		<p><img src="head-kid.jpg" alt="kid" /></p>

	</div>
  <!--   <img src="logo.png" /> -->
	<div id="content">

  <h2>&nbsp;</h2>
  <img src='map-big.gif' />
  <h2>&nbsp;</h2>

	</div>
	<div id="archives"> <!-- the list previous post -->

<?php include "nav.inc.php"; ?>

	</div>

	<!-- The top graphic is made of 3 images because then the quality and
	size of the JPEG files are optimized. I've used the i-element just
	because ... well, it's short. -->
	<a href='/' id="top"></a>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-660926-4");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
