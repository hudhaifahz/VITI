<?php /* Smarty version 2.6.26, created on 2017-11-01 02:39:11
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/footer.tpl', 12, false),array('function', 'get_debug_info', 'core:common/footer.tpl', 21, false),)), $this); ?>
<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>

<?php endif; ?>
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
<div class="w-section footer-section">
    <div class="copyright">© Vancouver International Trade Institute. 2015-2017</div>
</div>
<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
</body>
</html>