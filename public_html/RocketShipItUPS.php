<?php
// Copyright RocketShipIt LLC All Rights Reserved
// Author: Mark Sanborn
// Version 1.0.3
// For Support email: support@rocketship.it
// Submit bugs to: http://bugs.rocketship.it

// Feel free to modify the following defaults:
date_default_timezone_set('America/Denver');

/**
* This function is used to set generic defaults.  I.e. They are not carrier-specific.
*
* These defaults will be used across all carriers.  They can be overwritten on the 
* shipment/package level.
*/
function getGenericDefault($def) {
    switch ($def) {
        case 'debugMode':
            // 1 for Debug mode; 0 for normal operations
            // This also changes from testing to production mode
            return 0;
        case "shipper":
            // your company name
            return "Merrow Sewing Machine Company";
        case "shipContact":
            // key shipping contact individual at your company
            return "Charlie Merrow";
        case 'shipAddr1':
            return '502 Bedford St';
        case 'shipAddr2':
            return '';
        case 'shipCity':
            return 'Fall River';
        case 'shipState':
            // the two-letter State or Province code
            // ex. MT = Montana, ON = Ontario
            return 'MA';
        case 'shipCode':
            // The Zip or Postal code
            return '02720'; // used in rate and ship
        case 'shipCountry':
            // The two-letter country code
            return 'US';
        case 'shipPhone':
            // Phone number in this format: 1234567890
            return '55512122211';
        case "toCountry":
            return "US";
        default:
            return "";
    }
}




/**
* This function is used to set UPS specfic defaults.
*
* These defaults will be used for UPS calls only.  They can be overwritten on the 
* shipment/package level using the setParameter() function.
*/
function getUPSDefault($def) {
    switch($def) {
        // The following variables are for your UPS Developer license
        case 'license':
            // your UPS XML Access Key TODO: Insert link to get one
            return '3C413AE830606338';
        case 'username':
            // your UPS Developer username
            return 'merrow';
        case 'password':
            // your ups Developer password
            return 'merr0w9179';
        case 'verifyAddress':
            // Make sure addresses are valid before label creation
            // validate, nonvalidate
            return 'validate';

        // The following variables govern the way the system functions
        case 'labelPrintMethodCode':
            // Options
                // ZPL - Zebra UPS Thermal Printers
                // EPL - Eltron UPS Thermal Printers
                // GIF - Image based, desktop inkjet printers
                // STARPL
                // SPL
                return 'GIF';
        case 'httpUserAgent':
            // Used when printing GIF images
            return 'Mozilla/4.5';
        case 'labelHeight':
            // Only valid option for ZPL, EPL, STARPL, and SPL is 4
            // When using inches use whole numbers only
            return '4';
        case 'labelWidth':
            // Options are 6 or 8 inches
            return '6';
        case 'labelImageFormat':
            // Options
                // GIF - A gif image
            return 'GIF';

        // The following variables are for your UPS account
        // They typically don't change from shipment to shipment; although,
        // you may set any of them directly.
        case 'accountNumber':
            // Your UPS Account number
            return '099640';
        case 'PickupType':
            // Options
                // 01 - Daily Pickup
            return '01';
        case 'weightUnit':
            // LBS or KGS
            return 'LBS';
        case 'lengthUnit':
            // IN, or CM
            return 'IN';
        case 'insuredCurrency':
            // See the ups manual for a list of all currency types
            return 'USD';
        case 'toCountryCode':
            // two-letter country code
            return 'US';

        // The following variables set the defaults for individual shipments
        // you may set them here to save time, or you may set them explicitly
        // each time you use the classes.
        case 'shipmentDescription': 
            return 'My RocketShipIt Shipment';
        case 'service':
            // Options
                // 01 - UPS Next Day Air
                // 02 - UPS Second Day Air
                // 03 - UPS Ground
                // 07 - UPS Worldwide Express
                // 08 - UPS Worldwide Expedited
                // 11 - UPS Standard
                // 12 - UPS Three-Day Select
                // 13 - Next Day Air Saver 
                // 14 - UPS Next Day Air Early AM
                // 54 - UPS Worldwide Express Plus
                // 59 - UPS Second Day Air AM
                // 65 - UPS Saver
            return '03';
        case 'packagingType':
            // Options
                // 01 - UPS Letter
                // 02 - Your Packaging
                // 03 - Tube
                // 04 - PAK
                // 21 - Express Box
                // 24 - 25KG Box
                // 25 - 10KG Box
                // 30 - Pallet
                // 2a - Small Express Box
                // 2b - Medium Express Box
                // 2c - Large Express Box
            return '02'; // used in rate and ship
        case 'packageDescription':
            return 'Rate';
        case 'residentialAddressIndicator':
            // Set '0' for commercial '1' for residential
            return '0';
		case 'negotiatedRates':
			// Set '0' for retail rates '1' for negotiated
            // You must turn this on with your UPS account rep
			return '0';
        case 'referenceCode':
            // Options
                // 02 - Invoice Number
                // others..
            return '{{rocket_upsReferenceCode}}'; // Used in ship
        case 'returnCode':
            // Options
            // 2 - UPS Print and Mail (PNM)
            // 3 - UPS Return Service 1-Attempt (RS1)
            // 5 - UPS Return Service 3-Attempt (RS3)
            // 8 - UPS Electronic Return Label (ERL)
            // 9 - UPS Print Return Label (PRL) 
            return '';

        // Any variable not found above will return blank ('').
        default:
            return '';
    }
}




// -------------------------------------------------------------------------------------
// --------------------------(Don't modify below this line)-----------------------------
// -------------------------------------------------------------------------------------

/**
* Ensures that only settable paramaters are allowed.
*
* This class aids the setPramater() function in that it only
* allows known paramaters to be set.  This helps to avoid typos.
*/
function getOKparams ($carrier) {
	$generic = array('shipper','enableRocketShipAPI','shipContact','shipPhone','accountNumber',
                     'shipAddr1','shipAddr2','shipAddr3','shipCity','shipState',
                     'shipCode','shipCountry','toCompany','toName',
                     'toPhone','toAddr1','toAddr2','toAddr3','toCity',
                     'toState','toCountry','toCode','service',
                     'weightUnit',"length","width","height","weight");
	switch ($carrier) {
		case "UPS":
			$specific = array('earliestTimeReady','latestTimeReady','httpUserAgent',
					  		  'labelPrintMethodCode','labelDescription','labelHeight',
                              'labelWidth','labelImageFormat','residentialAddressIndicator',
                              'PickupType', 'pickupDescription','shipmentDescription',
							  'packagingType','packageLength','packageWidth',
                              'packageHeight','packageWeight','referenceCode',
                              'referenceValue','insuredCurrency','monetaryValue',
                              'referenceCode2','referenceValue2','pickupDate',
                              'lengthUnit','serviceDescription','returnCode',
                              'fromName','fromAddr1','fromAddr2','fromAddr3',
                              'fromCity','fromState','fromCode','fromCountry',
                              'packageDescription','returnEmailAddress',
                              'returnUndeliverableEmailAddress','returnFromEmailAddress',
                              'returnEmailFromName','verifyAddress','negotiatedRates');
			break;
		case "USPS":
			$specific = array('userid','imageType','weightPounds','weightOunces',
                              'firstClassMailType');
			break;
        case "FEDEX":
            $specific = array('key','packagingType','weightUnit','lengthUnit',
                'dropoffType','residential','paymentType','labelFormatType',
                'imageType','labelStockType','packageCount','sequenceNumber',
                'trackingIdType','trackingNumber','shipmentIdentification',
                'pickupDate');
            break;
	}
	return (array_merge($generic,$specific));
}


/**
* Main Shipping class for producing labels and notifying carriers of pickups.
*
* This class is a wrapper for use with all carriers to produce labels for
* shipments.  Valid carriers are: UPS, USPS, and FedEx.
*/
class RocketShipShipment {
	
	var $OKparams;

    function __Construct($carrier,$license='',$username='',$password='') {
		$carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != "USPS" && $carrier != "FEDEX") {
			die ("Unknown carrier in RocketShipShipment: $carrier");
		}
        $this->carrier = $carrier;
		$this->OKparams = getOKparams($carrier);
		
