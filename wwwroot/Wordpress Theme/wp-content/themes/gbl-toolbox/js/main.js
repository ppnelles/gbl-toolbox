function accessTrigger(){

        var menu = document.getElementById('access');   
        menu.setAttribute('class','close');


        document.getElementById('access-trigger').onclick = function() {
            if (menu.className == 'close') {
                menu.className = 'open';
            }

            else if (menu.className == 'open') {
                menu.className = 'close';
            }

        }



        if (screen.width > 768) {
             menu.setAttribute('class','close');
        }    

}



function init() {
    accessTrigger(); 
}



window.onload = init;