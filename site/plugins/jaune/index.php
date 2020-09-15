<?php

Kirby::plugin('sarah/jaune', [
    'tags' => [
        'jaune' => [
        	'attr' => [
		          'jaune'
		        ],
            'html' => function($tag) {
                return '<span class="jaune">'.$tag->jaune.'</span>';
            }
        ]
    ]
]);