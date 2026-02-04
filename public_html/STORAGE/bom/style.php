<?php
$bodybg = "#B3874F";
$bordercolor = "#A3672F";
$headingcolor = "#c96";
?>

body
{
    text-align: center;
    font-family: sans-serif;
    font-size: 67.5%;
    background-color:<?= $bodybg ?>;
    color:#222;
}

h1,h2,h3,h4
{
    color: #c96;
}

h1
{
	border-bottom: 2px solid <?= $headingcolor ?>;
	padding-bottom: .5em;
}

legend
{
    font-weight: bold;
}

table
{
    border-collapse: collapse;
    margin: auto;
  	text-align: left;
}

table td
{
    border: 1px solid <?= $bordercolor ?>;
    padding: .25em .25em .25em .75em;
}

.centered
{
    text-align: center;
}

.left
{
    float: left;
}

.tab
{
    float: left;
    width: 30%;
    text-align: center;
    margin-left: 1em;
}

.tab table
{
    margin: 0 auto;
}

#wrapper
{
    width: 55em;
    font-size: 1.4em;
    margin: 1em auto;
    padding: 2em;
    text-align: left;
    background-color: #fff;
    border: 3px solid <?= $bordercolor ?>;
}