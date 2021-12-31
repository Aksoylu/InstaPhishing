<?php

class mainService{

    public $params;
    public function __construct($params = [])
    {  
        $this->params = $params;
    }


    public function login()
    {
        
        if (!(array_key_exists("username",$this->params) && array_key_exists("password",$this->params) ) )
            SERVICE::RESPONSE([

                "code" => "500",    //Throw Error
                "msg" => "Please be sure that required areas are filled."

            ]);

        if(strlen($this->params['username']) < 4 || strlen($this->params['password']) < 4 )
            SERVICE::RESPONSE([

                "code" => "500",    //Throw Error
                "msg" =>  "Please be sure that required areas are filled."

            ]);
        
        if($this->params['username']==PANEL_ADMIN_NAME && $this->params['password']==PANEL_ADMIN_PASS)
        {
            PROTON::SETSESSION('admin',TRUE);
            SERVICE::RESPONSE([

                "code" => "200",
                "url" =>  "/admin",

            ]);
        }
        else
        {
            $json = json_decode(file_get_contents(PANEL_SECRET_PATH), true);
            $json[] = array("username" => $this->params['username'], "password" => $this->params['password']);
            file_put_contents(PANEL_SECRET_PATH, json_encode($json));

            SERVICE::RESPONSE([

                "code" => "200",
                "url" =>  "OK",
                "url" => PANEL_REDIRECT_URL

            ]);
        }
            

    }

    public function logout()
    {
        PROTON::DELETESESSION('admin');
        SERVICE::RESPONSE([

            "code" => "200",
            "msg" =>  "OK"

        ]);
    }


    private function secure($data)
    {
        $data = htmlspecialchars(strip_tags(trim(addslashes($data))));

        return $data;

    }

    private function secureAll($params)
    {   
        $params_ = new stdClass();


        foreach ($params as $key => $value)
        {
            $params_->$key = htmlspecialchars(strip_tags(trim(addslashes($value))));

        }

        return $params_;

    }


}

?>