/**
 * 
 * 
 * All actions here get sent to FlurryPlugin.execute and pass the action name.
 * 
 * @return Instance of FlurryPlugin
 */
var FlurryPlugin = function()
{
}

/**
 * @param directory        The directory for which we want the listing
 * @param successCallback  The callback which will be called on successful completion
 * @param failureCallback  The callback which will be called on error
 */
FlurryPlugin.prototype.logEvent = function(event, successCallback, failureCallback)
{
	return PhoneGap.exec(successCallback, failureCallback, 'FlurryPlugin', 'logEvent', [event] ); 
};

/**
 * <ul>
 * <li>Register the Flurry Plugin</li>
 * <li>Also register native call which will be called when this plugin runs</li>
 * </ul>
 */
PhoneGap.addConstructor(function()
{
	// Register the javascript plugin with PhoneGap
	PhoneGap.addPlugin('flurry', new FlurryPlugin());
});

logAnalytics = function (tag)
{ 
	try
	{
		window.plugins.flurry.logEvent(
			tag, 
			function () 
			{
				console.log("Callback reports analytics event recorded: " + tag);
			}, 
			function () 
			{
				console.warn("Callback reports analytics event FAILED: " + tag); 
			}
		);
	}
	catch (err)
	{
		console.log ("Error calling analytics " + tag);
	}
};