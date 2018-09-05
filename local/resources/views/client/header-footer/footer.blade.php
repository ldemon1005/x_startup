<div id="footer">
    <section class="su-section section-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-5">
                    <div>
                        <h5>Liên hệ</h5>
                        <p class="email">xstartup@zikzak-co.vn</p>
                        <p class="facebook">facebook.com/zikzak-coworkingspace</p>
                        <p class="phone">1900-63-39-72 / 0167-606-8909</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 offset-md-1">
                    <form id="create_question" action="{{route('action_question')}}" method="post">
                        {{csrf_field()}}
                        <h6>Giải đáp thắc mắc</h6>
                        <div class="group">
                            <label>Họ và tên</label>
                            <input type="text" name="fullname">
                        </div>
                        <div class="group">
                            <label>Mail</label>
                            <input type="text" name="email">
                        </div>
                        <div class="group">
                            <label>Nội dung</label>
                            <textarea class="form-control" name="content" cols="3"></textarea>
                        </div>

                        <button style="cursor: pointer" type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright">
        Cuộc thi XStartup được tổ chức bởi Zikzak co-working Space trực thuộc tập đoàn Cgroup.
    </section>
</div>