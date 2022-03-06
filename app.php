<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF-8">
    <link rel="stylesheet" href="my_style.css" />
    <title>My Page</title>
</head>
<body>
  <?php include 'header.inc.php' ?>
  <div class="content">
    <h3>
      <?php echo $welcome; ?>
    </h3>
    <div class="content-img">
      <div>
        <?php echo '<img src="./image/mount.jpg" alt="Mount" />'; ?>
      </div>
      <div class="knowledge">
        <h4><?php echo 'My name is ', $surname, ' ', $name; ?></h4>
        <h4><?php echo 'I\'m ', $age, ' year'; ?></h4>
        <h4><?php echo 'I\'m from ', $country, ', city ', $city ?></h4>
        <br>
        <?php
          $str = 'Iter';
          for ($i = 0; $i < 3; $i++) {
            echo '<h4>', $str, ' ', $i, '</h4>';
          }
        ?>
        <br>
        <?php
          $first = 23;
          $sec = 2;
          echo '<h4>', $first * $sec, '</h4>';
          echo '<h4>', $first + $sec, '</h4>';
        ?>
        <br>
        <?php
          $text;
          if ($age > 18) {
            $text = 'You are already an adult';
          } else {
            $text = 'Unfortunately you are not yet 18';
          }
          echo '<h4>', $text, '</h4>';
        ?>
      </div>
    </div>
    <p>
      I'm a developer. I know such programming languages as Python, React, C++, Ruby, Node.
    </p>
  </div>
  <footer>
    <?php
      echo '<h4>Telephone: <a href="tel:', $number, '">', $number, '</a></h4>'; ?>
    <?php
     echo '<h4>Email: <a href="mailto:', $email, '">', $email, '</a></h4>';
    ?>
    <h4>
      <?php echo 'Author ', $author, '&copy;'; ?>
    </h4>
  </footer>
</body>
</html>