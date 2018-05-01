<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Send an Enquiry here</h2>
                <form>
                    <div class="group">
                        <input type="text" required id="name">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="name">Name</label>
                    </div>
                    <div class="group">
                        <input type="text" required id="emailId">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="emailId">Email</label>
                    </div>
                    <div class="group">
                        <input type="number" required id="contact">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="contact">Contact Number</label>
                    </div>
                    <div class="group">
                        <textarea row="3" required id="messege"></textarea>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="messege">Messege</label>
                    </div>
                </form>
                <p>Copyright ©2017</p>
            </div>
            <div class="col-md-12">
                <ul>
                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-github"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/js/typeit.min.js"></script>
<script src="plugins/js/jquery.lazy.min.js"></script>
<script src="plugins/js/circles.min.js"></script>
<script src="js/main.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });

</script>
</body>
</html>