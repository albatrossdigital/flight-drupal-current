<?php
require('mxmconnect2.php');

/*
* Example:
*/
//$mxm = new MxmConnect(True); for fast emails
$mxm = new MxmConnect();
echo $mxm->createTag('test');
//get the content of the tag (open, unsub, spam report)
// Paginated
echo $mxm->getTagPaginated('test', 151130, 50);

//Non paginated
echo $mxm->deleteTag('test');

$html = '';

for ($i = 0; $i < 10; $i++) {
	//Here I demo encoding of internationalized chars and the template engine
	$html .= '<b>יאח</b><br><a href="http://www.critsend.com/">http://www.critsend.com/</a> <mxm var="field1" /> יאח fin';
}


//$text can be empty as shown if you want a pure html email
$content = array('subject'=> 'Test Subject: י א ח', 'html'=> $html, 'text' =>''
);
// I configure my delivery this way
$param = array('tag'=>array('test'), 'mailfrom'=> 'nico@mxmtech.net', 'mailfrom_friendly'=> 'Nico Toper',
 'replyto'=>'nico@mxmtech.net', 'replyto_filtered'=> 'true');

//Here I configure two test emails to my test addresses.
$emails = array();
for ($i = 0; $i < 2; $i++) {
	$emails[$i] = array('email'=>'nico@mxmtech.net', 'field1'=> 'test');
}

try {
	//I am sending
	print_r($mxm->sendCampaign($content, $param, $emails));
} catch (MxmException $e) {
	//and I capture potential exceptions here
	echo $e->getMessage();
}

?>
