/* PixoPoint Template option */
[----support_postthumbnails----]
/* PixoPoint Template option */
[----support_primarymenu----]
on/* PixoPoint Template option */
[----support_secondarymenu----]
/* PixoPoint Template option */
[----support_hardcrop_postthumbnails----]
/* PixoPoint Template option */
[----header----]

<header>
	<div class="header">
		<h1><a>[siteinfo type="name"]</a></h1>
		<a id="logo">[siteinfo type="name"]</a>
		<div id="description">[siteinfo type="description"]</div>
		<div id="search">
			<form method="get" id="searchform">
				<input type="text" class="field" name="s" id="s" value="Search">
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search">
			</form>
		</div>
	</div>
</header>

<nav id="nav">
	<ul>
		[nav_menu]
	</ul>
</nav>

<div id="banner">
	<div class="banner-image">
	</div>
</div>
/* PixoPoint Template option */
[----footer----]

<footer>
	<div class="footer">
		<nav>
			<ul id="footer">
				[nav_menu theme_location=footer]
			</ul>
		</nav>
		<p>
			[copyright]
		</p>
	</div>
</footer>
/* PixoPoint Template option */
[----index----]
[get_header]


<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				[loop]
				<article>
					<h1><a href="[the_permalink]">[the_title]</a></h1>
					<p class="post-info">
						Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
						by
						<span class="author vcard">[the_author_posts_link]</span>
						[edit_post_link text=" Edit"]
					</p>
					[the_content]
					<p class="post-info">
						<span class="tags">Posted in [the_category separator=", "]</span>
						<br />
						<span class="tags">Tags: [the_tags]</span>
					</p>
				</article>
				[/loop]
				<ul id="numeric_pagination">
					[numeric_pagination]
				</ul>
			</div>
		</div>
	</div>
</div>


[get_footer]/* PixoPoint Template option */
[----front_page----]
/* PixoPoint Template option */
[----home----]
[get_header]


<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				[loop]
				<article>
					<h1><a href="[the_permalink]">[the_title]</a></h1>
					<p class="post-info">
						Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
						by
						<span class="author vcard">[the_author_posts_link]</span>
						[edit_post_link text=" Edit"]
					</p>
					[the_content]
					<p class="post-info">
						<span class="tags">Posted in [the_category separator=", "]</span>
						<br />
						<span class="tags">Tags: [the_tags]</span>
					</p>
				</article>
				[/loop]
				<ul id="numeric_pagination">
					[numeric_pagination]
				</ul>
			</div>
		</div>
	</div>
</div>


[get_footer]/* PixoPoint Template option */
[----page----]
[get_header]


<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
						[widget number=2]
				<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				[loop]
				<article>
					<h1>[the_title]</h1>
					<p class="post-info">[edit_post_link text=" Edit"]</p>
					[the_content]
					[comment_form]
				</article>
				[/loop]
			</div>
		</div>
	</div>
</div>


[get_footer]/* PixoPoint Template option */
[----page_template_1----]
/* PixoPoint Template option */
[----page_template_2----]
/* PixoPoint Template option */
[----single----]
[get_header]


<div class="wrapper">
	<div id="content">
		<div id="inner">
			<aside id="aside-1">
				<div class="sidebar">
					[widget number=1]
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					<div class="widget">
						<h3>Tags</h3>
						[tag_cloud]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<aside id="aside-2">
				<div class="sidebar">
					[widget number=2]
					<div class="widget">
						<h3>Calendar</h3>
						[get_calendar]
						<p>You are able to alter the content in this sidebar via the widgets interface in the WordPress admin panel.</p>
					</div>
					[/widget]
				</div>
			</aside>
			<div id="maincontent">
				[loop]
				<article>
					<h1>[the_title]</h1>
					<p class="post-info">
						Posted on <span class="date time published">[the_date format="l, F j, Y"]</span>
						by
						<span class="author vcard">[the_author_posts_link]</span>
						[edit_post_link text=" Edit"]
					</p>
					[the_content]
					<p class="post-info">
						<span class="tags">Posted in [the_category separator=", "]</span>
						<br />
						<span class="tags">Tags: [the_tags]</span>
					</p>
					[comment_form]
				</article>
				[/loop]
			</div>
		</div>
	</div>
</div>


[get_footer]/* PixoPoint Template option */
[----comments----]
/* PixoPoint Template option */
[----name_widget1----]
Sidebar 1/* PixoPoint Template option */
[----before_widget1----]
<div class="widget">/* PixoPoint Template option */
[----after_widget1----]
</div>/* PixoPoint Template option */
[----before_title1----]
<h3>/* PixoPoint Template option */
[----after_title1----]
</h3>/* PixoPoint Template option */
[----show_widget1----]
on/* PixoPoint Template option */
[----name_widget2----]
Sidebar 2/* PixoPoint Template option */
[----before_widget2----]
<div class="widget">/* PixoPoint Template option */
[----after_widget2----]
</div>/* PixoPoint Template option */
[----before_title2----]
<h3>/* PixoPoint Template option */
[----after_title2----]
</h3>/* PixoPoint Template option */
[----show_widget2----]
on/* PixoPoint Template option */
[----name_widget3----]
/* PixoPoint Template option */
[----before_widget3----]
/* PixoPoint Template option */
[----after_widget3----]
/* PixoPoint Template option */
[----before_title3----]
/* PixoPoint Template option */
[----after_title3----]
/* PixoPoint Template option */
[----show_widget3----]
/* PixoPoint Template option */
[----name_widget4----]
/* PixoPoint Template option */
[----before_widget4----]
/* PixoPoint Template option */
[----after_widget4----]
/* PixoPoint Template option */
[----before_title4----]
/* PixoPoint Template option */
[----after_title4----]
/* PixoPoint Template option */
[----show_widget4----]
/* PixoPoint Template option */
[----name_widget5----]
/* PixoPoint Template option */
[----before_widget5----]
/* PixoPoint Template option */
[----after_widget5----]
/* PixoPoint Template option */
[----before_title5----]
/* PixoPoint Template option */
[----after_title5----]
/* PixoPoint Template option */
[----show_widget5----]
/* PixoPoint Template option */
[----name_widget6----]
/* PixoPoint Template option */
[----before_widget6----]
/* PixoPoint Template option */
[----after_widget6----]
/* PixoPoint Template option */
[----before_title6----]
/* PixoPoint Template option */
[----after_title6----]
/* PixoPoint Template option */
[----show_widget6----]
/* PixoPoint Template option */
[----support_name_postthumbnails1----]
/* PixoPoint Template option */
[----support_name_postthumbnails2----]
/* PixoPoint Template option */
[----support_name_postthumbnails3----]
/* PixoPoint Template option */
[----support_name_postthumbnails4----]
/* PixoPoint Template option */
[----css----]

