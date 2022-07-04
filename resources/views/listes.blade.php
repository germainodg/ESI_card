<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
    <title>Liste des etudiants</title>
</head>
<body class="page">
        
    <header >
        <div  class="container">
            <div class="row">
            <div class="tra1 col-sm-10  ">
            <img src="images/nazi-boni.png" class="boboo ">
           <img src="images/esi.png" class="esii ">
           </div>
           </div>
        </div>
        </div>
    </header>

    <form action="">
    <div class="cadre col-sm-10 ">
      <div class="formulaire"><h1>Listes des Etudiants </h1></div> 
           <div class="souligne1 col-sm-10"></div>
           <div class="d-flex justify-content-end mb-4">
           <a href="{{route('formulaire')}}" class="btn btn-primary">AJOUTER un nouvel etudiant</a>
           </div>
          <table class="table grand">
          
            <thead>
              
           
              <tr>
                
                <th class="bien col-2">Matricules</th>
                <th class="bien col-2">Nom</th>
                <th class="bien col-2">Prenom(s) </th>
                <th class="bien col-2">Cycle</th>
                <th class="bien col-2">Niveau D'etude</th>
                <th class="bien col-3">Annee </th>
                <th class="bien col-3">Options</th>
              </tr>
            </thead>

            <tbody>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th> <a href="" class="btn btn-info">Editer</a>
            <a href="" class="btn btn-danger">Supprimer</a> </th>
            </tbody>

          </table>


     </form>

    
    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
