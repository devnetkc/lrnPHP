// This will throw an error in console log if GA is disabled by the user
require (['gascript'], function (gascript) {
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-WPX5YZCJGS');
});