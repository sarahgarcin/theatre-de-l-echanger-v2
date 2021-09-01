<?php

use Uniform\Form;

return function ($kirby) {
   $form = new Form([
      'nom' => [
         'rules' => ['required'],
         'message' => '* Votre nom est requis',
      ],
      'prenom' => [
         'rules' => ['required'],
         'message' => '* Votre prénom est requis',
      ],
      'email' => [
         'rules' => ['required', 'email'],
         'message' => '* Votre email est requis',
      ],
      'brochure' => [],
      'adresse' => [],
      'profession' => [],
   ]);

   if ($kirby->request()->is('POST')) {
      $form->emailAction([
         'to' => 'info@lechangeur.org',
         'from' => 'fanny.h@lechangeur.org',
      ]);
   }

   return compact('form');
};