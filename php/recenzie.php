<?php

    date_default_timezone_set('Europe/Bucharest');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recenzie</title>
    <link rel="stylesheet" href="../css/recenzie.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div id="showcase1">
            <div class="row">
                <div class="col-12">
                    <h1>You can leave me a comment here</h1>
                    <?php
                        echo "<form method='POST' action='".setComments($conn)."'>
                            <input type='hidden' name='uid' value='Anonymous'>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message'></textarea><br>
                            <button type='submit' name='commentSubmit'>Posteaza</button>
                        </form>";
                        getComments($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Vlad</span> Petcu</h1>
      </div>
      <h2>Software Developer</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.linkedin.com/in/vlad-petcu/" target="_blank"><img src="../img/linkedin.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://github.com/VladTriesToCode" target="_blank"><img src="../img/github.png" /></a>
        </div>
      </div>
      <p>
        Icons on this website are from
        <a href="https://icons8.com/" target="_blank">icons8.com</a>
      </p>
      <p>Copyright @ 2020 Vlad Petcu. All rights reserved.</p>
    </div>
  </section>
</body>
</html>