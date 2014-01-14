<?php

$date = strtotime( 'now' );

if ( wp_checkdate( $date ) ) {

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
