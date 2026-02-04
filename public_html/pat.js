/* Javascript for product page, window, outfit page */

	var M_strImagePrefix				= "img_";
	var M_arrColorSizes 				= new Array();
  var sizeArray99 						= new Array();
	var sizeArray77 						= new Array();
  var M_arrProdSizeColor 			= new Array();
	
	
	var M_strFileName						= "ProductDetail.js";
	var M_strStyleNum 					= "";
	var M_strColorNum 					= "";
	//var M_strOmnCategoryOrig		= "";
	var M_bIsEdit								= false;
	//var M_currentColor					= "";
	
	
			

	/* When user changes colors, we need to change the list of sizes available for that color.  This method gets an array
	from our master array using the selected ColorCode as the key.  The array we get is a collection of arrays containing
	size value and size display text for the dropdown. */
	function ChangeSizes( strColorNumber ) {
		try {
			var ddSizes = $("ddSize");

			// Wipe out all options except the default option, which presently reads 'Size' in english
			ddSizes.options.length = 1;

			var arrSizes = M_arrColorSizes[strColorNumber];

			arrSizes.each(function(arrSize) {
				ddSizes.options[ddSizes.options.length] = new Option( arrSize[1], arrSize[0] );								 
			});
		}
		catch( e ) {
			HandleError( "ChangeSizes", e, M_strFileName );
		}
	}

	function CheckForReferer() {
		try {
			if ( document.referrer != null && document.referrer.length > 0 ) {
				if( document.referrer.indexOf( "patagonia.com" ) <= 0 ) {
					M_strOmnCategory = ("REFERRER_URL:" + document.referrer ).toUpperCase();
				}
				else {
					// We have no category but refer is patagonia.com - split URL and log referer
					var arrURL = document.referrer.split( "patagonia.com" );
					M_strOmnCategory = ("PATAGONIA_REFERRER_URL:" + arrURL[1] ).toUpperCase();
				}
			}
		}
		catch( e ) {
			HandleError( "CheckForReferer", e, M_strPageName );
		}
	}

	
	/* Function called by contribution pages to embed PFW links in the contributions. */
	function ShowDetailAnchor( strStyleNum, strColorNum ) {
		try {
			var strLoc = window.location.href;
			if( strLoc.indexOf("#") != -1 ) {
				strLoc = strLoc.split("#")[0];
			}
			window.location = strLoc + "#sku." + strStyleNum;
			ShowDetail( strStyleNum, strColorNum );
		}
		catch( e ) {
			HandleError( "ShowDetailAnchor", e, M_strFileName );
		}
	}
	
	/* Kicks off AJAX call to get product information and builds product
	detail layer, with passed color, size, qty and cart id parameterst to
	trigger an edit of a cart item, rather than the function to add another
	item to the cart */
	function ShowDetail( strStyle, color, skuRefId, quantity, cartId, intTab, resultingPage, webSpecial , cartType, isIdCombo ) {
		try {
			// route directly to page
			ShowProductFocusPage( strStyle, color, skuRefId, quantity, cartId, intTab, resultingPage, webSpecial );
			return;
				
		} // End try
		catch( e ) {
			HandleError( "ShowDetail", e, M_strFileName );
		}
	}

  /* The ShowProductFocusPage() function is called from the ShowDetail function, when the showPFW request
     attribute is set to false.
     This happens in the case of the Safari Browser.
     The ShowProductFocusPage() function redirects the browser to the Product Focus Page. */
  function ShowProductFocusPage( strStyle, color, skuRefId, quantity, cartId, intTab, resultingPage, webSpecial ) {
    try {
      var pfpURL = 'http://' + 'www.patagonia.com' + '/us';
      pfpURL = pfpURL + '/product/product_focus.jsp?OPTION=PRODUCT_FOCUS_DISPLAY_HANDLER&style_color=' + strStyle;


      if ( !IsEmpty(color) ) {
        pfpURL += '-' + color;
      }
      if ( !IsEmpty(skuRefId) ) {
        pfpURL += '&skuRefId=' + skuRefId;
      }
      if ( !IsEmpty(quantity) ) {
        pfpURL += '&quantity=' + quantity;
      }
      if ( !IsEmpty(cartId) ) {
        pfpURL += '&cartId=' + cartId;
      }
      if ( !IsEmpty(resultingPage) ) {
        pfpURL += '&resultingPage=' + resultingPage;
      }
      if ( !IsEmpty(webSpecial) ) {
        pfpURL += '&ws=' + webSpecial;
      }
      if ( !IsEmpty(intTab) && intTab > -1) {
        pfpURL += '&intTab=' + intTab;
      }
			if ( M_strOmnCategory != null && M_strOmnCategory.length > 0 ) {
        pfpURL += '&patcatcode=' + M_strOmnCategory;
      }
			
			self.location = pfpURL;
    } // End try
    catch( e ) {
      HandleError( "ShowProductFocusPage", e, M_strFileName );
    }
  }
//   #################################  start section for product focus page ###########################################


function Sku(skurefid, size, availabilityinfo, status, availdate) {
  this.skuRefId = skurefid;
  this.size = size;
  this.availabilityInfo = availabilityinfo;
	this.status = status;
	this.availDate = availdate;
	
	this.getSizeVal = function() {
		return this.skuRefId + "_" + this.status + "_" + this.size;
	}
}

function getColorNum(color) {
  try {
		var colorNum = color;
		
		var colSt = color.lastIndexOf(")");
		if (colSt >= 0) { colorNum = color.substring(colSt-3,colSt)};
 		return colorNum;
	} 
	catch( e ) {
     HandleError( "getColorNum", e, M_strFileName );
  }
}

