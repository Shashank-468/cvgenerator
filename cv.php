<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CV</title>
  <link rel="stylesheet" href="./style.css">
</head>
<style>
input[type=button] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}
</style>
<?php
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$role=$_POST['role'];
		$mob=$_POST['mob'];
		$email=$_POST['email'];
		$website=$_POST['website'];
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];
		$zip=$_POST['zip'];
		$skill1=$_POST['skill1'];
		$skill2=$_POST['skill2'];
		$skill3=$_POST['skill3'];
		$skill4=$_POST['skill4'];
		$skill5=$_POST['skill5'];
		$bio=$_POST['bio'];
		$start1=$_POST['start1'];
		$end1=$_POST['end1'];
		$role1=$_POST['role1'];
		$company1=$_POST['company1'];
		$edustart1=$_POST['edustart1'];
		$eduend1=$_POST['eduend1'];
		$course1=$_POST['course1'];
		$institute1=$_POST['institute1'];
		$board1=$_POST['board1'];
		$edustart2=$_POST['edustart2'];
		$eduend2=$_POST['eduend2'];
		$course2=$_POST['course2'];
		$institute2=$_POST['institute2'];
		$board2=$_POST['board2'];
		$edustart3=$_POST['edustart3'];
		$eduend3=$_POST['eduend3'];
		$course3=$_POST['course3'];
		$institute3=$_POST['institute3'];
		$board3=$_POST['board3'];
		$social1=$_POST['social1'];
		$social2=$_POST['social2'];
		$social3=$_POST['social3'];
		$social4=$_POST['social4'];
?>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="final.jpeg" alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"><?php echo'<p class="bold">'.$firstname.'  '.$lastname.'</p>' ?></p>
           <p class="regular"><?php echo'<p class="regular">'.$role.'</p>' ?></p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               <?php echo'<p>'.$street.' '.$city.' '.$state.'</p><p>'.$country.' '.$zip.'</p>' ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php echo'<p>'.$mob.'</p>' ?>
             </div>
           </li>
          <li>
             <!--<div class="icon">
               <i class="fas fa-envelope"></i>
             </div>-->
             <div class="data">
               <?php echo'<p>'.$email.'</p>' ?>
             </div>
           </li>
           <li>
             <!--<div class="icon">
               <i class="fab fa-weebly"></i>
             </div>-->
             <div class="data">
               <?php echo'<p>'.$website.'</p>' ?>
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">skill's</p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
               <?php echo'<p>'.$skill1.'</p>' ?>
             </div>
             <!--<div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>-->
           </li>
           <li>
             <div class="skill_name">
               <?php echo'<p>'.$skill2.'</p>' ?>
             </div>
             <!--<div class="skill_progress">
               <span style="width: 70%;"></span>
             </div>
             <div class="skill_per">70%</div>-->
           </li>
           <li>
             <div class="skill_name">
               <?php echo'<p>'.$skill3.'</p>' ?>
             </div>
             <!--<div class="skill_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="skill_per">90%</div>-->
           </li>
           <li>
             <div class="skill_name">
               <?php echo'<p>'.$skill4.'</p>' ?>
             </div>
             <!--<div class="skill_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="skill_per">60%</div>-->
           </li>
           <li>
             <div class="skill_name">
               <?php echo'<p>'.$skill5.'</p>' ?>
             </div>
             <!--<div class="skill_progress">
               <span style="width: 88%;"></span>
             </div>
             <div class="skill_per">88%</div>-->
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <?php echo'<p>'.$social1.'</p>' ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <?php echo'<p>'.$social2.'</p>' ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-github"></i>
             </div>
             <div class="data">
               <p class="semi-bold">GitHub</p>
               <?php echo'<p>'.$social3.'</p>' ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <?php echo'<p>'.$social4.'</p>' ?>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">About us</p>
         </div>
               <?php echo'<p>'.$bio.'</p>' ?>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
        <ul>
            <li>
                <div class="date"><?php echo'<p>'.$start1.' - '.$end1.'</p>' ?></div> 
                <div class="info">
                                    <?php echo'<p class="semi-bold">'.$role1.'</p>' ?> 
                                 <?php echo'<p>'.$company1.'</p>' ?>
                </div>
            </li>
           
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date"><?php echo'<p>'.$edustart1.' - '.$eduend1.'</p>' ?></p></div> 
                <div class="info">
                     <?php echo'<p class="semi-bold">'.$course1.'</p>' ?>
                  <?php echo'<p>'.$institute1.' - '.$board1.'</p>' ?>
                </div>
            </li>
            <li>
                <div class="date"><?php echo'<p>'.$edustart2.' - '.$eduend2.'</p>' ?></p></div> 
                <div class="info">
                     <?php echo'<p class="semi-bold">'.$course2.'</p>' ?>
                  <?php echo'<p>'.$institute2.' - '.$board2.'</p>' ?>
                </div>
            </li>
		    <li>
                <div class="date"><?php echo'<p>'.$edustart3.' - '.$eduend3.'</p>' ?></p></div> 
                <div class="info">
                     <?php echo'<p class="semi-bold">'.$course3.'</p>' ?>
                  <?php echo'<p>'.$institute3.' - '.$board3.'</p>' ?>
                </div>
            </li>	
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Hobby</p>
         </div>
       <ul>
         <li><i class="fas fa-book"></i></li>
         <li><i class="fas fa-gamepad"></i></li>
         <li><i class="fas fa-music"></i></li>
         <li><i class="fab fa-pagelines"></i></li>
      </ul>
    </div>
  </div>
</div>
<!-- partial -->
<center><input type="button" value="Print" onClick="window.print()"></center>
<br>
</body>
</html>
