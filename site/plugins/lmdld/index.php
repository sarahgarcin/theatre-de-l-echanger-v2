<?php

Kirby::plugin('sarah/lmdld', [
    'tags' => [
        'lmdld' => [
        	'attr' => [
		          'lmdld'
		        ],
            'html' => function($tag) {
                return '<span class="lmdld">'.$tag->lmdld.'</span>';
            }
        ]
    ]
]);