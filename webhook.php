<?php  
//Get the raw POST data
$postBody = file_get_contents("php://input");
if (file_put_contents('webhookData', $postBody)) {
	echo 'success';
} else {
	echo 'failed';
}
?>