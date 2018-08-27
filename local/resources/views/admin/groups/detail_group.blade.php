<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chi tiết nhóm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <label class="col-md-3">Tên nhóm : </label>
                <label lang="col-md-9">{{$group->name}}</label>
            </div>

            <div class="row">
                <label class="col-md-3">Tên chủ đề : </label>
                <label lang="col-md-9">{{$group->name_topic}}</label>
            </div>

            <div class="row">
                <label class="col-md-3">Ngày tạo : </label>
                <label lang="col-md-9">{{date('d/m/Y H: m',$group->created_at)}}</label>
            </div>

            <div class="text-danger">Thành viên</div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_user as $user)
                    <tr class="{{$user->id == $group->user_created ? 'text-primary' : ''}}">
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
    </div>
</div>