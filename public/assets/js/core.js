var form_array = {};

var added_object = false;
var oId;
$(function () {
    let wwidth = $(window).width();
    let wheight = $(window).height();
    console.log("width: " + wwidth);

    if (wwidth < 527) {
        console.log("ismobile");
        $('#brand-holland').html("H");
        $('#brand-gambia').html("G")


    } else {
        $('#brand-holland').html("Holland");
        $('#brand-gambia').html("Gambia");
    }
    var isMobile = false; //initiate as false
// device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }

    if (isMobile) {
        console.log("ismobile");
        $('#brand-holland').html("H");
        $('#brand-gambia').html("G")


    }
    window.onresize = function(event) {

        console.log("resizing!");


        let wwidth = $(window).width();
        let wheight = $(window).height();
        console.log("width: " + wwidth);

        if (wwidth < 527) {
            console.log("ismobile");
            $('#brand-holland').html("H");
            $('#brand-gambia').html("G")


        } else {
            $('#brand-holland').html("Holland");
            $('#brand-gambia').html("Gambia");
        }
    };
    $(document).ajaxSend(function () {

        $("#spinner-div").fadeIn(300);
        setTimeout(function() {
            $("#spinner-div").fadeOut(300);
        }, 600)
    });

    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        var $radio = $('input[type=radio],input[type=checkbox]', this);
        $.each($radio, function () {
            if (!o.hasOwnProperty(this.name)) {
                o[this.name] = '';
            }
        });
        return o;
    };

    $( "#spinner-div" )
        .ajaxStart(function() {
            $( this ).show();
        })
        .ajaxStop(function() {
            $( this ).hide();
        });

    function saveForm(that) {
        var obj = $("#" + that.attr('id')).serializeObject();
        console.log("That.attr('id') = " + that.attr('id'));
        console.dir(obj);
        return obj;
    }

    console.log("document ready!");


    console.log("jquery works!");

    var that;
    var serializedObject = {};
    $('#addObjectForm').on('submit', function (ev) {
        console.log("form submit!");
        ev.preventDefault();
        console.log("event.target = " + ev.target);
        serializedObject = saveForm($(this));
        var form_selector = $(this);
        console.log(Object.keys(serializedObject).length);

        // for (var item in serializedObject) {
        // }
        $(serializedObject).add({name: 'object_type', value: $('#realEstateObjectType').val()});


        form_array['object_type'] = $('#realEstateObjectType').val();

        console.log("Item just pushed to form_array: " + form_array.object_type);

        $.each(serializedObject, function (key, value) {
            console.log("KEY: " + key + " => VALUE: " + value);
            form_array[key] = value;
        })


        $.ajax({
            type: 'POST',
            url: '../../bin/add_object.php',
            data: form_array,
            success: function (data) {
                console.log("SUCCES! return data from add_object.php = " + data);

                // window.location.href = '?#portfolio';
            }
        }).done(function (datas) {
            // setTimeout(function () {
            //     $("#overlay").fadeOut(300);
            // }, 500);
            console.log("AJAX request 'add_object.php is now  in .done(function(){})");
            console.log("AJAX .done return data: " + datas);

            form_selector.parent('div').slideUp("fast");
            console.log("form_selector.attribute('id'): " + form_selector.attr('id'));
            form_selector.find(':input').prop('disabled', true);
            form_selector.parent('div').slideDown("fast");



            var arr = datas.split(",");
            console.log(arr);
            // var object_type = obj[':object_type'];
            console.log("ARR: " + arr[2]);
            var object_type = arr[2].split(":")[2].replace('"', '').replace('"','');
            console.log("Object type from arr[2].split(:)[2] = " + object_type);
            var arr_length = arr.length;
            var object_id = arr[arr_length -1].split(":")[1].replace('"', '').replace('"','').replace('}', '');
            console.log("object id = " + object_id);

            // $('#forms_container').append('<div class="data_result_form_container row">' + '<div class="col-12">' +
            //     '<form class="row g-3" id="data_result_form"' +
            //     '' +
            //     '</div></div>');



            $('#upload_images_container').slideDown("slow");

            added_object = true;
            oId = object_id;
        });

        var uploadFormButton = $('#btn_upload');

        uploadFormButton.on('submit click', function(ev) {
            ev.preventDefault();

            if (added_object) {
                upload_images_after_new_insert(oId);
            } else {
                // window.location.href
            }

        })


        function upload_images_after_new_insert(id = false) {
            console.log("fn.upload_images_after_insert");

            var form_data = new FormData();
            let input_files = $('#upload_form').find('input:File')[0];

            // Read selected files
            var totalfiles = input_files.files.length;

            console.log("Total files:  " + totalfiles);

            for (var index = 0; index < totalfiles; index++) {
                form_data.append("files[]", input_files.files[index]);
            }


            var object_id = id

            console.log("OBJECT_ID = " + object_id);

            form_data.append('id', object_id);


            // var carousel_selector = $(this).closest('.modal').find('.carousel').find('.carousel-inner');
            //
            // var carousel_indicator_selector = $(this).closest('.modal').find('.carousel-indicators');
            //
            // var existing_no = $(this).closest('.modal').find('.carousel-indicators').find('li').length;
            //
            // console.log("existing no: " + existing_no);

            // AJAX request
            $.ajax({
                url: '../../bin/img_operations.php',
                type: 'post',
                data: form_data,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (response) {

                    // $('#upload_form').reset( . .);

                    // var addition = 0;
                    // console.log("response: " + response);
                    for (var index = 0; index < response[0].length; index++) {
                        var src = response[0][index];
                        var img_id = response[1][index];
                        // console.log("number_of_li_indicators prior: " + existing_no);
                        console.log("with id: " + img_id);

                        console.log("src: " + src);
                        // let active = (index === 0 && existing_no === 0) ? ' active' : '';
                        // carousel_selector.append('<div class="carousel-item' + active + '"><img class="d-block w-100 img-responsive" alt="image for slider" id="' + response[1][index] + '"src="' + src + '"></div>');
                        // carousel_indicator_selector.append('<li id="' + response[1][index] + '" data-target="#carouselExampleIndicators-' + object_id + '" data-slide-to="' + (existing_no + index) + '" class=""></li>')
                        // addition += 1;

                        // $('.carousel').each(function () {
                        //     $(this).carousel();
                        // });
                        setTimeout(function () {
                            console.log("now in delayu after successfully uploading one or more images.");
                            window.location.href = "/portfolio-details.php?object_id=" + object_id;
                        }, 2500);
                    }
                }
            }).done(function () {
                setTimeout(function () {
                    $("#overlay").fadeOut(300);
                }, 500);
            });
        }


    })

    $("#realEstateObjectType").on('change click', function () {
        var sel = $(this).val();

        console.log("selected value in selct box in new real estate obejct form: " + sel);

        var apartment_form_container = $('#apartment_form_container'),
            property_form_container = $('#property_form_container'),
            land_form_container = $('#land_form_container');

        switch (sel) {
            case 'Property':
                property_form_container.show("slow");
                land_form_container.hide();
                apartment_form_container.hide();
                $('')

                break;
            case 'Apartment':
                apartment_form_container.show("slow");
                property_form_container.hide();
                land_form_container.hide();
                break;
            case 'Land':
                land_form_container.show("slow");
                property_form_container.hide();
                apartment_form_container.hide();
                break;
            default:
                break;


        }
        //do something
        // alert (sel);
    })

    $('#POA2').on('click', function () {
        console.log("POA BUTTON CLICKED OR CHANGED; CURRENT (NEW) VALUE = " + $(this).prop('checked'));
        var value = $(this).prop('checked');
        if (value) {
            console.log("value from radio button 2has been determined TRUE!");
            $('form').find('#pricePropertyContainer').remove();
        } else {
            console.log("value from radio button2 has been determined FALSE!");
            // $(this).closest('.col-md-6').append('<div class="col-md-3" id="pricePropertyContainer"><label for="price" class="form-label">Prijs</label><input type="text" class="form-control" id="price" placeholder="prijs"/></div>');
        }
    })
    $('#POA').on('click', function () {
        console.log("POA BUTTON CLICKED OR CHANGED; CURRENT (NEW) VALUE = " + $(this).prop('checked'));
        var value = $(this).prop('checked');
        if (!value) {
            console.log("value from radio button has been determined TRUE!");
            $(this).closest('.col-md-6').append('<div class="col-md-6" id="priceContainer"><div class="form-floating"><input name="object_price" type="text" class="form-control" id="price" placeholder="prijs"/><label for="price" class="form-label">prijs</label></div></div>');
        } else {
            console.log("value from radio button has been determined FALSE!");
            $('form').find('#priceContainer').remove();
        }
    })


})
