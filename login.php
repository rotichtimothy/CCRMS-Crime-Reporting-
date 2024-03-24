<?php session_start() ?>
<div class="box">
<div class="card">
	<form action="" id="login-frm">
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
			<small><a href="javascript:void(0)" id="new_account">Create New Account</a></small>
		</div>
		<button class="button btn btn-primary btn-sm">Login</button>
	</form>
</div>
</div>

<style>
	.box{
        background-color: beige;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
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
  width: 350px;
  height: 300px;
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
	$('#new_account').click(function(){
		uni_modal("Create an Account",'signup.php?redirect=index.php?page=checkout')
	})
	$('#login-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		end_load()

			},
			success:function(resp){
				if(resp == 1){
					location.href ='<?php echo isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php?page=home' ?>';
				}else{
					$('#login-frm').prepend('<div class="alert alert-danger">Email or password is incorrect.</div>')
		end_load()
				}
			}
		})
	})
</script>