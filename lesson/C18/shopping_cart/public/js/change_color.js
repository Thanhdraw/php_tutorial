// Lặp qua các phần tử
var links = document.querySelectorAll('#main li a');

// Lặp qua từng phần tử và thêm sự kiện click
links.forEach(function (link) {
    link.addEventListener('click', function (event) {
        // Ngăn chặn hành vi mặc định của thẻ a
        event.preventDefault();

        // Đổi màu cho thẻ a được nhấn
        this.style.color = getRandomColor();
    });
});

// Hàm trả về một màu ngẫu nhiên
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}