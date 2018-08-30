{
    setTimeout(() => document.body.classList.add('render'), 60);
    const navdemos = Array.from(document.querySelectorAll('nav.demos > .demo'));
    const total = navdemos.length;
    const current = navdemos.findIndex(el => el.classList.contains('demo--current'));
    const navigate = (linkEl) => {
        document.body.classList.remove('render');
        document.body.addEventListener('transitionend', () => window.location = linkEl.href);
    };
    navdemos.forEach(link => link.addEventListener('click', (ev) => {
        ev.preventDefault();
        navigate(ev.target);
    }));
    document.addEventListener('keydown', (ev) => {
        const keyCode = ev.keyCode || ev.which;
        let linkEl;
        if (keyCode === 37) {
            linkEl = current > 0 ? navdemos[current - 1] : navdemos[total - 1];
        }
        else if (keyCode === 39) {
            linkEl = current < total - 1 ? navdemos[current + 1] : navdemos[0];
        }
        else {
            return false;
        }
        navigate(linkEl);
    });
    imagesLoaded('.glitch__img', {background: true}, () => {
        document.body.classList.remove('loading');
        document.body.classList.add('imgloaded');
    });
}

$("#create_question").validate({
    ignore: [],
    rules: {
        'fullname': {
            required: true
        },
        'email': {
            required: true,
            email: true
        },
        'content': {
            required: true,
        }
    },
    messages: {
        'fullname': {
            required: 'Vui lòng nhập họ và tên'
        },
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'content': {
            required: 'Vui lòng nhập nội dung câu hỏi'
        }
    }
});

$("#login_form").validate({
    ignore: [],
    rules: {
        'email': {
            required: true,
            email: true
        },
        'password': {
            required: true,
        }
    },
    messages: {
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'password': {
            required: 'Vui lòng nhập mật khẩu'
        }
    }
});

$("#register").validate({
    ignore: [],
    rules: {
        'fullname': {
            required: true
        },
        'email': {
            required: true,
            email : true
        },
        'password': {
            required: true,
        },
        'password_1': {
            required: true,
            equalTo: "#password"
        },
        'card_id': {
            required: true
        },
        'phone': {
            required: true
        },
    },
    messages: {
        'fullname': {
            required: 'Vui lòng nhập họ và tên'
        },
        'email': {
            required: 'Vui lòng nhập email',
            email: 'Email không đúng định dạng'
        },
        'password': {
            required: 'Vui lòng nhập mật khẩu',
        },
        'password_1': {
            required: 'Vui lòng xác nhận lại mật khẩu',
            equalTo: "Mật khẩu nhập lại không đúng"
        },
        'card_id': {
            required: 'Vui lòng nhập số chứng minh nhân dân'
        },
        'phone': {
            required: 'Vui lòng nhập số điện thoại'
        },
    }
});

$("#group_create_client").validate({
    ignore: [],
    rules: {
        'group[name]': {
            required: true,
        },
        'license': {
            required: true,
        }
    },
    messages: {
        'group[name]': {
            required: 'Vui lòng nhập email',
        },
        'license': {
            required: 'Bạn chưa chấp nhận các điều khoản của cuộc thi'
        }
    }
});

$("#add-member").validate({
    ignore: [],
    rules: {
        'email': {
            required: true,
            email: true
        }
    },
    messages: {
        'email': {
            required: 'Bạn vui lòng nhập email',
            email: 'Email không đúng định dạng'
        }
    }
});

$("#info_project").validate({
    ignore: [],
    rules: {
        'group[name_topic]': {
            required: true
        },
        'group[career]': {
            required: true
        },
        'group[description]': {
            required: true
        },
        'group[url_video]': {
            required: true
        },
        'group[type_product]': {
            required: true
        },
        'group[source]': {
            required: true
        }
    },
    messages: {
        'group[name_topic]': {
            required: 'Vui lòng nhập tên dự án'
        },
        'group[career]': {
            required: 'Vui lòng chọn ngành nghề'
        },
        'group[description]': {
            required: 'Vui lòng nhập mô tả'
        },
        'group[url_video]': {
            required: 'Vui lòng chọn video'
        },
        'group[type_product]': {
            required: 'Vui lòng chọn loại sản phẩm'
        },
        'group[source]': {
            required: 'Vui lòng chọn nguồn thông tin'
        }
    }
});





function changeImage(input) {
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            var str = "background-image: url(" + e.target.result + ");";
            $('#avatar_img').attr('style',str)

        };
        reader.readAsDataURL(input.files[0]);
    }
}

$('#upload_avatar').click(function () {
    $('#img').click();
})


$('.user').click(function() {
    $('#header .dropdown ul').slideToggle();
});