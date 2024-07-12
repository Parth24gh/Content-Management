<?php include "templates/include/header.php" ?>

      <h1 style="width: 75%; margin-left: 12.5%; font-family: 'nyt-cheltenham,georgia','times new roman',times,serif;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <br>
      <div style="width: 75%; margin-left: 12.5%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <br>
      <div style="width: 75%; margin-left: 12.5%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>

