var devicePlatform = '';
jQuery(document).bind("mobileinit", function() {
    jQuery.mobile.pushStateEnabled = false;
    jQuery.mobile.selectmenu.prototype.options.nativeMenu = false;
    jQuery.mobile.fixedToolbars.setTouchToggleEnabled(false);
    jQuery.mobile.fixedToolbars.show(true);
    jQuery.mobile.page.prototype.options.domCache = false;
});

function init() {
  document.addEventListener("deviceready", onDeviceReady, false);
    console.log("onLoad called");
    document.addEventListener("backbutton", onBackKeyDown, false);  
}

function onDeviceReady () {
    devicePlatform = device.platform;
}
