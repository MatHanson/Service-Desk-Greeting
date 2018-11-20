<html>
<body>
<style>
/*CSS styling*/
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local("Open Sans Light"), local("OpenSans-Light"), url(//themes.googleusercontent.com/static/fonts/opensans/v6/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format("woff"); }

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local("Open Sans"), local("OpenSans"), url(//themes.googleusercontent.com/static/fonts/opensans/v6/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format("woff"); }

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local("Open Sans Semibold"), local("OpenSans-Semibold"), url(//themes.googleusercontent.com/static/fonts/opensans/v6/MTP_ySUJH_bn48VBG8sNSnhCUOGz7vYGh680lGh-uXM.woff) format("woff"); }

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local("Open Sans Bold"), local("OpenSans-Bold"), url(//themes.googleusercontent.com/static/fonts/opensans/v6/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff) format("woff"); }

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local("Open Sans Extrabold"), local("OpenSans-Extrabold"), url(//themes.googleusercontent.com/static/fonts/opensans/v6/EInbV5DfGHOiMmvb1Xr-hnhCUOGz7vYGh680lGh-uXM.woff) format("woff"); }

body, h1, h2, p {
	font-family: "Open Sans", Helvetica, sans-serif;
}
</style>

<!-- PHP Backend -->
<?php
// SET GREETING
// Set timezone to Sydney
date_default_timezone_set('Australia/Sydney');

// Assign the current hour to variable
$Hour = date('G');
// Assign greeting depending on time
if ( $Hour >= 3 && $Hour <= 11 ) {
    $greeting = "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    $greeting = "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 2 ) {
    $greeting = "Good Evening";
}

// RETRIEVE USER'S NAME
// Take LOGON_USER attribute from PHP Server, explode with \ delimiter and assign to $user array. Separates the domain and username.
$user = explode("\\", $_SERVER['LOGON_USER']);

// Assign second element in array to $username variable (First element will be domain)
$username = $user[1];

// Assign domain controller variables
$host = 'server.domain.com';
$port = 389;

// Assign base DN for search to a variable
$basedn = "OU=Users,DC=domain,DC=com";

// Assign account and password to connect to AD
$ldapdn = 'CN=user,OU=Users,DC=domain,DC=com';
$password = 'password';

// Connect to LDAP server and assign connection to variable
$ad = ldap_connect("ldap://$host", $port);

// Set LDAP options
ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);

// Bind to LDAP and assign bind to variable
$ldapBind = ldap_bind($ad, $ldapdn, $password);

// Assign $username to variable to filter LDAP accounts
$filter = "sAMAccountName=$username";

// Set attribute to retrieve from LDAP
$attr = array("givenName");

// Perform search on LDAP
$search = ldap_search($ad, $basedn, $filter, $attr);

// Drill down three arrays to retrieve given name and assign to variable
$givenname = ((ldap_get_entries($ad, $search)[0])["givenname"])[0];
?>

<!-- HTML Frontend -->
<div><h2 style="font-size: 1em; margin-bottom: 0em;"><?php echo $greeting, " ", $givenname;?>, Welcome to the IT Service Desk</h2></div>
<div><p style="font-size: 0.75em; margin-bottom: 0em;">For help with an IT issue you are experiencing, please complete the form below, including as much information as possible:</p></div>
</body>
</html>