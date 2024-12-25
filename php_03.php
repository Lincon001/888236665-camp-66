<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <Style>
        h1 {
                display: flex;
                justify-content: center;
            }
        form{
            display: flex;
            justify-content: center

        }
        label {
            font-size: 4ch  ;
        }
        
    </Style>
    </head>
    
    <body>
        <h1>แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM</h1>
        <form method="post">
        <label for="number">กรอกเลขเพื่อสร้างตารางสูตรคูณ : </label>
        <input type="number" id="number" name="number" >
        <button type="submit">กด</button>
        </form>

        <?php
         $number = "" ;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $number = intval($_POST['number']);
        }

        ?>
        <div class="row">
                <div class="col h2 text-end">
                <?php
                if($number != ""){
                    for ($x = 1; $x <= 12; $x++){
                        echo $number." x ".$x." =";
                        echo "<br>";
                    }
                }
                    ?>
                </div>
                <div class = "col h2 text-start">
                    <?php
                if($number != ""){
                    for ($x = 1; $x <= 12; $x++){
                        echo $number*$x;
                        echo "<br>";
                    }
                }
                    ?>
                </div>
        </div>
    </body>
</html>