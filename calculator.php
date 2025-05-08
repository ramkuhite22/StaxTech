<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator & Currency Converter</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <h2>My Utility Website</h2>

  <!-- Calculator Section -->
  <section id="calculator">
    <h2>Calculator</h2>
    <form method="post" action="">
      <input type="number" name="num1" placeholder="Enter first number" required>
      <select name="operation">
        <option value="+">+</option>
        <option value="-">−</option>
        <option value="*">×</option>
        <option value="/">÷</option>
        <option value="%">%</option>
      </select>
      <input type="number" name="num2" placeholder="Enter second number" required>
      <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
      if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
          case '+': $result = $num1 + $num2; break;
          case '-': $result = $num1 - $num2; break;
          case '*': $result = $num1 * $num2; break;
          case '/': $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero"; break;
          case '%': $result = $num2 != 0 ? $num1 % $num2 : "Cannot divide by zero"; break;
          default: $result = "Invalid operation";
        }
        echo "<p class='result'>Result: $result</p>";
      }
    ?>
  </section>

  <!-- Currency Converter Section -->
  <section id="currency-converter">
    <h2>Currency Converter</h2>
    <form method="post" action="">
      <input type="number" name="amount" step="0.01" placeholder="Amount in INR" required>

      <label>Select Currency:</label>
      <div class="currency-option">
        <input type="radio" name="currency" value="USD" id="usd" checked>
        <label for="usd">
          <img class="flag" src="us.png" alt="USD Flag"> USD ($)
        </label>
      </div>
      <div class="currency-option">
        <input type="radio" name="currency" value="EUR" id="eur">
        <label for="eur">
          <img class="flag" src="europe.png" alt="EUR Flag"> EUR (€)
        </label>
      </div>
      <div class="currency-option">
        <input type="radio" name="currency" value="JPY" id="jpy">
        <label for="jpy">
          <img class="flag" src="japan.png" alt="JPY Flag"> JPY (¥)
        </label>
      </div>

      <button type="submit" name="convert">Convert</button>
    </form>

    <?php
      if (isset($_POST['convert'])) {
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        switch ($currency) {
          case 'USD': $converted = $amount * 0.012; $symbol = '$'; break;
          case 'EUR': $converted = $amount * 0.011; $symbol = '€'; break;
          case 'JPY': $converted = $amount * 1.70; $symbol = '¥'; break;
          default: $converted = 0; $symbol = '';
        }
        echo "<p class='result'>Converted Amount: $symbol$converted $currency</p>";
      }
    ?>
  </section>
  <!-- Shape Calculation -->
  <section id="Shape-Calculation">
    <h2>Calculation of Shapes</h2>
    <form method="post">
      <label>Select Shape:</label>
      <div class="shape-select">
        <input type="radio" name="shape" value="circle" id="circle" checked>
        <label for="circle"><img class="flag" src="circle.png"> Circle</label>
        <input type="radio" name="shape" value="square" id="square">
        <label for="square"><img class="flag" src="square.png"> Square</label>
        <input type="radio" name="shape" value="triangle" id="triangle">
        <label for="triangle"><img class="flag" src="triangle.png"> Triangle</label>
      </div>
      <input type="number" step="0.01" name="value1" placeholder="Radius / Side / Base" required>
      <input type="number" step="0.01" name="value2" placeholder="Height (for triangle)" />
      <button type="submit" name="shape_calc">Calculate</button>
    </form>

    <?php
    if (isset($_POST['shape_calc'])) {
      $shape = $_POST['shape'];
      $v1 = $_POST['value1'];
      $v2 = $_POST['value2'] ?? 0;
      echo "<div class='result'>";
      switch ($shape) {
        case 'circle':
          $area = 3.1416 * $v1 * $v1;
          $circ = 2 * 3.1416 * $v1;
          echo "Circle<br>Radius = $v1<br>";
          echo "Area = πr² = $area<br>";
          echo "Circumference = 2πr = $circ";
          break;

        case 'square':
          $area = $v1 * $v1;
          $peri = 4 * $v1;
          echo "Square<br>Side = $v1<br>";
          echo "Area = side² = $area<br>";
          echo "Perimeter = 4 × side = $peri";
          break;

        case 'triangle':
          $area = 0.5 * $v1 * $v2;
          $perimeter = $v1 + $v2 + sqrt($v1**2 + $v2**2); // Assume right triangle
          echo "Triangle<br>Base = $v1, Height = $v2<br>";
          echo "Area = ½ × base × height = $area<br>";
          echo "Approx. Perimeter (assuming right triangle) = $perimeter";
          break;

        default:
          echo "Unknown shape.";
      }
      echo "</div>";
    }
    ?>
  </section>
</body>
</html>
