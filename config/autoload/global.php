<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
     'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home',
            ),
            array(
                'label' => 'User',
                'route' => 'user',
                'pages' => array(
                    array(
                        'label' => 'List',
                        'route' => 'list',
                    ),
                    array(
                        'label' => 'Add',
                        'route' => 'add',
                    ),
                    array(
                        'label' => 'Edit',
                        'route' => 'edit',
                    ),
                ),
            ),
            array(
                'label' => 'Options',
                'route' => 'options',
            ),
        )
    )
);
