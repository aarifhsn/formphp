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

<body class="bg-gray-300 font-serif text-slate-700 " style="background-image: url(img/body-bg.jpg); background-repeat: no-repeat; background-size: cover; background-position: center">

<div class="mx-auto my-4 max-w-md p-8 bg-slate-300 bg-center bg-no-repeat bg-cover" >
    
    <h2 class="text-3xl my-4 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">Form Presentation</h2>


    <!-- text input  -->
    <form method="POST" action="message.php">
    
        <div class="form_text my-6">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="block w-full p-1 rounded-sm ">
        </div>

        <!-- radio button -->

        <div class="form_radio my-4 flex items-center">
            <div class="gender-title my-2 mr-2">Gender:</div>
            <input type="radio" id="male" name="gender" value="male" class="mx-1">
            <label for="male" class="">Male</label>

            <input type="radio" id="female" name="gender" value="female" class="mr-1 ml-4">
            <label for="female">Female</label>
        </div>

        <!-- checkbox type -->
        <div class="form_check my-4 flex">
            <label for="subscribe">Subscribe to Newsletter</label>
            <input type="checkbox" id="subscribe" name="subscribe" class="ml-4 p-2">
        </div>

        <!-- date picker -->
        <div class="date mt-4">
            <label for="datepicker">Pick a Date</label>
            <input type="date" id="datepicker" name="datepicker" class="block w-full p-1 rounded-sm ">
        </div>

        <!-- Time picker -->
        <div class="time mt-4">
            <label for="timepicker">Pick a Time</label>
            <input type="text" id="timepicker" name="timepicker" class="block w-full p-1 rounded-sm ">
        </div>

        <!-- Muntiselect Dropbox using Select2 -->
        <div class="my-6">
            <label for="options" class="">Select Options</label>
            <select id="options" class="block w-full" name="options[]" multiple>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
        </div>

        <!-- Multi-checkbox -->
        <div class="mb-6">
            <label class="block">Select Multiple Options</label>
            <div class="space-y-2 text-sm">
                <label class="inline-flex items-center mr-2">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox1" class="">
                    <span class="ml-1">Checkbox 1</span>
                </label>
                <label class="inline-flex items-center  mr-2">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox2" class="">
                    <span class="ml-1">Checkbox 2</span>
                </label>
                <label class="inline-flex items-center  mr-2">
                    <input type="checkbox" name="multicheckbox[]" value="checkbox3" class="">
                    <span class="ml-1">Checkbox 3</span>
                </label>
            </div>
        </div>

        <!-- Select Dropdown -->
        <div class="my-4">
            <label for="country" class="block">Country</label>
            <select id="country" name="country" class="block w-full py-2 rounded-sm">
                <option value="bangladesh">Bangladesh</option>
                <option value="switzerland">Switzerland</option>
                <option value="indonesia">Indonesia</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="my-6">
            <button type="submit" class="rounded-md bg-indigo-600 border-2 border-indigo-500 p-2 py-1 text-white hover:bg-indigo-800 hover:border-indigo-600 transition duration-500">Submit</button>
        </div>

    </form>

</div>

    <script>
        flatpickr("#datepicker");

        flatpickr("#timepicker", {
            enableTime: true,
            noCalendar: true,
        });
        $(document).ready(function() {
            $('#options').select2();
        });
    </script>

</body>
</html>
