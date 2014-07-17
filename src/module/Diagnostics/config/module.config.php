<?php
return array(
    "diagnostics" => array(
        "application" => array(
            "Check if Public dir exists" => array('file_exists', 'public/'),
            "Check paths" => array(
                array('Diagnostics\Module', 'checkPaths'),
                'data/cache/',
                'data/log/',
            ),
        )
    )
);
