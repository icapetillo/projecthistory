<!DOCTYPE html>
<head>
	<!-- meta -->
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	
    <!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/kickstart-buttons.css">
    
    <!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>
	<div id="contenedor">
		<div id="encabezado">
			<div id="logo"><img src="images/logoseteci.png">&nbsp;SERVICIOS TÉCNICOS INDUSTRIALES</div>
			<div id="datos_contacto">
				<span class="texto_datos">
					<img src="images/fb.png" align="absmiddle">&nbsp;<img src="images/tw.png" align="absmiddle">&nbsp;&nbsp;<a class="enlace_datos">Inicio</a> | <a class="enlace_datos">FAQ</a>
					<br> <img src="images/phone.png" align="absmiddle">&nbsp;&nbsp; Tel. (464) 641.02.98
					<br> <img src="images/mail.png" align="absmiddle">&nbsp;&nbsp; info@seteci.com.mx
				</span>
			</div>
		</div>

		<div id="navegacion">			
			<ul class="navmenu">
				<li class="inicial nav_elem"><a class="inicial" href="index.html">Inicio</a></li>
				<li class="nav_elem"><a href="nosotros.html">Nosotros</a></li>
				<li class="nav_elem"><a href="servicios.html">Servicios</a></li>
				<li class="nav_elem"><a href="clientes.html">Clientes</a></li>
				<li class="nav_elem"><a href="alianzas.html">Alianzas</a></li>
				<li><a class="activo final" href="contacto.html">Contacto</a></li>				
			</ul>	
		</div>

		<div id="contenido">
            <center>
<?php
/**
 * PHP FormMail v 1.2.3
 *
 * Copyright (c) 2003 LAMP Host
 * http://www.lamphost.net
 *
 * This code is subject to version 1.0 of the LAMP Host license,
 * which is included with this package in the file license.txt,
 * and is available via the world-wide-web at
 * http://www.lampshost.net/source/license-1.0.html or by sending
 * a blank email to license@lamphost.net
 *
 * Credits: Matt Brown <mattbrown@lamphost.net>
 */

$fm = new Form_Mail();

class Form_Mail
{
    /**
     * Form_Mail
     */

    /* properties */
    var $error_message = "";
    var $print_array = array();
    var $config_vars_array = array("recipient"                 => "",
                                   "from"                      => "",
                                   "subject"                   => "Form Submission",
                                   "email"                     => "",
                                   "cc_email"                  => "",
                                   "redirect"                  => "",
                                   "required"                  => "",
                                   "env_report"                => "",
                                   "sort"                      => "",
                                   "print_config"              => "",
                                   "print_blank_fields"        => "0",
                                   "line_spacing"              => "0",
                                   "title"                     => "Form Submission",
                                   "return_link_url"           => "",
                                   "return_link_title"         => "Return",
                                   "missing_fields_redirect"   => "",
                                   "missing_fields_message"    => "One or more required fields are missing.<br>\n<a onclick=\"history.go(-1)\" style=\"color: blue;\">Click here</a> to return to the form.<br>\n",
                                   "background"                => "",
                                   "bgcolor"                   => "#ffffff",
                                   "text_color"                => "#000000",
                                   "link_color"                => "blue",
                                   "vlink_color"               => "purple",
                                   "alink_color"               => "red",
                                   "thank_you_message"         => "Gracias por sus comentarios. En breve nos pondremos en contacto con usted.",
                                  );
    var $referers_array = array();
    var $valid_env = array('REMOTE_ADDR','REMOTE_PORT','HTTP_REFERER','HTTP_USER_AGENT');

    /* methods */

    /**
     * Form_Mail();
     *
     * set_arrays()
     * check_referer()
     * check_recipient()
     * check_required_fields()
     * send_form()
     * display_thankyou()
     * display_missing_fields_error()
     * display_error()
     * display_header()
     * display_footer()
     */

