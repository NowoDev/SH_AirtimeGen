<!-- This piece of work was done by NOWOCODES -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Side Hustle Airtime Generator</title>
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>

<body>

  <?php
  if (isset($_POST['generate'])) :
    function generateNumbers()
    {
      $min = 000000000000;
      $max = 999999999999;
  ?>
      <table class="table table-sm table-bordered border-success">
        <thead class="thead-dark">
          <tr class="table-dark">
            <th>S/N</th>
            <th>Card</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 1; $i <= 250; $i++) :
            $airtimeCode = mt_rand($min, $max);
          ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $airtimeCode; ?></td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
  <?php
    }
  endif;
  ?>

  <div class="container mt-5">
    <h1 class="text-center mb-5">Airtime Generator</h1>

    <form action="index.php" method="POST">
      <div class="d-grid gap-2">
        <button class="btn btn-success" type="submit" name="generate">Generate</button>
      </div>
    </form>

    <h4 class="mt-5">
      <?php
      if (array_key_exists('generate', $_POST)) {
        generateNumbers();
      }
      ?>
    </h4>
  </div>

  <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>