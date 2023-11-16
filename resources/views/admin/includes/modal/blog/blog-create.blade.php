<div class="modal fade" id="modal-create-blog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Write Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/blog.create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="blog_name">Blog Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="blog_name" name="blog_name"
                                        placeholder="Enter blog name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Category
                                    Name</label>
                                <div class="col-sm-10">

                                    <select class="form-select" id="cate_id" name="cate_id"
                                        aria-label="Default select example">
                                        <option>Select category</option>
                                        @foreach($categories as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Blog main
                                    Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="blog_main_image"
                                        name="blog_main_image" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                    <label for="blog-content" class="form-label">Content</label>
                                    <textarea class="form-control" rows="5" name="blog_content"
                                        id="blog_content"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Add Blog</button>
                </div>
            </form>
        </div>
    </div>
</div>