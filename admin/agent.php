<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta property="og:title" content="Solar Panel Installation in Kerala (Top 10 Solar Company in Kerala)e" />
  <title>Admin login</title>
  <meta content="Established in the year 2010, Kiran Solar in Kakkoor, Kozhikode is a top player in the category Solar Panel Dealers in the Kozhikode. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Kozhikode. Over the course of its journey, this business has established a firm foothold in it’s industry. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. In Kozhikode, this establishment occupies a prominent location in Kakkoor. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Calicut Road, Opp Highness English Medium School, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Inverter Dealers, Solar Panel Dealers, Solar Geyser Dealers, Solar Inverter Dealers, Solar Photovoltaic Cell Dealers, Hybrid Solar Inverter Manufacturers, Solar Street Light Dealers, Solar Battery Dealers." name="description">



  <meta content="best quality solar panels,top solar panel manufacturers in the world,top solar energy companies,best solar panel brands,top solar panel manufacturers,top solar panel companies,top 10 solar companiessolar panel brands,top 10 solar inverter manufacturers in the world,top solar companies in the world,best solar,best solar panel company,top solar companies,best solar companies,top solar contractors 2021,top solar contractors 2020,solar best company,best solar energy company in india,best solar energy for home,best solar company india,best solar company for home,solar water heater,solar pumps,solar lights,solar,Solar Accessories,Solar Charge Controllers,Solar Inverters,Solar Panels,Solar energy company in Kerala,Renewable solar energy solutions in Kerala,best in kerala India Solar - On-grid rooftop solar power plants Solar Panels in kerala,best in kerala India Solar - On-grid rooftop solar power plants Solar Panels in kozhikode,Best solar power equipment installation company in Kerala,Deal with Top Solar Company in Kerala As one of the leading Solar Companies in Kerala,Solar Panel Installation in Kerala (Top 10 Solar Company in Kerala),The leading Solar Company in Kerala for Commercial Solar Power and Home Solar Energy,Highest quality Solar Panels, Highest quality solar products supplier in Kerala.,top 10 solar company in Keralatop 1 solar company in Kerala,top ten solar company in Kerala,best solar company in Keralaleading solar company in Kerala,top solar company in Kerala" name="keywords">
  <meta name="author" content="stackroots">

  <!-- Favicons -->
  <link href="../assets/img/kiran-favi-icon.ico" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap"  rel="stylesheet">
  
   <link href="https://fonts.googleapis.com/css2?family=Manjari&display=swap" rel="stylesheet"> 
 

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/index.css" rel="stylesheet">
  
</head>
<!-- oncontextmenu="return false" -->
<body>

   <div class="brand-logo d-flex justify-content-around"> 
        <img src="../assets/img/kiran-logo.png" height="80">
        
        <div>
            <p class="top-item ">Welcome Admin</p>
            <a href="#"><p class="top-item ">Logout</p></a>
        </div>
   </div>
    <div class="main-menu d-none d-lg-block">
      <ul class="d-flex justify-content-around d-none">
          <li ><a id="msg-view" href="index.php">View Messages</a></li>
          <li><a id="agent" href="agent.php">View Agents</a></li>
          <li><a id="agent-add" href="agent-add.php">Add Agent</a></li>
      </ul>
    </div>
    <div class="menu-mobile  d-block d-lg-none">
    <ul class="d-flex justify-content-around">
      <li ><a href="index.php" ><i id="comments" class="fa fa-comments"></i></a></li>
      <li><a href="agent.html"><i id="user" class="fa fa-user"></i></a></li>
      <li><a href="agent-add.php"><i id="user-plus"class="fa fa-user-plus"></i></a></li>
    </ul>
    </div>

   <div class="m-5">
    <p>Registred agents</p>
    <div class="table-responsive">
        <table class="table table-bordered" style="border:3px solid black;">
            <thead>
              <tr >
                
                <th scope="col " name="num" style="border:3px solid black;">Unique Id</th>
                <th scope="col" style="border:3px solid black;">District</th>
                <th scope="col" style="border:3px solid black;">Pincode</th>
                <th scope="col" style="border:3px solid black;">Agent Name</th>
                <th scope="col" style="border:3px solid black;">Mobile</th>
                
                <th scope="col" style="border:3px solid black;">Location Code</th>
                <th scope="col" style="border:3px solid black;"></th>
                
              </tr>
            </thead>
            <tbody>
           

            <?php
$db = mysqli_connect("localhost","root","","kiran-solar");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
// Using database connection file here

$records = mysqli_query($db,"select * from agent"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td  style="border:3px solid black;"><?php echo $data['no']; ?></td>
    <td  style="border:3px solid black;"><?php echo $data['district']; ?></td>
    <td style="border:3px solid black;"><?php echo $data['pincode']; ?></td>
    <td style="border:3px solid black;"><?php echo $data['agent-name']; ?></td>
    <td style="border:3px solid black;"><?php echo $data['mobile']; ?></td>
   
    <td style="border:3px solid black;"><?php echo $data['location']; ?></td>
    <td style="border:3px solid black;"><a style="color:red;" href="delete.php?no=<?php echo $data['no']; ?>">Delete</td>
    
    
    <!-- <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td> -->
    <!-- <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
  </tr>	
<?php
}

?>
           
            
            
              
              
              
              
              
              
              
              
              
              
             
            </tbody>
          </table>
       </div>
   </div>
   <br>
   <br>
    
  







    











  
  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src='../assets/js/server-handle.js'></script>
  <script src='../assets/js/index.js'></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

</body>

</html>