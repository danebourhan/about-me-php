<?php
 
  if (isset($_GET['page'])) {
      switch ($_GET['page']) {
    case 'about-me.html':
      include './includes/about-me.html';
      break;
      case 'my-dreams.html':
        include './includes/my-dreams.html';
        break;
        case 'my-passions.php':
          include './includes/my-passions.php';
          break;
         
      }  
  }
  else {
    include './includes/index.html'; 
  }