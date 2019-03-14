<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$q1Count1 = $_POST['q1Count1'];
$q1Count2 = $_POST['q1Count2'];
$q1Count3 = $_POST['q1Count3'];
$q1Count4 = $_POST['q1Count4'];
$q1Count5 = $_POST['q1Count5'];

$q2Count1 = $_POST['q2Count1'];
$q2Count2 = $_POST['q2Count2'];
$q2Count3 = $_POST['q2Count3'];
$q2Count4 = $_POST['q2Count4'];
$q2Count5 = $_POST['q2Count5'];

$q3Count1 = $_POST['q3Count1'];
$q3Count2 = $_POST['q3Count2'];
$q3Count3 = $_POST['q3Count3'];
$q3Count4 = $_POST['q3Count4'];
$q3Count5 = $_POST['q3Count5'];

$q4Count1 = $_POST['q4Count1'];
$q4Count2 = $_POST['q4Count2'];
$q4Count3 = $_POST['q4Count3'];
$q4Count4 = $_POST['q4Count4'];
$q4Count5 = $_POST['q4Count5'];

$q5Count1 = $_POST['q5Count1'];
$q5Count2 = $_POST['q5Count2'];
$q5Count3 = $_POST['q5Count3'];
$q5Count4 = $_POST['q5Count4'];
$q5Count5 = $_POST['q5Count5'];

$Count = $_POST['Count'];

$data1y=array($q1Count1,$q1Count2,$q1Count3,$q1Count4,$q1Count5);
$data2y=array($q2Count1,$q2Count2,$q2Count3,$q2Count4,$q2Count5);
$data3y=array($q3Count1,$q3Count2,$q3Count3,$q3Count4,$q3Count5);
$data4y=array($q4Count1,$q4Count2,$q4Count3,$q4Count4,$q4Count5);
$data5y=array($q5Count1,$q5Count2,$q5Count3,$q5Count4,$q5Count5);
//$data1y[0]=$q1Count1;

// Create the graph. These two calls are always required
$graph = new Graph(640,400,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(0,$Count*0.2,$Count*0.4,$Count*0.6,$Count*0.8,$Count), array($Count*0.1,$Count*0.3,$Count*0.5,$Count*0.7,$Count*0.9));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Very satisfied','Satisfied','General','Not satisfield','Very not satisfield'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y);
$b3plot = new BarPlot($data3y);
$b4plot = new BarPlot($data4y);
$b5plot = new BarPlot($data5y);

// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot,$b4plot,$b5plot));
// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#11cccc");

$b3plot->SetColor("white");
$b3plot->SetFillColor("#1111cc");

$b4plot->SetColor("white");
$b4plot->SetFillColor("#cc1111");

$b5plot->SetColor("white");
$b5plot->SetFillColor("#11cccc");

$graph->title->Set("Questionnaire");

// Display the graph
$graph->Stroke();
?>