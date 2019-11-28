@extends('layouts.app')
@section ('content')
  @include('blocks.other-hero', [
    'data' => (object)[
      'menu_image' => asset('/dist/media/menus/menu4.png'),
      'menu_title' => 'Contact',
      'menu_subtitle' => 'WE’D LOVE TO WORK WITH YOU'
    ]
  ])
  @include('blocks.two-column-contact')
@endsection