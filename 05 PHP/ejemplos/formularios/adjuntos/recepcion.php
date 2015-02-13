<pre>
  
<?php

  var_dump($_POST);
  var_dump($_FILES);

  move_uploaded_file($_FILES['foto']['tmp_name'], '/Users/bienvenidosaez/foto.jpg');

?>

</pre>