    function Form_Mail()
    {
        /**
        * Form_Mail();
        */

        $this->referers_array = array($_SERVER["HTTP_HOST"]);
        /**
         * Leave AS IS to only allow posting from same host that script resides on.
         * List individual hosts to create list of hosts that can post to this script:
         * EXAMPLE: $referer_array = array ('example.com','www.example.com','192.168.0.1');
         */

        /* proccess form */
        $this->set_arrays();
        $this->check_referer();
        $this->check_recipient();
        $this->check_required_fields();
        $this->send_form();
        $this->display_thankyou();
    }

    function set_arrays()
    {
        /**
        * set_arrays();
        */

        foreach ($_POST as $key=>$value) {

            /* strip slashes if magic_quotes_gpc is on */
            $magic_quotes_gpc = (bool) ini_get('magic_quotes_gpc');
            if($magic_quotes_gpc == 1) {
                $value = stripslashes($value);
            }

            if (isset($this->config_vars_array[strtolower("$key")])) {
                $key = strtolower($key);
                $this->config_vars_array["$key"] = $value;
            } else {
                $this->print_array["$key"] = $value;
            }
        }

        /* create an array of config vars to print in message and add them to $print_array */
        if ($this->config_vars_array["print_config"] != "") {
            $print_config_array = explode(",", $this->config_vars_array["print_config"]);
            foreach ($print_config_array as $key=>$value) {
                $value = trim($value);
                $this->print_array["$value"] = $_POST["$value"];
            }
        }

        /* sort $print_array, if requested */
        if ($this->config_vars_array["sort"] == "alphabetic") {
            /* sort alphabetically */
            $print_array_keys_array = array_keys($this->print_array);
            sort($print_array_keys_array);
            foreach ($print_array_keys_array as $key=>$value) {
                $tmp_array["$value"] = $this->print_array["$value"];
            }
            unset($this->print_array);
            $this->print_array = $tmp_array;
        } elseif ($this->config_vars_array["sort"] != "") {
            /* sort according to $sort */
            $sort_array = explode(",", $this->config_vars_array["sort"]);
            foreach ($sort_array as $key=>$value) {
                $value = trim($value);
                $tmp_array["$value"] = $this->print_array["$value"];
            }
            foreach ($this->print_array as $key=>$value) {
                if (!isset($tmp_array["$key"])) {
                    $tmp_array["$key"] = $this->print_array["$key"];
                }
            }
            unset($this->print_array);
            $this->print_array = $tmp_array;
        }

        /* add environmental vars, if set */
        if ($_POST["env_report"] != "") {
            $env_vars_array = explode(",", $_POST["env_report"]);
            foreach ($env_vars_array as $key=>$value) {
                $value = trim($value);
                if (in_array("$value", $this->valid_env)) {
                    $this->print_array["$value"] = $_SERVER["$value"];
                }
            }
        }

        /* remove blank fields, if requested */
        if ($this->config_vars_array["print_blank_fields"] == "0") {
            foreach ($this->print_array as $key=>$value) {
                if ($value == "") {
                    unset($this->print_array["$key"]);
                }
            }
        }
    }

    function check_referer()
    {
        /**
        * check_referer();
        */

        $referer = $_SERVER["HTTP_REFERER"];

        if ($referer == "") {
            $this->error_message = "referer contains an empty value, this is not allowed.<br>\n";
            $this->display_error();
            return false;
        }

        foreach ($this->referers_array as $key=>$value) {
            if ((eregi("^http://$value", $referer)) || (eregi("^https://$value", $referer))) {
                return true;
            } elseif ($value == "") {
                $this->error_message = "referers_array contains an empty value, this is not allowed.<br>\n";
                $this->display_error();
                return false;
            }
        }

        $this->error_message = "<b>$referer</b> is not authorized to use this form.<br>\n";
        $this->display_error();
        return false;
    }

    function check_recipient()
    {
        /**
        * check_recipient();
        */

        $recipient_array = explode(",", $this->config_vars_array["recipient"]);
        foreach ($recipient_array as $key=>$email) {
            $email = trim($email);
            if(!eregi("^[0-9a-z]([-_.+]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,7}$", "$email")) {
                $this->error_message = "Recipient email is either not set, or is not a valid email address.";
                $this->display_error();
                return false;
            }
        }
        return true;
    }

