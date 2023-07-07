<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="icon" href="{{ asset("ariane.ico") }}">
</head>
<body>
    <main class="page">
        <div class="section-left ">
            <div class="desc" >
                <h1>ARIANE  HOUEHO</h1>
                <h2 class="text">Graphic Designer</h2>
            </div>

            <div>
                <p><i class="fa-solid fa-phone"></i>+229 54 005 970</p>
                <p><i class="fa-solid fa-house"></i>Cotonou, Ahogbohouè</p>
                <p><i class="fa-solid fa-envelope"></i>arianehoueho@gmail.com</p>
            </div>

            <h4>EDUCATION</h4>
            <div class="education">
                <div class="text"><b>2022-2023</b></div>
                <div class="text"> <b> Ecole Nationale d'Economie Appliquée et de Management </b></div>
                <div class="text">Licence 2 en Informatique de Gestion option Administration <br> des Réseaux Informatiques</div>
                <div class="text"><b>2022</b></div>
                <div class="text"><strong >AV Design</strong></div>
                <div class="text"> Formation en graphisme </div>
                <div class="text"><b>2021 </b></div>
                <div class="text"><strong>Collège d'Enseignement Général Davié</strong></div>
                <div class="text">  Baccalauréat série D</div>
            </div>
            <h4>SKILLS</h4>
            <div class="po">
               <p class="px"> Photoshop,Canva,Illustrator </p>
               <div class="progressbar-wrapper">
                <div class="progressbar page1"></div>
               </div>

                <p class="px"> HTML, CSS, PHP </p>
                <div class="progressbar-wrapper">
                    <div class="progressbar page2"></div>
                   </div>

                <p class="px">Javascript </p>
                <div class="progressbar-wrapper">
                    <div class="progressbar page3"></div>
                   </div>

                <p class="px">  Bootstrap  </p>
                <div class="progressbar-wrapper">
                    <div class="progressbar page4"></div>
                </div>

            </div>
        </div>
         <div style="display: flex;flex-flow: column nowrap; justify-content: space-evenly;">
            <div class="dot">&#8226;</div>
            <div class="dot">&#8226;</div>
            <div class="dot">&#8226;</div>
         </div>
        <div class="section-right">
            <div class="photo">
                <img  src="{{ asset("image/ariane.png") }}" alt=""  class="img">
            </div><br><br><br>
            <div class="text">
                    <p class="text">Titulaire d'un baccalauréat  série D,je fais du
                         design graphique.  Je réalise des sites web.
                          Respectueuse, j'aime le travail en équipe.</p>
            </div>

            <h4>LANGUE</h4>
            <div class="langue">
                <div class="po">
                    <p><span class="dot">&#8226;</span>Français</p>
                </div>
                <div class="po">
                    <p><span class="dot">&#8226;</span>Anglais</p>

                </div>
                <div class="po">
                    <p><span class="dot">&#8226;</span>Fon</p>
                </div>
                <div class="po">
                    <p><span class="dot">&#8226;</span>Mina</p>
                </div>
                <div class="po">
                    <p><span class="dot">&#8226;</span>Pédah</p>
                </div>
            </div>

        </div>
        <div>
            <div class="rectangle"></div>
        </div>

    </main>
</body>
</html>
