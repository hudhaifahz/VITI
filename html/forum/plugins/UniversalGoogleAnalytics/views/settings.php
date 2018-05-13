<?php if (!defined('APPLICATION')) exit(); ?>
<h1><?php echo T($this->Data['Title']); ?></h1>
<?php
echo $this->Form->Open();
echo $this->Form->Errors();
?>
<ul>
	<li>
	<?php echo $this->Form->label('Tracking ID', 'Plugins.UniversalGoogleAnalytics.TrackingID'); ?>
	<p>Your <a href="https://www.google.com/analytics/web/#home/">Google Universal Analytics</a> Tracking ID.</p>
	<?php echo $this->Form->Textbox('Plugins.UniversalGoogleAnalytics.TrackingID', array('placeholder' => 'UA-XXXXXXXX-X')); ?>
	</li>
	<li>
	<?php echo $this->Form->Label(T('Tracking of Outbound Links')); ?>
	<p>If enabled, your outbound clicks will appear in your Google Analytics Events reports.</p>
	<?php echo $this->Form->Checkbox('Plugins.UniversalGoogleAnalytics.TrackOutbound', T('Track outbound links?')); ?>
	</li>
	<li>
	<?php echo $this->Form->Label(T('Tracking via User-ID')); ?>
	<div class=""><p>If enabled, each logged-in user is considered to be a unique user in Google Analytics, so you get a more accurate user count in your reports.</p>
	<?php echo $this->Form->Checkbox('Plugins.UniversalGoogleAnalytics.UseUserID', T('Enable tracking via User-ID?')); ?>
	<p><small><strong>Note:</strong> Recommendations from local data protection authorities may prevent site owners from enabling this feature.</small></p>
	</li>
	<li>
	<?php echo $this->Form->Label(T('IP Address Anonymization')); ?>
	<p>If enabled, Google Analytics anonymizes the information sent by the tracker objects by removing the last octet of the IP address prior to its storage. Note that this will slightly reduce the accuracy of geographic reporting.</p>
	<?php echo $this->Form->Checkbox('Plugins.UniversalGoogleAnalytics.AnonymizeIP', T('Anonymize IP addresses?')); ?>
	<p><small><strong>Note:</strong> This feature is designed to help site owners comply with their own privacy policies or, in some countries, recommendations from local data protection authorities, which may prevent the storage of full IP address information.</small></p>
	</li>
	<li>
	<?php echo $this->Form->Label(T('User Opt-out')); ?>
	<p>If enabled, your visitors can opt-out of Google Analytics tracking through the following link that can be placed anywhere on your site: <i>&lt;a href=&quot;javascript:gaOptout()&quot;&gt;Click here to opt-out of Google Analytics&lt;/a&gt;</i>.</p>
	<?php echo $this->Form->Checkbox('Plugins.UniversalGoogleAnalytics.UserOptOut', 'Provide user opt-out?'); ?>
	<p><small><strong>Note:</strong> This feature is designed to help site owners comply with their own privacy policies or, in some countries, strict data protection laws which require an opt-out feature to be included in your site's privacy policy.</small></p>
	</li>
</ul>
<?php echo $this->Form->Close('Save'); ?>	

<div class="Info">
	<p>Do you have questions or feedback? Please visit the <a href="http://vanillaforums.org/addon/universalgoogleanalytics-plugin">official plugin site</a>.</p>
	<p>Do you want to support the plugin developer? A small donation is always welcome: <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZMYCC6QNTAVRG" target="_blank"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate" style="vertical-align: middle;"></a></p>
</div>