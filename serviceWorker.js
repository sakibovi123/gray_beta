const staticGGlink = "GGLink-site-v1";
const assets = [
    "/index.php",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",
    "/assets/vendor/themify-icons/themify-icons.min.css",
    "/assets/vendor/flag-icon/css/flag-icon.min.css",
    "/assets/vendor/bootstrap/css/bootstrap.min.css" ,
    "/assets/styles/adminlte.min.css" ,
    "/assets/vendor/owl-carousel/assets/owl.carousel.min.css" ,
    "/assets/vendor/jquery-ui/jquery-ui.min.css",
    "/assets/vendor/simplePagination/simplePagination.min.css",
    "https://fonts.googleapis.com/css2?family=Cabin&family=Roboto&display=swap",
    "/assets/styles/page-style.css?v=19",
    "/assets/styles/style.css?v=26" ,
    "/assets/styles/custom.css" ,
    "/assets/styles/gdrp.css" ,
    "/assets/vendor/jquery/jquery.min.js",
    "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "/assets/scripts/adminlte.min.js",
    "/assets/vendor/owl-carousel/owl.carousel.min.js",
    "/assets/scripts/custom.min.js?v=3",
    "/assets/scripts/gdrp.js",
    "/assets/scripts/gdrp-msg.js",
];

self.addEventListener("install", installEvent => {
    installEvent.waitUntil(
        caches.open(staticGGlink).then(cache => {
            cache.addAll(assets);
        })
    );
});

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
        caches.match(fetchEvent.request).then(res => {
            return res || fetch(fetchEvent.request);
        })
    );
});