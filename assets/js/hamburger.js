document
	.querySelector('.mobile-nav-toggle')
	.addEventListener('click', function () {
		var menu = document.querySelector('nav .header-menu');
		menu.classList.toggle('show');

		var toggleIcon = document.querySelector('.mobile-nav-toggle');
		if (toggleIcon.classList.contains('bi-list')) {
			toggleIcon.classList.remove('bi-list');
			toggleIcon.classList.add('bi-x');
		} else {
			toggleIcon.classList.remove('bi-x');
			toggleIcon.classList.add('bi-list');
		}
	});
