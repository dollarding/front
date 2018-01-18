/*$(document).ready(function() {

	$.urlParam = function(name){
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		if (results==null){
		   return null;
		}
		else{
		   return results[1] || 0;
		}
	}

	function loadJS(file) {
		var jsElm = document.createElement("script");
		jsElm.type = "application/javascript";
		jsElm.src = file;

		$("body").prepend(jsElm);
	}

	if ($.urlParam("lang") == "en") {
		loadJS("/languages/lang.en.js");
		$("#lang-en").css("font-weight", "bolder");
	} else if ($.urlParam("lang") == "hr") {
		loadJS("js/lang.hr.js");
		$("#lang-hr").css("font-weight", "bolder");
	} else {
		loadJS("js/lang.sl.js");
		$("#lang-sl").css("font-weight", "bolder");
	}



});
*/

var arrayLang = {

   'greeting' : 'Hello USER!',
   'itemnotfound' : 'Thid '
};

$(function(){
  $('.translate').click(function(){
    if($(this).attr('id')=='he')
      var lang = he;
      else
            var lang = en;
    $('.lang').each(function(index, element){
        $(this).text(lang[$(this).attr('key')])
    });
  });
});
