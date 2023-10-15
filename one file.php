{
	"_id": "urn:order:9503f577-fe2f-4e2c-8501-ad04cb2f472f",
	"_links": {
		"self": {
			"href": "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/33b85616-9959-4614-89ce-f03dd2a8b3e5/orders/9503f577-fe2f-4e2c-8501-ad04cb2f472f"
		},
		"tenant-brand": {
			"href": "http://config-service/config/outlets/33b85616-9959-4614-89ce-f03dd2a8b3e5/configs/tenant-brand"
		},
		"merchant-brand": {
			"href": "http://config-service/config/outlets/33b85616-9959-4614-89ce-f03dd2a8b3e5/configs/merchant-brand"
		}
	},
	"type": "SINGLE",
	"merchantDefinedData": {},
	"action": "PURCHASE",
	"amount": {
		"currencyCode": "AED",
		"value": 19469
	},
	"language": "en",
	"merchantAttributes": {
		"cancelUrl": "https://new.goldentrip.info/flights/booking/invoice/1504/182?ref=7cae9720-9b34-46d8-be63-e6fa2cbc92e2",
		"redirectUrl": "https://new.goldentrip.info/app/controller/gateways/request.php",
		"skipConfirmationPage": "true",
		"cancelText": "Back to invoice"
	},
	"emailAddress": "saeid.jalilian@gmail.com",
	"reference": "9503f577-fe2f-4e2c-8501-ad04cb2f472f",
	"outletId": "33b85616-9959-4614-89ce-f03dd2a8b3e5",
	"createDateTime": "2023-04-21T15:23:02.928Z",
	"paymentMethods": {
		"apm": [
			"CHINA_UNION_PAY"
		],
		"card": [
			"VISA",
			"MASTERCARD",
			"DINERS_CLUB_INTERNATIONAL"
		]
	},
	"referrer": "urn:Ecom:9503f577-fe2f-4e2c-8501-ad04cb2f472f",
	"formattedAmount": "د.إ.‏ 194.69",
	"formattedOrderSummary": {},
	"_embedded": {
		"payment": [
			{
				"_id": "urn:payment:3e42bfe9-c49c-4e12-a73e-ec0bcef239be",
				"_links": {
					"self": {
						"href": "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/33b85616-9959-4614-89ce-f03dd2a8b3e5/orders/9503f577-fe2f-4e2c-8501-ad04cb2f472f/payments/3e42bfe9-c49c-4e12-a73e-ec0bcef239be"
					},
					"curies": [
						{
							"name": "cnp",
							"href": "https://api-gateway.sandbox.ngenius-payments.com/docs/rels/{rel}",
							"templated": true
						}
					]
				},
				"reference": "3e42bfe9-c49c-4e12-a73e-ec0bcef239be",
				"paymentMethod": {
					"expiry": "2023-12",
					"cardholderName": "434234",
					"name": "VISA",
					"pan": "412342******3423"
				},
				"state": "FAILED",
				"amount": {
					"currencyCode": "AED",
					"value": 19469
				},
				"updateDateTime": "2023-04-21T15:23:36.908Z",
				"outletId": "33b85616-9959-4614-89ce-f03dd2a8b3e5",
				"orderReference": "9503f577-fe2f-4e2c-8501-ad04cb2f472f",
				"originIp": "2001:ac8:8b:a003::2388",
				"authResponse": {
					"success": false,
					"resultCode": "99",
					"mid": "200200005980"
				},
				"3ds": {
					"status": "SUCCESS",
					"eci": "05",
					"eciDescription": "Card holder authenticated",
					"summaryText": "The card-holder has been successfully authenticated by their card issuer."
				}
			}
		]
	}
}