		// Grab generic default shipment attributes
		$this->setParameter("shipper","");
		$this->setParameter("enableRocketShipAPI","");
		$this->setParameter("shipContact","");
		$this->setParameter('shipAddr1',"");
		$this->setParameter('shipAddr2',"");
		$this->setParameter('shipCity',"");
		$this->setParameter('shipState',"");
		$this->setParameter('shipCode',"");
		$this->setParameter('shipCountry',"");
		$this->setParameter('shipPhone',"");
		$this->setParameter('toCountry',"");
		$this->setParameter('toAddr2',"");
		// Grab carrier-specific defaults that are common to all carrier types
		$this->setParameter("accountNumber","");
		$this->setParameter('service',"");
		// Set up core class and grab carrier-specific defaults that are unique to the current carrier
		if ($carrier == "UPS") {
            if ($license == '') {
                $l = getUPSDefault('license');
            } else {
                $l = $license;
            }
            if ($username == '') {
                $u = getUPSDefault('username');
            } else {
                $u = $username;
            }
            if ($password == '') {
                $p = getUPSDefault('password');
            } else {
                $p = $password;
            }
			$this->core = new ups($l,$u,$p); // This class depends on ups

			$this->setParameter('labelPrintMethodCode',"");
			$this->setParameter('httpUserAgent',"");
			$this->setParameter('labelHeight',"");
			$this->setParameter('labelWidth',"");
			$this->setParameter('labelImageFormat',"");
			$this->setParameter('lengthUnit',"");
			$this->setParameter('residentialAddressIndicator',"");
			$this->setParameter('toName',"");
			$this->setParameter('toCompany',"");
			$this->setParameter('toAddr2',"");
			$this->setParameter('serviceDescription',"");
			$this->setParameter('labelDescription',"");
			$this->setParameter('returnCode',"");
			$this->setParameter('fromName',"");
			$this->setParameter('fromAddr1',"");
			$this->setParameter('fromAddr2',"");
			$this->setParameter('fromAddr3',"");
			$this->setParameter('fromCity',"");
			$this->setParameter('fromState',"");
			$this->setParameter('fromCode',"");
			$this->setParameter('fromCountry',"");
			$this->setParameter('packageDescription',"");
            $this->setParameter('returnEmailAddress','');
            $this->setParameter('returnUndeliverableEmailAddress','');
            $this->setParameter('returnFromEmailAddress','');
            $this->setParameter('returnEmailFromName','');
            $this->setParameter('monetaryValue','');
            $this->setParameter('verifyAddress','');
            $this->setParameter('shipmentDescription','');
            $this->setParameter('referenceValue','');
            $this->setParameter('referenceCode','');
		}

