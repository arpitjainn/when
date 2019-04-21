<?php
$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
require $path['root'] . '/includes/connect.inc.php';
require_once $path['root'] . '/includes/session.inc.php';

function urltodata($url)
{
    // Convert url to data
    $url = htmlspecialchars($url);
    $url = strtolower($url);
    $url = str_replace('-or-', '/', $url);
    $url = str_replace('-', ' ', $url);
    return $url;
}

function show_cards($result_array, $url_txt)
{
    if ($url_txt == 'home-services') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Provider Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                <span class="ord-left">Work Experience</span>
                <span class="ord-right">' . $exeResVal['prov_workexp'] . '</span>
              </div>
              <div>
                <span class="ord-left">Working Record</span>
                <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Specialities</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">About</span>
                  <span class="ord-right">' . $exeResVal['prov_about'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'appliance-repair') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Provider Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                  <span class="ord-left">Gender</span>
                  <span class="ord-right">' . $exeResVal['prov_gender'] . '</span>
                </div>
                <div>
                <span class="ord-left">Work Experience</span>
                <span class="ord-right">' . $exeResVal['prov_workexp'] . '</span>
              </div>
              <div>
                <span class="ord-left">Working Record</span>
                <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Specialities</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">About</span>
                  <span class="ord-right">' . $exeResVal['prov_about'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'transport') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Provider Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                <span class="ord-left">Profession</span>
                <span class="ord-right">' . $exeResVal['prov_field'] . '</span>
              </div>
              <div>
                <span class="ord-left">Working Record</span>
                <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Specialities</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">About</span>
                  <span class="ord-right">' . $exeResVal['prov_about'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Gender</span>
                  <span class="ord-right">' . $exeResVal['prov_gender'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Address</span>
                  <span class="ord-right">' . $exeResVal['prov_addr'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'personal-service') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Provider Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                <div>
                  <span class="ord-left">Gender</span>
                  <span class="ord-right">' . $exeResVal['prov_gender'] . '</span>
                </div>
                <span class="ord-left">Work Experience</span>
                <span class="ord-right">' . $exeResVal['prov_workexp'] . '</span>
              </div>
              <div>
                <span class="ord-left">Working Record</span>
                <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Specialities</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">About</span>
                  <span class="ord-right">' . $exeResVal['prov_about'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'showroom') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Showroom Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Address</span>
                  <span class="ord-right">' . $exeResVal['prov_addr'] . '</span>
                </div>
                <div>
                <div>
                  <span class="ord-left">Products</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Phone Number</span>
                  <span class="ord-right">' . $exeResVal['prov_contact'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'education') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                <span class="ord-left">Gender</span>
                <span class="ord-right">' . $exeResVal['prov_gender'] . '</span>
              </div>
              <div>
              <span class="ord-left">Educational Qualification</span>
              <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
            </div>
                <div>
                <span class="ord-left">Work Experience</span>
                <span class="ord-right">' . $exeResVal['prov_workexp'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Skills</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Teaching Option</span>
                  <span class="ord-right">' . $exeResVal['f2'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    } else if ($url_txt == 'wedding-or-party') {
        foreach ($result_array as $exeResVal) {
            $dob = new DateTime($exeResVal['prov_dob']);
            $today = new DateTime('today');
            echo '<div class="detail-card">
                <div>
                  <span class="ord-left">Provider Name</span>
                  <span class="ord-right">' . $exeResVal['prov_name'] . '</span>
                </div>
                <div>
                  <span class="ord-left">Age</span>
                  <span class="ord-right">' . $dob->diff($today)->y . ' Year </span>
                </div>
                <div>
                  <span class="ord-left">Gender</span>
                  <span class="ord-right">' . $exeResVal['prov_gender'] . ' Year </span>
                </div>
                <div>
                <span class="ord-left">Work Experience</span>
                <span class="ord-right">' . $exeResVal['prov_workexp'] . '</span>
              </div>
              <div>
                <span class="ord-left">Working Record</span>
                <span class="ord-right">' . $exeResVal['prov_record'] . '</span>
              </div>
                <div>
                  <span class="ord-left">Specialities</span>
                  <span class="ord-right">' . $exeResVal['prov_specialities'] . '</span>
                </div>
                <div>
                  <span class="ord-left">About</span>
                  <span class="ord-right">' . $exeResVal['prov_about'] . '</span>
                </div>
                <div>
                  <span class="book-btn-wrap"><a href="/order-booking-msg/' . $exeResVal['prov_id'] . '" class="btn book-btn">Book Now</a></span>
                </div>
            </div>';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['firstoption']) && !empty($_POST['firstoption'])) {
        $_SESSION['orderType1'] = htmlspecialchars($_POST['firstoption']);
    } else {
        $_SESSION['orderType1'] = '-';
    }

    if (isset($_POST['secondoption']) && !empty($_POST['secondoption'])) {
        $_SESSION['orderType2'] = htmlspecialchars($_POST['secondoption']);
    } else {
        $_SESSION['orderType2'] = '-';
    }

    if (isset($_POST['thirdoption']) && !empty($_POST['thirdoption'])) {
        $_SESSION['orderType3'] = htmlspecialchars($_POST['thirdoption']);
    } else {
        $_SESSION['orderType3'] = '-';
    }

    if (isset($_POST['fourthoption']) && !empty($_POST['fourthoption'])) {
        $_SESSION['orderType4'] = htmlspecialchars($_POST['fourthoption']);
    } else {
        $_SESSION['orderType4'] = '-';
    }

    if (isset($_POST['firstoption'])) {
        if ($_POST['firstoption'] == 'transport') {

            if (isset($_POST['fifthoption']) && !empty($_POST['fifthoption'])) {
                $_SESSION['orderType5'] = htmlspecialchars($_POST['fifthoption']);
            } else {
                $_SESSION['orderType5'] = '-';
            }

            if (isset($_POST['sixthoption']) && !empty($_POST['sixthoption'])) {
                $_SESSION['orderType6'] = htmlspecialchars($_POST['sixthoption']);
            } else {
                $_SESSION['orderType6'] = '-';
            }
        }

    }
} else {
    $_SESSION['orderType1'] = '-';
    $_SESSION['orderType2'] = '-';
    $_SESSION['orderType3'] = '-';
    $_SESSION['orderType4'] = '-';
    $_SESSION['orderType5'] = '-';
    $_SESSION['orderType6'] = '-';

}

