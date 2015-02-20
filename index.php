<!--
          ^
         / \
        /   \
       /     \
      /\     /\
     /  \   /  \
    /     v     \
    \    / \    /
     \  /   \  /
      \/     \/
       \     /
        \   /
         \ /
          v

    ============  ====    ====  -------------  ----
    ============  ====    ====  -----   -----  ----
        ====      ============  ----     ----  ----
        ====      ============  ----     ----  ----
        ====      ====    ====  -----   -----  ----
        ====      ====    ====  -------------  ----
-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Is THON Tomorrow?</title>
	<meta name="description" content="Contains the answer to the popular question -- Is THON really tomorrow?">
	<meta name="keywords" content="Penn State Dance Marathon, Penn State, PSU, THON, pediatric cancer, Penn State Hershey, Four Diamonds Fund, Four Diamonds">
	<meta charset="UTF-8">
	<meta property="og:title" content="Is THON Tomorrow?">
	<meta property="og:description" content="Is THON Really Tomorrow?">
	<meta property="og:site_name" content="Is THON Tomorrow?">
	<meta property="og:url" content="http://www.isthontomorrow.com/">
	<meta property="og:type" content="article">
	<script async="" src="http://www.google-analytics.com/analytics.js"></script><script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-48249756-1', 'isthontomorrow.com');
  		ga('send', 'pageview');
	</script>
	<style>
		body {
    			font-family: GillSansRegular,"Gill Sans MT","Gill Sans",sans-serif;
		}
	</style>
</head>
<body>
	<h2>Is THON Tomorrow?</h2>
<?php
	// Set timezone for Azure Server
	date_default_timezone_set('America/New_York');

	$thonDates = array('2015-02-20', '2015-02-21', '2015-02-22');

	if(date('Y-m-d') == '2015-02-19')
	{
		echo "<h1>YES! Seriously!</h1>";
	}
	elseif(in_array(date('Y-m-d'), $thonDates))
	{
		echo "<h1>No... THON is happening RIGHT NOW!</h1><p><a href='http://webcast.thon.org/'>Click here to view the Live Stream</a></p>";
	}
	else
	{
		echo "<h1>YES! ...just kidding.</h1>";
	}
?>
	<p>
		Regardless, it's never too late to donate. Visit the 
		Donate Now page <a href="http://donate.thon.org" target="_blank">here</a> to help Penn State students find a cure for pediatric cancer.
	</p>
	<p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/rCL-sCf0LI0" frameborder="0" allowfullscreen></iframe>
	</p>
	<p>
		<a href="http://www.thon.org/" target="_blank">THON.org Homepage</a>
	</p>
	<!-- http://www.corygehr.com -->
</body>
</html>
