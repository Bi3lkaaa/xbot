<?php
	/********************************

	Author: Tymoteusz `Razor Meister` Bartnik

	Contact: battnik90@gmail.com

	English Language File

	********************************/

	$language['which'] = 'eng';


	$language['core'][0] = 'TeamSpeak3 bot by';
	$language['core'][1] = 'Version';
	$language['core'][2] = 'Loading functions';
	$language['core'][3] = 'Loading config';
	$language['core'][4] = 'Loading TeamSpeak3 Admin Class';
	$language['core'][5] = 'Successfully loaded: ';
	$language['core']['plugins'][1] = ' plugin';
	$language['core']['plugins'][2] = ' plugins';
	$language['core']['events'][1] = ' event';
	$language['core']['events'][2] = ' events';
	$language['core']['misconfigured'] = ' misconfigured';
	$language['core']['console'] = 'Console:';


	$language['logs']['core']['error']['login'] = 'Xbot could not login to server admin query';
	$language['logs']['core']['error']['port'] = 'Xbot could not get through the specified port';
	$language['logs']['core']['error']['bot_name'] = 'Xbot could not change his nickname';
	$language['logs']['core']['error']['default_channel'] = 'Xbot could not change the channel';
	$language['logs']['core']['error']['bad_instance'] = 'The wrong instance was selected!';
	$language['logs']['core']['error']['php_module'] = 'Package PHP not found: ';
	$language['logs']['start'] = 'Bot has been started';
	$language['logs']['cant_connect'] = 'Bot cant connect to the server!';
	$language['logs']['functions'] = 'Performing function: ';
	$language['logs']['groups_security']['ban'] = ' was banned for having rang: ';
	$language['logs']['groups_security']['kick'] = ' was kicked for having rang: ';
	$language['logs']['groups_security']['nothing'] = " was poked for having rang: ";

	$language['function']['down_desc'] = "[right][size=7][i]".VERSION."[/i][/size][hr]\n[url=ts3server://xbot-ts3.pl][img]https://i.imgur.com/f6FyS6c.png[/img][/url][/right]";	

	$language['function']['get_vip_channel']['message'] = "You just received a vip channel number: ";
	$language['function']['get_vip_channel']['desc_owner'] = "Channel owner: ";
	$language['function']['get_vip_channel']['desc_date'] = "Created:  ";
	$language['function']['get_vip_channel']['error_people'] = " Not enough people to get a VIP channel";
	$language['function']['get_vip_channel']['error_owner'] = " No channel owner. Nickname has to contain: ";
	$language['function']['get_vip_channel']['error_ip'] = " Someone already has the same IP address";
	$language['function']['get_vip_channel']['error_has_vip'] = " Someone already has a VIP group";
	$language['function']['get_vip_channel']['error_not_empty'] = " The chosen channel is already taken";
	$language['function']['get_vip_channel']['succes'] = " VIP channel has been given to: ";

	$language['function']['warning_ban']['user_banned'] = "User was banned: ";

	$language['function']['twitch_yt']['info'] = "Informations: ";
	$language['function']['twitch_yt']['subs'] = "Subscribers: ";

	$language['function']['admins_meetin']['moved'] = " admins were moved to the meeting channel.";
	$language['admins_meeting']['information'] = " , remember about coming to Administration meeting";

	$language['function']['groups_assigner']['has_rang'] = "You already have a registered group!";
	$language['function']['groups_assigner']['received_rang'] = "You have just received a registered group!";

	$language['function']['get_private_channel']['hasnt_rang'] = "You don't have register rang!";
	$language['function']['get_private_channel']['has_channel'] = "You already own a channel!";
	$language['function']['get_private_channel']['get_channel'] = "You have just received a private channel!";
	$language['function']['get_private_channel']['no_empty'] = "No empty channels currently!";
	$language['function']['get_private_channel']['channel_name'] = "Private channel - ";
	$language['function']['get_private_channel']['created'] = "Created: ";
	$language['function']['get_private_channel']['sub_channel'] = " Sub channel";

	$language['function']['poke_admins']['wants_help'] = "wants your help!";

	$language['function']['one_day'] = "day";
	$language['function']['2_days'] = "days";
	$language['function']['other_days'] = "days";
	$language['function']['one_hour'] = "hour";
	$language['function']['2_hours'] = "hours";
	$language['function']['other_hours'] = "hours";
	$language['function']['one_minute'] = "minute";
	$language['function']['2_minutes'] = "minutes";
	$language['function']['other_minutes'] = "minutes";
	$language['function']['seconds'] = "seconds";
	
	$language['function']['ban_list'] = array
	(
		'header' => "Ban list.\nTotal: ",
		'permament' => "permamently",
		'user' => "User",
		'time' => "Duration",
		'reason' => "Reason",
		'invoker' => "Creator",
		'date' => "Created",
	);

	$language['function']['admins_time_spent']['time_spent'] = '[center][B][size=11]Admin:[/B] [size=11][client][/size][/center][b][size=10] Sp??dzony czas: [/size][/b]\n\n [size=9]W dniu dzisiejszym: [B][today][/B].[/size]\n [size=9]W obecnym tygodniu: [B][weekly][/B].[/size]\n [size=9]W obecnym miesi??cu: [B][monthly][/B].[/size]\n [size=9]????czny sp??dzony czas: [B][total][/B][/size]';

	
	$language['function']['channels_guard']['private_channel'] = "Private channel number: ";
	$language['function']['channels_guard']['empty'] = " [EMPTY]";
	$language['function']['channels_guard']['how_to_get'] = "To get it go to the adequate channel";

?>