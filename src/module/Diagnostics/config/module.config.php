<?php

return array(
    "diagnostics" => array(
        "application" => array(
            "Check if Public dir exists" => array('file_exists', 'public/'),
            "Check path data" => array(
                array('Diagnostics\Module', 'checkPath'),
                    'data',
            ),
            "Check path data/cache" => array(
                array('Diagnostics\Module', 'checkPath'),
                    'data/cache/',
            ),
            "Check path data/logs" => array(
                array('Diagnostics\Module', 'checkPath'),
                    'data/logs/',
            ),
        )
    )
);
