@extends('app')
@section('meta_title', 'Referenzen')
@section('meta_description', 'Einblicke in realisierte Projekte von Pietsch Haustechnik – unsere Erfahrung in der Umsetzung unterschiedlichster Sanitär-, Heizungs- und Solaranlagen.')
@section('content')
<x-media.page-visual image="pietsch-haustechnik-visual-referenzen" alt="Referenzen" />
<x-pages.references.intro />
<x-pages.references.galleries />
@endsection
