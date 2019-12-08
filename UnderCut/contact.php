<?php require_once('inc/header.php'); ?>
<section id="contact">

    <h1 style="text-align:center;">Contact Us</h1>
    <div class="container">
        <form  name="contactForm" action="/action_page.php" onsubmit="return validateForm()" method="post">

            <input type="text"  name="fname"  placeholder="Your Name">
            <hr>
            <input type="text" id="email" name="email" placeholder="Your Email">
            <hr>
            <textarea name="message" id="message" placeholder="Message Here.." style="height:200px;"></textarea>

            <input type="submit" value="Send">

        </form> 
    </div>

</section>
<?php require_once('inc/footer.php'); ?>