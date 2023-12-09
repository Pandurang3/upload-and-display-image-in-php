<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <title>Admin - Dashboard | Uniqbizz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- App js -->
        <!-- <script src="../assets/js/plugin.js"></script> -->

        <!-- Plugins css -->
        <link href="../assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
        <style>
            #preview img{
                width: 100%;
                height: auto;
            }

            #image_preview{
                height: 200px;
                width: 200px;
            }

            input::file-selector-button {
                background-image: linear-gradient(
                    to right,
                    #ff7a18,
                    #af002d,
                    #319197 100%,
                    #319197 200%
                );
                background-position-x: 0%;
                background-size: 200%;
                border: 0;
                border-radius: 8px;
                color: #fff;
                padding: 1rem 1.25rem;
                text-shadow: 0 1px 1px #333;
                transition: all 0.25s;
            }
                input::file-selector-button:hover {
                background-position-x: 100%;
                transform: scale(1.1);
            }
        </style>
</head>
<body>
    <div class="row">
        <form id="submit_form">
            <div class="col-md-6" id="upload_section" >
                <label for="">Profile</label><br/>
                <input type="file" name="file" id="upload_file">
            </div><br/>
            <input type="submit" name="upload_button" id="upload_btn" value="Upload" style="width: 20%">
        </form>
        <br/>
        <div id="preview" style="display: none;">
            <h3>Image Preview</h3>
            <div id="image_preview">
                <img  alt="Preview" id="img_pre">
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <!-- <script src="assets/js/pages/dashboard.init.js"></script> -->

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <script>
        $(document).ready(function(){
            $("#submit_form").on("submit", function(e){
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url : "../../uploads/uploadWithSubmitBtn.php",
                    type : "POST",
                    data : formData,
                    contentType : false,
                    processData : false,
                    success: function(data){
                        $("#preview").show();
                        // $("#image_preview").html(data);
                        $("#img_pre").attr("src","../../uploads/"+data);
                        // $("#upload_file").val('');
                    }
                });
            });
        });
    </script>

</body>
</html>