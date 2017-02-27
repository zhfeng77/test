<?php
echo "example: control led";

require("PHP-Serial/src/PhpSerial.php");

$COM_PORT = "COM5";

trigger_error("Creating new php UART.");
$UART = new phpSerial();
if(is_null($UART))
{
    trigger_error("can't create php UART object", E_USER_ERROR);
    exit();
}
trigger_error("Php UART created.");

trigger_error("Setup " . $COM_PORT);
if(!$UART->deviceSet($COM_PORT))
{
    trigger_error("Php UART created.", E_USER_WARNING);
    trigger_error("failed to setup " . $COM_PORT, E_USER_ERROR);
    exit();
}

trigger_error($COM_PORT . " set successfully.", E_USER_WARNING);

trigger_error("Config baud rate.", E_USER_WARNING);
$UART->confBaudRate(9600); //Baud rate: 9600
trigger_error("Config parity.", E_USER_WARNING);
$UART->confParity("none");  //Parity (this is the "N" in "8-N-1")
trigger_error("Config length.", E_USER_WARNING);
$UART->confCharacterLength(8); //Character length     (this is the "8" in "8-N-1")
trigger_error("Config Stop bits.", E_USER_WARNING);
$UART->confStopBits(1);  //Stop bits (this is the "1" in "8-N-1")
trigger_error("Config flow control.", E_USER_WARNING);
$UART->confFlowControl("none");

trigger_error("Opening device.", E_USER_WARNING);
if(!$UART->deviceOpen("r+"))
{
    trigger_error("failed to open device " . $this->_device, E_USER_ERROR);
    exit();
}
trigger_error("Device opened.", E_USER_WARNING);

$seconds = 2;

trigger_error("Sleeping " . $seconds . " seconds.", E_USER_WARNING);
sleep($seconds);

trigger_error("Waked up.", E_USER_WARNING);





trigger_error("Sending message...0",E_USER_WARNING);
//$UART->sendMessage("led 0 on");
$UART->sendMessage("a");
trigger_error("Message send",E_USER_WARNING);
// for ($i=0; $i < 10000; $i++) { 
	
// }
// trigger_error("Sending message...1",E_USER_WARNING);
// //$UART->sendMessage("led 0 on");
// $UART->sendMessage("1");
// trigger_error("Message send",E_USER_WARNING);
// for ($i=0; $i < 10000; $i++) { 
	
// }
// trigger_error("Sending message...2",E_USER_WARNING);
// //$UART->sendMessage("led 0 on");
// $UART->sendMessage("0");
// trigger_error("Message send",E_USER_WARNING);
// for ($i=0; $i < 10000; $i++) { 
	
// }
// trigger_error("Sending message...3",E_USER_WARNING);
// //$UART->sendMessage("led 0 on");
// $UART->sendMessage("1");
// trigger_error("Message send",E_USER_WARNING);

trigger_error("Reading  port.", E_USER_WARNING);
$read = $UART->readPort();
trigger_error("got data: " .$read . "abc" , E_USER_WARNING);
?>
