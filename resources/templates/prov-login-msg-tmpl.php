<section class="form-sec">
    <h1>Provider Login</h1>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cust-email']) && isset($_POST['cust-password'])) {
        if (!empty($_POST['cust-email']) && !empty($_POST['cust-password'])) {
            $custEmail = htmlspecialchars($_POST['cust-email']);
            $custPassword = htmlspecialchars($_POST['cust-password']);
            $db = new DB();
            $db->query('SELECT  `prov_id`, `pwd`,`is_active`  from  `ww_provider` WHERE  `email_id` = :email_id');
            $db->bind(':email_id', $custEmail);
            $exeRes = $db->single();
            if($exeRes){
                if($exeRes['is_active'] == 1){
                    if (password_verify($custPassword,$exeRes['pwd'])) {
                        $_SESSION['providerlogin'] = $exeRes['prov_id'];
                        header('Location: /provider-profile');
                        $db->terminate();
                    }else{
                        echo $providerLoginErr = "Incorrect Credentials.";
        
                    }
                }else{
                    echo $providerLoginErr = "Inactive Account. Verfiy your Account by clicking on link send to your email.";
                }
            }else{
                echo $providerLoginErr = "Invalid Account.This Email id is not registered with us.";
            }

        } else {
            echo $providerLoginErr = 'Name, email and Message Field Can\'t be empty';
        }
    }
}
?>
</section>
