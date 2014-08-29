<?php

namespace WikimediaBadges;

use OutputPage;
use Skin;
use Wikibase\Settings;

/**
 * File defining the hook handlers for the WikimediaBadges extension.
 *
 * @since 0.1
 *
 * @license GNU GPL v2+
 * @author Bene* < benestar.wikimedia@gmail.com >
 */
final class Hooks {

	/**
	 * Handler for the BeforePageDisplay hook
	 *
	 * @since 0.1
	 *
	 * @param OutputPage $out
	 * @param Skin $skin
	 *
	 * @return bool
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		$skinName = $skin->getSkinName();
		if ( $skinName === 'cologneblue' ) {
			$out->addModules( 'wikimediaBadges.cologneblue' );
		} else {
			$out->addModules( 'wikimediaBadges.default' );
		}
		return true;
	}

}
