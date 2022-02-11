const container = document.querySelector('.menu__sorting')

container.addEventListener('click', function(e) {
	const items = document.querySelectorAll('.item-sorting')
	const target = e.target
  Array.from(items).forEach(item => {
  	item.classList.remove('button-active')
  })
  target.classList.add('button-active')
})