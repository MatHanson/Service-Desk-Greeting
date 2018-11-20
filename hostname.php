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

body, h1, h2, h3 {
  font-family: "Open Sans", Helvetica, sans-serif;
}
</style>

<?php
// Retrieve IP address and assign to variable
$ip = $_SERVER['REMOTE_ADDR'];

// Find fully qualified hostname of IP address
$FQhostname = gethostbyaddr($ip);

// Use "." as a delimiter to explode string into array, in order to isolate hostname from domain
$split = explode(".", $FQhostname);

// Make first string in array uppercase and assign to variable
$hostname = strtoupper($split[0]);

?>
<div><p style="font-size: 0.8em; margin-bottom: 0em; margin-top: 0em">Your computer's name is:</p><hmtl><h3 style="font-size: 1.2em; margin-bottom: 0em; margin-top: 0em;"><?php echo $hostname; ?></h3></html></div>
<div><p style="font-size: 0.8em; margin-bottom: 0em; margin-top: 0em">Your computer's IP address is:</p><hmtl><p style="font-size: 0.9em; margin-bottom: 0em; margin-top: 0em;"><?php echo $ip; ?></p></html></div>
<br>
<br>
<h3 style="font-size: 1.2em; margin-bottom: 0.2em; margin-top: 0em;">Links</h3>
<p style="font-size: 1em; margin-bottom: 0.4em; margin-top: 0.4em"><a href="http://link.com" target="_blank">Bomgar - Remote Support</a></p>

<p style="font-size: 1em; margin-bottom: 0.4em; margin-top: 0.4em"><a href="http://link" target="_blank">Internal System</a></p>

<p style="font-size: 1em; margin-bottom: 0.4em; margin-top: 0.4em"><a href="http://helpdesk/portal/page/10-knowledge-base" target="_blank">IT Knowledge Base</a></p>

<p style="font-size: 1em; margin-bottom: 0.4em; margin-top: 0.4em"><a href="https://link" target="_blank">Webmail</a></p>

<p style="font-size: 1em; margin-bottom: 0.4em; margin-top: 0.2em"><a href="http://link" target="_blank">Internal System</a></p>


</body>
</html>