        if ($carrier == "USPS") {
            $this->core = new usps(); // This class depends on the usps core class
            $this->setParameter('userid','');
            $this->setParameter('service','');
            $this->setParameter('imageType','');
        }
        if ($carrier == 'FEDEX') {
            $this->core = new fedex(); // This class depends on fedex
			$this->setParameter('packagingType','');
			$this->setParameter('weightUnit','');
			$this->setParameter('lengthUnit','');
			$this->setParameter('service','');
			$this->setParameter('residential','');
			$this->setParameter('toName','');
			$this->setParameter('toCompany','');
			$this->setParameter('length','');
			$this->setParameter('dropoffType','');
			$this->setParameter('paymentType','');
			$this->setParameter('labelFormatType','');
			$this->setParameter('imageType','');
			$this->setParameter('labelStockType','');
			$this->setParameter('packageCount','');
			$this->setParameter('sequenceNumber','');
			$this->setParameter('shipmentIdentification','');
        }
	}

	
    /**
    * Sets paramaters to be used in {@link RocketShipShipment() RocketShipShipment}.
    *
    * Only valid parameters are accepted.  
    * @see getOKparams()
    */
	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
                    case "USPS":
                        $value = getUSPSDefault($param);
                        break;
                    case "FEDEX":
                        $value = getFEDEXDefault($param);
                        break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
	
    /**
    * This is a wrapper to create a running package for each carrier.
    *
    * This is used to add packages to a shipment for any carrier.
    * You use the {@link RocketShipPackage} class to create a package
    * object.
    */
	function addPackageToShipment ($packageObj) {
		switch ($this->carrier) {
			case "UPS":
				return $this->addPackageToUPSshipment($packageObj);
            case "USPS":
                return $this->addPackageToUSPSshipment($packageObj);
            case 'FEDEX':
                return $this->addPackageToFEDEXshipment($packageObj);
			default:
				return false;
		}
	}
	
    
	private function addPackageToUPSshipment ($packageObj) {

		$package = $packageObj;
		
		if (!isset($this->core->packagesObject)) {
			$this->core->packagesObject = new xmlBuilder(true);
		}

		$xml = $this->core->packagesObject;

		$xml->push('Package');
            $xml->element('Description',$this->packageDescription);
			$xml->push('PackagingType');
				$xml->element('Code', $package->packagingType);
			$xml->pop(); // end PackagingType
			$xml->push('Dimensions');
				$xml->push('UnitOfMeasurement');
					$xml->element('Code', $package->lengthUnit);
				$xml->pop(); // end UnitOfMeasurement
				$xml->element('Length', $package->length);
				$xml->element('Width', $package->width);
				$xml->element('Height', $package->height);
			$xml->pop(); // end Dimensions
			$xml->push('PackageWeight');
				$xml->element('Weight', $package->weight);
			$xml->pop(); // end PackageWeight

            if ($package->referenceValue && $package->referenceCode != '') {
                $xml->push('ReferenceNumber');
                    $xml->element('Code', $package->referenceCode);
                    $xml->element('Value', $package->referenceValue);
                $xml->pop(); // end ReferenceNumber
            }

            if ($package->referenceValue2 && $package->referenceCode2 != '') {
                $xml->push('ReferenceNumber');
                    $xml->element('Code', $package->referenceCode2);
                    $xml->element('Value', $package->referenceValue2);
                $xml->pop(); // end ReferenceNumber
            }

			if ($package->monetaryValue != '') {
				$xml->push('PackageServiceOptions');
					$xml->push('InsuredValue');
						$xml->element('CurrencyCode', $package->insuredCurrency);
						$xml->element('MonetaryValue', $package->monetaryValue);
					$xml->pop(); // End Insured Value
					// $xml->push('VerbalConfirmation');
					// 	$xml->element('Name', 'SidneySmith');
					// 	$xml->element('PhoneNumber', '4105551234');
					// $xml->pop(); // end VerbalConfirmation
				$xml->pop(); // end PackageServiceOptions
			}

		$xml->pop(); // end Package

		$this->core->packagesObject = $xml;

		return true; // Couldn't think of anything else to return as the xml is already stored
	}
    
	
    
	private function buildUPSshipmentXML() {
		$xml = $this->core->xmlObject;

		$xml->push('ShipmentConfirmRequest');
		$xml->push('Request');
		$xml->push('TransactionReference');
			$xml->element('CustomerContext', 'RocketShipIt');
			$xml->element('XpciVersion', '1.0001');
		$xml->pop();
		$xml->element('RequestAction', 'ShipConfirm');
		$xml->element('RequestOption', $this->verifyAddress);
		$xml->pop(); // end Request
		$xml->push('Shipment');
            if ($this->shipmentDescription != '') {
                $xml->element('Description',$this->shipmentDescription);
            }
        if ($this->returnCode != '') {
            $xml->push('ReturnService');
                $xml->element('Code',$this->returnCode);
            $xml->pop(); // end ReturnService
        }
        if ($this->returnCode == '8') {
            $xml->push('ShipmentServiceOptions');
                $xml->push('LabelDelivery');
                    $xml->push('EMailMessage');
                        $xml->element('EMailAddress',$this->returnEmailAddress);
                        $xml->element('UndeliverableEMailAddress',$this->returnUndeliverableEmailAddress);
                        $xml->element('FromEMailAddress',$this->returnFromEmailAddress);
                        $xml->element('FromName',$this->returnEmailFromName);
                    $xml->pop(); // end EMailMessage
                $xml->pop(); // end LabelDelivery
            $xml->pop(); // end ShipmentServiceOptions
        }
		$xml->push('Shipper');
			$xml->element('Name', $this->shipper);
			if ($this->shipContact != '') {
				$xml->element('AttentionName', $this->shipContact);
			}
			$xml->element('ShipperNumber', $this->accountNumber);
			$xml->push('Address');
				$xml->element('AddressLine1', $this->shipAddr1);
				if ($this->shipAddr2 != '') {
					$xml->element('AddressLine2',$this->shipAddr2);
				}
				$xml->element('City', $this->shipCity);
				$xml->element('StateProvinceCode', $this->shipState);
				$xml->element('PostalCode', $this->shipCode);
			$xml->pop(); // end Address
		$xml->pop(); // end Shipper 
		$xml->push('ShipTo');
			if ($this->toCompany == "" && $this->toName == "") {
				exit("Must have either name or company set for shipping address");
			}
			if ($this->toCompany != '') {
				$xml->element('CompanyName', $this->toCompany);
			} else {
				$xml->element('CompanyName', $this->toName);
			}
			if ($this->toName != '') {
					$xml->element('AttentionName', $this->toName);
			}
			//$xml->push('PhoneNumber');
				//$xml->push('StructuredPhoneNumber');
					//$xml->element('PhoneDialPlanNumber', $this->toPhoneDialPlanNumber);
					//$xml->element('PhoneLineNumber', $this->toPhone);
					//$xml->element('PhoneExtension', $this->toPhoneExtention);
				//$xml->pop(); // end StrurcturedPhoneNumber 
			//$xml->pop(); // end PhoneNumber 
			$xml->push('Address');
				$xml->element('AddressLine1', $this->toAddr1);
				if ($this->toAddr2 != '') {
					$xml->element('AddressLine2',$this->toAddr2);
				}
				$xml->element('City', $this->toCity);
				$xml->element('StateProvinceCode', $this->toState);
				$xml->element('CountryCode', $this->toCountry);
				$xml->element('PostalCode', $this->toCode);
				if ($this->residentialAddressIndicator == '1') {
					$xml->element('ResidentialAddress', '');
				}
			$xml->pop(); // end Address
		$xml->pop(); // end ShipTo
        if ($this->fromName!= '') {
            $xml->push('ShipFrom');
                $xml->element('CompanyName',$this->fromName);
                $xml->push('Address');
                    $xml->element('AddressLine1',$this->fromAddr1);
                    if ($this->fromAddr2 != '') {
                        $xml->element('AddressLine2',$this->fromAddr2);
                    }
                    if ($this->fromAddr3 != '') {
                        $xml->element('AddressLine3',$this->fromAddr3);
                    }
                    $xml->element('City',$this->fromCity);
                    $xml->element('StateProvinceCode',$this->fromState);
                    $xml->element('CountryCode',$this->fromCountry);
                    $xml->element('PostalCode',$this->fromCode);
                $xml->pop(); // end Address
            $xml->pop(); // end ShipFrom
        }
		$xml->push('Service');
			$xml->element('Code', $this->service);
			if ($this->serviceDescription != '') {
				$xml->element('Description', $this->serviceDescription);
			}
		$xml->pop(); // end Service 
		$xml->push('PaymentInformation');
			$xml->push('Prepaid');
				$xml->push('BillShipper');
					$xml->element('AccountNumber', $this->accountNumber);	
					//$xml->push('CreditCard');
						// $xml->element('Type', '06');
						// $xml->element('Number', '4111111111111111');
						// $xml->element('ExpirationDate', '091909');
					//$xml->pop(); // end CreditCard
				$xml->pop(); // end BillShipper 
			$xml->pop(); // end Prepaid
		$xml->pop(); // end PaymentInformation
//		$xml->push('ShipmentServiceOptions');
//			$xml->push('OnCallAir');
//				$xml->push('PickupDetails');
//					$xml->element('PickupDate', $this->pickupDate);
//					$xml->element('EarliestTimeReady', $this->earliestTimeReady);
//					$xml->element('LatestTimeReady', $this->latestTimeReady);
//					$xml->push('ContactInfo');
//						$xml->element('Name', $this->contactName);
//						$xml->element('PhoneNumber', $this->contactPhoneNumber);
//					$xml->pop(); // end ContactInfo
//				$xml->pop(); // end PickupDetails
//			$xml->pop(); // end OnCallAir
//		$xml->pop(); // end ShipmentServiceOptions

		$xmlString = $xml->getXml();

		$xmlString .= $this->core->packagesObject->getXml();

		$xmlString .= '</Shipment>'. "\n";

		$xml = new xmlBuilder(true);

		$xml->push('LabelSpecification');
			$xml->push('LabelPrintMethod');
				$xml->element('Code', $this->labelPrintMethodCode);
					$xml->element('Description', $this->labelDescription);
			$xml->pop(); // end LabelPrintMethod
			$xml->element('HTTPUserAgent', $this->httpUserAgent);
				$xml->push('LabelStockSize');
					$xml->element('UnitOfMeasurement', $this->lengthUnit);
					$xml->element('Height', $this->labelHeight);
					$xml->element('Width', $this->labelWidth);
				$xml->pop(); // end LabelStockSize
			$xml->push('LabelImageFormat');
				$xml->element('Code', $this->labelImageFormat);
			$xml->pop(); // end LabelImageFormat
		$xml->pop(); // end LabelSpecification

		$labelXmlString = $xml->getXml();
		
		$xmlString .= $labelXmlString;

		$xmlString .= '</ShipmentConfirmRequest>';
		return $xmlString;
	}
    

    

    

    
    function simplifyUPSResponse($xmlArray) {
        if ($xmlArray['ShipmentConfirmResponse']['Response']['ResponseStatusCode']['VALUE'] != "1") {
            return ("Error confirming shipment: ".
                    $xmlArray['ShipmentConfirmResponse']['Response']['Error']['ErrorDescription']['VALUE'].
                    " (".$xmlArray['ShipmentConfirmResponse']['Response']['Error']['ErrorCode']['VALUE'].")");
        }


        $labelArray = $this->getUPSlabels();
        $a = $labelArray['ShipmentAcceptResponse']['ShipmentResults'];
        $outArr = "";
        $outArr['charges'] 	= $a['ShipmentCharges']['TotalCharges']['MonetaryValue']['VALUE'];
        $outArr['trk_main']	= $a['ShipmentIdentificationNumber']['VALUE'];
        if (array_key_exists('TrackingNumber',$a['PackageResults'])) {	
            // just a single label
            $outArr['pkgs'][0]['pkg_trk_num'] 	= $a['PackageResults']['TrackingNumber']['VALUE'];
            $outArr['pkgs'][0]['label_fmt']	= $a['PackageResults']['LabelImage']['LabelImageFormat']['Code']['VALUE'];
            $outArr['pkgs'][0]['label_img']	= $a['PackageResults']['LabelImage']['GraphicImage']['VALUE'];
        } else {
            // multiple labels
            for ($i=0; $i<count($a['PackageResults']); $i++) {
                $pkg = $a['PackageResults'][$i];
                $outArr['pkgs'][$i]['pkg_trk_num'] 	= $pkg['TrackingNumber']['VALUE'];
                $outArr['pkgs'][$i]['label_fmt']	= $pkg['LabelImage']['LabelImageFormat']['Code']['VALUE'];
                $outArr['pkgs'][$i]['label_img']	= $pkg['LabelImage']['GraphicImage']['VALUE'];
            }
        }
        return $outArr;
    }
    


    /**
    * Sends the shipment data to the carrier.
    * 
    * After the shipment data is sent it returns a simplified array of
    * the data sent back from the carrier.
    */
	function submitShipment() {
		switch ($this->carrier) {
			case "UPS":
				$shipResponse = $this->sendUPSshipment();
                $simpleArray = $this->simplifyUPSResponse($shipResponse);
				return $simpleArray;
            case 'USPS':
                return $this->sendUSPSshipment();
            case 'FEDEX':
                return $this->sendFEDEXshipment();
			default:
				return false;
		}
	}
	
	function sendShipment () {
		switch ($this->carrier) {
			case "UPS":
				return $this->sendUPSshipment();
			default:
				return false;
		}
	}
		
    
	private function sendUPSshipment () {
		$xml = $this->buildUPSshipmentXML();

		$responseXml = $this->core->request('ShipConfirm', $xml);

		$this->core->xmlSent = $xml;
		$this->core->xmlResponse = $responseXml;

		// This is kind of wierd, normally we dont have to reuse the xmlObject in other UPS 
		// services; however, the shipping service requires you to make two seperate XML
		// requests before you get a lablel.  To prepare for the next XML request (see getLabel)
		// we need to reset the object so nothing is in it.
		$this->core->xmlObject = new xmlBuilder(false); // reset the object so getLabel can start a new one

		$xmlParser = new upsxmlParser();
        
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();

		return $xmlArray; 
	}
    
	
