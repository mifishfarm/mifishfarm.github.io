<!DOCTYPE html>
    <html lang="en-US">
	    <head> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> M.I. FISHFARM </title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      </head>
    <body>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST["name"])) {
      require "process.php";
      echo $result == ""
        ? "<div class='alert-success'>ORDER SUCCESS! WAIT FOR OUR REPLY. </div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>
    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
      <a href="index.html" class="brand">M.I Fishfarm</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="#main">HOME</a>
        <a href="#about">ABOUT US</a>
        <a href="#services">PRODUCTS</a>
        <a href="#contact">CONTACT</a>
      </div>
    </header>

    <section class="main" id="main">
      <div class="content">
        <h3>Hello, We are<br><span>M.I. Fishfarm</span></h3>
        <div class="animated-text">
          <h4>Shop</h4>
          <h4>Online </h4>
          <h4>Easy Access</h4>
        </div>
      </div>
	  
    </section>

    <section class="about" id="about">
      <div class="title reveal">
        <h2 class="section-title">ABOUT US</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="images/Eduardo.jpg" alt="">
          </div>
        </div>
        <div class="column col-right reveal">
          <h3 class="content-title">Good day! I'm Eduardo Flores</h3>
          <p class="paragraph-text" align="justify">M.I. Fishfarm started out as a family project. Our fish make us happy when our whole family comes together to look at them. As time goes on, more and more of my friends start to like what I do. There have been more questions about fish as time has gone on. Especially about fish I grow or breed. A lot of people are curious about the fish and wonder why I think it's so pretty. So I decided to keep breeding fish and start my own business. Using this method, I could get more fish and breed them while still having fun with my hobby and being happy at the same time. That's why I started making this hobby into a business, not only to make money and spend time with my favorite hobby, but also to spread it even more and make it a hobby for more people. As of right now, we are breeding a lot of betta fish, so we have a lot. Not just betta fishes that you see every day, but other types of betta fish as well. Besides that, I and my family, who help me run this business, also plan to breed other types of fish as well. We also can't wait to branch them out to different places in the future.</p>
        </div>
      </div>
    </section>
    <section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">PRODUCTS</h2>
        <p>DIFFERENT KINDS OF OUR BETTA FISHES.</p>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
            <img src="betta/crowntail.png" width="100%">
            <h3>Crowntail Mascot Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
            <img src="betta/dumbo.jpg" width="100%">
            <h3>Dumbo Salamander Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
            <img src="betta/halfsun.jpg" width="100%">
            <h3>Half Sun Mascot Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
          <img src="betta/avatar.jpg" width="100%">
            <h3>Avatar Koi Betta </h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
          <img src="betta/platinum.jpg" width="100%" height="210px">
            <h3>Platinum Crown Tail Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
          <img src="betta/giantkoi.jpg" width="100%">
            <h3>Giant Koi Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
          <img src="betta/fancy.jpg" width="100%" height="210px">
            <h3>Fancy Copper Plakat Betta</h3>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          </div>
          <div class="info">
          <img src="betta/superblack.jpg" width="100%" height="210px">
            <h3>Super Black Betta</h3>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="title reveal">
        <br><br><h2 class="section-title">CONTACT</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info">
              <h4>Address</h4>
              <span>#59 San Diego St. Commonwealth, Quezon City</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-phone"></i>
            </div>
            <div class="info">
              <h4>Phone</h4>
              <span>0945-496-5927</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info">
              <h4>Email Address</h4>
              <span>minfinityfishfarm@gmail.com</span>
            </div>
          </div>
          </div>
        </div>
        
    <!-- (B) ORDER FORM -->
    <div class="contact-form">
        <h4><br>ORDER FORM</h4>
          <form 
          id="contact" 
          method="post" 
          target="_self"
          autocomplete="on">
          <input 
          type="text" 
          class="text-box" 
          name="name" 
          id="name"
          placeholder="Full Name" required
          minlength="10"
          maxlength="50"
          />
          <br>
          <input 
          type="text" 
          class="text-box" 
          name="address" 
          id="address" 
          placeholder="Exact Address" required
          />
          <br>
          <input 
          type="email" 
          class="text-box" 
          name="email" 
          id="email" 
          placeholder="Email" required
          maxlength="30"
          />
          <br>
          <input 
          type="text" 
          class="text-box"
          name="number" 
          id="number" 
          placeholder="Contact Number"  
          pattern="[0-9]+" required 
          minlength="7"
          maxlength="11"
          /> 
          <br>
          
          <label> Crowntail Mascot Betta </label>
            <input 
            type="number"
            class="text-bow" 
            name="qty1" 
            id="qty1" 
            /> 
            <br>
            <label> Dumbo Salamander Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty2" 
            id="qty2"
            />
            <br>
            <label> Half Sun Mascot Betta  </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty3" 
            id="qty3" 
            />
            <br>
            <label> Avarat Koi Betta  </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty4" 
            id="qty4" 
            />
            <br>
            <label> Platinum Crown Tail Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty5" 
            id="qty5" 
            />
            <br>
            <label> Giant Koi Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty6" 
            id="qty6" 
            />
            <br>
            <label> Fancy Copper Plakat Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty7" 
            id="qty7" 
            />
            <br>
            <label> Super Black Betta </label>
            <input 
            type="number" 
            class="text-bow"
            name="qty8" 
            id="qty8" 
            />
            
          <textarea name="message" rows="5" placeholder="Type your request" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send"> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <span class="footer-title">M.I. Fishfarm</span>
      <p>Copyright @2022 </a>. All Rights Reserved.</p>
    </footer>

    <script src="script.js" charset="utf-8"></script>

  </body>
</html>