/* export855009563 */

/* Code generated Sunday 7th of August 2011 09:  48:  09 AM by WP Paintbrush CSS generator */
body,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,a,img,dl,dt,dd,ol,ul,li,fieldset,form,legend,table,tbody,tfoot,thead,tr,th,td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	list-style: none;
}
body {
	background: #ffffff;
}

/* Header */
header {
	float: left;
	width: 100%;
}
header div.header {
	overflow: hidden;
	position: relative;
	display: block;
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
	max-width: 770px;
	min-width: 400px;
	height: 110px;
	background: #ffffff url('coraline/coraline-header.png');
}
* html header .wrapper {
	width: 585px;
	
/* Gives IE6 a fixed width (since it doesn't support max-width or min-width) */
}header h1 {
	display: block;
	position: absolute;
	left: 0;
	top: 0;
	text-align: Center;
	width: 100%;
	font-family: Helvetica Neue, Arial;
	font-size: 36px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 40px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 27px;
}
header h1 a {
	color: #000000;
	text-decoration: none;
}
header #description {
	display: block;
	position: absolute;
	left: 0;
	top: 0;
	text-align: Center;
	width: 100%;
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 75px;
}
header #logo {
	display: none;
	position: absolute;
	left: 0;
	top: 0;
	text-indent: -999em;
	margin-left: 0;
	margin-top: 109px;
	width: 770px;
	height: 175px;
}
header #search {
	display: none;
	position: absolute;
	left: 0;
	top: 0;
	margin-left: 0;
	margin-top: 61px;
	width: 217px;
	height: 47px;
	background: #f0efef;
}
header #search input {
	position: absolute;
	padding: 0;
	outline: none;
	border: none;
	background: none;
}
header #search input[type=text] {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #000000;
	font-weight: normal;
	font-style: normal;
	line-height: 14px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	position: relative;
	width: 189px;
	height: 47px;
	top: 0;
	left: 0;
	background: #d7d1d1;
}
header #search input[type=submit] {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: ;
	font-weight: normal;
	font-style: normal;
	line-height: 12px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	position: absolute;
	width: 72px;
	height: 47px;
	top: 0;
	left: 186px;
	background: #e5e1e1;
}
header #search input[type=submit]:hover {
	cursor: pointer;
}

/* Banner */
#banner {
	width: 100%;
	float: left;
}
#banner div.banner-image {
	max-width: 770px;
	min-width: 440px;
	height: 144px;
	background: url('coraline/coraline-header.jpg');
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
}

/* Menu */
nav#nav {
	float: left;
	width: 100%;
}
nav#nav ul {
	background: #ffffff;
	max-width: 770px;
	min-width: 400px;
	height: 30px;
	list-style: none;
	padding: 0;
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
}
* html nav#nav ul {
	width: 585px;
}
nav#nav li {
	float: left;
	list-style: none;
	line-height: 26px;
	height: 30px;
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,);
	border-top: px;
	border-bottom: px;
	margin: 0 1px 0 0;
	padding: 0;
	background: #ffffff;
}
nav#nav li a {
	float: left;
	margin: 0;
	padding: 2px 13px;
	line-height: 26px;
	height: 26px;
	color: #000000;
	text-decoration: none;
}
nav#nav li ul {
	display: none;
}
nav#nav li.current-menu-item a,
nav#nav li.current_page_item a,
nav#nav li:hover a {
	color: #ffffff;
	font-weight: bold;
	font-style: normal;
	text-decoration: none;
	background: #000000;
}

/* Content */
.wrapper {
	margin: 0 auto;
	max-width: 400px;
	min-width: 770px;
}
* html .wrapper {
	width: 0;
	
/* Gives IE6 a fixed width (since it doesn't support max-width or min-width) */
}.wrapper #content {
	float: left;
	background: #ffffff;
	background-repeat: repeat-y;
}
#inner {
	clear: both;
	min-height: 0;
	
/* IE7 */
position: relative;
}
* html #inner {
	height: auto;
	overflow: visible;
}
aside {
	position: relative;
	
/* IE7 and older need this to show float */
overflow: hidden;
}
aside div.sidebar {
	background: #ffffff;
	padding-right: 0;
	padding-left: 20px;
	padding-top: 30px;
}
aside div.widget {
	margin-bottom: 36px;
}
.wrapper aside h3 {
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 3px solid #000000;
	border-bottom: 1px solid #cccccc;
	margin: 0 0 8px;
	padding: 2px;
	background: #ffffff;
}
.wrapper aside ol,
.wrapper aside ul {
	margin: 0;
	padding: 0;
}
.wrapper aside ul li {
	list-style: square;
}
.wrapper aside li {
	list-style: square;
	margin-left: 20px !important;
	font-family: Georgia, serif;
	font-size: 12px;
	color: #0060FF;
	font-weight: normal;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 4px 0;
}
.wrapper aside li a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
.wrapper aside,
.wrapper aside p {
	font-family: Georgia, serif;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}

/* Extra information */
.wrapper .wp-caption,
.wrapper p.wp-caption-text {
	background: #eee;
	font-family: Georgia, serif;
	font-size: 11.2px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,);
	margin-bottom: 14px;
	padding: 5px 3px 10px;
	text-align: center;
	max-width: 96%;
}
.wp-caption img,
#maincontent .wp-caption img {
	margin: 2px 0 0;
	max-width: 98.5%;
	width: auto;
	height: auto;
}
.wp-caption .wp-caption-text {
	margin: 6px 0 0;
}
#aside-1 {
	width: 235px;
}
#aside-2 {
	width: 121px;
}

/* Main Content */
#maincontent {
	margin: 0;
	overflow: hidden;
	position: relative;
}
article {
	margin: 30px 0 20px;
}
.wrapper p.post-info {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 14px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 10px 0;
	padding: 0;
	background: #ffffff;
	display: block;
}

/* Pagination */
.wrapper #maincontent ul#numeric_pagination {
	float: left;
	width: 100%;
	margin: 30px 0;
}
.wrapper #maincontent ul#numeric_pagination li {
	float: left;
	list-style: none;
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #888888;
	font-weight: bold;
	font-style: normal;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: small-caps;
	text-shadow: px px px rgba(0,0,0,);
	padding: 0;
	text-align: center;
}
ul#numeric_pagination li a {
	float: left;
	height: 13px;
	line-height: 13px;
	margin: 0 4px;
	padding: 3px;
	color: #888888;
	border: solid 1px #cccccc;
}
ul#numeric_pagination li a:hover {
	text-decoration: none;
	color: #ffffff;
}

