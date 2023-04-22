<div class="modal modal-xl fade" id="banner_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    
    <div class="modal-content p-2">
      @foreach($banner as $key => $ban)
        @if ($ban->status==2)
        <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="exampleModalLongTitle">CÓ GÌ MỚI HÔM NAY?</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6"><img style="width: 100%; height: 100%;" src="{{asset('uploads/banner/'.$ban->image)}}"></div>
              <div class="col-md-6 ms-auto">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">{{$ban->title}}</h5>
                </div>
                <div class="modal-description"> 
                  {{$ban->description}}
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
</div>