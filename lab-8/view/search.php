
<!DOCTYPE html>
<html>
<head>
  <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
    <script type="text/javascript" src="../javascript/search.js"></script>
    
</head>
<body onload="search(document.getElementById('search').value)">


    
        <input type="text" id="search" name="search" placeholder="Search Jobs By Keyword" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {if(!empty($_POST["search"])){echo '$_POST["search"]';}}?>" onkeyup="search(this.value)" onblur="search(this.value)">
    
    </div>
    <div id="searchResults" style="width: 500px;height: 2px;border: none;">
    
    </div>


</body>
</html>