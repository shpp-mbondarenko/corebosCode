function contactToOrganizationPopup(fromlink,fldname,MODULE,ID) {
	var BasicSearch = '&query=true&search=true&searchtype=BasicSearch&search_field=accountname&search_text=europe';
	var SpecialSearch = encodeURI(BasicSearch);
	window.open("index.php?module=Accounts&action=Popup&html=Popup_picker&form=vtlibPopupView&forfield="+
		fldname+"&srcmodule="+MODULE+"&forrecord="+ID+
		SpecialSearch,"vtlibui10","width=680,height=602,resizable=0,scrollbars=0,top=150,left=200");
}
