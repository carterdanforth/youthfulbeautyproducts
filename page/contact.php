
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" slick-uniqueid="3"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" media="all">


<html lang="en">
    <head>

    <script language="JavaScript1.2">



    function disableselect(e){
    return false
    }

    function reEnable(){
    return true
    }

    //if IE4+
    document.onselectstart=new Function ("return false")

    //if NS6
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
    </script>



    <SCRIPT LANGUAGE="JavaScript1.1">


    </script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Beauty Product Testing (Results)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Feeling Beautiful Skin Care application">

    <link href="/include/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="/include/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/include/css/dev.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body id="confirmation">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                        <div class="reservation-timer">
                        <strong>Warning!</strong> 
                        <img class="places-flag" src="/include/img/US.gif">
                        Currently there are only <span class="label label-important">9</span> Deals remaining in 
                        America:
                        Apply now to be accepted.
                        </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row title-row">
                <span class="span12">
                <h1 class="entry-title td-page-title">
                    <span>Contact Us</span>
                </h1>
            </span>
            </div>
            
            <div class="row content">
                <p>Youthful Beauty Products</p>
                <p>500 3rd Street</p>
                <p>San Francisco, CA 94107</p>
                <p>Phone:  (415) 817-1068</p>
                <p>Email: <a href="mailto:contact@youthfulbeautyproducts.org">contact@youthfulbeautyproducts.org</a></p>  
            </div>
        </div>
        <?php include('../footer.php'); ?>
    </body>
</html>
