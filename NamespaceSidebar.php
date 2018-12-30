<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'NamespaceSidebar' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['NamespaceSidebar'] = __DIR__ . '/i18n';

	$wgExtensionMessagesFiles['NamespaceSidebarMagic'] = __DIR__ . '/NamespaceSidebar.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for NamespaceSidebar extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the NamespaceSidebar extension requires MediaWiki 1.25+' );
}
