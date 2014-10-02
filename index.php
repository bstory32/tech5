<?php include ('layout/header.php') ?>



<div class="main-message" id="main-message-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"> 
        <div class="message-details">
          <img src="public/images/tech5_designs_dark.png" alt="">
          <span>Established in Chicago</span>
          <h1>We build websites<br>worth sharing</h1>
          <hr>
          <a href="#portfolio-section" class="btn btn-primary">View Our Latest Work</a>
        </div>
      </div>
    </div>
  </div>
</div>  

<div class="portfolio-section" id="portfolio-section">
 <div class="container">
   <div class="row">
     <div class="col-sm-12">
      <h2>We're more than developers <br> we're partners</h2>
      <hr>
    </div>
  </div>
  <div class="projects">
    <div class="row">
      <div class="col-sm-6">
        <h3>Muddrunner</h3>
        <a href="#"><img src="public/images/muddrunner-screen-shot.jpg"></a>
      </div>
      <div class="col-sm-6">
        <h3>Commercial Connected</h3>
        <a href="#"><img src="public/images/commercialconnected-screen-shot.jpg"></a>
      </div>
            <!-- <div class="col-sm-3">
              <h3>Project</h3>
              <img src="http://placehold.it/200x150">
            </div>
            <div class="col-sm-3">
              <h3>Project</h3>
              <img class="hexagon" src="http://placehold.it/200x150">
            </div> -->
          </div>
        </div>
        <div class="team">
          <div class="row">
            <div class="col-sm-12">
              <a href="#team-section" class="btn btn-primary">Team Behind the Designs</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-section" id="services-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Content focused <br> results driven</h2>
            <hr>
          </div>
          <div class="row services-details">
            <div class="col-sm-4 marketing">
              <h3>Marketing Sites</h3>
              <i class="fa fa-desktop"></i>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis laborum ex perspiciatis ab. Voluptatum fugiat iure accusamus dolorem laborum doloribus corrupti dicta molestiae quasi unde aliquam vitae, adipisci nam nisi.</p> -->
            </div>
            <div class="col-sm-4 ecommerce">
              <h3>e-Commerce Sites</h3> 
              <i class="fa fa-shopping-cart"></i>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis laborum ex perspiciatis ab. Voluptatum fugiat iure accusamus dolorem laborum doloribus corrupti dicta molestiae quasi unde aliquam vitae, adipisci nam nisi.</p> -->
            </div>
            <div class="col-sm-4 custom">
              <h3>Custom Solutions</h3>
              <i class="fa fa-line-chart"></i>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis laborum ex perspiciatis ab. Voluptatum fugiat iure accusamus dolorem laborum doloribus corrupti dicta molestiae quasi unde aliquam vitae, adipisci nam nisi.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-section" id="team-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Our Leadership Team</h2>
            <hr>
          </div>
        </div>
        <div class="team-members">
          <div class="row">
            <div class="col-sm-6">
              <h3>Brian Story</h3>
              <img src="public/images/brian-story-profile.jpg">
            </div>
            <div class="col-sm-6">
              <h3>Neil Sammons</h3>
              <img src="public/images/neil-sammons-profile.jpg">
            </div>
            <!-- <div class="col-sm-3">
              <h3>Rafal Something</h3>
              <img src="http://placehold.it/200x150">
            </div>
            <div class="col-sm-3">
              <h3>Our Animals</h3>
              <img src="http://placehold.it/200x150">
            </div> -->
          </div>
        </div>
        <div class="contact">
          <div class="row">
            <div class="col-sm-12">
              <!-- <p>Any Questions?</p> -->
              <a href="#contact-section" class="btn btn-primary">Tell Us About Your Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 contact-message">
            <h2>Let's Get the conversation started!</h2>
            <hr>
          </div>
        </div>
        <div class="col-sm-12 contact-details">
          <form role="form" action="sendmail.php" method="POST">
            <div class="form-group">
              <label for="contactname">Contact Name*</label>
              <input type="text" name="formName" class="form-control" id="contactname" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" name="formCompany" class="form-control" id="contactemail" placeholder="Company">
            </div>
            <div class="form-group">
              <label for="contactphonenumber">Phone Number*</label>
              <input type="tel" name="formTel" class="form-control" id="contactphonenumber" placeholder="Number" required>
            </div>
            <div class="form-group">
              <label for="contactemail">Email*</label>
              <input type="email" name="formEmail" class="form-control" id="contactphonenumber" placeholder="Email" required>
            </div>
            <label for="contact-budget">Budget</label>
            <select class="form-control">
              <option value="1">$1000-$5000</option>
              <option value="2">$5000-$10,000</option>
              <option value="3">$10,000-$20,000</option>
              <option value="4">$20,000 +</option>
              <option value="5">Requires Estimation</option>
            </select>
            <div class="form-group">
              <label for="contactmessage">Message</label>
              <textarea class="form-control" name="formMessage" rows="3" id="contactmessage" placeholder="Message"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit"></input>
          </form>
        </div>
      </div>
    </div>
    

    <?php include ('layout/footer.php') ?>
    









    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
  </body>
  </html>
