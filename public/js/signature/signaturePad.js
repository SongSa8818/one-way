function signatureCustom() {
    var canvas = document.getElementById("signature");
    var signaturePad = new SignaturePad(canvas);

    $('#clear-signature').on('click', function () {
        signaturePad.clear();
    });

    $('#save-signature').on('click', function () {
        var showImage = document.getElementById("image_signature");
        var dataURL = signaturePad.toDataURL('image/png');
        showImage.src = dataURL;
        document.getElementById("input_signature").value = dataURL;
    });
}