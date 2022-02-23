$(document).ready(function () {

    function upload_image_handler(blobInfo, success, failure, progress) {
        var xhr, formData, token;

        token = document.querySelector('meta[name="csrf-token"]').content;
        xhr = new XMLHttpRequest();
        xhr.open('POST', urlTinymceUpdateImage, true);
        // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        xhr.setRequestHeader('X-CSRF-TOKEN', token);

        xhr.upload.onprogress = function (e) {
            progress(e.loaded / e.total * 100);
        };

        xhr.onload = function () {
            var json;

            if (xhr.status === 403) {
                failure('HTTP Error: ' + xhr.status, {remove: true});
                return;
            }

            if (xhr.status < 200 || xhr.status >= 300) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        xhr.onerror = function () {
            failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);

    }


    0 < $("#elm1").length && tinymce.init({
        selector: "textarea#elm1",
        images_upload_handler: upload_image_handler,
        height: 300,
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [{
            title: "Bold text",
            inline: "b"
        }, {
            title: "Red text",
            inline: "span",
            styles: {
                color: "#ff0000"
            }
        }, {
            title: "Red header",
            block: "h1",
            styles: {
                color: "#ff0000"
            }
        }, {
            title: "Example 1",
            inline: "span",
            classes: "example1"
        }, {
            title: "Example 2",
            inline: "span",
            classes: "example2"
        }, {
            title: "Table styles"
        }, {
            title: "Table row 1",
            selector: "tr",
            classes: "tablerow1"
        }]
    })

    $(".summernote").summernote({
        height: 300,
        minHeight: null,
        maxHeight: null,
        focus: !0
    })


});