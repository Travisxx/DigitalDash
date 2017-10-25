window.onload = function() {

init();

}

function init() {

	var openClick = false;
	var searchBar = document.getElementById("searchicon").addEventListener("click", addSearchBar);

	function addSearchBar() {
		
		var parent = document.getElementById("webnav");
		var addSearchChild = document.createElement('div');
		addSearchChild.setAttribute("class", "pure-u-1")
		addSearchChild.setAttribute("id", "searchbar");
		var searchBarArray = ["<form ><input type=\"text\" name=\"email\" placeholder=\"Search...\"><input type=\"submit\" name=\"submit\"></form>"];
		addSearchChild.innerHTML = searchBarArray;
		parent.appendChild(addSearchChild);
		var openClick = true;
		removeClick(openClick);
		
		}

	function removeClick(openClick, searchbar) {
		if (openClick = true) {
			searchBar = document.getElementById("searchicon").removeEventListener("click", addSearchBar);
			openClick = false;
		}


	var toggleOpen = false;
	var toggleClick = document.getElementById("filtericon").addEventListener("click", showFilters);

	function showFilters() {
		console.log("clicked");
		}

	}	


}
