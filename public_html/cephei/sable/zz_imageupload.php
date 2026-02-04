<html>
<form enctype="multipart/form-data"
	action="<?print $_SERVER['PHP_SELF']?>" method ="post">
 
<tr><td><input type = "hidden" name="MAX_FILE_SIZE" value = "102400"></td></tr>
<tr><td>Select File: </td><td><input type = "file" name = "fupload"><t/d></tr>
<tr><td><input type = "submit" value = "Upload!"></td></tr>
</table>
<?php
//checking and uploading file-----------------------------------------------------------
if (isset ($_FILES['fupload'])){
 
$filename = $_FILES['fupload']['name'];
$randomdigit = rand(0000,9999);//create random digit
$newfilename = $randomdigit.$filename;//make new file name with random digit
 
//printing file information
print "<table>";
print  "<tr><td>Original Name:</td><td> ". $_FILES['fupload']['name']."</td></tr>";
print	"<tr><td>New Name:</td><td> ".$newfilename."</td></tr>";
print  "<tr><td>Size: </td><td>". $_FILES['fupload']['size']."</td></tr>";
print  "<tr><td>Temp Name: </td><td>". $_FILES['fupload']['tmp_name']."</td></tr>";
print  "<tr><td>Type: </td><td>". $_FILES['fupload']['type']. "</td></tr>";
print  "<tr><td>Error: </td><td>". $_FILES['fupload']['error']. "</td></tr>";
print "</table>";
 
 
//checking the type of file, if it is image it will display it
if ($_FILES['fupload']['type'] == "image/jpeg"){
	$source = $_FILES['fupload']['tmp_name'];
	$target = "upload/".$_SESSION['username']."/".$newfilename;
	move_uploaded_file($source, $target); // or die ("Couldnt copy");
 
 
	//displaying the image
	$imagesize = getImageSize($target);
	$imgstr = "<p><img width=\"$size[0]\" height=\"$size[1]\" ";
	$imgstr .= "src=\"$target\" alt=\"uploaded image\" ></p>";
 
	$imagepath = $yoursite.$target;
 
	print $imgstr;
	print "The link to your image is: ".$yoursite.$target;//link to the image
 
 
}
}
//-------------------------------------------------------------------------------------
?>
</html>

<form action="<?php echo $_server['php-self'];  ?>" method="post" enctype="multipart/form-data" id="something" class="uniForm">
        <input name="new_image" id="new_image" size="30" type="file" class="fileUpload" />
        <button name="submit" type="submit" class="submitButton">Upload/Resize Image</button>
</form>
<?php
        if(isset($_POST['submit'])){
          if (isset ($_FILES['new_image'])){
              $imagename = $_FILES['new_image']['name'];
              $source = $_FILES['new_image']['tmp_name'];
              $target = "images/".$imagename;
              move_uploaded_file($source, $target);
 
              $imagepath = $imagename;
              $save = "images/" . $imagepath; //This is the new file you saving
              $file = "images/" . $imagepath; //This is the original file
 
              list($width, $height) = getimagesize($file) ; 
 
              $modwidth = 150; 
 
              $diff = $width / $modwidth;
 
              $modheight = $height / $diff; 
              $tn = imagecreatetruecolor($modwidth, $modheight) ; 
              $image = imagecreatefromjpeg($file) ; 
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ; 
 
              $save = "images/sml_" . $imagepath; //This is the new file you saving
              $file = "images/" . $imagepath; //This is the original file
 
              list($width, $height) = getimagesize($file) ; 
 
              $modwidth = 80; 
 
              $diff = $width / $modwidth;
 
              $modheight = $height / $diff; 
              $tn = imagecreatetruecolor($modwidth, $modheight) ; 
              $image = imagecreatefromjpeg($file) ; 
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ; 
            echo "Large image: <img src='images/".$imagepath."'><br>"; 
            echo "Thumbnail: <img src='images/sml_".$imagepath."'>"; 
 
          }
        }
?>