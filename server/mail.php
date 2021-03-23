<!-- <?php
  
  if(isset($_POST)){
    $name = $_POST['test_name'];
    $to= $_POST['test_email'];
    $phonenumber= $_POST['test_phonenumber'];
    $alternatephonenumber= $_POST['test_alternative_phonenumber'];
    $address= $_POST['test_address'];
    $averagemonthlybill= $_POST['test_avg_bill'];
    $averagemonthlyconsumption= $_POST['test_avg_consuption'];
    $connected_load=$_POST['test_load'];
      
    
    $admin_mail='info@kiransolarsolutions.com';
    $client_subject = 'Registration success.!!';
    $admin_subject = 'New Client Registered.!!';
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$admin_mail."\r\n".
        'Reply-To: '.$admin_mail."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Compose a simple HTML email admin_message
    $admin_message ='<div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:#ffb300;border-radius:10px;padding:20px;height:80vh;width: max-content;">';
    $admin_message .='<h1 style="text-align:center;font-size:30px;font-weight: bold;color: rgb(31, 31, 31);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">New Client Registred</h1>';
    $admin_message .='<h3 style="font-weight: bold;color:rgb(122, 122, 122);text-transform: uppercase;font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">Client Details</h3>';
    $admin_message .='<table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">';
    $admin_message .='<tr>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Name</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Phonenumber</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Alternative phonenumber</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Email</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Address</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Average bill</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Consumption</th>';
    $admin_message .='<th style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">Load</th>';
    $admin_message .='</tr>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$name.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$phonenumber.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$alternatephonenumber.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$to.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$address.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$averagemonthlybill.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$averagemonthlyconsumption.'</td>';
    $admin_message .='<td style=" border: 1px solid #000000;white-space: nowrap;text-align: left;padding: 8px;">'.$connected_load.'</td>';
    $admin_message .='<tr>';
    $admin_message .=' </table>';
    $admin_message .=' </div>';
    

    $client_message='<div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:#ffb300; border-radius:10px;padding:20px;">';
    $client_message .='<div style="text-align: center;">';
    $client_message .='<img src="http://stackrootsclasses.online/kiran-solar/assets/img/kiran-logo.png" width="150px" style="text-align: center;padding:6px;background-color: antiquewhite;">';
    $client_message .='</div>';
    $client_message .='<h1 style="text-align: center;font-size:30px;font-weight: bold;color: rgb(31, 31, 31);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">Registration Success! Thank you '.$name.'.</h1>';
    $client_message .='<h3 style="text-align: start;ont-weight: bold;color:rgb(122, 122, 122);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">WHAT WE OFFERS </h3>';
    $client_message .='<p style="font-weight: bold;text-align: start;color:rgb(15, 15, 15);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">Established in the year 2010, Kiran Solar in Kakkoor, Kozhikode is a top player in the category Solar Panel Dealers in the Kozhikode. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Kozhikode. Over the course of its journey, this business has established a firm foothold in it’s industry. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Kozhikode, this establishment occupies a prominent location in Kakkoor. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Calicut Road, Opp Highness English Medium School, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Inverter Dealers, Solar Panel Dealers, Solar Geyser Dealers, Solar Inverter Dealers, Solar Photovoltaic Cell Dealers, Hybrid Solar Inverter Manufacturers, Solar Street Light Dealers, Solar Battery Dealers.</p>';
    $client_message .='<h3 style="text-align: start;font-weight: bold;color:rgb(122, 122, 122);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">Contact us</h3>';
    $client_message .='<p style="text-align: start;font-weight: bold;color:rgb(22, 22, 22);font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;">Unipparambu building, kakkur11/4,kozhikode , 673613 <br>info@kiran.com<br><br>+91-9875451254<br>+91-9947140848</p>';
    $client_message .='</div>';
    
   // Sending email
    if(mail($to, $client_subject,$client_message, $headers)){
            if(mail($admin_mail, $admin_subject,$admin_message, $headers)){
                  
                  echo 'success';
                //   include('./download.php');
            } else{
                echo 'error';
            }
            
    } else{
        echo 'error';
    }
    
    
  }else{
      echo 'error';
  }


   $_POST = array();
   exit;

?>


 -->
