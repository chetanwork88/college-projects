
<html>
  <body>
    <script type="text/javascript">  
      if (confirm("Are You Sure?")) {
        "<?php
            session_start();
            session_destroy();
            header('location:index.php');
        ?>"
       } 
       else
       {
         echo " hiii";
       }       
    </script>
  </body>
</html>

