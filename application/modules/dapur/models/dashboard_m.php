<?php
class M_style extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function input_data(){
		if($this->session->userdata('fb_id')){
			$data = array(
				'fb_id' => $this->session->userdata('fb_id'),
				'name' => $this->input->post('name') ? $this->input->post('name') :'',
				'phone' => $this->input->post('phone') ? $this->input->post('phone') :'',
				'id_card' => $this->input->post('id_card') ? $this->input->post('id_card') :'',
				'email' => $this->input->post('email') ? $this->input->post('email') :'',
				'address' => $this->input->post('address') ? $this->input->post('address') :'',
				'register_date' => date('Y-m-d H:i:s')
			);
			if(!empty($data)){
            	$this->db->insert('styleup_partisipan',$data);
        		$id_register = $this->db->insert_id();
        		return $id_register;
			}
		}
        return false;
	}
	
	function cek_register(){
		if($this->session->userdata('fb_id')){
			$this->db->where('fb_id', $this->session->userdata('fb_id'));
			$cek = $this->db->get('styleup_partisipan')->row_array();
			if(!empty($cek)){
				return $cek;
			}else{
				return false;
			}
		}
		return false;
	}

	function add_tw_sn($tw){
		$data = array(
			'fb_id' => $this->session->userdata('fb_id'),
			'tw_screen_name' => $tw
		);
		$this->db->select('tw_screen_name');
		$this->db->where('fb_id', $this->session->userdata('fb_id'));
		$check = $this->db->get('poster_partisipan_twitter')->row_array();
		if(empty($check)){
			$this->db->insert('poster_partisipan_twitter', $data);
		}else{
			$this->db->where('fb_id', $this->session->userdata('fb_id'));
			$this->db->update('poster_partisipan_twitter', $data);
		}
	}
	
	function check_twitter(){
		$this->db->select('tw_screen_name');
		$this->db->where('fb_id', $this->session->userdata('fb_id'));
		$check = $this->db->get('poster_partisipan_twitter')->row_array();
		if(!empty($check)){
			return $check['tw_screen_name'];
		}else{
			return false;
		}
	}
	
	function get_gallery($id=false){
		if($id){
			$this->db->select('b.name,a.id,a.file');
			$this->db->where('a.id_partisipan', $id);
			$this->db->join('poster_partisipan b', 'a.id_partisipan=b.id', 'left');
			$this->db->order_by('upload_date', 'desc');
			$result = $this->db->get('poster_upload a')->result_array();
		}else{
			$this->db->select('b.name,a.id,a.file');
			$this->db->join('poster_partisipan b', 'a.id_partisipan=b.id', 'left');
			$this->db->order_by('upload_date', 'desc');
			$result = $this->db->get('poster_upload a')->result_array();
		}
		if(!empty($result)){
			return $result;
		}else{
			return false;
		}
	}
	
	function _generate_bitly($id){
		$this->load->library('bitly');
		$longUrl = urlencode($this->_data['tab_url'].'&app_data=gallery_'.$id);
		$request_shorten = $this->bitly->call('shorten', array('longUrl' => $longUrl));
		return $request_shorten->data;
	}
}
