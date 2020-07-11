<div class="width-70">
	<form>
		<div class="form-group">
			<label for="nom">Nom</label>
			<input type="email"   :value="value_nom" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrer votre nom" @keyup="ckeck_value($event)">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="prenom">Prenom</label>
			<input type="email"   :value="value_prenom" class="form-control" id="prenom" aria-describedby="emailHelp" placeholder="Entrer votre prenom" @keyup="ckeck_value($event)">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="inscrption_mail">Email address</label>
			<input type="email"  :value="value_email" class="form-control" id="inscription_mail" aria-describedby="emailHelp" placeholder="Entrer votre email" @keyup="ckeck_value($event)">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="password">Mot de passe</label>
			<input type="motdepasse"   class="form-control" id="password1" :placeholder="password1" :value="value_password1"   @keyup="ckeck_value($event)">
		</div>
		<div class="form-group">
			<label for="repeatpassword">Repeter votre motde passe</label>
			<input type="motdepasse" class="form-control" id="password2" :placeholder="password2"  :value="value_password2"  @keyup="ckeck_value($event)">
		</div>	
	<h1 v-if="value_submit"><button type="submit" class="btn btn-primary" id="submit_button">Submit</button></h1>
	</form>
	</div>
