(function (window, document) {
    "use strict";
    var jQuery, $;

    function loadScript(url, callback) {
        var scriptTag = document.createElement('script');
        scriptTag.setAttribute("type", "text/javascript");
        scriptTag.setAttribute("src", url);
        if (typeof callback !== "undefined") {
            if (scriptTag.readyState) {
                /* For old versions of IE */
                scriptTag.onreadystatechange = function () {
                    if (this.readyState === 'complete' || this.readyState === 'loaded') {
                        callback();
                    }
                };
            } else {
                scriptTag.onload = callback;
            }
        }
        (document.getElementsByTagName("head")[0] || document.documentElement).insertBefore(scriptTag, document.getElementById("scriptForBenefits"));
    }


    /* Load jQuery */
    loadScript("http://code.jquery.com/jquery-1.12.0.min.js", function () {
        /* Restore $ and window.jQuery to their previous values and store the
         new jQuery in our local jQuery variables. */
        $ = jQuery = window.jQuery.noConflict(true);

        /* adding script for benefits */

        $(document).ready(function () {

            var allCategories;

            $.ajax({
                url: 'http://ec2-34-251-180-226.eu-west-1.compute.amazonaws.com/api/adWeb/actions/getCategoriesKeywords',
                dataType: 'json',
                async: false,
		headers: {'X-Alt-Referer': document.location.href },
                success: function (data) {
                    allCategories = data;
                },
                error: function (e) {
                },
                timeout: 15000
            });

            var contentKeywords = $("meta[name='keywords']").attr('content');
            var contentDescription = $("meta[name='description']").attr('content');
            var allContentBody = $('body').text();
            var allContent = contentKeywords + ' ' + contentDescription + ' ' + allContentBody;
            allContent = allContent.replace(/\s{2,}/g, ' ');
            allContent = allContent.toLowerCase();

            if (allCategories.categories) {
                for (var cat = 0; cat < allCategories.categories.length; cat++) {
                    var categoryArray = allCategories.categories[cat].keywords;
                    if (!categoryArray.length) {
                        allCategories.categories[cat].counterWords = 0;
                        continue;
                    }

                    var counterWords = 0;
                    $.each(categoryArray, function (index, value) {
                        var pos = 0;
                        var target = value;
                        target = target.toLowerCase();
                        while (true) {
                            var foundPos = allContent.indexOf(target, pos);
                            if (foundPos == -1)
                                break;
                            counterWords++;
                            pos = foundPos + 1;
                        }
                        allCategories.categories[cat].counterWords = counterWords;
                    });

                }

                var sortRes = allCategories.categories.sort(function (obj1, obj2) {
                    return obj2.counterWords - obj1.counterWords;
                });

                var sortRes2el = sortRes.slice(0, 2);

                var postObject = {
                    AdWebId: allCategories.AdWebId,
                    categoryIdFirst: sortRes2el[0]._id,
                    keywordRatioFirst: sortRes2el[0].counterWords,
                    categoryIdSecond: sortRes2el[1]._id,
                    keywordRatioSecond: sortRes2el[1].counterWords
                };
                postObject = JSON.stringify(postObject);

                var advertising;
                $.ajax({
                    type: "POST",
                    url: "http://ec2-34-251-180-226.eu-west-1.compute.amazonaws.com/api/adWeb/actions/detectCategory",
                    data: postObject,
                    dataType: "json",
                    contentType: 'application/json',
                    async: false,
                    success: function (data) {
                        advertising = data;
                    },
                    error: function (e) {
                    },
                    timeout: 15000
                });

                if (advertising) {
                    var advertisingLink = 'http://ec2-34-251-180-226.eu-west-1.compute.amazonaws.com/api/adWeb/actions/redirectToSite?AdWebId=' + allCategories.AdWebId;
                    $('#benefitArea').append('<a class="advertisingLink" href="' + advertisingLink + '" target="_blank"><span>'+advertising.sentences[0]+'</span></a>');
                    $('.advertisingLink').append("");
                    $('.advertisingLink span').append("<img src=" + advertising.logo + " style='max-height:30px'>");

                    /* Geolocation */
                    if(advertising.ipGeolocation){
                	navigator.geolocation.getCurrentPosition(function (position) {
                    	    var geoLatitude = position.coords.latitude;
                    	    var geoLongitude = position.coords.longitude;
                    	    advertisingLink = advertisingLink + '&lng=' + geoLongitude + '&lat=' + geoLatitude;
                    	    $('.advertisingLink').attr('href', advertisingLink);
                	});
                    }
                }
                $('#benefitArea').css({
                    "direction": "rtl",
                });
                $('#benefitArea img').css({
                    "float": "left",
                    "width": "50px",
                    "position":"absolute",
                    "top":"50%",
                    "left":"0",
                    "transform":"translateY(-50%)",
                });
                $('#benefitArea a').css({
                    "color": "#222",
                    "margin-top":"10px",
                    "display":"block",
                    "border-top": "1px #ccc solid",
                    "font-size": "1.1em",
                    "position":"relative",
                    "padding":"10px 0 10px 60px",
                    "border-bottom": "1px #ccc solid"
                });
            }
        });
        /* adding script for benefits END */
    });

}(window, document));
