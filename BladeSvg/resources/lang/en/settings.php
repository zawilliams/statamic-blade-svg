<?php

return [
    'svg_path_instruct' => "This value is the path to the directory of individual SVG files. This path is then resolved internally. Please ensure that this value is set relative to the root directory and not the public directory.",
    'svg_spritesheet_path_instruct' => "If you would rather have one spritesheet than a lot of individual SVG files, you may specify a path to a spritesheet. The SVG images are extracted from this spritesheet to be rendered out individually.",
    'svg_spritesheet_url_instruct' => "If you don't want to embed the spritesheet directly in your markup and would rather reference an external URL, you can specify the path to the external spritesheet to use with this configuration option.",
    'svg_inline_instruct' => "This value will determine whether or not the SVG should be rendered inline or if it should reference a spritesheet through a <use> element.",
    'svg_class_instruct' => "If you would like to have CSS classes applied to your SVGs, you must specify them here. Much like how you would define multiple classes in an HTML attribute, you may separate each class using a space.",
];
