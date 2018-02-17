@extends('layouts.default')
@section('content')

<!-- The tab below will be used to show the content of the questionaire -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <?php foreach ($categoryList as $category): ?>
    <?php if ($category->id==1): ?>
      <li class="nav-item active">
          <a class="nav-link" id="{{ $category->title }}-tab" data-toggle="tab" href="#{{ $category->title }}" role="tab" aria-controls="{{ $category->title }}" aria-selected="true">{{ $category->title }}</a>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" id="{{ $category->title }}-tab" data-toggle="tab" href="#{{ $category->title }}" role="tab" aria-controls="{{ $category->title }}" aria-selected="false">{{ $category->title }}</a>
    <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>

<!-- Start of form -->
<form name=questionaire method="POST" action="/">
{{ csrf_field() }}

<!-- This is the content of the tabs -->
<div class="tab-content" id="myTabContent">
  <?php foreach ($categoryList as $category): ?>
    <?php if ($category->id==1): // Tab Content Opening ?>
      <div class="tab-pane fade show active" id="{{ $category->title }}" role="tabpanel" aria-labelledby="{{ $category->title }}-tab">
    <?php else: ?>
      <div class="tab-pane fade" id="{{ $category->title }}" role="tabpanel" aria-labelledby="{{ $category->title }}-tab">
    <?php endif; ?>

    <ol>
      <?php foreach ($category->questions as $question): ?>
        <li class="question">
          {{ $question->title }}<br>
          <?php foreach ($question->options as $option): ?>
            <input type=radio name="question{{ $question->id }}" value="{{ $option-> id }}">{{ $option->title }}<br>
          <?php endforeach; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
  <?php endforeach; // Tab Content Closing  ?>
</div>
<button type="submit" class="btn">Submit</button>
</form>
@stop
