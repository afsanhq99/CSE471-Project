<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Customize Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="applijewelleryion/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script>
    new WOW().init();
    </script>
    <script src="js/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker,#datepicker1").datepicker();
    });
    </script>
    <style>
    body {
        margin-top: 20px;
    }

    .panel-title {
        display: inline;
        font-weight: bold;
    }

    .checkbox.pull-right {
        margin: 0;
    }

    .pl-ziro {
        padding-left: 0px;
    }
    </style>
</head>

<body>
    <!-- top-header -->
    <?php include('includes/header.php'); ?>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <!------ Include the above in your HEAD tag ---------->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customize Tour Package</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
            integrity="sha512-DgGY40t8apHqo3FyLxUSXhE4f4otjK4+1Zzmk2ix/SiP+vccS+7Kj0UyI9BjKsW8Ov22bwLlUZwKSm6T8Y86tw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Custom CSS -->
        <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .form-wrapper {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .form-label {
            font-size: 18px;
            font-weight: bold;
        }

        .form-control {
            height: 48px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2);
        }

        .form-control:focus {
            outline: none;
            box-shadow: inset 0 0 0 2px #007bff;
        }

        .form-btn {
            height: 48px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            transition: background-color 0.2s ease;
        }

        .form-btn:hover {
            background-color: #0069d9;
        }

        .form-btn:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5);
        }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Customize Your Package</h2>
            <form action="packagecus.php" method="post">
                <div class="form-group">
                    <label for="destination">Destination:</label>
                    <input type="text" class="form-control" id="destination" name="destination" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="from-date">From Date:</label>
                        <input type="date" class="form-control" id="from-date" name="from_date" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="to-date">To Date:</label>
                        <input type="date" class="form-control" id="to-date" name="to_date" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="budget">Budget:</label>
                        <input type="number" class="form-control" id="budget" name="budget" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="adults">Number of Adults:</label>
                        <input type="number" class="form-control" id="adults" name="adults" min="1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="children">Number of Children:</label>
                    <input type="number" class="form-control" id="children" name="children" min="0" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-W2dS7LKtIh9Io4BvC4W4LHftPXtmh//L/lmMAa3nWjzku7AZtR9aNTlYvA8WNo3wY3OJLd/XL7VJfsWIVIbq3Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
            integrity="sha512-GOG7VSwyW/Mu8qV44c2XKj5NY5C5/F5a7zELsjjKlZChfUaxpe6pj14K6Ug9XyGFWn6ogodrGWXXYfsZYY8Q6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Custom JS -->
        <script>
        $(document).ready(function() {
            $('#customizeForm').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'customize.php',
                    type: 'POST',
                    data: $('#customizeForm').serialize(),
                    success: function(response) {
                        // Handle success response here
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response here
                        console.log(xhr.responseText);
                    }
                });
            });
        });
        </script>
    </body>

    </html>













    <!--- /selectroom ---->
    <<!--- /footer-top ---->
        <?php include('includes/footer.php'); ?>
        <!-- signup -->
        <?php include('includes/signup.php'); ?>
        <!-- //signu -->
        <!-- signin -->
        <?php include('includes/signin.php'); ?>
        <!-- //signin -->
        <!-- write us -->
        <?php include('includes/write-us.php'); ?>
</body>

</html>