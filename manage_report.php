<?php session_start() ?>
<div class="box">
<div class="card">
	<form action="" id="complaint-frm">
		<input type="hidden" name="id" value="">
		<div class="form-group">
			<label for="" class="control-label">Report Message</label>
			<textarea cols="30" rows="3" name="message" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Incident Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
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
        min-height: 450px;
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
  height: 400px;
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
	$('#complaint-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=complaint',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#complaint-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
					alert_toast("Data successfully saved.",'success')
						setTimeout(function(){
							location.reload()
						},1000)
				}else{
					end_load()
				}
			}
		})
	})
</script>