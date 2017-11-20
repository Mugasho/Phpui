<?php

require_once 'vendor/autoload.php';

$doc = PhpUI\Html::body(function ($body) {
    // $body->h1('Hello World')->id('heading')->class('h1');
    $body->form(function ($form) {
        $form->input->class('text');
        $form->input->class('fuck');
        $form->div(function ($div) {
            $div->label->for('html');
            $div->input->class('form-control');
        })->class('form-group');
    })->class('form-class');
});

$doc->load();
