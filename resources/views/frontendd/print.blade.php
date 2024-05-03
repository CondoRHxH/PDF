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
    @media print {
  /* Reset default styles */
  body {
    margin: 0;
    padding: 0;
  }
  .line {
        display: block !important;
    }

  /* Adjust layout */
  .content {
    width: 70%;
    margin: 0 auto;
    font-size: 12pt; /* Adjust font size for readability */
  }

  /* Hide unnecessary elements */
  .navigation, .footer {
    display: none;
  }

  /* Optimize images */
  img {
    max-width: 100%; /* Make sure images don't overflow */
    height: auto;
  }
}
.line {
    display: block!important; /* Ensure the div is displayed */
    height: 5px; /* Adjust height as needed */
    width: 100%;
    background-color: black !important; /* Set the background color to create the line effect */
    margin: 0 auto; /* Center the div horizontally */
    border-bottom: 5px solid black;
    margin-bottom: 5px;
}
    .line2 {
      height: 10px; /* Adjust height as needed */
      width: 100%;
      background-color: black; /* Set the background color to create the line effect */
      margin: 0 auto; /* Center the div horizontally */
      border-bottom: 5px solid black;
    margin-bottom: 5px;
    margin-top : 10px
    }
    .tall-table {
      height: 20px; /* Adjust the height as needed */
      overflow-y: auto; /* Add scrollbar if content exceeds height */
    }
    .tall-table th,
    .tall-table td {
      border: 1px solid #dee2e6;
      font-size:9px;
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
      /* transform: scale(2.5); */
    }
    .custom-checkbox-container {
    /* float: left;  */
    margin-left: 210px; 
    }
    .custom-checkbox-container .form-check-label {
    /* transform: scale(1.5); 
    margin-bottom: 0; 
    display: inline-block;  */
  }
  .centered-span {
    /* display: flex; */
    
    /* margin-top: 10px; Add some space on top */
    
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
  /* .custom-padding{
    padding-top: 130px;
  } */
  .dot-background2 {
    line-height: 20px; /* Adjust line height as needed */
    padding: 5px; /* Add padding for spacing */
    border: 4px solid black; /* Add thick border */
    height:45px;
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
    border: 1px solid white; /* Set border color to light gray */
    border-radius: 5px;
  }
  .champecrit2{
    width:60%;
    border: 1px solid white; /* Set border color to light gray */
    border-radius: 5px;
    line-height: 1.1;
  }
  .input-tableau{
    width:100%;
  }
  h6{
    font-size:12px;
  }
  .only{
    text-align: center;
  }
  /* CSS */
.line-spacing {
    line-height: 0.7; /* Adjust the value as needed */
}
.line-spacing2 {
    line-height: 1.2; /* Adjust the value as needed */
}
.champecri3{
  height:20px;
  border: 1px solid white;
}

  </style>
</head>
<body>
  
    <!-- Nav -->

    <h5 class="text-center line-spacing">Universite Mohammed V</h5>
    <h5 class="text-center line-spacing">L'Ecole Nationale de Commerce et de Gestion</h5>
    <h5 class="text-center line-spacing">Oujda</h5>
    <div class="line"><h1></h1></div>

    <h4 class="text-center underline mt-4 mb-3">P.V. Individuel de rectification des notes</h4>
    <!-- 1PremierSection -->

    
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h6 class="mt-2">Je sousigne, Professeur</h6>
        </div>
        <div class="col-8">
        
          <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
        </div>
        <div class="row">
          <div class="col-7">
          <h6 class="mt-2">Avoir examine la reclamation de l'etudiant</h6>
          </div>
          <div class="col-5">
            <input type="text" class="champecrit" value="{{$invoice->customer_email}}">
          </div>
      </div>


        

        <div class="row">
            <div class="col-2">
                <h6 class="mt-2">Inscrit au semestre </h6>
            </div>
            <div class="col-2 mt-2" >
              <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
            </div>
            <div class="col-2">
                <h6 class="mt-2">l'anne universitaire </h6>
            </div>
            <div class="col-2 mt-2" >
              <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
            </div>
            <div class="col-2">
                <h6 class="mt-2">Sous le N° d'inscription </h6>
            </div>
            <div class="col-2 mt-2" >
              <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
            </div>
        </div>
        
        <div class="row">
          <div class="col-6" >
            <h6 class="mt-2">Concernant l'element du module</h6>
          </div>
          <div class="col-6" >
            <input type="text" class="champecrit " value="{{$invoice->customer_name}}">
          </div>
        </div>
        <div class="row mt-2">
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
                            <th scope="col" class="line-spacing2">Note Controle Continue</th>
                            <th scope="col"class="line-spacing2">Note Examen</th>
                            <th scope="col"class="line-spacing2">Note Finale</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="champecrit2" value="{{$invoice->customer_name}}"></td>
                            <td><input type="text" class="champecrit2" value="{{$invoice->customer_name}}"></td>
                            <td><input type="text" class="champecrit2" value="{{$invoice->customer_name}}"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- 2DeuxiemeSection -->
    <div class="container">
        <h6 class="very-italic only">Et apres verification, je demande de :</h6>
    </div><br>

    <div class="container">
        <h6>1- Maintenir la note</h6>
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
    <div class="container">
        
        <div class="row">
            <div class="col-4">
                <h6>1- Changer la note</h6>
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
            <div class="col">
      <div class="table-container table-responsive">
        <table class="table tall-table">
          <thead>
            <tr>
              <th class="line-spacing2">Note Controle Continu</th>
              <th class="line-spacing2">Note Examen</th>
              <th class="line-spacing2">Note Final</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="champecrit2 line-spacing2" value="{{$invoice->customer_name}}"></td>
              <td><input type="text" class="champecrit2 line-spacing2" value="{{$invoice->customer_name}}"></td>
              <td><input type="text" class="champecrit2 line-spacing2" value="{{$invoice->customer_name}}"></td>
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
        <h6>Motif du Changement</h6>
          <fieldset>
            <div class="form-group">
              
              <textarea class="form-control dot-background" id="exampleTextarea" rows="4" textholder=".........." value="{{$invoice->customer_name}}"></textarea>
            </div>
          </fieldset>
      </div>
    <!-- 4QuatriemeSection -->
    <div class="container">
      <div class="row">
        <div class="col-4">
        <h6 class="underline">Fait a Oujda, Le :</h6>
        </div>
        <div class="col-8">
          <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
        </div>
      </div>
      
    </div>

  <div class="container mb-4">
    <div class="row">
      <div class="col-3 custom-div1">
        <h6 class="underline">Avis de l'administration</h6>
      </div>
      <div class="col-5 custom-div2">
        <h6 class="underline">Avis du Departement</h6>
      </div>
      <div class="col-4 custom-div3">
        <h6 class="underline">Signature de l'Enseignant</h6>
      </div>
    </div>
  </div>

        <div class="container custom-padding">
            <div class="form-group dot-background2">
              <div class="row">
                <div class="col-3">
                  <h6 class="underline2">Changement effectue par :</h6>
                </div>
                <div class="col-5">
                  <input type="text" class="champecrit" value="{{$invoice->customer_name}}">
                </div>
                <div class="col-2 custom-div4">
                  <h6 class="underline2">le : </h6>
                </div>
                <div class="col-2 ">
                <input type="text" class="champecri3 form-control" value="{{$invoice->customer_name}}">
                </div> 
              </div>      
            </div>
        </div>
<div class="line2"></div>
  <h6 class="text-center premeier line-spacing">Ecole Nationale de Commerce et de Gestion d'Oujda</h6>
  <h6 class="text-center line-spacing">Complexe universitaire BP 650- Oujda principale 60000</h6>
  <h6 class="text-center line-spacing">Tel : 0536506983/85/89| Fax: 0536506984</h6>
  <h6 class="text-center line-spacing">E-mail: <span class="underline">admineencgo@gmail.com</span> Site: http://encgo.ump.ma/</h6>

</body>
</html>
<script>
    // Function to handle redirection after print operation
    function redirectToPreviousPage() {
        window.history.back();
    }

    // Listen for 'afterprint' event to trigger redirection
    window.addEventListener('afterprint', redirectToPreviousPage);
</script>



@endsection

@section('script')
    <script>
        window.print();
    </script>
@endsection