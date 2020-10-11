<?php


?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/64w/logo64.png" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>English For Reel</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="efr_custo_style.css" rel="stylesheet">
    <script type="text/javascript">

    var firstTemoignage = 0; // Id du premier temoignage à afficher (sur la gauche)
    var nbtemoignages = 0; //Nombre de Témoignages
    var temoignages; //json temoignages

    function turnTemoignages(direction){
      console.log(direction);
      if(direction == "left"){
        console.log("switch temoignages left");
        firstTemoignage = (firstTemoignage-1)%nbtemoignages
        if(firstTemoignage < 0){
          firstTemoignage = firstTemoignage + nbtemoignages;
        }

      }else if(direction == "right"){
        console.log("switch temoignages right " + nbtemoignages);
        firstTemoignage = (firstTemoignage+1)%nbtemoignages
      }

      fillTemoignages();

    }

    function fillTemoignages(){
      var note = "";
      console.log("Init temoignages " + firstTemoignage);
      document.getElementById('nom1').innerHTML = temoignages[firstTemoignage]["nom"] + " " + temoignages[firstTemoignage]["prenom"]
      document.getElementById('message1').innerHTML = temoignages[firstTemoignage]["message"]

      for(i = 0; i<temoignages[firstTemoignage]["note"]; i++){
        note = note + "<ion-icon name='star'></ion-icon>"
      }
      document.getElementById('note1').innerHTML = note
      note = ""

      document.getElementById('nom2').innerHTML = temoignages[(firstTemoignage+1)%nbtemoignages]["nom"] + " " + temoignages[(firstTemoignage+1)%nbtemoignages]["prenom"]
      document.getElementById('message2').innerHTML = temoignages[(firstTemoignage+1)%nbtemoignages]["message"]

      for(i = 0; i<temoignages[(firstTemoignage+1)%nbtemoignages]["note"]; i++){
        note = note + "<ion-icon name='star'></ion-icon>"
      }
      document.getElementById('note2').innerHTML = note
      note = ""



      document.getElementById('nom3').innerHTML = temoignages[(firstTemoignage+2)%nbtemoignages]["nom"] + " " + temoignages[(firstTemoignage+2)%nbtemoignages]["prenom"]
      document.getElementById('message3').innerHTML = temoignages[(firstTemoignage+2)%nbtemoignages]["message"]
      for(i = 0; i<temoignages[(firstTemoignage+2)%nbtemoignages]["note"]; i++){
        note = note + "<ion-icon name='star'></ion-icon>"
      }
      document.getElementById('note3').innerHTML = note
    }

      $.ajax({
         url : 'database.php', // my php file
         type : 'GET', // type of the HTTP request
         success : function(result){
            temoignages = jQuery.parseJSON(result);
            nbtemoignages = Object.keys(temoignages).length
            console.log("Il y a " + nbtemoignages + " temoignages");
            //console.log(obj);
            fillTemoignages();
         }
      });

    </script>
  </head>
  <body>
  <header>

    <nav class="site-header sticky-top py-1">

    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="Product">
        <img   src="../img/64w/logo64.png"  height="57" alt="">
      </a>
      <span>
      <!-- <a class="py-2 d-none d-md-inline-block" href="#methode_efr">Methode EFR</a>
      <a class="py-2 d-none d-md-inline-block" href="#formations">Formations</a>
      <a class="py-2 d-none d-md-inline-block" href="#financement_cpf">Financement CPF</a>
      <a class="py-2 d-none d-md-inline-block" href="#solution_b2b">Solution B2B</a>
      <a class="py-2 d-none d-md-inline-block" href="#temoignages">Témoignages</a> -->
      <a class="py-2 d-none d-md-inline-block" href="#">Accueil</a>
      <a class="py-2 d-none d-md-inline-block menu-item" href="formations.php">Formations</a>
    </span>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-1">
        <span class="opacity-block"></span>
        <div class="container">
          <div class="carousel-caption">
            <div class="carousel-block">
              <img src="../img/image001.png" height="150px" alt="">
              <h1>#YESYOUCAN!</h1>
              <span class="carousel-line"></span>
              <p class="slogan">Maitriser l'Anglais, le vrai !</p>
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item carousel-2">
        <span class="opacity-block"></span>
        <div class="container">
          <div class="carousel-caption">

            <div class="carousel-block">
              <h1>Changer vos croyances. Boostez vos conditions</h1>
              <span class="carousel-line"></span>
              <p class="slogan">Découvrez nos solutions B2B</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item carousel-3">
        <span class="opacity-block"></span>
        <div class="container">
          <div class="carousel-caption">

            <div class="carousel-block">
              <h1>Formation accéssible via le CPF</h1>
              <span class="carousel-line"></span>
              <p>Nous vous accompagnons dans vos démarches de A à Z.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="section-blanc">


    <div class="methode_efr" id="methode_efr">
      <h1 class="section-title">La méthode EFR</h1>
      <span class="title-line"></span>
      <div class="row section-row">

        <div class="col-md-8 col-sm-12 methode-efr-text">
          <table style="height: 100%;">
            <tbody>
              <tr>
                <td class="align-middle">
                  <p>L’accent British ou américain vous fait rêver. Take the Next step*! <br/>La méthode EFR vous en donne les moyens.</p>
                  <ul>
                    <li>Travailler votre oreille</li>
                    <li>Ameliorer la prononciation & la justesse de la langue</li>
                    <li>Decouvrir & comprendre les accents hors US & UK</li>
                    <li>Des masterclass pour comprendre les cultures Anglo-saxonnes</li>
                    <li>Des coachings sur mesure</li>
                  </ul>

                  <p>Vous aider à comprendre l’anglais de la vraie vie c’est la mission qu’English For Real s’est fixée.
                  Car même si les traducteurs automatiques font un excellent travail ils ne réussissent pas à fluidifier l’échange.
                  En début de formation des Mindset Presessions pour recabler son cerveau en quelque sorte. Pour gagner en
                  confiance en soi.
                  Après votre parcours de formation vous vous sentirez à l’aise en toute situation
                  Enfin on élimine la barrière du vouvoiement, coach et coachés se tutoient pour créer une dynamique de
                  sympathie.
                  La méthode EFR amène la langue vers vous pour que vous ne soyez plus obligé(e)s d’aller vers elle à tâtons !
                  Félicitations vous êtes au bon endroit pour apprendre l’anglais
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="col-md-4 col-sm-12 methode-efr-img">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img1.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Média sociaux</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img2.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Ecoute</div>
              </div>
            </div>
          </div>

        </div>
        <span class="space30"></span>
        <div class="row ">
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img3.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Voyages</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img4.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Travail</div>
              </div>
            </div>
          </div>
        </div>
        <span class="space30"></span>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img5.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Personnel</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-6 methode_efr_img_container">
            <img class="methode_efr_img" src="../img/img1.jpg" alt="">
            <div class="methode_efr_img_overlay">
              <div class="methode_efr_img_overlay_inner">
                <div class="methode_efr_img_overlay_text">Professionnel</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="section-gris">


    <div class="formations" id="formations">
      <h1 class="section-title">Nos Formations</h1>
      <span class="title-line"></span>
      <div class="row section-row justify-content-center">
        <div class="col-lg-3 col-sm-6 mt-4">
          <div class="formation-card">
              <svg class="formation-icon" xmlns="http://www.w3.org/2000/svg" width="65.833" height="79" viewBox="0 0 65.833 79">
                <g id="Groupe_19" data-name="Groupe 19" transform="translate(-162 -45.333)">
                  <path id="Tracé_201" data-name="Tracé 201" d="M227.833,124.333H171.875A9.874,9.874,0,0,1,162,114.458V55.208a9.874,9.874,0,0,1,9.875-9.875h55.958Zm-6.583-13.167H173.5a3.293,3.293,0,1,0,0,6.583H221.25Zm-9.875-49.375H178.458v9.875h32.917Z" fill="#040506" fill-rule="evenodd"/>
                </g>
              </svg>

              <h2 class="formation-card-title">Anglais générale</h2>
              <p class="formation-text">
                Parcours Everyday life English<br/>
                Cours particuliers ou en mini groupe<br/>
                Parcours Expression Orale & Conversation<br/>
                Compréhension
              </p>
              <a class="btn formation-btn"  href="./formations.php"  role="button"><span>Voir plus &raquo;</span></a>
            </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-3  col-sm-6 mt-4">
          <div class="formation-card">
            <svg class="formation-icon" width="179" height="79" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
              <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg>

              <h2 class="formation-card-title">Anglais Professionel</h2>
              <p class="formation-text">
                Rédaction, CV, cover letter & interview <br/>
                Email Pro for business <br/>
                Préparation (DCL, TOEIC..) <br/>
                Phonétique, prononciation, compréhension
              </p>
              <a class="btn formation-btn"  href="./formations.php"  role="button"><span>Voir plus &raquo;</span></a>
            </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-3  col-sm-6 mt-4">
          <div class="formation-card">
              <svg class="formation-icon" xmlns="http://www.w3.org/2000/svg" width="65.833" height="79" viewBox="0 0 65.833 79">
                <g id="Groupe_19" data-name="Groupe 19" transform="translate(-162 -45.333)">
                  <path id="Tracé_201" data-name="Tracé 201" d="M227.833,124.333H171.875A9.874,9.874,0,0,1,162,114.458V55.208a9.874,9.874,0,0,1,9.875-9.875h55.958Zm-6.583-13.167H173.5a3.293,3.293,0,1,0,0,6.583H221.25Zm-9.875-49.375H178.458v9.875h32.917Z" fill="#040506" fill-rule="evenodd"/>
                </g>
              </svg>

              <h2 class="formation-card-title">Anglais Académic</h2>
              <p class="formation-text">
                Préparation Oraux, concours … <br/>
                Préparation TOELF, TOEIC … <br/>
                Phonétique, prononciation, compréhension
              </p>
              <a class="btn formation-btn"  href="./formations.php"  role="button"><span>Voir plus &raquo;</span></a>
            </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-3  col-sm-6 mt-4">
          <div class="formation-card">
            <svg class="formation-icon" width="79" height="79" viewBox="0 0 16 16" class="bi bi-trophy-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
            </svg>

              <h2 class="formation-card-title">30 days challenge</h2>
              <p class="formation-text">
                Grammar Focus <br/>
                Phonetics Focus <br/>
                Pronunciation & Listening Focus

              </p>
              <a class="btn formation-btn"  href="./formations.php"  role="button"><span>Voir plus &raquo;</span></a>
            </div>
        </div><!-- /.col-lg-4 -->
      </div>
    </div>
  </div>

  <div class="section-blanc">


    <div class="financement_cpf" id="financement_cpf">
      <h1 class="section-title">Financement CPF</h1>
      <span class="title-line"></span>
      <div class="row section-row">
        <div class="col-md-4 col-sm-12">
          <img src="../img/cpf.png" class="financement_cpf_img" alt="">
        </div>
        <div class="col-md-8 col-sm-12 financement_cpf-text">
          <table style="height: 100%;">
            <tbody>
              <tr>
                <td class="align-middle">
                  <p><b>Qu’est-ce que le CPF ?</b><br/>
                  Le Compte Personnel de Formation est un dispositif mis en place par l’Etat pour donner aux jeunes, aux
                  demandeurs d’emploi et aux salariés du privé et du public la possibilité de se former.<br/>
                  La démarche est simplifiée et il ne vous reste plus qu’à vous connecter sur le site Mon Compte Formation, à
                  choisir votre formation et à procéder à votre demande de financement. <br/><br/>
                  <b>Formations d'anglais éligibles au CPF</b><br/>
                  Passer un examen de langue reconnu qui atteste de vos compétences en anglais devient un prérequis. Une
                  certification en langue telle que le TOEIC, TOEFL, IELTS ou encore le BULATS Linguaskill constitue un atout
                  certain sur un CV et peut être financé par le CPF, vous permettant de mieux vous positionner sur le marché de
                  l’emploi.Vous pouvez donc financer une formation d'anglais en plus du test d'anglais éligible avec le Compte
                  Personnel de Formation. <br/><br/>
                  Pour les formations suivies en dehors du temps de travail, il n’est plus nécessaire à présent d’obtenir l’aval de
                  l’employeur. <br/>
                  Avec la nouvelle application "Mon Compte Formation il devient plus simple de faire une demande de formation
                  en Anglais CPF.Nos consultants sont là pour vous aider dans vos démarches. </p>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
    </div>
  </div>
  <div class="section-gris">

    <div class="solution_b2b" id="solution_b2b">
      <h1 class="section-title">Solution B2B</h1>
      <span class="title-line"></span>
      <div class="row section-row">
        <div class="col-md-8 col-sm-12 financement_cpf-text">
          <table style="height: 100%;">
            <tbody>
              <tr>
                <td class="align-middle">
                  <p>Changez vos croyances (sur l’anglais), boostez vos ambitions !
                  Imaginez le temps gagner a ne plus prendre les transports ; utilisez le pour vous ouvrir des opportunités de
                  carrières <br/><br/>
                  <b>AVANTAGES CONCURRENTIELS / B2B</b>
                  <ul>
                   <li>Vous parlez dès le début, une utilisation immédiate, effective à partir du premier cours</li>
                   <li>L’engagement d’amener vos salariés à atteindre leurs objectifs dans le temps imparti.
                  </li>
                   <li>Vos salariés n’auront plus le sentiment d’avoir perdu leur temps pendant leur cours d’anglais !
                  </li>
                   <li>Vous êtes en permanence accompagné(e)s par un coach. Plus de dissociation entre la pratique orale et la théorie grammaticale, ce sont vos erreurs qui servent à l’enseignement « grammar spotlight » pendant le training.
                  </li>
                   <li>L’engagement d’amener vos salariés à atteindre leurs objectifs dans le temps imparti.
                  </li>
                   <li>Le Blended learning oui mais vous ne payez que pour la partie dans laquelle le coach est à vos côtés (trouver un terme comme les genius d’Apple)
                  </li>
                  <li>Des Masterclass en fin des formations longues
                   </li>
                   <li>Faites gagner votre entreprise en compétitivité à l’international grâce à des salariés qui maitrisent l’anglais et qui ont confiance en eux !</ul> </p>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="../img/B2B.png" class="financement_cpf_img" alt="">
      </div>
    </div>
    </div>
  </div>

  <div class="section-blanc">

    <div class="temoignages" id="temoignages">
      <h1 class="section-title">Nos Témoignages</h1>
      <span class="title-line"></span>
      <div class="row section-row temoignage-space">
        <div class="col-md-1 col-xl-2 col-sm-0 temoignage-side-pane-container">
          <div class="temoignage-left-pane" onclick="turnTemoignages('left')">

          </div>
        </div>
        <div class="col-md-10 col-xl-8 col-sm-12 col-12 row temoignage-all-cards">
          <div class="d-none d-sm-block col-md-4 col-sm-4   temoignage-card-space">
            <div class="thumbnail temoignage-card-side">
              <img src="../img/photo3.png" class="temoignage-card-img" alt="...">
              <div class="caption">
                <h3 id="nom1" class="temoignage-card-name">
                  Wayne Karen
                </h3>
                <span id="note1" class="temoignage-card-star">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                </span>
                <p id="message1" class="temoignage-card-text">
                  J'ai réussis mon entretien d'embauche dans une boite à Londres grâce au programme Professionnel. Merci !
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 col-sm-4 temoignage-card-space">
            <div class="thumbnail temoignage-card-center">
              <img src="../img/photo1.jpg" class="temoignage-card-img" alt="...">
              <div class="caption">
                <h3 id="nom2" class="temoignage-card-name">Ribbey Paul

                </h3>
                <span id="note2" class="temoignage-card-star">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                </span>
                <p id="message2" class="temoignage-card-text">
                  Merci à EFR, le contenu des cours est de qualité. Attention toutefois à la qualité vidéo qui gène de temps en temps la compréhension.
                </p>
              </div>
            </div>
          </div>
          <div class="col-0 col-md-4 col-sm-4 temoignage-card-space">
            <div class="d-none d-sm-block thumbnail temoignage-card-side">
              <img src="../img/photo2.jpg" class="temoignage-card-img" alt="...">
              <div class="caption">
                <h3  id="nom3" class="temoignage-card-name">Stessy Garnier</h3>
                <span id="note3" class="temoignage-card-star">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                </span>
                <p id="message3" class="temoignage-card-text">
                  Merci à toute l'équipe d'EFR. Grace à vos enseignements j'ai réussis mon TOEIC du premier coup avec 900/1000 ! Je recommande grandement :)
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-1 col-xl-2 col-sm-0 temoignage-side-pane-container">
          <div class="temoignage-right-pane" onclick="turnTemoignages('right')">

          </div>
        </div>
      </div>
      <div class="d-block d-sm-block d-md-none temoignage-points">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <circle cx="8" cy="8" r="8"/>
        </svg>
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        </svg>
      </div>



    </div>
  </div>

  <div class="section-gris">

    <div class="about" id="about">
      <h1 class="section-title">A propos</h1>
      <span class="title-line"></span>
      <div class="row section-row">
        <div class="col-md-4 col-sm-12 about-text">
          <p class="about-text">
            Qui n’a jamais chante une chanson en anglais sans
            comprendre les paroles?! <br/><br/>
            Prenez l’exemple de queen boheamian rhapsody , « Mama,
            ooh oohh I don't want to die I sometimes wish I'd never
            been born at all » devient « mama ooh oohh ei dowana die I
            sometime wish id never bin bon atool ». <br/>
            Alors qui se sent capable de chanter la suite, on aimerait
            tous chanter plus que le refrain pas vrai ? <br/><br/>
            Comme souvent au début on ne fait qu’entendre, ensuite
            on cherche naturellement a repeter et puis on veux
            comprendre. la curiosité grandi, les voyages l’a nourrissent.
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p class="about-text">
            Avant la creation d’EFR, Il y a eu sur la route de sa
            fondatrice l’ISIT (Institut Supérieur d’Interprétariat et
            Traduction), un Master LLCE anglais de la Sorbonne et un
            Master européen en Médiation culturelle. Traductrice et
            interprète de son premier métier, Fanny Balongeandy a
            notamment effectué des missions pour le Senat et
            l’ambassade du Mexique. <br/><br/>
            Comprendre la manière dont les langues fonctionnent est
            une passion pour les intervenants d’EFR. L’échange,
            l’interaction avec l’autre, la communication c'est aussi la
            capacité à capter l’attention de notre auditoire. <br/><br/>
            Les coachs EFR vous observent avec curiosité,
            attentivement, pour etre mieux en mesure de vous
            accompagner.
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
          <p class="about-text">
            Chez EFR nous aidons tous types de public,
            accompagnons des administrations, des chefs
            d’entreprises, des salariés de différents secteurs du privé,
            des étudiants, des personnes entrant ou revenant à
            l’emploi. <br/><br/>
            Transmettre est notre credo, pour donner aux personnes
            que nous formons l’envie d’apprendre.
            Discerner l’humain derrière l’apprenant. <br/><br/>
            Nous aimons les langues mais surtout nous aimons
            l’échange avec les personnes auxquelles nous les
            enseignons.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-blanc section-maps">


    <div class="contact" id="contact">
      <h1 class="section-title">Contact</h1>
      <span class="title-line"></span>
      <div class="row section-row">
        <div class="col-md-4 col-sm-12">
          <div class="contact-info-efr">
            <h1>English For Real</h1>
            <p>
              <ion-icon name="home"></ion-icon> 2 Esp Charle de Gaulle, 33300 Bordeaux <br/>
              <ion-icon name="mail"></ion-icon> contact@englishforreal.com <br/>
              <ion-icon name="call"></ion-icon> +33 5 78 90 32 56 <br/>
              <ion-icon name="globe"></ion-icon> www.englishforreal.com

            </p>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 financement_cpf-text">
          <table style="height: 100%; width:100%">
            <tbody>
              <tr>
                <td class="align-middle">
                  <form class="" action="#" method="post">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputNom" placeholder="Nom">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputAddress" placeholder="Mail">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputNumero" placeholder="Numéro (+33)">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Votre message ...</textarea>

                    </div>


                    <button type="submit" class="btn-contact btn btn-primary">Envoyer</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="section-end">
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2020 EnglishForReal, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </div>
</main>
<script src="../assets/dist/js/jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>





      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anglais général</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>Parcours Everyday life English</h3>
              <ul>
                <li>Small Talks</li>
                <li>Engage conversation</li>
                <li>Book your holidays, hotel etc</li>
                <li>Vous débrouiller seul(e) en voyage</li>
              </ul>


              <h3>Cours particuliers ou en mini groupe</h3>
              <ul>
                <li>Book your holidays, hotel etc</li>
                <li>Small Talks</li>
              </ul>

              <h3>Parcours Expression Orale & Conversation</h3>
              <ul>
                <li>Savoir s’exprimer sur un theme d’actualité</li>
                <li>Small Talks</li>
              </ul>

              <h3>Compréhension</h3>
              <ul>
                <li>....</li>
                <li>..............</li>
              </ul>


            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>


          </div>
        </div>
      </div>
    </body>
</html>
