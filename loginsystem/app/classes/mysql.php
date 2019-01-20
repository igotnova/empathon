<?php

    class mySQL extends mysqli
    {
        function __construct($host, $username, $passwd, $dbname, $port = null, $socket = null)
        {
            parent::__construct($host, $username, $passwd, $dbname, $port, $socket);
        }

        function queryi($str, $parameters)
        {
            $args = [];

            if (is_array($parameters)) {
                foreach ($parameters as $key=>$arg){
                    $args[$key] = $this->real_escape_string($arg);
                }
            } elseif (func_num_args() > 2) {
                foreach (func_get_args() as $key=>$arg){
                    if ($key == 0){ continue; }

                    $args[$key] = $this->real_escape_string($arg);
                }

                var_dump($parameters);
            } else {
                $args[] = $this->real_escape_string($parameters);
            }

            $query = vsprintf($str, $args);

            return $this->query($query);
        }
    }
