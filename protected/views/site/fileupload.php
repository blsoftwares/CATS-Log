<script src="<?php echo Yii::app()->baseUrl;?>/js/resumablejs/resumable.js" type="application/javascript"></script>
<section role="main" class="content-body">
					<header class="page-header">
						<h2>CA|TS Log Site Assessment</h2>
                        <?php echo SiteRegister::model()->siteManagerStage(Yii::app()->user->userid);?>
					</header>

                        
                        
                          <div class="row">
                          
                            <div class="panel-body">       
                          
       

        <div class="col-lg-offset-2 col-lg-8">
            <button type="button" class="btn btn-success" aria-label="Add file" id="add-file-btn">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add file
            </button>
            <button type="button" class="btn btn-info" aria-label="Start upload" id="start-upload-btn">
                <span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Start upload
            </button>
            <button type="button" class="btn btn-warning" aria-label="Pause upload" id="pause-upload-btn">
                <span class="glyphicon glyphicon-pause " aria-hidden="true"></span> Pause upload
            </button>
        </div>


        <div class="col-lg-offset-2 col-lg-8">
        
        <div id="filelist"></div>
        
            <p>
                <div class="progress hide" id="upload-progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"   style="width: 0%">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </p>
        </div>
    
    </div>
    
    
    </div>
    
    
                     
                        
                        </section>
                        
                         <script>
						 
						 var size;
						 
    var r = new Resumable({
        target: '/demo/upload.php',
        testChunks: true
    });

    r.assignBrowse(document.getElementById('add-file-btn'));

    $('#start-upload-btn').click(function(){
        r.upload();
    });

    $('#pause-upload-btn').click(function(){
        if (r.files.length>0) {
            if (r.isUploading()) {
              return  r.pause();
            }
            return r.upload();
        }
    });

    var progressBar = new ProgressBar($('#upload-progress'));

    r.on('fileAdded', function(file, event){
		size=file.size/1048576;
		size=Math.round(size*100)/100;
		document.getElementById('filelist').innerHTML += '<div id="' + file.uniqueIdentifier + '">' + file.fileName + ' (' +size + ') <b id="progress"></b></div>';
		console.log(file);
        progressBar.fileAdded();
    });

    r.on('fileSuccess', function(file, message){
        progressBar.finish();
    });

    r.on('progress', function(){
        progressBar.uploading(r.progress()*100);
        $('#pause-upload-btn').find('.glyphicon').removeClass('glyphicon-play').addClass('glyphicon-pause');
    });

    r.on('pause', function(){
        $('#pause-upload-btn').find('.glyphicon').removeClass('glyphicon-pause').addClass('glyphicon-play');
    });

    function ProgressBar(ele) {
        this.thisEle = $(ele);

        this.fileAdded = function() {
            (this.thisEle).removeClass('hide').find('.progress-bar').css('width','0%');
        },

        this.uploading = function(progress) {
			var totp=Math.round(progress*100)/100;
			var uploadsize=progress*size/100;
			uploadsize=Math.round(uploadsize*100)/100;
			document.getElementById("progress").innerHTML = '<span>' + totp + " %  ("+uploadsize+" MB / "+size+" MB)</span>";
            (this.thisEle).find('.progress-bar').attr('style', "width:"+progress+'%');
        },

        this.finish = function() {
			document.getElementById("progress").innerHTML = '<span> Finished </span>';
			
            (this.thisEle).addClass('hide').find('.progress-bar').css('width','0%');
			document.getElementById('filelist').innerHTML='';
        }
    }
</script>