/* Comments */
#respond textarea {
	width: 98%;
}
#respond textarea,
#respond input {
	border: 1px solid #888;
	outline: none;
}
#respond input[type=text] {
	float: left;
	line-height: 25px;
	margin: 0 10px 0 0;
}
#respond p.comment-form-comment label {
	display: none;
}

/* Footer */
footer {
	width: 100%;
	float: left;
	overflow: auto;
}
footer div.footer {
	overflow: hidden;
	position: relative;
	display: block;
	max-width: 770px;
	min-width: 400px;
	height: 83px;
	background: #ffffff;
	margin: 0 auto;
	border-top: 1px solid #cccccc;
	border-right: 0 solid #ccc;
	border-bottom: 0 solid #ccc;
	border-left: 0 solid #ccc;
}
footer p {
	text-align: Center;
	font-family: Georgia, serif;
	font-size: 14px;
	color: #888888;
	font-weight: normal;
	font-style: italic;
	line-height: 16px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 28px;
	width: 100%;
	display: block;
}
footer a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
footer a:hover {
	color: #1a55b7;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: underline;
}
footer nav {
	position: absolute;
	text-align: Center;
	top: 0;
	margin-top: 0;
	width: 100%;
	display: none;
}
footer nav ul {
	text-align: Center;
}
footer nav li {
	display: inline;
	margin: 0;
}
footer nav li a {
	font-family: Georgia, serif;
	font-size: 17px;
	color: #000000;
	font-weight: bold;
	font-style: italic;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
}
footer nav li ul {
	display: none;
}

/* Post contents */
.alignleft {
	float: left;
	margin: 0 10px 10px 0;
}
.aligncenter {
	display: block;
	margin: 0 auto;
}
.alignright {
	float: right;
	margin: 0 0 10px 10px;
}

/* Heading 1 */
.wrapper h1 {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h1 a {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h1 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}

/* Heading 2 */
.wrapper h2 {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h2 a {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h2 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}

/* Heading 3 */
.wrapper h3 {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}
.wrapper h3 a {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}
.wrapper h3 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}

/* Heading 4 */
.wrapper h4 {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}
.wrapper h4 a {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}
.wrapper h4 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}

/* Heading 5 */
.wrapper h5 {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h5 a {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h5 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}

/* Heading 6 */
.wrapper h6 {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h6 a {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h6 a:hover {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper p {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper #maincontent ul,
.wrapper #maincontent ol {
	margin: 0 0 0 35px;
	padding: 0;
}
.wrapper #maincontent li {
	margin: 0;
	padding: 0;
}
.wrapper #maincontent ul li {
	list-style: square;
}
.wrapper #maincontent ol li {
	list-style: decimal;
}
.wrapper #maincontent li {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper #maincontent li {
	line-height: auto;
	margin: 0;
	padding: 10px 0;
}
.wrapper blockquote {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
.wrapper a:hover {
	color: #1a55b7;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: underline;
}
#aside-2 {
	display: none;
}
#aside-1 {
	float: right;
	margin: 0 -235px 0 0;
}
#inner {
	margin: 0 235px 0 0;
}

