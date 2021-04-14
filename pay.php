<?php
    if(isset($_POST["pay"])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $purpose = $_POST['purpose'];
        $amount = $_POST['amount'];

        include 'src/Instamojo.php';


        $api = new Instamojo\Instamojo('test_688c0897f75d2f65b9268a0f5e4', 'test_1f88a798707eb2cd167759c74a5', 'https://test.instamojo.com/api/1.1/');


        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => $purpose,
                "amount" => $amount,
                "send_email" => true,
                "email" => $email,
                "send_sms" => true,
                "phone" => $phone,
                "buyer_name" => $name,
                "allow_repeated_payments" => false,
                "redirect_url" => "http://localhost:8080/fundisa/payment-success.php",
                
               
                ));
            // print_r($response);
            $pay_url = $response['longurl'];
            header("Location: $pay_url");
            exit();
        }
        catch (Exception $e) {
            
            echo "<script>alert('Something went wrong, please make sure the details are correct');</script>";
        }
    }

?>