<?php

    App::bind('config', require 'config.php');


    App::bind('database', new QueryBuilder(

        Connection::make(App::get('config')['database'])

    ));


    //Global functions (helpers)
    function view($name, $data = []) {

        //Creates variables with values from data array
        extract($data);

        return require "views/{$name}.view.php";
    }