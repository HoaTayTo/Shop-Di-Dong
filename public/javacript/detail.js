document.addEventListener("DOMContentLoaded", function () {
    const addressForm = document.getElementById('address_form');
    const closeFormButton = document.getElementById('close_form');
    const addressFormContent = document.querySelector('.address_form_content');
    const xemThemLink = document.getElementById('xemThem');
    const extraKhuyenMai = document.querySelector('.extra_khuyen_mai');

    addressForm.addEventListener('click', function () {
        addressFormContent.style.display = 'block';
    });

    closeFormButton.addEventListener('click', function () {
        addressFormContent.style.display = 'none';
    });

    xemThemLink.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        if (extraKhuyenMai.style.display === 'none' || extraKhuyenMai.style.display === '') {
            extraKhuyenMai.style.display = 'block';
            xemThemLink.textContent = 'Thu gọn';
        } else {
            extraKhuyenMai.style.display = 'none';
            xemThemLink.textContent = 'Xem thêm';
        }
    });

    const checkboxes = document.querySelectorAll('.product-checkbox');
    const totalAmountElement = document.getElementById('total-amount');
    let totalAmount = 0;

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const productPrice = parseFloat(this.getAttribute('data-price'));
            if (this.checked) {
                totalAmount += productPrice;
            } else {
                totalAmount -= productPrice;
            }
            totalAmountElement.textContent = new Intl.NumberFormat('vi-VN').format(totalAmount) + 'đ';
        });
    });
})
