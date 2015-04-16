<?php

namespace Models;

class Master_Model {

    protected $table;
    protected $limit;
    protected $db;

    public function __construct($args = array()){
        $args = array(
          'limit'=> 0
        );

        if(! isset($args['table'])){
            die('Table not defined');
        }

        extract($args);

        $this->table = $table;
        $this->limit = $limit;

        $db_object = \Lib\Database::get_instance();
        $this->db = $db_object::get_db();
    }
}