<? $lastlogin="2009-01-11"; 

$newlast = strtotime( $lastlogin );  
    
if ( ( time() - $newlast ) > 30*24*60*60 ) 
    echo "Inactive";  
	
	?> 