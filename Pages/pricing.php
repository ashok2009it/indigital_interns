<!DOCTYPE html>
<html>
<head>
	<title>Pricing Page</title>
	<link rel="stylesheet" type="text/css" href="../Assests/style.css">
    <link rel="icon" href="Assests/Images/Favicon.png">
  </head>
<body>
	<header>
		<?php include '../Includes/header.php' ?>
	</header>
    <div class="tag">
        <h1>choose your right plan</h1>
        <p>Upgrade to premium & Get more responses!</p>
    </div>
    
	<main>
		<section class="basic">
            
			<h2>Basic Plan</h2>
			<p class="price">$9.99/mo</p>
			<ul>
				<li>10GB storage</li>
				<li>50GB bandwidth</li>
				<li>1 website</li>
				<li>Email support</li>
			</ul>
			<a href="#" class="btn">Select Plan</a>
		</section>
		<section>
			<h2>Pro Plan</h2>
			<p class="price">$19.99/mo</p>
			<ul>
				<li>50GB storage</li>
				<li>200GB bandwidth</li>
				<li>3 websites</li>
				<li>Email & phone support</li>
			</ul>
			<a href="#" class="btn">Select Plan</a>
			
		</section>
		<section>
			<h2>Premium Plan</h2>
			<p class="price">$49.99/mo</p>
			<ul>
				<li>100GB storage</li>
				<li>Unlimited bandwidth</li>
				<li>10 websites</li>
				<li>Email, phone & chat support</li>
			</ul>
			<a href="#" class="btn">Select Plan</a>
		</section>
	</main>
	<?php include '../Includes/footer.php' ?>
</body>
</html>