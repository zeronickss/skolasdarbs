   function openPop(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closePop() {
            var modals = document.getElementsByClassName('modal');
            for (var i = 0; i < modals.length; i++) {
                modals[i].style.display = "none";
            }
        }

        window.onclick = function(event) {
            if (event.target.className === 'modal') {
                closePop();
            }
        }
