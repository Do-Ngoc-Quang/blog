<!-- Modal - Delete - Blog -->
<div class="modal fade" id="modal-delete-{{$blog->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Comfirm Delete</h5>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <form action="/blog-delete/{{$blog->id}}" method="POST">
            @csrf
            @method('DELETE')

            <!-- Modal body -->
            <div class="modal-body">
                Are you sure you want to delete this record?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline-danger" data-bs-dismiss="modal">Delete</button>
            </div>
            </form> 
        </div>
    </div>
</div>
