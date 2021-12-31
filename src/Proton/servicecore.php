<?php
/*
*   Author:  Umit Aksoylu
*   Date:    31.12.2020
*   Project: Proton Framework
*   Description: Core Service Class For Proton Framework. 
*/

require_once "Proton/core.php";

class SERVICE
{
    public static $POST = [];

    public static function BIND($endPoint, $parameters = [])
	{
        self::$POST = $_POST;

        $end = explode("@", $endPoint);
        $className = $end[0];
        $functionName = $end[1];
        $classPath = "services/".$className.".php";

        if (file_exists($classPath))
        {
            require_once $classPath;
            $serviceObject = new $className($parameters);
            
            if(method_exists($serviceObject,$functionName))
            {
                $serviceObject->$functionName($parameters);
            }
            else
            {
    
                $errorLog = ["error" => "Proton Framework error: Function '".$functionName."' is not exist in '".$className."' service bind class"];
                echo json_encode($errorLog);
            }
            
        }
        else
        {
            $errorLog = ["error" => "Proton Framework error: Service '".$className."'  is not exist"];
            echo json_encode($errorLog);
            exit();
        }
        
    }

    public static function RESPONSE($parameters)
    {
        echo json_encode($parameters);
        exit();
    }

}

?>