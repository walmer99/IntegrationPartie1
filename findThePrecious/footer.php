    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About us</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fellows</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Join our army</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Reward conditions</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Join our army</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Sauron4Ever.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.wildcodeschool.com/">Wild Code School</a></u></p>
                    <p class="h6">copy All right Reserved.<a class="text-green ml-2" href="https://www.wildcodeschool.com" target="_blank"></a>
                    </p>
                </div>
            </div>
        </div>
        <a id="back-to-top" href="#header" class="btn btn-primary btn-lg back-to-top" role="button"
           title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
            <i class="fas fa-chevron-up"></i></a>
    </div>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
<!--Scoll up-->

<script>
    //Back to top links
    $(document).ready(function(){
        $('#back-to-top').click(function(e){
            e.preventDefault();
            const joinLink = $(this).attr('href');
            $('html').animate({
                scrollTop: ($(joinLink).offset().top)
            }, 'slow');
        });
    });
</script>
</body>
</html>


