    <header id="masthead" role="banner" class="site-head site-header">
		<div class="jumbotron">
			<div class="container"><em></em>
				<a href="/"><img src="../assets/logo.png" class="img-fluid" alt="AppForce1"></a>
			</div>
		</div>
    <div class="container">
      <div id="newsletter_signup">
        <form action="https://appforce1.news/subscribe" method="POST" accept-charset="utf-8">
        	<label for="email">Stay informed on calls for speakers, proposals, announcements and other information from the organizer.<br/>AppForce1 - Jeroen Leenarts.</label>
          <br/><input type="email" name="email" id="email" class="email" placeholder="email address" required/>
          <div style="display:none;"><label for="hp">HP</label><input type="text" name="hp" id="hp"/></div>
        	<input type="hidden" name="list" value="4iTAxCmS1g6OqwfLEbZS1g"/>
        	<input type="hidden" name="subform" value="yes"/>
          <input type="submit" value="Subscribe" name="submit" id="submit"  class="button"/>
          </span>
        </form>
        <a id="sendy-link" href="https://sendy.co/?ref=gdfFj" target="_blank">Powered by Sendy.co</a>

      </div>
    </div>
  </header>
  <script>
      $(function(){
          $('a').each(function(){
              if ($(this).prop('href') == window.location.href) {
                  $(this).addClass('active'); $(this).parents('li').addClass('active');
              }
          });
      });
  </script>