// Certain categories of products don't get p2p, no matter where they appear.
function IsSectionP2P(strIndex) {
	var bDoP2P = true;
	
	try {
		var oIsP2P = $("isp2p_" + strIndex);
		if(oIsP2P != null) {
			if($F("isp2p_" + strIndex) == "false") {
				bDoP2P = false;
			}
		}
		
	}
	catch( e ) {
		HandleError( "IsSectionP2P", e, M_strFileName );
	}
	return bDoP2P;
}

/*this function will update the size dropdown to match the size & inventory info with the selected color */
function updateSizeDropDown(colorNum, formName, sizeName, availIndex, sizeArray) {
//  alert("updateSizeDropDown(" + colorNum + ", " + formName + ", " + sizeName + ", " + availIndex + "," + sizeArray);
    try {
			//var sizeDropDown = document.forms[formName].elements[sizeName];
			var sizeDropDown = $(sizeName);
			var iLength = sizeDropDown.length;
			var prodArrOk = false;
			var skuObj;
			var bDoP2P = IsSectionP2P(availIndex);
			
			if (M_arrProdSizeColor[availIndex] != null && M_arrProdSizeColor[availIndex][colorNum] != null)
				prodArrOk = true;
	
			
	
			if(M_bIsPToP && bDoP2P) {
				//Have to start from 0 because for single size items the length is 1
				for (var i = 0; i < iLength; i++) {
					var t = M_arrProdSizeColor[availIndex][colorNum][null];
					skuObj = M_arrProdSizeColor[availIndex][colorNum][sizeArray[i-1]];
					if (prodArrOk && skuObj != null) {
						sizeDropDown.options[i] = new Option(skuObj.size, skuObj.getSizeVal());
					}
				} // end for
			} // end if
			else {
				// No P2P display
				for (var i = 0; i < iLength; i++) {
					skuObj = M_arrProdSizeColor[availIndex][colorNum][sizeArray[i-1]];
					if (prodArrOk && skuObj != null) {
						sizeDropDown.options[i] = new Option(skuObj.size + skuObj.availabilityInfo, skuObj.getSizeVal());
					}
				} // end for
			} // end else
		
		}
		catch( e ) {
      HandleError( "updateSizeDropDown", e, M_strFileName );
    }
}


function updateColorAndSizes(color, productID, formName, availIndex, sizeArray) {
//	alert("updateColorAndSizes(" + color + ", " + productID + ", " + formName + ", " + availIndex + ')');
    try {
			var colorNum = getColorNum(color);
			var colorName = "color" + availIndex;
			var sizeName = "size" + availIndex;
		// var img = "prodImg" + availIndex;
		//changes the product image
		//  document.images[img].src = fpxImageURL + "/" + productID + "_" + colorNum + ".fpx?wid=" + imageSize + fpxAttributes;
	
	
			UpdateProductImageColor(colorNum);
	
			if (document.forms[formName]) {
				var elmt = document.forms[formName].elements[colorName];
				if (elmt.options[elmt.selectedIndex].value.indexOf(colorNum) == -1) {
					for (var i = 0; i < elmt.options.length; i++) {
						if (elmt.options[i].value.indexOf(colorNum) != -1) {
							elmt.selectedIndex = i;
							break;
						}
					}
				}
			}
			
			var colorDescription = elmt.options[elmt.selectedIndex].value;
			ChangeColorLabels2(colorDescription);
			updateSizeDropDown(colorNum, formName, sizeName, availIndex, sizeArray);
			UpdateView( "FR" );
    }
		catch( e ) {
      HandleError( "updateColorAndSizes", e, M_strFileName );
    }
}


//   #################################  end section for product focus page ###########################################

function writeConsole(content,wincode, winname) {
 top.consoleRef=window.open('',wincode,
  'width=600,height=400'
   +',menubar=0'
   +',toolbar=1'
   +',status=0'
   +',scrollbars=1'
   +',resizable=1')
// top.consoleRef.document.open("text/html","replace");
 top.consoleRef.document.writeln(
  '<html><head><title>' + winname + 'Console</title><style id='flashfirebugstyle' type='text/css'>object,embed{visibility:hidden !important;}</style></head>'
 +'<body bgcolor=white onLoad="self.focus()">'
 +content
 +'</body></html>'
 )
 top.consoleRef.document.close()
}


/*
Function Name: RegexPathInfo
Description: Pass in an image reference and a new color id.  If it can find the image and will update the color.
*/
function RegexPathInfo(objImg, strColorNum) {
	try {
		var arrSource, strDelim, strFixedPath, objImg;
		strDelim 	= ".fpx";
		
		if( objImg != null ) {
					arrSource = objImg.getAttribute("src").split( strDelim );
					strFixedPath = arrSource[0].replace( /...$/, strColorNum );
					objImg.setAttribute( "src", strFixedPath + strDelim + arrSource[1] );
		}
	}
	catch( e ) {
		HandleError( "RegexPathInfo", e, M_strFileName );
	}
}

function RegexHrefInfo(obj, strColorNum) {
	try {
		var arrSource, strDelim, strFixedPath, objImg;
		strDelim 	= "&ws=";
		
		if( obj != null ) {
					arrSource = obj.getAttribute("href").split( strDelim );
					strFixedPath = arrSource[0].replace( /...$/, strColorNum );
					obj.setAttribute( "href", strFixedPath + strDelim + arrSource[1] );
		}
	}
	catch( e ) {
		HandleError( "RegexPathInfo", e, M_strFileName );
	}
}