/* Custom CSS *//* PixoPoint Template option */
[----paintbrush_designer----]
design|Theme by <a href='http://wppaintbrush.com'>WPPaintbrush.com</a>. Design based on <a href='http://automattic.com/'>Coraline</a>.}positions|layout-header,layout-menu,layout-headerimage,layout-content,layout-footer}sidebar_positions|layout-maincontent,layout-sidebar1}add_custom_css|}header_heading_fontfamily|Helvetica Neue, Arial}header_description_fontfamily|Helvetica Neue, Arial}heading1_fontfamily|Helvetica Neue, Arial}heading2_fontfamily|Helvetica Neue, Arial}heading3_fontfamily|Helvetica Neue, Arial}heading4_fontfamily|Helvetica Neue, Arial}heading5_fontfamily|Helvetica Neue, Arial}heading6_fontfamily|Georgia, serif}paragraph_fontfamily|Georgia, serif}listitem_fontfamily|Georgia, serif}sidebar_heading_fontfamily|Helvetica Neue, Arial}sidebar_list_fontfamily|Georgia, serif}sidebar_paragraph_fontfamily|Georgia, serif}footer_menu_fontfamily|Georgia, serif}footer_copyright_fontfamily|Georgia, serif}postinfo_fontfamily|Helvetica Neue, Arial}menu1_fontfamily|Helvetica Neue, Arial}searchtext_fontfamily|Helvetica Neue, Arial}searchsubmit_fontfamily|Helvetica Neue, Arial}header_heading_textcolour|#000000}header_description_textcolour|#000000}heading1_textcolour|#000000}heading2_textcolour|#000000}heading3_textcolour|#000000}heading4_textcolour|#888888}heading5_textcolour|#333333}heading6_textcolour|#333333}paragraph_textcolour|#333333}listitem_textcolour|#000000}sidebar_heading_textcolour|#000000}sidebar_list_textcolour|#0060FF}sidebar_paragraph_textcolour|#333333}footer_menu_textcolour|#000000}footer_copyright_textcolour|#888888}postinfo_textcolour|#888888}menu1_textcolour|#000000}searchtext_textcolour|#000000}searchsubmit_textcolour|}header_heading_font_weight|bold}header_description_font_weight|normal}heading1_font_weight|bold}heading2_font_weight|bold}heading3_font_weight|normal}heading4_font_weight|normal}heading5_font_weight|normal}heading6_font_weight|normal}paragraph_font_weight|normal}listitem_font_weight|normal}sidebar_heading_font_weight|bold}sidebar_list_font_weight|normal}sidebar_paragraph_font_weight|normal}footer_menu_font_weight|bold}footer_copyright_font_weight|normal}postinfo_font_weight|normal}menu1_font_weight|bold}searchtext_font_weight|normal}searchsubmit_font_weight|normal}header_heading_font_style|normal}header_description_font_style|normal}heading1_font_style|normal}heading2_font_style|normal}heading3_font_style|italic}heading4_font_style|normal}heading5_font_style|normal}heading6_font_style|normal}paragraph_font_style|normal}listitem_font_style|normal}sidebar_heading_font_style|normal}sidebar_list_font_style|normal}sidebar_paragraph_font_style|normal}footer_menu_font_style|italic}footer_copyright_font_style|italic}postinfo_font_style|normal}menu1_font_style|normal}searchtext_font_style|normal}searchsubmit_font_style|normal}header_heading_text_transform|none}header_description_text_transform|none}heading1_text_transform|none}heading2_text_transform|uppercase}heading3_text_transform|uppercase}heading4_text_transform|none}heading5_text_transform|none}heading6_text_transform|none}paragraph_text_transform|none}listitem_text_transform|none}sidebar_heading_text_transform|uppercase}sidebar_list_text_transform|none}sidebar_paragraph_text_transform|none}footer_menu_text_transform|uppercase}footer_copyright_text_transform|none}postinfo_text_transform|none}menu1_text_transform|uppercase}searchtext_text_transform|none}searchsubmit_text_transform|none}header_heading_small_caps|normal}header_description_small_caps|normal}heading1_small_caps|normal}heading2_small_caps|normal}heading3_small_caps|normal}heading4_small_caps|normal}heading5_small_caps|normal}heading6_small_caps|normal}paragraph_small_caps|normal}listitem_small_caps|normal}sidebar_heading_small_caps|normal}sidebar_list_small_caps|normal}sidebar_paragraph_small_caps|normal}footer_menu_small_caps|normal}footer_copyright_small_caps|normal}postinfo_small_caps|normal}menu1_small_caps|normal}searchtext_small_caps|normal}searchsubmit_small_caps|normal}header_heading_textdecoration|none}header_description_textdecoration|none}heading1_textdecoration|none}heading2_textdecoration|none}heading3_textdecoration|none}heading4_textdecoration|none}heading5_textdecoration|none}heading6_textdecoration|none}paragraph_textdecoration|none}listitem_textdecoration|none}sidebar_heading_textdecoration|none}sidebar_list_textdecoration|none}sidebar_paragraph_textdecoration|none}footer_menu_textdecoration|none}footer_copyright_textdecoration|none}postinfo_textdecoration|none}menu1_textdecoration|none}searchtext_textdecoration|none}searchsubmit_textdecoration|none}header_heading_shadow_colour|#000000}header_description_shadow_colour|#000000}heading1_shadow_colour|#000000}heading2_shadow_colour|#000000}heading3_shadow_colour|#000000}heading4_shadow_colour|#000000}heading5_shadow_colour|#000000}heading6_shadow_colour|#000000}paragraph_shadow_colour|#000000}listitem_shadow_colour|#000000}sidebar_heading_shadow_colour|#000000}sidebar_list_shadow_colour|#000000}sidebar_paragraph_shadow_colour|#000000}footer_menu_shadow_colour|#000000}footer_copyright_shadow_colour|#000000}postinfo_shadow_colour|#000000}menu1_shadow_colour|#000000}searchtext_shadow_colour|}searchsubmit_shadow_colour|}heading1_bordertop_colour|#FF00FF}heading2_bordertop_colour|#000000}heading3_bordertop_colour|#000000}heading4_bordertop_colour|#000000}heading5_bordertop_colour|#000000}heading6_bordertop_colour|#000000}paragraph_bordertop_colour|#000000}listitem_bordertop_colour|#000000}sidebar_heading_bordertop_colour|#000000}sidebar_list_bordertop_colour|#000000}sidebar_paragraph_bordertop_colour|#000000}postinfo_bordertop_colour|#000000}heading1_borderbottom_colour|#000000}heading2_borderbottom_colour|#000000}heading3_borderbottom_colour|#000000}heading4_borderbottom_colour|#000000}heading5_borderbottom_colour|#000000}heading6_borderbottom_colour|#000000}paragraph_borderbottom_colour|#000000}listitem_borderbottom_colour|#000000}sidebar_heading_borderbottom_colour|#cccccc}sidebar_list_borderbottom_colour|#000000}sidebar_paragraph_borderbottom_colour|#000000}postinfo_borderbottom_colour|#000000}heading1_bordertop_type|dashed}heading2_bordertop_type|solid}heading3_bordertop_type|solid}heading4_bordertop_type|solid}heading5_bordertop_type|solid}heading6_bordertop_type|solid}paragraph_bordertop_type|solid}listitem_bordertop_type|solid}sidebar_heading_bordertop_type|solid}sidebar_list_bordertop_type|solid}sidebar_paragraph_bordertop_type|solid}postinfo_bordertop_type|solid}heading1_borderbottom_type|solid}heading2_borderbottom_type|solid}heading3_borderbottom_type|solid}heading4_borderbottom_type|solid}heading5_borderbottom_type|solid}heading6_borderbottom_type|solid}paragraph_borderbottom_type|solid}listitem_borderbottom_type|solid}sidebar_heading_borderbottom_type|solid}sidebar_list_borderbottom_type|solid}sidebar_paragraph_borderbottom_type|solid}postinfo_borderbottom_type|solid}heading1_background_colour|#ffffff}heading2_background_colour|#ffffff}heading3_background_colour|#ffffff}heading4_background_colour|#ffffff}heading5_background_colour|#ffffff}heading6_background_colour|#ffffff}paragraph_background_colour|#ffffff}listitem_background_colour|#ffffff}sidebar_heading_background_colour|#ffffff}sidebar_list_background_colour|}sidebar_paragraph_background_colour|#ffffff}postinfo_background_colour|#ffffff}menu1_background_colour|#ffffff}heading1_background_image|}heading2_background_image|}heading3_background_image|}heading4_background_image|}heading5_background_image|}heading6_background_image|}paragraph_background_image|}listitem_background_image|}sidebar_heading_background_image|}sidebar_list_background_image|}sidebar_paragraph_background_image|}postinfo_background_image|}menu1_background_image|}header_heading_fontsize|36}header_description_fontsize|18}heading1_fontsize|24}heading2_fontsize|18}heading3_fontsize|16}heading4_fontsize|17}heading5_fontsize|12}heading6_fontsize|10}paragraph_fontsize|14}listitem_fontsize|12}sidebar_heading_fontsize|13}sidebar_list_fontsize|12}sidebar_paragraph_fontsize|12}footer_menu_fontsize|17}footer_copyright_fontsize|14}postinfo_fontsize|12}menu1_fontsize|13}searchtext_fontsize|12}searchsubmit_fontsize|12}header_heading_line_height|40}header_description_line_height|20}heading1_line_height|22}heading2_line_height|22}heading3_line_height|27}heading4_line_height|28}heading5_line_height|20}heading6_line_height|17}paragraph_line_height|23}listitem_line_height|15}sidebar_heading_line_height|18}sidebar_list_line_height|18}sidebar_paragraph_line_height|18}footer_menu_line_height|22}footer_copyright_line_height|16}postinfo_line_height|14}menu1_line_height|26}searchtext_line_height|14}searchsubmit_line_height|12}header_heading_shadow_x_coordinate|0}header_description_shadow_x_coordinate|0}heading1_shadow_x_coordinate|0}heading2_shadow_x_coordinate|0}heading3_shadow_x_coordinate|0}heading4_shadow_x_coordinate|0}heading5_shadow_x_coordinate|0}heading6_shadow_x_coordinate|0}paragraph_shadow_x_coordinate|0}listitem_shadow_x_coordinate|0}sidebar_heading_shadow_x_coordinate|0}sidebar_list_shadow_x_coordinate|0}sidebar_paragraph_shadow_x_coordinate|0}footer_menu_shadow_x_coordinate|0}footer_copyright_shadow_x_coordinate|0}postinfo_shadow_x_coordinate|0}menu1_shadow_x_coordinate|0}searchtext_shadow_x_coordinate|0}searchsubmit_shadow_x_coordinate|0}header_heading_shadow_y_coordinate|0}header_description_shadow_y_coordinate|0}heading1_shadow_y_coordinate|0}heading2_shadow_y_coordinate|0}heading3_shadow_y_coordinate|0}heading4_shadow_y_coordinate|0}heading5_shadow_y_coordinate|0}heading6_shadow_y_coordinate|0}paragraph_shadow_y_coordinate|0}listitem_shadow_y_coordinate|0}sidebar_heading_shadow_y_coordinate|0}sidebar_list_shadow_y_coordinate|0}sidebar_paragraph_shadow_y_coordinate|0}footer_menu_shadow_y_coordinate|0}footer_copyright_shadow_y_coordinate|0}postinfo_shadow_y_coordinate|0}menu1_shadow_y_coordinate|0}searchtext_shadow_y_coordinate|0}searchsubmit_shadow_y_coordinate|0}header_heading_shadow_blur_radius|0}header_description_shadow_blur_radius|0}heading1_shadow_blur_radius|0}heading2_shadow_blur_radius|0}heading3_shadow_blur_radius|0}heading4_shadow_blur_radius|0}heading5_shadow_blur_radius|0}heading6_shadow_blur_radius|0}paragraph_shadow_blur_radius|0}listitem_shadow_blur_radius|0}sidebar_heading_shadow_blur_radius|0}sidebar_list_shadow_blur_radius|0}sidebar_paragraph_shadow_blur_radius|0}footer_menu_shadow_blur_radius|0}footer_copyright_shadow_blur_radius|0}postinfo_shadow_blur_radius|0}menu1_shadow_blur_radius|0}searchtext_shadow_blur_radius|0}searchsubmit_shadow_blur_radius|0}heading1_bordertop_width|0}heading2_bordertop_width|0}heading3_bordertop_width|0}heading4_bordertop_width|0}heading5_bordertop_width|0}heading6_bordertop_width|0}paragraph_bordertop_width|0}listitem_bordertop_width|0}sidebar_heading_bordertop_width|3}sidebar_list_bordertop_width|0}sidebar_paragraph_bordertop_width|0}postinfo_bordertop_width|0}heading1_borderbottom_width|0}heading2_borderbottom_width|0}heading3_borderbottom_width|0}heading4_borderbottom_width|0}heading5_borderbottom_width|0}heading6_borderbottom_width|0}paragraph_borderbottom_width|0}listitem_borderbottom_width|0}sidebar_heading_borderbottom_width|1}sidebar_list_borderbottom_width|0}sidebar_paragraph_borderbottom_width|0}postinfo_borderbottom_width|0}heading1_margin_top|0}heading2_margin_top|0}heading3_margin_top|0}heading4_margin_top|0}heading5_margin_top|0}heading6_margin_top|0}paragraph_margin_top|0}listitem_margin_top|0}sidebar_heading_margin_top|0}sidebar_list_margin_top|0}sidebar_paragraph_margin_top|0}postinfo_margin_top|10}menu1_margin_top|0}heading1_margin_right|0}heading2_margin_right|0}heading3_margin_right|0}heading4_margin_right|0}heading5_margin_right|0}heading6_margin_right|0}paragraph_margin_right|0}listitem_margin_right|0}sidebar_heading_margin_right|0}sidebar_list_margin_right|0}sidebar_paragraph_margin_right|0}postinfo_margin_right|0}menu1_margin_right|1}heading1_margin_bottom|0}heading2_margin_bottom|0}heading3_margin_bottom|6}heading4_margin_bottom|7}heading5_margin_bottom|0}heading6_margin_bottom|0}paragraph_margin_bottom|23}listitem_margin_bottom|0}sidebar_heading_margin_bottom|8}sidebar_list_margin_bottom|0}sidebar_paragraph_margin_bottom|0}postinfo_margin_bottom|10}menu1_margin_bottom|0}heading1_margin_left|0}heading2_margin_left|0}heading3_margin_left|0}heading4_margin_left|0}heading5_margin_left|0}heading6_margin_left|0}paragraph_margin_left|0}listitem_margin_left|0}sidebar_heading_margin_left|0}sidebar_list_margin_left|0}sidebar_paragraph_margin_left|0}postinfo_margin_left|0}menu1_margin_left|0}heading1_padding_top|0}heading2_padding_top|0}heading3_padding_top|0}heading4_padding_top|0}heading5_padding_top|0}heading6_padding_top|0}paragraph_padding_top|0}listitem_padding_top|0}sidebar_heading_padding_top|2}sidebar_list_padding_top|4}sidebar_paragraph_padding_top|0}postinfo_padding_top|0}menu1_padding_top|2}heading1_padding_right|0}heading2_padding_right|0}heading3_padding_right|0}heading4_padding_right|0}heading5_padding_right|0}heading6_padding_right|0}paragraph_padding_right|0}listitem_padding_right|0}sidebar_heading_padding_right|2}sidebar_list_padding_right|0}sidebar_paragraph_padding_right|0}postinfo_padding_right|0}menu1_padding_right|13}heading1_padding_bottom|8}heading2_padding_bottom|8}heading3_padding_bottom|0}heading4_padding_bottom|0}heading5_padding_bottom|0}heading6_padding_bottom|0}paragraph_padding_bottom|0}listitem_padding_bottom|0}sidebar_heading_padding_bottom|2}sidebar_list_padding_bottom|4}sidebar_paragraph_padding_bottom|0}postinfo_padding_bottom|0}menu1_padding_bottom|2}heading1_padding_left|0}heading2_padding_left|0}heading3_padding_left|0}heading4_padding_left|0}heading5_padding_left|0}heading6_padding_left|0}paragraph_padding_left|0}listitem_padding_left|0}sidebar_heading_padding_left|2}sidebar_list_padding_left|0}sidebar_paragraph_padding_left|0}postinfo_padding_left|0}menu1_padding_left|13}pagination_font_style|normal}menu1_hover_font_style|normal}links_font_style|inherit}links_hover_font_style|inherit}widget1_background_colour|}widget1_widget_background_colour|}widget1_widget_border_colour|}widget1_border_top_colour|}widget1_border_right_colour|}widget1_border_bottom_colour|}widget1_border_left_colour|}widget2_background_colour|}widget2_widget_background_colour|}widget2_widget_border_colour|}widget2_border_top_colour|}widget2_border_right_colour|}widget2_border_bottom_colour|}widget2_border_left_colour|}widget3_background_colour|}widget3_widget_background_colour|}widget3_widget_border_colour|}widget3_border_top_colour|}widget3_border_right_colour|}widget3_border_bottom_colour|}widget3_border_left_colour|}widget4_background_colour|}widget4_widget_background_colour|}widget4_widget_border_colour|}widget4_border_top_colour|}widget4_border_right_colour|}widget4_border_bottom_colour|}widget4_border_left_colour|}sidebar_background_colour|#ffffff}pagination_textcolour|#888888}pagination_texthovercolour|#ffffff}pagination_shadow_colour|#000000}pagination_background_colour|#ffffff}pagination_border_colour|#cccccc}pagination_background_hovercolour|#0060FF}footer_background_colour|#ffffff}background_colour|#ffffff}maincontent_background_colour|#ffffff}header_background_colour|#ffffff}header_searchbox_background_colour|#f0efef}menu1_hover_background_colour|#000000}menu1_hover_textcolour|#ffffff}menu1_items_background_colour|#ffffff}links_textcolour|#0060FF}links_hover_textcolour|#1a55b7}header_searchsubmit_text_background_colour|#e5e1e1}header_searchbox_text_background_colour|#d7d1d1}menu1_fullwidth_background_colour|}header_fullwidth_background_colour|}footer_fullwidth_background_colour|}header_border_top_colour|}header_border_right_colour|}header_border_bottom_colour|}header_border_left_colour|}banner_border_top_colour|}banner_border_right_colour|}banner_border_bottom_colour|}banner_border_left_colour|}menu1_border_top_colour|}menu1_border_right_colour|}menu1_border_bottom_colour|}menu1_border_left_colour|}footer_border_top_colour|#cccccc}footer_border_right_colour|#ccc}footer_border_bottom_colour|#ccc}footer_border_left_colour|#ccc}footer_background_image|}sidebar_background_image|}background_image|}maincontent_background_image|}header_searchbox_background_image|}header_logo_background_image|}menu1_items_background_image|}menu1_hover_background_image|}banner_image|coraline/coraline-header.jpg}header_background_image|coraline/coraline-header.png}header_searchsubmit_text_background_image|}header_searchbox_text_background_image|}menu1_fullwidth_background_image|}header_fullwidth_background_image|}footer_fullwidth_background_image|}sidebar_background_image_tiling|repeat-y}footer_background_image_tiling|repeat-x}background_image_tiling|repeat-y}maincontent_background_image_tiling|repeat-y}menu1_hover_font_weight|bold}pagination_font_weight|bold}links_font_weight|inherit}links_hover_font_weight|inherit}pagination_fontfamily|Helvetica Neue, Arial}menu1_hover_textdecoration|none}pagination_textdecoration|none}links_textdecoration|none}links_hover_textdecoration|underline}footer_copyright_horizontalposition|0}footer_copyright_verticalposition|28}footer_menu_horizontalposition|0}footer_menu_verticalposition|0}header_heading_position_x|0}header_heading_position_y|27}header_logo_position_x|0}header_logo_position_y|109}header_description_position_x|0}header_description_position_y|75}header_searchbox_width|217}header_searchbox_height|47}header_searchbox_position_x|0}header_searchbox_position_y|61}header_logo_width|770}header_logo_height|175}aside_1_width|235}aside_2_width|121}maincontent_minimum_width|770}maincontent_maximum_width|400}footer_max_width|770}footer_min_width|400}footer_height|83}header_min_width|400}header_max_width|770}header_height|110}menu1_max_width|770}menu1_min_width|400}menu1_indent|0}banner_max_width|770}banner_min_width|440}banner_height|144}header_searchsubmit_text_width|72}header_searchsubmit_text_height|47}header_searchbox_text_width|189}header_searchbox_text_height|47}header_searchsubmit_text_position_x|186}pagination_vertical_margin|30}pagination_horizontal_margin|4}pagination_padding|3}pagination_border_width|1}content_margin_top|30}content_margin_right|0}content_margin_bottom|20}content_margin_left|0}aside_padding_top|30}aside_padding_right|0}aside_padding_bottom|36}aside_padding_left|20}header_searchsubmit_text_position_y|0}header_searchbox_text_position_x|0}header_searchbox_text_position_y|0}footer_menu_gap|0}header_border_top_width|0}header_border_right_width|0}header_border_bottom_width|0}header_border_left_width|0}header_top_margin|0}header_bottom_margin|0}banner_border_top_width|0}banner_border_right_width|0}banner_border_bottom_width|0}banner_border_left_width|0}banner_top_margin|0}banner_bottom_margin|0}menu1_border_top_width|0}menu1_border_right_width|0}menu1_border_bottom_width|0}menu1_border_left_width|0}menu1_top_margin|0}menu1_bottom_margin|0}footer_border_top_width|1}footer_border_right_width|0}footer_border_bottom_width|0}footer_border_left_width|0}footer_top_margin|0}footer_bottom_margin|0}postinfo_display|block}pagination_display|block}header_searchbox_display|none}header_logo_display|none}footer_menu_display|none}footer_copyright_display|block}header_description_display|block}header_heading_display|block}header_searchsubmit_text_display|block}menu1_fullwidth_background_display|none}header_fullwidth_background_display|none}footer_fullwidth_background_display|none}background_display|block}footer_copyright_position_centered|Center}header_heading_position_centered|Center}header_description_position_centered|Center}pagination_fontsize|13}footer_menu_alignment|Center}pagination_text_transform|uppercase}pagination_small_caps|small-caps}pagination_border_type|solid}header_border_top_type|solid}header_border_right_type|solid}header_border_bottom_type|solid}header_border_left_type|solid}banner_border_top_type|solid}banner_border_right_type|solid}banner_border_bottom_type|solid}banner_border_left_type|solid}menu1_border_top_type|solid}menu1_border_right_type|solid}menu1_border_bottom_type|solid}menu1_border_left_type|solid}footer_border_top_type|solid}footer_border_right_type|solid}footer_border_bottom_type|solid}footer_border_left_type|solid}copyright|Theme by <a href="http://wppaintbrush.com/">WPPaintbrush.com</a>. Design based on <a href="http://http://en.blog.wordpress.com/2010/08/09/new-theme-coraline/">Coraline</a>.}blockquote_fontfamily|'Helvetica Neue', Arial, Helvetica, 'Nimbus Sans L', sans-serif}blockquote_textcolour|}blockquote_shadow_colour|}header_heading_bordertop_colour|}header_description_bordertop_colour|}blockquote_bordertop_colour|}footer_menu_bordertop_colour|}footer_copyright_bordertop_colour|}menu1_bordertop_colour|}searchtext_bordertop_colour|}searchsubmit_bordertop_colour|}header_heading_borderbottom_colour|}header_description_borderbottom_colour|}blockquote_borderbottom_colour|}footer_menu_borderbottom_colour|}footer_copyright_borderbottom_colour|}menu1_borderbottom_colour|}searchtext_borderbottom_colour|}searchsubmit_borderbottom_colour|}header_heading_background_colour|}header_description_background_colour|}blockquote_background_colour|}footer_menu_background_colour|}footer_copyright_background_colour|}searchtext_background_colour|}searchsubmit_background_colour|}header_heading_background_image|}header_description_background_image|}blockquote_background_image|}footer_menu_background_image|}footer_copyright_background_image|}searchtext_background_image|}searchsubmit_background_image|}blockquote_small_caps|normal}blockquote_font_weight|normal}blockquote_textdecoration|none}blockquote_text_transform|none}header_heading_bordertop_type|solid}header_description_bordertop_type|solid}blockquote_bordertop_type|solid}footer_menu_bordertop_type|solid}footer_copyright_bordertop_type|solid}menu1_bordertop_type|solid}searchtext_bordertop_type|solid}searchsubmit_bordertop_type|solid}header_heading_borderbottom_type|solid}header_description_borderbottom_type|solid}blockquote_borderbottom_type|solid}footer_menu_borderbottom_type|solid}footer_copyright_borderbottom_type|solid}menu1_borderbottom_type|solid}searchtext_borderbottom_type|solid}searchsubmit_borderbottom_type|solid}blockquote_font_style|normal}css|/* export855009563 */



