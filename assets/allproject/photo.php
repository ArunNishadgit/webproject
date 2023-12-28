<link rel="stylesheet" href="./projectcss/photo.css">
<title>Mini Project</title>
<!--====== Gallery Section ======-->
<section id="gallery">
    <div class="container">

        <!-- Filterable Gallery -->
        <ul class="gallery_tabs">
            <li class="active" data-filter="all">All</li>
            <li data-filter="camera">Cameras</li>
            <li data-filter="laptop">Laptops</li>
            <li data-filter="mobile">Mobiles</li>
            <li data-filter="headphone">Headphones</li>
        </ul>

        <div class="gallery_wrapper">
            <div class="gallery_item camera">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT77uDBN1cFvBMH9IBs3DaDnh44-h0-H4V1Vw&usqp=CAU"
                    alt="img">
            </div>

            <div class="gallery_item headphone">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNG-ZEXRjvu3J-4UBAs1YZMfyhdLeZ0H6SQw&usqp=CAU"
                    alt="img">
            </div>

            <div class="gallery_item laptop">
                <img src="data:image/jpeg;base64,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"
                    alt="img">
            </div>

            <div class="gallery_item mobile">
                <img src="https://images.unsplash.com/photo-1596558450268-9c27524ba856?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bW9iaWxlc3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="img">
            </div>

            <div class="gallery_item laptop">
                <img src="data:image/jpeg;base64,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"
                    alt="img">
            </div>

            <div class="gallery_item camera">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReUse45hhW0GTK0l5kl69srUPIKeDGuP1yfA&usqp=CAU"
                    alt="img">
            </div>

            <div class="gallery_item headphone">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYmL1h_uRKhOnD4tc0Iz0Hv1-h7z1JF6bKmg&usqp=CAU"
                    alt="img">
            </div>

            <div class="gallery_item mobile">
                <img src="https://images.unsplash.com/photo-1557690267-fad2f168bb95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlc3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="img">
            </div>

            <div class="gallery_item laptop">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkeQOFMVIizYz3kdLxzfdeSpYIjDQYHvahklV8aF2bSxOakCgtsUF4tXim8O1tqdrm36M&usqp=CAU"
                    alt="img">
            </div>

            <div class="gallery_item headphone">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    alt="img">
            </div>

            <div class="gallery_item mobile">
                <img src="https://images.unsplash.com/photo-1551355738-1875b6664915?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bW9iaWxlc3xlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"
                    alt="img">
            </div>

            <div class="gallery_item camera">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS77_tyjSuKTYWxXhB44Sx9nSKqjU6EsKCCPLbQrTg2oL1UCEgmiP5WVBaD5SK8tIn1on0&usqp=CAU"
                    alt="img">
            </div>
        </div>

        <!-- Lightbox -->
        <div class="lightbox">
            <div class="lightbox_wrapper">
                <div class="lightbox_content">
                    <img src="" class="lightbox_img" alt="lightbox-img">
                </div>
            </div>
            <div class="lightbox_close">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</section>
<script src="./projectscript/photo.js"></script>