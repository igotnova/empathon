<?php

    class User
    {
        private $id;
        public $username;
        public $password;
        public $name;

        private $hidden = ['password'];

        function __construct($id)
        {
            global $con;
            $this->db = $con;

            if ($id) { $this->fetch($id); }
        }

        static function find($id)
        {
            return new User($id);
        }

        private function fetch($id)
        {
            $sql = 'SELECT * FROM `users` WHERE id=%s';

            $result = $this->db->queryi($sql, $id);
            $result->fetch_all(MYSQLI_ASSOC);

            foreach($result as $key=>$field) {
                if (in_array($key, $this->hidden)) { continue; }

                $this->$key = $field;
            }
        }

        public function id()
        {
            return $this->id;
        }

    }