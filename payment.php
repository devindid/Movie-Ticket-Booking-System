<?php 
  include 'admin/db_connect.php';
  $movies = $conn->query("SELECT * FROM movies where '".date('Y-m-d')."' BETWEEN date(date_showing) and date(end_date) order by rand()");
?>

<header class="masthead">
	<div class="container-fluid">	
    <div class="card-body">
        <div class="btn-text-center">
        <br>
        <br>
        <br>
        <a href="https://buy.stripe.com/test_cN229Vgc59Dx3G8eV2"><button type="button" class="btn btn-primary">PAY NOW</button></a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-primary">RECEIPT </button>
        </div>
<style>
button {
        background-color: #000;
        border: .5px solid crimson;
        border-radius: 10px;
        color: #fff;
        padding: 8px;
      }
.btn-text-center{
	text-align: center;
}
</style>
</div>
</div>
</section>
</header>
</body>
</html>
