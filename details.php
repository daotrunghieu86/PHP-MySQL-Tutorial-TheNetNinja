<?php 

  include('config/db_connect.php');

  // Delete a pizza
  if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($connect, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if (mysqli_query($connect, $sql)) {
      // success
      header('Location: index.php');
    } else {
      // failure
      echo 'Query error: ' . mysqli_error($connect);
    }

  }

  // check GET request id parameter
  if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($connect, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    // The WHERE clause is used to filter records, used to extract only those records that fulfill a specified condition.

    // get the query result
    $result = mysqli_query($connect, $sql);

    // fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($connect);

  }

?>
<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>

  <div class="container center">
    <?php if ($pizza) : ?>

      <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
      <p>Created by <?php echo htmlspecialchars($pizza['email']); ?></p>
      <p><?php echo date($pizza['creat_at']); ?></p>
      <h5>Ingredients</h5>
      <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

      <!-- DELETE FORM -->
      <form action="details.php" method='POST'>
        <input type="hidden" name='id_to_delete' value="<?php echo $pizza['id']; ?>">
        <input type="submit" name='delete' value='Delete' class='btn brand z-depth-0'>
      </form>

    <?php else : ?>
      <h5>No such pizza exists!</h5>
    <?php endif; ?>
  </div>

  <?php include('templates/footer.php'); ?>
</html>