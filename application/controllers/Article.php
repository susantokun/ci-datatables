<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
    }

    public function index()
    {
        $data['articles'] = $this->Article_model->get_all();
        $this->load->view('article/article_list', $data);
    }
}

/* End of file Article.php */
