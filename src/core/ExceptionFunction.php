<?php
namespace Aqrun\kf5\core;

function SdkException($exception)
{
  echo "<b>Exception:</b> " , $exception->getMessage(),"<br/>";
}
	
set_exception_handler('SdkException');