<?php
if(isset($_POST['name'])){
//$aaruush = 'aaruush';
header('Content-Description: File Transfer');
header('Content-Type: application/ms-word');
header("Content-Disposition: attachment; filename='aaruush.doc'");
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
//header('Location: index.html');

  $conn = mysqli_connect('localhost','aaruush2017','xyRhtabnWTvbE28w','aaruush2017') or die("Error: ".mysqli_connect_error());
 $name=$_POST['name'];
$regNumber=$_POST['regNumber'];
$primaryPhone = $_POST['primaryPhone'];
$email = $_POST['email'];
 $committee1= $_POST['committee1'];
$committee2= $_POST['committee2'];
$committee3= $_POST['committee3'];

$skill= $_POST['skill'];
$academics= $_POST['academics'];
$leader= $_POST['leader'];
$instance= $_POST['instance'];
$strengths= $_POST['strengths'];
$work= $_POST['work'];
$schedule= $_POST['schedule'];
$juniors= $_POST['juniors'];
$criricism= $_POST['criricism'];
$quality= $_POST['quality'];
$strike= $_POST['strike'];
$unexpected= $_POST['unexpected'];
$participants= $_POST['participants'];
$pertaining= $_POST['pertaining'];
$roundwise= $_POST['roundwise'];
$individual= $_POST['individual'];
$team_event= $_POST['team_event'];
 $incorporate= $_POST['incorporate'];
  $query = "INSERT INTO `registrations`(`name`, `reg_no`, `phone`, `email`, `committee1`,`committee2`,`committee3`, `que1`, `que2`, `que3`,
  `que4`, `que5`, `que6`, `que7`, `que8`, `que9`, `que10`, `que11`, `que12`, `que13`, `que14`, `que15`, `que16`,
  `que17`, `que18`) VALUES
  ('$name','$regNumber','$primaryPhone','$email','$committee1','$committee2','$committee3','$skill','$academics','$leader','$instance',
    '$strengths','$work','$schedule','$juniors','$criricism','$quality','$strike','$unexpected',
    '$participants','$pertaining','$roundwise','$individual','$team_event','$incorporate')";
    $result = mysqli_query($conn,$query);
    if($result){
      ?>
    CALL FOR AARUUSH 2018

      Name: <?php echo $name; ?>

      Registration Number: <?php echo $regNumber; ?>

      Phone Number: <?php echo $primaryPhone; ?>

      Email: <?php echo $email; ?>

      Domain/Committee Preferences:
        Preference 1: <?php echo $committee1; ?>
        Preference 2: <?php echo $committee2; ?>
        Preference 3: <?php echo $committee3; ?>


      What skills do you possess which will help you in your journey of Aaruush’18?

      <?php echo $skill; ?>



      Academics and Aaruush must go hand in hand, how do you plan on accomplishing this?

      <?php echo $academics ?>




      Being a leader and team player is essential. Give 2 instances where you have played the role of a leader as well as a team player.
      Given the choice, which would you want to be? What according to you are the 3 most important values you demonstrate as a leader?

      <?php echo $leader; ?>




      On an instance, let’s say half of your team believes that pineapples are a better option whereas the other half is convinced that watermelons are a better option. How would you solve this conflict?

<?php echo $instance; ?>




  What are your strengths and weaknesses that will help you and drag you down in the work assigned?

  <?php echo $strengths; ?>




What do you think will be the work assigned to you as a member of the team chosen?

<?php echo $work; ?>



What do you do if your schedule is interrupted and you are late for a deadline because of uncoordinated team work?
A.)Do you finish it alone?
B.) Do you wait for the entire team?
C.)Try and convince them to finish their work?
Select a situation and elaborate?

<?php echo $schedule; ?>



What do you think is the best way to handle juniors, being stern or lenient ?
Justify with positives and negatives.

<?php echo $juniors; ?>



What is Criticism? How do you differentiate between constructive and destructive criticism? Do you think being critical is the way to get work done?

<?php echo $criricism; ?>



What can be done to increase the quality of events in Aaruush?

<?php echo $quality; ?>



How can you strike a balance between the technical aspect and the fun element in an event?

<?php echo $strike; ?>



What are some of the unexpected problems that you might face during the conduction of an event? How will you tackle these problems? Provide solutions for the same. (Atleast 2)

<?php echo $unexpected; ?>




Assuming participants do not turn up for an Event. How do you plan on gathering crowd for the event. Mention atleast 3 ideas

<?php echo $participants;?>





Create an event pertaining to the domain you have applied to

<?php echo $pertaining; ?>
<?php echo $roundwise; ?>




Is the event an individual or a team event:

<?php echo $individual; ?>




If team event, what will be no. of participants per team and what do you think is the probable count for participation?

<?php echo $team_event; ?>




How does the Event incorporate Innovation and Creativity?

<?php echo $incorporate; ?>

<?php


    }

    else{

      echo "Try Again";
    }

}

 ?>
