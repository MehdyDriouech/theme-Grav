<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://readingtime/readingtime.yaml',
    'modified' => 1524935571,
    'data' => [
        'enabled' => true,
        'words_per_minute' => 200,
        'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
        'round' => 'seconds'
    ]
];
