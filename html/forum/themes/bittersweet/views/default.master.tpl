<!DOCTYPE html>
<html>
<head>
    {asset name="Head"}
	
</head>
<body id="{$BodyID}" class="{$BodyClass}">
<div id="wrap">
	<div id="main"></div>
	<div id="header">

<div class="w-nav navbar">
    <div class="w-container nav-container">
      <div class="w-clearfix div1"><a class="w-button brand-title w--current" href="https://viti.ca/">VANCOUVER&nbsp;<br>INTERNATIONAL<br>TRADE<br>INSTITUTE</a>
      </div>
      <nav class="w-nav-menu open-nav" role="navigation"><a class="w-nav-link about-link" href="https://viti.ca/about.html" style="max-width: 940px;">ABOUT</a><a class="w-nav-link about-link" href="https://viti.ca/journals/" style="max-width: 940px;">JOURNALS</a><a class="w-nav-link about-link" href="https://viti.ca/blog/" style="max-width: 940px;">BLOG</a><a class="w-nav-link about-link" href="https://viti.ca/forum" style="max-width: 940px;">FORUM</a><a class="w-nav-link about-link" href="https://viti.ca/events.html" style="max-width: 940px;">EVENTS</a><a class="w-nav-link about-link" href="https://viti.ca/#Contact" style="max-width: 940px;">CONTACT</a>
      </nav>
      <div class="w-nav-button menu-button">
        <div class="w-icon-nav-menu icon"></div>
      </div>
    </div>
</div>
</div>
    <!--<div class="Top">
        <div class="Row">
            <div class="TopMenu">-->

                <!--{home_link}
                
                You can add more of your top-level navigation links like this:

                <a href="#">Store</a>
                <a href="#">Blog</a>
                <a href="#">Contact Us</a>
                
            </div>
        </div>
    </div>-->
    <!--<div class="Banner">
        <div class="Row">-->
            <!--<strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>-->
            <!--
            We've placed this optional advertising space below. Just comment out the line and replace "Advertising Space" with your 728x90 ad banner.
            -->
            <!-- <div class="AdSpace">Advertising Space</div> -->
        <!--</div>
    </div>-->
    <div id="Head">
        <div class="Row">
            <div class="SiteSearch">{searchbox}</div>
            <ul class="SiteMenu">
                {dashboard_link}
                {discussions_link}
                {activity_link}
                {inbox_link}
                {custom_menu}
                {profile_link}
                {signinout_link}
            </ul>
        </div>
    </div>
    <!--<div class="BreadcrumbsWrapper">
        <div class="Row">
            {breadcrumbs}
        </div>
    </div>-->
    <div id="Body">
        <div class="Row">
            <div class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
        </div>
    </div>
</div>
<div id="Foot">
        <div class="copyright">© Vancouver International Trade Institute. 2015-2017</div>
</div>
{event name="AfterBody"}
</body>
</html>
