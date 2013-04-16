<html>
<head>
	<title>Vista select de YosoyDb - select</title>
</head>
<body>

<p><?php
     // print_r($results);
      
    foreach ($results as $row) {
        echo $row->id."  ";
        echo $row->title."  ";
        echo $row->slug."  ";
        echo $row->text."<br/>";
        
}
?></p>

</body>
</html>




<?php

?>