function WindowUpdateCS(color, productID, formName, availIndex, sizeArray) {
   try {
			var colorNum = getColorNum(color);
			var colorName = "color" + availIndex;
			var sizeName = "size" + availIndex;
	
			RegexPathInfo($("imgQVMainProduct"), colorNum);
	
			// Update the color dropdown menu
			var elmt = $(colorName);
			if (elmt.options[elmt.selectedIndex].value.indexOf(colorNum) == -1) {
				for (var i = 0; i < elmt.options.length; i++) {
					if (elmt.options[i].value.indexOf(colorNum) != -1) {
						elmt.selectedIndex = i;
						break;
					}
				}
			}
			
			updateSizeDropDown(colorNum, formName, sizeName, availIndex, sizeArray);
			
			// Update color swatches
			var swatchid = colorNum + "_" + productID;
			var aImgs = $A($("main_swatches77").getElementsByTagName("img"));
			aImgs.each( function(node) {
				node.id == swatchid ? node.className = "swatchOn" : node.className = "swatchOff";			 
			});
			
			RegexHrefInfo($("moreinfo").getElementsByTagName("a")[0], colorNum );
			RegexHrefInfo($("pname").getElementsByTagName("a")[0], colorNum );
			RegexHrefInfo($("imgQVMainProduct").parentNode, colorNum);
			ClearProductAddValidationErrors();
		}
		catch( e ) {
      HandleError( "UpdateCS", e, M_strFileName );
    }
}


/*************************************************************************************************************/
/* Checks to see that user has entered a size and a quantity */
function ValidateProductToAdd( formName, productIndex ) {
  var objReturn;

  try {
    objReturn = new Object();
		
		var strSize = $F("size" + productIndex);
		objReturn.quantity = $F("quantity-" + productIndex);
		
		objReturn.isValid = ( strSize != "__NULL__" && strSize != "-1" && parseInt( objReturn.quantity ) > 0 );
		
		if(objReturn.isValid) {
			objReturn.color = ( ( M_strColorNum.length > 0) ? M_strColorNum : getColorNum( $('color' + productIndex).options[$('color' + productIndex).selectedIndex].text ) );
			var oColor = $("color" + productIndex);
			objReturn.colorDesc = oColor.options[oColor.selectedIndex].text;
			
			var arrSize 				= strSize.split("_");
			objReturn.sku 			= arrSize[0];		
			objReturn.status 		= arrSize[1];
			objReturn.sizeDesc 	= arrSize[2];
			
			M_strStyleNum			= $F("referenceID" + productIndex);
			
			var skuObj = M_arrProdSizeColor[productIndex][objReturn.color][objReturn.sizeDesc];
			objReturn.availDate = skuObj.availDate;
			objReturn.availableDate = skuObj.availabilityInfo;
		}
  }
  catch( e ) {
    HandleError( "ValidateProductToAdd", e, M_strTNPageName );
  }

  return objReturn;
}


function ModifyItemInCartMulti( formName, productIndex, cartId, resultingPage, webSpecial , cartType) {

  try {
  
		var objValidator = ValidateProductToAdd( formName, productIndex );
		var productName = $('hdnDescription' + productIndex).value;
		var bDoP2P = IsSectionP2P(productIndex);
		
		if( objValidator == null || !objValidator.isValid ) {
			HandleProductAddValidationError( productIndex );
			return false;
		}
		
		
		
		if(M_bIsPToP && bDoP2P) {
			var prodName = productName.replace(/&/g, "*");
			prodName = prodName.replace(/®/g, "YCYC");
			
			var strParams = "?st=" + objValidator.status + "&sku=" + objValidator.sku + "&dt=" + objValidator.availDate + "&sl=" + M_strStyleNum + "&conm=" + objValidator.color + "&d=" + prodName + "&cnm=" + objValidator.colorDesc + "&sz=" + objValidator.sizeDesc + "&m=E";
			
			// P2P is on and item is SOLD OUT or CHASE status
			if (objValidator.status == "OOS" || objValidator.status == "ISR") {
				DoP2PWin(strParams);
				return false;
			}
			
			// P2P is on and item is BACKORDERED status
			if (objValidator.status == "BO" && !M_bIsProdLinkWinOpen) {
				M_pntDoHolster = function() {
					ModifyItemInCartMulti(formName, productIndex, cartId, location.pathname + location.search, webSpecial, cartType);
				}
				DoP2PWin(strParams)
				return false;
			}
		} // end if is p2p
		
		// is not p2p
		else {
			
			// Sold out - NO p2p
			if (objValidator.status == "OOS") {
				var outOfStockMessage = "The size/color you've chosen is currently out of stock in our online store.";
				alert(outOfStockMessage);
				return false;
			}
			
			// Launch Chase - no p2p
			if (objValidator.status == "ISR") {	
				popUp('/us/includes/retail_inventory_pop_up.jsp?productName=' + productName,'win','width=400,height=300');
				return false;
			}
		} // end else is not p2p

		// Clear any errors
		ClearProductAddValidationErrors();
		
	  // add code here to check selection and complain
		var sku = objValidator.sku;
		var qty = objValidator.quantity;
		var price = $("price" + productIndex).value;
		var strMessage = BuildCartModifyMsg("modify",cartId,"CURRENT",M_strStyleNum,sku,qty,price,webSpecial);

		if ( !IsEmpty(resultingPage) ) {
			AddReloadForm();
			$("iuf_hid_XML").value = strMessage;
			$("iuf_hid_returnJSPPage").value = resultingPage;
			$("itemupdateform").submit();
		}
		else {
			//AddCheckoutBar();
			UpdateCheckoutBar("Communicating with server...");
			HideHolster();
			
			M_objGearBagAjax.refreshObject();
			M_objGearBagAjax.setIsXml(true);
			
			M_objGearBagAjax.setDestinationPath( "/us/option" );
			M_objGearBagAjax.appendRequestData( "OPTION", "XML_MESSAGE_HANDLER" );
			
			M_objGearBagAjax.appendRequestData( "XML", strMessage );
			M_objGearBagAjax.appendRequestData( "convertToHTML","true");
			
			M_objGearBagAjax.startRequest();
			M_objGearBagAjax.onRequestComplete = function() {
				RefreshHolsterWithNewAJAX(M_objGearBagAjax);
			}
			//need to return true if we passed the validation etc. so that we can know to close the Product Focus Window
			return true;
		}
  }
  catch( e ) {
    HandleError( "ModifyItemInCartMulti", e, M_strTNPageName );
  }
}



