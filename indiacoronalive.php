<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta  charset="utf-8">
    <meta name="viewport" content="width=device-width,intitial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https:///maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&diplay=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudfalre.com/ajax/lib/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM31onlgyExkL0=" crossorigin="anonymous" />

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg p-3 nav_style">
<img src="image/tran.png">
    <a class="navbar-brand p1-3" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="#about">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#symptoms">symptoms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#prevention">prevention</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
            </li>
        </ul>
    </div>
</nav>

<section class="corona_update container fluid">
    <div class="my-3">
        <h3 class="text-center text-uppercase text-color-red"> covid-19 live update of india </h3>
    </div>
    <div class="table-responsive">

        <table class="table table-bordered table-tripe text-center">
            <tr>
                <th class="text-capitalize">states</th>
                <th class="text-capitalize">confirmed</th>
                <th class="text-capitalize">active</th>
                <th class="text-capitalize">recovered</th>
                <th class="text-capitalize">deths</th>
            </tr>

<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statescount = count($coronalive['statewise']);
//echo $coronalive['statewise'][1]['state'];

$i=1;
while($i < $statescount){

?>
<tr>
<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

</tr>

<?php
$i++;
}
?>


</table>


<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topfunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
    <div class="footer-style by-dark text-white container-fluid text-center">
    </div>
</footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2ffNE=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/counter-up/1.0.0/jquery.counterup.min.js"integrity="sha256-JtQPj/3xub8oapVMaIijPnoM0DHoAtgh/8wFYuN5rik="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>
mybutton=document.getElementById("myBtn");
window.onscroll=functon(){scrollFunction()};
function scrollFunction() {
if(document.body.scrollTop>100 || documentElement.scrollTop>100){
mybutton.style.display="block";
} else {
mybutton.style.display="none";
}
}
function topFunction() {
document.body.scrollTop=0;
document.documentElement.scrollTop=0;

</script>
    </div>
</section>
</body>
</html>

