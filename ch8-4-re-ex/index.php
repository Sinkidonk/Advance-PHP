<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>whatever</title>
		<style>
			body {
				font-family: segoe, sans serif;
				font-size:18px;
			}
			#main-form {
				width: 500px;
				background: rgb(235, 255, 255);
				border: 2px solid rgb(200, 200, 222);
				margin: 0 auto;
				padding: 40px;
			}
			
			input, textarea {
				padding:5px;
				border-radius:4px;
			}
		</style>
		</head>
		<body>
			<form id="main-form" action="ProcessForm.php" method="post">
				<h1>Interview Date</h1>
				Interviewer
				<br>
				<input type="text" name="interviewersName" placeholder="Name" required autofocus />
				<input type="text" name="interviewerPosition" placeholder="Position" required />
				<input type="text" name="InterviewDate" placeholder="Interview Date" required= />
				<br><br>
				Candidate
				<br>
				<input type="text" name="candidateName" placeholder="Name" required />
				<br><br>
				Communication Abilities
				<textarea name="communicationAbilities" rows="5" cols="66" placeholder="Evaluate the candidates verbal, non-verbal communitcation skills"></textarea>
				<br><br>
				Professional Appearance
				<textarea type="text" name="professionalAppearance" rows="5" cols="66"></textarea>
				<br><br>
				Computer Skills
				<textarea type="text" name="computerSkills" rows="5" cols="66"></textarea>
				<br><br>
				Business Knowledge
				<textarea type="text" name="businessKnowledge" rows="5" cols="66"></textarea>
				<br><br>
				Comments
				<textarea type="text" name="comments" rows="5" cols="66"></textarea>
				<br><br>
				<input type="submit" />
			</form>
		</body>