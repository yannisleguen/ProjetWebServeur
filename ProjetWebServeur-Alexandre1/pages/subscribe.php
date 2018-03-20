
<form name="login" action="../scripts/subscribeAction" method="POST">
<p>Username :</p>
        <input class="form-control" type="text" placeholder="Username"  name="usr"> 
<p>Name :</p>
        <input class="form-control" type="text" placeholder="Name" name="name"> 
<p>Username :</p>
        <input class="form-control" type="text" placeholder="Firstname" name="fstname"> 
<p>Birth Date :</p>
 		<input class="form-control" type="text" name="birthdate"> 
<p>Phone Number :</p>
        <input class="form-control" type="text" placeholder="Phone Number" name="phone"> 
<p>Mail Adress :</p>
        <input class="form-control" type="text" placeholder="mailing adress" name="mail"> 
<p>Password :</p>
        <input class="form-control" type="Password" placeholder="Password" name="password">  
<p>Sexe :</p>
	<select name="chosen_sexe" class="form-control">
          <option value="M">Male</option>
          <option value="F">Female</option>
          
    </select>

<p>Photo :</p>
	<input type="file" name="photo"/>
<p>Description :</p>
	<textarea name="description"></textarea>

<input type="submit" value="Subscribe">