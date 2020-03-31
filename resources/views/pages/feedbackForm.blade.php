@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="/css/feedbackForm/index.css">
@endsection

@section('title')
    Форма обратной связи
@endsection

@section('content')
    <feedback-form></feedback-form>
    <show-bids></show-bids>
@endsection

@section('scripts')
    <script src="/js/index.js"></script>
@endsection