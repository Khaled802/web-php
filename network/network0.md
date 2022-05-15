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



## HTTP request
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

	|-----| |----------------||--------------------------|

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
   * **symmetric:** uses the same key to encryption and decryption **ex:** (Caesar Cipher)
   * **asymmetric:** uses public key for encryption and private key to decryption **ex:** (RSA)

## OSI (7 layers)
   1. **Physical layer**: send the data on physical wires (hubs, cables, ..)
   2. **Data link**: reads the MAC address from the data packet (Switches)
   3. **Network**: reads IP address from the packet (Router)
   4. **Transport**: Responsible for the transport protocol and error handling (TCP, UDP)
   5. **Session**: establishes or ends the connections between two hosts
   6. **Presentation**: Encrypt & Decrypt
   7. **Application**: Services are used with the end-user applications


## What Happens when I open Google.com in my browser 
   1. first there is a connection with wires (physical layer)
   2. you have the MAC address throught switch (Data layer)
   3. you request the IP address (DHCP will give you this IP) (network layer)
   4. HTTPs and HTTP uses TCP and everyone ask its port 443 / 80
   5. ..
   6. Presentation
      - browser to sent request use first IP of the server by DNS
        * you can use to get the web IP

            `nslookup < web-address >`
      
      - then there is Certificate Chain
      - check the Certificates
      - all other connect will be symmertric
   7. browser display the response
   

      
