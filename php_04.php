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
        <h1>แสดงข้อมูลตัวเลข จาก จุดStart ถึง จุดEnd ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM</h1>
        <form method="post">
            <label for="number">กรอกเลขเริ่มต้น : </label>
            <input type="number" id="number" name="number" >
            <label for="number2">กรอกเลขสุดท้าย : </label>
            <input type="number2" id="number2" name="number2" >
            <button type="submit">กด</button>
        </form>

        <?php
         $number = "" ;
         $number2 = "" ;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = intval($_POST['number']);
        $number2 = intval($_POST['number2']);
        }
        ?>
        <div class="row">
                <div class="col h2 text-end">
                <?php
                    if($number != "" && $number2 != ""){
                        for ($x = $number; $x <= $number2; $x++){
                            echo "เลข ".$x;
                            echo "<br>";
                        }
                    }
                    ?>
                </div>
                <div class = "col h2 text-start">
                    <?php
                        if($number != "" && $number2 != ""){
                            for ($x = $number; $x <= $number2; $x++){
                                if($x % 2 != 0){
                                echo "เป็นเลขคี่";
                            }else{
                               echo "เป็นเลขคู่";
                            }
                            echo "<br>";
                            }
                        }
                    ?>
                </div>
            </div>
    </body>
</html>