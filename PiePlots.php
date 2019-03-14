<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
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
// Some data
$data1=array($q1Count1,$q1Count2,$q1Count3,$q1Count4,$q1Count5);
$data2=array($q2Count1,$q2Count2,$q2Count3,$q2Count4,$q2Count5);
$data3=array($q3Count1,$q3Count2,$q3Count3,$q3Count4,$q3Count5);
$data4=array($q4Count1,$q4Count2,$q4Count3,$q4Count4,$q4Count5);
$data5=array($q5Count1,$q5Count2,$q5Count3,$q5Count4,$q5Count5);

// Create the Pie Graph.
$graph = new PieGraph(800,500);
$graph->SetShadow();

// Set A title for the plot
$graph->title->Set("Questionnaire");

// Create plots
$size=0.17;
$p1 = new PiePlot($data1);
$graph->Add($p1);

$p1->SetSize($size);
$p1->SetCenter(0.25,0.25);
$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p1->title->Set("Question 1");

$p2 = new PiePlot($data2);
$graph->Add($p2);

$p2->SetSize($size);
$p2->SetCenter(0.75,0.25);
$p2->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p2->title->Set("Question 2");

$p3 = new PiePlot($data3);
$graph->Add($p3);

$p3->SetSize($size);
$p3->SetCenter(0.25,0.75);
$p3->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p3->title->Set("Question 3");

$p4 = new PiePlot($data4);
$graph->Add($p4);

$p4->SetSize($size);
$p4->SetCenter(0.75,0.75);
$p4->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p4->title->Set("Question 4");

$p5 = new PiePlot($data5);
$graph->Add($p5);

$p5->SetSize($size);
$p5->SetCenter(0.5,0.5);
$p5->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
$p5->title->Set("Question 5");

$graph->Stroke();

?>