// Probably end up removing this method
//	function responseArray() {
//		$xmlParser = new upsxmlParser();
//		$responseArray = $xmlParser->xmlParser($this->responseXml);
//		$responseArray = $xmlParser->getData();
//		return $responseArray;	
//	}

	// To the end user this will just show the array (or label)
	// In actuality it is doing the final request to UPS approval process.
	// In this function we are approving the shipment in the sendShipment() function.  
	// In other words it is a two step process.
	// TODO: rename this method and create a new one that only displays the label.
	function getLabels() {
		switch ($this->carrier) {
			case "UPS":
				return $this->getUPSlabels();
			default:
				return false;
		}
	}
	
    
	private function getUPSlabels () {
	
		$xmlParser = new upsxmlParser();
		$responseArray = $xmlParser->xmlParser($this->core->xmlResponse);
		$responseArray = $xmlParser->getData();

		$shipmentDigest = $responseArray['ShipmentConfirmResponse']['ShipmentDigest']['VALUE'];

		$this->core->access(); // populate the ups->xmlObject with access xml

		$xml = $this->core->xmlObject;
		$xml->push('ShipmentAcceptRequest');
			$xml->push('Request');
				$xml->push('TransactionReference');
					$xml->element('CustomerContext', 'guidlikesubstance');
					$xml->element('XpciVersion', '1.0001');
				$xml->pop(); // end TransactionReference
			$xml->element('RequestAction', 'ShipAccept');
			$xml->pop(); // end Request
		$xml->element('ShipmentDigest', $shipmentDigest);
		$xml->pop(); // end ShipmentAcceptRequest

		$xmlString = $xml->getXml();

        // Put the xml that is sent do UPS into a variable so we can call it later for debugging.
		$this->core->xmlSent = $xmlString;

        $this->core->xmlResponse = $this->core->request('ShipAccept', $xmlString);

		$xmlParser = new upsxmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();
		return $xmlArray; 
	}
    
}




/**
* Main class for voiding shipments.
*
* This class is a wrapper for use with all carriers to cancel 
* shipments.  Valid carriers are: UPS, USPS, and FedEx.
* To create a shipment see {@link RocketShipShipment}.
*/
class RocketShipVoid {
	
	var $OKparams;

	function __Construct($carrier,$license='',$username='',$password='') {
		$carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != 'FEDEX') {
			die ("Unkown carrier in RocketShipVoidShipment: $carrier");
		}
		$this->carrier = $carrier;
		$this->OKparams = getOKparams($carrier);
		if ($carrier == "UPS") {
            if ($license == '') {
                $l = getUPSDefault('license');
            } else {
                $l = $license;
            }
            if ($username == '') {
                $u = getUPSDefault('username');
            } else {
                $u = $username;
            }
            if ($password == '') {
                $p = getUPSDefault('password');
            } else {
                $p = $password;
            }
			$this->core = new ups($l,$u,$p); // This class depends on ups
		}
        if ($carrier == 'FEDEX') {
			$this->core = new fedex(); // This class depends on fedex 
        }
	}

    /**
    * Void (cancel) a shipment at the shipment level.  I.e. all packages.
    *
    * This will void all packages linked to the ShipmentIdentification 
    * number.  Often times this is the first tracking number in a set
    * of packages.
    */
	function voidShipment($shipmentIdentification) {
		switch ($this->carrier) {
			case "UPS":
				$this->shipmentIdentification = $shipmentIdentification;
				return $this->voidUpsShipment();	
				$xmlArray = $this->voidUpsPackage();
				$a = $xmlArray['VoidShipmentResponse'];
				$outArr = "";
				if ($a['Response']['ResponseStatusCode']['VALUE'] == "1") {
					$outArr['result'] =  "voided";
					$outArr['trackingNumber'] = $a['PackageLevelResults']['TrackingNumber']['VALUE'];
				} else {
					$outArr['result'] = "fail";
					$outArr['reason'] = $a['Response']['Error']['ErrorDescription']['VALUE'] .
										" (".$a['Response']['Error']['ErrorCode']['VALUE'].")";
				}
				$outArr['xmlArray'] = $xmlArray;
				return $outArr;
            case "FEDEX":
                $this->shipmentIdentification = $shipmentIdentification;
                return $this->voidFedexShipment();
			default:
				return false;
		}
	}

    /**
    * Void (cancel) a shipment at the package level.  I.e. one package.
    *
    * This will void a single package identified by a specific
    * tracking number.
    */
	function voidPackage($shipmentIdentification, $packageIdentification) {
		switch ($this->carrier) {
			case "UPS":
				$this->shipmentIdentification = $shipmentIdentification;
				$this->packageIdentification = $packageIdentification;
				$xmlArray = $this->voidUpsPackage();
				$a = $xmlArray['VoidShipmentResponse'];
				$outArr = "";
				if ($a['Response']['ResponseStatusCode']['VALUE'] == "1") {
					$outArr['result'] =  "voided";
					$outArr['shipmentNumber'] = $shipmentIdentification;
				} else {
					$outArr['result'] = "fail";
					$outArr['reason'] = $a['Response']['Error']['ErrorDescription']['VALUE'] .
										" (".$a['Response']['Error']['ErrorCode']['VALUE'].")";
				}
				$outArr['xmlArray'] = $xmlArray;
				return $outArr;
			default:
				return false;
		}
	}

    
	private function voidUpsPackage() {

		$accessXml = $this->core->xmlObject;	

		$xml = new xmlBuilder(false);
		
		$xml->push('VoidShipmentRequest');
            $xml->push('Request');
                $xml->element('RequestAction', '1');
            $xml->pop(); // end Request
        $xml->push('ExpandedVoidShipment');
            $xml->element('ShipmentIdentificationNumber', $this->shipmentIdentification);
			if (is_array($this->packageIdentification)) {
				foreach ($this->packageIdentification as $trackingNumber) {
					$xml->element('TrackingNumber', $trackingNumber);
				}
			} else {
					$xml->element('TrackingNumber', $this->packageIdentification);
			}
        $xml->pop(); // end ExpandedVoidShipment
        $xml->pop(); // end VoidShipmentRequest

		$xmlString = $accessXml->getXml(). $xml->getXml();
		
		$this->core->xmlSent = $xmlString;
		$this->core->xmlResponse = $this->core->xmlResponse = $this->core->request('Void',$xmlString);

		$xmlParser = new upsXmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();


		return $xmlArray;

	}
    

    
	private function voidUpsShipment() {
		$accessXml = $this->core->xmlObject;	

		$xml = new xmlBuilder(false);

		$xml->push('VoidShipmentRequest');
            $xml->push('Request');
                $xml->element('RequestAction', '1');
            $xml->pop(); // end Request
            $xml->element('ShipmentIdentificationNumber', $this->shipmentIdentification);
        $xml->pop(); // end VoidShipmentRequest

		$xmlString = $accessXml->getXml(). $xml->getXml();

		$this->core->xmlSent = $xmlString;
		$this->core->xmlResponse = $this->core->request('Void',$xmlString);

		$xmlParser = new upsXmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();


		return $xmlArray;
	}
    

    

	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
}




/**
* Main class for tracking shipments and packages
*
* This class is a wrapper for use with all carriers to track packages
* Valid carriers are: UPS, USPS, and FedEx.
*/
class RocketShipTrack {

    function __Construct($carrier,$license='',$username='',$password='') {
        $carrier = strtoupper($carrier);
		$this->OKparams = getOKparams($carrier);
        $this->carrier = $carrier;
		switch ($carrier) {
			case "UPS":
                if ($license == '') {
                    $l = getUPSDefault('license');
                } else {
                    $l = $license;
                }
                if ($username == '') {
                    $u = getUPSDefault('username');
                } else {
                    $u = $username;
                }
                if ($password == '') {
                    $p = getUPSDefault('password');
                } else {
                    $p = $password;
                }
                $this->core = new ups($l,$u,$p); // This class depends on ups
				break;
            case "FEDEX":
                $this->core = new fedex();
                $this->setParameter('trackingIdType','');
                break;
			default:
				exit ("Unknown carrier $carrier in RocketShipTrack.");
		}
    }

