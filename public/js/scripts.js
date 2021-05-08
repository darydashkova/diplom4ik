document.addEventListener("DOMContentLoaded", function() {

    let scroll = $('.table-block__page5-scroll').height();
    if (scroll < 300) {
        $('.table-block__page5-scroll').addClass('table-block__page5_padding');
    } else {
        $('.table-block__page5-scroll').addClass('scroll');
    }


    $('#vhod').click(function (e) {
        let log = $(this).parents('.main-page2-container');
        let logchild = $(log).find('#login');
        let logpass = $(log).find('#pass');
        let valLogchild = logchild.val();
        let valLogpass = logpass.val();
        if (valLogchild == '' && valLogpass == '') {
            e.preventDefault();
            $(logchild).addClass('border-arror');
            $(logpass).addClass('border-arror');
        } else {

        }
    })
    $('.model-choise').addClass('disNon');
    $('#kategoria').blur(function () {
        let values = $(this).val();
        if (values != '') {
            let parent = $(this).parents('.main-page3-container__block-img');
            let child = $(parent).find('#' + values);
            $('.model-choise').addClass('disNon');
            $(child).removeClass('disNon');
            if (values == 'stulia') {
                let child = $(parent).find('#material option');
                for (let item of child) {
                    $(item).addClass('disNon');
                    if (item.value == 'derevo') {
                        $(item).removeClass('disNon');
                    } else if (item.value == 'plastic') {
                        $(item).removeClass('disNon');
                    } else {
                        $(item).addClass('disNon');
                    }
                }
            } else if (values == 'stoli') {
                let child = $(parent).find('#material option');
                for (let item of child) {
                    $(item).addClass('disNon');
                    if (item.value == 'derevo') {
                        $(item).removeClass('disNon');
                    } else if (item.value == 'plastic') {
                        $(item).removeClass('disNon');
                    } else {
                        $(item).addClass('disNon');
                    }
                }
                let child2 = $(parent).find('#nabivka option');
                for (let elem of child2) {
                    $(elem).addClass('disNon');
                    if (elem.value == '') {
                        $(elem).removeClass('disNon');
                    } else {
                        $(elem).addClass('disNon');
                    }
                }
                $(child2).addClass('disNon');
            } else {
                let child = $(parent).find('#material option');
                for (let item of child) {
                    $(item).removeClass('disNon');
                }
            }
        } else {
            $('.model-choise').addClass('disNon');
        }

    });
    /*	$('#addButton').click(function(e){
            $('.main-page3-container__block').addClass('disNon');

        });*/
    $("#date").mask("99.99.9999");


});

