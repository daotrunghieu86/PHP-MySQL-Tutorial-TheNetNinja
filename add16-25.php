<?php 
    $email = $title = $ingredients = "";
    $errors = ['email'=>'', 'title'=>'', 'ingredients'=>''];

    if (isset($_POST['submits'])) {

        // htmlspecialchars — Convert special characters to HTML entities (pure HTML)

        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);
        //<script>window.location = "http://www.thenetninja.co.uk" </script>

        // Check email
        if (empty($_POST['email'])) {
            $errors['email'] = 'A email is required <br>';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Email must be a valid email address" . "<br>";
            } else {
                // echo htmlspecialchars($_POST['email'])  . "<br>";
            }
        }

        // Check title
        if (empty($_POST['title'])) {
            $errors['title'] = 'A title is required <br>';
        } else {
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = "Title must be letters and space only" . "<br>";
            } else {
                // echo htmlspecialchars($_POST['title']) . "<br>";
            }
        }

        // Check ingredients
        if (empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'At least one ingredient is required <br>';
        } else {
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = "Ingredient must be a comma separated list" . "<br>";
            } else {
                // echo htmlspecialchars($_POST['ingredients']) . "<br>";
            }
        }
    }  // end of the post check
   
    if (array_filter($errors)) {
        // echo 'errors in the form';
    } else {
        // echo 'form is valid';
        header('Location: index.php');
    }
    

?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'templates/header.php' ?>;

    <section class="container grey-text">
        <h4 class="center ">Add a Pizza</h4>
        <form action="add.php" method='pOST' class="white">
            <label>Your email:</label>
            <input type="text" name='email' value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'] ?></div>

            <label>Pizza title:</label>
            <input type="text" name='title' value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>

            <label>Ingredients (comma separated):</label>
            <input type="text" name='ingredients' value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>

            <div class="center">
                <input type="submit" name='submits' value='submit' class="btn brand ">
            </div>
        </form>
    </section>

    <?php include 'templates/footer.php' ?>;
    

</html>