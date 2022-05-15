<?php

if(empty($_GET) || $_GET['year']=="" || $_GET['month']=="" || $_GET['day']==""){
    die ('Values are not valid!');
} else {
if(is_numeric($_GET['year']) && is_numeric($_GET['day']) && !is_numeric($_GET['month']) && $_GET['day']>=0 && $_GET['year']>=1970){

    $_GET['month']=ucfirst($_GET['month']);

function january(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('Junary has 31 days');
    }
}   

function february(){    
    if($_GET['year']%4===0 &&  $_GET['day']>=1 && $_GET['day']<=29){
    
        echo "The date is valid";
    } else if($_GET['year']%4===0 &&  $_GET['day']<1 || $_GET['day']>29) {
        die("February has 29 days");
    } else if($_GET['year']%4!==0  && $_GET['day']>=1 && $_GET['day']<=28){
    
        echo "The date is valid";
    } else {
        die("February has 28 days");
    }
} 

function march(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('March has 31 days');
    }
} 

function april(){
    if($_GET['day']>=1 && $_GET['day']<=30){
        echo "The date is valid";
    } else {
        die('April has 30 days');
    }
} 

function may(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('May has 31 days');
    }
} 

function june(){
    if($_GET['day']>=1 && $_GET['day']<=30){
        echo "The date is valid";
    } else {
        die('June has 30 days');
    }
} 

function july(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('July has 31 days');
    }
} 

function august(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('August has 31 days');
    }
} 

function september(){
    if($_GET['day']>=1 && $_GET['day']<=30){
        echo "The date is valid";
    } else {
        die('September has 30 days');
    }
} 

function october(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('October has 31 days');
    }
} 

function november(){
    if($_GET['day']>=1 && $_GET['day']<=30){
        echo "The date is valid";
    } else {
        die('November has 30 days');
    }
} 

function december(){
    if($_GET['day']>=1 && $_GET['day']<=31){
        echo "The date is valid";
    } else {
        die('December has 31 days');
    }
} 

if($_GET['month']==="January" || $_GET['month']==="Januar"){
    january();
}

if($_GET['month']==="February" || $_GET['month']==="Februar"){
    february();
}

if($_GET['month']==="March" || $_GET['month']==="Mart"){
    march();
}

if($_GET['month']==="April" || $_GET['month']==="April"){
    april();
}

if($_GET['month']==="May" || $_GET['month']==="Maj"){
    may();
}

if($_GET['month']==="June" || $_GET['month']==="Jun"){
    june();
}

if($_GET['month']==="July" || $_GET['month']==="Jul"){
    july();
}

if($_GET['month']==="August" || $_GET['month']==="Avgust"){
    august();
}

if($_GET['month']==="September" || $_GET['month']==="Septembar"){
    september();
}

if($_GET['month']==="October" || $_GET['month']==="Oktobar"){
    october();
}

if($_GET['month']==="November" || $_GET['month']==="Novembar"){
    november();
}

if($_GET['month']==="December" || $_GET['month']==="Decembar"){
    december();
}

} else if($_GET['year']<1970) {
    die('Program racuna od 1970 godine!');
} else {
    die('Error!!!');
}
}
?>