<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
	public function getMenu()
	{
		$parent = $this->db->order_by('menu_sequence', 'asc')
							->get_where('menu', ['menu_parent_id' => null]);
		$menu = $parent->result();
		$i = 0;

		foreach ($menu as $mn) {
			$menu[$i]->child = $this->getChildMenu($mn->menu_id);
			$i++;
		}

		return $menu;
	}

	public function getChildMenu($menu_parent_id)
	{
		$child = $this->db->order_by('menu_sequence', 'asc')
							->get_where('menu', ['menu_parent_id' => $menu_parent_id]);
		$menu = $child->result();
		$i = 0;

		foreach ($menu as $mn) {
			$menu[$i]->child = $this->getChildMenu($mn->menu_id);
			$i++;
		}

		return $menu;
	}

	public function updateMenu($where, $update_data)
	{
		$this->db->update("menu", $update_data, $where);
	}
}
