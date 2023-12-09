<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>Document</title>
</head>

<body class="bg-gray-300 font-serif text-slate-700 " style="background-image: url(img/body-bg.jpg)">

<div class="mx-auto my-4 max-w-md p-8 bg-slate-300 bg-center bg-no-repeat bg-cover" >
    
    <?php 
        // define variables
        $name = $gender = $subscribe = $datepicker = $timepicker= $options[] = $country = $multicheckbox[] = "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '' ;
            $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : '' ;
            $subscribe = isset($_POST["subscribe"]) ? 'Subcribed' : '' ;
            $datepicker = isset($_POST["datepicker"]) ? htmlspecialchars($_POST["datepicker"]) : '' ;
            $timepicker = isset($_POST["timepicker"]) ? htmlspecialchars($_POST["timepicker"]) : '' ;
            $options = isset($_POST["options"]) ? $_POST["options"] : [] ;
            $multicheckbox = isset($_POST["multicheckbox"]) ? $_POST["multicheckbox"] : [] ;
            $country = isset($_POST["country"]) ? htmlspecialchars($_POST["country"]) : '' ;
        }
    ?>

    <h2 class="text-3xl my-4 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Welcome: <?php echo $name; ?> </h2>
    
    <?php if($name || $gender || $subscribe || $datepicker || $timepicker || $options || $multicheckbox || $country) {
        echo '<h3>Here is your selected value: </h3>';
    } else {
        echo "<h3>You haven't added any value. </h3>";
    } ?>


    <?php
        echo '<div class="my-4">';
        echo '<ul class="list-disc">' ;
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Name: </span>' .$name .'</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Gender: </span>' .$gender .'</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Subscription: </span>' .$subscribe .'</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Date: </span>' . $datepicker . '</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Time: </span>' . $timepicker . '</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Options: </span>'. implode(', ' , $options ) . '</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Checked: </span>'. implode(', ' , $multicheckbox ) . '</li>';
        echo '<li class="block p-1 my-1 capitalize"><span class="font-bold">Country: </span>'. $country . '</li>';
        echo '</ul>' ;
        echo "</div>";
    ?>

</div>

  

</body>
</html>
