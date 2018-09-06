<?php
/**
 * Created by PhpStorm.
 * User: toni
 * Date: 06.09.18
 * Time: 20:30
 */
class block_simplehtml_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Section header title according to language file.
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));

        // A sample string variable with a default value.
        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_simplehtml'));
        $mform->setDefault('config_text', 'default text');
        $mform->setType('config_text', PARAM_RAW);

        // A sample string variable with a default value.
        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_simplehtml'));
        $mform->setDefault('config_title', 'default value');
        $mform->setType('config_title', PARAM_TEXT);
    }
}