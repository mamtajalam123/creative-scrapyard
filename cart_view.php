<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<h1 class="page-header">YOUR CART</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Photo</th>
		        				<th>Name</th>
		        				<th>Price</th>
		        				<th width="20%">Quantity</th>
		        				<th>Subtotal</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
	        			</div>
	        		</div>
	        		<?php
	        			if(isset($_SESSION['user'])){
							$conn = $pdo->open();

// Prepare and execute SQL query to count cart items for a specific user
$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM cart WHERE user_id = :user_id");
$stmt->execute(['user_id' => $user['id']]);
$crow = $stmt->fetch();

// Check if the cart is empty or not
if ($crow['numrows'] < 1) {
    
} else {
	echo "
	<span class='pull-right'>
	<a href='#edit' class='btn btn-success btn-flat btn-sm' data-toggle='modal'>Procede to checkout</a>
</span>

	";
}
	        			
	        			}
	        			else{
	        				echo "
	        					<h4>You need to <a href='login.php'>Login</a> to checkout.</h4>
	        				";
	        			}
	        		?>

	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/newfooter.php'; ?>
</div>

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Billing Address</b></h4>
            </div>
            <div class="modal-body">
			<form class="form-horizontal" method="POST" action="sales.php?pay=<?php echo mt_rand(100000, 999999); ?>">                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Fullname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fullname" name="fullname" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adress" class="col-sm-3 control-label">Adress</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="adress" name="adress" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">City</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="city" name="city" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">State</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="state" name="state" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="zipcode" class="col-sm-3 control-label">Zip code</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="zipcode" name="zipcode" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="moblilenumber" class="col-sm-3 control-label">Mobile Number</label>

					<div class="col-sm-9">
                      <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" require>
                    </div>
                </div>
                
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit">Submit</button>
              </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				location.reload();
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

	client: {
        sandbox:    'AUR94dN1o2DT5NX6uQAZQX3lOKRTgew5e31CGnHwc9VTL38csLK8AYEU_rJA8ql-gILXWOTdR4gV2qkf',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
    	color: 'gold',
    	size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: total, 
                        	currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
			window.location = 'sales.php?pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>
</body>
</html>