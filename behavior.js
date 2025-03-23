document.addEventListener("DOMContentLoaded", function () {
    var thumbnailElement = document.getElementById("smart_thumbnail");

    // Add an event listener to the image
    thumbnailElement.addEventListener("click", function () {
        if (thumbnailElement.className === "") {
            // If the image doesn't have any class, make it smaller
            thumbnailElement.className = "small"; // Add the 'small' class to make it smaller
        } else {
            // If the image has the 'small' class, remove it (make the image big again)
            thumbnailElement.className = ""; // Remove the class to return it to its original size
        }
    });
});
