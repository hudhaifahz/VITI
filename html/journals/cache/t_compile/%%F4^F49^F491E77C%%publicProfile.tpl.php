<?php /* Smarty version 2.6.26, created on 2017-11-25 15:25:46
         compiled from user/publicProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/publicProfile.tpl', 13, false),array('function', 'translate', 'user/publicProfile.tpl', 19, false),array('function', 'icon', 'user/publicProfile.tpl', 29, false),array('modifier', 'assign', 'user/publicProfile.tpl', 13, false),array('modifier', 'escape', 'user/publicProfile.tpl', 19, false),array('modifier', 'to_array', 'user/publicProfile.tpl', 28, false),array('modifier', 'nl2br', 'user/publicProfile.tpl', 40, false),array('modifier', 'strip_unsafe_html', 'user/publicProfile.tpl', 51, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.profile.publicProfile"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'profile'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="profilePicContent" style="float: right;">
	<?php $this->assign('profileImage', $this->_tpl_vars['user']->getSetting('profileImage')); ?>
	<?php if ($this->_tpl_vars['profileImage']): ?>
		<img height="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.profileImage"), $this);?>
" src="<?php echo $this->_tpl_vars['sitePublicFilesDir']; ?>
/<?php echo $this->_tpl_vars['profileImage']['uploadName']; ?>
" />
	<?php endif; ?>
</div>

<div id="mainContent">

<h4>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

	<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'email','to' => ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'mailUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'mailUrl'));?>

		<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['mailUrl']), $this);?>

	<?php endif; ?>
</h4>

<table class="listing" width="100%">
	<?php if ($this->_tpl_vars['user']->getLocalizedAffiliation()): ?>
		<tr valign="top">
			<td class="label" width="20%">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation"), $this);?>

			</td>
			<td class="data" width="80%">
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['user']->getLocalizedBiography()): ?>
		<tr valign="top">
			<td class="label">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography"), $this);?>

			</td>
			<td class="data">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedBiography())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

			</td>
		</tr>
	<?php endif; ?></table>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
