<?php
        namespace App\Controller;
        use Framework\Shared;
        use Framework\Request\RequestHandler;
        use Framework\Lib\Security\Data\FilterDataFactory;
        use Framework\Error\WebViewError;
        
        




        Class Index extends Shared\Controller
        {
            /**
            *@method index Action This Method For Test Only How I Can Work With Controller
            */    
            public function defaultAction(){
                        $this->rIn("id","overview");
            }


        }