<?php
/**
 * Created by PhpStorm.
 * User: Obada
 * Date: 2/24/2019
 * Time: 2:23 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Permission  extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function find($id)
	{
		return $this->db->get_where("permissions", array("user_id" => $id))->row(0);
	}
	public function all()
	{
		return $this->db->get("permissions")->result();
	}
}
