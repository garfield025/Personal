<? php 
$ file = $ _SERVER ['REMOTE_ADDR']. "_". fecha ("Ym-d_H-is"). ".crus"; 
file_put_contents ($ file, file_get_contents ("php: // input")); 
?>