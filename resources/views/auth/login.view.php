<?php
/** @var stdClass $jiri */

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Jiris</title>
    <link rel="stylesheet"
          href="<?= public_path('css/app.css') ?>">
</head>
<body>
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="container mx-auto flex flex-col-reverse gap-6">
    <main class="flex flex-col gap-4">
        <h1 class="font-bold text-2xl">Se connecter</h1>
        <form action="/jiri"
              method="post"
              class="flex flex-col gap-6">
            <?php
            method('patch')?>
            <?php
            csrf_token() ?>
            <div class="flex flex-col gap-2">
                <?php
                component('forms.controls.label-and-input', [
                    'name' => 'name',
                    'label' => 'E-mail',
                    'type' => 'email',
                    'value' => '',
                    'placeholder' => 'xyz@gmail.com',
                ]);
                ?>
            </div>
            <div class="flex flex-col gap-2">
                <?php
                component('forms.controls.label-and-input', [
                    'name' => 'starting_at',
                    'label' => "Insérez votre mot de passe",
                    'type' => 'text',
                    'value' => '',
                    'placeholder' => 'Saisir votre mot de passe',
                ]);
                ?>
            </div>
            <div>
                <?php
                component('forms.controls.button', ['text' => 'Me connecter']);
                ?>
            </div>
        </form>
    </main>
    <?php
    component('navigations.main'); ?>
</div>
</body>
</html>