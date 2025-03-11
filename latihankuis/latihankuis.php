<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="latihankuis.css">
</head>
<body>
    <?php 
    if(isset($_POST['month'])){
        $month = $_POST['month'];

        if($month == 'December' || $month == 'January' || $month == 'February'){
            header("Location: winter.php");
        } else if($month == 'March' || $month == 'April' || $month == 'May'){
            header("Location: spring.php");
        } else if($month == 'June' || $month == 'July' || $month == 'August'){
            header("Location: summer.php");
        } else if($month == 'September' || $month == 'October' || $month == 'November'){
            header("Location: autumn.php");
        }
        exit();
    }
?>
    <div  class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem;">
    <form method="post">
        <h5 class = "title"><b>What's the <span class="span1">s</span><span class="span2">e</span><span class="span3">a</span><span class="span4">s</span><span class="span5">o</span><span class="span6">n</span> at that time?</b></h5>
            <table class="table" align="center">
                <tr>
                    <td><input type="radio" name="month" value="January"><label >January</label></td>
                    <td><input type="radio" name="month" value="February"><label >February</label></td>
                    <td><input type="radio" name="month" value="March"><label >March</label></td>
                    <td><input type="radio" name="month" value="April"><label >April</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="month" value="May"><label >May</label></td>
                    <td><input type="radio" name="month" value="June"><label >June</label></td>
                    <td><input type="radio" name="month" value="July"><label >July</label></td>
                    <td><input type="radio" name="month" value="August"><label >August</label></td>
                </tr>
                <tr>
                    <td><input type="radio" name="month" value="September"><label >September</label></td>
                    <td><input type="radio" name="month" value="October"><label >October</label></td>
                    <td><input type="radio" name="month" value="November"><label >November</label></td>
                    <td><input type="radio" name="month" value="December"><label >December</label></td>
                </tr>
            
            </table>
            <button type="submit" class="btn" >See Season</button>
        </div> 
    </div> 
    </form>
</body>
</html>