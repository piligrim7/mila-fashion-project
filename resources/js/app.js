import './bootstrap';

import.meta.glob([
	'../images/**',
	// '../fonts/**',
]);

//import '../css/bootstrap.min.css';
// import '../css/bootstrap.min.css.map';
// import '../css/jquery.fancybox.min.css';
import '../css/app.css';
// import '../css/flowbite.min.css';

//import '..sass/app.scss';

document.addEventListener('DOMContentLoaded', function () {
	let burger = document.getElementById('burger');
	burger.addEventListener('click', function () {
		burger.classList.toggle('open');
	})
})
