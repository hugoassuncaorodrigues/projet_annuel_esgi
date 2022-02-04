
<?php

namespace App\Model;

use App\Core\Sql;

class Contact extends Sql
    {
    protected $id = null;
    protected $object;
    protected $message;

        public function __construct()
        {

            parent::__construct();
        }


//GENERER LES GETTERS AND SETTERS ICI !!!!!!!!!!!!!!!!!!!!

        public function getContactForm(): array
        {
            return [
                "config"=>[
                    "method"=>"POST",
                    "action"=>"",
                    "submit"=>"Contacter"
                ],
                'inputs'=>[
                    "email"=>[
                        "type"=>"email",
                        "placeholder"=>"Votre email ...",
                        "required"=>true,
                        "class"=>"inputForm",
                        "id"=>"emailForm",
                        "error"=>"Email incorrect"
                    ],
                    "message"=>[
                        "type"=>"message",
                        "placeholder"=>"Votre message ...",
                        "required"=>true,
                        "class"=>"inputForm",
                        "id"=>"msgForm"
                    ]
                ]
            ];
        }
    }
?>