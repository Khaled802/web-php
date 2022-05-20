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

            `$ nslookup < web-address >`
      
      - then there is Certificate Chain
      - check the Certificates
      - all other connect will be symmertric
   7. browser display the response


## TCP vs UDP
   * **Every packet has** source IP, source port (from 0 to 65353), destination IP, destination Port(depend on HTTP or HTTPs)
   * **TCP:** 
   when I make http request, it sends it as a packets and each packet has sequance number and we want to make sure that all packets in arrived and know which packets that doesn't arrived (synchronize)
   - that we want **TCP handshake**: 
     1. send SYN and say for ex: my sequance number is 700 
     2. the server will respons back with SYN ex: 200
     3. to tell the client that the packet is recieved: the server will send acknoledgement (ack 700+len(packet))
     4. the clien will send acknowledgement of the server (ack 200+len(packet))
     5. In real world the 2. and 3. send together as SYN/ACK so it is called 3 handshake
     6. after that the http request will happend 😁
   - So TCP is (connection orianted), make sure that all packets arrived savely but It make tree request every time, it is a headache when you want to sent alot of data  so it used in (emails, )
   
   * **UDP**:
   send the packets and it doesn't want a response that all packets is arrived used (load the packet to other end is the end) it is suitable for applications that needs fast, efficient transmission (stream or videos on youtube)
   * code:

     ` $ ifconfig `
     
     `  >> mtu 1500 in < some informtion > `

   mtu (maximum transition unit) -> the size of each packet
   - the TCP will arrange the packets
   - But UDP doesn't arrange the packets only sending

## DNS
   - Domain Name System
   - use it to get the IP address from URL
   - may your DNS server is your router or may google server, ..
   - Non authoritative means that this is not from the place you should ask about this website
   - Top level domain: like '.com'
   - if the answer it is not in router you will go to the next higher level 

      * ex: router->Service provider(SP)->.com

## DNS Record types
   1. A: sub-domain ex: www
   2. AAAA: like A but IP v6
   3. MX: main server
   4. CNAME: alias (another domain has the same content)
   

## client server model
   * **Client** can be a machine or a program, that make a request through the web
     - client manchine: computer, laptop, mobile, etc..
     - client program: web browser, photo editor, etc..
   * **Server** is a computer program NOT A DEVICE
      - High-performance computers are called servers becaouse they run server programs
      - Server porvides functionality and serve other programs called clients
      - a single sever can serve multiple cleints at the same time
      - we can run mutliple servers on one single machine
      - Types of the servers:
        1. web servers (apache) serve http requests
        2. database server Run DMS
      - A server can contain: web resources, host web applications, stores user and program data, etc..
   * **client-server model** is a way for computers to commuticate via the web
     - is based on centralized structure based on requests and responds
     - there is another model is decenteralized structure ex: Peer-to-peer model
     - **peer to peer model** there is no client or server but both can be request and response **ex:** video chat

## client server database
   * operations:
     1. SQL request from machine
     2. database work performed in server
     3. return record-set
   * components:
     - relational database engine: receives the data query and parsing it and figure how to optimize them and how to process them
     - storage engine: represented by (cache, buffer), handles the i/o of the memory

## server in deep
   * what is a web server?
     - It is software that serves web-content(html pages, images pdfs, json files, api, etc..)
     - Uses the HTTP protocol
     - static and dynamic content (dynamic like facebook every user has his own page and home page, ..)
     - used to host web pages, blogs and built APIs
   * How web servers work?
     - client has IP address and server has its name (from dns you can get the IP of the server) and port 
     - first there is TCP connection first to make a request (three hand shake)
     - the server will process this request maybe go to and retraive data or modify it from the database
   * Block single-threaded web server
     - when you make request transsmission layer there is a TCP connection establish the 2 way communication between the server and the client
     - HTTP is only the request to respond
     - when you establish the connection the server creates in its memory
     (TCP socket)
     - when the thread is bussy that thead connot do anything else if there is another request is should wait utill the threat becomes free (release)
     - when there is another request from the same client that shouldn't estaplish new connection that make things more faster but it wastes more memery
     - There is maximum thread number or maximum connections