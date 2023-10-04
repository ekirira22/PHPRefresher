<?php
    include "./dbcon.php";
    global $conn;

    if(isset($_POST['submit'])){
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $age = $_POST['age'];
//       $gender = $_POST['gender'];


        $sql = "INSERT INTO `students` (`First_name`, `Last_name`, `Age`) VALUES ('$first_name','$last_name','$age')";

        $result = mysqli_query($conn, $sql);

       if($result){
           header("Location: index.php?msg=New record created successfully");
       }else{
           echo "Failed: " . mysqli_error($conn);
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Refresher</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: Open Sans, sans-serif">
<section class="py-10 px-8">
    <nav class="flex justify-between items-center">
        <div>
            <a href="/">
                <img src="./img/logo-dark.svg" alt="Orphan Reach Logo" width="165" height="25">
            </a>
        </div>
        <div>
            <a href="#" class="text-xs font-bold">HOMEPAGE</a>
            <a href="#" class="bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white py-3 px-5" >SIGN UP</a>
            <a href="#" class="bg-red-600 ml-2 rounded-full text-xs font-semibold text-white py-3 px-5">LOG IN</a>
        </div>
    </nav>
    <header class="max-w-4xl mx-auto mt-20 text-center">
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl">
                Add <span class="text-blue-500">New Student</span> To Database
            </h1>
            <h2 class="mt-10 text-xl">
                Complete the form below to add a new student
            </h2>
        </div>
    </header>
    <main>
        <div class="max-w-xl mx-auto mt-8 text-right">
            <form method="POST" action="#">
                <div class="space-x-4">
                    <label for="" class="text-sm font-semibold">First Name:</label>
                    <input type="text" class="bg-gray-200 rounded-xl py-2 pl-3 pr-10" name="first_name" placeholder="First Name">
                </div>
                <div class="space-x-4 mt-6">
                    <label for="" class="text-sm font-semibold">Last Name:</label>
                    <input type="text" class="bg-gray-200 rounded-xl py-2 pl-3 pr-10" name="last_name" placeholder="Last Name">
                </div>
                <div class="space-x-4 mt-6">
                    <label for="" class="text-sm font-semibold">Age:</label>
                    <input type="text" class="bg-gray-200 rounded-xl py-2 pl-3 pr-10" name="age" placeholder="Age">
                </div>
               <!-- <div class="space-x-2 mt-6 text-sm font-semibold">
                    <label>Gender: </label>&nbsp;
                    <input type="radio" name="gender">
                    <label for="">Male</label>
                    <input type="radio" name="gender">
                    <label for="">Female</label>
                    <input type="radio" name="gender">
                    <label for="">Other</label>
                </div>-->
                <div class="mt-6">
                    <button type="submit" class="bg-green-600 text-white py-2 px-3 rounded-xl">Save</button>
                    <button type="reset" class="bg-yellow-400 text-white py-2 px-3 rounded-xl">Reset</button>
                    <a href="index.php" type="reset" class="bg-red-600 text-white py-2 px-3 rounded-xl">Cancel</a>
                </div>
            </form>
        </div>
    </main>

    <footer>

    </footer>
</section>
</body>
</html>