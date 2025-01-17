<?php

require_once __DIR__.'/init.php';

?>

<html>

<head>
<link href="style.css" type="text/css" rel="stylesheet">
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/heliopanel/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<title>HelioPanel</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
		<script type="text/javascript">
		$(document).ready(function() {
			$(".modal").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'type'				: 'iframe'
			});
		});
	</script>

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=200,left = 0,top = 0');");
}
// End -->
</script>

</head>

<body bgcolor="#E9C55C" style="margin-top:0px; margin-left:0px; margin-right:0px;">


<div align="center">

<table width="100%" cellspacing=0 cellpadding=5 style="border-radius:10px;" bgcolor="#FFFFFF">
<tr>

<td background="images/headerbg.png"></td>
<td background="images/header-shadow-l.png" width=5></td>

<td onclick="window.location='./'" width=714 height=102 style="background-image:url('images/toplogo.png'); background-repeat:no-repeat; cursor:pointer;">
	<p align="right"><font face="Verdana" color="#FFFFFF" size="5"><b>HelioPanel</b><br>
	</font></td>

<td background="images/header-shadow-r.png" width=5></td>
<td background="images/headerbg.png"></td>

</tr>
<tr>
<td height=5 bgcolor="#DAAE36"></td>
<td height=5 bgcolor="#DAAE36"></td>
<td width=714 height=28 bgcolor="#DAAE36">
<ul class="dropdown dropdown-horizontal">
<li><a href="http://www.heliohost.org/home/" title="HH">HelioHost</a>
	        <ul>
	            <li><a href="http://www.heliohost.org/home/">Home</a></li>
	            <li><a href="http://www.heliohost.org/home/features">Features</a>
	                <ul>
	                    <li><a href="javascript:;">Scripting Languages</a>
			            <ul>
			              <li><a href="http://www.heliohost.org/home/features/languages/php">PHP</a></li>
			              <li><a href="http://www.heliohost.org/home/features/languages/aspnet" title="Johnny Only">ASP.NET</a></li>
			              <li><a href="http://www.heliohost.org/home/features/languages/ruby" title="Johnny Only">Ruby/Ruby on Rails</a></li>
			              <li><a href="http://www.heliohost.org/home/features/languages/python">Python &amp; Django</a></li>
			              <li><a href="http://www.heliohost.org/home/features/languages/jsp" title="Johnny Only">Java/JSP</a>
			                <ul>
			                  <li><a href="http://www.helionet.org/index/index.php?showforum=74">Request Java/JSP</a></li>
			                </ul>
			              </li>
			              <li><a href="http://www.heliohost.org/home/features/languages/perl">Perl</a></li>
			              <li><a href="http://www.heliohost.org/home/features/languages/ssi">SSI</a></li>
			            </ul>
	                    </li>
	                    <li><a href="javascript:;">Database Engines</a>
			            <ul>
			              <li><a href="http://www.heliohost.org/home/features/databases/mysql">MySQL</a></li>
			              <li><a href="http://www.heliohost.org/home/features/databases/postgresql">PostgreSQL</a></li>
			              <li><a href="http://www.heliohost.org/home/features/databases/sqlite">SQLite</a></li>
			            </ul>
	                    </li>
	                    <li><a href="http://www.heliohost.org/home/features/webspace">Space and Bandwidth</a></li>
	                    <li><a href="http://www.heliohost.org/home/features/domains">URL &amp; Domains</a></li>
	                    <li><a href="http://www.heliohost.org/home/features/email">E-mail</a></li>
	                    <li><a href="http://www.heliohost.org/home/features/system">System &amp; Software</a></li>
	                </ul>
	            </li>
	            <li><a href="javascript:;">Signup</a>
	                <ul>
	                    <li><a href="http://www.heliohost.org/home/signup/stevie">Stevie</a></li>
	                    <li><a href="http://www.heliohost.org/home/signup/johnny">Johnny</a></li>
	                    <li><a href="http://www.heliohost.org/home/signup">Server Selection</a></li>
	                    <li><a href="http://heliohost.uni.cc/sign-up.php">When To Sign Up</a></li>
	                </ul>
	            </li>
	            <li><a href="javascript:;">Support</a>
		        <ul>
		          <li><a href="http://www.helionet.org/index/index.php?showforum=48">Questions</a></li>
		          <li><a href="http://www.helionet.org/index/index.php?showforum=45">Customer Service</a></li>
		        </ul>
	            </li>
	            <li><a href="http://www.heliohost.org/home/about">About</a></li>
	            <li><a href="javascript:;">Social</a>
	                <ul>
	                    <li><a href="https://www.facebook.com/pages/HelioHost/133105633434140">Facebook</a></li>
	                    <li><a href="http://twitter.com/HelioHost">Twitter</a></li>
	                </ul>
	            </li>
	            <li><a href="http://cl58services.co.cc/heliohost/data/donate.php" class="modal" title="Donate">Donate</a></li>
	            <li><a href="http://www.heliohost.org/h-terms.html" class="modal">Terms of Service</a></li>
	        </ul>
	    </li>
	    <li><a href="http://www.helionet.org/index/">HelioNet</a>
	        <ul>
	            <li><a href="javascript:;">General Discussion</a>
	        <ul>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=13">Website Management and Coding</a></li>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=8">Technology and the Internet</a></li>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=71">Philosophy, Politics, and Science</a></li>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=29">Art and Entertainment</a></li>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=5">Other Discusstion</a></li>
	        </ul>
	            </li>
	            <li><a href="javascript:;">HelioHost</a>
		        <ul>
		          <li><a href="http://www.helionet.org/index/index.php?showforum=48">Questions</a></li>
		          <li><a href="http://www.helionet.org/index/index.php?showforum=45">Customer Service</a>
		            <ul>
		              <li><a href="http://www.helionet.org/index/index.php?showforum=81">Suspended &amp; Queued Accounts</a></li>
		              <li><a href="http://www.helionet.org/index/index.php?showforum=75">Escalated Requests</a></li>
		              <li><a href="http://www.helionet.org/index/index.php?showforum=74">Java Requests</a></li>
		              <li><a href="http://www.helionet.org/index/index.php?showforum=73"> Free Domain Requests</a></li>
		              <li><a href="http://www.helionet.org/index/index.php?showforum=79">Wiki Access Requests</a></li>
		            </ul>
		          </li>
		          <li><a href="http://www.helionet.org/index/index.php?showforum=46">Customer Feedback</a></li>
		        </ul>
	            </li>
	            <li><a href="javascript:;">HelioNet</a>
	        <ul>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=1">News</a></li>
	          <li><a href="http://www.helionet.org/index/index.php?showforum=4">Contact HelioNet</a></li>
	        </ul>
	            </li>
	        </ul>
	    </li>
	    <li><a href="/" class="active">HelioPanel</a>
        <ul>
          <li><a href="http://heliopanel.heliohost.org">The HelioPanel Project</a></li>
          <li><a href="http://heliopanel.heliohost.org/features.php">Features</a></li>
          <li><a href="http://heliopanel.heliohost.org/support.php">Support</a>
            <ul>
              <li><a href="http://www.helionet.org/">Public Forums</a></li>
              <li><a href="https://github.com/HelioNetworks/HelioPanel/wiki/_pages">Knowledge Base</a></li>
              <li><a href="https://github.com/HelioNetworks/HelioPanel/issues">Bugs &amp; Feature Requests</a></li>
            </ul>
          </li>
          <li><a href="https://github.com/HelioNetworks/HelioPanel">Fork on Github</a></li>
         </ul>
       </li>
	        <li><a href="javascript:;">Account</a>
	        <ul>
	            <li><a href="http://cl58services.co.cc/heliohost/data/cpanellogins.php" title="cPanel Login" class="modal">cPanel Login</a>
	      </li>
	            <li><a href="http://www.heliohost.org/scripts/renew.php" title="If your account has been suspended due to inactivity, then it may be possible to reactivate your account. Go here to renew your account." class="modal">Renew Account</a>

	            </li>
	            <li><a href="http://www.heliohost.org/scripts/status.php" title="If you have recently created a new account on HelioHost, then you can view the current status of your brand new account and look at an estimated time as for when your account will be activated." class="modal">Registration Queue Status</a>

	            </li>
	            <li><a href="http://www.heliohost.org/scripts/domain.php" title="If you require your main domain to be changed, then you can do so by going here. Please also be aware that you can add Parked and Addon Domains as a useful alternative." class="modal">Domain Change</a>

	            </li>
	            <li><a href="http://www.heliohost.org/home/support/scripts/delete" title="Permanently delete your HelioHost account.">Delete Account</a>
	            </li>
	        </ul>
	    </li>
	    <li><a href="http://www.helionet.org/index/index.php?showtopic=5055">Support FAQ</a></li>
	    <li><a href="http://wiki.heliohost.org/wiki/Main_Page">Wiki</a>
	        <ul>
	            <li><a href="http://wiki.heliohost.org/wiki/Main_Page">Wiki Main</a></li>
	            <li><a href="javascript:;">Hosting</a>
	                <ul>
	                    <li><a href="http://wiki.heliohost.org/wiki/What_is_HelioHost%3F">What is HelioHost?</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/What_Heliohost_Is_Not">What HelioHost Is Not</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/HelioNet">What is HelioNet?</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/What_Does_HelioHost_Offer">What Does HelioHost Offer?</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Signing_Up">Signing Up</a></li>
	                </ul>
	            </li>
	            <li><a href="javascript:;">Accounts</a>
	                <ul>
	                    <li><a href="http://wiki.heliohost.org/wiki/SSL">SSL</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Suspension_policy">Suspension Policy</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Moving_your_account">Moving Your Account</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/International_Countries">International Countries</a></li>
	                </ul>
	            </li>
	            <li><a href="javascript:;">cPanel &amp; Management</a>
	                <ul>
	                    <li><a href="http://wiki.heliohost.org/wiki/CPanel">cPanel</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/How_to_access_cPanel">How to access cPanel</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Parked,_Addon_and_Sub_Domains">Parked, Addon and Sub Domains</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Softaculous">Softaculous</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/MySQL_Databases">MySQL Databases</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Uploading_files_to_your_site">Uploading files to your site</a></li>
	                </ul>
	            </li>
	            <li><a href="javascript:;">Programming</a>
	                <ul>
	                    <li><a href="http://wiki.heliohost.org/wiki/ASP.NET">ASP.NET</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Site_statistics">Site Statistics</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Creating_Special_Folders_in_Roundcube">Creating Special Folders in Roundcube</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/Page_caching">Page caching</a></li>
	                    <li><a href="http://wiki.heliohost.org/wiki/MySQL">MySQL</a></li>
	                </ul>
	            </li>
	            <li><a href="http://wiki.heliohost.org/wiki/">All Pages</a></li>
	            <li><a href="http://www.helionet.org/index/index.php?showforum=79">Contribute</a></li>
	        </ul>
	    </li>
                    <li><a href="http://www.cl58services.co.cc/heliohost/">HelioHost Guide</a></li>
	    <li><a href="javascript:;">Tools</a>
	        <ul>
                    <li><a href="http://www.cl58services.co.cc/heliohost/">HelioHost Guide</a></li>
	            <li><a href="http://cl58services.co.cc/heliohost/data/status.php" class="modal" title="Server Status">Server Status</a></li>
	            <li><a href="http://cl58services.co.cc/heliohost/data/load.php" class="modal" title="Server Load">Server Load</a></li>
	            <li><a href="http://heliohost.grd.net.pl/monitor/" class="modal">Server Monitor</a></li>
	            <li><a href="http://heliohost.uni.cc/sign-up.php">Sign Up Status</a></li>
	            <li><a href="http://twitter.com/heliohost">Twitter</a></li>
	            <li><a href="http://byrondallas.heliohost.org/php/tools/dns_records.php" class="modal">DNS Lookup</a></li>
	        </ul>
           </li> </ul>
</td>
<td height=5 bgcolor="#DAAE36"></td>
<td height=5 bgcolor="#DAAE36"></td>
</tr>

<tr>
<td bgcolor="#F5F1E5"></td>
<td bgcolor="#DAAE36" background="images/body-shadow-l.png"></td>
<td bgcolor="#F5F1E5" width=714>