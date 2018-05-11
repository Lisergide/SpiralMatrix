<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <meta charset="UTF-8">
  <title>Вывод массива по спирали</title>
</head>

<body class="blue">
  <div class="section">
    <div class="row">
      <form action="index.php" method="get" class="col s6 offset-s3 card z-depth-3">
        <div class="card-content">
         <div class="card-title center">Введите размеры массива</div>
          <div class="input-field">
            <input name="N" type="number" required>
            <label for="N">N-количество столбцов</label>
          </div>
          <div class="input-field">
            <input name="M" type="number" required>
            <label for="M">M-количество строк</label>
          </div>
          <div class="card-action center">
            <button class="btn waves-effect blue" type="submit" name="submit_btn">Заполнить матрицу</button>
          </div>
          <?php
          include "output_matrix.php";
          ?>
        </div>
      </form>

    </div>
  </div>
</body>
<!-- Materialize JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</html>