    function track($trackingNumber) {
        switch (strtoupper($this->carrier)) {
        case 'UPS':
            $retArr = $this->trackUPS($trackingNumber);
            $a = $retArr['TrackResponse'];
            if ($a['Response']['ResponseStatusCode']['VALUE'] != "1") {
                $this->result = "FAIL";
                $this->reason = $a['Response']['Error']['ErrorDescription']['VALUE'] .
                                    " (".$a['Response']['Error']['ErrorCode']['VALUE'].")";
            } else {
                if (array_key_exists("TrackingNumber",$a['Shipment']['Package'])) {
                    // single package
                    $p = $a['Shipment']['Package'];
                } else {
                    // multi-package
                    $p = $a['Shipment']['Package'][0];
                }
                $this->result = "OK";
                if (array_key_exists("Status",$p['Activity'])) {
                    // just the one
                    $this->status = $p['Activity']['Status']['StatusType']['Description']['VALUE'];
                } else {
                    // multiple activities - grab the most recent
                    $this->status = $p['Activity'][0]['Status']['StatusType']['Description']['VALUE'];
                }
            }
            return $retArr;
        case 'FEDEX':
            return $this->trackFEDEX($trackingNumber);
        case 'USPS':
            return $this->trackUSPS($trackingNumber);
        default:
            exit("Unknown carrier $carrier in RocketShipTrack");
        }
    }

    
	// Builds xml for tracking and sends the xml string to the ups->request method
	// recieves a response from UPS and outputs an array.
    function trackUPS($trackingNumber){
		$xml = $this->core->xmlObject;
		
		$xml->push('TrackRequest',array('xml:lang' => 'en-US'));
			$xml->push('Request');
				$xml->push('TransactionReference');
					$xml->element('CustomerContext', 'RocketShipIt');
				$xml->pop(); // close TransactionReference
				$xml->element('RequestAction', 'Track');
			$xml->pop(); // close Request
			$xml->element('TrackingNumber', $trackingNumber);
		$xml->pop();

		// Convert xml object to a string
		$xmlString = $xml->getXml();

        // Put the xml that is sent do UPS into a variable so we can call it later for debugging.
		$this->core->xmlSent = $xmlString;

		// Send the xmlString to UPS and store the resonse in a class variable, xmlResponse.
        $this->core->xmlResponse = $this->core->request('Track', $xmlString);

		// Return response xml as an array
		$xmlParser = new upsxmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();

		return $xmlArray; 
    }
    

    

    

	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
					case "USPS":
						$value = getUSPSDefault($param);
						break;
                    case "FEDEX":
                        $value = getFEDEXDefault($param);
                        break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
}



/**
* Main Rate class for producing rates for various packages/shipments
*
* This class is a wrapper for use with all carriers to produce rates 
* Valid carriers are: UPS, USPS, and FedEx.
*/
class RocketShipRate {

	var $OKparams;

    function __Construct($carrier,$license='',$username='',$password='') {
		$carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != 'USPS' && $carrier != 'FEDEX') {
			die ("Unknown carrier in RocketShipRates: $carrier");
		}

		$this->carrier = $carrier;
		$this->OKparams = getOKparams($carrier);

		// Grab generic default rate attributes
		$this->setParameter("shipper","");
		$this->setParameter('shipAddr1','');
        $this->setParameter('shipAddr2','');
        $this->setParameter('shipAddr3','');
		$this->setParameter("shipCity","");
		$this->setParameter("shipState","");
		$this->setParameter("shipCode","");
		$this->setParameter("shipCountry","");
		$this->setParameter("toCompany","");
		$this->setParameter("toCountry","");
		$this->setParameter("toName","");
		$this->setParameter("toPhone","");
		$this->setParameter("toAddr1","");
		$this->setParameter("toAddr2","");
		$this->setParameter("toAddr3","");
		$this->setParameter("toCity","");
		$this->setParameter("toState","");
		$this->setParameter("toCountry","");
		$this->setParameter("length","");
		$this->setParameter("width","");
		$this->setParameter("height","");

		// Set up core class and grab carrier-specific defaults that are unique to the current carrier
		if ($carrier == "UPS") {
            if ($license == '') {
                $l = getUPSDefault('license');
            } else {
                $l = $license;
            }
            if ($username == '') {
                $u = getUPSDefault('username');
            } else {
                $u = $username;
            }
            if ($password == '') {
                $p = getUPSDefault('password');
            } else {
                $p = $password;
            }
			$this->core = new ups($l,$u,$p); // This class depends on ups

			$this->setParameter('accountNumber','');
			$this->setParameter('service','');
			$this->setParameter('pickupDescription','');
			$this->setParameter('residentialAddressIndicator',"");
			$this->setParameter('PickupType',"");
			$this->setParameter('packagingType',"");
			$this->setParameter('shipmentDescription','');
			$this->setParameter('packageLength','');
			$this->setParameter('packageWidth','');
			$this->setParameter('packageHeight','');
			$this->setParameter('lengthUnit','');
			$this->setParameter('weightUnit','');
			$this->setParameter('fromName','');
			$this->setParameter('monetaryValue','');
			$this->setParameter('negotiatedRates','');
		}
		if ($carrier == 'USPS') {
			$this->core = new usps(); // This class depends on usps
			$this->setParameter('userid','');
			$this->setParameter('service','');
			$this->setParameter('firstClassMailType','');
		}

