require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all');

import $ from 'jquery';
window.$ = window.jQuery = $;

(function () {
    "use strict";
    $(() => {

        $('.formContact').submit(() => {
           $.ajax({
               method: 'GET',
               url: '/ajax/sendMail',
               data: $('.formContact').serialize()
           }).done((data) => {
               data = JSON.parse(data);
               if (data.success) {
                   $('.successMessage').removeClass('hidden');
                   $('.errorMessage').addClass('hidden');
               } else {
                   $('.successMessage').addClass('hidden');
                   $('.errorMessage').removeClass('hidden');
               }
           }).fail((e) => {
               console.log(e);
               $('.successMessage').addClass('hidden');
               $('.errorMessage').removeClass('hidden');
           });
           return false;
        });

    });
}) ();

