<?php

use Tygh\Registry;

$schema['currencies_with_flag'] = array(
    'content' => array(
        'currencies_with_flag' => array(
            'type' => 'function',
            'function' => array('fn_block_manager_get_currencies'),
        ),
    ),
    'settings' => array(
        'format' => array(
            'type' => 'selectbox',
            'values' => array(
                'name' => 'opt_currency_name',
                'symbol' => 'opt_currency_symbol',
            ),
            'default_value' => 'name'
        ),
        'dropdown_limit' => array(
            'type' => 'input',
            'default_value' => '0'
        )
    ),
    'templates' => 'addons/currency_countries/blocks/currencies.tpl',
    'wrappers' => 'blocks/wrappers',
);

return $schema;
