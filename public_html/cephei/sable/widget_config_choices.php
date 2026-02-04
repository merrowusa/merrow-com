<?


$key = $_GET['key'];


 if ($key=='machinechoice') {

  include('widget_config_machines.php');
  
  }
  
   elseif ($key=='columnmerrowpartschoice') {

  include('widget_config_column_parts.php');
  
  }
   elseif ($key=='centerpartschoice') {

  include('widget_config_center_parts.php');
  
  }
   elseif ($key=='contactinfo') {

  include('widget_config_contactinfo.php');
  
  }
 
   elseif ($key=='descriptioninfo') {

  include('widget_config_description.php');
  
  }
   elseif ($key=='columncustompartschoice') {

  include('widget_config_center_products.php');
  
  }
  
  ?>