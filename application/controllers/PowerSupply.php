<?php
class PowerSupply extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('powerSupply_model');
		$this->load->helper('url_helper');
	}
 
	public function index()
	{
		$data['powerSupply'] = $this->powerSupply_model->get_powerSupply();
		$data['title'] = 'View of Power Supplies';
 
		$this->load->view('templates/header', $data);
		$this->load->view('powerSupply/index', $data);
		$this->load->view('templates/footer');
	}
 
	public function view($slug = NULL)
	{
		$data['powerSupply_item'] = $this->powerSupply_model->get_powerSupply($slug);
		
		if (empty($data['powerSupply_item']))
		{
			show_404();
		}
 
		$data['name'] = $data['powerSupply_item']['name'];
		$data['designer'] = $data['powerSupply_item']['designer'];
		$data['description'] = $data['powerSupply_item']['description'];
		$data['price'] = $data['powerSupply_item']['price'];
		$data['component'] = $data['powerSupply_item']['component'];
		$data['color'] = $data['powerSupply_item']['color'];
		$data['power'] = $data['powerSupply_item']['power'];
		$data['80plus'] = $data['powerSupply_item']['80plus'];
		$data['mtbf'] = $data['powerSupply_item']['mtbf'];
		$data['modular'] = $data['powerSupply_item']['modular'];
		$data['fanlessMode'] = $data['powerSupply_item']['fanlessMode'];
		$data['fanType'] = $data['powerSupply_item']['fanType'];
		$data['continuousTemp'] = $data['powerSupply_item']['continuousTemp'];
		$data['weight'] = $data['powerSupply_item']['weight'];
		$data['dimensions'] = $data['powerSupply_item']['dimensions'];
		$data['sleevedCables'] = $data['powerSupply_item']['sleevedCables'];
		$data['warranty'] = $data['powerSupply_item']['warranty'];
		$data['atxConnector'] = $data['powerSupply_item']['atxConnector'];
		$data['epsConnector'] = $data['powerSupply_item']['epsConnector'];
		$data['floppyConnector'] = $data['powerSupply_item']['floppyConnector'];
		$data['fourPinPeripheralConnector'] = $data['powerSupply_item']['fourPinPeripheralConnector'];
		$data['pcieConnector'] = $data['powerSupply_item']['pcieConnector'];
		$data['sataConnector'] = $data['powerSupply_item']['sataConnector'];
		$data['noise'] = $data['powerSupply_item']['noise'];
		$data['safety'] = $data['powerSupply_item']['safety'];
		$data['current33V'] = $data['powerSupply_item']['current33V'];
		$data['current5V'] = $data['powerSupply_item']['current5V'];
		$data['current5Vsb'] = $data['powerSupply_item']['current5Vsb'];
		$data['current12V'] = $data['powerSupply_item']['current12V'];
		$data['current12VJointly'] = $data['powerSupply_item']['current12VJointly'];
		$data['pfc'] = $data['powerSupply_item']['pfc'];
		$data['accessories'] = $data['powerSupply_item']['accessories'];
		$data['switch'] = $data['powerSupply_item']['switch'];
		$data['12VJointly'] = $data['powerSupply_item']['12VJointly'];
		$data['335VJointly'] = $data['powerSupply_item']['335VJointly'];
		$data['efficiency'] = $data['powerSupply_item']['efficiency'];
		$data['inputVoltageRange'] = $data['powerSupply_item']['inputVoltageRange'];
		$data['amperage'] = $data['powerSupply_item']['amperage'];
		$data['releaseDate'] = $data['powerSupply_item']['releaseDate'];
		$data['information'] = $data['powerSupply_item']['information'];
 
		$this->load->view('templates/header', $data);
		$this->load->view('powerSupply/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
 
		$data['title'] = 'Create a new powerSupply';
 
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('designer', 'designer', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('component', 'component', 'required');
		$this->form_validation->set_rules('color', 'color', 'required');
		$this->form_validation->set_rules('power', 'power', 'required');
		$this->form_validation->set_rules('80plus', '80plus', 'required');
		$this->form_validation->set_rules('mtbf', 'mtbf', 'required');
		$this->form_validation->set_rules('modular', 'modular', 'required');
		$this->form_validation->set_rules('fanlessMode', 'fanlessMode', 'required');
		$this->form_validation->set_rules('fanType', 'fanType', 'required');
		$this->form_validation->set_rules('continuousTemp', 'continuousTemp', 'required');
		$this->form_validation->set_rules('weight', 'weight', 'required');
		$this->form_validation->set_rules('dimensions', 'dimensions', 'required');
		$this->form_validation->set_rules('sleevedCables', 'sleevedCables', 'required');
		$this->form_validation->set_rules('warranty', 'warranty', 'required');
		$this->form_validation->set_rules('atxConnector', 'atxConnector', 'required');
		$this->form_validation->set_rules('epsConnector', 'epsConnector', 'required');
		$this->form_validation->set_rules('floppyConnector', 'floppyConnector', 'required');
		$this->form_validation->set_rules('fourPinPeripheralConnector', 'fourPinPeripheralConnector', 'required');
		$this->form_validation->set_rules('pcieConnector', 'pcieConnector', 'required');
		$this->form_validation->set_rules('sataConnector', 'sataConnector', 'required');
		$this->form_validation->set_rules('noise', 'noise', 'required');
		$this->form_validation->set_rules('safety', 'safety', 'required');
		$this->form_validation->set_rules('current33V', 'current33V', 'required');
		$this->form_validation->set_rules('current5V', 'current5V', 'required');
		$this->form_validation->set_rules('current5Vsb', 'current5Vsb', 'required');
		$this->form_validation->set_rules('current12V', 'current12V', 'required');
		$this->form_validation->set_rules('current12VJointly', 'current12VJointly', 'required');
		$this->form_validation->set_rules('pfc', 'pfc', 'required');
		$this->form_validation->set_rules('accessories', 'accessories', 'required');
		$this->form_validation->set_rules('switch', 'switch', 'required');
		$this->form_validation->set_rules('12VJointly', '12VJointly', 'required');
		$this->form_validation->set_rules('335VJointly', '335VJointly', 'required');
		$this->form_validation->set_rules('efficiency', 'efficiency', 'required');
		$this->form_validation->set_rules('inputVoltageRange', 'inputVoltageRange', 'required');
		$this->form_validation->set_rules('amperage', 'amperage', 'required');
		$this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
		$this->form_validation->set_rules('information', 'information', 'required');
 
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('powerSupply/create');
			$this->load->view('templates/footer');
 
		}
		else
		{
			$this->powerSupply_model->set_powerSupply();
			$this->load->view('templates/header', $data);
			$this->load->view('powerSupply/success');
			$this->load->view('templates/footer');
		}
	}
	
	public function edit()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Edit a powerSupply item';        
		$data['powerSupply_item'] = $this->powerSupply_model->get_powerSupply_by_id($id);
		
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('designer', 'designer', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('component', 'component', 'required');
		$this->form_validation->set_rules('color', 'color', 'required');
		$this->form_validation->set_rules('power', 'power', 'required');
		$this->form_validation->set_rules('80plus', '80plus', 'required');
		$this->form_validation->set_rules('mtbf', 'mtbf', 'required');
		$this->form_validation->set_rules('modular', 'modular', 'required');
		$this->form_validation->set_rules('fanlessMode', 'fanlessMode', 'required');
		$this->form_validation->set_rules('fanType', 'fanType', 'required');
		$this->form_validation->set_rules('continuousTemp', 'continuousTemp', 'required');
		$this->form_validation->set_rules('weight', 'weight', 'required');
		$this->form_validation->set_rules('dimensions', 'dimensions', 'required');
		$this->form_validation->set_rules('sleevedCables', 'sleevedCables', 'required');
		$this->form_validation->set_rules('warranty', 'warranty', 'required');
		$this->form_validation->set_rules('atxConnector', 'atxConnector', 'required');
		$this->form_validation->set_rules('epsConnector', 'epsConnector', 'required');
		$this->form_validation->set_rules('floppyConnector', 'floppyConnector', 'required');
		$this->form_validation->set_rules('fourPinPeripheralConnector', 'fourPinPeripheralConnector', 'required');
		$this->form_validation->set_rules('pcieConnector', 'pcieConnector', 'required');
		$this->form_validation->set_rules('sataConnector', 'sataConnector', 'required');
		$this->form_validation->set_rules('noise', 'noise', 'required');
		$this->form_validation->set_rules('safety', 'safety', 'required');
		$this->form_validation->set_rules('current33V', 'current33V', 'required');
		$this->form_validation->set_rules('current5V', 'current5V', 'required');
		$this->form_validation->set_rules('current5Vsb', 'current5Vsb', 'required');
		$this->form_validation->set_rules('current12V', 'current12V', 'required');
		$this->form_validation->set_rules('current12VJointly', 'current12VJointly', 'required');
		$this->form_validation->set_rules('pfc', 'pfc', 'required');
		$this->form_validation->set_rules('accessories', 'accessories', 'required');
		$this->form_validation->set_rules('switch', 'switch', 'required');
		$this->form_validation->set_rules('12VJointly', '12VJointly', 'required');
		$this->form_validation->set_rules('335VJointly', '335VJointly', 'required');
		$this->form_validation->set_rules('efficiency', 'efficiency', 'required');
		$this->form_validation->set_rules('inputVoltageRange', 'inputVoltageRange', 'required');
		$this->form_validation->set_rules('amperage', 'amperage', 'required');
		$this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
		$this->form_validation->set_rules('information', 'information', 'required');
 
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('powerSupply/edit', $data);
			$this->load->view('templates/footer');
 
		}
		else
		{
			$this->powerSupply_model->set_powerSupply($id);
			$this->load->view('powerSupply/success');
			redirect( base_url() . 'index.php/powerSupply/index');
		}
	}
	
	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
				
		$powerSupply_item = $this->powerSupply_model->get_powerSupply_by_id($id);
		
		$this->powerSupply_model->delete_powerSupply($id);        
		redirect( base_url() . 'index.php/powerSupply/index');        
	}
}