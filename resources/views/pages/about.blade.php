@extends('app')
@section('meta_title', 'Über uns')
@section('meta_description', 'Seit über 25 Jahren steht Pietsch Haustechnik für fachmännische Arbeit, persönliche Beratung und zuverlässige Ausführung in Sanitär, Heizung und Solaranlagen.')
@section('content')
<x-media.page-visual image="pietsch-haustechnik-visual-ueber-uns" alt="Über uns" />
<x-pages.about.intro />
<x-pages.about.history />
@endsection
