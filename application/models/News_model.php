<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{

    public function_construct(){
        $this->load->database();
    }
    CREATE TABLE news {
        id int(11) NOT NULL,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
    };

    public function get_news ($slug = FALSE){
        if ($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

}