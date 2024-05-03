
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <style>
      .horizontal-line {
        border: none;
        height: 1px;
        background-color: black;
        margin: 20px 0; /* Adjust margin as needed */
    }

    .container {
        text-align: center;
    }
    .derniere {
        text-align: center;
    }
    .derniere h6
    {

        margin: 5px; /* Adjust margin as needed */
    }
    .container h5 {
        display: inline-block;
        margin: 0 10px; /* Adjust margin as needed */
    }
    body {
      line-height: 1; /* Adjust line height as needed */
      font-size:20px;
    }
    .premier{
      text-align: center;
      text-decoration:underline;
      margin:0px;
    }

    .top h6 {
        margin: 10px 0; /* Adjust margin as needed */
        /* Other styles for h6 elements */
    }
    .toto {
        text-align: center;
        margin-bottom:0; 
    }
    .toto span {
        display: inline-block;
        margin-left: 10px; /* Adjust margin as needed */
    }
    .toto h6 {
        display: inline-block;
        margin-right:  20px;
        margin-bottom:0; 
    }
    .toto2 {
        text-align: center;
    }
    .toto2 span {
        display: inline-block;
        margin-left: 10px; /* Adjust margin as needed */
    }
    .toto2 h6 {
        display: inline-block;
        margin-right:  20px; 
    }
      .tall-table {
        width: auto; /* Set width as needed */
        float: right; /* Align table to the right */
        border-collapse: collapse; /* Collapse borders */
        
    }

    .tall-table th,
    .tall-table td {
        padding: 5px; /* Adjust padding as needed */
        font-weight: normal; /* Set font weight to normal */
        border: 1px solid black; /* Set border */
        height:20px;
    }

    .tall-table th {
        font-weight: bold; /* Set font weight of table headers to bold */
        font-size: 15px; /* Set font size */
    }
    .dodo2{
      margin-top:40px;
      text-align:center;
    }
    .container2{
      line-spacing:0.5;
    }
    
    .dodo3{
      color:white;
    }
    .dot-background{
      margin-top:10px
    }
    .underline{
      text-decoration:underline;
    }
    .underline{
      margin-bottom:0; 
    }
    .last{
      margin-top:50px;
    }
    </style>
</head>
<body>
  
  <div class="container">
  <h5>Universite Mohammed V</h5><br>
    <h5>L'Ecole Nationale de Commerce et de Gestion</h5><br>
    <h5>Oujda</h5><br>
  </div>
    
    <hr class="horizontal-line">

    <h4 class="premier">P.V. Individuel de rectification des notes</h4>


<div class="top">
<span><h6>Je Soussigne, Professeur : {{ $customer->customer_name }}</h6></span>
<span><h6>Avoir examine la reclamation de l'etudiant : {{ $customer->customer_email }}</h6></span>
<div class="toto">
<span><h6>Inscrit au semestre : {{ $customer->customer_mobile }}</h6></span>
<span><h6>l'anne universitaire: {{ $customer->company_name }}</h6></span>
<span><h6>Sous le N° d'inscription: {{ $customer->company_name }}</h6></span>
</div >

<span><h6 class="dodo">Concernant l'element du module: {{ $customer->company_name }}</h6></span>
<span><h6 class="dodo">Dont la note est :</h6></span> 
</div>


<table class="table tall-table">
    <thead>
        <tr>
            <th>Note Controle Continue</th>
            <th>Note Examen</th>
            <th>Note Finale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table><br>

<div class="container2">
<h6 class="dodo2">Et apres verification, je demande de :</h6>
<h6>1- Maintenir la note</h6>           
<span class="dodo3">pppppppppppppppppppp</span><span><input type="checkbox"></span>
<span><h6 >1- Changer la note,<span class="dodo3">pppppppppppppppppppppp</span> Nouvelle Note :</h6></span>
<span class="dodo3">pppppppppppppppppppp</span><span><input type="checkbox"></span>
</div>        

  


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
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
</table>
<h5>Motif du Changement</h5>
<textarea class="dot-background" rows="5" textholder=".........."></textarea>
<div class="underline2">
<h6 class="underline">Fait a Oujda, Le :</h6>
</div>

<div class="toto2">
<h6 class="underline">Avis de l'administration</h6>
<h6 class="underline">Avis du Departement</h6>
<h6 class="underline">Signature de l'Enseignant</h6>
</div>
<div class="last">
<span><h6 >Changement effectue par :<span class="dodo3">ppppppppppppppppppppppppppppppppppppppppppppppp</span>le :</h6></span>
</div>
<hr class="horizontal-line">
<div class="derniere">
  <h6>Ecole Nationale de Commerce et de Gestion d'Oujda</h6>
  <h6>Complexe universitaire BP 650- Oujda principale 60000</h6>
  <h6>Tel : 0536506983/85/89| Fax: 0536506984</h6>
  <h6>E-mail: <span class="underline">admineencgo@gmail.com</span> Site: http://encgo.ump.ma/</h6>
</div>
</body>
</html>



