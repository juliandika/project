<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('users', $data);
			return $query;
		}

		public function view_data_user($username) {
			$hasil = $this->db->where('username', $username)
		                    ->limit(1)
		                    ->get('transaksi');

			return $hasil->row();
		}

	}

?>
