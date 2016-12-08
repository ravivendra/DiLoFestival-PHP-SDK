<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Danra extends CI_Controller
	{
		const CONTENT_DIR 		= 'content';


		public function __construct()
		{
			parent::__construct();

			$this->load->helper(array('comm', 'env', 'url'));
			$this->load->model(array());
		}


		public function index()
		{
			redirect('api/t-money');
		}


		protected function _call_url($api = '', $body = '', $post = TRUE)
		{
			$header 					= array();

			$header[]					= 'Accept: application/json';
			$header[]					= 'Authorization: Bearer ' . FUSION_API_KEY;
			$header[]					= 'Content-Type: application/x-www-form-urlencoded';

			$exec 						= @ call_url($api, $header, $body, $post);

			return ($exec);
		}


		public function api_ipg_get_ticket()
		{
			$body 						= array();

			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-ipg-get-ticket';

			if($this->input->post('send') == 'Send')
			{
				$body['merchant_id']		= @ sanitizer_vars($this->input->post('merchant_id'));
				$body['invoice']			= @ sanitizer_vars($this->input->post('invoice'));
				$body['amount']				= @ sanitizer_vars($this->input->post('amount'));
				$body['redirect_url']		= @ sanitizer_vars($this->input->post('redirect_url'));
				$body['payment_notif_url']	= @ sanitizer_vars($this->input->post('payment_notif_url'));

				$ipg_url 				= 'https://devapi-app.tmoney.co.id/api/ipg/v1/ipg-get-ticket?'
									. 'merchant_id=' . $body['merchant_id']
									. '&invoice=' . $body['invoice']
									. '&amount=' . $body['amount']
									. '&redirect_url=' . $body['redirect_url']
									. '&payment_notif_url=' . $body['payment_notif_url'];

				$data['response']		= $this->_call_url($ipg_url, $body, FALSE);
			}

			$this->load->view('render-output', $data);
		}


		public function api_ipg_payment()
		{
			$body 						= array();

			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-ipg-payment';

			if($this->input->post('send') == 'Send')
			{
				$body['ticketID']		= @ sanitizer_vars($this->input->post('ticketID'));

				$ipg_url 				= 'https://devapi-app.tmoney.co.id/api/ipg/v1/ipg-payment?'
									. 'ticketID=' . $body['ticketID'];

				# $data['response']		= $this->_call_url($ipg_url, $body, FALSE);
				redirect($ipg_url);
			}

			$this->load->view('render-output', $data);
		}


		public function api_sign_in()
		{
			$body 						= array();

			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-sign-in';

			if($this->input->post('send') == 'Send')
			{
				$api 					= 'sign-in';

				$body['userName']		= @ sanitizer_vars($this->input->post('userName'));
				$body['password']		= @ sanitizer_vars($this->input->post('password'));
				$body['terminal']		= @ sanitizer_vars($this->input->post('terminal'));

				$data['response']		= $this->_call_url(FUSION_BASE_API . $api, $body);
			}

			$this->load->view('render-output', $data);
		}


		public function api_sign_up()
		{
			$body 						= array();

			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-sign-up';

			if($this->input->post('send') == 'Send')
			{
				$api 					= 'sign-up';

				$body['accType']		= 1;
				$body['userName']		= @ sanitizer_vars($this->input->post('userName'));
				$body['password']		= @ sanitizer_vars($this->input->post('password'));
				$body['fullName']		= @ sanitizer_vars($this->input->post('fullName'));
				$body['phoneNo']		= @ sanitizer_vars($this->input->post('phoneNo'));
				$body['terminal']		= @ sanitizer_vars($this->input->post('terminal'));

				$data['response']		= $this->_call_url(FUSION_BASE_API . $api, $body);
			}

			$this->load->view('render-output', $data);
		}


		public function api_tmoney()
		{
			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-dashboard';

			$this->load->view('render-output', $data);
		}


		public function api_transfer_p2p()
		{
			$body 						= array();

			$data['params']				= @ base_barrel();
			$data['content']			= self::CONTENT_DIR . '/v-transfer-p2p';

			if($this->input->post('send') == 'Send')
			{
				$api 					= 'transfer-p2p';

				if($this->input->post('transactionType') == 1)
				{
					$body['transactionType']	= 1;
					$body['idTmoney']			= @ sanitizer_vars($this->input->post('idTmoney'));
					$body['idFusion']			= @ sanitizer_vars($this->input->post('idFusion'));
					$body['token']				= @ sanitizer_vars($this->input->post('token'));
					$body['destAccount']		= @ sanitizer_vars($this->input->post('destAccount'));
					$body['amount']				= @ sanitizer_vars($this->input->post('amount'));
					$body['terminal']			= @ sanitizer_vars($this->input->post('terminal'));
				}
				else
				{
					$body['transactionType']	= 2;
					$body['idTmoney']			= @ sanitizer_vars($this->input->post('idTmoney'));
					$body['idFusion']			= @ sanitizer_vars($this->input->post('idFusion'));
					$body['token']				= @ sanitizer_vars($this->input->post('token'));
					$body['destAccount']		= @ sanitizer_vars($this->input->post('destAccount'));
					$body['amount']				= @ sanitizer_vars($this->input->post('amount'));
					$body['terminal']			= @ sanitizer_vars($this->input->post('terminal'));
					$body['transactionID']		= @ sanitizer_vars($this->input->post('transactionID'));
					$body['refNo']				= @ sanitizer_vars($this->input->post('refNo'));
					$body['pin']				= @ sanitizer_vars($this->input->post('pin'));
				}

				$data['response']		= $this->_call_url(FUSION_BASE_API . $api, $body);
			}

			$this->load->view('render-output', $data);
		}
	}