<?php
/*
* This is the index page for the AberdeenPHP website
* 
* part of AberdeenPHP website
* see https://github.com/AberdeenPHP/site
*/

require_once("includes/common.php"); 

print_header("Aberdeen PHP", "The heart of Aberdeen's Web development comunity");

/*




col-lg-6 col-lg-offset-2 col-md-10 col-md-offset-1


*/



?>


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
	            <p>Aberdeen PHP User Group aims to provide a regular meeting for developers in Aberdeen and the surrounding areas to get together and discuss just about anything in and around the PHP Community.</p>
                <p>We meet on the first Wednesday of each month and run talks or open conversations around a variety of tech topics; with a focus on PHP development but extending to general development practises.</p>	
            </div>
            <div class="col-md-4">
	            <a 
	                class="twitter-timeline" 
	                href="https://twitter.com/AberdeenPhp"
	                data-tweet-limit="5"
	            >Tweets by AberdeenPhp</a> 
	            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>             
             
             
        </div>
    </div>

    <hr>


<?php
print_footer();

?>
