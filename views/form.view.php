<?php
	$skills = ['C++', 'C#', 'Python', 'JavaScript', 'PHP', 'Rust', 'HTML', 'CSS'];
	$level = ['entry', 'mid', 'senior'];
?>
<form action="" method="get">
	<div>
		<p>Job Title</p>
		<input type="text" name="jobTitle" id="jobTitle" required>
	</div>
	<div>
		<p>Position Level</p>
		<select name="positionLevel" id="positionLevel" required>
			<option value=""></option>
			<?php foreach($level as $lv):?>
				<option value="<?= $lv?>"><?= $lv?></option>
			<?php endforeach;?>
		</select>
	</div>
	<div>
		<p>Experience Needed (years)</p>
		<input type="number" name="experienceNeeded" id="experienceNeeded" required>
	</div>
	<div>
		<p>Skills Needed</p>
		<select name="skill1" id="skill1">
			<option value=""></option>
			<?php for($i=0; $i<count($skills); $i++):?>
				<option value="<?= $skills[$i]?>"><?= $skills[$i]?></option>
			<?php endfor;?>
		</select>
		<select name="skill2" id="skill2">
			<option value=""></option>
			<?php for($i=0; $i<count($skills); $i++):?>
				<option value="<?= $skills[$i]?>"><?= $skills[$i]?></option>
			<?php endfor;?>
		</select>
		<select name="skill3" id="skill3">
			<option value=""></option>
			<?php for($i=0; $i<count($skills); $i++):?>
				<option value="<?= $skills[$i]?>"><?= $skills[$i]?></option>
			<?php endfor;?>
		</select>
	</div>
	<input type="submit" value="Submit">
</form>