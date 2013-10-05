<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class file_model extends CI_Model{

		public function get_all()
		{
			$query = $this->db->get('files_tbl');
		
			return $query->result();
		}

		public function insert($data)
		{
			return $this->db->insert('files_tbl',$data);
		}

		public function get_id($id)
		{
			$this->db->where('file_id',$id);

			$query = $this->db->get('files_tbl');

			return $query->result();
		}

		public function delete($id)
		{
			$this->db->where('file_id',$id);

			return $this->db->delete('files_tbl');
		}

	}	