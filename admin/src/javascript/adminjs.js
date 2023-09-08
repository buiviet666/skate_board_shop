function getId(event, id_product) {
    // Lấy thẻ <a> bằng cách sử dụng event.target
    var link = event.target;

    // In ra giá trị id
    console.log("ID của liên kết là: " + id_product);

    let modalId = "modal_fix-" + id_product;
    let modal = document.getElementById(modalId);
    modal.classList.add("show");
}

function hideModal(event, id_product) {
    event.preventDefault();

    // Tạo id của phần tử modal tương ứng
    var modalId = "modal_fix-" + id_product;

    // Lấy phần tử modal dựa trên id
    var modal = document.getElementById(modalId);

    modal.classList.remove("show");
}


// variable
let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");
let closeBtn = document.querySelectorAll(".btn");

// EventListener
btn.addEventListener("click", () => {
    modal.classList.add("show");
});

closeBtn.forEach((eachBtn) => {
    eachBtn.addEventListener("click", () => {
        modal.classList.remove("show");
    });
});

window.onclick = function (event) {
    if (event.target == modal) {
        modal.classList.remove("show");
    }
};

// Get all the anchor elements with the class "fill-input"
const fillInputLinks = document.querySelectorAll(".fill-input");
const inputProducer = document.getElementById("input_value_producer");
const inputIdProducer = document.getElementById("id_producer");

// Thêm sự kiện click cho các phần tử anchor
fillInputLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
        event.preventDefault(); // Ngăn chặn liên kết điều hướng

        // Lấy giá trị 'id_producer' và 'name_producer' từ thuộc tính dữ liệu của phần tử anchor đã nhấp
        const dataId = link.getAttribute("data-id");
        const dataName = link.getAttribute("data-name");

        // Đặt giá trị của trường input 'input_value_producer' thành 'name_producer' (hiển thị)
        // và giá trị của trường input ẩn 'id_producer' thành 'id_producer' (giá trị)
        inputProducer.value = dataName;
        inputIdProducer.value = dataId;
    });
});

// Tùy chọn: Gửi biểu mẫu khi nút được nhấp
document.getElementById("myForm").addEventListener("submit", function (event) {
    // Bạn có thể thêm xử lý gửi biểu mẫu bổ sung ở đây nếu cần.
    // Theo mặc định, biểu mẫu sẽ được gửi với giá trị 'id_producer' đã điền.
});