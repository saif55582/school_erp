<?php

defined('BASEPATH') or exit('No direct scripting allowed');

class Fees extends MY_Controller {

	function __construct() {
		parent::__construct();
		if($this->mylibrary->isLoggedIn() == FALSE)
			redirect('signin');
	}

	//changed
	//made new changes
	//made fir se new changes
	//made fir se new changes.2

	function index() {
		$this->data['classes'] = $this->classes_m->get_order_by_classes(array('instituteID'=>$this->session->userdata('instituteID')));
		$this->data['fees'] = $this->fee_list_m->get_order_by_fee(array('instituteID'=>$this->session->userdata('instituteID')));
		$this->data['title']      = 'Fee';
		$this->data['subview']    = 'finance/fees/fee_list';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function invoice(){

		$this->data['title']      = 'Fee Invoice';
		$this->data['subview']    = 'finance/fees/fee_invoice';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function view(){

		$this->data['title']      = 'Viewe Invoice';
		$this->data['subview']    = 'finance/fees/fee_invoice_view';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function balance(){

		$this->data['title']      = 'Balance';
		$this->data['subview']    = 'finance/fees/fee_balance';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function AddInvoice() {
		
		$this->data['title']      = 'Add Invoice';
		$this->data['subview']    = 'finance/fees/invoice_add';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function EditInvoice() {
		
		$this->data['title']      = 'Edit Invoice';
		$this->data['subview']    = 'finance/fees/invoice_edit';
		$this->data['script']     = 'finance/fees/fee_js';
		$this->data['app_script'] = 'general.js';
		$this->data['li1']        = 'finance';
		$this->data['a1']         = 'finance';
		$this->data['div1']       = 'finance';
		$this->data['li2']        = 'fee';
		$this->data['a2']         = 'fee';
		$this->data['div2']       = 'fee';
		$this->data['li3']        = 'fee-category';
		$this->load->view('main_layout',$this->data);
	}

	function dest() {
		$fee_listID = $this->input->post('param');
		$this->fee_list_m->deleteFee($fee_listID);
	}

	function rows() {
		$classesID = base64_decode($this->input->post('y'));
		$array = array(
			'instituteID'=>$this->session->userdata('instituteID'),
			'classesID'=>$classesID
		);

		$fees = $this->fee_list_m->get_order_by_fee($array);
		foreach($fees as $fee) :
		$result .= "
                <tr id=".$fee->fee_listID.">	
                    <td>".$fee->fee_name."</td>
                    <td>".($fee->fee_desc !="" ? $fee->fee_desc : '-----')."</td>
                    <td>".$fee->amount."</td>
                    <td>";
                    	switch($fee->fee_type) {
                            case 1:
                                $result .= 'Annual';
                                break;
                            case 2:
                                $result .= 'Bi-Annual';
                                break;
                            case 3:
                                $result .= 'Tri-Annual';
                                break;
                            case 4:
                                $result .= 'Quarterly';
                                beak;
                            case 5:
                                $result .= 'Monthly';
                                break;
                            case 6:
                                $result .= 'One Time';
                                break;
                        }
        $result .= "</td>
                    <td>".$this->mylibrary->getClassName($fee->classesID)."</td>
                    <td class='text-center td-actions'>
						
                        <button id='".$fee->fee_listID."' cm='fees/dest' base='".base_url()."' type='button' rel='tooltip' class='btn btn-danger mybtn pop'>
                            <i class='material-icons'>close</i>
                        </button>
                    </td>
                </tr>
                ";
        endforeach;
        echo $result;
	}
}