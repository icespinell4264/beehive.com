<?php
	include_once 'header.php';
?>
<main>

    <div class ="wrapper-main">
    <section class="home-section">
        <h2>Create your new password</h2>
        <p> Please enter your new password</p>
            <?php
        

           $selector = $_GET["selector"];
            $validator = $_GET["validator"];
            
            if(empty($selector) || empty($validator)){
                echo "could not validate your request";
            }else{
                if (ctype_xdigit($selector)!==false && ctype_xdigit($validator)!==false) {
                 ?>   
                    
                    <form action="includes/reset-password.inc.php" method="post">
                        <br>
                    <input type="hidden" name="selector" value= "<?php echo $selector;?>">
                    <input type="hidden" name="validator" value= "<?php echo $validator;?>">
                        <br>
                    <input type="password" name = "pwd" placeholder="Enter a new password">
                    <input type="password" name = "pwd-repeat" placeholder="Repeat password">
                    <button type = "submit" name = "reset-password-submit"class="registerbtn"><p>Reset password</p></button> 
                </form>
                <?php
                }
            }
          
        ?>           
        
    

    
      
</section>
</div>
</main>