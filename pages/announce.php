
<form name="addAnnounce" action="#" method="POST">
<p>Announce Name :</p>
        <input class="form-control" type="text" placeholder="Name"  id="name"> 
<p>Work to do :</p>
        <input class="form-control" type="text" placeholder="Work Name" id="work_name"> 
<div>
      <p>Select a job category : </p>
        <select name="categ_job" class="form-control">
          <option value="1">Will be load from db</option>
          <option value="2">Will be load from db</option>
          <option value="2">...</option>
        </select>
</div> 

<p>City :</p>
        <input class="form-control" type="text" placeholder="City" id="city"> 
<p>Country :</p>
        <input class="form-control" type="text" placeholder="Country" id="country"> 

<p>Photo :</p>
	<input type="file" name="photo1" id="photoUsr"/>
    <input type="file" name="photo2" id="photoUsr"/>
    <input type="file" name="photo3" id="photoUsr"/>
<p>Description :</p>
	<textarea name="description" id="descriptionUsr"></textarea>

<input type="submit" value="Subscribe">