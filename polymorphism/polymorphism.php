<?php

// Interface
interface PaymentGateway {
	public function pay($amount);
}

// Child Class implementing the Interface
class PayPal implements PaymentGateway {    
	public function pay($amount)
    {
    	return '$' . $amount . ' sent to PayPal';
  	}
}

// Child Class implementing the Interface
class PAYU implements PaymentGateway {
	public function pay($amount)
    {
    	return '$' . $amount . ' sent to PAYU';
  	}
}

// Create a instances of the Children Classes
$paypal = new PayPal();
$payu = new PAYU();

// sent $100 to PayPal
echo $paypal->pay(100);
echo '<br>';

// sent $50 to PAYU
echo $payu->pay(50);

?>