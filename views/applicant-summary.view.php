<?php
$app = new Applicant($applicant);
?>

<div>
    <p> Name: <?php echo $app->get_name()?></p>
    <p> Years of Experience: <?php echo $app->get_exp()?></p>
    <p> Current level: <?php echo $app->get_level()?></p>
    <p> Skills: <?php print_r($app->get_skills())?></p>
</div>  