@extends('client.master')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
@stop
@section('js')

@stop
@section('main')
<div id="main">
    <section class="demo-2 loading section-1">
        <div class="content">
            <div class="glitch">
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
                <div class="glitch__img"></div>
            </div>
            <div class="xstartup">
                <div class="xblue"></div>
                <div class="xred"></div>
                <a class="home-signup-btn" href="{{route('register_client')}}">Đăng ký tham gia cuộc thi</a>
            </div>
        </div>
    </section>

    <section class="su-section section-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="introduce">
                        <p>Được tổ chức bởi Zikzak co-working Space trực thuộc tập đoàn Cgroup</p>
                        <img src="{{ asset('local/resources/assets/guest/image') }}/zikzak.png">
                        <h5>ZIK ZAK - HỆ SINH THÁI KHỞI NGHIỆP NĂNG ĐỘNG NHẤT Việt Nam</h5>
                        <div>
                            ZikZak là một không gian làm việc chung và chuyên nghiệp mà CGroup đã ấp ủ tạo dựng từ
                            lâu. Cho đến tháng 6 năm 2018, ZikZak đã được ra đời. Người gây dựng nên ZikZak chính là
                            anh Đoàn Công Chung – CEO & Chủ tịch HĐQT CGroup - là một Start Up thành công trong lĩnh
                            vực công nghệ. Anh Chung nắm bắt và đồng cảm với tâm lý của StartUp, Freelancer và các
                            doanh nghiệp vừa và nhỏ ( SME) là luôn cần một không gian làm việc thoải mái để thỏa sức
                            sáng tạo và tạo nên hiệu suất làm việc tốt nhất. Đặc biệt là, qua nhiều năm làm việc,
                            Anh nhận thấy điều dẫn đến cái chết yểu của các StartUp mới chính là mức chi phí vận
                            hành quá cao, làm giảm sự cạnh tranh và là cái phanh làm kìm hãm sự phát triển.
                            <br>
                            Hiểu được điều đó, ZikZak ra đời để lấp khoảng trống còn thiếu của các StartUp. Cùng với
                            đó, ZikZak tạo ra cho các StartUp, Freelancer cơ hội học hỏi và điều kiện làm việc thoải
                            mái, có thể dễ dàng mở rộng mối quan hệ, tìm kiếm cơ hội đầu tư.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="su-section section-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-4 col-lg-4">
                    <h2 class="section-label">Đối tượng</h2>
                </div>
                <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                    <div class="content-text">
                        <h6>Cuộc thi dành cho đối tượng:</h6>
                        <p>Độ tuổi trên 18 tuổi.</p>
                        <p>*Lưu ý:</p>
                        <ul>
                            <li>Thí sinh chỉ được tham gia 1 đội thi</li>
                            <li>Các ý tưởng, dự án đã từng đoạt giải tại các cuộc thi khởi nghiệp không được tham
                                gia
                            </li>
                            <li>Các sản phẩm/ dịch vụ, dự án đã đăng ký kinh doanh không được tham gia</li>
                            <li>Mọi sai phạm khi phát hiện, BTC được phép hủy quyền dự thi của ứng viên</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h2 class="section-label">Thể lệ</h2>

            <div class="row mt-5">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">Vòng 1</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Vòng 2</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Vòng 3</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Vòng 4</a>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Vòng 1 -->
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="content-text"><h4>Ý tưởng (27/8/2018 – 10/10/2018)</h4>

                            <div class="content-text">
                                <p>Lịch trình Vòng 1:
                                    <br>
                                    Thời gian chính thức nộp hồ sơ: <b>10/9/2018 – 5/10/2018</b>
                                </p>
                                <b>Hình thức:</b>
                                <ul>
                                    <li>Thi online, đăng ký và nộp ý tưởng thông qua website http://xstartup.zikzak-co.vn</li>
                                    <li>Nộp ý tưởng tham gia cho BGK thông qua cách điền thông tin trên vào form đăng ký trên website</li>
                                    <li>Video giới thiệu Nhóm và Ý tưởng (Video dài 3 - 5 phút): Nội dung video bao gồm: giới thiệu nhóm, thành viên, ý tưởng, tính khả thi, tính vận hành, tính thực tế của ý tưởng</li>
                                </ul>
                                <b>Lưu ý:</b>
                                <ul>
                                    <li>Những dự án hợp lệ là những dự án đã điền đầy đủ thông tin và gửi video</li>
                                    <li>Không giới hạn số lượng đội thi tham gia, 1 thành viên chỉ được tham gia 1 đội thi.</li>
                                    <li>Kết quả Vòng 1: chọn ra 60 dự án nổi bật nhất của 2 khu vực Bắc và Nam vào ngày 10/10/2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Vòng 2 -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
                    <div class="content-text">
                        <h4>Lan tỏa (11/10/2018 – 29/10/2018)</h4>
                        <p><b>Hình thức</b></p>
                        Thi Online, Video của các đội tham dự qua Vòng 1 sẽ được đăng tải trên Fanpage Zikzak kèm theo tên Nhóm và Mã số dự thi, Các đội sẽ có nhiệm vụ like share tăng độ lan tỏa ý tưởng của mình.
                        <br>
                        Với 60 đội được lựa chọn tham gia vòng 2 (30 đội khu vực miền Bắc và 30 đội khu vực miền Nam)
                        <br>
                        Cách thức tính điểm: Điểm số sẽ 50% do khán giả bình chọn và 50% do BGK bình chọn. Điểm số tối đa 1 đội đạt được là 60 điểm, cụ thể như sau:
                        <br>
                        <br>
                        <b>Về bình chọn của khán giả:</b>
                        <ul>
                            <li>Đầu tiên các post của các đội sẽ được tính điểm như sau:
                                <br>
                                Like = 1đ; thả tim = 2đ; comment = 3đ; share = 5đ
                                <br>
                            Sau đó tổng điểm số đạt sẽ được quy đổi về thang điểm 30.</li>

                            <li>Đội nào đạt số like/comment/share cao nhất sẽ dành 30 điểm; tương ứng đội thấp nhất sẽ dành 1 điểm</li>
                        </ul>
                        <b>Về bình chọn của BGK:</b> (điểm số tối đa phần chấm điểm của BGK là 30 điểm)
                        <ul>
                            <li>Điểm số tối đa của 1 BGK chấm cho 1 đội sẽ là 30 điểm.</li>
                            <li>Sau khi 4 BGK chấm điểm cho 1 đội, số điểm đó sẽ chia cho 4 để ra kết quả chấm điểm cuối cùng của tổ BGK cho đội đó.</li>
                        </ul>
                        Xếp hạng: thang điểm 60.
                        <br>
                        Điểm số cuối cùng cho 1 đội = Bình chọn khán giả + chấm điểm của BGK 
                        <br>
                        Nếu phát hiện gian lận (like, comment, share), BTC được phép hủy quyền dự thi của ứng viên.

                        <div class="notify-text">Kết quả Vòng 2: chỉ 20 đội sẽ bước vào vòng 3 (10 đội khu vực miền Bắc và 10 đội khu vực miền Nam)</div>
                    </div>
                </div>

                <!-- Vòng 3 -->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                aria-labelledby="v-pills-messages-tab">
                <div class="content-text">
                    <h4>Bùng nổ (1/11/2018 – 15/11/2018)</h4>
                    <p><b>Lịch trình Vòng 3</b></p>
                    <ul>
                        <li>Vòng 3 bắt đầu từ 1/11/2018</li>
                        <li>12/11/2018 Các đội khu vực miền Bắc trình bày, phản biện dự án kinh doanh của mình trước Ban giám khảo tại khu vực miền Bắc.</li>
                        <li>15/11/2018 Các đội khu vực miền Nam trình bày, phản biện dự án kinh doanh của mình trước Ban giám khảo tại  tại khu vực miền Nam</li>
                        <li>17/11/2018 Thông báo kết quả cho 6 đội vào Chung Kết.</li>
                    </ul>

                    Các đội có nhiệm vụ chuẩn bị cho vòng 3:
                    <ul>
                        <li>Slide thuyết trình tập trung về sản phẩm, tính khả thi, tính thực tế của ý tưởng</li>
                        <li>Demo sản phẩm (nếu có)</li>
                        <li>Tổng quan kế hoạch kinh doanh</li>
                    </ul>

                    <p><b>Hình thức:</b></p>
                    Thi Offline tại 2 khu vực miền Bắc và miền Nam
                    <br>
                    Tổng số đội: 20 đội, trong đó có 10 đội khu vực miền Bắc và 10 đội khu vực miền Nam.
                    <br>
                    Các đội có 10 phút để trình bày và 10 phút phản biện ý tưởng sản phẩm và kế hoạch của mình trước BGK
                    <br>
                    <b>*Lưu ý:</b>
                    <ul>
                        <li>10 đội khu vực miền Bắc sẽ thuyết phục BGK để được đi vào vòng Chung Kết bằng cách trực tiếp present trước BGK tại địa điểm</li>
                        <li>[HN] Tầng 5, Tòa nhà Diamond Flower, số 1 Hoàng Đạo Thúy, Thanh Xuân, HN.</li>
                        <li>10 đội khu vực miền Nam sẽ thuyết phục BGK để được đi vào vòng Chung Kết bằng cách trực tiêp thuyết trình trước BGK tại địa điểm</li>
                        <li>[HCM] Tòa nhà Cphone, 456 Xô Viết Nghệ Tĩnh, phường 25, Bình Thạnh, HCM.</li>
                    </ul>
                </div>
            </div>

            <!-- Vòng 4 -->
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
            aria-labelledby="v-pills-settings-tab">
            <div class="content-text">
                <h4>Nhân tố X (18/11/2018 – 24/12/2018)</h4>

                <p><b>Lịch trình Vòng 4:</b></p>
                <ul>
                    <li>Từ 24/11/2018 – 23/12/2018 Các đội hoàn thiện nội dung chuẩn bị cho vòng chung kết.</li>
                    <li>24/12/2018 Vòng 4: Nhân tố X cuối cùng</li>
                </ul>
                <b>*Công tác chuẩn bị:</b>
                <br>
                Để chuẩn bị cho Vòng 4, các đội sẽ phải hoàn thiện:
                <ul>
                    <li>BẢN KẾ HOẠCH KINH DOANH CHI TIẾT</li>
                    <li>BẢN C N ĐỐI TÀI CHÍNH</li>
                    <li>THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU</li>
                    <li>TVC QUẢNG BÁ Ý TƯỞNG/ SẢN PHẨM</li>
                    <li>SẢN PHẨM MẪU</li>
                </ul>
                <b>Hình thức:</b>
                <ul>
                    <li>6 đội thi lọt vào vòng Chung Kết sẽ đối đầu trực tiếp với nhau và thuyết phục Ban giám khảo, các vị khách mời, các nhà đầu tư cùng 1000 khán giả để giành lấy ngôi vị Quán quân danh giá.</li>
                    <li>Nội dung thi: thí sinh thuyết trình về dự án trong 20 phút, sau đó phản biện với Hội đồng giám khảo trong vòng 20 phút.</li>
                </ul>
                <b>*Lưu ý:</b> Lịch trình chi tiết cũng như nội dung các vòng thi có thể được thay đổi cho phù hợp với điều kiện và tình hình thực tế. Thí sinh phải cam kết tham gia đầy đủ các phần thi do BTC yêu cầu.
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

        <!-- <section class="su-section section-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div>
                            Giám khảo
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="">
                                    <div style="background-image: url();"></div>
                                    <h6>đoàn công chung</h6>
                                    <p>CEO CGROUP</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="">
                                    <div style="background-image: url();"></div>
                                    <h6>đoàn công chung</h6>
                                    <p>CEO CGROUP</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="">
                                    <div style="background-image: url();"></div>
                                    <h6>đoàn công chung</h6>
                                    <p>CEO CGROUP</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="">
                                    <div style="background-image: url();"></div>
                                    <h6>đoàn công chung</h6>
                                    <p>CEO CGROUP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="su-section section-5">
            <div class="container">

                <h2 class="section-label">Giải thưởng</h2>

                <div class="row mt-5 mb-5">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="nav flex-column" id="v-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-home-tab" data-toggle="pill" href="#v-home" role="tab"
                            aria-controls="v-home" aria-selected="true">Giải nhất</a>
                            <a class="nav-link" id="v-profile-tab" data-toggle="pill" href="#v-profile" role="tab"
                            aria-controls="v-profile" aria-selected="false">Giải nhì</a>
                            <a class="nav-link" id="v-messages-tab" data-toggle="pill" href="#v-messages" role="tab"
                            aria-controls="v-messages" aria-selected="false">Giải ba</a>
                            <a class="nav-link" id="v-settings-tab" data-toggle="pill" href="#v-settings" role="tab"
                            aria-controls="v-settings" aria-selected="false">Giải khuyến khích</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                        <div class="tab-content" id="v-tabContent">
                            <!-- Giải nhất -->
                            <div class="tab-pane fade show active" id="v-home" role="tabpanel"
                            aria-labelledby="v-home-tab">
                            <div class="content-text">
                                <h4>Trị giá 300.000.000 VNĐ</h4>
                                <ul>
                                    <li>Tiền mặt: 50 triệu</li>
                                    <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                    <li>1 năm sử dụng miễn phí dịch vụ chỗ ngồi  tại zikzak co-working space cho cả đội</li>
                                    <li>1 năm sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                    <li>1 năm book phòng miễn phí trên Ctogo</li>
                                    <li>Quà tặng đến từ Cgroup + kỷ niệm chương + giấy chứng nhận</li>
                                    <li>1 khóa học tiếng anh với người bản ngữ 1 năm</li>
                                    <li>Được lên báo việt nam hội nhập (tạp chí in + emagazine)</li>
                                    <li>Chuyến đi seminar tại singapore</li>
                                    <li>Cgroup đầu tư dự án startup</li>
                                    <li>Được hỗ trợ truyền thông trong 6 tháng</li>
                                    <li>Được BQT Cgroup làm mentor trong dự án startup</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Giải nhì -->
                        <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab">
                            <div class="content-text">
                                <h4>Trị giá 150 triệu</h4>
                                <ul>
                                    <li>Tiền mặt: 6 triệu</li>
                                    <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                    <li>Voucher giảm giá 20% khi mua Cphone</li>
                                    <li>Tặng 3 tháng sử dụng miễn phí dịch vụ chỗ ngồi tại zikzak co-working space cho cả đội</li>
                                    <li>3 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                    <li>Voucher giảm giá 30% khi book phòng trên Ctogo</li>
                                    <li>Quà tặng đến từ Cgroup + kỷ niệm chương + giấy chứng nhận</li>
                                    <li>1 khóa học tiếng anh với người bản ngữ 3 tháng</li>
                                    <li>Được lên báo việt nam hội nhập (tạp chí in + emagazine)</li>
                                    <li>Được đặt cách trở thành member Cgroup</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Giải ba -->
                        <div class="tab-pane fade" id="v-messages" role="tabpanel" aria-labelledby="v-messages-tab">
                            <div class="content-text">
                                <h4>Trị giá 60 triệu</h4>
                                <ul>
                                    <li>Tiền mặt: 3 triệu</li>
                                    <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                    <li>Voucher giảm giá 15% khi mua Cphone</li>
                                    <li>2 tháng  sử dụng dịch vụ chỗ ngồi miễn phí tại zikzak</li>
                                    <li>2 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                    <li>Voucher giảm giá 15% khi book phòng trên Ctogo</li>
                                    <li>Quà tặng đến từ Cgroup + kỷ niệm chương + giấy chứng nhận</li>
                                    <li>1 khóa học tiếng anh với người bản ngữ 2 tháng</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Giải khuyến khích -->
                        <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
                            <div class="content-text">
                                <h4>Trị giá 30 triệu</h4>
                                <ul>
                                    <li>Tiền mặt: 1 triệu.</li>
                                    <li>Voucher giảm giá 50% khi mua Cphone</li>
                                    <li>1 tháng  sử dụng dịch vụ chỗ ngồi miễn phí tại zikzak</li>
                                    <li>1 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                    <li>Quà tặng đến từ Cgroup + kỷ niệm chương + giấy chứng nhận</li>
                                    <li>Voucher giảm giá 10% khi book phòng trên Ctogo</li>
                                    <li>1 khóa học tiếng anh với người bản ngữ 1 tháng</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h5 class="note">Tất cả các đội thi lọt vào vòng bán kết được hỗ trợ 2 triệu đồng.</h5>
        </div>
    </section>

    <section class="su-section section-6">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <h2 class="section-label">Điều khoản</h2>
                </div>
                <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                    <div>
                        {{-- <div class="d-flex mt-5">
                            <div class="flag"><img
                                src="{{ asset('local/resources/assets/guest/image') }}/award.png"></div>
                                <div class="content-text">
                                    <h4>Trao giải</h4>
                                    <p>Giải thưởng tiền mặt sẽ được chuyển khoản cho cá nhân đại diện dự án trong vòng
                                        30-45 ngày làm việc sau khi Lễ trao giải X-Startup. Dự án đoạt giải phải tự chịu
                                        trách nhiệm về khoản thuế thu nhập cá nhân (TNCN) và những khoản thuế hoặc lệ
                                        phí liên quan đến giải thưởng (nếu có) theo quy định của pháp luật Việt Nam hiện
                                        hành. Ban Tổ Chức sẽ tiến hành thu khoản thuế TNCN này và nộp vào ngân sách nhà
                                        nước. Khoản thuế TNCN này được nộp cho Ban Tổ Chức cùng lúc với việc nhận giải
                                    thưởng.</p>
                                </div>
                            </div> --}}

                            <div class="d-flex mt-5">
                                <div class="flag"><img
                                    src="{{ asset('local/resources/assets/guest/image') }}/security.png"></div>
                                    <div class="content-text">
                                        <h4>Bảo mật</h4>
                                        <p>Về bài dự thi về kế hoạch kinh doanh, ban tổ chức sẽ cung cấp bản sao cho ban giám khảo và người phụ trách liên quan và yêu cầu các cá nhân này không được lập thêm bất kỳ bản sao nào. Phần giới thiệu tóm tắt kế hoạch kinh doanh của các thí sinh sẽ được xem như là một bản tóm tắt và được phổ biến rộng rãi cũng như được dùng trong tài liệu liên quan cuộc thi.</p>
                                    </div>
                                </div>

                                <div class="d-flex mt-5">
                                    <div class="flag"><img
                                        src="{{ asset('local/resources/assets/guest/image') }}/document.png"></div>
                                        <div class="content-text">
                                            <h4>Cam kết</h4>
                                            <p>Khi tham gia cuộc thi này, các ứng viên đồng ý với việc Ban Tổ Chức phát sóng trực tiếp, phỏng vấn, chụp ảnh, thu âm, quay phim và công bố triển lãm hoặc tái sản xuất để sử dụng cho phần tin tức, tường thuật, cho các mục đích quảng bá, các chương trình truyền hình, quảng cáo, bao gồm trên trang web hoặc dưới bất kỳ hình thức nào. BTC cùng các đối tác và tất cả những bên liên quan được miễn trách đối với bất kỳ trách nhiệm nào phát sinh từ việc chụp hình, ghi âm, ghi hình hoặc công bố các hình hình chụp, bản ghi âm, ghi hình từ sự kiện này.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @stop