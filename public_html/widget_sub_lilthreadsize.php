<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://css.imerrow.com/css_major/added_parts.css" type="text/css" charset="utf-8">
<link href="http://css.imerrow.com/css_major/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>

<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/dragdrop/dragdrop-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/slider/slider-min.js"></script>

	<script type="text/javascript">
(function() {
    var Event = YAHOO.util.Event,
        Dom   = YAHOO.util.Dom,
        lang  = YAHOO.lang,
        slider, 
        bg="slider-bg", thumb="slider-thumb", 
        valuearea="slider-value", textfield="slider-converted-value"

    // The slider can move 0 pixels up
    var topConstraint = 0;

    // The slider can move 200 pixels down
    var bottomConstraint = 200;

    // Custom scale factor for converting the pixel offset into a real value
    var scaleFactor = 1.5;

    // The amount the slider moves when the value is changed with the arrow
    // keys
    var keyIncrement = 20;

    var tickSize = 20;

    Event.onDOMReady(function() {

        slider = YAHOO.widget.Slider.getHorizSlider(bg, 
                         thumb, topConstraint, bottomConstraint, 20);

        // Sliders with ticks can be animated without YAHOO.util.Anim
        slider.animate = true;

        slider.getRealValue = function() {
            return Math.round(this.getValue() * scaleFactor);
        }

        slider.subscribe("change", function(offsetFromStart) {

            var valnode = Dom.get(valuearea);
            var fld = Dom.get(textfield);

            // Display the pixel value of the control
            valnode.innerHTML = offsetFromStart;

            // use the scale factor to convert the pixel offset into a real
            // value
            var actualValue = slider.getRealValue();

            // update the text box with the actual value
            fld.value = actualValue;

            // Update the title attribute on the background.  This helps assistive
            // technology to communicate the state change
            Dom.get(bg).title = "slider value = " + actualValue;

        });

        slider.subscribe("slideStart", function() {
                YAHOO.log("slideStart fired", "warn");
            });

        slider.subscribe("slideEnd", function() {
                YAHOO.log("slideEnd fired", "warn");
            });

        // Listen for keystrokes on the form field that displays the
        // control's value.  While not provided by default, having a
        // form field with the slider is a good way to help keep your
        // application accessible.
        Event.on(textfield, "keydown", function(e) {

            // set the value when the 'return' key is detected
            if (Event.getCharCode(e) === 13) {
                var v = parseFloat(this.value, 10);
                v = (lang.isNumber(v)) ? v : 0;

                // convert the real value into a pixel offset
                slider.setValue(Math.round(v/scaleFactor));
            }
        });
        
        // Use setValue to reset the value to white:
        Event.on("putval", "click", function(e) {
            slider.setValue(100, false); //false here means to animate if possible
        });
        
        // Use the "get" method to get the current offset from the slider's start
        // position in pixels.  By applying the scale factor, we can translate this
        // into a "real value
        Event.on("getval", "click", function(e) {
            YAHOO.log("Current value: "   + slider.getValue() + "\n" + 
                      "Converted value: " + slider.getRealValue(), "info", "example"); 
        });
    });
})();
</script>



<style>
#slider-bg {
    background:url(http://yui.yahooapis.com/2.7.0/build/slider/assets/bg-fader.gif) 5px 0 no-repeat;
}

</style>

</head>
   
<?

include('widget_sub_threadmenu.php'); 


?>
<br />

<div class="thepackage">

<div id="slider-bg" class="yui-h-slider" tabindex="-1" title="Slider">
    <div id="slider-thumb" class="yui-slider-thumb"><img src="http://yui.yahooapis.com/2.7.0/build/slider/assets/thumb-n.gif"></div>
</div>

<p>Thread Quantity (in yards): <span id="slider-value">0</span></p>

<p>Converted value (hanks):
<input autocomplete="off" id="slider-converted-value" type="text" value="0" size="4" maxlength="4" />
</p>

<!--We'll use these to trigger interactions with the Slider API -->
<button id="putval">Change slider value to Hanks</button>
<br />
<br />

<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/257331237807643" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm">
    <input name="item_name_1" type="hidden" value="<? echo $agent_store['custom_center_product'.$unit.'_name']; ?>"/>
    <input name="item_description_1" type="hidden" value="<? echo $agent_store['custom_center_product'.$unit.'_description']; ?>"/>
    <input name="item_quantity_1" type="hidden" value="1"/>
    <input name="item_price_1" type="hidden" value="<? echo $formatted; ?>"/>
    <input name="item_currency_1" type="hidden" value="USD"/>
    <input name="_charset_" type="hidden" value="utf-8"/>
    <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=257331237807643&amp;w=117&amp;h=48&amp;style=white&amp;variant=text&amp;loc=en_US" type="image"/>
</form>


