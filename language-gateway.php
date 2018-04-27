<?php
    include 'functions.php';
    
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";


    if (!isset($GLOBALS['language_gateway_options'])) {
        echo "<Response><Say>language gateway options are not set, please refer to the documentation to utilize this feature.</Say><Hangup/></Response>";
        exit();
    }

    $language_gateway_options = $GLOBALS['language_gateway_options'];
?>
<Response>
    <Gather numDigits="1" timeout="10" action="input-method.php" method="GET">
	<Say voice="<?php echo $voice; ?>" language="<?php echo $language; ?>">
            <?php echo $GLOBALS['title'] ?>
	</Say>
        <?php
            for ($i = 0; $i < count($language_gateway_options); $i++) {?>
        <Say voice="alice" language="<?php echo $language_gateway_options[$i] ?>">
            <?php echo word('for') ?> <?php echo word('language') ?> <?php echo word('press') ?> <?php echo word(getWordForNumber($i + 1)) ?>
        </Say>
        <?php }
        ?>
    </Gather>
</Response>