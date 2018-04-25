<?php
    include 'functions.php';
    
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Gather numDigits="1" timeout="10" action="input-method.php" method="GET">
	<Say voice="<?php echo $voice; ?>" language="<?php echo $language; ?>">
            <?php echo $GLOBALS['title'] ?>
	</Say>
        <Say voice="<?php echo $voice; ?>" language="<?php echo $language; ?>">
            <?php echo word('press') ?> <?php echo word('one') ?> <?php echo word('to_find') ?> <?php echo word('someone_to_talk_to') ?>
        </Say>
        <Say voice="<?php echo $voice; ?>" language="<?php echo $language; ?>">
            <?php echo word('press') ?> <?php echo word('two') ?> <?php echo word('to_search_for') ?> <?php echo word('meetings') ?>
        </Say>
    </Gather>
</Response>