function initWysiwyg(toolbar, textarea)
{

var wysihtml5Toolbar = '<div class="wysiHtml5_toolbar"  id="toolbar_' + toolbar + '" style="display: none;">'+
'<a data-wysihtml5-command="bold" class="fa-bold"></a>'+
'<a data-wysihtml5-command="italic" class="fa-italic"></a>'+
'<a data-wysihtml5-command="createLink" class="fa-link"></a>'+
'<div data-wysihtml5-dialog="createLink" style="display: none;">'+
'<label> Link: '+
'      <input data-wysihtml5-dialog-field="href" value="http://" class="text">'+
'    </label>'+
'    <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>'+
'  </div>'+
'  <a data-wysihtml5-action="change_view" title="Show HTML" class="action">&#xf121;</a>'+
'</div>';

	var iDiv = document.createElement("div");
		iDiv.innerHTML=wysihtml5Toolbar;
		document.getElementById(toolbar).appendChild(iDiv);


//	document.getElementById(toolbar).appendChild(wysihtml5Toolbar);

	var editor = new wysihtml5.Editor(textarea, { // id of textarea element
		  toolbar:      "toolbar_"+toolbar, // id of toolbar element
		  parserRules:  wysihtml5ParserRules, // defined in parser rules set
		  stylesheets: [""]
		});
}
