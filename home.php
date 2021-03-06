<?php 

require_once('components/templates/header.php'); ?>
   
    <main class="container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/parque.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="assets/img/hospital.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/img/postotorres.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        
    
        
    </main>

    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/hospital.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, 
                        nulla reiciendis. Ea at, sed, ab repellat culpa nihil excepturi 
                        molestias tempora error facere optio eaque. Magni nesciunt veritatis 
                        repudiandae numquam.</p>
                </div>
        
                <div class="col-md-4">
                    <img src="assets/img/parque.png" alt="s">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, 
                        nulla reiciendis. Ea at, sed, ab repellat culpa nihil excepturi 
                        molestias tempora error facere optio eaque. Magni nesciunt veritatis 
                        repudiandae numquam.</p>
                </div>
    
                <div class="col-md-4">
                    <img src="assets/img/postotorres.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, 
                        nulla reiciendis. Ea at, sed, ab repellat culpa nihil excepturi 
                        molestias tempora error facere optio eaque. Magni nesciunt veritatis 
                        repudiandae numquam.</p>
                </div>
        </div>
    </div>

<?php require_once('components/templates/footer.php'); ?>