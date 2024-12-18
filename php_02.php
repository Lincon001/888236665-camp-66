<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <?php
            $my_var;
            ?>
            <h1>แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่ </h1>
            
            <div class="row">
                <div class="col h2 text-end">
                <?php
                    for ($x = 1; $x <= 100; $x++){
                        echo "เลข ".$x;
                        echo "<br>";
                    }
                    ?>
                </div>
                <div class = "col h2 text-start">
                    <?php
                    for ($x = 1; $x <= 100; $x++){
                        if($x % 2 != 0){
                            echo "เป็นเลขคี่";
                        }else{
                            echo "เป็นเลขคู่";
                        }
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>