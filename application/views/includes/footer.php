<!-- Footer content section-->
<div class="row">
	<div class="footer large-12 columns">
		<p>Copyright 2015. NOMA SANA</p>
			<div class="space10"></div>
			<div class="social">
				<ul class="social-networks">
					<li class="icon-twitter"><a href="#">Twitter</a></li>
					<li class="icon-facebook"><a href="#">Facebook</a></li>
											</ul>
			</div>
	</div>
</div>

<div class="clear"></div>

<!-- Footer content section-->

<!-- Twitter Feed content section-->
<div class="row">
	<div class="large-12 columns">
		<div class="twitter-feed">		
			<ul id="twitter_update_list" class="rotate"></ul> 			 		
		</div>
	</div>
</div>
<!-- Twitter Feed content section-->

<div class="clear"></div>

 <!-- //SCRIPTS -->
	<script type="text/javascript" src="<?php echo base_url("/assets/js/jquery-1.7.2.min.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.easing.1.3.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.foundation.reveal.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/js/rotate.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.flexslider.js")?>"></script>
	<script>
	$(function(){
		$('.flexslider').flexslider({
		animation: "fade",
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	});
	</script>
	<script type="text/javascript">


			function signupuser(){
			    $.ajax({
			    type: 'post',
			    url:'<?php echo base_url("/index.php/users/register")?>',
			    data:$('#signup').serialize(),
			    success:
			      function(data){
			      	console.log(data);
			      	
			        if (data == 1){
			           $('#signupmessage').attr("class" ,"alert-box success radius");
			           $('#signupmessage').append("<strong>Success!</strong> Registration successful"); 
			           $('#signupmessage').append("<a href='#' class='close'>&times;</a>");
			                 
			        }
			        else{
			          
			           $('#signupmessage').attr("class" ,"alert-box warning radius");
			           $('#signupmessage').append("<strong>Warning!</strong> Registration failed try again"); 
			           $('#signupmessage').append("<a href='#' class='close'>&times;</a>");
				        }
			      },
			    fail:
			      function(data){
			        console.log(data);
			      }
			  });
			  
			  return false;
			  }

			  function loginuser(){
			    $.ajax({
			    type: 'post',
			    url:'<?php echo base_url("/index.php/users/login")?>',
			    data:$('#login').serialize(),
			    success:
			      function(data){
			      	console.log(data);
			      	
			        if (data == 1){
			          	
			          	window.location.assign("<?php echo base_url('index.php/users/dashboard') ?>");
			                 
			        }
			        else{
			          
			           $('#loginmessage').attr("class" ,"alert-box alert radius");
			           $('#loginmessage').append("<strong>Login Error</strong> Username or Password is incorrect"); 
			           $('#loginmessage').append("<a href='#' class='close'>&times;</a>");
				        }
			      },
			    fail:
			      function(data){
			        console.log(data);
			      }
			  });
			  
			  return false;
			  }
	</script>

<!-- Script for Twitterfeed-->
<script src="<?php echo base_url("assets/js/twitter-feed.js") ?>" type="text/javascript"></script>  
<script src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=envato&amp;include_rts=true&amp;count=4&amp;callback=twitterCallback2" type="text/javascript"></script> 
<!-- Twitter Feed end -->

</body>
</html>