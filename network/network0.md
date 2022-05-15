# Network
## HTTP (Hyper Text Transfer Transfer Protocol)
   * http has Request from the brawser and get response from the server (it communicates between the servers and clients)
   * you can load files like (html, js, images, etc..)
   * you can sent info from it
	each request is independent
## HTTPS
   * Hyper Text Transfer Transfer Protocol Secure	
   * Data sent is encrypted

## HTTP Methods
   * Get: to get the data from the server (commen one & seen from the url)
   * Post: submits data to the server (used to sent secure data like password)
   * Put: updates data
   * Delete: deletes data



## HTTP requirst
   * have (header, body)
   * important header
        * General
			- Requested url
			- Request method (GET, POST, ..)
			- Status code (200, 404, ..)
		* Response
			- Server (Apache, ..)
			- content-type (text.html, ...)
			- Date
		* Request
			- Cookies
			- Accept-xxx
			- Content-Type
			- Authorization
	    * HTTP Status Codes
		  - 1xx: Information: request recieved / processing
		  - 2xx: Success: Successfully Recieved, understood and accepted
		  - 3xx: Redirect: 
		  - 4xx: Clinet Error: Request doesn't have what it needed (url is false)
		  - 5xx: Server Error: Server failed to do request
	
	
## http/1 vs http/2
it is faster, effecient and more secure


## developer tool
	you can see the headers and the file from network tab in Headers and Preview & Response


## URLs
	it is divided into 3 parts

	https://www.google.com.eg/imghp?hl=ar&authuser=0&ogbl

	|-----| |-----------------------||------------------------------------|

	protocal          domain                      document

## ports
   - the same device may have different ports but can't the same port more than one the other will break
   - http uses port 80  & https uses 443



## Certificate Authorities (CA)
   - brawser trusted CA's
   - it is the certificates at any brawser
   - to make sure that the site is secure or not from it
   - through avoiding the fake sites because it doesn't have the same certificates
   - compainies and countries release those certificates

## Certificate Chain
   * uses symetric and asymetric at the same time
   * server response the request with the public key
   * the browser take this public key to do
     1. check if the Certificate is correct or not 
        - (CRL): check if the certificates at this list that means don't accept it
		- expited: each certificat has its time 
	 2. browser make the private key from the public key
   
## symmetric vs asymmetric encryption
   * symmetric: uses the same key to encryption and decryption **ex:** (Caesar Cipher)
   * asymmetric: uses public key for encryption and private key to decryption **ex:** (RSA)






