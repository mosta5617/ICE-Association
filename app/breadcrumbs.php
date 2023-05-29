<?php

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('next', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('next'));
});

// Home > About
