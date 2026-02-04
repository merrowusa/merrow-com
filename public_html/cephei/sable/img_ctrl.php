<?php
//----------------------------------------------------------
//  Image Processor by Ennui Design.
//  www.EnnuiDesign.com | answers@ennuidesign.com
//----------------------------------------------------------
  class img_ctrl {
    var $max_width = 510;
    var $max_height = 400;
    var $alt;
    var $path = '/img/userPics/';

    function img_ctrl () {
      $this->buildDB();
    }

    public function display_admin (  $max_width=600, $max_height=400, $path='/img/userPics/' ) {
      $this->max_width = $max_width;
      $this->max_height = $max_height;
      $this->path = $path;
      $formdisp = <<<______EOD

      <!--// Begin Ennui Design's Image Processing HTML //-->
        <h2 class="img_upload_head">Upload a Photo</h2>
        <form id="img_upload"
          action="update/?action=img_upload"
          method="post"
          enctype="multipart/form-data">
          <div class="img_uploader">
            <label for="image">Image:</label>
            <input type="file"
              name="image"
              id="image" />
            <label for="alt">Description:</label>
            <input type="text"
              id="alt"
              name="alt" />
            <input type="hidden"
              name="max_w"
              value="{$this->max_width}" />
            <input type="hidden"
              name="max_h"
              value="{$this->max_height}" />
            <input type="hidden"
              name="path"
              value="{$this->path}" />
            <input type="submit"
              value="Upload!" />
          </div>
        </form>
      <!--// End Ennui Design's Image Processing HTML //-->
______EOD;
      return $formdisp;
    }

    public function display_public ( $numrows=1 ) {
      // Get the latest images from the database.
        $q = "SELECT * FROM imgMgr ORDER BY pid DESC LIMIT {$numrows}";
        $r = mysql_query($q) or die(mysql_error());

      // Use a while loop to format all selected photos.
        while ( $a = mysql_fetch_assoc($r) ) {
          $img .= <<<__________EOD

          <div class="img_disp">
            <img src="{$a['url']}"
              alt="{$a['alt']}" />
          </div>
__________EOD;
        }

        $img_disp = <<<________EOD

      <!--// Begin Ennui Design's Image Disply HTML //-->
        <h2 class="img_disp_head">User-Uploaded Images</h2>
        <div class="img_disp_cont">{$img}
        </div>
      <!--// End Ennui Design's Image Display HTML //-->
________EOD;
        return $img_disp;
    }

    public function upload ( $upload, $post=NULL, $store=false ) {
      $this->alt = $post['alt'];
      if ( isset($post['max_w']) )
        $this->max_width = $post['max_w'];
      if ( isset($post['max_h']) )
        $this->max_height = $post['max_h'];
      if ( isset($post['path']) )
        $this->path = $post['path'];
      $name = $upload['image']['name'];
      $tmp = $upload['image']['tmp_name'];
      $size = $upload['image']['size'];
      $type = $upload['image']['type'];
      $err = $upload['image']['error'];

      if ( $type == 'image/jpeg'
       || $type == 'image/pjpeg'
       || $type == 'image/gif'
       || $type == 'image/png'
       && $size <= 1024*1024*2 ) {
         if ( $err > 0 ) {
           die( "Error: {$err}" );
         } else {
           // To ensure a unique filename, we'll use the
           // current UNIX timestamp plus a random five-
           // digit number.
             $img_name = time() . '_' . rand(10000,99999);

           // We need to determine the path and filename
           // for this image to make sure we can find it
           // again after processing.
           // NOTE: The 'process' function always outputs
           // a JPG file, so we'll automatically append
           // that file extension.
             $loc = $this->path . $img_name . '.jpg';

           // Create the directory 'userPics' if it doesn't
           // already exist.
             if ( !is_dir('http://merrow.com'.$this->path) && strlen($this->path) > 0 )
               mkdir('http://merrow.com'.$this->path) or die("Could not create the directory '{$this->path}'.");

           // Put the temporary image somewhere easily accessible
             move_uploaded_file( $tmp, '../'.$loc ) or die("Could not move the image.");

           // Now we process the file!
             if ( $this->process( '../'.$loc, $type ) === true ) {
               // If the image is successfully processed,
               // return the location for handling.
                 if ( $store === true ) {
                   $this->store($loc);
                   return true;
                 }
                 else return $loc;
              } else return false;
       }
      } else return false;
    }

    private function process ( $loc, $type ) {
      // For a lighter server load, we run a switch to figure out
      // what image file type was uploaded.
        switch ( $type ) {
          case 'image/gif':
            $src_img = imagecreatefromgif($loc);
            break;
          case 'image/jpeg':
            $src_img = imagecreatefromjpeg($loc);
            break;
          case 'image/pjpeg':
            $src_img = imagecreatefromjpeg($loc);
            break;
          case 'image/png':
            $src_img = imagecreatefrompng($loc);
            break;
          default:
            $src_img = imagecreatefromstring(file_get_contents($loc));
            break;
        }

      // We need to figure out the dimensions of our original image.
        $src_info = getimagesize($loc);
        $src_w = $src_info[0];
        $src_h = $src_info[1];

      // Now we need to resize the image to fit within our $max_width
      // and $max_height parameters while keeping the image proportional.
        if ( $src_w > $this->max_width
          || $src_h > $this->max_height ) {
          if ( $src_h >= $src_w ) {
            $aspect = $this->max_height / $src_h;
          } else {
            $aspect = $this->max_width / $src_w;
          }
          $new_w = intval($src_w * $aspect);
          $new_h = intval($src_h * $aspect);
        } else {
          $new_w = $src_w;
          $new_h = $src_h;
        }

      // Now we've figured out the proper dimensions for our image. All
      // that's left to do is resample it!
        $new_img = imagecreatetruecolor($new_w,$new_h);
        imagecopyresampled($new_img, $src_img, 0, 0, 0, 0, $new_w, $new_h, $src_w, $src_h);
        imagejpeg($new_img, $loc);

        return true;
    }
    
    private function store($loc) {
      $q = "INSERT INTO imgMgr VALUES ("
        . "'',"
        . "'{$loc}',"
        . "'{$this->alt}'"
        . ")";
      if ( mysql_query($q) )
        return true;
      else
        return false;
    }
    
    private function buildDB() {
      // Send a query to the DB that checks for the existence of the
      // table, then creates it if it doesn't already exist.
      $sql  = "CREATE TABLE IF NOT EXISTS imgMgr\n";
      $sql .= "(pid int(9) PRIMARY KEY auto_increment\n"; // Unique ID for the image.
      $sql .= ",url varchar(150)\n"; // Location of image on server.
      $sql .= ",alt varchar(150)\n"; // Alt attribute of the image (for text-only browsers).
      $sql .= ")";

      // If our query fails, stop the execution and display an error message.
      if ( !mysql_query($sql) )
        die(mysql_error());
    }
  }
?>