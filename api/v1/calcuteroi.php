<?php
    session_start();

    function set_alert($type = "message", $content = ""){
        switch($type){
            case "message":
                $_SESSION['message'] = $content;
            break;

            case "error":
                $_SESSION['error'] = $content;
            break;

            case "info":
                $_SESSION['info'] = $content;
            break;

            default:
                $_SESSION['message'] = $content;
            break;
        }
    }

    
    //if(isset($_POST['calculate'])){
        
        $capital = $_POST['capital'] ?? "";
        $package = $_POST['package'] ?? "";
        //$month = $_POST['month'] ?? "";

        $month = $_POST['month'];

        $time = $month / 12;
        echo  "MOnth ". $month . " got here";

        

        //initialise variable
        $rate_array = ['0.1','0.15','0.6 '];
        $interest = 0;
        $roi = 0;
        $rate = 0;

        //local
        //$home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/interestcalc'. '/index.php';
        //web
        $home_url = 'https://' . $_SERVER['HTTP_HOST'] . '/index.php';

    switch ($package) {
        case 'piggybank':
            $rate = $rate_array[0];
            break;
        case 'Flex Naira':
            $rate = $rate_array[0];
            break;
        case 'Safelock':
            $rate = $rate_array[1];
            break;
        case 'Targets':
            $rate = $rate_array[0];
            break;
        case 'Flex Dollar':
            $rate = $rate_array[2];
            break;
        
        default:
        $content = "Enter a valid package";
        set_alert("error",$content);
        header($home_url);
        break;
    }

    //return the value to the UI
    $interest = $capital * $rate * $time;
    $roi = $capital + $interest;

    $roundroi = round($roi,2);

    $expectroi = $roundroi - $capital;

    $_SESSION['package'] = $package;
    $_SESSION['capital'] = $capital;
    $_SESSION['month'] = $month;
    $_SESSION['interest'] = $interest;
    $_SESSION['roi'] = $roi;
    $_SESSION['expectedroi'] = $expectroi;

    $content = "Your should have =N=". $roundroi . " at the end of ". $month ." months";
    set_alert("message",$content);
    header('location: ' . $home_url);
//}

?>