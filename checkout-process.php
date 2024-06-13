<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $address = sanitize_text_field($_POST['address']);
    $city = sanitize_text_field($_POST['city']);
    $zip = sanitize_text_field($_POST['zip']);
    $payment_method = sanitize_text_field($_POST['payment_method']);
    
    // Process the order (this is just a basic example, you need to integrate with your payment gateway)
    
    // Redirect to a thank you page
    wp_redirect(home_url('/thank-you'));
    exit;
}
?>
