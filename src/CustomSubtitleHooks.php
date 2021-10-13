<?php
class CustomSubtitleHooks {
	// Enregistrement et rendu des fonctions de rappel (callbacks) avec l'analyseur syntaxique
	public static function onParserFirstCallInit( Parser $parser ) {

		// Créer une fonction d'accroche en associant le mot magique "subtitle" avec renderSubtitle()
		$parser->setFunctionHook( 'subtitle', [ self::class, 'renderSubtitle' ] );
	}

	// Rendu du résultat de {{#subtitle:}}.
	public static function renderSubtitle( Parser $parser, $subtitleText ) {
		global $wgOut;

		// Put the subtitle in the tagline
		$parser->getOutput()->updateCacheExpiry( 0 );
		$wgOut->addSubtitle( $parser->recursiveTagParse( $subtitleText ) );

		// Replace this magic word by a blank in the resulting wikitext
		return $parser->insertStripItem( "", $parser->getStripState() );
	 }
}
