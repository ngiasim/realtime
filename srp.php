<?php
/**
 * An example of a Class that violates the Single Responsibility Principle.
 * Creation of customer and order mixed up.
 * 
 * @author deepak.karanth
 */
public class CustomerOrder {
     
    public void createCustomer(int customerId, String name) {
        // Create customer
    }
     
    public void submitOrder(Cart shopCart) {
   
        // Step 1: Submit Orders for processing
        Order order = orderProcessor.submitOrder(shopCart.getItems());
         
        // Step 2: Update customer object with the newly processed order information
        Customer customer = shopCart.getCustomer();
        customer.addOrder(order);
        dbManager.update(customer);
    }
}

?>
