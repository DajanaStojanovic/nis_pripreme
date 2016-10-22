  <div id="myModal" class="modal fade" role="dialog">
 	 <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Prijavi se</h4>
      </div>
      
    <div class="modal-body">
    <form class="form-horizontal" role="form">
			  <div class="form-group">
			    <div class="col-sm-12">
			    	<input type="text" class="form-control" id="email_login" placeholder="E-mail">
			  </div>
			  </div>

			 <div class="form-group">
			    <div class="col-sm-12">
			   		<input type="password" class="form-control" id="password_login" placeholder="Password">
				</div>
			  </div>

			
			  <div class="form-group"> 
			    <div class="col-sm-12">
			      <button id="login" class="btn btn-default">Prijava</button>
			    </div>
			  </div>
			</form>
			<p id="error_login"></p>
	</div>
	
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        </div>
			</div>
		</div>
	</div>
<script>
$("#login").click(function(){
	var email = $.trim($("#email_login").val());
	var password = $.trim($("#password_login").val());
	$.ajax({
				type: 'POST',
				url: 'login.php',
				data: "email=" + email + "&password=" + password,
				dataType: 'text'
			}).done(function(rezultat) {
				if(rezultat=="OK"){
					location.reload();
				}else{
					$("#error_login").empty();
					$("#error_login").html(rezultat);
				}				
			});
	return false;
});
	
</script>