<?php 

  // Connect to database
  include('config/db_connect.php');

  // write query for all pizzas
  // $sql = 'SELECT * FROM pizzas'; // select all columns in the pizzas database table

  // select columns of data from the database table, sorted by the "creat_at" column corresponding the created date
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY creat_at'; // select 3 columns in the pizzas database table

  // make query & get result
  $result = mysqli_query($connect, $sql);
  // print_r($result); // type Object
  // echo "<br>";

  // fetch the resulting  rows as array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // print_r($pizzas); // type Array

  // free result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text welcome_title">Pizzas!</h4>
    <div class="container">
      <div class="row">

        <?php foreach($pizzas as $pizza) : ?>

          <div class="col s6 md3">
            <div class="card z-depth-0 card_css">
              <div class="card-content center">
              <img class='pic_pizza' src="../PHP-MySQL-Tutorial-TheNetNinja/img/1200px-Pizza.svg.png" alt="pizza">
                <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                <ul>
                  <?php foreach(explode(',', $pizza['ingredients']) as $ing) : ?>
                    <li><?php echo htmlspecialchars($ing); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="card-action right-align">
                <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">more info</a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>  
        <!-- // remain 'endif' too -->

      </div>
    </div>

    <?php include('templates/footer.php'); ?>
</html>