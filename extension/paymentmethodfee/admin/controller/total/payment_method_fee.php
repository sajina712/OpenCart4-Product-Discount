<?php
namespace Opencart\Admin\Controller\Extension\Paymentmethodfee\Total;
class PaymentMethodFee extends \Opencart\System\Engine\Controller {
	private $error = [];

	public function index() {
		$this->load->language('extension/paymentmethodfee/total/payment_method_fee');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/paymentmethodfee/total/payment_method_fee', 'user_token=' . $this->session->data['user_token'])
		];

		$data['action'] = $this->url->link('extension/paymentmethodfee/total/payment_method_fee|save', 'user_token=' . $this->session->data['user_token']);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total');

		$data['total_payment_method_fee_status'] = $this->config->get('total_payment_method_fee_status');

		$data['total_payment_method_fee_sort_order'] = $this->config->get('total_payment_method_fee_sort_order');

		$this->load->model('localisation/tax_class');

		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		$data['total_payment_method_fee_tax_class_id'] = $this->config->get('total_payment_method_fee_tax_class_id');

		if (isset($this->request->get['total_payment_method_fee_rules'])) {
			$data['total_payment_method_fee_rules'] = $this->request->get['total_payment_method_fee_rules'];
		} else {
			$data['total_payment_method_fee_rules'] = is_array($this->config->get('total_payment_method_fee_rules')) ? $this->config->get('total_payment_method_fee_rules') : [];
		}

		// payment methods
		$this->load->model('setting/extension');

		$results = $this->model_setting_extension->getPaths('%/admin/controller/payment/%.php');

		$methods = $this->model_setting_extension->getExtensionsByType('payment');

		$data['methods'] = [];

		if ($results) {
			foreach ($results as $result) {
				$extension = substr($result['path'], 0, strpos($result['path'], '/'));

				$code = basename($result['path'], '.php');
				
				$this->load->language('extension/' . $extension . '/payment/' . $code, $code);

				$data['methods'][] = [
					'name'       => $this->language->get($code . '_heading_title'),
					'code'       => $code . '.' . $code
				];
			}
		}

		// stores
		$this->load->model('setting/store');

		$data['stores'] = [];
		
		$data['stores'][] = [
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		];
		
		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$data['stores'][] = [
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			];
		}
		

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/paymentmethodfee/total/payment_method_fee', $data));
	}

	public function save(): void {
		$this->load->language('extension/paymentmethodfee/total/payment_method_fee');

		$json = [];

		if (!$this->user->hasPermission('modify', 'extension/paymentmethodfee/total/payment_method_fee')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['total_payment_method_fee_rules'])) {
			foreach ($this->request->post['total_payment_method_fee_rules'] as $row=>$rule) {
				if ($rule['payment_code'] === '') {
					$json['error']['rules_' . $row . '_payment_code'] = $this->language->get('error_payment_code');
				}
				if ((float)$rule['total'] < 0) {
					$json['error']['rules_' . $row . '_total'] = $this->language->get('error_total');
				}
				if ((float)$rule['value'] <= 0) {
					$json['error']['rules_' . $row . '_value'] = $this->language->get('error_value');
				}
			}
		}

		if (isset($json['error']) && !isset($json['error']['warning'])) {
			$json['error']['warning'] = $this->language->get('error_warning');
		}

		if (!$json) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('total_payment_method_fee', $this->request->post);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}