<?php
$vContactName = "";
$vContactMail = "";
$vContactPhone = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["action"]) && $_POST["action"] == "sendContact"){
        $vContactName  = $_POST["contactName"];
        $vContactMail  = $_POST["contactMail"];
        $vContactPhone = $_POST["contactPhone"];
        $vContactMsg   = $_POST["contactMsg"];

        $error = "";
        if(strlen($vContactName) < 3){
            $error = "Por favor, informe o nome com pelo menos 3 caracteres!";
        } else if (!validateMail($vContactMail)){
            $error = "Por favor, informe um email válido!";
        } else if (strlen($vContactPhone) < 8){
            $error = "Por favor, informe um telefone com pelo menos 8 dígitos!";
        }

        if($error != ""){
            ?>

            <script>
            alert('<?php echo $error; ?>');
            </script>

            <?php
        } else {
            $htmlBody = "";
            $htmlBody .= "
                Nome: $vContactName<br />
                Email: $vContactMail<br />
                Telefone: $vContactPhone<br /><br />
                '<i>$vContactMsg</i>'
            ";

            $return2 = simple_fields_value("sessao_4_contato_email");
            $to      = ($return2 == "") ? "nixlovemi@gmail.com": $return2;
            $ret     = sendMail($to, "Contato Site", $htmlBody);

            $msg = "";
            if($ret){
                $msg = "Contato enviado com sucesso!";

                $vContactName = "";
                $vContactMail = "";
                $vContactPhone = "";
            } else {
                $msg = "Erro ao enviar contato. Tente novamente em breve!";
            }
            ?>

            <script>
            alert('<?php echo $msg; ?>');
            </script>

            <?php
        }
    }
}