<?php 
/**
Template Name: Frontpage
*/

get_header();

get_template_part('template-parts/sections/section','slider');
get_template_part('template-parts/sections/section','ourrooms');
get_template_part('template-parts/sections/section','contactus');
get_template_part('template-parts/sections/section','blog');

get_footer(); ?>