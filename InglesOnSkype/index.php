<?php get_header(); ?>
<?php include("proccess-contact.php"); ?>

<div id="home" class="display section mb-60">
    <div class="col span_2_of_5" id='section-profile-picture'>
        <div class="rounded-img">
            <?php
            $return      = simple_fields_value("sessao_1_home_url_foto");
            $vImgUrl     = ($return == "") ? get_bloginfo('template_url') . "/images/profile-picture.jpg" : $return;
            ?>

            <img id="WPht4imgimage" alt="" data-type="image" src="<?php echo $vImgUrl; ?>">
        </div>
    </div>
    <div class="col span_3_of_5" id="section-tagline">
        <div id="tag-line-holder">
            <h3 id="tag-line" class="mb-20">Olá,</h3>
            <p id="sub-tag-line" class="mb-25">conheça um pouco mais sobre mim e meu trabalho.</p>

            <ul id="menu-circles" class="mb-25">
                <li>
                    <div class="circle circle-blue">
                        <a href="javascript:;" class="scrollTo" data-idelem="third-session">AULAS</a>
                    </div>
                </li>
                <li>
                    <div class="circle circle-red">
                        <a href="javascript:;" class="scrollTo" data-idelem="second-session">SOBRE MIM</a>
                    </div>
                </li>
                <li>
                    <div class="circle circle-yellow">
                        <a href="javascript:;" class="scrollTo" data-idelem="fourth-session">CONTATO</a>
                    </div>
                </li>
            </ul>

            <?php
            $txtHome     = simple_fields_value("sessao_1_home_texto_home");
            ?>
            <p>
                <?php echo nl2br($txtHome); ?>
            </p>
        </div>
    </div>
</div>
</div> <!-- #header -->

<div id="third-session" class="display">
    <div class="main-content">
        <h3 class="session-title">AULAS</h3>

        <?php
        $txtAulas   = simple_fields_value("sessao_3_aulas_texto");
        ?>
        <p><?php echo nl2br($txtAulas); ?></p>
    </div>
</div>

<div id="second-session" class="display">
    <div class="main-content">
        <h3 class="session-title">SOBRE MIM</h3>

        <ul id="curriculo">
            <?php
            $vCurrTitles = simple_fields_values("sessao_2_curriculo_titulo");
            $vCurrDescs  = simple_fields_values("sessao_2_curriculo_descricao");

            for ($i = 0; $i < count($vCurrTitles); $i++) {
                $vTitle = $vCurrTitles[$i];
                $vDesc  = $vCurrDescs[$i];
                ?>
                <li>
                    <div style="float: left; margin-right: 20px;">
                        <div class="circle circle-soft-pink">
                            <a href="javascript:;"><?php echo $vTitle; ?></a>
                        </div>
                    </div>
                    <p>​<?php echo $vDesc; ?></p>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>

<div id="fourth-session" class="display">
    <div class="main-content">
        <h3 class="session-title">CONTATO</h3>

        <?php
        // sessao_4_contato_email
        $txtContato = simple_fields_value("sessao_4_contato_texto");
        ?>
        <p class="mb-20"><?php echo nl2br($txtContato); ?></p>

        <form action="" method="post">
            <input type="hidden" name="action" value="sendContact">

            <div class="display section">

                <div class="col span_2_of_4">
                    <ul id="contact-left">
                        <li>
                            <span class="contact-label">Nome:</span> <input name="contactName" type="text" value="<?php echo $vContactName; ?>" />
                        </li>
                        <li>
                            <span class="contact-label">Email:</span> <input name="contactMail" type="text" value="<?php echo $vContactMail; ?>" />
                        </li>
                        <li>
                            <span class="contact-label">Telefone:</span> <input name="contactPhone" type="text" value="<?php echo $vContactPhone; ?>" />
                        </li>
                    </ul>
                </div>
                <div class="col span_2_of_4">
                    <span class="contact-label">Mensagem:</span> <textarea name="contactMsg" id="contact-msg"></textarea>
                </div>

            </div>

            <div class="display ft-r">
                <button id="contact-btn" onclick="this.form.submit();">ENVIAR</button>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>