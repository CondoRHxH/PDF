@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <style>
    /* CSS for italic text */
    .line {
      height: 5px; /* Adjust height as needed */
      width: 85%;
      background-color: black; /* Set the background color to create the line effect */
      margin: 0 auto; /* Center the div horizontally */
    }
    .line2 {
      height: 5px; /* Adjust height as needed */
      width: 100%;
      background-color: black; /* Set the background color to create the line effect */
      margin: 0 auto; /* Center the div horizontally */
    }
    .tall-table {
      height: 100px; /* Adjust the height as needed */
      overflow-y: auto; /* Add scrollbar if content exceeds height */
    }
    .tall-table th,
    .tall-table td {
      border: 1px solid #dee2e6;
      padding: 8px;
    }

    /* Add borders to table rows */
    .tall-table tbody tr {
      border-bottom: 1px solid #dee2e6;
    }
    .very-italic {
        font-style: italic; /* Make text very italic */
        float: left; /* Float a little bit to the right */
        margin-left: 60px;
    }
    @media (max-width: 768px) {
      /* Adjust the margin-left for smaller screens */
      .very-italic {
        margin-left: 0;
        margin-top: 10px; /* Add some space on the top for smaller screens */
        float: none; /* Remove float for smaller screens */
        text-align: right; /* Align text to the right for smaller screens */
      }
    }
    .bigger-checkbox input[type="checkbox"] {
      transform: scale(2.5); /* Increase the size of the checkbox */
    }
    .custom-checkbox-container {
    float: left; /* Float the container to the right */
    margin-left: 250px; /* Add some space between checkbox and text */
    }
    .custom-checkbox-container .form-check-label {
    transform: scale(1.5); /* Scale the checkbox */
    margin-bottom: 0; /* Remove default bottom margin */
    display: inline-block; /* Ensure checkbox and text are inline */
  }
  .centered-span {
    display: flex;
    justify-content: left;
    /* margin-top: 10px; Add some space on top */
    font-weight: bold;
  }
  textarea {
    resize: none;
  }
  .dot-background {
    line-height: 20px; /* Adjust line height as needed */
    padding: 5px; /* Add padding for spacing */
    border: 4px solid black; /* Add thick border */
    
  }
  .underline {
    text-decoration: underline;
  }
  .custom-div1 {
  
    padding: 20px;
    
  }
  .custom-div2 {
    padding: 20px;
    text-align: center; /* Center the content inside the div */
  }
  .custom-div3 {

    padding: 20px;
    text-align: center; /* Center the content inside the div */
  }
  .custom-padding{
    padding-top: 130px;
  }
  .dot-background2 {
    line-height: 20px; /* Adjust line height as needed */
    padding: 5px; /* Add padding for spacing */
    border: 4px solid black; /* Add thick border */
    height:60px;
  }
  .custom-div4{
    text-align: right;
  }
  .underline2{
    text-decoration: underline;
    font-style:italic;
  }
  .premeier{
    font-weight: bold;
  }
  .champecrit{
    width:100%;
    border: 1px solid #ccc; /* Set border color to light gray */
    border-radius: 5px;
  }
  .champecrit2{
    width:60%;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .input-tableau{
    width:100%;
  }
  </style>
</head>
<body>
  
    <!-- Nav -->

    <h5 class="text-center">Universite Mohammed V</h5>
    <h5 class="text-center">L'Ecole Nationale de Commerce et de Gestion</h5>
    <h5 class="text-center">Oujda</h5>
    <div class="line"></div>

    <h5 class="text-center  underline">P.V. Individuel de rectification des notes</h5>
    <!-- 1PremierSection -->

    
    <div class="container">
      <div class="row">
        <div class="col-3 mt-3">
          <h5 class="">Je sousigne, Professeur</h5>
        </div>
        <div class="col-9 mt-3">
          <input type="text" class="champecrit" value='{{$invoice->customer_name}}'>
        </div>
        <div class="row">
          <div class="col-4 mt-3">
          <h5 class="">Avoir examine la reclamation de l'etudiant</h5>
          </div>
          <div class="col-8 mt-3">
            <input type="text" class="champecrit">
          </div>
      </div>


        

        <div class="row">
            <div class="col-2">
                <h5 class="mt-3">Inscrit au semestre </h5>
            </div>
            <div class="col-2 mt-3" >
              <input type="text" class="champecrit">
            </div>
            <div class="col-2">
                <h5 class="mt-3">l'anne universitaire </h5>
            </div>
            <div class="col-1 mt-3" >
              <input type="text" class="champecrit">
            </div>
            <div class="col-3">
                <h5 class="mt-3">Sous le N° d'inscription </h5>
            </div>
            <div class="col-2 mt-3" >
              <input type="text" class="champecrit">
            </div>
        </div>
        
        <div class="row">
          <div class="col-4" >
            <h5 class="mt-3">Concernant l'element du module</h5>
          </div>
          <div class="col-8 mt-3" >
            <input type="text" class="champecrit">
          </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <!-- Text with h5 and mt-3 class -->
                <div class="mt-3">
                    <h5>Dont la note est :</h5>
                </div>
            </div>
            <div class="col-5">
            <!-- Table -->
                <table class="table tall-table">
                    <thead>
                        <tr>
                            <th scope="col">Note Controle Continue</th>
                            <th scope="col">Note Examen</th>
                            <th scope="col">Note Finale</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="champecrit2"></td>
                            <td><input type="text" class="champecrit2"></td>
                            <td><input type="text" class="champecrit2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- 2DeuxiemeSection -->
    <div class="container">
        <h6 class="mt-3 very-italic">Et apres verification, je demande de :</h6>
    </div><br>

    <div class="container mt-5">
        <h5>1- Maintenir la note</h5>
        <div class="row">
            <div class="col">
                <div class="custom-checkbox-container">
                    <div class="form-check">
                        <label class="bigger-checkbox">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        
        <div class="row">
            <div class="col-4">
                <h5>1- Changer la note</h5>
            </div>
            <div class="col">
                <span class="centered-span">, Nouvelle Note :</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="custom-checkbox-container">
                    <div class="form-check">
                        <label class="bigger-checkbox">
                            <input type="checkbox">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
      <div class="table-container">
        <table class="table tall-table">
          <thead>
            <tr>
              <th>Note Controle Continu</th>
              <th>Note Examen</th>
              <th>Note Final</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="champecrit2"></td>
              <td><input type="text" class="champecrit2"></td>
              <td><input type="text" class="champecrit2"></td>
            </tr>
            <!-- Additional rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
        </div>
    </div>

    <!-- 3TroisiemeSection -->
      <div class="container">
        <h5>Motif du Changement</h5>
          <fieldset>
            <div class="form-group">
              
              <textarea class="form-control dot-background" id="exampleTextarea" rows="8" textholder=".........."></textarea>
            </div>
          </fieldset>
      </div>
    <!-- 4QuatriemeSection -->
    <div class="container">
      <div class="row">
        <div class="col-3 mt-3">
        <h4 class="underline">Fait a Oujda, Le :</h4>
        </div>
        <div class="col-9 mt-3">
          <input type="text" class="champecrit">
        </div>
      </div>
      
    </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col-3 custom-div1">
        <h5 class="underline">Avis de l'administration : </h5>
      </div>
      <div class="col-6 custom-div2">
        <h5 class="underline">Avis du Departement :</h5>
      </div>
      <div class="col-3 custom-div3">
        <h5 class="underline">Signature de l'Enseignant :</h5>
      </div>
    </div>
  </div>

        <div class="container mt-5 custom-padding mb-5">
            <div class="form-group dot-background2">
              <div class="row">
                <div class="col-3 mb-4">
                  <h5 class="underline2">Changement effectue par : </h5>
                </div>
                <div class="col-5 ">
                  <input type="text" class="champecrit">
                </div>
                <div class="col-2 custom-div4">
                  <h5 class="underline2">le : </h5>
                </div>
                <div class="col-2 custom-div4">
                <input type="text" class="champecrit form-control">
                </div> 
              </div>      
            </div>
        </div>
<div class="line2"></div>
  <h6 class="text-center premeier">Ecole Nationale de Commerce et de Gestion d'Oujda</h6>
  <h6 class="text-center">Complexe universitaire BP 650- Oujda principale 60000</h6>
  <h6 class="text-center">Tel : 0536506983/85/89| Fax: 0536506984</h6>
  <h6 class="text-center">E-mail: <span class="underline">admineencgo@gmail.com</span> Site: http://encgo.ump.ma/</h6>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="{{ route('invoice.print', $invoice->id) }}" class="btn btn-primary btn-sm ml-auto"><i class="fa fa-print"></i> {{ ('print') }}</a>
                            
                            <a href="{{ route('generate.pdf', ['id' => $invoice->id]) }}" class="btn btn-primary btn-sm ml-auto">Generate PDF</a>
                            

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>

@endsection