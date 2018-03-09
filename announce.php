
<form name="addAnnounce" action="addAnnounce.php" method="POST">
<p>Announce Name :</p>
        <input class="form-control" type="text" placeholder="Name"  name="name"> 

<div>
      <p>Select a job category : </p>
        <select name="categ_job" class="form-control">
          <?php 
            require("../scripts/connect.php");
            $db = db_connect();
            $query = "SELECT id_Category, name_Category FROM category";
            $statement = $db->prepare($query);
            $statement->execute();
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
              $id = $row["id_Category"];
              $categ = $row["name_Category"];
              echo "<option value=".$id.">".$categ."</option>";
            }
            ?>
          
        </select>
</div> 

<p>Adress: </p>
        <input class="form-control" type="text" placeholder="Adress" name="adress"> 

<p>City :</p>
        <input class="form-control" type="text" placeholder="City" name="city"> 
<p>Country :</p>
        <input class="form-control" type="text" placeholder="Country" id="country"> 

<p>Photo :</p>
	  <input type="file" name="photo1" id="photoUsr"/>
    <input type="file" name="photo2" id="photoUsr"/>
    <input type="file" name="photo3" id="photoUsr"/>
<p>Description :</p>
	<textarea name="description" id="descriptionUsr"></textarea>

<p>Chose your dates : </p>
      <input class="form-control formdate" type="date" value="Check-in" name="check-in">
      <input class="form-control formdate" type="date" value="Check-out" name="check-out">

<input type="submit" value="Subscribe">