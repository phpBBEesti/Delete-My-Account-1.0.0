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

	'DELETE_MY_ACCOUNT' => 'Kustuta minu kasutajakonto',
	'DELETE_YOUR_ACCOUNT' => 'Kustuta oma kasutajakonto',
	'DELETE_MY_ACCOUNT_TEXT' => 'Seda saate kasutada oma kasutajakonto kustutamiseks. Pärast selle sooritamist kustutatakse kõik teie isiklikud ja privaatsed andmed sellelt lehelt ja te ei saa enam sisse logida.',
	'REALY_DELETE' => 'Ma tõesti soovin oma kasutajakonto kustutada.',
	'UNDERSTAND_DELETE' => 'Mõistan, et seda toimingut ei saa tagasi võtta.',
	'DELETE_MY_POSTS' => 'Kustuta ka minu postitused.',
	'ENTER_PASSWORD' => 'Sisestage oma parool',
	'ENTER_PASSWORD_HERE' => 'sisestage oma parool siia ...',
	'DELETED_USER' => 'Kasutaja %s kustutatud',
	'DELETE_FINAL' => 'Lõplik kinnitus',
	'DELETE_FINAL_CONFIRM' => '<p>Täname, et olite selle foorumi liige. Meil on kahju, et te lahkute.</p><p>Teie taotlus on valideeritud. See on viimane kinnitus. Kas soovite oma kasutajakonto jäädavalt kustutada?</p>',

	'LOG_USER_DELETED' => 'Kasutaja %s (ID %s) kustutas oma konto. ',
	'LOG_POST_REMOVED' => 'Nende postitused eemaldati.',
	'LOG_POST_RETAINED' => 'Nende postitused jäid alles.',
	'LOG_NO_POSTS' => 'Neil puudusid postitused.',

	'REALLY_ERROR' => 'Peate kinnitama, et soovite tõesti oma kasutajakonto kustutada.',
	'UNDERSTAND_ERROR' => 'Peate kinnitama, et mõistate, et seda protsessi ei saa tagasi võtta.',
	'PASSWORD_ERROR' => 'Teie sisestatud parool on vale.',
	'FOUNDER_ERROR' => 'Foorumi asutajad ei saa ise kustutamise protsessi kasutada..',
	'BAD_FORM_KEY_ERROR' => 'Vormi esitamist ei saanud kinnitada.  Palun esitage oma taotlus uuesti.',
	'GOODBYE_ERROR' => 'Teie kasutajakonto on kustutatud.'

));
