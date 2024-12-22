import axios from "axios";

var quill = new Quill("#editor-container", {
    theme: "snow", // Có thể chọn 'bubble' hoặc 'snow'
    placeholder: "Nhập nội dung tại đây...",
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, false] }],
            ["bold", "italic", "underline"],
            ["image", "code-block"],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }], // chỉ số trên và dưới
            [{ align: [] }],
            ["link", "blockquote", "code-block"],
            ["clean"],
        ],
    },
});

// Lấy dữ liệu từ Quill và lưu vào input hidden trước khi submit form
document.querySelector("form").onsubmit = async function (e) {
    e.preventDefault();
    // lấy nội dung bài viet
    var content = document.querySelector("#content");
    content.value = quill.root.innerHTML;
    // const getdata = document.querySelector(".getdata");
    // getdata.innerHTML = content.value;

    const response = await fetch("{{ route('quill.store') }}", {
        method: "POST",
        headers: {
            "content-type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
        body: JSON.stringify({
            content: content,
        }),
    });
    if (response.ok) {
        const result = await response.json();
        console.log(result);

        alert(result.message);
    } else {
        const error = await response.json();
        console.error("Lỗi:", error);

        alert(error.message);
    }
};
