<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div id="container">
    <?php include "banner.php";?>
    </div>
    
    <div class='presentations_header_rmt'>
        Reaching Us
    </div>
    <div class='presentations_info_rmt'>
    If you would you more information on the Purpose and Identity Processes Laboratory, 
			or have questions about any of our past or ongoing research projects, please contact 
			Dr. Anthony L. Burrow at: alb325@cornell.edu
    </div>
    
    <div id="container">
        <p>Have any questions or comments?</p>

        <form id="testForm" method="POST" action="email.php">
            <input type="hidden" name="hiddenField" value="Some information">
            <p>Name: <input name="name" type="text"></p>
            <p>E-mail: <input name="email" type="text"></p>
            <p>Message: <textarea name="message"></textarea></p>
            <input type="submit" value="Submit">
        </form>
        
    </div> <!-- end of container div -->
    
    <div id="footer">
                <?php include ('footer.php'); ?>
            </div>
    
    
    
    
</body>

</html>
