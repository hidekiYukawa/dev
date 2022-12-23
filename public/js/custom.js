// document is ready
$(function () {
    console.log("document is ready!");

    $('.btn-6')
        .on('mouseenter', function(e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        })
        .on('mouseout', function(e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        });
    // $('footer').slideUp("fast");

    $('#search_form').on('submit', function (ev) {
        // ev.preventDefault();
    })


    // $('#modal-container').on('click', function () {
    //     $(this).addClass('out');
    //     $('body').removeClass('modal-active');
    // })




    $('.logo').on('click', function (e) {
        // e.preventDefault();
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
        $('html, body').animate({
            scrollTop: 0
        }, 750, 'easeInOutQuad')
    });
// LINKS TO ANCHORS
    $('a[href^="#"]').on('click', function (event) {

        var $target = $(this.getAttribute('href'));

        if ($target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: $target.offset().top
            }, 750, 'easeInOutQuad');
        }
    });

// TOGGLE HAMBURGER & COLLAPSE NAV
    $('.nav-toggle').on('click', function () {
        $(this).toggleClass('open');
        $('.menu-left').toggleClass('collapse');
    });
// REMOVE X & COLLAPSE NAV ON ON CLICK
    $('.menu-left a').on('click', function () {
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    });

// SHOW/HIDE NAV

// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').eq(0).outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight / 2) {
            // Scroll Down
            $('header').eq(0).removeClass('show-nav').addClass('hide-nav');
            $('footer').removeClass('hide-footer').addClass('show-footer');
            $('.nav-toggle').removeClass('open');
            $('.menu-left').removeClass('collapse');
            // $('footer').slideDown("fast");
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').eq(0).removeClass('hide-nav').addClass('show-nav');
                $('footer').removeClass('show-footer').addClass('hide-footer')
                // $('footer').slideUp("fast");
            }
        }

        lastScrollTop = st;
    }
    $('#modal-xl').on('click', function(e) {
           $('#modal-fullscreen-xl').modal('show')
        }
    )

    $('#modal-footer-close').on('click', function (e) {
        $('#modal-fullscreen-xl').modal("hide")
    })

    const labels = document.querySelectorAll('.mb-6 label')


    labels.forEach(label => {
        label.innerHTML = label.innerText
            .split('')
            .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
            .join('')
    })
})

function getScrollHeight(elm){
    var savedValue = elm.value
    elm.value = ''
    elm._baseScrollHeight = elm.scrollHeight
    elm.value = savedValue
}

function onExpandableTextareaInput({ target:elm }){
    // make sure the input event originated from a textarea and it's desired to be auto-expandable
    if( !elm.classList.contains('autoExpand') || !elm.nodeName == 'TEXTAREA' ) return

    var minRows = elm.getAttribute('data-min-rows')|0, rows;
    !elm._baseScrollHeight && getScrollHeight(elm)

    elm.rows = minRows
    rows = Math.ceil((elm.scrollHeight - elm._baseScrollHeight) / 16)
    elm.rows = minRows + rows
}


// global delegated event listener
document.addEventListener('input', onExpandableTextareaInput)




// OLD SOLUTION USING JQUERY:
// // Applied globally on all textareas with the "autoExpand" class

// $(document)
//     .one('focus.autoExpand', 'textarea.autoExpand', function(){
//         var savedValue = this.value;
//         this.value = '';
//         this._baseScrollHeight = this.scrollHeight;
//         this.value = savedValue;
//     })
//     .on('input.autoExpand', 'textarea.autoExpand', function(){
//         var minRows = this.getAttribute('data-min-rows')|0, rows;
//         this.rows = minRows;
//         rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
//         this.rows = minRows + rows;
//     });