/* Code generated Sunday 7th of August 2011 09: 48: 09 AM by WP Paintbrush CSS generator */
body,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,a,img,dl,dt,dd,ol,ul,li,fieldset,form,legend,table,tbody,tfoot,thead,tr,th,td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	list-style: none;
}
body {
	background: #ffffff;
}

/* Header */
header {
	float: left;
	width: 100%;
}
header div.header {
	overflow: hidden;
	position: relative;
	display: block;
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
	max-width: 770px;
	min-width: 400px;
	height: 110px;
	background: #ffffff url('coraline/coraline-header.png');
}
* html header .wrapper {
	width: 585px;
	
/* Gives IE6 a fixed width (since it doesn't support max-width or min-width) */
}header h1 {
	display: block;
	position: absolute;
	left: 0;
	top: 0;
	text-align: Center;
	width: 100%;
	font-family: Helvetica Neue, Arial;
	font-size: 36px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 40px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 27px;
}
header h1 a {
	color: #000000;
	text-decoration: none;
}
header #description {
	display: block;
	position: absolute;
	left: 0;
	top: 0;
	text-align: Center;
	width: 100%;
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 75px;
}
header #logo {
	display: none;
	position: absolute;
	left: 0;
	top: 0;
	text-indent: -999em;
	margin-left: 0;
	margin-top: 109px;
	width: 770px;
	height: 175px;
}
header #search {
	display: none;
	position: absolute;
	left: 0;
	top: 0;
	margin-left: 0;
	margin-top: 61px;
	width: 217px;
	height: 47px;
	background: #f0efef;
}
header #search input {
	position: absolute;
	padding: 0;
	outline: none;
	border: none;
	background: none;
}
header #search input[type=text] {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #000000;
	font-weight: normal;
	font-style: normal;
	line-height: 14px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	position: relative;
	width: 189px;
	height: 47px;
	top: 0;
	left: 0;
	background: #d7d1d1;
}
header #search input[type=submit] {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: ;
	font-weight: normal;
	font-style: normal;
	line-height: 12px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	position: absolute;
	width: 72px;
	height: 47px;
	top: 0;
	left: 186px;
	background: #e5e1e1;
}
header #search input[type=submit]:hover {
	cursor: pointer;
}

