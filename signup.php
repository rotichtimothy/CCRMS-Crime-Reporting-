<?php session_start() ?>
<?php include('admin/db_connect.php'); ?>
<?php 
if(isset($_SESSION['login_id'])){
	$qry = $conn->query("SELECT * from complainants where id = {$_SESSION['login_id']} ");
	foreach($qry->fetch_array() as $k => $v){
		$$k = $v;
	}
}
?>
<div class="box">
<div class="card">
	<form action="" id="signup-frm">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="name" required="" class="form-control" value="<?php echo isset($name) ? $name : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact</label>
			<input type="text" name="contact" required="" class="form-control" value="<?php echo isset($contact) ? $contact : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"><?php echo isset($address) ? $address : '' ?></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control" value="<?php echo isset($email) ? $email : '' ?>">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" class="form-control" <?php echo isset($email) ? '' : "required" ?>>
			<?php if(isset($id)): ?>
				<small><i>Leave this field blank if you dont want to change your password.</i></small>
			<?php endif; ?>
		</div>
		<button class="button btn btn-primary btn-sm">Create</button>
	</form>
</div>
</div>

<style>
	.box{
        background-color: beige;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 600px;
      }
      .card span {
        font-weight: normal;
        font-size: .5em;
        position: absolute;
        bottom: 10%;
        right: 10%;
      }

.card {
  background-color: #fff;
  display: flex;
  align-items: center;
  flex-direction: column;
  position: relative;
  width: 400px;
  height: 550px;
  box-shadow: 0 0 0.5em rgba(255, 255, 255, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.6);
  border-radius: 12px;
  transition: 0.5s;
  cursor: pointer;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size: 1.5em;
  color: #000000;
  font-weight: 800;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

      .card:active {
        scale: 1.1; rotate: 5deg;
      }

@keyframes animate {
  0% {
    opacity: 0.3;
  }

  80% {
    opacity: 1;
  }

  100% {
    opacity: 0.3;
  }
}
.card:hover {
  transform: rotate(0deg);
  opacity: 1;
}

.card, .card::before {
  background: linear-gradient(43deg,  rgb(210, 170, 39) 0%, #00fffc, rgb(210, 170, 39) 100%);
}

.card::before {
  content: '';
  width: 120%;
  height: 110%;
  z-index: -1;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 15px;
  transform: translate(-50%, -50%);
  filter: blur(30px);
  animation: animate 3s linear infinite;
}
</style>
<script>
	$('#signup-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=signup',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#signup-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					$('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
					end_load()
				}
			}
		})
	})
</script>