    function check_required_fields()
    {
        /**
        * check_required_fields();
        */

        if ($this->config_vars_array["required"] != "") {
            $required_fields_array = explode(",", "$_POST[required]");
            foreach ($required_fields_array as $key=>$required_field) {
                $required_field = trim($required_field);
                if ($_POST["$required_field"] == "") {
                    $this->display_missing_fields_error();
                    return false;
                }
            }
        }
        return true;
    }

    function send_form()
    {
        /**
        * send_form();
        */

        $mailBody = "";

        foreach ($this->print_array as $key=>$value) {
            if (is_array($value)) {
                foreach ($value as $key2=>$value2) {
                    $mailBody .= "$key: $value2\n";
                }
            } else {
                $mailBody .= "$key: $value\n";
            }
            for ($line_count = 0; $line_count < $this->config_vars_array["line_spacing"]; $line_count++) {
                $mailBody .= "\n";
            }
        }

        $mailHeaders = "From: " . $this->config_vars_array["email"] . "\n";
        
        if($this->config_vars_array["cc_email"] == 1) {
            $mailHeaders .= "Cc: " . $this->config_vars_array["email"] . "\n";
        }

        if(mail($this->config_vars_array["recipient"], $this->config_vars_array["subject"], $mailBody, $mailHeaders)) {
            return true;
        } else {
            return false;
        }
    }


    function display_thankyou()
    {
        /**
        * display_thankyou();
        */

        if($this->config_vars_array["redirect"] == "") {
            $this->display_header();
            print "<h2>" . $this->config_vars_array["thank_you_message"] . "</h2><br>\n";
            if ($this->config_vars_array["return_link_url"] != "") {
                print "<br>\n";
                print "<a href=\"" . $this->config_vars_array["return_link_url"] . "\">" . $this->config_vars_array["return_link_title"] . "</a><br>\n";
            }
            $this->display_footer();
        } else {
            header("Location: " . $this->config_vars_array["redirect"]);
        }
        exit;
    }

    function display_missing_fields_error()
    {
        /**
        * display_missing_fields_error();
        */

        if($this->config_vars_array["missing_fields_redirect"] == "") {
            $this->display_header();
            print $this->config_vars_array["missing_fields_message"];
            $this->display_footer();
        } else {
            header("Location: " . $this->config_vars_array["missing_fields_redirect"]);
        }
        exit;
    }

    function display_error()
    {
        /**
        * display_error();
        */

        $this->display_header();
        print "System error:<br>\n";
        print $this->error_message;
        $this->display_footer();
        exit;
    }

    function display_header()
    {
        /**
        * display_header();
        */

        $bgcolor = $this->config_vars_array["bgcolor"];
        $text_color = $this->config_vars_array["text_color"];
        $background = $this->config_vars_array["background"];
        $link_color = $this->config_vars_array["link_color"];
        $vlink_color = $this->config_vars_array["vlink_color"];
        $alink_color = $this->config_vars_array["alink_color"];

        print "<html>\n";
        print "<head>\n";
        print "<title>$title</title>\n";
        print "</head>\n";
        print "<body text=\"$text_color\" background=\"$background\" bgcolor=\"$bgcolor\" link=\"$link_color\" alink=\"$alink_color\" vlink=\"$vlink_color\">\n";
        print "<div align=\"center\">";
    }

    function display_footer()
    {
        /**
        * display_footer();
        */

        print "</div>\n";
        print "</body>\n";
        print "</html>\n";
    }

}
?>
                
            </center>	   	        
		</div>		
	</div>

	<div id="pie">	
			::: Salamanca, Guanajuato, 2012. Todos los derechos reservados. ::: <a href="http://www.geniusworksmexico.com" target="_blank"><img src="images/white_gear_small.png" align="absmiddle" border="0"></a> :::
	</div>

</body>

</html>



