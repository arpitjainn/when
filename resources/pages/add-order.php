<?php
	$path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php';
    require $path['root'].'/includes/connect.inc.php';
	if (isset($_GET['prov_id'])) {
		$provId = $_GET['prov_id'];
            $db = new DB();
            $db->query("insert into ww_customer_order (customer_id, provider_id) values ('15', '$provId')");
        
            //$db->bind(':customer_id', $customer_id);
            $db->execute(['15', $provId]);
            $db->terminate();
        }
?>