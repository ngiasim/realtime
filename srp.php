<?php
/**
 * An example of a Class that violates the Single Responsibility Principle.
 * Creation of customer and order mixed up.
 * 
 * @author deepak.karanth
 */


// Bad Example
class CustomerOrder {
     
    public function createCustomer(Request $request) {
        // Create customer
    }
     
    public function submitOrder(Request $request) {
        // Submit Orders for processing
    }
}






// Good Example
class Customer {
     
    public function createCustomer(Request $request) {
        // Create customer
    }
 
}

class Order {
     
    public function submitOrder(Request $request) {
        // Step 1: Submit Orders for processing
    }
}


?>
