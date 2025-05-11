<?php
$n1 = $n2 = $n3 = $n4 = '';
$cx1 = $cx2 = $cx3 = $cx4 = '';
$cn1 = $cn2 = $cn3 = $cn4 = '';


$n1 = $_POST['n1'] ?? '';
$n2 = $_POST['n2'] ?? '';
$n3 = $_POST['n3'] ?? '';
$n4 = $_POST['n4'] ?? '';

$n1 = $_POST['cx1'] ?? '';
$n2 = $_POST['cx2'] ?? '';
$n3 = $_POST['cx3'] ?? '';
$n4 = $_POST['cx4'] ?? '';

$n1 = $_POST['cn1'] ?? '';
$n2 = $_POST['cn1'] ?? '';
$n3 = $_POST['cn3'] ?? '';
$n4 = $_POST['cn4'] ?? '';

        $q = sqrt(2*Cn*n / Cx)
        $q1 = round(sqrt(2 * $cn1 * $n1 / $cx1));
        $q2 = round(sqrt(2 * $cn2 * $n2 / $cx2));
        $q3 = round(sqrt(2 * $cn3 * $n3 / $cx3));
        $q4 = round(sqrt(2 * $cn4 * $n4 / $cx4));
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
     <center>
        <h2>Введи исходные данные</h2>

        <form action="" method="POST">
            <label for="n1">N1:</label>
            <input type="number" id="n1" name="n1" required>

            <label for="n2">N2:</label>
            <input type="number" id="n2" name="n2" required>

            <label for="n3">N3:</label>
            <input type="number" id="n3" name="n3" required>

            <label for="n4">N4:</label>
            <input type="number" id="n4" name="n4" required>

            <br> <br>

            <label for="cx1">Cx1:</label>
            <input type="number" id="cx1" name="cx1" required>

            <label for="cx2">Cx2:</label>
            <input type="number" id="cx2" name="cx2" required>

            <label for="cx3">Cx3:</label>
            <input type="number" id="cx3" name="cx3" required>

            <label for="cx4">Cx4:</label>
            <input type="number" id="cx4" name="cx4" required>

            <br> <br>

            <label for="cn1">Cn1:</label>
            <input type="number" id="cn1" name="cn1" required>

            <label for="cn2">Cn2:</label>
            <input type="number" id="cn2" name="cn2" required>

            <label for="cn3">Cn3:</label>
            <input type="number" id="cn3" name="cn3" required>

            <label for="cn4">Cn4:</label>
            <input type="number" id="cn4" name="cn4" required>

            <br> <br>
            
            <input type="submit" value="Войти">
        </form>

         <h2>Результаты расчетов</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Вид продукции</th>
                            <th>Потребность (N)</th>
                            <th>Издержки хранения (Cx)</th>
                            <th>Стоимость заказа (Cn)</th>
                            <th>Оптимальный размер заказа (q)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Вид 1</td>
                            <td><?php echo $n1; ?></td>
                            <td><?php echo $cx1; ?></td>
                            <td><?php echo $cn1; ?></td>
                            <td><?php echo $q1; ?></td>
                        </tr>
                        <tr>
                            <td>Вид 2</td>
                            <td><?php echo $n2; ?></td>
                            <td><?php echo $cx2; ?></td>
                            <td><?php echo $cn2; ?></td>
                            <td><?php echo $q2; ?></td>
                        </tr>
                        <tr>
                            <td>Вид 3</td>
                            <td><?php echo $n3; ?></td>
                            <td><?php echo $cx3; ?></td>
                            <td><?php echo $cn3; ?></td>
                            <td><?php echo $q3; ?></td>
                        </tr>
                        <tr>
                            <td>Вид 4</td>
                            <td><?php echo $n4; ?></td>
                            <td><?php echo $cx4; ?></td>
                            <td><?php echo $cn4; ?></td>
                            <td><?php echo $q4; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>

    </center>
</body>
</html>