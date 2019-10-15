@extends('layout')

@section('content')

<main>
    
    <div id="wrapper">  
      <img id="daredevil" src="images/daredevil1-Recovered.jpg" alt="main_banner"/>
      <div id="trending_now">
        <h2>Trending Now</h2>
        <div id="trending_now_vids">
          <div class="zoom" id="box1">
            <img class="vids" src="images/Friends.jpg" alt="trending now video">
            Friends
          </div>  
          <div class="zoom" id="box2">
          <img class="vids" src="images/sherlock.jpg" alt="trending now video">
            Sherlock
          </div>  
          <div class="zoom" id="box3">
          <img class="vids" src="images/houseofcards.jpg"
          alt="trending now video">
            House of Cards
          </div>  
          <div class="zoom" id="box4">
          <img class="vids" src="images/arrow.jpg"
          alt="trending now video">
            Arrow
          </div>  
          <div class="zoom" id="box5">
          <img class="vids"  src="images/blackmirror.jpg"
          alt="trending now video">
            Black Mirror
          </div>  
        </div>
      </div>
      <div id="comedies">
        <h2>Comedies</h2>
        <div id="comedies_vids">
          <div class="zoom1" id="box6"><img class="vids" src="images/office.jpg" alt="Comedy video"></div>  
          <div class="zoom1" id="box7"><img class="vids" src="images/narcos.jpg"
          alt="Comedy video"></div> 
          <div class="zoom1" id="box8"><img
          class="vids" src="images/patriotact.jpg"
          alt="Comedy video"></div>  
          <div class="zoom1" id="box9"><img class="vids"  src="images/Daredevil3.jpg"
          alt="Comedy video"></div>  
          <div class="zoom1" id="box10"><img
          class="vids" src="images/got.jpg"
          alt="Comedy video"></div>  
        </div>
      </div>
    </div>
    </main>


@endsection()