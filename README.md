# Project Title

GUI based testing of 5G user plane function. 

## Getting Started

The test setup performs testing of user plane function.The user plane fucntion is an integral component of the 5g core architecture. This project makes use of LAMP tech stack to create a test setup to perform the upf testing via a web based GUI.

### Prerequisites

Create a Ubuntu virtual machine.
Install Apache : 
```
sudo apt update
sudo apt install apache2
```
  
Install php :
```
 sudo apt update
 sudo apt install php libapache2-mod-php
```
 
Note : Paste the index.html, index.php and pipelined_test.py files in the /var/www/html directory.


### Running the setup


```
1))Start the apache server : sudo systemctl start apache2
  
2)Go to the browser and call the server using localhost or 127.0.0.1.(This displays the index.html page by default)

3)On clicking submit after filling the details a POST request is sent to index.php where the data is processed and the pipelined_test.py(sample test script) file is executed.
The output is displayed back on the browser.
  
4)Stop the apache server : sudo systemctl stop apache2
```
