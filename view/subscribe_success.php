<?php
  if (isset($_SESSION['subscribed_user'])){
    $name = $_SESSION['subscribed_user'];
    unset($_SESSION['subscribed_user'])
    ?>
    <main class="centerContainer" id="successContainer">
      <p></p>
      <p>
        <b>Hello <?php echo $name ?> !</b>
        You successfully subscribed to Camagru <br>
        You will receive a confirmation mail to activate your account
      </p>
      <a href="index.php">Back to the main page</a>
      <p></p>
    </main>
    <?php
  }
?>