<!DOCTYPE html>
<html>
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/headportion.php'; ?>
    <title>Contact Faron Young</title>
</head>
<body>
<div class="page">
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
    </header>

    <nav id="mainnav">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/mainmenu.php'; ?>
    </nav>

    <main>
        <h2>Contact Faron Young</h2>
        <p>Learn what working with Faron Young is all about.</p>
        <p>I want to hear from you, Please fill out this form as a way for us to communicate further.  Let me know what interested you in Faron Young and how you would like to correspond.  Thank you for taking the time with our site and I look forward to following up with you.</p>
        
        <?php
            if(!empty($reply)){
                echo "<p class='notify'>$reply</p>";
            }
            unset($reply);
            ?>
        <p><strong>All fields are required.</strong></p> 
        <form method="post" action="index.php" id="contactform">
            <fieldset>
                <div><label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" size="15" value="<?php echo $firstname; ?>" required></div>
                <div><label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname"size="15" value="<?php echo $lastname; ?>"required></div>
                <div><label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</label>
                    <input type="email" name="email" id="email"size="60" value="<?php echo $email; ?>" required></div>
                <div><label for="subject">&nbsp;&nbsp;&nbsp;&nbsp;Subject:</label>
                    <input type="text" name="subject" id="subject"size="60" value="<?php echo $subject; ?>"required></div>
                <div><label for="message"  >&nbsp;&nbsp;&nbsp;Message:</label>
                    <textarea name="message" id="message" rows="10" cols="60" required><?php echo $message; ?></textarea></div>
                <p>Answer the following CAPTCHA question in the box below.</p>
                <label for="captcha">What color is a red apple?</label>
                    <input type="text" name="captcha" id="captcha" size="5"> 
                <label for="action">&nbsp;</label>
                    <input type="submit" name="action" id="action" value="Send"><br>
            </fieldset>
        </form>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
</div>
</body>
</html>