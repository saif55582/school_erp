<?php



defined('BASEPATH') or exit('No direct scripting allowed');







class Fee_list_m extends MY_Model {







	protected $_table_name = 'fee_list';



	protected $_primary_key = 'fee_listID';



	protected $_primary_filter = 'intval';



	protected $_order_by = '';







	function __constuct() {



		parent::__constuct();



	}







	function insertFee($array) {



		$id = parent::insert($array);



		return $id;



	}


	function get_all_list_where($array=Null){



		return parent::get_order_by($array);

	}


	function get_order_by_fee($array=NULL) {



		$query = parent::get_order_by($array);



		return $query;



	}







	function get_single_fee($array=NULL) {



		$query = parent::get_single($array);



		return $query;



	}







	function get_fee_by_id($id=NULL, $single=NULL) {



		$query = parent::get($id,$single);



			return $query;



	}







	function update_list($array=NULL, $id=null) {



		parent::update($array,$id);



	}







	function deleteFee($id=NULL) {



		parent::delete($id);



	}







}