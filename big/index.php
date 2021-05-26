<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
<h2 class="pageID"><?=$PageID?></h2>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "intisarosman3@gmail.com";  //place your/your client's email address here
        $toName = "Maryam Osman"; //place your client's name here
        $website = "Yui's Doodles";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

?>
</section>

<aside>

</aside>

<?php include "includes/footer.php";?>