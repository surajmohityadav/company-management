
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
 /* Define the animation */
@keyframes run-cursor {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
  }
}

/* Apply the animation to the cursor element */
.cursor {
  position: fixed;
  top: 0;
  left: 0;
  height: 2px;
  background-color: red;
  animation: run-cursor 5s infinite;
  z-index: 9999; /* Ensure it's above other elements */
}


    body{
      font-family: "Francker Pro Light", sans-serif;
		background-image: url(bi.jpg);
		
		background-size: cover;
    background-position: center;
  background-attachment: fixed;
		width: 100%;
	    height: calc(100%);
	    
      max-width:97%;
	    top:0;
	    margin-left: 30px;
	    /*background: #007bff;*/
      color: white;

      
	}  
    </style>
  <meta charset="UTF-8">
  <title>Privacy Policy | Album Printing Firm</title>
</head>
<body>
<div class="cursor"></div>
 
<div id="privacy-policy">
  <h1>Privacy Policy</h1>
  
  <p>This privacy policy sets out how Album Printing Firm uses and protects any information that you give Album Printing Firm when you use this website.</p>

  <h2>What we collect</h2>
  <p>We may collect the following information:</p>
  <ul>
    <li>Name and job title</li>
    <li>Contact information including email address</li>
    <li>Demographic information such as postcode, preferences and interests</li>
    <li>Other information relevant to customer surveys and/or offers</li>
  </ul>

  <h2>What we do with the information we gather</h2>
  <p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>
  <ul>
    <li>Internal record keeping.</li>
    <li>We may use the information to improve our products and services.</li>
    <li>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
    <li>From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone or mail. We may use the information to customise the website according to your interests.</li>
  </ul>

  <h2>Security</h2>
  <p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>

  
  <h2>Controlling your personal information</h2>
  <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
  <ul>
    <li>If you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at privacy@albumprintingfirm.com.</li>
    <li>We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</li>
    <li>You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please write to Album Printing Firm, 123 Main St, Anytown USA.</li>
    <li>If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible, at the above address. We will promptly correct any information found to be incorrect.</li>
  </ul>

  <h2>Changes to this privacy policy</h2>
  <p>We may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from January 1, 2022.</p>

  </div>
  <script>
  window.onload = function() {
    const cursor = document.querySelector('.cursor');
    const texts = document.querySelectorAll('h1, h2, p, ul, li');

    function animateCursor() {
      let text = texts[Math.floor(Math.random() * texts.length)];
      let rect = text.getBoundingClientRect();

      cursor.style.width = rect.width + 'px';
      cursor.style.transform = `translate(${rect.left}px, ${rect.top}px)`;

      setTimeout(animateCursor, 2000);
    }

    animateCursor();
  }
</script>

</body>
</html>
