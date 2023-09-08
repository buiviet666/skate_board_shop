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
