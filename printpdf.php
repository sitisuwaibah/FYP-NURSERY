 <!-- Masthead-->
 <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-center mb-4 page-title">
                        <?php
include 'database.php';
?>

<!DOCTYPE html>
<html>

                    </html>
<?php
          $sn=1;
          $user_qry="SELECT * from user";
          $user_res=mysqli_query($conn,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
?>

    <h1 class="text-white">Order Receipt</h1>
    <hr class="divider my-4 bg-dark" />
	<section class="page-section" id="product">
        		<?php 
				$total = 0;
				$get = $conn->query("SELECT *,c.id as cid FROM cart c inner join product_list p on p.id = c.product_id ".$user_data);
				while($row= $get->fetch_assoc()):
					$total += ($row['qty'] * $row['price']);
        		?>

			        		<div class="col-md-4">
			        			<p><b></br><large><?php echo $row['name'] ?></large></b></p>
			        			<p> <b>Unit Price :<?php echo number_format($row['price'],2) ?></b> </p>
			        			<p> <b><large>Quantity Order :  <?php echo $row['qty'] ?> </b>
            
                                
								</div>
			        		</div>
		        		</div>
	        		</div>
	        	</div>

	        <?php endwhile; ?>
        	</div>
        					<p><large><b></br>Total Amount</large></b></p>
        					<hr>
        					<p class="text-right"><b>RM <?php echo number_format($total,2) ?></b></p>
        					<hr>
        					<div class="text-center">
        	            	</div>
                            <button id="PrintButton" onclick="PrintPage()">Print</button>
                            <script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	// window.addEventListener('DOMContentLoaded', (event) => {
   	// 	PrintPage()
	// 	setTimeout(function(){ window.close() },750)
	// });
</script>
