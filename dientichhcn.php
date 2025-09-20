
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
            <h3 class="card-title bg-primary">Diện tích hình chữ nhật</h3>
            <form>
                <div class="row mb-3">
                <label for="chieu_dai" class="col-sm-2 col-form-label">Chiều dài:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="chieu_dai" name="chieu_dai">
                </div>
                </div>
                <div class="row mb-3">
                <label for="chieu_rong" class="col-sm-2 col-form-label">Chiều rộng:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="chieu_rong" name="chieu_rong">
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
            if(isset($_GET['chieu_dai']) && isset($_GET['chieu_rong'])){
                $cd = $_GET['chieu_dai'];
                $cr = $_GET['chieu_rong'];
                if(is_numeric($cd) && is_numeric($cr)){
                    $dt = $cd * $cr;
                    echo "<script>
                            document.getElementById('dientich').value = '$dt';
                            document.getElementById('chieu_dai').value = '';
                            document.getElementById('chieu_rong').value = '';
                        </script>";
                } else {
                    echo "<script>alert('Chiều dài và chiều rộng phải là số!');</script>";                  
                    echo "<script>document.getElementById('chieu_dai').value = '';</script>";
                    echo "<script>document.getElementById('chieu_rong').value = '';</script>";
                }
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


