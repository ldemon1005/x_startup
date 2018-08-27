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

$("#login").validate({
    ignore: [],
    rules: {
        'email': {
            required: true
        },
        'password': {
            required: true,
        }
    },
    messages: {
        'email': {
            required: 'Vui lòng nhập tên đăng nhập'
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