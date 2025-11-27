document.getElementById("downloadBtn").addEventListener("click", () => {
    const link = document.createElement("a");
    link.href = "Jaysham_CV.pdf";  
    link.download = "JaySham_Resume.pdf";
    link.click();
});

document.querySelector(".contact-form").addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Message Sent! (Front-end only)");
});
