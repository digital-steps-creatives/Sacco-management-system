import swal from "sweetalert2";

class Confirmation {
	confirm(text, title = "Are you sure?") {
		return new Promise((resolve = () => {}, reject = () => {}) => {
			swal(
				this.props({
					text,
					title,
					type: "warning",
					showCancelButton: true
				})
			)
				.then(result => (result.value ? resolve() : null))
				.catch(error => reject(error));
		});
	}
	props(aditions) {
		return {
			type: "info",
			confirmButtonText: "Okay",
			cancelButtonText: "No, cancel!",
			confirmButtonClass: "btn btn-primary",
			cancelButtonClass: "btn btn-danger",
			buttonsStyling: false,
			...aditions
		};
	}
}

export { Confirmation };
