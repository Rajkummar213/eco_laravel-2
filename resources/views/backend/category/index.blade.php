@extends('layouts.backendlayout')
@section('content')

<div class="text-end">
    <button class="btn btn-primary" " data-bs-toggle="modal" data-bs-target="#basic-modal-preview">Add category</button>
</div>



<div id="basic-modal-preview" class="modal fade" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
            <!-- BEGIN: Modal Header -->
             <div class="modal-header">
                 <h2 class="fw-medium fs-base me-auto">Add category</h2> <button class="btn btn-outline-secondary d-none d-sm-flex"> <i data-feather="file" class="w-4 h-4 me-2"></i> Download Docs </button>
                 
             </div>
              <!-- END: Modal Header -->
             <div class="modal-body p-4"> 
                <form action="{{ routs('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grou">
                    <label for="title" class="form-label">Cateagory Title</label>
                    <input name="title" type="text" id="title" class="form-control">
                    </div>

                    <div class="form-grou mt-3">
                    <label for="icon" class="form-label">Cateagory icon</label>
                    <input name="icon" type="file" id="icon" class="form-control">
                    </div>
                    <button class="btn btn-primary mt-3 w-full">Save</button>
                </form>
            </div>
         </div>
     </div>
 </div>
@endsection
