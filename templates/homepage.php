<?php include "templates/include/header.php" ?>

      <ul id="headlines">

<?php foreach ( $results['articles'] as $article ) { ?>

        <li>
          <h2>
            <div style="display:flex; justify-content:left;">
          <div class="pubDate"><?php echo date('j F', $article->publicationDate)?></div><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
            </div>
          </h2>
          <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>
        

<?php } ?>


      </ul>
      <hr>

      <p><a href="./?action=archive">Article Archive</a></p>

<?php include "templates/include/footer.php" ?>