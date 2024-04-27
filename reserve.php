 
 <?php
 include 'admin/db_connect.php';

 $mov = $conn->query("SELECT * FROM movies where id =".$_GET['id'])->fetch_array();
 $duration = explode('.', $mov['duration']);
 $hr = sprintf("%'.02d\n",$duration[0]);
 $min = isset($duration[1]) ? (60 * ('.'.$duration[1])) : '0';
 $min = sprintf("%'.02d\n",$min);
 // $min = $min > 0 ? $min : '00';
 $duration = $hr.' : '.$min
 ?>
 <header class="masthead">
 	<div class="container pt-5">
 		<div class="col-lg-12">
 			<div class="row">
 				<div class="col-md-4">
 					<img src="assets/img/<?php echo $mov['cover_img'] ?>" alt="" class="reserve-img">
 				</div>
 				<div class="col-md-8">
 						<div class="card-body text-white">
 							<h3><b><?php echo $mov['title'] ?></b></h3>
 							<hr>
 							<p class=""><small><b><font color="red" size="4">Description:</font></b><i><?php echo $mov['description'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Director:</font> </b><i><?php echo $mov['director'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Actors:</font> </b><i><?php echo $mov['actor'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Writers:</font> </b><i><?php echo $mov['writer'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Original Language:</font> </b><i><?php echo $mov['language'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Release Date:</font> </b><i><?php echo $mov['release_date'] ?></i></small></p>
 							<p class=""><small><b><font color="red" size="4">Duration:</font> </b><i><?php echo $duration ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Showing Date:</font> </b><i><?php echo $mov['date_showing'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">End Date:</font> </b><i><?php echo $mov['end_date'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Available Theaters:</font> </b><i><?php echo $mov['available_theaters'] ?></i></small></p>
							 <p class=""><small><b><font color="red" size="4">Trailer:</font> </b><i><?php echo $mov['trailer'] ?></i></small></p>
							
					
 						</div>
 					</div>
 					<div class="card bg-light mt-2">
 						<div class="card-body">
 							<h4>Reserve your seat Here</h4>
 							<form action="" id="save-reserve">
 								<input type="hidden" name="movie_id" value="<?php echo $_GET['id'] ?>">
 								<div class="row">
 									<div class="form-group col-md-4">
 										<label for="" class="control-label">Lastname</label>
 										<input type="text" name="lastname" required="" class="form-control">
 									</div>
 									<div class="form-group col-md-4">
 										<label for="" class="control-label">Firstname</label>
 										<input type="text" name="firstname" required="" class="form-control">
 									</div>
 								<div class="form-group col-md-4">
 										<label for="" class="control-label">Contact #</label>
 										<input type="text" name="contact_no" required="" class="form-control">
 									</div>
								</div>
 								<div class="row">
 								<div class="form-group col-md-4">
 									<label for="" class="control-label">Theater</label>
 									<select class="browser-default custom-select" name="ts_id">
 										<option value=""></option>
 										<?php 
											$qry = $conn->query("SELECT * FROM  theater order by name asc");
											while($row= $qry->fetch_assoc()):
 										?>	
 										<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
 										<?php endwhile; ?>
 									</select>
 								</div>
 								</div>
 								<div id="display-other">
 									
 								</div>
 								<div class="row" >
 									<button class="col-md-2 btn btn-block btn-primary">Book</button>
 								</div>
 							</form>
							 <p align="right"><b><font color="red">Go Paypemt Tab to make your payment</font></b></p>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
</header>

<script>
	$('[name="ts_id"]').change(function(){
		$.ajax({
			url:'manage_reserve.php?id='+$(this).val()+'&mid=<?php echo $_GET['id'] ?>',
			success:function(resp){
				$('#display-other').html(resp)
			}
		})
	})
	$(document).ready(function(){
		$('#save-reserve').submit(function(){
			$('#save-reserve button').attr('disabled',true).html("Saving...")
			$.ajax({
				url:'admin/ajax.php?action=save_reserve',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert("Reservartion successfully saved");
						location.replace('index.php')
					}
				}
			})
		})
	})
</script>
