let add = document.getElementById('Add');
let int = document.getElementById('counter');
let count = 0;

	Add.addEventListener('click', function(){
		count += 1;
		int.innerHTML = count;
	})