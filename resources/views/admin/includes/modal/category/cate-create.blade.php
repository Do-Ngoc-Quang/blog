<!-- Modal - Create - Category -->
<div class="modal fade" id="modal-create-category" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/categories.create" method="POST">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
            <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            ></button>
        </div>
        <div class="modal-body">
            <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" value="" class="form-control" placeholder="Enter Name" />
            </div>
            </div>
            <div class="row">
            <div class="col mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" value="" class="form-control" placeholder="Enter Description" />
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
            </button>
            <button type="submit" class="btn btn-primary">Add category</button>
        </div>
        </div>
        </form>
    </div>
</div>