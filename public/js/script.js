// alert for edit, delete, and update.
const flashData = $(".flash-data").data("flash");
const flashTitle = $(".flash-data").data("title");
const flashIcon = $(".flash-data").data("icon");

if (flashData) {
	Swal.fire({
		title: flashTitle,
		icon: flashIcon,
		text: flashData,
		confirmButtonColor: "#7952B3",
		confirmButtonText: "Ok, got it!",
		background: "#F4F4F2",
	});
}
//----------------------------------------------------------------------------

// confirm delete
$("#delete").on("click", function (e) {
	e.preventDefault();
	Swal.fire({
		title: "Delete Confirm",
		text: "Are you sure you want to delete this anime?",
		icon: "question",
		showCancelButton: true,
		confirmButtonColor: "#007BFF",
		confirmButtonText: "Yes",
		cancelButtonColor: "#DC3545",
		cancelButtonText: "No",
		background: "#F4F4F2",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = $(this).parents("form").attr("action");
		}
	});
});
//----------------------------------------------------------------------------

// preview image when updating or inserting anime
function previewImage() {
	const poster = document.getElementById("poster");
	const imgPrev = document.querySelector(".preview-poster");
	const filePoster = new FileReader();
	filePoster.readAsDataURL(poster.files[0]);
	filePoster.onload = function (e) {
		imgPrev.src = e.target.result;
	};
}
//----------------------------------------------------------------------------

// table responsibility
$(document).on("scroll", function () {
	const table = $(".table");

	let w = window.innerWidth;

	if (w <= 992) {
		table.addClass("table-responsive");
	} else {
		table.removeClass("table-responsive");
	}
});
