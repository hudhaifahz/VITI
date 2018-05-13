<?php /* Smarty version 2.6.26, created on 2017-11-01 04:57:23
         compiled from file:/var/www/html/journals/plugins/generic/googleAnalytics/pageTagAnalytics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/journals/plugins/generic/googleAnalytics/pageTagAnalytics.tpl', 19, false),)), $this); ?>
<!-- Google Analytics -->
<?php echo '
<script>
(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

ga(\'create\', \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['googleAnalyticsSiteId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '\', \'auto\');
ga(\'send\', \'pageview\');

</script>
'; ?>

<!-- End Google Analytics -->