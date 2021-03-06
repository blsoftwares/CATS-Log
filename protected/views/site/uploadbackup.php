<style>
.drop-zone {
    text-align:center;
    border:2px dashed #ccc;
}
.danger, .danger:hover {
    background-color: #e74c3c;
}
.inverse, .inverse:hover {
    background-color: #34495e;
}
input[type="file"] {
    height:32px;
}
div[data-nothingToUpload] {
    display:none;
}
.deleteFile {
    padding: 3px 7px;
    color: #bf0000;
    font-weight: bold;
    cursor:pointer;
}
button {
    border: none;
    cursor: pointer;
    background: #bdc3c7;
    color: #ffffff;
    padding: 9px 12px 10px;
    line-height:1.333;
    text-decoration: none;
    text-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-transition: 0.25s;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
}
.meter {
    color:#fff;
    line-height:18px;
    font-size:12px;
}
</style>

<section role="main" class="content-body">

					<header class="page-header">

						<h2>CA|TS Log Site Assessment</h2>

                        <?php echo SiteRegister::model()->siteManagerStage(Yii::app()->user->userid);?>

					</header>
					<div class="row">
<!-- production -->
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/resumable.js"></script>

<div class="row">
    <div class="large-12 columns">
        <p class="lead">Select files to upload</p>
        <button class="inverse small" id="browseButton">+ Add Files</button>
        <button class="danger small" id="uploadFiles">Start Upload</button>
        <div class="alert-box alert" data-nothingToUpload>Error Nothing To Upload, Please Add Some Files</div>
        <div id="dragHere" class="panel drop-zone">Drag &amp; Drop Here</div>
        <div id="results" class="panel"></div>Status:
        <div class="alert-box secondary"></div>
    </div>
</div>

<script>
(function () {
    var r = new Resumable({
        target: '/echo/json/',
        query: {},
        maxChunkRetries: 2,
        maxFiles: 3,
        prioritizeFirstAndLastChunk: true,
        simultaneousUploads: 4,
        chunkSize: 1 * 1024 * 1024
    });
    var results = $('#results'),
        draggable = $('#dragHere'),
        uploadFile = $('#uploadFiles'),
        browseButton = $('#browseButton'),
        nothingToUpload = $('[data-nothingToUpload]');


    // if resumable is not supported aka IE
    if (!r.support) location.href = 'http://browsehappy.com/';

    r.assignBrowse(browseButton);
    r.assignDrop(draggable);

    r.on('fileAdded', function (file, event) {
        var template =
            '<div data-uniqueid="' + file.uniqueIdentifier + '">' +
            '<div class="fileName">' + file.fileName + ' (' + file.file.type + ')' + '</div>' +
            '<div class="large-6 right deleteFile">X</div>' +
            '<div class="progress large-6">' +
            '<span class="meter" style="width:0%;"></span>' +
            '</div>' +
            '</div>';

        results.append(template);
    });

    uploadFile.on('click', function () {
        if (results.children().length > 0) {
            r.upload();
        } else {
            nothingToUpload.fadeIn();
            setTimeout(function () {
                nothingToUpload.fadeOut();
            }, 3000);
        }
    });

    $(document).on('click', '.deleteFile', function () {
        var self = $(this),
            parent = self.parent(),
            identifier = parent.data('uniqueid'),
            file = r.getFromUniqueIdentifier(identifier);

        r.removeFile(file);
        parent.remove();
    });


    r.on('fileProgress', function (file) {
        var progress = Math.floor(file.progress() * 100);
        $('[data-uniqueId=' + file.uniqueIdentifier + ']').find('.meter').css('width', progress + '%');
        $('[data-uniqueId=' + file.uniqueIdentifier + ']').find('.meter').html('&nbsp;' + progress + '%');
    });

    r.on('fileSuccess', function (file, message) {
        $('[data-uniqueId=' + file.uniqueIdentifier + ']').find('.progress').addClass('success');
    });


    r.on('uploadStart', function () {
        $('.alert-box').text('Uploading....');
    });

    r.on('complete', function () {
        $('.alert-box').text('Done Uploading');
    });

})();
</script>


 </div>

                     

                        

                        </section>