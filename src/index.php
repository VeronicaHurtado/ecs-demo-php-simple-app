<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PolarSeven</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #33FFF5;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <img src="assets/images/p7.png" width="250" height="120">
                <h1>PolarSeven AWS ECS Pipeline Demo</h1>
                <h2>Congratulations</h2>
                <h2>THIS IS VERSION 1.4</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>
                <h2><a href="https://github.com/awslabs/ecs-refarch-continuous-deployment">Go to AwsLabs ecs pipeline</a></h2>
                <h2><a href="https://github.com/aws-samples/ecs-demo-php-simple-app">Go to AwsLabs Php sample app</a></h2>
                <h2><a href="https://polarseven.com/devops-introduction">PolarSeven DevOps Webinar</a></h2>
                <h2><a href="https://polarseven.com/kubernetes-deep-dive-demo">PolarSeven Kubernetes Webinar</a></h2>
                <h2><a href="https://aws.amazon.com/new/">AWS Whats New</a></h2>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
