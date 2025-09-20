
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<?php
include 'header.php';
?>

<table style="width:100%" >
    <tr>
        <td style="width:30%">
            <?php
            include 'left.php';
            ?>
        </td>
        <td>

        </td>
        <td style="width:30%">
            <?php
            include 'right.php';
            ?>
        </td>
    </tr>
</table>

<?php
include 'footer.php';
?>

</body>
</html>
