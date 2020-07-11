<div class="width-70">
	<form>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"  :value="value_email" @keyup="ckeck_value($event)">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password"  :value="value_password" @keyup="ckeck_value($event)">
		</div>
	<h1 v-if="value_submit"><button type="submit" class="btn btn-primary" id="submit_button">Submit</button></h1>
	</form>
	</div>