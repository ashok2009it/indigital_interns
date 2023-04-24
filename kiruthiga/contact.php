<?php
    include 'includes/header.html';
?>
<section class="contact-section">

    <div class="contact-hero">
        <div class="contact-title">
            <h1>Contact Us</h1>
        </div>    

        <div class="contact-content">

            <form class="contact-form">
                <input type="text" class="form-control" 
                placeholder="Enter First Name">
                <input type="text" class="form-control"
                placeholder="Enter Last Name">
                <input type="text" class="form-control"
                placeholder="Enter Company Name">
                <input type="text" class="form-control" 
                placeholder="Enter Email">
                <textarea style="height:134px;width:100%;resize:none;"
                class="form-control" placeholder="Enter your query"></textarea>
                <input type="submit" class="btn-success">
            </form>

            <div class="hero-image-section">
                <img class="heroimg"
                src="https://img.freepik.com/free-vector/flat-design-illustration
                -customer-support_23-2148887720.jpg?w=740&t=st=1680063425~exp=1680064025~
                hmac=d3db1dc5bb587841fb5b777b12c9565274da314c81e08ddb5280579c45335e6f"
                alt="contactus">
            </div>    

        </div>  
    </div>  
    <script src="assets/js/contact.js"></script>
        
</section>
<?php
    include 'includes/footer.html';
?>