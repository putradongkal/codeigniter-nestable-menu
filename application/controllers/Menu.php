<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'menu');
	}

	public function index()
	{
		$this->load->view('menu');
	}

	public function getAjaxmenu()
	{
		if($this->input->is_ajax_request()) {
			header('Content-Type: application/json');

			$menu = $this->menu->getMenu();
			echo json_encode($menu);
		}
	}

	public function postAjaxmenu()
	{
		if($this->input->is_ajax_request()) {
			header('Content-Type: application/json');
			$input_data = $this->input->post('data');

            $no = 0;
            $seq_no = 0;
			foreach ($input_data as $data)
            {
                $id = $data['id'];
                $parent_id = isset($data['parent_id']) ? $data['parent_id'] : null;

                if($parent_id !=0){
                    $no++;
                } else {
                    $no = 0;
                    $seq_no++;
                }

                $sequence = $parent_id == 0 ? $seq_no : $parent_id.'.'.$no;

                $update_data = ['menu_parent_id' => $parent_id, 'menu_sequence' => $sequence];
                $where = ['menu_id' => $id];
                $this->menu->updateMenu($where, $update_data);
            }

            echo json_encode(['success' => true]);
		}
	}
}
