<!-- Modal - Edit - Category -->
<div class="modal fade" id="modal-edit-{{$cate->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <form action="/cate-edit/{{$cate->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="new-name" name="new-name" value="{{$cate->name}}" class="form-control" placeholder="Enter Name" />
                </div>
                </div>
                <div class="row">
                <div class="col mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="new-description" name="new-description" value="{{$cate->description}}" class="form-control" placeholder="Enter Description" />
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form> 
        </div>
    </div>
</div>
