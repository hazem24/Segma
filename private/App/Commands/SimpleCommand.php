<?php
        namespace App\Commands;
        use Framework\Shared\AbstractCommand;
        /**
        *@class loginCommand This Class Handle The Logic Of Login Users To System 
        **/

        Class SimpleCommand extends AbstractCommand
        {

            public function __construct(){
                    
            }

            public function execute(array $userData = []){
                    return $this->doLogic();
            }

            private function doLogic(){
                    //Logic To Be Done !
            }


        }