<?php 

    $user_text = $_GET['usertext'];

    $bad_word = $_GET['badword']
    





?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <div class="row justify-content-center mt-5">
        <div class="col-3">

            <div class="mb-3">
                <label class="form-label">
                    Text
                </label>
                
                <textarea class="form-control"  rows="10">

                    <?php

                        echo $user_text

                    ?>

                </textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Bad Word</label>
                <textarea name="" class="form-control" id="" cols="30" rows="3">
                    <?php

                        echo $bad_word

                    ?>
                </textarea>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
</body>
</html>