/* Banner */
#banner {
	width: 100%;
	float: left;
}
#banner div.banner-image {
	max-width: 770px;
	min-width: 440px;
	height: 144px;
	background: url('coraline/coraline-header.jpg');
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
}

/* Menu */
nav#nav {
	float: left;
	width: 100%;
}
nav#nav ul {
	background: #ffffff;
	max-width: 770px;
	min-width: 400px;
	height: 30px;
	list-style: none;
	padding: 0;
	margin: 0 auto;
	border-top: 0 solid;
	border-right: 0 solid;
	border-bottom: 0 solid;
	border-left: 0 solid;
}
* html nav#nav ul {
	width: 585px;
}
nav#nav li {
	float: left;
	list-style: none;
	line-height: 26px;
	height: 30px;
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,);
	border-top: px;
	border-bottom: px;
	margin: 0 1px 0 0;
	padding: 0;
	background: #ffffff;
}
nav#nav li a {
	float: left;
	margin: 0;
	padding: 2px 13px;
	line-height: 26px;
	height: 26px;
	color: #000000;
	text-decoration: none;
}
nav#nav li ul {
	display: none;
}
nav#nav li.current-menu-item a,
nav#nav li.current_page_item a,
nav#nav li:hover a {
	color: #ffffff;
	font-weight: bold;
	font-style: normal;
	text-decoration: none;
	background: #000000;
}

