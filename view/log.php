<div class="fm">
<form id="msform" action="?act=log" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login your account</h2>
    <input type="text" name="user" placeholder="UserName" />
    <input type="password" name="pass" placeholder="Password" />
    <div>
        <?php
            if(isset($_GET['err'])){
                echo '<p style="color:red;">user pass not exist!!</p>';
            }
            // $lo=$loged['username'];
            //     echo $lo;
        ?>
    </div>
    <input type="submit" name="log" class="submit action-button" value="Submit" />
    
  </fieldset>
  
</form>
</div>
