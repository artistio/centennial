@extends('layouts.default')
@section('content')

<div class="jumbotron">
  <?php if ($totalScore < 0): ?>
    <p class="text-danger">
  <?php else: ?>
    <p class="text-success">
  <?php endif; ?>
  Your Score today {{ $dateAnswered }} is {{ $totalScore }}</p>
</div>
@stop
