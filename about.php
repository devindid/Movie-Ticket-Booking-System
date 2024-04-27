
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
       <!-- about section starts  -->
       <header class="masthead">
	<div class="container-fluid">	

			<div id="about">
       <section class="about" id="about">
            <div class="section">
                <div class="container">
                    <div class="image">
                        <img src="images/about-img.jpg" alt="">
                    </div>

                    <div class="row">

                        <div class="image">
                            <img src="images/about.jpeg" alt="">
                        </div>

                        <div class="content">
                            <h1>What is Cineflicks?</h1>
                            <p class="text">We are an online Entertainment Portal tied up with leading theaters across
                                Southern
                                Province in Sri Lanka to provide users the convenience of online ticket booking
                                anytime and anywhere.We are providing movie tickets online. Currently we are accepting
                                bookings for the leading cinemas in Southern Province of Sri Lanka and planning to
                                extend our service Island wide in the extremely near future, <span class="dots">
                                    ...</span> <span class="moreText">We aim to revolutionize Sri Lanka’s Entertainment
                                    Industry by bringing together Cinema Owners, Movie Producers, Movie Importers, the
                                    Customer and Corporate Organizations on one platform.
                                    We are an authorized online partner for all types of movies and our website helps
                                    theatre owners to promote their theatres.
                                    We have a comprehensive and user-friendly booking system. we promise our customers
                                    to provide the best service. we are always welcoming your feedback to improve our
                                    service to the best. Our aim is to give the best service to our customers to their
                                    comfort.
                                </span></p>
                            <button class="read-more-btn">READ MORE</button>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        
        <!--about section ends-->
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
