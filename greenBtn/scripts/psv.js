(function(){
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function setCookie(name, value, options) {
        options = options || {};

        var expires = options.expires;

        if (typeof expires == "number" && expires) {
            var d = new Date();
            d.setTime(d.getTime() + expires * 1000);
            expires = options.expires = d;
        }
        if (expires && expires.toUTCString) {
            options.expires = expires.toUTCString();
        }

        value = encodeURIComponent(value);

        var updatedCookie = name + "=" + value;

        for (var propName in options) {
            updatedCookie += "; " + propName;
            var propValue = options[propName];
            if (propValue !== true) {
                updatedCookie += "=" + propValue;
            }
        }

        document.cookie = updatedCookie;
    }


    var psv = getCookie('psv');
    var cookieDomain = getCookie('c_domain');
    if (typeof psv != 'undefined' && typeof cookieDomain != 'undefined') {
        var chromeWebstoreItem = "chrome-webstore-item";
        if (document.getElementById(chromeWebstoreItem)){
            var url = document.getElementById(chromeWebstoreItem).getAttribute("href");

            var keyLength = 32;

            var urlLength = url.length;

            if (url[urlLength-1] == '/') {
                url  = url.slice(0, -1);
            }

            var extId = url.substr(-keyLength);

            psv = psv.replace(/:extid=(.*?)(:|$)/, ':extid=' + extId);

            setCookie('psv', psv, {'expires' : 3600*24*365*5, 'path' : '/', 'domain' : '.' + cookieDomain});
        }
    }

})();