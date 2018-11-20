# Service-Desk-Greeting
PHP backend which retrieves user and device details to form a greeting to users as part of a Service Desk portal. Both PHP files used as IFrames within a Spiceworks Service Desk Portal. 

### username.php
Connects to LDAP to retrieve the user's given name and chooses a greeting dependent on time of day.

### hostname.php
Finds IP address and hostname of device and displays this information.
