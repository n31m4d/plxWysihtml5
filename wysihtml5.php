<?php
/**
 * Plugin wysihtml5
 *
 * @package	Wysihtml5
 * @version	0.1
 * @date	09/02/2014
 * @author	Neimad
 **/
class wysihtml5 extends plxPlugin {
	public function __construct($default_lang) {
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);

		# D?clarations des hooks
		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		$this->addHook('AdminFootEndBody', 'AdminFootEndBody');
		$this->addHook('AdminArticleTop', 'AdminArticleTop');
	}
	public function AdminTopEndHead() {
		echo '<script src="'.PLX_PLUGINS.'wysihtml5/lib/advanced.js"></script>'."\n";
		echo '<script src="'.PLX_PLUGINS.'wysihtml5/lib/wysihtml5-0.3.0.min.js"></script>'."\n";
	}
	public function AdminArticleTop() {
		echo '<!-- wysihtml5 plugin -->'."\n";
		echo '<div id="wysihtml5-toolbar" style="display: none;">'."\n";
		echo '  <a data-wysihtml5-command="bold">bold</a>'."\n";
		echo '  <a data-wysihtml5-command="italic">italic</a>'."\n";

		echo '  <!-- Some wysihtml5 commands like \'createLink\' require extra paramaters specified by the user (eg. href) -->'."\n";
		echo '  <a data-wysihtml5-command="createLink">insert link</a>'."\n";
		echo '  <div data-wysihtml5-dialog="createLink" style="display: none;">'."\n";
		echo '    <label>'."\n";
		echo '      Link:'."\n";
		echo '      <input data-wysihtml5-dialog-field="href" value="http://" class="text">'."\n";
		echo '    </label>'."\n";
		echo '    <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>'."\n";
		echo '  </div>'."\n";
		echo '  <a data-wysihtml5-action="change_view" title="Show HTML" class="action">Show HTML</a>'."\n";
		echo '</div>'."\n";
	}
	public function AdminFootEndBody() {
		echo '<script>'."\n";
		echo '	var editor = new wysihtml5.Editor("id_content", { // id of textarea element'."\n";
		echo '	  toolbar:      "wysihtml5-toolbar", // id of toolbar element'."\n";
		echo '	  parserRules:  wysihtml5ParserRules, // defined in parser rules set'."\n"; 
		echo '	  stylesheets: [""]'."\n";
		echo '	});'."\n";
		echo '</script>'."\n";
	}
}
?>