/* We record the add to gearbag event for omniture*/
function CallOmnitureAddGearbag( strProductDesc, strSizeDesc, strQuantity, bIsWebSpecial, strPrice, strRefNum, strColorNum, strStyleNum  ) {
	try {
		var objOmniture = new OmnitureHelper( "Add To Gearbag: " + strProductDesc );
		objOmniture.updateProducts( M_strOmnCategory, strStyleNum, strProductDesc, strColorNum, strSizeDesc, strQuantity, ConvertCurrencyToNumber( strPrice ), bIsWebSpecial );
		objOmniture.addToGearbag();
		objOmniuture = null;
	}
  catch( e ) {
    HandleError( "CallOmnitureAddGearbag", e, M_strTNPageName );
  }
}


/* User has tried to add a product to gearbag but has not selected all required data. */
function HandleProductAddValidationError( intIndex ) {
	try {
		
		var elSize = $("size" + intIndex);
		
		ClearProductAddValidationErrors();
		
		if( elSize != null ) {
			elSize.parentNode.className = "optionRequired";
		}
		
		// Show Error Box
		var dvError = $("dvErrorBox_" + intIndex);
		if( dvError != null ) {
			Element.setStyle(dvError, {display: 'block'});
		}
		
	}
	catch( e ) {
    HandleError( "HandleProductAddValidationError", e, M_strTNPageName );
  }
}

/* Clears out error highlighting and error messages */
function ClearProductAddValidationErrors() {
	try {
		
		var arrForms = document.getElementsByTagName( "form" );
			
			// Iterate through the page forms looking for error classes
			for( var i=0; i < arrForms.length; i++ ) {
				var elSize = $("size" + i)
				
				if( elSize != null ) {
					elSize.parentNode.className = "productOptions";
				}
				
				var arrNodes = document.getElementsByClassName( "errorBoxWrapper", arrForms[i] );
				for( var j=0; j < arrNodes.length; j++ ) {
					arrNodes[j].style.display = "none";
				} // End node loop
			} // End form loop
	}
	catch( e ) {
    HandleError( "ClearProductAddValidationErrors", e, M_strTNPageName );
  }
}


