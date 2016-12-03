<!-- Volunteer intro -->

<section id="volunteerTeam">
	<div id="volunteerTeam-overlay"></div>
		<h2 class="volunteerTeamH2"> Volunteer Opportunities</h2>
		<p class="volunteerTeamP"> Volunteer during your time in Denmark and engage in a meaningful service experience. Give back to the community while making Danish connections and it could just be one of the best decisions you make while in Aarhus.</p>

</section>

<!--Section seperator-->

<div id="sectionSeperator"></div>

<!-- Benefits section -->
<section>
	<img src="assets/resources for mockup/images/v11.png" class="communityImage"/>
	<div id="whyVolunteer">
		<h2> Why Volunteer at Spot festival?</h2>
		<p>Volunteering teaches you useful new skills things like communication skills, team work and decisions making which will help make you stand out from the crowd when it comes to getting a job. In exchange for becoming a Spot festival volunteer, you’ll receive a general admission 3-day pass, a t-shirt, amazing opportunities and a fun time. In addition, when you’re not working, you get to experience the festival!
		</p>
	</div>
</section>

<!-- Type of work section -->
<section>
	<div id="">
		<h2>Volunteer Jobs Descriptions</h2>
		<p>The information below is provided to give Volunteers an idea of what roles might suit them.</p>
	</div>
	<div id=""><img src=""></div>
</section>

<!-- Application form -->
<section id="joinSpot">
	<form action="includes/class_send_volunteer.php" method="POST">
		<table border="1">
			<tr>
				<td align="center">Application Form for volunteers</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td>First Name</td>
							<td><input type="text" name="firstName" size="15"></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lastName" size="15"></td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td><input type="tel" name="phone" size="16"></td>
						</tr>
						<tr>
							<td>Time Wish</td>
							<td>
								<input type="radio" name="timeWish" value="0" checked> No preference<br>
								<input type="radio" name="timeWish" value="1"> Before the event<br>
								<input type="radio" name="timeWish" value="2"> During the event
							</td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="email" name="email" size="30"></td>
						</tr>
						<tr>
							<td>Message (Max. 500 chars)</td>
							<td><textarea rows="10" cols="60" type="text" name="message" size="500"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td align="right"><input type="submit" name="submit" value="Send"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</section>
