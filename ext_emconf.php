<?php

########################################################################
# Extension Manager/Repository config file for ext "podcast".
#
# Auto generated 30-01-2012 20:08
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Podcast for TYPO3',
	'description' => 'A new Podcast extension for Typo3 from the creator of nbo_podcast. Makes publishing and managing Podcasts a breeze. Out of the box support for HTML5 video and audio, RealURL, automatic feed publishing and much more. See http://noelboss.github.com/Podcast',
	'category' => 'plugin',
	'author' => 'Noel Bossart',
	'author_email' => 'n dot company at me dot com',
	'author_company' => 'noelboss.ch',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.3.4',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-0.0.0',
			'extbase' => '1.3',
			'fluid' => '1.3',
		),
		'conflicts' => array(
			'cbrealurl' => '1.4.1',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:101:{s:21:"ExtensionBuilder.json";s:4:"1453";s:12:"ext_icon.gif";s:4:"f854";s:17:"ext_localconf.php";s:4:"fc02";s:14:"ext_tables.php";s:4:"2b2a";s:14:"ext_tables.sql";s:4:"4942";s:9:"readme.md";s:4:"5184";s:40:"Classes/Controller/PodcastController.php";s:4:"2dd5";s:33:"Classes/Domain/Model/Category.php";s:4:"3ef3";s:32:"Classes/Domain/Model/Episode.php";s:4:"1229";s:31:"Classes/Domain/Model/Person.php";s:4:"aa57";s:32:"Classes/Domain/Model/Podcast.php";s:4:"7137";s:32:"Classes/Domain/Model/Website.php";s:4:"d3b0";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"f18d";s:46:"Classes/Domain/Repository/PersonRepository.php";s:4:"0bc6";s:47:"Classes/Domain/Repository/PodcastRepository.php";s:4:"a19d";s:47:"Classes/Domain/Repository/WebsiteRepository.php";s:4:"973c";s:50:"Classes/Utilities/Backend/EpisodePostProcessor.php";s:4:"f058";s:42:"Classes/Utilities/Backend/PluginWizard.php";s:4:"8a2f";s:56:"Classes/Utilities/Backend/getid3/extension.cache.dbm.php";s:4:"c02c";s:58:"Classes/Utilities/Backend/getid3/extension.cache.mysql.php";s:4:"9c53";s:47:"Classes/Utilities/Backend/getid3/getid3.lib.php";s:4:"b860";s:43:"Classes/Utilities/Backend/getid3/getid3.php";s:4:"64dd";s:55:"Classes/Utilities/Backend/getid3/license.commercial.txt";s:4:"0a3b";s:44:"Classes/Utilities/Backend/getid3/license.txt";s:4:"7e94";s:59:"Classes/Utilities/Backend/getid3/module.audio-video.asf.php";s:4:"e78b";s:60:"Classes/Utilities/Backend/getid3/module.audio-video.bink.php";s:4:"4cf7";s:59:"Classes/Utilities/Backend/getid3/module.audio-video.flv.php";s:4:"3e50";s:64:"Classes/Utilities/Backend/getid3/module.audio-video.matroska.php";s:4:"e1c3";s:60:"Classes/Utilities/Backend/getid3/module.audio-video.mpeg.php";s:4:"469c";s:59:"Classes/Utilities/Backend/getid3/module.audio-video.nsv.php";s:4:"9d2d";s:65:"Classes/Utilities/Backend/getid3/module.audio-video.quicktime.php";s:4:"4e76";s:60:"Classes/Utilities/Backend/getid3/module.audio-video.real.php";s:4:"65de";s:60:"Classes/Utilities/Backend/getid3/module.audio-video.riff.php";s:4:"cbf4";s:59:"Classes/Utilities/Backend/getid3/module.audio-video.swf.php";s:4:"c807";s:52:"Classes/Utilities/Backend/getid3/module.audio.aa.php";s:4:"a6f0";s:53:"Classes/Utilities/Backend/getid3/module.audio.aac.php";s:4:"74c0";s:53:"Classes/Utilities/Backend/getid3/module.audio.ac3.php";s:4:"3a23";s:52:"Classes/Utilities/Backend/getid3/module.audio.au.php";s:4:"c091";s:53:"Classes/Utilities/Backend/getid3/module.audio.avr.php";s:4:"0ad2";s:54:"Classes/Utilities/Backend/getid3/module.audio.bonk.php";s:4:"e8cf";s:53:"Classes/Utilities/Backend/getid3/module.audio.dss.php";s:4:"5c1b";s:53:"Classes/Utilities/Backend/getid3/module.audio.dts.php";s:4:"1457";s:54:"Classes/Utilities/Backend/getid3/module.audio.flac.php";s:4:"48f4";s:52:"Classes/Utilities/Backend/getid3/module.audio.la.php";s:4:"bbdd";s:54:"Classes/Utilities/Backend/getid3/module.audio.lpac.php";s:4:"3de1";s:54:"Classes/Utilities/Backend/getid3/module.audio.midi.php";s:4:"1e57";s:53:"Classes/Utilities/Backend/getid3/module.audio.mod.php";s:4:"a9ae";s:56:"Classes/Utilities/Backend/getid3/module.audio.monkey.php";s:4:"e8a3";s:53:"Classes/Utilities/Backend/getid3/module.audio.mp3.php";s:4:"f6ce";s:53:"Classes/Utilities/Backend/getid3/module.audio.mpc.php";s:4:"9c92";s:53:"Classes/Utilities/Backend/getid3/module.audio.ogg.php";s:4:"0b9e";s:59:"Classes/Utilities/Backend/getid3/module.audio.optimfrog.php";s:4:"dbdc";s:54:"Classes/Utilities/Backend/getid3/module.audio.rkau.php";s:4:"3282";s:57:"Classes/Utilities/Backend/getid3/module.audio.shorten.php";s:4:"976c";s:53:"Classes/Utilities/Backend/getid3/module.audio.tta.php";s:4:"b5ed";s:53:"Classes/Utilities/Backend/getid3/module.audio.voc.php";s:4:"b7d4";s:53:"Classes/Utilities/Backend/getid3/module.audio.vqf.php";s:4:"aa6f";s:57:"Classes/Utilities/Backend/getid3/module.audio.wavpack.php";s:4:"af6e";s:54:"Classes/Utilities/Backend/getid3/module.tag.apetag.php";s:4:"c9d9";s:53:"Classes/Utilities/Backend/getid3/module.tag.id3v1.php";s:4:"373f";s:53:"Classes/Utilities/Backend/getid3/module.tag.id3v2.php";s:4:"b47b";s:55:"Classes/Utilities/Backend/getid3/module.tag.lyrics3.php";s:4:"9a37";s:51:"Classes/Utilities/Backend/getid3/module.tag.xmp.php";s:4:"e657";s:42:"Classes/ViewHelpers/DurationViewHelper.php";s:4:"38bf";s:36:"Classes/ViewHelpers/IfViewHelper.php";s:4:"f10b";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"7a47";s:33:"Configuration/RealURL/default.php";s:4:"d919";s:30:"Configuration/TCA/Category.php";s:4:"818d";s:29:"Configuration/TCA/Episode.php";s:4:"6b95";s:28:"Configuration/TCA/Person.php";s:4:"152b";s:29:"Configuration/TCA/Podcast.php";s:4:"d152";s:29:"Configuration/TCA/Website.php";s:4:"f382";s:38:"Configuration/TypoScript/constants.txt";s:4:"2127";s:34:"Configuration/TypoScript/setup.txt";s:4:"8b7e";s:40:"Resources/Private/Language/locallang.xml";s:4:"4a5d";s:77:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_category.xml";s:4:"2102";s:76:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_episode.xml";s:4:"9dad";s:75:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_person.xml";s:4:"62a5";s:76:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_podcast.xml";s:4:"94a5";s:80:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_subcategory.xml";s:4:"ce01";s:76:"Resources/Private/Language/locallang_csh_tx_podcast_domain_model_website.xml";s:4:"cb93";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"d08b";s:38:"Resources/Private/Layouts/default.html";s:4:"b60a";s:37:"Resources/Private/Layouts/default.xml";s:4:"68ef";s:39:"Resources/Private/Partials/episode.html";s:4:"46b4";s:38:"Resources/Private/Partials/episode.xml";s:4:"bd5a";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:45:"Resources/Private/Templates/Podcast/list.html";s:4:"1379";s:45:"Resources/Private/Templates/Podcast/show.html";s:4:"18f7";s:44:"Resources/Private/Templates/Podcast/show.xml";s:4:"5cb4";s:36:"Resources/Public/Icons/be_wizard.gif";s:4:"587f";s:34:"Resources/Public/Icons/podcast.jpg";s:4:"f756";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:59:"Resources/Public/Icons/tx_podcast_domain_model_category.gif";s:4:"9d05";s:58:"Resources/Public/Icons/tx_podcast_domain_model_episode.gif";s:4:"3170";s:57:"Resources/Public/Icons/tx_podcast_domain_model_person.gif";s:4:"7e01";s:58:"Resources/Public/Icons/tx_podcast_domain_model_podcast.gif";s:4:"89bc";s:62:"Resources/Public/Icons/tx_podcast_domain_model_subcategory.gif";s:4:"9d05";s:58:"Resources/Public/Icons/tx_podcast_domain_model_website.gif";s:4:"78d4";s:35:"Resources/Public/Styles/default.css";s:4:"ef13";s:14:"doc/manual.sxw";s:4:"aaaf";}',
);

?>