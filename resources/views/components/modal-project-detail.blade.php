
<div class="modal modal-proejct-detail">
  @include('blocks.two-column-carousel', [
    'data' => (object)[
      'background_type' => 'white',
      'galleries' => $data->selected
    ]
  ])
</div>