<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		
		$data['title'] = "Строительство композитных и бетонных бассейнов, русских бань, финских и турецких саун | Строим бани и сауны.рф";

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}


	public function show_page($page_id)
	{
		$data['contactform'] = $this->load->view('contact_form','',true);

		switch($page_id)
		{
			case 'kompozitnie':
				$data['title'] = "Композитные бассейны";
				break;

			case 'betonnie':
				$data['title'] = "Бетонные бассейны";
				break;

			case 'russkie':
				$data['title'] = "Русские бани";
				break;

			case 'finskie':
				$data['title'] = "Финские сауны";
				break;

			case 'tureckie':
				$data['title'] = "Турецкие сауны";
				break;

			case 'about':
				$data['title'] = "О компании";
				break;

			case 'contacts':
				$data['title'] = "Контактная информация";
				break;
		}

		$data['title'] .= " | Строим бани и сауны.рф";

		$this->load->view('header', $data);
		$this->load->view($page_id, $data);
		$this->load->view('footer');
	}

	public function send_email()
	{
		
		$data = array(
				'name' => $this->input->post('inputName'),				
				'phone' => $this->input->post('inputPhone'),
				'message' => $this->input->post('inputMessage')
			);

		$email_subject = "Новая заявка! СТРОИМ-БАНИ-САУНЫ.РФ: от ".$data['name'];

		$email_content = "Добрый день!\nВам пришла новая заявка с сайта СТРОИМ-БАНИ-САУНЫ.РФ:\n";
		$email_content .= "Имя и фамилия: ".$data['name'];		
		$email_content .= "\nТелефон: ".$data['phone'];
		$email_content .= "\nСообщение:\n".$data['message'];

		$this->load->library('email');

		$this->email->from('robot@ystellunger.ru', 'Робот Штеллунгера');
		$this->email->to('2002515@bk.ru'); 
		$this->email->cc('imstellunger@yandex.ru'); 
		$this->email->subject($email_subject);
		$this->email->message($email_content);	
		$this->email->send();

		$data['title'] = 'Спасибо за заявку! | Строим бани и сауны.рф';

		$this->load->view('header', $data);
		$this->load->view('thanks');		
		$this->load->view('footer');
	}
}