if (isset($post_get_v2) && isset($post_get_v3)) {
    $url_param2 = urltodata($post_get_v2);
    $url_param3 = urltodata($post_get_v3);
    if (isset($_COOKIE['ww_location'])) {
        $cookieVal = $_COOKIE['ww_location'];
    } else {
        $cookieVal = 'Delhi NCR';
    }

    $_SESSION['ord_category1'] = $url_param2;
    $_SESSION['ord_category2'] = $url_param3;

    $db = new DB();
    if (strtolower($url_param2) != 'education') {
        $db->query('SELECT * FROM ww_provider as p
        LEFT JOIN ww_prov_extra as e ON p.prov_hash = e.prov_hash
        WHERE p.prov_field = :prov_field AND p.prov_service = :prov_service AND p.prov_state = :prov_state AND p.is_active = 1');

        $db->bind(':prov_field', $url_param2);
        $db->bind(':prov_service', $url_param3);
        $db->bind(':prov_state', $cookieVal);
        $exeRes = $db->resultset();
        $db->terminate();
    } else {
        $db->query('SELECT * FROM ww_provider as p
        LEFT JOIN ww_prov_extra as e ON p.prov_hash = e.prov_hash
        WHERE p.prov_field = :prov_field AND p.prov_state = :prov_state AND p.is_active = 1');
        $db->bind(':prov_field', $url_param2);
        $db->bind(':prov_state', $cookieVal);
        $exeRes = $db->resultset();
        $db->terminate();
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="theme-color" content="#4885ed"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhenWing - Service Providers </title>
    <link rel="icon" href="images/logo.png">
    <?php include 'includes/style.inc.php'; ?>
</head>
<body>
<?php include 'resources/templates/header-tmpl.php'; ?>
<?php include 'resources/templates/navigation-tmpl.php'; ?>
<section class="order">
    <h3 class="order-title">List of Providers
        <span class="order-title-count"><?php if (isset($exeRes)) {
                echo count($exeRes);
            } ?></span>
    </h3>
    <?php
    if (isset($exeRes)) {
        show_cards($exeRes, $post_get_v2);

    } else {
        echo '<p style="text-align:center;">No results.<p>';
    }
    ?>
</section>
<?php include 'resources/templates/footer-tmpl.php'; ?>
<?php include 'includes/script.inc.php'; ?>
</body>
</html>
