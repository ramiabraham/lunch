<?php

if ( wp_checkdate( 12, 31, 2013 ) ) {

$choices = array(
    __('chinese'),
    __('italian'),
    __('subs'),
    __('starbucks'),
    __('some-sorta-sandwich'),
    __('caffeine'),
);

$lunch = $choices[array_rand( $choices )];

}
