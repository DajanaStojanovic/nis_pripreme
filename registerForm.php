  <div id="myModal1" class="modal fade" role="dialog">
 	 <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registriraj se</h4>
      </div>
      
    <div class="modal-body">
		<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <div class="col-sm-12">
			    	<input type="text" class="form-control" id="username" placeholder="Korisničko ime *">
			  </div>
			  </div>

			 <div class="form-group">
			    <div class="col-sm-12">
			   		<input type="text" class="form-control" id="email" placeholder="E-mail *">
				</div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-12">
			   		<input type="password" class="form-control" id="password" placeholder="Lozinka *">
				</div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			   		<input type="password" class="form-control" id="password_cfm" placeholder="Ponovljena lozinka *">
				</div>
			  </div>

			 <div class="form-group">
			    <div class="col-sm-12">
			   		<input type="phone" class="form-control" id="tel" placeholder="Broj telefona">
				</div>
			  </div>
			
			  <div class="form-group"> 
			    <div class="col-sm-12">
			      <button id="register" class="btn btn-default">Registriraj se!</button>
			    </div>
			  </div>
			</form>
			<p id="error"></p>
	</div>
	
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
        </div>
			</div>
		</div>
	</div>
	
<script>
$("#register").click(function(){
	var email = $.trim($("#email").val());
	var username = $.trim($("#username").val());
	var password = $.trim($("#password").val());
	var password_cfm = $.trim($("#password_cfm").val());
	var tel = $.trim($("#tel").val());
	if(password!=password_cfm){
		alert("Lozinke se ne podudaraju.");
		return false;
	}
	if(email!="" || username!="" || password!=""){
		$.ajax({
				type: 'POST',
				url: 'register.php',
				data: "email=" + email + "&username=" + username + "&password=" + password + "&tel=" + tel,
				dataType: 'text'
			}).done(function(rezultat) {
				if(rezultat=="OK"){
					location.reload();
				}else{
					$("#error").html(rezultat);
					return false;
				}				
			});
	}else{
		alert("Polja označena s * moraju biti popunjena.");
	}
	
	return false;
});
	
</script>