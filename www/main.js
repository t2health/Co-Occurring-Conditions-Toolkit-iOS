var historyCount = 0;
var devicePlatform = '';

jQuery(document).bind("mobileinit", function() {
    jQuery.mobile.pushStateEnabled = false;
    jQuery.mobile.selectmenu.prototype.options.nativeMenu = false;
    jQuery.mobile.fixedToolbars.setTouchToggleEnabled(false);
    jQuery.mobile.fixedToolbars.show(true);
    jQuery.mobile.page.prototype.options.domCache = false;
});

function onDeviceReady () {
    devicePlatform = device.platform;
}

var preventBehavior = function(e) {
    e.preventDefault();
};

function fail(msg) {
    alert(msg);
}

function close() {
    var viewport = document.getElementById('viewport');
    viewport.style.position = "relative";
    viewport.style.display = "none";
}

function onLoad() {
    document.addEventListener("deviceready", onDeviceReady, false);
   // console.log("onLoad called");
    document.addEventListener("backbutton", onBackKeyDown, false); 
}

jQuery('div').live('pageshow',function(event,ui){
    onPageChange();
    adjustHistory();
   // console.log('main page show called');
});

function onPageChange() {
    logAnalytics( 'Page: ' + getCurrentPage());
//changes header margin for the back button
}

function getCurrentPage() {
   var base = 'www';//Cut off in Path,
   var result = '';
   if(location.hash) //Parse Hash
       result = location.hash.substring(1);
   else
       result = location.pathname;
   var path = jQuery.mobile.path.parseUrl(result).pathname;
   var indexPosition = path.indexOf(base);
   if(indexPosition > -1)
       path = path.substring(path.indexOf(base)+base.length+1);
   indexPosition = path.indexOf('&');
   if(indexPosition > -1) { //Parse Query String to sub Page
       var bar = jQuery('.ui-header', jQuery.mobile.activePage);
       var subPage = 'Nested-List ' + jQuery('.ui-title', bar).html();
       path = path.substring(0,indexPosition) + ' ' + subPage;
   }

   return path;
}

function clearChecked() {
    //jQuery("input[type='checkbox']:first").attr("checked",true).checkboxradio("refresh");
    jQuery('input[type="checkbox"]:checked').prop('checked', false).checkboxradio("refresh");
}

function onBackKeyDown() {
   // console.log('backbutton called');
    if (historyCount == 0){
        navigator.app.exitApp() 
    } else {
        window.history.back();
    }
}

function adjustHistory() {
    historyCount--;
    console.log("historyCount = " + historyCount);
}

jQuery('#home').live('pageshow',function(event, ui)    {
    historyCount = 0;
    console.log('home called');
    clearChecked()
});
