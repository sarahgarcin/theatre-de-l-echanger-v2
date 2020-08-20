<?php

Kirby::plugin('sarah/clair', [
    'tags' => [
        'clair' => [
        	'attr' => [
		          'clair'
		        ],
            'html' => function($tag) {
                return '<span class="clair">'.$tag->clair.'</span>';
            }
        ]
    ]
]);