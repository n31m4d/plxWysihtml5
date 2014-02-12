<?php
/**
 * Plugin plxWysihtml5
 *
 * @package	plxWysihtml5
 * @version	0.2
 * @date	12/02/2014
 * @author	Neimad
 **/
class plxWysihtml5 extends plxPlugin {
	public function __construct($default_lang) {
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);

		# D?clarations des hooks
		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		$this->addHook('AdminFootEndBody', 'AdminFootEndBody');
		$this->addHook('AdminArticleTop', 'AdminArticleTop');
	}
	public function AdminTopEndHead() {
		echo '<script src="'.PLX_PLUGINS.'plxWysihtml5/lib/advanced.js"></script>'."\n";
		echo '<script src="'.PLX_PLUGINS.'plxWysihtml5/lib/wysihtml5-0.3.0.min.js"></script>'."\n";
		echo '<script src="'.PLX_PLUGINS.'plxWysihtml5/lib/init_toolbar.js"></script>'."\n";
		echo '<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'plxWysihtml5/css/plxWysihtml5.css" media="screen" />'."\n";
		echo '<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'plxWysihtml5/css/font-awesome.min.css" media="screen" />'."\n";
	}
	public function AdminFootEndBody() {
		echo '<script>'."\n";
		echo 'initWysiwyg("p_chapo","id_chapo");'."\n";
		echo 'initWysiwyg("p_content","id_content");'."\n";
		echo '</script>'."\n";
	}
}
?>
