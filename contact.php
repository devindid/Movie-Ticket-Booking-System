
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cineflicks
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
</head>

<body>
<header class="masthead">
	<div class="container-fluid">	

			<div id="contact">	
    <!--Contact Us section starts  -->

    <section class="contact us" id="contact us">
            <div class="section">
                <div class="container">
                    <div class="contact-wrap">
                        <div class="contact-in">
                            <h2>Contact Info</h2>
                            <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
                            <p>011-456-789</p>
                            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
                            <p>www.cineflicks.com</p>
                            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
                            <p>General Sir John Kotelawala Defence University,<br> Sooriyawewa</p>
                        </div>
                        <div class="contact-in">
                            <h2>Send a Message</h2>
                            
                        <?php 
                            $Msg = "";
                         
                            if(isset($_GET['error']))
                            {
                                
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                               
                            }
                         
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?> 
                        <div class="card-body">
                        <form action="https://formsubmit.co/0a7c045464890f7be7174337ba7bc12d" method="POST" > 
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                        </div>
                        </div>
                        
                    </div>
                </div>
             </div>
                       
        </section>

        <!--Contact Us section ends-->
                        </header>
</body>
<script>
	$('.mov-det button').click(function(){
    location.replace('index.php?page=reserve&id='+$(this).attr('data-id'))
  })
</script>
  <!-- SCRIPT -->
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
        <!-- APP SCRIPT -->
        <script src="js/app.js"></script>
</html>
