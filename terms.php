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

<h1>Terms of Use</h1>
  
  <p>Welcome to AjaxPrints the leading Album Printing Firm. By accessing or using our website, you agree to comply with and be bound by the following terms and conditions of use:</p>
  
  <h2>1. General Information</h2>
  <p>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</p>
  
  <h2>2. Use of Content</h2>
  <p>The content of this website is owned by Album Printing Firm or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
  
  <h2>3. Unauthorized Use</h2>
  <p>Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense.</p>
  
  <h2>4. Website Availability</h2>
  <p>We strive to keep our website up and running smoothly. However, we take no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
  
  <h2>5. Third-Party Websites</h2>
  <p>This website may include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</p>
  
  <h2>6. Limitation of Liability</h2>
  <p>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</p>
  
  <h2>7. Indemnification</h2>
  <p>You agree to indemnify, defend, and hold harmless Album Printing Firm, its officers, directors, employees, agents, licensors, and suppliers from and against all losses, expenses, damages, and costs, including reasonable attorneys' fees, resulting from any violation of these terms and conditions or any activity related to your account (including negligent or wrongful conduct) by you or any other person accessing the site using your Internet account.</p>
  
  <h2>8. Governing Law</h2>
  <p>These terms and conditions are governed by and construed in accordance with the laws of Indian Government.</p>
  
  <h2>9. Changes to Terms of Use</h2>
  <p>We may revise these terms and conditions at any time without notice. By using this website, you are agreeing to be bound by the then-current version of these terms and conditions.</p>
  
  <h2>10. Contact Information</h2>
  <p>If you have any questions about these terms and conditions, please contact us at <a href="./indexhome.php #hello">here</a>.</p>
  
  <script>
 window.onload = function() {
  const cursor = document.querySelector('.cursor');
  const texts = document.querySelectorAll('h1, h2, p, ul, li');
  let index = 0;

  function animateCursor() {
    let text = texts[index];
    let rect = text.getBoundingClientRect();

    cursor.style.width = rect.width + 'px';
    cursor.style.transform = `translate(${rect.left}px, ${rect.top}px)`;

    index = (index + 1) % texts.length;

    setTimeout(animateCursor, 2000);
  }

  animateCursor();
}

</script>

</body>
</html>
