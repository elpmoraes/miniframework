<?php

namespace App;

use \MF\Init;
use MF\Init\Bootstrap;
/*
                Route > Controller
                        Controller > (require) > view
*/
    class Route extends Bootstrap{

   

        // Vai chamar os métodos 'action' nos 'controller', na pasta app/Controllers
        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'IndexController',
                'action' => 'sobreNos'
            );



            $this->setRoutes($routes);

        }
                            


    }


?>