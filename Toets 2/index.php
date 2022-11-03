<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet.css" rel="stylesheet">
    <title>Document</title>
</head>
<body id="mybody">
    
    <div class="InputForm">
        
     <h2>Hallo, <?php 
     $namefield = ''; 
      echo $namefield;
      if(isset($_POST['namefield'])){
        if(empty($_POST['namefield'])){
        } else { 
           echo $name = $_POST['namefield'];
    
        }
    }
      ?> </h2>
    <form method="post">
    <label>Naam</label>
    <input type="text" name="namefield" id="name" placeholder="Name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" required><br>
    <label>Email</label>
    <input type="email" name="EmailField" id="email" required><br>
    <label> Geslacht </label><br>

    L<input type="checkbox" name="gender" value="L"  onclick="ChangeBColour1()" ondblclick="ChangeBColour6()">
    H<input type="checkbox" name="gender" value="H"  onclick="ChangeBColour2()" ondblclick="ChangeBColour6()">
    B<input type="checkbox" name="gender" value="B"  onclick="ChangeBColour3()" ondblclick="ChangeBColour6()">
   M<input type="checkbox" name="gender" value="M"  onclick="ChangeBColour4()" ondblclick="ChangeBColour6()">
    V<input type="checkbox" name="gender" value="V"  onclick="ChangeBColour5()" ondblclick="ChangeBColour6()"><br><br>
    
    Wilt u beoordelen?<input type="checkbox" id="myCheck" value="maincheck" onclick="myFunction()">
    <input type="submit" name="submit" class="submitbtn">
</div>
<div id="text"> 
    Beoordeling: <br>
<input type="checkbox" name="mening1" onclick="ChangeColour()" ondblclick="ChangeBColour6()">
<input type="checkbox" name="mening2" onclick="ChangeColour()" ondblclick="ChangeBColour6()">
<input type="checkbox" name="mening3" onclick="ChangeColour()" ondblclick="ChangeBColour6()">
<input type="checkbox" name="mening4" onclick="ChangeColour()" ondblclick="ChangeBColour6()">

<br>
<img src="Happier.png" class="images">
<img src="Happy.png" class="images">
<img src="Displeased.png" class="images">
<img src="Displeaseder.png" class="images">
</div>

</form>   

<script src="script.js"></script>
    
</body>
</html>