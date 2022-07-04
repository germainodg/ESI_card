<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
    <title>ajout secretaire</title>
</head>
<body class="page">
        
    <header >
        <div  class="container">
            <div class="row">
            <div class="tra col-sm-10 rounded-pill ">
            <img src="images/nazi-boni.png" class="boboo ">
           <img src="images/esi.png" class="esii ">
           </div>
           </div>
        </div>
        </div>
    </header>

    <form action="">
    <div class="cadre col-sm-10 ">
      <div class="formulaire"><h1>Formulaire de Carte D'Etudiant</h1></div> 
           <div class="souligne1 col-sm-10"></div>
                  <div class="porte">
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"> <strong> Matricule: </strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control  rounded-pill" id="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Nom:
                            </strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control  rounded-pill" id="">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Prenom:</strong></label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control  rounded-pill" id="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Cycle :</strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control  rounded-pill" id="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Niveau d'etude:</strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control  rounded-pill" id="">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Annee academique:</strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control  rounded-pill" id="">
                        </div>
                    </div>
                 </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary rounded-pill"><strong>Valider</strong></a>
                    </div>
            </div>
    </div>
 </div>
    </form>

    

    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>