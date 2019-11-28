<div class="block bg-bitmap two-column-contact-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        @include('components.column-content', [
          'data' => (object)[
            'before_type' => 'warning',
            'title' => '<h6 class="text-primary">Send a quick message</h6>'
          ]
        ])
        @include('components.contact-form')
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
        @include('components.column-content', [
          'data' => (object)[
            'before_type' => 'warning',
            'title' => '<h6 class="text-primary">Head Office</h6>'
          ]
        ])
        @include('components.contact-info1')
        @include('components.column-content', [
          'data' => (object)[
            'before_type' => 'warning',
            'title' => '<h6 class="text-primary">Site locations</h6>'
          ]
        ])
        @include('components.contact-info2')
      </div>
    </div>
  </div>
</div>