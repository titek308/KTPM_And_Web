
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

<table>
    <tr>
        <td style="width:30%">
            <?php
            include 'left.php';
            ?>
        </td>
        <td>
            <div class="card">
            <div class="card-body">
            <h3 class="card-title bg-primary">Diện tích và chu vi hình tròn</h3>
            <form>
                <div class="row mb-3">
                <label for="bankinh" class="col-sm-2 col-form-label">Bán kính:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bankinh" name="bankinh">
                </div>
                </div>
                <div class="row mb-3">
                <label for="chuvi" class="col-sm-2 col-form-label">Chu vi:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="chuvi" name="chuvi" disabled>
                </div>
                </div>            
                <div class="row mb-3">
                <label for="dientich" class="col-sm-2 col-form-label">Diện tích</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dientich" name="dientich" disabled>
                </div>
                </div>  
                <button type="submit" class="btn btn-primary">Tính</button>
            </form>
            </div>
        </div>

            <?php
            if(isset($_GET['bankinh'])){
                $r = $_GET['bankinh'];
                $cv = 2 * 3.14 * $r;
                $dt = 3.14 * $r * $r;
                echo "<script>
                    document.getElementById('chuvi').value = '$cv';
                    document.getElementById('dientich').value = '$dt';
                </script>";
            }
            ?>
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