        if ($carrier == 'FEDEX') {
            $this->core = new fedex(); // This class depends on fedex
			$this->setParameter('packagingType','');
			$this->setParameter('weightUnit','');
			$this->setParameter('lengthUnit','');
			$this->setParameter('service','');
			$this->setParameter('residential','');
			$this->setParameter('toName','');
			$this->setParameter('toCompany','');
			$this->setParameter('length','');
        }
	}

    /**
    * Retruns a single rate from the carrier.
    */
	function getRate() {
		switch ($this->carrier) {
			case "UPS":
				return $this->getUPSRate();
			case "USPS":
				return $this->getUSPSRate();
            case "FEDEX":
                return $this->getFEDEXRate();
		}
	}

    /**
    * Retruns all available rates from the carrier.
    */
	function getAllRates() {
		switch ($this->carrier) {
			case "UPS":
				return $this->getAllUPSRates();
            case 'FEDEX':
                return $this->getAllFEDEXRates();
            case 'USPS':
                return $this->getAllUSPSRates();
		}
    }

    /**
    * Return a simple rate from carrier.
    */
    function getSimpleRate() {
        switch($this->carrier) {
            case "UPS":
                $upsArray = $this->getUPSRate();
                $status = $upsArray['RatingServiceSelectionResponse']['Response']['ResponseStatusCode']['VALUE'];
                if ($status == '1') {
                    $rate = $upsArray['RatingServiceSelectionResponse']['RatedShipment']['TotalCharges']['MonetaryValue']['VALUE'];
                    return $rate;
                } else {
                    $errorMessage = $upsArray['RatingServiceSelectionResponse']['Response']['Error']['ErrorDescription']['VALUE'];
                    return $errorMessage;
                }
            case "FEDEX":
                return $this->getFEDEXRate();
            case "USPS":
                return $this->getUSPSRate();
        }
    }

    /**
    * Return all available rates from carrier in a simple array.
    */
    function getSimpleRates() {
        switch($this->carrier) {
            case "UPS":
                $upsArray = $this->getAllUPSRates();
                $status = $upsArray['RatingServiceSelectionResponse']['Response']['ResponseStatusCode']['VALUE'];

                if ($status == '1') {
                    $rate = $upsArray['RatingServiceSelectionResponse']['RatedShipment'][0]['TotalCharges']['MonetaryValue']['VALUE'];
                   $service = $upsArray['RatingServiceSelectionResponse']['RatedShipment'];

                   $rates = Array();
                   foreach ($service as $s) {
                       $r = $s['Service']['Code']['VALUE'];
                       $desc = $this->core->getServiceDescriptionFromCode($r);
                       $rates["$desc"] = $s['TotalCharges']['MonetaryValue']['VALUE'];
                   }

                   return $rates;
                } else {
                    $errorMessage = $upsArray['RatingServiceSelectionResponse']['Response']['Error']['ErrorDescription']['VALUE'];
                    $errorArray['error'] = $errorMessage; 
                    return $errorArray;
                }
            case 'FEDEX':
                return $this->getAllFEDEXRates();
            case 'USPS':
                return $this->getAllUSPSRates();
        }
    }

	private function getAllUPSRates() {
		return $this->getUPSRate('Shop');
	}

    private function getAllFEDEXRates() {
        return $this->getFEDEXRate(true);
    }

    private function getALLUSPSRates() {
        return $this->getUSPSRate(true);
    }

    
	// Builds xml for a rate request converts xml to a string, sends the xml to ups,
	// stores the xmlSent and xmlResponse in the ups class incase you want to see it.
	// Finally, this class returns the xml response from UPS as an array.
	private function getUPSRate($requestOption='Rate') {
		$xml = $this->core->xmlObject;
		
		$xml->push('RatingServiceSelectionRequest',array('xml:lang' => 'en-US'));
			$xml->push('Request');
				$xml->push('TransactionReference'); // Not required
					$xml->element('CustomerContext', 'RocketShipIt'); // Not required
					//$xml->element('XpciVersion', '1.0'); // Not required
				$xml->pop(); // close TransactionReference, not required
				$xml->element('RequestAction', 'Rate');
				$xml->element('RequestOption', $requestOption);
			$xml->pop(); // close Request
			$xml->push('PickupType');
				$xml->element('Code', $this->PickupType); // TODO: insert link to code values
				if ($this->pickupDescription != '') {
					$xml->element('Description', $this->pickupDescription);
				}
			$xml->pop(); // close PickupType
			$xml->push('Shipment');
				$xml->element('Description', $this->shipmentDescription);
				$xml->push('Shipper');
					$xml->element('ShipperNumber', $this->accountNumber);
					$xml->push('Address');
						$xml->element('AddressLine1', $this->shipAddr1);
						if ($this->shipAddr2 != '') {
							$xml->element('AddressLine2', $this->shipAddr2);
						}
						if ($this->shipAddr3 != '') {
							$xml->element('AddressLine3', $this->shipAddr3);
						}
						if ($this->shipCity != '') {
							$xml->element('City', $this->shipCity);
						}
						$xml->element('StateProvinceCode', $this->shipState);
						$xml->element('PostalCode', $this->shipCode);
						$xml->element('CountryCode', $this->shipCountry);
					$xml->pop(); // close Address
				$xml->pop(); // close Shipper
				$xml->push('ShipTo');
					if ($this->toCompany != '') {
						$xml->element('CompanyName', $this->toCompany);
					}
					if ($this->toName != '') {
						$xml->element('AttentionName', $this->toName);
					}
					if ($this->toPhone != '') {
						$xml->element('PhoneNumber', $this->toPhone);
					}
					$xml->push('Address');
						if ($this->toAddr1 != '') {
							$xml->element('AddressLine1', $this->toAddr1);
						}
						if ($this->toAddr2 != '') {
							$xml->element('AddressLine2', $this->toAddr2);
						}
						if ($this->toAddr3 != '') {
							$xml->element('AddressLine3', $this->toAddr3);
						}
						if ($this->toCity != '') {
							$xml->element('City', $this->toCity);
						}
						if ($this->toState != '') {
							$xml->element('StateProvinceCode', $this->toState);
						}
						$xml->element('PostalCode', $this->toCode);
						if ($this->toCountry != '') {
							$xml->element('CountryCode', $this->toCountry);
						}
						if ($this->residentialAddressIndicator == '1') {
							$xml->element('ResidentialAddressIndicator', '1');
						}
					$xml->pop(); // close Address
				$xml->pop(); // close ShipTo
			if ($this->fromName != '') {
				$xml->push('ShipFrom');
					$xml->element('CompanyName', $this->fromName);
					$xml->element('AttentionName', $this->fromAttentionName);
					$xml->element('PhoneNumber', $this->fromPhoneNumber);
					$xml->element('FaxNumber', $this->fromFaxNumber);
					$xml->push('Address');
						$xml->element('AddressLine1', $this->fromAddressLine1);
						$xml->element('AddressLine2', $this->fromAddressLine2);
						$xml->element('AddressLine3', $this->fromAddressLine3);
						$xml->element('City', $this->fromCity);
						$xml->element('PostalCode', $this->fromPostalCode);
						$xml->element('CountryCode', $this->fromCountryCode);
					$xml->pop(); // close Address
				$xml->pop(); // close ShipFrom
			}
			if ($this->service != '') {
				$xml->push('Service');
					$xml->element('Code', $this->service);
				$xml->pop(); // close Service
			}
			$xml->push('Package');
				$xml->push('PackagingType');
					$xml->element('Code', $this->packagingType);
					//$xml->element('Description', $this->packageTypeDescription);
				$xml->pop(); // close PacakgeType
					if ($this->length != '') {
						$xml->push('Dimensions');
							$xml->push('UnitOfMeasurement');
								$xml->element('Code', $this->lengthUnit);
							$xml->pop(); // close UnitOfMeasurement
								$xml->element('Length', $this->length);
								$xml->element('Width', $this->width);
								$xml->element('Height', $this->height);
						$xml->pop(); // close Dimensions
					}
				//$xml->element('Description', $this->packageDescription);
				$xml->push('PackageWeight');
					$xml->push('UnitOfMeasurement');
						$xml->element('Code', $this->weightUnit);
					$xml->pop(); // close UnitOfMeasurement
					$xml->element('Weight', $this->weight);
				$xml->pop(); // close PackageWeight
                if ($this->monetaryValue != '' && $this->insuredCurrency != '') {// Change for COD
                    $xml->push('PackageServiceOptions');
                        $xml->push('InsuredValue');
                            $xml->element('CurrencyCode',$this->insuredCurrency);
                            $xml->element('MonetaryValue',$this->monetaryValue);
                        $xml->pop(); // close InsuredValue
                    $xml->pop(); // close PackageServiceOptions
                }
			$xml->pop(); // close Package
            if ($this->negotiatedRates == '1') {
                $xml->push('RateInformation');
                    $xml->element('NegotiatedRatesIndicator','1');
                $xml->pop(); // close RateInformation
            }
			//$xml->push('ShipmentServiceOptions');
			//$xml->pop(); // close ShipmentServiceOptions
			$xml->pop(); // close Shipment
		$xml->pop();

		// Convert xml object to a string
		$xmlString = $xml->getXml();

        // Put the xml that is sent do UPS into a variable so we can call it later for debugging.
		$this->core->xmlSent = $xmlString;

        $this->core->xmlResponse = $this->core->request('Rate', $xmlString);

		// Convert the xmlString to an array
		$xmlParser = new upsxmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();
		return $xmlArray; 
	}
    

    

    

	// In order to allow users to override defaults or specify obsecure UPS
	// data, this function allows you to set any of the variables that this class uses
	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
					case "USPS":
						$value = getUSPSDefault($param);
						break;
					case "FEDEX":
						$value = getFEDEXDefault($param);
						break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
	
}




/**
* Main class for getting time in transit information
*
*/
class RocketShipTimeInTransit {
    function __Construct($carrier,$license='',$username='',$password='') {
		$carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != 'USPS' && $carrier != 'FEDEX') {
			die ("Unknown carrier in RocketShipTimeInTransit: $carrier");
		}

