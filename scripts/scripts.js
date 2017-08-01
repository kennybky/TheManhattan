$(document).ready(function () {
            $(document).focus;
            $(".menubar").click(function displayMenu() {
                var menu = document.getElementsByClassName('blog-sidebar');
                var menubar = document.getElementById('side-bar-nav');
                var hide = menubar.children[0]
                var show = menubar.children[1];
				for (var i = 0; i < menu.length; i++) {
                if (menu[i].style.visibility == "") {
                    menu[i].style.visibility = "hidden";
                }
                if (menu[i].style.visibility == "hidden") {
                    menu[i].style.visibility = "visible";
                    hide.style.display = "block";
					show.style.display = "none";
					console.log(hide.style.display);
                } else {
                    menu[i].style.visibility = "hidden";
                    hide.style.display = "none";
					show.style.display = "block";
					console.log(show.style.display);
                }
				}
            });
        });
		