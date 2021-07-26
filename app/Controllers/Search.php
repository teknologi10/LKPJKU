<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('searchModel');
    }

    function search_keyword()
    {
        $post = $this->request->getGet();

        $keyword = $post['keyword'];
        $data['results']    =   $this->searchModel->search($keyword);
        $this->load->view('result_view',$data);
    }
}
/* End of file search.php */
/* File location: application/controllers */