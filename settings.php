<?php
$settings->add(new admin_setting_heading(
            'headerconfig',
            get_string('headerconfig', 'block_moodletestblock'),
            get_string('descconfig', 'block_moodletestblock')
        ));

$settings->add(new admin_setting_configcheckbox(
            'simplehtml/Allow_HTML',
            get_string('labelallowhtml', 'block_moodletestblock'),
            get_string('descallowhtml', 'block_moodletestblock'),
            '0'
        ));