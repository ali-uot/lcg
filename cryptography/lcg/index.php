
<!DOCTYPE html>
<html lang="en" dir="ltr" id="top_page">
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="../design/img/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Linear Congruential Generator </title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="../design/my_font.css" />
<link rel="stylesheet" type="text/css" href="../design/cards.css" />

<style>
body{
    font-family: 'Droid Arabic Kufi', sans-serif;
    background:#DCDCDC;
    margin-top:20px;
}

.my_img{
    width:130px;
}
.counters{
    font-size:16px;
}
.no_decoration{
    text-decoration:none;
    color:#000;
}
.pagination{
    font-size:16px;
    display: -ms-flexbox;
    flex-wrap: wrap;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}
.main_title{
    background:#416a59;
    color:#fff;
    padding: 20px;
    font-size:24px;
    margin-bottom:20px;
}
.sub_title{
    background:#73a24e;
    color:#472a08;
    padding: 20px;
    font-size:24px;
    margin-bottom:20px;
}
@media only screen and (min-width:100px){
	.nav_img{
		width:30px;
	}
    .my_img{
        width:90px;
    }
    .counters{
        font-size:12px;
    }
    .pagination{
        font-size:12px;
    }
}
@media only screen and (min-width:500px){
	.nav_img{
		width:30px;
	}
    .my_img{
        width:90px;
    }
    .counters{
        font-size:12px;
    }
    .pagination{
        font-size:12px;
    }
}
@media only screen and (min-width:700px){
	.nav_img{
		width:30px;
	}
    .my_img{
        width:100px;
    }
    .counters{
        font-size:14px;
    }
    .pagination{
        font-size:14px;
    }
}
@media only screen and (min-width:900px){
	.nav_img{
		width:30px;
	}
    .my_img{
        width:120px;
    }
    .counters{
        font-size:16px;
    }
    .pagination{
        font-size:16px;
    }
}
@media only screen and (min-width:1000px){
	.nav_img{
		width:30px;
	}
    .my_img{
        width:130px;
    }
    .counters{
        font-size:16px;
    }
    .pagination{
        font-size:16px;
    }
}
.nav-link{
    font-weight:700;
}

.zoom {
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(2.5); 
}
</style>

</head>
<body>



<div class="container" >
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../design/img/logo.png" class="nav_img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" href="index.php">LCG</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>

    <?php
    include('../design/header.php');
    ?>
</div>

<div class="content m-4">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <!--<a href="en.php" class="no_decoration">!-->
                    <div class="text-center main_title">
                        Linear Congruential Generator
                    </div>
                <!--</a>!-->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a href="en.php" class="no_decoration">
                    <div class="text-center sub_title">
                        Encryption
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="de.php" class="no_decoration">
                    <div class="text-center sub_title">
                        Decryption
                    </div>
                </a>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="text-center ">
                    <div class="member-card pt-2 pb-2">

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12">
                                    <div class="mt-3">
                                        <h4><i class="fa fa-duotone fa-eye"></i></h4>
                                        <p class="mb-0 text-muted counters">By MSc Student: Ali Qassim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>

<div class="modal fade mod_marg"  id="warning" role="dialog" dir="ltr">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" id="modal_head">
                <h5 class="modal-title" id="dialog_title" style="color:#fff;"></h5>
            </div>
            <div class="modal-body" style="text-align:left;">
                <p id="dialog_content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>