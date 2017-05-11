<?php
  include("check/display_error.php");
  if (isset($_SESSION['logged_user'])){
    ?>
    <h1><?php echo $_SESSION['logged_user'] ?></h1>
    <main class="centerContainer" id="mainForm">
      <section class="formSection">
        <h2>Change your password</h2>
        <form action="check/change_password.php" method="post">
          <h4 class="error">
          <?php
            if (isset($_GET['passwordChangeError'])){
              displayError($_GET['passwordChangeError']);
            }
          ?>
          </h4>
          <div class="inputContainer">
            <input type="password" name="oldpwd" placeHolder="Old password" required>
          </div>
          <div class="inputContainer">
            <input type="password" name="newpwd" placeHolder="New password" required>
          </div>
          <div class="inputContainer">
            <input type="password" name="confirmation"
            placeHolder="Confirm new password" required>
          </div>
          <div class="inputContainer">
            <input type="submit" name="submit" value="Change password">
          </div>
        </form>
      </section>
      <section class="formSection">
        <h2>Delete your account</h2>
        <h4 class="error">
        <?php
          if (isset($_GET['DeleteAccountError'])){
            displayError($_GET['DeleteAccountError']);
          }
        ?>
        </h4>
        <form  action="/camagru2/check/delete_account.php" method="post">
          <div class="inputContainer">
            <input type="password" name="password" placeHolder="Password" required>
          </div>
          <div class="inputContainer">
            <input type="submit" name="submit" value="Delete account">
          </div>
        </form>
      </section>
    </main>
    <?php
  }
?>
