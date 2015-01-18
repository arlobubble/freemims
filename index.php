<?php

/*  freeMIMS Search
    File: index.php
    Version: 0.0.1.1
    Date modified: 18/01/15
    
    This PHP page accepts search requests and returns the results from the ARTG and pharmaceutical suppliers in an easy to read format
*/

if(isset($_GET['search']))
{
  $search_term = $_GET['search'];
  $pi_html = file_get_contents('https://www.google.com.au/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q='.$_GET['search'].'+pi+inurl:.pdf');
  
  $cmi_html = file_get_contents('https://www.google.com.au/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q='.$_GET['search'].'+cmi+inurl:.pdf');
}


?>