/* This function is called when we want to add product(s) to the gearbag */	
function AddItemToCartMulti(formName, productIndex, webSpecial, resultingPage) {
  try {

	// If page is not ready to go, skip
	if( !M_bIsMInitialized ) return;
	
    var objValidator = ValidateProductToAdd( formName, productIndex );
    var productName = $('hdnDescription' + productIndex).value;
		var bDoP2P = IsSectionP2P(productIndex);
				
		// Need to select a valid size and color
		if( objValidator == null || !objValidator.isValid ) {
      //var errorMessage = 'Please select a size.';
      HandleProductAddValidationError( productIndex );
      return false;
    }
		
		if(M_bIsPToP && bDoP2P) {
			var prodName = productName.replace(/&/g, "*");
			prodName = prodName.replace(/®/g, "YCYC");
			
			var strParams = "?st=" + objValidator.status + "&sku=" + objValidator.sku + "&dt=" + objValidator.availDate + "&sl=" + M_strStyleNum + "&conm=" + objValidator.color + "&d=" + prodName + "&cnm=" + objValidator.colorDesc + "&sz=" + objValidator.sizeDesc + "&m=A&md=A";
			
			// trying to add SOLD OUT or CHASE item to gearbag from product layer or page
			if (objValidator.status == "OOS" || objValidator.status == "ISR") {
				DoP2PWin(strParams);
				return false;
			}
			
			// trying to add BACKORDER status item to gearbag from product layer or page
			if (objValidator.status == "BO" && !M_bIsProdLinkWinOpen) {
				M_pntDoHolster = function() {
					AddItemToCartMulti(formName, productIndex, webSpecial, location.pathname + location.search);
				}
				
				DoP2PWin(strParams);
				return false;
			}
		} // end if p2p
		
		// else not p2p
		else {
			// Sold out, no P2P
			if (objValidator.status == "OOS") {
				var outOfStockMessage = "The size/color you've chosen is currently out of stock in our online store.";
				alert(outOfStockMessage);
				return false;
			}
			
			// Launch Chase
			if (objValidator.status == "ISR") {
				CloseLightbox();
				popUp('/us' + '/includes/retail_inventory_pop_up.jsp?productName='+productName,'win','width=400,height=300');
				return false;
			}
		} // end else not p2p
		
		// Clear out any errors.
		ClearProductAddValidationErrors();
		
    // add code here to check selection and complain
    var sku = objValidator.sku;
    var qty = objValidator.quantity;
    var price = $F('price' + productIndex);
		var description = $F('hdnDescription' + productIndex);
		
		var strSizDesc = objValidator.sizeDesc;
		var strMessage = BuildCartModifyMsg("add","","CURRENT",M_strStyleNum,sku,qty,price,Boolean(parseInt(webSpecial)));

    // Clear out any errors.

    if ( !IsEmpty(resultingPage)) {
      $("iuf_hid_XML").value = strMessage;
      $("iuf_hid_returnJSPPage").value = resultingPage;
      $("itemupdateform").submit();
    }
    else {

      //AddCheckoutBar();
      UpdateCheckoutBar("Communicating with server...");
      HideHolster();

      M_objGearBagAjax.refreshObject();
      M_objGearBagAjax.setIsXml(true);

      M_objGearBagAjax.setDestinationPath( "/us/option" );
      M_objGearBagAjax.appendRequestData( "OPTION", "XML_MESSAGE_HANDLER" );

      M_objGearBagAjax.appendRequestData( "XML", strMessage );
      M_objGearBagAjax.appendRequestData( "convertToHTML","true");

      M_objGearBagAjax.startRequest();
      M_objGearBagAjax.onRequestComplete = function() {
        
		myHeight.options.onComplete = function() {
		if(myHeight.isOpen()) {
			SetTimeout('DisplayHolster(false);', 5);
			myHeight.options.onComplete = null;
		}}
		
		RefreshHolsterWithNewAJAX(M_objGearBagAjax);
        // Record this event
        CallOmnitureAddGearbag( description, strSizDesc, qty, webSpecial, price, sku, objValidator.color, M_strStyleNum );
		
			lpSendData("page","ConversionAction","GEARBAG - ADD ITEM");
			lpSendData("page","ProductPrice",price);
			lpSendData("page","ProductName",description);
		
		
		
			R3_COMMON.placementTypes = "";
			R3_ITEM = undefined;
			R3_ADDTOCART = new r3_addtocart();
			R3_ADDTOCART.addItemIdToCart(M_strStyleNum + webSpecial);
			r3();
		
      }

      // Dereference pointer
			M_pntDoHolster = function() {}
			
			//need to return true if we passed the validation etc. so that we can know to close the Product Focus Window
      return true;
    }
  }
  catch( e ) {
    HandleError( "AddItemToCartMulti", e, M_strTNPageName );
  }
}


/* Launches p2p window */
function LaunchOnlinePartnersAdd(formName, productIndex, webSpecial, resultingPage) {
	try {
		var objValidator = ValidateProductToAdd( formName, productIndex );
    
		// Need to select a valid size and color
		if( objValidator == null || !objValidator.isValid ) {
      //var errorMessage = 'Please select a size.';
      HandleProductAddValidationError( productIndex );
      return false;
    }
		
		// Selection is valid, build status string
		var prodName = $F('hdnDescription' + productIndex).replace(/&/g, "*");
		prodName = prodName.replace(/®/g, "YCYC");
		var prodPrice = $F('price' + productIndex);
		
		var strParams = "?st=" + objValidator.status + "&sku=" + objValidator.sku + "&dt=" + objValidator.availDate + "&sl=" + M_strStyleNum + "&conm=" + objValidator.color + "&d=" + prodName + "&cnm=" + objValidator.colorDesc + "&sz=" + objValidator.sizeDesc + "&pr=" + prodPrice + "&m=A&md=B";
			
		// If in stock or backordered, wire pointer
		if(objValidator.status == "BO" || objValidator.status == "IS") {
			M_pntDoHolster = function() {
				AddItemToCartMulti(formName, productIndex, webSpecial, location.pathname + location.search);
			}
		}
		
		// Launch window
		DoP2PWin(strParams);
	}
  catch( e ) {
    HandleError( "LaunchOnlinePartnersAdd", e, M_strTNPageName );
  }
}

/* Launches p2p window */
function LaunchOnlinePartnersEdit(formName, productIndex, cartId, resultingPage, webSpecial , cartType) {
	try {
		var objValidator = ValidateProductToAdd( formName, productIndex );
    
		// Need to select a valid size and color
		if( objValidator == null || !objValidator.isValid ) {
      //var errorMessage = 'Please select a size.';
      HandleProductAddValidationError( productIndex );
      return false;
    }
		
		// Selection is valid, build status string
		var prodName = $F('hdnDescription' + productIndex).replace(/&/g, "*");
		prodName = prodName.replace(/®/g, "YCYC");
		var prodPrice = $F('price' + productIndex);
		
		
		var strParams = "?st=" + objValidator.status + "&sku=" + objValidator.sku + "&dt=" + objValidator.availDate + "&sl=" + M_strStyleNum + "&conm=" + objValidator.color + "&d=" + prodName + "&cnm=" + objValidator.colorDesc + "&sz=" + objValidator.sizeDesc + "&pr=" + prodPrice + "&m=E&md=B";
			
		// If in stock or backordered, wire pointer
		if(objValidator.status == "BO" || objValidator.status == "IS") {
			M_pntDoHolster = function() {
				ModifyItemInCartMulti(formName, productIndex, cartId, location.pathname + location.search, webSpecial, cartType);
			}
		}
		
		// Launch window
		DoP2PWin(strParams);
	}
  catch( e ) {
    HandleError( "LaunchOnlinePartnersEdit", e, M_strTNPageName );
  }
}