/* Content */
.wrapper {
	margin: 0 auto;
	max-width: 400px;
	min-width: 770px;
}
* html .wrapper {
	width: 0;
	
/* Gives IE6 a fixed width (since it doesn't support max-width or min-width) */
}.wrapper #content {
	float: left;
	background: #ffffff;
	background-repeat: repeat-y;
}
#inner {
	clear: both;
	min-height: 0;
	
/* IE7 */
position: relative;
}
* html #inner {
	height: auto;
	overflow: visible;
}
aside {
	position: relative;
	
/* IE7 and older need this to show float */
overflow: hidden;
}
aside div.sidebar {
	background: #ffffff;
	padding-right: 0;
	padding-left: 20px;
	padding-top: 30px;
}
aside div.widget {
	margin-bottom: 36px;
}
.wrapper aside h3 {
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 3px solid #000000;
	border-bottom: 1px solid #cccccc;
	margin: 0 0 8px;
	padding: 2px;
	background: #ffffff;
}
.wrapper aside ol,
.wrapper aside ul {
	margin: 0;
	padding: 0;
}
.wrapper aside ul li {
	list-style: square;
}
.wrapper aside li {
	list-style: square;
	margin-left: 20px !important;
	font-family: Georgia, serif;
	font-size: 12px;
	color: #0060FF;
	font-weight: normal;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 4px 0;
}
.wrapper aside li a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
.wrapper aside,
.wrapper aside p {
	font-family: Georgia, serif;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 18px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}

