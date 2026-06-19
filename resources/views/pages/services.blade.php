@extends('app')
@section('meta_title', 'Dienstleistungen')
@section('meta_description', 'Fachgerechte Lösungen in den Bereichen Sanitär, Heizung und Solaranlagen – mit persönlicher Beratung von der Planung bis zur Ausführung. Pietsch Haustechnik.')
@section('content')
<x-media.page-visual image="pietsch-haustechnik-visual-dienstleistung" alt="Dienstleistung" />
<x-pages.services.intro />
<x-pages.services.offers />
<x-pages.services.methods />
<x-pages.services.cta />
@endsection