// Launches P2P window, querystring params get passed in
function DoP2PWin(strParams) {
	try {
		// if lightbox is open, close it
		CloseLightbox();
		
		var intPosLeft, intPosTop, winHeight, winWidth;
		winHeight 	= 600;
		winWidth 		= 570;
		
		intPosLeft = ((screen.width) - winWidth) / 2;
		
		if( screen.height == 600 ) {
			intPosTop = 0;
		}
		else {
			intPosTop = ((screen.height) - winHeight) / 2;
		}

		
		M_oPToPWin = popUpRef('/us' + '/popup/p2p.jsp' + strParams,'win','width=570,height=600,resizable=1,scrollbars=1,left=' + intPosLeft + ',top=' + intPosTop);
	}
  catch( e ) {
    HandleError( "DoP2PWin", e, M_strTNPageName );
  }
}



function AddReloadForm() {
	try {
		var frm = document.createElement("form");
		frm.setAttribute("name", "itemupdateform");
		frm.setAttribute("id", "itemupdateform");
		frm.setAttribute("action", "/us/option");
		frm.setAttribute("method", "post");
		
		var input1 = document.createElement("input");
		input1.setAttribute("type", "hidden");
		input1.setAttribute("name", "OPTION");
		input1.setAttribute("value", "XML_MESSAGE_HANDLER");
		
		var input2 = document.createElement("input");
		input2.setAttribute("type", "hidden");
		input2.setAttribute("name", "XML");
		input2.setAttribute("id", "iuf_hid_XML");
		
		var input3 = document.createElement("input");
		input3.setAttribute("type", "hidden");
		input3.setAttribute("name", "returnJSPPage");
		input3.setAttribute("id", "iuf_hid_returnJSPPage");
		input3.setAttribute("value", "");
		
		frm.appendChild(input1);
		frm.appendChild(input2);
		frm.appendChild(input3);
		
		var existingform = $("itemupdateform");
		if(existingform != null ) {
			existingform.parentNode.removeChild(existingform);
		}
		document.getElementsByTagName("body")[0].appendChild(frm);
	}
	catch(e) {
		HandleError( "AddReloadForm", e, M_strTNPageName );
	}
}

/* We may want to close a lightbox on p2p or some other scenario*/
function CloseLightbox() {
	try {
		if( window.myLightbox ) {
			myLightbox.end();
		}
	}
	catch(e) {
		HandleError( "CloseLightbox", e, M_strTNPageName );
	}
}


function FlagProdLinkWindowOpen(isOpen) {
	try {
		M_bIsProdLinkWinOpen = isOpen;
	}
	catch(e) {
		HandleError( "FlagProdLinkWindowOpen", e, M_strTNPageName );
	}
}

/* updates colors on alt view layer */
function changeAltColor(style, color) {
	try {
		var filename = style + "_" + color;
		var imgid = color + "_" + style + "_b";
		DoUpdateColorSwatches(imgid, "mainalt_swatches");
		DoUpdateAltviews("bimg_MN",$("altviewsb"), null);
		changeAltSwf(filename);
		var imgmn = $("bimg_MN");
		if(imgmn != null) {
			imgmn.src = "/tsimages/" + filename + ".fpx?wid=50&hei=50&ftr=8&cvt=jpeg";
			imgmn.parentNode.onclick = function() {
				changeAltAltView(filename,"bimg_MN");
				return false;
			};
		}
	}
	catch(e) {
		HandleError( "changeAltColor", e, M_strTNPageName );
	}
}
	

function changeAltAltView(filename, imgid) {
	try {
		changeAltSwf(filename);
		DoUpdateAltviews(imgid,$("altviewsb"),null);
	}
	catch(e) {
		HandleError( "changeAltAltView", e, M_strTNPageName );
	}
}
	
	
function getAltVideo(imgid, assetid) {
	try {
		DoUpdateAltviews(imgid,$("altviewsb"),null);
		Element.show('loading');
		Element.hide('lightboxswf');
		M_objGearBagAjax.refreshObject();
		M_objGearBagAjax.setIsXml(false);
		
		M_objGearBagAjax.setDestinationPath( "/us/popup/video-player.jsp" );
		M_objGearBagAjax.appendRequestData( "OPTION", "SAR" );
		M_objGearBagAjax.appendRequestData( "assetid", assetid );
		
		M_objGearBagAjax.startRequest();
		M_objGearBagAjax.onRequestComplete = function() {
			var resp = M_objGearBagAjax.getResponseText();
			var jsresp = resp.split("]]][[[")[0];
			eval(jsresp);
			ResizeZmLightbox(myLightbox);
			Element.show('lightboxswf');
			Element.hide('loading');
		}
	}
	catch(e) {
		HandleError( "getAltVideo", e, M_strTNPageName );
	}
}
	
function changeAltSwf(filename) {
	try {
		myLightbox.resizeElementContainer(1200, 1200);
		var npath = "http://www.patagonia.com/tsimages?TSimg=/tszoom/flash/zoommx.swf&svr=www.patagonia.com&img=tsimages/";
		npath += filename;
		npath += ".fpx&w=560&h=621&bgc=FFFFFF&ui=1&scale=noscale&mz=2&end=swf";
		var so = new SWFObject(npath, 'lblayer', '560','621', '7', '#ffffff');
		so.addParam('scale','noscale');
		so.addParam('height','560px');
		so.addParam('width','621px');
		so.addParam('allowscriptaccess','always');
		so.addParam('wmode','transparent');
		so.addParam('quality','high');
		so.write('lbx');
	}
	catch(e) {
		HandleError( "changeAltSwf", e, M_strTNPageName );
	}
}

