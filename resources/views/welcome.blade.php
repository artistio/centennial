@extends('layouts.default')
@section('content')

<!-- The tab below will be used to show the content of the questionaire -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>

<!-- Start of form -->
<form name=questionaire action="">

<!-- This is the content of the tabs -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <ol>
      <li class="question">
        What do you eat this morning?<br>
        <input type=radio name="answer1" value="1">Bread<br>
        <input type=radio name="answer1" value="2">Fried Rice<br>
      </li>
    </ol>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <ol>
      <li class="question">
        How far do you run?<br>
        <input type=radio name="answer2" value="1">0<br>
        <input type=radio name="answer2" value="2">Less than 5 km<br>
        <input type=radio name="answer2" value="3">Between 5 & 10 km<br>
        <input type=radio name="answer2" value="4">More than 10 km<br>
      </li>
    </ol>
</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <ol>
      <li class="question">
        How much did you eat?<br>
        <input type=radio name="answer3" value="1">One time<br>
        <input type=radio name="answer3" value="2">Three Time<br>
        <input type=radio name="answer3" value="3">Too Much Snacks<br>
      </li>
      <li class="question">
        How much did you sleep?<br>
        <input type=radio name="answer4" value="1">No sleep
        <input type=radio name="answer4" value="2">Less than 6 hours
        <input type=radio name="answer4" value="3">More than 6 hours
      </li>  </div>
</div>
<button type="button" class="btn">Submit</button>
</form>
@stop
