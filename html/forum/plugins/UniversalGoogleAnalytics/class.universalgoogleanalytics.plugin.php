<?php if (!defined('APPLICATION')) die();

$PluginInfo['UniversalGoogleAnalytics'] = array(
	'Name' => 'Universal Google Analytics',
	'Description' => 'Google Analytics tracking for your forum. Offers outbound link and user-id tracking as well as optional compliance with strict data protection policies.',
	'SettingsUrl' => '/settings/universalgoogleanalytics',
	'SettingsPermission' => 'Garden.Settings.Manage',
	'MobileFriendly' => true,
	'Version' => '0.2',
	'License' => 'MIT',
	'Author' => 'Martin Tschirsich',
	'AuthorEmail' => 'm.tschirsich@gmx.de',
);

class UniversalGoogleAnalyticsPlugin extends Gdn_Plugin {
	public static $ApplicationFolder = 'plugins/UniversalGoogleAnalytics';
	
	public function __construct($Sender='') {
		parent::__construct($Sender, self::$ApplicationFolder);
	}
	
	public function Base_render_before($Sender) {
		if($Sender->MasterView != 'admin') {
			$Sender->Head->addString($this->buildTrackingCode());
		}
	}
	
	public function SettingsController_UniversalGoogleAnalytics_create($Sender) {
		$Sender->permission('Garden.Settings.Manage');
		
		$Sender->Form = new Gdn_Form();
		$Validation = new Gdn_Validation();
		$ConfigurationModel = new Gdn_ConfigurationModel($Validation);
		$ConfigurationModel->setField(array(
			'Plugins.UniversalGoogleAnalytics.TrackingID',
			'Plugins.UniversalGoogleAnalytics.TrackOutbound',
			'Plugins.UniversalGoogleAnalytics.UseUserID',
			'Plugins.UniversalGoogleAnalytics.AnonymizeIP',
			'Plugins.UniversalGoogleAnalytics.UserOptOut'
		));
		$Sender->Form->setModel($ConfigurationModel);
		
		if ($Sender->Form->authenticatedPostBack()) {
			if ($Sender->Form->save() !== false) {
				$Sender->informMessage(sprite('Check', 'InformSprite').T('Your changes have been saved.'), 'Dismissable AutoDismiss HasSprite');
			}
		} else {
			$Sender->Form->setData($ConfigurationModel->Data);
		}
		
		$Sender->addSideMenu();
		$Sender->title(T('Universal Google Analytics Settings'));
		$Sender->render($this->GetView('settings.php'));
	}

	public function setup() {
		saveToConfig('Plugins.UniversalGoogleAnalytics.UseUserID', true);
		saveToConfig('Plugins.UniversalGoogleAnalytics.TrackOutbound', true);
		saveToConfig('Plugins.UniversalGoogleAnalytics.AnonymizeIP', false);
		saveToConfig('Plugins.UniversalGoogleAnalytics.UserOptOut', false);
	}
	
	public function onDisable() {
		removeFromConfig('Plugins.UniversalGoogleAnalytics.TrackOutbound');
		removeFromConfig('Plugins.UniversalGoogleAnalytics.UseUserID');
		removeFromConfig('Plugins.UniversalGoogleAnalytics.TrackingID');
		removeFromConfig('Plugins.UniversalGoogleAnalytics.AnonymizeIP');
		removeFromConfig('Plugins.UniversalGoogleAnalytics.UserOptOut');
	}
	
	public function buildTrackingCode() {		
		$TrackingID = C('Plugins.UniversalGoogleAnalytics.TrackingID');
		$TrackOutbound = C('Plugins.UniversalGoogleAnalytics.TrackOutbound', true);
		$UseUserID = C('Plugins.UniversalGoogleAnalytics.UseUserID', true);
		$AnonymizeIP = C('Plugins.UniversalGoogleAnalytics.AnonymizeIP', false);
		$OptOut = C('Plugins.UniversalGoogleAnalytics.UserOptOut', false);
		
		if ($OptOut) {
			// Add user Opt-out code (see https://developers.google.com/analytics/devguides/collection/analyticsjs/advanced):
			$OptOutCode = "var s='ga-disable-{$TrackingID}';if(document.cookie.indexOf(s+'=true')>-1){window[s]=true;}function gaOptout(){document.cookie=s+'=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';window[s]=true;}";
		} else {
			$OptOutCode = '';
		}
		
		if ($UseUserID) {
			// Add User-ID tracking code (see https://developers.google.com/analytics/devguides/collection/analyticsjs/user-id):
			$Session = Gdn::session();
			if ($Session->isValid()) {
				// $UserID is a unique, persistent, and non-personally identifiable string ID:
				$UserID = md5($Session->UserID + $Session->User->DateFirstVisit);
				$GACode = "ga('create','{$TrackingID}',{'userId':'{$UserID}'});";
			} else {
				$GACode = "ga('create','{$TrackingID}');";
			}
		} else {
			$GACode = "ga('create','{$TrackingID}');";
		}
		
		if ($AnonymizeIP) {
			// Add IP anonymization (see https://developers.google.com/analytics/devguides/collection/analyticsjs/advanced):
			$AnonymizeIPCode = "ga('set','anonymizeIp',true);";
		} else {
			$AnonymizeIPCode = '';
		}
		
		if ($TrackOutbound) {
			// Add event handler to dynamically track clicks on outbound links (see http://www.sitepoint.com/track-outbound-links-google-analytics/):
			$TrackOutboundCode = "jQuery(document).ready(function($){\$('body').on('click',function(e){if(e.isDefaultPrevented()||typeof ga!=='function')return;var l=$(e.target).closest('a');if(l.length!=1||window.location.host==l[0].host)return;e.preventDefault();var h=l[0].href;function f(){document.location=h;}ga('send','event','outbound','click',h,{'hitCallback':f});setTimeout(f,1000);});});";
		} else {
			$TrackOutboundCode = '';
		}
		
		// Build tracking code (see https://developers.google.com/analytics/devguides/collection/analyticsjs):
		return "<script>{$OptOutCode}(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');{$GACode}{$AnonymizeIPCode}ga('send','pageview');{$TrackOutboundCode}</script>";
	}
}