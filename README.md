# UPF_Testing_GUI
The setup performs testing of user plane function implemented as pipelined_cli.py.

SETUP:
Steps to install apache web server :
  sudo apt update
  sudo apt install apache2

Steps to install php :
  sudo apt update
  sudo apt install php libapache2-mod-php
  
  
 EXECUTION:
 
Paste the index.html index.php and pipelined_test.py files in the /var/www/html directory.

Start the apache server : sudo systemctl start apache2
  
Go to the browser and call the server using localhost or 127.0.0.1.(This displays the index.html page by default)

On clicking submit after filling the details a POST request is sent to index.php where the data is processed and the pipelined_test.py(sample test script) file is executed.
The output is displayed back on the browser.
  
Stop the apache server : sudo systemctl stop apache2
  
  
