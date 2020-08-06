<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
    private $table = 'tbl_articles';
    private $id = 'tbl_articles.id';

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by($this->id, 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file Article_model.php */
