<?php
  require_once "db.php";

  if(!empty($_GET["id"])) {
            $query  = "UPDATE users set status = 'active' WHERE id='" . $_GET["id"]. "'";
            $result = updateQuery($db,$query);
              if(!empty($result)) {
                $message = "Your account is activated.";
              } else {
                $message = "Problem in account activation.";
              }
            }

 ?>