/* Extra information */
.wrapper .wp-caption,
.wrapper p.wp-caption-text {
	background: #eee;
	font-family: Georgia, serif;
	font-size: 11.2px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,);
	margin-bottom: 14px;
	padding: 5px 3px 10px;
	text-align: center;
	max-width: 96%;
}
.wp-caption img,
#maincontent .wp-caption img {
	margin: 2px 0 0;
	max-width: 98.5%;
	width: auto;
	height: auto;
}
.wp-caption .wp-caption-text {
	margin: 6px 0 0;
}
#aside-1 {
	width: 235px;
}
#aside-2 {
	width: 121px;
}

/* Main Content */
#maincontent {
	margin: 0;
	overflow: hidden;
	position: relative;
}
article {
	margin: 30px 0 20px;
}
.wrapper p.post-info {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 14px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 10px 0;
	padding: 0;
	background: #ffffff;
	display: block;
}

/* Pagination */
.wrapper #maincontent ul#numeric_pagination {
	float: left;
	width: 100%;
	margin: 30px 0;
}
.wrapper #maincontent ul#numeric_pagination li {
	float: left;
	list-style: none;
	font-family: Helvetica Neue, Arial;
	font-size: 13px;
	color: #888888;
	font-weight: bold;
	font-style: normal;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: small-caps;
	text-shadow: px px px rgba(0,0,0,);
	padding: 0;
	text-align: center;
}
ul#numeric_pagination li a {
	float: left;
	height: 13px;
	line-height: 13px;
	margin: 0 4px;
	padding: 3px;
	color: #888888;
	border: solid 1px #cccccc;
}
ul#numeric_pagination li a:hover {
	text-decoration: none;
	color: #ffffff;
}

/* Comments */
#respond textarea {
	width: 98%;
}
#respond textarea,
#respond input {
	border: 1px solid #888;
	outline: none;
}
#respond input[type=text] {
	float: left;
	line-height: 25px;
	margin: 0 10px 0 0;
}
#respond p.comment-form-comment label {
	display: none;
}

/* Footer */
footer {
	width: 100%;
	float: left;
	overflow: auto;
}
footer div.footer {
	overflow: hidden;
	position: relative;
	display: block;
	max-width: 770px;
	min-width: 400px;
	height: 83px;
	background: #ffffff;
	margin: 0 auto;
	border-top: 1px solid #cccccc;
	border-right: 0 solid #ccc;
	border-bottom: 0 solid #ccc;
	border-left: 0 solid #ccc;
}
footer p {
	text-align: Center;
	font-family: Georgia, serif;
	font-size: 14px;
	color: #888888;
	font-weight: normal;
	font-style: italic;
	line-height: 16px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
	margin-left: 0;
	margin-top: 28px;
	width: 100%;
	display: block;
}
footer a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
footer a:hover {
	color: #1a55b7;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: underline;
}
footer nav {
	position: absolute;
	text-align: Center;
	top: 0;
	margin-top: 0;
	width: 100%;
	display: none;
}
footer nav ul {
	text-align: Center;
}
footer nav li {
	display: inline;
	margin: 0;
}
footer nav li a {
	font-family: Georgia, serif;
	font-size: 17px;
	color: #000000;
	font-weight: bold;
	font-style: italic;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: px;
	border-bottom: px;
	margin: px;
	padding: px;
}
footer nav li ul {
	display: none;
}

/* Post contents */
.alignleft {
	float: left;
	margin: 0 10px 10px 0;
}
.aligncenter {
	display: block;
	margin: 0 auto;
}
.alignright {
	float: right;
	margin: 0 0 10px 10px;
}

/* Heading 1 */
.wrapper h1 {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h1 a {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h1 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 24px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 dashed #FF00FF;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}

/* Heading 2 */
.wrapper h2 {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h2 a {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}
.wrapper h2 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 18px;
	color: #000000;
	font-weight: bold;
	font-style: normal;
	line-height: 22px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0 0 8px;
	background: #ffffff;
}

/* Heading 3 */
.wrapper h3 {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}
.wrapper h3 a {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}
.wrapper h3 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 16px;
	color: #000000;
	font-weight: normal;
	font-style: italic;
	line-height: 27px;
	text-decoration: none;
	text-transform: uppercase;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 6px;
	padding: 0;
	background: #ffffff;
}

/* Heading 4 */
.wrapper h4 {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}
.wrapper h4 a {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}
.wrapper h4 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 17px;
	color: #888888;
	font-weight: normal;
	font-style: normal;
	line-height: 28px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 7px;
	padding: 0;
	background: #ffffff;
}

/* Heading 5 */
.wrapper h5 {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h5 a {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h5 a:hover {
	font-family: Helvetica Neue, Arial;
	font-size: 12px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 20px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}

/* Heading 6 */
.wrapper h6 {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h6 a {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper h6 a:hover {
	font-family: Georgia, serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 17px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0;
	padding: 0;
	background: #ffffff;
}
.wrapper p {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper #maincontent ul,
.wrapper #maincontent ol {
	margin: 0 0 0 35px;
	padding: 0;
}
.wrapper #maincontent li {
	margin: 0;
	padding: 0;
}
.wrapper #maincontent ul li {
	list-style: square;
}
.wrapper #maincontent ol li {
	list-style: decimal;
}
.wrapper #maincontent li {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper #maincontent li {
	line-height: auto;
	margin: 0;
	padding: 10px 0;
}
.wrapper blockquote {
	font-family: Georgia, serif;
	font-size: 14px;
	color: #333333;
	font-weight: normal;
	font-style: normal;
	line-height: 23px;
	text-decoration: none;
	text-transform: none;
	font-variant: normal;
	text-shadow: 0 0 0 rgba(0,0,0,1);
	border-top: 0 solid #000000;
	border-bottom: 0 solid #000000;
	margin: 0 0 23px;
	padding: 0;
	background: #ffffff;
}
.wrapper a {
	color: #0060FF;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: none;
}
.wrapper a:hover {
	color: #1a55b7;
	font-weight: inherit;
	font-style: inherit;
	text-decoration: underline;
}
#aside-2 {
	display: none;
}
#aside-1 {
	float: right;
	margin: 0 -235px 0 0;
}
#inner {
	margin: 0 235px 0 0;
}

/* Custom CSS */}