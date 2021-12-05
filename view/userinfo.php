</div><div class="fm">
<form id="msform" action="?act=userinfo" method="post">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Info User</h2>
    <lable>Name:<input type="text" name="name"  value="<?=$userinfo['name'];?>" /></label>
    Username:<input type="text" name="user"  value="<?=$userinfo['username'];?>" />
    Email<input type="text" name="email"  value="<?=$userinfo['email'];?>" />
    Password<input type="password" name="pass"  value="<?=$userinfo['password'];?>"/>
    Phone<input type="text" name="phone"  value="<?=$userinfo['phone'];?>"/>
    Address<input name="address"  value="<?=$userinfo['address'];?>">
    <input type="submit" name="update" class="submit action-button" value="update" />
    <input type="hidden" name="id" value="<?=$userinfo['id'];?>">
  </fieldset>
</form>
</div>