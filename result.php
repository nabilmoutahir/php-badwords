<?php 

    $user_text = $_GET['usertext'];

    $bad_word = $_GET['badword'];
    

    $fixed_text = str_replace($bad_word,'***',$user_text);

    $text_length = strlen($user_text);

    $textbad_length = strlen($fixed_text);

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

    <div class="row justify-content-center mt-2">
        <div class="col-6 d-flex justify-content-between align-content-center">

            <div class="mb-3 col-5">
                <label class="form-label">
                    Text Length
                </label>

                <textarea class="form-control"  rows="1"><?php echo $text_length ?></textarea>
                
                <label class="form-label">
                    Text
                </label>

                <textarea class="form-control"  rows="10"><?php echo $user_text ?></textarea>
            </div>

            <div class="mb-3 col-5">
                <label class="form-label">
                    Censored Text Length
                </label>

                <textarea class="form-control" id="" rows="1"><? echo $textbad_length ?></textarea>

                <label class="form-label">
                    Censored Text 
                </label>

                <textarea class="form-control" id="" rows="10"><?php echo $fixed_text ?></textarea>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
</body>
</html>