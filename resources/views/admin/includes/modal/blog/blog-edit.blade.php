<div class="modal fade" id="modal-edit-{{$blog->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/blog-edit/{{$blog->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="new_blog_name">Blog Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="new_blog_name" name="new_blog_name"
                                        value="{{$blog->blog_name}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Category
                                    Name</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="new_cate_id" name="new_cate_id"
                                        aria-label="Default select example">
                                        @foreach($categories as $cate)
                                        @if($blog->cate_id == $cate->id)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endif
                                        @endforeach

                                        @foreach($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                    <label for="blog_content" class="form-label">Content</label>
                                    <textarea class="form-control" rows="3" name="new_blog_content"
                                        id="new_blog_content">{{$blog->blog_content}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save change</button>
                </div>
            </form>
        </div>
    </div>
</div>