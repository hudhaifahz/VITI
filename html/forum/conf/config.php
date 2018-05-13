<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3.1';

// Database
$Configuration['Database']['Name'] = 'forum';
$Configuration['Database']['Host'] = 'viti-blog.cepwsg2mdk3q.us-west-2.rds.amazonaws.com:3308';
$Configuration['Database']['User'] = 'viticaz';
$Configuration['Database']['Password'] = 'vitibitcoin';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = false;
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['UniversalGoogleAnalytics'] = true;
$Configuration['EnabledPlugins']['Facebook'] = false;
$Configuration['EnabledPlugins']['jsconnect'] = true;
$Configuration['EnabledPlugins']['VanillaStats'] = true;
$Configuration['EnabledPlugins']['Quotes'] = true;
$Configuration['EnabledPlugins']['Anonymouse'] = false;
$Configuration['EnabledPlugins']['ButtonBar'] = true;
$Configuration['EnabledPlugins']['IndexPhotos'] = false;
$Configuration['EnabledPlugins']['Flagging'] = true;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;
$Configuration['EnabledPlugins']['SplitMerge'] = true;
$Configuration['EnabledPlugins']['Tagging'] = false;
$Configuration['EnabledPlugins']['QnA'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Vancouver International Trade Institute';
$Configuration['Garden']['Cookie']['Salt'] = 'CtjCJp3A5lmAAvkY';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Approval';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LdqgSgUAAAAANEW5ucXx5ZhGexxIHIlDrYu5TmT';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LdqgSgUAAAAACh5yz2_6d5PjJ44bbJEudUwAicg';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['SendConnectEmail'] = false;
$Configuration['Garden']['Email']['SupportName'] = 'VITI Forums';
$Configuration['Garden']['Email']['Format'] = 'html';
$Configuration['Garden']['Email']['SupportAddress'] = 'info@viti.ca';
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp.gmail.com';
$Configuration['Garden']['Email']['SmtpUser'] = 'info@viti.ca';
$Configuration['Garden']['Email']['SmtpPassword'] = 'vitibitcoin';
$Configuration['Garden']['Email']['SmtpPort'] = '465';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'ssl';
$Configuration['Garden']['Email']['OmitToName'] = '1';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3.1';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['InstallationID'] = '535D-F6B95CB2-B7FA960D';
$Configuration['Garden']['InstallationSecret'] = 'aedd41393d05001b11b865ec30afbf1dc2c073d3';
$Configuration['Garden']['HomepageTitle'] = 'Forums | Vancouver International Trade Institute';
$Configuration['Garden']['Description'] = 'Vancouver International Trade Institute is committed to the decentralization of knowledge and expertise to allow SMEs and communities greater access to global trade. Have a question concerning laws, business or culture? Looking for a local connection in a foreign country? Ask, learn and connect here!';
$Configuration['Garden']['FavIcon'] = 'favicon_c01ac03ad72b2bbb.ico';
$Configuration['Garden']['Theme'] = 'bittersweet';
$Configuration['Garden']['MobileTheme'] = 'bittersweet';
$Configuration['Garden']['EmailTemplate']['Image'] = 'SMS872COSWE5.jpg';
$Configuration['Garden']['EmailTemplate']['TextColor'] = '#333333';
$Configuration['Garden']['EmailTemplate']['BackgroundColor'] = '#eeeeee';
$Configuration['Garden']['EmailTemplate']['ContainerBackgroundColor'] = '#ffffff';
$Configuration['Garden']['EmailTemplate']['ButtonTextColor'] = '#ffffff';
$Configuration['Garden']['EmailTemplate']['ButtonBackgroundColor'] = '#38abe3';
$Configuration['Garden']['Embed']['Allow'] = true;
$Configuration['Garden']['DefaultAvatar'] = 'defaultavatar/3Q9MNCIAIDCA.jpg';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['UniversalGoogleAnalytics']['UseUserID'] = '1';
$Configuration['Plugins']['UniversalGoogleAnalytics']['TrackOutbound'] = '1';
$Configuration['Plugins']['UniversalGoogleAnalytics']['AnonymizeIP'] = false;
$Configuration['Plugins']['UniversalGoogleAnalytics']['UserOptOut'] = false;
$Configuration['Plugins']['UniversalGoogleAnalytics']['TrackingID'] = 'UA-69860010-1';
$Configuration['Plugins']['Facebook']['ApplicationID'] = '1657276987666766';
$Configuration['Plugins']['Facebook']['Secret'] = 'c4771c5cc0e8f97d7e1d5956b81dfcba';
$Configuration['Plugins']['Facebook']['UseFacebookNames'] = false;
$Configuration['Plugins']['Facebook']['SocialSignIn'] = '1';
$Configuration['Plugins']['Facebook']['SocialReactions'] = false;
$Configuration['Plugins']['Facebook']['SocialSharing'] = false;
$Configuration['Plugins']['Anonymouse']['AnonymousUserID'] = 15;

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3.1';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = true;
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = false;
$Configuration['Vanilla']['Categories']['HideModule'] = false;
$Configuration['Vanilla']['DefaultNewButton'] = 'post/question';

// Last edited by viticaz (50.92.117.173)2018-05-02 00:03:03