<?php    // REMOVE THIS FILE FROM YOUR SERVER ONCE COMPLETED
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "sable";


if(file_exists('form_folder/files/functions.php')) {
    require_once("form_folder/files/functions.php");
} else if(file_exists(''.$set_directory.'/files/functions.php')) {
    require_once("/$set_directory/files/functions.php");
} else if(file_exists('../'.$set_directory.'/files/functions.php')) {
    require_once("../$set_directory/files/functions.php");
} else if(file_exists('../../'.$set_directory.'/files/functions.php')) {
    require_once("../../$set_directory/files/functions.php");
} else if(file_exists('../../../'.$set_directory.'/files/functions.php')) {
    require_once("../../../$set_directory/files/functions.php");
} else if(file_exists('../../../../'.$set_directory.'/files/functions.php')) {
    require_once("../../../../$set_directory/files/functions.php");
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The functions file, functions.php, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}
// Should have done this differently but I didn't - dumb
if(file_exists('form_folder/help.php')) {
    $help_link = '<a href="form_folder/help.php">Help</a>';
} else if(file_exists(''.$set_directory.'/help.php')) {
    $help_link = '<a href="'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../../../'.$set_directory.'/help.php">Help</a>';

} else {
    $help_link = '<a href="http://green-beast.com/gbcf-v3/help.php" title="GBCF-v3 Demo Help Page">Help</a>';
}
if(file_exists('form_folder/validation.php')) {
    $validate_link = '<a href="form_folder/validation.php">validate</a>';
} else if(file_exists(''.$set_directory.'/validation.php')) {
    $validate_link = '<a href="'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../../'.$set_directory.'/validation.php">validate</a>';
} else {
    $validate_link = 'validate';
}
?>

<?php 
### Grab the default.css file for this test page
if(file_exists('form_folder/files/themes/blue.css')) {
      $found_styles = "form_folder/files/themes/blue.css";
} else if(file_exists(''.$set_directory.'/files/themes/blue.css')) {
      $found_styles = "$set_directory/files/themes/blue.css";
} else if(file_exists('../'.$set_directory.'/files/themes/blue.css')) {
      $found_styles = "../$set_directory/files/themes/blue.css";
} else if(file_exists('../../'.$set_directory.'/files/themes/blue.css')) {
      $found_styles = "../../$set_directory/files/themes/blue.css";
} else if(file_exists('../../../'.$set_directory.'/files/themes/blue.css')) {
      $found_styles = "../../../$set_directory/files/themes/blue.css";
} else if(file_exists('../../../../'.$set_directory.'/files/themes/blue.css')) {
      $found_styles = "../../../../$set_directory/files/themes/blue.css";

} else {
    $user_message = '<div class="results"><p class="error"><strong>Installation Error: The default style sheet file, default.css, does not exist or cannot be found!</strong></p></div>';
}
### Grab the javascript for this test page
if(file_exists('form_folder/files/focus.js')) {
      $found_script = "form_folder/files/focus.js";
} else if(file_exists(''.$set_directory.'/files/focus.js')) {
      $found_script = "$set_directory/files/focus.js";
} else if(file_exists('../'.$set_directory.'/files/focus.js')) {
      $found_script = "../$set_directory/files/focus.js";
} else if(file_exists('../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../$set_directory/files/focus.js";
} else if(file_exists('../../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../../$set_directory/files/focus.js";
} else if(file_exists('../../../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../../../$set_directory/files/focus.js";
} else {
    $user_message = '<div class="results"><p class="error"><strong>Installation Error: The IE focus JavaScript file, focus.js, does not exist or cannot be found!</strong></p></div>';
}
### EOS
?>


 <!-- *** IMPORTANT: This is what gets added to your page, with your path to files of course *** -->
   <link rel="stylesheet" href="http://css.imerrow.com/css_major/form_a.css" type="text/css" charset="utf-8">

   <!--[if IE]><script type="text/javascript" src="<?php echo $found_script; ?>"></script><![endif]-->


</head>
<body>



<div id="content">

  <div class="wholeform" id="whole">
  <div class="topline" id="liner">

    <hr />
    <p class="success"><?php
    echo '<strong class="help">Your IP address:</strong> <span>'; 
       echo $IPaddress;
    echo '</span> - <strong class="help">Your are writing from: </strong> <span>'; 
       if(@$two_letter_country_code == "") {
           echo 'where are you?';
       } else {
           echo $country_name;
       }
 if ($two_letter_country_code=="US"){
    print ", for phone support please call <strong> 800.431.6677 </strong>";
    }else{
    print "for phone support please call 011 508 295 8899";
    }
?></span><?php
if(file_exists('form_folder/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("form_folder/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists(''.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../../../$set_directory/files/error-log.txt");
    echo '</span>'; 
}
?> 
    </div>
  <hr />
  <?php 
if(file_exists('form_folder/form.php')) {
    include_once("form_folder/form.php"); 
} else if(file_exists(''.$set_directory.'/form.php')) {
    include_once("/$set_directory/form.php"); 
} else if(file_exists('../'.$set_directory.'/form.php')) {
    include_once("../$set_directory/form.php"); 
} else if(file_exists('../../'.$set_directory.'/form.php')) {
    include_once("../../$set_directory/form.php"); 
} else if(file_exists('../../../'.$set_directory.'/form.php')) {
    include_once("../../../$set_directory/form.php"); 
} else if(file_exists('../../../../'.$set_directory.'/form.php')) {
    include_once("../../../../$set_directory/form.php"); 
} else {
    echo ' <p class="test-error error"><strong>Include Error: The main form file, form.php, could not be inluded. Either it is missing or cannot be found!</strong></p>';
}
?> 
  </div>
<hr />
 <p><small>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="pop_ajaxcontent.php?height=360&width=460&subjectmatter=merrow" class="thickbox" title="your question: merrow?">Merrow Sewing Machine Co.</a> . Some rights reserved. [ <a href="#content">Top</a> ]</small></p>
</div>
</body>
</html>