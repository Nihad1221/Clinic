<?php
include_once './config/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'views/include/head.php';
    ?>
</head>

<body>
<?php
include_once 'views/include/header.php';

include_once 'views/pages/about.php';
include_once 'views/pages/Service.php';
include_once 'views/pages/Feature.php';
include_once 'views/pages/team.php';
include_once 'views/pages/Appointment.php';
include_once 'views/pages/Testimonial.php';

include_once 'views/include/footer.php';

include_once 'views/include/js.php';
?>

</body>

</html>