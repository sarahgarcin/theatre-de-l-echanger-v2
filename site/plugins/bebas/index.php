<?php

Kirby::plugin('sarah/bebas', [
    'tags' => [
        'bebas' => [
        	'attr' => [
		          'bebas'
		        ],
            'html' => function($tag) {
                return '<span class="bebas">'.$tag->bebas.'</span>';
            }
        ]
    ]
]);