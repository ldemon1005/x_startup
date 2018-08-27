<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Gửi email phản hồi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('send_mail')}}" method="post">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row form-group">
                    <label class="col-md-3">Email : </label>
                    <div class="col-md-9">
                        <input name="email" class="form-control" value="{{$question->email}}">
                    </div>
                </div>
                <input class="d-none" name="id" value="{{$question->id}}">
                <div class="row form-group">
                    <label class="col-md-3">Nội dung : </label>
                    <div class="col-md-9">
                        <textarea name="content_send" class="form-control" cols="4" placeholder="nội dung email"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Gửi</button>

                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </form>
    </div>
</div>