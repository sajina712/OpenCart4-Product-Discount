<?php
namespace Opencart\Catalog\Model\Extension\Paymentmethodfee\Total;
class PaymentMethodFee extends \Opencart\System\Engine\Model {
	public function getTotal(array &$totals, array &$taxes, float &$total): void {
		if ($this->config->get('total_payment_method_fee_status') && isset($this->session->data['payment_method'])) {
			$rules = $this->config->get('total_payment_method_fee_rules');

			if (is_array($rules)) {
				// find the matching rules
				$matching_rules = array();

				foreach ($rules as $rule) {
					if ($rule['status'] && $this->session->data['payment_method'].'.'.$this->session->data['payment_method'] == $rule['payment_code'] && in_array($this->config->get('config_store_id'), $rule['stores']) && $total > (float)$rule['total']) {
						if ($rule['type'] == 'percentage' || $total >= (float)$rule['value']) {
							$matching_rules[] = $rule;
						}
					}
				}

				foreach ($matching_rules as $matching_rule) {
					$value_total = 0;

					if ($matching_rule) {
						if ($matching_rule['type'] == 'percentage') {
							$value = $total / 100 * $matching_rule['value'];

							if ($matching_rule['method'] == 'discount') {
								$value_total -= $value;
							} else {
								$value_total += $value;
							}

							// adjust taxes accordingly
							foreach ($taxes as $tax_rate_id=>$tax_amount) {
								if ($matching_rule['method'] == 'discount') {
									$taxes[$tax_rate_id] = $taxes[$tax_rate_id] - ($taxes[$tax_rate_id] / 100 * $matching_rule['value']);
								} else {
									$taxes[$tax_rate_id] = $taxes[$tax_rate_id] + ($taxes[$tax_rate_id] / 100 * $matching_rule['value']);
								}
							}
						} elseif ($matching_rule['type'] == 'fixed') {
							$value = $matching_rule['method'] == 'discount' ? -$matching_rule['value'] : $matching_rule['value'];

							if ($this->config->get('total_payment_method_fee_tax_class_id')) {
								$tax_rates = $this->tax->getRates($value, $this->config->get('total_payment_method_fee_tax_class_id'));

								foreach ($tax_rates as $tax_rate) {
									if (!isset($taxes[$tax_rate['tax_rate_id']])) {
										$taxes[$tax_rate['tax_rate_id']] = $tax_rate['amount'];
									} else {
										$taxes[$tax_rate['tax_rate_id']] += $tax_rate['amount'];
									}
								}
							}

							$value_total += $value;
						}

						if ($value_total) {
							$names = $matching_rule['title'];

							$name = trim($names[$this->config->get('config_language_id')]['name']);

							if (!$name) {
								$name = $this->session->data['payment_method']['title'];
							}

							$totals[] = [
								'extension'  => 'payment_method_fee',
								'code'       => 'payment_method_fee',
								'title'      => $name,
								'value'      => $value_total,
								'sort_order' => $this->config->get('total_payment_method_fee_sort_order')
							];

							$total += $value_total;
						}
					}
				}
			}
		}
	}
}