/*
Function Name: UpdateColorAndSizes
Description: This function fires when a user clicks a color swatch or changes the color listed in the dropdown menu.
It updates the image, the zoom information and the data populating the sizedropdown.
*/
function PageUpdateCS(color, productID, formName, availIndex, sizeArray, objZm) {
    try {
			var colorName = "color" + availIndex;
			var sizeName = "size" + availIndex;
			var currentColor = getColorNum(color);
		
			RegexPathInfo($("imgMainProduct"), currentColor);
			
			// If small altview img exists, update him
			RegexPathInfo($("img_MN"), currentColor);
			
			// Update the dropdown menu
			var elmt = $(colorName);
			if ($F(colorName).indexOf(currentColor) == -1) {
				for (var i = 0; i < elmt.options.length; i++) {
					if (elmt.options[i].value.indexOf(currentColor) != -1) {
						elmt.selectedIndex = i;
						break;
					}
				}
			}
			
			var cname = $F(colorName);
			updateSizeDropDown(currentColor, formName, sizeName, availIndex, sizeArray);
			UpdateColorSwatches(currentColor, productID);
			Element.update("colorname", cname);
			
			UpdateZoom(cname, productID + "_" + currentColor);
			
			ClearProductAddValidationErrors();
			var filename = productID + "_" + currentColor;
			objZm.setFileName(productID + "-" + currentColor);
			objZm.setColor(currentColor);
			ChangeView("MN", productID, filename, objZm);
			
			// Update print page link
			var aPrint 	= $("printproduct").getElementsByTagName("a")[0];
			var attHref = aPrint.getAttribute("href");
			var qparms 	= attHref.toQueryParams();
			var newhref = attHref.replace("style_color=" + qparms['style_color'], "style_color=" + productID + "-" + currentColor);
			aPrint.setAttribute("href", newhref);
			
    }
		catch( e ) {
      HandleError( "PageUpdateCS", e, M_strFileName );
    }
}


/*
Function Name: UpdateZoom
Description: When a color or view selection changes, we update some attributes so that the zoom will zoom into the current view.
*/
function UpdateZoom(colorname, filename) {
	try {
		var zmurl = "http://www.patagonia.com/tsimages?TSimg=/tszoom/flash/zoommx.swf&svr=www.patagonia.com&img=tsimages/";
		zmurl += filename;
		zmurl += ".fpx&w=600&h=600&bgc=FFFFFF&rgn=0.21,0.104,0.579,0.583&mz=2,2&ui=1&nv=1&end=swf";
		
		$("imgzoom").parentNode.setAttribute("href", zmurl);
		$("imgMainProduct").parentNode.setAttribute("href", zmurl);
		$("imgAltProduct").parentNode.setAttribute("href", zmurl);
		
	}
	catch( e ) {
		HandleError( "UpdateZoom", e, M_strFileName );
	}
}


/*
Function Name: ChangeView
Description: Used on the product page to adjust alt views.
When selecting an alt view, we replace the main image with the alt view image.
*/
function ChangeView(code, refid, filename, objZm) {
	try {
		objZm.setViewCode(code);
		var oAltViews = $("altviews");
		if( oAltViews != null ) {
			DoUpdateAltviews("img_" + code, oAltViews, "colorname");
			
			// If code is for main view, display that window
			if(code == "MN") {
				Element.setStyle("imgMainProduct", {display: 'block' });
				Element.setStyle("imgAltProduct", {display: 'none' });
				var colorname = $F("color0");
				var colornum = getColorNum(colorname);
				var file = refid + "_" + colornum;
				Element.update("colorname", colorname );
				UpdateZoom(colorname, file);
				objZm.setFileName(filename);
			}
			else {
				var prefix = "/tsimages/";
				var pstfix = ".fpx?wid=360&hei=360&ftr=8&cvt=jpeg";
				
				$("imgAltProduct").src = prefix + filename + pstfix;
				
				Element.setStyle("imgMainProduct", {display: 'none' });
				Element.setStyle("imgAltProduct", {display: 'block' });
				objZm.setFileName(filename);
				UpdateZoom("", filename);
			} // end else
		} // end if not null
	}
	catch( e ) {
		HandleError( "ChangeView", e, M_strFileName );
	}	
}

function DoUpdateAltviews(imgid, oAltViews, cnameid) {
	try {
		var altname;
		// Highlight the selected view
		if(oAltViews != null) {
			var aImgs = $A(oAltViews.getElementsByTagName("img"));
			aImgs.each( function(node) {
					if( node.id == imgid) {
						node.className = "altviewon";
						altname = node.getAttribute("alt");
						
						if(cnameid != null) {
							Element.update(cnameid, node.getAttribute("alt"));
						}
					}
					else {
						node.className = "altviewoff";
					}
				});
		}
	}
	catch( e ) {
		HandleError( "DoUpdateAltviews", e, M_strFileName );
	}	
}

/* 
Function Name: UpdateColorSwatches
Description: Selectes/Deselects the current color swatch by swapping CSS styles.  It does
this by iterating through the swatches and looking for the one thats been selected.
*/
UpdateColorSwatches = function(colorNum, styleNum) {
	DoUpdateColorSwatches(colorNum + "_" + styleNum, "main_swatches");
}


