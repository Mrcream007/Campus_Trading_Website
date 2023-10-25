<?php include 'header.php'; ?>
    
<main>

            <!--Container begins-->
        <div class="container">
            <h2 class="text-center mb-4"> Recovery Password</h2>
            <br>
            <p class="text-center mb-4">Enter your email address to receive instructions for resetting your Password.</p>
            <div id="alert"></div>
            <form id="recovery-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="email">Re-enter Email Address</label>
                    <input type="email" class="form-control" name="email2" id="email2" required>
                </div>
            
             <!-- to display error message-->
            <div id="message"></div>

                <button type="submit" class="btn btn-primary" onclick="recovery()" >Submit</button>
            </form>

        </div>
        <!--container end-->
        <script src="password_recovery.js"></script>

    </main>

<?php include 'footer.php'; ?>
