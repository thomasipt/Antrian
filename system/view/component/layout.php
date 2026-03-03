<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>simple and flat user interface kit Template :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		 <!----Calender -------->
		  <script src= "js/jquery.min.js"></script>
		  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
		  <script src="js/underscore-min.js"></script>
		  <script src= "js/moment-2.2.1.js"></script>
		  <script src="js/clndr.js"></script>
		  <script src="js/site.js"></script>
		  <!----End Calender -------->
		  <!-- bxSlider Javascript file -->
			<script src="js/jquery.bxslider.min.js"></script>
			<!-- bxSlider CSS file -->
			<link href="css/jquery.bxslider.css" rel="stylesheet" />
			<script>
				$(document).ready(function(){
					  $('.bxslider').bxSlider();
				});
			</script>
		  <!--//bxSlider Javascript file -->
		  <!----chat-settings-drop-down-menu---->
		  <script src="js/dropit.js"></script>
		  <script>
		  	$(document).ready(function() {
			    $('.menu').dropit({ action: 'hover' });
			});
		  </script>
		   <!----//chat-settings-drop-down-menu---->
			 <link href="css/perfect-scrollbar.css" rel="stylesheet">
		      <script src="js/jquery.mousewheel.js"></script>
		      <script src="js/perfect-scrollbar.js"></script>
		      <script>
			      jQuery(document).ready(function ($) {
			        "use strict";
			        $('#Default').perfectScrollbar();
			      });
			    </script>
			</script>
			<!----//chat-settings-drop-down-menu---->
			<!-- //the jScrollPane script -->
			<!-- video player -->
			 <link href="css/video-player.css" rel="stylesheet" type="text/css" />
			 <script type="text/javascript" src="js/popcorn.js"></script>
			<script type="text/javascript" src="js/popcorn.player.js"></script>
			<script type="text/javascript" src="js/popcorn.jplayer.js"></script>
			<script type="text/javascript" src="js/popcorn.subtitle.js"></script>
			  <script type="text/javascript">
			//<![CDATA[
			  $(document).ready(function(){
			
				var p = Popcorn.jplayer('#jquery_jplayer_1', {
					media: {
						m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
						ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
						webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
						poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
					},
					options: {
						swfPath: "js",
						supplied: "webmv, ogv, m4v",
						size: {
							width: "100%",
							height: "224px",
							cssClass: "jp-video-360p"
						},
						smoothPlayBar: true,
						keyEnabled: true
					}
				})
				.subtitle({
					start: 2,
					end: 6,
					text: "This text is the Popcorn Subtitle Plugin"
				})
				.subtitle({
					start: 6,
					end: 10,
					text: "Working with the Popcorn jPlayer Player Plugin"
				})
				.subtitle({
					start: 10,
					end: 15,
					text: "Enabling jPlayer to function with the features of Popcorn"
				})
				.subtitle({
					start: 16,
					end: 32,
					text: "Have fun playing with it!"
				});
			
			});
			//]]>
			</script>
			  <!--  End video player -->
	</head>
	<body>
		<!---start-wrap---->
		<div class="wrap">
			<!---start-content---->
			<div class="content">
				<!---start-left-content---->
				<div class="left-content">
					<!---start-left-content-colum1---->
					<div class="start-left-content-colum1">
						<!---start-status---->
						<div class="status-grid">
							<div class="status-grid-head">
								
							</div>
							<div class="status-people-pic">
								<img class="stat-people" src="images/status-people-pic.png" title="people-name" />
								<img class="people-avilabel" src="images/avila.png" title="avilabel" /> 
								<h2>ANNA</h2>
								<span>Super cool princess</span>
							</div>
							<div class="status-corrent">
								<ul>
									<li><a class="appont" href="#">Appointments</a></li>
									<li><a class="client" href="#">Clients list</a></li>
									<li><a class="report" href="#">Reports</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<!---//End-status---->
						<div class="clear"> </div>
						<!---start-chat-sectioin---->
						<div class="chat-section">
							<div class="chat-header">
								<div class="chat-header-left">
									<span> </span>
								</div>
								<div class="chat-header-right">
									<span class="menu"> 
										<li>
									        <a class="chat-setting" href="#"> </a>
									        <ul>
									            <li><a href="#"><label class="user-set"> </label>Profile</a></li>
									            <li><a href="#"><label class="user-pro"> </label>Favourites</a></li>
									            <li><a href="#"><label class="user-sett"> </label>Settings</a></li>
									            <li><a href="#"><label class="user-logout"> </label>Logout</a></li>
									        </ul>
									    </li>
									</span>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="chat-people-grids contentHolder" id="Default">
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic1.png" title="chat-people-name" />
										<span class="chat-people-cstatus"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Olaf</a></h3>
										<p>sure hun, see you later</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">Friday, 15</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic2.png" title="chat-people-name" />
										<span class="chat-people-cstatus yellow"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Sven</a></h3>
										<p>I sent you the report file</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">14: 22 am</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic4.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Hans</a></h3>
										<p>sYour client called me earlier...</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 min</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic3.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Elsa</a></h3>
										<p>I can't make it today, sorry</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 month</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic1.png" title="chat-people-name" />
										<span class="chat-people-cstatus"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Olaf</a></h3>
										<p>sure hun, see you later</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">Friday, 15</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic2.png" title="chat-people-name" />
										<span class="chat-people-cstatus yellow"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Sven</a></h3>
										<p>I sent you the report file</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">14: 22 am</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic4.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Hans</a></h3>
										<p>sYour client called me earlier...</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 min</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic3.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Elsa</a></h3>
										<p>I can't make it today, sorry</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 month</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic1.png" title="chat-people-name" />
										<span class="chat-people-cstatus"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Olaf</a></h3>
										<p>sure hun, see you later</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">Friday, 15</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic2.png" title="chat-people-name" />
										<span class="chat-people-cstatus yellow"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Sven</a></h3>
										<p>I sent you the report file</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">14: 22 am</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic4.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Hans</a></h3>
										<p>sYour client called me earlier...</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 min</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic3.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Elsa</a></h3>
										<p>I can't make it today, sorry</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 month</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="chat-people-grid">
									<div class="chat-people-pic-grid">
										<img class="chat-people-pic" src="images/chat-people-pic3.png" title="chat-people-name" />
										<span class="chat-people-cstatus green"> </span>
									</div>
									<div class="chat-people-message">
										<h3><a href="#">Elsa</a></h3>
										<p>I can't make it today, sorry</p>
									</div>
									<div class="chat-people-message-post-date">
										<span><a href="#">1 month</a></span>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="chat-loder-grid">
									<span> </span>
								</div>
							</div>
						</div>
						<!---//End-chat-sectioin---->
					</div>
					<!---//End-left-content-colum1---->
					<!---start-left-content-colum2---->
					<div class="start-left-content-colum2">
						<!---start-clender---->
						<div class="calender-grid">
							<div class="calender-left">
								<div class="cal-wather">
									<h2>15</h2>
									<span>0</span>
									<p>Arendelle 12:15 am</p>
								</div>
							</div>
							<div class="calender calender-right">
								<div class="column_right_grid">
			                      <div class="cal1"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">May 2014</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2014-04-27"><div class="day-contents">27</div></td><td class="day adjacent-month last-month calendar-day-2014-04-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2014-04-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2014-04-30"><div class="day-contents">30</div></td><td class="day calendar-day-2014-05-01"><div class="day-contents">1</div></td><td class="day calendar-day-2014-05-02"><div class="day-contents">2</div></td><td class="day calendar-day-2014-05-03"><div class="day-contents">3</div></td></tr><tr><td class="day calendar-day-2014-05-04"><div class="day-contents">4</div></td><td class="day calendar-day-2014-05-05"><div class="day-contents">5</div></td><td class="day calendar-day-2014-05-06"><div class="day-contents">6</div></td><td class="day calendar-day-2014-05-07"><div class="day-contents">7</div></td><td class="day calendar-day-2014-05-08"><div class="day-contents">8</div></td><td class="day calendar-day-2014-05-09"><div class="day-contents">9</div></td><td class="day calendar-day-2014-05-10"><div class="day-contents">10</div></td></tr><tr><td class="day calendar-day-2014-05-11"><div class="day-contents">11</div></td><td class="day calendar-day-2014-05-12"><div class="day-contents">12</div></td><td class="day calendar-day-2014-05-13"><div class="day-contents">13</div></td><td class="day calendar-day-2014-05-14"><div class="day-contents">14</div></td><td class="day calendar-day-2014-05-15"><div class="day-contents">15</div></td><td class="day calendar-day-2014-05-16"><div class="day-contents">16</div></td><td class="day calendar-day-2014-05-17"><div class="day-contents">17</div></td></tr><tr><td class="day calendar-day-2014-05-18"><div class="day-contents">18</div></td><td class="day calendar-day-2014-05-19"><div class="day-contents">19</div></td><td class="day calendar-day-2014-05-20"><div class="day-contents">20</div></td><td class="day calendar-day-2014-05-21"><div class="day-contents">21</div></td><td class="day calendar-day-2014-05-22"><div class="day-contents">22</div></td><td class="day calendar-day-2014-05-23"><div class="day-contents">23</div></td><td class="day calendar-day-2014-05-24"><div class="day-contents">24</div></td></tr><tr><td class="day calendar-day-2014-05-25"><div class="day-contents">25</div></td><td class="day calendar-day-2014-05-26"><div class="day-contents">26</div></td><td class="day calendar-day-2014-05-27"><div class="day-contents">27</div></td><td class="day calendar-day-2014-05-28"><div class="day-contents">28</div></td><td class="day calendar-day-2014-05-29"><div class="day-contents">29</div></td><td class="day calendar-day-2014-05-30"><div class="day-contents">30</div></td><td class="day calendar-day-2014-05-31"><div class="day-contents">31</div></td></tr></tbody></table></div></div>
							   </div>
							</div>
							<div class="clear"> </div>
						</div>
						<!---//End-clender---->
						<div class="clear"> </div>
						<!---start-upload-status---->
						<div class="upload-download-status-grids">
							<div class="upload-status">
								<h4>Upload Status</h4>
								<span><label> </label></span>
								<p>Up Speed : 300kb/s</p>
							</div>
							<div class="clear"> </div>
							<div class="download-status">
								<h4>Download Status</h4>
								<span><label> </label></span>
								<p>Down Speed : 3MB/s</p>
							</div>
						</div>
						<!---//End-upload-status---->
						<!----start-alert-message---->
						<div class="alert-message">
							<div class="success-msg">
								<p><span class="green-alert"> </span> Congrats, your file has been saved</p>
							</div>
							<div class="err-msg">
								<p><span class="green-alert"> </span> Err, sorry mate, something went wrong</p>
							</div>
							<div class="stand-msg">
								<p><span class="stand-alert"> </span> Tip of the day: "Save your file !"</p>
							</div>
						</div>
						<!----//End-alert-message---->
						<!----start-pagenation---->
						<div class="pagenation">
							<ul>
								<li onclick="location.href='#';" class="frist"> </li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li onclick="location.href='#';" class="last"> </li>
								<div class="clear"> </div>
							</ul>
						</div>
						<!----//End-pagenation---->
						<!----start-search-form--->
						<div class="search-form">
							<form>
								<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
								<input type="submit" value=" " />
							</form>
						</div>
						<!----//End-search-form--->
					</div>
					<!---//End-left-content-colum2---->
					<div class="clear"> </div>
					<div class="navigation">
						<ul>
							<li><a href="#">Home</a></li>
							<li class="active"><a href="#">Messages</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="#">Files</a></li>
							<li><a href="#">Reports</a></li>
							<li><a href="#">Website</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
				<!---//End-left-content---->
				<!----start-right-ccontent--->
				<div class="right-content">
					<!----start-text-slider---->
					<!---slider-catption---->
					<ul class="bxslider">
					  <li><img src="images/slider-pic1.jpg" /><p><span>ELSA</span>Marcaroon muffin jelly-o donut cotton candy powder apple pie.</p>  <label>156 <i> </i> </label> </li>
					  <li><img src="images/slider-pic1.jpg" /><p><span>ELSA</span>Marcaroon muffin jelly-o donut cotton candy powder apple pie.</p>  <label>156 <i> </i> </label> </li>
					  <li><img src="images/slider-pic1.jpg" /><p><span>ELSA</span>Marcaroon muffin jelly-o donut cotton candy powder apple pie.</p>  <label>156 <i> </i> </label> </li>
					  <li><img src="images/slider-pic1.jpg" /><p><span>ELSA</span>Marcaroon muffin jelly-o donut cotton candy powder apple pie.</p>  <label>156 <i> </i> </label> </li>
					</ul>
					<!---slider-catption---->
					<!----//End-text-slider---->
				<!----//End-right-ccontent--->
				<!---start-form-section--->
				<div class="form-section">
					<!---start-form-buttons---->
					<div class="form-btn">
						<input class="download" type="button" value="Download"/>
						<input class="upload" type="button" value="Upload"/>
					</div>
					<!---//End-form-buttons---->
					<!---start-form-textarea---->
					<div class="form-text-box">
						<form>
							<textarea rows="2" cols="70" placeholder="What's on your mind?" required> </textarea>
							<div class="add-map-send">
								<div class="add-map">
									<div class="map">
										<a href="#"> </a>
									</div>
									<div class="add">
										<a href="#"> </a>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="send-post">
									<input  type="submit" value="Post it" />
								</div>
								<div class="clear"> </div>
							</div>
						</form>
					</div>
					<!---//End-form-textarea---->
					<div class="clear"> </div>
					<!----start-social-network-styles---->
					<div class="social_network_likes">
				      		 <ul>
				      		 	<li><a href="#" class="tweets"><div class="followers"><p><span>2k</span>Followers</p></div><div class="social_network"><i class="twitter-icon"> </i> </div></a></li>
				      			<li><a href="#" class="facebook-followers"><div class="followers"><p><span>5k</span>Followers</p></div><div class="social_network"><i class="facebook-icon"> </i> </div></a></li>
				      			<li><a href="#" class="email"><div class="followers"><p><span>7.5k</span>members</p></div><div class="social_network"><i class="email-icon"> </i></div> </a></li>
				      			<li><a href="#" class="dribble"><div class="followers"><p><span>10k</span>Followers</p></div><div class="social_network"><i class="dribble-icon"> </i></div></a></li>
				      			<div class="clear"> </div>
				    		</ul>
		          		</div>
					<!----End-social-network-styles---->
					<!---start-video-players---->
					<div class="video-player">
						<div class="video_palyer">
							 <div id="jp_container_1" class="jp-video jp-video-360p">
								<div class="jp-type-single">
									<div id="jquery_jplayer_1" class="jp-jplayer"> </div>
									<div class="jp-gui">
										<div class="jp-video-play">
											<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>
										</div>
										<div class="jp-interface">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div class="jp-play-bar"></div>
												</div>
											</div>
											
											<!--
											<div class="jp-title">
												<ul>
													<li>Big Buck Bunny Trailer</li>
												</ul>
											</div>
											--->
											<div class="jp-controls-holder">
												<ul class="jp-controls">
													<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
													<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
												<!--
													<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
													-->
													
												</ul>						
											<ul class="jp-toggles">
													<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>
											    <!--
													<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen">restore screen</a></li>
													<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
													<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
											    --->
												</ul>
											<div class="volume-controls">
												<ul class="jp-volume-bar-list">
													<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
													<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
													<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
												  </ul>
												<div class="jp-volume-bar">							  
													<div class="jp-volume-bar-value"></div>
												</div>
											</div>
											<div class="video-time">
												<div class="jp-current-time"></div> <i class="line">/</i>
												<div class="jp-duration"></div>
												<div class="clear"> </div>
											</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>        
					</div>
					<!---//End-video-players---->
				</div>
				<!---//End-form-section--->
			</div>
			<div class="clear"> </div>
			<!---//End-content---->
		</div>
		<!---start-copy-right---->
		<div class="copy-right">
			<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!---//End-copy-right---->
		</div>
		<!---End-wrap---->
	</body>
</html>

