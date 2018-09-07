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
                            <h5>GIỚI THIỆU CHUNG VỀ CUỘC THI XSTARTUP</h5>
                            <div style="text-align: justify;">
                                XStartup là một sự kiện đáng chú ý nhất trong năm 2018. Đây là cuộc thi khởi nghiệp dành riêng cho các bạn trẻ trên toàn quốc.
                                <br><br>
                                XStartup - nơi khiến những ý tưởng đang ấp ủ thành hiện thực. Với mục đích ươm mầm những dự án khởi nghiệp, giúp những bạn trẻ thực hiện được ước mơ của mình, cuộc thi muốn thấy sức trẻ trong thế hệ mới - một thế hệ DÁM NGHĨ - DÁM LÀM và LÀM ĐƯỢC.
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
                    <div class="col-12 col-md-7 col-lg-7 offset-md-1 mt-5">
                        <div class="content-text">
                            <h6>Cuộc thi dành cho đối tượng:</h6>
                            <p>Độ tuổi trên 18 tuổi.</p>
                            <p>*Lưu ý:</p>
                            <ul>
                                <li>Mỗi thí sinh chỉ được tham gia 01 đội thi.</li>
                                <li>Các ý tưởng, dự án đã từng đoạt giải tại các cuộc thi khởi nghiệp không được tham
                                    gia.
                                </li>
                                <li>Các sản phẩm, dịch vụ, dự án đã đăng ký kinh doanh không được tham gia.</li>
                                <li>Mọi sai phạm khi phát hiện, BTC được phép hủy quyền dự thi của ứng viên.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h2 class="section-label">Thể lệ</h2>

                <div class="row mt-5">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true">VÒNG 1</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                               role="tab" aria-controls="v-pills-profile" aria-selected="false">VÒNG 2</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                               role="tab" aria-controls="v-pills-messages" aria-selected="false">VÒNG 3</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                               role="tab" aria-controls="v-pills-settings" aria-selected="false">VÒNG 4</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Vòng 1 -->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div class="content-text"><h4>Ý TƯỞNG (27/08/2018 – 10/10/2018)</h4>

                                    <div class="content-text">
                                        <p>Lịch trình Vòng 1:
                                            <br>
                                            Thời gian: Thí sinh chính thức nộp hồ sơ từ ngày <b>10/09/2018 –
                                                05/10/2018</b>
                                        </p>
                                        <b>Hình thức:</b>
                                        <ul>
                                            <li>Thi online, đăng ký và nộp ý tưởng thông qua website
                                                http://xstartup.zikzak-co.vn
                                            </li>
                                            <li>Nộp ý tưởng tham gia cho BTC bằng cách điền thông tin trên vào Form
                                                đăng ký trên website
                                            </li>
                                            <li>Bản tóm tắt ý tưởng kinh doanh (File PDF theo Mẫu: <a style="color: var(--text-4);"
                                                        href="https://docs.google.com/document/d/1KjKAwC8LrFn4uIXk6mSq1LORQU0E1u6JCKwJ8Upszo0/edit?usp=sharing">Tóm
                                                    tắt ý tưởng kinh doanh mẫu</a>)
                                            </li>
                                            <li>Video giới thiệu Nhóm và Ý tưởng (Video dài 3 - 5 phút). Nội dung video
                                                bao gồm: Giới thiệu nhóm, thành viên, ý tưởng, tính khả thi, tính vận
                                                hành, tính thực tế của ý tưởng.
                                            </li>
                                        </ul>
                                        <p><b>Kết quả Vòng 1</b>: Công bố 60 dự án nổi bật nhất (30 đội khu vực miền Bắc và 30 đội khu vực miền Nam) ngày 10/10/2018</p>
                                        <b>Lưu ý:</b>
                                        <ul>
                                            <li>Những dự án hợp lệ là những dự án đã điền đầy đủ thông tin và gửi
                                                video
                                            </li>
                                            <li>Không giới hạn số lượng đội thi tham gia, 01 thành viên chỉ được tham gia 01 đội thi
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Vòng 2 -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">
                                <div class="content-text">
                                    <h4>LAN TỎA (11/10/2018 – 29/10/2018)</h4>
                                    <b>Hình thức:</b>
                                    <ul>
                                        <li>Thi Online, video của các đội tham dự qua Vòng 1 sẽ được đăng tải trên
                                            Fanpage Zikzak co-working Space kèm theo tên <b>Nhóm</b> và <b>Mã số dự
                                                thi</b>. Các đội sẽ có nhiệm vụ Like, Share, tăng độ lan tỏa ý tưởng của
                                            mình.
                                        </li>

                                        <li>60 đội có điểm số cao nhất sẽ đi tiếp vào Vòng 2 (30 đội khu vực miền
                                            Bắc và 30 đội khu vực miền Nam)
                                        </li>

                                        <li>Điểm số sẽ 50% do khán giả bình chọn và 50% do BGK chấm điểm. Điểm số tối
                                            đa 1 đội đạt được là 60 điểm
                                        </li>
                                    </ul>

                                    <p><b>Cách tính điểm cụ thể như sau:</b></p>
                                    <ul>
                                        <li>Về bình chọn của khán giả:
                                            <ul>
                                                <li>- Đầu tiên các post của các đội sẽ được tính điểm như sau:
                                                    <br>
                                                    Like = 1đ; thả tim = 2đ; comment = 3đ; share = 5đ
                                                    <br>
                                                    Sau đó tổng điểm số đạt sẽ được quy đổi về thang điểm 30.
                                                </li>

                                                <li>- Đội nào đạt số like/comment/share cao nhất sẽ dành 30 điểm; tương
                                                    ứng đội
                                                    thấp nhất sẽ dành 1 điểm
                                                </li>
                                            </ul>
                                        </li>
                                        <li>Về điểm số của BGK:
                                            <ul>
                                                <li>- Điểm số tối đa của 1 BGK chấm cho 1 đội sẽ là 30 điểm.</li>
                                                <li>- Sau khi 4 BGK chấm điểm cho 1 đội, số điểm đó sẽ chia cho 4 để ra
                                                    kết quả
                                                    chấm điểm cuối cùng của tổ BGK cho đội đó.
                                                </li>
                                            </ul>
                                        </li>

                                        <li>Xếp hạng:</b> thang điểm 60</li>
                                        <li>Điểm số cuối cùng cho 1 đội = Bình chọn khán giả + chấm điểm của BGK</li>
                                    </ul>
                                    <p><b>Lưu ý:</b> Nếu phát hiện gian lận (Like, Comment, Share), BTC được phép hủy
                                        quyền dự thi của ứng viên.</p>

                                    <div class="notify-text">Kết quả Vòng 2: chỉ 20 đội sẽ bước vào vòng 3 (10 đội khu
                                        vực miền Bắc và 10 đội khu vực miền Nam)
                                    </div>
                                </div>
                            </div>

                            <!-- Vòng 3 -->
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">
                                <div class="content-text">
                                    <h4>BÙNG NỔ (01/11/2018 – 15/11/2018)</h4>
                                    <p><b>Lịch trình Vòng 3</b></p>
                                    <ul>
                                        <li>Vòng 3 bắt đầu từ 01/11/2018</li>
                                        <li>12/11/2018 Các đội khu vực miền Bắc trình bày, phản biện dự án kinh doanh
                                            của mình trước BGK tại Tầng 5, Tòa nhà Diamond Flower, số 1 Hoàng Đạo Thúy, Thanh Xuân, Hà Nội.
                                        </li>
                                        <li>15/11/2018 Các đội khu vực miền Nam trình bày, phản biện dự án kinh doanh
                                            của mình trước BGK tại tại Tòa nhà Cphone, số 456 Xô Viết Nghệ Tĩnh, Phường 25, Quận Bình Thạnh, TP. HCM.
                                        </li>
                                        <li>17/11/2018 Thông báo kết quả cho 06 đội vào Chung Kết.</li>
                                    </ul>

                                    Các đội có nhiệm vụ chuẩn bị cho vòng 3:
                                    <ul>
                                        <li>Slide thuyết trình tập trung về sản phẩm, tính khả thi, tính thực tế của ý
                                            tưởng
                                        </li>
                                        <li>Demo sản phẩm (nếu có)</li>
                                        <li>Tổng quan kế hoạch kinh doanh</li>
                                    </ul>

                                    <p><b>Hình thức:</b></p>
                                    Thi Offline tại 2 khu vực miền Bắc và miền Nam
                                    <br>
                                    Tổng số đội: 20 đội, trong đó có 10 đội khu vực miền Bắc và 10 đội khu vực miền Nam.
                                    <br>
                                    Các đội có 10 phút để trình bày và 10 phút phản biện ý tưởng sản phẩm và kế hoạch
                                    của mình trước BGK

                                </div>
                            </div>

                            <!-- Vòng 4 -->
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                 aria-labelledby="v-pills-settings-tab">
                                <div class="content-text">
                                    <h4>NHÂN TỐ X (18/11/2018 – 24/12/2018)</h4>

                                    <p><b>Lịch trình Vòng 4:</b></p>
                                    <ul>
                                        <li>Từ 24/11/2018 – 23/12/2018 Các đội hoàn thiện nội dung chuẩn bị cho vòng
                                            Chung Kết.
                                        </li>
                                        <li>24/12/2018 Vòng 4: Nhân tố X</li>
                                    </ul>
                                    <b>*Công tác chuẩn bị:</b>
                                    <br>
                                    Để chuẩn bị cho Vòng 4: Các đội sẽ phải hoàn thiện:
                                    <ul>
                                        <li>BẢN KẾ HOẠCH KINH DOANH CHI TIẾT</li>
                                        <li>BẢNG CÂN ĐỐI TÀI CHÍNH</li>
                                        <li>THIẾT KẾ BỘ NHẬN DIỆN THƯƠNG HIỆU</li>
                                        <li>TVC QUẢNG BÁ Ý TƯỞNG/ SẢN PHẨM</li>
                                        <li>SẢN PHẨM MẪU</li>
                                    </ul>
                                    <b>Hình thức:</b>
                                    <ul>
                                        <li>6 đội thi lọt vào vòng Chung Kết sẽ đối đầu trực tiếp với nhau và thuyết
                                            phục BGK, các vị khách mời, các nhà đầu tư cùng 1000 khán giả để giành lấy
                                            ngôi vị Quán quân danh giá.
                                        </li>
                                        <li>Nội dung thi: thí sinh thuyết trình về dự án trong 20 phút, sau đó phản biện
                                            với Hội đồng giám khảo trong vòng 20 phút.
                                        </li>
                                    </ul>
                                    <b>*Lưu ý:</b> Lịch trình chi tiết cũng như nội dung các vòng thi có thể được thay
                                    đổi cho phù hợp với điều kiện và tình hình thực tế. Thí sinh phải cam kết tham gia
                                    đầy đủ các phần thi do BTC yêu cầu.
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
                               aria-controls="v-home" aria-selected="true">01 giải nhất</a>
                            <a class="nav-link" id="v-profile-tab" data-toggle="pill" href="#v-profile" role="tab"
                               aria-controls="v-profile" aria-selected="false">01 giải nhì</a>
                            <a class="nav-link" id="v-messages-tab" data-toggle="pill" href="#v-messages" role="tab"
                               aria-controls="v-messages" aria-selected="false">01 giải ba</a>
                            <a class="nav-link" id="v-settings-tab" data-toggle="pill" href="#v-settings" role="tab"
                               aria-controls="v-settings" aria-selected="false">03 giải khuyến khích</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 offset-md-1">
                        <div class="tab-content" id="v-tabContent">
                            <!-- Giải nhất -->
                            <div class="tab-pane fade show active" id="v-home" role="tabpanel"
                                 aria-labelledby="v-home-tab">
                                <div class="content-text">
                                    <h4>Tổng giá trị giải thưởng: 300.000.000 VNĐ</h4>
                                    <ul>
                                        <li>Tiền mặt: 50.000.000 VNĐ</li>
                                        <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                        <li>01 năm sử dụng miễn phí dịch vụ chỗ ngồi tại Zikzak co-working Space cho cả
                                            đội
                                        </li>
                                        <li>01 năm sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                        <li>01 năm book phòng miễn phí trên Ctogo</li>
                                        <li>Quà tặng đến từ CGroup + kỷ niệm chương + giấy chứng nhận</li>
                                        <li>01 khóa học tiếng anh với người bản ngữ 01 năm</li>
                                        <li>Được lên Tạp chí Việt Nam Hội nhập (Tạp chí in + E-magazine)</li>
                                        <li>Chuyến đi seminar tại Singapore</li>
                                        <li>CGroup đầu tư dự án startup</li>
                                        <li>Được hỗ trợ truyền thông trong 06 tháng</li>
                                        <li>Được BQT CGroup làm mentor trong dự án startup</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Giải nhì -->
                            <div class="tab-pane fade" id="v-profile" role="tabpanel" aria-labelledby="v-profile-tab">
                                <div class="content-text">
                                    <h4>Tổng giá trị giải thưởng: 150.000.000 VNĐ</h4>
                                    <ul>
                                        <li>Tiền mặt: 6.000.000 VNĐ</li>
                                        <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                        <li>Voucher giảm giá 20% khi mua Cphone</li>
                                        <li>Tặng 03 tháng sử dụng miễn phí dịch vụ chỗ ngồi tại Zikzak co-working space
                                            cho cả đội
                                        </li>
                                        <li>03 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                        <li>Voucher giảm giá 30% khi book phòng trên Ctogo</li>
                                        <li>Quà tặng đến từ CGroup + kỷ niệm chương + giấy chứng nhận</li>
                                        <li>01 khóa học tiếng anh với người bản ngữ 03 tháng</li>
                                        <li>Được lên Tạp chí Việt Nam Hội nhập (Tạp chí in + E-magazine)</li>
                                        <li>Được đặc cách trở thành member CGroup</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Giải ba -->
                            <div class="tab-pane fade" id="v-messages" role="tabpanel" aria-labelledby="v-messages-tab">
                                <div class="content-text">
                                    <h4>Tổng giá trị giải thưởng: 60.000.000 VNĐ</h4>
                                    <ul>
                                        <li>Tiền mặt: 3.000.000 VNĐ</li>
                                        <li>Tặng mỗi thành viên chiếc điện thoại Cphone</li>
                                        <li>Voucher giảm giá 15% khi mua Cphone</li>
                                        <li>02 tháng sử dụng dịch vụ chỗ ngồi miễn phí tại Zikzak co-working Space</li>
                                        <li>02 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                        <li>Voucher giảm giá 15% khi book phòng trên Ctogo</li>
                                        <li>Quà tặng đến từ CGroup + kỷ niệm chương + giấy chứng nhận</li>
                                        <li>01 khóa học tiếng anh với người bản ngữ 02 tháng</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Giải khuyến khích -->
                            <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
                                <div class="content-text">
                                    <h4>Tổng giá trị dành cho mỗi đội: 30.000.000 VNĐ</h4>
                                    <ul>
                                        <li>Tiền mặt: 1.000.000 VNĐ</li>
                                        <li>Voucher giảm giá 50% khi mua Cphone</li>
                                        <li>01 tháng sử dụng dịch vụ chỗ ngồi miễn phí tại Zikzak co-working Space</li>
                                        <li>01 tháng sử dụng dịch vụ hosting, domain, vps tại Ctech</li>
                                        <li>Quà tặng đến từ CGroup + kỷ niệm chương + giấy chứng nhận</li>
                                        <li>Voucher giảm giá 10% khi book phòng trên Ctogo</li>
                                        <li>01 khóa học tiếng anh với người bản ngữ 01 tháng</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <h5 class="note">Tất cả các đội thi lọt vào vòng bán kết được hỗ trợ 1.000.000 đồng.</h5>
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
                                    <p>Bài dự thi về kế hoạch kinh doanh, BTC sẽ cung cấp bản sao cho BGK và người phụ
                                        trách liên quan và yêu cầu các cá nhân này không được lập thêm bất kỳ bản sao
                                        nào. Phần giới thiệu tóm tắt kế hoạch kinh doanh của các thí sinh sẽ được xem
                                        như là một bản tóm tắt và được phổ biến rộng rãi cũng như được dùng trong tài
                                        liệu liên quan cuộc thi.</p>
                                </div>
                            </div>

                            <div class="d-flex mt-5">
                                <div class="flag"><img
                                            src="{{ asset('local/resources/assets/guest/image') }}/document.png"></div>
                                <div class="content-text">
                                    <h4>Cam kết</h4>
                                    <p>Khi tham gia cuộc thi này, các ứng viên đồng ý với việc BTC phát sóng trực tiếp,
                                        phỏng vấn, chụp ảnh, thu âm, quay phim và công bố triển lãm hoặc tái sản xuất để
                                        sử dụng cho phần tin tức, tường thuật, cho các mục đích quảng bá, các chương
                                        trình truyền hình, quảng cáo, bao gồm trên trang web hoặc dưới bất kỳ hình thức
                                        nào. BTC cùng các đối tác và tất cả những bên liên quan được miễn trách đối với
                                        bất kỳ trách nhiệm nào phát sinh từ việc chụp hình, ghi âm, ghi hình hoặc công
                                        bố các hình hình chụp, bản ghi âm, ghi hình từ sự kiện này.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop