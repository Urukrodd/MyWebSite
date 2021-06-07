@extends('base')

@section('content')
    <div class="projets sm:max-w-7xl w-full flex flex-col justify-center items-center flex-wrap">

        <h2 class="text-7xl">Me contacter</h2>
        <div class="mt-6 p-6 sm:w-2/3 w-11/12 rounded-2xl flex flex-row flex-col justify-center items-center shadow divide-y-2">
            <div class="w-full flex flex-wrap justify-around items-center">
                <a href="https://www.linkedin.com/in/maxime-bernard-pro/"><i class="fab fa-linkedin text-7xl m-4"></i></a>
                <a href="https://twitter.com/maxime_bern"><i class="fab fa-twitter text-7xl m-4"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100007572497616"><i class="fab fa-facebook text-7xl m-4"></i></a>
            </div>
            <div class="w-full mx-4 sm:mx-24 mx-20 flex flex-col justify-around items-center">
                <form action="" class="formContact w-full m-4 flex flex-col items-center">
                    <h2 class="text-4xl">Par email</h2>
                    <input type="email" name="mail" class="p-1 m-2 w-full bg-gray-100 rounded" placeholder="Email ...">
                    <input type="text" name="subject" class="p-1 m-2 w-full bg-gray-100 rounded" placeholder="Sujet ...">
                    <textarea name="msg" class="p-1 m-2 w-full bg-gray-100 rounded" id="content" cols="30" rows="10" placeholder="Votre message ..."></textarea>
                    <div class="successMessage p-2 border-green-400 border-solid border-2 rounded-md hidden">
                        <p>Votre message a bien été envoyé !</p>
                    </div>
                    <div class="errorMessage p-2 border-red-400 border-solid border-2 rounded-md hidden">
                        <p>Une erreur s'est produite. Vous pouvez me contacter a l'adresse suivante: maxime.bernard13.pro@gmail.com</p>
                    </div>

                    <input type="submit" value="Envoyer" class="sendMailContact mt-3 p-4 rounded-md">
                </form>
            </div>
        </div>

    </div>
@stop