		$this->OKparams = getOKparams($carrier);
        $this->carrier = $carrier;
		switch (strtoupper($carrier)) {
			case "UPS":
                if ($license == '') {
                    $l = getUPSDefault('license');
                } else {
                    $l = $license;
                }
                if ($username == '') {
                    $u = getUPSDefault('username');
                } else {
                    $u = $username;
                }
                if ($password == '') {
                    $p = getUPSDefault('password');
                } else {
                    $p = $password;
                }
                $this->core = new ups($l,$u,$p); // This class depends on ups
                $this->setParameter('shipCity','');
                $this->setParameter('shipCountry','');
                $this->setParameter('shipCode','');
                $this->setParameter('weightUnit','');
                $this->setParameter('weight','');
                $this->setParameter('toCountry','');
                $this->setParameter('toCity','');
                $this->setParameter('toCode','');
                $this->setParameter('pickupDate','');
            break;
            case "FEDEX":
                $this->core = new fedex();
                $this->setParameter('shipCode','');
                $this->setParameter('shipCountry','');
                $this->setParameter('toCode','');
                $this->setParameter('toCountry','');
                $this->setParameter('packagingType','');
                $this->setParameter('pickupDate','');
            break;
            default:
                exit("Unknown carrier $carrier in RocketShipTimeInTransit.");
        }

    }

    
    function getUPSTimeInTransit() {
        $accessXml = $this->core->xmlObject;

        $xml = new xmlBuilder();
		$xml->push('TimeInTransitRequest',array('xml:lang' => 'en-US'));
            $xml->push('Request');
				$xml->push('TransactionReference'); // Not required
					$xml->element('CustomerContext', 'RocketShipIt'); // Not required
				$xml->pop(); // close TransactionReference, not required
				$xml->element('RequestAction', 'TimeInTransit');
            $xml->pop(); // end Request;
            $xml->push('TransitFrom');
                $xml->push('AddressArtifactFormat');
                    $xml->element('PoliticalDivision2',$this->shipCity);
                    $xml->element('CountryCode',$this->shipCountry);
                    $xml->element('PostcodePrimaryLow',$this->shipCode);
                $xml->pop(); // end AddressArtifactFormat
            $xml->pop(); // end TransitFrom
            $xml->push('TransitTo');
                $xml->push('AddressArtifactFormat');
                    $xml->element('PoliticalDivision2',$this->toCity);
                    $xml->element('CountryCode',$this->toCountry);
                    $xml->element('PostcodePrimaryLow',$this->toCode);
                $xml->pop(); // end AddressArtifactFormat
            $xml->pop(); // end TransitTo
            $xml->push('ShipmentWeight');
                $xml->push('UnitOfMeasurement');
                    $xml->element('Code',$this->weightUnit);
                    $xml->element('Description','Pounds');
                $xml->pop(); //end UnitOfMeasurement
                $xml->element('Weight',$this->weight);
            $xml->pop(); //end ShipmentWeight
            $xml->element('TotalPackagesInShipment','1');
            // $xml->push('InvoiceLineTotal');
            //     $xml->element('CurrencyCode',$this->insuredCurrency);
            //     $xml->element('MonetaryValue',$this->monetaryValue);
            // $xml->pop(); // end InvoiceLineTotal
            $xml->element('PickupDate',$this->pickupDate);
            //$xml->element('DocumentsOnlyIndicator','');
        $xml->pop(); // end TimeInTransitRequest

		// Convert xml object to a string
        $accessXmlString = $accessXml->getXml();
		$requestXmlString = $xml->getXml();

        $xmlString = $accessXmlString. $requestXmlString;

        // Put the xml that is sent do UPS into a variable so we can call it later for debugging.
		$this->core->xmlSent = $xmlString;

        $this->core->xmlResponse = $this->core->request('TimeInTransit', $xmlString);

		// Convert the xmlString to an array
		$xmlParser = new upsxmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();
		return $xmlArray; 
    }
    

    

	// In order to allow users to override defaults or specify obsecure UPS
	// data, this function allows you to set any of the variables that this class uses
	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
					case "USPS":
						$value = getUSPSDefault($param);
						break;
                    case "FEDEX":
                        $value = getFEDEXDefault($param);
                        break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
}




/**
* Main class for producing package objects that are later inserted into a shipment
* @see RocketShipShipment::addPackageToShipment()
*/
class RocketShipPackage {

	var $ups;

    function __Construct($carrier,$license='',$username='',$password='') {
        $carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != "FEDEX") {
			die ("Unknown carrier in RocketShipPackage: $carrier");
		}
		$this->carrier = $carrier;
		$this->OKparams = getOKparams($carrier);

		// Grab defaults package attributes

		if ($carrier == 'UPS') {
            if ($license == '') {
                $l = getUPSDefault('license');
            } else {
                $l = $license;
            }
            if ($username == '') {
                $u = getUPSDefault('username');
            } else {
                $u = $username;
            }
            if ($password == '') {
                $p = getUPSDefault('password');
            } else {
                $p = $password;
            }
			$this->core = new ups($l,$u,$p); // This class depends on ups

			$this->setParameter('lengthUnit','');
			$this->setParameter('packagingType','');
			$this->setParameter('referenceCode','');
			$this->setParameter('insuredCurrency','');
			$this->setParameter('monetaryValue','');
			$this->setParameter('length','');
			$this->setParameter('width','');
			$this->setParameter('height','');
			$this->setParameter('weight','');
			$this->setParameter('referenceValue','');
			$this->setParameter('referenceCode','');
			$this->setParameter('referenceValue2','');
			$this->setParameter('referenceCode2','');
		}
        if ($carrier == 'FEDEX') {
            $this->core = new fedex(); // This class depends on fedex
            $this->setParameter('weightUnit','');
            $this->setParameter('lengthUnit','');

        }
	}

	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
                    case "FEDEX":
                        $value = getFEDEXDefault($param);
                        break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}

}



/**
* Main Address Validation class for carrier.
*
* Valid carriers are: UPS, USPS, and FedEx.
*/
class RocketShipAddressValidate {

	var $OKparams;

	function __Construct($carrier,$license='',$username='',$password='') {
		$carrier = strtoupper($carrier);
		if ($carrier != "UPS" && $carrier != 'FEDEX') {
			die ("Unkown carrier in RocketShipAddressValidate: $carrier");
		}

		$this->carrier = $carrier;
		$this->OKparams = getOKparams($carrier);

		// Grab generic default rate attributes

		// Set up core class and grab carrier-specific defaults that are unique to the current carrier
		if ($carrier == "UPS") {
            if ($license == '') {
                $l = getUPSDefault('license');
            } else {
                $l = $license;
            }
            if ($username == '') {
                $u = getUPSDefault('username');
            } else {
                $u = $username;
            }
            if ($password == '') {
                $p = getUPSDefault('password');
            } else {
                $p = $password;
            }
			$this->core = new ups($l,$u,$p); // This class depends on ups
            $this->setParameter('toCity','');
            $this->setParameter('toCode','');
		}
        if ($carrier == 'FEDEX') {
            $this->core = new fedex(); // This class depends on fedex
        }
	}

    /**
    * Send address data to carrier.
    */
	function validate() {
		switch ($this->carrier) {
			case "UPS":
				return $this->getUPSValidate();
			case "FEDEX":
				return $this->getFEDEXValidate();
		}
	}

    
	// Builds xml for a rate request converts xml to a string, sends the xml to ups,
	// stores the xmlSent and xmlResponse in the ups class incase you want to see it.
	// Finally, this class returns the xml response from UPS as an array.
	private function getUPSValidate() {
		$accessXml = $this->core->xmlObject;

		$xml = new xmlBuilder();

		$xml->push('AddressValidationRequest',array('xml:lang' => 'en-US'));
			$xml->push('Request');
				$xml->push('TransactionReference'); // Not required
					$xml->element('CustomerContext', 'RocketShipIt'); // Not required
					//$xml->element('XpciVersion', '1.0'); // Not required
				$xml->pop(); // close TransactionReference, not required
				$xml->element('RequestAction', 'AV');
			$xml->pop(); // Close Request
			$xml->push('Address');
                if ($this->toCity != '') {
                    $xml->element('City',$this->toCity);
                }
				$xml->element('StateProvinceCode',$this->toCode);
			$xml->pop(); // Close Address
		$xml->pop(); // Close AddressValidationRequest

		// Convert xml object to a string
		$xmlString = $accessXml->getXml(). $xml->getXml();

        // Put the xml that is sent do UPS into a variable so we can call it later for debugging.
		$this->core->xmlSent = $xmlString;

        $this->core->xmlResponse = $this->core->request('AV', $xmlString);

		// Convert the xmlString to an array
		$xmlParser = new upsxmlParser();
		$xmlArray = $xmlParser->xmlparser($this->core->xmlResponse);
		$xmlArray = $xmlParser->getData();
		return $xmlArray; 
	}
    

    

	function setParameter($param,$value) {
		if (!in_array($param,$this->OKparams) && $param != '') {
			exit("Invalid parameter '$param' in setParameter");
		}
		if ($value == "") {	// get the default, if set
			$value = getGenericDefault($param);
			if ($value == "") {	// not in the generics? look in the specifics
				switch ($this->carrier) {
					case "UPS":
						$value = getUPSDefault($param);
						break;
                    case "FEDEX":
                        $value = getFEDEXDefault($param);
                        break;
					default:
						exit ("Unknown carrier in setParameter: ".$this->carrier);
				}
			}
		}
		$this->{$param} = $value;
	}
}





/**
* Core UPS Class
*
* Used internally to send data, set debug information, change
* urls, and build xml
*/
class ups {
	
	function __Construct($license,$username,$password) {

		// Grab the license, username, password for defaults
        $this->license = $license;
        $this->username = $username;
        $this->password = $password;

		$this->debugMode = getGenericDefault('debugMode');
		$this->setTestingMode($this->debugMode);
		
		// Create a new xmlObject to be used by access and other classes
		// This object will be used all the way through, until the final xmlObject
		// is converted to a string just before sending to UPS
		$this->xmlObject = new xmlBuilder(false);
		$this->access();
	}

