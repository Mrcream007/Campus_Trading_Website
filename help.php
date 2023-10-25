<?php include 'header.php'; ?>

<main  >
<div class="search" style="background-image: url('assets/images/SearchBox.jpeg');">
            <div class="text-header">
                <h1>CAMPUS <br> TRADE-IN</h1>
                <p>find whatever you need in Robert Gordon</p>
            </div>

            </div>

      <div class="container">
      
            
        
      <h1 style="text-align: center;">Contact Us</h1>
      <form>
        <div class="form-group" >
          <label class="input-group-text" for="">Name</label>
          <input class="form-control" type="text" name="name" placeholder="Full Name">
        </div>
        <div class="form-group" >
          <label class="input-group-text" for="">Email</label>
          <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group" >
          <label class="input-group-text" for="">Enter your Message</label>
          <textarea class="form-control" name="message" placeholder="Message"></textarea>
        </div>
 
        <button type="submit"><ion-icon name="send-outline"></ion-icon>Send</button>
      </form>
      <div id="response"></div>
      </div>
    </main>



<?php include 'footer.php'; ?>