<?php
/**
 *
 * Delete My Account. An extension for the phpBB Forum Software package.
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @copyright (c) 2017 BrokenCrust
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

	'ACL_U_DELETE_MY_ACCOUNT_POSTS' => 'Saab kustutada kasutajakonto koos postitustega'

));