	// Build the access XML to be used in EVERY request to UPS
	function access() {
		$xml = $this->xmlObject;
		$xml->push('AccessRequest',array('xml:lang' => 'en-US'));
			$xml->element('AccessLicenseNumber', $this->license);
			$xml->element('UserId', $this->username);
			$xml->element('Password', $this->password);
		$xml->pop();

		$this->xmlObject = $xml;

		$this->accessRequest = true; // Old check, probably safe to remove later
		return $this->xmlObject->getXml(); // returns xmlstring, but probably not used
	}

	function request($type, $xml){
		// This function is the only function that actually transmits and recieves data
		// from UPS. All classes use this to send XML to UPS servers.
		if ($this->accessRequest != true) {
			die('access function has not been set');		
		} else {	
			$output = preg_replace('/[\s+]{2,}/', '', $xml);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->upsUrl.'/ups.app/xml/'.$type);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $output);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            if ($this->debugMode) { curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); }
			$curlReturned = curl_exec($ch);
			curl_close($ch);
			// exit ($curlReturned);

			// Find out if the UPS service is down
			preg_match_all('/HTTP\/1\.\d\s(\d+)/',$curlReturned,$matches);
			foreach($matches[1] as $key=>$value) {
				if ($value != 100 && $value != 200) {
					$this->throwError("The UPS service seems to be down with HTTP/1.1 $value");
					return false;
            	} else {
					$response = strstr($curlReturned, '<?'); // Separate the html header and the actual XML because we turned CURLOPT_HEADER to 1
					return $response;
				}
			}
		}
	}	

	// This function checks the value of debugMode and changes the UPS url accordingly.  This is because
	// UPS has a testing and production server.
	function setTestingMode($bool){
		if($bool == 1){
			$this->debugMode = true;
			$this->upsUrl = 'https://wwwcie.ups.com'; // Don't put a trailing slash here or world will collide.
		}else{
			$this->debugMode = false;
			$this->upsUrl = 'https://www.ups.com';
		}
		return true;
	}

	// I am not sure why this is in here or if anything actually uses it.  Maybe in the future?
	function throwError($error) {
		if($this->debugMode) {
			die($error);
		}else{
			return $error;		
		}
	}

    function getServiceDescriptionFromCode($code) {
        switch($code) {
            case '01':
                return 'UPS Next Day Air';
            case '02':
                return 'UPS 2nd Day Air';
            case '03':
                return 'UPS Ground';
            case '07':
                return 'UPS Worldwide Express';
            case '08':
                return 'UPS Worldwide Expidited';
            case '11':
                return 'UPS Standard';
            case '12':
                return 'UPS 3 Day Select';
            case '13':
                return 'UPS Next Day Air Saver';
            case '14':
                return 'UPS Next Day Air Early AM';
            case '54':
                return 'UPS Worldwide Express Plus';
            case '59':
                return 'UPS Second Day Air AM';
            case '65':
                return 'UPS Saver';
            case '82':
                return 'UPS Today Standard';
            case '83':
                return 'UPS Today Dedicated';
            case '84':
                return 'UPS Today Intercity';
            case '85':
                return 'UPS Today Express';
            case '86':
                return 'UPS Today Express Saver';
            default:
                return 'Unknown service code';
        }
    }
}







// Simon Willison, 16th April 2003
// Based on Lars Marius Garshol's Python XMLWriter class
// See http://www.xml.com/pub/a/2003/04/09/py-xml.html

// modified 2009-07-09 RCE
//	added $subordinateSection parameter; if true, class does not place "xml version" at the start


/**
* Class used to build xml internally
*/
class xmlBuilder {
	var $xml;
	var $indent;
	var $stack = array();
	function xmlBuilder($subordinateSection=false) {
		$this->indent = getGenericDefault("debugMode") == 1 ? "   " : "";	// indent if debugging
		if (!$subordinateSection) {
			$this->xml = '<?xml version="1.0"?>'."\n";
		}
	}
	function _indent() {
		for ($i = 0, $j = count($this->stack); $i < $j; $i++) {
			$this->xml .= $this->indent;
		}
	}
	function push($element, $attributes = array()) {
		$this->_indent();
		$this->xml .= '<'.$element;
		foreach ($attributes as $key => $value) {
			$this->xml .= ' '.$key.'="'.htmlentities($value).'"';
		}
		$this->xml .= ">\n";
		$this->stack[] = $element;
	}
	function element($element, $content, $attributes = array()) {
		$this->_indent();
		$this->xml .= '<'.$element;
		foreach ($attributes as $key => $value) {
			$this->xml .= ' '.$key.'="'.htmlentities($value).'"';
		}
		$this->xml .= '>'.htmlentities($content).'</'.$element.'>'."\n";
	}
	function emptyelement($element, $attributes = array()) {
		$this->_indent();
		$this->xml .= '<'.$element;
		foreach ($attributes as $key => $value) {
			$this->xml .= ' '.$key.'="'.htmlentities($value).'"';
		}
		$this->xml .= " />\n";
	}
	function pop() {
		$element = array_pop($this->stack);
		$this->_indent();
		$this->xml .= "</$element>\n";
	}
	function getXml() {
		return $this->xml;
	}
}

	
/**
* Used internally to parse xml into an array
*/
class upsxmlParser {

	var $params = array(); //Stores the object representation of XML data
    var $root = NULL;
    var $global_index = -1;
    var $fold = false;

	/* Constructor for the class
    * Takes in XML data as input( do not include the <xml> tag
    */
    function xmlparser($input, $xmlParams=array(XML_OPTION_CASE_FOLDING => 0)) {
		$xmlp = xml_parser_create();
			foreach($xmlParams as $opt => $optVal) {
        		switch( $opt ) {
          		case XML_OPTION_CASE_FOLDING:
            		$this->fold = $optVal;
           		break;
          		default:
           		break;
        		}
        		xml_parser_set_option($xmlp, $opt, $optVal);
      	}
      
		if(xml_parse_into_struct($xmlp, $input, $vals, $index)) {
        	$this->root = $this->_foldCase($vals[0]['tag']);
        	$this->params = $this->xml2ary($vals);
		}
      	xml_parser_free($xmlp);
    }
    
    function _foldCase($arg) {
		return( $this->fold ? strtoupper($arg) : $arg);
    }

	/*
	 * Credits for the structure of this function
	 * http://mysrc.blogspot.com/2007/02/php-xml-to-array-and-backwards.html
	 * 
	 * Adapted by Ropu - 05/23/2007 
	 * 
	 */

    function xml2ary($vals) {

		$mnary=array();
		$ary=&$mnary;
		foreach ($vals as $r) {
			$t=$r['tag'];
			if ($r['type']=='open') {
				if (isset($ary[$t]) && !empty($ary[$t])) {
					if (isset($ary[$t][0])){
						$ary[$t][]=array(); 
					} else {
						$ary[$t]=array($ary[$t], array());
					} 
					$cv=&$ary[$t][count($ary[$t])-1];
				} else {
					$cv=&$ary[$t];
                }
				$cv=array();
				if (isset($r['attributes'])) { 
					foreach ($r['attributes'] as $k=>$v) {
					$cv[$k]=$v;
					}
				}
                
				$cv['_p']=&$ary;
				$ary=&$cv;

				} else if ($r['type']=='complete') {
                	if (isset($ary[$t]) && !empty($ary[$t])) { // same as open
						if (isset($ary[$t][0])) {
							$ary[$t][]=array();
						} else {
							$ary[$t]=array($ary[$t], array());
						} 
					$cv=&$ary[$t][count($ary[$t])-1];
                } else {
					$cv=&$ary[$t];
				} 
				if (isset($r['attributes'])) {
					foreach ($r['attributes'] as $k=>$v) {
						$cv[$k]=$v;
					}
				}
				$cv['VALUE'] = (isset($r['value']) ? $r['value'] : '');
    
				} elseif ($r['type']=='close') {
					$ary=&$ary['_p'];
				}
        }    
        
		$this->_del_p($mnary);
		return $mnary;
	}
    
    // _Internal: Remove recursion in result array
    function _del_p(&$ary) {
        foreach ($ary as $k=>$v) {
            if ($k==='_p') {
              unset($ary[$k]);
            }
            else if(is_array($ary[$k])) {
              $this->_del_p($ary[$k]);
            }
        }
    }

    /* Returns the root of the XML data */
    function GetRoot() {
      return $this->root; 
    }

    /* Returns the array representing the XML data */
    function GetData() {
      return $this->params; 
    }
  }

?>
