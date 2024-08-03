let currentIndex = 0; // Chỉ số của ảnh hiện tại

// Hàm để thay đổi ảnh chính
function changeImage(imageSrc) {
    document.getElementById('mainImage').src = imageSrc;
    currentIndex = Array.from(document.querySelectorAll('.thumbnails img')).findIndex(img => img.src === imageSrc);
}

// Hàm để chuyển đến ảnh trước đó
function prevImage() {
    currentIndex = (currentIndex === 0) ? document.querySelectorAll('.thumbnails img').length - 1 : currentIndex - 1;
    document.getElementById('mainImage').src = document.querySelectorAll('.thumbnails img')[currentIndex].src;
}

// Hàm để chuyển đến ảnh tiếp theo
function nextImage() {
    currentIndex = (currentIndex === document.querySelectorAll('.thumbnails img').length - 1) ? 0 : currentIndex + 1;
    document.getElementById('mainImage').src = document.querySelectorAll('.thumbnails img')[currentIndex].src;
}

// Thêm sự kiện click cho các ảnh thumbnail
function addClickEventToImages() {
    const thumbnailImages = document.querySelectorAll('.thumbnails img');
    thumbnailImages.forEach(function(img) {
        img.addEventListener('click', function() {
            changeImage(img.src);
        });
    });
}

// Gọi hàm để thêm sự kiện click cho các ảnh thumbnail
addClickEventToImages();
