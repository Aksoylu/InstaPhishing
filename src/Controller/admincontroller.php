<?php

Class admincontroller{


    public function __construct($params = [])
    {
     
        $this->foolList = json_decode(file_get_contents(PANEL_SECRET_PATH), true);

    }

        
}

?>