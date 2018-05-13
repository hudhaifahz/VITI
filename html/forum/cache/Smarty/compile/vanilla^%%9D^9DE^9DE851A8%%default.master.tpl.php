<?php /* Smarty version 2.6.29, created on 2017-07-25 07:37:25
         compiled from /var/www/html/forum/themes/bittersweet/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 4, false),array('function', 'home_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 28, false),array('function', 'link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 41, false),array('function', 'logo', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 41, false),array('function', 'searchbox', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 50, false),array('function', 'dashboard_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 52, false),array('function', 'discussions_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 53, false),array('function', 'activity_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 54, false),array('function', 'inbox_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 55, false),array('function', 'custom_menu', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 56, false),array('function', 'profile_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 57, false),array('function', 'signinout_link', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 58, false),array('function', 'breadcrumbs', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 64, false),array('function', 'module', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 70, false),array('function', 'event', '/var/www/html/forum/themes/bittersweet/views/default.master.tpl', 80, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

	
</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">
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

                <!--<?php echo smarty_function_home_link(array(), $this);?>

                
                You can add more of your top-level navigation links like this:

                <a href="#">Store</a>
                <a href="#">Blog</a>
                <a href="#">Contact Us</a>
                
            </div>
        </div>
    </div>-->
    <!--<div class="Banner">
        <div class="Row">-->
            <!--<strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></strong>-->
            <!--
            We've placed this optional advertising space below. Just comment out the line and replace "Advertising Space" with your 728x90 ad banner.
            -->
            <!-- <div class="AdSpace">Advertising Space</div> -->
        <!--</div>
    </div>-->
    <div id="Head">
        <div class="Row">
            <div class="SiteSearch"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
            <ul class="SiteMenu">
                <?php echo smarty_function_dashboard_link(array(), $this);?>

                <?php echo smarty_function_discussions_link(array(), $this);?>

                <?php echo smarty_function_activity_link(array(), $this);?>

                <?php echo smarty_function_inbox_link(array(), $this);?>

                <?php echo smarty_function_custom_menu(array(), $this);?>

                <?php echo smarty_function_profile_link(array(), $this);?>

                <?php echo smarty_function_signinout_link(array(), $this);?>

            </ul>
        </div>
    </div>
    <!--<div class="BreadcrumbsWrapper">
        <div class="Row">
            <?php echo smarty_function_breadcrumbs(array(), $this);?>

        </div>
    </div>-->
    <div id="Body">
        <div class="Row">
            <div class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

                <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
        </div>
    </div>
</div>
<div id="Foot">
        <div class="copyright">© Vancouver International Trade Institute. 2015-2017</div>
</div>
<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>