function DoUpdateColorSwatches(swatchid, divid) {
	try {
		
		var aImgs = $A($(divid).getElementsByTagName("img"));
		aImgs.each( function(node) {
				node.id == swatchid ? node.className = "mainswatchon" : node.className = "mainswatchoff";			 
			});
	}
	catch( e ) {
		HandleError( "DoUpdateColorSwatches", e, M_strFileName );
	}
}

function ZoomLayer(style, isWs, filename, viewcode, color) {
	var _style = style;
	var _isWS = isWs;
	var _filename = filename;
	var _viewcode = viewcode;
	var _currentColor = color;
	
	this.setColor = function(co) {
		_currentColor = co;
	}
	
	this.getColor = function() {
		return _currentColor;
	}
	
	this.setFileName = function(fn) {
		_filename = fn;
	}
	
	this.setViewCode = function(vc) {
		_viewcode = vc;
	}
	
	this.launchLayer = function() {
		var zmURL = "/us/popup/alternate-product-views.jsp?OPTION=PRODUCT_FOCUS_DISPLAY_HANDLER&style_color=" + _style + "-";
		zmURL += _currentColor + "&v=";
		zmURL += _filename;
		zmURL += "&vc=";
		zmURL += _viewcode;
		zmURL += "&ws="+ _isWS +"&end=prd";
		myLightbox.startWith(zmURL, "", 600, 600);
	}
	
	this.launchView = function(fn,view) {
		this.setFileName(fn);
		this.setViewCode(view);
		this.launchLayer();
	}
}

/*
Function Name: ShowFootprintTab
Description: Shows the contents of the Footprint Tab, hides the content of the ProductInfo Tab.
*/
function ShowFootprintTab() {
	try {
		$("imgfootprinttab").setAttribute("src", "/images/structure/en_US/product_focus_page/tabs/tab_prod_footprint_on.gif");
		$("imgproducttab").setAttribute("src", "/images/structure/en_US/product_focus_page/tabs/tab_prod_info_off.gif");
		Element.setStyle("maincopyarea",{display: 'none'});
		Element.setStyle("footprinttext",{display: 'block'});
	} 
	catch( e ) {
     HandleError( "ShowFootprint", e, M_strFileName );
  }
}

/*
Function Name: ShowProductTab
Description: Shows the contents of the Product Tab, hides the content of the Footprint Tab.
*/
function ShowProductTab() {
	try {
		$("imgfootprinttab").setAttribute("src", "/images/structure/en_US/product_focus_page/tabs/tab_prod_footprint_off.gif");
		$("imgproducttab").setAttribute("src", "/images/structure/en_US/product_focus_page/tabs/tab_prod_info_on.gif");
		Element.setStyle("footprinttext",{display: 'none'});
		Element.setStyle("maincopyarea",{display: 'block'});
	} 
	catch( e ) {
     HandleError( "ShowProductTab", e, M_strFileName );
  }
}

function av(obj,desc) {
	try {
		return;
		/*
		if(typeof(s_account) == 'undefined') return;
		
		var s=s_gi(s_account);
		s.linkTrackVars='eVar9,eVar10,events';
		s.linkTrackEvents='event11';
		s.eVar9=desc;
		s.eVar10=s.prop7;
		s.events='event11';
		s.tl(obj,'o','Alternate Product View');
		*/
	}
	catch( e ) {
		HandleError( "av", e, M_strPageName );
	}
}



		
var M_TotalReviewCount 	= "";
var M_AvgRating 				= "";
var M_TotalRating 			= "";
var M_BuyAvgPct 				= "";
					

function setRatingsDisplayed() {
	try {
		if(!IsEmpty(s_account)) {
			var s=s_gi(s_account);
			s.eVar14	= M_TotalReviewCount;
			s.eVar15	= M_AvgRating;
			s.eVar16	= M_TotalRating;
			s.eVar17	= M_BuyAvgPct;
		}
	}
	catch( e ) {
		HandleError( "setRatingsDisplayed", e, M_strPageName );
	}
}

function bvShowTab(application, displayCode, subjectId, deepLinkId) {  
	try {
		if (application == 'PRR') {  
			// TODO: insert code here to open the tab that R&R content lives in  
			//       if there is no such tab (content is visible by default), this  
			//       block may be removed.  
		}
	}
	catch( e ) {
		HandleError( "bvShowTab", e, M_strPageName );
	}	
}
				
function ratingsDisplayed(totalReviewsCount, avgRating, ratingsOnlyReviewCount, buyAgainPercentage, productID) {
	try {
		 if (totalReviewsCount > 0) {
					var bvRevCntr = $("BVReviewsContainer");
					if (bvRevCntr) { 
						Element.setStyle(bvRevCntr, {display: 'block' });
					}
					
					var bvSVPLink = $("BVSVPLinkContainer");
					if (bvSVPLink) {
						Element.setStyle(bvSVPLink, {display: 'block' });
					}
					
					var bvSecRat = $("BVSecondaryCustomerRatings");
					if (bvSecRat) {
						Element.setStyle(bvSecRat, {display: 'block' });
					}
		 }
		 
		// Other custom items leveraging these values.
		M_TotalReviewCount	= totalReviewsCount;
		M_AvgRating	= Math.round(avgRating * 10) / 10;
		M_TotalRating	= ratingsOnlyReviewCount;
		M_BuyAvgPct	= buyAgainPercentage;
	}
	catch(e) {
		HandleError( "ratingsDisplayed", e, M_strPageName );
	}
}

