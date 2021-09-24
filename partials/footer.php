
<footer>
        <article class="container">
            <h4><a href="index.php"><i class="fas fa-hiking"></i>&nbsp;Hiking shop</a></h4>
            <nav>
            <ul>
            <li>
                <a href="index.php" class="<?php if($page == 'home') {echo 'active';}?>">Home</a>
            </li>
            <li>
                <a href="products.php" class="<?php if($page == 'products') {echo 'active';}?>">Products</a>
            </li>
            <li>
                <a href="about.php" class="<?php if($page == 'about') {echo 'active';}?>">About us</a>
            </li>
            <li>
                <a href="contact.php" class="<?php if($page == 'contact') {echo 'active';}?>">Contact us</a>
            </li>
        </ul> 
            </nav>
            <div class="icons">
                <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-pinterest"></i></a>
            </div>
        </article>
        <article>
            <p>&copy; Hiking shop 2021.</p>
        </article>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>