<td valign="top" width="100%"><script type="text/javascript">
			var priceIsRange = false; var prices = [];
		
		
			var asins = new Array();
			
					asins[
						
							'|Black'
						
					] = 'B001946RXU';
				
					asins[
						
							'|Blue'
						
					] = 'B001W8147M';
				
					asins[
						
							'|Brown'
						
					] = 'B001W813S2';
				
					asins[
						
							'|Cabernet'
						
					] = 'B0018N4H2A';
				
					asins[
						
							'|Coral'
						
					] = 'B0018N6CXC';
				
					asins[
						
							'|Dark Blue'
						
					] = 'B001R4T57M';
				
					asins[
						
							'|Ecru'
						
					] = 'B001MJIE6K';
				
					asins[
						
							'|Gold'
						
					] = 'B001I2CUWK';
				
					asins[
						
							'|Green'
						
					] = 'B001R4V87W';
				
					asins[
						
							'|Green Blue'
						
					] = 'B0018N6CVO';
				
					asins[
						
							'|Grey'
						
					] = 'B0018N44S2';
				
					asins[
						
							'|Light Brown'
						
					] = 'B0018N7GZ0';
				
					asins[
						
							'|Light Pink'
						
					] = 'B001W7VCN4';
				
					asins[
						
							'|Mauve'
						
					] = 'B001W7Z12C';
				
					asins[
						
							'|Mint Green'
						
					] = 'B0018N7TBQ';
				
					asins[
						
							'|Natural'
						
					] = 'B001EN6NJ4';
				
					asins[
						
							'|Peach'
						
					] = 'B001W7VCOI';
				
					asins[
						
							'|Red'
						
					] = 'B00194CA4A';
				
					asins[
						
							'|Robin Blue'
						
					] = 'B001W7Z0OQ';
				
					asins[
						
							'|Rose'
						
					] = 'B001W814G8';
				
					asins[
						
							'|Rust'
						
					] = 'B001W813PU';
				
					asins[
						
							'|Spring Green'
						
					] = 'B001W7S7E6';
				
					asins[
						
							'|White'
						
					] = 'B0018N7GL4';
				
					asins[
						
							'|Yellow'
						
					] = 'B001W7S7AA';
				
			var variationInfo = {
				
				"B001946RXU":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W8147M":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W813S2":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N4H2A":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N6CXC":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001R4T57M":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001MJIE6K":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001I2CUWK":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001R4V87W":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N6CVO":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N44S2":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N7GZ0":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7VCN4":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7Z12C":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N7TBQ":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001EN6NJ4":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7VCOI":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B00194CA4A":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7Z0OQ":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W814G8":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W813PU":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7S7E6":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B0018N7GL4":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				},
				"B001W7S7AA":{
					sku:'',
					availability:'Usually ships in 1-2 business days',
					price:'$7.00', listPrice:'',shippingCharge:'', 
					savingsAmount:'', savingsPercent:''
				}
			};
		</script><script>
			var variationImages = [];
			var variationPopupImages = [];
			
					variationImages[
						
							'|Black'
						
					] = 'http://ecx.images-amazon.com/images/I/212VULY-LqL._SL160_.jpg';
					variationPopupImages[
						
							'|Black'
						
					] = 'http://ecx.images-amazon.com/images/I/212VULY-LqL.jpg';
				
					variationImages[
						
							'|Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21iOvYXM0wL._SL160_.jpg';
					variationPopupImages[
						
							'|Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21iOvYXM0wL.jpg';
				
					variationImages[
						
							'|Brown'
						
					] = 'http://ecx.images-amazon.com/images/I/21d7vkG2ibL._SL160_.jpg';
					variationPopupImages[
						
							'|Brown'
						
					] = 'http://ecx.images-amazon.com/images/I/21d7vkG2ibL.jpg';
				
					variationImages[
						
							'|Cabernet'
						
					] = 'http://ecx.images-amazon.com/images/I/21rKvmDZjhL._SL160_.jpg';
					variationPopupImages[
						
							'|Cabernet'
						
					] = 'http://ecx.images-amazon.com/images/I/21rKvmDZjhL.jpg';
				
					variationImages[
						
							'|Coral'
						
					] = 'http://ecx.images-amazon.com/images/I/21-I4wvBs8L._SL160_.jpg';
					variationPopupImages[
						
							'|Coral'
						
					] = 'http://ecx.images-amazon.com/images/I/21-I4wvBs8L.jpg';
				
					variationImages[
						
							'|Dark Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21A9JuZiWeL._SL160_.jpg';
					variationPopupImages[
						
							'|Dark Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21A9JuZiWeL.jpg';
				
					variationImages[
						
							'|Ecru'
						
					] = 'http://ecx.images-amazon.com/images/I/21QP29iqpZL._SL160_.jpg';
					variationPopupImages[
						
							'|Ecru'
						
					] = 'http://ecx.images-amazon.com/images/I/21QP29iqpZL.jpg';
				
					variationImages[
						
							'|Gold'
						
					] = 'http://ecx.images-amazon.com/images/I/21zlP7O2UcL._SL160_.jpg';
					variationPopupImages[
						
							'|Gold'
						
					] = 'http://ecx.images-amazon.com/images/I/21zlP7O2UcL.jpg';
				
					variationImages[
						
							'|Green'
						
					] = 'http://ecx.images-amazon.com/images/I/21%2BkEkbqFjL._SL160_.jpg';
					variationPopupImages[
						
							'|Green'
						
					] = 'http://ecx.images-amazon.com/images/I/21%2BkEkbqFjL.jpg';
				
					variationImages[
						
							'|Green Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21Lrxki6MaL._SL160_.jpg';
					variationPopupImages[
						
							'|Green Blue'
						
					] = 'http://ecx.images-amazon.com/images/I/21Lrxki6MaL.jpg';
				
					variationImages[
						
							'|Grey'
						
					] = 'http://ecx.images-amazon.com/images/I/21CD8IVC2IL._SL160_.jpg';
					variationPopupImages[
						
							'|Grey'
						
					] = 'http://ecx.images-amazon.com/images/I/21CD8IVC2IL.jpg';
				
					variationImages[
						
							'|Light Brown'
						
					] = 'http://ecx.images-amazon.com/images/I/21aebXKrHVL._SL160_.jpg';
					variationPopupImages[
						
							'|Light Brown'
						
					] = 'http://ecx.images-amazon.com/images/I/21aebXKrHVL.jpg';
				
					variationImages[
						
							'|Mint Green'
						
					] = 'http://ecx.images-amazon.com/images/I/219EBzS4yeL._SL160_.jpg';
					variationPopupImages[
						
							'|Mint Green'
						
					] = 'http://ecx.images-amazon.com/images/I/219EBzS4yeL.jpg';
				
					variationImages[
						
							'|Natural'
						
					] = 'http://ecx.images-amazon.com/images/I/21yEDV%2BYfoL._SL160_.jpg';
					variationPopupImages[
						
							'|Natural'
						
					] = 'http://ecx.images-amazon.com/images/I/21yEDV%2BYfoL.jpg';
				
					variationImages[
						
							'|Red'
						
					] = 'http://ecx.images-amazon.com/images/I/21m7E7LUE2L._SL160_.jpg';
					variationPopupImages[
						
							'|Red'
						
					] = 'http://ecx.images-amazon.com/images/I/21m7E7LUE2L.jpg';
				
					variationImages[
						
							'|White'
						
					] = 'http://ecx.images-amazon.com/images/I/11LKMx3uATL._SL160_.jpg';
					variationPopupImages[
						
							'|White'
						
					] = 'http://ecx.images-amazon.com/images/I/11LKMx3uATL.jpg';
				</script>
                
                <select id="Color" name="Color" onchange="selectVariationValue(0, this.selectedIndex); "><option value="">Please Select Color</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Brown">Brown</option><option value="Cabernet">Cabernet</option><option value="Coral">Coral</option><option value="Dark Blue">Dark Blue</option><option value="Ecru">Ecru</option><option value="Gold">Gold</option><option value="Green">Green</option><option value="Green Blue">Green Blue</option><option value="Grey">Grey</option><option value="Light Brown">Light Brown</option><option value="Light Pink">Light Pink</option><option value="Mauve">Mauve</option><option value="Mint Green">Mint Green</option><option value="Natural">Natural</option><option value="Peach">Peach</option><option value="Red">Red</option><option value="Robin Blue">Robin Blue</option><option value="Rose">Rose</option><option value="Rust">Rust</option><option value="Spring Green">Spring Green</option><option value="White">White</option><option value="Yellow">Yellow</option></select><script language="Javascript1.1" type="text/javascript">
		variationSelectBoxNames[0] = 'Color';
	</script><script language="Javascript1.1" type="text/javascript">
	
	variationSetupArray['0_1'] = "Black";
	
	
	
	variationSetupArray['0_2'] = "Blue";
	
	
	
	variationSetupArray['0_3'] = "Brown";
	
	
	
	variationSetupArray['0_4'] = "Cabernet";
	
	
	
	variationSetupArray['0_5'] = "Coral";
	
	
	
	variationSetupArray['0_6'] = "Dark Blue";
	
	
	
	variationSetupArray['0_7'] = "Ecru";
	
	
	
	variationSetupArray['0_8'] = "Gold";
	
	
	
	variationSetupArray['0_9'] = "Green";
	
	
	
	variationSetupArray['0_10'] = "Green Blue";
	
	
	
	variationSetupArray['0_11'] = "Grey";
	
	
	
	variationSetupArray['0_12'] = "Light Brown";
	
	
	
	variationSetupArray['0_13'] = "Light Pink";
	
	
	
	variationSetupArray['0_14'] = "Mauve";
	
	
	
	variationSetupArray['0_15'] = "Mint Green";
	
	
	
	variationSetupArray['0_16'] = "Natural";
	
	
	
	variationSetupArray['0_17'] = "Peach";
	
	
	
	variationSetupArray['0_18'] = "Red";
	
	
	
	variationSetupArray['0_19'] = "Robin Blue";
	
	
	
	variationSetupArray['0_20'] = "Rose";
	
	
	
	variationSetupArray['0_21'] = "Rust";
	
	
	
	variationSetupArray['0_22'] = "Spring Green";
	
	
	
	variationSetupArray['0_23'] = "White";
	
	
	
	variationSetupArray['0_24'] = "Yellow";
	
	
					initVariations();
				</script>
</div>
</div>

